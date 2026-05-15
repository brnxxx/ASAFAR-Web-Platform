import os
import io
import json
import sys
import contextlib
from pathlib import Path

os.environ["DISABLE_IPV6"] = "1"
os.environ["TRANSFORMERS_OFFLINE"] = "1"
os.environ["HF_HUB_DISABLE_TELEMETRY"] = "1"
os.environ["PYTHONIOENCODING"] = "utf-8"

THRESHOLD_TOXIC = 0.60
THRESHOLD_AGGRESSIVE = 0.35
MODEL = None


def normalize_result_score(result):
    if not isinstance(result, dict):
        return 0.0

    numeric_values = []
    for value in result.values():
        try:
            numeric_values.append(float(value))
        except Exception:
            pass

    if not numeric_values:
        return 0.0

    return max(numeric_values)


def compute_label(score: float) -> str:
    if score >= THRESHOLD_TOXIC:
        return "toxic"
    if score >= THRESHOLD_AGGRESSIVE:
        return "aggressive"
    return "clean"


def get_model():
    global MODEL

    if MODEL is None:
        from detoxify import Detoxify
        with contextlib.redirect_stdout(io.StringIO()), contextlib.redirect_stderr(io.StringIO()):
            MODEL = Detoxify("multilingual")

    return MODEL


def analyze_items(items):
    valid_items = []
    texts = []

    for item in items:
        content = (item.get("content") or "").strip()
        if not content:
            continue

        valid_items.append(item)
        texts.append(content)

    if not texts:
        return {
            "threshold_toxic": THRESHOLD_TOXIC,
            "threshold_aggressive": THRESHOLD_AGGRESSIVE,
            "flagged": [],
            "details": []
        }

    model = get_model()
    predictions = model.predict(texts)

    details = []
    flagged = []

    total_items = len(texts)

    for index in range(total_items):
        item = valid_items[index]
        item_id = item.get("id")
        content = texts[index]

        prediction_for_item = {}
        for key, values in predictions.items():
            try:
                prediction_for_item[key] = float(values[index])
            except Exception:
                prediction_for_item[key] = 0.0

        score = normalize_result_score(prediction_for_item)
        label = compute_label(score)

        detail = {
            "id": item_id,
            "content": content,
            "score": round(score, 4),
            "label": label,
            "raw_scores": prediction_for_item
        }

        details.append(detail)

        if label == "toxic":
            flagged.append(detail)

    return {
        "threshold_toxic": THRESHOLD_TOXIC,
        "threshold_aggressive": THRESHOLD_AGGRESSIVE,
        "flagged": flagged,
        "details": details
    }


def main():
    if len(sys.argv) < 2:
        print(json.dumps({"error": "Missing input file"}, ensure_ascii=False))
        sys.exit(1)

    input_path = Path(sys.argv[1])

    if not input_path.exists():
        print(json.dumps({"error": "Input file not found"}, ensure_ascii=False))
        sys.exit(1)

    try:
        with open(input_path, "r", encoding="utf-8-sig") as f:
            payload = json.load(f)
    except Exception as e:
        print(json.dumps({
            "error": "Invalid JSON file",
            "details": str(e)
        }, ensure_ascii=False))
        sys.exit(1)

    if isinstance(payload, dict):
        items = [payload]
    elif isinstance(payload, list):
        items = payload
    else:
        print(json.dumps({"error": "Invalid JSON payload"}, ensure_ascii=False))
        sys.exit(1)

    try:
        result = analyze_items(items)
        print(json.dumps(result, ensure_ascii=False))
    except Exception as e:
        print(json.dumps({
            "error": "AI analysis failed",
            "details": str(e)
        }, ensure_ascii=False))
        sys.exit(1)


if __name__ == "__main__":
    main()
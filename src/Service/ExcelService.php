<?php

namespace App\Service;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExcelService
{
        /** @param array<int, array{id: mixed, sujet: string, type: string, statut: string, priorite: string, date: mixed, user: mixed, reponse: mixed}> $data */

    public function generate(array $data): string
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $headers = ['ID', 'Sujet', 'Type', 'Statut', 'Priorité', 'Date', 'User ID', 'Réponse Admin'];

        $col = 'A';
        foreach ($headers as $header) {
            $sheet->setCellValue($col . '1', $header);
            $col++;
        }

        $row = 2;
        foreach ($data as $item) {
            $sheet->setCellValue('A' . $row, $item['id']);
            $sheet->setCellValue('B' . $row, $item['sujet']);
            $sheet->setCellValue('C' . $row, $item['type']);
            $sheet->setCellValue('D' . $row, $item['statut']);
            $sheet->setCellValue('E' . $row, $item['priorite']);
            $sheet->setCellValue('F' . $row, $item['date']);
            $sheet->setCellValue('G' . $row, $item['user']);
            $sheet->setCellValue('H' . $row, $item['reponse']);
            $row++;
        }

        $writer = new Xlsx($spreadsheet);
        $file = tempnam(sys_get_temp_dir(), 'excel');
        $writer->save($file);

        return $file;
    }
}
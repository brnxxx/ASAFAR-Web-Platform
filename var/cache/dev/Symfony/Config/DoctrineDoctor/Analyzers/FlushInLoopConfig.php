<?php

namespace Symfony\Config\DoctrineDoctor\Analyzers;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FlushInLoopConfig 
{
    private $enabled;
    private $flushCountThreshold;
    private $timeWindowMs;
    private $_usedProperties = [];

    /**
     * Enable flush() in loop detection (anti-pattern)
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * Minimum number of flush calls to trigger detection
     * @default 5
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function flushCountThreshold($value): static
    {
        $this->_usedProperties['flushCountThreshold'] = true;
        $this->flushCountThreshold = $value;

        return $this;
    }

    /**
     * Time window in milliseconds to consider flushes as being in a loop
     * @default 1000
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function timeWindowMs($value): static
    {
        $this->_usedProperties['timeWindowMs'] = true;
        $this->timeWindowMs = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('enabled', $config)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $config['enabled'];
            unset($config['enabled']);
        }

        if (array_key_exists('flush_count_threshold', $config)) {
            $this->_usedProperties['flushCountThreshold'] = true;
            $this->flushCountThreshold = $config['flush_count_threshold'];
            unset($config['flush_count_threshold']);
        }

        if (array_key_exists('time_window_ms', $config)) {
            $this->_usedProperties['timeWindowMs'] = true;
            $this->timeWindowMs = $config['time_window_ms'];
            unset($config['time_window_ms']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['flushCountThreshold'])) {
            $output['flush_count_threshold'] = $this->flushCountThreshold;
        }
        if (isset($this->_usedProperties['timeWindowMs'])) {
            $output['time_window_ms'] = $this->timeWindowMs;
        }

        return $output;
    }

}

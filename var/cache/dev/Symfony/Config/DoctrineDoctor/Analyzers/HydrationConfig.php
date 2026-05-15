<?php

namespace Symfony\Config\DoctrineDoctor\Analyzers;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class HydrationConfig 
{
    private $enabled;
    private $rowThreshold;
    private $criticalThreshold;
    private $_usedProperties = [];

    /**
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
     * Number of rows to consider for hydration analysis
     * @default 99
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function rowThreshold($value): static
    {
        $this->_usedProperties['rowThreshold'] = true;
        $this->rowThreshold = $value;

        return $this;
    }

    /**
     * Number of rows to mark as critical
     * @default 999
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function criticalThreshold($value): static
    {
        $this->_usedProperties['criticalThreshold'] = true;
        $this->criticalThreshold = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('enabled', $config)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $config['enabled'];
            unset($config['enabled']);
        }

        if (array_key_exists('row_threshold', $config)) {
            $this->_usedProperties['rowThreshold'] = true;
            $this->rowThreshold = $config['row_threshold'];
            unset($config['row_threshold']);
        }

        if (array_key_exists('critical_threshold', $config)) {
            $this->_usedProperties['criticalThreshold'] = true;
            $this->criticalThreshold = $config['critical_threshold'];
            unset($config['critical_threshold']);
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
        if (isset($this->_usedProperties['rowThreshold'])) {
            $output['row_threshold'] = $this->rowThreshold;
        }
        if (isset($this->_usedProperties['criticalThreshold'])) {
            $output['critical_threshold'] = $this->criticalThreshold;
        }

        return $output;
    }

}

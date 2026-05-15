<?php

namespace Symfony\Config\DoctrineDoctor\Analyzers;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PartialObjectConfig 
{
    private $enabled;
    private $threshold;
    private $_usedProperties = [];

    /**
     * Detect queries loading full entities when partial objects would be more efficient
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
     * Minimum number of queries to trigger detection
     * @default 5
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function threshold($value): static
    {
        $this->_usedProperties['threshold'] = true;
        $this->threshold = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('enabled', $config)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $config['enabled'];
            unset($config['enabled']);
        }

        if (array_key_exists('threshold', $config)) {
            $this->_usedProperties['threshold'] = true;
            $this->threshold = $config['threshold'];
            unset($config['threshold']);
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
        if (isset($this->_usedProperties['threshold'])) {
            $output['threshold'] = $this->threshold;
        }

        return $output;
    }

}

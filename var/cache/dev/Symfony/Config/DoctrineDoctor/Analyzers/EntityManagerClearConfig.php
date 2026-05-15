<?php

namespace Symfony\Config\DoctrineDoctor\Analyzers;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class EntityManagerClearConfig 
{
    private $enabled;
    private $batchSizeThreshold;
    private $_usedProperties = [];

    /**
     * Enable EntityManager::clear() detection for batch operations
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
     * Minimum number of INSERT/UPDATE operations to trigger detection
     * @default 20
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function batchSizeThreshold($value): static
    {
        $this->_usedProperties['batchSizeThreshold'] = true;
        $this->batchSizeThreshold = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('enabled', $config)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $config['enabled'];
            unset($config['enabled']);
        }

        if (array_key_exists('batch_size_threshold', $config)) {
            $this->_usedProperties['batchSizeThreshold'] = true;
            $this->batchSizeThreshold = $config['batch_size_threshold'];
            unset($config['batch_size_threshold']);
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
        if (isset($this->_usedProperties['batchSizeThreshold'])) {
            $output['batch_size_threshold'] = $this->batchSizeThreshold;
        }

        return $output;
    }

}

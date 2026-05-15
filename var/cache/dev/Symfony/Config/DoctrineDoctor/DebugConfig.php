<?php

namespace Symfony\Config\DoctrineDoctor;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DebugConfig 
{
    private $enabled;
    private $internalLogging;
    private $_usedProperties = [];

    /**
     * Enable debug mode (verbose logging, detailed error messages). Keep disabled for production.
     * @default false
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
     * Enable internal logging for Doctrine Doctor analyzers. Can add ~133ms overhead. Enable only for debugging.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function internalLogging($value): static
    {
        $this->_usedProperties['internalLogging'] = true;
        $this->internalLogging = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('enabled', $config)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $config['enabled'];
            unset($config['enabled']);
        }

        if (array_key_exists('internal_logging', $config)) {
            $this->_usedProperties['internalLogging'] = true;
            $this->internalLogging = $config['internal_logging'];
            unset($config['internal_logging']);
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
        if (isset($this->_usedProperties['internalLogging'])) {
            $output['internal_logging'] = $this->internalLogging;
        }

        return $output;
    }

}

<?php

namespace Symfony\Config\DoctrineDoctor;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ProfilerConfig 
{
    private $showInToolbar;
    private $showDebugInfo;
    private $_usedProperties = [];

    /**
     * Show Doctrine Doctor in the Symfony profiler toolbar
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function showInToolbar($value): static
    {
        $this->_usedProperties['showInToolbar'] = true;
        $this->showInToolbar = $value;

        return $this;
    }

    /**
     * Show debug information (for bundle maintainers and debugging purposes)
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function showDebugInfo($value): static
    {
        $this->_usedProperties['showDebugInfo'] = true;
        $this->showDebugInfo = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('show_in_toolbar', $config)) {
            $this->_usedProperties['showInToolbar'] = true;
            $this->showInToolbar = $config['show_in_toolbar'];
            unset($config['show_in_toolbar']);
        }

        if (array_key_exists('show_debug_info', $config)) {
            $this->_usedProperties['showDebugInfo'] = true;
            $this->showDebugInfo = $config['show_debug_info'];
            unset($config['show_debug_info']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['showInToolbar'])) {
            $output['show_in_toolbar'] = $this->showInToolbar;
        }
        if (isset($this->_usedProperties['showDebugInfo'])) {
            $output['show_debug_info'] = $this->showDebugInfo;
        }

        return $output;
    }

}

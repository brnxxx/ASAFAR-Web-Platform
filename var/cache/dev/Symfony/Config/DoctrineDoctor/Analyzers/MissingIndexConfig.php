<?php

namespace Symfony\Config\DoctrineDoctor\Analyzers;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MissingIndexConfig 
{
    private $enabled;
    private $slowQueryThreshold;
    private $explainQueries;
    private $minRowsScanned;
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
     * Only run EXPLAIN on queries slower than this (ms)
     * @default 50
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function slowQueryThreshold($value): static
    {
        $this->_usedProperties['slowQueryThreshold'] = true;
        $this->slowQueryThreshold = $value;

        return $this;
    }

    /**
     * Execute EXPLAIN to detect missing indexes
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function explainQueries($value): static
    {
        $this->_usedProperties['explainQueries'] = true;
        $this->explainQueries = $value;

        return $this;
    }

    /**
     * Minimum rows scanned to suggest an index
     * @default 1000
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function minRowsScanned($value): static
    {
        $this->_usedProperties['minRowsScanned'] = true;
        $this->minRowsScanned = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('enabled', $config)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $config['enabled'];
            unset($config['enabled']);
        }

        if (array_key_exists('slow_query_threshold', $config)) {
            $this->_usedProperties['slowQueryThreshold'] = true;
            $this->slowQueryThreshold = $config['slow_query_threshold'];
            unset($config['slow_query_threshold']);
        }

        if (array_key_exists('explain_queries', $config)) {
            $this->_usedProperties['explainQueries'] = true;
            $this->explainQueries = $config['explain_queries'];
            unset($config['explain_queries']);
        }

        if (array_key_exists('min_rows_scanned', $config)) {
            $this->_usedProperties['minRowsScanned'] = true;
            $this->minRowsScanned = $config['min_rows_scanned'];
            unset($config['min_rows_scanned']);
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
        if (isset($this->_usedProperties['slowQueryThreshold'])) {
            $output['slow_query_threshold'] = $this->slowQueryThreshold;
        }
        if (isset($this->_usedProperties['explainQueries'])) {
            $output['explain_queries'] = $this->explainQueries;
        }
        if (isset($this->_usedProperties['minRowsScanned'])) {
            $output['min_rows_scanned'] = $this->minRowsScanned;
        }

        return $output;
    }

}

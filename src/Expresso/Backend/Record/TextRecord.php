<?php
/**
 * Expresso Backend - a generic interface for data recovering and persistence
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@serpro.gov.br>
 * @link      https://gitlab.com/expresso_livre/expresso for the canonical source repository
 * @copyright Copyright (c) 2016 SERPRO (http://www.serpro.gov.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Expresso\Backend\Record;

/**
 *
 * @package    Expresso
 * @subpackage Backend
 */
class TextRecord extends AbstractRecord
{
    /**
     * 
     * @param mixed $data
     * @param boolean $bypassFilters
     * @param boolean $convertDates
     */
    public function __construct($data = NULL, $bypassFilters = FALSE, $convertDates = TRUE)
    {
        throw new \Exception('Must be implemented');
    }

    /**
     * returns id property of this model
     *
     * @return string
    */
    public function getIdProperty()
    {
        throw new \Exception('Must be implemented');
    }

    /**
     * sets the record related properties from user generated input.
     *
     * Input-filtering and validation by Zend\Filter\Input can enabled and disabled
     *
     * @param array $data the new data to set
     * @throws ValidationException when content contains invalid or missing data
    */
    public function setFromArray(array $data)
    {
        throw new \Exception('Must be implemented');
    }

    /**
     * validate the the internal data
     *
     * @return bool
    */
    public function isValid()
    {
        throw new \Exception('Must be implemented');
    }

    /**
     * returns array of fields with validation errors
     *
     * @return array
    */
    public function getValidationErrors()
    {
        throw new \Exception('Must be implemented');
    }

    /**
     * returns array with record related properties
     *
     * @return array
    */
    public function toArray()
    {
        throw new \Exception('Must be implemented');
    }

    /**
     * returns an array with differences to the given record
     *
     * @param  RecordInterface $record record for comparism
     * @return array with differences field => different value
    */
    public function diff($record)
    {
        throw new \Exception('Must be implemented');
    }

    /**
     * check if two records are equal
     *
     * @param  RecordInterface  $record record for comparism
     * @param  array            $toOmit fields to omit
     * @return bool
    */
    public function isEqual($record, array $toOmit = array())
    {
        throw new \Exception('Must be implemented');
    }

    /**
     * translate this records' fields
     *
    */
    public function translate()
    {
        throw new \Exception('Must be implemented');
    }

    /**
     * check if the model has a specific field (container_id for example)
     *
     * @param string $field
     * @return boolean
    */
    public function has($field)
    {
        throw new \Exception('Must be implemented');
    }
}
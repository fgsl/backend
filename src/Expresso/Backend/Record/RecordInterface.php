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
interface RecordInterface
{
    /**
     * 
     * @param mixed $data
     * @param boolean $bypassFilters
     * @param boolean $convertDates
     */
    public function __construct($data = NULL, $bypassFilters = FALSE, $convertDates = TRUE);

    /**
     * sets identifier of record
     *
     * @param string identifier
     */    
    public function setId($id);

    /**
     * gets identifier of record
     *
     * @return string identifier
    */
    public function getId();

    /**
     * returns id property of this model
     *
     * @return string
    */
    public function getIdProperty();

    /**
     * gets application the records belongs to
     *
     * @return string application
    */
    public function getModule();

    /**
     * sets record related properties
     *
     * @param string name of property
     * @param mixed value of property
    */
    public function __set($name, $value);

    /**
     * unsets record related properties
     *
     * @param string name of property
    */
    public function __unset($name);

    /**
     * gets record related properties
     *
     * @param string name of property
     * @return mixed value of property
    */
    public function __get($name);

    /**
     * sets the record related properties from user generated input.
     *
     * Input-filtering and validation by Zend\Filter\Input can enabled and disabled
     *
     * @param array $data the new data to set
     * @throws ValidationException when content contains invalid or missing data
    */
    public function setFromArray(array $data);

    /**
     * Sets timezone
     *
     * @param string $timezone
     * @throws ValidationException
     * @return void
    */
    public function setTimezone($timezone);
    
    /**
     * validate the the internal data
     *
     * @return bool
    */
    public function isValid();
    
    /**
     * returns array of fields with validation errors
     *
     * @return array
    */
    public function getValidationErrors();

    /**
     * returns array with record related properties
     *
     * @return array
    */
    public function toArray();

    /**
     * returns an array with differences to the given record
     *
     * @param  RecordInterface $record record for comparism
     * @return array with differences field => different value
    */
    public function diff($record);

    /**
     * check if two records are equal
     *
     * @param  RecordInterface  $record record for comparism
     * @param  array            $toOmit fields to omit
     * @return bool
    */
    public function isEqual($record, array $toOmit = array());

    /**
     * translate this records' fields
     *
    */
    public function translate();

    /**
     * check if the model has a specific field (container_id for example)
     *
     * @param string $field
     * @return boolean
    */
    public function has($field);
}
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
abstract class AbstractRecord implements RecordInterface
{
    /**
     * 
     * @var string
     */
    protected $id = NULL;

    /**
     * 
     * @var string
     */
    protected $module = NULL;

    /**
     * 
     * @var array
     */
    protected $properties = array();

    /**
     * 
     * @var string
     */
    protected $timezone;

    /**
     * sets identifier of record
     *
     * @param string identifier
     */    
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * gets identifier of record
     *
     * @return string identifier
    */
    public function getId()
    {
        return $this->id;
    }

    /**
     * gets application the records belongs to
     *
     * @return string application
    */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Sets timezone
     *
     * @param string $timezone
     * @throws ValidationException
     * @return void
    */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
    }
}
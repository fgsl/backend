<?php
/**
 * Expresso Backend - a generic interface for data recovering and persistence
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@serpro.gov.br>
 * @link      https://gitlab.com/expresso_livre/expresso for the canonical source repository
 * @copyright Copyright (c) 2016 SERPRO (http://www.serpro.gov.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Expresso\Backend\Model;

/**
 * 
 * @package    Expresso
 * @subpackage Backend
 */
abstract class AbstractModel implements ModelInterface
{
    /**
     * @var string
     */
    protected $modelName = NULL;

    /**
     * @var array
     */
    protected $properties = array();

    /**
     * @var array
     */
    protected $filters = array();

    /**
     * @var array
     */
    protected $validators = array();

    /**
     * @var string
     */
    protected $idProperty = NULL;

    /**
     * (non-PHPdoc)
     * @see \Expresso\Backend\Model\ModelInterface::__get()
     */
    public function __get($name)
    {
        return $this->properties[$name];
    }

    /**
     * (non-PHPdoc)
     * @see \Expresso\Backend\Model\ModelInterface::__set()
     */
    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    /**
     * 
     * @return string
     */
    public function getModelName()
    {
        return $this->modelName;
    }

    /**
     * (non-PHPdoc)
     * @see \Expresso\Backend\Model\ModelInterface::getIdProperty()
     */
    public function getIdProperty()
    {
        return $this->idProperty;
    }

    /**
     * (non-PHPdoc)
     * @see \Expresso\Backend\Model\ModelInterface::exchangeArray()
     */
    public function exchangeArray($input)
    {
        $this->properties = $input;
    }

    /**
     * (non-PHPdoc)
     * @see \Expresso\Backend\Model\ModelInterface::getArrayCopy()
     */
    public function getArrayCopy()
    {
        return $this->properties;
    }

    /**
     * (non-PHPdoc)
     * @see \Expresso\Backend\Model\ModelInterface::getFromRequest()
     */
    public function getFromRequest()
    {
        $input = file_get_contents('php://input');
        $input = str_replace('\'', '"',$input);
        return (array) json_decode($input);
    }
}
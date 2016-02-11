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
     * 
     * @var string
     */
    protected $modelName = NULL;

    /**
     * @var array
     */
    protected $properties = array();

    /**
     * 
     * @var string
     */
    protected $idProperty = NULL;
    /**
     * @param string $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->properties[$name];
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    /**
     * @return string 
     */
    public function getModelName()
    {
        return $this->modelName;
    }

    /**
     * @return string
     */
    public function getIdProperty()
    {
        return $this->idProperty;
    }

    /**
     * @param mixed $input
     */
    public function exchangeArray($input)
    {
        $this->properties = $input;
    }

    /**
     * @return array
     */
    public function getArrayCopy()
    {
        return $this->properties;
    }
}
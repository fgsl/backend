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
interface ModelInterface
{
    /**
     *
     * @param string $name
     * @return mixed
     */
    public function __get($name);

    /**
     * 
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value);

    /**
     * @var mixed $input 
     */
    public function exchangeArray($input);

    /**
     * @return array
     */
    public function getArrayCopy();

    /**
     * @return string
     */
    public function getIdProperty();

    /**
     * @return ModelInterface
     */
    public function getFromRequest();
}
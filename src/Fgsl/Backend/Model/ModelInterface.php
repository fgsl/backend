<?php
/**
 * Fgsl Backend - A generic interface for data recovering and persistence 
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 * @link      https://github.com/fgsl/backend for the canonical source repository
 * @copyright Copyright (c) 2017 FGSL (http://www.fgsl.eti.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Fgsl\Backend\Model;

/**
 * @package    Fgsl
 * @subpackage Backend
 */
interface ModelInterface
{
    /**
     * @param string $name
     * @return mixed
     */
    public function __get($name);

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value);

    /**
     * @param string $input
     */
    public function __construct($input = array());

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
    public static function getFromRequest();
}
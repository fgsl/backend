<?php
/**
 * Expresso Backend - a generic interface for data recovering and persistence
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@serpro.gov.br>
 * @link      https://gitlab.com/expresso_livre/expresso for the canonical source repository
 * @copyright Copyright (c) 2016 SERPRO (http://www.serpro.gov.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Expresso\Backend\Gateway;

use Expresso\Backend\Model\ModelInterface;
use Zend\Db\ResultSet\ResultSetInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Expresso\Backend\SearchFilter\SearchFilterInterface;
/**
 * 
 * @package    Expresso
 * @subpackage Backend
 */
interface GatewayInterface
{
    /**
     * Create a gateway to a model storage
     * @param string $modelName
     * @param ServiceLocatorInterface $serviceLocator
     */
    public function __construct($modelName, ServiceLocatorInterface $serviceLocator);

    /**
     * Create a new record
     * @param ModelInterface $model
     * @return ModelInterface
     */
    public function create(ModelInterface $model);

    /**
     * Update a record
     * @param ModelInterface $model
     * @return ModelInterface
     */
    public function update(ModelInterface $model);

    /**
     * Remove a record
     * @param string $id
     * @return integer
     */
    public function delete($id);

    /**
     * Active Record Pattern
     * @param ModelInterface $model
     * @return ModelInterface
     */
    public function save(ModelInterface $model);

    /**
     * Get a record from id
     * @param string $id
     * @return ModelInterface | NULL
     */
    public function get($id);

    /**
     * Get several records from filter criteria 
     * @param SearchFilterInterface $filter
     * @return ResultSetInterface
     */
    public function getAll(SearchFilterInterface $filter = NULL);

    /**
     * Get several records from a property value 
     * @param string $property
     * @param mixed $value
     * @return ResultSetInterface
     */
    public function getMultipleByProperty($property, $value);

    /**
     * Get several records from properties
     * @param array $properties
     * @return ModelInterface | NULL
     */
    public function getMultipleByProperties(array $properties);
}
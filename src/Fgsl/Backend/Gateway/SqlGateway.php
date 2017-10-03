<?php
/**
 * Fgsl Backend - A generic interface for data recovering and persistence 
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 * @link      https://github.com/fgsl/backend for the canonical source repository
 * @copyright Copyright (c) 2017 FGSL (http://www.fgsl.eti.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Fgsl\Backend\Gateway;

use Fgsl\Backend\Model\ModelInterface;
use Zend\Db\ResultSet\ResultSetInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Db\TableGateway\TableGateway;
use Fgsl\Backend\Exception\NotPersistedException;
use Zend\Db\ResultSet\ResultSet;
use Fgsl\Backend\SearchFilter\SearchFilterInterface;
/**
 * 
 * @package    Fgsl
 * @subpackage Backend
 */
class SqlGateway extends AbstractGateway
{
    /**
     * @var AdapterInterface
     */
    protected $backend;

    /**
     * 
     * @var TableGatewayInterface
     */
    protected $gateway;

    /**
     * Establishes connection to a relational database
     * Maps a table and define a collection for results 
     * @param string $modelName
     * @param ServiceLocatorInterface $serviceLocator
     */
    public function __construct($modelName, ServiceLocatorInterface $serviceLocator)
    {
        $this->backend = $serviceLocator->get(self::SQL_GATEWAY);
        $resultSet = new ResultSet();
        $resultSet->setArrayObjectPrototype($serviceLocator->get($modelName));
        $this->gateway = new TableGateway($modelName, $this->backend, NULL, $resultSet);
    }

    /**
     * (non-PHPdoc)
     * @see \Fgsl\Backend\Gateway\GatewayInterface::create()
     */
    public function create(ModelInterface $model)
    {
        $set = $model->getArrayCopy();
        if ($this->gateway->insert($set) == 0){
            throw new NotPersistedException('No record inserted');
        }
        $idProperty = $model->getIdProperty();
        return $this->gateway->select(array($idProperty => $model->$idProperty));
    }

    /**
     * (non-PHPdoc)
     * @see \Fgsl\Backend\Gateway\GatewayInterface::update()
     */
    public function update(ModelInterface $model)
    {
        $set = $model->getArrayCopy();
        $idProperty = $model->getIdProperty();
        $where = array($idProperty => $model->$idProperty);
        if ($this->gateway->update($set, $where) == 0){
            throw new NotPersistedException('No record updated');
        }
        return $model;
    }

    /**
     * (non-PHPdoc)
     * @see \Fgsl\Backend\Gateway\GatewayInterface::delete()
     */
    public function delete($id)
    {
        $idProperty = $model->getIdProperty();
        $where = array($idProperty => $id);
        return $this->gateway->delete($where);
    }

    /**
     * (non-PHPdoc)
     * @see \Fgsl\Backend\Gateway\GatewayInterface::save()
     */
    public function save(ModelInterface $model)
    {
        $idProperty = $model->getIdProperty();
        $models = $this->gateway->select(array($idProperty => $model->$idProperty));
        if ($models->count() > 0){ // record exists
            return $this->update($models->current());
        }
        return $this->create($models->current());
    }

    /**
     * (non-PHPdoc)
     * @see \Fgsl\Backend\Gateway\GatewayInterface::get()
     */
    public function get($id)
    {
        $idProperty = $model->getIdProperty();
        $models = $this->gateway->select(array($idProperty => $model->$idProperty));
        if ($models->count() > 0){ // record exists
            return $models->current();
        }
        return NULL;
    }

    /**
     * (non-PHPdoc)
     * @see \Fgsl\Backend\Gateway\GatewayInterface::getAll()
     */
    public function getAll(SearchFilterInterface $filter = NULL){
        return $this->gateway->select($filter->getWhere());
    }

    /**
     * (non-PHPdoc)
     * @see \Fgsl\Backend\Gateway\GatewayInterface::getMultipleByProperties()
     */
    public function getMultipleByProperties(array $properties)
    {
        return $this->gateway->select($properties);
    }

    /**
     * (non-PHPdoc)
     * @see \Fgsl\Backend\Gateway\GatewayInterface::getMultipleByProperty()
     */
    public function getMultipleByProperty($property, $value)
    {
        return $this->gateway->select(array($property => $value));
    }
}
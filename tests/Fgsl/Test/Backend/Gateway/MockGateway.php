<?php
/**
 * Fgsl Backend - A generic interface for data recovering and persistence 
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 * @link      https://github.com/fgsl/backend for the canonical source repository
 * @copyright Copyright (c) 2017 FGSL (http://www.fgsl.eti.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Fgsl\Test\Backend\Gateway;

use Fgsl\Backend\Model\ModelInterface;
use Zend\Db\ResultSet\ResultSetInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Db\TableGateway\TableGateway;
use Fgsl\Backend\Exception\NotPersistedException;
use Zend\Db\ResultSet\ResultSet;
use Fgsl\Test\Backend\Model\MockModel;
use Fgsl\Backend\Gateway\AbstractGateway;
use Fgsl\Backend\SearchFilter\SearchFilterInterface;
/**
 * 
 * @package    Fgsl
 * @subpackage Backend
 */
class MockGateway extends AbstractGateway
{
    /**
     * Establishes connection to a relational database
     * Maps a table and define a collection for results 
     * @param string $modelName
     * @param ServiceLocatorInterface $serviceLocator
     */
    public function __construct($modelName, ServiceLocatorInterface $serviceLocator)
    {
    }

    /**
     * (non-PHPdoc)
     * @see \Fgsl\Backend\Gateway\GatewayInterface::create()
     */
    public function create(ModelInterface $model)
    {
        return new MockModel();
    }

    /**
     * (non-PHPdoc)
     * @see \Fgsl\Backend\Gateway\GatewayInterface::update()
     */
    public function update(ModelInterface $model)
    {
        return $model;
    }

    /**
     * (non-PHPdoc)
     * @see \Fgsl\Backend\Gateway\GatewayInterface::delete()
     */
    public function delete($id)
    {
        return 1;
    }

    /**
     * (non-PHPdoc)
     * @see \Fgsl\Backend\Gateway\GatewayInterface::save()
     */
    public function save(ModelInterface $model)
    {
        return $this->update($model);
    }

    /**
     * (non-PHPdoc)
     * @see \Fgsl\Backend\Gateway\GatewayInterface::get()
     */
    public function get($id)
    {
        return new MockModel();
    }

    /**
     * (non-PHPdoc)
     * @see \Fgsl\Backend\Gateway\GatewayInterface::getAll()
     */
    public function getAll(SearchFilterInterface $filter = NULL){
        $resultSet = new ResultSet();
        $resultSet->setArrayObjectPrototype(new MockModel());
        return $resultSet;
    }

    /**
     * (non-PHPdoc)
     * @see \Fgsl\Backend\Gateway\GatewayInterface::getMultipleByProperties()
     */
    public function getMultipleByProperties(array $properties)
    {
        $resultSet = new ResultSet();
        $resultSet->setArrayObjectPrototype(new MockModel());
        return $resultSet;
    }

    /**
     * (non-PHPdoc)
     * @see \Fgsl\Backend\Gateway\GatewayInterface::getMultipleByProperty()
     */
    public function getMultipleByProperty($property, $value)
    {
        $resultSet = new ResultSet();
        $resultSet->setArrayObjectPrototype(new MockModel());
        return $resultSet;
    }
}
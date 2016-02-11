<?php
/**
 * Expresso Backend - a generic interface for data recovering and persistence
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@serpro.gov.br>
 * @link      https://gitlab.com/expresso_livre/expresso for the canonical source repository
 * @copyright Copyright (c) 2016 SERPRO (http://www.serpro.gov.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Expresso\Test\Backend;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\ServiceManager;
use Zend\ServiceManager\Config;
use Expresso\Test\Backend\Gateway\MockGateway;
use Expresso\Backend\Gateway\GatewayFactory;
use Expresso\Backend\Gateway\GatewayInterface;
use Expresso\Backend\Model\ModelInterface;
use Expresso\Test\Backend\Filter\MockFilter;
use Zend\Db\ResultSet\ResultSetInterface;
use Expresso\Test\Backend\Model\MockModel;

/**
 * 
 * @package    Expresso
 * @subpackage Test
 */
class ComponentTest extends \PHPUnit_Framework_TestCase
{
    /**
     * 
     * @var ServiceLocatorInterface
     */
    private $serviceLocator = NULL;

    /**
     * 
     * @var GatewayInterface
     */
    private $gateway = NULL;

    public function setUp()
    {
        $config = new Config(array(
            'factories' => array(
            )
        ));
        $this->serviceLocator = new ServiceManager($config);
        $this->gateway = GatewayFactory::create('MockGateway','mock',$this->serviceLocator,'Expresso\Test\Backend\Gateway\\');
    }

    /**
     * ensures creation of a gateway instance
     */
    public function testFactory()
    {
        $this->assertTrue(is_object($this->gateway));

        $reflectionClass = new \ReflectionClass(get_class($this->gateway));
        $interfaces = $reflectionClass->getInterfaceNames();
        $this->assertContains('Expresso\Backend\Gateway\GatewayInterface',$interfaces);
    }

    /**
     * test creation of a record
     */
    public function testCreate()
    {
        $model = new MockModel();
        $model = $this->gateway->create($model);
        $this->assertTrue($model instanceof ModelInterface);
    }

    /**
     * test update of a record
     */
    public function testUpdate()
    {
        $model = new MockModel();
        $model = $this->gateway->update($model);
        $this->assertTrue($model instanceof ModelInterface);
    }

    /**
     * test deletion of a record
     */
    public function testDelete()
    {
        $deletedRecords = $this->gateway->delete(1);
        $this->assertEquals(1, $deletedRecords);
    }

    /**
     * test creation of a record
     */
    public function testSelect()
    {
        $model = $this->gateway->get(1);
        $this->assertTrue($model instanceof ModelInterface);
        $models = $this->gateway->getAll(new MockFilter());
        $this->assertTrue($models instanceof ResultSetInterface);
    }
}
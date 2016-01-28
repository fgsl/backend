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

use Expresso\Backend\Adapter\AdapterInterface;
use Expresso\Backend\BackendFactory;

/**
 * 
 * @package    Expresso
 * @subpackage Test
 */
class ComponentTest extends \PHPUnit_Framework_TestCase
{
    /**
     * 
     * @var AdapterInterface
     */
    private $adapter = NULL;
    
    /**
     * ensures creation of an instance
     */
    public function testFactory()
    {
        $adapter = BackendFactory::create('Text');
        $this->assertTrue(is_object($adapter));
        $this->adapter = $adapter;

        $reflectionClass = new ReflectionClass(get_class($adapter));
        $interfaces = $reflectionClass->getInterfaceNames();
        $this->assertContains('Expresso\Backend\AdapterInterface',$interfaces);
    }

    /**
     * test creation of a record
     */
    public function testCreate()
    {
        $adapter->create();
    }
}
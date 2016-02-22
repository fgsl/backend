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

use Zend\ServiceManager\ServiceLocatorInterface;
use Expresso\Backend\Gateway\GatewayInterface;
/**
 *
 * @package Expresso
 * @subpackage Backend
 */
class GatewayFactory
{
    /**
     * @param string $gatewayType
     * @param string modelName
     * @param ServiceLocatorInterface $serviceLocator
     * @param string $namespace (optional)
     * @return GatewayInterface
     */
    public static function create($gatewayType, $modelName, ServiceLocatorInterface $serviceLocator, $namespace = 'Expresso\Backend\Gateway\\')
    {
        $class = $namespace . $gatewayType;
        return new $class($modelName, $serviceLocator);
    }
}
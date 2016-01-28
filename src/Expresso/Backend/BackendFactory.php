<?php
/**
 * Expresso Backend - a generic interface for data recovering and persistence
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@serpro.gov.br>
 * @link      https://gitlab.com/expresso_livre/expresso for the canonical source repository
 * @copyright Copyright (c) 2016 SERPRO (http://www.serpro.gov.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Expresso\Backend;

/**
 * 
 * @package    Expresso
 * @subpackage Backend
 */
class BackendFactory {
    /**
     * @param string $adapter
     * @param string $namespace (optional)
     * @return CrudInterface
     */
    public function create($adapter, $namespace = 'Expresso\Backend\Adapter\\')
    {
        $class = $namespace . $adapter;
        return new $class(); 
    }
}

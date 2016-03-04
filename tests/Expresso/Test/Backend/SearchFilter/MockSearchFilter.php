<?php
/**
 * Expresso Backend - a generic interface for data recovering and persistence
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@serpro.gov.br>
 * @link      https://gitlab.com/expresso_livre/expresso for the canonical source repository
 * @copyright Copyright (c) 2016 SERPRO (http://www.serpro.gov.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Expresso\Test\Backend\SearchFilter;

use Zend\Db\Sql\Where;
use Expresso\Backend\SearchFilter\SearchFilterInterface;
/**
 * 
 * @package    Expresso
 * @subpackage Backend
 */
class MockSearchFilter implements SearchFilterInterface
{
    /**
     * 
     * @var Where
     */
    protected $where = NULL;
    /**
     * @return Where
     */
    public function getWhere()
    {
        return $where;
    }
}

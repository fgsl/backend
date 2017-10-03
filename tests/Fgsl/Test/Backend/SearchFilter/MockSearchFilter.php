<?php
/**
 * Fgsl Backend - A generic interface for data recovering and persistence 
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 * @link      https://github.com/fgsl/backend for the canonical source repository
 * @copyright Copyright (c) 2017 FGSL (http://www.fgsl.eti.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Fgsl\Test\Backend\SearchFilter;

use Zend\Db\Sql\Where;
use Fgsl\Backend\SearchFilter\SearchFilterInterface;
/**
 * 
 * @package    Fgsl
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

<?php
/**
 * Fgsl Backend - A generic interface for data recovering and persistence 
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 * @link      https://github.com/fgsl/backend for the canonical source repository
 * @copyright Copyright (c) 2017 FGSL (http://www.fgsl.eti.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Fgsl\Backend\SearchFilter;

use Zend\Db\Sql\Where;
/**
 * 
 * @package    Fgsl
 * @subpackage Backend
 */
interface SearchFilterInterface
{
    /**
     * @return Where
     */
    public function getWhere();
}

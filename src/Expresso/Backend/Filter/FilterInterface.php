<?php
/**
 * Expresso Backend - a generic interface for data recovering and persistence
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@serpro.gov.br>
 * @link      https://gitlab.com/expresso_livre/expresso for the canonical source repository
 * @copyright Copyright (c) 2016 SERPRO (http://www.serpro.gov.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Expresso\Backend\Filter;

use Zend\Db\Sql\Where;
/**
 * 
 * @package    Expresso
 * @subpackage Backend
 */
interface FilterInterface
{
    /**
     * @return Where
     */
    public function getWhere();
}

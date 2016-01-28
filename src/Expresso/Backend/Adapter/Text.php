<?php
/**
 * Expresso Backend - a generic interface for data recovering and persistence
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@serpro.gov.br>
 * @link      https://gitlab.com/expresso_livre/expresso for the canonical source repository
 * @copyright Copyright (c) 2016 SERPRO (http://www.serpro.gov.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Expresso\Backend\Adapter;

use Expresso\Backend\Filter\FilterGroupInterface;
use Expresso\Backend\Record\RecordInterface;

/**
 * 
 * @package    Expresso
 * @subpackage Backend
 */
class Text implements AdapterInterface
{
    /**
     *
     * @param RecordInteface $record
     */
    public function create(RecordInterface $record)
    {
        throw new \Exception('Must be implemented');
    }

    /**
     *
     * @param RecordInteface $record
    */
    public function update(RecordInterface $record)
    {
        throw new \Exception('Must be implemented');
    }

    /**
     *
     * @param RecordInteface $record
    */
    public function delete(RecordInterface $record)
    {
        throw new \Exception('Must be implemented');
    }

    /**
     *
     * @param RecordInteface $record
    */
    public function save(RecordInterface $record)
    {
        throw new \Exception('Must be implemented');
    }

    /**
     *
     * @param string $id
     * @param boolean $getDeleted
    */
    public function get($id, $getDeleted = FALSE)
    {
        throw new \Exception('Must be implemented');
    }

    /**
     *
     * @param mixed $value
     * @param string $property
     * @param string $getDeleted
    */
    public function getByProperty($value, $property = 'name', $getDeleted = FALSE)
    {
        throw new \Exception('Must be implemented');
    }

    /**
     *
     * @param array $ids
     * @param string $property
    */
    public function getPropertyByIds(array $ids, $property)
    {
        throw new \Exception('Must be implemented');
    }

    /**
     *
     * @param string $id
     * @param string $containerIds
    */
    public function getMultiple($id, $containerIds = NULL)
    {
        throw new \Exception('Must be implemented');
    }

    /**
     *
     * @param mixed $value
     * @param string $property
     * @param string $getDeleted
     * @param string $orderBy
     * @param string $orderDirection
    */
    public function getMultipleByProperty($value, $property='name', $getDeleted = FALSE, $orderBy = NULL, $orderDirection = 'ASC')
    {
        throw new \Exception('Must be implemented');
    }

    /**
     *
     * @param string $orderBy
     * @param string $orderDirection
    */
    public function getAll($orderBy = NULL, $orderDirection = 'ASC')
    {
        throw new \Exception('Must be implemented');
    }

    /**
     *
     * @param FilterGroupInterface $filter
     * @param PaginationInterface $pagination
     * @param string $cols
    */
    public function search(FilterGroupInterface $filter = NULL, PaginationInterface $pagination = NULL, $cols = '*')
    {
        throw new \Exception('Must be implemented');
    }

    /**
     *
     * @param FilterGroupInterface $filter
    */
    public function searchCount(FilterGroupInterface $filter)
    {
        throw new \Exception('Must be implemented');
    }
}

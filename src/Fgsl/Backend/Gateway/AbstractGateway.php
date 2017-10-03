<?php
/**
 * Fgsl Backend - A generic interface for data recovering and persistence 
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 * @link      https://github.com/fgsl/backend for the canonical source repository
 * @copyright Copyright (c) 2017 FGSL (http://www.fgsl.eti.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Fgsl\Backend\Gateway;

use Fgsl\Backend\Model\ModelInterface;
use Zend\Db\ResultSet\ResultSetInterface;
/**
 * 
 * @package    Fgsl
 * @subpackage Backend
 */
abstract class AbstractGateway implements GatewayInterface
{
    const IMAP_GATEWAY = 'IMAPGateway';
    const LDAP_GATEWAY = 'LDAPGateway';
    const MONGO_GATEWAY = 'MongoGateway';
    const SQL_GATEWAY = 'SQLGateway';

    /**
     * @var mixed
     */
    protected $backend = NULL;

    /**
     * @var mixed
     */
    protected $gateway = NULL;
}
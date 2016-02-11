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

use Expresso\Backend\Model\ModelInterface;
use Expresso\Backend\Filter\FilterInterface;
use Zend\Db\ResultSet\ResultSetInterface;
/**
 * 
 * @package    Expresso
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
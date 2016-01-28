<?php
use Expresso\Test\Base\ApplicationTest;
/**
 * Expresso - a free and open software for enterprise group collaboration
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@serpro.gov.br>
 * @link      https://gitlab.com/expresso_livre/expresso for the canonical source repository
 * @copyright Copyright (c) 2016 SERPRO (http://www.serpro.gov.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
require __DIR__ . '/Psr4AutoloaderClass.php';
$psr4 = new \Psr4AutoloaderClass();
$psr4->addNamespace('Expresso', __DIR__ . '/Expresso');
$psr4->addNamespace('Expresso', __DIR__ . '/../src/Expresso');
$psr4->register();
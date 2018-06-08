<?php
/**
 * osenmpesa
 *
 * @author    0RS <hi@osen.co.ke>
 * @link http://osen.co.ke/
 * @copyright Copyright &copy; 2009-2016 Osen Concepts Kenya
 * @license   http://www.opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @version 2.2.0
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_2_2_0($object)
{
    return (Db::getInstance()->Execute('ALTER TABLE  `' . _DB_PREFIX_ . 'osenmpesa_system` ADD `id_cart_rule` INT(10) UNSIGNED NOT NULL DEFAULT \'0\'')
        && Db::getInstance()->Execute('CREATE TABLE `' . _DB_PREFIX_ . 'osenmpesa_system_shop` (
		  `id_osenmpesa_system` int(10) unsigned NOT NULL,
		  `id_shop` int(10) unsigned NOT NULL,
		  `date_add` datetime NOT NULL,
          `date_upd` datetime NOT NULL,
		  UNIQUE KEY `id_osenmpesa_system` (`id_osenmpesa_system`,`id_shop`)
		) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8'));
}

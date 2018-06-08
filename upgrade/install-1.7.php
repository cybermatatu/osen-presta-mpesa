<?php
/**
 * osenmpesa
 *
 * @author    0RS <hi@osen.co.ke>
 * @link http://osen.co.ke/
 * @copyright Copyright &copy; 2009-2016 Osen Concepts Kenya
 * @license   http://www.opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @version 2.0.0
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_1_7($object)
{
    return ($object->registerHook('displayOrderDetail')
        && Db::getInstance()->Execute('CREATE TABLE `' . _DB_PREFIX_ . 'osenmpesa_system_group` (
			`id_osenmpesa_system` int(10) unsigned NOT NULL,
			`id_group` int(10) unsigned NOT NULL,
			UNIQUE KEY `id_osenmpesa_system` (`id_osenmpesa_system`,`id_group`)
			) ENGINE="._MYSQL_ENGINE_." DEFAULT CHARSET=utf8'));
}

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

function upgrade_module_1_4($object)
{
    return $object->registerHook('actionCarrierUpdate');
}

<?php
error_reporting(E_ALL);

define('_JEXEC', 1);
define('BASEPATH',realpath(dirname(__FILE__).'/../../'));
define('JOOMLA_PATH',realpath(dirname(__FILE__).'/../../../../../'));
define('JOOMLA_ADMIN_PATH',realpath(dirname(__FILE__).'/../../../../'));
$_SERVER['HTTP_HOST'] = 'localhost';
$_SERVER['REQUEST_METHOD'] = 'GET';

if (file_exists(JOOMLA_ADMIN_PATH . '/defines.php'))
{
    include_once JOOMLA_ADMIN_PATH . '/defines.php';
}

if (!defined('_JDEFINES'))
{
    define('JPATH_BASE', JOOMLA_ADMIN_PATH);
    require_once JPATH_BASE . '/includes/defines.php';
}

require_once JPATH_BASE . '/includes/framework.php';
require_once JPATH_BASE . '/includes/helper.php';
require_once JPATH_BASE . '/includes/toolbar.php';
define('JPATH_COMPONENT',JOOMLA_ADMIN_PATH.'/components/com_content');
$app = JFactory::getApplication('administrator');
include BASEPATH.'/controller.php';
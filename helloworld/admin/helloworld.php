<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

$document = JFactory::getDocument();
$document->addStyleDeclaration(
    '.icon-48-helloworld {background-image: url(../media/com_helloworld/images/tux-16x16.png);}');

// import joomla controller library
jimport('joomla.application.component.controller');

// Get an instance of the controller prefixed by HelloWorld
$controller = JController::getInstance('HelloWorld');

// Get the task
$jinput = JFactory::getApplication()->input;
$task = $jinput->get('task', "", 'STR' );

// Perform the Request task
$controller->execute($task);

// Redirect if set by the controller
$controller->redirect();
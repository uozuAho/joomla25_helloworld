<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// import Joomla view library
jimport('joomla.application.component.view');

/**
* HelloWorlds View
*/
class HelloWorldViewHelloWorlds extends JView
{
    /**
     * HelloWorlds view display method
     * @param   string  $tpl  The name of the template file to parse;
     *                        automatically searches through the template paths.
     *
     * @return  mixed  A string if successful, otherwise a JError object.
     */
    function display($tpl = null)
    {
        $items = $this->get('Items');
        $pagination = $this->get('Pagination');
        if (count($errors = $this->get('Errors')))
        {
            JError::raiseError(500, implode('<br />', $errors));
            return false;
        }
        $this->items = $items;
        $this->pagination = $pagination;
        $this->addToolBar();
        parent::display($tpl);
    }

    /**
     * Setting the toolbar
     */
    protected function addToolBar()
    {
        // NOTE: You can find other classic backend actions in the
        // administrator/includes/toolbar.php file of your Joomla installation
        JToolBarHelper::title(JText::_('COM_HELLOWORLD_MANAGER_HELLOWORLDS'));
        JToolBarHelper::deleteList('', 'helloworlds.delete');
        JToolBarHelper::editList('helloworld.edit');
        JToolBarHelper::addNew('helloworld.add');
    }
}
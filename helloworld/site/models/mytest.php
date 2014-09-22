<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// import Joomla modelitem library
jimport('joomla.application.component.modelitem');

class HelloWorldModelMyTest extends JModelItem
{
    /**
     * test string
     */
    protected $test_msg;

    /**
     * Returns a reference to the a Table object, always creating it.
     *
     * @param       type    The table type to instantiate
     * @param       string  A prefix for the table class name. Optional.
     * @param       array   Configuration array for model. Optional.
     * @return      JTable  A database object
     * @since       2.5
     */
    public function getTable($type = 'MyTest', $prefix = 'HelloWorldTable', $config = array())
    {
        return JTable::getInstance($type, $prefix, $config);
    }

    /**
     * Get test message by id
     * @return string      test message
     */
    public function getTestMsg($id = 1)
    {
        //request the selected id
        $jinput = JFactory::getApplication()->input;
        $id = $jinput->get('id', 1, 'INT' );

        $table = $this->getTable();
        $table->load($id);
        $this->test_msg = $table->test_msg;

        return $this->test_msg;
    }
}
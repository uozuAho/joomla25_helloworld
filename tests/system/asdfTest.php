<?php

jimport('joomla.application.component.model');

class ArticleTest extends \PHPUnit_Framework_TestCase {
    public function setUp()
    {
    }

    public function testSingleArticle()
    {
        $model = JModel::getInstance('HelloWorldModelHelloWorld');
        echo $model->get('msg');
    }
}
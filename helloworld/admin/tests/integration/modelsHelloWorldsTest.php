<?php

class HelloWorldsTest extends \PHPUnit_Framework_TestCase {

    public function testList(){
        $c = new ContentController();
        $model = $c->getModel('helloworlds');
        $worlds = $model->getItems();
        var_dump($worlds);
        $this->assertNotEmpty($worlds);
    }
}
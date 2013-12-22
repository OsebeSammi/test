<?php

class CategoryController extends Zend_Controller_Action {

    public function init() {
        /* Initialize action controller here */
    }
    //    /category
    public function indexAction(){
        
    }
    
        //   /category/name
    public function categoryAction() {
        $request = $this->getRequest();
        $category_name = $request->GetParam('name');
        $modelContent = new Model_Content();
        $category_listed = $modelContent->getCategory($category_name);
        print_r($category_listed);
        exit;
    }

}

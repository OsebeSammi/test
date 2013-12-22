<?php

class CategoryController extends Zend_Controller_Action {

    public function init() {
        /* Initialize action controller here */
    }
    //    /category
    public function indexAction(){
       $modelContent=new Model_Content();
       $categories=$modelContent->getCategories();
       $this->view->categories=$categories;
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

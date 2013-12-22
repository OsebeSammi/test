<?php

class Model_Content extends Zend_Db_Table_Abstract {

    protected $_name = "cipelt_content";

    //Get all articles belonging to this category
    public function getCategory($category_name) {
        $select = $this->select()
                ->where('TE_categories=?', $category_name);

        return $this->fetchRow($select);
    }

    public function getArticlesByDay($day) {
        $select = $this->select()
                ->where('TE_day=?', $day);
        return $this->fetchAll($select);
    }
    public function getArticleById($id){
          $select = $this->select()
                ->where('TE_content_id=?', $id);
        return $this->fetchRow($select);
    }
        

}

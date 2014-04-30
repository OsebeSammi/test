<?php

class Model_Content extends Zend_Db_Table_Abstract {

    protected $_name = "crops";
    protected $_dbTable;

    public function setName($text)
    {

    }

    public function getCrops()
    {
        $select = $this->select()->from('crops');
        return  $this->fetchAll($select);
    }

    public function setCrops($crop_id,$name_of_crop,$altitude,$farming_method,$time_to_harvest)
    {

    }

    public function setAltitude($altitude)
    {}

    public function getAltitude()
    {}

    public function setFarmingMethod($farmingMethod)
    {}

    public function getFarmingMethod()
    {}

    public function setTimeToHarvest()
    {}

    public function getTimeToHarvest()
    {}

    /*//Get all articles belonging to this category
    public function getCategory($slug) {
        $select = $this->select()
                ->where('TE_category_slug=?', $slug);

        return $this->fetchAll($select);
    }

    public function getArticlesByDay($day) {
        $select = $this->select()
                ->where('TE_day=?', $day);
        return $this->fetchAll($select);
    }

    public function getArticleById($id) {
        $select = $this->select()
                ->where('TE_day=?', $id);
        return $this->fetchRow($select);
    }

    public function getCategories() {
        $select = $this->select()
                ->distinct()
                ->from('cipelt_content', array('TE_categories', 'TE_category_slug'));
        return $this->fetchAll($select);
    }

    public function getWeek($week) {
        $select = $this->select()
                ->where('TE_week=?', $week);
        return $this->fetchAll($select);
    }

    public function update_category_slug($slug, $category) {
        $where = array('TE_categories=?' => $category);
        $data = array('TE_category_slug' => $slug);
        if ( $this->update($data, $where ,$this->_name )) {
            return true;
        } else {
            return false;
        }
    }

    public function getDbTable() {
        if (null === $this->_dbTable) {
            $this->setDbTable('cipelt_content');
        }

        return $this->_dbTable;
    }

    public function setDbTable($dbTable) {
//        if (is_string($dbTable)) {
//            $dbTable = new $dbTable();
//        }
//        if (!$dbTable instanceof Zend_Db_Table_Abstract) {
//            throw new Exception('Invalid table data gateway provided');
//        }
//        $this->_dbTable = $dbTable;
//        return $this;
    }
    public function fetchCasualties(){
		$select = $this->select();
		return $this->fetchAll($select);
	}*/

}

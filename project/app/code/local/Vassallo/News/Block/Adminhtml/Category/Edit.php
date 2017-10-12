<?php
/**
 * Vassallo News
 */

/**
 * Vassallo News Adminhtml Controller
 *
 * Backend Category Controller
 * @autor Ferdinando Vassallo <ferdinando.vassallo6@gmail.com>
 * @version 0.1.0
 * @package Cms
 */
class Vassallo_News_Block_Adminhtml_Category_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        $this->_objectId='category_id';
        $this->_blockGroup='vassallo_news';
        $this->_controller='adminhtml_controller';


        parent::__construct();
    }

    public function getHeaderText()
    {
        return $this->__('Category Details');
    }
}
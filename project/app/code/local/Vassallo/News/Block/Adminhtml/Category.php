<?php
/**
 * Vassallo News
 */

/**
 * Vassallo News Category Block
 *
 *
 * Adminhtml block for category grid.
 * @author Ferdinando Vassallo <ferdinando.vassallo6@gmail.com>
 * @version 0.2.0
 * @package Cms
 */
class Vassallo_News_Block_Adminhtml_Category extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup="vassallo_news";
        $this->_controller="adminhtml_category";
        $this->_headerText= $this->__('News Categories');
        parent::__construct();
    }
}
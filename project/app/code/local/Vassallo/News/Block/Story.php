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

class Vassallo_News_Block_Story extends Mage_Core_Block_Template
{
    public function getStories()
    {
        if ($this->getRequest()->getParam('category')){
            $stories = Mage::getModel('vassallo_news/stories')->getCollection()
                    ->addFieldToFilter('status' , array('eq'=> 1))
                    ->addFieldToFilter('category_id', array('eq' => $this->getRequest()->getParam('category')));
        }else{
            $stories = Mage::getModel('vassallo_news/stories')->getCollection()
                    ->addFieldToFilter('status', array('eq' => 1));
        }
        return $stories;
    }
}
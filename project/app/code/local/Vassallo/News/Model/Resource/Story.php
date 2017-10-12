<?php
/**
 * Vassallo News
 */
/**
 * Vassallo News Model Resource Story
 *
 * Story Resource Model.
 * @author Ferdinando Vassallo <ferdinando.vassallo6@gmail.com>
 * @version 0.2.0
 * @package Cms
 */
class Vassallo_News_Model_Resource_Story extends  Mage_Core_Model_Resource_Db_Abstract
{
    /**
     * _construct
     */
    protected function _construct()
    {
        $this->_init('vassallo_news/story','story_id');
    }

}
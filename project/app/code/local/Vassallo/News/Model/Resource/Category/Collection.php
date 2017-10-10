<?php
/**
 * Vassallo News
 */

/**
 * Vassallo News Model Category
 *
 *
 *
 * MySQL Installer
 * @author Ferdinando Vassallo <ferdinando.vassallo6@gmail.com>
 * @version 0.2.0
 * @package Cms
 */
class Vassallo_News_Model_Category extends Mage_Core_Model_Resource_Db_Collection_Abstract_Abstract
{
    /**
     *
     */
    public function _construct()
    {
        $this->_init('vassallo_news/category');
    }
}
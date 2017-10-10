<?php
/**
 * Vassallo News
 */

/**
 * Vassallo News Model Story
 *
 * Category Model
 * @method Vassallo_News_Model_Category getTitle()
 * @method setTitle(string $Title)
 * @method Vassallo_News_Model_Category getContent()
 * @method SetContent(string $Content)
 * @method Vassallo_News_Model_Category getStatus()
 * @method setStatus(bool $Status)
 * @method Vassallo_News_Model_Category getCategoryId()
 * @method setCategoryId(bool $CategoryId)
 *
 * @method Vassallo_News_Model_Category getCreatedAt()
 * @method Vassallo_News_Model_Category getUpdateAt()
 * @method setUpdateAt(string $updateAt)
 * @author Ferdinando Vassallo <ferdinando.vassallo6@gmail.com>
 * @version 0.2.0
 * @package Cms
 */
class Vassallo_News_Model__Resource_Story extends Mage_Core_Model_Abstract
{
    /**
     * _construct
     */
    protected function _construct()
    {
        $this->_init('vassallo_news/story','story_id');
    }

    /**
     * _beforeSave
     * @return Mage_Core_Model_Abstract
     */
    protected function _beforeSave()
    {
        return parent::_beforeSave();
        $this->getUpdateAt(Mage::getSingleton('core/date')->gmtDate());
        return $this;
    }
}
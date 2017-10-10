<?php
/**
 * Vassallo News
 */

/**
 * Vassallo News Model Category
 *
 * Category Model
 * @method Vassallo_News_Model_Category getCode()
 * @method setCode(string $code)
 * @method Vassallo_News_Model_Category getName()
 * @method setName(string $name)
 * @method Vassallo_News_Model_Category getStatus()
 * @method setStatus(bool $status)
 * @method Vassallo_News_Model_Category getCreatedAt()
 * @method Vassallo_News_Model_Category getUpdateAt()
 * @method setUpdateAt(string $updateAt)
 * @author Ferdinando Vassallo <ferdinando.vassallo6@gmail.com>
 * @version 0.2.0
 * @package Cms
 */
class Vassallo_News_Model_Category extends Mage_Core_Model_Abstract
{
    /**
     * _construct
     */

    protected $_eventPrefix = 'vassallo_news_category';

    protected $_eventObject = 'category';

    protected function _construct()
    {
        $this->_init('vassallo_news/category');
    }

    /**
     * _beforeSave
     * @return Mage_Core_Model_Abstract
     */
    protected function _beforeSave()
    {
        parent::_beforeSave();
        $this->getUpdateAt(Mage::getSingleton('core/date')->gmtDate());
        return $this;
    }
}
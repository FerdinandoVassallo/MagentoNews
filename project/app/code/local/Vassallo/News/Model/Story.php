<?php
/**
 * Vassallo News
 */

/**
 * Vassallo News Model Story
 *
 * Story Model
 * @method Vassallo_News_Model_Story getTitle()
 * @method setTitle(string $title)
 * @method Vassallo_News_Model_Story getContent()
 * @method SetContent(string $content)
 * @method Vassallo_News_Model_Story getStatus()
 * @method setStatus(bool $status)
 * @method Vassallo_News_Model_Story getCategoryId()
 * @method setCategoryId(int $categoryId)
 * @method Vassallo_News_Model_Story getCreatedAt()
 * @method Vassallo_News_Model_Story getUpdateAt()
 * @method setUpdateAt(string $updatedAt)
 * @author Ferdinando Vassallo <ferdinando.vassallo6@gmail.com>
 * @version 0.2.0
 * @package Cms
 */
class Vassallo_News_Model_Story extends Mage_Core_Model_Abstract
{
    /**
     * $_eventPrefix
     * @var string
     */

    protected $_eventPrefix = 'vassallo_news_story';

    /**
     * $_eventObject
     * @var string
     */

    protected $_eventObject = 'story';

    /**
     * _construct
     */

    protected function _construct()
    {
        $this->_init('vassallo_news/story');
    }

    /**
     * _beforeSave
     * @return Mage_Core_Model_Abstract
     */
    protected function _beforeSave()
    {
        parent::_beforeSave();
        $this->setUpdatedAt(Mage::getSingleton('core/date')->gmtDate());
        return $this;
    }

    /**
     * get Category
     *
     * Get Category object
     * @return bool|Vassallo_News_Model_Category|Mage_Core_Model_Abstract
     */

    public function getCategory()
    {
        $category=Mage::getModel('vassallo_news/category')->load($this->getData('category_id'));

            if($category && $category->getId()){
                return $category;
            }
            return false;
    }

    /**
     * set Category
     *
     * Set Category object
     * @param Vassallo_News_Model_Category $category
     */

    public function setCategory(Vassallo_News_Model_Category $category)
    {
        $this->setData('category-id', $category->getId());
    }
}
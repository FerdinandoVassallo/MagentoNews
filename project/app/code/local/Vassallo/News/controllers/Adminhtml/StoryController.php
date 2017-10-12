<?php
/**
 * Vassallo News
 */

/**
 * Vassallo News Adminhtml Controller
 *
 * Backend Story Controller
 * @autor Ferdinando Vassallo <ferdinando.vassallo6@gmail.com>
 * @version 0.1.0
 * @package Cms
 */
class Vassallo_News_Adminhtml_StoryController extends Mage_Adminhtml_Controller_Action
{
    /**
     * indexAction
     */
    public function indexAction()
    {
        echo "eccomi"; die;
    }

    /**
     * _isAllowed
     * @return bool
     */

    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('vassallo_news');
    }

}
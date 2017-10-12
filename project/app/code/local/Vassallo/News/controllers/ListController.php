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

class Vassallo_News_ListController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}
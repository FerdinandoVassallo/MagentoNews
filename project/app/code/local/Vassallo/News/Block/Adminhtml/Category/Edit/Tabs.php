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

class Vassallo_News_Block_Adminhtml_Category_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('category_edit_tabs');
        $this->setDestElementId('category_edit_form');
    }

    protected function _beforeToHtml()
    {
        $this->addTab(
            'Category Details',
            array(
                'label' => $this->__('Details'),
                'title' => $this->__('Details'),

            )

        );
        parent::_beforeToHtml();
    }
}
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

class Vassallo_News_Block_Adminhtml_Category_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('category_edit_form');
    }

    public function _prepareForm()
    {
        $form=new Varien_Data_Form(
            array(
                'id'=>'edit_form',
                'method' => 'post',
                'action' => $this->getUrl('*/*/save', array('category_id'=> $this->getRequest()->getParam('category_id'))),
                'enctype' => 'multipart/form-data',
            )
        );
        $form->setHtmlIdPrefix('category_');

        //add fields
        $fieldset=$form->addFieldset(
            'general',
            array(
                'legend' => $this->__('General Information'),
                'class' => 'fieldset-wide'
            )
        );

        $fieldset->addField(
            'code','text',
            array(
                'name' => 'code',
                'label' => 'Code',
                'title' => 'Code',
                'required' => true,
            )
        );
        $fieldset->addField(
            'name','text',
            array(
                'name' => 'name',
                'label' => 'Name',
                'title' => 'Name',
                'required' => true,
            )
        );
        $fieldset->addField(
            'status','select',
            array(
                'name' => 'name',
                'label' => 'Status',
                'title' => 'Status',
                'values'=> Mage::getModel('vassallo_news/source_status')->toOptionArray(),
                'required' => true,
            )
        );
        if ($this->getRequest()->getParam('category_id')){
            $model=Mage::getModel('vassallo_news_category')->load($this->getRequest()->getParam('category_id'));
            $form->setValues($model);
        }
        $form->setUseContainer(true);
        $this->setForm($form);
        return parent::_prepareForm();

    }
}
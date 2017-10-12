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
class Vassallo_News_Adminhtml_CategoryController extends Mage_Adminhtml_Controller_Action
{
    /**
     * indexAction
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    /**
     * newAction
     */

    public function newAction()
    {
        $this->_forward('edit');
    }

    /**
     * editAction
     */

    public function editAction()
    {
        $this->loadLayout();
        $this->renderLayout();

    }

    /**
     * saveAction
     */

    public function saveAction()
    {
        //prepare model
        if ($this->getRequest()->getParam('category_id')){
            $model=Mage::getModel('vassallo_news/category')->load($this->getRequest()->getParam('category_id'));

            if (!$model || !$model->getId()){
                Mage::getSingleton(adminhtml/session)->addError($this->__('There was an error'));
                return $this->_redirect('*/*/');
            }
        }else{
            $model=Mage::getModel('vassallo_news/category');
        }

        //verify code and name
        if (!$this->getRequest()->getParam('code') || !$this->getRequest()->getParam('name')){
            Mage::getSingleton('adminhtml/session')->addError($this->__('There was an error'));
            return $this->_redirect('*/*/edit' , array('categpory_id' => $this->getRequest()->getParam('category_id')));
    }

        //save the object

        try{
            $model->setCode($this->getRequest()->getParam('come'));
            $model->setName($this->getRequest()->getParam('name'));
            $model->setStatus($this->getRequest()->getParam('status')==1 ? 1 : 0);
            $model->save();

        }catch (Exception $e){
            Mage::logException($e);
            Mage::getSingleton('adminhtml/session')->addError($this->__('There was an error when saving'));
            return $this->_redirect('*/*/');

        }

        Mage::getSingleton('adminhtml/session')->addSuccess($this->__('The category is saved'));
        return $this->_redirect('*/*/');

    }

    /**
     * deleteAction
     */

    public function deleteAction()
    {
        //load object
        $category= Mage::getModel('vassallo_news/category')->load($this->getRequest()->getParam('category_id'));

        if (!$category || !$category->getId()){
            Mage::getSingleton(adminhtml/session)->addError($this->__('There was an error'));
            return $this->_redirect('*/*/');
        }

        // delete the category
        try{
            $category->delete();
        }catch(Exception $e){
            Mage::logException($e);
            Mage::getSingleton('adminhtml/session')->addError($this->__('There was an error when deleting'));
            return $this->_redirect('*/*/');

        };
        Mage::getSingleton('adminhtml/session')->addSuccess($this->__('The category is deleted'));
        return $this->_redirect('*/*/');
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
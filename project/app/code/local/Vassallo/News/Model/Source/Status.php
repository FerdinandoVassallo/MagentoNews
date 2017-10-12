<?php
/**
 * Vassallo News
 */

/**
 * Vassallo News Status Model
 *
 * Status Options
 * @author Ferdinando Vassallo <ferdinando.vassallo6@gmail.com>
 * @version 0.2.0
 * @package Cms
 */

class Vassallo_News_Model_Source_Status
{
    /**
     * toOptionArray
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 0, 'label' => Mage::helper('vassallo_news')->__('Disabled')),

            array('value' => 1, 'label' => Mage::helper('vassallo_news')->__('Enabled')),);
    }
}
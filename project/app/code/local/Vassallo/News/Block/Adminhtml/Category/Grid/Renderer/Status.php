<?php
/**
 * Vassallo News
 */

/**
 * Vassallo News Category Grid Status Renderer
 *
 *
 * Adminhtml status renderer for category grid.
 * @author Ferdinando Vassallo <ferdinando.vassallo6@gmail.com>
 * @version 0.2.0
 * @package Cms
 */
class Vassallo_News_Block_Adminhtml_Category_Grid_Renderer_Status extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{

    /**
     * render
     *
     * Render status as enabled or disabled
     * @param Varian_Object $row
     * @return string
     */

    public function render(Varien_Object $row)
    {
        if ($row->getData('status') == 0) {
            return '<span class="grid-severity-minor"><span>' . $this->__('Disabled') . '</span></span>';
        }
        if ($row->getData('status') == 1) {
            return '<span class="grid-severity-notice"><span>' . $this->__('Enabled') . '</span></span>';
        }
        return '<span class="grid-severity-major"><span>' . $this->__('Error') . '</span></span>';
    }
}
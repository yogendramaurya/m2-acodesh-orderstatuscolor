<?php

/**
 * Color Status
 *
 * Set the each sales row with a background color on sales grid.
 *
 * @package Acodesh\Orderstatuscolor
 * @author Yogendra Kumar <yogi@acodesh.com>
 * @copyright Copyright (c) 2019 Yogendra Kumar (https://www.acodesh.com/)
 * @license https://opensource.org/licenses/OSL-3.0.php Open Software License 3.0
 */

namespace Acodesh\Orderstatuscolor\Block\Adminhtml\Field;

class Color extends \Magento\Framework\Data\Form\Element\AbstractElement
{

    /**
     * Return the custom input html for color field.
     * @return string
     */
   public function getElementHtml(){
        $htmlElement = '<input id="color" name="color" data-ui-id="sales-order-status-edit-container-form-fieldset-element-text-color" class="input-text admin__control-text" type="color" value="'.$this->getData('value').'" >';
        return $htmlElement;
    }

}
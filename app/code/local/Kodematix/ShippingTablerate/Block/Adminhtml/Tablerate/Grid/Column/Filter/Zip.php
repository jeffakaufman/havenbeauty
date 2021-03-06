<?php
/**
 * Kodematix
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@Kodematix.com so we can send you a copy immediately.
 * 
 * @category    Kodematix
 * @package     Kodematix_ShippingTablerate
 * @copyright   Copyright (c) 2011 Kodematix (http://www.Kodematix.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Zip grid column filter
 *
 * @category   Kodematix
 * @package    Kodematix_ShippingTablerate
 * @author     Kodematix Team <sales@kodematix.com>
 */
class Kodematix_ShippingTablerate_Block_Adminhtml_Tablerate_Grid_Column_Filter_Zip 
    extends Mage_Adminhtml_Block_Widget_Grid_Column_Filter_Text
{
    /**
     * Get condition
     * 
     * @return array
     */
    public function getCondition()
    {
        $value = trim($this->getValue());
        if ($value == '*') return array('eq' => '');
        else return array('like'=>'%'.$this->_escapeValue($this->getValue()).'%');
    }
}
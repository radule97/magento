<?php
/**
 * Created by PhpStorm.
 * User: stephen
 * Date: 9.10.18.
 * Time: 16.17
 */

class Stephen_Hideprice_Helper_Data extends Mage_Core_Helper_Data
{
    public static function currency($value, $format = true, $includeContainer = true)
    {
        if(Mage::getStoreConfig('Abvital_Hideprice/stephen_allow/active')){
            if (Mage::getSingleton('customer/session')->isLoggedIn()) {
                return self::currencyByStore($value, null, $format, $includeContainer);
            }else {
                return false;
            }
        }else{
            return self::currencyByStore($value, null, $format, $includeContainer);
        }

    }

    public function formatPrice($price, $includeContainer = true)
    {
        if(Mage::getStoreConfig('Abvital_Hideprice/stephen_allow/active')) {
            if (Mage::getSingleton('customer/session')->isLoggedIn()) {
                return Mage::app()->getStore()->formatPrice($price, $includeContainer);
            } else {
                return false;
            }
        }else{
            return Mage::app()->getStore()->formatPrice($price, $includeContainer);
        }
    }
}
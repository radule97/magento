<?php
/**
 * Created by PhpStorm.
 * User: stephen
 * Date: 9.10.18.
 * Time: 11.31
 */
class Stephen_Hideprice_Block_Product_Widget_New extends Mage_Catalog_Block_Product_Widget_New {

    public function getPriceHtml($param1, $param2, $param3){
        if(Mage::getStoreConfig('Abvital_Hideprice/stephen_allow/active')){
            if (Mage::getSingleton('customer/session')->isLoggedIn()) {
                return parent::getPriceHtml($param1, $param2, $param3);
            }else {
                return false;
            }
        }else{
            return parent::getPriceHtml($param1, $param2, $param3);
        }
    }

}
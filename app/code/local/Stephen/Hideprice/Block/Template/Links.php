<?php
/**
 * Created by PhpStorm.
 * User: stephen
 * Date: 10.10.18.
 * Time: 12.26
 */

class Stephen_Hideprice_Block_Template_Links extends Mage_Page_Block_Template_Links
{
    public function getLinks()
    {
        if(Mage::getStoreConfig('Abvital_Hideprice/stephen_allow/active')) {
            if (!Mage::getSingleton('customer/session')->isLoggedIn()) {
                foreach ($this->_links as $key => $_link) {
                    if ($_link->getTitle() == 'My Cart' || $_link->getTitle() == 'Checkout')
                        unset($this->_links[$key]);
                }
            }
        }
        return $this->_links;
    }
}
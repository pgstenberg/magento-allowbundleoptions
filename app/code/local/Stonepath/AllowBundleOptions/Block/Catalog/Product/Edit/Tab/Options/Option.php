<?php


class Stonepath_AllowBundleOptions_Block_Catalog_Product_Edit_Tab_Options_Option extends Mage_Adminhtml_Block_Catalog_Product_Edit_Tab_Options_Option
{

    protected function _prepareLayout()
    {
    	echo "<script>document.getElementById('dynamic-price-warrning').remove();</script>";	
    	
    	return parent::_prepareLayout();
    }

}
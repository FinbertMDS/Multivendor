<?php
namespace Magestore\Multivendor\Model\ResourceModel\VendorProduct;
/**
 * Class Staff
 * @package Magestore\Multivendor\Model\ResourceModel\Vendor
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection {
    public function _construct(){
        parent::_construct();
        $this->_init('Magestore\Multivendor\Model\VendorProduct', 'Magestore\Multivendor\Model\ResourceModel\VendorProduct');
    }
}

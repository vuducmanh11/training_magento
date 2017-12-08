<?php
namespace Magestore\Zero\Model\ResourceModel;
/**
 * Class Category
 * @package Magestore\Zero\Model\ResourceModel
 */
class Category extends \Magento\Framework\Model\ResourceModel\Db\AbtractDb {
    protected function _construct()     {
        $this->init('category','category_id');
    }

}
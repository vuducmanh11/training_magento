<?php
namespace Magestore\Zero\Model\ResourceModel;
/**
 * Class Actor
 * @package Magestore\Zero\Model\ResourceModel
 */
class Actor extends \Magento\Framework\Model\ResourceModel\Db\AbtractDb {
    protected function _construct()     {
        $this->init('actor','actor_id');
    }

}
<?php
namespace Magestore\Zero\Model\ResourceModel;
/**
 * Class Film
 * @package Magestore\Zero\Model\ResourceModel
 */
class Film extends \Magento\Framework\Model\ResourceModel\Db\AbtractDb {
    protected function _construct()     {
        $this->init('film','film_id');
    }

}
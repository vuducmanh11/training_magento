<?php
namespace Magestore\Zero\Model\ResourceModel\Actor;
/**
 * Class Collection
 * @package Magestore\Zero\Model\ResourceModel\Actor
 */
class Collection extends
\Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection {
    protected $_idFieldName = 'actor_id';
    public function __construct()
    {
        parent::_construc();
        $this->_init('Magestore\Zero\Model\Actor',
            'Magestore\Zero\Model\ResourceModel\Actor');
    }
}

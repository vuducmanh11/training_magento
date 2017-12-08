<?php
namespace Magestore\Zero\Model\ResourceModel\Category;
/**
 * Class Collection
 * @package Magestore\Zero\Model\ResourceModel\Category
 */
class Collection extends
\Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection {
    protected $_idFieldName = 'category_id';
    public function __construct()
    {
        parent::_construc();
        $this->_init('Magestore\Zero\Model\Category',
            'Magestore\Zero\Model\ResourceModel\Category');
    }
}

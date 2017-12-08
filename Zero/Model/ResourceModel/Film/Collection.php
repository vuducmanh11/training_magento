<?php
namespace Magestore\Zero\Model\ResourceModel\Film;
/**
 * Class Collection
 * @package Magestore\Zero\Model\ResourceModel\Film
 */
class Collection extends
\Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection {
    protected $_idFieldName = 'film_id';
    public function __construct()
    {
        parent::_construc();
        $this->_init('Magestore\Zero\Model\Film',
            'Magestore\Zero\Model\ResourceModel\Film');
    }
}

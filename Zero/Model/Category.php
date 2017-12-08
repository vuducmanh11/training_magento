<?php
namespace Magestore\Zero\Model;
/**
 * Class Category
 * @package Magestore\Zero\Model
 */
class Category extends \Magento\Framework\Model\AbtractModel
{
    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param ResourceModel\Category $resource
     * @param ResourceModel\Category\Collection $resourceCollection
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magestore\Zero\Model\ResourceModel\Category $resource,
        \Magestore\Zero\Model\ResourceModel\Film\Category $resourceCollection
    )
    {
        parent::__construct(
            $context,
            $registry,
            $resource,
            $resourceCollection
        );
    }
}
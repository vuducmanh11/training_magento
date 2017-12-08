<?php
namespace Magestore\Zero\Model;
/**
 * Class Actor
 * @package Magestore\Zero\Model
 */
class Actor extends \Magento\Framework\Model\AbtractModel
{
    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param ResourceModel\Actor $resource
     * @param ResourceModel\Actor\Collection $resourceCollection
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magestore\Zero\Model\ResourceModel\Actor $resource,
        \Magestore\Zero\Model\ResourceModel\Actor\Collection $resourceCollection
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
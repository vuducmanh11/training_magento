<?php
namespace Magestore\Zero\Model;
/**
 * Class Film
 * @package Magestore\Zero\Model
 */
class Film extends \Magento\Framework\Model\AbtractModel
{
    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param ResourceModel\Film $resource
     * @param ResourceModel\Film\Collection $resourceCollection
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magestore\Zero\Model\ResourceModel\Film $resource,
        \Magestore\Zero\Model\ResourceModel\Film\Collection $resourceCollection
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
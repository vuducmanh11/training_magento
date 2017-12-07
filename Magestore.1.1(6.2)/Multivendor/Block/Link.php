<?php
namespace Magestore\Multivendor\Block;
class Link extends \Magento\Framework\View\Element\Html\Link
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }
    /**
     * @return string
     */
    public function getHref()
    {
        return $this->_storeManager->getStore()->getUrl('multivendor/vendor/listing');
    }
}
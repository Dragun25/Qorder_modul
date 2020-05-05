<?php


namespace Dragun\Qorder\Controller\Adminhtml;

/**
 * Class Order
 *
 * @package Dragun\Qorder\Controller\Adminhtml
 */
abstract class Order extends \Magento\Backend\App\Action
{

    const ADMIN_RESOURCE = 'Dragun_Qorder::top_level';
    protected $_coreRegistry;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Registry $coreRegistry
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry
    ) {
        $this->_coreRegistry = $coreRegistry;
        parent::__construct($context);
    }

    /**
     * Init page
     *
     * @param \Magento\Backend\Model\View\Result\Page $resultPage
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function initPage($resultPage)
    {
        $resultPage->setActiveMenu(self::ADMIN_RESOURCE)
            ->addBreadcrumb(__('Dragun'), __('Dragun'))
            ->addBreadcrumb(__('Order'), __('Order'));
        return $resultPage;
    }
}


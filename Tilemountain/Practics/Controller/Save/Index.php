<?php

namespace Tilemountain\Practics\Controller\Save;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Action;
use Tilemountain\Practics\Api\Data\InventoryInterface;
use Tilemountain\Practics\Model\InventoryRepository;

/**
 * Class Index
 * @package Tilemountain\Practics\Controller\Save\Index
 */
class Index extends Action
{


   /**
     * Index resultPageFactory
     * @var PageFactory
     */
    protected $resultPageFactory;
    protected $inventoryRepository;
    protected $inventoryInterface;

    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(Context $context, PageFactory $resultPageFactory, InventoryRepository $inventoryRepository, InventoryInterface $inventoryInterface)
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->inventoryRepository = $inventoryRepository;
        $this->inventoryInterface = $inventoryInterface;
        return parent::__construct($context);
    }

    /**
     * Function execute
     * @return Page
     */
    public function execute()
    {
        $this->inventoryInterface->setStoreId('1');
        $this->inventoryInterface->setCategoryId('40');
        $this->inventoryInterface->setCategoryName('Test CategoryName');
        $this->inventoryInterface->setProductName('Test ProductName');
        $this->inventoryInterface->setProductId('46');
        $this->inventoryRepository->save($this->inventoryInterface);
        return $this->resultPageFactory->create();
    }
}

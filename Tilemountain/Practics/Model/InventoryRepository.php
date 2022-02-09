<?php

namespace Tilemountain\Practics\Model;

use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Tilemountain\Practics\Api\Data\InventoryInterface;

class InventoryRepository implements \Tilemountain\Practics\Api\InventoryRepositoryInterface
{
    protected $inventoryFactory;
    protected $inventoryResourceModel;

    public function __construct(
        \Tilemountain\Practics\Model\InventoryFactory $inventoryFactory,
        \Tilemountain\Practics\Model\ResourceModel\Inventory $inventoryResourceModel
    ) {
        $this->inventoryFactory = $inventoryFactory;
        $this->inventoryResourceModel = $inventoryResourceModel;
    }

    public function save(InventoryInterface $data)
    {
        try {
            $this->inventoryResourceModel->save($data);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the data: %1',
                $exception->getMessage()
            ));
        }
        return $data;
    }

    /**
     * @param int $id
     * @return InventoryInterface|void
     * @throws NoSuchEntityException
     */
    public function deleteById($id)
    {
        $data = $this->getById($id);
        return $this->delete($data);
    }

    /**
     * @param $id
     * @return InventoryInterface
     * @throws NoSuchEntityException
     */
    public function getById($id)
    {
        $inventory = $this->inventoryFactory->create();
        $this->inventoryResourceModel->load($inventory, $id);
        if (!$inventory->getId()) {
            throw new NoSuchEntityException(__('Unable to find Inventory with ID "%1"', $id));
        }
        return $inventory->getData();
    }

    public function getList(SearchCriteriaInterface $criteria)
    {
        // TODO: Implement getList() method.
    }

    public function delete(InventoryInterface $model)
    {
        $this->inventoryResourceModel->delete($model);
    }
}


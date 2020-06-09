<?php


namespace Dragun\Qorder\Model\Data;

use Dragun\Qorder\Api\Data\OrderInterface;
use Magento\Framework\Api\AbstractExtensibleObject;

/**
 * Class Order
 *
 * @package Dragun\Qorder\Model\Data
 */
class Order extends AbstractExtensibleObject implements OrderInterface
{

    /**
     * Get order_id
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->_get(self::ORDER_ID);
    }

    /**
     * Set order_id
     * @param string $orderId
     * @return \Dragun\Qorder\Api\Data\OrderInterface
     */
    public function setOrderId($orderId)
    {
        return $this->setData(self::ORDER_ID, $orderId);
    }

    /**
     * Get name
     * @return string|null
     */
    public function getName()
    {
        return $this->_get(self::NAME);
    }

    /**
     * Set name
     * @param string $name
     * @return \Dragun\Qorder\Api\Data\OrderInterface
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \Dragun\Qorder\Api\Data\OrderExtensionInterface|null
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * Set an extension attributes object.
     * @param \Dragun\Qorder\Api\Data\OrderExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Dragun\Qorder\Api\Data\OrderExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }

    /**
     * Get sku
     * @return string|null
     */
    public function getSku()
    {
        return $this->_get(self::SKU);
    }

    /**
     * Set sku
     * @param string $sku
     * @return \Dragun\Qorder\Api\Data\OrderInterface
     */
    public function setSku($sku)
    {
        return $this->setData(self::SKU, $sku);
    }

    /**
     * Get phone
     * @return string|null
     */
    public function getPhone()
    {
        return $this->_get(self::PHONE);
    }

    /**
     * Set phone
     * @param string $phone
     * @return \Dragun\Qorder\Api\Data\OrderInterface
     */
    public function setPhone($phone)
    {
        return $this->setData(self::PHONE, $phone);
    }

    /**
     * Get email
     * @return string|null
     */
    public function getEmail()
    {
        return $this->_get(self::EMAIL);
    }

    /**
     * Set email
     * @param string $email
     * @return \Dragun\Qorder\Api\Data\OrderInterface
     */
    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }

    /**
     * Get status
     * @return string|null
     */
    public function getStatus()
    {
        return $this->_get(self::STATUS);
    }

    /**
     * Set status
     * @param string $status
     * @return \Dragun\Qorder\Api\Data\OrderInterface
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * Get CreateTime
     * @return string|null
     */
    public function getCreateTime()
    {
        return $this->_get(self::CREATE_TIME);
    }

    /**
     * Set CreateTime
     * @param string $createTime
     * @return \Dragun\Qorder\Api\Data\OrderInterface
     */
    public function setCreateTime($createTime)
    {
        return $this->setData(self::CREATE_TIME, $createTime);
    }

    /**
     * Get UpdateTime
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->_get(self::UPDATE_TIME);
    }

    /**
     * Set UpdateTime
     * @param string $updateTime
     * @return \Dragun\Qorder\Api\Data\OrderInterface
     */
    public function setUpdateTime($updateTime)
    {
        return $this->setData(self::UPDATE_TIME, $updateTime);
    }
}


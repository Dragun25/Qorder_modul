<?php


namespace Dragun\Qorder\Api\Data;

/**
 * Interface OrderInterface
 *
 * @package Dragun\Qorder\Api\Data
 */
interface OrderInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{

    const ORDER_ID = 'order_id';
    const SKU = 'sku';
    const NAME = 'name';
    const STATUS = 'status';
    const PHONE = 'phone';
    const EMAIL = 'email';
    const CREATE_TIME = 'created_datetime';
    const UPDATE_TIME = 'updated_datetime';


    /**
     * Get order_id
     * @return string|null
     */
    public function getOrderId();

    /**
     * Set order_id
     * @param string $orderId
     * @return \Dragun\Qorder\Api\Data\OrderInterface
     */
    public function setOrderId($orderId);

    /**
     * Get name
     * @return string|null
     */
    public function getName();

    /**
     * Set name
     * @param string $name
     * @return \Dragun\Qorder\Api\Data\OrderInterface
     */
    public function setName($name);

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \Dragun\Qorder\Api\Data\OrderExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     * @param \Dragun\Qorder\Api\Data\OrderExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Dragun\Qorder\Api\Data\OrderExtensionInterface $extensionAttributes
    );

    /**
     * Get sku
     * @return string|null
     */
    public function getSku();

    /**
     * Set sku
     * @param string $sku
     * @return \Dragun\Qorder\Api\Data\OrderInterface
     */
    public function setSku($sku);

    /**
     * Get phone
     * @return string|null
     */
    public function getPhone();

    /**
     * Set phone
     * @param string $phone
     * @return \Dragun\Qorder\Api\Data\OrderInterface
     */
    public function setPhone($phone);

    /**
     * Get email
     * @return string|null
     */
    public function getEmail();

    /**
     * Set email
     * @param string $email
     * @return \Dragun\Qorder\Api\Data\OrderInterface
     */
    public function setEmail($email);

    /**
     * Get status
     * @return string|null
     */
    public function getStatus();

    /**
     * Set status
     * @param string $status
     * @return \Dragun\Qorder\Api\Data\OrderInterface
     */
    public function setStatus($status);

    /**
     * Get CreateTime
     * @return string|null
     */
    public function getCreateTime();

    /**
     * Set CreateTime
     * @param string $createTime
     * @return \Dragun\Qorder\Api\Data\OrderInterface
     */
    public function setCreateTime($createTime);

    /**
     * Get UpdateTime
     * @return string|null
     */
    public function getUpdateTime();

    /**
     * Set UpdateTime
     * @param string $updateTime
     * @return \Dragun\Qorder\Api\Data\OrderInterface
     */
    public function setUpdateTime($updateTime);



}


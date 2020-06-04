<?php


namespace Dragun\Qorder\Api\Data;

/**
 * Interface StatusInterface
 *
 * @package Dragun\Qorder\Api\Data
 */
interface StatusInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{

    const STATUS_CODE = 'status_code';
    const STATUS_ID = 'status_id';
    const LABEL = 'label';
    const IS_DEFAULT = 'is_default';

    /**
     * Get status_id
     * @return string|null
     */
    public function getStatusId();

    /**
     * Set status_id
     * @param string $statusId
     * @return \Dragun\Qorder\Api\Data\StatusInterface
     */
    public function setStatusId($statusId);

    /**
     * Get status_code
     * @return string|null
     */
    public function getStatusCode();

    /**
     * Set status_code
     * @param string $statusCode
     * @return \Dragun\Qorder\Api\Data\StatusInterface
     */
    public function setStatusCode($statusCode);

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \Dragun\Qorder\Api\Data\StatusExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     * @param \Dragun\Qorder\Api\Data\StatusExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Dragun\Qorder\Api\Data\StatusExtensionInterface $extensionAttributes
    );

    /**
     * Get label
     * @return string|null
     */
    public function getLabel();

    /**
     * Set label
     * @param string $label
     * @return \Dragun\Qorder\Api\Data\StatusInterface
     */
    public function setLabel($label);

    /**
     * Get isDefault
     * @return string|null
     */
    public function getIsDefault();

    /**
     * Set isDefault
     * @param string $isDefault
     * @return \Dragun\Qorder\Api\Data\StatusInterface
     */
    public function setIsDefault($isDefault);
}


<?php


namespace Dragun\Qorder\Model\Data;

use Dragun\Qorder\Api\Data\StatusInterface;

/**
 * Class Status
 *
 * @package Dragun\Qorder\Model\Data
 */
class Status extends \Magento\Framework\Api\AbstractExtensibleObject implements StatusInterface
{

    /**
     * Get status_id
     * @return string|null
     */
    public function getStatusId()
    {
        return $this->_get(self::STATUS_ID);
    }

    /**
     * Set status_id
     * @param string $statusId
     * @return \Dragun\Qorder\Api\Data\StatusInterface
     */
    public function setStatusId($statusId)
    {
        return $this->setData(self::STATUS_ID, $statusId);
    }

    /**
     * Get status_code
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->_get(self::STATUS_CODE);
    }

    /**
     * Set status_code
     * @param string $statusCode
     * @return \Dragun\Qorder\Api\Data\StatusInterface
     */
    public function setStatusCode($statusCode)
    {
        return $this->setData(self::STATUS_CODE, $statusCode);
    }

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \Dragun\Qorder\Api\Data\StatusExtensionInterface|null
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * Set an extension attributes object.
     * @param \Dragun\Qorder\Api\Data\StatusExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Dragun\Qorder\Api\Data\StatusExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }

    /**
     * Get label
     * @return string|null
     */
    public function getLabel()
    {
        return $this->_get(self::LABEL);
    }

    /**
     * Set label
     * @param string $label
     * @return \Dragun\Qorder\Api\Data\StatusInterface
     */
    public function setLabel($label)
    {
        return $this->setData(self::LABEL, $label);
    }

    /**
     * Get isDefault
     * @return string|null
     */
    public function getIsDefault()
    {
        return $this->_get(self::IS_DEFAULT);
    }

    /**
     * Set isDefault
     * @param string $isDefault
     * @return \Dragun\Qorder\Api\Data\StatusInterface
     */
    public function setIsDefault($isDefault)
    {
        return $this->setData(self::IS_DEFAULT, $isDefault);
    }
}


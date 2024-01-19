<?php
/**
 * Copyright © www.jyotiranjan.in All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Jrb\CrudOperation\Model;

use Jrb\CrudOperation\Api\Data\StudentInterface;
use Magento\Framework\Model\AbstractModel;

class Student extends AbstractModel implements StudentInterface
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\Jrb\CrudOperation\Model\ResourceModel\Student::class);
    }

    /**
     * @inheritDoc
     */
    public function getStudentId()
    {
        return $this->getData(self::STUDENT_ID);
    }

    /**
     * @inheritDoc
     */
    public function setStudentId($studentId)
    {
        return $this->setData(self::STUDENT_ID, $studentId);
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * @inheritDoc
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * @inheritDoc
     */
    public function getAge()
    {
        return $this->getData(self::AGE);
    }

    /**
     * @inheritDoc
     */
    public function setAge($age)
    {
        return $this->setData(self::AGE, $age);
    }

    /**
     * @inheritDoc
     */
    public function getAddress()
    {
        return $this->getData(self::ADDRESS);
    }

    /**
     * @inheritDoc
     */
    public function setAddress($address)
    {
        return $this->setData(self::ADDRESS, $address);
    }

    /**
     * @inheritDoc
     */
    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    /**
     * @inheritDoc
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }
}


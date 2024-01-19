<?php
/**
 * Copyright © www.jyotiranjan.in All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Jrb\CrudOperation\Api\Data;

interface StudentInterface
{

    const NAME = 'name';
    const STUDENT_ID = 'student_id';
    const AGE = 'age';
    const STATUS = 'status';
    const ADDRESS = 'address';

    /**
     * Get student_id
     * @return string|null
     */
    public function getStudentId();

    /**
     * Set student_id
     * @param string $studentId
     * @return \Jrb\CrudOperation\Student\Api\Data\StudentInterface
     */
    public function setStudentId($studentId);

    /**
     * Get name
     * @return string|null
     */
    public function getName();

    /**
     * Set name
     * @param string $name
     * @return \Jrb\CrudOperation\Student\Api\Data\StudentInterface
     */
    public function setName($name);

    /**
     * Get age
     * @return string|null
     */
    public function getAge();

    /**
     * Set age
     * @param string $age
     * @return \Jrb\CrudOperation\Student\Api\Data\StudentInterface
     */
    public function setAge($age);

    /**
     * Get address
     * @return string|null
     */
    public function getAddress();

    /**
     * Set address
     * @param string $address
     * @return \Jrb\CrudOperation\Student\Api\Data\StudentInterface
     */
    public function setAddress($address);

    /**
     * Get status
     * @return string|null
     */
    public function getStatus();

    /**
     * Set status
     * @param string $status
     * @return \Jrb\CrudOperation\Student\Api\Data\StudentInterface
     */
    public function setStatus($status);
}


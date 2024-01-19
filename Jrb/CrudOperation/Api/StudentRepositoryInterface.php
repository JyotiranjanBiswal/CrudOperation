<?php
/**
 * Copyright © www.jyotiranjan.in All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Jrb\CrudOperation\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface StudentRepositoryInterface
{

    /**
     * Save Student
     * @param \Jrb\CrudOperation\Api\Data\StudentInterface $student
     * @return \Jrb\CrudOperation\Api\Data\StudentInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Jrb\CrudOperation\Api\Data\StudentInterface $student
    );

    /**
     * Retrieve Student
     * @param string $studentId
     * @return \Jrb\CrudOperation\Api\Data\StudentInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($studentId);

    /**
     * Retrieve Student matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Jrb\CrudOperation\Api\Data\StudentSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Student
     * @param \Jrb\CrudOperation\Api\Data\StudentInterface $student
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Jrb\CrudOperation\Api\Data\StudentInterface $student
    );

    /**
     * Delete Student by ID
     * @param string $studentId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($studentId);
}


<?php
/**
 * Copyright © www.jyotiranjan.in All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Jrb\CrudOperation\Api\Data;

interface StudentSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Student list.
     * @return \Jrb\CrudOperation\Api\Data\StudentInterface[]
     */
    public function getItems();

    /**
     * Set name list.
     * @param \Jrb\CrudOperation\Api\Data\StudentInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}


<?php
/**
 * Copyright © www.jyotiranjan.in All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Jrb\CrudOperation\Model\ResourceModel\Student;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     * @inheritDoc
     */
    protected $_idFieldName = 'student_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \Jrb\CrudOperation\Model\Student::class,
            \Jrb\CrudOperation\Model\ResourceModel\Student::class
        );
    }
}


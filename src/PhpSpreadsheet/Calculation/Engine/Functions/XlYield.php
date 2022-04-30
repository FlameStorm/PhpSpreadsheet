<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\Engine\Functions;

use PhpOffice\PhpSpreadsheet\Calculation\Category;
use PhpOffice\PhpSpreadsheet\Calculation\Engine\XlFunctionAbstract;
use PhpOffice\PhpSpreadsheet\Calculation\Functions;

/**
 * @inheritDoc
 */
class XlYield extends XlFunctionAbstract
{
    /**
     * @var string
     */
    protected $name = 'YIELD';

    /**
     * @var string
     */
    protected $category = Category::CATEGORY_FINANCIAL;

    /**
     * @var callable
     */
    protected $functionCall = [Functions::class, 'DUMMY'];

    /**
     * @var string
     */
    protected $argumentCount = '6,7';
}
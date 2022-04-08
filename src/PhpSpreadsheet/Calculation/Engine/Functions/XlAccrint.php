<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\Engine\Functions;

use PhpOffice\PhpSpreadsheet\Calculation\Category;
use PhpOffice\PhpSpreadsheet\Calculation\Engine\XlFunctionAbstract;
use PhpOffice\PhpSpreadsheet\Calculation\Financial\Securities\AccruedInterest;

/**
 * @inheritDoc
 */
class XlAccrint extends XlFunctionAbstract
{
    /**
     * @var string
     */
    protected $name = 'ACCRINT';

    /**
     * @var string
     */
    protected $category = Category::CATEGORY_FINANCIAL;

    /**
     * @var callable
     */
    protected $functionCall = [AccruedInterest::class, 'periodic'];

    /**
     * @var string
     */
    protected $argumentCount = '4-8';
}
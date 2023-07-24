<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

final class EmployeeEnum extends Enum implements LocalizedEnum
{
    const Private = 1;
    const Engineer = 2;
}

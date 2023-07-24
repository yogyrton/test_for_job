<?php declare(strict_types=1);

use App\Enums\EmployeeEnum;

return [

    EmployeeEnum::class => [
        EmployeeEnum::Private => 'Рядовой сотрудник',
        EmployeeEnum::Engineer => 'Инженер',
    ],

];

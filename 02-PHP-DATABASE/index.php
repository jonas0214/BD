<?php

use App\Controllers\IncomexController;
use App\Enums\IncomeTypeEnum;
use App\Enums\PaymentMethodEnum;

require("vendor/autoload.php");

$incomes_controller = new IncomexController();
$incomes_controller->store([
    "payment_method" => PaymentMethodEnum::BankAccount->value,
    "type" => IncomeTypeEnum::Salary->value,
    "date" => date("Y-m-d H:i:s"),
    "amount"=> 1000000,
    "description"=> "Pago de mi salario por mi arduo y buen trabajo"
    
]);

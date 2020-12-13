<?php
namespace App\Service;


class LicencePriceCalculate
{
    public static function calculatePrice(int $teamSize): float
    {
        return $teamSize <= 5
                ? $teamSize * 15 
                : 50 + ($teamSize - 5) * 10 ;
    }
}
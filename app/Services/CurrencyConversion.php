<?php

namespace App\Services;

use App\Models\Currency;

class CurrencyConversion
{
    protected static $container;

    public static function loadContainer()
    {
        if (is_null(self::$container)) {
            $currencies = Currency::get();
            foreach ($currencies as $currency) {
                self::$container[$currency->code] = $currency;
            }
        }
    }

    public static function getCurrencies()
    {
        self::loadContainer();

        return self::$container;
    }

    public static function convert($sum, $originCurrencyCode = 'UAH', $targetCurrencyCode = null)
    {
        self::loadContainer();

        $originCurrency = self::$container[$originCurrencyCode];
        if(is_null($targetCurrencyCode)) {
            $targetCurrencyCode = session('currency', 'UAH');
        }
        $targetCurrency = self::$container[$targetCurrencyCode];
        return round($sum * $originCurrency->rate / $targetCurrency->rate, 2);
    }

    public static function getCurrencySymbol()
    {
        self::loadContainer();

        $currencyCode = session('currency', 'UAH');
        $currency = self::$container[$currencyCode];

        return $currency->symbol;
    }
}

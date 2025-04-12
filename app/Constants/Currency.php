<?php

namespace App\Constants;

class Currency
{
    /**
     * Define the currency code for the Indonesian Rupiah.
     *
     * @var string
     */
    const RUPIAH = 'IDR';

    /**
     * Define the currency code for the US Dollar.
     *
     * @var string
     */
    const US_DOLLAR = 'USD';

    /**
     * Define the currency code for the Japanese Yen.
     *
     * @var string
     */
    const JAPANESE_YEN = 'JPY';

    /**
     * Define the list of currencies
     *
     * @var array
     */
    const COLLECTS = [self::RUPIAH, self::US_DOLLAR, self::JAPANESE_YEN];
}

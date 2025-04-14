<?php

declare(strict_types=1);

if (! function_exists('indonesianCurrencyFormat')) {

    function indonesianCurrencyFormat($nominal): string
    {
        $output = [];

        if ($nominal >= 1000000000) {
            $miliar = floor($nominal / 1000000000);
            $output[] = "{$miliar}M";
            $nominal %= 1000000000;
        }

        if ($nominal >= 1000000) {
            $juta = floor($nominal / 1000000);
            $output[] = "{$juta}JT";
            $nominal %= 1000000;
        }

        if ($nominal >= 1000) {
            $ribu = floor($nominal / 1000);
            $output[] = "{$ribu}K";
            $nominal %= 1000;
        }

        if ($nominal > 0 && empty($output)) {
            $output[] = number_format($nominal, 0, ',', '.');
        }

        return implode(' ', $output);
    }
}

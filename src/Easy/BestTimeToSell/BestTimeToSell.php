<?php

namespace PhpLeetCode\Easy\BestTimeToSell;

class BestTimeToSell
{
    /**
     * @param int [] $prices
     * @return int
     */
    public function maxProfit(array $prices): int
    {
        $minPrice = $prices[0];
        $maxProfit = 0;

        foreach ($prices as $price) {
            $minPrice = min($price, $minPrice);
            $maxProfit = max($price - $minPrice, $maxProfit);
        }

        return $maxProfit;
    }
}
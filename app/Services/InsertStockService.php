<?php

namespace App\Services;

use App\Models\Stock;

class InsertStockService
{
    public static function execute(Stock $stock): void
    {
        query()->insert('stocks')
            ->values([
                'id' => ':id',
                'regular_market_previous_close' => ':regular_market_previous_close',
                'regular_market_open' => ':regular_market_open',
                'bid' => ':bid',
                'bid_size' => ':bid_size',
                'ask' => ':ask',
                'ask_size' => ':ask_size',
                'regular_market_day_low' => ':regular_market_day_low',
                'regular_market_day_high' => ':regular_market_day_high',
                'fifty_two_week_low' => ':fifty_two_week_low',
                'fifty_two_week_high' => ':fifty_two_week_high',
                'regular_market_volume' => ':regular_market_volume',
                'created_at' => ':created_at'
            ])
            ->setParameters([
                'id' => $stock->id(),
                'regular_market_previous_close' => $stock->regularMarketPreviousClose(),
                'regular_market_open' => $stock->regularMarketOpen(),
                'bid' => $stock->bid(),
                'bid_size' => $stock->bidSize(),
                'ask' => $stock->ask(),
                'ask_size' => $stock->askSize(),
                'regular_market_day_low' => $stock->regularMarketDayLow(),
                'regular_market_day_high' => $stock->regularMarketDayHigh(),
                'fifty_two_week_low' => $stock->fiftyTwoWeekLow(),
                'fifty_two_week_high' => $stock->fiftyTwoWeekHigh(),
                'regular_market_volume' => $stock->regularMarketVolume(),
                'created_at' => $stock->createdAt()
            ])
            ->execute();
    }
}
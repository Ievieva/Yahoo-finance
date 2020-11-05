<?php

namespace App\Services;

use App\Models\Stock;

class UpdateStockService
{
    public static function execute(Stock $stock): void
    {
        query()->update('stocks')
            ->set('id', ':id')
            ->set('regular_market_previous_close', ':regular_market_previous_close')
            ->set('regular_market_open', ':regular_market_open')
                ->set('bid', ':bid')
                ->set('bid_size', ':bid_size')
                ->set('ask', ':ask')
                ->set('ask_size', ':ask_size')
                ->set('regular_market_day_low', ':regular_market_day_low')
                ->set('regular_market_day_high', ':regular_market_day_high')
                ->set('fifty_two_week_low', ':fifty_two_week_low')
                ->set('fifty_two_week_high', ':fifty_two_week_high')
                ->set('regular_market_volume', ':regular_market_volume')
                ->set('created_at', ':created_at')
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
            ->where('id = :id')
            ->setParameter('id', $stock->id())
            ->execute();
    }
}

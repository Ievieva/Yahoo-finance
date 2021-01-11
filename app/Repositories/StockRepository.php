<?php

namespace App\Repositories;

use App\Models\Stock;

class StockRepository
{
    public function getById(string $id): ?Stock
    {
        $query = query()
            ->select('*')
            ->from('stocks')
            ->where('id = :id')
            ->setParameter('id', $id)
            ->execute()
            ->fetchAssociative();
        if ($query) {
            return new Stock(
                $query['id'],
                $query['regular_market_previous_close'],
                $query['regular_market_open'],
                $query['bid'],
                $query['bid_size'],
                $query['ask'],
                $query['ask_size'],
                $query['regular_market_day_low'],
                $query['regular_market_day_high'],
                $query['fifty_two_week_low'],
                $query['fifty_two_week_high'],
                $query['regular_market_volume'],
                $query['created_at']
            );
        } else {
            return null;
        }
    }

    public static function store(Stock $stock): void
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

    public static function update(Stock $stock): void
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

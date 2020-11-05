<?php

namespace App\Services;

use App\Models\Stock;

class GetStockService
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
}

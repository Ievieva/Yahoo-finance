<?php

namespace App\Services;

use App\Models\Stock;
use Carbon\Carbon;
use Scheb\YahooFinanceApi\ApiClientFactory;

class GetStockFromApiService
{
    public function getById(string $id): Stock
    {
        $client = ApiClientFactory::createApiClient();
        $quote =  $client->getQuote($id);

        if (isset($quote)) {
            return new Stock(
                $quote->getSymbol(),
                $quote->getRegularMarketPreviousClose(),
                $quote->getRegularMarketOpen(),
                $quote->getBid(),
                $quote->getBidSize(),
                $quote->getAsk(),
                $quote->getAskSize(),
                $quote->getRegularMarketDayLow(),
                $quote->getRegularMarketDayHigh(),
                $quote->getFiftyTwoWeekLow(),
                $quote->getFiftyTwoWeekHigh(),
                $quote->getRegularMarketVolume(),
                Carbon::now()->toDateTimeString()
            );
        }
    }
}
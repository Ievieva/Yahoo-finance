<?php

namespace App\Repositories;

use App\Models\Stock;
use Carbon\Carbon;
use Scheb\YahooFinanceApi\ApiClientFactory;

class YahooRepository
{
    public static function getById(string $id)
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
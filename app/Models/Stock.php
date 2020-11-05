<?php

namespace App\Models;

class Stock
{
    private string $id;
    private float $regularMarketPreviousClose;
    private float $regularMarketOpen;
    private float $bid;
    private int $bidSize;
    private float $ask;
    private int $askSize;
    private float $regularMarketDayLow;
    private float $regularMarketDayHigh;
    private float $fiftyTwoWeekLow;
    private float $fiftyTwoWeekHigh;
    private int $regularMarketVolume;
    private string $createdAt;

    public function __construct(
        string $id,
        float $regularMarketPreviousClose,
        float $regularMarketOpen,
        float $bid,
        int $bidSize,
        float $ask,
        int $askSize,
        float $regularMarketDayLow,
        float $regularMarketDayHigh,
        float $fiftyTwoWeekLow,
        float $fiftyTwoWeekHigh,
        int $regularMarketVolume,
        string $createdAt
    )
    {
        $this->id = $id;
        $this->regularMarketPreviousClose = $regularMarketPreviousClose;
        $this->regularMarketOpen = $regularMarketOpen;
        $this->bid = $bid;
        $this->bidSize = $bidSize;
        $this->ask = $ask;
        $this->askSize = $askSize;
        $this->regularMarketDayLow = $regularMarketDayLow;
        $this->regularMarketDayHigh = $regularMarketDayHigh;
        $this->fiftyTwoWeekLow = $fiftyTwoWeekLow;
        $this->fiftyTwoWeekHigh = $fiftyTwoWeekHigh;
        $this->regularMarketVolume = $regularMarketVolume;
        $this->createdAt = $createdAt;
    }

    public function id(): string
    {
        return $this->id;
    }

    public function regularMarketPreviousClose(): string
    {
        return $this->regularMarketPreviousClose;
    }

    public function regularMarketOpen(): string
    {
        return $this->regularMarketOpen;
    }

    public function bid(): string
    {
        return $this->bid;
    }

    public function bidSize(): string
    {
        return $this->bidSize;
    }

    public function ask(): string
    {
        return $this->ask;
    }

    public function askSize(): string
    {
        return $this->askSize;
    }

    public function regularMarketDayLow(): string
    {
        return $this->regularMarketDayLow;
    }

    public function regularMarketDayHigh(): string
    {
        return $this->regularMarketDayHigh;
    }

    public function fiftyTwoWeekLow(): string
    {
        return $this->fiftyTwoWeekLow;
    }

    public function fiftyTwoWeekHigh(): string
    {
        return $this->fiftyTwoWeekHigh;
    }

    public function regularMarketVolume(): string
    {
        return $this->regularMarketVolume;
    }

    public function createdAt(): string
    {
        return $this->createdAt;
    }
}

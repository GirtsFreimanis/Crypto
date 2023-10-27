<?php

declare(strict_types=1);

namespace App;
class CryptoInfo
{
    private string $symbol;
    private float $priceChangePercent;
    private float $prevClosePrice;
    private float $lastPrice;
    private float $bidPrice;
    private float $askPrice;
    private float $volume;

    public function __construct(
        string $symbol,
        string $priceChangePercent,
        string $prevClosePrice,
        string $lastPrice,
        string $bidPrice,
        string $askPrice,
        string $volume
    )
    {
        $this->symbol = $symbol;
        $this->priceChangePercent = (float)$priceChangePercent;
        $this->prevClosePrice = (float)$prevClosePrice;
        $this->lastPrice = (float)$lastPrice;
        $this->bidPrice = (float)$bidPrice;
        $this->askPrice = (float)$askPrice;
        $this->volume = (float)$volume;
    }

    public function symbol(): string
    {
        return $this->symbol;
    }

    public function priceChangePercent(): float
    {
        return $this->priceChangePercent;
    }

    public function prevClosePrice(): float
    {
        return $this->prevClosePrice;
    }

    public function lastPrice(): float
    {
        return $this->lastPrice;
    }

    public function bidPrice(): float
    {
        return $this->bidPrice;
    }

    public function askPrice(): float
    {
        return $this->askPrice;
    }

    public function volume(): float
    {
        return $this->volume;
    }
}
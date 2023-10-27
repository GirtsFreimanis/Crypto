<?php

declare(strict_types=1);

namespace App;

class CryptoApi
{
    private string $baseUrl;

    public function __construct(string $baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    public function getCryptoInfo(string $base): CryptoInfo
    {
        $url = $this->baseUrl . $base . "BTC";
        $result = json_decode(file_get_contents($url));
        return new CryptoInfo(
            $result->symbol,
            $result->priceChangePercent,
            $result->prevClosePrice,
            $result->lastPrice,
            $result->bidPrice,
            $result->askPrice,
            $result->volume
        );
    }
}
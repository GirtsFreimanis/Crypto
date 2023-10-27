<?php

declare(strict_types=1);

require_once "vendor/autoload.php";

use App\CryptoApi;

$baseUrl = "https://api4.binance.com/api/v3/ticker/24hr?symbol=";
$cryptoApi = new cryptoApi($baseUrl);

$baseCrypto = trim(readline("enter base Crypto to BTC (ex. ETH)>"));
$cryptoInfo = $cryptoApi->getCryptoInfo($baseCrypto);
echo
"
symbol: {$cryptoInfo->symbol()}
price change in percent: {$cryptoInfo->priceChangePercent()}
previous close price: {$cryptoInfo->prevClosePrice()}
latest price: {$cryptoInfo->lastPrice()}
sell price: {$cryptoInfo->bidPrice()}
buy price: {$cryptoInfo->askPrice()}
volume: {$cryptoInfo->volume()}
";


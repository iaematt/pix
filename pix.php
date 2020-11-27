<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/config.php';

use \App\Pix\Payload;
use Mpdf\QrCode\QrCode;
use Mpdf\QrCode\Output;

// Instancia principal do payload Pix
$obPayload =
  (new Payload)
  -> setPixKey($defaultPíxKey)
  -> setDescription($defaultDescription . $order)
  -> setMerchantName($defaultMerchantName)
  -> setMerchantCity($defaultMerchantCity)
  -> setAmount($amount)
  -> setTxid($defaultTxid);

// Código de pagamento Pix
$payloadQrCode = $obPayload->getPayload();

// Instancia do Qr Code
$obQrCode = new QrCode($payloadQrCode);

// Imagem do Qr Code
$image = (new Output\Png) -> output($obQrCode, 400);

# Gerador de QrCode para pagamentos Pix

Gerador de QrCode para pagamentos Pix desenvolvido em PHP seguindo o tutorial em vídeo do Willian Costa, [acesse aqui o vídeo](https://www.youtube.com/watch?v=eO11iFgrdCA)

## Instalação e uso

Clone [esse repositório](https://github.com/iaematt/qrcode_pix) e faça as instalações:

```
git clone https://github.com/iaematt/qrcode_pix.git

# acesse a pasta e use o composer
cd ./qrcode_pix
composer install
```

Acesse o arquivo de configurações (_config.example.php_) e faça os ajustes necessários:

```
<?php

/**
 * Valores padrões
 */
// Chave Pix
$defaultPíxKey = "";
// Descrição do pedido de pagamento
$defaultDescription = ""; //ex: Pagamento do pedido
// Nome da pessoa responsável pela conta
$defaultMerchantName = "";
// Cidade da pessoa responsável pela conta
$defaultMerchantCity = "";
// Txid exibido na hora da compra, por ex: nome_da_empresa
$defaultTxid = "";
```

Após as modificações, alterar o nome do arquivo para (_config.php_).

Acesse o projeto com localhost/qrcode_pix.

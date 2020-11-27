<?php

$order = $_GET['order'];
$amount = $_GET['amount'];

if(empty($order) && empty($amount))
  header('location: ./index.php?order=123&amount=0.50');

require __DIR__ . '/pix.php';

?>
<!DOCTYPE html>
<html lang="pt/BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="public/assets/css/style.css" rel="stylesheet"/>
  <link href="public/assets/img/favicon.ico" rel="shortcut icon" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet" />

  <title>Qr Code Pix - Generator</title>
</head>

<body>
  <div class="container">
    <h1 class="title">QrCode Pix</h1>

    <img src="data:image/png;base64, <?php echo base64_encode($image); ?>" />

    <p>
      <h2 class="subtitle">Código Pix</h2>

      <input value="<?php echo $payloadQrCode; ?>" class="input" id="code"  />
    </p>
  </div>

  <script type="text/javascript">
    document.getElementById("code").onclick = function() {
      document.getElementById("code").select();
    }
  </script>
</body>
</html>

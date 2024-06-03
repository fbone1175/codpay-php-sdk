# CodPay SDK for PHP

Esta biblioteca fornece aos desenvolvedores um conjunto simples de vínculos para ajudá-lo a integrar a API do Codpay a um site e começar a receber pagamentos via pix, card, transfe.

## Utílização

Primeiros passos com pagamento por meio dos formulários do seu próprio site

```php
require_once 'vendor/autoload.php';

use CodPay\Api\Amount;
use CodPay\Api\Payer;
use CodPay\Api\Payment;
use CodPay\Api\RedirectUrls;
use CodPay\Api\Transaction;

    $payer = new Payer();
    $payer->setPaymentMethod('Pix');

    $amountIns = new Amount($amount);
    $amountIns->setTotal($amount)
    ->setCurrency('BRL')
    ->setReferencia($txid);

    $trans = new Transaction();
    $trans->setAmount($amountIns);

    $urls = new RedirectUrls();
    $urls->setSuccessUrl($dominio.'/notification/ipn.php')
    ->setCancelUrl ($dominio.'/cancel');

    $payment = new Payment();
    $payment->setCredentials(
      ['client_id' => $client_id,
        'client_secret' => $client_secret,
      ])
    ->setRedirectUrls($urls)
    ->setPayer($payer)
    ->setTransaction($trans);
    try {
      
       $payment->create();
       
      if ($payment->getApprovedUrl() == false) {
        echo 'Metodo de pagamento indisponivel no momento.';
        exit;
      } 

      $jsonData = file_get_contents($payment->getApprovedUrl());
      $arrayData = json_decode($jsonData, true);

      //QrCode e code 
      $qrcode = $arrayData["data"]["qrcode"];
      $copia_cola = $arrayData["data"]["qrcopy"];

    } catch (\Exception $ex) {
      print $ex; exit;
    }
```

## Requisitos
 - Necessário PHP 7.0 ou superior
<?php
// app/controllers/PaypalController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Payum\LaravelPackage\Controller\PayumController;

class PaypalController extends PayumController
{
	public function prepareExpressCheckout()
	{
        $storage = $this->getPayum()->getStorage('Payum\Core\Model\ArrayObject');

        $details = $storage->create();
        $details['PAYMENTREQUEST_0_CURRENCYCODE'] = 'EUR';
        $details['PAYMENTREQUEST_0_AMT'] = 1.23;
        $storage->update($details);

        $captureToken = $this->getPayum()->getTokenFactory()->createCaptureToken('paypal_ec', $details, 'payment_done');

        return \Redirect::to($captureToken->getTargetUrl());
	}
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PayumServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->resolving('payum.builder', function(\Payum\Core\PayumBuilder $payumBuilder) {
            $payumBuilder
            // this method registers filesystem storages, consider to change them to something more
            // sophisticated, like eloquent storage
            ->addDefaultStorages()

            ->addGateway('paypal_ec', [
                'factory' => 'paypal_express_checkout',
                'username' => PAYPAL_USER_NAME,
                'password' => PAYPAL_PASSWORD,
                'signature' => PAYPAL_SIGNATURE,
                'sandbox' => true
            ]);
        });
    }
}

<?php

namespace MaxMind\MinFraud\Validation\Rules;

use Respect\Validation\Rules\AbstractWrapper;
use Respect\Validation\Validator as v;

/**
 * @internal
 */
class PaymentProcessor extends AbstractWrapper
{
    public function __construct()
    {
        $this->validatable = v::in(
            [
                'adyen',
                'altapay',
                'amazon_payments',
                'american_express_payment_gateway',
                'authorizenet',
                'balanced',
                'beanstream',
                'bluepay',
                'bluesnap',
                'bpoint',
                'braintree',
                'ccnow',
                'chase_paymentech',
                'checkout_com',
                'cielo',
                'collector',
                'commdoo',
                'compropago',
                'concept_payments',
                'conekta',
                'cuentadigital',
                'curopayments',
                'dalpay',
                'dibs',
                'digital_river',
                'ebs',
                'ecomm365',
                'elavon',
                'emerchantpay',
                'epay',
                'eprocessing_network',
                'eway',
                'exact',
                'first_data',
                'global_payments',
                'heartland',
                'hipay',
                'ingenico',
                'internetsecure',
                'intuit_quickbooks_payments',
                'iugu',
                'lemon_way',
                'mastercard_payment_gateway',
                'mercadopago',
                'merchant_esolutions',
                'mirjeh',
                'mollie',
                'moneris_solutions',
                'nmi',
                'oceanpayment',
                'openpaymx',
                'optimal_payments',
                'orangepay',
                'other',
                'pacnet_services',
                'payfast',
                'paygate',
                'paymentwall',
                'payone',
                'paypal',
                'payplus',
                'paystation',
                'paytrace',
                'paytrail',
                'payture',
                'payu',
                'payulatam',
                'payway',
                'payza',
                'pinpayments',
                'princeton_payment_solutions',
                'psigate',
                'qiwi',
                'quickpay',
                'raberil',
                'rede',
                'redpagos',
                'rewardspay',
                'sagepay',
                'securetrading',
                'simplify_commerce',
                'skrill',
                'smartcoin',
                'solidtrust_pay',
                'sps_decidir',
                'stripe',
                'telerecargas',
                'towah',
                'usa_epay',
                'vantiv',
                'verepay',
                'vericheck',
                'vindicia',
                'virtual_card_services',
                'vme',
                'vpos',
                'worldpay',
            ]
        );
    }
}

<?php

namespace Checkout;

use Checkout\Apm\CheckoutApmApi;
use Checkout\Customers\CustomersClient;
use Checkout\Events\EventsClient;
use Checkout\Instruments\InstrumentsClient;
use Checkout\Payments\PaymentsClient;
use Checkout\Sources\SourcesClient;
use Checkout\Tokens\TokensClient;
use Checkout\Webhooks\WebhooksClient;

final class CheckoutApi extends CheckoutApmApi
{
    private SourcesClient $sourcesClient;
    private TokensClient $tokensClient;
    private InstrumentsClient $instrumentsClient;
    private WebhooksClient $webhooksClient;
    private EventsClient $eventsClient;
    private PaymentsClient $paymentsClient;
    private CustomersClient $customersClient;

    public function __construct(ApiClient $apiClient, CheckoutConfiguration $configuration)
    {
        parent::__construct($apiClient, $configuration);
        $this->sourcesClient = new SourcesClient($apiClient, $configuration);
        $this->tokensClient = new TokensClient($apiClient, $configuration);
        $this->instrumentsClient = new InstrumentsClient($apiClient, $configuration);
        $this->webhooksClient = new WebhooksClient($apiClient, $configuration);
        $this->eventsClient = new EventsClient($apiClient, $configuration);
        $this->paymentsClient = new PaymentsClient($apiClient, $configuration);
        $this->customersClient = new CustomersClient($apiClient, $configuration);
    }

    public function getSourcesClient(): SourcesClient
    {
        return $this->sourcesClient;
    }

    public function getTokensClient(): TokensClient
    {
        return $this->tokensClient;
    }

    public function getInstrumentsClient(): InstrumentsClient
    {
        return $this->instrumentsClient;
    }

    public function getWebhooksClient(): WebhooksClient
    {
        return $this->webhooksClient;
    }

    public function getEventsClient(): EventsClient
    {
        return $this->eventsClient;
    }

    public function getPaymentsClient(): PaymentsClient
    {
        return $this->paymentsClient;
    }

    public function getCustomersClient(): CustomersClient
    {
        return $this->customersClient;
    }

}

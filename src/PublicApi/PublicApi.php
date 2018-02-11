<?php
/**
 * @package Bitstamp HTTP API
 * @author Danny Jansen <danny.jansen93@gmail.com>
 * @license: MIT
 */

namespace Bitstamp\PublicApi;

use Bitstamp\Common\Transport;
use Bitstamp\Common\Response;

use Bitstamp\PublicApi\Requests\TickerRequest;
use Bitstamp\PublicApi\Requests\HourlyTickerRequest;
use Bitstamp\PublicApi\Requests\OrderBookRequest;

use Bitstamp\PublicApi\Responses\TickerResponse;
use Bitstamp\PublicApi\Responses\HourlyTickerResponse;
use Bitstamp\PublicApi\Responses\OrderBookResponse;

class PublicApi
{
    private $request;

    private $transport;

    private $response;

    /**
     * @param string $pair
     * @return Response
     * @throws \Exception
     */
    public function getDailyTicker(string $pair): Response
    {
        $this->request = new TickerRequest($pair);
        $json = $this->sendRequest();
        $this->response = new TickerResponse($json);

        return $this->response;
    }

    /**
     * @param string $pair
     * @return Response
     * @throws \Exception
     */
    public function getHourlyTicker(string $pair): Response
    {
        $this->request = new HourlyTickerRequest($pair);
        $json = $this->sendRequest();
        $this->response = new HourlyTickerResponse($json);

        return $this->response;
    }

    /**
     * @param string $pair
     * @return Response
     * @throws \Exception
     */
    public function getOrderBook(string $pair): Response
    {
        $this->request = new OrderBookRequest($pair);
        $json = $this->sendRequest();
        $this->response = new OrderBookResponse($json);

        return $this->response;
    }

    public function getTransactions()
    {

    }

    public function getTradingPairInfo()
    {

    }

    public function getEurUsdConversionRate()
    {

    }

    /**
     * Send out the request
     *
     * @throws \Exception
     * @return Response
     */
    private function sendRequest(): string
    {
        if ($this->request === null) {
            throw new \Exception('No request set');
        }
        if (!$this->transport instanceof Transport) {
            $this->transport = new Transport();
        }

        return $this->transport->send($this->request);
    }
}

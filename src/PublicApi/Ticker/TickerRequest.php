<?php
/**
 * @package Bitstamp HTTP API
 * @author Danny Jansen <danny.jansen93@gmail.com>
 * @license: MIT
 */

namespace Bitstamp\PublicApi\Ticker;

use Bitstamp\Common\Request;

class TickerRequest extends Request
{
    protected $controller;

    protected $currencyPair;

    /**
     * Run the parent constructor and set the uri
     */
    public function __construct()
    {
        parent::__construct();
        $this->controller = 'ticker';
    }

    /**
     * Set the currency pair we wish to see
     *
     * @param string $pair
     * @return TickerRequest
     */
    public function setCurrencyPair(string $pair): self
    {
        $this->currencyPair = $pair;
        return $this;
    }

    /**
     * Returns the URI we're going to call
     *
     * @return string
     */
    public function getController(): string
    {
        return $this->controller;
    }

    /**
     * Uri must be of format {controller}/{currencyPair}
     *
     * @return string
     */
    public function withUri(): string
    {
        return sprintf('%s/%s', $this->controller, $this->currencyPair);
    }
}
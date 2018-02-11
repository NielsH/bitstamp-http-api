<?php
/**
 * @package Bitstamp HTTP API
 * @author Danny Jansen <danny.jansen93@gmail.com>
 * @license: MIT
 */

namespace Bitstamp\PublicApi\Requests;

use Bitstamp\Common\Request;

class TickerRequest extends Request
{
    protected $currencyPair;

    /**
     * Run the parent constructor and set the uri
     *
     * @param string $pair
     * @return TickerRequest
     */
    public function __construct(string $pair)
    {
        parent::__construct();
        $this->controller = 'ticker';
        $this->currencyPair = $pair;

        return $this;
    }

    public function getCurrencyPair(): string
    {
        return $this->currencyPair;
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
     * Uri must be of format {controller}/{currencyPair}
     *
     * @return string
     */
    public function withUri(): string
    {
        return sprintf('%s/%s', $this->controller, $this->currencyPair);
    }
}
<?php
/**
 * @package Bitstamp HTTP API
 * @author Danny Jansen <danny.jansen93@gmail.com>
 * @license: MIT
 */

namespace Bitstamp\PublicApi\Responses;

use Bitstamp\Common\Response;

class TransactionsResponse extends Response
{
    /**
     * @var array $transactions[]
     */
    public $transactions;

    /**
     * TransactionsResponse constructor.
     * @param string $json
     */
    public function __construct(string $json)
    {
        $data = json_decode($json, true);
        $this
            ->setTransactions($data);
    }

    /**
     * @return array
     */
    public function getTransactions(): array
    {
        return $this->transactions;
    }

    /**
     * @param mixed $transactions
     * @return TransactionsResponse
     */
    private function setTransactions(array $transactions): TransactionsResponse
    {
        $this->transactions = $transactions;
        return $this;
    }
}

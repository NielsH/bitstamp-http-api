<?php
/**
 * @package Bitstamp HTTP API
 * @author Danny Jansen <danny.jansen93@gmail.com>
 * @license: MIT
 */

namespace Bitstamp\Tests\PublicApi\Responses;

use Bitstamp\PublicApi\Responses\TickerResponse;
use PHPUnit\Framework\TestCase;

class TickerResponseTest extends TestCase
{
    /**
     * Test data
     */
    const TEST = [
        'high' => 1292.00,
        'last' => 1228.45,
        'timestamp' => 1518549300,
        'bid' => 1228.66,
        'vwap' => 1240.85,
        'volume' => 3417.46690151,
        'low' => 1195.00,
        'ask' => 1230.00,
        'open' => 1283.00
    ];

    /**
     * @covers \Bitstamp\PublicApi\Responses\TickerResponse::__construct
     * @covers \Bitstamp\PublicApi\Responses\TickerResponse::setHigh
     * @covers \Bitstamp\PublicApi\Responses\TickerResponse::setLast
     * @covers \Bitstamp\PublicApi\Responses\TickerResponse::setTimestamp
     * @covers \Bitstamp\PublicApi\Responses\TickerResponse::setBid
     * @covers \Bitstamp\PublicApi\Responses\TickerResponse::setVwap
     * @covers \Bitstamp\PublicApi\Responses\TickerResponse::setVolume
     * @covers \Bitstamp\PublicApi\Responses\TickerResponse::setLow
     * @covers \Bitstamp\PublicApi\Responses\TickerResponse::setAsk
     * @covers \Bitstamp\PublicApi\Responses\TickerResponse::setOpen
     *
     * @return TickerResponse
     * @throws \Exception
     */
    public function testCanBeConstructed(): TickerResponse
    {
        $response = new TickerResponse(json_encode(self::TEST));
        $this->assertInstanceOf('Bitstamp\\PublicApi\\Responses\\TickerResponse', $response);

        return $response;
    }

    /**
     * @depends testCanBeConstructed
     * @covers \Bitstamp\PublicApi\Responses\TickerResponse::getHigh
     *
     * @param TickerResponse $response
     * @throws \Exception
     */
    public function testGetHigh(TickerResponse $response) :void
    {
        $this->assertEquals(self::TEST['high'], $response->getHigh());
    }

    /**
     * @depends testCanBeConstructed
     * @covers \Bitstamp\PublicApi\Responses\TickerResponse::getLast
     *
     * @param TickerResponse $response
     * @throws \Exception
     */
    public function testGetLast(TickerResponse $response): void
    {
        $this->assertEquals(self::TEST['last'], $response->getLast());
    }

    /**
     * @depends testCanBeConstructed
     * @covers \Bitstamp\PublicApi\Responses\TickerResponse::getTimestamp
     *
     * @param TickerResponse $response
     * @throws \Exception
     */
    public function testGetTimestamp(TickerResponse $response): void
    {
        $this->assertEquals(self::TEST['timestamp'], $response->getTimestamp());
    }

    /**
     * @depends testCanBeConstructed
     * @covers \Bitstamp\PublicApi\Responses\TickerResponse::getBid
     *
     * @param TickerResponse $response
     * @throws \Exception
     */
    public function testGetBid(TickerResponse $response): void
    {
        $this->assertEquals(self::TEST['bid'], $response->getBid());
    }

    /**
     * @depends testCanBeConstructed
     * @covers \Bitstamp\PublicApi\Responses\TickerResponse::getVwap
     *
     * @param TickerResponse $response
     * @throws \Exception
     */
    public function testGetVwap(TickerResponse $response): void
    {
        $this->assertEquals(self::TEST['vwap'], $response->getVwap());
    }

    /**
     * @depends testCanBeConstructed
     * @covers \Bitstamp\PublicApi\Responses\TickerResponse::getVolume
     *
     * @param TickerResponse $response
     * @throws \Exception
     */
    public function testGetVolume(TickerResponse $response): void
    {
        $this->assertEquals(self::TEST['volume'], $response->getVolume());
    }

    /**
     * @depends testCanBeConstructed
     * @covers \Bitstamp\PublicApi\Responses\TickerResponse::getLow
     *
     * @param TickerResponse $response
     * @throws \Exception
     */
    public function testGetLow(TickerResponse $response): void
    {
        $this->assertEquals(self::TEST['low'], $response->getLow());
    }

    /**
     * @depends testCanBeConstructed
     * @covers \Bitstamp\PublicApi\Responses\TickerResponse::getAsk
     *
     * @param TickerResponse $response
     * @throws \Exception
     */
    public function testGetAsk(TickerResponse $response): void
    {
        $this->assertEquals(self::TEST['ask'], $response->getAsk());
    }
    /**
     * @depends testCanBeConstructed
     * @covers \Bitstamp\PublicApi\Responses\TickerResponse::getOpen
     *
     * @param TickerResponse $response
     * @throws \Exception
     */
    public function testGetOpen(TickerResponse $response): void
    {
        $this->assertEquals(self::TEST['open'], $response->getOpen());
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 20.06.18
 * Time: 20:24
 */

require_once __DIR__.'/../task2.php';

use PHPUnit\Framework\TestCase;

/**
 * Class BracketsTest
 */
final class LuckyTickets extends TestCase
{
    const NUMBER_COUNT  = 2;
    const NUMBER_EXPECT = 10;

    public function testLuckyTickets()
    {
        $this->assertEquals(self::NUMBER_EXPECT,luckyTickets(self::NUMBER_COUNT));
    }
}
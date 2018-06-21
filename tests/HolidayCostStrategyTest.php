<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 21.06.18
 * Time: 13:53
 */

use PHPUnit\Framework\TestCase;
use Task3\Cost\HolidayCostStrategy;
use Task3\Lesson\Speaking;

/**
 * Class HolidayCostStrategyTest
 */
class HolidayCostStrategyTest extends TestCase
{
    /** @var HolidayCostStrategy */
    protected $costStrategy;
    /** @var Speaking */
    protected $lesson;

    protected function setUp()
    {
        $this->costStrategy = new HolidayCostStrategy();
        $this->lesson = new Speaking(10, 100, $this->costStrategy);
    }

    protected function tearDown()
    {
        $this->costStrategy = null;
        $this->lesson = null;
    }

    public function testCost()
    {
        $this->assertEquals(800, $this->costStrategy->cost($this->lesson));
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 21.06.18
 * Time: 13:49
 */

use PHPUnit\Framework\TestCase;
use Task3\Cost\TimedCostStrategy;
use Task3\Lesson\Speaking;

/**
 * Class TimedCostStrategyTest
 */
class TimedCostStrategyTest extends TestCase
{
    /** @var TimedCostStrategy */
    protected $costStrategy;
    /** @var Speaking */
    protected $lesson;

    protected function setUp()
    {
        $this->costStrategy = new TimedCostStrategy();
        $this->lesson = new Speaking(3, 100, $this->costStrategy);
    }

    protected function tearDown()
    {
        $this->costStrategy = null;
        $this->lesson = null;
    }

    public function testCost()
    {
        $this->assertEquals(300, $this->costStrategy->cost($this->lesson));
    }
}
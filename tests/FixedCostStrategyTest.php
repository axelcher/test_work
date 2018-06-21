<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 21.06.18
 * Time: 13:19
 */

use PHPUnit\Framework\TestCase;
use Task3\Cost\FixedCostStrategy;
use Task3\Lesson\Speaking;

/**
 * Class FixedCostStrategyTest
 */
class FixedCostStrategyTest extends TestCase
{
    /** @var FixedCostStrategy */
    protected $costStrategy;
    /** @var Speaking */
    protected $lesson;

    protected function setUp()
    {
        $this->costStrategy = new FixedCostStrategy();
        $this->lesson = new Speaking(1, 100, $this->costStrategy);
    }

    protected function tearDown()
    {
        $this->costStrategy = null;
        $this->lesson = null;
    }

    public function testCost()
    {
        $this->assertEquals(100, $this->costStrategy->cost($this->lesson));
    }
}
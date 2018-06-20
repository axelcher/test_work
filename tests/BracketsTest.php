<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 20.06.18
 * Time: 17:35
 */
require_once __DIR__.'/../task1.php';

use PHPUnit\Framework\TestCase;

/**
 * Class BracketsTest
 */
final class BracketsTest extends TestCase
{
    const TRUE_EXPRESSION  = '[5] * 3 - ( 4 - 7 * [3-6])';
    const FALSE_EXPRESSION = '[5 * 3 - ( 4 ] - 7 * [3-6])';

    public function testCheckBrackets()
    {
        $this->assertTrue(checkBrackets(self::TRUE_EXPRESSION));
        $this->assertFalse(checkBrackets(self::FALSE_EXPRESSION));
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 20.06.18
 * Time: 21:55
 */

namespace Task3\Cost;

use Task3\Lesson\Lesson;

/**
 * Class CostStrategy
 */
abstract class CostStrategy
{
    /**
     * @param Lesson $lesson
     * @return mixed
     */
    abstract function cost(Lesson $lesson);

    /**
     * @return string
     */
    abstract function chargeType();
}
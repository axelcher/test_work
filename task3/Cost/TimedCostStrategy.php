<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 20.06.18
 * Time: 21:59
 */

namespace Task3\Cost;

use Task3\Lesson\Lesson;

/**
 * Class TimedCostStrategy
 */
class TimedCostStrategy extends CostStrategy
{
    private $chargeType = 'Timed pay';

    /**
     * @param Lesson $lesson
     * @return float|mixed
     */
    public function cost(Lesson $lesson)
    {
        return ($lesson->getDuration() * $lesson->getPrice());
    }

    /**
     * @return string
     */
    public function chargeType()
    {
        return $this->chargeType;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 20.06.18
 * Time: 22:17
 */

namespace Task3\Cost;

use Task3\Lesson\Lesson;

/**
 * Class FixedCostStrategy
 */
class FixedCostStrategy extends CostStrategy
{
    private $chargeType = 'Fixed pay';

    /**
     * @param Lesson $lesson
     * @return mixed
     */
    public function cost(Lesson $lesson)
    {
        return $lesson->getPrice();
    }

    /**
     * @return string
     */
    public function chargeType()
    {
        return $this->chargeType;
    }
}
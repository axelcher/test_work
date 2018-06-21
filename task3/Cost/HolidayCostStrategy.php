<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 21.06.18
 * Time: 11:17
 */

namespace Task3\Cost;

use Task3\Lesson\Lesson;

/**
 * Class HolidayCostStrategy
 * @package Task3\Cost
 */
class HolidayCostStrategy extends CostStrategy
{
    private $chargeType = 'Holiday pay';
    private $percent    = 20;

    /**
     * @param Lesson $lesson
     * @return float|mixed
     */
    public function cost(Lesson $lesson)
    {
        $amount   = $lesson->getDuration() * $lesson->getPrice();
        $discount = ($amount * $this->percent) / 100;

        return round($amount - $discount, 2);
    }

    /**
     * @return string
     */
    public function chargeType()
    {
        return $this->chargeType;
    }
}
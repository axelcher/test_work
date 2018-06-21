<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 20.06.18
 * Time: 21:41
 */

namespace Task3\Lesson;

use Task3\Cost\CostStrategy;

/**
 * Class Lesson
 */
abstract class Lesson
{
    private $costStrategy;
    private $duration;
    private $price;

    /**
     * Lesson constructor.
     * @param $duration
     * @param $price
     * @param CostStrategy $costStrategy
     */
    public function __construct($duration, $price, CostStrategy $costStrategy)
    {
        $this->duration     = $duration;
        $this->costStrategy = $costStrategy;
        $this->price        = $price;
    }

    /**
     * @return mixed
     */
    public function cost()
    {
        return $this->costStrategy->cost($this);
    }

    /**
     * @return mixed
     */
    public function chargeType()
    {
        return $this->costStrategy->chargeType();
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 21.06.18
 * Time: 12:24
 */

namespace Task3;
use Task3\Lesson\Lesson;

/**
 * Class Course
 * @package Task3
 */
abstract class Course
{
    private $lessons = [];

    /**
     * @param Lesson $lesson
     */
    public function addLesson(Lesson $lesson)
    {
        if(in_array($lesson, $this->lessons, true)) {
            return;
        }
        $this->lessons[] = $lesson;
    }

    /**
     * @param Lesson $lesson
     */
    public function removeLesson(Lesson $lesson)
    {
        $this->lessons = array_udiff($this->lessons, array($lesson), function ($a, $b){
            return ($a === $b) ? 0 : 1;
        });
    }

    /**
     * @return int|mixed
     */
    public function getCost()
    {
        $cost = 0;
        /** @var Lesson $lesson */
        foreach ($this->lessons as $lesson) {
            $cost += $lesson->cost();
        }

        return $cost;
    }
}
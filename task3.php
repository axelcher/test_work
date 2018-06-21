<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 21.06.18
 * Time: 13:15
 */
require __DIR__ . '/vendor/autoload.php';

/**                         Пример выполнения задачи Task3                               */

/** Начинается курс английского языка */
$englishCourse = new \Task3\EnglishCourse();

/** Назначаем разговорный почасовой урок */
$englishCourse->addLesson(
    new \Task3\Lesson\Speaking(3, 120, new \Task3\Cost\TimedCostStrategy())
);

/** Назначаем граматический фиксированный урок */
$englishCourse->addLesson(
    new \Task3\Lesson\Grammar(2, 150, new \Task3\Cost\FixedCostStrategy())
);

/** Назначаем акционный празничный разговорный со скидкой в 20% */
$englishCourse->addLesson(
    new \Task3\Lesson\Speaking(4, 150, new \Task3\Cost\HolidayCostStrategy())
);

/** Узнаем общую стоимость курса */
//echo "Общая стоимость курса английского языка - ".$englishCourse->getCost()."грн\n";
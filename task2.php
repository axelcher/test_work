<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 20.06.18
 * Time: 18:16
 */

/**
 * @param $k
 * @return int
 */
function luckyTickets($k)
{
    $winTickets  = 1; // По условиям есть билет состоящий с нулей, который является выиграшным
    $startNumber = '';
    $endNumber   = '';

    if(
        ($k > 1) &&
        ($k % 2 == 0)
    ) {
        //Определяем диапазон чисел
        for($i = 0; $i < $k; $i++) {
            $startNumber .= $i == 0 ? 1 : 0;
            $endNumber .= '9';
        }

        for($i = $startNumber; $i <= $endNumber; $i++) {
            $s1 = substr((string)$i,0,($k/2));
            $s2 = substr((string)$i,($k/2));
            if(array_sum(str_split($s1)) == array_sum(str_split($s2))) {
                $winTickets++;
            }
        }
    } else {
        $winTickets = 0;
    }

    return $winTickets;
}
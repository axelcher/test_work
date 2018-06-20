<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 20.06.18
 * Time: 15:50
 */

/**
 * @param $exp
 * @return bool
 */
function checkBrackets($exp)
{
    $response = true;
    $bracketsStack = [];
    $openBrackets = [
        '[' => ']',
        '{' => '}',
        '(' => ')'
    ];
    $closeBrackets = array_flip($openBrackets);

    if(is_string($exp)) {
        $length = mb_strlen($exp);

        for($i = 0; $i < $length; $i++) {
            $current = $exp[$i];

            if(isset($openBrackets[$current])) {
                $bracketsStack[] = $openBrackets[$current];
            } elseif (isset($closeBrackets[$current])) {
                $expected = array_pop($bracketsStack);
                if(($expected === null) || ($current != $expected)) {
                    $response = false;
                    break;
                }
            }
        }
    } else {
        $response = false;
    }

    return (empty($bracketsStack) && $response);
}
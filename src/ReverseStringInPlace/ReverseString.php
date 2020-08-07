<?php


namespace Acme\ReverseStringInPlace;


/**
 * Class ReverseString
 * @package Acme\ReverseStringInPlace
 */
class ReverseString
{

    /**
     * @param string $string
     * @return string
     */
    public static function reverse(string $string): string
    {
        $length = strlen($string);
        if ($length < 2) {
            return $string;
        }

        $halfLength = $length / 2;
        $ptr = 0;
        $ptr2 = $length - 1;

        do {
            $temp = $string[$ptr];
            $string[$ptr] = $string[$ptr2];
            $string[$ptr2] = $temp;
            $ptr++;
            $ptr2--;

        } while ($ptr < $halfLength);


        return $string;
    }

    //SOLUTION
//function reverse(&$str)
//{
//    $leftIndex = 0;
//    $rightIndex = strlen($str) - 1;
//
//    while ($leftIndex < $rightIndex) {
//
//        // swap characters
//        $temp = $str[$leftIndex];
//        $str[$leftIndex] = $str[$rightIndex];
//        $str[$rightIndex] = $temp;
//
//        // move towards middle
//        $leftIndex++;
//        $rightIndex--;
//    }
//}

}
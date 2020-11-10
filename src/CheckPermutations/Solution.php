<?php


namespace Acme\CheckPermutations;


/**
 * Class Solution
 * @package Acme\CheckPermutations
 */
class Solution
{

    /**
     * @param string $a
     * @param string $b
     * @return bool
     */
    public static function checkPermutation(string $a, string $b): bool
    {
        if (strlen($a) == strlen($b)) {
            $arrA = str_split($a);
            $arrB = str_split($b);
            sort($arrA);
            sort($arrB);
            for($i = 0; $i < strlen($a); $i++) {
                if ($arrA[$i] != $arrB[$i]) {
                    return false;
                }
            }

            return true;
        }

        return false;
    }
}
<?php


namespace Acme\UniqueCharacters;


/**
 * Class Solution
 * @package Acme\UniqueCharacters
 */
class Solution
{

    /**
     * @param string $string
     * @return bool
     */
    public static function hasUniqueChars(string $string) : bool
    {

        $arrChars = [];
        $length = strlen($string);

        for ($i = 0; $i < $length; $i++) {
            if (in_array($string[$i], $arrChars)) {
                return false;
            }
            array_push($arrChars, $string[$i]);
        }

        return true;
    }

}
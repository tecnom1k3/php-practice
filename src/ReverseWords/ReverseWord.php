<?php


namespace Acme\ReverseWords;


use Acme\ReverseStringInPlace\ReverseString;

/**
 * Class ReverseWord
 * @package Acme\ReverseWords
 */
class ReverseWord
{

    /**
     * @param string $phrase
     * @return string
     */
    public static function reverse(string $phrase): string
    {
        $reversedPhrase = ReverseString::reverse($phrase);

        $ptrLeft = 0;

        for ($i = 0; $i < strlen($phrase); $i++) {
            if ($reversedPhrase[$i] == ' ') {
                $ptrRight = $i - 1;
                $reversedPhrase = self::substitute($reversedPhrase, $ptrLeft, $ptrRight);
                $ptrLeft = $i + 1;
            }
        }

        $ptrRight = strlen($phrase) - 1;
        $reversedPhrase = self::substitute($reversedPhrase, $ptrLeft, $ptrRight);

        return $reversedPhrase;
    }

    /**
     * @param string $reversedPhrase
     * @param int $ptrLeft
     * @param int $ptrRight
     * @return string|string[]
     */
    protected static function substitute(string $reversedPhrase, int $ptrLeft, int $ptrRight)
    {
        $subString = substr($reversedPhrase, $ptrLeft, $ptrRight - $ptrLeft + 1);
        $word = ReverseString::reverse($subString);
        $reversedPhrase = str_replace($subString, $word, $reversedPhrase);
        return $reversedPhrase;
    }

}
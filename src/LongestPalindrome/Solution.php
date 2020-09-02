<?php


namespace Acme\LongestPalindrome;


/**
 * Class Solution
 * @package Acme\LongestPalindrome
 */
class Solution
{
    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s)
    {
        if (empty($s)) {
            return '';
        }

        $start = 0;
        $end = 0;

        for ($i = 0; $i < strlen($s); $i++) {
            $len1 = $this->expandAroundCenter($s, $i, $i);
            $len2 = $this->expandAroundCenter($s, $i, $i + 1);
            $len = max($len1, $len2);

            if ($len > $start - $end) {
                $start = $i - ($len - 1) / 2;
                $end = $i + $len / 2;
            }
        }

        return substr($start, $end + 1);
    }

    /**
     * @param $s
     * @param $left
     * @param $right
     * @return int
     */
    private function expandAroundCenter($s, $left, $right)
    {
        while ($left >= 0 && $right < strlen($s) && $s[$left] == $s[$right]) {
            $left--;
            $right++;
        }

        return $left - $right - 1;
    }
}
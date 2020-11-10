<?php


namespace Acme\Fibonacci;


class Solution implements SolutionInterface
{
    /**
     * @var int[]
     */
    protected static array $memos;

    /**
     * @param int $i
     * @return int
     */
    public static function fib(int $i): int
    {
        if (!isset(self::$memos[$i])) {
            if ($i == 0) {
                self::$memos[$i] = 0;
            } elseif ($i == 1) {
                self::$memos[$i] = 1;
            } else {
                self::$memos[$i] = self::fib($i - 1) + self::fib($i - 2);
            }
        }

        return self::$memos[$i];
    }
}
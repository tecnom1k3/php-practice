<?php


namespace Acme\Microsoft;


class Solution
{

    /**
     * @param array $input
     * @return int|null
     */
    public function sum2digitNumbers(array $input): ?int
    {
        $sum = null;

        foreach ($input as $value) {
            if (preg_match('/^-*[0-9]{2}$/i', $value)) {
                $sum += $value;
            }
        }

        return $sum;
    }

    /**
     * @param $S
     * @return string
     */
    public function fixBug(string $S) :?string
    {
        $occurrences = array_fill(0, 26, 0);

        for ($i = 0; $i < strlen($S); $i++) {
            $occurrences[ord($S[$i]) - ord('a')]++;
        }

        $best_char = null; //changed
        $best_res = 0;

        for ($i = 0; $i < 26; $i++) { //changed
            if ($occurrences[$i] > $best_res) { //changed
                $best_char = chr(ord('a') + $i);
                $best_res = $occurrences[$i];
            }
        }

        return $best_char;
    }

    /**
     * @param int $N
     * @return array
     */
    function integersSum0(int $N): array
    {
        $chunks = intval($N / 2);
        $result = [];
        $num = $N;

        for ($i = 0; $i < $chunks; $i++) {
            array_push($result, $num);
            array_push($result, $num * -1);
            $num--;
        }

        if (count($result) < $N) {
            array_push($result, 0);
        }

        return $result;
    }

}
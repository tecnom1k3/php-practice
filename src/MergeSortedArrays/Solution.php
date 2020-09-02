<?php


namespace Acme\MergeSortedArrays;


/**
 * Class Solution
 * @package Acme\MergeSortedArrays
 */
class Solution
{

    /**
     * @param array $myArray
     * @param array $alicesArray
     * @return array
     */
    public function mergeArrays(array $myArray, array $alicesArray): array
    {
        // combine the sorted arrays into one large sorted array
        if (count($myArray) == 0 && count($alicesArray) == 0) {
            return [];
        }
        if (count($myArray) == 0) {
            return $alicesArray;
        }
        if (count($alicesArray) == 0) {
            return $myArray;
        }

        $ptrMyArray = 0;
        $ptrAlicesArray = 0;
        $result = [];

        do {
            if ($ptrMyArray < count($myArray) && $ptrAlicesArray < count($alicesArray)) {
                if ($myArray[$ptrMyArray] < $alicesArray[$ptrAlicesArray]) {
                    array_push($result, $myArray[$ptrMyArray]);
                    $ptrMyArray++;
                } else {
                    array_push($result, $alicesArray[$ptrAlicesArray]);
                    $ptrAlicesArray++;
                }
            } else {
                if ($ptrMyArray == count($myArray)) {
                    array_push($result, $alicesArray[$ptrAlicesArray]);
                    $ptrAlicesArray++;
                } else {
                    array_push($result, $myArray[$ptrMyArray]);
                    $ptrMyArray++;
                }
            }
        } while ($ptrMyArray < count($myArray) || $ptrAlicesArray < count($alicesArray));


        return $result;
    }
}
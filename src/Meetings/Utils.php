<?php

namespace Acme\Meetings;

/**
 * Class Practice
 */
class Utils
{
    /**
     * @param Meeting[] $array
     * @return Meeting[]
     */
    public static function mergeMeetings(array $array): array
    {
        $arrMeetingsSorted = [];

        foreach ($array as $meeting) {
            array_push($arrMeetingsSorted, [$meeting->getStartTime(), $meeting->getEndTime()]);
        }

        sort($arrMeetingsSorted);

        $arrMergedMeetings = [];

        for ($i = 0; $i < count($arrMeetingsSorted); $i++) {
            if ($i == 0) {
                array_push($arrMergedMeetings, $arrMeetingsSorted[$i]);
                continue;
            }

            if ($arrMeetingsSorted[$i][0] <= $arrMergedMeetings[count($arrMergedMeetings) - 1][1]) {
                $arrMergedMeetings[count($arrMergedMeetings) - 1][1] = max($arrMeetingsSorted[$i][1], $arrMergedMeetings[count($arrMergedMeetings) - 1][1]) ;
            } else {
                array_push($arrMergedMeetings, $arrMeetingsSorted[$i]);
            }
        }


        $arrResult = [];

        foreach ($arrMergedMeetings as $meeting) {
            array_push($arrResult, new Meeting($meeting[0], $meeting[1]));
        }

        return $arrResult;
    }
}

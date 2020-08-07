<?php

namespace Acme\Tests\Meetings;

use Acme\Meetings\Meeting;
use Acme\Meetings\Utils;
use PHPUnit\Framework\TestCase;

/**
 * Class UtilsTest
 * @package Acme\Meetings
 */
class UtilsTest extends TestCase
{

    /**
     *
     */
    public function testMergeMeetings()
    {
        $arrMeetings = [
            new Meeting(0, 1),
            new Meeting(3, 5),
            new Meeting(4, 8),
            new Meeting(10, 12),
            new Meeting(9, 10)
        ];

        $rs = Utils::mergeMeetings($arrMeetings);

        $this->assertCount(3, $rs);

    }
}

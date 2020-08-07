<?php

namespace Acme\Meetings;

/**
 * Class Meeting
 */
class Meeting
{
    /**
     * @var
     */
    private $startTime;
    /**
     * @var
     */
    private $endTime;

    /**
     * Meeting constructor.
     * @param $startTime
     * @param $endTime
     */
    public function __construct($startTime, $endTime)
    {
        // number of 30 min blocks past 9:00 am
        $this->startTime = $startTime;
        $this->endTime = $endTime;
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param $startTime
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param $endTime
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "($this->startTime, $this->endTime)";
    }
}
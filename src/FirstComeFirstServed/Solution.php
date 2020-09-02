<?php


namespace Acme\FirstComeFirstServed;


/**
 * Class Solution
 * @package Acme\FirstComeFirstServed
 */
class Solution
{
    /**
     * @param array $takeOutOrders
     * @param array $dineInOrders
     * @param array $servedOrders
     * @return bool
     */
    public function isFirstComeFirstServed(array $takeOutOrders, array $dineInOrders, array $servedOrders): bool
    {
        if (count($servedOrders) < count($takeOutOrders) + count($dineInOrders)) {
            return false;
        }
        // check if we're serving orders first-come, first-served
        $ptrTakeOut = 0;
        $ptrDineIn = 0;

        for ($i = 0; $i < count($servedOrders); $i++) {
            $found = false;
            if ($ptrTakeOut < count($takeOutOrders) && $servedOrders[$i] == $takeOutOrders[$ptrTakeOut]) {
                $found = true;
                $ptrTakeOut++;
            } elseif ($ptrDineIn < count($dineInOrders) && $servedOrders[$i] == $dineInOrders[$ptrDineIn]) {
                $found = true;
                $ptrDineIn++;
            }
            if (!$found) {
                return false;
            }
        }

        return true;
    }
}
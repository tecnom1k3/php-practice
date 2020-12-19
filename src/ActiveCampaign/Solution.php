<?php


namespace Acme\ActiveCampaign;


use Exception;

/**
 * Class Solution
 * @package Acme\ActiveCampaign
 */
class Solution
{

    /**
     * @param array $commands
     * @return array
     * @throws Exception
     */
    public static function doesCircleExist(array $commands): array
    {
        $result = [];

        foreach ($commands as $command) {
            $result[] = self::processCommands($command);
        }

        return $result;
    }

    /**
     * @param string $commands
     * @return string
     * @throws Exception
     */
    protected static function processCommands(string $commands): string
    {
        $position = [0, 0];
        $direction = 'N';
        $tries = 0;

        do {
            for ($char = 0; $char < strlen($commands); $char++) {
                if ($commands[$char] == 'L' || $commands[$char] == 'R') {
                    $direction = self::switchDirection($direction, $commands[$char]);
                } elseif ($commands[$char] == 'G') {
                    $position = self::advancePosition($direction, $position);
                } else {
                    throw new Exception('Invalid command');
                }
            }
            if ($position[0] == 0 && $position[1] == 0) {
                break;
            }
            $tries++;
        } while ($tries < 2500);

        return ($position[0] == 0 && $position[1] == 0) ? 'YES' : 'NO';
    }

    /**
     * @param string $current
     * @param string $command
     * @return string
     * @throws Exception
     */
    protected static function switchDirection(string $current, string $command): string
    {
        switch ($command) {
            case 'L':
                switch ($current) {
                    case 'N':
                        return 'W';
                        break;
                    case 'S':
                        return 'E';
                        break;
                    case 'E':
                        return 'N';
                        break;
                    case 'W':
                        return 'S';
                        break;
                    default:
                        throw new Exception('Invalid direction');
                        break;
                }
                break;
            case 'R':
                switch ($current) {
                    case 'N':
                        return 'E';
                        break;
                    case 'S':
                        return 'W';
                        break;
                    case 'E':
                        return 'S';
                        break;
                    case 'W':
                        return 'N';
                        break;
                    default:
                        throw new Exception('Invalid direction');
                        break;
                }
                break;
            default:
                throw new Exception('Invalid Command');
                break;
        }
    }

    /**
     * @param string $direction
     * @param array $coordinates
     * @return array
     * @throws Exception
     */
    protected static function advancePosition(string $direction, array $coordinates): array
    {
        switch ($direction) {
            case 'N':
                return [$coordinates[0], $coordinates[1] + 1];
                break;
            case 'S':
                return [$coordinates[0], $coordinates[1] - 1];
                break;
            case 'E':
                return [$coordinates[0] + 1, $coordinates[1]];
                break;
            case 'W':
                return [$coordinates[0] - 1, $coordinates[1]];
                break;
            default:
                throw new Exception('Invalid direction');
        }
    }

}
<?php


namespace Drupal\chessHorse\Utils;

const CHESS_BOARD_SIZE = 8;

class HorsePlace
{
    public static function getHorsePlace(): array
    {
        $placeX = rand(1, 8);
        $placeY = rand(1, 8);

        return array('x' => $placeX, 'y' => $placeY);
    }

    public static function getHorsePossibleTurns($placeX, $placeY): array
    {
        $variations = array(
            [2, 1],
            [2, -1],
            [-2, 1],
            [-2, -1],
            [1, 2],
            [1, -2],
            [-1, 2],
            [-1, -2],
        );

        $turns = array();

        foreach ($variations as $variation) {

            if ($placeX + $variation[0] <= CHESS_BOARD_SIZE && $placeY + $variation[1] <= CHESS_BOARD_SIZE) {
                $turns[] = array(
                    'x' => $placeX + $variation[0],
                    'y' => $placeY + $variation[1]
                );
            }

        }

        return $turns;
    }
}
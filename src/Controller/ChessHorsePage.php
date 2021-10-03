<?php

/**
 * @file
 * Contains \Drupal\chessHorse\Controller\ChessHorsePage.
 */

namespace Drupal\chessHorse\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\chessHorse\Utils\HorsePlace as Utils;

/**
 * Provides route for Chess Horse Page
 */

class ChessHorsePage extends ControllerBase
{
    /**
     * Displays page
     */
    public function content(): array
    {
        $horsePlace = Utils::getHorsePlace();

        return [
            '#theme' => 'chessHorse_theme_hook',
            '#horsePlace' => $horsePlace,
            '#possibleTurnPlaces' => Utils::getHorsePossibleTurns($horsePlace['x'], $horsePlace['y'])
        ];
    }
}
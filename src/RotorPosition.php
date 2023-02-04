<?php

declare(strict_types=1);

namespace Rafalmasiarek\Enigma;

enum RotorPosition: int
{
    /**
     * ID Rotorposition 1
     */
    case P1 = 0;

    /**
     * ID Rotorposition 2
     */
    case P2 = 1;

    /**
     * ID Rotorposition 3
     */
    case P3 = 2;

    /**
     * ID Rotorposition 4
     * only available in model Kriegsmarine M4, also call 'Greek rotor'
     * this rotor never turns
     */
    case GREEK = 3;


    public static function getPositionIntValue(int|RotorPosition $position): int
    {
        return ($position instanceof RotorPosition) ? $position->value : $position;
    }
}

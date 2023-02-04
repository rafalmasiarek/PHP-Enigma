<?php

declare(strict_types=1);

namespace Rafalmasiarek\Enigma;

enum RotorType
{
    /**
     * ID Rotor I
     */
    case I;

    /**
     * ID Rotor II
     */
    case II;

    /**
     * ID Rotor III
     */
    case III;

    /**
     * ID Rotor IV
     */
    case IV;

    /**
     * ID Rotor V
     */
    case V;

    /**
     * ID Rotor VI
     * only available in model Kriegsmarine M3 and M4
     */
    case VI;

    /**
     * ID Rotor VII
     * only available in model Kriegsmarine M3 and M4
     */
    case VII;

    /**
     * ID Rotor VII
     * only available in model Kriegsmarine M3 and M4
     */
    case VIII;

    case BETA;

    case GAMMA;
}

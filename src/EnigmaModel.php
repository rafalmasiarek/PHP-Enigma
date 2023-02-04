<?php

declare(strict_types=1);

namespace Rafalmasiarek\Enigma;

enum EnigmaModel
{
    /**
     * Wehrmacht/Luftwaffe (3-rotor model)
     */
    case WMLW;

    /**
     * Kriegsmarine M3 (3-rotor model)
     */
    case KMM3;

    /**
     * Kriegsmarine M4 (4-rotor model)
     */
    case KMM4;
}

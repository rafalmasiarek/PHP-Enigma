<?php

declare(strict_types=1);

namespace Rafalmasiarek\Enigma;

enum ReflectorType
{
    case B;

    case C;

    /**
     * ID Reflector B Thin
     * only available in model Kriegsmarine M4
     */
    case BTHIN;

    /**
     * ID Reflector C Tthin
     * only available in model Kriegsmarine M4
     */
    case CTHIN;
}

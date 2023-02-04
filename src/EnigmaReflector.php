<?php

declare(strict_types=1);

namespace Rafalmasiarek\Enigma;

/**
 * This class represents a Reflector of an Enigma.
 *
 * After its way through plugboard and all rotors, the reflector leads the signal all the way back.
 * Because no letter must connect to itself, its provided that the signal takes a different route.
 * This enables the Enigma to work both for encryption and decryption without any further setup
 */
/**
 * @author Rafal Masiarek <rafalmasiarek@hotmail.com>
 * @version 2.0
 * @package Enigma
 * @subpackage Core
 */
class EnigmaReflector
{
    /**
     * stores the setup for all available reflectors
     * fields are
     * key: ID of the reflector
     * wiring: the setup for the wiring of a reflector
     * used: IDs of models, this rotos can be used in
     * @global array $ENIGMA_REFLECTORS
     */
    public static array $setup = [
        ['key'=>ReflectorType::B,     'wiring'=>'YRUHQSLDPXNGOKMIEBFZCWVJAT', 'used'=>[EnigmaModel::WMLW, EnigmaModel::KMM3]],
        ['key'=>ReflectorType::C,     'wiring'=>'FVPJIAOYEDRZXWGCTKUQSBNMHL', 'used'=>[EnigmaModel::WMLW, EnigmaModel::KMM3]],
        ['key'=>ReflectorType::BTHIN, 'wiring'=>'ENKQAUYWJICOPBLMDXZVFTHRGS', 'used'=>[EnigmaModel::KMM4]],
        ['key'=>ReflectorType::CTHIN, 'wiring'=>'RDOBJNTKVEHMLFCWZAXGYIPSUQ', 'used'=>[EnigmaModel::KMM4]],
    ];

    /**
     * The wiring of the reflector.
     * Pins are connected in pairs, that means, if 'D' on side A connects to 'H'
     * on side B, 'H' on side A connects to 'D' on side B. No letter must connect to itself!
     * @var EnigmaWiring
     */
    private EnigmaWiring $wiring;

    /**
     * Constructor creates a new Wiring with the setup from $wiring.
     * @uses EnigmaWiring
     * @param string $wiring setup for the wiring
     */
    public function __construct(string $wiring)
    {
        $this->wiring = new EnigmaWiring($wiring);
    }

    /**
     * Send a letter through the wiring.
     * Because pins are connected in pairs, there is no difference if
     * processLetter1stPass() or processLetter2ndPass() is used.
     * @param integer letter to process
     * @return integer resulting letter
     */
    public function processLetter(int $letter): int
    {
        return $this->wiring->processLetter1stPass($letter);
    }
}

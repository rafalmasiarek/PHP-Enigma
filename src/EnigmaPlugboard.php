<?php

declare(strict_types=1);

namespace Rafalmasiarek\Enigma;

/**
 * This class represents the Plugboard of an Enigma.
 *
 * The initial setup looks like this:
 *
 * <pre>
 * ABCDEFGHIJKLMNOPQRSTUVWXYZ
 * ||||||||||||||||||||||||||
 * ABCDEFGHIJKLMNOPQRSTUVWXYZ
 * </pre>
 *
 * However, unlike rotor and reflector, the wiring can be changed by the operator.
 * This is done by plugging 2 letters, e.: 'D' and 'F' results in:
 *
 * <pre>
 * ABCDEFGHIJKLMNOPQRSTUVWXYZ
 * ||||||||||||||||||||||||||
 * ABCFEDGHIJKLMNOPQRSTUVWXYZ
 * </pre>
 *
 * unplugging 1 of the 2 letters leads back to original state
 */
/**
 * @author Rafal Masiarek <rafalmasiarek@hotmail.com>
 * @version 2.0
 * @package Enigma
 * @subpackage Core
 */
class EnigmaPlugboard
{
    /**
     * The wiring of the plugboard.
     *
     * Pins always have to be connected in pairs, that means, if 'D' on side A
     * connects to 'H' on side B, 'H' on side A has to connect to 'D' on side B
     */
    private EnigmaWiring $wiring;

    /**
     * Constructor creates a new Wiring and connects the pins in pairs.
     */
    public function __construct()
    {
        $wiring = '';
        for ($idx=0; $idx < EnigmaAlphabet::count(); $idx++) {
            $wiring.= Enigma::enigma_p2l($idx);
        }
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

    /**
     * Connect 2 letters.
     * @param integer letter 1 to connect
     * @param integer letter 2 to connect
     * @return void
     */
    public function plugLetters(int $letter1, int $letter2): void
    {
        $this->wiring->connect($letter1, $letter2);
        $this->wiring->connect($letter2, $letter1);
    }

    /**
     * Disconnect 2 letters.
     * Because letters are connected in pairs, we only need to know one of them.
     * @param integer 1 of the 2 letters to disconnect
     * @return void
     */
    public function unplugLetters(int $letter): void
    {
        $temp = $this->wiring->connectsTo($letter);
        $this->wiring->connect($letter, $letter);
        $this->wiring->connect($temp, $temp);
    }
}

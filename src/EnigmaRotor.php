<?php

declare(strict_types=1);

namespace Rafalmasiarek\Enigma;

/**
 * This class represents a Rotor of an Enigma.
 *
 * The Rotors are the key element of an Enigma. Each provides the monoalphabetical substitution of its wiring,
 * but unlike plugboard and reflector, rotors move, so that the substitution changes.
 *
 * <pre>
 * ABCDEFGHIJKLMNOPQRSTUVWXYZ
 * ||||||||||||||||||||||||||
 * EKMFLGDQVZNTOWYHXUSPAIBRCJ
 * =>
 * ABCDEFGHIJKLMNOPQRSTUVWXYZ
 * ||||||||||||||||||||||||||
 * JEKMFLGDQVZNTOWYHXUSPAIBRC
 * </pre>
 *
 * Notches mark the positions, where the next rotor may advance
 * The Ringstellung changes the position of the wiring relative to its notches and alphabet.
 */
/**
 * @author Rafal Masiarek <rafalmasiarek@hotmail.com>
 * @version 1.0
 * @package Enigma
 * @subpackage Core
 */
class EnigmaRotor
{
    /**
     * The wiring of a rotor.
     * @var EnigmaWiring
     */
    private $wiring;

    /**
     * The positions of the notches of a rotor.
     * @var array integer positions of the notches
     */
    private $notches;

    /**
     * Actual position of the rotor.
     * @var integer actual rotorpositions
     */
    private $position = 0;

    /**
     * Offset of the wiring.
     * @var integer actual positions rotor
     */
    private $ringstellung = 0;

    /**
     * A rotor is in use or available
     * @var boolean
     */
    public $inUse = false;

    /**
     * Constructor creates a new Wiring with the setup from $wiring and stores positions of the notches.
     * @uses EnigmaWiring
     * @param string setup for the wiring
     * @param array positions of the notches
     */
    public function __construct($wiring, $notches)
    {
        $this->wiring = new EnigmaWiring($wiring);
        $this->notches = $notches;
    }

    /**
     * Advance the rotor by 1 step.
     * When postion reaches ENIGMA_ALPHABET_SIZE, it is reset to 0.
     * @uses ENIGMA_ALPHABET_SIZE
     * @return void
     */
    public function advance(): void
    {
        $this->position = ($this->position + 1) % ENIGMA_ALPHABET_SIZE;
    }

    /**
     * A notch is open.
     * Returns true if the rotor is in a turnover position for the next rotor
     * @return boolean turnover position reached
     */
    public function isNotchOpen()
    {
        return \in_array($this->position, $this->notches, true);
    }

    /**
     * Send an letter from side A through the wiring to side B.
     * To get the right pin of the wiring, we have to take the current position and the offset given by the ringstellung into account.<br>
     * + ENIGMA_ALPHABET_SIZE and % ENIGMA_ALPHABET_SIZE keep the value positive and in bounds
     * @uses ENIGMA_ALPHABET_SIZE
     * @param integer letter to process
     * @return integer resulting letter
     */
    public function processLetter1stPass($letter)
    {
        $letter = ($letter - $this->ringstellung + $this->position + ENIGMA_ALPHABET_SIZE) % ENIGMA_ALPHABET_SIZE;
        $letter = $this->wiring->processLetter1stPass($letter);
        return ($letter + $this->ringstellung - $this->position + ENIGMA_ALPHABET_SIZE) % ENIGMA_ALPHABET_SIZE;
    }

    /**
     * Send an letter from side B through the wiring to side A.
     * To get the right pin of the wiring, we have to take the current position and the offset given by the ringstellung into account.<br>
     * + ENIGMA_ALPHABET_SIZE and % ENIGMA_ALPHABET_SIZE keep the value positive and in bounds
     * @uses ENIGMA_ALPHABET_SIZE
     * @param integer letter to process
     * @return integer resulting letter
     */
    public function processLetter2ndPass($letter)
    {
        $letter = ($letter - $this->ringstellung + $this->position + ENIGMA_ALPHABET_SIZE) % ENIGMA_ALPHABET_SIZE;
        $letter = $this->wiring->processLetter2ndPass($letter);
        return ($letter + $this->ringstellung - $this->position + ENIGMA_ALPHABET_SIZE) % ENIGMA_ALPHABET_SIZE;
    }

    /**
     * Set the rotor to a given position.
     * @param integer position to go to
     * @return void
     */
    public function setPosition($letter): void
    {
        $this->position = $letter;
    }

    /**
     * Retrieve current position of the rotor.
     * @return integer current position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets the ringstellung to a given position.
     * @param integer position to go to
     * @return void
     */
    public function setRingstellung($letter): void
    {
        $this->ringstellung = $letter;
    }
}

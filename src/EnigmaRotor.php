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
     * stores the setup for all available rotors
     * fields are
     * key: ID of the rotor
     * wiring: the setup for the wiring of a rotor
     * used: IDs of models, this rotos can be used in
     * notches: the turnover positions of a rotor
     * @global array $ENIGMA_ROTORS
     */
    public static array $setup = [
        ['key'=>RotorType::I,     'wiring'=>'EKMFLGDQVZNTOWYHXUSPAIBRCJ', 'used'=>[EnigmaModel::WMLW, EnigmaModel::KMM3, EnigmaModel::KMM4], 'notches'=>[Enigma::KEY_Q]],
        ['key'=>RotorType::II,    'wiring'=>'AJDKSIRUXBLHWTMCQGZNPYFVOE', 'used'=>[EnigmaModel::WMLW, EnigmaModel::KMM3, EnigmaModel::KMM4], 'notches'=>[Enigma::KEY_E]],
        ['key'=>RotorType::III,   'wiring'=>'BDFHJLCPRTXVZNYEIWGAKMUSQO', 'used'=>[EnigmaModel::WMLW, EnigmaModel::KMM3, EnigmaModel::KMM4], 'notches'=>[Enigma::KEY_V]],
        ['key'=>RotorType::IV,    'wiring'=>'ESOVPZJAYQUIRHXLNFTGKDCMWB', 'used'=>[EnigmaModel::WMLW, EnigmaModel::KMM3, EnigmaModel::KMM4], 'notches'=>[Enigma::KEY_J]],
        ['key'=>RotorType::V,     'wiring'=>'VZBRGITYUPSDNHLXAWMJQOFECK', 'used'=>[EnigmaModel::WMLW, EnigmaModel::KMM3, EnigmaModel::KMM4], 'notches'=>[Enigma::KEY_Z]],
        ['key'=>RotorType::VI,    'wiring'=>'JPGVOUMFYQBENHZRDKASXLICTW', 'used'=>[EnigmaModel::KMM3, EnigmaModel::KMM4], 'notches'=>[Enigma::KEY_M, Enigma::KEY_Z]],
        ['key'=>RotorType::VII,   'wiring'=>'NZJHGRCXMYSWBOUFAIVLPEKQDT', 'used'=>[EnigmaModel::KMM3, EnigmaModel::KMM4], 'notches'=>[Enigma::KEY_M, Enigma::KEY_Z]],
        ['key'=>RotorType::VIII,  'wiring'=>'FKQHTLXOCBJSPDZRAMEWNIUYGV', 'used'=>[EnigmaModel::KMM3, EnigmaModel::KMM4], 'notches'=>[Enigma::KEY_M, Enigma::KEY_Z]],
        ['key'=>RotorType::BETA,  'wiring'=>'LEYJVCNIXWPBQMDRTAKZGFUHOS', 'used'=>[EnigmaModel::KMM4], 'notches'=>[]],
        ['key'=>RotorType::GAMMA, 'wiring'=>'FSOKANUERHMBTIYCWLQPZXVGJD', 'used'=>[EnigmaModel::KMM4], 'notches'=>[]],
    ];

    /**
     * The wiring of a rotor.
     * @var EnigmaWiring
     */
    private EnigmaWiring $wiring;

    /**
     * The positions of the notches of a rotor.
     * @var array integer positions of the notches
     */
    private array $notches;

    /**
     * Actual position of the rotor.
     * @var integer actual rotorpositions
     */
    private int $position = 0;

    /**
     * Offset of the wiring.
     * @var integer actual positions rotor
     */
    private int $ringstellung = 0;

    /**
     * A rotor is in use or available
     * @var boolean
     */
    public bool $inUse = false;

    /**
     * Constructor creates a new Wiring with the setup from $wiring and stores positions of the notches.
     * @param string setup for the wiring
     * @param array positions of the notches
     */
    public function __construct(string $wiring, array $notches)
    {
        $this->wiring = new EnigmaWiring($wiring);
        $this->notches = $notches;
    }

    /**
     * Advance the rotor by 1 step.
     * When postion reaches ENIGMA_ALPHABET_SIZE, it is reset to 0.
     * @return void
     */
    public function advance(): void
    {
        $this->position = ($this->position + 1) % EnigmaAlphabet::count();
    }

    /**
     * A notch is open.
     * Returns true if the rotor is in a turnover position for the next rotor
     * @return boolean turnover position reached
     */
    public function isNotchOpen(): bool
    {
        return \in_array($this->position, $this->notches, true);
    }

    /**
     * Send an letter from side A through the wiring to side B.
     * To get the right pin of the wiring, we have to take the current position and the offset given by the ringstellung into account.<br>
     * + ENIGMA_ALPHABET_SIZE and % ENIGMA_ALPHABET_SIZE keep the value positive and in bounds
     * @param integer letter to process
     * @return integer resulting letter
     */
    public function processLetter1stPass(int $letter): int
    {
        $letter = ($letter - $this->ringstellung + $this->position + EnigmaAlphabet::count()) % EnigmaAlphabet::count();
        $letter = $this->wiring->processLetter1stPass($letter);
        return ($letter + $this->ringstellung - $this->position + EnigmaAlphabet::count()) % EnigmaAlphabet::count();
    }

    /**
     * Send an letter from side B through the wiring to side A.
     * To get the right pin of the wiring, we have to take the current position and the offset given by the ringstellung into account.<br>
     * + ENIGMA_ALPHABET_SIZE and % ENIGMA_ALPHABET_SIZE keep the value positive and in bounds
     * @param integer letter to process
     * @return integer resulting letter
     */
    public function processLetter2ndPass(int $letter): int
    {
        $letter = ($letter - $this->ringstellung + $this->position + EnigmaAlphabet::count()) % EnigmaAlphabet::count();
        $letter = $this->wiring->processLetter2ndPass($letter);
        return ($letter + $this->ringstellung - $this->position + EnigmaAlphabet::count()) % EnigmaAlphabet::count();
    }

    /**
     * Set the rotor to a given position.
     * @param integer position to go to
     * @return void
     */
    public function setPosition(int $letter): void
    {
        $this->position = $letter;
    }

    /**
     * Retrieve current position of the rotor.
     * @return integer current position
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * Sets the ringstellung to a given position.
     * @param integer position to go to
     * @return void
     */
    public function setRingstellung(int $letter): void
    {
        $this->ringstellung = $letter;
    }
}

<?php

declare(strict_types=1);

namespace Rafalmasiarek\Enigma;

/**
 * This class represents an Enigma.
 *
 * 3 different models can be emulated with this class, each one has its own set of rotors and reflectors to be used with.
 * Depending on the model, 3 or 4 rotors are mounted, only the first three of them can be triggered by the advance mechanism.
 * A letter is encoded by sending its corresponding signal through the plugboard, rotor 1..3(4), the reflector,
 * rotor 3(4)..1 and the plugboard again.
 * After each encoded letter, the advance mechanism changes the internal setup by rotating the rotors.
 */
/**const
 * @author Rafal Masiarek <rafalmasiarek@hotmail.com>
 * @version 1.0
 * @package Enigma
 * @subpackage Core
 */
class Enigma
{
    /**
     * Keyboard codes
     */
    public const KEY_A = 0;
    public const KEY_B = 1;
    public const KEY_C = 2;
    public const KEY_D = 3;
    public const KEY_E = 4;
    public const KEY_F = 5;
    public const KEY_G = 6;
    public const KEY_H = 7;
    public const KEY_I = 8;
    public const KEY_J = 9;
    public const KEY_K = 10;
    public const KEY_L = 11;
    public const KEY_M = 12;
    public const KEY_N = 13;
    public const KEY_O = 14;
    public const KEY_P = 15;
    public const KEY_Q = 16;
    public const KEY_R = 17;
    public const KEY_S = 18;
    public const KEY_T = 19;
    public const KEY_U = 20;
    public const KEY_V = 21;
    public const KEY_W = 22;
    public const KEY_X = 23;
    public const KEY_Y = 24;
    public const KEY_Z = 25;

    /**
     * converts a character into its pendant in the Enigma alphabet
     * @param string character to convert
     * @return integer represention of a character in the Enigma alphabet
     * @uses $ENIGMA_ALPHABET
     */
    public static function enigma_l2p($l)
    {
        global $ENIGMA_ALPHABET;
        return array_search(strtoupper($l), $ENIGMA_ALPHABET, true);
    }


    /**
     * converts an element of the Enigma alphabet to 'our' alphabet
     * @param integer element to be converted
     * @return string resulting character
     * @uses $ENIGMA_ALPHABET
     */
    public static function enigma_p2l($p)
    {
        global $ENIGMA_ALPHABET;
        return $ENIGMA_ALPHABET[$p];
    }

    /**
     * The plugboard that connects input and output to the 1st rotor.
     * @var EnigmaPlugboard
     */
    private $plugboard;

    /**
     * The rotors used by the Enigma.
     * @var array EnigmaRotor
     */
    private $rotors;

    /**
     * The reflector used by the Enigma.
     * @var array EnigmaReflector
     */
    private $reflector;

    /**
     * The rotors available for this model of the Enigma.
     * @var array EnigmaRotor
     */
    private $availablerotors;

    /**
     * The reflectors available for this model of the Enigma.
     * @var array EnigmaReflector
     */
    private array $availablereflectors;

    /**
     * Constructor sets up the plugboard and creates the rotors and reflectros available for the given model.
     * The initital rotors and reflectros are mounted.
     * @param integer ID for the model to emulate
     * @param array integer IDs for the rotors for the initial setup
     * @param integer ID for the reflector for the initial setup
     * @uses $ENIGMA_ROTORS
     * @uses $ENIGMA_REFLECTORS
     * @uses EnigmaPlugboard
     * @uses EnigmaRotor
     * @uses EnigmaReflector
     */
    public function __construct(EnigmaModel $model, array $rotors, ReflectorType $reflector)
    {
        global $ENIGMA_ROTORS, $ENIGMA_REFLECTORS;

        $this->rotors = [];
        $this->availablerotors = [];
        $this->availablereflectors = [];

        $this->plugboard = new EnigmaPlugboard;

        foreach ($ENIGMA_ROTORS as $r) {
            if (\in_array($model, $r['used'], true)) {
                $this->availablerotors[$r['key']->name] = new EnigmaRotor($r['wiring'], $r['notches']);
            }
        }
        foreach ($ENIGMA_REFLECTORS as $r) {
            if (\in_array($model, $r['used'], true)) {
                $this->availablereflectors[$r['key']->name] = new EnigmaReflector($r['wiring']);
            }
        }

        foreach ($rotors as $key=>$value) {
            $this->mountRotor($key, $value);
        }
        $this->mountReflector($reflector);
    }

    /**
     * Advance the rotors.
     * Rotor 1 advances every time, rotor 2 when a notch on rotor 1 is open and when rotor 3 advances, rotor 3 when a notch on rotor 2 is open
     * @return void
     */
    private function advance(): void
    {
        if ($this->rotors[1]->isNotchOpen()) {
            $this->rotors[2]->advance();
            $this->rotors[1]->advance();
        }
        if ($this->rotors[0]->isNotchOpen()) {
            $this->rotors[1]->advance();
        }
        $this->rotors[0]->advance();
    }

    /**
     * Encode a single letter.
     * The letter passes the plugboard, the rotors, the reflector, the rotors in the opposite direction and again the plugboard.
     * Every encoding triggers the advancemechanism.
     * @see advance
     * @param string letter to encode
     * @return string encoded letter
     * @uses enigma_l2p
     * @uses enigma_p2l
     */
    public function encodeLetter($letter)
    {
        $this->advance();
        $letter = self::enigma_l2p($letter);
        $letter = $this->plugboard->processLetter($letter);
        for ($idx=0; $idx<\count($this->rotors); $idx++) {
            $letter = $this->rotors[$idx]->processLetter1stPass($letter);
        }
        $letter = $this->reflector->processLetter($letter);
        for ($idx=(\count($this->rotors)-1); $idx>-1; $idx--) {
            $letter = $this->rotors[$idx]->processLetter2ndPass($letter);
        }
        $letter = $this->plugboard->processLetter($letter);
        return self::enigma_p2l($letter);
    }

    /**
     * Mount a rotor into the enigma.
     * A rotor may only be used in one position at a time, so if an rotor is already in use nothing is changed.
     * The previously used rotor will be replaced.
     * @param integer ID of the position to set the rotor
     * @param integer ID of the rotor to use
     * @return void
     */
    public function mountRotor(int|RotorPosition $position, RotorType $rotor): void
    {
        $position = RotorPosition::getPositionIntValue($position);

        if ($this->availablerotors[$rotor->name]->inUse) {
            return;
        }
        if (isset($this->rotors[$position])) {
            $this->rotors[$position]->inUse = false;
        }
        $this->rotors[$position] = $this->availablerotors[$rotor->name];
        $this->rotors[$position]->inUse = true;
    }

    /**
     * Mount a reflector into the enigma.
     * The previously used reflector will be replaced.
     * @param integer ID of the reflector to use
     * @return void
     */
    public function mountReflector(ReflectorType $reflector): void
    {
        $this->reflector = $this->availablereflectors[$reflector->name];
    }

    /**
     * Turn a rotor to a new position.
     * @param integer ID of the rotor to turn
     * @param string letter to turn to
     * @return void
     * @uses enigma_l2p
     */
    public function setPosition(RotorPosition $position, $letter): void
    {
        $this->rotors[$position->value]->setPosition(self::enigma_l2p($letter));
    }

    /**
     * Get the current position of a rotor.
     * @param integer ID of the rotor
     * @return string current position
     * @uses enigma_p2l
     */
    public function getPosition(int|RotorPosition $position)
    {
        $position = RotorPosition::getPositionIntValue($position);

        return self::enigma_p2l($this->rotors[$position]->getPosition());
    }

    /**
     * Turn the ringstellung of a rotor to a new position.
     * @param integer ID of the rotor
     * @param string letter to turn to
     * @return void
     * @uses enigma_l2p
     */
    public function setRingstellung(int|RotorPosition $position, $letter): void
    {
        $position = RotorPosition::getPositionIntValue($position);

        $this->rotors[$position]->setRingstellung(self::enigma_l2p($letter));
    }

    /**
     * Connect 2 letters on the plugboard.
     * The letter are transformed to integer first
     * @param string letter 1 to connect
     * @param string letter 2 to connect
     * @return void
     * @uses enigma_l2p
     */
    public function plugLetters($letter1, $letter2): void
    {
        $this->plugboard->plugLetters(self::enigma_l2p($letter1), self::enigma_l2p($letter2));
    }

    /**
     * Disconnects 2 letters on the plugboard.
     * Because letters are connected in pairs, we only need to know one of them.
     * @param string 1 of the 2 letters to disconnect
     * @return void
     * @uses enigma_l2p
     */
    public function unplugLetters($letter): void
    {
        $this->plugboard->unplugLetters(self::enigma_l2p($letter));
    }
}

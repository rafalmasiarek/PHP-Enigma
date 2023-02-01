<?php

declare(strict_types=1);

namespace Rafalmasiarek\Enigma;

use League\CommonMark\CommonMarkConverter;

require_once 'vendor/autoload.php';

/**
 * @author Rafal Masiarek <rafalmasiarek@hotmail.com>
 * @author  Mustache Lab <kontakt@mustachelab.pl>
 * @copyright Copyright (c) 2015, Rafal Masiarek
 * @version 1.0
 * @package Enigma
 */


/*

                                                                      `.:'+###++++++#++##+;:.`
                                                                `:+##+++++++++++++++++++++++++++##+:`
                                                            :+##+++++++++++++#++++++++++++++++++++++++##;`
                                                        ;##+++++++++++++++++#+++++++++#++++++++++++++++#++##'`
                                                    ,###++#++++++++++####+++';::,,,::;'+++###+++++++++++++++++##:
                                                `:#+++++++++++####+;,                         .;'####++#++#++++++##'`
                                              ;@++++++++#++##':                                     ,;###+##+++++++#+#;
                                           ;@++++++++++##'.                                             `:##++++#+++++++@:
                                        .##+++++++++#+.                                                     `+#++++#++++++#+`
                                      '#++#+++#++#'`                         .:''+#####+,                       ;#+++++++++++#,
                                   .#+#+++++++#'`              `'###      .@+++++++++++++#'     @',`               ;##+++++++++#;
                                 ;@++++++++##.                @++++#     ++++++++++++++++++#`   #+++#@+:             `+#++++++++##+
                               +#++++++++#;                   #+#++#    :+++#+++++++++++++++#   ##+++++++##;`           ,#+++++++#++#
                            `##+++++##+#.                     ##+++#    #+++++++#+;:'#++++++++  #+++++++++++##+.          `+####++++#+#`
                          .##+++++#+#+`          `:++;,       #++++#    @#++++#,      ;++++++#  #+++++++++++++++##,          '#+++++++#+#`
                        .@+#++++++#+          `'#++++++#;     #++++#    @+++++'        #+++++#  #+++++;#+++++++++++#'          ;#+++++++++#`
                      .#++++++++#+          ;@+++++++++++#    #++++#    @+++++'        #+++++#  #++++#`.#++++++#+++++#           ;#++++++++++
                    .#+++++#+++#         `##++++++++++++++.   #++++#    @+++++'        #+++++#  #++++#  .+++++++++++++#            '#++++++++#+
                   #++#++++++#`         @++#++++++++++++++#   #++++#    @+++++'           ````  #++++#   +#+++'#+++++++'             ++++++++++#:
                 ++++++++++#,       `.  #+++++##. `+#+++++@   #++++#    @+++++'                 #++++#   ,++++' ++#+++++        `      #++#++++++#`
               :#++++++++#'       `#+,  #++++#      ++++++@   #++++#    @+++++'                 #++++#   :++++'  #++++++       +++`     .#++++++++++
              #+++++++#+#        +#++,  #++++#      :++++#@   #++++#    @#++++'                 #++++#   :++++;  ,+++++'      ;++##+      :#++++++++#.
            ,#+++++++++;       ;#+#++,  @#+++#      :+++++@   #++++#    @+++++'                 #++++#   :++++;  `#++++'      #+++++#+      #+++++++++'
           +++++++++##`      ,#+#++++:  #++++#      ,+++++#   #++++#    @+++++'                 #++++#   ;++++:   #++++'     #++#+++#+#'     ,#++++++#+#
          #++++++++++       #+++++++#;  #++++#      ,+++++#   #++++#    @+++++'                 #++++#   ;++++:   #++++;    ,++++#++++++#'     +++++++++#
         ##+++++++#.      '#++++#+#;    #++++#      ,+++++#   #++++#    @+++++'                 #++++#   ;++++,  `#++++;    #++++ ;#++#+++#     .#+++++++#
        #++++++++#      `#++++++#;      ##+++#      .+++++#   #++++#    @+++++'                 #++++#   ;++++,  `#++++:   .+#++#   ;+#+++#       #+++++++#
       '++++++++@      :#++#+++#        +++++#      .+++++#   #++++#    @+++++;                 #++++#   '++++,  `+++++:   ##+++,    @+++++        :#++++++#
      `++++++++#      +++++++#`         +++++#      `+++++#   #++++#    @+++++;                 #++++#   '++++.  `+++++,   #+++#     @+++++        ;#++++++++
      #+++++++++#`    #++++++           +++++#      `+++++#   #++++#    @+++++;                 #++++#   '++++.  `+++++.  .++++#     #+++++       #++++++++++`
     `+++++++++++#    #++++'            '++++#      `+++++#   #++++#    @+++++;                 #++++#   '++++.  `+++++.  '++++'     #++++'      #+++++++++++#
     +++++++++++++;   #++++;            '++++#      `+++++#   #++++#    @+++++;                 #++++#   '++++`  `+++++`  +++++`     #++++'     :+#++++++++++#
     #++++#'#+++++#   #++++;            '++++#      `+++++#   #++++#    @+++++;                 #++++#   +++++`  `+++++`  #++++      #++++;     #++#++##+#++++;
     ++++#   ;++++#   #++++',,,,::`     ;++++#      `+++++#   #++++#    @+++++;  .............  #++++#   +++++`  .+++++   #+++#      +++++:     #++++   ;+++++#
     +++++    #++++   +#++++++++++.     ;++++#       #++++#   #++++#    @+++++;  ##++++++++#++  #++++#   ++++#`  .+++++   #+++#      +++++:    `#+++#    #+++++
     ++++#   .+++#+   ++++++++++++,     :++++#       #++++#   #++++#    @+++++;  @++++++++++++  #++++#   ++++#`  .+++++   +++++    '#+++++,    `#+++#   .#+++++
     #++++#`:#++++#   '+++++++++++:     :++++#       #++++#   #++++#    @+++++;  @++++++++++++  #++++#   ++++#`  ,++++#  .#++++ :#++#+++++.     #+++++ .#++++++
     ++#+++++++++#+   ;#++++++++++:     ,+++++`      #++++#   #++++#    #+++++;  @++++#++++++'  #++++#   ++++#   ,++++#  :#++++#++++++++++.     #+#++++++++++++
     ;#++++++++++#`   ;+++++            .+++++`      #++++#   ##+++#    #+++++;  `      #++++'  #++++#   ++++#   :++++#  ;++++++++++++++++`     .+++++++++++++.
      ##+++++++++;    :++++'            .+++++`      #++++#   #++++#    #+++++;         #++++'  #++++#   #+++#   :++++#  '++++++++#':++++#`      +++++++++++##
      +++++++++#:     ,++++'            `+++++`      #++++#   #++++#    #+++++;         #++++'  #++++#   #+++#   :++++#  '++++++#;  :++++#`       +++++++++++:
       #++++++#       ,++++#`           `+++++`      #++++#   #++++#    #+++++;         #++++'  #++++#   #+++#   ;++++#  '++++#,    ;++++#         +#++++++##
        ++++++++      .+++++++           +++++.      #++++#   +++++#`   #+++++;         #++#+;  #++++#   #+++#   ;++++#  +++++      ;++++#        #+#++++++#
        .###++++#     .#++++#+#+`        +++++.      #+++++   +++++#`   #+++++:         #++++;  #++++#   #+++#   '++++#  +++++`     ;++++#      ;+++++++++#
         `#++++#+#,     ##+++++++@:      #++++,      #+++++   +++++#`   #+++++:         #++++;  #++++#   #+++#   '++++#  +++++`     ;++#+#    `@#++++++++#
           #++++++++     .#+#++++++#@'   #++++,      #+++++   +++++#`   #+++++:         #++++;  #++++#   #+++#   '++++#  +++++`     ;++#+    +++++++++++#
            #++++++##,     .#++++++#++   #++++:      #+++++   '++++#`   #+++++:         #++++;  #+++++   #+++#   +++++#  +++++`     '#;    ,#++#++++++#:
             ,#+++++++#      `+#+++++#`  #++++:      #+++++   '++++#`   ++#+++:         #++++:  #+++++   @+++#   +++++#  #++++`     .    `#+#++#+++++#
               ++++++++#'       :##+++.  #++++:      #+++++   '++++#`   ++++++:         #++++:  #+++++   @+++#   +++++#  #++++.         #++++++++++#:
                `#+#+++++#'       `+#+,  #++++;      #+++++   ;++++#`   ++++++:         #++++:  #++++'   @+++#   +++++#  #+++#,       +++#++++#++#+
                  ,#++#++++#;        ;:  #++++;      #+++++   ;+++++`   ++++++:         #++++:  #++++'   @+++#   +++++#  #+#;       +#++++++++++#`
                    ;#+++++++#;          @++++'      #+++++   :+++++`   ++++++:         #++++,  #++++'   @+++#   #+++++  '`       +#+++++++#++@.
                      ;#+++++++#+         .+#+'      #+++++   :+++++`   ++++++,         #++++,  #++++;   @+++#   #+#+##         +#++++++++++#:
                        ;#++#+#++##.         ,+      #+++#+   :+++++`   ++++++,         #++++,  #++++;   @+#+#   ###,        .#+++++++++++#;
                          ;#++#+++++#'               #+++++`  ,+++++`   ++++++#        ;+++#+.  #++++:   #+++#   .         ;#+++++++++++#;
                            ,@+#++++++##,            @#++++`  ,+++++.   +++++++#:.```,#++++#+`  #++++:   #+#@+          .+#+++++++++###;
                              .#+##++++++#+,           ,'@+`  ,+#+++.   ,+++++++++###+++++++#   #++#+:   '.           ;#++++++++++++@:
                                 ;#+++++#+++#+:               ,+++++.    #++++++++#+++++++++.   #+##'`             ;##+#++++++++++#.
                                   .##+++++++++##'`            `'###.     #+++++++++#++++++'    `              `'#+++++++++++++#'
                                      :##+#++++++++##;`                    ,#++++++++++++#:                 .##+++++++++++++##.
                                         ;@+++++++++++###;.                   .........`                ,+##++++#+++++++++#:
                                            :@+++++++++++++###;,                                   ,;+##+++++++++#+++++@,
                                               .###+#+++++++++++###++':`                    .:'+###++++++++++++#+++#+.
                                                   ,+##++++++++++#+++++++######++++++######+++#+++#++++++++++#+#+:
                                                       ,'##+#+++++++++++++++++++++++++++++++++++++++++++++##+:
                                                            ,'@#+++++++++++++++++++++++++++++++++++++##+:`
*/

$enigma_history = (new CommonMarkConverter)->convert(file_get_contents(__DIR__.\DIRECTORY_SEPARATOR.'README.md'));



/**
 * encoding table
 * eg.: Enigma::KEY_A=>"A", Enigma::KEY_B=>"B", ...
 * @global array $ENIGMA_ALPHABET
 */
$ENIGMA_ALPHABET = [
    Enigma::KEY_A=>'A',
    Enigma::KEY_B=>'B',
    Enigma::KEY_C=>'C',
    Enigma::KEY_D=>'D',
    Enigma::KEY_E=>'E',
    Enigma::KEY_F=>'F',
    Enigma::KEY_G=>'G',
    Enigma::KEY_H=>'H',
    Enigma::KEY_I=>'I',
    Enigma::KEY_J=>'J',
    Enigma::KEY_K=>'K',
    Enigma::KEY_L=>'L',
    Enigma::KEY_M=>'M',
    Enigma::KEY_N=>'N',
    Enigma::KEY_O=>'O',
    Enigma::KEY_P=>'P',
    Enigma::KEY_Q=>'Q',
    Enigma::KEY_R=>'R',
    Enigma::KEY_S=>'S',
    Enigma::KEY_T=>'T',
    Enigma::KEY_U=>'U',
    Enigma::KEY_V=>'V',
    Enigma::KEY_W=>'W',
    Enigma::KEY_X=>'X',
    Enigma::KEY_Y=>'Y',
    Enigma::KEY_Z=>'Z',
];

/**
 * Size of the Enigma alphabet
 */
\define('ENIGMA_ALPHABET_SIZE', \count($ENIGMA_ALPHABET));


/**
 * stores the setup for all available rotors
 * fields are
 * key: ID of the rotor
 * wiring: the setup for the wiring of a rotor
 * used: IDs of models, this rotos can be used in
 * notches: the turnover positions of a rotor
 * @global array $ENIGMA_ROTORS
 */
$ENIGMA_ROTORS = [
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
 * stores the setup for all available reflectors
 * fields are
 * key: ID of the reflector
 * wiring: the setup for the wiring of a reflector
 * used: IDs of models, this rotos can be used in
 * @global array $ENIGMA_REFLECTORS
 */
$ENIGMA_REFLECTORS = [
    ['key'=>ReflectorType::B,     'wiring'=>'YRUHQSLDPXNGOKMIEBFZCWVJAT', 'used'=>[EnigmaModel::WMLW, EnigmaModel::KMM3]],
    ['key'=>ReflectorType::C,     'wiring'=>'FVPJIAOYEDRZXWGCTKUQSBNMHL', 'used'=>[EnigmaModel::WMLW, EnigmaModel::KMM3]],
    ['key'=>ReflectorType::BTHIN, 'wiring'=>'ENKQAUYWJICOPBLMDXZVFTHRGS', 'used'=>[EnigmaModel::KMM4]],
    ['key'=>ReflectorType::CTHIN, 'wiring'=>'RDOBJNTKVEHMLFCWZAXGYIPSUQ', 'used'=>[EnigmaModel::KMM4]],
];


/**
 * this function converts the Enigma cipher machine history to readable HTML output
 * @return HTML with Enigma history
 * @uses $enigma_history
 */
function enigma_history()
{
    return '<html><meta charset="utf-8">' . $enigma_history . '</html>';
}


$rotors = [RotorType::I, RotorType::II, RotorType::III];
$enigma = new Enigma(EnigmaModel::WMLW, $rotors, ReflectorType::B);
$enigma->setPosition(RotorPosition::P1, 'M');
$enigma->setRingstellung(RotorPosition::P1, 'B');

$enigma->plugLetters('A', 'C');
$enigma->plugLetters('B', 'Z');

$enigma->unplugLetters('A');

$l = 'A';
echo 'before: '.$enigma->getPosition(RotorPosition::P3).' '.$enigma->getPosition(RotorPosition::P2).' '.$enigma->getPosition(RotorPosition::P1).'<br>';
echo $l.'->'.$enigma->encodeLetter($l).'<br>';
echo 'after: '.$enigma->getPosition(RotorPosition::P3).' '.$enigma->getPosition(RotorPosition::P2).' '.$enigma->getPosition(RotorPosition::P1).'<br>';

?>

<pre>
<?php
  // print_r($enigma);
?>
</pre>

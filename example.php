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
 * eg.: ENIGMA_KEY_A=>"A", ENIGMA_KEY_B=>"B", ...
 * @global array $ENIGMA_ALPHABET
 */
$ENIGMA_ALPHABET = [
    ENIGMA_KEY_A=>'A',
    ENIGMA_KEY_B=>'B',
    ENIGMA_KEY_C=>'C',
    ENIGMA_KEY_D=>'D',
    ENIGMA_KEY_E=>'E',
    ENIGMA_KEY_F=>'F',
    ENIGMA_KEY_G=>'G',
    ENIGMA_KEY_H=>'H',
    ENIGMA_KEY_I=>'I',
    ENIGMA_KEY_J=>'J',
    ENIGMA_KEY_K=>'K',
    ENIGMA_KEY_L=>'L',
    ENIGMA_KEY_M=>'M',
    ENIGMA_KEY_N=>'N',
    ENIGMA_KEY_O=>'O',
    ENIGMA_KEY_P=>'P',
    ENIGMA_KEY_Q=>'Q',
    ENIGMA_KEY_R=>'R',
    ENIGMA_KEY_S=>'S',
    ENIGMA_KEY_T=>'T',
    ENIGMA_KEY_U=>'U',
    ENIGMA_KEY_V=>'V',
    ENIGMA_KEY_W=>'W',
    ENIGMA_KEY_X=>'X',
    ENIGMA_KEY_Y=>'Y',
    ENIGMA_KEY_Z=>'Z',
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
    ['key'=>ENIGMA_ROTOR_I,     'wiring'=>'EKMFLGDQVZNTOWYHXUSPAIBRCJ', 'used'=>[ENIGMA_MODEL_WMLW, ENIGMA_MODEL_KMM3, ENIGMA_MODEL_KMM4], 'notches'=>[ENIGMA_KEY_Q]],
    ['key'=>ENIGMA_ROTOR_II,    'wiring'=>'AJDKSIRUXBLHWTMCQGZNPYFVOE', 'used'=>[ENIGMA_MODEL_WMLW, ENIGMA_MODEL_KMM3, ENIGMA_MODEL_KMM4], 'notches'=>[ENIGMA_KEY_E]],
    ['key'=>ENIGMA_ROTOR_III,   'wiring'=>'BDFHJLCPRTXVZNYEIWGAKMUSQO', 'used'=>[ENIGMA_MODEL_WMLW, ENIGMA_MODEL_KMM3, ENIGMA_MODEL_KMM4], 'notches'=>[ENIGMA_KEY_V]],
    ['key'=>ENIGMA_ROTOR_IV,    'wiring'=>'ESOVPZJAYQUIRHXLNFTGKDCMWB', 'used'=>[ENIGMA_MODEL_WMLW, ENIGMA_MODEL_KMM3, ENIGMA_MODEL_KMM4], 'notches'=>[ENIGMA_KEY_J]],
    ['key'=>ENIGMA_ROTOR_V,     'wiring'=>'VZBRGITYUPSDNHLXAWMJQOFECK', 'used'=>[ENIGMA_MODEL_WMLW, ENIGMA_MODEL_KMM3, ENIGMA_MODEL_KMM4], 'notches'=>[ENIGMA_KEY_Z]],
    ['key'=>ENIGMA_ROTOR_VI,    'wiring'=>'JPGVOUMFYQBENHZRDKASXLICTW', 'used'=>[ENIGMA_MODEL_KMM3, ENIGMA_MODEL_KMM4], 'notches'=>[ENIGMA_KEY_M, ENIGMA_KEY_Z]],
    ['key'=>ENIGMA_ROTOR_VII,   'wiring'=>'NZJHGRCXMYSWBOUFAIVLPEKQDT', 'used'=>[ENIGMA_MODEL_KMM3, ENIGMA_MODEL_KMM4], 'notches'=>[ENIGMA_KEY_M, ENIGMA_KEY_Z]],
    ['key'=>ENIGMA_ROTOR_VIII,  'wiring'=>'FKQHTLXOCBJSPDZRAMEWNIUYGV', 'used'=>[ENIGMA_MODEL_KMM3, ENIGMA_MODEL_KMM4], 'notches'=>[ENIGMA_KEY_M, ENIGMA_KEY_Z]],
    ['key'=>ENIGMA_ROTOR_BETA,  'wiring'=>'LEYJVCNIXWPBQMDRTAKZGFUHOS', 'used'=>[ENIGMA_MODEL_KMM4], 'notches'=>[]],
    ['key'=>ENIGMA_ROTOR_GAMMA, 'wiring'=>'FSOKANUERHMBTIYCWLQPZXVGJD', 'used'=>[ENIGMA_MODEL_KMM4], 'notches'=>[]],
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
    ['key'=>ENIGMA_REFLECTOR_B,     'wiring'=>'YRUHQSLDPXNGOKMIEBFZCWVJAT', 'used'=>[ENIGMA_MODEL_WMLW, ENIGMA_MODEL_KMM3]],
    ['key'=>ENIGMA_REFLECTOR_C,     'wiring'=>'FVPJIAOYEDRZXWGCTKUQSBNMHL', 'used'=>[ENIGMA_MODEL_WMLW, ENIGMA_MODEL_KMM3]],
    ['key'=>ENIGMA_REFLECTOR_BTHIN, 'wiring'=>'ENKQAUYWJICOPBLMDXZVFTHRGS', 'used'=>[ENIGMA_MODEL_KMM4]],
    ['key'=>ENIGMA_REFLECTOR_CTHIN, 'wiring'=>'RDOBJNTKVEHMLFCWZAXGYIPSUQ', 'used'=>[ENIGMA_MODEL_KMM4]],
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


$rotors = [ENIGMA_ROTOR_I, ENIGMA_ROTOR_II, ENIGMA_ROTOR_III];
$enigma = new Enigma(ENIGMA_MODEL_WMLW, $rotors, ENIGMA_REFLECTOR_B);
$enigma->setPosition(ENIGMA_ROTOR_1, 'M');
$enigma->setRingstellung(ENIGMA_ROTOR_1, 'B');

$enigma->plugLetters('A', 'C');
$enigma->plugLetters('B', 'Z');

$enigma->unplugLetters('A');

$l = 'A';
echo 'before: '.$enigma->getPosition(ENIGMA_ROTOR_3).' '.$enigma->getPosition(ENIGMA_ROTOR_2).' '.$enigma->getPosition(ENIGMA_ROTOR_1).'<br>';
echo $l.'->'.$enigma->encodeLetter($l).'<br>';
echo 'after: '.$enigma->getPosition(ENIGMA_ROTOR_3).' '.$enigma->getPosition(ENIGMA_ROTOR_2).' '.$enigma->getPosition(ENIGMA_ROTOR_1).'<br>';

?>

<pre>
<?php
  // print_r($enigma);
?>
</pre>

# History

The Enigma cipher machine was invented by a German engineer, Arthur Scherbius, who applied for his patent on February 23, 1918\. This was in the same time frame that 3 other inventors from 3 other countries also applied for a patent for a rotary cipher machine. Scherbius first tried to sell his design to the German military but finding no interest decided to start up his own company to manufacture the Enigma for commercial sale.

The Enigma machine was first offered for sale in 1923, but had few takers. The first model A and model B machines were heavy at 110 lbs. and also cumbersome to use. These first models had a typewriter incorporated into the device but did not have a reflector.

The model C came out in 1925, which was much smaller and lighter and included the reflector. The typewriter was replaced by a lamp panel, requiring the user to write down the results of ciphering and deciphering a message. The model D was unveiled in 1927, and it was this model that saw commercial interest from many countries.

The German Navy adopted the Enigma in 1926 and the Army in 1928\. Both services modified the Enigma for their purposes, and would continue to modify their Enigmas and keep them different through the end of WW2\. They both added the plugboard, which swaps letters in pairs before and after the signal goes to the rotors, adding a significant cryptologic strength to the Enigma. By this time the weight of the Army Enigma was 26 lbs., much lighter than the original machines but still heavy for a battlefield cipher. This was a much stronger cipher than the US M-209 but the US cipher machine weighed only 6 lbs., did not require batteries and had a printer so it could be operated by one person.

# Enigma Technology

The Enigma machine was an ingenious advance in technology, both for the strength of the encipherment and for the ease of use for the operator. It is an electro-mechanical machine resembling a typewriter, with a plugboard to swap letters, rotors to further scramble the alphabet and a lamp panel to display the result. Most models of Enigma used 3 or 4 rotors with a reflector to allow the same settings to be used for enciphering and deciphering.

Most of the description which follows will be for the Army 3 rotor machine, which you can see in pictures from my collection. The key was made up of 3 settings: the set of letters to be swapped in the plugboard, the order of the 3 rotors from the available set of 5 and finally the A to Z letter setting for each rotor. The theoretical keyword length is 3 X 10 114 , which is far larger than the number of atoms in the universe. Even as used by the Nazis, the keyword length was 10 23 , which means 100,000 operators, each checking one key setting every second would take twice the age of the universe to break the code. Despite these overwhelming odds, the Allies did just that.

Each component will be described in turn as the electrical connection goes from the keyboard, through the plugboard, through the rotors and back to the plugboard before finally lighting up a light bulb on the lamp board.

The keyboard has a QWERTZUI layout, without any numbers, space bar or any other keys. Pressing a key will electrically open a signal from the letter pressed and will also mechanically advance from 1 to 3 rotors. Touch typing does not work because of the pressure required to advance the rotors and since there is no printer and the letter lit up has to be written down. Each letter will be enciphered from 7 to 9 times and because of the design of the reflector, no letter will encrypt to itself. Note also the data plate under the "V".

The layout of the plugboard matches the QWERTZUI layout of the keyboard, which is also the layout for the lamp panel. Plugboard cables use plugs which look like the standard 2-prong European power plugs. The Nazis always used 10 cables, swapping 20 letters for their daily key. While using a variable number of cables would provide a stronger cipher, the tradeoff would be a greater possibility of errors. Interestingly, using more cables gives a stronger cipher up to 11, then perhaps counterintuitively, the strength of the cipher declines dramatically. You can follow this logic mathematically in the section below, Calculation of Key Lengths .

After the electrical signal leaves the plugboard, it goes to an entry wheel, the 3 rotors, the reflector, then reverses course back through the 3 rotors, the entry wheel, the plugboard and then lights up a light under one of the 26 characters. The British worked hard to figure out the encipherment used for the entry wheel, only to be told by the Polish codebreakers there was no encipherment for that wheel. Each character is therefore enciphered by each wheel twice and by the reflector, giving 7 separate encipherments. The plugboard may or may not encipher a character, so the final result is that after going through the plugboard twice each character can be enciphered between 7 and 9 times.

There are 3 rotors in the machine, from a selection of 5 available. Each rotor has the numbers 01 through 26 on its circumference, representing the letters of the alphabet. The daily key is a choice of the 3 out of 5 rotors, their order on the spindle and the rotational setting of 01 to 26 for each rotor.

Also, each rotor has a setting for the location to cause the wheel on its left to advance. The rotors advance "odometer style", the rightmost rotor advances after each letter enciphered, at some setting on that rotor it causes the middle rotor to advance, which would then happen every 26 letters. The leftmost rotor advances at some setting of the middle rotor and then advances every 26 rotations of the middle rotor. This gives a message depth of 26 X 26 X 26=17,576, which means that after that many characters of a message are enciphered, the encipherment repeats. The notch causes the turnover to occur 8 characters before the location of the notch. For example, the rotor above has a notch in position "D", so the wheel to its left would advance after moving past position "V". The notch on the leftmost rotor has no effect.

The Nazis did not change the position of the notch and each wheel had the notch on a different letter. The Allies were able to exploit this fact, since this made each wheel unique. Also, the regular, odometer style stepping of the rotors was a major security flaw, because only one wheel would change and all other positions would remain the same for 26 consecutive characters. By comparison, the US Sigaba and the Swiss NEMA cipher machines were specifically designed to provide irregular stepping of the rotors.

The reflector simply swaps each letter in pairs so the same setting can be used for enciphering or deciphering. The reflector was fixed in the Enigma, so this setting was known to the Allied cryptographers after capturing the first Enigma. Also, this reciprocal design means that no letter enciphers to itself, which is another cryptologic shortcoming exploited by the Allies. The 4 wheel Naval Enigma used a reflector that was movable, so it could be set to 26 different positions. Also, there were 2 reflector wheels to select from, greatly increasing the complexity of the Naval Enigma.

# Lampboard

The lampboard follows the same layout as the keyboard and plugboard. Each letter has a light bulb under it, which lights up to show the enciphered or deciphered letter, which must then be written down. There is a filter attached inside the lid which can be installed over the lampboard to reduce the amount of light emitted from the Enigma. When operating the Enigma at night close to enemy lines, the filter keeps the operator from being easily spotted.

The light bulbs are powered by a 4.5 volt battery or a transformer plugged into a 220 volt outlet. The lampboard is the only output, so the Enigma machine usually required 2 operators, one to operate the keyboard and the other to write down the message.

The Enigma wiring diagram shows an example of an "H" being pressed on the keyboard and the path of the encipherment is highlighted until the "A" lights up on the lampboard. The "H" is first enciphered to an "O" on the plugboard, then goes to the rotor assembly. The "O" will be enciphered 3 times going through the 3 rotors, once more going through the reflector and 3 more times going through the 3 rotors in reverse. At this point the letter coming into the plugboard is an "M" which gets enciphered into an "A", which causes the "A" to light up on the lampboard.

In this example, the "H" was enciphered 9 times, which is the maximum number any letter can be enciphered. Since 20 of 26 letters are swapped in the plugboard, it is possible that the encipherment labeled #1 or #9 could be skipped, yielding a total of 7 or 8 encipherments for some letters.

# Nazi Operating Procedures

To use the Enigma machine, the user must change the settings to the daily key. This involves installing the 3 rotors from the 5 available in the correct order. Then he would plug in the 10 plugboard cables, connecting the 10 pairs of letters as specified in the daily setting. Lastly, he would rotate the 3 rotors to the prescribed setting. All these daily settings would be sent to him in a code book sent once a month, longer on boats and submarines.

Now, the user will select a 3 letter code of his choosing and encipher that code twice. Then he would reset the rotors to this new 3 letter code and encipher the message he wants to send. Some users used the same 3 letter code repeatedly, for instance their girlfriend's initials or the consecutive or diagonal letters on the keyboard, such as "WER" or "QAY". This was a violation of Nazi procedures which the Allies were able to exploit to break the code on many occasions.

To decipher a message, he would reset the rotors to the daily setting and decode the first 6 characters of the message. It should be a 3 character code, repeated, for example "BTLBTL". Now he would reset the rotors to "BTL" and key in the rest of the message, writing down the letter lit up with each key stroke. The result will be the plaintext message. In the field, the Nazis normally had one person keying in the letters and someone else writing down the message. There may even be a third person to carry the plaintext message to the intended recipient or the enciphered message to a radio operator. Later in the war, the 3 character code was sent only once instead of twice, eliminating an easy method of Allied codebreaking.

The strength of the Enigma cipher gave the Nazis complete confidence in the security of their messages. Even when faced with clear evidence that the Enigma messages were compromised, they steadfastly refused to believe it and instead attributed any security breach to spies or coincidence. While the design was very strong, there were design and operational choices the Nazis made that weakened the encipherment. For instance, the fact that no character could encipher to itself, always using 10 plugboard cables, enciphering the 3 letter message setting twice, etc. all helped the Allies break the Enigma code.

# Breaking the Enigma Code in WW2

The German Navy and Army adopted the Enigma in 1926 and 1928 but only added the plugboard in 1930\. The Polish were understandably nervous about German aggression and on September 1, 1932 the Polish Cipher Bureau hired a 27-year-old Polish mathematician, Marian Rejewski, along with two fellow Poznan University mathematics graduates, Henryk Zygalski and Jerzy Różycki, to try to break the code of this new machine. This was an early insight into the role of mathematics in codebreaking.

The 3 Polish codebreakers had access to an Enigma machine, but did not know the rotor wiring. Through a German spy, the French gained access to two months of Enigma key settings, but without the rotors were not able to make use of this information. They passed along this information to their British and Polish colleagues and the Polish were able to quickly solve the Enigma puzzle, recreating the 3 rotors then in use. This was in March 1933 and they continued to break the code until the Nazis invaded Poland on September 1, 1939, marking the start of WW2.

The Polish not only broke the code, but invented the first electro-mechanical deciphering machine to systematically break the Enigma code. They invented this device in the fall of 1938 and called their invention the "bombe". There is a debate over whether this was named for the ice cream treat they were eating at the time of the idea or whether the ticking sound of the working bombe sounded like an incoming Nazi bomb. The bombe consisted of 6 Enigma machines in series, so that all 6 possible rotor settings could be tested at once. Using the bombe, the Poles were able to determine the Enigma rotor settings and decipher the first daily Nazi messages within two hours, and in real time for the rest of the day. Unfortunately, when the invasion of Poland began, the Nazis added 2 new rotors, increasing the possible combination of rotors from 6 to 60 (5 X 4 X 3). This made the Polish bombe ineffective, with the battle of wits tilting back in favor of the Nazi codemakers.

The bombe and the secret of their codebreaking success was a closely guarded secret by the Poles until a month before the Nazi invasion. In a conference near Warsaw, on July 26, 1939, the Polish codebreakers finally told their story of almost 7 years of codebreaking success to the astonished British and French codebreakers. They knew of the impending Nazi invasion of Poland and gave their allies copies of the Nazi Enigma with the plugboard and information on the bombe and Nazi operational procedures. Without this head start, the British effort to break the Enigma would have been greatly delayed.

After the outbreak of WW2 and the information from the Poles, the British codebreaking efforts began in earnest. They used an estate north of London, Bletchley Park, as their headquarters. There would eventually be over 11,000 people working in secret on this codebreaking effort. The British mathematician, Alan Turing, would lead the effort. Using the Polish experience in bombe making, they developed a bombe with 36 Enigmas in series, with the first one delivered in May 1940\. This would not test all combination of rotors, and a brute force attack would take too long, in any case. Several contributions were made by Turing and others to eliminate many impossible rotor settings to allow the 36 Enigma bombe to figure out the rotor settings in a reasonable amount of time.

After the outbreak of WW2 and the information from the Poles, the British codebreaking efforts began in earnest. They used an estate north of London, Bletchley Park, as their headquarters. There would eventually be over 11,000 people working in secret on this codebreaking effort. The British mathematician, Alan Turing, would lead the effort. Using the Polish experience in bombe making, they developed a bombe with 36 Enigmas in series, with the first one delivered in May 1940\. This would not test all combination of rotors, and a brute force attack would take too long, in any case. Several contributions were made by Turing and others to eliminate many impossible rotor settings to allow the 36 Enigma bombe to figure out the rotor settings in a reasonable amount of time.

Before the US entered the war, the Nazi U-boats were the greatest threat to Britain. They were dependent on supplies from the US and the Nazis were sinking on average 60 ships per month. Ships were sent over in convoys and the Nazis employed a strategy of "wolfpacks" to wait until a dozen or so U-boats were on hand to swarm the convoy. This strategy was so efficient, Winston Churchill was later quoted as saying, "The only thing that ever really frightened me during the war was the U-boat peril". The Nazi strategy was to completely blockade Britain and win a quick victory over all of Europe before the US would enter the war

Before the US entered the war, the Nazi U-boats were the greatest threat to Britain. They were dependent on supplies from the US and the Nazis were sinking on average 60 ships per month. Ships were sent over in convoys and the Nazis employed a strategy of "wolfpacks" to wait until a dozen or so U-boats were on hand to swarm the convoy. This strategy was so efficient, Winston Churchill was later quoted as saying, "The only thing that ever really frightened me during the war was the U-boat peril". The Nazi strategy was to completely blockade Britain and win a quick victory over all of Europe before the US would enter the war

After the breakthrough from the capture of the U-110 codebooks, the British found other creative ways to get later codebooks. They discovered that the lightly armed weather ships had Enigma machines on them and the British would stage the capture of one of these weather ships in such a way that the Germans thought they were chance happenings and the ship sank with its cryptographic treasures. They also were able to get the codebooks from a few other U-boats, the most famous and courageous was the boarding of the already sinking U-559\. Valuable codebooks were captured, but 2 British sailors lost their lives as the U-boat sank.

The British were zealous in protecting the source of their Enigma secrets. They were also careful to make sure that any actions taken from Enigma messages had a "cover story" that would keep the Nazis from changing their machines or procedures. For instance, if the British knew that two U-boats would surface in the mid-Atlantic at a specific location for refueling, they would have a spotter plane "accidentally" find them and then have a ship nearby to sink the submarines before they could disengage and dive. As a result of the Allies success in decrypting Enigma traffic, they were able to turn around the earlier Nazi rout in the Battle of the Atlantic. The Nazi U-boat menace turned into a disaster with 725 of 1155 U-boats and 82% of 35,000 sailors never to return from sea.

One incredible side note to the Enigma story is the level of secrecy maintained for decades after WW2\. About 11,000 people in Bletchley Park and 4,000 in the US worked on deciphering Enigma traffic. Despite this widespread knowledge, the secret was not disclosed until the UK government publicly acknowledged this secret in 1974, almost 30 years after the war was over. Some claim the Allied cryptologic success shortened the war by 2 years, others placed even higher value on this success. As Winston Churchill told King George VI, "It was thanks to Ultra that we won the war."

# Beginning of Modern Computing

The British bombe was a wonder of mechanical and electrical engineering. It had the equivalent function of 36 Enigma machines in series and was capable of figuring out the rotor settings for each day's keys in about 12 hours. From that point, all messages could be read in real time. In all, 210 British bombes were built during the war and all were destroyed at the end of the war. The bombe is not to be confused with another British decryption machine, the Colossus, which was used to decipher Nazi teletype messages. When the US entered the war, they took on the task of building a bombe to decipher the 4 rotor Naval Enigma machine. This bombe necessarily had to be faster to decipher the greater combination of rotor settings by having 4 rotors out of an available 8 used in the Naval Enigma. Compared to the 3 rotor Enigma, the number of rotor combination increased from 60 to 336 (8 X 7 X 6). Each bombe had the equivalent function of 16 four rotor Enigmas. They were 34 times faster than their British counterparts, each drum rotating at an amazing 1725 RPMs (almost 29 revolutions per second). These bombes were truly behemoths, each one 10 feet long and weighing 2.5 tons. A total of 121 US bombes were built by NCR during the war.

# Theory vs. Practice

The theoretical number of Enigma settings was never achieved in practice by the Germans. The number of settings the Allied Forces encountered for the standard 3 rotor Enigma was:

*   10 plugboard cables were always used, reducing the possible combinations to 150,738,274,937,250
*   Only 5 rotors were issued, so selecting 3 out of 5 is 5*4*3=60
*   The initial settings of the rotors and the positions of the notches remain the same at 17,576 and 676
*   Reflector setting was known and remained unchanged=1
*   The product of the above numbers is: 107,458,687,327,250,619,360,000 or 1.07*10<sup>23</sup>
*   To test 1.07*10<sup>23</sup> key settings, 100,000 operators each checking one setting every second would take twice the age of the universe to break the code.

Despite an estimated 30,000 Enigma machines manufactured, there are currently only about 350 known to exist today, with less than half of these in private hands. Here is one of them, a 3-rotor Army Enigma machine, serial #A12760, made in Berlin in September 1941\. It is in original condition except for some newer varnish on the outside. Everything works as it did 70 years ago. It has the German Army Waffenamt stamp on the lid and each rotor. Waffenamt means weapons office and this stamp is an eagle over swastika arms inspection stamp with the letters "Wa.A" for Waffenamt followed by the inspector #618\. The rotors are from 3 other Enigma machines and are serial numbered A3386 [I], A16411 [II] and A13529 [III]. The 3rd rotor is from an Enigma machine currently at the CIA museum in Langley, VA. Rotors IV and V are missing.

This Enigma machine was used by the Nazis in occupied Norway and post-war by the Norwegian Police Special Branch (Overvaakingspolitiet). The Norwegians changed the wiring in the rotors and the reflector and also stenciled the "40."" on the outside and on the battery box. The Torn E.b radio was also left behind by the Nazis in Norway after the war.

# How it Works?

Information used to create this package come from [http://en.wikipedia.org/wiki/Enigma_machine](http://en.wikipedia.org/wiki/Enigma_machine) and the manual from "Enigma Simulator" by D. Rijmenants [http://users.telenet.be/d.rijmenants/](http://users.telenet.be/d.rijmenants/) I tested proper encryption against "Enigma Simulator" by D. Rijmenants [http://www.xat.nl/enigma](http://www.xat.nl/enigma).
Website of project [http://mustachelab.pl/enigma](http://mustachelab.pl/enigma)

This package provides the funtionality of 3 different Enigma models:

*   Wehrmacht / Luftwaffe 3 rotor model
*   Kriegsmarine 3 rotor model
*   Kriegsmarine 4 rotor model

Each model can be equipped with a different set of rotors and refelctors. All in all are 10 types of rotors and 4 types of refelctors available.

*   Wehrmacht / Luftwaffe 3 rotor model uses:
    *   rotors: I, II, III, IV, V
    *   reflectors: B, C
*   Kriegsmarine 3 rotor model uses:
    *   rotors: I, II, III, IV, V, VI, VII, VIII
    *   reflectors: B, C
*   Kriegsmarine 4 rotor model uses:
    *   rotors: I, II, III, IV, V, VI, VII, VIII, Beta, Gamma
    *   reflectors: B Thin, C Thin

Each rotor and reflector provides a unique wiring, which can not be changed. Settings are:

*   Contacts = ABCDEFGHIJKLMNOPQRSTUVWXYZ
*   I = EKMFLGDQVZNTOWYHXUSPAIBRCJ
*   II = AJDKSIRUXBLHWTMCQGZNPYFVOE
*   III = BDFHJLCPRTXVZNYEIWGAKMUSQO
*   IV = ESOVPZJAYQUIRHXLNFTGKDCMWB
*   V = VZBRGITYUPSDNHLXAWMJQOFECK
*   VI = JPGVOUMFYQBENHZRDKASXLICTW
*   VII = NZJHGRCXMYSWBOUFAIVLPEKQDT
*   VIII = FKQHTLXOCBJSPDZRAMEWNIUYGV
*   Beta = LEYJVCNIXWPBQMDRTAKZGFUHOS
*   Gamma = FSOKANUERHMBTIYCWLQPZXVGJD
*   B = YRUHQSLDPXNGOKMIEBFZCWVJAT
*   C = FVPJIAOYEDRZXWGCTKUQSBNMHL
*   B Thin = ENKQAUYWJICOPBLMDXZVFTHRGS
*   C Thin = RDOBJNTKVEHMLFCWZAXGYIPSUQ
*   Contacts = ABCDEFGHIJKLMNOPQRSTUVWXYZ

Rotors can have notches, which indicate the position where the next rotor is advanced. e.g.: Notch at position Q means, if rotor steps from Q to R, the next rotor is advanced. These positions are:

*   I = Q
*   II = E
*   III = V
*   IV = J
*   V = Z
*   VI, VII, VIII = Z + M

Each Rotor can be only used in one position at a time. Rotors I..VIII can be mounted at position 1, 2 or 3, wherelse rotors Beta and Gamma can only be used at position 4\. Aditionally, Beta and Gamma can only be used in combination with reflector B Thin or C Thin, the others only with reflector B or C.

**!!!important!!!**   
These conditions only apply if a proper emulation of the original Enigma is desired. This implementation allows to setup the rotors in any order, so its up to the user to take care of the order of rotors.

# usage:

to create a new instance call the constructor with the following parameters:

    $enigma = new Enigma(integer $model, array $rotors, integer $reflector);

<pre>MODELS

 ├── ENIGMA_MODEL_WMLW

 ├── ENIGMA_MODEL_KMM3

 └── ENIGMA_MODEL_KMM4

</pre>

defines the model to emulate

*   `$rotors` - IDs to identify the rotors for the initial setup number of IDs has to match the number needed by the specific model
*   `$reflector` - ID to identify the reflector for the initial setup

to en- or decode a letter, use

    string $enigma->encodeLetter (string $letter)

to change the setup of the Enigma, these functions can be used:

    void $enigma->mountRotor (integer $position, integer $rotor);

replace a rotor by another

    void $enigma->mountReflector (integer $reflector);

replace a reflector by another

    void $enigma->setPosition (integer $position, string $letter);

turn a rotor to a new position

    void $enigma->setRingstellung (integer $position, string $letter)

turn the ringstellungon a rotor to a new position

    void $enigma->plugLetters (string $letter1, string $letter2)

connect two letters on the plugboard

    void $enigma->unplugLetters (string $letter)

disconnect two letters on the plugboard the current position of a rotor can be obtained by

    string $enigma->getPosition (integer $position)

# example:

    <?php
    /**
     * @author Rafal Masiarek <rafalmasiarek@hotmail.com>
     * @author Mustache Lab <http://mustachelab.pl>
     * @copyright Copyright (c) 2015, Rafal Masiarek
     * @version 1.0
     * @package Enigma
     */

    require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . "Enigma.php";
    $rotors = array(ENIGMA_ROTOR_I, ENIGMA_ROTOR_II, ENIGMA_ROTOR_III);
    $enigma = new Enigma(ENIGMA_WM, $rotors, ENIGMA_REFLECTOR_B);
    $enigma->setPosition(ENIGMA_ROTOR_1, "M");
    $enigma->setRingstellung(ENIGMA_ROTOR_1, "B");
    $enigma->plugLetters("A", "C");
    $enigma->plugLetters("B", "Z");
    $enigma->unplugLetters("A");
    $l = "A";
    echo "before: ".$enigma->getPosition(ENIGMA_ROTOR_3)." ".$enigma->getPosition(ENIGMA_ROTOR_2)." ".$enigma->getPositionENIGMA_ROTOR_1)."<br>";
    echo $l."->".$enigma->encodeLetter($l)."<br>";
    echo "after: ".$enigma->getPosition(ENIGMA_ROTOR_3)." ".$enigma->getPosition(ENIGMA_ROTOR_2)." ".$enigma->getPosition(ENIGMA_ROTOR_1)."<br>";

    ?>

    <pre>
    <?php print_r($enigma); ?>
    </pre>

Enigma machines are now a collector's item for the über geek - a standard Army Enigma has increased in value from $20K to over $100K in the past decade. A record price of over $208,000 was achieved in a Christie's auction on 9/29/2011.

Package by [Rafal Masiarek](http://rafal.masiarek.pl "Rafal Masiarek") from [Mustache Lab](http://mustachelab.pl "Mustache Lab")


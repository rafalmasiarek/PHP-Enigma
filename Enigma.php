<?php
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
/**
 * @author Rafal Masiarek <rafalmasiarek@hotmail.com>
 * @author  Mustache Lab <kontakt@mustachelab.pl>
 * @copyright Copyright (c) 2015, Rafal Masiarek
 * @version 1.0
 * @package Enigma
 */

$enigma_history = <<<EOT
<p>The Enigma cipher machine was invented by a 
German engineer, Arthur Scherbius, who applied for his patent on 
February 23, 1918. This was in the same time frame that 3 other inventors from 
3 other countries also applied for a patent for a rotary cipher machine. 
Scherbius first tried to sell his design to the German military but finding no 
interest decided to start up his own company to manufacture the Enigma for 
commercial sale.</p>

<p>The Enigma machine was first offered for sale in 1923, but had few takers. 
The first model A and model B machines were heavy at 110 lbs. and also 
cumbersome to use. These first models had a typewriter incorporated into the 
device but did not have a reflector.</p>

<p>The model C came out in 1925, which was much smaller and lighter and 
included the reflector. The typewriter was replaced by a lamp panel, requiring 
the user to write down the results of ciphering and deciphering a message. The 
model D was unveiled in 1927, and it was this model that saw commercial 
interest from many countries.</p>

<p>The German Navy adopted the Enigma in 1926 and the Army in 1928. Both 
services modified the Enigma for their purposes, and would continue to modify 
their Enigmas and keep them different through the end of WW2. They both added 
the plugboard, which swaps letters in pairs before and after the signal goes to 
the rotors, adding a significant cryptologic strength to the Enigma. By this 
time the weight of the Army Enigma was 26 lbs., much lighter than the original 
machines but still heavy for a battlefield cipher. This was a much stronger 
cipher than the US M-209 but the US cipher machine weighed only 6 lbs., did not 
require batteries and had a printer so it could be operated by one person.</p>

<h2>Enigma Technology </h2>

<p>The Enigma machine was an ingenious advance in technology, both for the 
strength of the encipherment and for the ease of use for the operator. It is an 
electro-mechanical machine resembling a typewriter, with a plugboard to swap 
letters, rotors to further scramble the alphabet and a lamp panel to display 
the result. Most models of Enigma used 3 or 4 rotors with a reflector to allow 
the same settings to be used for enciphering and deciphering.</p>

<p>Most of the description which follows will be for the Army 3 rotor machine, 
which you can see in pictures from my collection. The key was made up of 3 
settings: the set of letters to be swapped in the plugboard, the order of the 3 
rotors from the available set of 5 and finally the A to Z letter setting for 
each rotor. The theoretical keyword length is 3 X 10 114 , which is far larger 
than the number of atoms in the universe. Even as used by the Nazis, the 
keyword length was 10 23 , which means 100,000 operators, each checking one key 
setting every second would take twice the age of the universe to break the 
code. Despite these overwhelming odds, the Allies did just that. </p>

<p>Each component will be described in turn as the electrical connection goes 
from the keyboard, through the plugboard, through the rotors and back to the 
plugboard before finally lighting up a light bulb on the lamp board.</p>

<p>The keyboard has a QWERTZUI layout, without any numbers, space bar or any 
other keys. Pressing a key will electrically open a signal from the letter 
pressed and will also mechanically advance from 1 to 3 rotors. Touch typing 
does not work because of the pressure required to advance the rotors and since 
there is no printer and the letter lit up has to be written down. Each letter 
will be enciphered from 7 to 9 times and because of the design of the 
reflector, no letter will encrypt to itself. Note also the data plate under the 
"V".</p>

<p>The layout of the plugboard matches the QWERTZUI layout of the keyboard, 
which is also the layout for the lamp panel. Plugboard cables use plugs which 
look like the standard 2-prong European power plugs. The Nazis always used 10 
cables, swapping 20 letters for their daily key. While using a variable number 
of cables would provide a stronger cipher, the tradeoff would be a greater 
possibility of errors. Interestingly, using more cables gives a stronger cipher 
up to 11, then perhaps counterintuitively, the strength of the cipher declines 
dramatically. You can follow this logic mathematically in the section below, 
Calculation of Key Lengths .</p>

<p>After the electrical signal leaves the plugboard, it goes to an entry wheel, 
the 3 rotors, the reflector, then reverses course back through the 3 rotors, 
the entry wheel, the plugboard and then lights up a light under one of the 26 
characters. The British worked hard to figure out the encipherment used for the 
entry wheel, only to be told by the Polish codebreakers there was no 
encipherment for that wheel. Each character is therefore enciphered by each 
wheel twice and by the reflector, giving 7 separate encipherments. The 
plugboard may or may not encipher a character, so the final result is that 
after going through the plugboard twice each character can be enciphered 
between 7 and 9 times.</p>

<p>There are 3 rotors in the machine, from a selection of 5 available. Each 
rotor has the numbers 01 through 26 on its circumference, representing the 
letters of the alphabet. The daily key is a choice of the 3 out of 5 rotors, 
their order on the spindle and the rotational setting of 01 to 26 for each 
rotor.</p>

<p>Also, each rotor has a setting for the location to cause the wheel on its 
left to advance. The rotors advance "odometer style", the rightmost rotor 
advances after each letter enciphered, at some setting on that rotor it causes 
the middle rotor to advance, which would then happen every 26 letters. The 
leftmost rotor advances at some setting of the middle rotor and then advances 
every 26 rotations of the middle rotor. This gives a message depth of 26 X 26 X 
26 = 17,576, which means that after that many characters of a message are 
enciphered, the encipherment repeats. The notch causes the turnover to occur 8 
characters before the location of the notch. For example, the rotor above has a 
notch in position "D", so the wheel to its left would advance after moving past 
position "V". The notch on the leftmost rotor has no effect.</p>

<p>The Nazis did not change the position of the notch and each wheel had the 
notch on a different letter. The Allies were able to exploit this fact, since 
this made each wheel unique. Also, the regular, odometer style stepping of the 
rotors was a major security flaw, because only one wheel would change and all 
other positions would remain the same for 26 consecutive characters. By 
comparison, the US Sigaba and the Swiss NEMA cipher machines were specifically 
designed to provide irregular stepping of the rotors.</p>

<p>The reflector simply swaps each letter in pairs so the same setting can be 
used for enciphering or deciphering. The reflector was fixed in the Enigma, so 
this setting was known to the Allied cryptographers after capturing the first 
Enigma. Also, this reciprocal design means that no letter enciphers to itself, 
which is another cryptologic shortcoming exploited by the Allies. The 4 wheel 
Naval Enigma used a reflector that was movable, so it could be set to 26 
different positions. Also, there were 2 reflector wheels to select from, 
greatly increasing the complexity of the Naval Enigma.</p>

<h2Lampboard</h2>

<p>The lampboard follows the same layout as the keyboard and plugboard. Each 
letter has a light bulb under it, which lights up to show the enciphered or 
deciphered letter, which must then be written down. There is a filter attached 
inside the lid which can be installed over the lampboard to reduce the amount 
of light emitted from the Enigma. When operating the Enigma at night close to 
enemy lines, the filter keeps the operator from being easily spotted.</p>

<p>The light bulbs are powered by a 4.5 volt battery or a transformer plugged 
into a 220 volt outlet. The lampboard is the only output, so the Enigma machine 
usually required 2 operators, one to operate the keyboard and the other to 
write down the message.</p>

<p>The Enigma wiring diagram shows an example of an "H" being pressed on the 
keyboard and the path of the encipherment is highlighted until the "A" lights 
up on the lampboard. The "H" is first enciphered to an "O" on the plugboard, 
then goes to the rotor assembly. The "O" will be enciphered 3 times going 
through the 3 rotors, once more going through the reflector and 3 more times 
going through the 3 rotors in reverse. At this point the letter coming into the 
plugboard is an "M" which gets enciphered into an "A", which causes the "A" to 
light up on the lampboard.</p>

<p>In this example, the "H" was enciphered 9 times, which is the maximum number 
any letter can be enciphered. Since 20 of 26 letters are swapped in the 
plugboard, it is possible that the encipherment labeled #1 or #9 could be 
skipped, yielding a total of 7 or 8 encipherments for some letters.</p>

<h2>Nazi Operating Procedures</h2>

<p>To use the Enigma machine, the user must change the settings to the daily 
key. This involves installing the 3 rotors from the 5 available in the correct 
order. Then he would plug in the 10 plugboard cables, connecting the 10 pairs 
of letters as specified in the daily setting. Lastly, he would rotate the 3 
rotors to the prescribed setting. All these daily settings would be sent to him 
in a code book sent once a month, longer on boats and submarines.</p>

<p>Now, the user will select a 3 letter code of his choosing and encipher that 
code twice. Then he would reset the rotors to this new 3 letter code and 
encipher the message he wants to send. Some users used the same 3 letter code 
repeatedly, for instance their girlfriend's initials or the consecutive or 
diagonal letters on the keyboard, such as "WER" or "QAY". This was a violation 
of Nazi procedures which the Allies were able to exploit to break the code on 
many occasions. </p>

<p>To decipher a message, he would reset the rotors to the daily setting and 
decode the first 6 characters of the message. It should be a 3 character code, 
repeated, for example "BTLBTL". Now he would reset the rotors to "BTL" and key 
in the rest of the message, writing down the letter lit up with each key 
stroke. The result will be the plaintext message. In the field, the Nazis 
normally had one person keying in the letters and someone else writing down the 
message. There may even be a third person to carry the plaintext message to the 
intended recipient or the enciphered message to a radio operator. Later in the 
war, the 3 character code was sent only once instead of twice, eliminating an 
easy method of Allied codebreaking.</p>

<p>The strength of the Enigma cipher gave the Nazis complete confidence in the 
security of their messages. Even when faced with clear evidence that the Enigma 
messages were compromised, they steadfastly refused to believe it and instead 
attributed any security breach to spies or coincidence. While the design was 
very strong, there were design and operational choices the Nazis made that 
weakened the encipherment. For instance, the fact that no character could 
encipher to itself, always using 10 plugboard cables, enciphering the 3 letter 
message setting twice, etc. all helped the Allies break the Enigma code.</p>

<h2>Breaking the Enigma Code in WW2 </h2>

<p>The German Navy and Army adopted the Enigma in 1926 and 1928 but only added 
the plugboard in 1930. The Polish were understandably nervous about German 
aggression and on September 1, 1932 the Polish Cipher Bureau hired a 
27-year-old Polish mathematician, Marian Rejewski, along with two fellow Poznan 
University mathematics graduates, Henryk Zygalski and Jerzy Różycki, to try to 
break the code of this new machine. This was an early insight into the role of 
mathematics in codebreaking.</p>

<p>The 3 Polish codebreakers had access to an Enigma machine, but did not know 
the rotor wiring. Through a German spy, the French gained access to two months 
of Enigma key settings, but without the rotors were not able to make use of 
this information. They passed along this information to their British and 
Polish colleagues and the Polish were able to quickly solve the Enigma puzzle, 
recreating the 3 rotors then in use. This was in March 1933 and they continued 
to break the code until the Nazis invaded Poland on September 1, 1939, marking 
the start of WW2.</p>

<p>The Polish not only broke the code, but invented the first 
electro-mechanical deciphering machine to systematically break the Enigma code. 
They invented this device in the fall of 1938 and called their invention the 
"bombe". There is a debate over whether this was named for the ice cream treat 
they were eating at the time of the idea or whether the ticking sound of the 
working bombe sounded like an incoming Nazi bomb. The bombe consisted of 6 
Enigma machines in series, so that all 6 possible rotor settings could be 
tested at once. Using the bombe, the Poles were able to determine the Enigma 
rotor settings and decipher the first daily Nazi messages within two hours, and 
in real time for the rest of the day. Unfortunately, when the invasion of 
Poland began, the Nazis added 2 new rotors, increasing the possible combination 
of rotors from 6 to 60 (5 X 4 X 3). This made the Polish bombe ineffective, 
with the battle of wits tilting back in favor of the Nazi codemakers.</p>

<p>The bombe and the secret of their codebreaking success was a closely guarded 
secret by the Poles until a month before the Nazi invasion. In a conference 
near Warsaw, on July 26, 1939, the Polish codebreakers finally told their story 
of almost 7 years of codebreaking success to the astonished British and French 
codebreakers. They knew of the impending Nazi invasion of Poland and gave their 
allies copies of the Nazi Enigma with the plugboard and information on the 
bombe and Nazi operational procedures. Without this head start, the British 
effort to break the Enigma would have been greatly delayed.</p>

<p>After the outbreak of WW2 and the information from the Poles, the British 
codebreaking efforts began in earnest. They used an estate north of London, 
Bletchley Park, as their headquarters. There would eventually be over 11,000 
people working in secret on this codebreaking effort. The British 
mathematician, Alan Turing, would lead the effort. Using the Polish experience 
in bombe making, they developed a bombe with 36 Enigmas in series, with the 
first one delivered in May 1940. This would not test all combination of rotors, 
and a brute force attack would take too long, in any case. Several 
contributions were made by Turing and others to eliminate many impossible rotor 
settings to allow the 36 Enigma bombe to figure out the rotor settings in a 
reasonable amount of time.</p>

<p>The British were routinely breaking the Nazi Air Force Enigma messages by 
May 1940 through the end of the war, mainly due to sloppy operating procedures 
and consistent cribs. The Army and Navy versions took longer to solve, but were 
solved intermittently as changes were made to each service procedures and 
Enigmas. The greatest challenge was the Naval Enigma, with its 4 rotors out of 
8 available and the strict operational procedures they practiced.</p>

<p>Before the US entered the war, the Nazi U-boats were the greatest threat to 
Britain. They were dependent on supplies from the US and the Nazis were sinking 
on average 60 ships per month. Ships were sent over in convoys and the Nazis 
employed a strategy of "wolfpacks" to wait until a dozen or so U-boats were on 
hand to swarm the convoy. This strategy was so efficient, Winston Churchill was 
later quoted as saying, "The only thing that ever really frightened me during 
the war was the U-boat peril". The Nazi strategy was to completely blockade 
Britain and win a quick victory over all of Europe before the US would enter 
the war.</p>

<p>The first time the British were able to decipher the Naval Enigma traffic 
was due to the capture of enemy code books from the U-110 in May of 1941. The 
captain, Fritz Julius Lemp, died trying to scuttle his submarine. The HMS 
Bulldog was towing the U-boat back to England when it was ordered to sink it in 
the Atlantic so the Germans would not suspect the intact Enigma machine and 
codebooks were captured.</p>

<p>After the breakthrough from the capture of the U-110 codebooks, the British 
found other creative ways to get later codebooks. They discovered that the 
lightly armed weather ships had Enigma machines on them and the British would 
stage the capture of one of these weather ships in such a way that the Germans 
thought they were chance happenings and the ship sank with its cryptographic 
treasures. They also were able to get the codebooks from a few other U-boats, 
the most famous and courageous was the boarding of the already sinking U-559. 
Valuable codebooks were captured, but 2 British sailors lost their lives as the 
U-boat sank.</p>

<p>The British were zealous in protecting the source of their Enigma secrets. 
They were also careful to make sure that any actions taken from Enigma messages 
had a "cover story" that would keep the Nazis from changing their machines or 
procedures. For instance, if the British knew that two U-boats would surface in 
the mid-Atlantic at a specific location for refueling, they would have a 
spotter plane "accidentally" find them and then have a ship nearby to sink the 
submarines before they could disengage and dive.</p>

<p>As a result of the Allies success in decrypting Enigma traffic, they were 
able to turn around the earlier Nazi rout in the Battle of the Atlantic. The 
Nazi U-boat menace turned into a disaster with 725 of 1155 U-boats and 82% of 
35,000 sailors never to return from sea. </p>

<p>One incredible side note to the Enigma story is the level of secrecy 
maintained for decades after WW2. About 11,000 people in Bletchley Park and 
4,000 in the US worked on deciphering Enigma traffic. Despite this widespread 
knowledge, the secret was not disclosed until the UK government publicly 
acknowledged this secret in 1974, almost 30 years after the war was over. Some 
claim the Allied cryptologic success shortened the war by 2 years, others 
placed even higher value on this success. As Winston Churchill told King George 
VI, "It was thanks to Ultra that we won the war."</p>

<h2>Beginning of Modern Computing </h2>

<p>The British bombe was a wonder of mechanical and electrical engineering. It 
had the equivalent function of 36 Enigma machines in series and was capable of 
figuring out the rotor settings for each day's keys in about 12 hours. From 
that point, all messages could be read in real time. In all, 210 British bombes 
were built during the war and all were destroyed at the end of the war. The 
bombe is not to be confused with another British decryption machine, the 
Colossus, which was used to decipher Nazi teletype messages.</p>

<p>When the US entered the war, they took on the task of building a bombe to 
decipher the 4 rotor Naval Enigma machine. This bombe necessarily had to be 
faster to decipher the greater combination of rotor settings by having 4 rotors 
out of an available 8 used in the Naval Enigma. Compared to the 3 rotor Enigma, 
the number of rotor combination increased from 60 to 336 (8 X 7 X 6). Each 
bombe had the equivalent function of 16 four rotor Enigmas. They were 34 times 
faster than their British counterparts, each drum rotating at an amazing 1725 
RPMs (almost 29 revolutions per second). These bombes were truly behemoths, 
each one 10 feet long and weighing 2.5 tons. A total of 121 US bombes were 
built by NCR during the war.</p>

<h2>Calculation of Key Lengths </h2>

<p>For those mathematically inclined, the following will be a calculation of 
the key length of the Enigma machine, both the theoretical design limit and the 
key length as used by the Nazis.</p>

<ol>
<li>Maximum # of plugboard settings </li>

<p>The plugboard was a military addition to the commercial Enigma machine, and 
this addition added a considerable cryptologic strength to the resulting 
encipherment. The theoretical maximum number of plugboard settings is a 
function of 3 variables: the number of plugboards cables (p), the number if 
groupings of 2p letters out of 26 and the number of ways to interconnect the 2p 
group of letters. The chart below shows the # of plugboard settings for each 
possibility of 0 to 13 cables.</p>

<img style="margin:10px;" width="764" height="579" src="http://ciphermachines.com/pictures/enigma/plugboardsettings.jpg" alt="Plugboard Table">

<li>Maximum # rotor settings </li>

<p>The internal wiring of each rotor could be constructed in 26! different 
combinations. Since 3 rotors are used, the number of combinations when 
selecting 3 rotors out of 26! are: </p>

<p>26!*(26!-1)*(26!-2) = 
65,592,937,459,144,468,297,405,473,480,371,753,615,896,841,298,988,710,328,553,8
05,190,043,271,168,000,000 </p>

<p>Each of the 3 rotors could initially be set to any letter: </p>

<p>26*26*26 = 17,576</p>

<p>The right-most rotor advances one letter after each key is pressed, the 
second and third rotors advance one letter after a full revolution of the rotor 
to its right. The setting for the notch to enable this was also changeable to 
any letter of the alphabet: </p>

<p>26*26 = 676</p>

<li>3. Maximum # reflector settings </li>

<p>The reflector scrambled the letters in pairs so it could encrypt and 
decrypt. </p>

<p>The letter "A" could be switched to any of the 25 remaining letters, the 
next letter could be switched to any of the 23 remaining letters, and so on. 
</p>

<p>Notice this result is the same as using 13 plugboard cables, since all 
letters are paired (see chart above) </p>

<p>25*23*21*(...)*3*1 = 7,905,853,580,625</p>

<p>Total Theoretical Maximum Key Length </p>

<p>The total theoretical number of Enigma settings is thus the product of the 5 
items listed above, or... </p>

<p>
(532,985,208,200,576)*(65,592,937,459,144,468,297,405,473,480,371,753,615,896,841,298,988,710,328,553,805,190,043,271,168,000,000)*(17,576)*(676)*(7,905,853,580,625) = 3,283,883,513,796,974,198,700,882,069,882,752,878,379,955,261,095,623,685,444,055,315,226,006,433,615,627,409,666,933,182,371,154,802,769,920,000,000,00
</p>

<p>Or 3.28*10<sup>114</sup> </p>

<p>This number is far greater than the total number of atoms in the observable 
universe (10<sup>80</sup>).</p>

</ol>

<h2>Theory vs. Practice </h2>

<p>The theoretical number of Enigma settings was never achieved in practice by 
the Germans. The number of settings the Allied Forces encountered for the 
standard 3 rotor Enigma was:</p>

<p>10 plugboard cables were always used, reducing the possible combinations to 
150,738,274,937,250 </p>

<p>Only 5 rotors were issued, so selecting 3 out of 5 is 5*4*3 = 60 </p>

<p>The initial settings of the rotors and the positions of the notches remain 
the same at 17,576 and 676 </p>

<p>Reflector setting was known and remained unchanged = 1 </p>

<p>The product of the above numbers is: 107,458,687,327,250,619,360,000 or 
1.07*10<sup>23</sup> </p>

<p>To test 1.07*10<sup>23</sup> key settings, 100,000 operators each checking 
one setting every second would take twice the age of the universe to break the 
code.</p>

<p>Pictured above is the Enigma cipher machine and other German field equipment 
used to send Enigma messages to and from the battlefield. The "Torn E.B" was 
the most common field radio used by all the military services. The morse code 
key, headset and microphone would be used to send and receive Enigma messages. 
The field phones were for voice calls and were only as secure (or unsecure) as 
the phone line.</p>

<p>Despite an estimated 30,000 Enigma machines manufactured, there are 
currently only about 350 known to exist today, with less than half of these in 
private hands. Here is one of them, a 3-rotor Army Enigma machine, serial 
#A12760, made in Berlin in September 1941. It is in original condition except 
for some newer varnish on the outside. Everything works as it did 70 years ago. 
It has the German Army Waffenamt stamp on the lid and each rotor. Waffenamt 
means weapons office and this stamp is an eagle over swastika arms inspection 
stamp with the letters "Wa.A" for Waffenamt followed by the inspector #618. The 
rotors are from 3 other Enigma machines and are serial numbered A3386 [I], 
A16411 [II] and A13529 [III]. The 3rd rotor is from an Enigma machine currently 
at the CIA museum in Langley, VA. Rotors IV and V are missing.</p>

<p>This Enigma machine was used by the Nazis in occupied Norway and post-war by 
the Norwegian Police Special Branch (Overvaakingspolitiet). The Norwegians 
changed the wiring in the rotors and the reflector and also stenciled the 
"40."" on the outside and on the battery box. The Torn E.b radio was also left 
behind by the Nazis in Norway after the war.</p>

<p>Enigma machines are now a collector's item for the über geek - a standard 
Army Enigma has increased in value from $20K to over $100K in the past decade. 
A record price of over $208,000 was achieved in a Christie's auction on 
29.09.2011.</p>
EOT;

/**
 * Wehrmacht/Luftwaffe (3-rotor model)
 */
define("ENIGMA_MODEL_WMLW", 0);

/**
 * Kriegsmarine M3 (3-rotor model)
 */
define("ENIGMA_MODEL_KMM3", 1);

/**
 * Kriegsmarine M4 (4-rotor model)
 */
define("ENIGMA_MODEL_KMM4", 2);


/**
 * ID Rotorposition 1
 */
define("ENIGMA_ROTOR_1",     0);

/**
 * ID Rotorposition 2
 */
define("ENIGMA_ROTOR_2",     1);

/**
 * ID Rotorposition 3
 */
define("ENIGMA_ROTOR_3",     2);

/**
 * ID Rotorposition 4
 * only available in model Kriegsmarine M4, also call 'Greek rotor'
 * this rotor never turns
 */
define("ENIGMA_ROTOR_GREEK", 3);


/**
 * ID Rotor I
 */
define("ENIGMA_ROTOR_I",     0);

/**
 * ID Rotor II
 */
define("ENIGMA_ROTOR_II",    1);

/**
 * ID Rotor III
 */
define("ENIGMA_ROTOR_III",   2);

/**
 * ID Rotor IV
 */
define("ENIGMA_ROTOR_IV",    3);

/**
 * ID Rotor V
 */
define("ENIGMA_ROTOR_V",     4);

/**
 * ID Rotor VI
 * only available in model Kriegsmarine M3 and M4
 */
define("ENIGMA_ROTOR_VI",    5);

/**
 * ID Rotor VII
 * only available in model Kriegsmarine M3 and M4
 */
define("ENIGMA_ROTOR_VII",   6);

/**
 * ID Rotor VII
 * only available in model Kriegsmarine M3 and M4
 */
define("ENIGMA_ROTOR_VIII",   7);

/**
 * ID Rotor BETA
 * only available in model Kriegsmarine M4 as 'Greek rotor'
 */
define("ENIGMA_ROTOR_BETA",  8);

/**
 * ID Rotor GAMMA
 * only available in model Kriegsmarine M4 as 'Greek rotor'
 */
define("ENIGMA_ROTOR_GAMMA", 9);


/**
 * ID Reflector B
 */
define("ENIGMA_REFLECTOR_B",     0);

/**
 * ID Reflector C
 */
define("ENIGMA_REFLECTOR_C",     1);

/**
 * ID Reflector B Thin
 * only available in model Kriegsmarine M4
 */
define("ENIGMA_REFLECTOR_BTHIN", 2);

/**
 * ID Reflector C Tthin
 * only available in model Kriegsmarine M4
 */
define("ENIGMA_REFLECTOR_CTHIN", 3);


define("ENIGMA_KEY_A", 0);
define("ENIGMA_KEY_B", 1);
define("ENIGMA_KEY_C", 2);
define("ENIGMA_KEY_D", 3);
define("ENIGMA_KEY_E", 4);
define("ENIGMA_KEY_F", 5);
define("ENIGMA_KEY_G", 6);
define("ENIGMA_KEY_H", 7);
define("ENIGMA_KEY_I", 8);
define("ENIGMA_KEY_J", 9);
define("ENIGMA_KEY_K", 10);
define("ENIGMA_KEY_L", 11);
define("ENIGMA_KEY_M", 12);
define("ENIGMA_KEY_N", 13);
define("ENIGMA_KEY_O", 14);
define("ENIGMA_KEY_P", 15);
define("ENIGMA_KEY_Q", 16);
define("ENIGMA_KEY_R", 17);
define("ENIGMA_KEY_S", 18);
define("ENIGMA_KEY_T", 19);
define("ENIGMA_KEY_U", 20);
define("ENIGMA_KEY_V", 21);
define("ENIGMA_KEY_W", 22);
define("ENIGMA_KEY_X", 23);
define("ENIGMA_KEY_Y", 24);
define("ENIGMA_KEY_Z", 25);

/**
 * encoding table
 * eg.: ENIGMA_KEY_A=>"A", ENIGMA_KEY_B=>"B", ...
 * @global array $ENIGMA_ALPHABET
 */
$ENIGMA_ALPHABET = array(
	ENIGMA_KEY_A=>"A", 
	ENIGMA_KEY_B=>"B", 
	ENIGMA_KEY_C=>"C", 
	ENIGMA_KEY_D=>"D", 
	ENIGMA_KEY_E=>"E",
	ENIGMA_KEY_F=>"F", 
	ENIGMA_KEY_G=>"G", 
	ENIGMA_KEY_H=>"H", 
	ENIGMA_KEY_I=>"I", 
	ENIGMA_KEY_J=>"J",
	ENIGMA_KEY_K=>"K", 
	ENIGMA_KEY_L=>"L", 
	ENIGMA_KEY_M=>"M", 
	ENIGMA_KEY_N=>"N", 
	ENIGMA_KEY_O=>"O",
	ENIGMA_KEY_P=>"P", 
	ENIGMA_KEY_Q=>"Q", 
	ENIGMA_KEY_R=>"R", 
	ENIGMA_KEY_S=>"S", 
	ENIGMA_KEY_T=>"T",
	ENIGMA_KEY_U=>"U", 
	ENIGMA_KEY_V=>"V", 
	ENIGMA_KEY_W=>"W", 
	ENIGMA_KEY_X=>"X", 
	ENIGMA_KEY_Y=>"Y",
	ENIGMA_KEY_Z=>"Z"
);

/**
 * Size of the Enigma alphabet
 */
define("ENIGMA_ALPHABET_SIZE", sizeof($ENIGMA_ALPHABET));


/**
 * stores the setup for all available rotors
 * fields are
 * key: ID of the rotor
 * wiring: the setup for the wiring of a rotor
 * used: IDs of models, this rotos can be used in
 * notches: the turnover positions of a rotor
 * @global array $ENIGMA_ROTORS
 */
$ENIGMA_ROTORS = array(
	array("key"=>ENIGMA_ROTOR_I,     "wiring"=>"EKMFLGDQVZNTOWYHXUSPAIBRCJ", "used"=>array(ENIGMA_WM, ENIGMA_KM_M3, ENIGMA_KM_M4), "notches"=>array(ENIGMA_KEY_Q)),
	array("key"=>ENIGMA_ROTOR_II,    "wiring"=>"AJDKSIRUXBLHWTMCQGZNPYFVOE", "used"=>array(ENIGMA_WM, ENIGMA_KM_M3, ENIGMA_KM_M4), "notches"=>array(ENIGMA_KEY_E)),
	array("key"=>ENIGMA_ROTOR_III,   "wiring"=>"BDFHJLCPRTXVZNYEIWGAKMUSQO", "used"=>array(ENIGMA_WM, ENIGMA_KM_M3, ENIGMA_KM_M4), "notches"=>array(ENIGMA_KEY_V)),
	array("key"=>ENIGMA_ROTOR_IV,    "wiring"=>"ESOVPZJAYQUIRHXLNFTGKDCMWB", "used"=>array(ENIGMA_WM, ENIGMA_KM_M3, ENIGMA_KM_M4), "notches"=>array(ENIGMA_KEY_J)),
	array("key"=>ENIGMA_ROTOR_V,     "wiring"=>"VZBRGITYUPSDNHLXAWMJQOFECK", "used"=>array(ENIGMA_WM, ENIGMA_KM_M3, ENIGMA_KM_M4), "notches"=>array(ENIGMA_KEY_Z)),
	array("key"=>ENIGMA_ROTOR_VI,    "wiring"=>"JPGVOUMFYQBENHZRDKASXLICTW", "used"=>array(ENIGMA_KM_M3, ENIGMA_KM_M4), "notches"=>array(ENIGMA_KEY_M, ENIGMA_KEY_Z)),
	array("key"=>ENIGMA_ROTOR_VII,   "wiring"=>"NZJHGRCXMYSWBOUFAIVLPEKQDT", "used"=>array(ENIGMA_KM_M3, ENIGMA_KM_M4), "notches"=>array(ENIGMA_KEY_M, ENIGMA_KEY_Z)),
	array("key"=>ENIGMA_ROTOR_VIII,  "wiring"=>"FKQHTLXOCBJSPDZRAMEWNIUYGV", "used"=>array(ENIGMA_KM_M3, ENIGMA_KM_M4), "notches"=>array(ENIGMA_KEY_M, ENIGMA_KEY_Z)),
	array("key"=>ENIGMA_ROTOR_BETA,  "wiring"=>"LEYJVCNIXWPBQMDRTAKZGFUHOS", "used"=>array(ENIGMA_KM_M4), "notches"=>array()),
	array("key"=>ENIGMA_ROTOR_GAMMA, "wiring"=>"FSOKANUERHMBTIYCWLQPZXVGJD", "used"=>array(ENIGMA_KM_M4), "notches"=>array())
);


/**
 * stores the setup for all available reflectors
 * fields are
 * key: ID of the reflector
 * wiring: the setup for the wiring of a reflector
 * used: IDs of models, this rotos can be used in
 * @global array $ENIGMA_REFLECTORS
 */
$ENIGMA_REFLECTORS = array(
	array("key"=>ENIGMA_REFLECTOR_B,     "wiring"=>"YRUHQSLDPXNGOKMIEBFZCWVJAT", "used"=>array(ENIGMA_WM, ENIGMA_KM_M3)),
	array("key"=>ENIGMA_REFLECTOR_C,     "wiring"=>"FVPJIAOYEDRZXWGCTKUQSBNMHL", "used"=>array(ENIGMA_WM, ENIGMA_KM_M3)),
	array("key"=>ENIGMA_REFLECTOR_BTHIN, "wiring"=>"ENKQAUYWJICOPBLMDXZVFTHRGS", "used"=>array(ENIGMA_KM_M4)),
	array("key"=>ENIGMA_REFLECTOR_CTHIN, "wiring"=>"RDOBJNTKVEHMLFCWZAXGYIPSUQ", "used"=>array(ENIGMA_KM_M4))
);


/** 
 * this function converts the Enigma cipher machine history to readable HTML output
 * @return HTML with Enigma history 
 * @uses $enigma_history
 */
function enigma_history() {
	return '<html><meta charset="utf-8">' . $enigma_history . '</html>';
}

/**
 * converts a character into its pendant in the Enigma alphabet
 * @param string character to convert
 * @return integer represention of a character in the Enigma alphabet
 * @uses $ENIGMA_ALPHABET
 */
function enigma_l2p($l) {
	global $ENIGMA_ALPHABET;
	return array_search(strtoupper($l), $ENIGMA_ALPHABET);
}


/**
 * converts an element of the Enigma alphabet to 'our' alphabet
 * @param integer element to be converted
 * @return string resulting character
 * @uses $ENIGMA_ALPHABET
 */
function enigma_p2l($p) {
	global $ENIGMA_ALPHABET;
	return $ENIGMA_ALPHABET[$p];
}

/**
 * This class represents the wiring of rotors, reflectors and the plugboard.
 *
 * Each wiring provides a monoalphabetical substitution e.g.:
 *
 * <pre>
 * ABCDEFGHIJKLMNOPQRSTUVWXYZ
 * ||||||||||||||||||||||||||
 * EKMFLGDQVZNTOWYHXUSPAIBRCJ
 * </pre>
 *
 */
/**
 * @author Rafal Masiarek <rafalmasiarek@hotmail.com>
 * @version 1.0
 * @package Enigma
 * @subpackage Core
 */
class EnigmaWiring {

	/**
    * The connections of the pins.
    *
    * [0]=4 means pin 0 on side A leads to pin 4 on side B, [1]=10 means pin 1 on side A leads to pin 10 on side B, ...<br>
    * Size is ENIGMA_ALPHABET_SIZE.
    * @var array integer
    */
	private $wiring = null;

    /**
     * Constructor connects the pins according to the list in $wiring.
     *
     * example string EKMFLGDQVZNTOWYHXUSPAIBRCJ leads to [0]=4, [1]=10, [2]=12, ...
     * @param string setup for the internal wiring
     * @uses enigma_l2p
     */
	public function __construct($wiring) {
		$this->wiring = array_map(enigma_l2p, str_split($wiring));
	}

    /**
     * Manually connect 2 pins.
     * @param integer pin 1 to connect
     * @param integer pin 2 to connect
     * @return void
     */
	public function connect($pin1, $pin2) {
		$this->wiring[$pin1] = $pin2;
	}

    /**
     * Get the connected pin.
     * @param integer start of the connection
     * @return integer the connected pin
     */
	public function connectsTo($pin) {
		return $this->wiring[$pin];
	}

    /**
     * Pass the given letter form side A to side B by following the connection of the pins.
     * @param integer pin that got activated
     * @return integer pin that gets activated
     */
	public function processLetter1stPass($pin) {
		return $this->wiring[$pin];
	}

    /**
     * Pass the given letter form side B to side A by following the connection of the pins.
     * @param integer pin that got activated
     * @return integer pin that gets activated
     */
	public function processLetter2ndPass($pin) {
		return array_search($pin, $this->wiring);
	}

}

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
 * @version 1.0
 * @package Enigma
 * @subpackage Core
 */
class EnigmaPlugboard {

	/**
     * The wiring of the plugboard.
     *
     * Pins always have to be connected in pairs, that means, if 'D' on side A
     * connects to 'H' on side B, 'H' on side A has to connect to 'D' on side B
     * @var EnigmaWiring
     */
	private $wiring = null;

    /**
     * Constructor creates a new Wiring and connects the pins in pairs.
     * @uses enigma_p2l
     * @uses EnigmaWiring
     * @uses ENIGMA_ALPHABET_SIZE
     */
	public function __construct() {
		for($idx=0; $idx<ENIGMA_ALPHABET_SIZE;$idx++) $wiring.= enigma_p2l($idx);
		$this->wiring = new EnigmaWiring($wiring);
	}

    /**
     * Send a letter through the wiring.
     * Because pins are connected in pairs, there is no difference if
     * processLetter1stPass() or processLetter2ndPass() is used.
     * @param integer letter to process
     * @return integer resulting letter
     */
	public function processLetter($letter) {
		return $this->wiring->processLetter1stPass($letter);
	}

    /**
     * Connect 2 letters.
     * @param integer letter 1 to connect
     * @param integer letter 2 to connect
     * @return void
     */
	public function plugLetters($letter1, $letter2) {
		$this->wiring->connect($letter1, $letter2);
		$this->wiring->connect($letter2, $letter1);
	}

    /**
     * Disconnect 2 letters.
     * Because letters are connected in pairs, we only need to know one of them.
     * @param integer 1 of the 2 letters to disconnect
     * @return void
     */
	public function unplugLetters($letter) {
		$temp = $this->wiring->connectsTo($letter);
		$this->wiring->connect($letter, $letter);
		$this->wiring->connect($temp, $temp);
	}

}

/**
 * This class represents a Reflector of an Enigma.
 *
 * After its way through plugboard and all rotors, the reflector leads the signal all the way back.
 * Because no letter must connect to itself, its provided that the signal takes a different route.
 * This enables the Enigma to work both for encryption and decryption without any further setup
 */
/**
 * @author Rafal Masiarek <rafalmasiarek@hotmail.com>
 * @version 1.0
 * @package Enigma
 * @subpackage Core
 */
class EnigmaReflector {

	/**
     * The wiring of the reflector.
     * Pins are connected in pairs, that means, if 'D' on side A connects to 'H'
     * on side B, 'H' on side A connects to 'D' on side B. No letter must connect to itself!
     * @var EnigmaWiring
     */
	private $wiring = null;

    /**
     * Constructor creates a new Wiring with the setup from $wiring.
     * @uses EnigmaWiring
     * @param string $wiring setup for the wiring
     */
	public function __construct($wiring) {
		$this->wiring = new EnigmaWiring($wiring);
	}

    /**
     * Send a letter through the wiring.
     * Because pins are connected in pairs, there is no difference if
     * processLetter1stPass() or processLetter2ndPass() is used.
     * @param integer letter to process
     * @return integer resulting letter
     */
	public function processLetter($letter) {
		return $this->wiring->processLetter1stPass($letter);
	}

}

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
class EnigmaRotor {

	/**
     * The wiring of a rotor.
     * @var EnigmaWiring
     */
	private $wiring = null;

	/**
     * The positions of the notches of a rotor.
     * @var array integer positions of the notches
     */
	private $notches = null;

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
	public function __construct($wiring, $notches) {
		$this->wiring = new EnigmaWiring($wiring);
		$this->notches = $notches;
	}

    /**
     * Advance the rotor by 1 step.
     * When postion reaches ENIGMA_ALPHABET_SIZE, it is reset to 0.
     * @uses ENIGMA_ALPHABET_SIZE
     * @return void
     */
	public function advance() {
		$this->position = ($this->position + 1) % ENIGMA_ALPHABET_SIZE;
	}

    /**
     * A notch is open.
     * Returns true if the rotor is in a turnover position for the next rotor
     * @return boolean turnover position reached
     */
	public function isNotchOpen() {
		return in_array($this->position, $this->notches);
	}

    /**
     * Send an letter from side A through the wiring to side B.
     * To get the right pin of the wiring, we have to take the current position and the offset given by the ringstellung into account.<br>
     * + ENIGMA_ALPHABET_SIZE and % ENIGMA_ALPHABET_SIZE keep the value positive and in bounds
     * @uses ENIGMA_ALPHABET_SIZE
     * @param integer letter to process
     * @return integer resulting letter
     */
	public function processLetter1stPass($letter) {
		$letter = ($letter - $this->ringstellung + $this->position + ENIGMA_ALPHABET_SIZE) % ENIGMA_ALPHABET_SIZE;
		$letter = $this->wiring->processLetter1stPass($letter);
		$letter = ($letter + $this->ringstellung - $this->position + ENIGMA_ALPHABET_SIZE) % ENIGMA_ALPHABET_SIZE;
		return $letter;
	}

    /**
     * Send an letter from side B through the wiring to side A.
     * To get the right pin of the wiring, we have to take the current position and the offset given by the ringstellung into account.<br>
     * + ENIGMA_ALPHABET_SIZE and % ENIGMA_ALPHABET_SIZE keep the value positive and in bounds
     * @uses ENIGMA_ALPHABET_SIZE
     * @param integer letter to process
     * @return integer resulting letter
     */
	public function processLetter2ndPass($letter) {
		$letter = ($letter - $this->ringstellung + $this->position + ENIGMA_ALPHABET_SIZE) % ENIGMA_ALPHABET_SIZE;
		$letter = $this->wiring->processLetter2ndPass($letter);
		$letter = ($letter + $this->ringstellung - $this->position + ENIGMA_ALPHABET_SIZE) % ENIGMA_ALPHABET_SIZE;
		return $letter;
	}

    /**
     * Set the rotor to a given position.
     * @param integer position to go to
     * @return void
     */
	public function setPosition($letter) {
		$this->position = $letter;
	}

    /**
     * Retrieve current position of the rotor.
     * @return integer current position
     */
	public function getPosition() {
		return $this->position;
	}

    /**
     * Sets the ringstellung to a given position.
     * @param integer position to go to
     * @return void
     */
	public function setRingstellung($letter) {
		$this->ringstellung = $letter;
	}

}

/**
 * This class represents an Enigma.
 *
 * 3 different models can be emulated with this class, each one has its own set of rotors and reflectors to be used with.
 * Depending on the model, 3 or 4 rotors are mounted, only the first three of them can be triggered by the advance mechanism.
 * A letter is encoded by sending its corresponding signal through the plugboard, rotor 1..3(4), the reflector,
 * rotor 3(4)..1 and the plugboard again.
 * After each encoded letter, the advance mechanism changes the internal setup by rotating the rotors.
 */
/**
 * @author Rafal Masiarek <rafalmasiarek@hotmail.com>
 * @version 1.0
 * @package Enigma
 * @subpackage Core
 */
class Enigma {

	/**
	 * The plugboard that connects input and output to the 1st rotor.
     * @var EnigmaPlugboard
     */
	private $plugboard = null;

	/**
	 * The rotors used by the Enigma.
     * @var array EnigmaRotor
     */
	private $rotors = null;

	/**
	 * The reflector used by the Enigma.
     * @var array EnigmaReflector
     */
	private $reflector = null;

	/**
	 * The rotors available for this model of the Enigma.
     * @var array EnigmaRotor
     */
	private $availablerotors = null;

	/**
	 * The reflectors available for this model of the Enigma.
     * @var array EnigmaReflector
     */
	private $availablereflectors = null;

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
	public function __construct($model, $rotors, $reflector) {
		global $ENIGMA_ROTORS, $ENIGMA_REFLECTORS;

		$this->rotors = array();
		$this->availablerotors = array();
		$this->availablereflectors = array();

		$this->plugboard = new EnigmaPlugboard();

		foreach($ENIGMA_ROTORS as $r) if (in_array($model, $r["used"])) $this->availablerotors[$r["key"]] = new EnigmaRotor($r["wiring"], $r["notches"]);
		foreach($ENIGMA_REFLECTORS as $r) if (in_array($model, $r["used"])) $this->availablereflectors[$r["key"]] = new EnigmaReflector($r["wiring"]);

		foreach($rotors as $key=>$value) $this->mountRotor($key, $value);
		$this->mountReflector($reflector);
	}

    /**
     * Advance the rotors.
     * Rotor 1 advances every time, rotor 2 when a notch on rotor 1 is open and when rotor 3 advances, rotor 3 when a notch on rotor 2 is open
     * @return void
     */
	private function advance() {
		if ($this->rotors[1]->isNotchOpen()) {
			$this->rotors[2]->advance();
			$this->rotors[1]->advance();
		}
		if ($this->rotors[0]->isNotchOpen()) $this->rotors[1]->advance();
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
	public function encodeLetter($letter) {
		$this->advance();
		$letter = enigma_l2p($letter);
		$letter = $this->plugboard->processLetter($letter);
		for ($idx=0; $idx<sizeof($this->rotors); $idx++) $letter = $this->rotors[$idx]->processLetter1stPass($letter);
		$letter = $this->reflector->processLetter($letter);
		for ($idx=(sizeof($this->rotors)-1); $idx>-1; $idx--) $letter = $this->rotors[$idx]->processLetter2ndPass($letter);
		$letter = $this->plugboard->processLetter($letter);
		$letter = enigma_p2l($letter);
		return $letter;
	}

    /**
     * Mount a rotor into the enigma.
     * A rotor may only be used in one position at a time, so if an rotor is already in use nothing is changed.
     * The previously used rotor will be replaced.
     * @param integer ID of the position to set the rotor
     * @param integer ID of the rotor to use
     * @return void
     */
	public function mountRotor($position, $rotor) {
		if($this->availablerotors[$rotor]->inUse) return;
		if($this->rotors[$position]) $this->rotors[$position]->inUse = false;
		$this->rotors[$position] = $this->availablerotors[$rotor];
		$this->rotors[$position]->inUse = true;
	}

    /**
     * Mount a reflector into the enigma.
     * The previously used reflector will be replaced.
     * @param integer ID of the reflector to use
     * @return void
     */
	public function mountReflector($reflector) {
		$this->reflector = $this->availablereflectors[$reflector];
	}

    /**
     * Turn a rotor to a new position.
     * @param integer ID of the rotor to turn
     * @param string letter to turn to
     * @return void
     * @uses enigma_l2p
     */
	public function setPosition($position, $letter) {
		$this->rotors[$position]->setPosition(enigma_l2p($letter));
	}

    /**
     * Get the current position of a rotor.
     * @param integer ID of the rotor
     * @return string current position
     * @uses enigma_p2l
     */
	public function getPosition($position) {
		return enigma_p2l($this->rotors[$position]->getPosition());
	}

    /**
     * Turn the ringstellung of a rotor to a new position.
     * @param integer ID of the rotor
     * @param string letter to turn to
     * @return void
     * @uses enigma_l2p
     */
	public function setRingstellung($position, $letter) {
		$this->rotors[$position]->setRingstellung(enigma_l2p($letter));
	}

    /**
     * Connect 2 letters on the plugboard.
     * The letter are transformed to integer first
     * @param string letter 1 to connect
     * @param string letter 2 to connect
     * @return void
     * @uses enigma_l2p
     */
	public function plugLetters($letter1, $letter2) {
		$this->plugboard->plugLetters(enigma_l2p($letter1), enigma_l2p($letter2));
	}

    /**
     * Disconnects 2 letters on the plugboard.
     * Because letters are connected in pairs, we only need to know one of them.
     * @param string 1 of the 2 letters to disconnect
     * @return void
     * @uses enigma_l2p
     */
	public function unplugLetters($letter) {
		$this->plugboard->unplugLetters(enigma_l2p($letter));
	}
}

?>
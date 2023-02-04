<?php

declare(strict_types=1);

use League\CommonMark\CommonMarkConverter;

require_once 'vendor/autoload.php';

/**
 * this function converts the Enigma cipher machine history to readable HTML output
 * @return HTML with Enigma history
 * @uses $enigma_history
 */
function enigma_history()
{
    return (new CommonMarkConverter)->convert(file_get_contents(__DIR__.\DIRECTORY_SEPARATOR.'README.md'));
}

echo '<html><meta charset="utf-8">';
echo enigma_history();

require_once __DIR__.\DIRECTORY_SEPARATOR.'ExampleSimple.php';

echo '<pre>';
print_r($enigma);
echo '</pre>';

echo '</html>';

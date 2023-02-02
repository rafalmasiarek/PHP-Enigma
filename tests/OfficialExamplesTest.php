<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class OfficialExamplesTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testExampleSimple(): void
    {
        $r = true;

        try {
            ob_start();
            include __DIR__.'/../ExampleSimple.php';
            ob_end_clean();
        } catch (\Exception $e) {
            $r = false;
            throw $e;
        }

        self::assertTrue($r);
    }

    /**
     * @runInSeparateProcess
     */
    public function testExampleHtml(): void
    {
        $r = true;

        try {
            ob_start();
            include __DIR__.'/../ExampleHtml.php';
            ob_end_clean();
        } catch (\Exception $e) {
            $r = false;
            throw $e;
        }

        self::assertTrue($r);
    }
}

<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Smeed\Smeedish;

class SmeedishTest extends TestCase
{
    private function provideSingleWordDecryptions() : array
    {
        return [
            'remove caps hello' => ['Hhello', 'hello'],
            'remove special chars hello' => ['hello!', 'hello'],
            'remove digits hello' => ['6hell9o', 'hello'],
            'remove unnecessary spaces hello' => ['   hello!', 'hello'],
            'remove unnecessary spaces hello 2' => ['hello!  ', 'hello'],
            'remove unnecessary spaces hello 3' => ['     hello!  ', 'hello'],
            'remove caps world' => ['Wworld', 'world'],
            'remove special chars world' => ['world!', 'world'],
            'remove digits world' => ['6wor9ld', 'world'],
            'remove unnecessary spaces world' => ['   world!', 'world'],
            'remove unnecessary spaces 2 world' => ['world!  ', 'world'],
            'remove unnecessary spaces 3 world' => ['     world!  ', 'world'],
            'big difficult encrypted word' => ['WZXHh3eE7*$%^9(lOL09l9@#!%^9)(0o! ', 'hello'],
            'smeedish encrypted GitHub org name' => ['smeEed', 'smeed'],
        ];
    }

    /**
     * @dataProvider provideSingleWordDecryptions
     */
    public function testDecryptsSingleWords(string $cipher, string $decoded) : void
    {
        $this->assertSame($decoded, Smeedish::decrypt($cipher));
    }
}
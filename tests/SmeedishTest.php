<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Smeed\Smeedish;

class SmeedishTest extends TestCase
{
    private function provideSingleWordDecryptions() : array
    {
        return [
            'remove caps' => ['Hhello', 'hello'],
            'remove special chars' => ['hello!', 'hello'],
            'remove unnecessary spaces' => ['   hello!', 'hello'],
            'remove unnecessary spaces 2' => ['hello!  ', 'hello'],
            'remove unnecessary spaces 3' => ['     hello!  ', 'hello'],
        ];
    }

    /**
     * @dataProvider provideSingleWordDecryptions
     */
    public function testDecryptsSingleWords(string $cypherText, string $decoded) : void
    {
        $this->assertSame($decoded, Smeedish::decrypt($cypherText));
    }
}
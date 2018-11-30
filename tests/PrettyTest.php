<?php

namespace Ankitjain28may\Prettysize\Test;

use PHPUnit\Framework\TestCase;
use Ankitjain28may\Prettysize\Pretty;

class PrettyTest extends TestCase
{

    public function prettySizeDataProvider()
    {
        return [
            [12, false, false, 1, '12.0 B'],
            [12, true, false, 1, '12.0B'],
            [123456, false, false, 1, '120.6 kB'],
            [123456, true, true, 1, '120.6k'],
            [123456, false, true, 1, '120.6 k'],
            [123456789, false, false, 1, '117.7 MB'],
            [1024 * 1024, false, false, 1, '1.0 MB'],
            [12345678901, false, false, 1, '11.5 GB'],
            [1234567890123, false, false, 1, '1.1 TB'],
            [1234567890123456, false, false, 1, '1.1 PB'],
            [1234567890123456789, false, false, 1, '1.1 EB'],
            [1234567890123456789, [
                'nospace' => true
            ], false, 1, '1.1EB'],
            [1234567890123456789, [
                'one' => true
            ], false, 1, '1.1 E'],
            [1234567890123456789, [
                'places' => 5
            ], false, 1, '1.07082 EB'],
            [1234567890123456789, [
                'nospace' => true,
                'one' => true,
                'places' => 5,
            ], false, 1, '1.07082E'],
        ];
    }

    /**
     * @dataProvider prettySizeDataProvider
     */
    public function testPrettySize($size, $nospace, $one, $places, $actual)
    {
        $this->assertSame(Pretty::pretty($size, $nospace, $one, $places), $actual);
    }
}

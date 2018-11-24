<?php

namespace Ankitjain28may\Prettysize\Test;

use PHPUnit\Framework\TestCase;
use Ankitjain28may\Prettysize\Pretty;

class PrettyTest extends TestCase
{

  public function testPrettySize()
  {
    $this->assertEquals(Pretty::pretty(12), '12.00 Bytes');
    $this->assertEquals(Pretty::pretty(123456), '120.56 kB');
    $this->assertEquals(Pretty::pretty(123456789), '117.74 MB');
    $this->assertEquals(Pretty::pretty(1024 * 1024), '1.00 MB');
    $this->assertEquals(Pretty::pretty(12345678901), '11.50 GB');
    $this->assertEquals(Pretty::pretty(1234567890123), '1.12 TB');
    $this->assertEquals(Pretty::pretty(1234567890123456), '1.10 PB');
    $this->assertEquals(Pretty::pretty(1234567890123456789), '1.07 EB');
  }
}

<?php

namespace Ankitjain28may\Prettysize\Test;

use PHPUnit\Framework\TestCase;
use Ankitjain28may\Prettysize\Pretty;

class PrettyTest extends TestCase
{

  public function testPrettySize()
  {
    $this->assertEquals(Pretty::pretty(12), '12.0 B');
    $this->assertEquals(Pretty::pretty(12, true), '12.0B');
    $this->assertEquals(Pretty::pretty(123456), '120.6 kB');
    $this->assertEquals(Pretty::pretty(123456, true, true), '120.6k');
    $this->assertEquals(Pretty::pretty(123456, false, true), '120.6 k');
    $this->assertEquals(Pretty::pretty(123456789), '117.7 MB');
    $this->assertEquals(Pretty::pretty(1024 * 1024), '1.0 MB');
    $this->assertEquals(Pretty::pretty(12345678901), '11.5 GB');
    $this->assertEquals(Pretty::pretty(1234567890123), '1.1 TB');
    $this->assertEquals(Pretty::pretty(1234567890123456), '1.1 PB');
    $this->assertEquals(Pretty::pretty(1234567890123456789), '1.1 EB');
    $this->assertEquals(
      Pretty::pretty(1234567890123456789, [
        'nospace' => true,
      ]), '1.1EB');
    $this->assertEquals(
      Pretty::pretty(1234567890123456789, [
        'one' => true,
      ]), '1.1 E');
    $this->assertEquals(
      Pretty::pretty(1234567890123456789, [
        'places' => 5,
      ]), '1.07082 EB');
    $this->assertEquals(
      Pretty::pretty(1234567890123456789, [
        'nospace' => true,
        'one' => true,
        'places' => 5,
      ]), '1.07082E');
  }
}

<?php

/**
 * This file is part of PrettySize.
 *
 * (c) Ankit Jain <ankitjain28may77@gmail.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 * PHP version 7.1
 *
 * @category PHP
 * @package  Ankitjain28may\Prettysize
 * @author   Ankit Jain <ankitjain28may77@gmail.com>
 * @license  The MIT License (MIT)
 * @link     https://github.com/ankitjain28may/prettysize
 */

namespace Ankitjain28may\Prettysize;

/**
 * Convert bytes to other sizes for prettier logging.
 */
class Pretty
{

    private static $_sizes = [
      'B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB'
    ];

    public static function pretty($size, $nospace = false, $one = false, $places = 1) : string
    {
        if (is_array($nospace)) {
            $one = (isset($nospace['one'])) ? $nospace['one'] : false;
            $places = (isset($nospace['places'])) ? $nospace['places'] : 1;
            $nospace = (isset($nospace['nospace'])) ? $nospace['nospace'] : false;
        }
        $finalSize = '';
        foreach (Self::$_sizes as $id => $value) {
            $s = pow(1024, $id);
            $fixed = '';
            if ($size >= $s) {
                $fixed = number_format($size/$s, $places);
                if (!$nospace) {
                    $fixed = $fixed . ' ';
                }
                if ($one) {
                    $value = substr($value, 0, 1);
                }
                $fixed = $fixed . $value;
                $finalSize =  $fixed;
            }
        }
        return $finalSize;
    }

}

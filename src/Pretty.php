<?php

/**
 * This file is part of PrettySize.
 *
 * (c) Ankit Jain <ankitjain28may77@gmail.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 * PHP version 5.5
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
      'Bytes', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB'
    ];

    public static function pretty($size) : string
    {

        $finalSize = '';
        foreach (Self::$_sizes as $id => $value) {
            $s = pow(1024, $id);
            $fixed = '';
            if ($size >= $s) {
                $fixed = number_format($size/$s, 2);
                $fixed = $fixed . ' ' . $value;
                $finalSize =  $fixed;
            }
        }
        return $finalSize;
    }

}

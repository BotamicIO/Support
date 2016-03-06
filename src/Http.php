<?php

/*
 * This file is part of Support.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('guzzle')) {
    /**
     * @param array $config
     *
     * @return \GuzzleHttp\Client
     */
    function guzzle(array $config = [])
    {
        return new GuzzleHttp\Client($config);
    }
}

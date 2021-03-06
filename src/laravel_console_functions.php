<?php

declare(strict_types=1);

/*
 * This file is part of Helpers.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('artisan')) {
    function artisan($command = null, array $parameters = [])
    {
        $artisan = app('Illuminate\Contracts\Console\Kernel');

        if (!empty($command)) {
            return $artisan->call($command, $parameters);
        }

        return $artisan;
    }
}

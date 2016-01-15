<?php

/**
 *
 *
 * @author Sam Schmidt <samuel@dersam.net>
 * @since 2016-01-14
 */

function let($params, ...$functions) {
    foreach ($functions as $f) {
        $f($params);
    }
}

function printer(&$params) {
    print_r($params);
}

function fiddle(&$params)
{
    $params[0] = 'nope';
}

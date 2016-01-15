<?php
/**
 *
 *
 * @author Sam Schmidt <samuel@dersam.net>
 * @since 2016-01-14
 */

function app($state) {
    $route = $state['routes'][$state['path']];
    $route($state);
};

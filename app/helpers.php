<?php

if (!function_exists('pages_title')) {
    function page_title(?string $title = null): string
    {
        return $title
            ? $title . ' | ' . config('app.name')
            : config('app.name');
    }
}

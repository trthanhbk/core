<?php

function sidebar_root_ul() {
    $root_ul_class = [
        THEME_DEFAULT => "nav nav-sidebar",
        THEME_ADMINLTE => "sidebar-menu",
    ];
    return $root_ul_class[env("THEME", THEME_DEFAULT)];
}

function sidebar_li_header() {
    $li_header_class = [
        THEME_DEFAULT => "sidebar-header",
        THEME_ADMINLTE => "header",
    ];
    return $li_header_class[env("THEME", THEME_DEFAULT)];
}
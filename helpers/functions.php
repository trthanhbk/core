<?php

require_once "themes/sidebar.php";

function check_field_has_error($field, $errors) {
    return isset($errors) && $errors->has($field);
}

function get_field_error_class($field, $errors) {
    return check_field_has_error($field, $errors) ? 'has-error' : '';
}

function get_field_error_detail($field, $errors) {
    $html_start = '<div><p class="text-danger">';
    $html_end = '</p></div>';
    return check_field_has_error($field, $errors) ? $html_start . $errors->first($field) . $html_end : '';
}
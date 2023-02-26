<?php

function validate(array $fields)
{
    foreach ($fields as $key => $type) {
        switch($type) {
            case 's':
                $validate[$field] = filter_var($_POST[$key], FILTER_DEFAULT);
                break;
            case 'i':
                $validate[$field] = filter_var($_POST[$key], FILTER_SANITIZE_NUMBER_INT);
                break;
            case 'e':
                $validate[$field] = filter_var($_POST[$key], FILTER_SANITIZE_EMAIL);
                break;
        }
    }

    return(object) $validate;
}

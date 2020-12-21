<?php

// Предпочитаю императивный  вариант решения, здесь всё понятно. Можно изящней, в несколько строк, но оно это надо?

    $email = "my_email@mail.ru";
    
    function validMail($email) {
        if (preg_match("/^[\w]{8,}@[a-z]{1,}\.[a-z]{2,}$/i", $email)) {
            
            $divider = 0;
            
            for ($i = 0; $i < strlen($email); $i++) {
                if ($email[$i] == "_") {
                    $divider++;
                } elseif ($divider >= 2) {
                    return 0;
                }
            }
            
            if (in_array(explode('.', $email)[1], array('ru', 'com', 'net', 'by'))) {
                return 1;
            }
            
            
        } else {
            return 0;
        }
    }
    
    echo validMail($email);
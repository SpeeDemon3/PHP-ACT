<?php

    function validateInputs($name, $lastName) {
        if (!empty($name) && !empty($lastName)) {
            if (isset($name) && isset($lastName)) {
                echo "Formulario validado.";
                return true;
            }
        } else {
            echo "Formulario erroneo";
            return false;
        }
    }

?>
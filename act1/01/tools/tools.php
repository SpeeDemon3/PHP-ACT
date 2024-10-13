<?php
    function checkAge($age) {
        if($age > 15 && $age < 66) {
            echo "<h4>You are $age years old, you are old enough to work.</h4>";
        } else {
            echo "<h4 style='color: red;'>You are not old enough to work.</h4>";
        }
    }
?>
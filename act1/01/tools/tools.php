<?php
    function checkAge($age) {
        if($age > 15 && $age < 66) {
            $retirementAge = 66 - $age;

            echo "<h4>You are $age years old, you are old enough to work.</h4>";
            echo "<h4 style='color: green;'>You are $retirementAge years away from retiring.</h4>";

        } else {
            echo "<h4 style='color: red;'>You are not old enough to work.</h4>";
        }
    }
?>
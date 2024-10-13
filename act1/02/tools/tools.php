<?php
    function desksNeeded ($class, $students, $deskPerStudents) {
        $result = ($class * $students) / $deskPerStudents;

        echo "<h3>$result desks are necessary.</h3>";
    }
?>
<?php

    function isNotFormEmpty($arrayForm = null) {


        if (!empty($arrayForm) && isset($arrayForm)) {
            return true;
        } else {
            return false;
        }
    }

?>
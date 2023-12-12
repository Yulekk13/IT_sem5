<?php

    function delate_old() {
        global $con;
        
        $ndate = date("y-m-d");
        $ntime = date("G:i:s", strtotime('-1 hour'));
        mysqli_query($con, "DELETE FROM meetings WHERE (Date <= '$ndate' AND Time < '$ntime');");
        
    }

?>

<?php

    function delate_old() {
        global $con;
        //$query = "select id, time, date form meetings";
        //echo date("G h:i:s", strtotime('-1 hour'))
        
        $ndate = date("y-m-d");
        $ntime = date("G h:i:s"); 
        mysqli_query($con, "DELETE FROM meetings WHERE (Date < '$ndate') AND (Time < '$ntime');");
    }

?>

<!-- if date == adate
    if time == atime - 1h
        delate
if date < adate
    delate -->

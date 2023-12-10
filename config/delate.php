<?php

    function delate_old() {
        global $con;
        //$query = "select id, time, date form meetings";
        
        $ndate = date("y-m-d")
        $ntime = time("h-m-s", strtotime('-1 hour')); 
        mysqli_query($con, "DELETE FROM meetings WHERE date == $ndate AND time < '$ntime' ");
    }

?>

if date == adate
    if time == atime - 1h
        delate
if date < adate
    delate


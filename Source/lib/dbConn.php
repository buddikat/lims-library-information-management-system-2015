<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    $host = "127.0.0.1";
    $userName = "root";
    $password = "";
    $db = "lims_2015";
    date_default_timezone_set("Asia/Colombo");
    //ini_set('default_charset', 'UTF-8');
    
    $dbConn = mysqli_connect($host, $userName, $password, $db);
    mysqli_set_charset($dbConn,'uft8');
    
/*    function closeDbConn()
    {
        mysqli_close($dbConn);
    }
 */
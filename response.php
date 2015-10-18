<?php
 try
    {
        $serverName = "tcp:ealybe55bg.database.windows.net,1433";
        $connectionOptions = array("Database"=>"OpallityFinal2",
            "Uid"=>"opallity", "PWD"=>"Iltemp071993");
        $conn = sqlsrv_connect($serverName, $connectionOptions);
        if($conn == false)
            die(FormatErrors(sqlsrv_errors()));
    }
    catch(Exception $e)
    {
        echo("Error!");
    }
?>
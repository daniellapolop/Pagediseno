<?php
	$servername = "localhost";
    $username = "root";
    $password = "jesus199729";
    $dbname = "jesusdiseno";
    // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
       	// Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "SELECT ID, Latitud, Longitud, Fecha, RPM FROM datosdiseno ORDER BY ID DESC LIMIT 1";
        $resultado1 = $conn->query($sql);
        $fila = mysqli_fetch_row($resultado1);
        $fila4 = $fila[4];
        $rpm = substr($fila4, -6);
        $quit = array (" ");
        $colc = array ("");
        $rpm = hexdec($rpm);
        $rpm = $rpm/4;
        $result1 = $fila[0]."\n".$fila[1]."\n".$fila[2]."\n".$fila[3]."\n".$rpm."\n";  
        echo $result1;
        
        $conn->close();      
?>

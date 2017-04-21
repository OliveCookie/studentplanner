    <?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");
	
    $idCycle = isset($_GET['idCycle']) ? $_GET['idCycle'] : '';
    $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : '';

    if ($idUser){
        $q=mysqli_query($con, "SELECT * FROM cycle where idUser = '$idUser'"); 
    } else {
        $q=mysqli_query($con, "SELECT * FROM cycle"); 
    }


    if ($q)
    {
        while($e=mysqli_fetch_assoc($q))
            $output[]=$e;
    }
	if(!empty($output))
        print(json_encode($output)); 
     
    mysqli_close($con);
    ?>

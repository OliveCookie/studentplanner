    <?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");
	
    $idFraction = isset($_GET['idFraction']) ? $_GET['idFraction'] : '';
    $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : '';

    if ($idUser){
        $q=mysqli_query($con, "SELECT * FROM fraction where idUser = '$idUser'"); 
    } else {
        $q=mysqli_query($con, "SELECT * FROM fraction"); 
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

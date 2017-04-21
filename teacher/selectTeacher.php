    <?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");
	
    $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : '';
    
    if ($idUser)
    {
            $q=mysqli_query($con, "SELECT *  FROM teacher  WHERE idUser='$idUser'") or die (mysqli_error($con)); 
    } else {
        $q=mysqli_query($con, "SELECT * FROM teacher") or die (mysqli_error($con)); 
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

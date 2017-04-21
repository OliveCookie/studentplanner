    <?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");
	
    $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : '';
    $idSemester = isset($_GET['idSemester']) ? $_GET['idSemester'] : '';

    if ($idUser){
        $q=mysqli_query($con, "SELECT * FROM vacation where idUser = '$idUser'"); 
    } else if ($idSemester){
        $q=mysqli_query($con, "SELECT * FROM vacation where idSemester = '$idSemester'"); 
    } else {
        $q=mysqli_query($con, "SELECT * FROM vacation"); 
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

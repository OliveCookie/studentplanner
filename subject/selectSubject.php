    <?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");
	
    $idSubject = isset($_GET['idSubject']) ? $_GET['idSubject'] : '';
    $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : '';

    if ($idSubject){
        $q=mysqli_query($con, "SELECT * FROM subject where idSubject = '$idSubject'"); 
    } else if ($idUser){
        $q=mysqli_query($con, "SELECT * FROM subject where idUser = '$idUser'"); 
    } else {
        $q=mysqli_query($con, "SELECT * FROM subject"); 
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

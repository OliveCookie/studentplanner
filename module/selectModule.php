    <?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");
	
	//c.type, c.university, c.college, c.nrYears
	//		INNER JOIN cycle AS c 
	//	ON c.idCycle = sem.idCycle and sem.idSemester = s.idSemester
	
    $idTeacher = isset($_GET['idTeacher']) ? $_GET['idTeacher'] : '';
    $idModule = isset($_GET['idModule']) ? $_GET['idModule'] : '';
    $idSubject = isset($_GET['idSubject']) ? $_GET['idSubject'] : '';
    $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : '';

    if ($idUser){
        $q=mysqli_query($con, "SELECT * FROM module where idUser = '$idUser'"); 
    } else if ($idTeacher){
        $q=mysqli_query($con, "SELECT * FROM module where idTeacher = '$idTeacher'"); 
    } else if ($idSubject){
        $q=mysqli_query($con, "SELECT * FROM module where idSubject = '$idSubject'"); 
    } else {
        $q=mysqli_query($con, "SELECT * FROM module"); 
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

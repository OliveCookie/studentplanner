    <?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");

    $idSemester = isset($_GET['idSemester']) ? $_GET['idSemester'] : '';
    $start = isset($_GET['start']) ? $_GET['start'] : '';
    $end = isset($_GET['end']) ? $_GET['end'] : ''; 
    $idCycle = isset($_GET['idCycle']) ? $_GET['idCycle'] : '';
    $year = isset($_GET['year']) ? $_GET['year'] : '';
    $semester = isset($_GET['semester']) ? $_GET['semester'] : '';

    $q=mysqli_query($con, "UPDATE semester SET start='$start', end='$end', idCycle='$idCycle', idSubject='$idSubject', year='$year', semester='$semester')
                           WHERE idSemester='$idSemester'")or die (mysqli_error($con)); 
    if ($q) {
        print(json_encode('updated'));
    } 
     
    mysqli_close($con);
    ?>

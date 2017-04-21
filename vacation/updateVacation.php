    <?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");

    $idVacation = isset($_GET['idVacation']) ? $_GET['idVacation'] : '';
    $idSemester = isset($_GET['idSemester']) ? $_GET['idSemester'] : '';
    $start = isset($_GET['start']) ? $_GET['start'] : '';
    $end = isset($_GET['end']) ? $_GET['end'] : '';
    $name = isset($_GET['name']) ? $_GET['name'] : '';

    $q=mysqli_query($con, "UPDATE vacation SET name='$name', idSemester='$idSemester', end='$end', start='$start', name='$name'
                           WHERE idVacation='$idVacation'")or die (mysqli_error($con)); 
    if ($q) {
        print(json_encode('updated'));
    } 
     
    mysqli_close($con);
    ?>

    <?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");

    $name = isset($_GET['name']) ? $_GET['name'] : '';
    $idVacation = isset($_GET['idVacation']) ? $_GET['idVacation'] : '';
    $start = isset($_GET['start']) ? $_GET['start'] : '';
    $end = isset($_GET['end']) ? $_GET['end'] : '';
    $idSemester = isset($_GET['idSemester']) ? $_GET['idSemester'] : ''; 

    $q=mysqli_query($con, "INSERT INTO vacation (name, idVacation, start, end, idSemester)
                           VALUES ('$name', '$idVacation', '$start', '$end', '$idSemester')")or die (mysqli_error($con)); 
    if ($q) {
        print(json_encode('inserted'));
    } 
     
    mysqli_close($con);
    ?>

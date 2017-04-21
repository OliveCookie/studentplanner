    <?php
    mysqli_report(MYSQLI_REPORT_STRICT);
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");

    $idSemester = isset($_GET['idSemester']) ? $_GET['idSemester'] : '';

    $q=mysqli_query($con, "DELETE FROM semester WHERE idSemester='$idSemester'") or die (mysqli_error($con)); 

    if ($q) {
        print(json_encode("deleted"));
    } 

    mysqli_close($con);
    ?>

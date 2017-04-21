    <?php
    mysqli_report(MYSQLI_REPORT_STRICT);
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");

    $idTeacher = isset($_GET['idTeacher']) ? $_GET['idTeacher'] : '';

    $q=mysqli_query($con, "DELETE FROM teacher WHERE idTeacher='$idTeacher'") or die (mysqli_error($con)); 

    if ($q) {
        print(json_encode("deleted"));
    } 

    mysqli_close($con);
    ?>

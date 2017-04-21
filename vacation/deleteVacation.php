    <?php
    mysqli_report(MYSQLI_REPORT_STRICT);
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");

    $idVacation = isset($_GET['idVacation']) ? $_GET['idVacation'] : '';

    $q=mysqli_query($con, "DELETE FROM vacation WHERE idVacation='$idVacation'") or die (mysqli_error($con)); 

    if ($q) {
        print(json_encode("deleted"));
    } 

    mysqli_close($con);
    ?>

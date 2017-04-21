    <?php
    mysqli_report(MYSQLI_REPORT_STRICT);
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");

    $idCycle = isset($_GET['idCycle']) ? $_GET['idCycle'] : '';

    $q=mysqli_query($con, "DELETE FROM cycle WHERE idCycle='$idCycle'") or die (mysqli_error($con)); 

    if ($q) {
        print(json_encode("deleted"));
    } 

    mysqli_close($con);
    ?>

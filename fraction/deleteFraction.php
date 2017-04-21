    <?php
    mysqli_report(MYSQLI_REPORT_STRICT);
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");

    $idFraction = isset($_GET['idFraction']) ? $_GET['idFraction'] : '';

    $q=mysqli_query($con, "DELETE FROM fraction WHERE idFraction='$idFraction'") or die (mysqli_error($con)); 

    if ($q) {
        print(json_encode("deleted"));
    } 

    mysqli_close($con);
    ?>

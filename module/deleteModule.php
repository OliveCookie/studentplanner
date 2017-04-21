    <?php
    mysqli_report(MYSQLI_REPORT_STRICT);
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");

    $idModule = isset($_GET['idModule']) ? $_GET['idModule'] : '';

    $q=mysqli_query($con, "DELETE FROM module WHERE idModule='$idModule'") or die (mysqli_error($con)); 

    if ($q) {
        print(json_encode("deleted"));
    } 

    mysqli_close($con);
    ?>

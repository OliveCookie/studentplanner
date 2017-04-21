    <?php
    mysqli_report(MYSQLI_REPORT_STRICT);
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");

    $idTask = isset($_GET['idTask']) ? $_GET['idTask'] : '';

    $q=mysqli_query($con, "DELETE FROM task WHERE idTask='$idTask'") or die (mysqli_error($con)); 

    if ($q) {
        print(json_encode("deleted"));
    } 

    mysqli_close($con);
    ?>

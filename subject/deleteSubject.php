    <?php
    mysqli_report(MYSQLI_REPORT_STRICT);
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");

    $idSubject = isset($_GET['idSubject']) ? $_GET['idSubject'] : '';

    $q=mysqli_query($con, "DELETE FROM subject WHERE idSubject='$idSubject'") or die (mysqli_error($con)); 

    if ($q) {
        print(json_encode("deleted"));
    } 

    mysqli_close($con);
    ?>

    <?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");

    $idFraction = isset($_GET['idFraction']) ? $_GET['idFraction'] : '';
    $idTask = isset($_GET['idTask']) ? $_GET['idTask'] : '';
    $percent = isset($_GET['percent']) ? $_GET['percent'] : ''; 
    $grade = isset($_GET['grade']) ? $_GET['grade'] : '';
    $idSubject = isset($_GET['idSubject']) ? $_GET['idSubject'] : '';

    $q=mysqli_query($con, "UPDATE fraction SET idTask='$idTask', percent='$percent', grade='$grade', idSubject='$idSubject')
                           WHERE idFraction='$idFraction'")or die (mysqli_error($con)); 
    if ($q) {
        print(json_encode('updated'));
    } 
     
    mysqli_close($con);
    ?>

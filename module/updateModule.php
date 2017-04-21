    <?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");

    $idModule = isset($_GET['idModule']) ? $_GET['idModule'] : '';
    $frequency = isset($_GET['frequency']) ? $_GET['frequency'] : '';
    $hour = isset($_GET['hour']) ? $_GET['hour'] : ''; 
    $idTeacher = isset($_GET['idTeacher']) ? $_GET['idTeacher'] : '';
    $idSubject = isset($_GET['idSubject']) ? $_GET['idSubject'] : '';
    $room = isset($_GET['room']) ? $_GET['room'] : '';
    $typeOf = isset($_GET['typeOf']) ? $_GET['typeOf'] : '';

    $q=mysqli_query($con, "UPDATE module SET frequency='$frequency', hour='$hour', idTeacher='$idTeacher', idSubject='$idSubject', room='$room', typeOf='$typeOf')
                           WHERE idModule='$idModule'")or die (mysqli_error($con)); 
    if ($q) {
        print(json_encode('updated'));
    } 
     
    mysqli_close($con);
    ?>

    <?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");

    $frequency = isset($_GET['frequency']) ? $_GET['frequency'] : '';
    $hour = isset($_GET['hour']) ? $_GET['hour'] : ''; 
    $room = isset($_GET['room']) ? $_GET['room'] : '';
    $typeOf = isset($_GET['typeOf']) ? $_GET['typeOf'] : '';
    $idTeacher = isset($_GET['idTeacher']) ? $_GET['idTeacher'] : '';
    $idSubject = isset($_GET['idSubject']) ? $_GET['idSubject'] : '';
    $day = isset($_GET['day']) ? $_GET['day'] : '';
    $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : '';

    $q=mysqli_query($con, "INSERT INTO module (frequency, hour, room, typeOf, idTeacher, idSubject, day, idUser)
                           VALUES ('$frequency','$hour', '$room', '$typeOf', '$idTeacher', '$idSubject', '$day', '$idUser')")or die (mysqli_error($con)); 
    if ($q) {
        print(json_encode('inserted'));
    } 
     
    mysqli_close($con);
    ?>

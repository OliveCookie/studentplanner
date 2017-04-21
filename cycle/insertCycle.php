    <?php

    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");

    $type = isset($_GET['type']) ? $_GET['type'] : '';
    $university = isset($_GET['university']) ? $_GET['university'] : ''; 
    $college = isset($_GET['college']) ? $_GET['college'] : '';
    $nrYears = isset($_GET['nrYears']) ? $_GET['nrYears'] : '';
    $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : '';

    $q=mysqli_query($con, "INSERT INTO cycle (type, university, college, nrYears, idUser)
                           VALUES ('$type','$university', '$college', '$nrYears', '$idUser')")or die (mysqli_error($con)); 

    for ($i = 1; $i <= $nrYears; $i++){
        $x=mysqli_query($con, "INSERT INTO semester (start, end, year, semester, idCycle, idUser)
                           VALUES ('','', '$i', '1', (SELECT max(idCycle) FROM cycle), '$idUser')")or die (mysqli_error($con));
        $x=mysqli_query($con, "INSERT INTO semester (start, end, year, semester, idCycle, idUser)
                           VALUES ('','', '$i', '2', (SELECT max(idCycle) FROM cycle), '$idUser')")or die (mysqli_error($con)); 
    }
    if ($q) {
        print(json_encode('inserted'));
    } 
     
    mysqli_close($con);
    ?>

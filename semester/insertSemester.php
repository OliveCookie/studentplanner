    <?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");

    $start = isset($_GET['start']) ? $_GET['start'] : '';
    $end = isset($_GET['end']) ? $_GET['end'] : ''; 
    $year = isset($_GET['year']) ? $_GET['year'] : '';
    $semester = isset($_GET['semester']) ? $_GET['semester'] : '';
    $idCycle = isset($_GET['idCycle']) ? $_GET['idCycle'] : '';

    $q=mysqli_query($con, "INSERT INTO semester (start, end, year, semester, idCycle)
                           VALUES ('$start','$end', '$year', '$semester', '$idCycle')")or die (mysqli_error($con)); 
    if ($q) {
        print(json_encode('inserted'));
    } 
     
    mysqli_close($con);
    ?>

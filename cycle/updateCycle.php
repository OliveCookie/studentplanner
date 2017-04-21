    <?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");

    $idCycle = isset($_GET['idCycle']) ? $_GET['idCycle'] : '';
    $type = isset($_GET['type']) ? $_GET['type'] : '';
    $university = isset($_GET['university']) ? $_GET['university'] : ''; 
    $college = isset($_GET['college']) ? $_GET['college'] : '';
    $nrYears = isset($_GET['nrYears']) ? $_GET['nrYears'] : '';

    $q=mysqli_query($con, "UPDATE cycle SET type='$type', university='$university', college='$college', nrYears='$nrYears')
                           WHERE idCycle='$idCycle'")or die (mysqli_error($con)); 
    if ($q) {
        print(json_encode('updated'));
    } 
     
    mysqli_close($con);
    ?>

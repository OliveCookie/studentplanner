    <?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, "studentplanner");

    $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : '';

    $q=mysqli_query($con, "SELECT * FROM semester where idUser='$idUser'"); 

    if ($q)
    {
        while($e=mysqli_fetch_object($q)){
            $output[]=$e;
        }
    }
    if(!empty($output))
        print(json_encode($output)); 

    mysqli_close($con);
    ?>

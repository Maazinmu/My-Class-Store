
<?php
session_start();
$id = $_SESSION['id'];



if(empty($_SESSION['id'])){
    header("location: login.php");
}else{
    require_once('connect.php');
    $result = mysqli_query($con,"SELECT * FROM users WHERE Id = '$id'");
    $results = mysqli_fetch_assoc($result);
    $name = $results['name'];
    $phone = $results['phone'];
    $level = $results['level'];
    echo $id;



    $items = mysqli_query($con,"SELECT * FROM items");
    $rows = mysqli_num_rows($items);
    $item = mysqli_fetch_assoc($items);
    $type = $item['tyype'];
    $location = $item['location'];
    $Number = $item['num_p'];
    $color = $item['color'];
    $phon = $item['phone'];
    $fname = $item['Fname'];


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>MyClassStore - Dashboard</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="dash.css" rel="stylesheet">
</head>
<body style="text-align: center;background-color: orange;">

        <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Clients</a>
                <a href="#">Contact</a>
        </div>              

    <div class="page">
        <a href="index.html" style="text-decoration: none;color: black;"><h1>My Class Store</h1></a>
        <div class="top-nav">
            <marquee behavior="flash" direction="right" style="color: white;">CUSTOMER FIRST</marquee>
            <a href="#" class="mmenu" style="color: black;text-decoration: none;"><span onclick="openNav()">&#9776;</span></a>
        </div>
        <br>
        <h2>GO! GO! GO!</h2>
        
        <?php
        if($rows != 0){ 
        for($i = 0; $i < $rows ; $i = $i + 1){ ?>
        <div class="row" id="ads">
         <div class="col-md-4">
            <div class="card rounded">
                <div class="card-image">
                    <span class="card-notify-badge">Low KMS</span>
                    <span class="card-notify-year">2018</span>
                    <img class="img-fluid" src="https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=USC80HOC011A021001.jpg&width=440&height=262" alt="Alternate Text" />
                </div>
                <div class="card-image-overlay m-auto">
                    <span class="card-detail-badge">Used</span>
                    <span class="card-detail-badge">$28,000.00</span>
                    <span class="card-detail-badge">13000 Kms</span>
                </div>
                <div class="card-body text-center">
                    <div class="ad-title m-auto">
                        <h5>Honda Accord LX</h5>
                    </div>
                    <a class="ad-btn" href="#">View</a>
                </div>
            </div></div>
        </div>
        <?php }}else{
            ?>
         <p align="center">No Items Available Now</p>

        <?php } ?>
    
        <script>
            /* Set the width of the side navigation to 250px */
            function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            }

            /* Set the width of the side navigation to 0 */
            function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            } 
        </script>
        
</body>
</html>
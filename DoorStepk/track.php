<!DOCTYPE html>
<html>
<head>
	<title>TRACKING</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<script type="text/javascript">
    $(window).on('load',function(){
        $('#popUpWindow').modal('show');
        $('.modal-backdrop').remove();

    });

    $('#popUpWindow').submit(function() {

    // submission stuff

    $('#popUpWindow').modal('hide');
    return false;
});
</script>
<body>

<div class="container">
    <div class="modal fade in" id="popUpWindow">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <!-- header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">TRACK OUR COMPLAINT</h3>
                </div>

                <!-- body (form) -->
                <div class="modal-body">
                    
                        <div class="form-group">
                            <input type="name" name="comp_id" class="form-control" placeholder="COMPLAINT-ID" required>
                        </div>

                </div>

                <!-- button -->
                <div class="modal-footer">
                    <!-- <submit type="submit" class="btn btn-primary btn-block" >Submit</button> -->
                    <input class="btn btn-primary " type="submit" name="submit" value="SUBMIT" data-toggle="modal">
                    <input class="btn btn-primary " type="submit" name="close" value="CLOSE" data-dismiss="modal">
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doorstep";
$comp_id=$name=$complaint=$address=$email=$phone=$board='';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// else echo "connected";

if ($_SERVER["REQUEST_METHOD"] == "POST" ) 
{
  $comp_id = $_POST["comp_id"];
    // echo $comp_id;
    // echo 'sf';
}
    // echo $comp_id;
    // echo 'sf';
$sql="SELECT * FROM complaints WHERE comp_id='$comp_id'";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result))
{
    echo $row['name'];
    echo " Your complaint was successfully registered"."</br>";
    echo "Your complaint -Id is :::";
    echo $row['comp_id']."</br>";
    echo "Your complaint is :::";
    echo $row['complaint']."</br>";
}
$sql = "SELECT msg FROM track WHERE comp_id='$comp_id'";
    $result = mysqli_query($conn,$sql);
    $i=1;
    if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                
                echo $i.'  ';$i+=1;
                echo $row['msg']."<br>";

            }
        }

// $sql = "SELECT msg FROM track WHERE comp_id='$comp_id'";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo  $row["msg"] . "<br>";
//     }
// }
?>

</body>
</html>
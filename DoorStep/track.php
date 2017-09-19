<!DOCTYPE html>
<html>
<head>
	<title>TRACKING</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<script type="text/javascript">
		var comp_id= prompt("Please enter your COMPLAINT-ID");
</script>
<body>
<?php
echo "<script>document.writeln(comp_id);</script>";
?>

<div class="container">

    <h3>Log In Demo</h3>

    <!-- data-toggle lets you display modal without any JavaScript -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#popUpWindow">Open Modal</button>

    <div class="modal fade" id="popUpWindow">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Log In</h3>
                </div>

                <!-- body (form) -->
                <div class="modal-body">
                    <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                    </form>
                </div>

                <!-- button -->
                <div class="modal-footer">
                    <button class="btn btn-primary btn-block">Submit</button>
                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>
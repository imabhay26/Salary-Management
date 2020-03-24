<?php
ini_set( "display_errors", 0); 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "recbanda";
		
		error_reporting(E_ALL ^ E_NOTICE);
		$refno = $_POST['refno'];
		$date = $_POST['date'];
		$pipb = $_POST['pipb'];
		$sp = $_POST['sp'];
		$arr = $_POST['arr'];
		$othr = $_POST['othr'];
		$joining = $_POST['joining'];
		$designation = $_POST['designation'];
		$da_per = $_POST['da_per'];
		$cca = $_POST['cca'];
		$hra = $_POST['hra'];
		$bonus = $_POST['bonus'];
		$absent = $_POST['absent'];
		$total_days = (isset($_POST['total_days']) ? $_POST['total_days'] : '1');
		$da=$pipb*$da_per*0.01;
		$deduction=(($pipb + $da)*$absent)/$total_days;	
		$gross=$pipb + $da + $sp + $arr + $othr + $cca + $hra + $bonus - $deduction;
		
		
		if($refno=='' || $pipb==''||$sp==''||$arr==''||$othr==''||$joining==''||$designation==''||$da_per==''||$cca==''||$hra==''||$bonus==''||$absent==''){
		echo '<script language="javascript">';
		//echo 'alert("Please Insert all details...")';
		echo '</script>';
		}
		
		else
		{
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			//$sql = "UPDATE recbanda SET sub1 = '$sub1' , sub2 = '$sub2' ,sub3 = '$sub3' , sub4 = '$sub4' , sub5 = '$sub5' , sub6 = '$sub6' WHERE rollno ='$rollno' ";
			$sql = "UPDATE salary SET refno='$refno' ,date='$date' , pipb='$pipb' , da_per='$da_per'  , sp='$sp' , arr = '$arr' , 
					othr='$othr' , joining='$joining' ,designation = '$designation' , cca='$cca' , hra='$hra' , 
					bonus='$bonus' , absent='$absent'  , total_days='$total_days' ,deduction='$deduction',da='$da',
					gross='$gross'	WHERE refno='$refno' ";
					
				echo '<script language="javascript">';
				echo 'alert("All details Updated successfully...")';
				echo '</script>';
			if (mysqli_query($conn, $sql)) 
			{
				echo " ";
			} 
			else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			
			mysqli_close($conn);
		}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Earning Panel Update</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/fontawesome-all.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <link rel="shortcut icon" href="img/logo.png" >
    <style>
        body{
            background: white url("img/college.png") no-repeat fixed ;
            background-size: cover;
        }
		.page    { display: none; padding: 0 0.5em; }
		
		#loading {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 100;
  width: 100vw;
  height: 100vh;
  
  background-image: url("img/load.gif");
  background-repeat: no-repeat;
  background-position: center;
}
    </style>
</head>
<body >
<div class="container page">
    <div class="card border border-primary mt-3 ml-5 mr-5">
        <div class="card-header text-center bg-primary text-white font-weight-bold">
            <div class="row">
                <div class="col-2">
                    <img src="img/logo.png" style="float: left" height="50" width="50">

                </div>
                <div class="col-8">
                    <h5 class="font-weight-bold">SALARY DETAILS PANEL</br>
					<h6 class="font-weight-bold">(PAY ROLL - EARNINGS : UPDATE)</h4></h2>
                </div>
                <div class="col-2">
                    <a href="admin_login.html">
                    <button class="btn btn-danger text-white" style="float: right">Log Out</button>
                    </a>
                </div>
            </div>

        </div>
        <div class="card-body">
		<div class="row pb-3">
                <div class="col-2">

                </div>
                <div class="col-4">
                    <a href="earning_insert.php" style="text-decoration:none">
                        <button class="btn btn-outline-danger btn-block">INSERT DETAILS</button>
                    </a>
                </div>
                <div class="col-4">
                    <a href="earning_update.php" style="text-decoration:none">
                        <button class="btn btn-outline-danger btn-block">UPDATE DETAILS</button>
                    </a>
                </div>
                <div class="col-2">

                </div>
            </div>
            <form name="frmRegistration" method="POST" action=""name="vform">
                <div class="form-group row">
					<div class="col">
						<h6 for="formGroupExampleInput" class="font-weight-bold">Reference Number</h5>
						<input type="number" id="refno" name="refno"  class="form-control"  placeholder="Enter Reference Number (For respective faculty)" >
					</div>
					<div class="col">
					<h6 for="formGroupExampleInput" class="font-weight-bold">Date</h5>
						<input type="date" id="date" name="date" class="form-control" placeholder="Enter Date">
					</div>
                </div>
                
                <h6 class="font-weight-bold">Fill the Salary details </h5>

                
                    <div class="row">
                        <div class="col">
							<select id="designation" name="designation" class="form-control" style="width:300px;cursor:pointer">
								<option selected > DESIGNATION</option>
                                <option value="Director">Director</option>
                                <option value="Associate Professor">Associate Professor</option>
								<option value="Assistant Professor">Assistant Professor</option>
								<option value="Professor">Professor</option>
                            </select>
                            
                        </div>
                        <div class="col">
							<select id="joining" name="joining"  class="form-control" style="cursor:pointer">
								<option selected > DATE INCREMENT</option>
                                <option value="JULY">JULY</option>
                                <option value="JANUARY">JANUARY</option>
                            </select>
                            
                        </div>
                        <div class="col">
                            <input  type="number" id="pipb" name="pipb" class="form-control" placeholder="BASIC PAY IN 7th PAY COMMISION" >
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="number" id="da_per" name="da_per" class="form-control" placeholder="Enter DA %" >
                        </div>
                        <div class="col">
                            <input type="number" id="cca" name="cca" class="form-control" placeholder="Enter CCA" >
                        </div>
                        <div class="col">
                            <input type="number" id="hra" name="hra" class="form-control" placeholder="Enter HRA">
                        </div>
						
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="number" id="sp" name="sp" class="form-control" placeholder="Enter SPL. PAY">
                        </div>
                        <div class="col">
                            <input type="number" id="bonus" name="bonus" class="form-control" placeholder="Enter BONUS">
                        </div>
						<div class="col">
                            <input type="number" id="arr" name="arr" class="form-control" placeholder="Enter ARREARS">
                        </div>
                    </div>
                <br>
                
                    <div class="row">
                        <div class="col">
                            <input type="number" id="absent" name="absent" class="form-control" placeholder="Enter NO. OF ABSENT DAYS">
                        </div>
                        <div class="col">
                            <input type="number" id="total_days" name="total_days" style="width:310px" class="form-control" placeholder="NO.OF DAYS IN PERTICULAR MONTH">
                        </div>
						<div class="col">
                            <input type="number" id="othr" name="othr" value=""  class="form-control" placeholder="OTHER ALL IF ANY">
                        </div>
                    </div>
                <br>
                <div class="row">
                    <div class="col-5">

                    </div>
                    <div class="col-2">
                        <button class="btn btn-primary btn-block" onclick="change()" type="submit" name="register-user" value="submit"  type="button ">Submit</button>
                    </div>
                    <div class="col-5">

                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer bg-danger text-center text-white">
            <h6>To visit Deduct Update Page<a href="deduct_update.php" style="text-decoration:none;color:yellow">&nbsp;Click Here</a></h6>
        </div>
    </div>
</div>

<div id="loading"></div>




<script>
var form = document.getElementById("myForm");
function handleForm(event) { event.preventDefault(); } 
form.addEventListener('submit', handleForm);
function func(){

	var refno=document.getElementById("refno").value;
	var pipb=document.getElementById("pipb").value;
	var sp=document.getElementById("sp").value;
	var arr=document.getElementById("arr").value;
	var othr=document.getElementById("othr").value;
	var joining=document.getElementById("joining").value;
	var designation=document.getElementById("designation").value;
	var da_per=document.getElementById("da_per").value;
	var cca=document.getElementById("cca").value;
	var hra=document.getElementById("hra").value;
	var bonus=document.getElementById("bonus").value;
	var absent=document.getElementById("absent").value;
	var total_days=document.getElementById("total_days").value;
	
	if(refno=='' || pipb==''||sp==''||arr==''||othr==''||joining==''||designation==''||da_per==''||$cca==''||hra==''||bonus==''||absent==''){
		alert("Please Insert all details...");
		}
		
		else
		{
		}
}
	
</script>
<script>
function onReady(callback) {
  var intervalId = window.setInterval(function() {
    if (document.getElementsByTagName('body')[0] !== undefined) {
      window.clearInterval(intervalId);
      callback.call(this);
    }
  }, 1500);
}

function setVisible(selector, visible) {
  document.querySelector(selector).style.display = visible ? 'block' : 'none';
}

onReady(function() {
  setVisible('.page', true);
  setVisible('#loading', false);
});
</script>


<script src="bootstrap/js/fontawesome-all.js"></script>
<script src="bootstrap/js/jquery-3.2.1.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/mdb.min.js"></script>
</body>
</html>
<?php
ini_set( "display_errors", 0); 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "recbanda";
		$refno = (isset($_POST['refno']) ? $_POST['refno'] : '');
		
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		$sql1 = "SELECT * FROM salary WHERE refno= $refno ";
		$result = mysqli_query($conn, $sql1);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] ."<br>";
				
				$refno=$row["refno"];
				$pipb=$row["pipb"];
				$da=$row["da"];
				$gross=$row["gross"];
			}
		} else {
			echo "";
		}
		mysqli_close($conn);
		
		error_reporting(E_ALL ^ E_NOTICE);
			$refno = $_POST['refno'];
			$date = $_POST['date'];
			$gpf = $_POST['gpf'];
			$hr = $_POST['hr'];
			$elect = $_POST['elect'];
			$incm = $_POST['incm'];
			$pol = $_POST['pol'];
			$water=$_POST["water"];
			$gis=$_POST["gis"];
			$lic=$_POST["lic"];
			//$reguler=($row["pipb"] + $row["da"])*0.1;
			$reguler=$pipb + $da*0.1;
			$arrear=$_POST["arrear"];
			$total_nps=$reguler + $arrear;
			$btogpf=$_POST["btogpf"];
			$arrtogpf=$_POST["arrtogpf"];
			$gpfadv=$_POST["gpfadv"];
			$rsc=$_POST["rsc"];
			$othr_d=$_POST["othr_d"];
			$total=$gpf + $hr + $elect + $incm + $pol + $water +$gis+$lic+$total_nps+$btogpf+$arrtogpf+
					$gpfadv+$rsc+$othr_d ;
			$rmrk=$_POST["rmrk"];
			$fnl_sal=$gross - $total;
		
		
		
		if($refno=='' || $gpf==''||$hr==''||$elect==''||$incm==''||$pol==''||$water==''||$gis==''||$lic==''||$arrear==''||$btogpf==''||$arrtogpf==''||$gpfadv==''||$rsc==''||$othr_d==''){
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

			
			$sql= "UPDATE salary SET gpf = '$gpf' , hr = '$hr' , elect = '$elect' , incm = '$incm' ,
                                        pol = '$pol' , water = '$water' , gis = '$gis' , lic = '$lic' ,
										reguler = '$reguler' , arrear = '$arrear' , total_nps = '$total_nps' ,
										btogpf = '$btogpf' , arrtogpf = '$arrtogpf' , gpfadv = '$gpfadv' , 
										rsc = '$rsc' , othr_d = '$othr_d' , rmrk = '$rmrk', 
										total = '$total' , fnl_sal='$fnl_sal'  WHERE refno='$refno' AND date='$date' ";
			//$sql = "INSERT INTO salary (refno , gpf , hr , elect , incm , pol , water , gis , lic , arrear , btogpf , arrtogpf,gpfadv, rsc , othr_d , rmrk,reguler,total_nps,total,fnl_sal) 
				//	VALUES ( '$refno' , '$gpf' , '$hr' , '$elect' , '$incm' , '$pol' , '$water' , '$gis' , '$lic' , '$arrear' , '$btogpf' , '$arrtogpf' , '$gpfadv' , '$rsc' , '$othr_d' , '$rmrk','$reguler','$total_nps','$total','$fnl_sal' ) ";
			
				echo '<script language="javascript">';
				echo 'alert("All details Inserted successfully...")';
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
    <title>Deduction Panel Update</title>
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
					<h6 class="font-weight-bold">(PAY ROLL - DEDUCTION : UPDATE)</h4></h2>
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
                    <a href="deduct_insert.php" style="text-decoration:none">
                        <button class="btn btn-outline-danger btn-block">INSERT DETAILS</button>
                    </a>
                </div>
                <div class="col-4">
                    <a href="deduct_update.php" style="text-decoration:none">
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
                            <input  type="number" id="gpf" name="gpf" class="form-control" placeholder="Enter G.P.F." >
                        </div>
						<div class="col">
                            <input  type="number" id="hr" name="hr" class="form-control" placeholder="Enter H.R." >
                        </div>
                        <div class="col">
                            <input  type="number" id="elect" name="elect" class="form-control" placeholder="Enter ELECTTRICITY" >
                        </div>
						<div class="col">
                            <input  type="number" id="water" name="water" class="form-control" placeholder="Enter WATER" >
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input  type="number" id="gis" name="gis" class="form-control" placeholder="Enter G.I.S." >
                        </div>
						<div class="col">
                            <input  type="number" id="lic" name="lic" class="form-control" placeholder="Enter L.I.C" >
                        </div>
                        <div class="col">
                            <input  type="number" id="arrear" name="arrear" class="form-control" placeholder="Enter NPS(ARREAR)" >
                        </div>
						<div class="col">
                            <input  type="number" id="btogpf" name="btogpf" class="form-control" placeholder="Enter BONUS TO GPF" >
                        </div>
						
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="number" id="arrtogpf" name="arrtogpf" class="form-control" placeholder="Enter ARREAR TO GPF">
                        </div>
                        <div class="col">
                            <input type="number" id="gpfadv" name="gpfadv" class="form-control" placeholder="Enter GPF ADVANCE">
                        </div>
						<div class="col">
                            <input type="number" id="incm" name="incm" class="form-control" placeholder="Enter INCOME TAX">
                        </div>
						<div class="col">
                            <input type="number" id="pol" name="pol" class="form-control" placeholder="Enter P.O.L.">
                        </div>
                    </div>
                <br>
                
                    <div class="row">
                        <div class="col">
                            <input type="number" id="rsc" name="rsc" class="form-control" placeholder="Enter R.S.C.">
                        </div>
                        <div class="col">
                            <input type="number" id="othr_d" name="othr_d"  class="form-control" placeholder="Enter OTHER DED.IF ANY">
                        </div>
						<div class="col">
                            <input type="text" id="rmrk" name="rmrk" value=""  class="form-control" placeholder="Enter REMARK">
                        </div>
						<div class="col">
                            
                        </div>
                    </div>
                <br>
                <div class="row">
                    <div class="col-5">

                    </div>
                    <div class="col-2">
                        <button class="btn btn-primary btn-block" onclick = alert(" Details Updated Successfully !") type="submit" name="register-user" value="submit"  type="button ">Submit</button>
                    </div>
                    <div class="col-5">

                    </div>
                </div>
            </form>
			
        </div>
        <div class="card-footer bg-danger text-center text-white">
            <h6>To visit Earning Insert Page<a href="earning_insert.php" style="text-decoration:none;color:yellow">&nbsp;Click Here</a></h6>
        </div>
    </div>
</div>

<div id="loading"></div>

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
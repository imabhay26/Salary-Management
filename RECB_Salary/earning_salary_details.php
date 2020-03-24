<?php
	ini_set( "display_errors", 0); 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "recbanda";
		$date = (isset($_POST['date']) ? $_POST['date'] : '2020-03-23');
		//$date = $_POST['date'];
		
	if($date==''){
		echo '<script language="javascript">';
		//echo 'alert("Please enter valid date...")';
		echo '</script>';
	}
		
	else{
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		$sql1 = "SELECT * FROM salary WHERE refno= 1 AND date='$date' ";
		$result = mysqli_query($conn, $sql1);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] . "da_per: " . $row["da_per"].  "sp" . $row["sp"] ."arr: " . $row["arr"]. " othr: " . $row["othr"]. "joining " . $row["joining"]. "cca" . $row["cca"] . "hra: " . $row["hra"]. " bonus: " . $row["bonus"]. "absent " . $row["absent"]. "total_days" . $row["total_days"] . "deduction: " . $row["deduction"]. "designation:" . $row["designation"] . "<br>";
			$refno1=$row["refno"];
			$pipb1=$row["pipb"];
			$da1=$row["da"];
			$gross1=$row["gross"];
			$da_per1=$row["da_per"];
			$sp1=$row["sp"];
			$arr1=$row["arr"];
			$othr1=$row["othr"];
			$joining1=$row["joining"];
			$cca1=$row["cca"];
			$hra1=$row["hra"];
			$bonus1=$row["bonus"];
			$absent1=$row["absent"];
			$total_days1=$row["total_days"];
			$deduction1=$row["deduction"];
			$designation1=$row["designation"];
			}
		}
		
		$sql2 = "SELECT * FROM salary WHERE refno= 2 AND date='$date' ";
		$result = mysqli_query($conn, $sql2);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] . "da_per: " . $row["da_per"].  "sp" . $row["sp"] ."arr: " . $row["arr"]. " othr: " . $row["othr"]. "joining " . $row["joining"]. "cca" . $row["cca"] . "hra: " . $row["hra"]. " bonus: " . $row["bonus"]. "absent " . $row["absent"]. "total_days" . $row["total_days"] . "deduction: " . $row["deduction"]. "designation:" . $row["designation"] . "<br>";
			$refno2=$row["refno"];
			$pipb2=$row["pipb"];
			$da2=$row["da"];
			$gross2=$row["gross"];
			$da_per2=$row["da_per"];
			$sp2=$row["sp"];
			$arr2=$row["arr"];
			$othr2=$row["othr"];
			$joining2=$row["joining"];
			$cca2=$row["cca"];
			$hra2=$row["hra"];
			$bonus2=$row["bonus"];
			$absent2=$row["absent"];
			$total_days2=$row["total_days"];
			$deduction2=$row["deduction"];
			$designation2=$row["designation"];
			}
		}
		
		$sql3 = "SELECT * FROM salary WHERE refno= 3 AND date='$date' ";
		$result = mysqli_query($conn, $sql3);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] . "da_per: " . $row["da_per"].  "sp" . $row["sp"] ."arr: " . $row["arr"]. " othr: " . $row["othr"]. "joining " . $row["joining"]. "cca" . $row["cca"] . "hra: " . $row["hra"]. " bonus: " . $row["bonus"]. "absent " . $row["absent"]. "total_days" . $row["total_days"] . "deduction: " . $row["deduction"]. "designation:" . $row["designation"] . "<br>";
			$refno3=$row["refno"];
			$pipb3=$row["pipb"];
			$da3=$row["da"];
			$gross3=$row["gross"];
			$da_per3=$row["da_per"];
			$sp3=$row["sp"];
			$arr3=$row["arr"];
			$othr3=$row["othr"];
			$joining3=$row["joining"];
			$cca3=$row["cca"];
			$hra3=$row["hra"];
			$bonus3=$row["bonus"];
			$absent3=$row["absent"];
			$total_days3=$row["total_days"];
			$deduction3=$row["deduction"];
			$designation3=$row["designation"];
			}
		}
		
		$sql4 = "SELECT * FROM salary WHERE refno= 4 AND date='$date' ";
		$result = mysqli_query($conn, $sql4);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] . "da_per: " . $row["da_per"].  "sp" . $row["sp"] ."arr: " . $row["arr"]. " othr: " . $row["othr"]. "joining " . $row["joining"]. "cca" . $row["cca"] . "hra: " . $row["hra"]. " bonus: " . $row["bonus"]. "absent " . $row["absent"]. "total_days" . $row["total_days"] . "deduction: " . $row["deduction"]. "designation:" . $row["designation"] . "<br>";
			$refno4=$row["refno"];
			$pipb4=$row["pipb"];
			$da4=$row["da"];
			$gross4=$row["gross"];
			$da_per4=$row["da_per"];
			$sp4=$row["sp"];
			$arr4=$row["arr"];
			$othr4=$row["othr"];
			$joining4=$row["joining"];
			$cca4=$row["cca"];
			$hra4=$row["hra"];
			$bonus4=$row["bonus"];
			$absent4=$row["absent"];
			$total_days4=$row["total_days"];
			$deduction4=$row["deduction"];
			$designation4=$row["designation"];
			}
		}
		
		$sql5 = "SELECT * FROM salary WHERE refno= 5 AND date='$date' ";
		$result = mysqli_query($conn, $sql5);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] . "da_per: " . $row["da_per"].  "sp" . $row["sp"] ."arr: " . $row["arr"]. " othr: " . $row["othr"]. "joining " . $row["joining"]. "cca" . $row["cca"] . "hra: " . $row["hra"]. " bonus: " . $row["bonus"]. "absent " . $row["absent"]. "total_days" . $row["total_days"] . "deduction: " . $row["deduction"]. "designation:" . $row["designation"] . "<br>";
			$refno5=$row["refno"];
			$pipb5=$row["pipb"];
			$da5=$row["da"];
			$gross5=$row["gross"];
			$da_per5=$row["da_per"];
			$sp5=$row["sp"];
			$arr5=$row["arr"];
			$othr5=$row["othr"];
			$joining5=$row["joining"];
			$cca5=$row["cca"];
			$hra5=$row["hra"];
			$bonus5=$row["bonus"];
			$absent5=$row["absent"];
			$total_days5=$row["total_days"];
			$deduction5=$row["deduction"];
			$designation5=$row["designation"];
			}
		}
		
		$sql7 = "SELECT * FROM salary WHERE refno= 7 AND date='$date' ";
		$result = mysqli_query($conn, $sql7);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] . "da_per: " . $row["da_per"].  "sp" . $row["sp"] ."arr: " . $row["arr"]. " othr: " . $row["othr"]. "joining " . $row["joining"]. "cca" . $row["cca"] . "hra: " . $row["hra"]. " bonus: " . $row["bonus"]. "absent " . $row["absent"]. "total_days" . $row["total_days"] . "deduction: " . $row["deduction"]. "designation:" . $row["designation"] . "<br>";
			$refno7=$row["refno"];
			$pipb7=$row["pipb"];
			$da7=$row["da"];
			$gross7=$row["gross"];
			$da_per7=$row["da_per"];
			$sp7=$row["sp"];
			$arr7=$row["arr"];
			$othr7=$row["othr"];
			$joining7=$row["joining"];
			$cca7=$row["cca"];
			$hra7=$row["hra"];
			$bonus7=$row["bonus"];
			$absent7=$row["absent"];
			$total_days7=$row["total_days"];
			$deduction7=$row["deduction"];
			$designation7=$row["designation"];
			}
		}
		
		$sql8 = "SELECT * FROM salary WHERE refno= 8 AND date='$date' ";
		$result = mysqli_query($conn, $sql8);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] . "da_per: " . $row["da_per"].  "sp" . $row["sp"] ."arr: " . $row["arr"]. " othr: " . $row["othr"]. "joining " . $row["joining"]. "cca" . $row["cca"] . "hra: " . $row["hra"]. " bonus: " . $row["bonus"]. "absent " . $row["absent"]. "total_days" . $row["total_days"] . "deduction: " . $row["deduction"]. "designation:" . $row["designation"] . "<br>";
			$refno8=$row["refno"];
			$pipb8=$row["pipb"];
			$da8=$row["da"];
			$gross8=$row["gross"];
			$da_per8=$row["da_per"];
			$sp8=$row["sp"];
			$arr8=$row["arr"];
			$othr8=$row["othr"];
			$joining8=$row["joining"];
			$cca8=$row["cca"];
			$hra8=$row["hra"];
			$bonus8=$row["bonus"];
			$absent8=$row["absent"];
			$total_days8=$row["total_days"];
			$deduction8=$row["deduction"];
			$designation8=$row["designation"];
			}
		}
		
		$sql10 = "SELECT * FROM salary WHERE refno= 10 AND date='$date' ";
		$result = mysqli_query($conn, $sql10);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] . "da_per: " . $row["da_per"].  "sp" . $row["sp"] ."arr: " . $row["arr"]. " othr: " . $row["othr"]. "joining " . $row["joining"]. "cca" . $row["cca"] . "hra: " . $row["hra"]. " bonus: " . $row["bonus"]. "absent " . $row["absent"]. "total_days" . $row["total_days"] . "deduction: " . $row["deduction"]. "designation:" . $row["designation"] . "<br>";
			$refno10=$row["refno"];
			$pipb10=$row["pipb"];
			$da10=$row["da"];
			$gross10=$row["gross"];
			$da_per10=$row["da_per"];
			$sp10=$row["sp"];
			$arr10=$row["arr"];
			$othr10=$row["othr"];
			$joining10=$row["joining"];
			$cca10=$row["cca"];
			$hra10=$row["hra"];
			$bonus10=$row["bonus"];
			$absent10=$row["absent"];
			$total_days10=$row["total_days"];
			$deduction10=$row["deduction"];
			$designation10=$row["designation"];
			}
		}
		
		$sql11 = "SELECT * FROM salary WHERE refno= 11 AND date='$date' ";
		$result = mysqli_query($conn, $sql11);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] . "da_per: " . $row["da_per"].  "sp" . $row["sp"] ."arr: " . $row["arr"]. " othr: " . $row["othr"]. "joining " . $row["joining"]. "cca" . $row["cca"] . "hra: " . $row["hra"]. " bonus: " . $row["bonus"]. "absent " . $row["absent"]. "total_days" . $row["total_days"] . "deduction: " . $row["deduction"]. "designation:" . $row["designation"] . "<br>";
			$refno11=$row["refno"];
			$pipb11=$row["pipb"];
			$da11=$row["da"];
			$gross11=$row["gross"];
			$da_per11=$row["da_per"];
			$sp11=$row["sp"];
			$arr11=$row["arr"];
			$othr11=$row["othr"];
			$joining11=$row["joining"];
			$cca11=$row["cca"];
			$hra11=$row["hra"];
			$bonus11=$row["bonus"];
			$absent11=$row["absent"];
			$total_days11=$row["total_days"];
			$deduction11=$row["deduction"];
			$designation11=$row["designation"];
			}
		}
		
		$sql12 = "SELECT * FROM salary WHERE refno= 12 AND date='$date' ";
		$result = mysqli_query($conn, $sql12);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] . "da_per: " . $row["da_per"].  "sp" . $row["sp"] ."arr: " . $row["arr"]. " othr: " . $row["othr"]. "joining " . $row["joining"]. "cca" . $row["cca"] . "hra: " . $row["hra"]. " bonus: " . $row["bonus"]. "absent " . $row["absent"]. "total_days" . $row["total_days"] . "deduction: " . $row["deduction"]. "designation:" . $row["designation"] . "<br>";
			$refno12=$row["refno"];
			$pipb12=$row["pipb"];
			$da12=$row["da"];
			$gross12=$row["gross"];
			$da_per12=$row["da_per"];
			$sp12=$row["sp"];
			$arr12=$row["arr"];
			$othr12=$row["othr"];
			$joining12=$row["joining"];
			$cca12=$row["cca"];
			$hra12=$row["hra"];
			$bonus12=$row["bonus"];
			$absent12=$row["absent"];
			$total_days12=$row["total_days"];
			$deduction12=$row["deduction"];
			$designation12=$row["designation"];
			}
		}
		
		$sql13 = "SELECT * FROM salary WHERE refno= 13 AND date='$date' ";
		$result = mysqli_query($conn, $sql13);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] . "da_per: " . $row["da_per"].  "sp" . $row["sp"] ."arr: " . $row["arr"]. " othr: " . $row["othr"]. "joining " . $row["joining"]. "cca" . $row["cca"] . "hra: " . $row["hra"]. " bonus: " . $row["bonus"]. "absent " . $row["absent"]. "total_days" . $row["total_days"] . "deduction: " . $row["deduction"]. "designation:" . $row["designation"] . "<br>";
			$refno13=$row["refno"];
			$pipb13=$row["pipb"];
			$da13=$row["da"];
			$gross13=$row["gross"];
			$da_per13=$row["da_per"];
			$sp13=$row["sp"];
			$arr13=$row["arr"];
			$othr13=$row["othr"];
			$joining13=$row["joining"];
			$cca13=$row["cca"];
			$hra13=$row["hra"];
			$bonus13=$row["bonus"];
			$absent13=$row["absent"];
			$total_days13=$row["total_days"];
			$deduction13=$row["deduction"];
			$designation13=$row["designation"];
			}
		}
		
		$sql14 = "SELECT * FROM salary WHERE refno= 14 AND date='$date' ";
		$result = mysqli_query($conn, $sql14);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] . "da_per: " . $row["da_per"].  "sp" . $row["sp"] ."arr: " . $row["arr"]. " othr: " . $row["othr"]. "joining " . $row["joining"]. "cca" . $row["cca"] . "hra: " . $row["hra"]. " bonus: " . $row["bonus"]. "absent " . $row["absent"]. "total_days" . $row["total_days"] . "deduction: " . $row["deduction"]. "designation:" . $row["designation"] . "<br>";
			$refno14=$row["refno"];
			$pipb14=$row["pipb"];
			$da14=$row["da"];
			$gross14=$row["gross"];
			$da_per14=$row["da_per"];
			$sp14=$row["sp"];
			$arr14=$row["arr"];
			$othr14=$row["othr"];
			$joining14=$row["joining"];
			$cca14=$row["cca"];
			$hra14=$row["hra"];
			$bonus14=$row["bonus"];
			$absent14=$row["absent"];
			$total_days14=$row["total_days"];
			$deduction14=$row["deduction"];
			$designation14=$row["designation"];
			}
		}
		
		$sql15 = "SELECT * FROM salary WHERE refno= 15 AND date='$date' ";
		$result = mysqli_query($conn, $sql15);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] . "da_per: " . $row["da_per"].  "sp" . $row["sp"] ."arr: " . $row["arr"]. " othr: " . $row["othr"]. "joining " . $row["joining"]. "cca" . $row["cca"] . "hra: " . $row["hra"]. " bonus: " . $row["bonus"]. "absent " . $row["absent"]. "total_days" . $row["total_days"] . "deduction: " . $row["deduction"]. "designation:" . $row["designation"] . "<br>";
			$refno15=$row["refno"];
			$pipb15=$row["pipb"];
			$da15=$row["da"];
			$gross15=$row["gross"];
			$da_per15=$row["da_per"];
			$sp15=$row["sp"];
			$arr15=$row["arr"];
			$othr15=$row["othr"];
			$joining15=$row["joining"];
			$cca15=$row["cca"];
			$hra15=$row["hra"];
			$bonus15=$row["bonus"];
			$absent15=$row["absent"];
			$total_days15=$row["total_days"];
			$deduction15=$row["deduction"];
			$designation15=$row["designation"];
			}
		}
		
		$sql16 = "SELECT * FROM salary WHERE refno= 16 AND date='$date' ";
		$result = mysqli_query($conn, $sql16);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] . "da_per: " . $row["da_per"].  "sp" . $row["sp"] ."arr: " . $row["arr"]. " othr: " . $row["othr"]. "joining " . $row["joining"]. "cca" . $row["cca"] . "hra: " . $row["hra"]. " bonus: " . $row["bonus"]. "absent " . $row["absent"]. "total_days" . $row["total_days"] . "deduction: " . $row["deduction"]. "designation:" . $row["designation"] . "<br>";
			$refno16=$row["refno"];
			$pipb16=$row["pipb"];
			$da16=$row["da"];
			$gross16=$row["gross"];
			$da_per16=$row["da_per"];
			$sp16=$row["sp"];
			$arr16=$row["arr"];
			$othr16=$row["othr"];
			$joining16=$row["joining"];
			$cca16=$row["cca"];
			$hra16=$row["hra"];
			$bonus16=$row["bonus"];
			$absent16=$row["absent"];
			$total_days16=$row["total_days"];
			$deduction16=$row["deduction"];
			$designation16=$row["designation"];
			}
		}
		
		$sql17 = "SELECT * FROM salary WHERE refno= 17 AND date='$date' ";
		$result = mysqli_query($conn, $sql17);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] . "da_per: " . $row["da_per"].  "sp" . $row["sp"] ."arr: " . $row["arr"]. " othr: " . $row["othr"]. "joining " . $row["joining"]. "cca" . $row["cca"] . "hra: " . $row["hra"]. " bonus: " . $row["bonus"]. "absent " . $row["absent"]. "total_days" . $row["total_days"] . "deduction: " . $row["deduction"]. "designation:" . $row["designation"] . "<br>";
			$refno17=$row["refno"];
			$pipb17=$row["pipb"];
			$da17=$row["da"];
			$gross17=$row["gross"];
			$da_per17=$row["da_per"];
			$sp17=$row["sp"];
			$arr17=$row["arr"];
			$othr17=$row["othr"];
			$joining17=$row["joining"];
			$cca17=$row["cca"];
			$hra17=$row["hra"];
			$bonus17=$row["bonus"];
			$absent17=$row["absent"];
			$total_days17=$row["total_days"];
			$deduction17=$row["deduction"];
			$designation17=$row["designation"];
			}
		}
		
		$sql18 = "SELECT * FROM salary WHERE refno= 18 AND date='$date' ";
		$result = mysqli_query($conn, $sql18);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] . "da_per: " . $row["da_per"].  "sp" . $row["sp"] ."arr: " . $row["arr"]. " othr: " . $row["othr"]. "joining " . $row["joining"]. "cca" . $row["cca"] . "hra: " . $row["hra"]. " bonus: " . $row["bonus"]. "absent " . $row["absent"]. "total_days" . $row["total_days"] . "deduction: " . $row["deduction"]. "designation:" . $row["designation"] . "<br>";
			$refno18=$row["refno"];
			$pipb18=$row["pipb"];
			$da18=$row["da"];
			$gross18=$row["gross"];
			$da_per18=$row["da_per"];
			$sp18=$row["sp"];
			$arr18=$row["arr"];
			$othr18=$row["othr"];
			$joining18=$row["joining"];
			$cca18=$row["cca"];
			$hra18=$row["hra"];
			$bonus18=$row["bonus"];
			$absent18=$row["absent"];
			$total_days18=$row["total_days"];
			$deduction18=$row["deduction"];
			$designation18=$row["designation"];
			}
		}
		
		$sql19 = "SELECT * FROM salary WHERE refno= 19 AND date='$date' ";
		$result = mysqli_query($conn, $sql19);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] . "da_per: " . $row["da_per"].  "sp" . $row["sp"] ."arr: " . $row["arr"]. " othr: " . $row["othr"]. "joining " . $row["joining"]. "cca" . $row["cca"] . "hra: " . $row["hra"]. " bonus: " . $row["bonus"]. "absent " . $row["absent"]. "total_days" . $row["total_days"] . "deduction: " . $row["deduction"]. "designation:" . $row["designation"] . "<br>";
			$refno19=$row["refno"];
			$pipb19=$row["pipb"];
			$da19=$row["da"];
			$gross19=$row["gross"];
			$da_per19=$row["da_per"];
			$sp19=$row["sp"];
			$arr19=$row["arr"];
			$othr19=$row["othr"];
			$joining19=$row["joining"];
			$cca19=$row["cca"];
			$hra19=$row["hra"];
			$bonus19=$row["bonus"];
			$absent19=$row["absent"];
			$total_days19=$row["total_days"];
			$deduction19=$row["deduction"];
			$designation19=$row["designation"];
			}
		}
		
		$sql20 = "SELECT * FROM salary WHERE refno= 20 AND date='$date' ";
		$result = mysqli_query($conn, $sql20);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] . "da_per: " . $row["da_per"].  "sp" . $row["sp"] ."arr: " . $row["arr"]. " othr: " . $row["othr"]. "joining " . $row["joining"]. "cca" . $row["cca"] . "hra: " . $row["hra"]. " bonus: " . $row["bonus"]. "absent " . $row["absent"]. "total_days" . $row["total_days"] . "deduction: " . $row["deduction"]. "designation:" . $row["designation"] . "<br>";
			$refno20=$row["refno"];
			$pipb20=$row["pipb"];
			$da20=$row["da"];
			$gross20=$row["gross"];
			$da_per20=$row["da_per"];
			$sp20=$row["sp"];
			$arr20=$row["arr"];
			$othr20=$row["othr"];
			$joining20=$row["joining"];
			$cca20=$row["cca"];
			$hra20=$row["hra"];
			$bonus20=$row["bonus"];
			$absent20=$row["absent"];
			$total_days20=$row["total_days"];
			$deduction20=$row["deduction"];
			$designation20=$row["designation"];
			}
		}
		
		$sql21 = "SELECT * FROM salary WHERE refno= 21 AND date='$date' ";
		$result = mysqli_query($conn, $sql21);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] . "da_per: " . $row["da_per"].  "sp" . $row["sp"] ."arr: " . $row["arr"]. " othr: " . $row["othr"]. "joining " . $row["joining"]. "cca" . $row["cca"] . "hra: " . $row["hra"]. " bonus: " . $row["bonus"]. "absent " . $row["absent"]. "total_days" . $row["total_days"] . "deduction: " . $row["deduction"]. "designation:" . $row["designation"] . "<br>";
			$refno21=$row["refno"];
			$pipb21=$row["pipb"];
			$da21=$row["da"];
			$gross21=$row["gross"];
			$da_per21=$row["da_per"];
			$sp21=$row["sp"];
			$arr21=$row["arr"];
			$othr21=$row["othr"];
			$joining21=$row["joining"];
			$cca21=$row["cca"];
			$hra21=$row["hra"];
			$bonus21=$row["bonus"];
			$absent21=$row["absent"];
			$total_days21=$row["total_days"];
			$deduction21=$row["deduction"];
			$designation21=$row["designation"];
			}
		}
		
		$sql22 = "SELECT * FROM salary WHERE refno= 22 AND date='$date' ";
		$result = mysqli_query($conn, $sql22);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] . "da_per: " . $row["da_per"].  "sp" . $row["sp"] ."arr: " . $row["arr"]. " othr: " . $row["othr"]. "joining " . $row["joining"]. "cca" . $row["cca"] . "hra: " . $row["hra"]. " bonus: " . $row["bonus"]. "absent " . $row["absent"]. "total_days" . $row["total_days"] . "deduction: " . $row["deduction"]. "designation:" . $row["designation"] . "<br>";
			$refno22=$row["refno"];
			$pipb22=$row["pipb"];
			$da22=$row["da"];
			$gross22=$row["gross"];
			$da_per22=$row["da_per"];
			$sp22=$row["sp"];
			$arr22=$row["arr"];
			$othr22=$row["othr"];
			$joining22=$row["joining"];
			$cca22=$row["cca"];
			$hra22=$row["hra"];
			$bonus22=$row["bonus"];
			$absent22=$row["absent"];
			$total_days22=$row["total_days"];
			$deduction22=$row["deduction"];
			$designation22=$row["designation"];
			}
		}
		
		$sql23 = "SELECT * FROM salary WHERE refno= 23 AND date='$date' ";
		$result = mysqli_query($conn, $sql23);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] . "da_per: " . $row["da_per"].  "sp" . $row["sp"] ."arr: " . $row["arr"]. " othr: " . $row["othr"]. "joining " . $row["joining"]. "cca" . $row["cca"] . "hra: " . $row["hra"]. " bonus: " . $row["bonus"]. "absent " . $row["absent"]. "total_days" . $row["total_days"] . "deduction: " . $row["deduction"]. "designation:" . $row["designation"] . "<br>";
			$refno23=$row["refno"];
			$pipb23=$row["pipb"];
			$da23=$row["da"];
			$gross23=$row["gross"];
			$da_per23=$row["da_per"];
			$sp23=$row["sp"];
			$arr23=$row["arr"];
			$othr23=$row["othr"];
			$joining23=$row["joining"];
			$cca23=$row["cca"];
			$hra23=$row["hra"];
			$bonus23=$row["bonus"];
			$absent23=$row["absent"];
			$total_days23=$row["total_days"];
			$deduction23=$row["deduction"];
			$designation23=$row["designation"];
			}
		}
		
		$sql24 = "SELECT * FROM salary WHERE refno= 24 AND date='$date' ";
		$result = mysqli_query($conn, $sql24);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] . "da_per: " . $row["da_per"].  "sp" . $row["sp"] ."arr: " . $row["arr"]. " othr: " . $row["othr"]. "joining " . $row["joining"]. "cca" . $row["cca"] . "hra: " . $row["hra"]. " bonus: " . $row["bonus"]. "absent " . $row["absent"]. "total_days" . $row["total_days"] . "deduction: " . $row["deduction"]. "designation:" . $row["designation"] . "<br>";
			$refno24=$row["refno"];
			$pipb24=$row["pipb"];
			$da24=$row["da"];
			$gross24=$row["gross"];
			$da_per24=$row["da_per"];
			$sp24=$row["sp"];
			$arr24=$row["arr"];
			$othr24=$row["othr"];
			$joining24=$row["joining"];
			$cca24=$row["cca"];
			$hra24=$row["hra"];
			$bonus24=$row["bonus"];
			$absent24=$row["absent"];
			$total_days24=$row["total_days"];
			$deduction24=$row["deduction"];
			$designation24=$row["designation"];
			}
		}
		
		$sql25 = "SELECT * FROM salary WHERE refno= 25 AND date='$date' ";
		$result = mysqli_query($conn, $sql25);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] . "da_per: " . $row["da_per"].  "sp" . $row["sp"] ."arr: " . $row["arr"]. " othr: " . $row["othr"]. "joining " . $row["joining"]. "cca" . $row["cca"] . "hra: " . $row["hra"]. " bonus: " . $row["bonus"]. "absent " . $row["absent"]. "total_days" . $row["total_days"] . "deduction: " . $row["deduction"]. "designation:" . $row["designation"] . "<br>";
			$refno25=$row["refno"];
			$pipb25=$row["pipb"];
			$da25=$row["da"];
			$gross25=$row["gross"];
			$da_per25=$row["da_per"];
			$sp25=$row["sp"];
			$arr25=$row["arr"];
			$othr25=$row["othr"];
			$joining25=$row["joining"];
			$cca25=$row["cca"];
			$hra25=$row["hra"];
			$bonus25=$row["bonus"];
			$absent25=$row["absent"];
			$total_days25=$row["total_days"];
			$deduction25=$row["deduction"];
			$designation25=$row["designation"];
			}
		}
		
		$sql26 = "SELECT * FROM salary WHERE refno= 26 AND date='$date' ";
		$result = mysqli_query($conn, $sql26);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] . "da_per: " . $row["da_per"].  "sp" . $row["sp"] ."arr: " . $row["arr"]. " othr: " . $row["othr"]. "joining " . $row["joining"]. "cca" . $row["cca"] . "hra: " . $row["hra"]. " bonus: " . $row["bonus"]. "absent " . $row["absent"]. "total_days" . $row["total_days"] . "deduction: " . $row["deduction"]. "designation:" . $row["designation"] . "<br>";
			$refno26=$row["refno"];
			$pipb26=$row["pipb"];
			$da26=$row["da"];
			$gross26=$row["gross"];
			$da_per26=$row["da_per"];
			$sp26=$row["sp"];
			$arr26=$row["arr"];
			$othr26=$row["othr"];
			$joining26=$row["joining"];
			$cca26=$row["cca"];
			$hra26=$row["hra"];
			$bonus26=$row["bonus"];
			$absent26=$row["absent"];
			$total_days26=$row["total_days"];
			$deduction26=$row["deduction"];
			$designation26=$row["designation"];
			}
		}
		
		$sql27 = "SELECT * FROM salary WHERE refno= 27 AND date='$date' ";
		$result = mysqli_query($conn, $sql27);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				//"refno: " . $row["refno"]. " - pipb: " . $row["pipb"]. "-da " . $row["da"]. "gross" . $row["gross"] . "da_per: " . $row["da_per"].  "sp" . $row["sp"] ."arr: " . $row["arr"]. " othr: " . $row["othr"]. "joining " . $row["joining"]. "cca" . $row["cca"] . "hra: " . $row["hra"]. " bonus: " . $row["bonus"]. "absent " . $row["absent"]. "total_days" . $row["total_days"] . "deduction: " . $row["deduction"]. "designation:" . $row["designation"] . "<br>";
			$refno27=$row["refno"];
			$pipb27=$row["pipb"];
			$da27=$row["da"];
			$gross27=$row["gross"];
			$da_per27=$row["da_per"];
			$sp27=$row["sp"];
			$arr27=$row["arr"];
			$othr27=$row["othr"];
			$joining27=$row["joining"];
			$cca27=$row["cca"];
			$hra27=$row["hra"];
			$bonus27=$row["bonus"];
			$absent27=$row["absent"];
			$total_days27=$row["total_days"];
			$deduction27=$row["deduction"];
			$designation27=$row["designation"];
			}
		}
		
		
		else {
			echo "";
		}
		mysqli_close($conn);
		
	}	
		//$month = (isset($_POST['month']) ? $_POST['month'] : '');
		//$year = (isset($_POST['year']) ? $_POST['year'] : '');
		
		//$deduction = (isset($_POST['deduction']) ? $_POST['deduction'] : '');
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PAY ROLL - EARNINGS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/fontawesome-all.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/mdb.css">
    <link rel="shortcut icon" href="img/logo.png">
	

    <style >
        table,tr,td{
            border: 1px solid lightblue;
        }
        
        @media print {
            @page {
                size: 450mm 210mm; /* landscape */               
                margin: 25mm;
            }
        }
		
		
		/*@media print{@page {size: landscape}}*/
		
        th{
            padding: 0 12px 0 12px;
            font-weight: bold;
            font-size: 22px;
        }
        table,tbody,td{
            text-align: center;
            font-size: 16px;
        }
		td{
			
		}
		a{
			outline:none;
			border:none;
			text-decoration:none;
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
<body style="width: 2070px;margin-top: 20px;font-family: Verdana;margin: 15px">

<form name="frmRegistration" method="POST" action="earning_salary_details.php" name="vform" id="muForm" style="margin:20px 0 0 530px">
	<div class="row">
        <div class="col">
            <input type="date" id="date" name="date"  placeholder="Enter Date" style="border:2px solid lightblue;width:150px;padding:0 0 0 20px">
        </div>
        <div class="col " style="margin:-10px 0 0 -1195px">
            <button class="btn btn-primary " type="submit" name="register-user" onclick="verify()" value="submit" id="submit" type="button ">Search</button>
        </div>
    </div> 
</form>


<div class="page">
<div style="margin: 0 0 0 -700px;text-align: center">

    <h5 class="font-weight-bold">RAJKIYA ENGINEERING COLLEGE BANDA</h4>
    <h6 class="font-weight-bold">PAY ROLL - EARNINGS</h5>
	<h6 class="font-weight-bold" style="font-size:14px">(FOR PAY ROLL - DEDUCTION <a href="deduct_salary_details.php">CLICK HERE</a>)</h6>
    <p class="font-weight-bold ml-3" style="font-size:12px"><span>DATE : </span><span id="demo"></span>/<span id="demo1">
	
	<!--<h3 class="font-weight-bold">RAJKIYA ENGINEERING COLLEGE BANDA</h3>
    <h4 class="font-weight-bold">PAY ROLL - EARNINGS</h4>
	<h6 class="font-weight-bold">(FOR PAY ROLL - DEDUCTION <a href="deduct_salary_details.php">CLICK HERE</a>)</h6>
    <p class="font-weight-bold ml-3"><span>DATE : </span><span id="demo"></span>/<span id="demo1">-->
	
    </span>/<span id="demo2"></span></p>
	
    <img src="img/logo.png" height="80" width="80" style="margin-top: -230px">
    <button name="create_excel" id="create_excel" class="btn btn-danger" style="margin: -230px 0 0 1000px" onclick="main()" >Print</button>
	
</div>

<div style="margin-top:-40px">
    <table class="table-bordered table-hover table2excel" id="tblCustomers" cellspacing="0" cellpadding="0" >
        <thead class="bg-primary text-white text-center ">
            <th class="font-weight-bold">S.No.</th>
            <th class="font-weight-bold">REF.NO.</th>
            <th class="font-weight-bold " style="padding: 0 70px 0 70px">NAME OF EMPLOYEE</th>
            <th class="font-weight-bold" style="padding: 0 20px 0 20px">DESIGNATION</th>
            <th class="font-weight-bold">DATE OF JOINING</th>
            <th class="font-weight-bold"> DATE INCR.</th>
            <th class="font-weight-bold" style="padding: 0 20px 0 20px">PAY LEVEL</th>
            <th class="font-weight-bold">AGP IN 6th PAY COMMISSION</th>
            <th class="font-weight-bold" style="padding: 0 20px 0 20px">BASIC PAY IN 7th PAY COMMISION.</th>
            <th class="font-weight-bold">DA</th>
			<th class="font-weight-bold">TOTAL DA</th>
			<th class="font-weight-bold">CCA</th>
            <th class="font-weight-bold">H.R.A.</th>
            <th class="font-weight-bold">SPL.PAY</th>
            <th class="font-weight-bold">INS CONT</th>
            <th class="font-weight-bold">INS ARR.</th>
            <th class="font-weight-bold">BONUS </th>
            <th class="font-weight-bold">ARREARS</th>
            <th class="font-weight-bold">SALARY DED.</th>
            <th class="font-weight-bold">S-R</th>
            <th class="font-weight-bold">OTHER ALL(IF ANY)</th>
            <th class="font-weight-bold" style="padding: 0 20px 0 20px">GROSS</th>
        </thead>
        <tbody>
            <tr>
                <th class="font-weight-bold">01</th>
                <td>28</td>
                <td class="text-left">
                    <a  href="#" data-toggle="modal" data-target="#spshukla" >
                    DR. SHEO PRASAD SHUKLA</a>
                </td>

                <td><?php  echo $designation1 ?></td>
                <td>20-01-2018</td>
                <td id="spdete"><?php  echo $joining1 ?></td>
                <td>14</td>
                <td>10000</td>
				<td><?php  echo $pipb1 ?></td>
                <td><?php  echo $da_per1 ?></td>
                <td><?php  echo $da1 ?></td>
                <td><?php  echo $cca1 ?></td>
                <td><?php echo $hra1 ?></td>
                
                <td><?php echo $sp1 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus1 ?></td>
                
                <td><?php echo $arr1 ?></td>
				<td><?php echo $deduction1 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr1 ?></td>
                <td><?php echo $gross1 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">02</th>
                <td>02</td>
                <td class="text-left">
					<a  href="#" data-toggle="modal" data-target="#spshukla" >DR. VIBHASH YADAV</a>
					</td>
                <td><?php  echo $designation2 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining2 ?></td>
                <td>13A</td>
				<td>9000</td>
				<td><?php  echo $pipb2 ?></td>
                <td><?php  echo $da_per2 ?></td>
                <td><?php  echo $da2 ?></td>
                <td><?php  echo $cca2 ?></td>
                <td><?php echo $hra2 ?></td>
                
                <td><?php echo $sp2 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus2 ?></td>
                
                <td><?php echo $arr2 ?></td>
				<td><?php echo $deduction2 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr2 ?></td>
                <td><?php echo $gross2 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">03</th>
                <td>03</td>
                <td class="text-left">
				<a  href="#" data-toggle="modal" data-target="#spshukla" >DR. SIDDHARTHA ARJARIA</a>
				</td>
                <td><?php  echo $designation3 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining3 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb3 ?></td>
                <td><?php  echo $da_per3 ?></td>
                <td><?php  echo $da3 ?></td>
                <td><?php  echo $cca3 ?></td>
                <td><?php echo $hra3 ?></td>
                
                <td><?php echo $sp3 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus3 ?></td>
                
                <td><?php echo $arr3 ?></td>
				<td><?php echo $deduction3 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr3 ?></td>
                <td><?php echo $gross3 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">04</th>
                <td>04</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. SAURABH TRIPATHI</a></td>
                <td><?php  echo $designation4 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining4 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb4 ?></td>
                <td><?php  echo $da_per4 ?></td>
                <td><?php  echo $da4 ?></td>
                <td><?php  echo $cca4 ?></td>
                <td><?php echo $hra4 ?></td>
                
                <td><?php echo $sp4 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus4 ?></td>
                
                <td><?php echo $arr4 ?></td>
				<td><?php echo $deduction4 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr4 ?></td>
                <td><?php echo $gross4 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">05</th>
                <td>05</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ANKUSH KUMAR RAJPOOT</a></td>
                <td><?php  echo $designation5 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining5 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb5 ?></td>
                <td><?php  echo $da_per5 ?></td>
                <td><?php  echo $da5 ?></td>
                <td><?php  echo $cca5 ?></td>
                <td><?php echo $hra5 ?></td>
                
                <td><?php echo $sp5 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus5 ?></td>
                
                <td><?php echo $arr5 ?></td>
				<td><?php echo $deduction5 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr5 ?></td>
                <td><?php echo $gross5 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">06</th>
                <td>07</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. AKSHAYKANT</a></td>
                <td><?php  echo $designation7 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining7 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb7 ?></td>
                <td><?php  echo $da_per7 ?></td>
                <td><?php  echo $da7 ?></td>
                <td><?php  echo $cca7 ?></td>
                <td><?php echo $hra7 ?></td>
                
                <td><?php echo $sp7 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus7 ?></td>
                
                <td><?php echo $arr7 ?></td>
				<td><?php echo $deduction7 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr7 ?></td>
                <td><?php echo $gross7 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">07</th>
                <td>08</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. RAVI SHANKAR</a></td>
                <td><?php  echo $designation8 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining8 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb8 ?></td>
                <td><?php  echo $da_per8 ?></td>
                <td><?php  echo $da8 ?></td>
                <td><?php  echo $cca8 ?></td>
                <td><?php echo $hra8 ?></td>
                
                <td><?php echo $sp8 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus8 ?></td>
                
                <td><?php echo $arr8 ?></td>
				<td><?php echo $deduction8 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr8 ?></td>
                <td><?php echo $gross8 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">08</th>
                <td>10</td>
                <td class="text-left">
				<a  href="#" data-toggle="modal" data-target="#spshukla">MR. DEEP SINGH THAKUR</a>
				</td>
                <td><?php  echo $designation10 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining10 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb10 ?></td>
                <td><?php  echo $da_per10 ?></td>
                <td><?php  echo $da10 ?></td>
                <td><?php  echo $cca10 ?></td>
                <td><?php echo $hra10 ?></td>
                
                <td><?php echo $sp10 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus10 ?></td>
                
                <td><?php echo $arr10 ?></td>
				<td><?php echo $deduction10 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr10 ?></td>
                <td><?php echo $gross10 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">09</th>
                <td>11</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ARUN KUMAR</a></td>
                <td><?php  echo $designation11 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining11 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb11 ?></td>
                <td><?php  echo $da_per11 ?></td>
                <td><?php  echo $da11 ?></td>
                <td><?php  echo $cca11 ?></td>
                <td><?php echo $hra11 ?></td>
                
                <td><?php echo $sp11 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus11 ?></td>
                
                <td><?php echo $arr11 ?></td>
				<td><?php echo $deduction11 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr11 ?></td>
                <td><?php echo $gross11 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">10</th>
                <td>12</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. PUSHPENDRA SINGH</a></td>
                <td><?php  echo $designation12 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining12 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb12 ?></td>
                <td><?php  echo $da_per12 ?></td>
                <td><?php  echo $da12 ?></td>
                <td><?php  echo $cca12 ?></td>
                <td><?php echo $hra12 ?></td>
                
                <td><?php echo $sp12 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus12 ?></td>
                
                <td><?php echo $arr12 ?></td>
				<td><?php echo $deduction12 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr12 ?></td>
                <td><?php echo $gross12 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">11</th>
                <td>13</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ANURAG CHAUHAN</a></td>
                <td><?php  echo $designation13 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining13 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb13 ?></td>
                <td><?php  echo $da_per13 ?></td>
                <td><?php  echo $da13 ?></td>
                <td><?php  echo $cca13 ?></td>
                <td><?php echo $hra13 ?></td>
                
                <td><?php echo $sp13 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus13 ?></td>
                
                <td><?php echo $arr13 ?></td>
				<td><?php echo $deduction13 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr13 ?></td>
                <td><?php echo $gross13 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">12</th>
                <td>14</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. MOHD. TAUSEEF KHAN</a></td>
                <td><?php  echo $designation14 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining14 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb14 ?></td>
                <td><?php  echo $da_per14 ?></td>
                <td><?php  echo $da14 ?></td>
                <td><?php  echo $cca14 ?></td>
                <td><?php echo $hra14 ?></td>
                
                <td><?php echo $sp14 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus14 ?></td>
                
                <td><?php echo $arr14 ?></td>
				<td><?php echo $deduction14 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr14 ?></td>
                <td><?php echo $gross14 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">13</th>
                <td>15</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ASHISH TRIPATHI</a></td>
                <td><?php  echo $designation15 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining15 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb15 ?></td>
                <td><?php  echo $da_per15 ?></td>
                <td><?php  echo $da15 ?></td>
                <td><?php  echo $cca15 ?></td>
                <td><?php echo $hra15 ?></td>
                
                <td><?php echo $sp15 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus15 ?></td>
                
                <td><?php echo $arr15 ?></td>
				<td><?php echo $deduction15 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr15 ?></td>
                <td><?php echo $gross15 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">14</th>
                <td>16</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ASHISH SRIVASTAV</a></td>
                <td><?php  echo $designation15 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining15 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb15 ?></td>
                <td><?php  echo $da_per15 ?></td>
                <td><?php  echo $da15 ?></td>
                <td><?php  echo $cca15 ?></td>
                <td><?php echo $hra15 ?></td>
                
                <td><?php echo $sp15 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus15 ?></td>
                
                <td><?php echo $arr15 ?></td>
				<td><?php echo $deduction15 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr15 ?></td>
                <td><?php echo $gross15 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">15</th>
                <td>17</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. GURUSHARAN SINGH</a></td>
                <td><?php  echo $designation17 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining17 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb17 ?></td>
                <td><?php  echo $da_per17 ?></td>
                <td><?php  echo $da17 ?></td>
                <td><?php  echo $cca17 ?></td>
                <td><?php echo $hra17 ?></td>
                
                <td><?php echo $sp17 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus17 ?></td>
                
                <td><?php echo $arr17 ?></td>
				<td><?php echo $deduction17 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr17 ?></td>
                <td><?php echo $gross17 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">16</th>
                <td>18</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. SARVESH KUMAR</a></td>
               <td><?php  echo $designation18 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining18 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb18 ?></td>
                <td><?php  echo $da_per18 ?></td>
                <td><?php  echo $da18 ?></td>
                <td><?php  echo $cca18 ?></td>
                <td><?php echo $hra18 ?></td>
                
                <td><?php echo $sp18 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus18 ?></td>
                
                <td><?php echo $arr18 ?></td>
				<td><?php echo $deduction18 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr18 ?></td>
                <td><?php echo $gross18 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">17</th>
                <td>19</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. MRITYUNJAY SINGH</a></td>
                <td><?php  echo $designation19 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining19 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb19 ?></td>
                <td><?php  echo $da_per19 ?></td>
                <td><?php  echo $da19 ?></td>
                <td><?php  echo $cca19 ?></td>
                <td><?php echo $hra19 ?></td>
                
                <td><?php echo $sp19 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus19 ?></td>
                
                <td><?php echo $arr19 ?></td>
				<td><?php echo $deduction19 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr19 ?></td>
                <td><?php echo $gross19 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">18</th>
                <td>20</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ABHIJEET SINGH</a></td>
               <td><?php  echo $designation20 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining20 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb20 ?></td>
                <td><?php  echo $da_per20 ?></td>
                <td><?php  echo $da20 ?></td>
                <td><?php  echo $cca20 ?></td>
                <td><?php echo $hra20 ?></td>
                
                <td><?php echo $sp20 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus20 ?></td>
                
                <td><?php echo $arr20 ?></td>
				<td><?php echo $deduction20 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr20 ?></td>
                <td><?php echo $gross20 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">19</th>
                <td>21</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. SHAILENDRA BADAL</a></td>
                <td><?php  echo $designation21 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining21 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb21 ?></td>
                <td><?php  echo $da_per21 ?></td>
                <td><?php  echo $da21 ?></td>
                <td><?php  echo $cca21 ?></td>
                <td><?php echo $hra21 ?></td>
                
                <td><?php echo $sp21 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus21 ?></td>
                
                <td><?php echo $arr21 ?></td>
				<td><?php echo $deduction21 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr21 ?></td>
                <td><?php echo $gross21 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">20</th>
                <td>22</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ASHUTOSH TIWARI</a></td>
                <td><?php  echo $designation22 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining22 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb22 ?></td>
                <td><?php  echo $da_per22 ?></td>
                <td><?php  echo $da22 ?></td>
                <td><?php  echo $cca22 ?></td>
                <td><?php echo $hra22 ?></td>
                
                <td><?php echo $sp22 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus22 ?></td>
                
                <td><?php echo $arr22 ?></td>
				<td><?php echo $deduction22 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr22 ?></td>
                <td><?php echo $gross22 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">21</th>
                <td>23</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. SURENDRA KUMAR</a></td>
                <td><?php  echo $designation23 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining23 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb23 ?></td>
                <td><?php  echo $da_per23 ?></td>
                <td><?php  echo $da23 ?></td>
                <td><?php  echo $cca23 ?></td>
                <td><?php echo $hra23 ?></td>
                
                <td><?php echo $sp23 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus23 ?></td>
                
                <td><?php echo $arr23 ?></td>
				<td><?php echo $deduction23 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr23 ?></td>
                <td><?php echo $gross23 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">22</th>
                <td>24</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. AMIT TRIPATHI</a></td>
                <td><?php  echo $designation24 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining24 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb24 ?></td>
                <td><?php  echo $da_per24 ?></td>
                <td><?php  echo $da24 ?></td>
                <td><?php  echo $cca24 ?></td>
                <td><?php echo $hra24 ?></td>
                
                <td><?php echo $sp24 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus24 ?></td>
                
                <td><?php echo $arr24 ?></td>
				<td><?php echo $deduction24 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr24 ?></td>
                <td><?php echo $gross24 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">23</th>
                <td>25</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. MANOJ KUMAR SINGH</a></td>
                <td><?php  echo $designation25 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining25 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb25 ?></td>
                <td><?php  echo $da_per25 ?></td>
                <td><?php  echo $da25 ?></td>
                <td><?php  echo $cca25 ?></td>
                <td><?php echo $hra25 ?></td>
                
                <td><?php echo $sp25 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus25 ?></td>
                
                <td><?php echo $arr25 ?></td>
				<td><?php echo $deduction25 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr25 ?></td>
                <td><?php echo $gross25 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">24</th>
                <td>26</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >DR. ARCHANA SINGH</a></td>
                <td><?php  echo $designation26 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining26 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb26 ?></td>
                <td><?php  echo $da_per26 ?></td>
                <td><?php  echo $da26 ?></td>
                <td><?php  echo $cca26 ?></td>
                <td><?php echo $hra26 ?></td>
                
                <td><?php echo $sp26 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus26 ?></td>
                
                <td><?php echo $arr26 ?></td>
				<td><?php echo $deduction26 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr26 ?></td>
                <td><?php echo $gross26 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">25</th>
                <td>27</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >DR. POOJA SINGH</a></td>
                <td><?php  echo $designation27 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining27 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb27 ?></td>
                <td><?php  echo $da_per27 ?></td>
                <td><?php  echo $da27 ?></td>
                <td><?php  echo $cca27 ?></td>
                <td><?php echo $hra27 ?></td>
                
                <td><?php echo $sp27 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus27 ?></td>
                
                <td><?php echo $arr27 ?></td>
				<td><?php echo $deduction27 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr27 ?></td>
                <td><?php echo $gross27 ?></td>

            </tr>
        </tbody>
    </table>

</div>




</div>


<div id="loading"></div>




<script>
    var d = new Date();
    document.getElementById("demo").innerHTML = d.getDate();
    var d = new Date();
    document.getElementById("demo1").innerHTML = (d.getMonth())+1;
    var d = new Date();
    document.getElementById("demo2").innerHTML = d.getFullYear();

    function main() {
        print(window);
    }
</script>
<script>
    function change() {

        var e = document.getElementById("spdete_f");
        var strUser = e.options[e.selectedIndex].text;
        document.getElementById('spdete').innerHTML = strUser;
        alert("Details inserted successfully")
    }
	
	function verify() {
	var date=document.getElementById('date').value;
	if(date=='')
	{
		alert("Please enter valid date...");
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
  }, 1000);
}

function setVisible(selector, visible) {
  document.querySelector(selector).style.display = visible ? 'block' : 'none';
}

onReady(function() {
  setVisible('.page', true);
  setVisible('#loading', false);
});
</script>

<script>  
 $(document).ready(function(){  
      $('#create_excel').click(function(){  
           var excel_data = $('#employee_table').html();  
           var page = "excel.php?data=" + excel_data;  
           window.location = page;  
      });  
 });  
 </script>
 
 <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        function Export() {
            html2canvas(document.getElementById('tblCustomers'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Table.pdf");
					
                }
				
            });
			var pdf = new jsPDF('l', 'mm', [297, 210]);
					doc.save("new.pdf");
        }
    </script>-->


<script src="bootstrap/js/fontawesome-all.js"></script>
<script src="bootstrap/js/jquery-3.2.1.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/mdb.min.js"></script>

<!--<script src="modal.js"></script>-->




</body>
</html>
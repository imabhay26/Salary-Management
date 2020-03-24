<?php
	//ini_set( "display_errors", 0); 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "recbanda";
		$date = (isset($_POST['date']) ? $_POST['date'] : '2020-03-23');
		
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

			$gpf1=$row["gpf"];
			$hr1=$row["hr"];
			$elect1=$row["elect"];
			$incm1=$row["incm"];
			$pol1=$row["pol"];
			$water1=$row["water"];
			$gis1=$row["gis"];
			$lic1=$row["lic"];
			$reguler1=$row["reguler"];
			$arrear1=$row["arrear"];
			$total_nps1=$reguler1 + $arrear1;
			$btogpf1=$row["btogpf"];
			$arrtogpf1=$row["arrtogpf"];
			$gpfadv1=$row["gpfadv"];
			$rsc1=$row["rsc"];
			$othr_d1=$row["othr_d"];
			$total1=$row["total"]; ;
			$rmrk1=$row["rmrk"];
			$fnl_sal1=$row["fnl_sal"];
			}
		}
		
		$sql2 = "SELECT * FROM salary WHERE refno= 2 AND date='$date' ";
		$result = mysqli_query($conn, $sql2);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {

			$gpf2=$row["gpf"];
			$hr2=$row["hr"];
			$elect2=$row["elect"];
			$incm2=$row["incm"];
			$pol2=$row["pol"];
			$water2=$row["water"];
			$gis2=$row["gis"];
			$lic2=$row["lic"];
			$reguler2=$row["reguler"];
			$arrear2=$row["arrear"];
			$total_nps2=$reguler2 + $arrear2;
			$btogpf2=$row["btogpf"];
			$arrtogpf2=$row["arrtogpf"];
			$gpfadv2=$row["gpfadv"];
			$rsc2=$row["rsc"];
			$othr_d2=$row["othr_d"];
			$total2=$row["total"]; ;
			$rmrk2=$row["rmrk"];
			$fnl_sal2=$row["fnl_sal"];
			}
		}
		
		$sql3 = "SELECT * FROM salary WHERE refno= 3 AND date='$date' ";
		$result = mysqli_query($conn, $sql3);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {

			$gpf3=$row["gpf"];
			$hr3=$row["hr"];
			$elect3=$row["elect"];
			$incm3=$row["incm"];
			$pol3=$row["pol"];
			$water3=$row["water"];
			$gis3=$row["gis"];
			$lic3=$row["lic"];
			$reguler3=$row["reguler"];
			$arrear3=$row["arrear"];
			$total_nps3=$reguler3 + $arrear3;
			$btogpf3=$row["btogpf"];
			$arrtogpf3=$row["arrtogpf"];
			$gpfadv3=$row["gpfadv"];
			$rsc3=$row["rsc"];
			$othr_d3=$row["othr_d"];
			$total3=$row["total"]; ;
			$rmrk3=$row["rmrk"];
			$fnl_sal3=$row["fnl_sal"];
			}
		}
		
		$sql4 = "SELECT * FROM salary WHERE refno= 4 AND date='$date' ";
		$result = mysqli_query($conn, $sql4);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {

			$gpf4=$row["gpf"];
			$hr4=$row["hr"];
			$elect4=$row["elect"];
			$incm4=$row["incm"];
			$pol4=$row["pol"];
			$water4=$row["water"];
			$gis4=$row["gis"];
			$lic4=$row["lic"];
			$reguler4=$row["reguler"];
			$arrear4=$row["arrear"];
			$total_nps4=$reguler4 + $arrear4;
			$btogpf4=$row["btogpf"];
			$arrtogpf4=$row["arrtogpf"];
			$gpfadv4=$row["gpfadv"];
			$rsc4=$row["rsc"];
			$othr_d4=$row["othr_d"];
			$total4=$row["total"]; ;
			$rmrk4=$row["rmrk"];
			$fnl_sal4=$row["fnl_sal"];
			}
		}
		
		$sql5 = "SELECT * FROM salary WHERE refno= 5 AND date='$date' ";
		$result = mysqli_query($conn, $sql5);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {

			$gpf5=$row["gpf"];
			$hr5=$row["hr"];
			$elect5=$row["elect"];
			$incm5=$row["incm"];
			$pol5=$row["pol"];
			$water5=$row["water"];
			$gis5=$row["gis"];
			$lic5=$row["lic"];
			$reguler5=$row["reguler"];
			$arrear5=$row["arrear"];
			$total_nps5=$reguler5 + $arrear5;
			$btogpf5=$row["btogpf"];
			$arrtogpf5=$row["arrtogpf"];
			$gpfadv5=$row["gpfadv"];
			$rsc5=$row["rsc"];
			$othr_d5=$row["othr_d"];
			$total5=$row["total"]; ;
			$rmrk5=$row["rmrk"];
			$fnl_sal5=$row["fnl_sal"];
			}
		}
		
		$sql7 = "SELECT * FROM salary WHERE refno= 7 AND date='$date' ";
		$result = mysqli_query($conn, $sql7);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {

			$gpf7=$row["gpf"];
			$hr7=$row["hr"];
			$elect7=$row["elect"];
			$incm7=$row["incm"];
			$pol7=$row["pol"];
			$water7=$row["water"];
			$gis7=$row["gis"];
			$lic7=$row["lic"];
			$reguler7=$row["reguler"];
			$arrear7=$row["arrear"];
			$total_nps7=$reguler7 + $arrear7;
			$btogpf7=$row["btogpf"];
			$arrtogpf7=$row["arrtogpf"];
			$gpfadv7=$row["gpfadv"];
			$rsc7=$row["rsc"];
			$othr_d7=$row["othr_d"];
			$total7=$row["total"]; ;
			$rmrk7=$row["rmrk"];
			$fnl_sal7=$row["fnl_sal"];
			}
		}
		
		$sql8 = "SELECT * FROM salary WHERE refno= 8 AND date='$date' ";
		$result = mysqli_query($conn, $sql8);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {

			$gpf8=$row["gpf"];
			$hr8=$row["hr"];
			$elect8=$row["elect"];
			$incm8=$row["incm"];
			$pol8=$row["pol"];
			$water8=$row["water"];
			$gis8=$row["gis"];
			$lic8=$row["lic"];
			$reguler8=$row["reguler"];
			$arrear8=$row["arrear"];
			$total_nps8=$reguler8 + $arrear8;
			$btogpf8=$row["btogpf"];
			$arrtogpf8=$row["arrtogpf"];
			$gpfadv8=$row["gpfadv"];
			$rsc8=$row["rsc"];
			$othr_d8=$row["othr_d"];
			$total8=$row["total"]; ;
			$rmrk8=$row["rmrk"];
			$fnl_sal8=$row["fnl_sal"];
			}
		}
		
		$sql10 = "SELECT * FROM salary WHERE refno= 10 AND date='$date' ";
		$result = mysqli_query($conn, $sql10);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {

			$gpf10=$row["gpf"];
			$hr10=$row["hr"];
			$elect10=$row["elect"];
			$incm10=$row["incm"];
			$pol10=$row["pol"];
			$water10=$row["water"];
			$gis10=$row["gis"];
			$lic10=$row["lic"];
			$reguler10=$row["reguler"];
			$arrear10=$row["arrear"];
			$total_nps10=$reguler10 + $arrear10;
			$btogpf10=$row["btogpf"];
			$arrtogpf10=$row["arrtogpf"];
			$gpfadv10=$row["gpfadv"];
			$rsc10=$row["rsc"];
			$othr_d10=$row["othr_d"];
			$total10=$row["total"]; ;
			$rmrk10=$row["rmrk"];
			$fnl_sal10=$row["fnl_sal"];
			}
		}
		
		$sql11 = "SELECT * FROM salary WHERE refno= 11 AND date='$date' ";
		$result = mysqli_query($conn, $sql11);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {

			$gpf11=$row["gpf"];
			$hr11=$row["hr"];
			$elect11=$row["elect"];
			$incm11=$row["incm"];
			$pol11=$row["pol"];
			$water11=$row["water"];
			$gis11=$row["gis"];
			$lic11=$row["lic"];
			$reguler11=$row["reguler"];
			$arrear11=$row["arrear"];
			$total_nps11=$reguler11 + $arrear11;
			$btogpf11=$row["btogpf"];
			$arrtogpf11=$row["arrtogpf"];
			$gpfadv11=$row["gpfadv"];
			$rsc11=$row["rsc"];
			$othr_d11=$row["othr_d"];
			$total11=$row["total"]; ;
			$rmrk11=$row["rmrk"];
			$fnl_sal11=$row["fnl_sal"];
			}
		}
		
		$sql12 = "SELECT * FROM salary WHERE refno= 12 AND date='$date' ";
		$result = mysqli_query($conn, $sql12);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {

			$gpf12=$row["gpf"];
			$hr12=$row["hr"];
			$elect12=$row["elect"];
			$incm12=$row["incm"];
			$pol12=$row["pol"];
			$water12=$row["water"];
			$gis12=$row["gis"];
			$lic12=$row["lic"];
			$reguler12=$row["reguler"];
			$arrear12=$row["arrear"];
			$total_nps12=$reguler12 + $arrear12;
			$btogpf12=$row["btogpf"];
			$arrtogpf12=$row["arrtogpf"];
			$gpfadv12=$row["gpfadv"];
			$rsc12=$row["rsc"];
			$othr_d12=$row["othr_d"];
			$total12=$row["total"]; ;
			$rmrk12=$row["rmrk"];
			$fnl_sal12=$row["fnl_sal"];
			}
		}
		
		$sql13 = "SELECT * FROM salary WHERE refno= 13 AND date='$date' ";
		$result = mysqli_query($conn, $sql13);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {

			$gpf13=$row["gpf"];
			$hr13=$row["hr"];
			$elect13=$row["elect"];
			$incm13=$row["incm"];
			$pol13=$row["pol"];
			$water13=$row["water"];
			$gis13=$row["gis"];
			$lic13=$row["lic"];
			$reguler13=$row["reguler"];
			$arrear13=$row["arrear"];
			$total_nps13=$reguler13 + $arrear13;
			$btogpf13=$row["btogpf"];
			$arrtogpf13=$row["arrtogpf"];
			$gpfadv13=$row["gpfadv"];
			$rsc13=$row["rsc"];
			$othr_d13=$row["othr_d"];
			$total13=$row["total"]; ;
			$rmrk13=$row["rmrk"];
			$fnl_sal13=$row["fnl_sal"];
			}
		}
		
		$sql14 = "SELECT * FROM salary WHERE refno= 14 AND date='$date' ";
		$result = mysqli_query($conn, $sql14);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {

			$gpf14=$row["gpf"];
			$hr14=$row["hr"];
			$elect14=$row["elect"];
			$incm14=$row["incm"];
			$pol14=$row["pol"];
			$water14=$row["water"];
			$gis14=$row["gis"];
			$lic14=$row["lic"];
			$reguler14=$row["reguler"];
			$arrear14=$row["arrear"];
			$total_nps14=$reguler14 + $arrear14;
			$btogpf14=$row["btogpf"];
			$arrtogpf14=$row["arrtogpf"];
			$gpfadv14=$row["gpfadv"];
			$rsc14=$row["rsc"];
			$othr_d14=$row["othr_d"];
			$total14=$row["total"]; ;
			$rmrk14=$row["rmrk"];
			$fnl_sal14=$row["fnl_sal"];
			}
		}
		
		$sql15 = "SELECT * FROM salary WHERE refno= 15 AND date='$date' ";
		$result = mysqli_query($conn, $sql15);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {

			$gpf15=$row["gpf"];
			$hr15=$row["hr"];
			$elect15=$row["elect"];
			$incm15=$row["incm"];
			$pol15=$row["pol"];
			$water15=$row["water"];
			$gis15=$row["gis"];
			$lic15=$row["lic"];
			$reguler15=$row["reguler"];
			$arrear15=$row["arrear"];
			$total_nps15=$reguler15 + $arrear15;
			$btogpf15=$row["btogpf"];
			$arrtogpf15=$row["arrtogpf"];
			$gpfadv15=$row["gpfadv"];
			$rsc15=$row["rsc"];
			$othr_d15=$row["othr_d"];
			$total15=$row["total"]; ;
			$rmrk15=$row["rmrk"];
			$fnl_sal15=$row["fnl_sal"];
			}
		}
		
		$sql16 = "SELECT * FROM salary WHERE refno= 16 AND date='$date' ";
		$result = mysqli_query($conn, $sql16);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {

			$gpf16=$row["gpf"];
			$hr16=$row["hr"];
			$elect16=$row["elect"];
			$incm16=$row["incm"];
			$pol16=$row["pol"];
			$water16=$row["water"];
			$gis16=$row["gis"];
			$lic16=$row["lic"];
			$reguler16=$row["reguler"];
			$arrear16=$row["arrear"];
			$total_nps16=$reguler16 + $arrear16;
			$btogpf16=$row["btogpf"];
			$arrtogpf16=$row["arrtogpf"];
			$gpfadv16=$row["gpfadv"];
			$rsc16=$row["rsc"];
			$othr_d16=$row["othr_d"];
			$total16=$row["total"]; ;
			$rmrk16=$row["rmrk"];
			$fnl_sal16=$row["fnl_sal"];
			}
		}
		
		$sql17 = "SELECT * FROM salary WHERE refno= 17 AND date='$date' ";
		$result = mysqli_query($conn, $sql17);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {

			$gpf17=$row["gpf"];
			$hr17=$row["hr"];
			$elect17=$row["elect"];
			$incm17=$row["incm"];
			$pol17=$row["pol"];
			$water17=$row["water"];
			$gis17=$row["gis"];
			$lic17=$row["lic"];
			$reguler17=$row["reguler"];
			$arrear17=$row["arrear"];
			$total_nps17=$reguler17 + $arrear17;
			$btogpf17=$row["btogpf"];
			$arrtogpf17=$row["arrtogpf"];
			$gpfadv17=$row["gpfadv"];
			$rsc17=$row["rsc"];
			$othr_d17=$row["othr_d"];
			$total17=$row["total"]; ;
			$rmrk17=$row["rmrk"];
			$fnl_sal17=$row["fnl_sal"];
			}
		}
		
		$sql18 = "SELECT * FROM salary WHERE refno= 18 AND date='$date' ";
		$result = mysqli_query($conn, $sql18);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {

			$gpf18=$row["gpf"];
			$hr18=$row["hr"];
			$elect18=$row["elect"];
			$incm18=$row["incm"];
			$pol18=$row["pol"];
			$water18=$row["water"];
			$gis18=$row["gis"];
			$lic18=$row["lic"];
			$reguler18=$row["reguler"];
			$arrear18=$row["arrear"];
			$total_nps18=$reguler18 + $arrear18;
			$btogpf18=$row["btogpf"];
			$arrtogpf18=$row["arrtogpf"];
			$gpfadv18=$row["gpfadv"];
			$rsc18=$row["rsc"];
			$othr_d18=$row["othr_d"];
			$total18=$row["total"]; ;
			$rmrk18=$row["rmrk"];
			$fnl_sal18=$row["fnl_sal"];
			}
		}
		
		$sql19 = "SELECT * FROM salary WHERE refno= 19 AND date='$date' ";
		$result = mysqli_query($conn, $sql19);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {

			$gpf19=$row["gpf"];
			$hr19=$row["hr"];
			$elect19=$row["elect"];
			$incm19=$row["incm"];
			$pol19=$row["pol"];
			$water19=$row["water"];
			$gis19=$row["gis"];
			$lic19=$row["lic"];
			$reguler19=$row["reguler"];
			$arrear19=$row["arrear"];
			$total_nps19=$reguler19 + $arrear19;
			$btogpf19=$row["btogpf"];
			$arrtogpf19=$row["arrtogpf"];
			$gpfadv19=$row["gpfadv"];
			$rsc19=$row["rsc"];
			$othr_d19=$row["othr_d"];
			$total19=$row["total"]; ;
			$rmrk19=$row["rmrk"];
			$fnl_sal19=$row["fnl_sal"];
			}
		}
		
		$sql20 = "SELECT * FROM salary WHERE refno= 20 AND date='$date' ";
		$result = mysqli_query($conn, $sql20);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {

			$gpf20=$row["gpf"];
			$hr20=$row["hr"];
			$elect20=$row["elect"];
			$incm20=$row["incm"];
			$pol20=$row["pol"];
			$water20=$row["water"];
			$gis20=$row["gis"];
			$lic20=$row["lic"];
			$reguler20=$row["reguler"];
			$arrear20=$row["arrear"];
			$total_nps20=$reguler20 + $arrear20;
			$btogpf20=$row["btogpf"];
			$arrtogpf20=$row["arrtogpf"];
			$gpfadv20=$row["gpfadv"];
			$rsc20=$row["rsc"];
			$othr_d20=$row["othr_d"];
			$total20=$row["total"]; ;
			$rmrk20=$row["rmrk"];
			$fnl_sal20=$row["fnl_sal"];
			}
		}
		
		$sql21 = "SELECT * FROM salary WHERE refno= 21 AND date='$date' ";
		$result = mysqli_query($conn, $sql21);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {

			$gpf21=$row["gpf"];
			$hr21=$row["hr"];
			$elect21=$row["elect"];
			$incm21=$row["incm"];
			$pol21=$row["pol"];
			$water21=$row["water"];
			$gis21=$row["gis"];
			$lic21=$row["lic"];
			$reguler21=$row["reguler"];
			$arrear21=$row["arrear"];
			$total_nps21=$reguler21 + $arrear21;
			$btogpf21=$row["btogpf"];
			$arrtogpf21=$row["arrtogpf"];
			$gpfadv21=$row["gpfadv"];
			$rsc21=$row["rsc"];
			$othr_d21=$row["othr_d"];
			$total21=$row["total"]; ;
			$rmrk21=$row["rmrk"];
			$fnl_sal21=$row["fnl_sal"];
			}
		}
		
		$sql22 = "SELECT * FROM salary WHERE refno= 22 AND date='$date' ";
		$result = mysqli_query($conn, $sql22);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {

			$gpf22=$row["gpf"];
			$hr22=$row["hr"];
			$elect22=$row["elect"];
			$incm22=$row["incm"];
			$pol22=$row["pol"];
			$water22=$row["water"];
			$gis22=$row["gis"];
			$lic22=$row["lic"];
			$reguler22=$row["reguler"];
			$arrear22=$row["arrear"];
			$total_nps22=$reguler22 + $arrear22;
			$btogpf22=$row["btogpf"];
			$arrtogpf22=$row["arrtogpf"];
			$gpfadv22=$row["gpfadv"];
			$rsc22=$row["rsc"];
			$othr_d22=$row["othr_d"];
			$total22=$row["total"]; ;
			$rmrk22=$row["rmrk"];
			$fnl_sal22=$row["fnl_sal"];
			}
		}
		
		$sql23 = "SELECT * FROM salary WHERE refno= 23 AND date='$date' ";
		$result = mysqli_query($conn, $sql23);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {

			$gpf23=$row["gpf"];
			$hr23=$row["hr"];
			$elect23=$row["elect"];
			$incm23=$row["incm"];
			$pol23=$row["pol"];
			$water23=$row["water"];
			$gis23=$row["gis"];
			$lic23=$row["lic"];
			$reguler23=$row["reguler"];
			$arrear23=$row["arrear"];
			$total_nps23=$reguler23 + $arrear23;
			$btogpf23=$row["btogpf"];
			$arrtogpf23=$row["arrtogpf"];
			$gpfadv23=$row["gpfadv"];
			$rsc23=$row["rsc"];
			$othr_d23=$row["othr_d"];
			$total23=$row["total"]; ;
			$rmrk23=$row["rmrk"];
			$fnl_sal23=$row["fnl_sal"];
			}
		}
		
		$sql24 = "SELECT * FROM salary WHERE refno= 24 AND date='$date' ";
		$result = mysqli_query($conn, $sql24);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {

			$gpf24=$row["gpf"];
			$hr24=$row["hr"];
			$elect24=$row["elect"];
			$incm24=$row["incm"];
			$pol24=$row["pol"];
			$water24=$row["water"];
			$gis24=$row["gis"];
			$lic24=$row["lic"];
			$reguler24=$row["reguler"];
			$arrear24=$row["arrear"];
			$total_nps24=$reguler24 + $arrear24;
			$btogpf24=$row["btogpf"];
			$arrtogpf24=$row["arrtogpf"];
			$gpfadv24=$row["gpfadv"];
			$rsc24=$row["rsc"];
			$othr_d24=$row["othr_d"];
			$total24=$row["total"]; ;
			$rmrk24=$row["rmrk"];
			$fnl_sal24=$row["fnl_sal"];
			}
		}
		
		$sql25 = "SELECT * FROM salary WHERE refno= 25 AND date='$date' ";
		$result = mysqli_query($conn, $sql25);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {

			$gpf25=$row["gpf"];
			$hr25=$row["hr"];
			$elect25=$row["elect"];
			$incm25=$row["incm"];
			$pol25=$row["pol"];
			$water25=$row["water"];
			$gis25=$row["gis"];
			$lic25=$row["lic"];
			$reguler25=$row["reguler"];
			$arrear25=$row["arrear"];
			$total_nps25=$reguler25 + $arrear25;
			$btogpf25=$row["btogpf"];
			$arrtogpf25=$row["arrtogpf"];
			$gpfadv25=$row["gpfadv"];
			$rsc25=$row["rsc"];
			$othr_d25=$row["othr_d"];
			$total25=$row["total"]; ;
			$rmrk25=$row["rmrk"];
			$fnl_sal25=$row["fnl_sal"];
			}
		}
		
		$sql26 = "SELECT * FROM salary WHERE refno= 26 AND date='$date' ";
		$result = mysqli_query($conn, $sql26);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {

			$gpf26=$row["gpf"];
			$hr26=$row["hr"];
			$elect26=$row["elect"];
			$incm26=$row["incm"];
			$pol26=$row["pol"];
			$water26=$row["water"];
			$gis26=$row["gis"];
			$lic26=$row["lic"];
			$reguler26=$row["reguler"];
			$arrear26=$row["arrear"];
			$total_nps26=$reguler26 + $arrear26;
			$btogpf26=$row["btogpf"];
			$arrtogpf26=$row["arrtogpf"];
			$gpfadv26=$row["gpfadv"];
			$rsc26=$row["rsc"];
			$othr_d26=$row["othr_d"];
			$total26=$row["total"]; ;
			$rmrk26=$row["rmrk"];
			$fnl_sal26=$row["fnl_sal"];
			}
		}
		
		$sql27 = "SELECT * FROM salary WHERE refno= 27 AND date='$date' ";
		$result = mysqli_query($conn, $sql27);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {

			$gpf27=$row["gpf"];
			$hr27=$row["hr"];
			$elect27=$row["elect"];
			$incm27=$row["incm"];
			$pol27=$row["pol"];
			$water27=$row["water"];
			$gis27=$row["gis"];
			$lic27=$row["lic"];
			$reguler27=$row["reguler"];
			$arrear27=$row["arrear"];
			$total_nps27=$reguler27 + $arrear27;
			$btogpf27=$row["btogpf"];
			$arrtogpf27=$row["arrtogpf"];
			$gpfadv27=$row["gpfadv"];
			$rsc27=$row["rsc"];
			$othr_d27=$row["othr_d"];
			$total27=$row["total"]; ;
			$rmrk27=$row["rmrk"];
			$fnl_sal27=$row["fnl_sal"];
			}
		}
		
		else {
			echo "";
		}
		mysqli_close($conn);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PAY ROLL - DEDUCTION</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/fontawesome-all.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/mdb.css">
    <link rel="shortcut icon" href="img/logo.png">

    <style>
        table,tr,td{
            border: 1px solid lightblue;
        }
        /*@page {*/
        /*size: A4 landscape;*/
        /*}*/
        @media print {
            @page {
                size: 450mm 210mm; /* landscape */
                /* you can also specify margins here: */
                margin: 25mm;
                /* for compatibility with both A4 and Letter */
            }
        }
        th{
            padding: 0 12px 0 12px;
            font-weight: bold;
            font-size: 22px;
        }
        table,tbody,td{
            text-align: center;
            font-size: 16px;
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

<form name="frmRegistration" method="POST" action="deduct_salary_details.php" name="vform" id="muForm" style="margin:20px 0 0 530px">
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

    <h5 class="font-weight-bold">RAJKIYA ENGINEERING COLLEGE BANDA</h3>
    <h6 class="font-weight-bold">PAY ROLL - DEDUCTION</h4>
    <h6 class="font-weight-bold" style="font-size:14px">(FOR PAY ROLL - EARNINGS <a href="earning_salary_details.php">CLICK HERE</a>)</h6>
	

    <p class="font-weight-bold ml-3" style="font-size:12px"><span>DATE : </span><span id="demo"></span>/<span id="demo1">
    </span>/<span id="demo2"></span></p>
    <img src="img/logo.png" height="80" width="80" style="margin-top: -230px">
    <button name="create_excel" id="create_excel" class="btn btn-danger" style="margin: -230px 0 0 1000px" onclick="main()" >Print</button>

</div>




<div style="margin-top:-40px">
    <table class="table-bordered table-hover">
        <thead class="bg-primary text-white text-center ">
		<tr>
        <th class="font-weight-bold" rowspan="2">S.No.</th>
        <th class="font-weight-bold" rowspan="2">REF.NO.</th>
        <th class="font-weight-bold " rowspan="2" style="padding: 0 70px 0 70px">EMPLOYEE NAME</th>
        <th class="font-weight-bold" rowspan="2">G.P.F.</th>
        <th class="font-weight-bold" rowspan="2">H.R.</th>
        <th class="font-weight-bold" rowspan="2">ELECT.</th>
        <th class="font-weight-bold" rowspan="2"> WATER</th>
        <th class="font-weight-bold" rowspan="2">G.I.S.</th>
        <th class="font-weight-bold" rowspan="2">LIC</th>
		<th class="font-weight-bold" rowspan="2" style="padding: 0 20px 0 20px">PRAN NUMBER</th>
        <th class="font-weight-bold" colspan="3" style="padding: 0 20px 0 20px">NPS DEDUCTION</th>
		
        <th class="font-weight-bold"rowspan="2">BONUS TO GPF</th>
        <th class="font-weight-bold" rowspan="2">ARREARS TO GPF</th>
        <th class="font-weight-bold" rowspan="2">G.P.F. ADV.</th>
        <th class="font-weight-bold" rowspan="2">INCOME TAX</th>
        <th class="font-weight-bold" rowspan="2">P.O.L.</th>
        <th class="font-weight-bold" rowspan="2">R.S.C.</th>
        <th class="font-weight-bold" rowspan="2">OTHER DED. IF ANY</th>
        <th class="font-weight-bold" rowspan="2">TOTAL DEDUCT </th>
        <th class="font-weight-bold" rowspan="2">NET PAY</th>
        <!--<th class="font-weight-bold" rowspan="2">S-R MONTH</th>
        <th class="font-weight-bold" rowspan="2">S-R NO.OF DAY</th>
        <th class="font-weight-bold" rowspan="2">S-DED. DAY</th>
        <th class="font-weight-bold" rowspan="2" style="padding: 0 20px 0 20px">ARREAR OF MONTH</th>-->
        <th class="font-weight-bold" rowspan="2">REMARK</th>
		<th class="font-weight-bold" rowspan="2">PRINT RECEIPT</th>
		</tr>
		<tr>
		<th class="font-weight-bold"  >REGULAR</th>
		<th class="font-weight-bold"  >ARREAR</th>
		<th class="font-weight-bold" >TOTAL NPS</th>
		</tr>
        </thead>
        <tbody>
        <tr>
            <th class="font-weight-bold">01</th>
            <td>28</td>
            <td class="text-left">
                <a  href="#" data-toggle="modal" data-target="#spshukla" >
                    DR. SHEO PRASAD SHUKLA</a>
            </td>

            <td><?php  echo $gpf1 ?></td>
            <td><?php  echo $hr1 ?></td>
            <td ><?php  echo $elect1 ?></td>
            <td ><?php  echo $water1 ?></td>
            <td ><?php  echo $gis1 ?></td>
            <td ><?php  echo $lic1 ?></td>
            <td>0</td>
			<td ><?php  echo $reguler1 ?></td>
            <td ><?php  echo $arrear1 ?></td>
            <td ><?php  echo $total_nps1 ?></td>
            <td ><?php  echo $btogpf1 ?></td>
            <td ><?php  echo $arrtogpf1 ?></td>
            <td ><?php  echo $gpfadv1 ?></td>
            <td><?php  echo $incm1 ?></td>
            <td><?php  echo $pol1 ?></td>
            <td ><?php  echo $rsc1 ?></td>
            <td><?php  echo $othr_d1 ?></td>
            <td><?php  echo $total1 ?></td>
            <td><?php  echo $fnl_sal1 ?></td>
            <td ><?php  echo $rmrk1 ?></td>
            
			<td>
			<a href="print1.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">02</th>
            <td>02</td>
            <td class="text-left">
                <a  href="#" data-toggle="modal" data-target="#spshukla" >DR. VIBHASH YADAV</a>
            </td>
            <td><?php  echo $gpf2 ?></td>
            <td><?php  echo $hr2 ?></td>
            <td ><?php  echo $elect2 ?></td>
            <td ><?php  echo $water2 ?></td>
            <td ><?php  echo $gis2 ?></td>
            <td ><?php  echo $lic2 ?></td>
            <td>0</td>
			<td ><?php  echo $reguler2 ?></td>
            <td ><?php  echo $arrear2 ?></td>
            <td ><?php  echo $total_nps2 ?></td>
            <td ><?php  echo $btogpf2 ?></td>
            <td ><?php  echo $arrtogpf2 ?></td>
            <td ><?php  echo $gpfadv2 ?></td>
            <td><?php  echo $incm2 ?></td>
            <td><?php  echo $pol2 ?></td>
            <td ><?php  echo $rsc2 ?></td>
            <td><?php  echo $othr_d2 ?></td>
            <td><?php  echo $total2 ?></td>
            <td><?php  echo $fnl_sal2 ?></td>
            <td ><?php  echo $rmrk2 ?></td>
			<td>
			<a href="print2.php">
			<i class="fa fa-download"></i></a>
			</td>


        </tr>

        <tr>
            <th class="font-weight-bold">03</th>
            <td>03</td>
            <td class="text-left">
                <a  href="#" data-toggle="modal" data-target="#spshukla" >DR. SIDDHARTHA ARJARIA</a>
            </td>
            <td><?php  echo $gpf3 ?></td>
            <td><?php  echo $hr3 ?></td>
            <td ><?php  echo $elect3 ?></td>
            <td ><?php  echo $water3 ?></td>
            <td ><?php  echo $gis3 ?></td>
            <td ><?php  echo $lic3 ?></td>
            <td>0</td>
			<td ><?php  echo $reguler3 ?></td>
            <td ><?php  echo $arrear3 ?></td>
            <td ><?php  echo $total_nps3 ?></td>
            <td ><?php  echo $btogpf3 ?></td>
            <td ><?php  echo $arrtogpf3 ?></td>
            <td ><?php  echo $gpfadv3 ?></td>
            <td><?php  echo $incm3 ?></td>
            <td><?php  echo $pol3 ?></td>
            <td ><?php  echo $rsc3 ?></td>
            <td><?php  echo $othr_d3 ?></td>
            <td><?php  echo $total3 ?></td>
            <td><?php  echo $fnl_sal3 ?></td>
            <td ><?php  echo $rmrk3 ?></td>
			<td>
			<a href="print3.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">04</th>
            <td>04</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. SAURABH TRIPATHI</a></td>
            <td><?php  echo $gpf4 ?></td>
            <td><?php  echo $hr4 ?></td>
            <td ><?php  echo $elect4 ?></td>
            <td ><?php  echo $water4 ?></td>
            <td ><?php  echo $gis4 ?></td>
            <td ><?php  echo $lic4 ?></td>
            <td>0</td>
			<td ><?php  echo $reguler4 ?></td>
            <td ><?php  echo $arrear4 ?></td>
            <td ><?php  echo $total_nps4 ?></td>
            <td ><?php  echo $btogpf4 ?></td>
            <td ><?php  echo $arrtogpf4 ?></td>
            <td ><?php  echo $gpfadv4 ?></td>
            <td><?php  echo $incm4 ?></td>
            <td><?php  echo $pol4 ?></td>
            <td ><?php  echo $rsc4 ?></td>
            <td><?php  echo $othr_d4 ?></td>
            <td><?php  echo $total4 ?></td>
            <td><?php  echo $fnl_sal4 ?></td>
            <td ><?php  echo $rmrk4 ?></td>
			<td><a href="print4.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">05</th>
            <td>05</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ANKUSH KUMAR RAJPOOT</a></td>
            <td><?php  echo $gpf5 ?></td>
            <td><?php  echo $hr5 ?></td>
            <td ><?php  echo $elect5 ?></td>
            <td ><?php  echo $water5 ?></td>
            <td ><?php  echo $gis5 ?></td>
            <td ><?php  echo $lic5 ?></td>
            <td>0</td>
			<td ><?php  echo $reguler5 ?></td>
            <td ><?php  echo $arrear5 ?></td>
            <td ><?php  echo $total_nps5 ?></td>
            <td ><?php  echo $btogpf5 ?></td>
            <td ><?php  echo $arrtogpf5 ?></td>
            <td ><?php  echo $gpfadv5 ?></td>
            <td><?php  echo $incm5 ?></td>
            <td><?php  echo $pol5 ?></td>
            <td ><?php  echo $rsc5 ?></td>
            <td><?php  echo $othr_d5 ?></td>
            <td><?php  echo $total5 ?></td>
            <td><?php  echo $fnl_sal5 ?></td>
            <td ><?php  echo $rmrk5 ?></td>
			<td><a href="print5.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">06</th>
            <td>07</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. AKSHAYKANT</a></td>
            <td><?php  echo $gpf7 ?></td>
            <td><?php  echo $hr7 ?></td>
            <td ><?php  echo $elect7 ?></td>
            <td ><?php  echo $water7 ?></td>
            <td ><?php  echo $gis7 ?></td>
            <td ><?php  echo $lic7 ?></td>
            <td>0</td>
			<td ><?php  echo $reguler7 ?></td>
            <td ><?php  echo $arrear7 ?></td>
            <td ><?php  echo $total_nps7 ?></td>
            <td ><?php  echo $btogpf7 ?></td>
            <td ><?php  echo $arrtogpf7 ?></td>
            <td ><?php  echo $gpfadv7 ?></td>
            <td><?php  echo $incm7 ?></td>
            <td><?php  echo $pol7 ?></td>
            <td ><?php  echo $rsc7 ?></td>
            <td><?php  echo $othr_d7 ?></td>
            <td><?php  echo $total7 ?></td>
            <td><?php  echo $fnl_sal7 ?></td>
            <td ><?php  echo $rmrk7 ?></td>
			<td><a href="print7.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">07</th>
            <td>08</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. RAVI SHANKAR</a></td>
            <td><?php  echo $gpf8 ?></td>
            <td><?php  echo $hr8 ?></td>
            <td ><?php  echo $elect8 ?></td>
            <td ><?php  echo $water8 ?></td>
            <td ><?php  echo $gis8 ?></td>
            <td ><?php  echo $lic8 ?></td>
            <td>0</td>
			<td ><?php  echo $reguler8 ?></td>
            <td ><?php  echo $arrear8 ?></td>
            <td ><?php  echo $total_nps8 ?></td>
            <td ><?php  echo $btogpf8 ?></td>
            <td ><?php  echo $arrtogpf8 ?></td>
            <td ><?php  echo $gpfadv8 ?></td>
            <td><?php  echo $incm8 ?></td>
            <td><?php  echo $pol8 ?></td>
            <td ><?php  echo $rsc8 ?></td>
            <td><?php  echo $othr_d8 ?></td>
            <td><?php  echo $total8 ?></td>
            <td><?php  echo $fnl_sal8 ?></td>
            <td ><?php  echo $rmrk8 ?></td>
            
			<td><a href="print8.php">
			<i class="fa fa-download"></i></a>
			</td>
        </tr>

        <tr>
            <th class="font-weight-bold">08</th>
            <td>10</td>
            <td class="text-left">
                <a  href="#" data-toggle="modal" data-target="#spshukla">MR. DEEP SINGH THAKUR</a>
            </td>
            <td><?php  echo $gpf10 ?></td>
            <td><?php  echo $hr10 ?></td>
            <td ><?php  echo $elect10 ?></td>
            <td ><?php  echo $water10 ?></td>
            <td ><?php  echo $gis10 ?></td>
            <td ><?php  echo $lic10 ?></td>
            <td>0</td>
			<td ><?php  echo $reguler10 ?></td>
            <td ><?php  echo $arrear10 ?></td>
            <td ><?php  echo $total_nps10 ?></td>
            <td ><?php  echo $btogpf10 ?></td>
            <td ><?php  echo $arrtogpf10 ?></td>
            <td ><?php  echo $gpfadv10 ?></td>
            <td><?php  echo $incm10 ?></td>
            <td><?php  echo $pol10 ?></td>
            <td ><?php  echo $rsc10 ?></td>
            <td><?php  echo $othr_d10 ?></td>
            <td><?php  echo $total10 ?></td>
            <td><?php  echo $fnl_sal10 ?></td>
            <td ><?php  echo $rmrk10 ?></td>
			<td><a href="print10.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">09</th>
            <td>11</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ARUN KUMAR</a></td>
            <td><?php  echo $gpf11 ?></td>
            <td><?php  echo $hr11 ?></td>
            <td ><?php  echo $elect11 ?></td>
            <td ><?php  echo $water11 ?></td>
            <td ><?php  echo $gis11 ?></td>
            <td ><?php  echo $lic11 ?></td>
            <td>0</td>
			<td ><?php  echo $reguler11 ?></td>
            <td ><?php  echo $arrear11 ?></td>
            <td ><?php  echo $total_nps11 ?></td>
            <td ><?php  echo $btogpf11 ?></td>
            <td ><?php  echo $arrtogpf11 ?></td>
            <td ><?php  echo $gpfadv11 ?></td>
            <td><?php  echo $incm11 ?></td>
            <td><?php  echo $pol11 ?></td>
            <td ><?php  echo $rsc11 ?></td>
            <td><?php  echo $othr_d11 ?></td>
            <td><?php  echo $total11 ?></td>
            <td><?php  echo $fnl_sal11 ?></td>
            <td ><?php  echo $rmrk11 ?></td>
			<td><a href="print11.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">10</th>
            <td>12</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. PUSHPENDRA SINGH</a></td>
            <td><?php  echo $gpf12 ?></td>
            <td><?php  echo $hr12 ?></td>
            <td ><?php  echo $elect12 ?></td>
            <td ><?php  echo $water12 ?></td>
            <td ><?php  echo $gis12 ?></td>
            <td ><?php  echo $lic12 ?></td>
            <td>0</td>
			<td ><?php  echo $reguler12 ?></td>
            <td ><?php  echo $arrear12 ?></td>
            <td ><?php  echo $total_nps12 ?></td>
            <td ><?php  echo $btogpf12 ?></td>
            <td ><?php  echo $arrtogpf12 ?></td>
            <td ><?php  echo $gpfadv12 ?></td>
            <td><?php  echo $incm12 ?></td>
            <td><?php  echo $pol12 ?></td>
            <td ><?php  echo $rsc12 ?></td>
            <td><?php  echo $othr_d12 ?></td>
            <td><?php  echo $total12 ?></td>
            <td><?php  echo $fnl_sal12 ?></td>
            <td ><?php  echo $rmrk12 ?></td>
			<td><a href="print12.php">
			<i class="fa fa-download"></i></a>
			</td>
        </tr>

        <tr>
            <th class="font-weight-bold">11</th>
            <td>13</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ANURAG CHAUHAN</a></td>
            <td><?php  echo $gpf13 ?></td>
            <td><?php  echo $hr13 ?></td>
            <td ><?php  echo $elect13 ?></td>
            <td ><?php  echo $water13 ?></td>
            <td ><?php  echo $gis13 ?></td>
            <td ><?php  echo $lic13 ?></td>
            <td>0</td>
			<td ><?php  echo $reguler13 ?></td>
            <td ><?php  echo $arrear13 ?></td>
            <td ><?php  echo $total_nps13 ?></td>
            <td ><?php  echo $btogpf13 ?></td>
            <td ><?php  echo $arrtogpf13 ?></td>
            <td ><?php  echo $gpfadv13 ?></td>
            <td><?php  echo $incm13 ?></td>
            <td><?php  echo $pol13 ?></td>
            <td ><?php  echo $rsc13 ?></td>
            <td><?php  echo $othr_d13 ?></td>
            <td><?php  echo $total13 ?></td>
            <td><?php  echo $fnl_sal13 ?></td>
            <td ><?php  echo $rmrk13 ?></td>
			<td><a href="print13.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">12</th>
            <td>14</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. MOHD. TAUSEEF KHAN</a></td>
            <td><?php  echo $gpf14 ?></td>
            <td><?php  echo $hr14 ?></td>
            <td ><?php  echo $elect14 ?></td>
            <td ><?php  echo $water14 ?></td>
            <td ><?php  echo $gis14 ?></td>
            <td ><?php  echo $lic14 ?></td>
            <td>0</td>
			<td ><?php  echo $reguler14 ?></td>
            <td ><?php  echo $arrear14 ?></td>
            <td ><?php  echo $total_nps14 ?></td>
            <td ><?php  echo $btogpf14 ?></td>
            <td ><?php  echo $arrtogpf14 ?></td>
            <td ><?php  echo $gpfadv14 ?></td>
            <td><?php  echo $incm14 ?></td>
            <td><?php  echo $pol14 ?></td>
            <td ><?php  echo $rsc14 ?></td>
            <td><?php  echo $othr_d14 ?></td>
            <td><?php  echo $total14 ?></td>
            <td><?php  echo $fnl_sal14 ?></td>
            <td ><?php  echo $rmrk14 ?></td>
            
			<td><a href="print14.php">
			<i class="fa fa-download"></i></a>
			</td>
        </tr>

        <tr>
            <th class="font-weight-bold">13</th>
            <td>15</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ASHISH TRIPATHI</a></td>
            <td><?php  echo $gpf15 ?></td>
            <td><?php  echo $hr15 ?></td>
            <td ><?php  echo $elect15 ?></td>
            <td ><?php  echo $water15 ?></td>
            <td ><?php  echo $gis15 ?></td>
            <td ><?php  echo $lic15 ?></td>
            <td>0</td>
			<td ><?php  echo $reguler15 ?></td>
            <td ><?php  echo $arrear15 ?></td>
            <td ><?php  echo $total_nps15 ?></td>
            <td ><?php  echo $btogpf15 ?></td>
            <td ><?php  echo $arrtogpf15 ?></td>
            <td ><?php  echo $gpfadv15 ?></td>
            <td><?php  echo $incm15 ?></td>
            <td><?php  echo $pol15 ?></td>
            <td ><?php  echo $rsc15 ?></td>
            <td><?php  echo $othr_d15 ?></td>
            <td><?php  echo $total15 ?></td>
            <td><?php  echo $fnl_sal15 ?></td>
            <td ><?php  echo $rmrk15 ?></td>
			<td><a href="print15.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">14</th>
            <td>16</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ASHISH SRIVASTAV</a></td>
            <td><?php  echo $gpf16 ?></td>
            <td><?php  echo $hr16 ?></td>
            <td ><?php  echo $elect16 ?></td>
            <td ><?php  echo $water16 ?></td>
            <td ><?php  echo $gis16 ?></td>
            <td ><?php  echo $lic16 ?></td>
            <td>0</td>
			<td ><?php  echo $reguler16 ?></td>
            <td ><?php  echo $arrear16 ?></td>
            <td ><?php  echo $total_nps16 ?></td>
            <td ><?php  echo $btogpf16 ?></td>
            <td ><?php  echo $arrtogpf16 ?></td>
            <td ><?php  echo $gpfadv16 ?></td>
            <td><?php  echo $incm16 ?></td>
            <td><?php  echo $pol16 ?></td>
            <td ><?php  echo $rsc16 ?></td>
            <td><?php  echo $othr_d16 ?></td>
            <td><?php  echo $total16 ?></td>
            <td><?php  echo $fnl_sal16 ?></td>
            <td ><?php  echo $rmrk16 ?></td>
			<td><a href="print16.php">
			<i class="fa fa-download"></i></a>
			</td>
        </tr>

        <tr>
            <th class="font-weight-bold">15</th>
            <td>17</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. GURUSHARAN SINGH</a></td>
            <td><?php  echo $gpf17 ?></td>
            <td><?php  echo $hr17 ?></td>
            <td ><?php  echo $elect17 ?></td>
            <td ><?php  echo $water17 ?></td>
            <td ><?php  echo $gis17 ?></td>
            <td ><?php  echo $lic17 ?></td>
            <td>0</td>
			<td ><?php  echo $reguler17 ?></td>
            <td ><?php  echo $arrear17 ?></td>
            <td ><?php  echo $total_nps17 ?></td>
            <td ><?php  echo $btogpf17 ?></td>
            <td ><?php  echo $arrtogpf17 ?></td>
            <td ><?php  echo $gpfadv17 ?></td>
            <td><?php  echo $incm17 ?></td>
            <td><?php  echo $pol17 ?></td>
            <td ><?php  echo $rsc17 ?></td>
            <td><?php  echo $othr_d17 ?></td>
            <td><?php  echo $total17 ?></td>
            <td><?php  echo $fnl_sal17 ?></td>
            <td ><?php  echo $rmrk17 ?></td>
			<td><a href="print17.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">16</th>
            <td>18</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. SARVESH KUMAR</a></td>
            <td><?php  echo $gpf18 ?></td>
            <td><?php  echo $hr18 ?></td>
            <td ><?php  echo $elect18 ?></td>
            <td ><?php  echo $water18 ?></td>
            <td ><?php  echo $gis18 ?></td>
            <td ><?php  echo $lic18 ?></td>
            <td>0</td>
			<td ><?php  echo $reguler18 ?></td>
            <td ><?php  echo $arrear18 ?></td>
            <td ><?php  echo $total_nps18 ?></td>
            <td ><?php  echo $btogpf18 ?></td>
            <td ><?php  echo $arrtogpf18 ?></td>
            <td ><?php  echo $gpfadv18 ?></td>
            <td><?php  echo $incm18 ?></td>
            <td><?php  echo $pol18 ?></td>
            <td ><?php  echo $rsc18 ?></td>
            <td><?php  echo $othr_d18 ?></td>
            <td><?php  echo $total18 ?></td>
            <td><?php  echo $fnl_sal18 ?></td>
            <td ><?php  echo $rmrk18 ?></td>
			<td><a href="print18.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">17</th>
            <td>19</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. MRITYUNJAY SINGH</a></td>
            <td><?php  echo $gpf19 ?></td>
            <td><?php  echo $hr19 ?></td>
            <td ><?php  echo $elect19 ?></td>
            <td ><?php  echo $water19 ?></td>
            <td ><?php  echo $gis19 ?></td>
            <td ><?php  echo $lic19 ?></td>
            <td>0</td>
			<td ><?php  echo $reguler19 ?></td>
            <td ><?php  echo $arrear19 ?></td>
            <td ><?php  echo $total_nps19 ?></td>
            <td ><?php  echo $btogpf19 ?></td>
            <td ><?php  echo $arrtogpf19 ?></td>
            <td ><?php  echo $gpfadv19 ?></td>
            <td><?php  echo $incm19 ?></td>
            <td><?php  echo $pol19 ?></td>
            <td ><?php  echo $rsc19 ?></td>
            <td><?php  echo $othr_d19 ?></td>
            <td><?php  echo $total19 ?></td>
            <td><?php  echo $fnl_sal19 ?></td>
            <td ><?php  echo $rmrk19 ?></td>
			<td><a href="print19.php">
			<i class="fa fa-download"></i></a>
			</td>
        </tr>

        <tr>
            <th class="font-weight-bold">18</th>
            <td>20</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ABHIJEET SINGH</a></td>
            <td><?php  echo $gpf20 ?></td>
            <td><?php  echo $hr20 ?></td>
            <td ><?php  echo $elect20 ?></td>
            <td ><?php  echo $water20 ?></td>
            <td ><?php  echo $gis20 ?></td>
            <td ><?php  echo $lic20 ?></td>
            <td>0</td>
			<td ><?php  echo $reguler20 ?></td>
            <td ><?php  echo $arrear20 ?></td>
            <td ><?php  echo $total_nps20 ?></td>
            <td ><?php  echo $btogpf20 ?></td>
            <td ><?php  echo $arrtogpf20 ?></td>
            <td ><?php  echo $gpfadv20 ?></td>
            <td><?php  echo $incm20 ?></td>
            <td><?php  echo $pol20 ?></td>
            <td ><?php  echo $rsc20 ?></td>
            <td><?php  echo $othr_d20 ?></td>
            <td><?php  echo $total20 ?></td>
            <td><?php  echo $fnl_sal20 ?></td>
            <td ><?php  echo $rmrk20 ?></td>
			<td><a href="print20.php">
			<i class="fa fa-download"></i></a>
			</td>
        </tr>

        <tr>
            <th class="font-weight-bold">19</th>
            <td>21</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. SHAILENDRA BADAL</a></td>
            <td><?php  echo $gpf21 ?></td>
            <td><?php  echo $hr21 ?></td>
            <td ><?php  echo $elect21 ?></td>
            <td ><?php  echo $water21 ?></td>
            <td ><?php  echo $gis21 ?></td>
            <td ><?php  echo $lic21 ?></td>
            <td>0</td>
			<td ><?php  echo $reguler21 ?></td>
            <td ><?php  echo $arrear21 ?></td>
            <td ><?php  echo $total_nps21 ?></td>
            <td ><?php  echo $btogpf21 ?></td>
            <td ><?php  echo $arrtogpf21 ?></td>
            <td ><?php  echo $gpfadv21 ?></td>
            <td><?php  echo $incm21 ?></td>
            <td><?php  echo $pol21 ?></td>
            <td ><?php  echo $rsc21 ?></td>
            <td><?php  echo $othr_d21 ?></td>
            <td><?php  echo $total21 ?></td>
            <td><?php  echo $fnl_sal21 ?></td>
            <td ><?php  echo $rmrk21 ?></td>
			<td><a href="print21.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">20</th>
            <td>22</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ASHUTOSH TIWARI</a></td>
            <td><?php  echo $gpf22 ?></td>
            <td><?php  echo $hr22 ?></td>
            <td ><?php  echo $elect22 ?></td>
            <td ><?php  echo $water22 ?></td>
            <td ><?php  echo $gis22 ?></td>
            <td ><?php  echo $lic22 ?></td>
            <td>0</td>
			<td ><?php  echo $reguler22 ?></td>
            <td ><?php  echo $arrear22 ?></td>
            <td ><?php  echo $total_nps22 ?></td>
            <td ><?php  echo $btogpf22 ?></td>
            <td ><?php  echo $arrtogpf22 ?></td>
            <td ><?php  echo $gpfadv22 ?></td>
            <td><?php  echo $incm22 ?></td>
            <td><?php  echo $pol22 ?></td>
            <td ><?php  echo $rsc22 ?></td>
            <td><?php  echo $othr_d22 ?></td>
            <td><?php  echo $total22 ?></td>
            <td><?php  echo $fnl_sal22 ?></td>
            <td ><?php  echo $rmrk22 ?></td>
			<td><a href="print22.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">21</th>
            <td>23</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. SURENDRA KUMAR</a></td>
            <td><?php  echo $gpf23 ?></td>
            <td><?php  echo $hr23 ?></td>
            <td ><?php  echo $elect23 ?></td>
            <td ><?php  echo $water23 ?></td>
            <td ><?php  echo $gis23 ?></td>
            <td ><?php  echo $lic23 ?></td>
            <td>0</td>
			<td ><?php  echo $reguler23 ?></td>
            <td ><?php  echo $arrear23 ?></td>
            <td ><?php  echo $total_nps23 ?></td>
            <td ><?php  echo $btogpf23 ?></td>
            <td ><?php  echo $arrtogpf23 ?></td>
            <td ><?php  echo $gpfadv23 ?></td>
            <td><?php  echo $incm23 ?></td>
            <td><?php  echo $pol23 ?></td>
            <td ><?php  echo $rsc23 ?></td>
            <td><?php  echo $othr_d23 ?></td>
            <td><?php  echo $total23 ?></td>
            <td><?php  echo $fnl_sal23 ?></td>
            <td ><?php  echo $rmrk23 ?></td>
			<td><a href="print23.php">
			<i class="fa fa-download"></i></a>
			</td>
        </tr>

        <tr>
            <th class="font-weight-bold">22</th>
            <td>24</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. AMIT TRIPATHI</a></td>
            <td><?php  echo $gpf24 ?></td>
            <td><?php  echo $hr24 ?></td>
            <td ><?php  echo $elect24 ?></td>
            <td ><?php  echo $water24 ?></td>
            <td ><?php  echo $gis24 ?></td>
            <td ><?php  echo $lic24 ?></td>
            <td>0</td>
			<td ><?php  echo $reguler24 ?></td>
            <td ><?php  echo $arrear24 ?></td>
            <td ><?php  echo $total_nps24 ?></td>
            <td ><?php  echo $btogpf24 ?></td>
            <td ><?php  echo $arrtogpf24 ?></td>
            <td ><?php  echo $gpfadv24 ?></td>
            <td><?php  echo $incm24 ?></td>
            <td><?php  echo $pol24 ?></td>
            <td ><?php  echo $rsc24 ?></td>
            <td><?php  echo $othr_d24 ?></td>
            <td><?php  echo $total24 ?></td>
            <td><?php  echo $fnl_sal24 ?></td>
            <td ><?php  echo $rmrk24 ?></td>
			<td><a href="print24.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">23</th>
            <td>25</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. MANOJ KUMAR SINGH</a></td>
            <td><?php  echo $gpf25 ?></td>
            <td><?php  echo $hr25 ?></td>
            <td ><?php  echo $elect25 ?></td>
            <td ><?php  echo $water25 ?></td>
            <td ><?php  echo $gis25 ?></td>
            <td ><?php  echo $lic25 ?></td>
            <td>0</td>
			<td ><?php  echo $reguler25 ?></td>
            <td ><?php  echo $arrear25 ?></td>
            <td ><?php  echo $total_nps25 ?></td>
            <td ><?php  echo $btogpf25 ?></td>
            <td ><?php  echo $arrtogpf25 ?></td>
            <td ><?php  echo $gpfadv25 ?></td>
            <td><?php  echo $incm25 ?></td>
            <td><?php  echo $pol25 ?></td>
            <td ><?php  echo $rsc25 ?></td>
            <td><?php  echo $othr_d25 ?></td>
            <td><?php  echo $total25 ?></td>
            <td><?php  echo $fnl_sal25 ?></td>
            <td ><?php  echo $rmrk25 ?></td>
			<td><a href="print25.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">24</th>
            <td>26</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >DR. ARCHANA SINGH</a></td>
            <td><?php  echo $gpf26 ?></td>
            <td><?php  echo $hr26 ?></td>
            <td ><?php  echo $elect26 ?></td>
            <td ><?php  echo $water26 ?></td>
            <td ><?php  echo $gis26 ?></td>
            <td ><?php  echo $lic26 ?></td>
            <td>0</td>
			<td ><?php  echo $reguler26 ?></td>
            <td ><?php  echo $arrear26 ?></td>
            <td ><?php  echo $total_nps26 ?></td>
            <td ><?php  echo $btogpf26 ?></td>
            <td ><?php  echo $arrtogpf26 ?></td>
            <td ><?php  echo $gpfadv26 ?></td>
            <td><?php  echo $incm26 ?></td>
            <td><?php  echo $pol26 ?></td>
            <td ><?php  echo $rsc26 ?></td>
            <td><?php  echo $othr_d26 ?></td>
            <td><?php  echo $total26 ?></td>
            <td><?php  echo $fnl_sal26 ?></td>
            <td ><?php  echo $rmrk26 ?></td>
			<td><a href="print26.php">
			<i class="fa fa-download"></i></a>
			</td>

        </tr>

        <tr>
            <th class="font-weight-bold">25</th>
            <td>27</td>
            <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >DR. POOJA SINGH</a></td>
            <td><?php  echo $gpf27 ?></td>
            <td><?php  echo $hr27 ?></td>
            <td ><?php  echo $elect27 ?></td>
            <td ><?php  echo $water27 ?></td>
            <td ><?php  echo $gis27 ?></td>
            <td ><?php  echo $lic27 ?></td>
            <td>0</td>
			<td ><?php  echo $reguler27 ?></td>
            <td ><?php  echo $arrear27 ?></td>
            <td ><?php  echo $total_nps27 ?></td>
            <td ><?php  echo $btogpf27 ?></td>
            <td ><?php  echo $arrtogpf27 ?></td>
            <td ><?php  echo $gpfadv27 ?></td>
            <td><?php  echo $incm27 ?></td>
            <td><?php  echo $pol27 ?></td>
            <td ><?php  echo $rsc27 ?></td>
            <td><?php  echo $othr_d27 ?></td>
            <td><?php  echo $total27 ?></td>
            <td><?php  echo $fnl_sal27 ?></td>
            <td ><?php  echo $rmrk27 ?></td>
			<td><a href="print27.php">
			<i class="fa fa-download"></i></a>
			</td>
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

<script src="bootstrap/js/fontawesome-all.js"></script>
<script src="bootstrap/js/jquery-3.2.1.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/mdb.min.js"></script>

<!--<script src="modal.js"></script>-->
</body>
</html>
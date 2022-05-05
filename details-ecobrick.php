<!-- This calls GEA typography -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Mulish loads first for first page view-->

<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;500&display=swap" rel="stylesheet" media="print" onload="this.media='all'"> 

<!-- Arvo loads very last to speed up first load.  See the script in the footer that triggers this  -->

<noscript>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" />
</noscript>
		
<!-- This calls our Github hosted stylesheet - if it gets hopelessly cached and doesn't load, up the version number! -->
		
<link rel="stylesheet" type="text/css" href="stylesheet-general.css?v0.14">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>



							  										  
<BODY id="full-page">

	<div id="load-background">

<a name="top"></a>

<div id="main-content">
<!-- The flexible grid (content)
			<div class="lead-page-paragraph">
				<br><br>
				<p>Ecobrick Detail Page</p>
			</div>
			<div class="page-paragraph">
				<p>An overview of the ecobrick generated by the ecobricker and recorded for that brik.</a>.</p>
			</div>
			<hr> -->
          
<!-- The DB connection creator -->
<?php include 'db.php';?>

<?php

// Get the contents from the Ecobrick table as an ordered View, using the serial_no from the URL.
$serialNo = $_GET['serial_no'];

// Refered to  https://www.w3schools.com/php/php_mysql_select_where.asp1
$sql = "SELECT * FROM tb_ecobricks WHERE serial_no = " . $serialNo;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    //  echo "<h1> Use Serial Number from URL => " . $serialNo ."</h1>"; Output data of each row
    while($array = $result->fetch_assoc()) {

		echo '<img src="'. $array["ecobrick_full_photo_url"] .'" width="500" alt="Ecobrick basic pic"/>';
		echo "</br><h3>Ecobrick Serial No: <var>" . $array["serial_no"] ."</var></h3> </br>";
		echo " <p><b>Owner:</b> <var>" . $array["owner"] ."</var> </p>" ;
		echo " <p><b>Volume:</b> <var>" . $array["volume_ml"] ."&#8202;ml</p>" ;
		echo " <p><b>Weight:</b> <var>" . $array["weight_g"] ."&#8202;g</var></p>" ;
		echo " <p><b>Density:</b> <var>" . $array["density"] ."&#8202;g/ml</var></p>" ;
		echo " <p><b>Date Logged:</b> <var>" . $array["date_logged_ts"] ."</var></p>" ;
		echo " <p><b>CO2e:</b><var> " . $array["CO2_kg"] ."&#8202;kg</var></p>" ;
		echo " <p><b>Sequestration type:</b> <var>" . $array["sequestration_type"]."</var></p>" ;
		echo " <p><b>Last validation time:</b> " . $array["last_validation_ts"] ."</var><p>" ;
		echo " <p><b>Validator 1:</b> <var>" . $array["validator_1"] ."</var> </p>" ;
		echo " <p><b>Validator 2:</b> <var>" . $array["validator_2"] ."</var> </p>" ;
		echo " <p><b>Validator 3:</b> <var>" . $array["validator_3"] ."</var> </p>" ;
		echo " <p><b>Validation score avg:</b> <var>" . $array["validation_score_avg"] ."</var></p>" ;
		echo " <p><b>Last ownership change:</b> <var>" . $array["last_ownership_change"] ."</var></p>" ;
		echo " <p><b>Final validation score:</b> <var>" . $array["final_validation_score"] ."</var></p>" ;
		echo " <p><b>Authenticated weight:</b> <var> " . $array["weight_authenticated_kg"] ."#8202;kg</var></p>" ;
		echo " <p><b>Country:</b> " . $array["location_country"] ."</p>" ;
		echo " <p><b>Region:</b> <var>" . $array["location_region"] ."</var></p>" ;
		echo " <p><b>City:</b> <var>" . $array["location_city"] ."</var></p>" ;
		echo " <p><b>Full location:</b> <var>" . $array["location_full"] ."</var></p>" ;
		echo " <p><b>Community:</b> <var>" . $array["community_name"] ."</var></p>" ;
		echo " <p><b>Brand:</b> <var>" . $array["brand_name"] ."</var></p>" ;
		echo " <p><b>Bottom colour:</b>" . $array["bottom_colour"] ."</var></p>" ;
		echo " <p><b>Plastic from:</b>" . $array["plastic_from"] ."</var></p>" ;
	
		echo " <p><b>Brikcoin value:</b> <var>" . $array["ecobrick_dec_brk_val"] ."&#8202;ß</var></p></br>" ;


		
		
    }
} else {
    echo "No results found for selected ecobrick serial number";
}
$conn->close();

?>
	
	<br><br>

</div>

</div>
</body>
</html>
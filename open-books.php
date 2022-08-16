<!--PAGE LANGUAGE:  ENGLISH-->  

<!-- Translators:   Look for untranslated text inside HTML tags.  In other words <a tag>any content text between markers like these</a tag>.  Don't worry about translating these comments.  Be sure NOT to translate english page names, file names, div names, div class names, or html syntax.-->


<?php require_once ("includes/open-books-inc.php");?>

<!--Once translation is completed, you can remove the line below to take the translation notice off the page-->
<?php require_once ("under-construction.php");?>

<!--TOP PAGE BANNER-->

<div class="splash-content-block">
	<div class="splash-text-box">
		<div class="splash-heading"><br>GEA Open Books</div>
		<div class="splash-sub">A full disclosure of the Global Ecobrick Alliances Not-for-profit Financial Accounting</div>
	</div>
	<div class="splash-image"><img src="https://www.ecobricks.org/pngs/openbooks.png" style="width: 80%;"></div>	
</div>
<div id="splash-bar"></div>



<!-- PAGE CONTENT-->


<?php include 'ecobricks_env.php';?> 

<a name="top"></a>
<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

			<div class="lead-page-paragraph">
				
				<br><p>As a for-Earth enterprise we account and disclose all of our financials as we strive to meet out our not-for-profit and net-green mandates.</p>
			</div>

			<div class="page-paragraph">
				  
				<p>The <a href="about">Global Ecobrick Alliance</a>  is an Earth Enterprise that follows the principles of <a href="https://earthen.io/imagine">ecological contribution</a>.  This means that we manage our financial and ecological give and take so that are of benefit socially and ecological.  It also means, that for full transparency and awareness, our financial accounting is disclosed for public review and audit.</p>
				
				<p>All our revenue and expenses, including income summaries can be found here in our in-house developed, Open Books system. Transactions that occur through our <a href="/gobrik">GoBrik platform</a> appear here automatically, while other GEA transactions are added monthly by our team.</p>
				
				<p>⛓️ <b>Brikcoin transactions are recorded separately on the <a href="brikchain.php">Brikchain Explorer.</a></b></p>

				<b><p>🍃 Our ecological accounting is disclosed separately in our <a href="regenreports">annual regenerative reports</a>.</b></p>

			</div> 
		</div>
		

		<div class="side">

			<div id="side-module-desktop-only">
				<img src="webp/gea-logo-400px.webp" width="90%" alt="Following the Earth's example through eco bricking">
				<br><h4>Earth Enterprise</h4>
				<h5>The Global Ecobrick Alliance is an Earth enterprise dedicated to accelerating plastic transition.  We account equally for our financial and ecological give and take to meet our not-for-profit and for-Earth mandate.</h5><br>
				<a class="module-btn" href="/about">About the GEA</a>
                <br>
			</div>   
         
		</div>
	</div>


	<div class="page-paragraph">	
		<h4>2022 Revenue & Expenses Summary</h4>
		
		<h6>A summary of this year's GEA accounting.</h6>
		<div class="ecobrick-data"><p>🟢 Data live & current</p></div>

	</div>

    <div class="overflow">
		
	<?php

	$sql = "SELECT * FROM vw_exp_by_year_category  WHERE year = 2020 ORDER BY expense_category;";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	
		echo'<table id="brikchain" class="display"><tr><th>Year</th><th>Category</th><th>Transactions</th><th>Year Total</th></tr>';
	
	// output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr><td>".$row["year"]."</td><td>".$row["expense_category"]."</td><td>".$row["no_of_transactions"]."</td><td>".$row["total_usd"]."&#8202;$ USD</td></tr>";
		}
		echo "</table>";
	} else {
		echo "0 results";
	}
	
	?>


<?php

$sql = "SELECT * FROM vw_tot_rev_by_year WHERE year = 2020;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

	echo'<table id="brikchain" class="display"><tr><th>Year</th><th>Transactions</th><th>Revenues</th></tr>';

// output data of each row
while($row = $result->fetch_assoc()) {
	
	echo "<tr><td>".$row["year"]."</td><td>".$row["total_no_of_rev_transactions"]."</td><td>".$row["total_rev_usd_amount"]."&#8202;$ USD</td></tr>";
	}
	echo "</table>";
} else {
	echo "0 results";
}

?>

	<br><br>

	<?php

	$sql = "SELECT * FROM vw_rev_by_year_category  WHERE year = 2020 ORDER BY revenue_category ;";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	
		echo'<table id="brikchain" class="display"><tr><th>Year</th><th>Category</th><th>Transactions</th><th>Year Total</th></tr>';
	
	// output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr><td>".$row["year"]."</td><td>".$row["revenue_category"]."</td><td>".$row["no_of_transactions"]."</td><td>".$row["total_usd"]."&#8202;$ USD</td></tr>";
		}
		echo "</table>";
	} else {
		echo "0 results";
	}
	
	?>
	</div>
	<br><br><br><br> 


	<div class="reg-content-block" id="block1">
				
		<div class="opener-header">
			
			<div class="opener-header-text">
				<h4>Live Revenues</h4>
				<h5>A full listing of the GEA's ongoing revenue transactions.</h5>
			</div>
			<button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1">+</button>

		</div>

		<div id="preclosed1">

			<div class="page-paragraph">	
				<h6>All the GEA Revenue transactions</h6>
				<div class="ecobrick-data"><p>🟢 Data live & current</p></div>
			</div>
			<div class="overflow">
				<table id="revenues" class="display" style="width:100%">
					<thead>
						<tr>
							<th>ID</th>
							<th>Date</th>
							<th>Sender</th>
							<th>Receiver</th>
							<th>Tran Name</th>
							<th>Amount USD</th>
							<th>Final Amt</th>
							<th>Type</th>
						</tr>
					</thead>
					<tfoot>
						<tr> 
							<th>ID</th>
							<th>Date</th>
							<th>Sender</th>
							<th>Receiver</th>
							<th>Tran Name</th>
							<th>Amount USD</th>
							<th>Final Amt</th>
							<th>Type</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>


	<div class="reg-content-block" id="block2">
				
				<div class="opener-header">
					
					<div class="opener-header-text">
						<h4>Live Expenses</h4>
						<h5>A full listing of the GEA's ongoing expense transactions.</h5>
					</div>
					<button onclick="preclosed2()" class="block-toggle" id="block-toggle-show2">+</button>
		
				</div>
		
				<div id="preclosed2">
		
					<div class="page-paragraph">	
						<h6>All the GEA Expense transactions</h6>
						<div class="ecobrick-data"><p>🟢 Data live & current</p></div>
					</div>
					<div class="overflow">
						<table id="expenses" class="display" style="width:100%">
							<thead>
								<tr>
									<th>ID</th>
									<th>Date</th>
									<th>Sender</th>
									<th>Receiver</th>
									<th>Tran Name</th>
									<th>Amount USD</th>
									<th>Final Amt</th>
									<th>Type</th>
								</tr>
							</thead>
							<tfoot>
								<tr> 
									<th>ID</th>
									<th>Date</th>
									<th>Sender</th>
									<th>Receiver</th>
									<th>Tran Name</th>
									<th>Amount USD</th>
									<th>Final Amt</th>
									<th>Type</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>




	

	<br><br>
		
	<div class="page-paragraph">
			<h4>Yearly Totals</h4>
			<div class="ecobrick-data"><p>🟠 Data not yet live: Migrating...</p></div>
			<h6>Total expenses and revenues by year.</h6>
			
	</div>		
			
	<div class="overflow">

		
	<?php

	$sql = "SELECT * FROM vw_tot_exp_by_year Order by `year` DESC;";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	
		echo'<table id="brikchain" class="display"><tr><th>Year</th><th>Transactions</th><th>Expenses</th></tr>';
	
	// output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr><td>".$row["year"]."</td><td>".$row["total_no_of_exp_transactions"]."</td><td>".$row["total_exp_usd_amount"]."&#8202;$ USD</td></tr>";
		}
		echo "</table>";
	} else {
		echo "0 results";
	}

	?>

<br><br>

<?php

$sql = "SELECT * FROM vw_tot_rev_by_year Order by `year` DESC;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

	echo'<table id="brikchain" class="display"><tr><th>Year</th><th>Transactions</th><th>Revenues</th></tr>';

// output data of each row
while($row = $result->fetch_assoc()) {
	
	echo "<tr><td>".$row["year"]."</td><td>".$row["total_no_of_rev_transactions"]."</td><td>".$row["total_rev_usd_amount"]."&#8202;$ USD</td></tr>";
	}
	echo "</table>";
} else {
	echo "0 results";
}

?>

<?php $conn->close(); ?>
	</div>
	<br><br> 



</DIV>






	<!--FOOTER STARTS HERE-->

	<?php require_once ("footers/footer-$lang.php");?>

	<!--FOOTER ENDS HERE-->

	<!-- CUSTOM PAGE SCRIPTS-->

<!-- This script is for pages that use the accordion content system-->
<script src="accordion-scripts.js" defer></script>


</div>
</body>
</html>


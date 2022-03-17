<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">


<HEAD>

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="logos/gea-horizontal.svg">
<link rel="preload" as="image" href="svgs/gray-to-green-catalyst-banner3.svg">
<link rel="preload" as="image" href="svgs/gray-to-green-catalyst-banner3.svg">
<link rel="preload" as="image" href="icons/balance-glow-500px.webp">




_END;?>

<?php require_once ("meta/2021-regenreport-$lang.php");?>

<?php require_once ("header.php");?>


<!-- CUSTOM PAGE SCRIPTS-->
<script src="accordion-scripts.js"></script> 


<STYLE>


	
@media screen and (max-width: 700px) { 
	.splash-content-block {
		text-align: left;
		height: 70vh;
		padding: 50px 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;
		
		background: url(webp/gray-to-green-catalyst-banner2.webp) bottom;
		background-color: #5A8D37;
    	background-repeat: no-repeat;
		background-size: cover;
		margin-top: 45px;
		width: 100%;
		display: flex;
 		box-sizing: border-box;
		flex-direction: column;
	position: relative;

	}
}


@media screen and (min-width: 700px) { 
	.splash-content-block {
		text-align: left;
		height: 60vh;
		padding: 50px 7% 50px 7%;
		z-index: 5;
		position: relative;
		
		background: url(svgs/gray-to-green-catalyst-banner3.svg) bottom;
		background-color: #4f8a28ff;
    	background-repeat: no-repeat;
		margin: -3px 0 -20px 0;
		display: flex;
 		 flex-wrap: wrap;
 		 box-sizing: border-box;
		  flex-direction: row;
		  width: 100%;
		  background-size: cover;

	position: relative;


}
}


@media screen and (min-width: 700px) { 
.splash-image {
  z-index: 5;
  position: relative;
  text-align: center;
  flex: 35%;
	padding: 0px;
	box-sizing: border-box;
	margin-top: 0px;
}
}


@media screen and (min-width: 700px) { 
.splash-box {
  z-index: 5;
  position: relative;
  flex: 65%;
	padding: 10px 30px 0px 0px;
	box-sizing: border-box;
	text-align: right;
}
}



@media screen and (max-width: 700px) { 
.splash-image {
  z-index: 5;
  position: relative;
  text-align: left;
  flex: 25%;
  width: 250px;
	padding: 0px;
	box-sizing: border-box;
	margin: 0px 0px 0px 10px;
}
}



@media screen and (max-width: 700px) { 
.splash-box {
	position: relative;
  flex: 100%;
	padding: 10px 10px 0px 0px;
	box-sizing: border-box;
	text-align: right;
}
}



.splash-heading { 
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: white;
  font-weight: 500;
  text-shadow: 0 0 8px black;

}

@media screen and (max-width: 700px) {
	.splash-heading {
      font-size: 2.0em;
      line-height: 1.1;
      margin: 10px 0;
  }
}

@media screen and (min-width: 700px) {
	.splash-heading {
      font-size: 3.2em;
      line-height: 1.3;
      margin: 40px 0 10px;
  }
}


.splash-sub {
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: #D5D5D5;
  /*text-shadow: 0px 0px 10px #fff;*/
  margin: 15px 0;
}

@media screen and (max-width: 700px) {
	.splash-sub {
		font-size: 1.1em;
		line-height: 1.3;
		font-weight: 400;
  }
}
@media screen and (min-width: 700px) {
	.splash-sub {
		font-size: 2em;
		line-height: 1.3;
		font-weight: 400;
  }
}


#splash-bar {
	margin-top: -50px;
	width: 100%;
	background-color: #4f8a28ff;
	height:100px;	
	box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
	position: relative;
	z-index: 0;
	-webkit-transform: skewY(-3deg);
  -moz-transform: skewY(-3deg);
  -ms-transform: skewY(-3deg);
  -o-transform: skewY(-3deg);
  transform: skewY(-3deg);

	margin-bottom: 40px;

}


	
</style>	

</head>
							  
											  
<BODY id="full-page">

	<div id="load-background">

<!-- MENU BAR-->	
         
		<?php include 'menu-bar.php';?>

<!--PAGE BANNER-->

	
<div class="splash-content-block">
	<div class="splash-box">
		<div class="splash-heading">The Global Ecobrick Alliance 2021 Renerativity Report</div>
	<div class="splash-sub">Published March 17th 2022</div>
	</div>
	<div class="splash-image"><img src="icons/balance-glow-500px.webp" style="width: 80%;"></div>	
</div>
<div id="splash-bar"></div>
<!--<div id="header-bar2"></div>-->


<!-- PAGE CONTENT-->

<a name="top"></a>

<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

			<div class="lead-page-paragraph">
				<p>Over the last year, the GEA's UK and Indonesian household bases increased their spacial support of biodiversity by 32% (268 m2) while hosting 152 species. We directly removed 1,472 kg of plastic through our trainer ecobricking.  We also removed 4,448kg of CO2 from the biosphere through our trees, carbon offsetting and ecobricking carbon equivalency.  </p>
			</div>
			
			<div class="row">
				<div class="main2">
					<div class="page-paragraph">
					<p>Our 2021 Ecological Accounting of our enterprise's Plastic, Carbon and Biodiversity impacts is now published and publicly available.</p>
						<p>Persuant to our mandate as an Earth Enterprise, we track and disclose our ecological impacts to ensure that our net impact, across the board, is green.  To do so, we use a <a href="catalyst.php"> Catalyst account to track our plastic, and we manually track our carbon and biodiveristy and yearly publish our full Regen Report here on ecobricks.org.</p>
							
						<p><a href="https://files.mandala.team/s/CDK3qx2o8Pnxy5i" target="_blank">Download our official 2021 Regenerativity Report (PDF 1.2MB).</i><p> 

						<!--<p>You can also find a summary of the main categories of our reporting below.</p>-->

					</div>	
				</div>

				<div class="side2">
					<br><a href="https://files.mandala.team/s/CDK3qx2o8Pnxy5i" target="_blank"><img src="webp/2020-regen-report.webp" width="100%"></a>
				</div>

			
			</div>
		

			<!--
			<div class="reg-content-block" id="block1">
				
				<div class="opener-header">
					
					<div class="opener-header-text">
						<h4>Plastic</h4>
						<h5>1943% Zero Waste in 2021</h5>
					</div>
					

					<button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1">+</button>
					
				</div>

				<div id="preclosed1">
					<br>
					<div class="row">
						<div class="main2">
							<p>Today its clear that the vast majority of the plastic we use eventually makes its way to the biosphere.  When your enterprise consumes or produces plastic, we call this a "grey plastic impact".  Tracking your company's production and consumption of plastic is the first step in reducing one's grey impact on the environment.</p>
						</div>
						<div class="side2"><img src="webp/balancing-green.webp" width="80%">
						</div>
					</div>

					<div class="row2">
						<div class="main3">
						<br><p><b>Get started in 15 minutes</b></p>
					
						</div>
						<div class="side3"><img src="webp/balancing-green.webp" width="125px">
						</div>
					</div>
					<p>The Catalyst program gets you going in no time using a process of estimation refinement. As an owner, manager of president of your enterprise you can estimate better than anyone else how much plastic you are currently using.</p>
					<p>
					Month by month, you and your team will receive Plastic Transition reports.  These reports will remind you and your team to step up their reduction and subtraction initiatives.  As you put attention on your plastic you can refine your estimates.</p>
					<br><p><b>Detailed Tracking</b></p>
				<p>Once your enterprise has established systems for detailed plastic tracking and weighing, you can enabled month by month data entry.  Managers can observe the enterprise's plastic transition charted over the year. </p>
				<br><p><b>Reaching out to communities</b></p>
				<p>By catalyzing ecobrick workshops in communities, you can gain credit for the ecobricks made by participants.  Over the course of the year, our system can track in real time the social increase of your green impact.</p>
						
				</div>	
			</div>

			<div class="reg-content-block" id="block2">
				<div class="opener-header">
					<div class="opener-header-text">
						<h4>Biodiversity</h4>
						<h5>We increased our support of biodiversity by 29% in 2021.</h5><br>
					</div>
					<button onclick="preclosed2()" class="block-toggle" id="block-toggle-show2">+</button>
				</div>

				<div id="preclosed2">
					<div class="row">
						<div class="main2">
						<p>You're passionate about the planet and so is your enterprise.  So let the world know through open accounting and transparency!  Plastic transition disclosure allows you to showcase your efforts, lead by example and inspire others.</p>
						</div>
						<div class="side2"><img src="https://s3-eu-west-1.amazonaws.com/assets.knack-eu.com/assets/5b8c28c2a1152679c209ce0c/60c86875d6dbb7001ef8ed79/original/disclosedial.png" width="175px">
						</div>
					</div>

					

					<div class="row">
						<div class="main2">
						<p><b>Automated Reporting</b></p>
						<p>The Catalyst program allows you to create yearly plastic impact reports that summarize your grey and green impacts.  As a third-party host, we certify your AES plastic impacts so that you can confidently share them with your customers, clients and in government sustainability reviews.</p>
						</div>
						<div class="side2"><br><img src="https://www.ecobricks.org/wp-content/uploads/2021/08/Regen-Report-2021-GEA.webp" width="175px">
						</div>
					</div>



					

					<div class="row2">
						<div class="main3">
						<br><p><b>Public Disclosure</b></p>
						
						</div>
						<div class="side3"><img src="https://s3-eu-west-1.amazonaws.com/assets.knack-eu.com/assets/5b8c28c2a1152679c209ce0c/60c86875d6dbb7001ef8ed79/original/disclosedial.png" width="150px">
						</div>
					</div>
					
					<p>Showcase your plastic transition with our GEA certified banners on your website, products and marketing.  Link to your reports and showcase your plastic transition.  Like this...</p><br>
					<p>
					<img src="https://www.ecobricks.org/banners/gea-disclose-300px.png" width="250px"></p>
				</div>
			</div>

			<div class="reg-content-block" id="block3">

				<div class="opener-header">
					
					<div class="opener-header-text">
					<h4>Carbon</h4>
					<h5>We were 100% Net zero..</h5>
					<br>
					</div>

					<button onclick="preclosed3()" class="block-toggle" id="block-toggle-show3">+</button>
				</div>

				<div id="preclosed3">
					<br>
					<div class="row">
						<div class="main2">
						<p>But best of all, the Catalyst program allows you to take decisive and quantifiable action to green your enterprise's impact.  You can use our system to log your ecobricks, buy plastic offsets and mobilize communities.  The green impact of all these goes to the credit of your enterprise.</p>
						</div>
						<div class="side2"><img src="https://www.ecobricks.org/wp-content/uploads/2020/09/AES-Plastic-Logo-full-vector-shadowed.svg" width="100%">
						</div>
					</div>

					<div class="row2">
						<div class="main3">
						<p>There are three types of green impacts that can be certified as AES credit.</p>
						</div>
						<div class="side3"><img src="https://www.ecobricks.org/wp-content/uploads/2020/09/AES-Plastic-Logo-full-vector-shadowed.svg" width="120px">
						</div>
					</div>
			

					<p><b>Ecobricking</b></p>
						<p>Ecobricks logged by the staff in your company, then which are successfully authenticated on the Brikcoin blockchain, qualify as AES plastic.</p><br>
					<p><b>Plastic Offsetting</b></p>
					<p>Your enterprise can purchase plastic offset credit on the GoBrik platform using Brikcoins or cash, to credit you year end reporting.</p><br>
					<p><b>Community Catalyzation</b></p>
					<p>By sponsoring workshops in your community, the ecobricks of new ecobrickers are credited to your enterprise.  By sponsoring GEA training of trainers workshops, the future trainers in these events, their ecobrickers and the communities they start, generate AES credits for your enterprise.
					</p>
					<h6><a href="/trainings">Learn more about GEA Trainings</a></h6><br>
				</div>
			</div>



			<div class="reg-content-block" id="block4">

				<div class="opener-header">
					
					<div class="opener-header-text">
					<h4>See How We do It.</h4>
					<h5>How the GEA and other Enterprises Use the Program</h5>
					<br>
					</div>

					<button onclick="preclosed4()" class="block-toggle" id="block-toggle-show4">+</button>
				</div>

				<div id="preclosed4">
					
					<p><b>The Global Ecobrick Alliance</b> </p>
					<p>We're an enterprise too!  And despite all our best efforts, we consume and produce plastic in our operations.  We use the catalyst program to track, disclose and accelerate our plastic impacts.  In the footer of our site and apps, we link to our public, past year reporting-- just click on this banner to see how we're doing:</p><br><p>
					
						<a href="https://www.gobrik.com/#my-catalyst/2021-report/5e1f513586a7fe0015e77628/" target="_blank"><img src="banners/762-disclose-light-350px.png"></a>
					<p style="font-size: 0.85em; margin-top:8px;">This will open our report in a new window.</a></p>
					<br>
					<p><b>Ubud Raw Chocoloate</b> </p>
					<p>These guys make amazing chocoloate in Bali, Indonesia.  They are also super keen to transition from plastic! They use the Catalyst program to monitor their monthly consumption of plastic from their suppliers, to the plastic they use for their product packaging.  In 2021 they attained 105% zero-waste!</p><br><p>
					
						<a href="https://www.gobrik.com/#my-catalyst/2021-report/5b8c2b0922ddfb2591bf67be/" target="_blank"><img src="banners/100-disclose-light-350px.png"></a>
					<p style="font-size: 0.85em; margin-top:8px;">This will open our report in a new window.</a></p>
					<br>
			
				</div>
			</div>

			
	


		<div class="page-paragraph">
			<br><br>
			<h2>Get Started!</h2>
			<p>Setup your Catalyst account today.  Use your GoBrik account to get started.  If you don't have a GoBrik account yet, be sure to register first for a free personal account.</p>
			<br><br>
			<a class="action-btn" href="https://gobrik.com/#catalyze" target="_blank">🚀 Launch Catalyst Setup</a>
			<p style="font-size: 0.85em; margin-top:20px;">We'll send you over to GoBrik in a new window.</a></p>
		</div>
		
		</div>
-->

		<div class="page-paragraph">
			<hr><br>
				<h4>Past Years</h4>
				
				<p>Access our reports from previous years:</p>
				
				<ul>
					<li><a href="https://files.mandala.team/s/4Fmz3GX8Xr7JLaB" target="_blank">2020 Regen Report</a></li>
					<li>2019 Regen Report (reformat pending)</li>
				</ul>
				<br>
				
				
				
			<br>
				<h4>Learn More</h4>
				
				<p>Learn more about the concepts underlying regenerative reporting.
				</p>
				<ul>
					<li><a href="aes">AES Plastic Offsetting</a></li>
					<li><a href="brikcoins">Brikcoin Manual Blockchain</a></li>
					<li><a href="sequest">Plastic Sequestration</a></li>
					<li><a href="mandalas">Leading by Example</a></li>
					<li><a href="principles">Regenerative Principles</a></li>
					<li><a href="https://medium.com/earthen">The Earthen Ethics Theory of Green</a></li>
					
				</ul>

				<h4></a>
				 with our catalyst program<a href="catalyst"></a></li>
		</div>
		<div class="page-paragraph-reg">
                 
                 <div class="row">
                
                      <div class="main2">
                         <h4>Do your own Regen Reporting</h4>
                        
                         <p>Our Catalyst Program for keen green enterprises enables you to generate ecological impacts for your company or project.</p><br>
                        
                    
                    </div></p>

                    <div class="side2">
                        <br><img src="webp/catalyst-logo.webp" width="100%" alt="eco brick road into the distance" loading="lazy" alt="eco brik are a form of sequestering plastic safely through time.">
                    </div>
                </div>
				<a class="action-btn" href="catalyst.php" target="_blank">🚀 Catalyst Program</a>
			<p style="font-size: 0.85em; margin-top:20px;">Learn more about our free program and platform.</a></p>
	</div>

		



	


		<div class="side">


			
		

	
			<div id="side-module-desktop-mobile">
				<img src="webp/gea-logo-400px.webp" width="90%">
				<h4>Global Ecobrick Alliance</h4>
				<h5>The GEA is dedicated to accelerating plastic transition.  We preside over the GoBrik app and the Brikcoin blockchain.</h5><br>
				<a class="module-btn" href="about">About Us</a>
			</div>

			<div id="side-module-desktop-mobile">
				<img src="webp/for-earth500px.webp" width="80%">
				<h4>For-Earth Enterprise</h4>
				<h5>By discolosing our carbon, plastic and biodiversity impacts and by ensuring that they are net-green, the GEA commits to for-Earth Enterprise</h5><br>
				<a class="module-btn" href="about">About Us</a>
			</div>

			<div id="side-module-desktop-mobile">
				<img src="pngs/catalyst-logo-500px.png" width="80%">
				<h4>Generate Your Regen Report!</h4>
				<h5>Our Catalyst Program for keen green enterprises allows you to generate automatic and certificed regenerative reports.</h5><br>
				<a class="module-btn" href="catalyst">🚀 Learn More</a>
			</div>

		

		</div>

	</div>
</div>





	<!--FOOTER STARTS HERE-->


	<?php include 'footer.php'; ?>


	<!--FOOTER ENDS HERE-->

	<!-- Localise translation script-->

<script src="https://global.localizecdn.com/localize.js"></script>
<script>!function(a){if(!a.Localize){a.Localize={};for(var e=["translate","untranslate","phrase","initialize","translatePage","setLanguage","getLanguage","getSourceLanguage","detectLanguage","getAvailableLanguages","untranslatePage","bootstrap","prefetch","on","off","hideWidget","showWidget"],t=0;t<e.length;t++)a.Localize[e[t]]=function(){}}}(window);</script>

<script>
  Localize.initialize({
    key: '911e632bfc957',
    rememberLanguage: true,
  });
</script>

</div>
</body>
</html>


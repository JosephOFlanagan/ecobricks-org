<!--Content Page template: v.1.0.0-->

<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">

_END;?>

<HEAD> 
 
<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="https://ecobricks.org/logos/gea-horizontal.svg">



<!--This loads CSS specific to this page
<link rel="stylesheet" type="text/css" href="http://ecobricks.org/css/what.css?v1.1">-->

<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("meta/featured-$lang.php");?>

<?php require_once ("header.php");?>

<script>
	$(window).on('load', function(){
  // Please run it with window.onload, not with document.ready
  initSmoothScrolling('.block','smoothscroll');
});

function initSmoothScrolling(container,animation){
 /*
	* @param {String} container Class or ID of the animation container
	* @param {String} animation Name of the animation, e.g. smoothscroll
	*/
	var sliderWidth = 0;	
	var animationWidth = 0;	
	var sliderHeight = $('>div>div:first-of-type',container).outerHeight(false);

	$('>div>div', container).each(function(){				
		animationWidth += $(this).outerWidth(false);		
	});
	
	// detect number of visible slides
	var slidesVisible = $(container).width() / $('>div>div:first-of-type',container).outerWidth(false);	
	slidesVisible = Math.ceil(slidesVisible);

  // count slides to determine animation speed
	var slidesNumber = $('>div>div', container).length;
	var speed = slidesNumber*2;
	
// append the tail	
	$('>div>div',container).slice(0,slidesVisible).clone().appendTo($('>div',container));	

	// Detect the slider width with appended tail
	$('>div>div', container).each(function(){
		sliderWidth += $(this).outerWidth(false);
	});

	// set slider dimensions
	$('>div',container).css({'width':sliderWidth,'height':sliderHeight});
  
// Insert styles to html
	$("<style type='text/css'>@keyframes "+animation+" { 0% { margin-left: 0px; } 100% { margin-left: -"+animationWidth+"px; } } "+$('>div>div:first-of-type',container).selector+" { -webkit-animation: "+animation+" "+speed+"s linear infinite; -moz-animation: "+animation+" "+speed+"s linear infinite; -ms-animation: "+animation+" "+speed+"s linear infinite; -o-animation: "+animation+" "+speed+"s linear infinite; animation: "+animation+" "+speed+"s linear infinite; }</style>").appendTo("head");	

	// restart the animation (e.g. for safari & ie)	
	var cl = $(container).attr("class");
	$(container).removeClass(cl).animate({'nothing':null}, 1, function () {
		$(this).addClass(cl);
	});
}

</script>


<STYLE>


.block {
  overflow: hidden;
  width: 800px;
  margin: 50px auto;
  background: #fff;
}
.animation {
  width: auto;
  height: 100px;
  font-size: 0px;
}
.animation div {
  display: inline-block;
  width: auto;
  float: none;
  padding: 0 10px;
}



/* FEATURED ECOBRICKS GALLERY FORMATING */

.flex-container {
  display: flex;
  flex-wrap: wrap;
  background-color: #DFDFDF;
  margin-top: -8px;
}


@media screen and (min-width: 700px) { 

	.flex-container > .gal-photo {
		background-color: #DFDFDF;
		margin: 2px;
		padding: 2px;
		max-height: 200px;
		overflow: hidden;
		text-align: center;
	}

	.photo-box {
		max-height: 225px;
		overflow: hidden;
		/*background: grey;*/
	}

	.gal-photo img {
		max-height: 200px;
		height: 200px;
	}

	/*
	.gal-photo-text {
		background-color: #DFDFDF;
		margin: 2px;
		text-align: center;
		padding: 8px;
		width: 205px;
		max-width:205px;
		overflow: hidden;
			margin-bottom: 0px;
	}*/

	.gal-photo p {
		font-size: 0.9em;
	}

	.photo-box-end {

		height: 200px;
		width: 150px;
		overflow: hidden;
		background: grey;
		line-height: 92px;
		color: #dfdfdf;
		text-align: center;
		font-size: 2.5em;
		padding: 2px;
		text-decoration: none;
		animation: blinker 1.5s cubic-bezier(0,.43,1,.64) infinite;}

}

@media screen and (max-width: 700px) { 

	.flex-container > .gal-photo {
		background-color: #DFDFDF;
		margin: 0px;
		padding: 2px;
		height: 90px;

		overflow: hidden;
	}

	.photo-box {
		max-height: 90px;

		overflow: hidden;
		background: grey;
	}

	.gal-photo img {
		height: 90px;
		display: block;
		margin: auto;

	}

	.photo-box-end {
		max-height: 90px;
		width: 30px;
	
		overflow: hidden;
		background: grey;
		line-height: 75px;
		color: #dfdfdf;
		text-align: center;
		font-size: 2em;
		padding: none;
		text-decoration: none;
		animation: blinker 1.5s cubic-bezier(0,.43,1,.64) infinite;}
	
}



.photo-box-end a {
	color: #dfdfdf;
	text-decoration: none;}



@media screen and (min-width: 769px) { 
  #feed-note {
    padding: 30px 20px 20px 20px;
    background-color: #FDE21F;
    font-family: Mulish;
    font-size: 0.9em;
    line-height: 1.5;
    font-weight: 400;
    text-align: left;
    border-radius: 12px;
    margin-top: -30px;
    width: 18%;
    position: absolute;
    top: 110px;
    z-index: 6;
    right: 30px;
    box-shadow: 0 5px 5px rgba(85, 84, 84, 0.4);
  }
      }

 @media screen and (max-width: 768px) { 
        #feed-note {
			padding: 15px 10px 15px 15px;
			background-color: #FDE21F;
			font-family: Mulish;
			font-size: 0.7em;
			line-height: 1.1;
			font-weight: 400;
			text-align: left;
			border-radius: 8px;
			margin-top: -30px;
			width: 60%;
			position: absolute;
			top: 110px;
			z-index: 6;
			right: 10px;
			box-shadow: 0 4px 4px rgba(85, 84, 84, 0.4);
        }
        }

.feed-live p {
  font-size: .9em;
  font-family: courier new,monospace !important;
  color: #222;
  line-height: 1.3;
  margin-top: 5px;
  font-weight: 300;

}


@media screen and (max-width: 700px) { 
	.splash-content-block {
		text-align: center;
		min-height: 67vh;
		z-index: 5;
		position: relative;   
        background-color: #DFDFDF;
		display: flex;
 		flex-wrap: wrap;
 		box-sizing: border-box;
		flex-direction: row;
		width: 120%;
  		margin-right: -5%;
  		margin-left: -5%;
		margin-top: -3px;
		margin-bottom: -20px;
		overflow: hidden;
		/*box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
		margin-bottom: 40px;
		padding-bottom: 15px;*/
	}

}


@media screen and (min-width: 700px) { 
	.splash-content-block {		
		text-align: center;
		min-height: 67vh;
		z-index: 5;
		position: relative;   
        background-color: grey;
		display: flex;
 		flex-wrap: wrap;
 		box-sizing: border-box;
		flex-direction: row;
		width: 120%;
  		margin-right: -5%;
  		margin-left: -5%;
		margin-top: 0px;
		overflow: hidden;
		/*box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
		margin-bottom: 40px;
		padding-bottom: 15px;*/

	}
} 


#splash-bar {
	margin-top: -50px;
	width: 100%;
	
	height:80px;	
	
	position: relative;
	z-index: 0;

box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
    background-color: #DFDFDF;

	-webkit-transform: skewY(-3deg);
  -moz-transform: skewY(-3deg);
  -ms-transform: skewY(-3deg);
  -o-transform: skewY(-3deg);
  transform: skewY(-3deg);
	margin-bottom: 40px;

}

hr {border: gray;
border-style: dashed;
border-width: 1px;
margin-top: 31px;
margin-bottom: 31px;}
	
</style>	

</head>
							  
											  
<BODY id="full-page">

	<div id="load-background">
        
	<!-- This loads the page's language specific menu -->

    <?php require_once ("menus/menu-$lang.php");?>

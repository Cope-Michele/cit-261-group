<!DOCTYPE HTML>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Team 5">
  <link rel="stylesheet" type="text/css" href="assets/normalize.css">
  <script src="modernizer.js"></script> <!-- for browser compatibility checks NOTE: does not fill in the gaps. see youtube "How to use modernizer - SIMPLIFIED" -->
  <link rel="stylesheet" type="text/css" href="assets/style.css">
  <script>
  	//Location for JavaScript - app modififcations
  	
  	//Save to localStorage
  	function SaveItem(){
  		
  		doShowAll();	
  	}
  	//Remove from localStorage
  	function RemoveItem(){
  		
  		doShowAll();	
  	}
  	//clear localStorage
  	function ClearAll(){
  		localStorage.clear();
  		doShowAll();
  	}
  	//display localStorage
  	function doShowAll(){
  		if (CheckBrowser()){
  			//display localStorage
  		}	
  	}
  	//Checks to see if browser is compatable to run localStorage
  	function CheckBrowser() {
	    if ('localStorage' in window && window['localStorage'] !== null) {
        	return true;
    	    } else {
        	return false;
    	    }
	}
  	//Any btn's need to be added under function removeMobileOnClick
  	function removeMobileOnclick() {
           if(isMobile()) {
                document.getElementById('btnSave').onclick = '';
           }
        }
        //Checks if user is on mobile device and runs different script
        function isMobile() {
           if (navigator.userAgent.match(/Android/i)
                    || navigator.userAgent.match(/iPhone/i)
                    || navigator.userAgent.match(/iPad/i)
                    || navigator.userAgent.match(/iPod/i)
                    || navigator.userAgent.match(/BlackBerry/i)
                    || navigator.userAgent.match(/Windows Phone/i)
                    || navigator.userAgent.match(/Opera Mini/i)
                    || navigator.userAgent.match(/IEMobile/i)
                    ) {
                return true;
            }
        }
        //window.addEventListener('load', removeMobileOnclick);
        window.onload = function(){
            removeMobileOnclick();
        }
  </script>
  <title>Flash Cards</title>
</head>
<body onload=""> <!-- onload for JavaScript -->
 <?php include '/moduled/header.php'; ?> <!-- see header.php for code -->
	<div class="content">
		<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
		  <div class="flipper">
		    <div class="frontIndiana">
		      <span class="name"><span class="small">What is the capital of </span>Indiana?</span>
		    </div><!-- front -->
		    <div class="back">
		      <div class="back-logo"></div>
		      <div class="back-title">Indianapolis</div>
		      <p><i>Santa Claus, Indiana, receives hundreds of thousands of letters addressed to the Christmas legend every year—each of which is responded to individually.</i></p>
		    </div><!--back-->
		  </div><!--flipper-->
		</div><!--flip-container--><br>
		
		<button type="submit">Next</button><p>button will show next card</p>
	</div><!--content-->
	<div class="content">
		<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
		  <div class="flipper">
		    <div class="frontCalifornia">
		      <span class="name"><span class="small">What is the capital of </span>California?</span>
		    </div><!-- front -->
		    <div class="back">
		      <div class="back-logo">
		      </div>
		      <div class="back-title">Sanfrancisco
		      </div>
		      <p><i>San Francisco's population grew 180 times during the 7 year gold rush.<br> From 200 to over 36,000</i></p>
		    </div><!--back-->
		  </div><!--flipper-->
		</div><!--flip-container-->
	</div><!-- content -->
 <?php include '/moduled/footer.php'; ?> <!-- see footer.php for code -->

</body>
</html>

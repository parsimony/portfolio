<style>
.component * {
-moz-box-sizing: border-box;
box-sizing: border-box;
margin: 0;
padding: 0;
list-style: none;
position: relative;
}
.component li{list-style: none;}

.component > h2 {
	position: absolute;
	overflow: hidden;
	width: 100%;
	text-align: center;
	text-transform: uppercase;
	white-space: nowrap;
	font-weight: 300;
	font-style: italic;
	font-size: 12em;
	opacity: 0.1;
	cursor: default;
}

.cn-button {
top: 100%;
margin-top: -2.25em;
padding-top: 0em;
font-weight: 700;
text-transform: uppercase;
-webkit-backface-visibility: hidden;
}

.cn-wrapper {
	position: absolute;
	top: 100%;
	left: 50%;
	z-index: 10;
	margin-top: -13em;
	margin-left: -13.5em;
	width: 27em;
	height: 27em;
	border-radius: 50%;
	background: transparent;
	opacity: 0;
	-webkit-transition: all .3s ease 0.3s;
	-moz-transition: all .3s ease 0.3s;
	transition: all .3s ease 0.3s;
	-webkit-transform: scale(0.1);
	-ms-transform: scale(0.1);
	-moz-transform: scale(0.1);
	transform: scale(0.1);
	pointer-events: none;
	overflow: hidden;
}
	
.cn-wrapper:after{
  content:".";
  display:block;
  font-size:2em;
  width:6.2em;
  height:6.2em;
  position: absolute;
  left: 50%;
  margin-left: -3.1em;
  top:50%;
  margin-top: -3.1em;
  border-radius: 50%;
  z-index:10;
  color: transparent;
}

.opened-nav {
	border-radius: 50%;
	opacity: 1;
	-webkit-transition: all .3s ease;
	-moz-transition: all .3s ease;
	transition: all .3s ease;
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);
	pointer-events: auto;
}

.cn-wrapper li {
	position: absolute;
	top: 50%;
	left: 50%;
	overflow: hidden;
	margin-top: -1.3em;
	margin-left: -10em;
	width: 10em;
	height: 10em;
	font-size: 1.5em;
	-webkit-transition: all .3s ease;
	-moz-transition: all .3s ease;
	transition: all .3s ease;
	-webkit-transform: rotate(76deg) skew(60deg);
	-moz-transform: rotate(76deg) skew(60deg);
	-ms-transform: rotate(76deg) skew(60deg);
	transform: rotate(76deg) skew(60deg);
	-webkit-transform-origin: 100% 100%;
	-moz-transform-origin: 100% 100%;
	transform-origin: 100% 100%;
	pointer-events: none;
}
	
.cn-wrapper li a {
	position: absolute;
	right: -7.25em;
	bottom: -7.25em;
	display: block;
	width: 14.5em;
	height: 14.5em;
	border-radius: 50%;
	color: #fff;
	text-align: center;
	text-decoration: none;
	font-size: 1.2em;
	line-height: 2;
	-webkit-transform: skew(-60deg) rotate(-75deg) scale(1);
	-moz-transform: skew(-60deg) rotate(-75deg) scale(1);
	-ms-transform: skew(-60deg) rotate(-75deg) scale(1);
	transform: skew(-60deg) rotate(-75deg) scale(1);
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	pointer-events: auto;
}

.cn-wrapper li:first-child a span {
	margin-left : 25px;
}

.cn-wrapper li a span {
position: relative;
top: -30px;
display: block;
}

.opened-nav li {
	-webkit-transition: all .3s ease .3s;
	-moz-transition: all .3s ease .3s;
	transition: all .3s ease .3s;
}

.opened-nav li:first-child {
	-webkit-transform: rotate(-20deg) skew(60deg);
	-moz-transform: rotate(-20deg) skew(60deg);
	-ms-transform: rotate(-20deg) skew(60deg);
	transform: rotate(-20deg) skew(60deg);
}

.opened-nav li:nth-child(2) {
	-webkit-transform: rotate(12deg) skew(60deg);
	-moz-transform: rotate(12deg) skew(60deg);
	-ms-transform: rotate(12deg) skew(60deg);
	transform: rotate(12deg) skew(60deg);
}

.opened-nav  li:nth-child(3) {
	-webkit-transform: rotate(44deg) skew(60deg);
	-moz-transform: rotate(44deg) skew(60deg);
	-ms-transform: rotate(44deg) skew(60deg);
	transform: rotate(44deg) skew(60deg);
}

.opened-nav li:nth-child(4) {
	-webkit-transform: rotate(76deg) skew(60deg);
	-moz-transform: rotate(76deg) skew(60deg);
	-ms-transform: rotate(76deg) skew(60deg);
	transform: rotate(76deg) skew(60deg);
}

.opened-nav li:nth-child(5) {
	-webkit-transform: rotate(108deg) skew(60deg);
	-moz-transform: rotate(108deg) skew(60deg);
	-ms-transform: rotate(108deg) skew(60deg);
	transform: rotate(108deg) skew(60deg);
}

.opened-nav li:nth-child(6) {
	-webkit-transform: rotate(140deg) skew(60deg);
	-moz-transform: rotate(140deg) skew(60deg);
	-ms-transform: rotate(140deg) skew(60deg);
	transform: rotate(140deg) skew(60deg);
}

.opened-nav li:nth-child(7) {
	-webkit-transform: rotate(172deg) skew(60deg);
	-moz-transform: rotate(172deg) skew(60deg);
	-ms-transform: rotate(172deg) skew(60deg);
	transform: rotate(172deg) skew(60deg);
}

.no-csstransforms .cn-wrapper {
	overflow: hidden;
	margin: 10em auto;
	padding: .5em;
	text-align: center;
}

.no-csstransforms .cn-wrapper ul {
	display: inline-block;
}

.no-csstransforms .cn-wrapper li {
	float: left;
	width: 5em;
	height: 5em;
	background-color: #fff;
	text-align: center;
	font-size: 1em;
	line-height: 5em;
}

.no-csstransforms .cn-wrapper li a {
	display: block;
	width: 100%;
	height: 100%;
	color: inherit;
	text-decoration: none;
}

.no-csstransforms .cn-wrapper li a:hover,
.no-csstransforms .cn-wrapper li a:active,
.no-csstransforms .cn-wrapper li a:focus {
	background-color: #f8f8f8;
}

.no-csstransforms .cn-wrapper li a.active {
	background-color: #6F325C !important;
	color: #fff !important;
}

.no-csstransforms .cn-button {
	display: none;
}

@media only screen and (max-width: 620px) {
	.no-csstransforms li {
		width: 4em;
		height: 4em;
		line-height: 4em;
	}
}

@media only screen and (max-width: 500px) {
	.no-ccstransforms .cn-wrapper {
		padding: .5em;
	}

	.no-csstransforms .cn-wrapper li {
		width: 4em;
		height: 4em;
		font-size: .9em;
		line-height: 4em;
	}
}

@media only screen and (max-width: 480px) {
	.cn-wrapper {
		font-size: .68em;
	}

	.cn-button {
		font-size: 1em;
	}
}

@media only screen and (max-width:420px) {
	.no-csstransforms .cn-wrapper li {
		width: 100%;
		height: 3em;
		line-height: 3em;
	}
	}
	
	
.cn-wrapper {
  font-size: 1em;
  width: 26em;
  height: 26em;
  overflow: hidden;
  position: fixed;
  z-index: 10;
  bottom: -13em;
  left: 50%;
  border-radius: 50%;
  margin-left: -13em;
  -webkit-transform: scale(0.1);
  -ms-transform: scale(0.1);
  -moz-transform: scale(0.1);
  transform: scale(0.1);
  pointer-events: none;
  -webkit-transition: all .3s ease;
  -moz-transition: all .3s ease;
  transition: all .3s ease;
}

.opened-nav {
  border-radius: 50%;
  pointer-events: auto;
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.cn-overlay {
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.6);
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all .3s ease;
  -moz-transition: all .3s ease;
  transition: all .3s ease;
  z-index: 2;
}

.cn-overlay.on-overlay {
  visibility: visible;
  opacity: 1;
}

.cn-button {
  border: none;
  background: none;
  color: #f06060;
  text-align: center;
  font-size: 1.8em;
  padding-bottom: 1em;
  height: 3.5em;
  width: 3.5em;
  background-color: #fff;
  position: fixed;
  left: 50%;
  margin-left: -1.75em;
  bottom: -1.75em;
  border-radius: 50%;
  cursor: pointer;
  z-index: 11;
}

.cn-button:hover,
.cn-button:active,
.cn-button:focus {
	color: #d30000;
}

.cn-wrapper li {
  position: absolute;
  font-size: 1.5em;
  width: 10em;
  height: 10em;
  -webkit-transform-origin: 100% 100%;
  -moz-transform-origin: 100% 100%;
  -ms-transform-origin: 100% 100%;
  transform-origin: 100% 100%;
  overflow: hidden;
  left: 50%;
  top: 50%;
  margin-top: -1.3em;
  margin-left: -10em;
  -webkit-transition: border .3s ease;
  -moz-transition: border .3s ease;
  transition: border .3s ease;
}
	
.cn-wrapper li a {
  display: block;
  font-size: 1.18em;
  height: 14.5em;
  width: 14.5em;
  position: absolute;
  bottom: -7.25em;
  right: -7.25em;
  border-radius: 50%;
  text-decoration: none;
  color: #fff;
  padding-top: 1.8em;
  text-align: center;
  -webkit-transform: skew(-50deg) rotate(-70deg) scale(1);
  -ms-transform: skew(-50deg) rotate(-70deg) scale(1);
  -moz-transform: skew(-50deg) rotate(-70deg) scale(1);
  transform: skew(-50deg) rotate(-70deg) scale(1);
  -webkit-backface-visibility: hidden;
	-webkit-transition: opacity 0.3s, color 0.3s;
  -moz-transition: opacity 0.3s, color 0.3s;
  transition: opacity 0.3s, color 0.3s;
}

.cn-wrapper li a span {
font-size: 18px;
opacity: 0.7;
}
	
/* for a central angle x, the list items must be skewed by 90-x degrees
in our case x=40deg so skew angle is 50deg
items should be rotated by x, minus (sum of angles - 180)2s (for this demo) */
.cn-wrapper li:last-child a span {
margin-right: 25px;
}
.cn-wrapper li:first-child {
  -webkit-transform: rotate(-10deg) skew(50deg);
  -ms-transform: rotate(-10deg) skew(50deg);
  -moz-transform: rotate(-10deg) skew(50deg);
  transform: rotate(-10deg) skew(50deg);
}

.cn-wrapper li:nth-child(2) {
  -webkit-transform: rotate(30deg) skew(50deg);
  -ms-transform: rotate(30deg) skew(50deg);
  -moz-transform: rotate(30deg) skew(50deg);
  transform: rotate(30deg) skew(50deg);
}

.cn-wrapper li:nth-child(3) {
  -webkit-transform: rotate(70deg) skew(50deg);
  -ms-transform: rotate(70deg) skew(50deg);
  -moz-transform: rotate(70deg) skew(50deg);
  transform: rotate(70deg) skew(50deg)
}

.cn-wrapper li:nth-child(4) {
  -webkit-transform: rotate(110deg) skew(50deg);
  -ms-transform: rotate(110deg) skew(50deg);
  -moz-transform: rotate(110deg) skew(50deg);
  transform: rotate(110deg) skew(50deg);
}

.cn-wrapper li:nth-child(5) {
  -webkit-transform: rotate(150deg) skew(50deg);
  -ms-transform: rotate(150deg) skew(50deg);
  -moz-transform: rotate(150deg) skew(50deg);
  transform: rotate(150deg) skew(50deg);
}

.cn-wrapper li:nth-child(odd) a {
background-color: #fc6666;
}

.cn-wrapper li:nth-child(even) a {
background-color: #fb3232;
}

/* active style */
.cn-wrapper li.active a {
background-color: #fb1919;
}


/* hover style */
.cn-wrapper li:not(.active) a:hover,
.cn-wrapper li:not(.active) a:active,
.cn-wrapper li:not(.active) a:focus {
background-color: #fb0000;
}

/* fallback */
.no-csstransforms .cn-button {
  display: none;
}

.no-csstransforms .cn-wrapper li {
  position: static;
  float: left;
  font-size: 1em;
  height: 5em;
  width: 5em;
  background-color: #eee;
  text-align: center;
  line-height: 5em
}

.no-csstransforms .cn-wrapper li a {
  display: block;
  width: 100%;
  height: 100%;
  text-decoration: none;
  color: inherit;
  font-size: 1.3em;
  border-right: 1px solid #ddd
}

.no-csstransforms .cn-wrapper li a:last-child {
  border: none
}

.no-csstransforms .cn-wrapper li a:hover,
.no-csstransforms .cn-wrapper li a:active,
.no-csstransforms .cn-wrapper li a:focus {
  background-color: white
}

.no-csstransforms .cn-wrapper li a.active {
  background-color: #6F325C !important;
  color: #fff !important
}

.no-csstransforms .cn-wrapper {
  font-size: 1em;
  height: 5em;
  width: 25.15em;
  bottom: 0;
  margin-left: -12.5em;
  overflow: hidden;
  position: fixed;
  z-index: 10;
  left: 50%;
  border: 1px solid #ddd
}

@media screen and (max-width:480px) {
  .cn-wrapper {
    font-size: .68em
  }

  .cn-button {
    font-size: 1em
  }

  .cn-wrapper li {
    font-size: 1.52em
  }
}

@media screen and (max-width:320px) {
  .no-csstransforms .cn-wrapper {
    width: 15.15px;
    margin-left: -7.5em
  }

  .no-csstransforms .cn-wrapper li {
    height: 3em;
    width: 3em
  }

	
</style>
<div class="component">
	<!-- Start Nav Structure -->
	<button class="cn-button" id="cn-button">+</button>
	<div class="cn-wrapper" id="cn-wrapper">
		<ul>
			<li><a href="<?php echo BASE_PATH ; ?>"><span>Index</span></a></li>
			<li><a href="<?php echo BASE_PATH.'about' ?>"><span>About</span></a></li>
			<li><a href="<?php echo BASE_PATH.'contact' ; ?>"><span>Contact</span></a></li>
			<li><a href="<?php echo BASE_PATH.'careers' ; ?>"><span>Careers</span></a></li>	
			<li><a href="<?php echo BASE_PATH.'legal-notice' ; ?>"><span>Notice</span></a></li>
		</ul>
	</div>
	<div id="cn-overlay" class="cn-overlay"></div>
	<!-- End Nav Structure -->
</div>
<script>
(function(){
	var button = document.getElementById('cn-button'),
    wrapper = document.getElementById('cn-wrapper'),
    overlay = document.getElementById('cn-overlay');

	//open and close menu when the button is clicked
	var open = false;
	button.addEventListener('click', handler, false);
	wrapper.addEventListener('click', cnhandle, false);

	function cnhandle(e){
		e.stopPropagation();
	}

	function handler(e){
		if (!e) var e = window.event;
	 	e.stopPropagation();//so that it doesn't trigger click event on document

	  	if(!open){
	    	openNav();
	  	}
	 	else{
	    	closeNav();
	  	}
	}
	function openNav(){
		open = true;
	    button.innerHTML = "-";
	    overlay.classList.add("on-overlay");
		wrapper.classList.add("opened-nav");
	}
	function closeNav(){
		open = false;
		button.innerHTML = "+";
		overlay.classList.remove("on-overlay");
		wrapper.classList.remove("opened-nav");
	}
	document.addEventListener('click', closeNav);
})();
</script>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HOMEPAGE</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	font-family: 'Varela Round', sans-serif;
}
.form-control {
	box-shadow: none;		
	font-weight: normal;
	font-size: 13px;
}
.navbar {
	background: #fff;
	padding-left: 16px;
	padding-right: 16px;
	border-bottom: 1px solid #dfe3e8;
	border-radius: 0;
}

.navbar .navbar-brand {
	padding-left: 0;
	font-size: 20px;
	padding-right: 50px;
}
.navbar .navbar-brand b {
	color: #15B7B9;		
}
.navbar .form-inline {
	display: inline-block;
}
.navbar a {
	color: #888;
	font-size: 15px;
}
.search-box {
	position: relative;
}	
.search-box input {
	padding-right: 35px;
	border-color: #dfe3e8;
	border-radius: 4px !important;
	box-shadow: none
}
.search-box .input-group-text {
	min-width: 35px;
	border: none;
	background: transparent;
	position: absolute;
	right: 0;
	z-index: 9;
	padding: 7px;
	height: 100%;
}
.search-box i {
	color: #a0a5b1;
	font-size: 19px;
}
.navbar .sign-up-btn {
	min-width: 110px;
	max-height: 36px;
}
.navbar .dropdown-menu {
	color: #999;
	font-weight: normal;
	border-radius: 1px;
	border-color: #e5e5e5;
	box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar a, .navbar a:active {
	color: #888;
	padding: 8px 20px;
	background: transparent;
	line-height: normal;
}
.navbar .navbar-form {
	border: none;
}
.navbar .action-form {
	width: 280px;
	padding: 20px;
	left: auto;
	right: 0;
	font-size: 14px;
}
.navbar .action-form a {		
	color: #33cabb;
	padding: 0 !important;
	font-size: 14px;
}
.navbar .action-form .hint-text {
    text-align: center;
    margin-bottom: 15px;
    font-size: 13px;
}
.navbar .btn-primary, .navbar .btn-primary:active {
	color: #fff;
	background: #FF0921 !important;
	border: none;
}	
.navbar .btn-primary:hover, .navbar .btn-primary:focus {		
	color: #fff;
	background: #F57170 !important;
}


.or-seperator {
	margin-top: 32px;
	text-align: center;
	border-top: 1px solid #e0e0e0;
}
.or-seperator b {
	color: #666;
	padding: 0 8px;
	width: 30px;
	height: 30px;
	font-size: 13px;
	text-align: center;
	line-height: 26px;
	background: #fff;
	display: inline-block;
	border: 1px solid #e0e0e0;
	border-radius: 50%;
	position: relative;
	top: -15px;
	z-index: 1;
}
.navbar .action-buttons .dropdown-toggle::after {
	display: none;
}
.form-check-label input {
	position: relative;
	top: 1px;
}
@media (min-width: 1200px){
	.form-inline .input-group {
		width: 300px;
		margin-left: 30px;
	}
}
@media (max-width: 768px){
	.navbar .dropdown-menu.action-form {
		width: 100%;
		padding: 10px 15px;
		background: transparent;
		border: none;
	}
	.navbar .form-inline {
		display: block;
	}
	.navbar .input-group {
		width: 100%;
	}
}


 
ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

figure {
  margin: 0;
}

figcaption {
  font-style: italic;
  font-size: 0.8em;
  color: grey;
  line-height: 1.4;
}

.grid {
  display: grid;
  grid-auto-flow: column;
  grid-auto-columns: 100%;
  grid-gap: 1em;
  overflow-x: scroll;
  -webkit-overflow-scrolling: touch;
  padding: 2em 1em;
  background: white;
}
@media all and (min-width: 600px) {
  .grid {
    grid-auto-flow: initial;
    grid-template-columns: repeat(auto-fit, minmax(auto, 20em));
    -webkit-box-pack: center;
            justify-content: center;
  }
}
.grid__figure {
  display: grid;
  grid-template-rows: 15em 1fr;
  grid-gap: 1em;
}
.grid__figure img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}






img:hover {
  -webkit-transform: scaleX(-1);
  transform: scaleX(-1);
}




.snow {
  background: url("http://asteria.hud.ac.uk/placements/Seasons_Greetings/images/snowfall.gif");
  background-size: cover;
 margin-top:-100px;

}

span .btn {
 opacity:0.8;
  margin-top: -20%;
  
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 8px 34px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.span .btn:hover {
  background-color: black;
}

svg {
	margin-top: -100px;
	max-height: 10vh;
	float:right;
}
</style>
<script>
// Prevent dropdown menu from closing when click inside the form
$(document).on("click", ".action-buttons .dropdown-menu", function(e){
	e.stopPropagation();
});
</script>
</head> 
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a href=" " class="navbar-brand">Work<b>Space </b></a>  		
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<div class="navbar-nav">
			<a href=" " class="nav-item nav-link"> <i class="fa fa-home" aria-hidden="true"></i> Home</a>
			<a href="#" class="nav-item nav-link"> <i class="fa fa-plus" aria-hidden="true"></i> Post Ads</a>			
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle"> <i class="fa fa-list-ul" aria-hidden="true"></i> Services</a>
				<div class="dropdown-menu">					
					<a href="#" class="dropdown-item">Offers</a>
					<a href="#" class="dropdown-item">Request</a>
					<a href="#" class="dropdown-item">Ads</a>
					
                </div>
            </div>
			
			<a href="#" class="nav-item nav-link"> <i class="fa fa-comments-o" aria-hidden="true"></i> Blog</a>
			<a href="#" class="nav-item nav-link"> <i class="fa fa-envelope-o" aria-hidden="true"></i> Contact</a>
		</div>
		<form class="navbar-form form-inline">
			<div class="input-group search-box">								
				<input type="text" id="search" class="form-control" placeholder="Search here...">
				<div class="input-group-append">
					<span class="input-group-text">
						<i class="material-icons">&#xE8B6;</i>
					</span>
				</div>
			</div>
		</form>
		<div class="navbar-nav ml-auto action-buttons">
			<div class="nav-item dropdown">
				<a href="new-login"  class="nav-link dropdown-toggle mr-4">Login</a>
               
			</div>
			<div class="nav-item dropdown">
				<a href="new-register"  class="btn btn-primary dropdown-toggle sign-up-btn">Sign up</a>
                
			</div>
        </div>
	</div>
</nav>


<div class="toto" >
      <div class="snow" >
	  <img src="http://files.catbox.moe/fddd73.png" id="noel" style="height:200px;  margin-left:20px; margin-top:70px;">
	  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 228.86 302.71"><defs><style>.cls-1{fill:#006837;}.cls-2{fill:#c1272d;}.cls-3{fill:#b78d5c;}</style></defs>
			<title>Calque 1</title><g id="Layer_2" data-name="Layer 2"><g id="Calque_1" data-name="Calque 1">
			<g id="gifts">
	<g id="gift-yellow">
		<polygon id="gift-yelow-side-shadow" fill="#FFC84D" points="196,345 176,339 176,319 196,323 		"/>
		<polygon id="gift-yellow-side" fill="#FFDF9F" points="216,339 196,345 196,323 216,319 		"/>
		<polygon id="gift-yellow-top" fill="#FFDF9F" points="174,315 196,311 218,315 196,319 		"/>
		<polygon id="gift-yellow-top-shadow" fill="#FFC84D" points="174,315 174,319 196,323 218,319 218,315 196,319 		"/>
		<path id="gift-yellow-bow" fill="#D10F50" d="M188.7,313.5c-0.6-0.4-1.2-0.9-1.6-1.5s-0.5-1.5-0.2-2.1c0.4-0.8,1.3-1.2,2.2-1.3
			c1.8-0.2,3.8,0.6,4.7,2.2c0.8,1.2,0.9,2.7,1,4.1c-0.1-1.4-0.1-2.9,0.3-4.3s1.4-2.7,2.8-3.1c0.5-0.1,1-0.2,1.5-0.2
			c1.2,0,2.5,0.3,3,1.4c0.2,0.5,0.2,1.2,0,1.7C201.1,316.4,193,316.2,188.7,313.5z"/>
	</g>
	
			<path class="cls-1" d="M225.69,269.62c-5.5-7.4-14.7-8.9-23.3-8.8-9.6.2-19.2,2.2-28.6,4.2-12.5,2.6-25.1,4.9-37.7,6.9-3.1-1.8-6.2-3.5-9.3-5.3-5.8-3.3-11.5-6.8-17.2-10.4,2.4-1,4.8-2,7.1-3.1,11.4-5.2,22.3-11.5,33.2-17.8,2.7,1,5.3,1.9,8,2.8,12.8,4.2,26.8,8,40.4,5.7,11.5-2,23.4-9,25.4-21.5,1.9-11.7-8.3-21.6-19.5-22.6-12.6-1.1-25,5.9-35.8,11.4-7.9,4.1-15.7,8.5-23.5,12.9-2.1-.8-4.2-1.7-6.2-2.6a240.94,240.94,0,0,1-38.2-20.3c-1.7-1.1-3.5-2.3-5.2-3.5,16.4-7.4,31-18.3,46.2-28,.2.1.5.1.7.2,12.6,3.3,26.3,4.3,38.9.4,10.5-3.2,25.5-13.3,15-25.2-8.4-9.6-22.4-4.9-32.4-1.1-9.8,3.7-19,9-27.9,14.6-13.8-4.4-26.9-11.9-39.7-18.4,9.3-3.9,18.4-8.5,27.4-13.2,4.5-2.3,8.9-4.7,13.4-7,11.8,4.2,25.4,6.2,37.1.4,5.1-2.5,9.9-6.6,10.9-12.5,1.1-6.2-3.3-12.2-9-14.3s-11.9.5-17.3,2.7c-6.3,2.5-12.6,5.3-18.7,8.4-2.6,1.3-5.3,2.6-7.9,4-3.2-1.3-6.4-2.8-9.5-4.3-9.2-4.4-18.3-8.9-27.4-13.4,9.6-3.9,18-10.1,26.1-16.6a52,52,0,0,0,18.1,5c10.4.9,23.5-1.1,29.8-10.6,6-9.1,1.7-21.6-7.9-26.3-11.4-5.5-23.1,2.8-32,9.4-4.4,3.2-8.7,6.8-13,10.3a9.13,9.13,0,0,0-1.3-.8,43.75,43.75,0,0,0,11.3-18.2c4.1-12.4,7.7-34.1-6.5-41.6A13.59,13.59,0,0,0,101.59,7c-3.5,6-2.3,13.1.2,19.3,2.1,5.4,12.5,7.1,9.4-.7-1.7-4.3-1.4-9.8,2.1-13,1.3-1.2,2.6-1.4,4.1-2.1.7-.3.5-1.2.8.3a38.57,38.57,0,0,1,.4,9c-.5,11.9-3.8,24.1-12.8,32.5-.1.1-.3.2-.4.4a68.53,68.53,0,0,0-6.6-6.6c-4.8-4.1-11.1-7.4-17.7-6.3a11.25,11.25,0,0,0-9.7,12c.7,14.3,16.7,20.7,28.9,17.6a34.47,34.47,0,0,0,7.7-3.1,14.31,14.31,0,0,0,1.5,1.1,115.43,115.43,0,0,1-15.4,10.4,66.93,66.93,0,0,1-14.2,5.7c-8.8-4.3-21.8-10.2-29.5-1.3-2.8,3.3,2,7.8,4.7,9.1,8.9,4.3,18.7,5,28.1,3.2,3.8,1.9,7.5,3.8,11.3,5.7,9.1,4.5,18.2,9.4,27.5,13.7-6,3.2-12,6.3-18.1,9.3a240.59,240.59,0,0,1-22.7,10c-3.5-1.5-7-2.8-10.7-4-6-1.9-12.8-4.1-19.1-3.2-5.4.8-9.9,4.4-10.7,10-.8,6.2,3.8,11.8,9.3,13.9s12.3.4,18-.8a132.3,132.3,0,0,0,17.4-4.9c13.9,6.2,27.1,14.3,41.2,20.3-13.9,9.2-28,18.8-43.4,25.1a71.4,71.4,0,0,0-18.6-9.1,65,65,0,0,0-21.1-2.5c-5.5.1-12.7.2-17,4.2s-3.4,10.4-.4,15c3.8,5.8,10.2,8.7,16.9,9.5a98.89,98.89,0,0,0,42.8-5.1c.1,0,.3-.1.4-.1,10.4,6.9,20.6,13.9,31.7,19.8,5.7,3,11.4,5.8,17.3,8.4-12.4,7-24.9,13.6-38.3,18.7l-8.4-5.7c-11.3-7.8-22.7-15.8-36.2-19.4C40.49,220.22,25,222,20,235c-4.6,11.9,5.3,22.7,15.4,27.5,11.8,5.6,26.6,5.5,39.2,3.8a136.18,136.18,0,0,0,25.2-6.1c3.2,2.1,6.4,4.2,9.6,6.2,4.4,2.7,8.8,5.4,13.3,7.9-9.6,1.5-19.2,2.9-28.8,4.3-20.2,3-42.1,7-62.2,1.3A39.79,39.79,0,0,1,9.29,264c-1.4-2.1-5-4.5-7.7-3.3s-1.3,4.8-.1,6.6c12.8,18.6,34.1,25.4,55.8,25.7,24.2.4,48.8-5,72.5-8.9,2.7-.5,5.4-.9,8.2-1.3,3.5,1.9,7.1,3.8,10.7,5.6,12.9,6.6,26.4,13.3,41.1,14.2,10.9.7,20.9-2.9,29.7-9.2C227.79,287.32,232.29,278.52,225.69,269.62ZM91,59.82c-4.1.4-10.3-.3-8.2-6,2-5.5,8.5-3.8,11.8-.8,1.5,1.4,3,2.9,4.4,4.4A26.27,26.27,0,0,1,91,59.82Zm39.4,7.1c5.8-4.6,11.6-9.3,18.2-12.8,2.8-1.5,6.1-3,9.4-2.9,2.8,0,3.2.9,3.1,3.8-.1,13.9-20.6,15.3-30.4,13.3a8.33,8.33,0,0,1-1.5-.4A4,4,0,0,0,130.39,66.92Zm29.3,42.1c2.8-1.2,5.6-2.4,8.5-3.5a34.3,34.3,0,0,1,4.5-1.6c.3-.1.7-.1,1.1-.2a4.08,4.08,0,0,0-.2.7,9.92,9.92,0,0,1-2.6,3.2,22.61,22.61,0,0,1-8.1,4.3,33.61,33.61,0,0,1-12.9,1.5C153.09,111.92,156.39,110.42,159.69,109Zm29.5,40.6c0-.2.1-.3,0,0Zm-5.5.7a15.79,15.79,0,0,1,5.3-.3,1.38,1.38,0,0,0-.3.4c-.3.5-.5,1.1-.9,1.7a13.39,13.39,0,0,1-3.8,3.7c-5.2,3.6-11.7,5.5-17.9,6.3a63.62,63.62,0,0,1-12.3.3C163.19,157.12,173.19,152.22,183.69,150.32Zm-117.3-12.4c-3.2.8-6.5,1.5-9.8,2-1.3.2-2.6.4-3.9.5h-.6a3.67,3.67,0,0,1,.6-1.4,6.83,6.83,0,0,1,2.7-2c3.3-1.3,7-.4,10.3.4a5.73,5.73,0,0,1,1.4.4A2,2,0,0,0,66.39,137.92Zm-27.3,58.3c-2.2-.3-5-.4-4.4-3.1s4.3-3.7,6.7-4.1a55,55,0,0,1,31.4,4.3,96.4,96.4,0,0,1-11.2,2.4C54.29,196.82,46.39,197.32,39.09,196.22Zm154.7,16.7c4.8-1.9,10.6-3.7,15.8-2.4,4.6,1.1,4,5.8,2.5,9.4-5,12.6-20.8,15.2-32.7,13.9a99.3,99.3,0,0,1-19.3-4.2C171,223.42,182.09,217.52,193.79,212.92Zm-149,42.6c-4.4-.7-10.4-2-13.4-5.7-3.6-4.4-.2-10.7,3.5-13.8,10.9-9.2,27.8-.8,37.9,5.6,5.1,3.2,10,6.5,15,9.9C74,255.62,59.09,257.82,44.79,255.52Zm158.9,32.9c-12.2,6-25.2,3.5-37.3-1.4-4.8-2-9.6-4.2-14.3-6.5,6.2-1,12.3-2,18.4-3.2,8.9-1.8,17.7-3.9,26.7-5.1a70.6,70.6,0,0,1,13.8-.8,23.41,23.41,0,0,1,5.3.8c1.3.4,1.6.4,1.8.8C220.89,279.32,208,286.32,203.69,288.42Z"/><path class="cls-2" d="M92.29,111.42a10,10,0,0,0-8.7-9.9V90.82a1.3,1.3,0,1,0-2.6,0v10.7a10,10,0,0,0,1.2,19.9A10.12,10.12,0,0,0,92.29,111.42Z"/><path class="cls-2" d="M142.39,188.62v-20.9a1.3,1.3,0,1,0-2.6,0v21a9.83,9.83,0,1,0,2.6-.1Z"/><path class="cls-2" d="M95.09,216v-12.4a1.3,1.3,0,1,0-2.6,0v12.5a6.92,6.92,0,1,0,8.3,6.8A6.73,6.73,0,0,0,95.09,216Z"/><path class="cls-2" d="M137.79,91.62a6.81,6.81,0,0,0-5.8-6.8V74.62a1.3,1.3,0,0,0-2.6,0v10.2a6.93,6.93,0,1,0,8.4,6.8Z"/><path class="cls-2" d="M179.39,121.62v-6.8a1.3,1.3,0,1,0-2.6,0v6.8a6.92,6.92,0,1,0,8.3,6.8A6.71,6.71,0,0,0,179.39,121.62Z"/><path class="cls-2" d="M163.29,244.22v-8.3a1.3,1.3,0,0,0-2.6,0v8.3a10,10,0,1,0,11.5,9.9A9.88,9.88,0,0,0,163.29,244.22Z"/><path class="cls-2" d="M52.19,157.82v-10a1.3,1.3,0,0,0-2.6,0v10.1a6.92,6.92,0,1,0,8.3,6.8A6.74,6.74,0,0,0,52.19,157.82Z"/><path class="cls-3" d="M36.59,221.92l-5.5,1.4,2.4-4a1.1,1.1,0,0,0-1.9-1.1l-2.4,4-1.4-5.5a1,1,0,0,0-1.3-.8,1,1,0,0,0-.8,1.3l1.3,5.1-3.5-2.1a1.1,1.1,0,1,0-1.1,1.9l4,2.4-5.8,1.5a1.08,1.08,0,1,0,.5,2.1l5.5-1.4-2.1,3.5a1.13,1.13,0,0,0,.4,1.5.8.8,0,0,0,.8.1,1.16,1.16,0,0,0,.7-.5l2.1-3.5,1.4,5.5a1.08,1.08,0,0,0,2.1-.5l-1.5-5.8,4,2.4a.8.8,0,0,0,.8.1,1.16,1.16,0,0,0,.7-.5,1.13,1.13,0,0,0-.4-1.5l-3.5-2.1,5.1-1.3a1,1,0,0,0,.8-1.3A1.13,1.13,0,0,0,36.59,221.92Z"/><path class="cls-3" d="M173.39,167.42a1.05,1.05,0,0,0-1.3-.4l-3.8,2.1.9-3.3a.89.89,0,1,0-1.7-.5l-1,3.7-2.5-4.4a1,1,0,1,0-1.7.9l2.3,4.1-3.3-.9a.86.86,0,0,0-1.1.6.88.88,0,0,0,.1.7.68.68,0,0,0,.6.4l3.3.9-4.1,2.3a1.05,1.05,0,0,0-.4,1.3,1,1,0,0,0,1.3.4l4.4-2.5-1,3.7a.88.88,0,0,0,.1.7.68.68,0,0,0,.6.4.86.86,0,0,0,1.1-.6l.9-3.3,2.1,3.8a1,1,0,0,0,1.7-.9l-2.3-4.1,3.7,1a.89.89,0,0,0,.5-1.7l-3.7-1,4.1-2.3C173.49,168.42,173.59,167.92,173.39,167.42Z"/><path class="cls-3" d="M128.89,24.12a2.58,2.58,0,0,0-2.6-2.6h-12.1l6.7-6.6a2.55,2.55,0,0,0-3.6-3.6l-7.6,7.6.1-14a2.6,2.6,0,0,0-5.2,0V18L98,11.32a2.54,2.54,0,0,0-3.6,0,2.69,2.69,0,0,0-.8,1.8,2.41,2.41,0,0,0,.7,1.8l6.6,6.7H87.79a2.58,2.58,0,0,0-2.6,2.6,2.52,2.52,0,0,0,2.6,2.6l14,.1-7.6,7.6a2.69,2.69,0,0,0-.8,1.8,2.41,2.41,0,0,0,.7,1.8,2.54,2.54,0,0,0,3.6,0l6.7-6.6v12.1a2.6,2.6,0,0,0,5.2,0V30.52l7.6,7.6a2.55,2.55,0,1,0,3.6-3.6l-7.6-7.6h13.1A3,3,0,0,0,128.89,24.12Z"/><path class="cls-3" d="M89.39,140.22a.78.78,0,0,0-1-.3l-2.9,1.6.7-2.5a.73.73,0,0,0-1.4-.4l-.8,2.9-1.9-3.4a.74.74,0,0,0-1.3.7l1.8,3.2-2.5-.7a.72.72,0,0,0-.9.5.44.44,0,0,0,.1.5c.1.2.2.3.4.3l2.5.7-3.2,1.8a.74.74,0,1,0,.7,1.3l3.4-1.9-.8,2.9a.44.44,0,0,0,.1.5c.1.2.2.3.4.3a.72.72,0,0,0,.9-.5l.7-2.5,1.6,2.9a.74.74,0,0,0,1.3-.7l-1.7-3.1,2.9.8a.73.73,0,1,0,.4-1.4l-2.9-.8,3.2-1.8A.63.63,0,0,0,89.39,140.22Z"/><path class="cls-3" d="M157.49,282.22l-2.3-1,1.9-.8a.54.54,0,0,0-.4-1l-1.9.8,1-2.3c.1-.3,0-.5-.3-.7s-.5,0-.7.3l-.9,2.2-.7-1.7a.54.54,0,0,0-1,.4l.8,1.9-2.5-1.1c-.3-.1-.5,0-.7.3s0,.5.3.7l2.3,1-1.7.7a.52.52,0,0,0-.3.7l.3.3a.3.3,0,0,0,.4,0l1.7-.7-1,2.3c-.1.3,0,.5.3.7s.5,0,.7-.3l1.1-2.5.8,1.9.3.3a.3.3,0,0,0,.4,0,.52.52,0,0,0,.3-.7l-.7-1.7,2.2.9c.3.1.5,0,.7-.3C157.79,282.62,157.69,282.32,157.49,282.22Z"/><path class="cls-3" d="M161.39,56.12a.78.78,0,0,0,1,.3.69.69,0,0,0,.3-1l-1.8-3.2,2.9.8a.73.73,0,1,0,.4-1.4l-2.9-.8,3.2-1.8a.74.74,0,1,0-.7-1.3l-2.9,1.6.7-2.5a.73.73,0,0,0-1.4-.4l-.8,2.9-1.9-3.4a.74.74,0,0,0-1.3.7l1.8,3.2-2.5-.7a.72.72,0,0,0-.9.5.44.44,0,0,0,.1.5c.1.2.2.3.4.3l2.5.7-3.2,1.8a.74.74,0,1,0,.7,1.3l3.4-1.9-.8,2.9a.44.44,0,0,0,.1.5c.1.2.2.3.4.3a.72.72,0,0,0,.9-.5l.7-2.5Z"/><path class="cls-3" d="M138.89,228.82l-3.4.4,1.6-2a.71.71,0,0,0-1.1-.9l-1.9,2.3-.4-3.9a.71.71,0,0,0-1.4.2l.4,3.6-2-1.6a.76.76,0,0,0-1,.1c-.1.2-.2.3-.2.5a.55.55,0,0,0,.3.5l2,1.6-3.6.4a.71.71,0,0,0,.2,1.4l3.9-.4-1.9,2.3c-.1.2-.2.3-.2.5a.55.55,0,0,0,.3.5.76.76,0,0,0,1-.1l1.6-2,.4,3.4a.71.71,0,0,0,1.4-.2l-.4-3.6,2.3,1.9a.71.71,0,1,0,.9-1.1l-2.3-1.9,3.6-.4a.64.64,0,0,0,.6-.8A.68.68,0,0,0,138.89,228.82Z"/><path class="cls-3" d="M143,118.22l-4.3.7,2-2.8a.93.93,0,0,0-1.5-1.1l-2.3,3.1-.8-5a1,1,0,1,0-1.9.3l.7,4.6-2.8-2a1,1,0,0,0-1.3.2,1.85,1.85,0,0,0-.2.7.82.82,0,0,0,.4.6l2.8,2-4.6.7a1.08,1.08,0,0,0-.8,1.1c0,.5.6.8,1.1.8l5-.8-2.3,3.1a1.85,1.85,0,0,0-.2.7.82.82,0,0,0,.4.6,1,1,0,0,0,1.3-.2l2-2.8.7,4.3a1,1,0,0,0,1.9-.3l-.7-4.4,3.1,2.3a.93.93,0,1,0,1.1-1.5l-3.1-2.3,4.6-.7a1.08,1.08,0,0,0,.8-1.1A.94.94,0,0,0,143,118.22Z"/><path class="cls-3" d="M85.09,266.52l-3.2-1,2.3-1.2a.74.74,0,0,0-.7-1.3l-2.6,1.4,1.1-3.7a.73.73,0,1,0-1.4-.4l-1,3.5-1.2-2.3a.78.78,0,0,0-1-.3c-.2.1-.3.2-.3.4a.44.44,0,0,0,.1.5l1.2,2.3-3.5-1a.73.73,0,0,0-.4,1.4l3.7,1.1-2.6,1.4c-.2.1-.3.2-.3.4a.44.44,0,0,0,.1.5.78.78,0,0,0,1,.3l2.3-1.2-1,3.2a.73.73,0,0,0,1.4.4l1-3.5,1.4,2.6a.74.74,0,0,0,1.3-.7l-1.4-2.6,3.5,1a.72.72,0,0,0,.9-.5C85.89,266.82,85.49,266.62,85.09,266.52Z"/><path class="cls-3" d="M60.39,79.52l-2.3-1,1.9-.8a.54.54,0,0,0-.4-1l-1.9.8,1-2.3c.1-.3,0-.5-.3-.7s-.5,0-.7.3l-.9,2.2-.7-1.7a.54.54,0,1,0-1,.4l.8,1.9-2.5-1.1c-.3-.1-.5,0-.7.3s0,.5.3.7l2.3,1-1.7.7a.52.52,0,0,0-.3.7l.3.3a.3.3,0,0,0,.4,0l1.7-.7-1,2.3c-.1.3,0,.5.3.7s.5,0,.7-.3l1.1-2.5.8,1.9.3.3a.3.3,0,0,0,.4,0,.52.52,0,0,0,.3-.7l-.7-1.7,2.2.9c.3.1.5,0,.7-.3A.62.62,0,0,0,60.39,79.52Z"/><path class="cls-3" d="M99,60.22l-.9-2.9,2.1,1.1a.3.3,0,0,0,.4,0c.1-.1.3-.1.3-.3a.57.57,0,0,0-.2-.7l-1.8-.9,2.5-.8a.57.57,0,1,0-.3-1.1l-2.7.9,1.1-2.1a.57.57,0,0,0-.2-.7.62.62,0,0,0-.7.2L97.49,55l-.9-2.7a.57.57,0,0,0-1.1.3l.8,2.5-1.8-.9a.57.57,0,0,0-.7.2.62.62,0,0,0,.2.7l2.1,1.1-2.9.9a.57.57,0,0,0,.3,1.1l2.7-.9-.9,1.8a.57.57,0,0,0,.2.7.3.3,0,0,0,.4,0,.32.32,0,0,0,.3-.3l.9-1.8.9,2.7a.57.57,0,0,0,.7.4C98.89,60.82,99.09,60.52,99,60.22Z"/><path class="cls-3" d="M225.39,210a.57.57,0,0,0-.7-.4l-2.7.9,1.1-2.1a.51.51,0,1,0-.9-.5l-1.1,2.1-.9-2.7a.57.57,0,1,0-1.1.3l.8,2.5-1.8-.9a.51.51,0,0,0-.5.9l2.1,1.1-2.9.9a.57.57,0,0,0,.3,1.1l2.7-.9-.9,1.8a.57.57,0,0,0,.2.7.3.3,0,0,0,.4,0,.32.32,0,0,0,.3-.3l.9-1.8.9,2.7a.57.57,0,0,0,1.1-.3l-.9-2.9,2.1,1.1a.3.3,0,0,0,.4,0,.32.32,0,0,0,.3-.3.57.57,0,0,0-.2-.7l-1.8-.9,2.5-.8C225.29,210.62,225.49,210.32,225.39,210Z"/><path class="cls-3" d="M24.19,271.72l-3.4-.2,2.1-1.9a.64.64,0,0,0-.9-.9l-2.1,1.9.2-3.4a.65.65,0,0,0-1.3-.1l-.2,3.2-1.6-1.8a.64.64,0,0,0-.9.9l1.9,2.1-3.6-.2a.67.67,0,0,0-.7.6c0,.3.3.7.6.7l3.4.2-1.8,1.6a.56.56,0,0,0,0,.9.76.76,0,0,0,.5.2.55.55,0,0,0,.5-.2l1.8-1.6-.2,3.4a.65.65,0,0,0,1.3.1l.2-3.6,1.9,2.1a.76.76,0,0,0,.5.2.55.55,0,0,0,.5-.2.56.56,0,0,0,0-.9l-1.6-1.8,3.1.1a.67.67,0,0,0,.7-.6C25.09,272.22,24.59,271.82,24.19,271.72Z"/>
				<path class="cls-3" d="M215.09,260.42l-4.4.1L213,258a.92.92,0,1,0-1.3-1.3l-2.7,2.8-.1-5a.9.9,0,0,0-1.8,0l.1,4.7-2.5-2.3a.93.93,0,0,0-1.3,0,.91.91,0,0,0-.3.7.71.71,0,0,0,.3.6l2.5,2.3-4.7.1a.9.9,0,0,0,0,1.8l5-.1-2.7,2.8a.91.91,0,0,0-.3.7.71.71,0,0,0,.3.6.93.93,0,0,0,1.3,0l2.3-2.5.1,4.4a.9.9,0,1,0,1.8,0l-.1-4.7,2.8,2.7A.92.92,0,0,0,213,265l-2.8-2.7,4.7-.1a.9.9,0,0,0,.9-.9C216.09,260.82,215.69,260.42,215.09,260.42Z"/><path class="cls-3" d="M105.49,178.42l-2.1.4,1.4-2.1a.5.5,0,1,0-.8-.6l-1.3,2-.3-1.8c-.1-.3-.3-.5-.6-.4s-.5.3-.4.6l.4,2.1-2.2-1.5a.5.5,0,1,0-.6.8l2.1,1.4-1.8.3c-.3.1-.5.3-.4.6,0,.1.1.2.2.3s.2.1.4.1l1.8-.3-1.4,2.1a.5.5,0,0,0,.8.6l1.5-2.2.4,2.1c0,.1.1.2.2.3s.2.1.4.1.5-.3.4-.6l-.3-1.8,2,1.3a.5.5,0,1,0,.6-.8l-2.1-1.4,2.1-.4c.3-.1.5-.3.4-.6C106.09,178.52,105.79,178.32,105.49,178.42Z"/></g></g>
					
				</svg>
		<span style="float:right; margin-top:-150px; margin-right:100px;"><i class="fa fa-gift fa-3x" aria-hidden="true"></i></span>	
		<span style="float:right; margin-top:-120px; margin-right:170px;"><i class="fa fa-gift fa-lg" aria-hidden="true"></i></span>
		<span style="float:right; margin-top:-100px; margin-right:150px;"><i class="fa fa-gift fa-sm" aria-hidden="true"></i></span>
	
	 </div>
	  </div>
	  <ul class="grid">
	  @forelse($images as $image)
  <li>
    <figure class="grid__figure">
	<span class="b">  <img src="{{ URL::to('/') }}/images/{{ $image->picture }}" class="card-img-top" alt="Broken"  ><button class="btn" onclick="window.location.href = 'new-login' ">Reserver</button> <button class="btn" onclick="window.location.href = '{{ route('annonces.show1', $image->id)}}' ">Show</button> </span>
      
    </figure>
  </li>
  
  @empty
  <h1 class="text-danger"> there is no Annonces </h1>
  @endforelse
  </ul>

     
    </figure>
  
 <script>
 $(document).ready(init());

function init() {
  let timeline = new TimelineMax();
  timeline.from(".snow", 2, { opacity: "0", ease: Linear.easeInOut });
}


 </script>


</body>
</html>
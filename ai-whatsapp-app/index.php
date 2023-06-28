<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<title>What AI</title>
<link href="./css/global.css" rel="stylesheet"/>
<body>
	
	<!-- Top bar -->
	<div class="status-bar">
		<div>
		<img src="./img/img_avatar.png" alt="Avatar" class="avatar">
			<ul class="user-info">
				<li>AI.</li>
				<li class="online">online</li>
			</ul> 
		</div>
	</div>
	
	<!-- Main-content -->
	<div class="main-content">
		<!-- Chat boxes -->
		<ul class="chat-box" id='chat-box'>
			<li class="chat-message sender">Hello there!</li>
			<li class="chat-message receiver">Hello </li>
		</ul>
		
	<!-- Form -->
	<form id="the-form" class="compose">
		
	<div class="form-group">
		
		<input type="range" min="50" max="4080" value="250" step="50" class="token" id="maxtoken">
		 		Max Tokens <span id="token-text">250</span>
		 		<br>
		<input type="range" min="0.0" max="1" value="0" step="0.1" class="token" id="temp"> Temp: <span id="temp-text">0</span>
		<br>
		
		<select id="engine" name="">
			<option value="vinci">da vinci 04</option>
			<option value="babbage">babbage 04</option>
		</select>
	
	</div>
		 	
	<textarea id="question" class="question" autofocus>
		To your best guess and with the greatest precision,  
	</textarea>

	<button class="send"  id="add">
		<div class="circle"> &rarr; </div>
	  </button>
	  
    </form>
		
</div>
<script src="./js/script.js"> </script>
</body>
</html>
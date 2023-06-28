
	// Silder 

	var token = document.getElementById("maxtoken");
	var output = document.getElementById("token-text");
		
	var tempOutput = document.getElementById("temp-text");
		
	let temp = document.querySelector('#temp');
		
	// Update DOM / slider
	token.oninput = function() { output.textContent = token.value; }
	temp.oninput = function() { tempOutput.textContent = temp.value; }
		
	let maxtoken = document.querySelector('#maxtoken').value
		

//  Form Post 
function newMessage(e) {

	e.preventDefault();
		
	let parentElement =  document.getElementById("chat-box");
			
	var question = document.getElementById("question").value;
	
	let message = document.createElement("li");			
		message.className = 'chat-message sender';
					
		message.textContent = question

		parentElement.appendChild(message);
		// include loader ??
		// setLoading(true);
			
	var xhttp = new XMLHttpRequest();
			
	xhttp.onreadystatechange = function() {
			
	if (this.readyState == 4 && this.status == 200) {
					
		var answer = document.createElement("li");
			answer.className = 'chat-message receiver';
			
			answer.textContent = this.responseText;
					
			parentElement.appendChild(answer);
			
			// setLoading(false);
			}
				
	}
			
	xhttp.open("POST", "ai.php", true);
	xhttp.setRequestHeader("Content-type", "application/json");
	xhttp.send(JSON.stringify({ question, temp, maxtoken }));

	document.getElementById("question").value = '';			
		
	}

	let addQuestion = document.getElementById("add")
	let theForm = document.getElementById("the-form")

	addQuestion.addEventListener("click", newMessage);

	theForm.addEventListener('keyup', (e) => {

	   if (e.keyCode === 13 && e.ctrlKey) {	console.log("key 13 "), newMessage(e)	}
		
	})
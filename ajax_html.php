<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax Text</title>
</head>
<body>
	<div id="main">
		This is the original text when the page is loaded.
	</div>

	<button id="ajax-button" type="button">Update Content with Ajax</button>

	<script>
		function replaceText(){
			var target = document.getElementById("main");
			var xhr = new XMLHttpRequest();
			xhr.open('GET', 'new_content.php', true);
			xhr.onreadystatechange = function () {
				console.log('readyState: ' + xhr.readyState);
				if(xhr.readystate == 2){
					target.innerHTML = 'Loading...';
				}
				if(xhr.readyState == 4 && xhr.status == 200) {
					target.innerHTML = xhr.responseText;
				}
			}
			xhr.send();
		}

		var button = document.getElementById ("ajax-button");
		button.addEventListener("click", replaceText);
	</script>
</body>
</html>
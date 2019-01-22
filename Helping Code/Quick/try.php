<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<body>

	<div class="w3-container">
		<h2>W3.CSS Login Modal</h2>
		<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large">Login</button>

		<div id="id01" class="w3-modal">
			<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">


				<form class="w3-container" method="post">

					<div class="w3-section">
						<label><b>Write your post</b></label><br><br>
						<textarea style="max-width: 100%;height: 120px " class="w3-input w3-border " placeholder="Share Your idea"></textarea>
						<br>

						<div class="w3-row">
							<div class="w3-third">
								<select id="optionid" name="optionvalue" class="w3-select w3-border">
									<option value="" disabled selected>Choose your option</option>
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
								</select>
							</div>
							<div class="w3-third">
								<input id="inputvalue" value="Mickey" class="w3-input w3-border" type="text" >
							</div>
							<div class="w3-third">
								<a onclick="myFunctionselect()" class="w3-block w3-button w3-white w3-border">Insert option</a>
							</div>
						</div>


						<button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
						<input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Anonymous Post
					</div>
				</form>

				<div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
					<button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
					<!--<span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>-->
				</div>
<script>
		function myFunctionselect() {
			var x = document.getElementById("optionid");
			var option = document.createElement("optionvalue");
			option.text = document.getElementById("inputvalue").value;
			x.prepend(option);
		}
	</script>
			</div>
		</div>
	</div>
	
</body>

</html>
<html dir="ltr" class="gr__localhost">

<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css.css">
	<link type="text/css" rel="stylesheet" href="style.css">

	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="all" href="daterangepicker.css"/>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



	<style type="text/css">
		.demo {
			position: relative;
		}
		
		.demo i {
			position: absolute;
			bottom: 10px;
			right: 24px;
			top: auto;
			cursor: pointer;
		}
		
		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			font-family: "Oswald"
		}
		
		body {
			font-family: "Open Sans"
		}
		
		.select-boxes {
			text-align: center;
		}
		
		select {
			background-color: #F5F5F5;
			border: 1px double #15a6c7;
			color: #1d93d1;
			font-family: Georgia;
			font-weight: bold;
			font-size: 14px;
			height: 39px;
			padding: 7px 8px;
			width: 250px;
			outline: none;
			margin: 10px 0 10px 0;
		}
		
		select option {
			font-family: Georgia;
			font-size: 14px;
		}
		/* Basic reset */
		
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			/* Better text styling */
			font: bold 14px Arial, sans-serif;
		}
		/* Finally adding some IE9 fallbacks for gradients to finish things up */
		/* A nice BG gradient */
		
		html {
			height: 100%;
			background: white;
			background: radial-gradient(circle, #fff 20%, #ccc);
			background-size: cover;
		}
		/* Using box shadows to create 3D effects */
		
		#calculator {
			width: 325px;
			height: auto;
			margin: 0px auto;
			padding: 20px 20px 9px;
			background: #9dd2ea;
			background: linear-gradient(rgba(171, 183, 241, 0.87), #8bceec);
			border-radius: 20px;
			box-shadow: 0px 4px rgba(0, 104, 136, 0.53), 0px 10px 15px rgba(0, 0, 0, 0.2);
		}
		/* Top portion */
		
		.top span.clear {
			float: left;
		}
		/* Inset shadow on the screen to create indent */
		
		.top .screen {
			height: 40px;
			width: 212px;
			float: right;
			padding: 0 10px;
			background: rgba(0, 0, 0, 0.2);
			border-radius: 3px;
			box-shadow: inset 0px 4px rgba(0, 0, 0, 0.2);
			/* Typography */
			font-size: 17px;
			line-height: 40px;
			color: white;
			text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
			text-align: right;
			letter-spacing: 1px;
		}
		/* Clear floats */
		
		.keys,
		.top {
			overflow: hidden;
		}
		/* Applying same to the keys */
		
		.keys span,
		.top span.clear {
			float: left;
			position: relative;
			top: 0;
			cursor: pointer;
			width: 66px;
			height: 36px;
			background: white;
			border-radius: 3px;
			box-shadow: 0px 4px rgba(0, 0, 0, 0.2);
			margin: 0 7px 11px 0;
			color: #888;
			line-height: 36px;
			text-align: center;
			/* prevent selection of text inside keys */
			user-select: none;
			/* Smoothing out hover and active states using css3 transitions */
			transition: all 0.2s ease;
		}
		/* Remove right margins from operator keys */
		/* style different type of keys (operators/evaluate/clear) differently */
		
		.keys span.operator {
			background: #FFF0F5;
			margin-right: 0;
		}
		
		.keys span.eval {
			background: #f1ff92;
			box-shadow: 0px 4px #9da853;
			color: #888e5f;
		}
		
		.top span.clear {
			background: #ff9fa8;
			box-shadow: 0px 4px #ff7c87;
			color: white;
		}
		/* Some hover effects */
		
		.keys span:hover {
			background: #1d91d0;
			box-shadow: 0px 4px #0676b3;
			color: #f1f1f1;
		}
		
		.keys span.eval:hover {
			background: #abb850;
			box-shadow: 0px 4px #717a33;
			color: #ffffff;
		}
		
		.top span.clear:hover {
			background: #f68991;
			box-shadow: 0px 4px #d3545d;
			color: white;
		}
		/* Simulating "pressed" effect on active state of the keys by removing the box-shadow and moving the keys down a bit */
		
		.keys span:active {
			box-shadow: 0px 0px #6b54d3;
			top: 4px;
		}
		
		.keys span.eval:active {
			box-shadow: 0px 0px #717a33;
			top: 4px;
		}
		
		.top span.clear:active {
			top: 4px;
			box-shadow: 0px 0px #d3545d;
		}
	</style>




</head>

<body style="border: 2px solid black;background-image:url(bg.jpg);background-position: center;" class="w3-light-grey" data-gr-c-s-loaded="true">

	<!-- Navigation bar with social media icons -->


	<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
	<div style="background-image:url(bg.jpg);background-position: center;"class="w3-content" style="max-width:80%">

		<!-- Header -->


		<!-- Image header -->


		<!-- Grid -->
		<div  class="w3-row ">

			<!-- Blog entries -->
			<div class="w3-col l12 s12">

				<!-- Blog entry -->
				<div style="border: 1px solid black; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="w3-container w3-white w3-margin w3-padding-large">

					
					<br>
					<div class="select-boxes">

						<div class="container">
							<div class="col-lg-9">
								<br>



								<br>


								<form class="form-horizontal" action=" " method="post" id="reg_form">
									<fieldset>

										<!-- Form Name -->
										<legend>Registration form</legend>

										<!-- Text input-->

										<div class="form-group">
											<label class="col-md-4 control-label">Full Name</label>
											<div class="col-md-6  inputGroupContainer">
												<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
													<input name="first_name" pattern="^[_A-z0-9 ]{1,}$" placeholder="Only A-Z,a-z,0-9 and white space allowed" class="form-control" type="text">
												</div>
											</div>
										</div>

										<!-- Text input-->

										<div class=" form-group">
											<label class="col-md-4 control-label">Nick Name</label>
											<div class="col-md-6  inputGroupContainer">
												<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
													<input name="last_name" pattern="^[_A-z0-9]{1,}$" placeholder="Only A-Z,a-z,0-9 and white space allowed" class="form-control " type="text">
												</div>
											</div>
										</div>


										<!-- Text input-->

										<div class="form-group">
											<label class="col-md-4 control-label">Phone</label>
											<div class="col-md-6  inputGroupContainer">
												<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
													<input name="phone" pattern="^[0-9,-,+]{1,}$" placeholder="88-01672708329" class="form-control" type="text">
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-4 control-label">Birthday</label>
											<div class="col-md-6 demo">

												<input type="text" placeholder="MM/DD/YYYY" id="demo" class="form-control">
												<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
											</div>

										</div>
										<!--
										<div class="form-group">
											<label class="col-md-4 control-label">Birthday</label>
											<div class="col-md-6  inputGroupContainer">
												<div class="input-group">
													<input type="text" placeholder="MM/DD/YYYY" id="demo" class="form-control">
													<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
												</div>
											</div>
										</div>
										-->




										<!-- Text input-->

										<!-- <div class="form-group">
        <label class="col-md-4 control-label">Address</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="address" placeholder="Address" class="form-control" type="text">
          </div>
        </div>
      </div> -->

										<!-- Text input-->

										<!-- <div class="form-group">
        <label class="col-md-4 control-label">City</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="city" placeholder="city" class="form-control"  type="text">
          </div>
        </div>
      </div>
       -->
										<!--  <div class="form-group">
        <label class="col-md-4 control-label">City</label>
    <div class="radio">
      <label>
        <input type="radio" name="underwear" required>
        Boxers
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="underwear" required>
        Briefs
      </label>
    </div>
  </div> -->


										<!-- Select Basic -->

										<div class="form-group">
											<label class="col-md-4 control-label"></label>
											<div class="col-md-6 selectContainer">
												<!-- <div style="" class="input-group"> <span style="height: 2px" class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span> -->
												<select name="state" class="form-control selectpicker">
													<option value=" ">Gender</option>
													<option>Male</option>
													<option>Female</option>
													<option>Others</option>

												</select>
												<!--  </div> -->
											</div>
										</div>

										<!-- Text input-->



										<!-- Text area -->



									</fieldset>

									<fieldset>
										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label">E-Mail</label>
											<div class="col-md-6  inputGroupContainer">
												<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-link"></i></span>
													<input name="email" placeholder="E-Mail Address" class="form-control" type="text">
												</div>
											</div>
										</div>


										<div class="form-group has-feedback">
											<label for="password" class="col-md-4 control-label">
                    Password
                </label>
										





											<div class="col-md-6  inputGroupContainer">
												<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
													<input class="form-control" id="userPw" type="password" placeholder="password" name="password" data-minLength="5" data-error="some error" required/>
													<span class="glyphicon form-control-feedback"></span>
													<span class="help-block with-errors"></span>
												</div>
											</div>
										</div>

										<div class="form-group has-feedback">
											<label for="confirmPassword" class="col-md-4 control-label">
                   Confirm Password
                </label>
										





											<div class="col-md-6  inputGroupContainer">
												<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
													<input class="form-control {$borderColor}" id="userPw2" type="password" placeholder="Confirm password" name="confirmPassword" data-match="#confirmPassword" data-minLength="5" data-match-error="some error 2" required/>
													<span class="glyphicon form-control-feedback"></span>
													<span class="help-block with-errors"></span>
												</div>
											</div>
										</div>


										<!-- Button -->
										<div class="form-group">
											<div  class="col-md-11">
												<button style="width: 24%;background: #976EB5" type="submit" class="btn btn-warning">Send <span class="glyphicon glyphicon-send"></span></button>
											</div>
										</div>
									</fieldset>
								</form>
							</div>

						</div>

						<!-- PrefixFree -->







						<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
						<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
						<script type="text/javascript" src="moment.js"></script>
						<script type="text/javascript" src="daterangepicker.js"></script>

						<script type="text/javascript">
							var today = new Date();
							var dd = today.getDate();
							var mm = today.getMonth() + 1; //January is 0!

							var yyyy = today.getFullYear();
							if ( dd < 10 ) {
								dd = '0' + dd;
							}
							if ( mm < 10 ) {
								mm = '0' + mm;
							}
							var today = mm + '/' + dd + '/' + yyyy;

							$( '#demo' ).daterangepicker( {
								"singleDatePicker": true,
								"showDropdowns": true,
								"startDate": "08/20/2017",
								"endDate": "08/26/2017",
								//"maxDate": "08/30/2017"
								"maxDate": today
							}, function ( start, end, label ) {
								console.log( "New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')" );
							} );
						</script>
						<script src="js/index.js"></script>

						<script type="text/javascript">
							$( document ).ready( function () {
								$( '#reg_form' ).bootstrapValidator( {
									// To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
									feedbackIcons: {
										valid: 'glyphicon glyphicon-ok',
										invalid: 'glyphicon glyphicon-remove',
										validating: 'glyphicon glyphicon-refresh'
									},
									fields: {
										first_name: {
											validators: {
												stringLength: {
													min: 3,
													max: 35,
												},
												notEmpty: {
													message: 'Full name'
												}
											}
										},
										last_name: {
											validators: {
												stringLength: {
													min: 3,
													max: 15,
												},
												notEmpty: {
													message: 'Nick name'
												}
											}
										},

										phone: {
											validators: {
												notEmpty: {
													message: 'Phone number'
												},
												/*phone: {
												    country: 'US',
												    message: 'Please supply a vaild phone number with area code'
												}*/
											}
										},
										address: {
											validators: {
												stringLength: {
													min: 8,
												},
												notEmpty: {
													message: 'Street address'
												}
											}
										},
										city: {
											validators: {
												stringLength: {
													min: 4,
												},
												notEmpty: {
													message: 'City'
												}
											}
										},
										state: {
											validators: {
												notEmpty: {
													message: 'gender'
												}
											}
										},
										zip: {
											validators: {
												notEmpty: {
													message: 'Zip code'
												},
												zipCode: {
													country: 'US',
													message: 'Please supply a vaild zip code'
												}
											}
										},
										comment: {
											validators: {
												stringLength: {
													min: 10,
													max: 200,
													message: 'Please enter at least 10 characters and no more than 200'
												},
												notEmpty: {
													message: 'Please supply a description about yourself'
												}
											}
										},
										email: {
											validators: {
												notEmpty: {
													message: 'Email address'
												},
												emailAddress: {
													message: 'Valid email address'
												}
											}
										},

										password: {
											validators: {
												identical: {
													field: 'confirmPassword',
													message: 'Confirm and same password'
												}
											}
										},
										confirmPassword: {
											validators: {
												identical: {
													field: 'password',
													message: 'Password and confirm are not the same'
												}
											}
										},


									}
								} )


								.on( 'success.form.bv', function ( e ) {
									$( '#success_message' ).slideDown( {
											opacity: "show"
										}, "slow" ) // Do something ...
									$( '#reg_form' ).data( 'bootstrapValidator' ).resetForm();

									// Prevent form submission
									e.preventDefault();

									// Get the form instance
									var $form = $( e.target );

									// Get the BootstrapValidator instance
									var bv = $form.data( 'bootstrapValidator' );

									// Use Ajax to submit form data
									$.post( $form.attr( 'action' ), $form.serialize(), function ( result ) {
										console.log( result );
									}, 'json' );
								} );
							} );
						</script>
						<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
						<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
						<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>




					</div>



				</div>

			</div>

		</div>

	</div>

</body>

</html>
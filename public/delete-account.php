<?PHP require_once("./controllers/delete-account_controller.php"); ?>
<!DOCTYPE html>
<html lang='en-gb'>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delete Account</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="STYLESHEET" href="css/main.css" />
</head>
<body>

<div class="container">
<div class="box-container registartionForm">
<form id='form-submission' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8' class="form-horizontal">
<fieldset >
<legend>Delete Account</legend>

	<?php echo (isset($message) && $message != "") ? "<div class='errorBox'>".$message."</div>" : "" ; ?>
    <input type='hidden' name='submitted' id='submitted' value='1'/>
    <?php echo csrf_token_tag(); ?>
	
	<div id="errorBox-js" class="errorBox-js"></div>

	<div class="form-group">
		<div class="col-sm-12">
			<h4 class="text-center">Warning!</h4>
			<p class="font-size-small text-center">This action cannot be reversed. Only enter your details and click the delete button if you wish to permanently delete your account.</p>
		</div>
	</div>
    	
	<hr/>
	
	<div class="form-group">
	    <label for="username" class="col-sm-4 control-label">Confirm email:</label>
	    <div class="col-sm-8">
		  <input type='text' name='username' id='username' maxlength="50" required placeholder="Email address" class="form-control"/>
	    </div>
	</div>
	  
	<div class="form-group">
	    <label for="password" class="col-sm-4 control-label">Password:</label>
	    <div class="col-sm-8">
		  <input type='password' autocomplete="off" name='password' id='password' maxlength="50" required placeholder="Password" class="form-control"/>
	    </div>
	 </div>
	    
	<div class="form-group">
	    <div class="col-sm-12">
    		<a href="#"  id="submitButton" class="btn btn-danger btn-block">DELETE ACCOUNT</a>
		</div>
	</div>

</fieldset>
</form>

<hr/>

<p><a href='login-home.php'>Home</a></p>
</div>
</div>

<script type='text/javascript' src='js/jqueryLatest.js'></script>
<script type='text/javascript' src='js/form-submisson.js'></script>
</body>
</html>
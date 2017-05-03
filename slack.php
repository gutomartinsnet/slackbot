<?php
	/*$message = "hello world from curl"; 
		$room = "random"; 
		$icon = ":smile:"; 
		$data = "payload=" . json_encode(array(         
        "channel"       =>  "#{$room}",
        "text"          =>  $message,
        "icon_emoji"    =>  $icon
		));
		$url =  https://hooks.slack.com/services/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;
		//xoxp-4514597446-9726206512-39785840915-d69286199d
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$result = curl_exec($ch);
		echo var_dump($result);
		if($result === false)
		{
		echo 'Curl error: ' . curl_error($ch);
		}
		
	curl_close($ch); */
	
	if(($_GET["cafe"] === "1"))
	{
		//echo 'Temos Café Quentinho';
		alert('CHEGOU O CAFÉ QUENTINHO!!!!',':heart_eyes:', 'CafeQuentinho', "http://179.188.17.219/~cafe/pp.jpg");
	} else if(($_GET["cafe"] === "2")){
		//echo 'sem cafe';
		alert('AAAHHHH! ACABOU O CAFÉ QUENTINHO!!!!',':sob:', 'CafeFriozinho', "");
	} 
	
	function alert($message, $icon, $username, $image){
		$channel = "#canalcafe";
		
		$ch = curl_init("https://slack.com/api/chat.postMessage");
		$data = http_build_query([
        "token" => "xoxp-4514597446-9726206512-39785840915-d69286199d", //key api
    	"channel" => $channel, //"#channel_name",
    	"text" => $message, //"Hello, Foo-Bar channel message.",
    	"username" => $username,
		"image_url" => $image,
		"icon_emoji"    =>  $icon,
		]);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$result = curl_exec($ch);
		curl_close($ch);
	}

	

	
	//$message = "Temos Café Quentinho"; 
	
	//$icon = ":smile:"; :heart_eyes: :sob:
	
	
?>
<html>
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<title>Café Quentinho</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
				<h1>CAFÉ QUENTINHO</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
						<div id="display-success"><div class="alert alert-info"><h1>ALERTA DE CAFÉ ENVIADO!</h1></div></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="jumbotron text-center">
						<h2>Uhull!<br>Temos Café Quentinho! :D</h2>
						<p>
							<form action="" method="post">
								<a href="slack.php?cafe=1" class="btn btn-lg btn-success showMsg" >COMEMORAR A FELICIDADE!</a>
								<input type="hidden" name="button_a" value="1" />
							</form>
						</p>
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="jumbotron text-center">
						<h2>Aahh!<br>Acabou o Café Quentinho! :'(</h2>
						<p>
							<form action="" method="post">
								<a href="slack.php?cafe=2" class="btn btn-lg btn-danger showMsg" >CHORAR A TRISTEZA!</a>
								<input type="hidden" name="button_b" value="2" />
							</form>
						</p>
					</div>
				</div> 
			</div>
		</div><!-- /.container -->
		<script>
		$(document).ready (function(){
			$("#display-success").hide();
			$(".showMsg").click(function () {
				$('#display-success').fadeIn().delay(3000).fadeOut();
			});
		});
		
		</script>
		
	</body>
</html>


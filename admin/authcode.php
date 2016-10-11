<?php 
	session_start();
	$img = imagecreatetruecolor(100,30);	//创建图片源
	$bgcolor = imagecolorallocate($img,255,255,255);
	imagefill($img,0,0,$bgcolor);

	$authcode = '';
	for($i = 0 ; $i < 4 ; $i++){
		$fontSize = 6;
		$fontColor = imagecolorallocate($img,rand(0,125),rand(0,125),rand(0,125));

		$data = 'qwertyuiopasdfghjkzxcvbnm123456789';
		$fontContent = substr($data,rand(0,strlen($data)),1);
		$authcode .= $fontContent;

		$x = ($i * 100 / 4) + rand(5,10);
		$y = rand(5,10);

		imagestring($img,$fontSize,$x,$y,$fontContent,$fontColor);
	}

	$_SESSION['authcode'] = $authcode;

	for($i = 0; $i < 200 ; $i++){
		$pointColor = imagecolorallocate($img,rand(50,200),rand(50,200),rand(50,200));
		imagesetpixel($img,rand(1,99),rand(1,29),$pointColor);
	} 

	for($i = 0 ; $i < 3 ; $i++){
		$linePoint = imagecolorallocate($img,rand(50,200),rand(50,200),rand(50,200));
		imageline($img,rand(1,99),rand(1,29),rand(1,99),rand(1,29),$linePoint);
	}

	header('content-type:image/png');
	imagepng($img);

	imagedestroy($img);
 ?>
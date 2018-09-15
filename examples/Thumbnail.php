<?php

	include "../vendor/autoload.php";

	$FFmpeg = new \Atiksoftware\FFmpeg\FFmpeg;
	$FFmpeg->input( "Facebook.MP4" )->loglevel("debug")->output( "thumbnail.jpg" )->thumb( "1280x720" , 1, 10 )->ready();

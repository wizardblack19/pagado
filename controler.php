<?php
include_once('config.php');


function page($content){
//ob_start();
	$page = file_get_contents('view/head.html', FILE_USE_INCLUDE_PATH);
	$page .= file_get_contents($content, FILE_USE_INCLUDE_PATH);
	$page .= file_get_contents('view/foother.html', FILE_USE_INCLUDE_PATH);
	//$contenido = ob_get_contents();
//ob_end_clean();
	return $page;
}
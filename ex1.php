
//Home
$time = date("M j G:i:s Y"); 
$ip = getenv('REMOTE_ADDR');
$userAgent = getenv('HTTP_USER_AGENT');
$referrer = getenv('HTTP_REFERER');
$query = getenv('QUERY_STRING');
//COMBINE VARS INTO OUR LOG ENTRY
$msg = "IP: " . $ip . " TIME: " . $time . " REFERRER: " . $referrer . " SEARCHSTRING: " . $query . " USERAGENT: " . $userAgent;
// the message
$msg1 = $msg;
// use wordwrap() if lines are longer than 70 characters
$msg1 = wordwrap($msg1,70);
// send email
mail("12345678@gmail.com","Home page been entered",$msg1); 


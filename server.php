#!/php -q
<?php
// Run from command prompt > php -q chatbot.demo.php
include "websocket.class.php";

// Extended basic WebSocket as ChatBot
class ChatBot extends WebSocket{
  function process($user,$msg){
    $this->say("-- ".$msg);
    switch($msg){
      case "bonjour" : $this->send($user->socket,"Wesh bro' !");                       break;
      case "salut"    : $this->send($user->socket,"Java ?");                         break;
      case "Quel est ton nom ?"  : $this->send($user->socket,"Steve Diop et toi ?"); break;
      case "Quel age as-tu ?"   : $this->send($user->socket,"L'age de glace");       break;
      case "Date ?"  : $this->send($user->socket,"Hier on était le ... non je rigole on est aujourd'hui le ".date("Y.m.d"));           break;
      case "Heure ?"  : $this->send($user->socket,"Il est ".date("H:i:s"));     break;
      case "Merci": $this->send($user->socket,"C'est avec grand plaisir mon petit loubin");                    break;
      case "Aurevoir"   : $this->send($user->socket,"Hasta la vista baby !");                               break;
      default      : $this->send($user->socket,$msg." : je ne sais pas ce que cela signifie");              break;
    }
  }
}
echo $_SERVER['SERVER_ADDR'];
echo "Bonjour1";
$master = new ChatBot("109.215.39.194",14361);
ob_flush();

?>


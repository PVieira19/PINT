<?php
$from="quental@estgv.ipv.pt";
$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=utf-8" . "\r\n";
		$headers .= "From:" . $from . "\r\n";

if (mail("alexandrefroberto@hotmail.com","assunto","Mensagem",$headers))
	echo "ok";
else echo "Nada. Só erros";

?>

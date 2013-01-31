<?php

	$usuario = $_GET['usuario'];
	$chave = $_GET['chave'];
	$acao = $_GET['acao'];
	exec("stty -f /dev/tty.usbmodemfd131 raw speed 9600");
	exec('echo "'.$acao.'" > /dev/tty.usbmodemfd131');

<?php

session_start();

if(isset($_POST['submit'])){
	if(($_POST['check']) == $_SESSION['check']) {
		echo 'Капча введена верно!';
	} else {
		echo 'Капча не правильная!';
	}
}
?> 
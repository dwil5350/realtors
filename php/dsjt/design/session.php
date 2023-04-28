<?php
	session_start();
    $is_logged_in = FALSE;
	if (empty($_SESSION['user']) == FALSE){
		$is_logged_in = TRUE;
	}
?>
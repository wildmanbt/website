<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Email', @$_POST['imObjectForm_1_1'], '', false);
	$form->setField('Object', @$_POST['imObjectForm_1_2'], '', false);
	$form->setField('Message', @$_POST['imObjectForm_1_3'], '', false);

	$errorMessage = '';
	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != '715B3D7650D1389E126415E3093CEE4A' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner('bebemimado@me-pal.com', '', 'example@example.com', '', "", false);
		@header('Location: ../index.php');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file
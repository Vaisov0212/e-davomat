<?php
if (isset($_GET['card_uid']) && isset($_GET['device_token'])){
    $card_uid = $_GET['card_uid'];
    $device_uid = $_GET['device_token'];

	$UIDresult=$card_uid;
	$Write="<?php $" . "UIDresult='" . $UIDresult . "'; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
}
?>

<?php
if(isset($_POST['submit'])){
	$game_id =  $_POST['game_id'];
	$chracter = $_POST['chracter_name'];
	 global $wpdb;
	  $email = 'bilal2@info.com';
	 require_once($_SERVER['DOCUMENT_ROOT'] .'/gaming/wp-config.php');
    $conn= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $sql = "INSERT INTO wp_chracters (post_id, chracter) VALUES ('$game_id', '$chracter')";
    $result = $conn->query($sql);
    if($result){
    	header('Location: http://localhost/gaming/mein-account/add-characters?success=1');
    }else{
    	header('Location: http://localhost/gaming/mein-account/add-characters?error=1');
    }


}else{
	echo 'd';
}

exit;
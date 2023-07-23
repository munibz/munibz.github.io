<?php
	include 'connection/conn.php';

	if(isset($_POST['form_data'])){
		parse_str($_POST['form_data'], $formData);
		extract($formData);

	    if ( !mysqli_query($conn, "DESCRIBE contact_us" ) ) {
	    	$sql = "CREATE TABLE contact_us(
	    			id BIGINT PRIMARY KEY AUTO_INCREMENT,
	    			name VARCHAR(50) NOT NULL,
	    			email VARCHAR(100) NOT NULL,
	    			msg TEXT,
	    			date datetime DEFAULT CURRENT_TIMESTAMP
	    		)";

			$conn->query($sql);
		}

		$sql = "INSERT INTO contact_us(name, email, message) VALUES('$name', '$email', '$message')";
		if ($conn->query($sql) === TRUE) {
		  $msg = array('status' => 'success', 'title' => 'Your Query saved successfully.', 'msg' => "Thank you for connecting with me.");
		} else {
			$msg = array('status' => 'error', 'title' => 'something is happend', 'msg' => "Error: " . $sql . "<br>" . $conn->error);
		}

		echo json_encode($msg);
		die();
	}
?>
<?php
	$mode = $_GET["mode"];

	if ($mode == "question_search") {
		$contents = file("question.txt");
		$array = array();
		$array["title"] = $contents[0];
		//header("Content-type: application/json");
		//print(json_encode($array));
		foreach ($contents as $line) {

		}
		print "None found";
	} else if ($mode == "login") {
		$user = $_GET["username"];
		$password = $_GET["password"];
		$contents = file("users.txt");
		foreach ($contents as $line) {
			$row = explode(";/$", $line);
			if ($row[1] == $user && $row[2] == $password) {
				print "success";
			}
		}
		print "fail";
	}
?>







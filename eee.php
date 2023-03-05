<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $note = $_POST["note"];
			echo "<h1>您好，" . $name . "！</h1>";
            echo "電子郵件為<br>" . $email;
            echo "電話為<br>" . $phone;
            echo "備註<br>" . $note;
		} else {
			echo "<h1>出現錯誤，請再試一次。</h1>";
		}
?>
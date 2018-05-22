<html>
	<head>
		<title>Girls' Generation</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	</head>
	<body>
    
		<div class="wrapper">
			<div class="nav">
				<ul>
					<li><a href="home2.php" class="cool-link">HOME</a></li>
					<li class="current"><a href="history2.php" class="cool-link">HISTORY</a></li>
					<li><a href="discography2.php" class="cool-link">DISCOGRAPHY</a></li>
					<li><a href="photo2.php" class="cool-link">PHOTO</a></li>
                    <li><a href="email.php" class="cool-link">FEEDBACK</a></li>
				</ul>
			</div>			
		</div>
        <div class="prof">
            <div class="bgcolor">
            <img src="sunny.jpg">
                <p>
                	<?php
                        $mysqli = new mysqli("localhost", "lana07", "", "first_database");
                        $query = "select text from members where id=9";
                        $result = $mysqli->query($query); // выполнение запроса
                        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
                            echo $row["text"]."<br>";
                        }
                    ?>
                </p>
                <p>
                	<?php
                        $mysqli = new mysqli("localhost", "lana07", "", "first_database");
                        $query = "select text from members where id=10";
                        $result = $mysqli->query($query); // выполнение запроса
                        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
                            echo $row["text"]."<br>";
                        }
                    ?>
                </p>
            </div>
        </div>
    </body>
</html>
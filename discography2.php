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
					<li><a href="history2.php" class="cool-link">HISTORY</a></li>
					<li class="current"><a href="discography2.php" class="cool-link">DISCOGRAPHY</a></li>
					<li><a href="photo2.php" class="cool-link">PHOTO</a></li>
				    <li><a href="email.php" class="cool-link">FEEDBACK</a></li>
				</ul>
			</div>			
		</div>
        <div class="block1">
            <h3>Albums</h3>
            <div class="block11">
                <p>
                    <?php
                        $mysqli = new mysqli("localhost", "lana07", "", "first_database");
                        $query = "select album from songs where id=1";
                        $result = $mysqli->query($query); // выполнение запроса
                        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
                            echo $row["album"]."<br>";
                        }
                    ?>
                </p>
                <p>
                    <?php
                        $mysqli = new mysqli("localhost", "lana07", "", "first_database");
                        $query = "select album from songs where id=2";
                        $result = $mysqli->query($query); // выполнение запроса
                        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
                            echo $row["album"]."<br>";
                        }
                    ?>
                </p>
                <p>
                    <?php
                        $mysqli = new mysqli("localhost", "lana07", "", "first_database");
                        $query = "select album from songs where id=3";
                        $result = $mysqli->query($query); // выполнение запроса
                        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
                            echo $row["album"]."<br>";
                        }
                    ?>
                </p>
                <p>
                    <?php
                        $mysqli = new mysqli("localhost", "lana07", "", "first_database");
                        $query = "select album from songs where id=4";
                        $result = $mysqli->query($query); // выполнение запроса
                        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
                            echo $row["album"]."<br>";
                        }
                    ?>
                </p>
                <p>
                    <?php
                        $mysqli = new mysqli("localhost", "lana07", "", "first_database");
                        $query = "select album from songs where id=5";
                        $result = $mysqli->query($query); // выполнение запроса
                        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
                            echo $row["album"]."<br>";
                        }
                    ?>
                </p>
                <p>
                    <?php
                        $mysqli = new mysqli("localhost", "lana07", "", "first_database");
                        $query = "select album from songs where id=6";
                        $result = $mysqli->query($query); // выполнение запроса
                        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
                            echo $row["album"]."<br>";
                        }
                    ?>
                </p>
            </div>
        
        </div>
        <div class="block2">
            <h3>Mini-albums</h3>
            <div class="block22">
                <p>Gee</p>
                <p>Genie</p>
                <p>Hoot</p>
                <p>Mr. Mr.
                </p>
            </div>
        
        </div>
        <div class="block3">
            <h3>Singles</h3>
            <div class="block33">
                <p>Into the New World</p>
                <p>Party
                </p>
            </div>
        
        </div>
    </body>
</html>
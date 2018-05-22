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
					<li><a href="discography2.php" class="cool-link">DISCOGRAPHY</a></li>
					<li><a href="photo2.php" class="cool-link">PHOTO</a></li>
                    <li class="current"><a href="email.php" class="cool-link">FEEDBACK</a></li>
				</ul>
			</div>			
		</div>
        <div class="forma">
            <h2>Feedback</h2>
        </div>
        <form method="post" action="add2.php">
            
            <div class="input">
                <label>Name</label>
                <input type="text" name="name">;
            </div>
            <div class="input">
                <label>Email</label>
                <input type="text" name="email">;
            </div>
            <div class="input">
                <label>Message</label>
                <textarea name="message"></textarea>;
            </div>
            <div class="input">
                <input type="submit">
            </div>
        </form>
    </body>
</html>
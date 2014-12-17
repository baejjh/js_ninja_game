<html>
<head>
	<title>Character Game</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
	<!-- Player 1 -->
	<div id="ninja_moves_1" style="position:absolute; top:0px; left:0px;">
		<img src="/img/down1.png" alt="moving ninja" id="ninja_1">
		<small>Player 1</small>
	</div>
	<!-- Player 2-->

	<div id="ninja_moves_2" style="position:absolute; top:0px; left:500px;">
		<img src="/img/down1.png" alt="moving ninja" id="ninja_2">
		<small>Player 2</small>
	</div>
</body>
</html>

	<script>
	// Player 1
	function gameLoop()
	{
		$('#ninja_moves_1').css( { left: x, top: y } );
	}
	setInterval(gameLoop, 150);
	var x=0,
		y=0;
	// Player 2
	function gameLoop()
	{
		$('#ninja_moves_2').css( { left: x, top: y } );
	}
	setInterval(gameLoop, 150);
	var x=500,
		y=0;

	document.onkeydown = function (e)
	{
		// Player 1
		if(e.keyCode == 37 && x > 0) //left arrow
		{
			x = x-10;
			$("#ninja_1").attr("src", "/img/left1.png");
		}
		else if(e.keyCode == 38 && y > 0) //up arrow
		{
			y = y-10;
			$("#ninja_1").attr("src", "/img/up1.png");
		}
		else if(e.keyCode == 39 && x < 500) //right arrow
		{
			x = x+10;
			$("#ninja_1").attr("src", "/img/right1.png");
		}
		else if(e.keyCode == 40 && y < 500) //down arrow
		{
			y = y+10;
			$("#ninja_1").attr("src", "/img/down1.png");
		}
		// Player 2
		else if(e.keyCode == 65 && x > 0) //a - left arrow
		{
			x = x-10;
			$("#ninja_2").attr("src", "/img/left1.png");
		}
		else if(e.keyCode == 83 && y > 0) //s - up arrow
		{
			y = y-10;
			$("#ninja_2").attr("src", "/img/up1.png");
		}
		else if(e.keyCode == 68 && x < 500) //d - right arrow
		{
			x = x+10;
			$("#ninja_2").attr("src", "/img/right1.png");
		}
		else if(e.keyCode == 70 && y < 500) //f - down arrow
		{
			y = y+10;
			$("#ninja_2").attr("src", "/img/down1.png");
		}
		console.log(e.keyCode, x);
	}
	console.log(document);
	</script>
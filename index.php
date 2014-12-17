<html>
<head>
	<title>Character Game</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
	<div id="ninja_moves" style="position:absolute; top:0px; left:0px;">
		<img src="/img/down1.png" alt="moving ninja">
	</div>
	<!-- Second Player using asdf for Movement -->

<!-- 	<div id="ninja_moves_2" style="position:absolute; top:0px; left:500px;">
		<img src="/img/down1.png" alt="moving ninja">
	</div>
 -->

</body>
</html>

	<script>

	function gameLoop()
	{
		$('#ninja_moves').css( { left: x, top: y } );
	}

	setInterval(gameLoop, 150);

	var x=0,
		y=0;

	document.onkeydown = function(e)
	{
		if(e.keyCode == 37 && x > 0) //left arrow
		{
			x = x-10;
			$("img").attr("src", "/img/left1.png");
		}
		else if(e.keyCode == 38 && y > 0) //up arrow
		{
			y = y-10;
			$("img").attr("src", "/img/up1.png");
		}
		else if(e.keyCode == 39 && x < 500) //right arrow
		{
			x = x+10;
			$("img").attr("src", "/img/right1.png");
		}
		else if(e.keyCode == 40 && y < 500) //down arrow
		{
			y = y+10;
			$("img").attr("src", "/img/down1.png");
		}

		console.log(e.keyCode, x);
	}

	console.log(document);
	</script>
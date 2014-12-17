<html>
<head>
	<title>Character Game</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
	<!-- Player 1 -->
	<div id="ninja_moves_1" style="position:absolute; top:0px; left:0px;">
		<img src="img/down1.png" alt="moving ninja" id="ninja_1">
		<small>Player 1</small>
	</div>
	<!-- Player 2-->

	<div id="ninja_moves_2" style="position:absolute; top:0px; left:500px;">
		<img src="img/down1.png" alt="moving ninja" id="ninja_2">
		<small>Player 2</small>
	</div>
</body>
</html>

	<script>
	// Player 1
	function gameLoop()
	{
		$('#ninja_moves_1').css( { left: x1, top: y1 } );
	}
	setInterval(gameLoop, 150);
	var x1 			= 0,
		y1 			= 0,
		horizontal 	= 1,
		vertical	= 1;

	// Player 2
	function gameLoop2()
	{
		$('#ninja_moves_2').css( { left: x2, top: y2 } );
	}
	setInterval(gameLoop2, 150);
	var x2 			= 500,
		y2 			= 0,
		horizontal2 	= 1,
		vertical2	= 1;

	document.onkeydown = function (e)
	{
	// Player 1
		if(e.keyCode == 65 && x1 > 0) //a - left arrow
		{
			x1 = x1-10;
			if((horizontal%2) == 0)
			{
				$("#ninja_1").attr("src", "img/left1.png");
			} 
			else
			{
				$("#ninja_1").attr("src", "img/left2.png");
			}
			horizontal++
		}
		else if(e.keyCode == 83 && y1 > 0) //s - up arrow
		{
			y1 = y1-10;
			if((vertical%2) == 0)
			{
				$("#ninja_1").attr("src", "img/up1.png");
			} 
			else
			{
				$("#ninja_1").attr("src", "img/up2.png");
			}
			vertical++
		}
		else if(e.keyCode == 68 && x1 < 500) //d - right arrow
		{
			x1 = x1+10;
			if((horizontal%2) == 0)
			{
				$("#ninja_1").attr("src", "img/right1.png");
			} 
			else
			{
				$("#ninja_1").attr("src", "img/right2.png");
			}
			horizontal++
		}
		else if(e.keyCode == 70 && y1 < 500) //f - down arrow
		{
			y1 = y1+10;
			if((vertical%2) == 0)
			{
				$("#ninja_1").attr("src", "img/down1.png");
			} 
			else
			{
				$("#ninja_1").attr("src", "img/down2.png");
			}
			vertical++
		}
	// Player 2
		if(e.keyCode == 37 && x2 > 0) //left arrow
		{
			x2 = x2-10;
			if((horizontal%2) == 0)
			{
				$("#ninja_2").attr("src", "img/left1.png");
			} 
			else
			{
				$("#ninja_2").attr("src", "img/left2.png");
			}
			horizontal++
		}
		else if(e.keyCode == 38 && y2 > 0) //up arrow
		{
			y2 = y2-10;
			if((vertical%2) == 0)
			{
				$("#ninja_2").attr("src", "img/up1.png");
			} 
			else
			{
				$("#ninja_2").attr("src", "img/up2.png");
			}
			vertical++
		}
		else if(e.keyCode == 39 && x2 < 500) //right arrow
		{
			x2 = x2+10;
			if((horizontal%2) == 0)
			{
				$("#ninja_2").attr("src", "img/right1.png");
			} 
			else
			{
				$("#ninja_2").attr("src", "img/right2.png");
			}
			horizontal++
		}
		else if(e.keyCode == 40 && y2 < 500) //down arrow
		{
			y2 = y2+10;
			if((vertical%2) == 0)
			{
				$("#ninja_2").attr("src", "img/down1.png");
			} 
			else
			{
				$("#ninja_2").attr("src", "img/down2.png");
			}
			vertical++
		}
		console.log(e.keyCode, x1, y1, x2, y2);
	}
	console.log(document);
	</script>
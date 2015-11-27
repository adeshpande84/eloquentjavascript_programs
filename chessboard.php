<html>
	<head>
	</head>
	<body>
		<h1>Eloquent JS Programs</h1>

		<h3>Chess board - see console for output</h3>
		
		<script>
			var size=8;
			
			var s = "";
			
			var evenCell = null;
			var oddCell = null;

			for(var i=1; i<=size; i++) {
				if(i%2 === 0) {
					oddCell = "#";
					evenCell = " ";
				} else {
					oddCell = " ";
					evenCell = "#";
				}
				for(var j=1; j<=size; j++) {
					if(j%2 === 0) {
						s += evenCell;
					} else {
						s += oddCell;
					}
				}
				s += "\n";
			}

			console.log(s);

		</script>
	</body>

</html>
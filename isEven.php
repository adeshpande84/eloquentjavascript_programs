<html>
	<head>
	</head>
	<body>
		<h1>Eloquent JS Programs</h1>

		<h3>Min - see console for output</h3>
		
		<script>
			var isEven = function (a) {
				if(a < 0) {
					a = -(a);
				}
				if(a === 0) {
					return true;
				} else if(a === 1) {
					return false;
				} else {
					return isEven(a-2);
				}
			};

			console.log(isEven(-12));
		</script>
	</body>

</html>
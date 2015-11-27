<html>
	<head>
	</head>
	<body>
		<h1>Eloquent JS Programs</h1>

		<h3>FizzBuzz - see console for output</h3>
		
		<script>
			for(var i=1; i<=100; i++) {
				if(i%15 === 0) {
					console.log("FizzBuzz");
				} else if(i%3 === 0) {
					console.log("Fizz");
				} else if(i%5 === 0) {
					console.log("Buzz");
				} else {
					console.log(i);
				}
			}
		</script>
	</body>

</html>
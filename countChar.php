<html>
	<head>
	</head>
	<body>
		<h1>Eloquent JS Programs</h1>

		<h3>Min - see console for output</h3>
		
		<script>
			var countBs = function (str) {
				
				return countChar(str,"B");
			};

			var countChar = function (str, c) {
				var count = 0;
				for(var i=0; i < str.length; i++) {
					if(str.charAt(i) === c) {
						count++;
					}
				}
				return count;
			}
			console.log(countBs("BloB"));
			console.log(countChar("CharaCter","r"));
		</script>
	</body>

</html>
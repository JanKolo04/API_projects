<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<title>Test</title>
</head>
<body>

<<<<<<< HEAD
=======
	<img class="icon">

>>>>>>> 230b427 (idea for present cards with pokemin)
	<script type="text/javascript">
		

		//1. First option
		/*
		const URL = "https://pokeapi.co/api/v2/pokemon/ditto";

		async function getDataFromApi(URL) {
			const response = await fetch(URL);
			var data = await response.json();

			console.log(data)
		}

		getDataFromApi(URL);
		*/


		//2. Second option with getJSON 
		//sprawdzic czy wyszuka nam z róznymi nazwami zmiennych

<<<<<<< HEAD
=======
		function name() {
			$.getJSON("https://pokeapi.co/api/v2/pokemon/ditto", function(data) {
				console.log("Name:",data.name);
			});
		}

		function img() {
			$.getJSON("https://pokeapi.co/api/v2/pokemon/ditto", function(data) {
				let id = data.id;
				let photo = "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/back/"+id+".png";
				
				$(".icon").attr("src", photo);
			});	
		}

		name();
		img();
>>>>>>> 230b427 (idea for present cards with pokemin)

		/*
			NEEDED LOCATIONS IN API

			1. IMG pokemon --sprites--

		*/

	</script>

</body>
</html>
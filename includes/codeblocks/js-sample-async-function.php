const fetchMeals = async () => {

	const response = await fetch('url-of-api'); // 1
	const responseData = await response.json(); // 2
	await new Promise(r => setTimeout(r, 2000)); // 3
	const processedMeals = await responseData.map((mealData) => { // 4
		return {
			id: mealData.id,
			name: mealData.name,
			description: mealData.description,
			price: mealData.price
		};
	});
	setMeals(processedMeals); // 5

}

fetchMeals(); // 6

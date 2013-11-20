function treesCountChange(treesInput) {
	var treesCount = parseInt($(treesInput).val(), 10);
	var price = getPrice(treesCount);
	$('#bags_price').html(price + " euros");
	$('#bags_count').html(getBagsCount(price) + " sachet(s)");
}

function getPrice(plantedTreeCount) {
	return Math.floor(plantedTreeCount * (1 + (2/(Math.log(plantedTreeCount+1)))));
}

function getBagsCount(price) {
	return Math.floor(price/5);
}
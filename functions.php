<?php
	function getPlantedTreesCount() {
		return floor(time() / (60*60) - 360000); 
	}
	
	function getPrice($plantedTreeCount) {
		return floor($plantedTreeCount * (1 + (2/(log($plantedTreeCount+1)))));
	}

	function getBagsCount($price) {
		return floor($price/5);
	}
?>
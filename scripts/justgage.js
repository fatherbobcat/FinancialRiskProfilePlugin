window.onload= function(){
	//LCR
	var g = new JustGage({
	id: "LCR", 
	value: 50, 
	min: 0,
	max: 100,
	title: "LCR"
	}); 

	//TIC
	var g = new JustGage({
	id: "T1C", 
	value: 72, 
	min: 0,
	max: 100,
	title: "T1C"
	});

	//SLR
	var g = new JustGage({
	id: "SLR", 
	value: 11, 
	min: 0,
	max: 100,
	title: "SLR"
	});
	
	//LCR updated
	var g = new JustGage({
	id: "LCR_Scenario", 
	value: 50, 
	min: 0,
	max: 100,
	title: "LCR"
	}); 

	//TIC
	var g = new JustGage({
	id: "T1C_Scenario", 
	value: 72, 
	min: 0,
	max: 100,
	title: "T1C"
	});

	//SLR
	var g = new JustGage({
	id: "SLR_Scenario", 
	value: 11, 
	min: 0,
	max: 100,
	title: "SLR"
	});
	
	//ROE
	var g = new JustGage({
	id: "ROE", 
	value: 34, 
	min: 0,
	max: 100,
	title: "ROE"
	});
	
	//ROA
	var g = new JustGage({
	id: "ROA", 
	value: 5, 
	min: 0,
	max: 100,
	title: "ROA"
	});
}

function expandOption(elementid){

	if (document.getElementById(elementid).style.display == 'block'){
		document.getElementById(elementid).style.display = 'none';
	} else {
		document.getElementById(elementid).style.display = 'block';
	}
	
}


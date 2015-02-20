$(function(){
	//var urlVars = $.getUrlVars();
	//console.log(urlVars);	
	var scrollgap		= "1";		// SET SCROLLER SPEED 1 = SLOWEST
	//var speed			= "10";		// ADJUST SCROLL JUMPING = RANGE 20 TO 40
	var startdelay 		= "2"; 		// START SCROLLING DELAY IN SECONDS
	var nextdelay		= "0"; 		// SECOND SCROLL DELAY IN SECONDS 0 = QUICKEST
	var topspace		= "2px";		// TOP SPACING FIRST TIME SCROLLING
	var frameheight		= "204px";	// IF YOU RESIZE THE WINDOW EDIT THIS HEIGHT TO MATCH
	var current = scrollgap;
	
	function HeightData(){
		AreaHeight=dataobj.offsetHeight;
		if (AreaHeight==0)
			setTimeout("HeightData()",( startdelay * 1000 ));
		else
			ScrollNewsDiv();
	}
	
	function NewsScrollStart(){
		if(window.frameElement && window.frameElement.height)
			frameheight = window.frameElement.height + 'px';
		dataobj=document.all? document.all.NewsDiv : document.getElementById("NewsDiv");
		dataobj.style.top=topspace;
		setTimeout(HeightData,( startdelay * 1000 ));
	}
	
	function ScrollNewsDiv(){
		dataobj.style.top=parseInt(dataobj.style.top)-(scrollgap);
		if (parseInt(dataobj.style.top)<AreaHeight*(-1)){
			dataobj.style.top=frameheight;
			setTimeout(ScrollNewsDiv,( nextdelay * 100 ));
		}
		else
			setTimeout(ScrollNewsDiv,1000/(speed > 0 ? speed : 1));
	}
	
	$('body').bind('mouseover', function(){
		scrollgap = 0;
	}).bind('mouseout', function(){
		scrollgap = current;
	});
	
	NewsScrollStart();
});

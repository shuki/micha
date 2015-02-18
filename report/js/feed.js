$(function(){
	var scrollspeed		= "1";		// SET SCROLLER SPEED 1 = SLOWEST
	var speedjump		= "20";		// ADJUST SCROLL JUMPING = RANGE 20 TO 40
	var startdelay 		= "2"; 		// START SCROLLING DELAY IN SECONDS
	var nextdelay		= "0"; 		// SECOND SCROLL DELAY IN SECONDS 0 = QUICKEST
	var topspace		= "2px";		// TOP SPACING FIRST TIME SCROLLING
	var frameheight		= "204px";	// IF YOU RESIZE THE WINDOW EDIT THIS HEIGHT TO MATCH
	current = (scrollspeed);
	
	function HeightData(){
		AreaHeight=dataobj.offsetHeight;
		if (AreaHeight==0){
			setTimeout(HeightData, (startdelay * 1000 ));
		}
		else {
			ScrollNewsDiv();
		}
	}
	
	function NewsScrollStart(){
		console.log(this);
		dataobj=document.all? document.all.NewsDiv : document.getElementById("NewsDiv");
		dataobj.style.top=topspace;
		setTimeout(HeightData,( startdelay * 1000 ));
	}
	
	function ScrollNewsDiv(){
		dataobj.style.top=parseInt(dataobj.style.top)-(scrollspeed);
		if (parseInt(dataobj.style.top)<AreaHeight*(-1)) {
			dataobj.style.top=frameheight;
			setTimeout(ScrollNewsDiv, (nextdelay * 1000 ));
		}
		else {
			setTimeout(ScrollNewsDiv, speedjump);
		}
	}
	
	$('div#mainbody').bind('mouseover', function(){
		scrollspeed=0;
	})
	.bind('mouseout', function(){
		scrollspeed=current;
	});
	
	NewsScrollStart();

});
$(function(){
	var scrollgap		= "1";		// SET SCROLLER SPEED 1 = SLOWEST
	//var speed			= "10";		// ADJUST SCROLL JUMPING = RANGE 20 TO 40
	var startdelay 		= "2"; 		// START SCROLLING DELAY IN SECONDS
	var nextdelay		= "0"; 		// SECOND SCROLL DELAY IN SECONDS 0 = QUICKEST
	var topspace		= "2px";		// TOP SPACING FIRST TIME SCROLLING
	//var frameheight		= "250px";	// IF YOU RESIZE THE WINDOW EDIT THIS HEIGHT TO MATCH
	
	var timoutgap		= 60000;
	var newContents = false;
	var current = scrollgap;
	
	function getRequestVars(){
		var urlVars = $.getUrlVars();
		var vars = {};	
		$.each(urlVars, function(key, value){
			vars[value] = decodeURIComponent(urlVars[value]);
		});
		
		return vars;
	}

	function HeightData(){
		AreaHeight=dataobj.offsetHeight;
		if (AreaHeight==0){
			setTimeout("HeightData()",( startdelay * 1000 ));
		}
		else
			ScrollNewsDiv();
	}
	
	function NewsScrollStart(){
		//if(window.frameElement && window.frameElement.height)
		//	frameheight = window.frameElement.height + 'px';
		dataobj=document.all? document.all.NewsDiv : document.getElementById("NewsDiv");
		dataobj.style.top=topspace;
		setTimeout(HeightData,( startdelay * 1000 ));
	}
	
	function ScrollNewsDiv(){
		dataobj.style.top=parseInt(dataobj.style.top)-(scrollgap);
		if (parseInt(dataobj.style.top)<AreaHeight*(-1)){
			dataobj.style.top=frameheight;
			if(newContents){
				$('table#contents td').html(newContents);
				HeightData();
				newContents = false;
			}
			setTimeout(ScrollNewsDiv,( nextdelay * 100 ));
		}
		else
			setTimeout(ScrollNewsDiv,1000/(speed > 0 ? speed : 1));
	}
	
	function get_checksum(){
		$.get('checksum.php', requestVars, function(data){
			if(data != checksum){
				checksum = data;
				get_contents();
			}
			setTimeout(get_checksum, timoutgap);			
		});
	}
	
	function get_contents(){
		$.get('contents.php', requestVars, function(data){
			newContents = data;
		});
	}
	
	$('body').bind('mouseover', function(){
		scrollgap = 0;
	}).bind('mouseout', function(){
		scrollgap = current;
	});
	
	var requestVars = getRequestVars();
	NewsScrollStart();
	var timer = setTimeout(get_checksum, timoutgap);
});

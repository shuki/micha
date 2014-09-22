﻿$(function(){
	$.jset.fn.registerGridDefinition('message', {
	  	source: 'message',
	  	item_name: 'הודעה',
	  	searchall: true,
		load_edit_record: false,
		template: {
			use: true,
			columns: 1
		},
		afterSubmitError: function(response, postdata, frmoper, obj){
			var message = obj.error.message;
			switch(obj.error.info[1]){
				case 1062: 
					message = 'קיימת כבר הודעה בשם זה, באותו התאריך ובאותה השעה.';
					break;
				default:
					;
			}
			return [false, message];
		},
	    grid: {
	    	direction: 'rtl',
			//autowidth: true,
			width: 800,
			height: 280,
			//height: $(window).height() - 164,
			//footerrow : true,
			//userDataOnFooter : true,
			sortname: 'date',
			sortorder: 'desc',
			toppager: false
	  	}
	});
	
	$('#grid').jset($.extend(true, {}, $.jset.fn.getGridDefinition('message'), $.jset.fn.url_filters()));
});
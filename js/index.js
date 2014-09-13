$(function(){
	$.jset.fn.registerGridDefinition('demo', {
	  	source: 'demo',
	  	item_name: 'משימה',
	  	searchall: true,
		load_edit_record: true,
		template: {
			use: true,
			columns: 3
		},
		filterToolbar:{
			hide: true
		},
	    grid: {
	    	direction: 'rtl',
			autowidth: true,
			height: $(window).height() - 164,
			footerrow : true,
			userDataOnFooter : true,
			sortname: 'text',
			sortorder: 'asc',
			toppager: false
	  	},
	  	navigation:{
			options : {
				search: true,
				view: true,
				cloneToTop: false
			},
			edit:{
			},
			add:{
			},
			del:{
			},
			search:{
			},
			view:{
			}
		}
	});
	
	$('#grid').jset($.extend(true, {}, $.jset.fn.getGridDefinition('demo'), $.jset.fn.url_filters()));
});
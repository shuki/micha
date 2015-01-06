$(function(){
	$.jset.fn.registerGridDefinition('jset_list', {
	  	source: 'jset_list',
	  	item_name: 'רשימה',
		load_edit_record: false,
		searchall: true,
		persist:false,
		template: {
			use: true,
			columns: 3
		},
		filterToolbar:{
			hide: false,
			navButtonAdd: false
		},
		onInitializeForm: function(formid){
			$(formid).closest('.ui-jqdialog').offset({ top: -1});
		},
		afterSubmit: function(response, postdata){
			//$('table[id="patient"]').jset('pending_reload');
			//$('table[id="people"]').jset('pending_reload');
			return [true];
		},
	    grid: {
		    sortname: 'type',
		    sortorder: 'asc',
	    	width: 610,
	    	height: 200
	  	},
	  	navigation:{
			options : {
				search: false,
				view: false
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
	
	$('#grid').jset($.extend(true, {}, $.jset.fn.getGridDefinition('jset_list'), $.jset.fn.url_filters()));
});

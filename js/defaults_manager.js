$(function(){
	$.extend(true, $.jset.defaults, {
		filterToolbar:{
			hide: false
		},
		copy: {
			navButtonAdd: true
		},
		'import': {
			navButtonAdd: true
		},
		'export':{
			navButtonAdd: true,
		},
	  	navigation:{
			options : {
				del: true,
				add: true,
				edit: true,
				search: false,
				view: false,
				refresh: true
			},
			edit:{
				checkOnUpdate:true
			},
			add:{
				checkOnUpdate:true
			},
			del:{
			},
			search:{
			},
			view:{
			}
		}
	});
});


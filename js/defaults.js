$(function(){
	$.extend($.validator.messages, {
	  required: 'שדה חובה',
	  email: 'איימל לא תקין'
	});
		
	$.extend(true, $.jset.defaults, {
		editor:{
			directionality : 'rtl',
			language : 'he_IL',
			menubar : false,
			//toolbar: 'fontselect fontsizeselect bold italic underline forecolor backcolor alignleft aligncenter alignright bullist numlist outdent indent blockquote removeformat',
			toolbar: 'styleselect fontselect fontsizeselect | fullscreen forecolor backcolor bullist numlist outdent indent ltr rtl removeformat',
			plugins : 'textcolor directionality fullscreen'


		},
		control:{
			align: 'right',
			checkbox: {
				searchoptions:{
					value: {0:'לא', 1:'כן'},
				}
			},
			datepicker: {
				region: 'he'
			},
			selectbox:{
				align: 'right'
			},
			selectbox_plus:{
				align: 'right',
				editoptions: {
					settings:{
						search_default:[{name:'id', value:''}],
						single_record: {
							active: true,
							displayAlert: false,
							mode: '',
							options:{
								closeOnEscape: false,
								closeAfterEdit: false,
								closeAfterAdd: false,
								drag: false,
								resize: false,
								viewPagerButtons: false,
								editCaption: 'ערוך',
								addCaption: 'הוסף'
							}
						}
					}
				}
			},
			text:{
				align:'right'
			},
			textarea:{
				align:'right'
			},
			varchar:{
				align:'right'
			},
			editor:{
				align:'right',
				editoptions:{
					directionality : 'rtl'
				}
			},
			upload_file:{
				align:'right',
				formatoptions:{
					picture_lable: 'תמונה',
					file_lable: 'קובץ'
				},
				editoptions:{
					custom_options:{
						row_height: '80',
						max_width: '200',
						browse_title: 'העלה קובץ',
						delete_title: 'הסר קובץ',
						show_image: true,
						show_target: false,
						show_link: false,
						show_icon: true,
					}
				},
				formoptions:{
					label_hide: false
				}
			}
		},
		filterToolbar:{
			hide: false
		},
		persist: false,
		clearPersist: {
			navButtonAdd: false
		},
		columnChooser:{
			navButtonAdd: false
		},
		clearFilterToolbar:{
			navButtonAdd: true,
			options: {
				caption: '',
				title: 'נקה שדות סינון',
				buttonicon: 'ui-icon-cancel',
				position: 'last'
			}
		},
		copy: {
			navButtonAdd: false
		},
		'import': {
			navButtonAdd: false
		},
		'export':{
			navButtonAdd: false,
		},
	  	navigation:{
			options : {
				del: false,
				add: false,
				edit: true,
				search: false,
				view: false,
				refresh: false
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
});

var fn_micha = {
	apply: function(formid){
		var grid = $(this);
		if(!manager_flag){
			$('span.ui-jqdialog-title').html('הצג הודעה');
			$.jset.fn.readonlySet(grid, formid, !manager_flag);
		}
	}
};

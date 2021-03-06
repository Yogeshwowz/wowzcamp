$(document).ready(function(){
	var baseUrl = $('#baseURL').val();
	$(".amount").keyup(function() { 
       var price =$('#price').val();
       var discount =$('#discount').val();
	   var sum =parseFloat(price)*parseFloat(discount)/100;
	   if(sum >0){
		   var after_discount_price = parseFloat(price)-sum;
		$('#after_discount_price').val(after_discount_price);
		var su = discount+'% of Regular Price '+price+'  = '+sum+'rs';
		$('#discount_span').text(su);
	   }else{
		  $('#after_discount_price').val('');
          $('#discount_span').text('');		  
	   }
	   
	});
	
var availability_start_date =$('#availability_start_date').val();
 var availability_end_date =$('#availability_end_date').val();
  var date = new Date();
  var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

  $('.date-input').datepicker({
    //format: "dd/mm/yyyy",
    format: "yyyy-mm-dd",
    todayHighlight: true,
    startDate: today,
    autoclose: true
  });
 if(availability_start_date==''){
  $('.date-input').datepicker('setDate', today);
 }
$( "#search-availability" ).submit(function( event ){ //on form submit       
		var pid =$( "#pid" ).val();
		var availability_start_date =$( "#availability_start_date" ).val();
		var availability_end_date=$( "#availability_end_date" ).val();
		var d_check_in = Date.parse(availability_start_date) / 1000;
		var d_check_out = Date.parse(availability_end_date) / 1000;
	  if(d_check_out >= d_check_in){
		  $('#search-by-filter').val(1);
		  $('#date-error').addClass('hidecls');
		  H5_loading.show();
		   //$('#search-form-home').submit();
		    $.ajax({
                        url: baseUrl + "administrator/deactiveProperty",
                        method: "POST",
                        data: {
                            id: pid,
                            availability_start_date: availability_start_date,
                            availability_end_date: availability_end_date
                        },
                        success: function(msg) {
							var pageURL = $(location).attr("href");
                            H5_loading.hide();
							 window.location.href = pageURL
                        }
                    })
		
	  }else{
		 $('#date-error').removeClass('hidecls'); 
	  }	
	  event.preventDefault();
    });
	
	
	 $('body').on('click', '.delete-hotel-user', function() {
		var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to delete this hotel?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Deleted!',
                    text: 'Hotel has been successfully deleted!',
                    icon: 'success'
                }).then(function() {
                    H5_loading.show();
                    $.ajax({
                        url: baseUrl + "administrator/deleteHotel",
                        method: "POST",
                        data: {
                            id: ID
                        },
                        success: function(msg) {
                            H5_loading.hide();
							 window.location.href = pageURL
                        }
                    })
                })
            } else {
                swal("Cancelled", "", "error")
            }
        })
    });
	$('body').on('click', '.active-hotel-user', function() {
		var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to deactive this user?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Deactived!',
                    text: 'User has been  successfully deactived!',
                    icon: 'success'
                }).then(function() {
                    H5_loading.show();
                    $.ajax({
                        url: baseUrl + "administrator/deactiveHotel",
                        method: "POST",
                        data: {
                            id: ID
                        },
                        success: function(msg) {
                            H5_loading.hide();
							 window.location.href = pageURL
                        }
                    })
                })
            } else {
                swal("Cancelled", "", "error")
            }
        })
    });
	$('body').on('click', '.deactive-hotel-user', function() {
		var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to active this user?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Actived!',
                    text: 'User has been  successfully actived!',
                    icon: 'success'
                }).then(function() {
                    H5_loading.show();
                    $.ajax({
                        url: baseUrl + "administrator/activeHotel",
                        method: "POST",
                        data: {
                            id: ID
                        },
                        success: function(msg) {
                            H5_loading.hide();
							 window.location.href = pageURL
                        }
                    })
                })
            } else {
                swal("Cancelled", "", "error")
            }
        })
    });
	$( "#my_hotel" ).submit(function( event ){ //on form submit       
        var proceed = true;
        $("#my_hotel input[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
				}
				//check invalid email
                var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
                if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                    $(this).css('border-color','red'); //change border color to red  
					proceed = false; //set do not proceed flag            
                }
               
        });
        if(proceed){
			H5_loading.show();
			var formData = $("#my_hotel").serialize();
			var hotel_id = $('#hotel_id').val();
			$.ajax({
				type: "POST",
				url: baseUrl+'administrator/hotelRegistartionWithAjax',
				data: {
					formdata : formData
				},
				success: function(msgData) {
					H5_loading.hide();
					if(msgData==1){
						if(hotel_id==''){
							$('#username,\
							#email,#hotel_name').val('');
						}
						$('#reg-form-success').removeClass('hide');
						
					}else{
					   $('#reg-form-success').addClass('hide');
					   $('#reg-form-warning').removeClass('hide');
					}
					
					return false;
				}
			});
			
				
        }
        event.preventDefault(); 
    });
	$("#my_hotel input[required=true],textarea[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
	});
	
	$( "#my_property" ).submit(function( event ){ //on form submit       
        var proceed = true;
		var desc = CKEDITOR.instances.description.getData();
        $("#my_property input[required=true],select[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
				}
	});
	$(".js-example-basic-single").each(function(){

    		var selected_value = $(this).val();

    		if (selected_value==0 || selected_value=='') {
        	$(this).next().find('.select2-selection').addClass('errorType');
             proceed = false;
    		} else {
            $(this).next().find('.select2-selection').removeClass('errorType');
        }

		});
	if(desc==''){
		$('#cke_description').addClass('errorType');
	}else{
		$('#cke_description').removeClass('errorType');
	}
	
	
        if(proceed){
			H5_loading.show();
			
			var formData = $("#my_property").serialize()+ "&description=" + desc;
			var property_id = $('#property_id').val();
			
			
			$.ajax({
				type: "POST",
				url: baseUrl+'administrator/addProperty',
				data: {
					formdata : formData
				},
				success: function(msgData) {
					H5_loading.hide();
					if(msgData==1){
						if(property_id==''){
							$('#my_property input:text,#my_property select').val('');
							 
						}
						$('#prop-form-success').removeClass('hide');
						$('#hotel_id').focus();
						     $('#discount_span').text('');
								$(".js-example-basic-single").select2({
									placeholder: "Any",
									allowClear: true,
									width: '100%'
								});
						
					}else{
					   $('#prop-form-success').addClass('hide');
					  
					}
					
					return false;
				}
			});
			
				
        }
        event.preventDefault(); 
    });
	$("#my_property input[required=true],textarea[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
	});
	
	
	  $('.js-example-basic-single').on('change', function(){
        if ($(this).val()!=0 && $(this).val()!='') {
        	$(this).next().find('.select2-selection').removeClass('errorType');
        }
  });
	 
	 $('body').on('click', '.delete-property', function() {
		var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to delete this property?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Deleted!',
                    text: 'Property has been successfully deleted!',
                    icon: 'success'
                }).then(function() {
                    H5_loading.show();
                    $.ajax({
                        url: baseUrl + "administrator/deleteProperty",
                        method: "POST",
                        data: {
                            id: ID
                        },
                        success: function(msg) {
                            H5_loading.hide();
							 window.location.href = pageURL
                        }
                    })
                })
            } else {
                swal("Cancelled", "", "error")
            }
        })
    });
	$( "#my_property_gallery" ).submit(function( event ){
		/*event.preventDefault();
		var g_image = $('#customFileLang').val();
		if(g_image==''){
			$('#g-images').css('border-color','#dc3545');
		}else{
			$('#g-images').css('border-color','');
			$( "#my_property_gallery" ).submit();
			
		}*/
	});		
	$('body').on('click', '.delete-property-image', function() {
		var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to delete this image?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Deleted!',
                    text: 'Image has been successfully deleted!',
                    icon: 'success'
                }).then(function() {
                    H5_loading.show();
                    $.ajax({
                        url: baseUrl + "administrator/deletePropertyImage",
                        method: "POST",
                        data: {
                            id: ID
                        },
                        success: function(msg) {
                            H5_loading.hide();
							 window.location.href = pageURL
                        }
                    })
                })
            } else {
                swal("Cancelled", "", "error")
            }
        })
    });
	
	$( "#my_service" ).submit(function( event ){ //on form submit       
        var proceed = true;
        $("#my_service input[required=true],file[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
				}
				
               
        });
        if(proceed){
			var desc = CKEDITOR.instances.description.getData();
			H5_loading.show();
			$( "#my_service" ).submit();
			
				
        }
        event.preventDefault(); 
    });
	$('body').on('click', '.delete-service', function() {
		var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to delete this service?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Deleted!',
                    text: 'Service has been successfully deleted!',
                    icon: 'success'
                }).then(function() {
                    H5_loading.show();
                    $.ajax({
                        url: baseUrl + "administrator/deleteService",
                        method: "POST",
                        data: {
                            id: ID
                        },
                        success: function(msg) {
                            H5_loading.hide();
							 window.location.href = pageURL
                        }
                    })
                })
            } else {
                swal("Cancelled", "", "error")
            }
        })
    });
	
		$( "#my_category" ).submit(function( event ){ //on form submit       
        var proceed = true;
        $("#my_category input[required=true],file[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
				}
				
               
        });
        if(proceed){
			//var desc = CKEDITOR.instances.description.getData();
			H5_loading.show();
			$( "#my_category" ).submit();
			
				
        }
        event.preventDefault(); 
    });
	$('body').on('click', '.delete-category', function() {
		var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to delete this category?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Deleted!',
                    text: 'Category has been successfully deleted!',
                    icon: 'success'
                }).then(function() {
                    H5_loading.show();
                    $.ajax({
                        url: baseUrl + "administrator/deleteCategory",
                        method: "POST",
                        data: {
                            id: ID
                        },
                        success: function(msg) {
                            H5_loading.hide();
							 window.location.href = pageURL
                        }
                    })
                })
            } else {
                swal("Cancelled", "", "error")
            }
        })
    });
		$('body').on('click', '.delete-banner-image', function() {
		var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to delete this banner image?",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Deleted!',
                    text: 'Banner image has been successfully deleted!',
                    icon: 'success'
                }).then(function() {
                    H5_loading.show();
                    $.ajax({
                        url: baseUrl + "administrator/deleteBannerImage",
                        method: "POST",
                        data: {
                            id: ID
                        },
                        success: function(msg) {
                            H5_loading.hide();
							 window.location.href = pageURL
                        }
                    })
                })
            } else {
                swal("Cancelled", "", "error")
            }
        })
    });
	//Add More Filed//
	
	 var maxField = 2; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="col-md-12 main-div"><div class="col-md-6" style="float:left;">\
					  <select class="form-control js-example-basic-single1" name="room_type[]" placeholder="Enter Category Name" required="true">\
						<option value="">Select beds</option>\
												<option value="1">Single</option>\
												<option value="2">Double</option>\
												</select></div><div class="col-md-6" style="float:left;">\
						<a href="javascript:void(0);" class="remove_button" title="Remove field"><i class="ni ni-fat-delete"></i></a>\
                     </div></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
			
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent().parent('div.main-div').remove(); //Remove field html
        x--; //Decrement field counter
    });
	
	
	$('body').on('click', '.active-property', function() {
		var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to disable this property? ",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
				$('#pid').val(ID);
				$('#add-search-availability').modal('show');
					 return false;
                swal({
                    title: 'Disable!',
                    text: 'Property has been  successfully disable!',
                    icon: 'success'
                }).then(function() {
					 
                    H5_loading.show();
                    $.ajax({
                        url: baseUrl + "administrator/deactiveProperty",
                        method: "POST",
                        data: {
                            id: ID
                        },
                        success: function(msg) {
                            H5_loading.hide();
							 window.location.href = pageURL
                        }
                    })
                })
            } else {
                swal("Cancelled", "", "error")
            }
        })
    });
	$('body').on('click', '.deactive-property', function() {
		var pageURL = $(location).attr("href");
        var ID = $(this).attr('rel');
        swal({
            title: "Are you sure you want to enable this property? ",
            text: "",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: !0,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Enable!',
                    text: 'Property has been  successfully enable!',
                    icon: 'success'
                }).then(function() {
                    H5_loading.show();
                    $.ajax({
                        url: baseUrl + "administrator/activeProperty",
                        method: "POST",
                        data: {
                            id: ID
                        },
                        success: function(msg) {
                            H5_loading.hide();
							 window.location.href = pageURL
                        }
                    })
                })
            } else {
                swal("Cancelled", "", "error")
            }
        })
    });
    
     $( "#my_discount" ).submit(function( event ){ //on form submit       
        var proceed = true;
        $("#my_discount input[required=true]").each(function(){
                $(this).css('border-color',''); 
                if(!$.trim($(this).val())){ //if this field is empty 
                    $(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
				}
		 });
        if(proceed){
			H5_loading.show();
			var formData = $("#my_discount").serialize();
			
			$.ajax({
				type: "POST",
				url: baseUrl+'administrator/myDiscount',
				data: {
					formdata : formData
				},
				success: function(msgData) {
					H5_loading.hide();
					if(msgData==1){
						$('#discount-form-success').removeClass('hide');
					}
					return false;
				}
			});
			
				
        }
        event.preventDefault(); 
    });
	$("#my_discount input[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
	});
	$("#room_category").change(function() { 
       var room_category =$(this).val();

	 
	   if(room_category==1 || room_category==2){
		     $("#number_of_guest_select").select2("val", '2');
		     $("#number_of_guest").val(2);
	   }
	   if(room_category==3 || room_category==4){
		     $("#number_of_guest_select").select2("val", '4');
		      $("#number_of_guest").val(4);
	   }
	});
    
});
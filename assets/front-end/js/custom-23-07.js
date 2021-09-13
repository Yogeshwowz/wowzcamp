$('.ws-carousal').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: '<div class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
    nextArrow: '<div class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>',
    responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
          },
        },
      ],
});

var numSlick = 0;
$('.room-listing-c').each( function() {
  numSlick++;
  $(this).addClass( 'slider-' + numSlick ).slick({
    dots: false,
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.room-listing-c-thumb.slider-' + numSlick
  });
});

numSlick = 0;
$('.room-listing-c-thumb').each( function() {
  numSlick++;
  $(this).addClass( 'slider-' + numSlick ).slick({
    dots: false,
    arrows: true,
    centerMode: true,
    centerPadding: '0px',
    slidesToShow: 5,
    slidesToScroll: 1,
    focusOnSelect: true,
    prevArrow: '<div class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
    nextArrow: '<div class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>',
    asNavFor: '.room-listing-c.slider-' + numSlick,
  });
});


$(document).ready(function() {
var baseUrl = $('#baseURL').val();
 var check_in =$('#check_in').val();
 var check_out =$('#check_out').val();
  var date = new Date();
  var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

  $('.date-input').datepicker({
    //format: "dd/mm/yyyy",
    format: "yyyy-mm-dd",
    todayHighlight: true,
    startDate: today,
    autoclose: true
  });
 if(check_in==''){
  $('.date-input').datepicker('setDate', today);
 }

$('body').on('click', '.adultstext', function() {
});

$('body').on('click', '.minus', function() {
    var $input = $(this).parent().find('input');
	var count = parseInt($input.val()) - 1;
	count = count < 1 ? 1 : count;
    $input.val(count);
    $input.change();
	
	var children = $(this).parent().parent().parent().find('.children').find('input').val();
	var value = count+ parseInt(children);
	$sum =0;
	var inputs = $(".adultstext");
	for(var i = 0; i < inputs.length; i++){
     $sum = parseInt($sum) + parseInt($(inputs[i]).val());
	}
	$('#guest_span').text($sum);
    return false;
	
  });
  $('body').on('click', '.plus', function() {
	var $input = $(this).parent().find('input');
	if($input.val() >=2){
		 return false;
	}
	var count =parseInt($input.val()) + 1;
	$input.val(count);
    $input.change();
	//var divhtml = $(this).parent().parent().parent().parent().html();
	var children = $(this).parent().parent().parent().find('.children').find('input').val();
	var value = count+ parseInt(children);
	$sum =0;
	var inputs = $(".adultstext");
	for(var i = 0; i < inputs.length; i++){
     $sum = parseInt($sum) + parseInt($(inputs[i]).val());
	}
	$('#guest_span').text($sum);
    return false;
  });
  
	$('body').on('click', '.plus-children', function() {
	var $input = $(this).parent().find('input');
	//if($input.val()==0){ $('#childreen_1').removeClass('hidecls'); $('#childreen_2').addClass('hidecls');}
	//if($input.val()==1){ $('#childreen_2').removeClass('hidecls');}
	if($input.val() >=2){
		 return false;
	}else{
		var childvalue = $(this).parent().parent().find('.childdivid').val();
       var childrenhtml = $(this).parent().parent().parent().parent().parent().find('#add_more_div_'+childvalue).append('<div class="col-md-6 d-flex" id="add_more_div_'+childvalue+'_'+$input.val()+'">\
						<div class="g-group children-age ">\
							<label>Children</label>\
							<div class="number">\
								<span class="minus-children">-</span>\
								<input type="text"     name="children_age_'+childvalue+'[]" value="1"/>\
								<span class="plus-children-age">+</span>\
							</div>\
						</div>\
					</div>');
	}
	var count =parseInt($input.val()) + 1;
	$input.val(count);
	$input.change();
	return false;
  });

	$('body').on('click', '.minus-children', function() {
     var $input = $(this).parent().find('input');
	 var childvalue = $(this).parent().parent().parent().parent().find('.childdivid').val();
	 var count = parseInt($input.val()) - 1;
	 var childrenhtml1 = $(this).parent().parent().parent().parent().find('#add_more_div_'+childvalue+'_'+count+'').remove();
	 
	if(count==parseInt(0) || count==parseInt(-1)){
		$input.val(0);
		$input.change();
		//var adults = $('#adults').val();
		//var value = parseInt(adults);
		//$('#guest_div').text(value+' Guests');
		//return false;
	}else{
    count = count < 1 ? 1 : count;
    $input.val(count);
    $input.change();
	//var adults = $('#adults').val();
	//var value = count+ parseInt(adults);
	//$('#guest_div').text(value+' Guests');
    //return false;
	}
  });

$('body').on('click', '.plus-children-age', function() {
	var $input = $(this).parent().find('input');
	
	if($input.val() >=12){
		 return false;
	}
	var count =parseInt($input.val()) + 1;
	
    $input.val(count);
	$input.change();
	return false;
  });



 var rangeSlider = function(){
  var slider = $('.range-slider-p'),
      range = $('.range-slider__range'),
      value = $('.range-slider__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $(this).next(value).html(this.value);
      $('#prange').val(this.value);
    });
  });
};

rangeSlider();
 
 
 $(".search-by-filter").click(function() { 
 
var locationid=$( "#locationid option:selected" ).text();
 if(locationid=='Location' || locationid=='Search'){
	 $('.locspan').text('Kasauli Wilderness Camp');
 }else{
	  $('.locspan').text(locationid);
 }
 var check_in=$( "#check_in" ).val();
 var check_out=$( "#check_out" ).val();
 
  var d_check_in = Date.parse(check_in) / 1000;
  var d_check_out = Date.parse(check_out) / 1000;
  if(d_check_out >= d_check_in){
	  $('#search-by-filter').val(1);
	  $('#date-error').addClass('hidecls');
	   loadPaginationRecord(0);
	
  }else{
	 $('#date-error').removeClass('hidecls'); 
  }
});
 $(".search-filter").change(function() { 
 var locationid=$( "#locationid option:selected" ).text();
 if(locationid=='Location' || locationid=='Search'){
	 $('.locspan').text('Kasauli Wilderness Camp');
 }else{
	  $('.locspan').text(locationid);
 }
 loadPaginationRecord(0);
	
});

 $(".search-filter-radio").change(function() { 
 var search_filter = $(this).val();
 if(search_filter=='all'){ 
	$('#labelall').addClass('ptyeactive');
	$('#labelroom,#labeltent').removeClass('ptyeactive');
 }
 if(search_filter=='room'){ 
    $('.protype').text('Rooms')
	$('#labelroom').addClass('ptyeactive');
	$('#labelall,#labeltent,#labelcottage,#labelcamping').removeClass('ptyeactive');
 }
 if(search_filter=='tent'){ 
  $('.protype').text('Tents')
	$('#labeltent').addClass('ptyeactive');
	$('#labelall,#labelroom,#labelcottage,#labelcamping').removeClass('ptyeactive');
 }
  if(search_filter=='cottage'){ 
  $('.protype').text('Cottage')
	$('#labelcottage').addClass('ptyeactive');
	$('#labelall,#labelroom,#labeltent,#labelcamping').removeClass('ptyeactive');
 }
 if(search_filter=='camping'){ 
  $('.protype').text('Camping')
	$('#labelcamping').addClass('ptyeactive');
	$('#labelall,#labelroom,#labeltent,#labelcottage').removeClass('ptyeactive');
 }
  loadPaginationRecord(0);
	
});





	$('#pagination_room_ul').on('click','a',function(e){
				e.preventDefault(); 
				 $(window).scrollTop(0);
				var pageno = $(this).attr('data-ci-pagination-page');
				$('#search-form').submit();
			});
	
	
	
	
	var pageURL = $(location).attr("href");
	var rooms = baseUrl+'rooms';
	var tents = baseUrl+'tents';
	var cottage = baseUrl+'cottage';
	var camping = baseUrl+'camping';
	if(pageURL==rooms || pageURL==tents || pageURL==cottage || pageURL==camping){ 
		loadPaginationRecord(0);
	}
	$('#pagination_room').on('click','a',function(e){
				e.preventDefault(); 
				 $(window).scrollTop(0);
				var pageno = $(this).attr('data-ci-pagination-page');
				loadPaginationRecord(pageno);
			});
			
			// Load pagination
			function loadPaginationRecord(pagno){
				H5_loading.show();
				var formData = $("#search-form").serialize();
				
			   $.ajax({
					url: baseUrl+'home/loadRecordRoom/'+pagno,
					type: 'post',
					dataType: 'json',
					data  :{
						pagno :pagno,
						formdata : formData
					},
					success: function(response){
						H5_loading.hide();
						$('#pagination_room').html(response.pagination);
						$('.count-V').text(response.allcount);
						createTable(response.result,response.row);
						var numSlick = 0;
						$('.room-listing-c').each( function() {
						  numSlick++;
						  $(this).addClass( 'slider-' + numSlick ).slick({
							dots: false,
							arrows: false,
							slidesToShow: 1,
							slidesToScroll: 1,
							asNavFor: '.room-listing-c-thumb.slider-' + numSlick
						  });
						});

						numSlick = 0;
						$('.room-listing-c-thumb').each( function() {
						  numSlick++;
						  $(this).addClass( 'slider-' + numSlick ).slick({
							dots: false,
							arrows: true,
							centerMode: true,
							centerPadding: '0px',
							slidesToShow: 5,
							slidesToScroll: 1,
							focusOnSelect: true,
							prevArrow: '<div class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
							nextArrow: '<div class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>',
							asNavFor: '.room-listing-c.slider-' + numSlick,
							responsive: [
                                {
                                  breakpoint: 768,
                                  settings: {
                                    slidesToShow: 3,
                                  },
                                },
                              ],
						  });
						});

						}
				});

			}
			
			// Create table list
			function createTable(result,sno){
				var ptype = $("input[name='ptype']:checked").val();
				var countTable =result.length;
				sno = Number(sno);
				$('#postsList').empty();
				
				if(countTable > 0){
					for(index in result){
						var id = result[index].id;
						var property_type = result[index].property_type;
						var hotel_name = result[index].hotel_name;
						var propertyname = result[index].propertyname;
						var price = result[index].price;
						var after_discount_price = result[index].after_discount_price;
						var city = result[index].city;
						var description = result[index].description;
						var discount = result[index].discount;
						var rating = result[index].rating;
						var address = result[index].address;
						var amenities = result[index].amenities.slice(0,3);
						var rating_status = result[index].rating_status;
						var galleryimage = result[index].gallery;
						console.log(galleryimage);
						console.log(galleryimage.length);
						var pid = result[index].pid;
						var pathurl = baseUrl+'single-details/'+ptype+'/'+pid;
						var imagepath = baseUrl+'assets/img/no-image.png';
						var tr='<div class="row m-0 pb-4 position-relative">\
						<span class="bottom-line"></span>\
                <div class="col-lg-7 pt-4">\
                    <div class="row no-gutters">\
                        <div class="col-md-12">\
                            <div  class="room-listing-c slider">';
							if(galleryimage.length >0){
							for(gindex in galleryimage){
								//console.log(galleryimage[gindex].gallery_image);
								tr += '<div>\
                                    <img src="'+baseUrl+'assets/upload/gallery/'+galleryimage[gindex].gallery_image+'" alt="" class="img-fluid">\
                                </div>';
							}
							}else{
								//console.log(galleryimage[gindex].gallery_image);
								tr += '<div>\
                                    <img src="'+imagepath+'" alt="" class="img-fluid">\
                                </div>';
							}
						tr += '</div>\
                            <div  class="room-listing-c-thumb slider">';
							for(gindex in galleryimage){
                              tr += '<div>\
                                    <img src="'+baseUrl+'assets/upload/gallery/'+galleryimage[gindex].gallery_image+'" alt="" class="img-fluid">\
                                </div>';
								}
							
								
                              tr += '</div>\
                        </div>';
                     tr += '</div>';              
               tr += '</div>\
                <div class="col-lg-5 pt-4 d-flex flex-column">\
                    <h4 class="main-color mb-0">'+hotel_name+'</h4>\
					<h5 class="propertynamecls">'+propertyname+'</h5>\
                    <p class="d-flex">Location: <span class="text-limit pl-2">'+address+'</span></p>\
                    <div class="rating">'
					tr += '<p>Rating</p>';
                        tr += '<span class="main-btn px-1 ml-2">'+rating+'<i class="fas fa-star pl-2"></i></span>\
                     </div>';
					 tr += '<div class="features py-2">';
					 if(amenities.length >0){
                    tr += '<p>Amenities</p>';
					for(indx in amenities){
						var amenity_name = amenities[indx].amenity_name;
                       tr += ' <span class="main-color2 pl-2"><img src="'+baseUrl+'/assets/img/check-icon.png" alt=""> '+amenity_name+'</span>';
					}
						
					 }
					 tr += ' </div>';
					 if(description!=''){
                    tr += '<div class="list-des"><p>Description</p>\
                        <p>'+description+'</p>\
                    </div>';
					 }
                     tr += '<div class="listing-footer mt-auto">\
                        <span class="listing-price">\
                            <span class="cur-price main-color1"><i class="fas fa-rupee-sign"></i>'+after_discount_price+'</span>\
                            <span class="main-price px-3"><i class="fas fa-rupee-sign"></i> '+price+'</span>\
                            <span class="off-price">'+discount+'% off</span>\
                        </span>\
                        <p>'+rating_status+'</p>\
                        <span class="d-flex justify-content-between">\
                            <a href="javascript:void(0);" class="btn main-btn2 my-2 my-sm-0 view-details" data-path="'+pathurl+'" rel="'+id+'">View Details</a>\
                            <a href="javascript:void(0);" class="btn main-btn my-2 my-sm-0 book_now" rel="'+id+'">BOOK NOW</a>\
                        </span>\
                      </div>\
                </div>\
            </div>\
			';
			$('#postsList').append(tr);
		
				}	

				}else{
					var tr = '<div class="blog-one-item row">';					
						tr += "No Data Found";
						
						tr += "</div>";
						$('#postsList').append(tr);
				}
				
			}
	
	
	 $(document.body).on('click', '.clickgal', function() {
		 var rel =$(this).attr('rel');
		if(rel=='all'){ 
			$('#all_room_div,#all_tent_div').addClass('hidecls');
			$('#all_gallery').removeClass('hidecls');
		 }
		 if(rel=='tent'){ 
			$('#all_gallery,#all_room_div').addClass('hidecls');
			$('#all_tent_div').removeClass('hidecls');
		 }
		 if(rel=='room'){ 
			$('#all_gallery,#all_tent_div').addClass('hidecls');
			$('#all_room_div').removeClass('hidecls');
		 }
	 });
	
	
	
	//Load More Images
	$(document.body).on('click', '.load-more', function() {
		var loadMore = $('.load-more').text();
		if(loadMore=='No More Post'){return false;}
        var row = Number($('#row').val());
        var allcount = Number($('#all').val());
        var rowperpage = 3;
        row = row + rowperpage;

        if(row <= allcount){
            $("#row").val(row);

            $.ajax({
               url: baseUrl+'home/loadMoreGallery/',
                type: 'post',
                data: {row:row},
                beforeSend:function(){
                    $(".load-more").text("Loading...");
                },
                success: function(response){
					// Setting little delay while displaying new content
                    setTimeout(function() {
                        // appending posts after last post with class="post"
                        $(".postcls:last").after(response).show().fadeIn("slow");
						var rowno = row + rowperpage;
						// checking row value is greater than allcount or not
                        if(rowno > allcount){
							// Change the text and background
                            $('.load-more').text("No More Images");
                           // $('.load-more').css("background","darkorchid");
                        }else{
                            $(".load-more").text("Load More");
                        }
                    }, 2000);

                }
            });
        }else{
            $('.load-more').text("Loading...");
			setTimeout(function() {
				// When row is greater than allcount then remove all class='post' element after 3 element
                $('.postcls:nth-child(3)').nextAll('.postcls').remove();
				// Reset the value of row
                $("#row").val(0);
				// Change the text and background
                $('.load-more').text("Load More");
                $('.load-more').css("background","#15a9ce");
                
            }, 2000);


        }
	});


 $(document.body).on('click', '.load-more-room', function() {
		var loadMore = $('.load-more-room').text();
		if(loadMore=='No More Images'){return false;}
        var row = Number($('#row_room').val());
        var allcount = Number($('#all_room').val());
        var rowperpage = 3;
        row = row + rowperpage;

        if(row <= allcount){
            $("#row_room").val(row);

            $.ajax({
               url: baseUrl+'home/loadMoreRoomGallery/',
                type: 'post',
                data: {row:row},
                beforeSend:function(){
                    $(".load-more-room").text("Loading...");
                },
                success: function(response){
					// Setting little delay while displaying new content
                    setTimeout(function() {
                        // appending posts after last post with class="post"
                        $(".postroomcls:last").after(response).show().fadeIn("slow");
						var rowno = row + rowperpage;
						// checking row value is greater than allcount or not
                        if(rowno > allcount){
							// Change the text and background
                            $('.load-more-room').text("No More Images");
                           // $('.load-more').css("background","darkorchid");
                        }else{
                            $(".load-more-room").text("Load More");
                        }
                    }, 2000);

                }
            });
        }else{
            $('.load-more-room').text("Loading...");
			setTimeout(function() {
				// When row is greater than allcount then remove all class='post' element after 3 element
                $('.postroomcls:nth-child(3)').nextAll('.postroomcls').remove();
				// Reset the value of row
                $("#row_room").val(0);
				// Change the text and background
                $('.load-more-room').text("Load More");
                $('.load-more-room').css("background","#15a9ce");
                
            }, 2000);


        }

    });
	$(document.body).on('click', '.load-more-tent', function() {
		var loadMore = $('.load-more-tent').text();
		if(loadMore=='No More Images'){return false;}
        var row = Number($('#row_tent').val());
        var allcount = Number($('#all_tent').val());
        var rowperpage = 3;
        row = row + rowperpage;

        if(row <= allcount){
            $("#row_tent").val(row);

            $.ajax({
               url: baseUrl+'home/loadMoreTentGallery/',
                type: 'post',
                data: {row:row},
                beforeSend:function(){
                    $(".load-more-tent").text("Loading...");
                },
                success: function(response){
					// Setting little delay while displaying new content
                    setTimeout(function() {
                        // appending posts after last post with class="post"
                        $(".posttentcls:last").after(response).show().fadeIn("slow");
						var rowno = row + rowperpage;
						// checking row value is greater than allcount or not
                        if(rowno > allcount){
							// Change the text and background
                            $('.load-more-tent').text("No More Images");
                           // $('.load-more').css("background","darkorchid");
                        }else{
                            $(".load-more-tent").text("Load More");
                        }
                    }, 2000);

                }
            });
        }else{
            $('.load-more-tent').text("Loading...");
			setTimeout(function() {
				// When row is greater than allcount then remove all class='post' element after 3 element
                $('.posttentcls:nth-child(3)').nextAll('.posttentcls').remove();
				// Reset the value of row
                $("#row_tent").val(0);
				// Change the text and background
                $('.load-more-tent').text("Load More");
                $('.load-more-tent').css("background","#15a9ce");
                
            }, 2000);


        }

    });
	
	$('body').on('click', '.more', function() {
		var tId= $(this).attr('rel');
		var ptag= $('#test_full_'+tId).html();
		$('div#test_half_'+tId).addClass('complete');
		$('div#test_full_'+tId).removeClass('complete');
		return false;
	});
	$('body').on('click', '.less', function() {
		var tId= $(this).attr('rel');
		$('div#test_half_'+tId).removeClass('complete');
		$('div#test_full_'+tId).addClass('complete');
		//console.log(tId);
		return false;
	});
	$('body').on('click', '#show_more_allamenity', function() {
		
		$('#allamenity_more').addClass('complete-amenities');
		$('#allamenity_less').removeClass('complete-amenities');
		return false;
	});
	$('body').on('click', '#show_less_allamenity', function() {
		$('#allamenity_more').removeClass('complete-amenities');
		$('#allamenity_less').addClass('complete-amenities');
		var focusElement = $('#allamenity_more'); 
         $(focusElement).focus(); 
		 ScrollToTop(focusElement); 
		
	});
	function ScrollToTop(el, callback) { 
		$('html, body').animate({ scrollTop: $(el).offset().top - 200 }, 'slow', callback);
	} 
	
	//Single Page Pagination
	
	function ScrollToBottom(el, callback) { 
		$('html, body').animate({ scrollBottom: $(el).offset().bottom - 200 }, 'slow', callback);
	} 
	
	
	
$(".search-by-filter-single").click(function() { 
 
var locationid=$( "#locationid option:selected" ).text();
 if(locationid=='Location' || locationid=='Search'){
	 $('.locspan').text('Kasauli Wilderness Camp');
 }else{
	  $('.locspan').text(locationid);
 }
 var check_in=$( "#check_in" ).val();
 var check_out=$( "#check_out" ).val();
 
  var d_check_in = Date.parse(check_in) / 1000;
  var d_check_out = Date.parse(check_out) / 1000;
  if(d_check_out >= d_check_in){
	  $('#search-by-filter').val(1);
	  $('#date-error').addClass('hidecls');
	   loadPaginationForSinglePage(0);
	   	var pid =$(this).attr('rel');
		var datapath =$(this).attr('data-path');
		H5_loading.show();
				var formData = $("#search-form").serialize();
			   $.ajax({
					url: baseUrl+'home/bookNow',
					type: 'post',
					dataType: 'json',
					data  :{
						formdata : formData,
						pid : pid
					},
					success: function(response){
				     H5_loading.hide();
					 window.location.href= datapath;	
						 
					}
				});
	   // End Here
	   
	   
	   
	
  }else{
	 $('#date-error').removeClass('hidecls'); 
  }
});
	
	
	$('#single_pagination').on('click','a',function(e){
				e.preventDefault(); 
				 //$(window).scrollTop(0);

				var pageno = $(this).attr('data-ci-pagination-page');
				loadPaginationForSinglePage(pageno);
				
			});
	
	var pageURLSingle = $(location).attr("href");
	var resUrl = pageURLSingle.split("/");
	if(resUrl[4]=='single-details'){ 
		loadPaginationForSinglePage(0);
	}
	
	// Load pagination
			function loadPaginationForSinglePage(pagno){
				H5_loading.show();
				var formData = $("#search-form").serialize();
			   $.ajax({
					url: baseUrl+'home/loadRecordRoom/'+pagno,
					type: 'post',
					dataType: 'json',
					data  :{
						pagno :pagno,
						formdata : formData
					},
					success: function(response){
						H5_loading.hide();
						$('#single_pagination').empty();
						$('#single_pagination').html(response.pagination);
						$('.count-V').text(response.allcount);
						createTableForPage(response.result,response.row);
						 
					}
				});

			}
			
			// Create table list
			function createTableForPage(result,sno){
				var ptype = $("input[name='ptype']").val();
				var countTable =result.length;
				sno = Number(sno);
				$('#postsList').empty();
				
				if(countTable > 0){
					for(index in result){
						var id = result[index].id;
						var property_type = result[index].property_type;
						var hotel_name = result[index].hotel_name;
						var price = result[index].price;
						var after_discount_price = result[index].after_discount_price;
						var city = result[index].city;
						var description = result[index].description;
						var discount = result[index].discount;
						var rating = result[index].rating;
						var address = result[index].address;
						var amenities = result[index].amenities;
						var rating_status = result[index].rating_status;
					    
						if(result[index].gallery[0]){
								var galleryimage = baseUrl+'assets/upload/gallery/'+result[index].gallery[0].gallery_image;
						}else{
							//var galleryimage ='';
							var galleryimage = baseUrl+'assets/img/no-image.png';
						}
						//console.log(galleryimage[0].gallery_image);
						var pid = result[index].pid;
						//var pathurl = baseUrl+'view-room/'+pid;
						var pathurl = baseUrl+'single-details/'+ptype+'/'+pid;
						var tr='<div class="b-1 br-5 p-3 mb-4">\
                                            <div class="row pb-3 border-bottom">\
                                                <div class="col-md-7">\
                                                    <h4 class="font-weight-bold">'+hotel_name+'</h4>\
													 <p>Location: '+address+'</p>\
                                                    <div class="features py-3">';
														for(indx in amenities){
														var amenity_name = amenities[indx].amenity_name;
														tr += ' <span class="main-color2"><img src="'+baseUrl+'/assets/img/check-icon.png" class="mr-1" alt="">'+amenity_name+'</span>';
														}
													tr += ' </div>\
                                                <div class="col-md-5">';
												if(galleryimage){
													tr += '<img src="'+galleryimage+'"class="img-fluid sel-cat-img" alt="">';
                                               }
                                               tr +=  '</div>\
                                            </div>\
                                            <div class="row pt-3">\
                                                <div class="col-md-7  d-flex align-items-center">\
                                                    <div class="listing-price">\
                                                        <span class="font-weight-bold">₹'+after_discount_price+'</span>\
                                                        <span class="px-3 text-del">₹ '+price+'</span>\
                                                    </div>\
                                                </div>\
                                                <div class="col-md-5 d-flex align-items-center">\
                                                    <a href="javascript:void(0);" class="main-btn2 br-5 py-1 px-2 w-50 view-details" data-path="'+pathurl+'" rel="'+id+'">View Details</a>\
                                                    <a href="javascript:void(0);" class="main-btn br-5 py-1 px-2 w-50 ml-3 book_now" rel="'+id+'">BOOK NOW</a>\
                                                </div>\
                                            </div>\
                                        </div>';
						$('#postsList').append(tr);
		
				}	

				}else{
					var tr = '<div class="blog-one-item row">';					
						tr += "No Data Found";
						
						tr += "</div>";
						$('#postsList').append(tr);
				}
				
			}
	
	$(".pricecls").on('change', function () {
	var price =   $(this).val();
	var pricetxt =  '';
	if(price==1){ pricetxt =  'Upto  ₹2000';}
	if(price==2){ pricetxt =  '₹2000+';}
	if(price==3){ pricetxt =  '₹4000+';}
	if(price==4){ pricetxt =  '₹6000+';}
	if(price==5){ pricetxt =  'More Then ₹8000';}
	if(price==6){ pricetxt =  'Any';}
	
	$('.remove-price-div').remove();
	var tr='<div class="remove-price-div csf">\
					<input type="hidden" name="price-d[]"   rel="'+price+'" class="zoning-d" />Price:\
				   '+pricetxt+'<span aria-hidden="true" class="remove-price" rel="'+price+'">×</span>\
					</div>';
					$('#search_filter_list').prepend(tr);
	});
	
	$(".ptypecls").on('change', function () {
	var ptype =   $(this).val();
	var ptypetxt =  '';
	if(ptype=='all'){ ptypetxt =  'ALL';}
	if(ptype=='room'){ ptypetxt =  'Rooms';}
	if(ptype=='tent'){ ptypetxt =  'Tent';}
	if(ptype=='cottage'){ ptypetxt =  'Cottage';}
	if(ptype=='camping'){ ptypetxt =  'Camping';}
	
	$('.remove-ptype-div').remove();
	var tr='<div class="remove-ptype-div csf">\
					<input type="hidden" name="ptype-d[]"   rel="'+ptype+'" class="zoning-d" />Property Type:\
				   '+ptypetxt+'<span aria-hidden="true" class="remove-ptype" rel="'+ptype+'">×</span>\
					</div>';
					$('#search_filter_list').prepend(tr);
	});
	
	$("input[name='rating[]']").on('click', function () {
	 if($(this).prop("checked") == true){
			 var rating =   $(this).val();
			 if ($("input[name='rating[]']").is(':checked')) {
				  var tr='<div class="remove-rating-div-'+rating+' csf">\
			<input style="display:none;" name="rating-d[]" rel="'+rating+'" class="rating-d" />\
				   '+rating+' Star<span aria-hidden="true" class="remove-rating" rel="'+rating+'">×</span>\
					</div>';
					$('#search_filter_list').prepend(tr);
			}
         }
		 if($(this).prop("checked") == false){
			  var rating =   $(this).val();
			 $('.remove-rating-div-'+rating).remove();
		} 
    });
	$("input[name='amenity[]']").on('click', function () {
	 if($(this).prop("checked") == true){
			 var amenity =   $(this).val();
			 var amenitytxt =   $(this).attr('rel');
			 if ($("input[name='amenity[]']").is(':checked')) {
				  var tr='<div class="remove-amenity-div-'+amenity+' csf">\
			<input style="display:none;" name="amenity-d[]" rel="'+amenity+'" class="amenity-d" />\
				   '+amenitytxt+'<span aria-hidden="true" class="remove-amenity" rel="'+amenity+'">×</span>\
					</div>';
					$('#search_filter_list').prepend(tr);
			}
         }
		 if($(this).prop("checked") == false){
			  var amenity =   $(this).val();
			 $('.remove-amenity-div-'+amenity).remove();
		} 
    });
	
	$('body').on('click', '.remove-amenity', function() {
		var relV = $(this).attr('rel');
		 $('.caseAmenity').filter(function(){return this.value==relV}).prop('checked',false);
		     $(this).parent().remove();
			 loadPaginationRecord(0);
	  });
	
	$('body').on('click', '.remove-price', function() {
		var relV = $(this).attr('rel');
		 $('.pricecls').filter(function(){return this.value==relV}).prop('checked',false);
		     $(this).parent().remove();
			 loadPaginationRecord(0);
	  });
	  $('body').on('click', '.remove-ptype', function() {
		var relV = $(this).attr('rel');
		$('.ptypecls').filter(function(){return this.value==relV}).prop('checked',false);
			$(this).parent().remove();
		    $('#property-type2').prop('checked',true);
			loadPaginationRecord(0);
	  });
	  	$('body').on('click', '.remove-rating', function() {
		var relV = $(this).attr('rel');
		 $('.ratingcls').filter(function(){return this.value==relV}).prop('checked',false);
		     $(this).parent().remove();
			 loadPaginationRecord(0);
	  });
	  

	  
	
	
	$('body').on('click', '.book_now', function() {
		var pid =$(this).attr('rel');
		H5_loading.show();
				var formData = $("#search-form").serialize();
			   $.ajax({
					url: baseUrl+'home/bookNow',
					type: 'post',
					dataType: 'json',
					data  :{
						formdata : formData,
						pid : pid
					},
					success: function(response){
				     H5_loading.hide();
					 window.location.href= baseUrl  + "booking";	
						 
					}
				});
	});
	
	
		$( "#my_booking_form" ).submit(function( event ){ //on form submit       
        var proceed = true;
        $("#my_booking_form input[required=true]").each(function(){
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
			var formData = $("#my_booking_form").serialize();
			
			$.ajax({
				type: "POST",
				url: baseUrl+'home/orderbooking',
				data: {
					formdata : formData
				},
				success: function(msgData) {
					H5_loading.hide();
					window.location.href= baseUrl  + "payment-method";	
					
					return false;
				}
			});
			
				
        }
        event.preventDefault(); 
    });
	$("#my_booking_form input[required=true],textarea[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
	});
	
	 $(".numbervalidation").on("keypress keyup blur",function (event) {    
           $(this).val($(this).val().replace(/[^\d].+/, ""));
            if ((event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });	
		
		$('body').on('click', '.view-details', function() {
		var pid =$(this).attr('rel');
		var datapath =$(this).attr('data-path');
		H5_loading.show();
				var formData = $("#search-form").serialize();
			   $.ajax({
					url: baseUrl+'home/bookNow',
					type: 'post',
					dataType: 'json',
					data  :{
						formdata : formData,
						pid : pid
					},
					success: function(response){
				     H5_loading.hide();
					 window.location.href= datapath;	
						 
					}
				});
	});
	
	$('body').on('click', '.search-by-filter-single-page', function() {
		var pid =$(this).attr('rel');
		var datapath =$(this).attr('data-path');
		H5_loading.show();
				var formData = $("#search-form").serialize();
			   $.ajax({
					url: baseUrl+'home/bookNow',
					type: 'post',
					dataType: 'json',
					data  :{
						formdata : formData,
						pid : pid
					},
					success: function(response){
				     H5_loading.hide();
					 window.location.href= datapath;	
						 
					}
				});
	});
	
	//var x = 1; //Initial field counter is 1
	var x = $('#startField').val(); //Initial field counter is 1
	
	var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="col-md-12 main-div"><div class="col-md-10">\
                    <div class="g-group adults">\
                        <label>Adults(12+ y r)</label>\
                        <div class="number">\
                            <span class="minus">-</span>\
                            <input type="text"   name="adults[]" value="1"/>\
                            <span class="plus plusmore">+</span>\
                        </div>\
                    </div>\
                    <div class="g-group children">\
                        <label>Children</label>\
                        <div class="number">\
                            <span class="minus-children">-</span>\
                            <input type="text"     name="children[]" value="0"/>\
							<span class="plus-children">+</span>\
                        </div>\
                    </div>\
                </div><div class="col-md-2">\
						<a href="javascript:void(0);" class="remove_button" title="Remove field">Remove Room</i></a>\
                     </div></div>'; //New input field html 
    
    
    //Once add button is clicked
    $(addButton).click(function(){
		
        //Check maximum number of input fields
        if(x < maxField){ 
		
            x++; //Increment field counter
           // $(wrapper).append(fieldHTML); //Add field html
            $(wrapper).append('<div class="row main-div m-0" id="add_more_div_'+x+'" rel="'+x+'">\
			<div class="col-md-12">\
            			<h6 class="main-color">Room <span class="roomper">'+x+'</span></h6>\
                 </div>\
                    <div class="col-md-12 room_list">\
					<label>Adults(12+ y r)</label>\
                    <div class="g-group adults ">\
                        <div class="number">\
                            <span class="minus">-</span>\
                            <input type="text"  class="adultstext"   name="adults[]" value="1"/>\
                            <span class="plus plusmore">+</span>\
                        </div>\
                    </div>\
					<a href="javascript:void(0);" class="remove_button" title="Remove field"><i class="fas fa-trash"></i> Remove Room</i></a>\
                </div></div>'); //Add field html
					 
		}
		var guest_span = $('#guest_span').text();
		var  sum = parseInt(guest_span) + parseInt(1);
		$('#guest_span').text(sum);
		
		var guest_room_span = $('#guest_room_span').text();
		var  sumRoom = parseInt(guest_room_span) + parseInt(1);
		$('#guest_room_span').text(sumRoom);
		$('#guest_room').text('Rooms');
		
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
		
        $(this).parent().parent('div.main-div').remove(); //Remove field html
        x--; //Decrement field counter
		//var children = $(this).parent().parent().parent().find('.children').find('input').val();
		var adults = $(this).parent().parent('div.main-div').find('.adults').find('.adultstext').val();
		
		var guest_span = $('#guest_span').text();
		var  sum = parseInt(guest_span) - parseInt(adults);
		$('#guest_span').text(sum);
		
		var guest_room_span = $('#guest_room_span').text();
		var  sumRoom = parseInt(guest_room_span) - parseInt(1);
		$('#guest_room_span').text(sumRoom);
		if(guest_room_span==2){
			$('#guest_room').text('Room');
		}
		
		$('.roomper').each(function(index, item) {
			
		    //console.log($(item).text());
		   //console.log($(item).val());
			 console.log(index);
			if(index > 0){
			 $(item).text((index+1));
			}
			
		});
		
    });
    
    $(".search-filter-single").change(function() { 
		$('#search-form').submit();
	});
		
});


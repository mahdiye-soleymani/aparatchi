$(document).ready(function(){
	var settime = {};
	$("#top_menu li").hover(function(){
		var element = $(this);
		var settimeproperty = element.attr("data-settime");
		clearTimeout(settime[settimeproperty]);
		settime[settimeproperty] = setTimeout(function(){
			$(" > ul" , element).fadeIn();
		    $("> div" ,element).fadeIn();
		},600);
	},function(){
		var element = $(this);
		var settimeproperty = element.attr("data-settime");
		clearTimeout(settime[settimeproperty]);
		settime[settimeproperty] = setTimeout(function(){
			$(" > ul" , element).fadeOut();
		    $(" > div" ,element).fadeOut();
		},600);
	});

	var slider = $("#creatslider");
	var sliderItem = slider.find("#slider_item_img .show_item");
    var sliderLi = slider.find("#li_nav li");
    var totalItem = sliderItem.length;
	var nextslider = 1;
	function getSlider(){
        if(nextslider > totalItem){
            nextslider = 1;
        }
        else if(nextslider < 1){
            nextslider = totalItem;
        }
		sliderItem.hide();
		sliderItem.eq(nextslider-1).fadeIn();
        sliderLi.removeClass("active");
        sliderLi.eq(nextslider-1).addClass("active");
		nextslider ++;
	}
    $(".icon_next_show_left",slider).click(function(){
        getShowItemNext();
    });
    function getShowItemNext(){
        getSlider();
    }
    $(".icon_prev_show_right",slider).click(function(){
        getShowItemPrev();
    });
    function getShowItemPrev(){
        nextslider -=2;
        getSlider();
    }
    $("#li_nav li",slider).click(function(){
        var number = $(this).index();
        nextslider = number +1;
        getSlider();
    });
    var startSliderTimer = 3000;
    getSlider();
    setInterval(getSlider,startSliderTimer);

    var clock;

    clock = $('.fliptimer').FlipClock({
        //clockFace: 'DailyCounter',
        autoStart: false,
        callbacks: {
            stop: function() {
                $('#right_content').css('opacity',.6);
                $('.message').fadeIn();
            }
        }
        });
                    
        clock.setTime(2);
        clock.setCountdown(true);
        clock.start();

        /***************** start slider_advance *******************************/
    var slider_advance = $("#slideradvance");
    var slider_advanceItem = slider_advance.find("#right_content .show_item");
    var slider_advanceLi = slider_advance.find("#left_nav li");
    var total_advanceItem = slider_advanceItem.length;
    var nextslider_advance = 1;
    function getSliderAdvance(){
        if(nextslider_advance > total_advanceItem){
            nextslider_advance = 1;
        }
        else if(nextslider_advance < 1){
            nextslider_advance = total_advanceItem;
        }
        slider_advanceItem.hide();
        slider_advanceItem.eq(nextslider_advance-1).fadeIn();
        slider_advanceLi.removeClass("active");
        slider_advanceLi.eq(nextslider_advance-1).addClass("active");
        nextslider_advance ++;
    }
    $("#left_nav li",slider_advance).click(function(){
        var numberAdvance = $(this).index();
        //alert(numberAdvance);
        nextslider_advance = numberAdvance +1;
        getSliderAdvance();
    });
    var startSlider_advanceTimer = 3000;
    getSliderAdvance();
    setInterval(getSliderAdvance,startSlider_advanceTimer);

    /****************End slider_advance************************************/

    /********************************** start tophit ***********************/

    function getTophitSlider(posation,span){
        var element = $(span);
        var tophit = element.parents(".tophit");
        var tophitUl = tophit.find(".slider_content ul");
        var tophitLi = tophitUl.find("li");
        var tophitLiNum = tophitLi.length;
        var tophitShow = Math.ceil(tophitLiNum/4);//12/4=3
        var maxMargin = -(tophitShow -1) * 800;
        tophitUl.css("width",tophitLiNum*200);
        var currentMarginUl = tophitUl.css("margin-right");
        currentMarginUl = parseInt(currentMarginUl);
        if(posation == "next"){
            var newMargin = currentMarginUl -800;
        }
        else if(posation == "prev"){
            var newMargin = currentMarginUl +800;
        }
        if(newMargin < maxMargin){
            newMargin = 0;
        }
        else if(newMargin > 0){
            newMargin = maxMargin;
        }

        tophitUl.animate({"margin-right":newMargin},1000);
    }

    $(".next_icon").click(function(){
        getTophitSlider("next",this);
    });
    $(".prev_icon").click(function(){
        getTophitSlider("prev",this);
    });

    /********************* start checked ***********************/
    $('.check_input').click(function(){
        if($(this).is(':Checked')){
            $(this).parent('li').find('.check_label').addClass('checked');
        }
        else{
             $(this).parent('li').find('.check_label').removeClass('checked');
        }
    });
    /*********************** start search heade filter top ***********************/
    var filter_top = $('.option_filter_top ul > li');

    filter_top.hover(function(){
        $('.list_span_filter_top',this).addClass('seach_header_rilter_top_option_span');
    },function(){
        $('.list_span_filter_top',this).removeClass('seach_header_rilter_top_option_span');
    });
    filter_top.click(function(){
        $('.list_span_filter_top',this).toggleClass('seach_header_rilter_top_option_spanclicked');
    });

   var option_filter_top = $('.option_filter_top li');
    option_filter_top.click(function(){
    var item_top_title = $(this).parents("li").find(".filter_title_top").text();
    var value_item_click = $(this).text();
    var data_num = $(this).attr('data-num');
    var filter_item_append = $(".filter_item_append");
    var span_data_num = $('span[data-num='+data_num+']');
    var count = filter_item_append.find(span_data_num).length;
    if(count > 0){
        span_data_num.remove();

    }else{
        var element_append ='<span data-num='+data_num+' class="title">'+item_top_title+':'+value_item_click+'<label class="item_drop">x</label></li>';
    $('.filter_item_append').append(element_append);
}
    var span_label_drop = $(".item_drop");
    span_label_drop.click(function(){
        $(this).parent("span").remove();
    });
   });

    var search_header_filter_top = $('.search_header_filter_top > li');
    search_header_filter_top.hover(function(){
        $('.option_filter_top',this).slideDown();
    },function(){
        $('.option_filter_top',this).slideUp();
    });

    /*********************** start display_product**********************/
    $(".dispaly_left").click(function(){
        $("#display_product_result").addClass('coustom_dispaly');
        $(this).find("i").addClass("display_item_product_a_active");
        $(".display_right").find("i").removeClass("display_item_product_a_active");
    });
    $(".display_right").click(function(){
        $("#display_product_result").removeClass('coustom_dispaly');
        $(this).find("i").addClass("display_item_product_a_active");
        $(".dispaly_left").find("i").removeClass("display_item_product_a_active");
    });
     /*********************** start ON AND OFF display_product**********************/
     $(".search_filter_on").click(function(){
        $(this).toggleClass("active_onf");
        if($(this).hasClass("active_onf")){
           $(".search_filter_off").css({'display':'none'});
        }else{
            $(".search_filter_on").css({'display':'none'});
             $(".search_filter_off").css({'display':'block'});
        }
     });
     $(".search_filter_off").click(function(){
        $(this).toggleClass("active_onf");
        if($(this).hasClass("active_onf")){
           $(".search_filter_on").css({'display':'none'});
        }else{
            $(".search_filter_on").css({'display':'block'});
            $(".search_filter_off").css({'display':'none'});
        }
     });


     /***************************** start code span_ select_color********************/
     var selet_parent_span = $(".header_info_dispaly_right > ul > li");
        selet_parent_span.click(function(){
            $(this).find('.active_select').toggleClass('checked');
    });
     /*************************** show_more ***************************/
     $(".show_more").click(function(){
        $(".more").toggleClass("more_active");
     });
      /*************************** show_more child tab***************************/
      $(".tab_more li").click(function(){
        var indexli = $(this).index();
        $(".tab_more li").removeClass("tab_more_hover_li");
        $(this).addClass("tab_more_hover_li");
        $("#child_tab section").fadeOut(0);
        $("#child_tab section").eq(indexli).fadeIn(50);
      });

    /*************************** show_item_content***************************/
    $("#child_tab .item h4").click(function(){
        $(".item_icon,this").toggleClass("item_icon_active");
        var item_parent = $(this).parent(".item");
        $(".item_content" ,item_parent).slideToggle(50);
    });
    
    /*************************** display block in click img_down_icon_td***************************/

    $('.img_down_icon_td').click(function(){
        $('.info_order').fadeToggle();
    });

    /*************************** show_more child tab Acount***************************/
      $(".tab_header_Acount li").click(function(){
        var Acount_indexli = $(this).index();
        $(".tab_header_Acount li").removeClass("tab_more_hover_li");
        $(this).addClass("tab_more_hover_li");
        $(".child_tab section").fadeOut(0);
        $(".child_tab section").eq(Acount_indexli).fadeIn(50);
      });

    /*************************** get modal ***************************/
    $(".btn_modal").click(function(){
        $(".modal").fadeIn();
    });
    $(".close").click(function(){
        $(".modal").fadeOut();
        $(this).addClass("active");
    });
});




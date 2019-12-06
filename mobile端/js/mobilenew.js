$(".secoundbody").css("height",$(window).height())

var newtab = function(){
		var doms = $('#newnav div');
		for(var i of doms){
			$(i).on("click",function(){
				$("#newnav div").removeClass("active");
				var ids = $(this).attr("data-id");
				$(this).addClass("active");
				if(ids){
					 $(".targetdom").removeClass("active animated fadeInRight");
					 $("#"+ids).addClass("active animated fadeInRight");
					
				}
			})
		}
    }
newtab();
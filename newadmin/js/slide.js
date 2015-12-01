var timer = null;
var offset = 5000;
var index = 0;
var hide_li_index = 0;

//´óÍ¼½»ÌæÂÖ»»
function slideImage(i){
    var id = 'image_'+ target[i];
    $('#'+ id)
        .animate({opacity: 1}, 10, function(){
            $(this).find('.word').animate({height: 'show'}, 'slow');
        }).show()
        .siblings(':visible')
        .find('.word').animate({height: 'hide'},'fast',function(){
            $(this).parent().animate({opacity: 0}, 10).hide();
        });
}
//bind thumb a
function hookThumb(){    
    $('#thumbs li a')
        .bind('click', function(){
            if (timer) {
                clearTimeout(timer);
            }                
            var id = this.id;            
            index = getIndex(id.substr(6));
            rechange(index);
            slideImage(index); 
            timer = window.setTimeout(auto, offset);  
            this.blur();            
            return false;
        });
}
//bind next/prev img
function hookBtn(){
	var length = target.length-1;
    $('img.play_prev,img.play_next').bind('click', function(){
            if (timer){
                clearTimeout(timer);
            }
            var id = this.id;
            if (id == 'play_prev') {
                index--;
                if(index>=0 && index<=hide_li_index){
                    $("#thumbs").find("ul li").eq(index).show();
                    $("#thumbs").find("ul li").eq(length-index).hide();
                    hide_li_index--;
                }
                if (index < 0){ 
                  index = length;
                  hide_li_index = 0;
                }
            }else{
                index++;
                if (index > length){
                  index = 0;
                  hide_li_index=0;
                }
                if(index>7){
                    $("#thumbs").find("ul li").eq(hide_li_index).hide();
                    hide_li_index++;
                    $("#thumbs").find("ul li").eq(index).show();
                 }

                

            }
            rechange(index);
            slideImage(index);
            timer = window.setTimeout(auto, offset);
        });
}
//get index
function getIndex(v){
    for(var i=0; i < target.length; i++){
        if (target[i] == v) return i;
    }
}
function rechange(loop){
    var id = 'thumb_'+ target[loop];
    //$('#thumbs li a.current').removeClass('current');
    //$('#'+ id).addClass('current');
    $('#thumbs li a.current').removeClass('current');
    $('#thumbs li').css({"border":""});
    $('#'+ id).parent("li").css({"border":"1px solid #8c4600"});

}
function auto(){
    index++;
    if (index > 6){
        index = 0;
    }
    rechange(index);
    slideImage(index);
    timer = window.setTimeout(auto, offset);
}
$(function(){    
    //change opacity
    $('div.word').css({opacity: 0.85});
    auto();  
    hookThumb(); 
    hookBtn();
    
});

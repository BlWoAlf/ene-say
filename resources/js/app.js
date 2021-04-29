require('./bootstrap');

$(function(){
    var openPhotoSwipe = function(index){
        var pswpElement = document.querySelectorAll('.pswp')[0];

        var items = [];

        $('.food-menu-book__page').each(function(i, elem){
            items[i] = {
                src: elem.children[0].src,
                w: 683,
                h: 1024
            }
        });

        var options = {
            // history & focus options are disabled on CodePen        
             history: false,
             focus: false,
     
             showAnimationDuration: 0,
             hideAnimationDuration: 0
             
        };

        var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
        gallery.goTo(index);
    }

    $('.food-menu-book__page').click(function(){
        var index = $(this).parent().index();
        openPhotoSwipe(index);
    });
});

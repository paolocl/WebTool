/**
 * Created by paolo on 15/07/16.
 */

$('.readMore').click(function(){
   var url = $(this).data('url');
    getIntel(url, $(this));
});

function getIntel(url, element){
    console.log(url);
    $.ajax({
        url: url,
        success: function(data){
            element.next('li').html(data);
        }
    })
}

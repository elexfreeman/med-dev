/**
 * Created by cod_llo on 18.03.16.
 */
/*Футер внизу страницы*/
function  FooterHeight(){
    /*Высота страницы*/
    var height = parseInt(document.getElementById('screen').offsetHeight); // Высота
    var bodyHeight =  parseInt(document.body.offsetHeight)-50;
    //console.log(String(bodyHeight-height));
    $(".footer").css('margin-top',String(bodyHeight-height)+'px');
    $(".footer").fadeIn();
}

$(function() {

    setTimeout(function() {
        FooterHeight();
    },100);


});

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

    /*Измение пола пациента в форме*/
    $( "input[name='sex']" ).change(function() {
        // Check input( $( this ).val() ) for validity here
        patient.ChangeSex();

    });

    $('.hasDatepicker').datetimepicker({
        format:'d.m.Y',
        lang:'ru',
        timepicker:false,
        closeOnDateSelect:true,

    });
});


/*Пациент*/
var patient = [];

patient.ChangeSex = function()
{
    /*если мужик*/
    if($('input[name=sex]:checked').val()=='1')
    {
        $(".patient-edit-sex").attr('src','/images/icons/human-512.png')
    }
    else
    {
        $(".patient-edit-sex").attr('src','/images/icons/woman-512.png')
    }
}

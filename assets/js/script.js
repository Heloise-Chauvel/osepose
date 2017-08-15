/**
 * Created by Héloïse on 04/08/2017.
 */
$(document).ready(function(){

    //Countdown
    $(document).ready(function() {
        var challengeBegin = new Date();
        var challengeEnd = new Date();
        challengeEnd.setDate(challengeBegin.getDate()+1);

        $('#chronotime').countdown(challengeEnd)
        .on('update.countdown', function(event) {
            var format = '%H:%M:%S';
            $(this).html(event.strftime(format));
        })
        .on('finish.countdown', function(event) {
            $(this).html('Défi terminé !!');

        });
    });


    //Carousel
    $('#carousel-sports').carousel();
    // Par défaut tout les messages d'erreurs sont masqués
    $("#noemail").hide();
    $("#nopwd1").hide();
    $("#length-pwd1").hide();
    $("#nosex").hide();
    $("#nopwd2").hide();
    $("#same-pwd2").hide();
    $("#length-pwd1").hide();
    $("#nologin").hide();
    $("#length-login").hide();
    $("#tooyoung").hide();
    $("#tooold").hide();
    $("#noyear").hide();
    $("#exist-login").hide();
    $("#exist-email").hide();

    $("#nologin-connexion").hide();
    $("#inexistant").hide();

    // Jour
    var maxDay = 31;
    for(var i=1 ; i<=maxDay ; i++)
    {
        $("#day").append($("<option value='"+i+"'>"+i+"</option>"));
    }

    // Adaptation des jours en fonction du mois :
    $("#month").on("change", function() {
        $("#day").find("option").show();
        switch($(this).val())
        {
            case "02" :
                $("#day").find("option:gt(27)").hide();
                break;
            case "04" :
            case "06" :
            case "08" :
            case "10" :
            case "12" :
                $("#day").find("option:gt(29)").hide();
                break;
            default :
                break;
        }

        /*
         if($("#year").val()!="" && $("#year").val()%400==0 && $(this).val()=="02")
         {
         $("#day").find("option").eq(28).show();
         }
         else
         {
         */
        $("#day").find("option").eq(28).hide();
        //}
    });

    /*
     //Changement du nombre de jour en cas d'year bisextile et de mois de février
     $("#year").on("change", function() {
     if($(this).val()!="" && $(this).val()%400==0 && $("#month").val()=="02")
     {
     $("#day").find("option").eq(28).show();
     }
     else
     {
     $("#day").find("option").eq(28).hide();
     }
     });
     */

    // Gestion du menu déroulant pour les sports
    $("#multiple-select,input[type='checkbox'],#multiple-option").on("mouseover",function(){
        $("#multiple-option").show();
        $("#multiple-option").css("width",$("#multiple-select").width());
    });
    $(".input-perso,input,#multiple-option,#multiple-select").on("mouseout",function(){
        $("#multiple-option").hide();
    });



}); // fin event ready

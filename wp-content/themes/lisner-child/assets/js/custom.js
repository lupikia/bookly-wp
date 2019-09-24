/**
 * Created by Lupi on 9/20/2019.
 */
$("#book button").click(function(){

    //-->open up booking for
    $("#standby-off").addClass("standby-on");
    $("#booking-overlay").show();

});

$("#close").click(function(){

    //-->open up booking for
    $("#standby-off").removeClass("standby-on");
    $("#booking-overlay").hide();

});
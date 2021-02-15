$(function(){
    $("#login").ajaxForm({
       beforeSend: function(Date){
           $("#log_result").html(date);
           
       },success: function(Date){
           $("#log_result").html(data);
       }
    });
});
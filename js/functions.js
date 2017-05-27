/*
 * @author: Gianvito Bono
 * @date: 25/05/2017
 */

 $(document).ready(function() {
   $("#send").click(function(){
     var dest = $("#dest").val();
     var curr = $("#currency").val();
     $.ajax({
       type: "POST",
       url: "./scripts/calculate.php",
       data: "curr=" + curr + "&dest=" + dest,
       dataType: "html",
       success: function(msg)
       {
         $("#prezzo").html(msg);
       },
       error: function()
       {
         alert("Error: Chiamata AJAX fallita");
       }
     });
   });
 });

function hide_travels_form() {
  $("#travels_form").addClass("hide");
}

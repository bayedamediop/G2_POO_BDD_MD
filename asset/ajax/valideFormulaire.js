$(document).ready(function(){
    
    //  we hide messages errors 
$("#nom_error_message").hide();
$("#prenom_error_message").hide();
$("#telephone_message").hide();
$("#email_error_message").hide();

//init variable false
var error_nom= false ;
var error_prenom= false ;
var error_telephone = false ;
var error_email= false ;


//where we're out inputs call function check
$("#nom").focusout(function(){
check_nom() ;
}) ;
$("#prenom").focusout(function(){
check_prenom() ;
}) ;
$("#telephone").focusout(function(){
check_telephone() ;
}) ;
$("#email").focusout(function(){
check_email() ;
}) ;


// here is functions
function check_nom(){
var nom_length = $("#nom").val().length ;
if(nom_length < 2 || nom_length > 20 ){
  $("#nom_error_message").html("should be between 5-20 characters") ;
  $("#nom_error_message").show() ;
  error_nom = true ;
}else{
  $("#nom_error_message").hide() ;
}
} 

function check_prenom(){
var prenom_length = $("#prenom").val().length ;
if(prenom_length < 2 || prenom_length > 20 ){
  $("#prenom_error_message").html("should be between 2-20 characters") ;
  $("#prenom_error_message").show() ;
  error_prenom= true ;
}else{
  $("#prenom_error_message").hide() ;
}
} 
function check_telephone(){
var telephone_length = $("#telephone").val().length ;
if(telephone_length < 8){
    $("#telephone_error_message").html("telephone doit cotenire minimun 8 characters") ;
    $("#telephone_error_message").show();
    error_telephone= true ;
}else{
    $(telephone_error_message).hide() ;
}
} 

function check_email(){
var pattern = new RegExp(/^[+a-zA-Z._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i) ;

if (pattern.test($("#email").val())) {
    $("#email_error_message").hide();
}else{
    $("#email_error_message").html("Invalid email address") ;
    $("#email_error_message").show() ;
    error_email = true ;
} 
}
$("#submit").click(function(){

error_nom = false ;
error_prenom = false ;
error_telephone = false ;
error_email = false ;


check_nom();
check_prenom() ;
check_telephone() ;
check_email() ;


});

});
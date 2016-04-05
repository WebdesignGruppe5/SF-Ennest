$(document).ready(function(){

  
  $('#H2').hide();
  $('#H3').hide();
  $('#H4').hide();
  $('#H5').hide();
  $('#H6').hide();
  $('#H7').hide();
  $('#H1').show();


});

$("#ex6").slider();
$("#ex6").on("slide", function(slideEvt) {


	$("#ex6SliderVal").text(slideEvt.value);
	
	if (slideEvt.value == 1) {
	
  $('#H2').hide();
  $('#H3').hide();
  $('#H4').hide();
  $('#H5').hide();
  $('#H6').hide();
  $('#H7').hide();
  $('#H1').show();
    $("#ex6SliderVal").text("2000/2001");
	} 
	if (slideEvt.value == 2) {
	
  $('#H1').hide();
  $('#H3').hide();
  $('#H4').hide();
  $('#H5').hide();
  $('#H6').hide();
  $('#H7').hide();
  $('#H2').show();
  
    $("#ex6SliderVal").text("2002/2003");
	} 
	if (slideEvt.value == 3) {
	$('#H2').hide();
  $('#H1').hide();
  $('#H4').hide();
  $('#H5').hide();
  $('#H6').hide();
  $('#H7').hide();
  $('#H3').show();
	
    $("#ex6SliderVal").text("2005/2006");
	} 
	if (slideEvt.value == 4) {
	
	$('#H2').hide();
  $('#H3').hide();
  $('#H1').hide();
  $('#H5').hide();
  $('#H6').hide();
  $('#H7').hide();
  $('#H4').show();
    $("#ex6SliderVal").text("2006/2007");
	} 
	if (slideEvt.value == 5) {
	
	$('#H2').hide();
  $('#H3').hide();
  $('#H4').hide();
  $('#H1').hide();
  $('#H6').hide();
  $('#H7').hide();
  $('#H5').show();
    $("#ex6SliderVal").text("2008/2009");
	} 
	if (slideEvt.value == 6) {
	
	$('#H2').hide();
  $('#H3').hide();
  $('#H4').hide();
  $('#H5').hide();
  $('#H1').hide();
  $('#H7').hide();
  $('#H6').show();
    $("#ex6SliderVal").text("2009/2010");
	} 
	if (slideEvt.value == 7) {
	
	$('#H2').hide();
  $('#H3').hide();
  $('#H4').hide();
  $('#H5').hide();
  $('#H6').hide();
  $('#H1').hide();
  $('#H7').show();
    $("#ex6SliderVal").text("2010/2011");
	} 

	
	
	});

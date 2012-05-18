// JavaScript Document
$(function(){
	$('.home').click(function(){
		scrollWin("#invisible_home");
	})

	$('.evento').click(function(){
		scrollWin("#invisible_evento");
	})
	$('.programacao').click(function(){
		scrollWin("#invisible_prog");
	})
	$('.noticias').click(function(){
		scrollWin("#invisible_noticias");
	})
	
	$('.galeria').click(function(){
		scrollWin("#invisible_galeria");
	})
	
	$('.contato').click(function(){
		scrollWin("#invisible_contato");
	})	
	
	$('.carousel').jcarousel({ });	
	
	function scrollWin(position){
		$('html, body').animate({scrollTop: $(position).offset().top}, 500);
	}
	
	});
	
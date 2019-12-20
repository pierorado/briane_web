/*$(document).ready(function(){
				$('#btn-menu').click(function(){ 
				if ($ ('.btn-menu span').attr('class') == 'fa fa-bars'){
					$('.btn-menu span').removeClass('fa fa-bars').addClass('fas fa-times');
					$('.menu-link').css({'left':'0'});
				     } else{
				     	$('.btn-menu span').removeClass('fas fa-times').addClass('fa fa-bars');
				     	$('.menu-link').css({'left':'-100%'});
				     }
		 })
			});
*/
$(document).ready(main);
 
var contador = 1;
 
function main () {
	$('.icon-menu1').click(function(){
		if (contador == 1) {
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}
	});
 
	// Mostramos y ocultamos submenus
	$("a").click(function(){
		$(this).children('.children').slideToggle();
	});
}

$(document).ready(function(){
			$(".box").on("click","ul li",function(){
			var tabsId =$(this).attr("id");
			$(this).addClass("active").siblings().removeClass("active");
			$("#"+tabsId+"-content-box").addClass("active").siblings().removeClass("active");

			})
		});


			$(document).ready(function(){
	$(document).on('click', '.box-chat-titulo', function(){
		if($('.box-chat-body').css('display') === 'none'){
			$('.box-chat-body').show();
			$('.box-chat-titulo h3').text('Cerrar ');
		} else {
			$('.box-chat-body').hide();
			$('.box-chat-titulo h3').text('Dejar Mensaje');
		}
	});
});
	

	$(function() {
  $('#idTipoDocumento').on('change', function() {
    var documento = $(this).val();
    if (documento == "1") {
      $('#idDocumento').attr("pattern", '[0-9]{8}');
      
    } else if (documento == "2")  {
      $('#idDocumento').attr("pattern",'[0-9]{9}');
      
    }else{
    	$('#idDocumento').attr("pattern",'[0-9]{9}');
      
    	}
  });
});




		jQuery('document').ready(function($){
			var subir =$('.back-to-top');
			subir.click(function(e){
				e.preventDefault();
				$('html,body').animate({scrollTop:0},500);
			});
				subir.hide();
				$(window).scroll(function(){
					if ($(this).scrollTop() >200) {
						subir.fadeIn();
					}else{
						subir.fadeOut();
					}
				})
		});

$(function() {
	/*Define some constants */
	const ARTICLE_TITLE =  document.title;
	const ARTICLE_URL = encodeURIComponent(window.location.href);
	const MAIN_IMAGE_URL = encodeURIComponent($('meta[property="og:image"]').attr('content'));

	$('.share-fb').click(function(){
		open_window('http://www.facebook.com/sharer/sharer.php?u='+ARTICLE_URL, 'facebook_share');
	});

	$('.share-twitter').click(function(){
		open_window('http://twitter.com/share?url='+ARTICLE_URL, 'twitter_share');
	});

	function open_window(url, name){
		window.open(url, name, 'height=320, width=640, toolbar=no, menubar=no, scrollbars=yes, resizable=yes, location=no, directories=no, status=no');
	}
});
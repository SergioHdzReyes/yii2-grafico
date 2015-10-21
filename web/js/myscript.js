$(document).ready(function(){
	/*$('.fancybox').fancybox();

	$(window).scroll(function(){
	  var sticky = $('.menus'),
	      scroll = $(window).scrollTop();
	  if (scroll >= 100){
	  		sticky.addClass('fixed');
		}else sticky.removeClass('fixed');
	});*/

	//-----------------PORTAFOLIO-------------------
	$(".todos a").click(function(){
		$(".tab-content .tab-pane").hide("slow");
		$("#todos").show("slow");
	});
	$(".branding a").click(function(){
		$(".tab-content .tab-pane").hide("slow");
		$("#branding").show("slow");
	});
	$(".print a").click(function(){
		$(".tab-content .tab-pane").hide("slow");
		$("#print").show("slow");
	});
	$(".ilustracion a").click(function(){
		$(".tab-content .tab-pane").hide("slow");
		$("#ilustracion").show("slow");
	});
	$(".diseno a").click(function(){
		$(".tab-content .tab-pane").hide("slow");
		$("#diseno").show("slow");
	});

	//---------------KEYDOWN CONTACTO-----------------
	$(".form-control").keydown(function(){$(".form-control").css("color", "#2191DF")});

	//---------------CONTACTO AJAX-----------------
	/*$(".enviar").click(function(){
		$.ajax({
			url: "/templates/accesografico/email.php",
			async: true,
			type: "POST",
			data: {nombre:$("#nombre").val(), email: $("#email").val(), mensaje: $("#mensaje").val()},
			success: function(data){
				if(data=="error"){
					alert("Ingresa todos los campos correspondientes");
				}else{
					alert(data);
					$("#nombre").val("");
					$("#email").val("");
					$("#mensaje").val("");
				}
			},
			statusCode: {
			    404: function() {
			      alert( "Pagina no encontrada!" );
			    }
			}
		});
	});*/
	if(screen.width<=767){
		$(".servicios").html("");
		$(".portafolio").html("");
	}

	//---------------PAQUETE-----------------
	$(".paquetes").find(".vermas").click(function(){
		$(this).prev().slideToggle();
		$(".paq-body").not($(this).prev()).slideUp('fast')
	});
	$(".contratar").click(function(){
		$("html, body").animate({scrollTop: $($.attr(this, 'href')).offset().top}, 1000);
		return false;
	});

	//---------------MENU CLICK SCROLL-----------------
	$(".item-103 > a").click(function(){
		$("html, body").animate({scrollTop: $(".nosotros").offset().top}, 1000);
		return false;
	});
	$(".item-104 > a").click(function(){
		$("html, body").animate({scrollTop: $(".servicios").offset().top}, 1000);
		return false;
	});
	$(".item-105 > a").click(function(){
		$("html, body").animate({scrollTop: $(".portafolio").offset().top}, 1000);
		return false;
	});
	$(".item-106 > a").click(function(){
		$("html, body").animate({scrollTop: $(".nuestro-equipo").offset().top}, 1000);
		return false;
	});
	$(".item-107 > a").click(function(){
		$("html, body").animate({scrollTop: $(".paquetes").offset().top}, 1000);
		return false;
	});
	$(".item-108 > a").click(function(){
		$("html, body").animate({scrollTop: $(".contact").offset().top}, 1000);
		return false;
	});

	$(".subir img").click(function(){
		$("html, body").animate({scrollTop: $(".menus").offset().top}, 1000);
		return false;
	});

});
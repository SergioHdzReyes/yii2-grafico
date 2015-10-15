jQuery(document).ready(function(){
	jQuery('.fancybox').fancybox();

	jQuery(window).scroll(function(){
	  var sticky = jQuery('.menus'),
	      scroll = jQuery(window).scrollTop();
	  if (scroll >= 100){
	  		sticky.addClass('fixed');
		}else sticky.removeClass('fixed');
	});

	//-----------------PORTAFOLIO-------------------
	jQuery(".todos a").click(function(){
		jQuery(".tab-content .tab-pane").hide("slow");
		jQuery("#todos").show("slow");
	});
	jQuery(".branding a").click(function(){
		jQuery(".tab-content .tab-pane").hide("slow");
		jQuery("#branding").show("slow");
	});
	jQuery(".print a").click(function(){
		jQuery(".tab-content .tab-pane").hide("slow");
		jQuery("#print").show("slow");
	});
	jQuery(".ilustracion a").click(function(){
		jQuery(".tab-content .tab-pane").hide("slow");
		jQuery("#ilustracion").show("slow");
	});
	jQuery(".diseno a").click(function(){
		jQuery(".tab-content .tab-pane").hide("slow");
		jQuery("#diseno").show("slow");
	});

	//---------------KEYDOWN CONTACTO-----------------
	jQuery(".form-control").keydown(function(){jQuery(".form-control").css("color", "#2191DF")});

	//---------------CONTACTO AJAX-----------------
	jQuery(".enviar").click(function(){
		jQuery.ajax({
			url: "/templates/accesografico/email.php",
			async: true,
			type: "POST",
			data: {nombre:jQuery("#nombre").val(), email: jQuery("#email").val(), mensaje: jQuery("#mensaje").val()},
			success: function(data){
				if(data=="error"){
					alert("Ingresa todos los campos correspondientes");
				}else{
					alert(data);
					jQuery("#nombre").val("");
					jQuery("#email").val("");
					jQuery("#mensaje").val("");
				}
			},
			statusCode: {
			    404: function() {
			      alert( "Pagina no encontrada!" );
			    }
			}
		});
	});
	if(screen.width<=767){
		jQuery(".servicios").html("");
		jQuery(".portafolio").html("");
	}

	//---------------PAQUETE-----------------
	jQuery(".paquetes").find(".vermas").click(function(){
		jQuery(this).prev().slideToggle();
		jQuery(".paq-body").not(jQuery(this).prev()).slideUp('fast')
	});
	jQuery(".contratar").click(function(){
		jQuery("html, body").animate({scrollTop: jQuery(jQuery.attr(this, 'href')).offset().top}, 1000);
		return false;
	});
});
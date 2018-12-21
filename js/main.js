(function(){
	
	"use strict";
	
	
	
	
	
})();

/*-------------empieza jquery---------------*/

$( document ).ready(function() {
'use strict';
	
	/*-----------------BARRA FIJA SCROLL---------------*/
	
	var windowHeight=$(window).height();
	var barraAltura=$('.barra').innerHeight();
	
	$(window).scroll(function(){
		var scroll=$(window).scrollTop();
		if(scroll>windowHeight){
			
			$('.barra').addClass('fixed');
			$('body').css({'margin-top':barraAltura +'px'});
		}else{
			
			$('.barra').removeClass('fixed');
			$('body').css({'margin-top':'0px'});
		}
		
	});
	
	/*--------------MENÜ MOVIL-----------------*/
	
	$('.menu-movil').on('click',function(){
		
		$('.navegacion-principal').slideToggle();
		
	});
	
	$('.user-icono').on('click',function(){
		
		$('.extendido-usuarios').slideToggle();
		
	});
	
	
	/*------------------addclass body USUARIOS---------*/
	
	$('body.Productosindex1 .navegacion-principal a:contains("ACCIÓN")').addClass('activo');
	
	$('body.Productosindex2 .navegacion-principal a:contains("Terror")').addClass('activo');
	
	$('body.Productosindex3 .navegacion-principal a:contains("Románticas")').addClass('activo');
	
	$('body.Productosindex4 .navegacion-principal a:contains("Infantiles")').addClass('activo');
	
	$('body.Productosindex5 .navegacion-principal a:contains("Comedia")').addClass('.activo');
	
	$('body.Productosindex6 .navegacion-principal a:contains("Ciencia-ficcion")').addClass('activo');
        
        $('body.Productosindex7 .navegacion-principal a:contains("Drama")').addClass('activo');
	
	$('body.Productosindex8 .navegacion-principal a:contains("Musicales")').addClass('activo');
        
        $('body.UsuariosmodificarUsuario .navegacion-principal a:contains("Modificar perfil")').addClass('.activo');
	
	$('body.UsuariosdarseBaja .navegacion-principal a:contains("Darse de baja")').addClass('activo');
        
        $('body.UsuarioscerrarSesion .navegacion-principal a:contains("Cerrar sesión")').addClass('activo');
        
        $('body.Usuarioslogin .navegacion-principal a:contains("Iniciar sesión")').addClass('activo');
        
        $('body.Usuariosregistrar .navegacion-principal a:contains("Registrarse")').addClass('activo');
        
        /*-----------------ADMINISTRADOR----------------*/
	
	$('body.AdministradorlistarUsuarios .navegacion-principal a:contains("Gestionar usuarios")').addClass('activo');
	
	$('body.ProductosnuevoProducto .navegacion-principal a:contains("Nuevo producto")').addClass('activo');
	
	$('body.ProductosmodificarProducto .navegacion-principal a:contains("Modificar producto")').addClass('activo');
	
	$('body.ValoracioneslistarValoraciones .navegacion-principal a:contains("Gestionar valoraciones")').addClass('activo');
	
	
	
	
	
	
});//fin document ready
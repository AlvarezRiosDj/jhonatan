$(function(){

//recuperamos el host y el dominio
var protocolo = window.location.protocol;
var dominio = window.location.host;
var urlActual=protocolo+'//'+dominio+'/assets/admin/functions/pages/';
//fin de recuperar el  host y el dominio


//ponemos a la escucha las etiquetas a del navbarlef

	$('#page_dashboard').click(function(){
		cargarContent('dashboard.html');
	});


	$('#page_users').click(function(){
		cargarContent('users.html');
	});

	$('#page_languages').click(function(){
		cargarContent('languages.html');
	});

	$('#page_categories').click(function(){
		cargarContent('categories.html');
	});

	$('#page_tours').click(function(){
		cargarContent('tours.html');
	});

	$('#page_itinerary').click(function(){
		cargarContent('itinerary.html');
	});

	

	$('#page_img').click(function(){
		cargarContent('images.html');
	});
	$('#page_videos').click(function(){
		cargarContent('videos.html');
	});
	$('#page_menu').click(function(){
		cargarContent('menu.html');
	});
	$('#page_footer').click(function(){
		cargarContent('footer.html');
	});

//fin de la escucha las etiquetas a del navbarlef


//funcion principal que cargara el contenido de la pagina
	function cargarContent(page){
		$.ajax({
			url: urlActual + page,
			method : 'GET'
		}).done(function(data){
			$('#content_page').html(data);
		});
	}
//fin de la funcion principal que cargara el contenido de la pagina

});

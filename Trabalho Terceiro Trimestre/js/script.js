$(document).ready(function(){

	$("#logo").click(function(){
		alert("Bem Vindo a su Agenda de Tarefas 2017");
	})

//modal

	$('.clicavel').click(function(){
		var id;
		id=$(this).attr('id');
		$("."+id).removeClass("escondido");
	})

	$('.fechar').click(function(){
		$('.modal').addClass ('escondido');
	})

//drop login

	$(".drop").click(function(){
			var id;
			id = $(this).attr('id');
			$("."+id).slideToggle("slow");
		})

	/*$('.item.menu').click(function () {
		var id;
		id=$(this).attr('id');
		$("."+id)toggleClass('ativo');
	})*/




	$(".item.menu").mouseenter(function(){
				var id;
				id = $(this).attr('id');
				$("."+id).slideToggle("slow");
	      $("."+id).mouseout(function () {
	        $("."+id).slideUp("slow");
	      })
			})


})

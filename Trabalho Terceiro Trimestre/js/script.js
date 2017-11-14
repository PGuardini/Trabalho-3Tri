$(document).ready(function(){
	$("#logo").click(function(){
		alert("Bem Vindo a sua Agenda de Tarefas");
	})



	$('.clicavel').click(function(){
		var id;
		id=$(this).attr('id');
		$("."+id).removeClass("escondido");
	})

	$('.fechar').click(function(){
		$('.modal').addClass ('escondido');
	})
})
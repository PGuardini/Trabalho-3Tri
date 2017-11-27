$(document).ready(function(){
//alert
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

//submenus

	$(".item.menu").click(function(){
				var id;
				id = $(this).attr('id');
				$("."+id).toggleClass("escondido");
				$()
			})


})

//relogio
function moveClock(){
	momentoAtual = new Date();
	hora = momentoAtual.getHours();
	minuto = momentoAtual.getMinutes();
	segundo = momentoAtual.getSeconds();

	horaImprimivel = hora + " : " + minuto + " : " + segundo;

	document.form_clock.clock.value = horaImprimivel;

	setTimeout("moveClock()",1000);
}

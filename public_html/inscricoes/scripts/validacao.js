$(document).ready(function(){
	$('#bloco_brasil').hide();
	$('#bloco_estrangeiro').hide();
	$('#type').hide();
	$('#bloco_empresario_senior').hide();
	$('#bloco_empresario_junior').hide();
	
	$('#country').blur(function(event){
		$('#bloco_brasil').hide();
		$('#bloco_estrangeiro').hide();
		
		if($('#country').val() == 'Brasil'){
			event.preventDefault();
			$("#bloco_brasil").show("slow");
		}else{
			event.preventDefault();
			$("#bloco_estrangeiro").show("slow");
		}
	});
	
	$('#s').change(function(event){
		$('#bloco_empresario_junior').hide();
		
		event.preventDefault();
		$("#bloco_empresario_senior").show("slow");
	});
	
	$('#j').change(function(event){
		$('#bloco_empresario_senior').hide();
		
		event.preventDefault();
		$("#bloco_empresario_junior").show("slow");
	});
	
	$("#form_inscricao").validate({
        // Define as regras
        rules:{
            name:{
                required: true, 
				minlength: 2
            },
			
			name_cracha:{
                required: true, 
				minlength: 2
            },
			
            email:{
                required: true, 
				email: true
            },
			
			email_confirm:{
                required: true, 
				email: true,
				equalTo: email
            },
			
			pass:{
                required: true, 
				minlength: 6
            },
			
			pass_confirm:{
                required: true, 
				minlength: 6,
				equalTo: pass
            },
			
			birth:{
                required: true
            },
			
			phone:{
				required: true
			},
			
			cel_phone:{
				required: true
			}
        },

        // Define as mensagens de erro para cada regra
        messages:{
            name:{
                required: "Digite o seu nome",
                minlength: "O seu nome deve conter, no minimo, 2 caracteres"
            },
			
			name_cracha:{
                required: "Digite o nome que deve aparecer no seu cracha",
                minlength: "O seu nome deve conter, no minimo, 2 caracteres"
            },
			
			email:{
                required: "Digite o seu email",
                email: "Digite um email valido"
            },
			
			email_confirm:{
                required: "Digite o seu email",
                email: "Digite um email valido",
				equalTo: "Emails nao conferem"
            },
			
			pass:{
                required: "Digite sua senha",
                minlength: "Sua senha deve conter no minimo 6 digitos"
            },
			
			pass_confirm:{
                required: "Digite sua senha",
                minlength: "Sua senha deve conter no minimo 6 digitos",
				equalTo: "As senhas nao conferem"
            },
			
			birth:{
                required: "Digite sua data de nascimento"
            },
			
			phone:{
				required: "Digite seu telefone"
			},
			
			cel_phone:{
				required: "Digite seu celular"
			}
        }
    });

});
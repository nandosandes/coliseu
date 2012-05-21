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

//------------- Mascaras ------------------------------------------------------

function Mascara(o,f){
	v_obj=o
	v_fun=f
	setTimeout("execmascara()",1)
}

/*Função que Executa os objetos*/
function execmascara(){
	v_obj.value=v_fun(v_obj.value)
}

/*Função que Determina as expressões regulares dos objetos*/
function leech(v){
	v=v.replace(/o/gi,"0")
	v=v.replace(/i/gi,"1")
	v=v.replace(/z/gi,"2")
	v=v.replace(/e/gi,"3")
	v=v.replace(/a/gi,"4")
	v=v.replace(/s/gi,"5")
	v=v.replace(/t/gi,"7")
	return v
}

/*Função que permite apenas numeros*/
function Integer(v){
	return v.replace(/\D/g,"")
}

/*Função que padroniza telefone (11) 4184-1241*/
function Telefone(v){
		v=v.replace(/\D/g,"")                            
		v=v.replace(/^(\d\d)(\d)/g,"($1) $2") 
		v=v.replace(/(\d{4})(\d)/,"$1-$2")      
		return v
}

/*Função que padroniza CPF*/
function Cpf(v){
		v=v.replace(/\D/g,"")                                   
		v=v.replace(/(\d{3})(\d)/,"$1.$2")         
		v=v.replace(/(\d{3})(\d)/,"$1.$2")         
																						 
		v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2")

		return v
}

/*Função que padroniza CEP*/
function Cep(v){
		v=v.replace(/D/g,"")                            
		v=v.replace(/^(\d{5})(\d)/,"$1-$2") 
		return v
}

/*Função que padroniza DATA*/
function Data(v){
		v=v.replace(/\D/g,"") 
		v=v.replace(/(\d{2})(\d)/,"$1/$2") 
		v=v.replace(/(\d{2})(\d)/,"$1/$2") 
		return v
}
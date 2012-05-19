
	<div id="all">
    	<div id="topo">
        	<div id="logo"></div>
        </div>
           <div id="titulo"> <h1>Inscrições</h1></div>
        <div id="form">
            <form method="post" action="../controllers/inscricao.php" id="form_inscricao">
                <label for="name">Nome </label><br>
                <input type="text" name="name" id="name"/></br>
                
                <label for="name_cracha">Nome no Cracha</label></br>
                <input type="text" name="name_cracha" id="name_cracha"/></br>
                
                <label for="email">Email </label></br>
                <input type="text" name="email" id="email"/></br>
                
                <label for="email_confirm">Confirme o email </label></br>
                <input type="text" name="email_confirm" id="email_confirm"/></br>
                
                <label for="pass">Senha </label></br>
                <input type="password" name="pass" id="pass"/></br>
                
                <label for="pass_confirm">Confirme a senha</label></br>
                <input type="password" name="pass_confirm" id="pass_confirm"/></br>
                
                <label for="birth">Data de nascimento </label></br>
                <input type="text" name="birth" id="birth"/></br></br>
                
                Gênero: &nbsp;&nbsp;
                <input type="radio" name="genero" value="feminino" id="f"/><label for="f">&nbsp;Feminino</label>
                <input type="radio" name="genero" value="masculino" id="m"/><label for="m">&nbsp;Masculino</label>
                </br></br>
                Tamanho da camisa </br>
                <select name="tshirt" class="select">
                    <option value="">Selecione uma opcao</option>
                    <option value="p">P</option>
                    <option value="m">M</option>
                    <option value="g">G</option>
                    <option value="gg">GG</option>
                </select>
                </br>
                
                <label for="phone">Telefone </label></br>
                <input type="text" name="phone" id="phone"/>
                </br>
                
                <label for="cel_phone">Celular </label></br>
                <input type="text" name="cel_phone" id="cel_phone"/>
                </br>
                
                <label for="country">País </label></br>
                <input type="text" name="country" id="country"/>
                </br>
                
                <div id="bloco_estrangeiro">
                    <label for="passport">Passaporte </label></br>
                    <input type="text" name="passport" id="passport"/>
                    </br>
                </div>
                    
                <div id="bloco_brasil">
                    <label for="cpf">CPF </label></br>
                    <input type="text" name="cpf" id="cpf"/>
                    </br>
                    <label for="cep">CEP</label></br>
                    <input type="text" name="cep" id="cep" class="inputs" onblur="getEndereco()"/>
                    </br>
                    <label for="estado">Estado</label></br>
                    <input type="text" name="estado" id="estado"/>
                    </br>
                    <label for="cidade">Cidade</label></br>
                    <input type="text" name="cidade" id="cidade"/>
                    </br>
                    <label for="bairro">Bairro</label></br>
                    <input type="text" name="bairro" id="bairro"/>
                    </br>
                    <label for="rua">Rua</label></br>
                    <input type="text" name="rua" id="rua"/>
                    </br>
                    <label for="numero">Numero</label></br>
                    <input type="text" name="numero" id="numero" />
                    </br>
                    <label for="complemento">Complemento</label></br>
                    <input type="text" name="complemento" id="complemento" />
                </div>
                <br />
                <input type="radio" name="type" value="senior" id="s"/><label for="s">Empresário Sénior</label>
                <input type="radio" name="type" value="junior" id="j"/><label for="j">Empresário Júnior</label>
                </br></br>
                <div id="bloco_empresario_junior">
                    <h2>Empresário Júnior</h2><br />
                    
                    <label for="federacao">Federação</label></br>
                    <input type="text" name="federacao" id="federacao"/>
                    </br>
                    <label for="ej">Empresa Júnior</label></br>
                    <input type="text" name="ej" id="ej"/>
                    </br>
                    <label for="cargo_jr">Cargo</label></br>
                    <input type="text" name="cargo_jr" id="cargo_jr"/>
                    </br>
                    <label for="tempo">Tempo de empresa jr</label></br>
                    <input type="text" name="tempo" id="tempo"/>
                    </br><br />
                </div>
                <div id="bloco_empresario_senior">
                    <h2>Empresário Sénior</h2><br />
                    
                    <label for="empresa">Empresa</label></br>
                    <input type="text" name="empresa" id="empresa"/>
                    </br>
                    <label for="cargo">Cargo</label></td></br>
                    <input type="text" name="cargo" id="cargo"/>
                    </br>
                    Qual o segmento que atua?</br>
                    <select name="segmento" class="select">
                        <option value="">Selecione uma opcao</option>
                        <option value="servicos">Serviços</option>
                        <option value="alimentos_bebidas">Indústria de Alimentos e Bebidas</option>
                        <option value="vestuario">Indústria de Vestuário</option>
                        <option value="moveleira">Indústria Moveleira</option>
                        <option value="base_construcao">Indústria de Base de Construção</option>
                        <option value="materiais_construcao">Indústria de Materias de Construção</option>
                        <option value="organizações">Organizações Públicas ou Privadas</option>
                    </select>
                    </br><br />
                </div>
                
                <h3>Termos de Condições</h3><br />
                
                <input type="checkbox" value="aceito" id="aceito"/>
                <label for="aceito"> Li e aceito os termos de condições do evento</label>
                </br></br>
                <input type="submit" value="Inscrever" />
                
            </form>
        </div><!-- div form -->    
    </div><!-- div all -->     
</body>

</html>

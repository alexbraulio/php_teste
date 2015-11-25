<?php 

 include "nav.php";

?>

<div class="container">
  
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Cadastra Cliente.</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cadastro de Cliente.</h4>
        </div>
        <div class="modal-body">
          <p>Somente Pessoa Física.</p>

<div class="row">
 <? include "conexao.php"; ?>
          <div class="col-md-12">
            <form method="post" role="form" action="funcoes.php?funcao=gravar_cliente_pf">
              <div class="form-group">
                <label class="control-label" for="marca">Nome:</label>
                <input name="nome" type="text"class="form-control" id="nome">
                <label class="control-label" for="marca">E-mail:</label>
                <input name="email" type="text"class="form-control" id="email">
                <label class="control-label" for="marca">Telefone:</label>
                <input name="telefone" type="text"class="form-control" id="telefone">
                <label class="control-label" for="marca">Celular:</label>
                <input name="celular" type="text"class="form-control" id="celular">
                <label class="control-label" for="marca">CPF:</label>
                <input name="CPF" type="text"class="form-control" id="CPF">
                <label class="control-label" for="marca">Endereço:</label>
                <input name="endereco" type="text"class="form-control" id="endereco">
                <label class="control-label" for="marca">Bairro:</label>
                <input name="bairro" type="text"class="form-control" id="bairro">
                <label class="control-label" for="marca">Cep:</label>
                <input name="cep" type="text"class="form-control" id="cep">
                <label class="control-label" for="marca">Cidade:</label>
                <input name="cidade" type="text"class="form-control" id="cidade">
                <label class="control-label" for="marca">Estado:</label>
                <input name="estado_UF" type="text"class="form-control" id="estado_UF">
              </div>
              <button type="submit" class="btn btn-default">Cadastrar.</button>
            </form>
          </div>
        </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<div class="container">
      <div class="page-header">
             <h1>Clientes Cadastrados:</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
                <table class="table table-bordered">

        
  <?php
  //TRAZ OS DADOS PARA EXIBIR NA TELA 
  include "conexao.php";
  $sql_visualizar = mysql_query("SELECT * FROM cliente_pf");
  while($linha = mysql_fetch_array($sql_visualizar)){
  $pega_nome      = $linha['nome'];
  $pega_email     = $linha['email'];
  $pega_telefone  = $linha['telefone'];
  $pega_celular   = $linha['celular'];
  $pega_CPF       = $linha['CPF'];
  $pega_endereco  = $linha['endereco'];
  $pega_bairro    = $linha['bairro'];
  $pega_cep       = $linha['cep'];
  $pega_cidade    = $linha['cidade'];
  $pega_estado_UF = $linha['estado_UF'];
  $id = $linha['id'];

  ?>

</div>

   <thead>
      <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Celular</th>
                <th>CPF</th>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>CEP</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Excluir</th>

      </tr>
    </thead>
   <tbody>
                <tr>
                <td><?php echo $pega_nome      ?></td>
                <td><?php echo $pega_email     ?></td>
                <td><?php echo $pega_telefone  ?></td>
                <td><?php echo $pega_celular   ?></td>
                <td><?php echo $pega_CPF       ?></td>
                <td><?php echo $pega_endereco  ?></td>
                <td><?php echo $pega_bairro    ?></td>
                <td><?php echo $pega_cep       ?></td>
                <td><?php echo $pega_cidade    ?></td>
                <td><?php echo $pega_estado_UF ?></td>
                <td><a href="funcoes.php?funcao=editar_cliente_pf&id=<?php echo $id ?>">Editar</a></td>
                <td><a href="funcoes.php?funcao=excluir&id=<?php echo $id ?>">Excluir</a></td>
                </tr> 
                <?php 
                }
                 ?>             
            </tbody>
  </table>
</div>
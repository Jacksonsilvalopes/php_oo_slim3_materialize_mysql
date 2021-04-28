<?php $this->tituloPagina = "Login"; ?>

<?php $this->layout('layout.topo'); ?>
    <h2>Logar</h2>
 
    <form action="/entrar" method="post">
   
        <div class="input-field col s12 mt-5">
          <input id="email" type="email" name="email"  class="validate">        
          <label for="email">E-mail</label>
        </div>
        <div class="input-field col s12">
        <input id="senha" type="password" name="senha"  class="validate">
          <label for="senha">Senha</label>
        </div>
     
        <button class="btn waves-effect waves-light" type="submit" name="action">Entrar
               <i class="material-icons right">send</i>
        </button>
        

    </form>
    
<?php $this->layout('layout.rodape'); ?>

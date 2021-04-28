<?php $this->tituloPagina = "Lista de Compras"; ?>

<?php $this->layout('layout.topo'); ?>
    <h2>Lista de Compras</h2>
    
    <a href="/compras/adicionar">Criar</a>

    
  
    <ul>
      <?php foreach ($this->modelos as $key => $value): ?>
        <li>
        <div class="row">
          <div class="col s12 m12">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title"> <?php echo  $value['titulo']?> - <?php echo  $value['desc']?></span>
                    <a class="waves-effect waves-light btn-small" href="/compras/detalhe/<?php echo  $value['id']?>">Detalhe</a>
                    <a class="waves-effect waves-light btn-small" href="/compras/editar/<?php echo  $value['id']?>">Editar</a>
                <form style="position:absolute; margin-top:-33px; margin-left:171px" action="/compras/delete/<?php echo  $value['id']?>"  method="post">
                      <input type="hidden" name="_METHOD" value="delete">
                      <button  class="waves-effect waves-light btn-small" >Deletar</button>
                </form>
              </div>
            
            </div>
          </div>
       </div>
      
        </li>
      <?php endforeach ?>
    </ul>

<?php $this->layout('layout.rodape'); ?>

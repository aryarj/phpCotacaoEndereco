<?php 
  require_once 'app/modules/layout1.html';
?>
    <div class="container">
      <div class="row">
          <div class="col-12">    
            <h1>Endereço</h1>
            <form action="cep.php">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">CEP</label>
                  </div>
                    <input type="number" maxlength="8" minlength="8" size="15" name="cep" width="150" placeholder="12345678" required>
                </div>
        
                <button type="submit" class="btn btn-primary">Enviar</button><br><br>
                <a href="index.html" class="btn btn-success">inicio</a>
                <a target="_blank" href="https://www.correios.com.br/" class="btn btn-success">Não sei o CEP, acesso ao site do Correio</a>
            </form>
          </div>
        </div>
    </div>
<?php 
  require_once 'app/modules/layout2.html';
?>

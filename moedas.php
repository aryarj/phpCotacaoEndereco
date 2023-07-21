<?php 
  require_once 'app/modules/layout1.html';
?>
    
    <div class="container">
      <div class="row">
          <div class="col-12">
          <h1>Moedas</h1>
            <form action="cotacao.php">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Moeda</label>
                  </div>
                  <select class="custom-select" name="moeda1" required>
                    <option selected>Escolher...</option>
                    <option value="BRL">Real</option>
                    <option value="USD">Dolar americano</option>
                    <option value="EUR">Euro</option>
                    <option value="ARS">Peso Argentino</option>
                    <option value="CNY">Yuan Chinês</option>
                  </select>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Vale tanto em</label>
                  </div>
                  <select class="custom-select" name="moeda2" required>
                    <option selected>Escolher...</option>
                    <option value="BRL">Real</option>
                    <option value="USD">Dolar americano</option>
                    <option value="EUR">Euro</option>
                    <option value="ARS">Peso Argentino</option>
                    <option value="CNY">Yuan Chinês</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button><br><br>
                <a href="index.html" class="btn btn-success">inicio</a>
            </form>
          </div>
        </div>
      </div>
<?php 
  require_once 'app/modules/layout2.html';
?>
<?php 

require_once 'app/config/configend.php';
require_once 'app/modules/hg-apiend.php';
require_once 'app/modules/layout1.html';

$n = (string)$cep;


if(strlen($n) != 8)
{
    echo '<button><a href="endereco.php">Voltar</a></button>';
    echo '<br><br>';
    die('É necessário um CEP de oito digitos');

}



$hg = new HG_API(HG_API_KEY);
$end = $hg->endereco();

if($end==false)
{
    echo '<button><a href="endereco.php">Voltar</a></button>';
    echo '<br><br>';
    die('CEP inválido');

}

//if($hg->is_error()==false)
//{
//  $variation = ($end['varBid'] < 0 ) ? 'secondary':'info';
//}

?>
    <form action="endereco.php">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p><h3>Endereço</h3></p>
                  <p>CEP: <?php echo $end['cep'];?></p>
                  <p>Endereço: <input type="text" size="40" value="<?php echo $end['address']?>" ></p>
                  <p>Número: <input type="text" required> Complemento <input type="text"></p>
                  <p>Bairro: <input type="text" value="<?php echo $end['district']?>"></p>
                  <p>Cidade: <input type="text" value="<?php echo $end['city']?>"></p>
                  <p>Estado: <input type="text" value="<?php echo $end['state']?>"></p>
            </div>
        </div>
        <br>
        <button type="submit">Enviar</button>
        <br><br>
        <button type="submit"><a href="endereco.php">Voltar</a></button>
    </div>
    </form>

<?php 
  require_once 'app/modules/layout2.html';
?>
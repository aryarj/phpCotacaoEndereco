<?php 

require_once 'app/config/config.php';
require_once 'app/modules/hg-api.php';
require_once 'app/modules/layout1.html';

if($moedaA=='Escolher...' || $moedaB=='Escolher...')
{
    echo '<button><a href="moedas.php">Voltar</a></button>';
    echo '<br><br>';
    die('É necessário enviar duas moedas');

}

$hg = new HG_API(HG_API_KEY);
$dolar = $hg->dolar_quotation();

if($hg->is_error()==false)
{
  $variation = ($dolar['varBid'] < 0 ) ? 'secondary':'info';
}

//var_dump($dolar);

?>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p><h3>Cotação</h3></p>
                  <?php if($hg->is_error() == false): ?>
                    <p><?php echo($dolar['name']); ?>, <span class="badge badge-pill badge-<?php echo $variation;?>">Compra: <?php echo($dolar['bid']);?>;  Venda: <?php echo($dolar['ask']);?></span></p>
                  <?php else: ?>
                    <p><?php echo($dolar['code']); ?> <span class="badge badge-pill badge-danger">Serviço indisponível</span></p>
                  <?php endif; ?>
            </div>
        </div>
        <button type="submit"><a href="moedas.php">Voltar</a></button>
    </div>

<?php 
  require_once 'app/modules/layout2.html';
?>
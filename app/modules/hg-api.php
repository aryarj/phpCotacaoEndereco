<?php 
 
class HG_API{

    private $key = null;
    private $error = false;

    function __construct($key=null)
    {
        if(!empty($key))
        {
            $this->key=$key;
        }
    }

    function request($endpoint = '', $params = array())
    //function request($params = array())
    {
        $uri = "https://economia.awesomeapi.com.br/json/".$endpoint.$this->key;
        //echo '$uri: ';
        //echo $uri;
        //echo '<br>';

        /*
        if(is_array($params))
        {
            foreach($params as $key=>$value)
            {
                if(empty($value)) continue;
                $uri .= $key . urlencode($value);
                echo 'teste';
                var_dump($value);
                echo '<br>';
                
                //$uri = substr($uri,0,-1);
                $response = @file_get_contents($uri);
                $this->error=false;
                return json_decode($response, true);
            }
            
        }
        else
        {
            $this->error=true;
            return false;
        }
        */
        $response = @file_get_contents($uri);
        //echo '$response: ';
        //var_dump($response);
        //echo '<br>';
        $this->error=false;
        return json_decode($response, true);
    }

    function is_error()
    {
        return $this->error;
    }

    function dolar_quotation()
    {
        //$uri = "https://economia.awesomeapi.com.br/last/USD-BRL,EUR-BRL,BTC-BRL";
        
        $data = $this->request('last/');
        $moedaA = $_GET['moeda1'];
        $moedaB = $_GET['moeda2'];
        $cambio = $moedaA.$moedaB;
        //echo $cambio;

        //if(!empty($data) && is_array($data['USDBRL']))
        if(!empty($data) && is_array($data[$cambio]))
        {
            $this->error=false;
            //return($data['USDBRL']);
            return($data[$cambio]);
        }
        else
        {
            $this->error=true;
            return false;
        }
        
        //return $uri;
    }

}

?>
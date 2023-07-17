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
        echo $uri;
        echo '<br>';

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

        if(!empty($data) && is_array($data['USDBRL']))
        {
            $this->error=false;
            return($data['USDBRL']);
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
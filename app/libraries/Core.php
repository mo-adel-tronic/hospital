<?php
/*
create url
format controller/method/prams
domain/index.php/?url=user/show/1 > [ 'show', '1']
*/

class Core
{
    protected $currentController = 'pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->getURL();
        if(isset($url[0]) && file_exists(CONTROLLER.ucwords($url[0]).'.php'))
        {
            $this->currentController = ucwords($url[0]);

            unset($url[0]);
        }
 
        require(CONTROLLER.$this->currentController.'.php');
        $this->currentController = new $this->currentController;

       if(isset($url[1]))
       {
           if(method_exists($this->currentController,$url[1]))
           {
               $this->currentMethod = $url[1];
               unset($url[1]);
           }else
           {
               echo 'can`t find this method';
           }
       }

       $this->params = $url ? array_values($url) : [];

       call_user_func_array([$this->currentController,$this->currentMethod],$this->params);


    }
    public function getURL()
    {
        if(isset($_GET['url']))
        {
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
        return [];
    }
}

?>
<?php
require_once 'app/core/Controller.php';


class App extends Controller {

    protected $controller = 'home';
    protected $method;
    protected $parameter ='';


    function __construct()
    {
        $url=$this->parseUrl();

        $this->routes($url);

    }



    public function routerList()
    {
        $routeList = array(
            "login" => array (
                "controllerPath"=>"auth","controller"=>"login","method"=>"index","data"=>[]
            ),
            "home" => array (
                "controllerPath"=>"","controller"=>"home","method"=>"index","data"=>[]
            ),
            "registration" => array (
                "controllerPath"=>"auth","controller"=>"registration","method"=>"index","data"=>[]
            ),




            "user/today" => array (
                "controllerPath"=>"user","controller"=>"userController","method"=>"index","data"=>[]
            ),
            "user/suggest" => array (
                "controllerPath"=>"user","controller"=>"userController","method"=>"suggest","data"=>[]
            ),
            "user/profile" => array (
                "controllerPath"=>"user","controller"=>"profileController","method"=>"index","data"=>[]
            ),
            "user/popular" => array (
                "controllerPath"=>"user","controller"=>"userController","method"=>"popular","data"=>[]
            ),




            "vendor/index" => array (
                "controllerPath"=>"vendor","controller"=>"vendorController","method"=>"index","data"=>[]
            ),
            "vendor/bids" => array (
                "controllerPath"=>"vendor","controller"=>"vendorController","method"=>"bids","data"=>[]
            ),
            "vendor/deliveries" => array (
                "controllerPath"=>"vendor","controller"=>"vendorController","method"=>"deliveries","data"=>[]
            ),
            "vendor/top_clients" => array (
                "controllerPath"=>"vendor","controller"=>"vendorController","method"=>"top_clients","data"=>[]
            ),
            "vendor/top_items" => array (
                "controllerPath"=>"vendor","controller"=>"vendorController","method"=>"top_items","data"=>[]
            ),




            "superadmin/index" => array (
                "controllerPath"=>"superadmin","controller"=>"superadminController","method"=>"index","data"=>[]
            ),
            "superadmin/office_list" => array (
                "controllerPath"=>"superadmin","controller"=>"superadminController","method"=>"office_list","data"=>[]
            ),
            "superadmin/transaction_history" => array (
                "controllerPath"=>"superadmin","controller"=>"superadminController","method"=>"transaction_history","data"=>[]
            ),
            "superadmin/vendor_list" => array (
                "controllerPath"=>"superadmin","controller"=>"superadminController","method"=>"vendor_list","data"=>[]
            ),



            "admin/index" => array (
                "controllerPath"=>"admin","controller"=>"adminController","method"=>"index","data"=>[]
            ),
            "admin/order" => array (
                "controllerPath"=>"admin","controller"=>"adminController","method"=>"order","data"=>[]
            ),
            "admin/popular" => array (
                "controllerPath"=>"admin","controller"=>"adminController","method"=>"popular","data"=>[]
            ),
            "admin/add_user_office" => array (
                "controllerPath"=>"admin","controller"=>"adminController","method"=>"add_user_office","data"=>[]
            ),
            "admin/admin" => array (
                "controllerPath"=>"admin","controller"=>"adminController","method"=>"admin","data"=>[]
            ),
            "admin/bids" => array (
                "controllerPath"=>"admin","controller"=>"adminController","method"=>"bids","data"=>[]
            ),
            "admin/change_office_logo" => array (
                "controllerPath"=>"admin","controller"=>"adminController","method"=>"change_office_logo","data"=>[]
            ),
            "admin/history" => array (
                "controllerPath"=>"admin","controller"=>"adminController","method"=>"history","data"=>[]
            ),



        );

        return $routeList;
    }



    public function routes($url)
    {
        $routeList = $this->routerList();

        //if(!isset($routeList[$url]))


        $controllerPath=$routeList[$url]['controllerPath'];
        $controller=$routeList[$url]['controller'];
        $method=$routeList[$url]['method'];
        $data=$routeList[$url]['data'];

        $this->route($controllerPath,$controller,$method,$data);
    }






    public function parseUrl()
    {

        if(isset($_GET['url']))
        {
            $routList = $this->routerList();

            $url =explode('/', $_GET['url']);
            $temp="";

            for ($i=0;$i<sizeof($url);$i++)
            {
                $temp=$temp.$url[$i];
                if(isset($routList[$temp]))
                {
                    $this->controller=$temp;
                }
                $temp=$temp.'/';
                //echo "this is: ".$temp."   ".$url[$i]."<br>";
            }
        }

        return $this->controller;


        /*
        if(isset($_GET['url']))  ///if url is not null
        {
            $url =explode('/', $_GET['url']);


            $file='app/controllers/'.$url[0].'.php';

            if(file_exists($file))
            {
                $this->controller=$url[0];

            }
            else
            {
                echo 'file not found<br>';
            }

        }

        require_once 'app/controllers/'.$this->controller.'.php';
        $this->controller = new $this->controller;


        if(isset($url[1]))
        {

            //$m=new $this->controller;
            if(method_exists($this->controller,$url[1]))
            {
                $this->method=$url[1];
            }
        }

        if(!empty($this->method))
        {
            if(isset($url[2]))
            {
                $this->parameter=$url[2];
            }

            call_user_func_array([$this->controller,$this->method],[$this->parameter]);
        }

*/
    }

}
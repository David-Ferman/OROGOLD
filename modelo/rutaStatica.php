<?php

class rutaStatica{

    static public function ctrRuta(){
        return 'http://'.$_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"];
    }
    

}
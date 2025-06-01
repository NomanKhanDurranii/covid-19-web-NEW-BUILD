<?php

namespace Core;

class container{

    protected$bindings = [];

    public function bind($key,$resolver){

        $this->bindings[$key] =  $resolver;

    }
    
    public function resolve($key){
            if(array_key_exists($key,$this->bindings)){
                $resolver =  $this->bindings[$key];
                
                return call_user_func($resolver);
                # callL_user_func() is a  function that is used  to call a function that is anonymous or stored etc
                # for further i have to search for it
            }else{
                throw new \Exception('no matching bound for your key'.$key);
            }
    }

}


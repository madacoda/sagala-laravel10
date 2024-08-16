<?php
 
function app_key() {
    return str_replace(" ", "", strtolower(env('APP_NAME').env('APP_ENV')));
}

function cache_key($name, $array) {
    $output = implode('', array_map(
      function ($v, $k) {
          if(is_array($v)){
              return $k.'[]'.implode('&'.$k.'[]', $v);
          }else{
              return $k.''.$v;
          }
      }, 
      $array, 
      array_keys($array)
    ));
    return str_replace("-", "_", $name.$output.app_key());
  }
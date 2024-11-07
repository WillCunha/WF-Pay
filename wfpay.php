<?php

/**
 * Plugin Name: WF Pay
 * Plugin URI: https://www.wfsoft.com.br/wfpay
 * Description: Sistema de pagamento online, o Pay, módulo de recebimentos da WF Soft, realiza a transação entre o cartão do cliente e sua plataforma de pagamentos. Além disso, em vendas que são realizadas por boleto, o Pay realiza o controle do recebimento dos mesmo, sem falar, na conciliação dos cartões.
 * Version: 0.0.1
 * Author: WF Soft
 * Author URI: https://www.wfsoft.com.br/
 * Text Domain: wfsoft
 * Requires at Least: 6.3
 * Requires PHP: 7.4
 * 
 * @package wfsoft
 */

 define('ABSPATH') || exit;
 define('PACOTE', dirname(__FILE__));


 //Verifica se há o composer instalado no projeto
 if(file_exists(dirname(__FILE__) . "/vendor/autoload.php")){
    
    require_once(dirname(__FILE__) . "/vendor/autoload.php");
 
}else{

    error_log("Há erro no carregamento do Composer.");

};

if(class_exists('App\\Pay')){
    $pay = new App\Pay();
}




<?php

$phone = $_GET['phone'];
$data = substr($phone, 0, 4);


$telkomsel = ['0811', '0812', '0813', '0821', '0822', '0823', '0851', '0852', '0853'];
$indosat = ['0814', '0815', '0816', '0855', '0856', '0857', '0858'];
$xl = ['0817', '0818', '0819', '0859', '0877', '0878', '0879'];
$ceria = ['0828'];
$axis = ['0831', '0832', '0833', '0838'];
$smartfren = ['0881', '0882', '0883', '0884', '0885', '0886', '0887', '0888', '0889'];
$three = ['0895', '0896', '0897', '0898', '0899'];

function checking($param){
global $telkomsel;
global $indosat;
global $xl;
global $ceria;
global $axis;
global $smartfren;
global $three;

    if(in_array($param, $telkomsel)){
        $result = ["carrier"=>"Telkomsel"];
        echo json_encode($result);
    }

    if(in_array($param, $indosat)){
        $result = ["carrier"=>"Indosat"];
        echo json_encode($result);
    }

    if(in_array($param, $xl)){
        $result = ["carrier"=>"Xl Axiata"];
        echo json_encode($result);
    }

    if(in_array($param, $ceria)){
        $result = ["carrier"=>"Ceria"];
        echo json_encode($result);
    }

    if(in_array($param, $axis)){
        $result = ["carrier"=>"Axis"];
        echo json_encode($result);
    }

    if(in_array($param, $smartfren)){
        $result = ["carrier"=>"Smartfren"];
        echo json_encode($result);
    }

    if(in_array($param, $three)){
        $result = ["carrier"=>"Three"];
        echo json_encode($result);
    }

    if(!in_array($param, array_merge($telkomsel,$indosat,$xl,$ceria,$axis,$smartfren,$three))){
        $result = ["carrier"=>"Tidak ada di database"];
        echo json_encode($result);
    }
    
}

checking($data);

?>
<?php

function calcula($marcacao = 0, $configuracao = "") {

    $total_kwh = abs($marcacao) - abs($configuracao['kwh_ultima']);

    $total_verde = $total_kwh * abs($configuracao['tarifa_verde']);

    $total_amarela = $total_kwh * abs($configuracao['tarifa_amarela']);

    $total_vermelha = $total_kwh * abs($configuracao['tarifa_vermelha']);

    $resultado_verde = $total_verde + abs($configuracao['taxa_iluminacao']);

    $resultado_amarela = $total_verde + $total_amarela + abs($configuracao['taxa_iluminacao']);

    $resultado_vermelha = $total_verde + $total_vermelha + abs($configuracao['taxa_iluminacao']);

    $resul_verde = array();

    $resul_verde['tarifa_verde'] = number_format($configuracao['tarifa_verde'],5,',','.');
    $resul_verde['taxa_iluminacao'] = number_format($configuracao['taxa_iluminacao'],2,',','.');
    $resul_verde['total_kwh'] = $total_kwh;
    $resul_verde['total_verde'] = number_format($total_verde,2,',','.');
    $resul_verde['resultado'] = number_format($resultado_verde,2,',','.');


    $resul_amarela = array();

    $resul_amarela["normal"] = number_format($total_verde,2,',','.');
    $resul_amarela['tarifa_amarela'] = number_format($configuracao['tarifa_amarela'],5,',','.');
    $resul_amarela['taxa_iluminacao'] = number_format($configuracao['taxa_iluminacao'],2,',','.');
    $resul_amarela['total_kwh'] = $total_kwh;
    $resul_amarela['total_amarela'] = number_format($total_amarela,2,',','.');
    $resul_amarela['resultado'] = number_format($resultado_amarela,2,',','.');



    $resul_vermelha = array();

    $resul_vermelha["normal"] = number_format($total_verde,2,',','.');
    $resul_vermelha['tarifa_vermelha'] = number_format($configuracao['tarifa_vermelha'],5,',','.');
    $resul_vermelha['taxa_iluminacao'] = number_format($configuracao['taxa_iluminacao'],2,',','.');
    $resul_vermelha['total_kwh'] = $total_kwh;
    $resul_vermelha['total_vermelha'] = number_format($total_vermelha,2,',','.');
    $resul_vermelha['resultado'] = number_format($resultado_vermelha,2,',','.');

    $resultado = array("verde" => $resul_verde, "amarela" => $resul_amarela, "vermelha" => $resul_vermelha);

    return $resultado;
}

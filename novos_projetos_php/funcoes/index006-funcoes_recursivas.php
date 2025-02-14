<?php  

///Funções recursivas com php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //inicio:diretor
            array(
                'nome_cargo' => 'diretor comercial',
                'subordinados' => array(
                    //inicio gerente de vendas
                    array(
                        'nome_cargo' => 'gerente de vendas'
                    )
                    //termino gerente de vendas
                )
            ),
            //fim diretor comercial
            //inicio diretor financeiro 
            array(
                'nome_cargo' => 'diretor financeiro',
                'subordinados' => array(
                    //inicio gerente de contas
                    array(
                        'nome_cargo' => 'gerente de contas',
                        'subordinados' => array(
                            //inicio supervisor pag
                            array(
                            'nome_cargo' => 'supervisor de pagamentos'
                            )
                            //termino supervisorpag
                        )
                            ),
                    //termino gerente de contas
                    //inicio gerente compras
                    array(
                        'nome_cargo' => 'gerente de compras',
                        'subordinados' => array(
                            //inicio supervisor de suprimentos
                            array(
                                'nome_cargo' => 'supervisor de suprimentos'
                            )
                            //termino supervisor de suprimentos
                        )
                    )
                    //termino gerente de compras
                )
            )
            //termino diretor financeiro
        )
    )
);

//função recursiva

function exibe($cargos){

    $html = "<ul>";
    foreach ($cargos as $cargo){
        $html .= "<li>";
        $html .= $cargo['nome_cargo'];
        if(isset($cargo['subordinados'])&&count($cargo['subordinados'])){
            $html .= exibe(($cargo['subordinados']));
        }
        $html .= "</li>";

    }
    $html .= "</ul>";

    return $html;

}
echo exibe($hierarquia);

?>
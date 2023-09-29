<?php

include_once 'Product.php';

class TextProduct implements Product
{
    private $mfgProduct;

    public function getProperties()
    {
        $this->mfgProduct = <<<PRODUCT

<!doctype html>
<html>
    <head>
        <meta charset='UTF-8' />
        <title>Text Mali</title>
        <style type="text/css">

        header {
            color: #900;
            font-family: Verdana, Geneva, Sans-Serif;
            font-size: 24px;
            font-weight: bold;
        }

        p {
            font-family: Verdana, Geneva, Sans-Serif;
            font-size: 12px;
        }

        </style>
    </head>
    <body>
        <header>Mali</header>

        <p>O Mali ou M&aacute;li, oficialmente Rep&uacute;blica do Mali, &eacute; um
        pa&iacute;s africano sem sa&iacute;da para o mar na &Aacute;frica Ocidental. O
        Mali &eacute; o s&eacute;timo maior pa&iacute;s da &Aacute;frica. Limita-se com
        sete pa&iacute;ses, a norte pela Arg&eacute;lia, a leste pelo N&iacute;ger, a
        oeste pela Maurit&acirc;nia e Senegal e ao sul pela Costa do Marfim, Guin&eacute;
        e Burquina Fasso. O Mali tem uma &aacute;rea de 1 240 000 km&sup2; e a sua
        popula&ccedil;&atilde;o &eacute; estimada em cerca de 19 milh&otilde;es de
        habitantes. A capital do pa&iacute;s &eacute; Bamaco.</p>

        <p>Formado por Oito regi&otilde;es. o Mali tem fronteiras ao norte, no meio ao
        Deserto do Saara, enquanto a regi&atilde;o sul, onde vive a maioria de seus
        habitantes, est&aacute; pr&oacute;ximo aos rios N&iacute;ger e Senegal. Alguns dos
        recursos naturais no Mali s&atilde;o o ouro, o ur&acirc;nio e o sal.</p>

        <p>O atual territ&oacute;rio do Mali foi sede de tr&ecirc;s imp&eacute;rios da
        &Aacute;frica Ocidental, que controlava o com&eacute;rcio transaariano: o
        Imp&eacute;rio do Gana, o Imp&eacute;rio do Mali (que deu o nome de Mali ao
        pa&iacute;s), e o Imp&eacute;rio Songai. No final do s&eacute;culo XIX, o Mali
        ficou sob o controle da Fran&ccedil;a, tornando-se parte do Sud&atilde;o
        Franc&ecirc;s. Em 1960, conquistou a independ&ecirc;ncia, juntamente com o
        Senegal, tornando-se a Federa&ccedil;&atilde;o Mali. Um ano mais tarde, a
        Federa&ccedil;&atilde;o do Mali se dividiu em dois pa&iacute;ses: Mali e Senegal.
        Depois de um tempo em que havia apenas um partido pol&iacute;tico, um golpe em
        1991 levou &agrave; escritura de uma nova Constitui&ccedil;&atilde;o e &agrave;
        cria&ccedil;&atilde;o do Mali como uma na&ccedil;&atilde;o democr&aacute;tica, com
        um sistema pluripartid&aacute;rio. Quase a metade de sua popula&ccedil;&atilde;o
        vive abaixo da linha de pobreza, com menos de 1 d&oacute;lar por dia.</p>

        <p>No dia 18 de agosto de 2020, Mali sofreu um golpe de Estado, liderado pelas
        for&ccedil;as armadas da na&ccedil;&atilde;o. No dia 19 de agosto, o ent&atilde;o
        presidente Ibrahim Boubacar Ke&iuml;ta renunciou ao cargo.</p>
    </body>
</html>

PRODUCT;
        return $this->mfgProduct;
    }
}

?>
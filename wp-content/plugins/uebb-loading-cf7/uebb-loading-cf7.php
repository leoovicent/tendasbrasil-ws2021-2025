<?php
/*
Plugin Name: Uébb Loading CF7
Description: Desabilita o botão de enviar até que seja enviada uma mensagem.
*/

function add_custom_script_to_footer() {
    ?>
    <style>
        .submitting button{
            display:none !important;
        }
        .submitting .item_loading{
            display:block;
        }
        .item_loading{
            display:none;
            color:var(--green);
            text-align:center;
        }
    </style>
    <script>
        var elementosPai = document.getElementsByClassName("wpcf7-form");
        for (var i = 0; i < elementosPai.length; i++) {
            var elementoPai = elementosPai[i];
            var novoElementoP = document.createElement("p");
            novoElementoP.classList.add("item_loading");
            novoElementoP.textContent = "Carregando...";
            var ultimoFilho = elementoPai.lastElementChild;
            elementoPai.insertBefore(novoElementoP, ultimoFilho);
        }
    </script>
    <?php
}

add_action('wp_footer', 'add_custom_script_to_footer');
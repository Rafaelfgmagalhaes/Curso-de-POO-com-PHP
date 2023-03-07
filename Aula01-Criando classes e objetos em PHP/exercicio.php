<?php
    class filme {
        var $categoria;
        var $elenco;
        var $duração;
        var $midia;
        var $disponivel;

        function assistir(){
            if($this->disponivel == true){
                echo "<p>Estou assistindo...</p>";
            }else{
                echo "<p>Não posso assistir!</p>";
            }
        }
    }
?>
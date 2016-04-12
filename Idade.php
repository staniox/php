<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Idade {

    function    verificaIdade() {
        return <<<EOD
            <div class="box "id="calculo">
                <form action="index.php" method="Post" id="calculoData">
                    <h3>Ano Nascimento
                    <input type="number" name="campo" id="campo"></a><br>
                    <button type="submit"  class="salva"   id="dataCalc" >Calcular</button> 
                </form>
            </div>
EOD;
    }
    
    

}

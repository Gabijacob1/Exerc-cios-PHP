<?php
class loja {
    var $itens;

    function adicionar($produto, $quantidade) {
        if (isser($this->itens[$produto])){
            $this->itens[$produto] += $quantidade;
        }else{
            $this->itens[$produto] = $quantidade;
           }
    }
    function remover($produto, $quantidade) {
        if ($this->itens[$produto] > $quantidade) {
            $this->itens[$produto] -= $quantidade;
            return true;
        }else{
            return false;
        }
    }

}
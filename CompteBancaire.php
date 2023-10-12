<?php

class CompteBancaire {

    private $name;
    private $solde;

    function __construct($name = 'dupont', $solde = 1000) {

        $this->name = $name;
        $this->solde = $solde;

    }


    public function depot($somme) {

        $this->solde += $somme;

    }

    public function retrait($somme) {

        if ( $somme > $this->solde ) {
            return 'Solde insuffisant';
        } else {
            $this->solde -= $somme;
        }

    }

    public function affiche() {

        return $this->name . ' ' . $this->solde;
        
    }

}

?>
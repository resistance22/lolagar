<?php
  class stmkz_Taxonomy {
    public function __construct( $args, $cpt, $taxonomy_title ) {
      $this -> args = $args;
      $this -> cpt = $cpt;
      $this -> title = $taxonomy_title;
    }

    public function stmkz_register_taxonomy() {
      register_taxonomy( $this->title, $this -> cpt, $this-> args );
    } 
  }
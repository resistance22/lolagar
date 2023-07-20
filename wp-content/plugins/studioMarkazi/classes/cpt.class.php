<?php
require_once plugin_dir_path( __FILE__ ) . '/taxonomy.class.php';

class stmkz_CPT {
  private $taxonomies = array();

  public function __construct($args, $cpt, $cpt_taxonomies = [] ) {
    $this -> args = $args;
    $this -> cpt = $cpt;
    foreach($cpt_taxonomies as $tax){
      $stmkz_tax = new stmkz_Taxonomy($tax[0], $this->cpt, $tax[1]);
      array_push($this-> taxonomies, $stmkz_tax);
    }
  }

  public function stmkz_register_post_type() {
    register_post_type($this->cpt, $this-> args );
    foreach($this->taxonomies as $tax) {
      $tax -> stmkz_register_taxonomy();
    }
  }
}
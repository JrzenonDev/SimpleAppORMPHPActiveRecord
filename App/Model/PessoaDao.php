<?php

  namespace App\Model;

  class PessoaDao {

    public static function create(Pessoa $p) {
      Pessoa::create($p->to_array());  // transforma o obj em array
    }

    public static function read() {
      return  Pessoa::all();
    }

    public static function update($p) {
      Pessoa::find($p->codigo)->update_attributes($p->to_array());
    }

    public static function delete($codigo) {
      Pessoa::find($codigo)->delete();
    }

  }
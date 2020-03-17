<?php

  require 'config.php';

  $pessoa = new \App\Model\Pessoa();

  // $pessoa->codigo = 19;
  // $pessoa->nome = 'orm 2';
  // $pessoa->idade = 99;


  // create
  // \App\Model\PessoaDao::create($pessoa);

  // update
  // \App\Model\PessoaDao::create($pessoa);

  // delete
  // \App\Model\PessoaDao::delete(13);

  //
  $consulta = \App\Model\PessoaDao::read();

  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <td>Código</td>
          <td>Nome</td>
          <td>Idade</td>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($consulta as $item):
        ?>
        <tr>
          <td><?=$item->codigo;?></td>
          <td><?=$item->nome;?></td>
          <td><?=$item->idade;?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </body>
  </html>
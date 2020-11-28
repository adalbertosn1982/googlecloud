<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Histórico de disciplinas</title>

    <!-- Bootstrap 
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    -->
    <!-- Bootstrap core CSS -->
    <link href="<?php echo "http://".host.uri; ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="<?php echo "http://".host.uri; ?>/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo "http://".host.uri; ?>/bootstrap/theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    
    <!-- <script src="../../assets/js/ie-emulation-modes-warning.js"></script>  -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!--
    <h1>Disciplinas já cadatradas (Histórico de disciplinas)</h1>
    -->
  

   <div class="container">

    <div class="panel panel-primary">
        <!-- Default panel contents -->
        <div class="panel-heading"><p class="text-center"> Disciplinas já cursadas (Histórico de disciplinas)</p> </div>
        <div class="panel-body">
          <!-- <button type="button" class="btn btn-sm btn-default">Default</button>-->

          <div class="pull-right">
          
            <!-- class="pull-right" 
            <button type="button" class="btn btn-primary">Atualizar</button>  -->
            <button type="button" class="btn btn-warning">Atualizar</button>
          </div>
          <?php

            
            $ano=0;
            $semestre=0;
            $cad_imprimir='';
            $arr_disciplinas =array();
            $arr_sit_detalhes =array();

            if($result->rowCount() > 0){

                  $cad_imprimir.="<table class='table table-bordered'>";
          

                  foreach($result as $row) {
                   
                          if($ano != $row['ano'] || $semestre != $row['semestre']){


                              if(count($arr_disciplinas)>0){

                                  foreach($arr_disciplinas as $row_dic) {
                                      $cad_imprimir.=$row_dic."</br>";
                                    
                                  }  
                                    $cad_imprimir.="
                                     </td>
                                     <td>
                                     ";

                                  foreach($arr_sit_detalhes as $row_sit_det) {
                                      $cad_imprimir.=$row_sit_det."</br>";
                                    
                                  }   
                                  $cad_imprimir.="
                                         </td>   
                                      </tr>
                                    </tbody>
                                    ";
                                  unset($arr_disciplinas);
                                  unset($arr_sit_detalhes);
                                  $arr_disciplinas=array();
                                  $arr_sit_detalhes=array();
                                  //continue();
                              }

                              $cad_imprimir.= 
                                '<thead>
                                  <tr>
                                    <th  colspan="2">Ano:'.$row['ano']."/ Módulo: ".$row['semestre'].'</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Nome da disciplina</td>
                                    <td>Detalhe</td>
                                  </tr>
                                  <tr rowspan="2">
                                     <td>';

                                     $arr_disciplinas[]=utf8_encode($row['NOME_DISCIPLINA']);
                                     $arr_sit_detalhes[]= utf8_encode($row['sit_detalhe']);
                                     $ano = $row['ano'];
                                     $semestre = $row['semestre'];

                            }else{
                                     $arr_disciplinas[]=utf8_encode($row['NOME_DISCIPLINA']);
                                     $arr_sit_detalhes[]= utf8_encode($row['sit_detalhe']);
                                     //$ano = $row['ano'];
                                     //$semestre = $row['semestre']; 

                            }          
                   
                    }

                    if(count($arr_disciplinas)>0){

                      foreach($arr_disciplinas as $row_dic) {
                          $cad_imprimir.=$row_dic."</br>";
                        
                      }  
                        $cad_imprimir.="
                         </td>
                         <td>
                         ";

                      foreach($arr_sit_detalhes as $row_sit_det) {
                          $cad_imprimir.=$row_sit_det."</br>";
                        
                      }   
                      $cad_imprimir.="
                             </td>   
                          </tr>
                        </tbody>
                        ";
                      unset($arr_disciplinas);
                      unset($arr_sit_detalhes);
                      $arr_disciplinas=array();
                      $arr_sit_detalhes=array();
                  }

                    $cad_imprimir.="</table>";
             }else{
                $cad_imprimir.="Não existen Dados. Click no botão Atualizar";
             } 

             echo $cad_imprimir;

        ?> 
          
        </div>
     </div>



  </div>
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
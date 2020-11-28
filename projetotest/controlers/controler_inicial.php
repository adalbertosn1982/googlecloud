<?php
if(isset($conn)){

      if($controler=="atualizar_historico_diciplina"){

      	
      	try{    
	      	    exec("SET CHARACTER SET utf8");
	      	    $sql = 'SELECT DISTINCT ano,semestre,NOME_DISCIPLINA,sit_detalhe FROM disciplina order by ano,semestre,NOME_DISCIPLINA';
	      	    //$sql = 'SELECT DISTINCT ano,semestre FROM disciplina order by ano,semestre';
			    if($result = $conn->query($sql)){
			       
				    if($result !== false)
				    {
				        				     
				        include_once dir_server."/views/lst_historico_diciplina.php";
				    }

				}    
			
			    // Desconectamos do banco
			    $conn = null;

		    }
		    catch(PDOException $e) {
		        // imprimimos a nossa excecao
		        echo $e->getMessage();
		    }
			
			//$conn = null;
		    /*
		    foreach ($conn->query($sql) as $row) {
		        print $row['name'] . "\t";
		        print $row['color'] . "\t";
		        print $row['calories'] . "\n";
		    } 
		    */
			
      }	
} 
?>
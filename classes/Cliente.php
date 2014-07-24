<?php

/* Classe que */
class Cliente
{
	public $clientes = array();
	public $nome;
	public $telefone;
	public $cpf;
	public $cidade;
	public $estado;
	public $email;
	public $indice;

	public function __construct(&$clientes) 
	{
    	$this->clientes = $clientes;

		/*    	
		foreach ($this->clientes as $key => $value) 
    	{
  			//var_dump($value)."<br />\n"; 
  			$this->nome = $value['nome'];
  			$this->telefone = $value['telefone'];
  			$this->cpf = $value['cpf'];
  			$this->cidade = $value['cidade'];
  			$this->estado = $value['estado'];
  			$this->email = $value['email'];
  		}*/
  	}

  	/* lista cliente */
  	public function listaClientes($ordem = 'asc')
  	{
  		if($ordem == 'asc'){
  			asort ($this->clientes);
  		}else{
  			rsort ($this->clientes);
  		}

      echo "<div class=\"list-group\">";
  		foreach ($this->clientes as $key => $value) {
        echo "<a href=\"#\" class=\"list-group-item\">".$value['nome']."</a>";
  		}
      echo "</div>";
  	}

  	/* mostra cliente */
  	public function mostraCliente($indice)
  	{
  		var_dump($this->clientes[$indice]);
  	}


}



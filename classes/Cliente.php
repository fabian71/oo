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
  			ksort ($this->clientes);
  		}else{
  			krsort ($this->clientes);
  		}

      echo "<div class=\"list-group\">";
  		foreach ($this->clientes as $key => $value) {
        echo "<a href=\"/mostra_cliente?id=$key\" class=\"list-group-item\">".$key .' # ' . $value['nome']."</a>";
  		}
      echo "</div>";
  	}

  	/* mostra cliente */
  	public function mostraCliente($indice)
  	{
  		//var_dump($this->clientes[$indice]);

      echo '
      <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
              <p class="form-control-static">'.$this->clientes[$indice]['nome'].'</p>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <p class="form-control-static">'.$this->clientes[$indice]['email'].'</p>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Telefone</label>
            <div class="col-sm-10">
              <p class="form-control-static">'.$this->clientes[$indice]['telefone'].'</p>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Cpf</label>
            <div class="col-sm-10">
              <p class="form-control-static">'.$this->clientes[$indice]['cpf'].'</p>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Cidade</label>
            <div class="col-sm-10">
              <p class="form-control-static">'.$this->clientes[$indice]['cidade'].' - '.$this->clientes[$indice]['estado'].'</p>
            </div>
          </div>              

        </form>
      ';
  	}


}



<?php


class Usuario {

    private $id;
    private $nombre;
    private $apellidoP;
    private $apellidoM;
    private $email;
    private $email2;
    private $usuario;
    private $password;
    private $password2='';
    private $telefono;
    private $genero;
    private $enteraste;
    private $quiero;





    public function __construct($nombre,$apellidoP,$apellidoM,$email,$email2,$usuario,$password='',$password2='',$telefono,$genero,$enteraste,$quiero) {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->apellidoP=$apellidoP;
        $this->apellidoM=$apellidoM;
        $this->email=$email;
        $this->email2=$email2;
        $this->usuario=$usuario;
        $this->password=$password;
        $this->password2=$password2;
        $this->telefono=$telefono;
        $this->genero=$genero;
        $this->enteraste=$enteraste;
        $this->quiero=$quiero;
    }

    public function getId(){
        return $this->id;
    }


    public function getNombre(){
        return $this->nombre;
    }

    public function getApellidoP(){
        return $this->apellidoP;
    }

    public function getApellidoM(){
        return $this->apellidoM;
    }

    public function getEmail(){
      return $this->email;
    }
    public function getEmail2(){
      return $this->email2;
    }
    public function getUsuario(){
        return $this->usuario;
    }
    public function getPassword(){
      return $this->password;
    }

    public function getPassword2(){
      return $this->password2;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function getGenero(){
        return $this->genero;
    }
    public function getEnteraste(){
        return $this->enteraste;
    }
    public function getQuiero(){
        return $this->quiero;
    }


}

?>

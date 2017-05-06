<?php

class Utilisateur
{
protected $id_u;
protected $nom;
protected $prenom;
protected $email;
protected $tel;
protected $pass;

//Constructeur

public function __construct($id_u,$nom,$prenom,$email,$tel,$pass)
{
	$this->id_u=$id_u;
	$this->nom=$nom;
	$this->prenom=$prenom;
	$this->email=$email;
	$this->tel=$tel;
	$this->pass=$pass;
}
//Methodes De Classe
public function get_id_u()   {return $this->id_u;}
public function get_nom() {return $this->nom;}
public function get_prenom(){return $this->prenom;}
public function get_email()  {return $this->email;}
public function get_tel()  {return $this->tel;}
public function get_pass()  {return $this->pass;}

public function set_id_u($id_u)      {$this->id_u=$id_u;}
public function set_nom($nom)  {$this->nom=$nom;}
public function set_prenom($prenom){$this->prenom=$prenom;}
public function set_email($email)    {$this->email=$email;}
public function set_tel($tel)      {$this->tel=$tel;}
public function set_pass($pass)  {$this->pass=$pass;}

}































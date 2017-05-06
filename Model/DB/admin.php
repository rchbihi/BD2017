<?php



class Admin extends Utilisateur
{

//Constructeur
public function __construct()
{
	parent::__construct($id_u,$nom,$prenom,$email,$tel,$pass);
}

//methods de Classe
public function valide_rdv($id_rdv){}
public function annule_rdv($id_rdv){}
public function valide_u($id_u){}
public function prendrdv($id_u){}
public function debloquer_u($id_u){}
public function historiques($id_u){} 
public function statistiques(){}
public function connecter($email,$pass){}

}































<?php

include 'modelTableau.php';
include 'dashboard.php';

class Controller {

    private $model;
    private $view;
    private $paramGet;
    private $paramPost;

    public function __construct(){

        $this->view = new View();
        $this->model = new Model();
        $this->paramGet = (!empty($_GET))?$_GET:array('action'=>'home');
        $this->paramPost = (!empty($_POST))?$_POST:null;

    }

        public function dispatch(){

            if ($this->paramPost) {
                $method = $this->paramPost['action'];
                $this->model->$method($this->paramPost);
            }

            switch($this->paramGet['action']){

                case 'list' :
                    $list = $this->model->getList();
                    $this->view->displayList($list);
                break;

                default :
                    echo "Erreur";
                break;

            }
        }

}

static void Main(string[] args)
{
    try
    {
        Console.Write("mois=");
        int mois = int.Parse(Console.ReadLine());
        Console.Write("année=");
        int annee = int.Parse(Console.ReadLine());
        Console.WriteLine("nb jours = " + nbJoursMoisDuneAnnee(mois, annee));
    }catch{
        Console.WriteLine("saisie incorrecte");
    }
    Console.ReadLine();
}

?>
<?php
require(ROOT . "model/HorsesModel.php");


function index()
{
   
    $getAllHorses = getAllHorses();
    render("horses/index", array("horses" =>$getAllHorses));
    
}

function addHorse(){
 
 render("horses/create");
}

function createNewHorse(){
    createHorse($_POST["horseName"],$_POST["horseType"],$_POST["horseAge"],$_POST["horseHeight"]);
    header("location: index");
}

function editHorse($id){
   
    $getHorse = getHorse($id);
   
    render("horses/update", array("horse" => $getHorse));
}

function updateHorse($id){
    updateH($id, $_POST["horseName"], $_POST["horseType"], $_POST["horseAge"],$_POST["horseHeight"]);
    header("location: ".URL."horses/index");
    

}

function deleteHorse($id){
   
    $getHorse = getHorse($id);
    render("horses/delete", array("horse" =>$getHorse));
   

}

function destroyHorse($id){
    
    destroyH($id);
    header("location: ".URL."horses/index");
	
    
}
?>
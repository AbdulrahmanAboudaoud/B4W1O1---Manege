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
    createHorse($_POST["horseName"],$_POST["horseType"],$_POST["horseAge"]);
    header("location: index");
}

function edit($id){
   
    $getHorse = getHorse($id);
   
    render("horses/update", array("horse" => $getHorse));
}

function update(){
    updateHorse($id, $_POST["horseName"], $_POST["horseType"], $_POST["horseAge"]);
    header("location: ".URL."horses/index");
    

}

function deleteHorse($id){
   
    $getHorse = getHorse($id);
    render("horses/delete", array("horse" =>$getHorse));
   

}

function destroy($id){
    
    destroyHorse($id);
    header("location: ".URL."horses/index");
	
    
}
?>
<?php

function getAllHorses(){
  // Met het try statement kunnen we code proberen uit te voeren. Wanneer deze
  // mislukt kunnen we de foutmelding afvangen en eventueel de gebruiker een
  // nette foutmelding laten zien. In het catch statement wordt de fout afgevangen
   try {
       // Open de verbinding met de database
       $conn=openDatabaseConnection();
   
       // Zet de query klaar door middel van de prepare method
       $stmt = $conn->prepare("SELECT * FROM horses");

       // Voer de query uit
       $stmt->execute();

       // Haal alle resultaten op en maak deze op in een array
       // In dit geval is het mogelijk dat we meedere medewerkers ophalen, daarom gebruiken we
       // hier de fetchAll functie.
       $result = $stmt->fetchAll();

   }
   // Vang de foutmelding af
   catch(PDOException $e){
       // Zet de foutmelding op het scherm
       echo "Connection failed: " . $e->getMessage();
   }

   // Maak de database verbinding leeg. Dit zorgt ervoor dat het geheugen
   // van de server opgeschoond blijft
   $conn = null;

   // Geef het resultaat terug aan de controller
   return $result;
}

function getHorse($id){
    try {
        // Open de verbinding met de database
        $conn=openDatabaseConnection();
 
        // Zet de query klaar door midel van de prepare method. Voeg hierbij een
        // WHERE clause toe (WHERE id = :id. Deze vullen we later in de code
        $stmt = $conn->prepare("SELECT * FROM horses WHERE id = :id");
        // Met bindParam kunnen we een parameter binden. Dit vult de waarde op de plaats in
        // We vervangen :id in de query voor het id wat de functie binnen is gekomen.
        $stmt->bindParam(":id", $id);

        // Voer de query uit
        $stmt->execute();

        // Haal alle resultaten op en maak deze op in een array
        // In dit geval weten we zeker dat we maar 1 medewerker op halen (de where clause), 
        //daarom gebruiken we hier de fetch functie.
        $result = $stmt->fetch();
 
    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    // Maak de database verbinding leeg. Dit zorgt ervoor dat het geheugen
    // van de server opgeschoond blijft
    $conn = null;
 
    // Geef het resultaat terug aan de controller
    return $result;
 }

function createHorse($horseName,$horseType,$horseAge,$horseHeight){
    // Maak hier de code om een medewerker toe te voegen
  try{
    $conn=openDatabaseConnection();
    $sql = "INSERT INTO horses(HorseName, HorseAge, HorseType, Height) VALUES(:horseName, :horseAge, :horseType, :horseHeight)";
    $query = $conn->prepare($sql);
    $query->bindParam(":horseName", $horseName);
    $query->bindParam(":horseType", $horseType);
    $query->bindParam(":horseAge", $horseAge);
    $query->bindParam(":horseHeight", $horseHeight);
    $query->execute();
  }

  catch(PDOException $e){

    echo "Connection failed: " . $e->getMessage();
}
    $conn = null;
 }


 function updateH($id,$horseName,$horseType,$horseAge,$horseHeight){
    // Maak hier de code om een medewerker te bewerken
    try{
        $conn=openDatabaseConnection();
        $sql = "UPDATE horses SET HorseName = :horseName, HorseType = :horseType ,HorseAge = :horseAge, Height = :horseHeight  WHERE id = :id";
        $query = $conn->prepare($sql);
        $query->bindParam(":id", $id);
        $query->bindParam(":horseName", $horseName);
        $query->bindParam(":horseType", $horseType);
        $query->bindParam(":horseAge", $horseAge);
        $query->bindParam(":horseHeight", $horseHeight);
        $query->execute();
      }
    
      catch(PDOException $e){
    
        echo "Connection failed: " . $e->getMessage();
    }
        $conn = null;
 }

 function destroyH($id){
    // Maak hier de code om een medewerker te verwijderen
    try{
        $conn=openDatabaseConnection();
        $sql = "DELETE FROM horses WHERE id = :id";
        $query = $conn->prepare($sql);
        $query->bindParam(":id", $id);
       
        $query->execute();
      }
    
      catch(PDOException $e){
    
        echo "Connection failed: " . $e->getMessage();
    }
        $conn = null;
     }
    
 


?>
<?php


//fonction a manipuler les rapports 



//fonction qui liste les utilisateurs 

function listRapports()
{
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=gestiondesrapports;port=3309", "root", "");
    } catch (PDOException $e) {
        echo "error" . $e->getMessage();
    }
    $show_items = $pdo->prepare("SELECT * FROM rapports_stage ORDER BY Titre_rapport");
    $show_items->execute();
    foreach ($show_items as $result) {
        echo '<div class="course br-10 bg-w over-hidden">
        <div class="image-container over-hidden">
          <img src="images/rapports/course-02.jpg" alt="course" class="head" />
        </div>
        <div class="body pd-inline-1">
          <h2 class="box-heading-1 fz-16">' . $result['Titre_rapport'] . '</h2>
          <p class="fz-14 c-grey">
          ' . $result['Description_rapport'] . '
          </p>
          <div class="other-infos flx-sb-c mt-8">
          <div class="admin-actions actions">
            <a href="#" class="main-tr c-grey edit" title="edit" ><i class="fa-regular fa-pen-to-square"></i></a>
          </div>
            <p class="box-paragraph mb-0">Date de depot : ' . $result['Date_depot'] . '</p>
           <div class="user-actions actions flx">
             <a href="./reports/Cahier de charge_14-03-23_modifier.pdf" class="c-grey main-tr db main-tr" title="download"><i class="fa-solid fa-download" aria-hidden="true"></i></a>
             <a href="./reports/Cahier de charge_14-03-23_modifier.pdf" target="_blank" class="c-grey main-tr db ml-5 main-tr" title="preview"><i class="fa-regular fa-eye"></i></a>
           </div>

          </div>
        </div>
      </div>
    ';
        // echo "<h1>" . $result['Title'] . "</h1>";
        // echo "<p>" . $result['Text'] . "</p>";       
    }
}


//fonction edit user 
function editRapport($idrapportquandveutmodifier, $newId, $newTitre, $newDescription, $newDate, $newChemin, $newIdetudiant)
{
    //connection 
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=gestiondesrapports;port=3309", "root", "");
    } catch (PDOException $e) {
        echo "error" . $e->getMessage();
    }

    $edit_items = $pdo->prepare("UPDATE `rapports_stage` SET `ID_rapport`='.$newId.',`Titre_rapport`='.$newTitre.',`Description_rapport`='.$newDescription.',`Date_depot`='.$newDate.',`Chemin_fichier`='.$newChemin.',`ID_Etudiant`='.$newIdetudiant.' WHERE ID_rapport = . $idrapportquandveutmodifier .
    ");
    $edit_items->execute();
}


//function add user 
function addUser($newId, $newTitre, $newDescription, $newDate, $newChemin, $newIdetudiant)
{
    //connection 
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=gestiondesrapports;port=3309", "root", "");
    } catch (PDOException $e) {
        echo "error" . $e->getMessage();
    }

    $add_item = $pdo->prepare("INSERT INTO `rapports_stage`(`ID_rapport`, `Titre_rapport`, `Description_rapport`, `Date_depot`, `Chemin_fichier`, `ID_Etudiant`) VALUES ('.$newId.','.$newTitre.','.$newDescription.','.$newDate.','.$newChemin.','.$newIdetudiant.')
    ");
    $add_item->execute();
}


//fonction delete user 
function deleteUser($Id, $Nom, $Prenom, $Email, $Passwd, $Role)
{
    //connection 
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=gestiondesrapports;port=3309", "root", "");
    } catch (PDOException $e) {
        echo "error" . $e->getMessage();
    }

    $add_item = $pdo->prepare("DELETE FROM rapports_stage
    WHERE ID_rapport = '$Id';
    ");
    $add_item->execute();
}
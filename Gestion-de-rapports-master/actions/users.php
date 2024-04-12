<?php


//fontions a manipuler les utilisateurs



//fonction qui liste les utilisateurs 

function list_users()
{
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=gestiondesrapports;port=3309", "root", "");
    } catch (PDOException $e) {
        echo "error" . $e->getMessage();
    }
    $show_items = $pdo->prepare("SELECT * FROM utilisateurs ORDER BY Nom");
    $show_items->execute();
    foreach ($show_items as $result) {
        echo '<div class="icons flx-ic">
      <a class="icon br-circle main-tr fz-14" href="tel:+21266666666">
          <i class="fa-regular fa-envelope"></i>
      </a>
      <a class="icon br-circle main-tr fz-14" href="mailto:mail@mail.com">
          <i class="fa-solid fa-phone"></i>
      </a>
    </div>
    <div class="head tc pd-bt-8 tc">
      <img src="images/utilisateurs/friend-01.jpg" alt="" class="br-circle" />
      <h3 class="box-heading-1">' . $result["nom"] . '</h3>
      <p class="box-paragraph-1">' . $result["Nom_role"] . '</p>
    </div>
    <div class="body pd-block-8 border-block-eee">
                            <div class="fz-14 fb">
                                Email :
                                <span class="email fw-normal">' . $result["Email"] . '</span>
                            </div>
                            <div class="fz-14 mb-5 fb">
                                Filiere :
                                <span class="filiere fw-normal">' . $result["Filiere"] . '</span>
                            </div>
                            <div class="fz-14 mb-5 fb">
                                Niveau :
                                <span class="niveau fw-normal">1A</span>
                            </div>
                        </div>
                        <div class="footer pd-t-8">
                            <div class="buttons">
                                <a class="info-box bg-b c-w modefier" href="#">Modifier</a>
                                <a class="info-box bg-r c-w supprimer" href="#">Supprimer</a>
                            </div>
                        </div>
                    </div>
    ';
        // echo "<h1>" . $result['Title'] . "</h1>";
        // echo "<p>" . $result['Text'] . "</p>";       
    }
}


//fonction edit user 
function editUser($idquandveutchanger, $newId, $newNom, $newPrenom, $newEmail, $newPasswd, $newRole)
{
    //connection 
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=gestiondesrapports;port=3309", "root", "");
    } catch (PDOException $e) {
        echo "error" . $e->getMessage();
    }

    $edit_items = $pdo->prepare("UPDATE `utilisateurs` SET `ID_utilisateur`='$newId',`Nom`='$newNom',`Prenom`='$newPrenom',`Email`='$newEmail',`Mot_de_passe`='$newPasswd',`ID_role`='$newRole' WHERE ID_utilisateur = '.$idquandveutchanger.'
    ");
    $edit_items->execute();
}


//function add user 
function addUser($Id, $Nom, $Prenom, $Email, $Passwd, $Role)
{
    //connection 
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=gestiondesrapports;port=3309", "root", "");
    } catch (PDOException $e) {
        echo "error" . $e->getMessage();
    }

    $add_item = $pdo->prepare("INSERT INTO `utilisateurs`(`ID_utilisateur`, `Nom`, `Prenom`, `Email`, `Mot_de_passe`, `ID_role`) VALUES ('$Id','$Nom','$Prenom','$Email','$Passwd','$Role')
    ");
    $add_item->execute();
}


//fonction delete user 
function deleteUserById($Id)
{
    //connection 
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=gestiondesrapports;port=3309", "root", "");
    } catch (PDOException $e) {
        echo "error" . $e->getMessage();
    }

    $add_item = $pdo->prepare("DELETE FROM utilisateurs
    WHERE ID_utilisateur = '$Id';
    ");
    $add_item->execute();
}
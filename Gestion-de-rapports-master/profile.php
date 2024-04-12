<?php
include_once('./components/head.php');
?>

<head>
  <title>Profile</title>
  <link rel="stylesheet" href="./css/pages/profile.css">
  <!--Customer icon by icons8-->
  <link rel="shortcut icon" href="./images/Profile/icons8-customer-96.png" type="image/x-icon">
</head>

<body id="profile">

  <main>
    <?php
    include_once('./components/header.php');
    ?>
    <!--Start Profile Main Content-->
    <div class="pd-inline-1 mbt-1-5">
      <h1 class="main-heading w-fit bf-af ps-relative pd-bt-8">Profile</h1>
        <!-- Start User Informations  -->
        <div class="user-informations br-10 bg-w over-hidden">
        <h3 class="box-heading m-8">Informations d'utilisateur</h3>
          <div class="informations">
            <div class="general-informations border-eee-bt">
              <p class="box-paragraph">Informations generales :</p>
              <div class="infos">
                <div class="info flex-1">
                  <span class="c-grey fz-14">Nom :</span>
                  <span class="box-heading-1">Oubrik</span>
                </div>
                <div class="info flex-1">
                  <span class="c-grey fz-14">Prenom :</span>
                  <span class="box-heading-1">Youssef</span>
                </div>
                <div class="info flex-1">
                  <span class="c-grey fz-14">Sexe :</span>
                  <span class="box-heading-1">Male</span>
                </div>
              </div>
            </div>
            <div class="personal-informations border-eee-bt">
              <div class="infos">
                <div class="info flex-1">
                  <span class="c-grey fz-14">Email :</span>
                  <span class="box-heading-1">youssef.oubrik@edu.uiz.ac.ma</span>
                </div>
                <div class="info flex-1">
                  <span class="c-grey fz-14">Numéro de télephone :</span>
                  <span class="box-heading-1">+212 666666666</span>
                </div>
                <div class="info flex-1">
                  <span class="c-grey fz-14">Date de naissance :</span>
                  <span class="box-heading-1">30/09/2015</span>
                </div>
              </div>
            </div>
              <div class="other-informations">
                <p class="box-paragraph">Autres informations :</p>
                <div class="infos">
                  <div class="info flex-1">
                    <span class="c-grey fz-14">Status :</span>
                    <span class="box-heading-1">Etudiant</span>
                  </div>
                  <div class="info flex-1">
                    <span class="c-grey fz-14">Niveau :</span>
                    <span class="box-heading-1">3ieme année GINFO</span>
                  </div>
                  <div class="info flex-1">
                    <span class="c-grey fz-14">Post :</span>
                    <span class="box-heading-1">Chef departement</span>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <!-- End User Informations  -->
    </div>
    <!--End Profile Main Content-->
  </main>

</body>

</html>

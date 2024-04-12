<?php
include_once('./components/head.php');
?>

<head>
    <title>Utilisateurs</title>
    <link rel="stylesheet" href="./css/pages/utilisateurs.css">
    <link rel="stylesheet" href="./css/component/overlay.css">
    <link rel="stylesheet" href="./css/component/dialog.css">
    <link rel="shortcut icon" href="./images/utilisateurs/icon.png" type="image/x-icon">
    <script src="./js/framework.js" defer></script>
    <script src="./js/utilisateurs/utilisateurs.js" defer></script>
    <script src="./js/utilisateurs/dialogDisp.js" defer></script>
    <script src="./js/utilisateurs/options.js" defer></script>
    <script src="./js/utilisateurs/searchSubmition.js" defer></script>
    <script src="./js/utilisateurs/addMod.js" defer></script>
</head>

<body id="utilisateurs" class="col-3">
    <main>
        <?php
    include_once('./components/header.php');
    ?>
        <div class="overlay">
            <div class="dialog-sure dialog br-5 bg-w pd-1 tc">
                <a href="#" class="exit c-b main-tr fz-18">
                    <i class="fa-solid fa-xmark"></i>
                </a>
                <p class="box-heading-1 mb-8"> Sure ?</p>
                <form action="" class="yes-no">
                    <button type="submit" class="br-5 c-w bg-b yes-sure" name="remove" value="<?php ?>">Oui</button>
                    <button type="reset" class="br-5 c-w bg-r not-sure">No</button>
                </form>
            </div>
            <div class="dialog-add-mod dialog br-10 bg-w over-hidden w-fit pd-8 ps-relative">
                <a href="#" class="exit c-b main-tr fz-18">
                    <i class="fa-solid fa-xmark"></i>
                </a>
                <form action="POST" class="add-mod">
                    <?php
          include "./components/add-mod.php";
          ?>
                </form>
            </div>
        </div>
        <!--utilisateurs Main Content-->
        <div class="pd-inline-1">
            <h1 class="main-heading w-fit bf-af ps-relative pd-bt-8">utilisateurs</h1>
            <?php
      include('./components/searchFormS.php');
      ?>
            <div class="options w-fit flx-c-c gap-13 m-auto mt-1 w-full">
                <input type="button" value="Nom" class="option bg-b c-w fb active search-name">
                <input type="button" value="Id" class="option bg-b c-w fb search-id">
            </div>
            <div class="upload mt-8">
                <a href="#" class="blue-btn pd-inline-1 pd-block-8 m-0 m-auto add-user"><i class="fa-solid fa-plus"></i>
                    Ajouter un utilisateur</a>
            </div>
            </form>
            <div class="container pd-bt-3">
                <div class="friend br-5 bg-w pd-8">
                    <div class="icons flx-ic">
                        <a class="icon br-circle main-tr fz-14" href="tel:+21266666666">
                            <i class="fa-regular fa-envelope"></i>
                        </a>
                        <a class="icon br-circle main-tr fz-14" href="mailto:mail@mail.com">
                            <i class="fa-solid fa-phone"></i>
                        </a>
                    </div>
                    <div class="head tc pd-bt-8 tc">
                        <img src="images/utilisateurs/friend-01.jpg" alt="" class="br-circle" />
                        <h3 class="box-heading-1">Youssef Oubrik</h3>
                        <p class="box-paragraph-1">Etudiant</p>
                    </div>
                    <div class="body pd-block-8 border-block-eee">
                        <div class="fz-14 fb">
                            Email :
                            <span class="email fw-normal">youssef@gmail.com</span>
                        </div>
                        <div class="fz-14 mb-5 fb">
                            Filiere :
                            <span class="filiere fw-normal">GINFO</span>
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

                <div class="friend br-5 bg-w pd-8">
                    <div class="icons flx-ic">
                        <a class="icon br-circle main-tr fz-14" href="tel:+21266666666">
                            <i class="fa-regular fa-envelope"></i>
                        </a>
                        <a class="icon br-circle main-tr fz-14" href="mailto:mail@mail.com">
                            <i class="fa-solid fa-phone"></i>
                        </a>
                    </div>
                    <div class="head tc pd-bt-8 tc">
                        <img src="images/utilisateurs/friend-05.jpg" alt="" class="br-circle" />
                        <h3 class="box-heading-1">Youssef Oubrik</h3>
                        <p class="box-paragraph-1">Chef de département</p>
                    </div>
                    <div class="body pd-block-8 border-block-eee">
                        <div class="fz-14 fb">
                            Email :
                            <span class="email fw-normal">youssef@gmail.com</span>
                        </div>
                        <div class="fz-14 mb-5 fb">
                            Filiere :
                            <span class="filiere fw-normal">GINFO</span>
                        </div>
                    </div>
                    <div class="footer pd-t-8">
                        <div class="buttons">
                            <a class="info-box bg-b c-w modefier" href="#">Modifier</a>
                            <a class="info-box bg-r c-w supprimer" href="#">Supprimer</a>
                        </div>
                    </div>
                </div>
                <div class="friend br-5 bg-w pd-8">
                    <div class="icons flx-ic">
                        <a class="icon br-circle main-tr fz-14" href="tel:+21266666666">
                            <i class="fa-regular fa-envelope"></i>
                        </a>
                        <a class="icon br-circle main-tr fz-14" href="mailto:mail@mail.com">
                            <i class="fa-solid fa-phone"></i>
                        </a>
                    </div>
                    <div class="head tc pd-bt-8 tc">
                        <img src="images/utilisateurs/friend-01.jpg" alt="" class="br-circle" />
                        <h3 class="box-heading-1">Youssef Oubrik</h3>
                        <p class="box-paragraph-1">Secrétaire de département</p>
                    </div>
                    <div class="body pd-block-8 border-block-eee">
                        <div class="fz-14 fb">
                            Email :
                            <span class="email fw-normal">youssef@gmail.com</span>
                        </div>
                        <div class="fz-14 mb-5 fb">
                            Filiere :
                            <span class="filiere fw-normal">GINFO</span>
                        </div>
                    </div>
                    <div class="footer pd-t-8">
                        <div class="buttons">
                            <a class="info-box bg-b c-w modefier" href="#">Modifier</a>
                            <a class="info-box bg-r c-w supprimer" href="#">Supprimer</a>
                        </div>
                    </div>
                </div>
                <div class="friend br-5 bg-w pd-8">
                    <div class="icons flx-ic">
                        <a class="icon br-circle main-tr fz-14" href="tel:+21266666666">
                            <i class="fa-regular fa-envelope"></i>
                        </a>
                        <a class="icon br-circle main-tr fz-14" href="mailto:mail@mail.com">
                            <i class="fa-solid fa-phone"></i>
                        </a>
                    </div>
                    <div class="head tc pd-bt-8 tc">
                        <img src="images/utilisateurs/friend-01.jpg" alt="" class="br-circle" />
                        <h3 class="box-heading-1">Youssef Oubrik</h3>
                        <p class="box-paragraph-1">Etudiant</p>
                    </div>
                    <div class="body pd-block-8 border-block-eee">
                        <div class="fz-14 fb">
                            Email :
                            <span class="email fw-normal">youssef@gmail.com</span>
                        </div>
                        <div class="fz-14 mb-5 fb">
                            Filiere :
                            <span class="filiere fw-normal">GINFO</span>
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

                <div class="friend br-5 bg-w pd-8">
                    <div class="icons flx-ic">
                        <a class="icon br-circle main-tr fz-14" href="tel:+21266666666">
                            <i class="fa-regular fa-envelope"></i>
                        </a>
                        <a class="icon br-circle main-tr fz-14" href="mailto:mail@mail.com">
                            <i class="fa-solid fa-phone"></i>
                        </a>
                    </div>
                    <div class="head tc pd-bt-8 tc">
                        <img src="images/utilisateurs/friend-05.jpg" alt="" class="br-circle" />
                        <h3 class="box-heading-1">Youssef Oubrik</h3>
                        <p class="box-paragraph-1">Chef de département</p>
                    </div>
                    <div class="body pd-block-8 border-block-eee">
                        <div class="fz-14 fb">
                            Email :
                            <span class="email fw-normal">youssef@gmail.com</span>
                        </div>
                        <div class="fz-14 mb-5 fb">
                            Filiere :
                            <span class="filiere fw-normal">GINFO</span>
                        </div>
                    </div>
                    <div class="footer pd-t-8">
                        <div class="buttons">
                            <a class="info-box bg-b c-w modefier" href="#">Modifier</a>
                            <a class="info-box bg-r c-w supprimer" href="#">Supprimer</a>
                        </div>
                    </div>
                </div>
                <div class="friend br-5 bg-w pd-8">
                    <div class="icons flx-ic">
                        <a class="icon br-circle main-tr fz-14" href="tel:+21266666666">
                            <i class="fa-regular fa-envelope"></i>
                        </a>
                        <a class="icon br-circle main-tr fz-14" href="mailto:mail@mail.com">
                            <i class="fa-solid fa-phone"></i>
                        </a>
                    </div>
                    <div class="head tc pd-bt-8 tc">
                        <img src="images/utilisateurs/friend-01.jpg" alt="" class="br-circle" />
                        <h3 class="box-heading-1">Youssef Oubrik</h3>
                        <p class="box-paragraph-1">Secrétaire de département</p>
                    </div>
                    <div class="body pd-block-8 border-block-eee">
                        <div class="fz-14 fb">
                            Email :
                            <span class="email fw-normal">youssef@gmail.com</span>
                        </div>
                        <div class="fz-14 mb-5 fb">
                            Filiere :
                            <span class="filiere fw-normal">GINFO</span>
                        </div>
                    </div>
                    <div class="footer pd-t-8">
                        <div class="buttons">
                            <a class="info-box bg-b c-w modefier" href="#">Modifier</a>
                            <a class="info-box bg-r c-w supprimer" href="#">Supprimer</a>
                        </div>
                    </div>
                </div>
                <div class="friend br-5 bg-w pd-8">
                    <div class="icons flx-ic">
                        <a class="icon br-circle main-tr fz-14" href="tel:+21266666666">
                            <i class="fa-regular fa-envelope"></i>
                        </a>
                        <a class="icon br-circle main-tr fz-14" href="mailto:mail@mail.com">
                            <i class="fa-solid fa-phone"></i>
                        </a>
                    </div>
                    <div class="head tc pd-bt-8 tc">
                        <img src="images/utilisateurs/friend-01.jpg" alt="" class="br-circle" />
                        <h3 class="box-heading-1">Youssef Oubrik</h3>
                        <p class="box-paragraph-1">Etudiant</p>
                    </div>
                    <div class="body pd-block-8 border-block-eee">
                        <div class="fz-14 fb">
                            Email :
                            <span class="email fw-normal">youssef@gmail.com</span>
                        </div>
                        <div class="fz-14 mb-5 fb">
                            Filiere :
                            <span class="filiere fw-normal">GINFO</span>
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

                <div class="friend br-5 bg-w pd-8">
                    <div class="icons flx-ic">
                        <a class="icon br-circle main-tr fz-14" href="tel:+21266666666">
                            <i class="fa-regular fa-envelope"></i>
                        </a>
                        <a class="icon br-circle main-tr fz-14" href="mailto:mail@mail.com">
                            <i class="fa-solid fa-phone"></i>
                        </a>
                    </div>
                    <div class="head tc pd-bt-8 tc">
                        <img src="images/utilisateurs/friend-05.jpg" alt="" class="br-circle" />
                        <h3 class="box-heading-1">Youssef Oubrik</h3>
                        <p class="box-paragraph-1">Chef de département</p>
                    </div>
                    <div class="body pd-block-8 border-block-eee">
                        <div class="fz-14 fb">
                            Email :
                            <span class="email fw-normal">youssef@gmail.com</span>
                        </div>
                        <div class="fz-14 mb-5 fb">
                            Filiere :
                            <span class="filiere fw-normal">GINFO</span>
                        </div>
                    </div>
                    <div class="footer pd-t-8">
                        <div class="buttons">
                            <a class="info-box bg-b c-w modefier" href="#">Modifier</a>
                            <a class="info-box bg-r c-w supprimer" href="#">Supprimer</a>
                        </div>
                    </div>
                </div>
                <div class="friend br-5 bg-w pd-8">
                    <div class="icons flx-ic">
                        <a class="icon br-circle main-tr fz-14" href="tel:+21266666666">
                            <i class="fa-regular fa-envelope"></i>
                        </a>
                        <a class="icon br-circle main-tr fz-14" href="mailto:mail@mail.com">
                            <i class="fa-solid fa-phone"></i>
                        </a>
                    </div>
                    <div class="head tc pd-bt-8 tc">
                        <img src="images/utilisateurs/friend-01.jpg" alt="" class="br-circle" />
                        <h3 class="box-heading-1">Youssef Oubrik</h3>
                        <p class="box-paragraph-1">Secrétaire de département</p>
                    </div>
                    <div class="body pd-block-8 border-block-eee">
                        <div class="fz-14 fb">
                            Email :
                            <span class="email fw-normal">youssef@gmail.com</span>
                        </div>
                        <div class="fz-14 mb-5 fb">
                            Filiere :
                            <span class="filiere fw-normal">GINFO</span>
                        </div>
                    </div>
                    <div class="footer pd-t-8">
                        <div class="buttons">
                            <a class="info-box bg-b c-w modefier" href="#">Modifier</a>
                            <a class="info-box bg-r c-w supprimer" href="#">Supprimer</a>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        </div>

        <!--End utilisateurs Main Content-->
    </main>
</body>

</html>
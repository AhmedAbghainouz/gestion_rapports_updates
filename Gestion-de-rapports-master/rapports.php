<?php
include_once('./components/head.php');
?>    
<head>
<title>Rapports</title>
<link rel="stylesheet" href="./css/pages/rapports.css">
<link rel="shortcut icon" href="./images/rapports/icon.png" type="image/x-icon">
<link rel="stylesheet" href="./css/component/overlay.css">
<link rel="stylesheet" href="./css/component/dialog.css">
<script src="./js/framework.js" defer></script>
<script src="./js/rapports/rapports.js" defer></script>
<script src="./js/rapports/editReportSubmition.js" defer></script>
<script src="./js/rapports/searchOptions.js" defer></script>
<script src="./js/rapports/searchSubmition.js" defer></script>
</head>
<body id="rapports" class="col-3">
<main>
    <?php
    include_once('./components/header.php');
    ?>
    <!--Start Courses Main Content-->
    <div class="overlay">
        <div class="dialog br-10 bg-w over-hidden w-fit pd-8 ps-relative">
        <a href="#" class="exit c-b main-tr fz-18">
        <i class="fa-solid fa-xmark"></i>
      </a> 
      <form action="" class="edit-report pd-6">
            <label for="titre" class="db">Titre</label>
            <input type="text"id="titre" class="w-full  br-5 border-ccc">
            <label for="description" class="db">Description</label>
            <input type="text" id="description" class="w-full br-5 border-ccc">
            <label for="date-depot" class="db">Date de depot</label>
            <input type="text" id="date-depot" class="w-full br-5 border-ccc">
            <p class="fz-14 c-r edit-err"></p>
            <label for="image" class="db">Image</label>
            <input type="file" name="image" id="image" class="w-full br-5 border-ccc">
            <p class="fz-14 c-r"></p>
            <button type="submit" class="db w-full pd-8 bg-b c-w br-5 main-tr">Valider</button>
          </form>
        </div>
    </div>
    <div class="pd-inline-2-5">
      <h1 class="main-heading w-fit bf-af ps-relative pd-bt-8">Rapports</h1>
        <?php 
        include('./components/searchFormS.php');
        ?>
        <div class="options w-fit flx gap-13 m-auto mt-1 w-full">
          <input type="button" value="Titre" class="option bg-b c-w fb active titre">
          <input type="button" value="Etudiant" class="option bg-b c-w fb etudiant">
          <input type="button" value="Annee" class="option bg-b c-w fb option annee">
        </div>
        <div class="flx gap-8">
          <div class="date w-fit m-auto mt-1">
            <?php include('./components/selectS.php')?>
            <option value="r" selected>Les plus recents</option>
            <option value="a">Les plus anciens</option>
            <?php include('./components/selectE.php')?>
          </div>
          <div class="w-fit m-auto mt-1">
            <?php include('./components/selectS.php')?>
            <option>MEC</option>
            <option>ENV</option>
            <option>FID</option>
            <?php include('./components/selectE.php')?>
          </div>
        </div>
        <div class="upload mt-8">
        <a href="#" class="blue-btn pd-inline-1 pd-block-8 m-0 m-auto ajouter-rapport"><i class="fa-solid fa-angles-up mr-5 " aria-hidden="true"></i> Ajouter un rapport</a>
        </div>
        </form>
      <div class="container pd-bt-3 mgt-1-5">
        <div class="course br-10 bg-w over-hidden">
          <div class="image-container over-hidden">
            <img src="images/rapports/course-02.jpg" alt="course" class="head" />
          </div>
          <div class="body pd-inline-1">
            <h2 class="box-heading-1 fz-16">Mastering Web Design</h2>
            <p class="fz-14 c-grey">
              Master The Art Of Web Designing And Mocking, Prototyping And
              Creating Web Design Architecture
            </p>
            <div class="other-infos flx-sb-c mt-8">
            <div class="admin-actions actions">
              <a href="#" class="main-tr c-grey edit" title="edit" ><i class="fa-regular fa-pen-to-square"></i></a>
            </div>
              <p class="box-paragraph mb-0">Date de depot : 30-09-2003</p>
             <div class="user-actions actions flx">
               <a href="./reports/Cahier de charge_14-03-23_modifier.pdf" class="c-grey main-tr db main-tr" title="download" download="cahier_de_charge"><i class="fa-solid fa-download" aria-hidden="true"></i></a>
               <a href="./reports/Cahier de charge_14-03-23_modifier.pdf" target="_blank" class="c-grey main-tr db ml-5 main-tr preview" title="preview"><i class="fa-regular fa-eye"></i></a>

             </div>

            </div>
          </div>
        </div>
        <div class="course br-10 bg-w over-hidden">
          <div class="image-container over-hidden">
            <img src="images/rapports/course-02.jpg" alt="course" class="head" />
          </div>
          <div class="body pd-inline-1">
            <h2 class="box-heading-1 fz-16">Mastering Web Design</h2>
            <p class="fz-14 c-grey">
              Master The Art Of Web Designing And Mocking, Prototyping And
              Creating Web Design Architecture
            </p>
            <div class="other-infos flx-sb-c mt-8">
            <div class="admin-actions actions">
              <a href="#" class="main-tr c-grey edit" title="edit" ><i class="fa-regular fa-pen-to-square"></i></a>
            </div>
              <p class="box-paragraph mb-0">Date de depot : 30-09-2003</p>
             <div class="user-actions actions flx">
               <a href="./reports/Cahier de charge_14-03-23_modifier.pdf" class="c-grey main-tr db main-tr" title="download"><i class="fa-solid fa-download" aria-hidden="true"></i></a>
               <a href="./reports/Cahier de charge_14-03-23_modifier.pdf" target="_blank" class="c-grey main-tr db ml-5 main-tr" title="preview"><i class="fa-regular fa-eye"></i></a>

             </div>

            </div>
          </div>
        </div>
        <div class="course br-10 bg-w over-hidden">
          <div class="image-container over-hidden">
            <img src="images/rapports/course-02.jpg" alt="course" class="head" />
          </div>
          <div class="body pd-inline-1">
            <h2 class="box-heading-1 fz-16">Mastering Web Design</h2>
            <p class="fz-14 c-grey">
              Master The Art Of Web Designing And Mocking, Prototyping And
              Creating Web Design Architecture
            </p>
            <div class="other-infos flx-sb-c mt-8">
            <div class="admin-actions actions">
              <a href="#" class="main-tr c-grey edit" title="edit" ><i class="fa-regular fa-pen-to-square"></i></a>
            </div>
              <p class="box-paragraph mb-0">Date de depot : 30-09-2003</p>
             <div class="user-actions actions flx">
               <a href="./reports/Cahier de charge_14-03-23_modifier.pdf" class="c-grey main-tr db main-tr" title="download"><i class="fa-solid fa-download" aria-hidden="true"></i></a>
               <a href="./reports/Cahier de charge_14-03-23_modifier.pdf" target="_blank" class="c-grey main-tr db ml-5 main-tr" title="preview"><i class="fa-regular fa-eye"></i></a>

             </div>

            </div>
          </div>
        </div>
        <div class="course br-10 bg-w over-hidden">
          <div class="image-container over-hidden">
            <img src="images/rapports/course-02.jpg" alt="course" class="head" />
          </div>
          <div class="body pd-inline-1">
            <h2 class="box-heading-1 fz-16">Mastering Web Design</h2>
            <p class="fz-14 c-grey">
              Master The Art Of Web Designing And Mocking, Prototyping And
              Creating Web Design Architecture
            </p>
            <div class="other-infos flx-sb-c mt-8">
            <div class="admin-actions actions">
              <a href="#" class="main-tr c-grey edit" title="edit" ><i class="fa-regular fa-pen-to-square"></i></a>
            </div>
              <p class="box-paragraph mb-0">Date de depot : 30-09-2003</p>
             <div class="user-actions actions flx">
               <a href="./reports/Cahier de charge_14-03-23_modifier.pdf" class="c-grey main-tr db main-tr" title="download"><i class="fa-solid fa-download" aria-hidden="true"></i></a>
               <a href="./reports/Cahier de charge_14-03-23_modifier.pdf" target="_blank" class="c-grey main-tr db ml-5 main-tr" title="preview"><i class="fa-regular fa-eye"></i></a>

             </div>

            </div>
          </div>
        </div>
        <div class="course br-10 bg-w over-hidden">
          <div class="image-container over-hidden">
            <img src="images/rapports/course-02.jpg" alt="course" class="head" />
          </div>
          <div class="body pd-inline-1">
            <h2 class="box-heading-1 fz-16">Mastering Web Design</h2>
            <p class="fz-14 c-grey">
              Master The Art Of Web Designing And Mocking, Prototyping And
              Creating Web Design Architecture
            </p>
            <div class="other-infos flx-sb-c mt-8">
            <div class="admin-actions actions">
              <a href="#" class="main-tr c-grey edit" title="edit" ><i class="fa-regular fa-pen-to-square"></i></a>
            </div>
              <p class="box-paragraph mb-0">Date de depot : 30-09-2003</p>
             <div class="user-actions actions flx">
               <a href="./reports/Cahier de charge_14-03-23_modifier.pdf" class="c-grey main-tr db main-tr" title="download"><i class="fa-solid fa-download" aria-hidden="true"></i></a>
               <a href="./reports/Cahier de charge_14-03-23_modifier.pdf" target="_blank" class="c-grey main-tr db ml-5 main-tr" title="preview"><i class="fa-regular fa-eye"></i></a>

             </div>

            </div>
          </div>
        </div>
        <div class="course br-10 bg-w over-hidden">
          <div class="image-container over-hidden">
            <img src="images/rapports/course-02.jpg" alt="course" class="head" />
          </div>
          <div class="body pd-inline-1">
            <h2 class="box-heading-1 fz-16">Mastering Web Design</h2>
            <p class="fz-14 c-grey">
              Master The Art Of Web Designing And Mocking, Prototyping And
              Creating Web Design Architecture
            </p>
            <div class="other-infos flx-sb-c mt-8">
            <div class="admin-actions actions">
              <a href="#" class="main-tr c-grey edit" title="edit" ><i class="fa-regular fa-pen-to-square"></i></a>
            </div>
              <p class="box-paragraph mb-0">Date de depot : 30-09-2003</p>
             <div class="user-actions actions flx">
               <a href="./reports/Cahier de charge_14-03-23_modifier.pdf" class="c-grey main-tr db main-tr" title="download"><i class="fa-solid fa-download" aria-hidden="true"></i></a>
               <a href="./reports/Cahier de charge_14-03-23_modifier.pdf" target="_blank" class="c-grey main-tr db ml-5 main-tr" title="preview"><i class="fa-regular fa-eye"></i></a>

             </div>

            </div>
          </div>
        </div>
        <div class="course br-10 bg-w over-hidden">
          <div class="image-container over-hidden">
            <img src="images/rapports/course-02.jpg" alt="course" class="head" />
          </div>
          <div class="body pd-inline-1">
            <h2 class="box-heading-1 fz-16">Mastering Web Design</h2>
            <p class="fz-14 c-grey">
              Master The Art Of Web Designing And Mocking, Prototyping And
              Creating Web Design Architecture
            </p>
            <div class="other-infos flx-sb-c mt-8">
            <div class="admin-actions actions">
              <a href="#" class="main-tr c-grey edit" title="edit" ><i class="fa-regular fa-pen-to-square"></i></a>
            </div>
              <p class="box-paragraph mb-0">Date de depot : 30-09-2003</p>
             <div class="user-actions actions flx">
               <a href="./reports/Cahier de charge_14-03-23_modifier.pdf" class="c-grey main-tr db main-tr" title="download"><i class="fa-solid fa-download" aria-hidden="true"></i></a>
               <a href="./reports/Cahier de charge_14-03-23_modifier.pdf" target="_blank" class="c-grey main-tr db ml-5 main-tr" title="preview"><i class="fa-regular fa-eye"></i></a>
             </div>

            </div>
          </div>
        </div>
        <div class="course br-10 bg-w over-hidden">
          <div class="image-container over-hidden">
            <img src="images/rapports/course-02.jpg" alt="course" class="head" />
          </div>
          <div class="body pd-inline-1">
            <h2 class="box-heading-1 fz-16">Mastering Web Design</h2>
            <p class="fz-14 c-grey">
              Master The Art Of Web Designing And Mocking, Prototyping And
              Creating Web Design Architecture
            </p>
            <div class="other-infos flx-sb-c mt-8">
            <div class="admin-actions actions">
              <a href="#" class="main-tr c-grey edit" title="edit" ><i class="fa-regular fa-pen-to-square"></i></a>
            </div>
              <p class="box-paragraph mb-0">Date de depot : 30-09-2003</p>
             <div class="user-actions actions flx">
               <a href="./reports/Cahier de charge_14-03-23_modifier.pdf" class="c-grey main-tr db main-tr" title="download"><i class="fa-solid fa-download" aria-hidden="true"></i></a>
               <a href="./reports/Cahier de charge_14-03-23_modifier.pdf" target="_blank" class="c-grey main-tr db ml-5 main-tr" title="preview"><i class="fa-regular fa-eye"></i></a>
             </div>

            </div>
          </div>
        </div>
        <div class="course br-10 bg-w over-hidden">
          <div class="image-container over-hidden">
            <img src="images/rapports/course-02.jpg" alt="course" class="head" />
          </div>
          <div class="body pd-inline-1">
            <h2 class="box-heading-1 fz-16">Mastering Web Design</h2>
            <p class="fz-14 c-grey">
              Master The Art Of Web Designing And Mocking, Prototyping And
              Creating Web Design Architecture
            </p>
            <div class="other-infos flx-sb-c mt-8">
            <div class="admin-actions actions">
              <a href="#" class="main-tr c-grey edit" title="edit" ><i class="fa-regular fa-pen-to-square"></i></a>
            </div>
              <p class="box-paragraph mb-0">Date de depot : 30-09-2003</p>
             <div class="user-actions actions flx">
               <a href="./reports/Cahier de charge_14-03-23_modifier.pdf" class="c-grey main-tr db main-tr" title="download"><i class="fa-solid fa-download" aria-hidden="true"></i></a>
               <a href="./reports/Cahier de charge_14-03-23_modifier.pdf" target="_blank" class="c-grey main-tr db ml-5 main-tr" title="preview"><i class="fa-regular fa-eye"></i></a>

             </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="flag"></div>
    <!--End Projects Main Content-->
  </main>
</body>
</html>

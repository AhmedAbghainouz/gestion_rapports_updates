    <label for="nom" class="db">Nom</label>
    <input type="text" id="nom" class="w-full mbl-5 br-5 border-ccc">
    <p class="error-indec-nom c-r fz-14"></p>
    <label for="prenom" class="db">Prenom</label>
    <input type="text" id="prenom" class="w-full mbl-5 br-5 border-ccc">
    <p class="error-indec-prenom c-r fz-14"></p>
    <label for="filiere" class="db">Filiére</label>
    <input type="text" id="filiere" class="w-full mbl-5 br-5 border-ccc">
    <p class="error-indec-filiere c-r fz-14"></p>
    <label for="email" class="db">Email</label>
    <input type="email" id="email" class="w-full mbl-5 br-5 border-ccc">
    <p class="error-indec-email c-r fz-14"></p>
    <label for="role" class="db mbt-5">Role</label>
    <option value="etudiant">Etudiant</option>
    <option value="administrateur">Administrateur</option>
    <?php
    include("./components/selectE.php");
    ?>
    <label for="image" class="db">Image</label>
    <input type="file" accept="image/*" name="image" id="image" class="w-full mbl-5 br-5 border-ccc">
    <p class="error-indec-email c-r fz-14 mb-5"></p>
    <button type="submit" class="db w-full pd-8 bg-b c-w br-5 main-tr" name="valider">Valider</button>
    </form>
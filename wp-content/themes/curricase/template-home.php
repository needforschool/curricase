<?php
/*
Template Name: Home
*/
get_header(); ?>
<<<<<<< HEAD


<form action="">
    <div class="section">
        <h2>Mes données</h2>
        <div>
            <div>
                <label for="profil">Ajouter une photo de profile</label>
                <input type="file" name="profil" id="profil">
            </div>
            <div>
                <div>
                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom" id="prenom" required>
                </div>
                <div>
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom" required>
                </div>
            </div>
        </div>
        <div>
            <div>
                <label for="email">Adresse e-mail :</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="tel">Numéro de téléphone :</label>
                <input type="text" name="tel" id="tel" required>
            </div>
        </div>
        <div>
            <label for="adresse">Adresse :</label>
            <input type="text" name="adresse" id="adresse" required>
        </div>
        <div>
            <div>
                <label for="postal">Code postal :</label>
                <input type="text" name="ville" id="ville" required>
            </div>
            <div>
                <label for="ville">Ville / Localité :</label>
                <input type="text" name="ville" id="ville" required>
            </div>
        </div>
        <div>
            <div>
                <label for="birth">Date de Naissance :</label>
                <input type="date" name="brith" id="birth" required>

            </div>
            <div>
                <label for="lieu">Lieu de naissance :</label>
                <input type="text" name="lieu" id="lieu" required>
            </div>
        </div>
        <div>
            <div>
                <label for="permis">Permis de conduire :</label>
                <input type="text" name="permis" id="permis" required>
            </div>
            <div>
                <label for="sexe">Sexe :</label>
                <select name="sexe" id="sexe">
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                    <option value="autre">Autre</option>
                </select>
            </div>
        </div>
        <div>
            <div>
                <label for="nationalite">Nationalité :</label>
                <input type="text" name="nationalite" id="nationalite" required>
            </div>
            <div>
                <label for="civil">Etat civil :</label>
                <input type="text" name="civil" id="civil" required>
            </div>
        </div>
        <div>
            <div>
                <label for="linkedin">Linkedin :</label>
                <input type="text" name="linkedin" id="linkedin" required>
            </div>
            <div>
                <label for="site">Site internet :</label>
                <input type="text" name="site" id="site" required>
            </div>
        </div>
    </div>
    <div class="submit">
        <input type="submit" value="Etape suivante">
    </div>

</form>

<?php get_footer();
=======
<section class="content"></section>
<?php get_footer();
>>>>>>> origin/develop

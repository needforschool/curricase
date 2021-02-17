<?php
/*
Template Name: creatCV1
*/
get_header('createCV'); ?>

<div class="form">
    <form action="">
        <div class="section">
            <h2 class="title">Mes données</h2>
            <div class="content-form">
                <div class="content-formbox1">
                    <div class="boxphoto">
                        <div class="boxphoto2">
                        <label for="profil"><i class="fas fa-camera-retro"></i></label>
                        <input type="file" name="profil" id="profil" accept="image/png, image/jpeg">
                        </div>  
                    </div>

                </div>
                <div class="content-formbox2">

                    <div class="minibox">
                        <label for="prenom"></label>
                        <input class="input2" class="input" type="text" name="prenom" id="prenom" placeholder="Prénom" required>

                        <label for="nom"></label>
                        <input class="input2" type="text" name="nom" id="nom" placeholder="Nom" required>
                    </div>


                    <div class="minibox">

                        <label for="email"></label>
                        <input class="input2" type="email" name="email" id="email" placeholder="E-mail" required>

                        <label for="tel"></label>
                        <input class="input2" type="text" name="tel" id="tel" placeholder="Numéro de téléphone" required>

                    </div>
                    <div class="minibox2">
                        <label for="adresse"></label>
                        <input type="text" name="adresse" id="adresse" placeholder="Adresse" required>
                    </div>

                    <div class="minibox">
                        <label for="postal"></label>
                        <input class="input2" type="text" name="ville" id="ville" placeholder="Code postal" required>

                        <label for="ville"></label>
                        <input class="input2" type="text" name="ville" id="ville" placeholder="Ville" required>
                    </div>


                    <div class="minibox">
                        <label for="birth"></label>
                        <input class="input2" type="date" name="brith" id="birth" placeholder="Date de Naissance" required>


                        <label for="lieu"></label>
                        <input class="input2" type="text" name="lieu" id="lieu" placeholder="Lieu de Naissance" required>
                    </div>


                    <div class="minibox">
                        <label for="linkedin"></label>
                        <input class="input2" type="text" name="linkedin" id="linkedin" placeholder="Linkedin" required>

                        <label for="site"></label>
                        <input class="input2" type="text" name="site" id="site" placeholder="Site internet" required>
                    </div>
                </div>
            </div>
        </div>

<div class="submit">
    <input id="btn-submit"type="submit" value="Etape suivante">
</div>
</form>
</div>







</div>

<?php get_footer();

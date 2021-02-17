<?php
/*
Template Name: creatCV2
*/
get_header('createCV'); ?>

<div class="form2">
    <form action="">
        <div class="section">
            <h2 class="title2">Profil</h2>
            <div class="content-form">

                <div class="content-formbox2">

                    <div class="box-form">
                        <label for="description"></label>
                        <textarea class="input3" name="description" id="description" placeholder="Description" required></textarea>

                        <label for="titre"></label>
                        <input class="input3" type="text" name="titre" id="titre" placeholder="Titre" required>
                    </div>
                </div>
            </div>
        </div>
  


<div class="section">
    <h2 class="title">Expériences professionnelles</h2>
    <div class="content-form3">
        <div class="content-formbox2">

            <div class="minibox">
                <label for="fonction"></label>
                <input class="input2" class="input" type="text" name="fonction" id="fonction" placeholder="Fonction" required>

                <label for="localité"></label>
                <input class="input2" type="text" name="localité" id="localité" placeholder="Localité" required>
            </div>

            <div class="minibox2">
                <label for="employeur"></label>
                <input type="text" name="employeur" id="employeur" placeholder="Employeur" required>
            </div>

            <div class="minibox" id="minibox-date">
                <div class="box-date">
                    <label id="title-date" for="title-date">Depuis</label>
                    <input class="input3" type="date" name="depuis" id="birth" required>

                </div>


                <div class="box-date">
                    <label id="title-date" for="title-date">Jusqu'à</label>
                    <input class="input3" type="date" name="jusqua" id="jusqua" required>

                </div>
            </div>

            <div class="minibox">
                <label for="description"></label>
                <textarea class="input2" type="text" name="description" id="box-description" placeholder="Description" required></textarea>


            </div>
            <div class="ajout">
                <h3><i class="fas fa-plus-square"></i><a class="title-ajout" href="">Ajouter expériences professionnelles</a></h3>
            </div>
        </div>
    </div>
</div>



<div class="section">
    <h2 class="title">Formation</h2>
    <div class="content-form3">
        <div class="content-formbox2">

            <div class="minibox">
                <label for="formation"></label>
                <input class="input2" class="input" type="text" name="formation" id="formation" placeholder="Formation" required>

                <label for="localité"></label>
                <input class="input2" type="text" name="localité" id="localité" placeholder="Localité" required>
            </div>

            <div class="minibox2">
                <label for="etablissement"></label>
                <input type="text" name="etablissement" id="etablissement" placeholder="Etablissement" required>
            </div>

            <div class="minibox" id="minibox-date">
                <div class="box-date">
                    <label id="title-date" for="title-date">Depuis</label>
                    <input class="input3" type="date" name="depuis" id="birth" required>

                </div>


                <div class="box-date">
                    <label id="title-date" for="title-date">Jusqu'à</label>
                    <input class="input3" type="date" name="jusqua" id="jusqua" required>

                </div>
            </div>

            <div class="minibox">
                <label for="description"></label>
                <textarea class="input2" type="text" name="description" id="box-description" placeholder="Description" required></textarea>


            </div>
            <div class="ajout">
                <h3><i class="fas fa-plus-square"></i><a class="title-ajout" href="">Ajouter formation</a></h3>
            </div>
        </div>
    </div>
</div>




<div class="section">
    <h2 class="title">Compétences</h2>
    <div class="content-form3">
        <div class="content-formbox2">

            <div class="minibox">
                <label for="competence"></label>
                <input class="input2" class="input" type="text" name="competence" id="competence" placeholder="Compétence" required>

                <label for="niveau"></label>
                <input class="input2" type="text" name="niveau" id="niveau" placeholder="Niveau" required>
            </div>
            <div class="ajout">
                <h3><i class="fas fa-plus-square"></i><a class="title-ajout" href="">Ajouter compétences</a></h3>
            </div>
        </div>
    </div>
</div>
<div class="submit">
    <input id="btn-submit"type="submit" value="Etape suivante">
</div>
</form>
</div>









<?php get_footer();

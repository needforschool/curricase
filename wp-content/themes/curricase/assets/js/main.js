$('#add').on('click', function(e) {

    e.preventDefault();

    let html = '';
    
        html += '<div class="content-form3">';
          html += '<div class="content-formbox2">';
            html += '<div class="minibox">';
            html += '<label for="fonction"></label>';
            html += '<input class="input2" class="input" type="text" name="fonction" id="fonction" placeholder="Fonction" > ';
            html += '<label for="localité"></label>';
          html += '<input class="input2" type="text" name="localité" id="localité" placeholder="Localité" >';
        html += '</div>';

        html += '<div class="minibox2">';
            html += '<label for="employeur"></label>';
          html += '<input type="text" name="employeur" id="employeur" placeholder="Employeur" >';
        html += '</div>';

        html += '<div class="minibox" id="minibox-date">';
            html += '<div class="box-date">';
          html += '<label id="title-date" for="title-date">Depuis</label>';
          html += '<input class="input3" type="date" name="depuis" id="birth" >'
        html += '</div>';

            html += '<div class="box-date">';
        html += '<label id="title-date" for="title-date">Jusqu\'a</label>';
          html += '<input class="input3" type="date" name="jusqua" id="jusqua" >'
        html += '</div>';
        html += '</div>';

        html += '<div class="minibox">';
    html += '<label for="description"></label>';
      html += '<textarea class="input2" type="text" name="description" id="box-description" placeholder="Description" ></textarea>';
    html += '</div>';

    html += '<div class="ajout">';
    html += '<h3><i class="fas fa-plus-square"></i><a class="title-ajout" href="" id="add">Ajouter expériences professionnelles</a></h3>';
      html += '</div>';
    html += '</div>';
    html += '</div>';

    $(this).fadeOut(20);
    $('#add-experience').append(html);
});




$('#addf').on('click', function(e) {

    e.preventDefault();

    let html = '';
    
        html += '<div class="content-form3">';
          html += '<div class="content-formbox2">';
            html += '<div class="minibox">';
            html += '<label for="formation"></label>';
            html += '<input class="input2" class="input" type="text" name="formation" id="formation" placeholder="Formation" > ';
            html += '<label for="localité"></label>';
          html += '<input class="input2" type="text" name="localité" id="localité" placeholder="Localité" >';
        html += '</div>';

        html += '<div class="minibox2">';
            html += '<label for="etablissement"></label>';
          html += '<input type="text" name="etablissement" id="etablissement" placeholder="Etablissement" >';
        html += '</div>';

        html += '<div class="minibox" id="minibox-date">';
            html += '<div class="box-date">';
          html += '<label id="title-date" for="title-date">Depuis</label>';
          html += '<input class="input3" type="date" name="depuis" id="birth" >'
        html += '</div>';

            html += '<div class="box-date">';
        html += '<label id="title-date" for="title-date">Jusqu\'a</label>';
          html += '<input class="input3" type="date" name="jusqua" id="jusqua" >'
        html += '</div>';
        html += '</div>';

        html += '<div class="minibox">';
    html += '<label for="description"></label>';
      html += '<textarea class="input2" type="text" name="description" id="box-description" placeholder="Description" ></textarea>';
    html += '</div>';

    html += '<div class="ajout">';
    html += '<h3><i class="fas fa-plus-square"></i><a class="title-ajout" href="" id="add">Ajouter formation</a></h3>';
      html += '</div>';
    html += '</div>';
    html += '</div>';

    $(this).fadeOut(20);
    $('#add-formation').append(html);
});


$('#addc').on('click', function(e) {

    e.preventDefault();

    let html = '';
    
        html += '<div class="content-form3">';
          html += '<div class="content-formbox2">';
            html += '<div class="minibox">';
            html += '<label for="competence"></label>';
            html += '<input class="input2" class="input" type="text" name="competence" id="competence" placeholder="Compétence" > ';
            html += '<label for="niveau"></label>';
          html += '<input class="input2" type="text" name="niveau" id="niveau" placeholder="niveau" >';
        html += '</div>';

        

    html += '<div class="ajout">';
    html += '<h3><i class="fas fa-plus-square"></i><a class="title-ajout" href="" id="add">Ajouter compétences</a></h3>';
      html += '</div>';
    html += '</div>';
    html += '</div>';

    $(this).fadeOut(20);
    $('#add-competence').append(html);
});


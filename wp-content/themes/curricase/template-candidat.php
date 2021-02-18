<?php
/*
Template Name: Candidat
*/

get_header(); 

$id = $_GET['id'];

$info = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}cv WHERE id=$id ");

debug($info);

?>
<div class="content">
    <div class="titrecv">
        <h1><?php echo $info->firstname . ' ' . $info->lastname; ?></h1>
    </div>
    <div class="content-cv">


        <!-- <img class="cv-ex" src="<?php //echo get_template_directory_uri() . '/assets/img/cvcurricase.png' ?>" alt=""> -->
    </div>
    <div class="btncv">
        <ul class="boxbtn">
            <li class="nav-cv"><a href="">Modifier</a></li>
            <li class="nav-cv"><a href="" >Supprimer</a></li>
            <li class="nav-cv"><a href="" >Export PDF</a></li>
    </div>

</div>

<?php get_footer();

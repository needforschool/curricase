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
        <div class="bigboxcv">
        <div class="resume">
            <div class="resume_left">

                <div class="resume_content">
                    <div class="resume_item resume_info">
                        <div class="title">
                            <p class="bold">stephen colbert</p>
                            <p class="regular">Designer</p>
                            <p id="naissance" class="regular">29/08/2006</p>
                            <p id="localité" class="regular">Lille</p>
                        </div>
                        <ul>
                            <li>
                                <div class="icon">
                                    
                                </div>
                                <div class="data">
                                    21 Street, Texas <br /> USA
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                   
                                </div>
                                <div class="data">
                                    +324 4445678
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    
                                </div>
                                <div class="data">
                                    stephen@gmail.com
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    
                                </div>
                                <div class="data">
                                    www.stephen.com
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="resume_item resume_skills">
                        <div class="title">
                            <p class="bold">Compétences</p>
                        </div>
                        <ul>
                            <li>
                                <div class="skill_name">
                                    HTML
                                </div>

                            </li>
                            <li>
                                <div class="skill_name">
                                    CSS
                                </div>

                            </li>
                            <li>
                                <div class="skill_name">
                                    SASS
                                </div>

                            </li>
                            <li>
                                <div class="skill_name">
                                    JS
                                </div>

                            </li>
                            <li>
                                <div class="skill_name">
                                    JQUERY
                                </div>

                            </li>
                        </ul>
                    </div>
                    <div class="resume_item resume_social">
                        <div class="title">
                            <p class="bold">Social</p>
                        </div>
                        <ul>

                            <li>
                                <div class="icon">
                                    
                                </div>
                                <div class="data">
                                    <p class="semi-bold">Linkedin</p>
                                    <p>Stephen@linkedin</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="resume_right">
                <div class="resume_item resume_about">
                    <div class="title">

                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis illo fugit officiis distinctio culpa officia totam atque exercitationem inventore repudiandae?</p>
                    </div>
                    <div class="resume_item resume_work">
                        <div class="title">
                            <p class="bold">Expériences Professionnelles</p>
                        </div>
                        <ul>
                            <li>
                                <div class="date">2013 - 2015</div>
                                <div class="info">
                                    <p class="semi-bold">Lorem ipsum dolor sit amet.</p>
                                    <p id="nomemployeur" class="semi-bold">Renault</p>
                                    <p id="localité">Lille</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                                </div>
                            </li>
                            <li>
                                <div class="date">2015 - 2017</div>
                                <div class="info">
                                    <p class="semi-bold">Lorem ipsum dolor sit amet.</p>
                                    <p id="nomemployeur" class="semi-bold">Renault</p>
                                    <p id="localité">Lille</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                                </div>
                            </li>
                            <li>
                                <div class="date">2017 - Present</div>
                                <div class="info">
                                    <p class="semi-bold">Lorem ipsum dolor sit amet.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="resume_item resume_education">
                        <div class="title">
                            <p class="bold">Formation</p>
                        </div>
                        <ul>
                            <li>
                                <div class="date">2010 - 2013</div>
                                <div class="info">
                                    <p class="semi-bold">Web Designing </p>
                                    <p id="nomemployeur" class="semi-bold">Renault</p>
                                    <p id="localité">Lille</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                                </div>
                            </li>
                            <li>
                                <div class="date">2000 - 2010</div>
                                <div class="info">
                                    <p class="semi-bold">Texas International School</p>
                                    <p id="nomemployeur" class="semi-bold">Renault</p>
                                    <p id="localité">Lille</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        </div>

       
    </div>





<div class="btncv">
    <ul class="boxbtn">
        <li class="nav-cv"><a href="">Modifier</a></li>
        <li class="nav-cv"><a href="">Supprimer</a></li>
        <li class="nav-cv"><a href="">Export PDF</a></li>
</div>

</div>

<?php get_footer();

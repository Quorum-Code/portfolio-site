<!DOCTYPE html>
<html lang="en">
    <head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Normalization -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" /> 
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;500;700&family=Kanit:wght@300;400&display=swap" rel="stylesheet">
        
        <!-- LinkedIn and GitHub Logos -->
        <script src="https://kit.fontawesome.com/bac53ef6fe.js" crossorigin="anonymous"></script>
        
        <title> Evan Putnam - Portfolio </title>
        <link rel="icon" type="image/x-icon" href="img/favicon.ico">
        <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
        <!-- Header -->
	<?php include 'header.php' ?>
        
        <!-- Intro -->
        <section class="intro" id="home">
            <h1 class="section__title section__title--intro">
                Hi, I am <strong>Evan Putnam</strong>
            </h1>
            <p class="section__subtitle section__subtitle--intro"> Software Developer </p>
            <img src="img/portrait.jpg" alt="cat" class="intro__img">
        </section>
            
        <!-- Projects -->
        <section class="my-projects" id="projects">
            <h2 class="section__title section__title--projects">My Projects</h2>
            <div class="projects">
                <div class="project">
                    <h3>Lightweight Drone Simulator</h3>
                    <p>
                        Over a 10 week period, I worked alongside two other students to design, develop, and test a Lightweight Drone Simulator. The project was under Dr. Cihan Tunc, a professor from University of North Texas. The purpose of the project was to develop a software that can be used to simulate a large number of drones and their behaviors as quickly as possible. The difference between our simulator and others is that ours does not focus on graphic
                    </p>
                </div>
                
                <div class="project">
                    <h3> Photo Metadata Extractor Tool </h3>
                    <p>
                        The Photo Metadata Extractor Tool (PMET) is designed to speed up the process of cataloguing SuDoc
			numbered books, with the possibility of expanding the tool to fit other document identifiers. 
			This tool is the semester project for my capstone course, CS 458 Software Engineering.
                    </p>
                </div>
                
                <div class="project">
                    <h3> Interactive Campus Map </h3>
                    <p>
                       Project in progress. Some text. Some text. Some text. Some text. Some text. Some text. Some text. Some text. Some text. Some text. Some text. Some text. Some text. Some text. 
                    </p>
                </div>
            </div>
            
            <a href="#access-projects" class="btn"> View Projects </a>
        </section>
        
        <!-- My Skills -->
        <section class="my-skills" id="my-skills">
        	<h2 class="section__title section__title--skills"> My Skills </h2>
		<p> Here is a comprehensive list of my skills. </p>
        </section>
        
        <!-- About Me -->
        <section class="about-me" id="about">
                <h2 class="section__title section__title--about">Who I am</h2>
                <p class="section__subtitle section__subtitle--about"> Software Developer </p>
                
                <div class="about-me__body">
                    <p>
                        I am an undergraduate student at California Polytechnic Humboldt, 
			scheduled to graduate December 2023 with a B.S. in Computer Science.

                    </p>
                </div>
                
                <img src="img/cat2.jpg" alt="Bean lying on the ground horizontal" class="about-me__img">
        </section>
        
        <!-- Footer -->
        <?php include 'footer.php' ?>
        
        <script src="js/index.js"></script>
    </body>
</html>

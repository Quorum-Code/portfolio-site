<!DOCTYPE html>
<html lang="en">
    <?php include 'head.php' ?>
    
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
                    <h3 class="project-title">Lightweight Drone Simulator</h3>
                    <p class="project-text">
                        &nbsp;Over a 10 week period, I worked alongside two other students to design, develop, 
                        and test a Lightweight Drone Simulator. The project was under Dr. Cihan Tunc, a 
                        professor from University of North Texas. The purpose of the project was to develop 
                        a software that can be used to simulate a large number of drones and their behaviors 
                        as quickly as possible. The difference between our simulator and others is that ours 
                        does not focus on graphic
                    </p>
                </div>
                
                <div class="project">
                    <h3 class="project-title"> Photo Metadata Extractor Tool </h3>
                    <p class="project-text">
                        &nbsp;The Photo Metadata Extractor Tool (PMET) is designed to speed up the process of 
                        cataloguing SuDoc numbered books, with the possibility of expanding the tool to 
                        fit other document identifiers. This tool is the semester project for my capstone 
                        course, CS 458 Software Engineering.
                    </p>
                </div>
                
                <div class="project">
                    <h3 class="project-title"> Interactive Campus Map </h3>
                    <p class="project-text">
                        &nbsp;Project in progress. Some text. Some text. Some text. Some text. Some text. Some text. 
                       Some text. Some text. Some text. Some text. Some text. Some text. Some text. Some text. 
                    </p>
                </div>
            </div>
            
            <a href="#access-projects" class="btn"> View All Projects </a>
        </section>
        
        <!-- My Skills -->
        <section class="my-skills" id="my-skills">
        	<h2 class="section__title section__title--skills"> My Skills </h2>
		    <p class="section__text--skills"> 
                Click on a skill to see what projects include them.
            </p>
            <div class="skills">
                <ul class="skill">
                    <li>C#</li>
                    <li>C/C++</li>
                    <li>Python</li>
                    <li>Java</li>
                    <li>PHP</li>
                    <li>Javascript</li>
                </ul>

                <ul class="skill">
                    <li>SQL</li>
                    <li>PL/SQL</li>
                    <li>JSON</li>
                    <li>XML</li>
                </ul>

                <ul class="skill">
                    <li>VSCode/VisualStudio</li>
                    <li>Git/GitHub</li>
                    <li>Bash</li>
                </ul>
            </div>
        </section>
        
        <!-- About Me -->
        <section class="about-me" id="about">
                <h2 class="section__title section__title--about">About Me</h2>
                <p class="section__subtitle section__subtitle--about"> Schooling and Hobbies </p>
                
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

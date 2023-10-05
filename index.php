<!DOCTYPE html>
<html lang="en">
    <?php require 'php-modules/head.php' ?>
    
    <body>
        <!-- Header -->
	<?php require 'php-modules/header.php' ?>
        
        <!-- Intro -->
        <section class="intro" id="home">
            <h1 class="section__title section__title--intro">
                Hi, I am <strong>Evan Putnam</strong>
            </h1>
            <p class="section__subtitle section__subtitle--intro"> Software Developer </p>
            <img src="img/portrait.jpg" alt="Headshot of Evan Putnam" class="intro__img">
        </section>
            
        <!-- Projects -->
        <section class="my-projects" id="projects">
            <h2 class="section__title section__title--projects">My Projects</h2>
            <div class="projects">
                <div class="project">
                    <a class="project-link" href="/projects/lightweight-drone-simulator.php">
                        <h3 class="project-title">Lightweight Drone Simulator</h3>
                    </a>
                    <p class="project-text">
                        &nbsp;Over a 10 week period, I worked alongside two other students to design, develop, 
                        and test a Lightweight Drone Simulator. The project was under Dr. Cihan Tunc, a 
                        professor from University of North Texas. The purpose of the project was to develop 
                        a software that can be used to simulate a large number of drones and their behaviors 
                        as quickly as possible. The difference between our simulator and others is that ours 
                        does not focus on graphic quality and we use a simplified version of collision detection. 
                    </p>
                </div>
                
                <div class="project">
                    <a class="project-link" href="/projects/photo-metadata-extractor-tool.php">
                        <h3 class="project-title"> Photo Metadata Extractor Tool </h3>
                    </a>
                    <p class="project-text">
                        &nbsp;The Photo Metadata Extractor Tool (PMET) is designed to speed up the process of 
                        cataloguing SuDoc numbered books, with the possibility of expanding the tool to 
                        fit other document identifiers. The prototype tool makes use of machine learning to convert
                        images to text, then we access OCLC's WorldCat Search API to search for a corresponding 
                        document from the Library of Congress registry. Finally we process the request results into 
                        a CSV file to be used by library staff. This tool is the semester project for my capstone 
                        course, CS 458 Software Engineering.
                    </p>
                </div>
                
                <div class="project">
                    <a class="project-link" href="/projects/meowlaxy-hackathon.php">
                        <h3 class="project-title"> Meowlaxy Humboldt Hackathon </h3>
                    </a>
                    <p class="project-text">
                        &nbsp; I worked with a team of four other students to develop the a game in Unity for the 
                        competition. For the actual gameplay we decided to make a planet defense game, in which 
                        you play as a cat with a space ship destroying waves of asteroids and aliens. Those enemies 
                        drop stars which strengthen your ship, making it shoot faster, deal more damage, or move faster.
                        We finished the game in under 24 hours and ended up getting 4th place.
                    </p>
                </div>
            </div>
            
            <a href="/all-projects.php" class="btn"> View All Projects </a>
        </section>
        
        <!-- My Skills -->
        <section class="my-skills" id="my-skills">
        	<h2 class="section__title section__title--skills"> My Skills </h2>
		    <p class="section__text--skills"> 
                Click on a skill to see what projects include them.
            </p>
            <div class="skills">
                <ul class="skill">
                    <a class="skill_link" href="/all-projects.php?tag=C%23"><li>C#</li></a>
                    <a class="skill_link" href="/all-projects.php?tag=C%2FC%2B%2B"><li>C/C++</li></a>
                    <a class="skill_link" href="/all-projects.php?tag=Python"><li>Python</li></a>
                    <a class="skill_link" href="/all-projects.php?tag=Java"><li>Java</li></a>
                    <a class="skill_link" href="/all-projects.php?tag=PHP"><li>PHP</li></a>
                    <a class="skill_link" href="/all-projects.php?tag=Javascript"><li>Javascript</li></a>
                </ul>

                <ul class="skill">
                    <a class="skill_link" href="/all-projects.php?tag=SQL"><li>SQL</li></a>
                    <a class="skill_link" href="/all-projects.php?tag=PL%2FSQL"><li>PL/SQL</li></a>
                    <a class="skill_link" href="/all-projects.php?tag=JSON"><li>JSON</li></a>
                    <a class="skill_link" href="/all-projects.php?tag=XML"><li>XML</li></a>
                </ul>

                <ul class="skill">
                    <a class="skill_link" href="/all-projects.php?tag=Git%2FGithub"><li>Git/Github</li></a>
                    <a class="skill_link" href="/all-projects.php?tag=Bash"><li>Bash</li></a>
                </ul>
            </div>
        </section>
        
        <!-- About Me -->
        <section class="about-me section__about-me" id="about">
                <h2 class="section__title section__title--about">About Me</h2>
                <p class="section__subtitle section__subtitle--about"> Schooling and Hobbies </p>
                
                <div class="about-me__body">
                    <p class="about-me__text">
                        &nbsp;I am an undergraduate student at California Polytechnic Humboldt, 
			            scheduled to graduate December 2023 with a B.S. in Computer Science. I have
                        also completed a Computer Science Associates for Transfer at the Los Rios 
                        Community College district.

                    </p>
                    <p class="about-me__text">
                        &nbsp;I like making and working on lots of different things which are
                        usually related to computers. One those things is participating in 
                        game jams, which is a kind of competition or challenge to create a
                        game in a limited amount of time usually less than a week. Another
                        hobby I have is tabletop gaming, which I like to make 3D models for
                        and 3D print those as well.
                    </p>
                </div>
        </section>
        
        <div class="resume-btn">
            <a href="downloads/Resume - Evan Putnam.pdf" class="btn" download=""> <h3>Download My Resume</h3> </a>
        </div>

        <!-- Footer -->
        <?php require 'php-modules/footer.php' ?>
        
        <script src="js/index.js"></script>
    </body>
</html>

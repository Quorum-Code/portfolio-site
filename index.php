<!DOCTYPE html>
<html lang="en">
    <?php require 'php-modules/head.php' ?>
    
    <body>
        <!-- Header -->
	<?php require 'php-modules/header.php' ?>
        
        <!-- Intro -->
        <section class="intro" id="home">
            <h1 class="section__title section__title--intro">
                <strong>Evan Putnam</strong>
            </h1>
            <p class="section__subtitle section__subtitle--intro"> Computer Science Graduate </p>
            <img src="img/portrait.jpg" alt="Headshot of Evan Putnam" class="intro__img">
        </section>
            
        <!-- Projects -->
        <section class="my-projects" id="projects">
            <h2 class="section__title section__title--projects">Some of My Projects</h2>
            <div class="projects">
                <div class="project">
                    <a class="project-link" href="/projects/lightweight-drone-simulator.php">
                        <h3 class="project-title">Lightweight Drone Simulator</h3>
                    </a>
                    <p class="project-text">
                        &nbsp;Over a 10 week period, I worked alongside two other students to design, develop, 
                        and test a Lightweight Drone Simulator. The project was under Dr. Cihan Tunc, a 
                        professor from University of North Texas. The purpose of the project was to develop 
                        a tool that can be used to simulate a large number of drones and their behaviors 
                        as effeciently as possible. The difference between our simulator and others is that ours 
                        is focused on drone behaviour and a user can manipulate interactions through a 
                        configuration file.
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
                    <a class="project-link" href="/projects/my-portfolio-website.php">
                        <h3 class="project-title"> My Portfolio Site </h3>
                    </a>
                    <p class="project-text">
                        &nbsp;I made this website to showcase my skills and projects in one place. The site is 
                        running as a Digital Ocean droplet using a LAMP stack. Using what I learned from CS 279 
                        Intro to Linux and CS 328 Web Apps, I built this website and set up and configured the 
                        virtual web server to host this site. I used PHP to generate my project list as well as 
                        consolidate headers and footers into standalone files. The site also has a corresponding 
                        SSL Certificate in order to have the '.dev' top-level domain. I've also made sure this site
                        is mobile friendly.
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
                    <a class="skill_link" href="/all-projects.php?tag=Python"><li>Python</li></a>
                    <a class="skill_link" href="/all-projects.php?tag=PHP"><li>PHP</li></a>
                    <a class="skill_link" href="/all-projects.php?tag=Javascript"><li>Javascript</li></a>
                    <a class="skill_link" href="/all-projects.php?tag=C%2FC%2B%2B"><li>C/C++</li></a>
                    <a class="skill_link" href="/all-projects.php?tag=Java"><li>Java</li></a>
                </ul>

                <ul class="skill">
                    <a class="skill_link" href="/all-projects.php?tag=SQL"><li>SQL</li></a>
                    <a class="skill_link" href="/all-projects.php?tag=PL%2FSQL"><li>PL/SQL</li></a>
                    <a class="skill_link" href="/all-projects.php?tag=JSON"><li>JSON</li></a>
                    <a class="skill_link" href="/all-projects.php?tag=XML"><li>XML</li></a>
                </ul>

                <ul class="skill">
                    <a class="skill_link" href="/all-projects.php?tag=Git%2FGitHub"><li>Git/GitHub</li></a>
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
                        &nbsp;I received a Bachelor's in Computer Science from California Polytechnic Humboldt in
                        December 2023, with a cumulative 3.8 GPA. I have also completed a Computer Science Associate
                        for Transfer at Los Rios Community College District.

                    </p>
                    <p class="about-me__text">
                        &nbsp;I enjoy making lots of different things, not all of which are related to computer
                        science. One of those things is participating in game jams, which is a kind of competition
                        or challenge to create a game in a limited amount of time, often less than a week. Another
                        hobby I have is tabletop gaming, in which I like to make 3D models for 3D printing using
                        an SLA or resin printer.
                    </p>
                </div>
        </section>
        
        <div class="resume-btn">
            <a href="downloads/Resume - Evan Putnam.pdf" class="btn" target="_blank"> <h3>My Resume</h3> </a>
        </div>

        <!-- Footer -->
        <?php require 'php-modules/footer.php' ?>
        
        <script src="js/index.js"></script>
    </body>
</html>

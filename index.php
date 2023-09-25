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
                        does not focus on graphic quality and we use a simplified version of collision detection. 
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
                    <h3 class="project-title"> Project Override </h3>
                    <p class="project-text">
                        &nbsp; A rogue-like first-person-shooter I am making in Unity. This is a long term project which I hope
                        to eventually release on Steam but I enjoy continually improving and developing the game
                        when I have time. Majority of the assets, like 3D models, textures, and C# scripts, I have developed
                        myself.
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

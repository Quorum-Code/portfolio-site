<!DOCTYPE html>
<html lang="en">
    <?php require '../php-modules/head.php' ?>
    
    <body>
        <!-- Header -->
	    <?php require '../php-modules/header.php' ?>
        
        <section class="section__individual-project">
            <h2 class="section__individual-title individual-project-title"> Lightweight Drone Simulator </h2>
            <h3 class="section__individual-subtitle"> Research Experience for Undergraduates Project </h3>

            <p class="individual-project-text">
                &nbsp;The simulator was developed during the TaMaLe Research Experience for Undergraduates
                (REU) program 2023. The project I worked on for my 10 weeks with the program was
                under Dr. Tunc, a Computer Engineering professor at the University of North Texas.
                The goal of the project was to make a lightweight drone simulator that could run
                faster and use fewer system resources by abstracting the simulation interactions.
                We also made an effort to keep the code as modular as possible so it can be
                expanded upon or altered by other students in the future. Near the end of the ten
                weeks we wrote a paper encompassing the development and use of the simulator, as
                well as problems we encountered and some performance data to compare against other
                simulators.
            </p>

            <p class="individual-project-text">
                &nbsp;The paper is in the process of being submitted to a conference and is
                therefore still being changed to meet the conference requests. The downloadable
                PDF is the latest version as of 9/27/2023.
            </p>

            <p class="individual-project-text">
                &nbsp;As of 10/03/2023 the paper has been finalized and is in the process of being
                published at the Software Designed Systems conference 2023. Information on the 
                conference can be found <a href="https://emergingtechnet.org/SDS2023/" 
                target="_blank">here</a>.
            </p>

            <p class="individual-project-note">
                Note: I am only a maintainer on the GitLab project so the project may not be publicly
                accessible.
            </p>
            
            <div class="individual-project-links">
                <a href="../downloads/SDS2023_paper_5595.pdf" class="btn" download=""> <h3> Download the paper </h3> </a>
                <a href="https://gitlab.com/reu-tamale/drone_simulator/dsim_2023" class="btn" target="_blank"> <h3> GitLab </h3> </a>
            </div>
        </section>
        
        <!-- Footer -->
        <?php require '../php-modules/footer.php' ?>

        <script src="../js/index.js"></script>
    </body>
</html>

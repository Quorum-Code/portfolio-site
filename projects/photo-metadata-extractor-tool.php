<!DOCTYPE html>
<html lang="en">
<?php require '../php-modules/head.php' ?>

<body>
    <!-- Header -->
    <?php require '../php-modules/header.php' ?>

    <section class="section__individual-project">
        <h2 class="section__individual-title individual-project-title"> Photo Metadata Extractor Tool </h2>
        <h3 class="section__individual-subtitle"> CS 458 Project - In Progress </h3>

        <p class="individual-project-text">
            &nbsp;The Photo Metadata Extractor Tool (PMET) is the tool my project team is currently developing for
            the Computer Science Degree capstone course, CS 458 Software Engineering. The tool is being developed
            in Python and utilizes existing machine learning models to convert images of SuDoc identifiers to text
            and accesses the OCLC API to search the Library of Congress registry.
        </p>

        <p class="individual-project-text">
            &nbsp;The portion of the project I am responsible for is the API access, which includes
            creating the module for retrieving an authorization token from OCLC from a client id and
            client secret key as well as understanding the API request parameters to meet the project
            requirements. The process of requesting an API key and reading the documentation for that
            API has been a great learning experience for expanding my skills outside of programming. 
        </p>

        <p class="individual-project-note">
            The source code and other documents are available below on GitHub.
        </p>

        <div class="individual-project-links">
            <a href="https://github.com/Quorum-Code/photo-metadata-extractor-tool" class="btn" target="_blank">
                <h3> <i class="fa-brands fa-github"></i> GitHub </h3>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <?php require '../php-modules/footer.php' ?>

    <script src="../js/index.js"></script>
</body>

</html>
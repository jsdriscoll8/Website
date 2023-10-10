<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8">
        <title> John Driscoll's Sitemap </title>
        <meta name="author" content="John Driscoll">
        <meta name="description" content="A portfolio of work in my intro to web development class">

        <style>
            
        /* basic CSS */
        body {
            margin: auto;
            padding: 3%;
            width: 90%;
            display: grid;
        }

        figure {
            border: thin solid darkslategray;
            border-radius: 3%;
            padding: 3%;
            text-align: center;
        }

        figcaption {
            color: #839e99;
            font-style: italic;
            text-align: center;
        }

        img {
            border-radius: 3%;
            max-width: 100%
        }

        /* Setting up a grid layout for the sitemap page */
        body>h1 {
            grid-column: 1/2;
            grid-row: 1;

        }

        body>h2 {
            grid-column: 1/2;
            grid-row: 2;

        }

        body>p {
            grid-column: 1/2;
            grid-row: 3;
        }

        figure {
            border: thin solid darkslategray;
            border-radius: 3%;
            padding: 3%;
            text-align: center;
            grid-column: 2 / 2;
            grid-row: 1 / span 3;
        }

        .header {
            grid-area: header;
            grid-column: 1 / 3;
            padding: .5%;
            margin: .5%;
        }

        .lab-layout {
            border-bottom: thin dashed navy;
            display: inline-grid;
            grid-template-columns: 25% 25% 50%;
            grid-template-areas: "header header header"
                "public-files supporting-files grader-notes";
            padding: .5%;
            margin: .5%;
            grid-column: 1 / span 2;
        }

        .public-files {
            grid-area: public-files;
            padding: .5%;
            margin: .5%;
        }

        .supporting-files {
            grid-area: supporting-files;
            padding: .5%;
            margin: .5%;
        }

        .grader-notes {
            grid-area: grader-notes;
            padding: .5%;
            margin: .5%;
        }
        </style>
    </head>

    <body>
        <figure>
            <img alt="My brother and I at the entrance to Acadia NP" src="images/john-driscoll-acadia.jpg">
            <figcaption> My brother and me at Acadia NP. </figcaption>
        </figure>
        <h1> CS 1080-A Fall 2023 </h1>
        <h2> John Driscoll's Sitemap </h2>

        <section class="lab-layout">
            <h2 class="header">Lab Five - Even more styling.</h2>
            <section class="public-files">
                <h3>Public files</h3>
                <p>
                    <a href="lab5/about.php">About page</a>
                </p>
                <p>
                    <a href="lab5/detail.php">Nuclear energy page</a>
                </p>
                <p>
                    <a href="lab5/form.php">Form page</a>
                </p>
                <p>    
                    <a href="lab5/index.php">Home page</a>
                </p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p>
                    <a href="lab5/css/custom.css">CSS Style Sheet</a>
                </p>
                <p>
                    <a href="lab5/css/layout-desktop.css">Desktop Layout</a>
                </p>
            </section>

            <section class="grader-notes">
                <h3> Notes to grader</h3>
                <p>
                </p>
            </section>
        </section>

        <section class="lab-layout">
            <h2 class="header">Lab Four - Styling your site.</h2>
            <section class="public-files">
                <h3>Public files</h3>
                <p>
                    <a href="lab4/about.php">About page</a>
                </p>
                <p>
                    <a href="lab4/detail.php">Nuclear energy page</a>
                </p>
                <p>
                    <a href="lab4/form.php">Form page</a>
                </p>
                <p>    
                    <a href="lab4/index.php">Home page</a>
                </p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p>
                    <a href="lab4/css/custom.css">CSS Style Sheet</a>
                </p>
            </section>

            <section class="grader-notes">
                <h3> Notes to grader</h3>
                <p>
                I receive warnings from the CSS style sheet link as well as the PHP script contained
                in the form. Otherwise, no warnings. 
                </p>
            </section>
        </section>

        <section class="lab-layout">
            <h2 class="header">Lab Three - Creating a website.</h2>
            <section class="public-files">
                <h3>Public files</h3>
                <p>
                    <a href="lab3/about.php">About page</a>
                </p>
                <p>
                    <a href="lab3/detail.php">Nuclear energy page</a>
                </p>
                <p>
                    <a href="lab3/form.php">Form page</a>
                </p>
                <p>    
                    <a href="lab3/index.php">Home page</a>
                </p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p>
                    <a href="lab3/css/custom.css">CSS Style Sheet</a>
                </p>
                <p>  
                    <a href="lab3/images/sitemapWireframe.jpg">Sitemap wireframe</a><br>
                    <a href="lab3/images/aboutAndDetailPagesWireframe.jpg">About and details pages wireframes</a><br>
                    <a href="lab3/images/homePageWireframe.jpg">Home page wireframe</a><br>
                    <a href="lab3/images/formPageWireframe.jpg">Form page wireframe</a><br>
                </p>
            </section>

            <section class="grader-notes">
                <h3> Notes to grader</h3>
                <p>
                    The official validator gives warnings for the PHP and CSS headers we are directed to include.
                    I'm pretty sure I have the spelling and placement correct, and so I don't know how to get rid of them.
                    The only other warning comes in the aside element in about.php, where it says there is no p element in scope,
                    but there appears to be.
                </p>
            </section>
        </section>

        <section class="lab-layout">
            <h2 class="header">Lab Two - Choosing your topic.</h2>
            <section class="public-files">
                <h3>Public files</h3>
                <p>
                    <a href="lab2/index.php">Home page</a>
                </p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p></p>
            </section>

            <section class="grader-notes">
                <h3> Notes to grader</h3>
                <p>
                    Lab 2 -- there are additional commits for file reuploading as I went 
                    back through and updated my pages to meet W3C and the lab requirements. 
                </p>
            </section>
        </section>

        <section class="lab-layout">
            <h2 class="header">Lab one - Setting up your sitemap.</h2>
            <section class="public-files">
                <h3>Public files</h3>
                <p>
                    <a href="sample.php">sample.php</a><br>
                    <a href="ADMIN/code-viewer.php">Admin Page</a>
                </p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p></p>
            </section>

            <section class="grader-notes">
                <h3> Notes to grader</h3>
                <p>
                </p>
            </section>
        </section>
    </body>
</html>



<!doctype html>
<html>
    <head>
        <title>NAWRB Version 1 Project</title>
        <link rel="stylesheet" href="../css/style.css" type="text/css" />
        <link rel="stylesheet" href="../css/skin.css" type="text/css" />
        <script type="text/javascript" src="https://www.google.com/jsapi?key=ABQIAAAA5gu_wCvVmowppfPbVu4-aBQNWTSTUQbENAllBJtj-wo7APjEiRT16gGYmo2NN1HlWYbPSDwZYd4Hrw"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
        <script src="../js/jquery.jcarousel.min.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('#carousel').jcarousel({
                wrap: 'circular',
                scroll: 1
            });
            
            $('#carousel img').click(function(){
                $('#result').html("<img src='https://assets.timcamara.com/images/gallery/" + $(this).attr("alt") + ".png' class='project_pic' />")
            }).filter(":first").click();
        });
        
        </script>
        <!--[if lt IE 9]>
            <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="wrapper">
            <div id="head_wrapper">
                <header>
                    <a href="../index.php" class="logo">Tim Camara, Web Developer</a><br />

                    <nav>
                        <a href="../index.php" class="active">About</a>
                        <a href="../portfolio.php">Portfolio</a>
                        <a href="../contact.php">Contact</a>
                    </nav>
                </header>
            </div>
        
            <div id="content"></div>
            <div id="project">
                <h2>NAWRB v. 1</h2>

                <div id="result">
                    <img src="https://assets.timcamara.com/images/gallery/n1/large/1.png" alt="1" class="project_pic" />
                </div>

                <ul id="carousel" class="jcarousel-skin-tango">
                    <li><img src="https://assets.timcamara.com/images/gallery/n1/small/1.png" alt="n1/large/1" /></li>
                    <li><img src="https://assets.timcamara.com/images/gallery/n1/small/2.png" alt="n1/large/2" /></li>
                    <li><img src="https://assets.timcamara.com/images/gallery/n1/small/3.png" alt="n1/large/3" /></li>
                    <li><img src="https://assets.timcamara.com/images/gallery/n1/small/4.png" alt="n1/large/4" /></li>
                    <li><img src="https://assets.timcamara.com/images/gallery/n1/small/5.png" alt="n1/large/5" /></li>
                </ul>

                <p class="overlay">
                    This was a site developed for the National Association of Women REO Brokerages. I was brought 
                    in to conduct a redesign of the website, as well as expand the functionality. While the design 
                    was partially the result of a collaborative effort, everything else on the site was hand-coded. 
                    The site includes a JavaScript-driven menu, dynamic page elements, and an extensive (but 
                    unfortunately hidden) members section, which includes fully editable member profiles and 
                    dynamic privacy controls.
                </p>

                <h3>Skills Demonstrated</h3>
                <ul id="skills_list">
                    <li>PHP</li>
                    <li>jQuery/JavaScript</li>
                    <li>MySQL</li>
                    <li>Custom CMS</li>
                </ul>



                <p>
                    <a href="http://www.nawrb.com" target="blank">Visit Site</a>
                </p>

            </div>
            <div class="push"></div>
        </div>
        <footer>
            <div></div>
            &copy; 2010 Tim Camara
        </footer>
    </body>
</html>

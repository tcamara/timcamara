<!doctype html>
<html>
    <head>
        <title>CityServ Project</title>
        <link rel="stylesheet" href="../css/style.css" type="text/css" />
        <link rel="stylesheet" href="../css/skin.css" type="text/css" />
        <script type="text/javascript" src="https://www.google.com/jsapi?key=ABQIAAAA5gu_wCvVmowppfPbVu4-aBQNWTSTUQbENAllBJtj-wo7APjEiRT16gGYmo2NN1HlWYbPSDwZYd4Hrw"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
        <script src="../js/jquery.jcarousel.min.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $('#carousel').jcarousel({wrap: 'circular',scroll: 1});
            $('#carousel img').click(function(){$('#result').html("<img src='https://assets.timcamara.com/images/gallery/"+$(this).attr("alt")+".png' class='project_pic' />")});});
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
                <h2>CityServ</h2>

                <div id="result">
                    <img src="https://assets.timcamara.com/images/gallery/cs/large/1.png" alt="1" class="project_pic" />
                </div>

                <ul id="carousel" class="jcarousel-skin-tango">
                    <li><img src="https://assets.timcamara.com/images/gallery/cs/small/1.png" alt="cs/large/1" /></li>
                    <li><img src="https://assets.timcamara.com/images/gallery/cs/small/2.png" alt="cs/large/2" /></li>
                    <li><img src="https://assets.timcamara.com/images/gallery/cs/small/3.png" alt="cs/large/3" /></li>
                    <li><img src="https://assets.timcamara.com/images/gallery/cs/small/4.png" alt="cs/large/4" /></li>
                    <li><img src="https://assets.timcamara.com/images/gallery/cs/small/5.png" alt="cs/large/5" /></li>
                </ul>

                <p class="overlay">
                    CityServ was developed to replace an existing third-party product. Written entirely in Ruby on Rails, 
                    it was built to track the properties and contacts of a real estate company. Although still in the testing 
                    phase, it&rsquo;s functionality includes inline editing of fields supported by asynchronous saving, custom 
                    full-text search functionality, and extensive table sorting capabilities. In addition to being my first 
                    large-scale Ruby on Rails project, this also served as my introduction to the Prototype JavaScript framework.
                </p>

                <h3>Skills Demonstrated</h3>
                <ul id="skills_list">
                    <li>Ruby on Rails</li>
                    <li>Prototype/JavaScript</li>
                    <li>MySQL</li>
                    <li>Web Design</li>
                </ul>



                <p>
                    <a href="http://cityserv.org" target="blank">Visit Site</a>
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

<!doctype html>
<html>
    <head>
        <title>Lambda Alpha Project</title>
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
                <h2>Lambda Alpha</h2>

                <div id="result">
                    <img src="https://assets.timcamara.com/images/gallery/la/large/1.png" alt="1" class="project_pic" />
                </div>

                <ul id="carousel" class="jcarousel-skin-tango">
                    <li><img src="https://assets.timcamara.com/images/gallery/la/small/1.png" alt="la/large/1" /></li>
                    <li><img src="https://assets.timcamara.com/images/gallery/la/small/2.png" alt="la/large/2" /></li>
                    <li><img src="https://assets.timcamara.com/images/gallery/la/small/3.png" alt="la/large/3" /></li>
                    <li><img src="https://assets.timcamara.com/images/gallery/la/small/4.png" alt="la/large/4" /></li>
                    <li><img src="https://assets.timcamara.com/images/gallery/la/small/5.png" alt="la/large/5" /></li>
                    <li><img src="https://assets.timcamara.com/images/gallery/la/small/6.png" alt="la/large/6" /></li>
                </ul>

                <p class="overlay">
                    Lambda Alpha was a site I created for my fraternity chapter in college. I designed the entire site 
                    from scratch, including custom artwork for the menu and front page. This site was developed 
                    as mostly static pages, but also involved some custom CMS elements for controlling news posts. I 
                    also included an in-depth JavaScript-driven menu for browsing member archives. This site marked 
                    the first time I used the Google API&rsquo;s, in this case, to import and modify a Google Calendar. 
                </p>

                <h3>Skills Demonstrated</h3>
                <ul id="skills_list">
                    <li>PHP</li>
                    <li>jQuery/JavaScript</li>
                    <li>MySQL</li>
                    <li>Google Apps API Integration</li>
                    <li>Web Design</li>
                </ul>



                <p>
                    <a href="http://www.lambdaalpha.net" target="blank">Visit Site</a>
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

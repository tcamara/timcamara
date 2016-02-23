<!doctype html>
<html>
    <head>
        <title>The Online Portfolio of Tim Camara</title>
        <meta name="description" content="The portfolio of Tim Camara, a Southern California Web Developer with both talent and ambition" />
        <meta name="author" content="Tim Camara" />
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <!--[if lt IE 9]>
            <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
    </head>
    <body>
        <div class="wrapper">
            <div id="head_wrapper">
                <header>
                    <a href="index.php" class="logo">Tim Camara, Web Developer</a><br />

                    <nav>
                        <a href="index.php">About</a>
                        <a href="portfolio.php">Portfolio</a>
                        <a href="contact.php" class="active">Contact</a>
                    </nav>
                </header>
            </div>

            <div id="content">
                <fieldset>
                    <label for="name">Name</label><br />
                    <input type="text" name="name" id="name" required autofocus /><br />
                    <span id="name_error"></span><br />

                    <label for="name">Email</label><br />
                    <input type="email" name="email" id="email" required /><br />
                    <span id="email_error"></span><br />

                    <label for="name">Question</label><br />
                    <textarea name="question" id="question" rows="8" required></textarea><br />
                    <span id="question_error"></span><br />

                    <div id="submit_button"><input type="submit" value="Send" /></div>
                </fieldset>

                <p class="center">
                    Tired of forms?  Then drop me a line at <a href="mailto:tcamara21@gmail.com">tcamara21@gmail.com</a> or 
                    follow me on <a href="https://www.twitter.com/10ofalltrades">Twitter</a>.
                </p>        
            </div>
            <div class="push"></div>
        </div>
        <footer>
            <div></div>
            &copy; 2010 Tim Camara
        </footer>
        
        <script type="text/javascript" src="https://www.google.com/jsapi?key=ABQIAAAA5gu_wCvVmowppfPbVu4-aBQNWTSTUQbENAllBJtj-wo7APjEiRT16gGYmo2NN1HlWYbPSDwZYd4Hrw"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            var name_set = false;
            var email_set = false;
            var question_set = false;
            
            $('#name').blur(function(){
                if($('#name').val().length < 1){
                    $('#name_error').html('Please enter a name.');
                    name_set = false;
                }else{
                    name_set = true;
                    $('#name_error').html('');
                }
            });
            
            $('#email').blur(function(){
                if($('#email').val().length < 1){
                    $('#email_error').html('Please enter an email.');
                    email_set = false;
                }else{
                    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
                    if(!pattern.test($('#email').val())){
                        $('#email_error').html('Your email must be valid.');
                        email_set = false;
                    }else{
                        email_set = true;
                        $('#email_error').html('');
                    }
                }
            });
            
            $('#question').blur(function(){
                if($('#question').val().length < 1){
                    $('#question_error').html('Please enter a question.');
                    question_set = false;
                }else{
                    question_set = true;
                    $('#question_error').html('');
                }
            });
            
            $('#submit_button input').click(function(){             
                if(!name_set){
                    $('#name_error').html('Please enter a name.');
                }
                
                if(!email_set){
                    if($('#email').val().length < 1){
                        $('#email_error').html('Please enter an email.');
                    }else{
                        $('#email_error').html('Your email must be valid.');
                    }
                }
                
                if(!question_set){
                    $('#question_error').html('Please enter a question.');
                }
                
                $('span').css('color', 'red');
                
                if(name_set && email_set && question_set){
                    $.post("contact_process.php", { name: $('#name').val(), email: $('#email').val(), question: $('#question').val() });
                    alert('Thanks!');
                    $('#name').val("");
                    $('#email').val("");
                    $('#question').val("");
                }
            });
        });
        </script>
        
    </body>
</html>

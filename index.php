<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>StatTracker</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title">StatTracker</h1>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
                    <header>
                        <h1>Whachu want.</h1>
                    </header>
                    <section>
                        <form action="Stat_Calculator.php" method="get">
                            <div class="form-group">
                                <label for="build-health">Health</label>
                                <input type="number" class="form-control" id="build-health" name="build[health]" placeholder="0" min="0" max="125">
                            </div>
                            <div class="form-group">
                                <label for="build-ki">Ki</label>
                                <input type="number" class="form-control" id="build-ki" name="build[ki]" placeholder="0" min="0" max="125">
                            </div>
                            <div class="form-group">
                                <label for="build-stamina">Stamina</label>
                                <input type="number" class="form-control" id="build-stamina" name="build[stamina]" placeholder="0" min="0" max="125">
                            </div>
                            <div class="form-group">
                                <label for="build-basicattacks">Basic Attacks</label>
                                <input type="number" class="form-control" id="build-basicattacks" name="build[basicattacks]" placeholder="0" min="0" max="125">
                            </div>
                            <div class="form-group">
                                <label for="build-strikesupers">Strike Supers</label>
                                <input type="number" class="form-control" id="build-strikesupers" name="build[strikesupers]" placeholder="0" min="0" max="125">
                            </div>
                            <div class="form-group">
                                <label for="build-kisupers">Ki Blast Supers</label>
                                <input type="number" class="form-control" id="build-kisupers" name="build[kisupers]" placeholder="0" min="0" max="125">
                            </div>
                            <div class="form-group">
                                <label for="character-level">Current Level</label>
                                <input type="number" class="form-control" id="character-level" name="character[level]" placeholder="0" min="0" max="99">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </section>
                </article>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>
</html>
     
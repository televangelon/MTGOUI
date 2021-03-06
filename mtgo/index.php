<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <title>
        </title>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
        <link rel="stylesheet" href="my.css" />
        <script src="http://code.jquery.com/jquery-1.7.2.min.js">
        </script>
        
        
        <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
        
        <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.js">
        </script>
        <script src="my.js">
        </script>
        <!-- User-generated css -->
        <style>
        </style>
        <!-- User-generated js -->
        <script>
            try {

    $(function() {

    });

  } catch (error) {
    console.error("Your javascript has an error: " + error);
  }
        </script>
    </head>
    <body>
        <!-- Home -->
            <div data-theme="a" data-role="header">
                <div data-role="navbar" data-iconpos="top">
                    <ul>
                        <li>
                            <a href="#index.php" data-transition="fade" data-theme="" data-icon="">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#decks/app.php" data-transition="fade" data-theme="" data-icon="">
                                Edit Decks
                            </a>
                        </li>
                        <li>
                            <a href="#tournaments/tournaments.php" data-transition="fade" data-theme="" data-icon="">
                                Play
                            </a>
                        </li>
                        <li>
                            <a href="#shop/shop.php" data-transition="fade" data-theme="" data-icon="">
                                Button
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
	<div data-role="content">
            
                <div class="ui-grid-a">
                    <div class="ui-block-a" >
                        <a data-role="button" href="#tournaments/tournaments.php" class = "homenav">
                            Play Now!
                        </a>
                    </div>
                    <div class="ui-block-b" >
                        <a data-role="button" href="#decks/app.php" class = "homenav">
                            Edit Decks
                        </a>
                    </div>
                    <div class="ui-block-a" >
                        <a data-role="button" href="#shop/shop.php" class = "homenav">
                            Find Cards
                        </a>
                    </div>
                    <div class="ui-block-b" >
                        <a data-role="button" href="#" class = "homenav">
                            Show Collection (not implemented)
                        </a>
                    </div>
                    <div class="ui-block-a">
                        <div style="width: 100%; height: 100px; position: relative; background-color: #fbfbfb; border: 1px solid #b8b8b8;">
                            <img src="http://codiqa.com/static/images/v2/image.png" alt="image" style="position: absolute; top: 50%; left: 50%; margin-left: -16px; margin-top: -18px" />
                        </div>
                    </div>
                    <div class="ui-block-b">
                        <a href="#page1">
                            <div style="width: 100%; height: 100px; position: relative; background-color: #fbfbfb; border: 1px solid #b8b8b8;">
                                <img src="http://codiqa.com/static/images/v2/image.png" alt="image" style="position: absolute; top: 50%; left: 50%; margin-left: -16px; margin-top: -18px" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

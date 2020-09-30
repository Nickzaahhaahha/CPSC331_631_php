<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body {
        font-family: "Lato", sans-serif;       
    }
    .mySlides {display: none}
</style>
</head>
<body>
<section>
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">หน้าแรก</a>
    <a href="one.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PHPinfo</a>
    <a href="two.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Pyramid</a>
    <a href="three.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">iframe</a>
  </div>
</div>
</section>

<section>
<br>    
<pre style="font-family:TLWGTypewriter;font-size:20px;">
        <?php echo "<br/>";
            for ($nick=1; $nick <= 4; $nick++)
            {
             
                 for ($suriya=4; $suriya >= $nick; $suriya--)
                {
                    echo " ";
                }
                    echo $nick;
                 for ($suriya=2; $suriya <= $nick; $suriya++)
                {
                    echo "**";
                }
                    echo $nick;
            
            echo "\n";
            }
            
             for ($nick=2; $nick <= 4; $nick++)
            {
             
                 for ($suriya=1; $suriya <= $nick; $suriya++)
                {
                    echo " ";
                }
                    echo 5-$nick;
                 for ($suriya=3; $suriya >= $nick; $suriya--)
                {
                    echo "**";
                }
                    echo 5-$nick;
            
            echo "\n";
            }
        ?>
    </pre>
    
    </section>
    <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <a href="https://www.facebook.com/Nick.Godzilla?ref=bookmarks"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
  <a href="https://www.instagram.com/nickkybeginner/?hl=th"><i class="fa fa-instagram w3-hover-opacity"></i></a>
  <a href="https://www.youtube.com/channel/UC7RFNDhNZD4x_UvToRIRNmA"><i class="fa fa-youtube w3-hover-opacity"></i></a>
  <a href="https://twitter.com/55120Titan"><i class="fa fa-twitter w3-hover-opacity"></i></a>
</footer>
</body>
</html>
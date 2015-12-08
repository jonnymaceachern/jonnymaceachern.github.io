<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="stylesheets/styles.css">
</head>
<body>


  <div class="snow"></div>
  <div class="parallax">
    <div class="parallax__layer parallax__layer__0">
      <img src="7.png"/>
    </div>
    <div class="parallax__layer parallax__layer__1">
      <img src="6.png"/>
    </div>
    <div class="parallax__layer parallax__layer__2">
      <img src="5.png"/>
    </div>
    <div class="parallax__layer parallax__layer__3">
      <img src="4.png"/>
    </div>
    <div class="parallax__layer parallax__layer__4">
      <img src="3.png"/>
    </div>
    <div class="parallax__layer parallax__layer__5">
      <img src="2.png"/>
      <div class="snow"></div>
    </div>
    <div class="parallax__layer parallax__layer__6">
      <img src="1.png"/>
    </div>
    <div class="parallax__cover"></div>
  </div>
    

  <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="snowfall.js"></script>

  <script>
    $( function() {
      $('.snow').snowfall({image :"http://i.imgur.com/NiSdZ0f.png", minSize: 1, maxSize:5});
    });
  </script>

</body>
</html>
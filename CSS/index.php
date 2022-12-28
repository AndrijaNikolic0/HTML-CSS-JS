<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="slider3Zadatak.css">
    <!--<link rel="stylesheet" href="css.css">-->
    <title>Andrija's Slider</title>
</head>
<body>
    
    <section>

        <div class="container">
        <h1 class="header">Andrija's slider</h1>
        

            <div class="content">
                <div class="card">
                    <div class="card-content">
                        
                        <div class="media-icon">
                            <a href="https://en.wikipedia.org/wiki/Water_polo" class="fa-brands fa-wikipedia-w" ></a>
                            
                        </div>

                        <div class="image">
                            <img src="images/waterpolo.jpg" alt="">
                        </div>
                        
                        <div class="name-description">
                            <div class="name"><strong>Waterpolo</strong></div>
                            <div class="description">Water polo is a competitive team sport played in water between two teams of seven players each.</div>
                            
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        
                        <div class="media-icon">
                            <a href="https://en.wikipedia.org/wiki/Volleyball" class="fa-brands fa-wikipedia-w"></a>
                        </div>

                        <div class="image">
                            <img src="images/volleyball.jpg" alt="">
                        </div>
                        
                        <div class="name-description">
                            <div class="name"><strong>Volleyball</strong></div>
                            <div class="description">Volleyball is a team sport in which two teams of six players are separated by a net.</div>
                            
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        
                        <div class="media-icon">
                            <a href="https://en.wikipedia.org/wiki/Handball" class="fa-brands fa-wikipedia-w"></a>
                        </div>

                        <div class="image">
                            <img src="images/handball.jpg" alt="">
                        </div>
                        
                        <div class="name-description">
                            <div class="name"><strong>Handball</strong></div>
                            <div class="description">Handball  is a team sport in which two teams of seven players each pass a ball using their hands, with the goal of scoring the goal.</div>
                            
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        
                        <div class="media-icon">
                            <a href="https://en.wikipedia.org/wiki/Association_football" class="fa-brands fa-wikipedia-w"></a>
                        </div>

                        <div class="image">
                            <img src="images/football.jpg" alt="">
                        </div>
                        
                        <div class="name-description">
                            <div class="name"><strong>Football</strong></div>
                            <div class="description">Soccer is a team sport played between two teams of 11 players,who use their feet to propel the ball,aiming for the goal of the opponent.</div>
                            
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        
                        <div class="media-icon">
                            <a href="https://en.wikipedia.org/wiki/Tennis" class="fa-brands fa-wikipedia-w"></a>
                        </div>

                        <div class="image">
                            <img src="images/tennis.jpg" alt="">
                        </div>
                        
                        <div class="name-description">
                            <div class="name"><strong>Tennis</strong></div>
                            <div class="description">Tennis is a racket sport that is played either individually against a single opponent, or between two teams of two players each. The object of the game is to manoeuvre the ball in such a way that the opponent is not able to play a valid return.</div>
                            
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        
                        <div class="media-icon">
                            <a href="https://en.wikipedia.org/wiki/Basketball" class="fa-brands fa-wikipedia-w"></a>
                        </div>

                        <div class="image">
                            <img src="images/basketball.jpg" alt="">
                        </div>
                        
                        <div class="name-description">
                            <div class="name"><strong>Basketball</strong></div>
                            <div class="description">Basketball is a team sport in which two teams, of five players each, opposing one another on a rectangular court, compete with the primary objective of shooting a basketball through the defender's hoop</div>
                            
                        </div>
                    </div>
                </div>               
                
            </div>
        </div>
    </section>
    

    <script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript">
       
        $('.content').slick({
  dots: true,
  infinite: false,
  speed: 1000,
  autoplay: true,
  autoplay_speed: 1000,
  arrows:true,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
    </script>
</body>
</html>
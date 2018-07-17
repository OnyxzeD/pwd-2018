<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../assets/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../../assets/css/style.css" type="text/css">
  <link rel="stylesheet" href="../../assets/css/theme.css" type="text/css"> 
  </head>

<body>
  <?php include 'menu.php';?>
  <div class="py-6">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item">
                <img class="d-block img-fluid-slide w-100" src="img/sd1.jpg">
                <div class="carousel-caption">
                  <h3>First slide label</h3>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item active">
                <img class="d-block img-fluid-slide w-100" src="img/sd2.jpg">
                <div class="carousel-caption">
                  <h3>Second slide label</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row" style="padding-bottom:15px;">
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="img/1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="img/2.jpg" alt="Card image cap" height="275px">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="img/3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="padding-bottom:15px;">
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="img/4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="img/5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="img/6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <a class="btn btn-primary w-100 p-2 btn-lg btn-block" href="#">View More....</a>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img class="d-block img-fluid my-3" src="https://maps.googleapis.com/maps/api/staticmap?key=AIzaSyDW8nO9JhT_pEjebobq9pgUF2cEp0EUb1I&amp;markers=Alexander+platz&amp;center=Berlin&amp;zoom=13&amp;size=640x500&amp;sensor=false"> </div>
        <div class="col-md-6">
          <h1>Contact us</h1>
          <p>We would love to hear from you</p>
          <form>
            <div class="form-group">
              <label for="InputName">Your name</label>
              <input type="text" class="form-control" id="InputName" placeholder="Your name"> </div>
            <div class="form-group">
              <label for="InputEmail1">Email address</label>
              <input type="email" class="form-control" id="InputEmail1" placeholder="Enter email"> </div>
            <div class="form-group">
              <label for="Textarea">Write here</label>
              <textarea class="form-control" id="Textarea" rows="3" placeholder="Type here"></textarea>
            </div>
            <button type="submit" class="btn btn-secondary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
 <script src="../../assets/js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="../../assets/css/js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="../../assets/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
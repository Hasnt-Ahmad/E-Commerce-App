<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link href="/css/welcome.css" rel="stylesheet">
        <!-- Styles -->
        
    </head>
    <body class="antialiased">

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Shop</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-grow-1">
                    <li class="nav-item">
                      <a href="/cart" <i class="bi bi-cart-check-fill" id="myBtn1" onclick="modal()"></i></a><span>0</span>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <i class="bi bi-person-fill person-icon"></i>
                             <div class="dropdown-content">
                              @if(session('userName') != "")
                                  <p style="padding: 20px">{{session('userName')}}</p>
                                  <a href="/logout">Logout</a>
                                @else
                                  <a href="/login">Login</a>
                                  <a href="#">Register</a>
                              @endif
                             </div>
                         </div>
                    </li>
                </ul>
              </div>
            </div>
          </nav>

          
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active" data-bs-interval="100">
                            <img src="/images/Iphone.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item" data-bs-interval="1200">
                            <img src="/images/Watches.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item" data-bs-interval="1200">
                            <img src="/images/pic1.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item" data-bs-interval="1200">
                            <img src="/images/Shoes.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                    

          </div>
          <div class="container">
            @foreach ($data as $category)
                <div class="row">
                    <div class="col-12">
                        <br><br><br>
                        <h2 class='Product-heading'>{{ $category['category_name'] }}</h2>
                        <br/><br/><br/>
                    </div>
                </div>
                <div class="row">
                    @csrf
                    @foreach ($category['products'] as $product)
                        <div class="col-md-4">
                            <div class="img-div">
                                <img class='product-img' src="/images/{{$product['picture']}}" />
                                    <br/><br/>
                            </div>
                            
                        <div class="row">
                            <div class="col-6">
                                <p class="product-name">{{ $product['product_name'] }}</p>
                            </div>
                            <div class="col-6">
                                <p class="product-price">{{ $product['price'] }}</p>
                            </div>
                        </div>
                        <br>
                        <a class="add-to-cart-btn" href="/add-to-cart/{{$product['product_id']}}" >Add To Cart</a>
                        <br><br><br><br>
                        </div>
                    @endforeach
                 
                
            </div>
            @endforeach
          </div>

           

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script>

          function modal(){
            console.log("Clicked");
            var modal = document.getElementById("myModal1");

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
            btn.onclick = function() {
            modal.style.display = "block";
          }

// When the user clicks on <span> (x), close the modal
          span.onclick = function() {
          modal.style.display = "none";
          }

// When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = "none";
        }
      }

          }
          // Get the modal
  
        </script>
      </body>
</html>

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
                      <a href="/cart" <i class="bi bi-cart-check-fill" id="myBtn1"></i></a>
                      <span style="position:absolute;color:blue;font-weight:bold;font-size:20px;">
                        @if(session("user_id"))
                          {{$product_count}}
                        @endif
                      </span>
                      <span style="margin-left: 10px">cart</span>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <i class="bi bi-person-fill person-icon"></i>
                             <div class="dropdown-content">
                              @if(session('userName') != "")
                                  <p style="padding-left:20px;height:10px">{{session('userName')}}</p>
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
                    <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active" data-bs-interval="1200">
                            <img src="/images/Iphone.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item" data-bs-interval="1400">
                            <img src="/images/Watches.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item" data-bs-interval="1400">
                            <img src="/images/pic1.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item" data-bs-interval="1400">
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
                  @foreach ($category['products'] as $product)
                      <div class="col-md-4">
                        <button style="border:none;background-color:  rgb(242, 242, 242)" type="button" class="product-btn" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-product="{{ json_encode($product) }}">
                          <div class="img-div">
                              <img class='product-img' src="/images/{{$product['picture']}}" />
                              <br/><br/>
                          </div>
                          <div class="row">
                              <div class="col-8">
                                  <p class="product-name">{{ $product['product_name'] }}</p>
                              </div>
                              <div class="col-4">
                                  <p class="product-price">${{ $product['price'] }}</p>
                              </div>
                              <div class="col-6">
                              <span style="" ><i style="font-size:13px;color:yellow;" class="bi bi-star-fill"></i></span>
                              <span ><i style="font-size:13px;color:yellow;" class="bi bi-star-fill"></i></span>
                              <span><i style="font-size:13px;color:yellow;" class="bi bi-star-fill"></i></span>
                              <span><i style="font-size:13px;color:yellow;" class="bi bi-star-fill"></i></span>
                              <span><i style="font-size:13px;" class="bi bi-star"></i></span>
                              </div>
                          </div>
                          
                          <br>
                          
                        </button>
                        <br>
                        <a class="add-to-cart-btn" href="/add-to-cart/{{$product['product_id']}}" >Add To Cart</a>
                          <br><br><br><br> 
                      </div>
                  @endforeach
              </div>
            @endforeach
          </div>
 
            
           
          <br><br>
          <footer>
            <div class="container">
              <div class="row">
                <div class="col-md-3">
                  <h4>Customer Care</h4>
                    <p style="width: 120px">
                    Help Center
                    How to Buy
                    Corporate & Bulk Purchasing
                    Returns & Refunds
                    Daraz Shop
                    Contact Us
                    Purchase Protection
                    Daraz Pick up Points
                    </p>
                </div>
                <div class="col-md-3">
                  <h4 style="padding-top: 30px;">Shop</h4>
                    <p style="width: 120px">
                      About Us
                      Digital Payments
                      Daraz Donates
                      Daraz Blog
                      Terms & Conditions
                      Privacy Policy
                      NTN Number : 4012118-6
                      STRN Number : 1700401211818
                      Online Shopping App
                      Online Grocery Shopping
                      Daraz Exclusive
                    </p>
                </div>
                <div class="col-md-6">
                  <h4 >Follow Us</h4>
                    <div class="row">
                      <div class="col-2">
                        <i class="bi bi-facebook"></i>
                      </div>
                      <div class="col-2">
                        <i class="bi bi-instagram"></i>
                      </div>
                      <div class="col-2">
                        <i class="bi bi-twitter"></i>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </footer>

        
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> 
                    @if(session("order"))
                      Order Details
                      @else 
                        Product Details
                    @endif
                  </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  @if(session("order"))
                    Ordered Successfully
                    @else 
                      Add to Cart Successfully
                  @endif
                </div>
                <div class="modal-footer">
                 
                </div>
              </div>
            </div>
          </div>

          <button type="button" class="btn btn-primary" data-bs-toggle="modal" id="btn" data-bs-target="#exampleModal">
            Launch demo modal
          </button>
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">
                    Product details
                  </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Added Product
                </div>
                
              </div>
            </div>
          </div>
   
          @if(session("productAdded"))
            @php
                echo('<script>

                    document.addEventListener("DOMContentLoaded", function() {
                        // Get the button element
                        var btn = document.getElementById("btn");
                        // Check if the button element exists
                        if (btn) {
                          // Programmatically trigger a click event on the button
                          btn.click();
                        }
                      });
                      
        
                </script>');
            @endphp
            {{session()->forget("productAdded")}}
          @endif  

          @if(session("order"))
            @php
                echo('<script>

                    document.addEventListener("DOMContentLoaded", function() {
                        // Get the button element
                        var btn = document.getElementById("btn");
                        // Check if the button element exists
                        if (btn) {
                          // Programmatically trigger a click event on the button
                          btn.click();
                        }
                      });
                </script>');
            @endphp
              {{session()->forget("order")}}
          @endif  

          

         

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script>
    // Wait for the document to be ready
    document.addEventListener("DOMContentLoaded", function () {
        // Get the modal element
        var modal = new bootstrap.Modal(document.getElementById("exampleModal1"));

        // Attach click event listener to product buttons
        var productButtons = document.querySelectorAll(".product-btn");
        productButtons.forEach(function (button) {
            button.addEventListener("click", function () {
                // Get product data from data attribute
                var productData = JSON.parse(button.getAttribute("data-product"));

                // Update the modal content with product details
                var modalBody = document.querySelector("#exampleModal1 .modal-body");
                modalBody.innerHTML = `
                    <br><br>
                    <div class="container">
                      <div class="row">
                        <div class="col-6">
                          <img style="width:300px;height:350px" src="/images/${productData.picture}" class="product-img">
                        </div>
                        <div class="col-5">
                          <h3 style="font-weight:bold">${productData.product_name}</h3>
                          <p style="font-size:13px;padding-left:10px;color:grey">${productData.description}</p>
                          <span style="padding-left:10px" ><i style="font-size:13px;color:yellow;" class="bi bi-star-fill"></i></span>
                          <span ><i style="font-size:13px;color:yellow;" class="bi bi-star-fill"></i></span>
                          <span><i style="font-size:13px;color:yellow;" class="bi bi-star-fill"></i></span>
                          <span><i style="font-size:13px;color:yellow;" class="bi bi-star-fill"></i></span>
                          <span><i style="font-size:13px;" class="bi bi-star"></i></span>
                          <br><br><br>
                          <p style="padding-left:10px;font-weight:600" >Price: $${productData.price}</p>
                        </div>
                      </div>
                      <br><br>
                    </div>
                    <!-- Add more product details as needed -->
                `;

                // Show the modal
                modal.show();
            });
        });
    });
</script>







      </body>
</html>

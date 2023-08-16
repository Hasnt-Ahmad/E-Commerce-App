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
        <link href="/css/cart.css" rel="stylesheet">
        <!-- Styles -->
        
    </head>
    <body class="antialiased">

        <nav style="background-color: white !important;" class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">Shop</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-grow-1">
                    <li class="nav-item">
                        <i class="bi bi-cart-check-fill" id="myBtn1" onclick="modal()"></i>
                        <span style="position:absolute;color:blue;font-weight:bold;font-size:20px;">
                            @if(session("user_id"))
                              {{session("product_count")}}
                            @endif
                          </span>
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
          <br><br>
          <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cart-design">
                @foreach($order as $or)
                    @foreach($order_items as $item)
                        <div class="row" style="border: 1px solid rgb(230, 230, 230);padding:20px;border-radius:20px">
                            <div class="col-2">
                                <img src="/images/{{$item->picture}}" style="width: 100px;height:100px; border:2px solid rgb(239, 239, 239); border-radius:10px">
                            </div>
                            <div class="col-4">
                                <p style="height:20px;font-size:20px;font-weight:700">{{$item->product_name}}</p>
                                <span style="color: grey;font-size:14px;">{{$item->description}}</span>
                            </div>
                            <div class="col-4">
                                <p style="color: grey,font-size:14px;margin-top:10px;">$ {{$item->price}}</p>
                            </div>
                        </div>
                        <br><br>
                    @endforeach
                @endforeach
                        <br>
                        <hr style="color: rgb(164, 164, 164)">
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <p style="color: grey">Subtotal</p>
                            </div>
                            <div class="col-6">
                                <span style="font-size:20px">$ {{ $or->total_amount }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p style="color: grey">Shipping</p>
                            </div>
                            <div class="col-6">
                                <span style="font-size:20px">$100</span>
                            </div>
                        </div>
                        <br>
                        <hr style="color:  rgb(164, 164, 164)">
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <p >Total</p>
                            </div>
                            <div class="col-6">
                                <span style="font-size:22px;font-weight:600">$ {{ $or->total_amount + 100 }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                @if (session("userName")!=null )
                                    <a class="btn-order" href="/order">Place Order</a>
                                
                                @else
                                    <a class="btn-order" href="/login">Place Order</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
           

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
      </body>
</html>

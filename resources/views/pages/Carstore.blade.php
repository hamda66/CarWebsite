<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::to('src/css/app.css') }}">

    @yield('styles')
</head>   
<body>
<div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="/imgs/White-lambo.jpg" alt="..." class="img-responsive">
                <div class="caption">
                    <h3>Lambo</h3>
                    <p class="description">Color:white Type:Petrol</p>
                    <div class="clearfix">
                        <div class="pull-left price">$120,000</div>
                        <a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="/imgs/download.jpeg" alt="..." class="img-responsive">
                <div class="caption">
                    <h3>Fait 500</h3>
                    <p class="description">Color:white Type:Petrol</p>
                    <div class="clearfix">
                        <div class="pull-left price">$16,000</div>
                        <a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="/imgs/car.jpeg" alt="..." class="img-responsive">
                <div class="caption">
                    <h3>BMW</h3>
                    <p class="description">Color:Orange Type:Diesel</p>
                    <div class="clearfix">
                        <div class="pull-left price">$125,000</div>
                        <a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="/imgs/White-Ferrari.jpg" alt="..." class="img-responsive">
                <div class="caption">
                    <h3>Ferrari</h3>
                    <p class="description">Color: white Tpye:Petrol</p>
                    <div class="clearfix">
                        <div class="pull-left price">$130,000</div>
                        <a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="/imgs/White-lambo.jpg" alt="..." class="img-responsive">
                <div class="caption">
                    <h3>Lambo</h3>
                    <p class="description">This is a lambo. its super fast!</p>
                    <div class="clearfix">
                        <div class="pull-left price">$120,000</div>
                        <a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="/imgs/White-lambo.jpg" alt="..." class="img-responsive">
                <div class="caption">
                    <h3>Lambo</h3>
                    <p class="description">This is a lambo. its super fast!</p>
                    <div class="clearfix">
                        <div class="pull-left price">$120,000</div>
                        <a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>

</div>
</body>
    </html>
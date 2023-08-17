@extends('layouts.app')

@section('content')
    <!-- News jumbotron -->
    <div class="container">
        <div class="d-flex align-items-center">
            <div class="jumbotron text-center p-8 bg-light">

                <!-- Grid row -->
                <div class="row">
                    <div class="col-md-4 offset-md-1 mx-1 my-3">

                        <!-- Featured image -->
                        <div class="view overlay">
                            <img src="images\shop.jpg" class="img-fluid" alt="Shop image">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                    </div>

                    <div class="d-flex align-items-center col-md-7 text-md-left ml-1 mt-3">

                        <div>
                            <h3 class="mb-4"><strong>Welcome to the shop!</strong></h3>

                            <p class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium
                                doloremque, totam
                                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>

                            <a class="btn btn-primary btn-lg w-10" href="">Shop!</a>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

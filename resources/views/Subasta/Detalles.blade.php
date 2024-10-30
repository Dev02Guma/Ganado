@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Product detail page start -->
        <div class="card product-detail-page">
            <div class="card-block">
                <div class="row">
                    <div class="col-lg-5 col-xs-12">
                        <div class="port_details_all_img row">
                            <div class="col-lg-12 m-b-15">
                                <div id="big_banner">
                                    <div class="port_big_img">
                                        <img class="img img-fluid" src="..\files\assets\images\product-detail\pro-d-l-1.jpg" alt="Big_ Details">
                                    </div>
                                    <div class="port_big_img">
                                        <img class="img img-fluid" src="..\files\assets\images\product-detail\pro-d-l-2.jpg" alt="Big_ Details">
                                    </div>
                                    <div class="port_big_img">
                                        <img class="img img-fluid" src="..\files\assets\images\product-detail\pro-d-l-3.jpg" alt="Big_ Details">
                                    </div>
                                    <div class="port_big_img">
                                        <img class="img img-fluid" src="..\files\assets\images\product-detail\pro-d-l-4.jpg" alt="Big_ Details">
                                    </div>
                                    <div class="port_big_img">
                                        <img class="img img-fluid" src="..\files\assets\images\product-detail\pro-d-l-5.jpg" alt="Big_ Details">
                                    </div>
                                    <div class="port_big_img">
                                        <img class="img img-fluid" src="..\files\assets\images\product-detail\pro-d-l-6.jpg" alt="Big_ Details">
                                    </div>
                                    <div class="port_big_img">
                                        <img class="img img-fluid" src="..\files\assets\images\product-detail\pro-d-l-7.jpg" alt="Big_ Details">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 product-right">
                                <div id="small_banner">
                                    <div>
                                        <img class="img img-fluid" src="..\files\assets\images\product-detail\pro-d-s-1.jpg" alt="small-details">
                                    </div>
                                    <div>
                                        <img class="img img-fluid" src="..\files\assets\images\product-detail\pro-d-s-2.jpg" alt="small-details">
                                    </div>
                                    <div>
                                        <img class="img img-fluid" src="..\files\assets\images\product-detail\pro-d-s-3.jpg" alt="small-details">
                                    </div>
                                    <div>
                                        <img class="img img-fluid" src="..\files\assets\images\product-detail\pro-d-s-4.jpg" alt="small-details">
                                    </div>
                                    <div>
                                        <img class="img img-fluid" src="..\files\assets\images\product-detail\pro-d-s-5.jpg" alt="small-details">
                                    </div>
                                    <div>
                                        <img class="img img-fluid" src="..\files\assets\images\product-detail\pro-d-s-6.jpg" alt="small-details">
                                    </div>
                                    <div>
                                        <img class="img img-fluid" src="..\files\assets\images\product-detail\pro-d-s-7.jpg" alt="small-details">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xs-12 product-detail" id="product-detail">
                        <div class="row">
                            <div>
                                <div class="col-lg-12">
                                    <span class="txt-muted d-inline-block">Product Code: <a href="#!"> PRDT1234 </a> </span>
                                    <span class="f-right">Availablity : <a href="#!"> In Stock </a> </span>
                                </div>
                                <div class="col-lg-12">
                                    <h4 class="pro-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
                                </div>
                                <div class="col-lg-12">
                                    <span class="txt-muted"> Brand : Denim </span>
                                </div>
                                <div class="stars stars-example-css m-t-15 detail-stars col-lg-12">
                                    <select id="product-view" class="rating-star" name="rating" autocomplete="off">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <span class="text-success product-price"><i class="icofont icofont-cur-dollar"></i>80.00</span> 
                                    <hr>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                                    </p>
                                    <hr>
                                    <h6 class="f-16 f-w-600 m-t-10 m-b-10">Monto</h6>
                                </div>
                                <div class="col-xl-3 col-sm-12">
                                    <div class="p-l-0 m-b-25">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number shadow-none btn-sm" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                    <span class="icofont icofont-minus m-0"></span>
                                                </button>
                                            </span>
                                            <input type="text" name="quant[1]" class="form-control input-number text-center" value="1">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number shadow-none btn-sm" data-type="plus" data-field="quant[1]">
                                                    <span class="icofont icofont-plus m-0"></span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12 mob-product-btn">
                                    <button type="button" class="btn btn-success waves-effect waves-light m-r-20">
                                        <i class="icofont icofont-cur-dollar f-16"></i><span class="m-l-10">LOREM</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-primary waves-effect waves-light m-r-20" data-toggle="tooltip" title="Add to wishlist">
                                        <i class="icofont icofont-heart-alt f-16 m-0"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-primary waves-effect waves-light" data-toggle="tooltip" title="Quick view">
                                        <i class="icofont icofont-eye-alt f-16 m-0"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product detail page end -->
    </div>
</div>
<!-- Nav tabs start-->
<div class="card product-detail-page">
    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
        <li class="nav-item">
            <a class="nav-link active f-18 p-b-0" data-toggle="tab" href="#description" role="tab">Info</a>
            <div class="slide"></div>
        </li>
        <li class="nav-item m-b-0">
            <a class="nav-link f-18 p-b-0" data-toggle="tab" href="#review" role="tab">Info</a>
            <div class="slide"></div>
        </li>
        <li class="nav-item m-b-0">
            <a class="nav-link f-18 p-b-0" data-toggle="tab" href="#sizeguide" role="tab">Info</a>
            <div class="slide"></div>
        </li>
        <li class="nav-item m-b-0">
            <a class="nav-link f-18 p-b-0" data-toggle="tab" href="#about" role="tab">Info</a>
            <div class="slide"></div>
        </li>
    </ul>
</div>
<!-- Nav tabs start-->

<!-- Nav tabs card start-->
<div class="card">
    <div class="card-block">
        <!-- Tab panes -->
        <div class="tab-content bg-white">
            <div class="tab-pane active" id="description" role="tabpanel">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="col-lg-2">Fabric</td>
                            <td class="col-lg-10">Midi</td>
                        </tr>
                        <tr>
                            <td class="col-lg-2">Color</td>
                            <td class="col-lg-10">Polyester</td>
                        </tr>
                        <tr>
                            <td class="col-lg-2">Sleevs</td>
                            <td class="col-lg-10">Multi</td>
                        </tr>
                        <tr>
                            <td class="col-lg-2">Style</td>
                            <td class="col-lg-10">Coloured</td>
                        </tr>
                        <tr>
                            <td class="col-lg-2">Neck</td>
                            <td class="col-lg-10">Full</td>
                        </tr>
                        <tr>
                            <td class="col-lg-2">Wash</td>
                            <td class="col-lg-10">Sleevs</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="review" role="tabpanel">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
            </div>
            <div class="tab-pane" id="sizeguide" role="tabpanel">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
            </div>
            <div class="tab-pane" id="about" role="tabpanel">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
            </div>
        </div>
    </div>
</div>
<!-- Nav tabs card end-->
@endsection

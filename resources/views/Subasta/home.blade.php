@extends('layouts.lyt_subasta')
@section('content')
<div class="row">
    @for($i = 0; $i < 7; $i++)
    <div class="col-xl-4 col-md-6 col-sm-6 col-xs-12">
        <div class="card prod-view">
            <div class="prod-item text-center">
                <div class="prod-img">
                    
                    <a href="subasta-detalles" class="hvr-shrink">
                        <img src="{{ asset('assets/images/lote.jpg')}}" class="img-fluid o-hidden" alt="prod1.jpg">
                    </a>
                    <div class="p-new"><a href=""> New </a></div>
                </div>
                <div class="prod-info">
                    <a href="#!" class="txt-muted"><h4>Lote 01</h4></a>
                    <div class="m-b-10">
                        <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">Lorem ipsum dolor sit amet&amp;  LOrem</a>
                    </div>
                    <div class="row justify-content-center m-t-10 b-t-default m-l-0 m-r-0">
                        <div class="col m-t-15 b-r-default">
                            <h6 class="text-muted">Highest Bid</h6>
                            <span class="prod-price"><i class="icofont icofont-cur-dollar"></i>1,250 </span>
                        </div>
                        <div class="col m-t-15 m-b-15">
                            <h6 class="text-muted">Time Left</h6>
                            <span class="prod-price"><i class="icofont icofont-clock-time"></i> 3 days </span>
                        </div>
                    </div>
                    <a href="subasta-detalles" class="btn btn-success btn-block p-t-15 p-b-15">Lorem</a>
                    
                </div>
            </div>
        </div>
    </div>
    @endfor
</div>
@endsection

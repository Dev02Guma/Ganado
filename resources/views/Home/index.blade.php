@extends('layouts.app')
@section('content')

<div class="row" >
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-blue f-w-600">0.00</h4>
                        <h6 class="text-muted m-b-0">Numero de Bovinos activos</h6>
                    </div>
                    <div class="col-4 text-right">
                        <img src="{{ asset('assets/images/cow.svg')}}" with="48" height="48">
                    </div>
                </div>
            </div>
            <div class="card-footer bg-success">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">Bovinos</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="feather icon-plus text-white f-16"></i>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-blue f-w-600">0</h4>
                        <h6 class="text-muted m-b-0">Numero de lotes activos </h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="feather icon-file-text f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-success">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">Lotes</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="feather icon-plus text-white f-16"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-pink f-w-600">145</h4>
                        <h6 class="text-muted m-b-0">Tareas por Completar</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="feather icon-calendar f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-success">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">% change</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="feather icon-trending-up text-white f-16"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-blue f-w-600">0.00</h4>
                        <h6 class="text-muted m-b-0">Indicadores</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="feather icon-credit-card f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-success">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">% change</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="feather icon-trending-up text-white f-16"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</hr>
<div class="row">
    @for ($i = 0; $i < 4; $i++)
    <div class="col-xl-3 col-md-6" style="display: none">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-blue f-w-600">L00{{$i +1 }}</h4>
                        <h6 class="text-muted m-b-0">Indicadores</h6>
                    </div>
                    <div class="col-4 text-right">
                        <img src="{{ asset('assets/images/cow.svg')}}">
                    </div>
                </div>
            </div>
            <div class="card-footer bg-success">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">Creado 10/10/2024</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="feather icon-clock text-white f-14 m-r-10"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 col-sm-6 col-xs-12">
        <div class="card prod-view">
            <div class="prod-item text-center">
                <div class="prod-img">
                    <div class="option-hover">
                        
                        <button type="button" class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                            <i class="icofont icofont-eye-alt f-20"></i>
                        </button>
                      
                    </div>
                    <a href="BovinosDetalles" class="hvr-shrink">
                        <img src="{{ asset('assets/images/lote.jpg')}}" class="img-fluid o-hidden" alt="prod1.jpg">
                    </a>
                </div>
                <div class="prod-info">
                    <a href="#!" class="txt-muted"><h4>L00{{$i +1 }}</h4></a>
                    <div class="m-b-10">
                    <i class="feather icon-clock text-black f-14 m-r-10"></i></label><a class="text-muted f-w-600"> Creado 10/10/2024 </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endfor    
</div>
@endsection

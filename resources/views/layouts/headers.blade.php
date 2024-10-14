
<div class="row align-items-end">
    <div class="col-lg-8">
        <div class="page-header-title">
            <div class="d-inline">            
                <h4>{{ $Headers['Header'] }}</h4>
                <span>{{ $Headers['subHeader'] }}</span>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="page-header-breadcrumb">
            <ul class="breadcrumb-title">
                <li class="breadcrumb-item">
                    <a href="home"> <i class="feather icon-home"></i> </a>
                </li>
                @foreach ($Headers['Path'] as $key => $Path)
                    <li class="breadcrumb-item"><a href="#!">{{ $Path }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
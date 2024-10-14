
@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12">                                                <!-- Product list card start -->
        <div class="card">
            <div class="card-header">
                <div class="input-group input-group-button input-group-primary">
                    <input type="text" class="form-control" placeholder="Buscar...">
                    <button class="btn btn-primary input-group-addon" id="basic-addon1">Buscar</button>
                </div>
            </div>
            <div class="card-block">
                <div class="table-responsive">
                    <div class="table-content">
                        <div class="project-table">
                            <table id="e-product-list" class="table table-striped dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Bovino</th>
                                        <th>Info</th>
                                        <th>Info</th>
                                        <th>Info</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @for ($i = 0; $i < 40; $i++)
                                    <tr>
                                        <td class="pro-list-img">
                                            <img src="{{ asset('assets/images/cow.svg')}}" class="img-fluid" alt="tbl" height="100px" width="100px">
                                        </td>
                                        <td class="pro-name">
                                            <h6>B00{{$i +1 }}</h6>
                                            <span>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</span>
                                        </td>
                                        <td>$456</td>
                                        <td>
                                            <label class="text-danger">Out Of Stock</label>
                                        </td>
                                        <td class="action-icon">
                                            <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                            <a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                        </td>
                                    </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
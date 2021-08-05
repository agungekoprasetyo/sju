@extends('layouts.backend')

@section('custom-css')
<style>
    .btn-action{
        position: absolute;
        bottom: 1.5rem;
        right: 1.5rem;
    }
</style>
@endsection

@section('title-page')
    Template QR
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-title">
                Static Template
            </div>
            <hr>
        </div>
        <div class="col-md-3">
            <div class="card card-body">
                <img src="{{ url('assets/images/templateqr/1.png') }}" alt="">
                <div class="btn-action text-center">
                    <a target="_blank" href="{{ url('admin/qr/generateqr') }}" class="btn btn-sm btn-success mt-2"><i class="fa fa-download"></i> Download</a>
                </div>
            </div>
            
        </div>
        <div class="col-md-3">
            <div class="card card-body">
                <img src="https://via.placeholder.com/252x356.png?text=Coming+Soon" alt="">
                <div class="btn-action text-center">
                    {{-- <a href="#" class="btn btn-sm btn-success mt-2"><i class="fa fa-download"></i> Download</a> --}}
                </div>
            </div>
            
        </div>
        <div class="col-md-3">
            <div class="card card-body">
                <img src="https://via.placeholder.com/252x356.png?text=Coming+Soon" alt="">
                <div class="btn-action text-center">
                    {{-- <a href="#" class="btn btn-sm btn-success mt-2"><i class="fa fa-download"></i> Download</a> --}}
                </div>
            </div>
            
        </div>
        <div class="col-md-3">
            <div class="card card-body">
                <img src="https://via.placeholder.com/252x356.png?text=Coming+Soon" alt="">
                <div class="btn-action text-center">
                    {{-- <a href="#" class="btn btn-sm btn-success mt-2"><i class="fa fa-download"></i> Download</a> --}}
                </div>
            </div>
            
        </div>
        
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card-title">
                <div class="d-flex align-items-center justify-content-between">
                    <div>Custom Template</div>
                    <div>
                        <a href="#" class="btn btn-primary">Create</a>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')

@endsection

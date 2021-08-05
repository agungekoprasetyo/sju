@extends('layouts.backend')

@section('custom-css')

@endsection

@section('title-page')
    Warning
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="bg-soft-danger">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="text-primary p-3">
                                <h5 class="text-primary">Oppsss...!</h5>
                                <p>Anda belum memiliki atau memilih merchant untuk dikelola.</p>
                                <a href="{{ url('admin/merchants') }}" class="btn btn-success">Kelola Merchant</a>
                            </div>
                        </div>
                        <div class="col-md-5 align-self-end text-right">
                            <img src="/assets/images/profile-img.png" width="200px" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
@endsection

@section('custom-js')

@endsection

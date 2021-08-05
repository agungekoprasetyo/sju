@extends('layouts/frontend')

@section('custom-css')
    <style>
        section.slider {
            min-height: 100vh;
            background-image: url("{{ asset('/assets/images/frontend/jb1.png') }}");
            background-size: cover;
        }

    </style>
@endsection

@section('content')
    <section class="slider">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    tes
                </div>
            </div>
        </div>
    </section>

    <section class="kategori p-5">
        <!--  page title -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h2 class="mb-0">Kategori</h2>

                        <div class="page-title-right">
                            <button class="btn btn-primary waves-effect waves-light">See All Categories</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <button type="button" class="btn btn-lg h-100 w-100 btn-outline-primary waves-effect waves-light">Psychology</button>
                </div>
                <div class="col-md-6 col-xl-3">
                    <button type="button" class="btn btn-lg h-100 w-100 btn-outline-primary waves-effect waves-light">Office Productivity</button>
                </div>
                <div class="col-md-6 col-xl-3">
                    <button type="button" class="btn btn-lg h-100 w-100 btn-outline-primary waves-effect waves-light">Design</button>
                </div>
                <div class="col-md-6 col-xl-3">
                    <button type="button" class="btn btn-lg h-100 w-100 btn-outline-primary waves-effect waves-light">Health & Fitness</button>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6 col-xl-3">
                    <button type="button" class="btn btn-lg h-100 w-100 btn-outline-primary waves-effect waves-light">Psychology</button>
                </div>
                <div class="col-md-6 col-xl-3">
                    <button type="button" class="btn btn-lg h-100 w-100 btn-outline-primary waves-effect waves-light">Office Productivity</button>
                </div>
                <div class="col-md-6 col-xl-3">
                    <button type="button" class="btn btn-lg h-100 w-100 btn-outline-primary waves-effect waves-light">Design</button>
                </div>
                <div class="col-md-6 col-xl-3">
                    <button type="button" class="btn btn-lg h-100 w-100 btn-outline-primary waves-effect waves-light">Health & Fitness</button>
                </div>
            </div>
        </div>
        <!-- end page title -->
    </section>

    <section class="best-seller p-5 bg-light">
        <!--  page title -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h2 class="mb-0">Best Course</h2>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card h-100">
                        <img class="card-img-top img-fluid" src="/assets/images/small/img-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title mt-0">Introduction To Website With HTML</h4>
                            <p class="card-text">Jane Morgan.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card h-100">
                        <img class="card-img-top img-fluid" src="/assets/images/small/img-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title mt-0">Quality Management</h4>
                            <p class="card-text">Jane Morgan.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card h-100">
                        <img class="card-img-top img-fluid" src="/assets/images/small/img-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title mt-0">Distance Learning MBA Management</h4>
                            <p class="card-text">Jane Morgan.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card h-100">
                        <img class="card-img-top img-fluid" src="/assets/images/small/img-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title mt-0">Product Manager 101 : How to</h4>
                            <p class="card-text">Jane Morgan.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
    </section>

    <section class="best-seller p-5">
        <!--  page title -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h2 class="mb-0">Upcoming Event</h2>

                        <div class="page-title-right">
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card bg-none">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-4">
                                <img class="card-img img-fluid" src="/assets/images/small/img-2.jpg" alt="Card image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Pendaftaran Calon Asesi</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                    <p class="card-text"><small class="text-muted">12 Oktober 2020</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card bg-none">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-4">
                                <img class="card-img img-fluid" src="/assets/images/small/img-2.jpg" alt="Card image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Ujian Sertifikasi Profesi Batch 1</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                    <p class="card-text"><small class="text-muted">24 Oktober 2020</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card bg-none">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-4">
                                <img class="card-img img-fluid" src="/assets/images/small/img-2.jpg" alt="Card image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Pendaftaran Calon Asesi</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                    <p class="card-text"><small class="text-muted">12 Oktober 2020</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card bg-none">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-4">
                                <img class="card-img img-fluid" src="/assets/images/small/img-2.jpg" alt="Card image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Ujian Sertifikasi Profesi Batch 1</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                    <p class="card-text"><small class="text-muted">24 Oktober 2020</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
    </section>
@endsection

@section('custom-js')

@endsection

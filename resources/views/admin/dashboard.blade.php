@extends('layouts.backend')

@section('custom-css')

@endsection

@section('title-page')
    Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="bg-soft-warning">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="text-primary p-3">
                                <h5 class="text-primary">Daftarkan Merchant Premium Sekarang Juga!</h5>
                                <p>Nikmati beragam fitur yang dapat membantu anda dalam menjalankan dan mengembangkan usaha
                                    anda dengan menggunakan fitur merchant premium</p>
                                <a href="#" class="btn btn-success">Pelajari Selengkapnya</a>
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
    <div class="row">
        <div class="col-xl-4">
            <div class="card overflow-hidden">
                <div class="bg-soft-primary">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-3">
                                <h5 class="text-primary">Welcome Back !</h5>
                                <p>Dashboard</p>
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="avatar-md profile-user-wid mb-4">
                                <img src="{{ asset('/assets/images/users/avatar-7.jpg') }}"
                                    alt="{{ Auth::user()->name }}" class="img-thumbnail rounded-circle">
                            </div>
                            <h5 class="font-size-15 text-truncate">{{ Auth::user()->name }}</h5>
                            <p class="text-muted mb-0 text-truncate">{{ Auth::user()->email }}</p>
                        </div>

                        <div class="col-sm-7">
                            <div class="pt-4">

                                <div class="row">
                                    <div class="col-12">
                                        <a class="font-size-12">Memiliki :</a><br>
                                        <a class="font-size-12">{{ $merchants->count() }}
                                            {{ \Illuminate\Support\Str::plural('Merchant', $merchants->count()) }} Terdaftar</a>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <a class="font-size-12">Merchant aktif untuk dikelola:</a><br>
                                        <a class="font-size-12">{!! (!empty($merchant->nama))?$merchant->nama:'<b>belum memilih merchant</b>' !!}</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="row">
                <div class="col-12">
                <h5>Merchants</h5>

                </div>
            </div>
            <div class="row">
                @if($merchants->count() == 0)
                    <div class="col-12 text-center">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h4>Silahkan daftarkan merchant anda terlebih dahulu</h4>
                            <a class="btn btn-primary" href="{{ url('admin/merchants') }}">Daftarkan Merchant</a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endif
               @foreach ($merchants as $merchant )
                   <div class="col-md-4">
                      <div class="merchant">
                          <div class="banner">
                              <img src="{{ Storage::url($merchant->banner) }}" width="100%" alt="">
                          </div>
                      </div>
                   </div>
               @endforeach
            </div>
            <!-- end row -->

        </div>
    </div>
@endsection

@section('custom-js')

@endsection

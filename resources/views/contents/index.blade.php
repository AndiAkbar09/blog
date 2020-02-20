@extends('layouts.template')

@section('content')
<div class="pt-4">
    <h4 class="font-weight-bold">
        Direkomendasikan
    </h4>
    <div class="row">
        <div class="col-md-3">
            <div class="card border-0 shadow">
                <img src="{{asset('imeg/jowikwik.jpg')}}"class="card-img-top" alt="">
                <div class="card-body">
                    <div class="pt-2 d-flex">
                        <div class="mr-auto">
                        <img src="{{asset('imeg/jojo.jpg')}}"class="rounded-circle" width="30" height="30" alt="">
                        </div>
                            <div>
                                <a href="{{route('watch.EMPETALK-Oura-|-Jonathan-Liandi')}}">
                                <h6 class="font-weight-bold">EMPETALK Oura | Jonathan Liandi</h6>
                                </a>
                                <h6 class="text-muted">Jonathan Liandi</h6>
                                
                                <br>
                                <small class="text-muted">1,5jt x ditonton . 7 jam yang lalu</small>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow">
                <img src="{{asset('imeg/twice.jpg')}}"class="card-img-top" alt="">
                <div class="card-body">
                    <div class="pt-2 d-flex">
                        <div class="mr-auto">
                        <img src="{{asset('imeg/mnet.jpg')}}"class="rounded-circle" width="30" height="30" alt="">
                        </div>
                            <div>
                                <h6 class="font-weight-bold">[TWICE - FANCY] Comeback Stage</h6>
                                <h6 class="text-muted">Mnet K-POP</h6>
                                
                                <br>
                                <small class="text-muted">14,05jt x ditonton . 5 bulan yang lalu</small>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow">
                <img src="{{asset('imeg/boboiboym2.jpg')}}"class="card-img-top" alt="">
                <div class="card-body">
                    <div class="pt-2 d-flex">
                        <div class="mr-auto">
                        <img src="{{asset('imeg/mons.jpg')}}"class="rounded-circle" width="30" height="30" alt="">
                        </div>
                            <div>
                                <h6 class="font-weight-bold">BoBoiBoy Movie 2 | Official trailer</h6>
                                <h6 class="text-muted">Monsta</h6>
                                
                                <br>
                                <small class="text-muted">5jt x ditonton . 6 bulan yang lalu</small>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow">
                <img src="{{asset('imeg/panjii.jpg')}}"class="card-img-top" alt="">
                <div class="card-body">
                    <div class="pt-2 d-flex">
                        <div class="mr-auto">
                        <img src="{{asset('imeg/deddy.jpg')}}"class="rounded-circle" width="30" height="30" alt="">
                        </div>
                            <div>
                                <h6 class="font-weight-bold">GOKIL! King Cobra masuk studio </h6>
                                <h6 class="text-muted">Deddy Corbuzier</h6>
                                
                                <br>
                                <small class="text-muted">11jt x ditonton . 1 bulan yang lalu</small>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
</div>
    <!-- <div class="row"main role="main" class="px-4">
        <div class="col-md-3">
            <div class="card border-0 shadow">
                <img src="{{asset('imeg/mamamoo.jpg')}}"class="card-img-top" alt="">
                <div class="card-body">
                    <div class="pt-2 d-flex">
                        <div class="mr-auto">
                        <img src="{{asset('imeg/mnet.jpg')}}"class="rounded-circle" width="30" height="30" alt="">
                        </div>
                            <div>
                                <h6 class="font-weight-bold">[2019 MAMA] J.Y.Park & Wheein & Moonbyul</h6>
                                <h6 class="text-muted">Mnet K-POP</h6>
                                
                                <br>
                                <small class="text-muted">55jt x ditonton . 2 bulan yang lalu</small>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow">
                <img src="{{asset('imeg/twice.jpg')}}"class="card-img-top" alt="">
                <div class="card-body">
                    <div class="pt-2 d-flex">
                        <div class="mr-auto">
                        <img src="{{asset('imeg/mnet.jpg')}}"class="rounded-circle" width="30" height="30" alt="">
                        </div>
                            <div>
                                <h6 class="font-weight-bold">[TWICE - FANCY] Comeback Stage</h6>
                                <h6 class="text-muted">Mnet K-POP</h6>
                                
                                <br>
                                <small class="text-muted">14,05jt x ditonton . 5 bulan yang lalu</small>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow">
                <img src="{{asset('imeg/boboiboym2.jpg')}}"class="card-img-top" alt="">
                <div class="card-body">
                    <div class="pt-2 d-flex">
                        <div class="mr-auto">
                        <img src="{{asset('imeg/mons.jpg')}}"class="rounded-circle" width="30" height="30" alt="">
                        </div>
                            <div>
                                <h6 class="font-weight-bold">BoBoiBoy Movie 2 | Official trailer</h6>
                                <h6 class="text-muted">Monsta</h6>
                                
                                <br>
                                <small class="text-muted">5jt x ditonton . 6 bulan yang lalu</small>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow">
                <img src="{{asset('imeg/panjii.jpg')}}"class="card-img-top" alt="">
                <div class="card-body">
                    <div class="pt-2 d-flex">
                        <div class="mr-auto">
                        <img src="{{asset('imeg/deddy.jpg')}}"class="rounded-circle" width="30" height="30" alt="">
                        </div>
                            <div>
                                <h6 class="font-weight-bold">GOKIL! King Cobra masuk studio </h6>
                                <h6 class="text-muted">Deddy Corbuzier</h6>
                                
                                <br>
                                <small class="text-muted">11jt x ditonton . 1 bulan yang lalu</small>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>        -->
@endsection
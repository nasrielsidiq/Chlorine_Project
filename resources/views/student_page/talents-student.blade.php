@extends('template.navbar-student')
@section('content')
    <div class="" style="background: #6DA5C0;width: 100%;height: 60vh;padding-top: 8rem">
        <div class="container-fluid px-5 w-100 " style="height: 40vh;">
            <div class="row mx-5">
                <div class="col-5 d-flex flex-column align-items-center justify-content-center" style="height: 40vh">
                    <h2 class="fw-bold text-white">Find the right <br>internship for you</h2>
                    <div class="d-flex ">
                        <h3 class="pe-2 fw-bold " style="color: #082D33;">Choose your</h3>
                        <h3 class="fw-bold text-white">passion</h3>
                    </div>
                </div>
                <div class="col-6 d-flex align-items-center justify-content-center" style="height: 40vh">
                    <div class="row">
                        @for ($i = 0; $i < 7; $i++)
                            <div class="col-auto bg-white rounded-pill align-items-center pt-1 my-2 mx-2"
                                style="opacity: 0.5;height: 2rem;">
                                <p class="">Pemrograman </p>
                            </div>
                            <div class="col-auto bg-white rounded-pill align-items-center pt-1 my-2 mx-2"
                                style="opacity: 0.5;height: 2rem;">
                                <p class="">Pemrograman asd</p>
                            </div>
                            <div class="col-auto bg-white rounded-pill align-items-center pt-1 my-2 mx-2"
                                style="opacity: 0.5;height: 2rem;">
                                <p class="">Peman asd</p>
                            </div>
                            <div class="col-auto bg-white rounded-pill align-items-center pt-1 my-2 mx-2"
                                style="opacity: 0.5;height: 2rem;">
                                <p class="">Pemrsdf</p>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="" style="height: 60vh">
        <div class="row mx-5">
            <div class="col-5 d-flex flex-column align-items-center" style="height: 40vh">
                <h2 class="fw-bold text-white">Find the right <br>internship for you</h2>
                <div class="d-flex ">
                    <h3 class="pe-2 fw-bold " style="color: #082D33;">Choose your</h3>
                    <h3 class="fw-bold " style="color: #0E939A;">passion</h3>
                </div>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-center" style="height: 40vh">
                <div class="row">
                    @for ($i = 0; $i < 7; $i++)
                        <div class="col-auto rounded-pill align-items-center pt-1 my-2 mx-2"
                            style="opacity: 0.5;height: 2rem;background: #082D33">
                            <p class="text-white">safdfahjas</p>
                        </div>
                        <div class="col-auto rounded-pill align-items-center pt-1 my-2 mx-2"
                            style="opacity: 0.5;height: 2rem;background: #082D33">
                            <p class="text-white">safdfahasdasdajas</p>
                        </div>
                        <div class="col-auto rounded-pill align-items-center pt-1 my-2 mx-2"
                            style="opacity: 0.5;height: 2rem;background: #082D33">
                            <p class="text-white">safdjas</p>
                        </div>
                        <div class="col-auto rounded-pill align-items-center pt-1 my-2 mx-2"
                            style="opacity: 0.5;height: 2rem;background: #082D33">
                            <p class="text-white">safdfaas</p>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection

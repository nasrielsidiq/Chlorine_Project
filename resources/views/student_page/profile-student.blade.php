@extends('template.navbar-student')
@section('content')
    <div class="container" style="margin-top:10rem">
        <div class="shadow p-3 py-5 " style="border-radius: 2rem">
            <form action="" class="p-3 pt-5" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-10">
                                <label for="nisn" class="ms-2">NISN</label>
                                <input class="form-control mt-2 border-0 pt-2 pb-2"
                                    style="border-radius: 12px; background-color: #F6F6F6;" type="number" name="nisn"
                                    id="nisn">
                            </div>
                            <div class="col-md-2" style="margin-top: -50px;">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <img src="https://via.placeholder.com/100" alt="Preview" class="image-preview">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="file" id="fileInput" class="file-input" accept="image/*">
                                        <label for="fileInput" class="custom-label ">Edit Photo</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top:-30px ;">
                        <label for="nama" class="ms-2">Nama Lengkap</label>
                        <input type="text" class="form-control mt-2 border-0 pt-2 pb-2"
                            style="border-radius: 12px; background-color: #F6F6F6; " name="" id="nama">
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="tgl" class="ms-2">Tanggal Lahir</label>
                                <input type="date" class="form-control mt-2 border-0  pt-2 pb-2"
                                    style="border-radius: 12px; background-color: #F6F6F6;" name="" id="tgl">
                            </div>
                            {{-- <div class="col-md-6">
                            <label for="jrs" class="ms-2">Jurusan</label>
                            <input type="text" class="form-control mt-2 border-0  pt-2 pb-2"
                                style="border-radius: 12px; background-color: #F6F6F6;" name="" id="jrs">

                        </div> --}}
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <label for="npsn" class="ms-2">NPSN</label>
                        <input class="form-control mt-2 border-0 pt-2 pb-2"
                            style="border-radius: 12px; background-color: #F6F6F6;" type="number" name="npsn"
                            id="nisn">
                    </div>
                    {{-- <div class="col-md-12 mt-3">
                    <label for="alamat" class="ms-2">Alamat</label>
                    <textarea name="" class="form-control mt-2 border-0" style="border-radius: 12px; background-color: #F6F6F6;"
                        id="alamat" rows="4"></textarea>
                </div> --}}
                    <div class="col-md-12 mt-4">
                        <a href="/shool-page" class="btn btn-secondary pe-5 ps-5 me-5 text-white"
                            style="border-radius:20px">Cancel
                        </a>
                        <button class="btn ps-5 pe-5 border " style=" border-radius: 20px;" type="submit">Choose your
                            interests
                            and talents
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

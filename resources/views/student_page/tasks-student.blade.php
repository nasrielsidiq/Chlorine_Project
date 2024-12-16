@extends('template.navbar-student')
@section('content')
    <div class="container" style="margin-top:8rem ; z-index: 100;">
        <input class="w-100 p-2 border-1" style="background-color: #D9D9D9 ; border-radius:12px ; "
            placeholder="Cari di sini..." type="search" name="serach" id="">
        <div class="tasks mt-5">
            <div class="task w-100">
                <p class="fw-bold pb-2" style="border-bottom: 1px solid black">Today</p>
                @for ($i = 0; $i < 2; $i++)
                    <div class="card w-100 mt-3" style="border-bottom: 4px solid #D9D9D9 ">
                        <div class="text p-4" style="background-color: #DBE8EF">
                            <h5 class="card-title">tugas {{ $i + 1 }}</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, hic
                                soluta. Suscipit, nesciunt. Dolore, quae quisquam. Tempore cumque praesentium nostrum?</p>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="task w-100 mt-3">
                <p class="fw-bold pb-2" style="border-bottom: 1px solid black">Yesterday</p>
                @for ($i = 0; $i < 1; $i++)
                    <div class="card w-100 mt-3" style="border-bottom: 4px solid #D9D9D9 ">
                        <div class="text p-4" style="background-color: #DBE8EF">
                            <h5 class="card-title">tugas {{ $i + 1 }}</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, hic
                                soluta. Suscipit, nesciunt. Dolore, quae quisquam. Tempore cumque praesentium nostrum?</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-straight/css/uicons-solid-straight.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
<style>
    body{
        scroll-behavior: smooth;
        margin: auto 0px;
    }
    /* .up{
        background-image:url(img/fbg.PNG) ;
        background-size: cover;
        padding-bottom: 48%;

    } */
    .sigin{
        background-color:#082D33;
       color: white;
    }
    .sigin:hover{
        background-color: white;
        color: #082D33;
        cursor: pointer;
    }
    a.nav-link:hover{
        border-bottom: 2px solid black;
        cursor: pointer;
        margin-top: -4px;
        animation: infinite;
    }
    img#otomotip{
        filter: grayscale(100%);
    }
    img#otomotip2{
        filter: grayscale(100%);
    }
    img#otomotip:hover{
        cursor: pointer;
        filter: none;
        width: 210px;
        animation: reverse;
    }
    img#otomotip2:hover{
        cursor: pointer;
        filter: none;
        width: 230px;
        animation: reverse;
    }
    .scroll-container {
      white-space: nowrap;
      overflow-x: auto;
      padding: 10px;
    }
    /* Set item untuk tampil inline */
    .scroll-item {
      display: inline-block;
      width: 200px;
      height: 150px;
      margin-right: 10px;
      /* background-color: #f8f9fa;   */
      text-align: center;
      /* line-height: 150px;          */
      /* border-radius: 8px; */
      /* border: 1px solid #ddd;      */
    }
    .scroll-container::-webkit-scrollbar {
      height: 8px;                 /* Tinggi scrollbar horizontal */
      background-color: transparent;  /* Buat transparan saat tidak di-hover */
    }

    /* Ubah warna scrollbar track saat di-hover */
    .scroll-container:hover::-webkit-scrollbar {
      background-color: #ddd;      /* Track scrollbar saat di-hover */
    }

    /* Warna dan gaya dari thumb scrollbar */
    .scroll-container::-webkit-scrollbar-thumb {
      background-color: transparent; /* Buat transparan saat tidak di-hover */
    }

    /* Thumb scrollbar saat di-hover */
    .scroll-container:hover::-webkit-scrollbar-thumb {
      background-color: #888;      /* Warna thumb scrollbar saat di-hover */
      border-radius: 4px;
    }

        .contact-form {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .newsletter-box {
            background-color: #e9ecef;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .newsletter-box h4 {
            margin-bottom: 15px;
            font-size: 24px;
            color: #343a40;
        }
        .footer-contact {
            background-color: #0d6efd;
            color: white;
            padding: 20px;
            border-radius: 10px;
        }
</style>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <div class="up container-fluid" id="up" >
        <nav class="navbar navbar-expand-lg ms-5 me-5 " style="background-color: #D9D9D9; border-radius: 40px; top: 20px; position: fixed; width: 90%; z-index: 10;">
            <div class="container">
              <a class="navbar-brand fw-bold fs-4 ms-4 text-body" href="#up">PKLzone</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-lg-0 fw-bold ms-5" style="gap: 20px;">
                    <li class="nav-item" style="margin-left: 10rem;">
                        <a class="nav-link active text-body"  aria-current="page" href="#home">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active text-body" aria-current="page" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-body" aria-current="page" href="#vacancy">Vacancy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-body" aria-current="page" href="#company">Company</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link active text-body"  aria-current="page" href="#attendance">Attendance</a>
                    </li>
                    <li class="nav-item" style="margin-left: 18rem;">
                        <a class="sigin nav-link ps-5 pe-5"  style=" border-radius: 20px;" href="/login">Sig In</a>
                    </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>
    <div class="container" style="margin-top:10rem">
        <input class="w-100 p-2 border-1" style="background-color: #D9D9D9 ; border-radius:20px ; " type="search" name="serach" id="">
    </div>
</body>
</html>

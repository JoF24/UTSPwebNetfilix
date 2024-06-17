<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Netflix_kecil.png" type="image/x-icon">
    <title>Netflix Indonesia - Watch TV Shows Online, Watch Movies Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: black;
            color: #ffffff;
            font-family: Arial, sans-serif; 
        }
        .container {
            position: relative;
            max-width: 1700px;
            margin: 0 auto;
            padding: 0 15px; 
        }
        .navbar {
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            background-color: transparent; 
            position: absolute;
            top: 0; 
            left: 0;
            right: 0; 
            z-index: 2;
            padding: 20px 0;
        }
        .navbar-brand img {
            width: 200px; 
            height: auto; 
        }
        .content {
            height: 1000px; 
            background-image: url('https://assets.nflxext.com/ffe/siteui/vlv3/9f46b569-aff7-4975-9b8e-3212e4637f16/545f6697-cc28-4cc0-a04b-8087c6d398fe/ID-id-20240415-popsignuptwoweeks-perspective_alpha_website_small.jpg');
            background-size: cover; 
            position: relative; 
        }
        .overlay {
            position: absolute; 
            top: 0; 
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
        }
        .overlay-form{
            position: absolute; 
            top: 0; 
            left: 0;
            width: 700px;
            height: 80px;
            background-color: rgba(0, 0, 0, 0.5);
            pointer-events: none;
        }
        .dropdown {
            position: relative;
            color: #ffffff;
        }
    
        .dropdown::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); 
            z-index: 1; 
            pointer-events: none;
        }
        .dropdown a {
            color: #ffffff; 
            text-decoration: none;
        }
        .title {
            text-align: center; 
            padding-top: 200px; 
        }
        .tombol-signin{
            background-image: url('SignIn.png');
            width: 100px;
            height: 40px;
            background-size: cover;
        }
        .title{
            font-size: 85px;
            font-weight: bolder;
        }
        .tombol-get{
            background-image: url('Get.png');
            width: 270px;
            height: 80px;
            background-size: cover;
        }
        .input-group input {
            border: none; 
            background-color: rgba(255, 255, 255, 0.2); 
        }
        .input-group input::placeholder {
            color: white;
            font-size: 25px;
        }
    </style>
</head>
<body>
    <div class="content">
        <nav class="navbar">
            <div class="container">
                <div class="row w-100">
                    <div class="col-4">
                        <a class="navbar-brand" href="#">
                            <img src="Logo.png" alt="Netflix Logo">
                        </a>
                    </div>
                    <div class="col-8 d-flex justify-content-end">
                        <div class="dropdown" style="margin-right: 20px;color:#ffffff">
                            <button class="btn btn-white dropdown-toggle kalimat" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:300px;background-image: none">
                                <a href="#" style="text-decoration:none; color:inherit">
                                    <img src="Translate.png" alt="Logo" style="width: 50px; height: 40px; margin-right: 10px;">
                                    <span style="color: #ffffff;">English</span>
                                </a>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>Bahasa Indonesia</li>
                            </ul>
                        </div>
                        <a href="#" class="btn tombol-signin" role="button"></a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="overlay"></div>
        <div class="container">
            <div class="d-flex justify-content-center align-items-end" style="height: 600px;">
                <h1 class="title">Film, acara TV tak terbatas dan banyak lagi</h1>
            </div>
            <div class="d-flex justify-content-center mt-3 mb-4">
                <p style="font-size: 40px;">Tonton di mana pun. Batalkan kapan pun.</p>
            </div>
            <div class="d-flex justify-content-center mb-2">
                <p style="font-size: 35px;">Siap menonton? Masukkan email untuk membuat atau memulai lagi keanggotaanmu.</p>
            </div>
            <div class="d-flex justify-content-center" style="height: 300px;">
                <div class="input-group" style="width: 700px;height:80px;">
                    <input type="text" class="form-control" placeholder="Alamat email" style="margin-right:20px">
                    <div class="overlay-form"></div>
                </div>
                <a href="#" class="btn tombol-get" role="button"></a>
            </div>
        </div>  
    </div>
    <div class="d-flex" style="height: 15px;">
        <div class="card" style="border-top:none;border-bottom: 15px solid #45474B;border-left:none;border-right:none;width:100%"></div>
    </div>
    <div class="d-flex justify-content-center align-items-center" style="height: 700px;">
        <div class="row w-100">
            <div class="col-6 d-flex flex-column justify-content-center">
                <h1 style="font-size: 80px;font-weight:bold">Nikmati di TV-mu</h1>
                <p style="font-size: 30px;">Tonton di Smart TV, Playstation, Xbox, Chromecast, <br> Apple TV, pemutar Blu-ray, dan banyak lagi.</p>
            </div>
            <div class="col-6 d-flex">
                <video src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/video-tv-0819.m4v" style="width: 800px; height:500px" autoplay playsinline muted loop></video>
            </div>
        </div>
    </div>
    <div class="d-flex" style="height: 15px;">
        <div class="card" style="border-top:none;border-bottom: 15px solid #45474B;border-left:none;border-right:none;width:100%"></div>
    </div>
    <div class="d-flex justify-content-center align-items-center" style="height: 700px;">
        <div class="row w-100">
            <div class="col-6 d-flex flex-column">
                <img src="mobile-0819.jpg" alt="" style="width: 800px;height:400px">
                <img src="div.default-ltr-cache-xfttou.png" alt="" style="height: 250px;width:800px">
            </div>
            <div class="col-6 d-flex flex-column justify-content-center">
                <h1 style="font-size: 80px;font-weight:bold">Download acara TV <br> untuk menontonnya <br>secara offline</h1>
                <p style="font-size: 30px;">Simpan favoritmu dengan mudah agar selalu ada <br> acara TV dan film yang bisa ditonton.</p>
            </div>
        </div>
    </div>
    <div class="d-flex" style="height: 15px;">
        <div class="card" style="border-top:none;border-bottom: 15px solid #45474B;border-left:none;border-right:none;width:100%"></div>
    </div>
    <div class="d-flex justify-content-center align-items-center" style="height: 700px;">
        <div class="row w-100">
            <div class="col-6 d-flex flex-column justify-content-center">
                <h1 style="font-size: 80px;font-weight:bold">Tonton di mana pun</h1>
                <p style="font-size: 30px;">Streaming film dan acara TV tak terbatas di ponsel, <br> tablet, laptop, dan TV-mu.</p>
            </div>
            <div class="col-6 d-flex">
                <video src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/video-devices-id.m4v" style="width: 800px; height:500px" autoplay playsinline muted loop></video>
            </div>
        </div>
    </div>
    <div class="d-flex" style="height: 15px;">
        <div class="card" style="border-top:none;border-bottom: 15px solid #45474B;border-left:none;border-right:none;width:100%"></div>
    </div>
    <div class="d-flex justify-content-center align-items-center" style="height: 700px;">
        <div class="row w-100">
            <div class="col-6 d-flex flex-column">
                <img src="Anak.png" alt="" style="width: 800px;height:650px">
            </div>
            <div class="col-6 d-flex flex-column justify-content-center">
                <h1 style="font-size: 80px;font-weight:bold">Buat profil untuk anak</h1>
                <p style="font-size: 30px;">Kirim anak-anak untuk bertualang bersama karakter <br> favorit mereka di dunia yang dibuat khusus untuk <br> mereka—gratis dengan keanggotaanmu.</p>
            </div>
        </div>
    </div>
    <div class="d-flex" style="height: 15px;">
        <div class="card" style="border-top:none;border-bottom: 15px solid #45474B;border-left:none;border-right:none;width:100%"></div>
    </div>
    <div class="d-flex justify-content-center align-items-center flex-column" style="height: 1200px;">
        <h1 style="font-weight: bolder; font-size: 80px;" class="mb-4">Tanya Jawab Umum</h1>
        <img src="FAQ.png" alt="" class="mb-5" style="width: 1800px;height:800px">
        <p style="font-size: 30px;">Siap menonton? Masukkan email untuk membuat atau memulai lagi keanggotaanmu.</p>
        <div class="d-flex justify-content-center" style="height: 300px;">
            <div class="input-group" style="width: 700px;height:80px;">
                <input type="text" class="form-control" placeholder="Alamat email" style="margin-right:20px">
                <div class="overlay-form"></div>
            </div>
            <a href="#" class="btn tombol-get" role="button"></a>
        </div>
    </div>
    <div class="d-flex" style="height: 15px;">
        <div class="card" style="border-top:none;border-bottom: 15px solid #45474B;border-left:none;border-right:none;width:100%"></div>
    </div>
    <div class="d-flex justify-content-center flex-column mb-5">
        <p>Ada pertanyaan? Hubungi 007-803-321-2148</p>
        <div class="row w-100">
            <div class="col-3 d-flex flex-column align-items-center">
                <a href="" class="mb-2" style="color: #ffffff;">Tanya Jawab</a>
                <a href="" class="mb-2" style="color: #ffffff;">Hubungan Investor</a>
                <a href="" class="mb-2" style="color: #ffffff;">Cara Menonton</a>
                <a href="" class="mb-2" style="color: #ffffff;">Informasi Perusahaan</a>
                <a href="" class="mb-2" style="color: #ffffff;">Hanya di Netflix</a>
            </div>
            <div class="col-3 d-flex flex-column align-items-center">
                <a href="" class="mb-2" style="color: #ffffff;">Pusat Bantuan</a>
                <a href="" class="mb-2" style="color: #ffffff;">Lowongan Kerja</a>
                <a href="" class="mb-2" style="color: #ffffff;">Ketentuan Pengguna</a>
                <a href="" class="mb-2" style="color: #ffffff;">Hubungi Kami</a>
            </div>
            <div class="col-3 d-flex flex-column align-items-center">
                <a href="" class="mb-2" style="color: #ffffff;">Akun</a>
                <a href="" class="mb-2" style="color: #ffffff;">Tukar Kartu Hadiah</a>
                <a href="" class="mb-2" style="color: #ffffff;">Privasi</a>
                <a href="" class="mb-2" style="color: #ffffff;">Uji Kecepatan</a>
            </div>
            <div class="col-3 d-flex flex-column align-items-center">
                <a href="" class="mb-2" style="color: #ffffff;">Pusat Media</a>
                <a href="" class="mb-2" style="color: #ffffff;">Beli Kartu Hadiah</a>
                <a href="" class="mb-2" style="color: #ffffff;">Preferensi Cookie</a>
                <a href="" class="mb-2" style="color: #ffffff;">Informasi Legal</a>
            </div> 
        </div>
        <div class="dropdown" style="margin-right: 20px;color:#ffffff">
            <button class="btn btn-white dropdown-toggle kalimat" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:300px;background-image: none">
                <a href="#" style="text-decoration:none; color:inherit">
                    <img src="Translate.png" alt="Logo" style="width: 50px; height: 40px; margin-right: 10px;">
                    <span style="color: #ffffff;">English</span>
                </a>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li>Bahasa Indonesia</li>
            </ul>
        </div>
        <p>Netflix Indonesia</p>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

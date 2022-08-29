<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#07063d" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#07063d" media="(prefers-color-scheme: dark)">
    <meta name="description" content="Pahlawan Digital UMKM">
    <meta name="author" content="Pahlawan Digital UMKM">
    <meta name="keywords" content="Pahlawan Digital UMKM">

    <!-- Title Page-->
    <title>Register - Pahlawan Digital UMKM</title>

    <!-- Icons font CSS-->
    <link href="{{ url('/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{ url('/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('/vendor/datepicker/daterangepicker.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ url('/css/main.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('/css/custom.css') }}" rel="stylesheet" media="all">
    
    <base href="{{ url('/') }}" />
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            
            <center>
            <a href="/"><img class="logo" style="width:300px;margin-bottom:30px" src="{{ url('/images/logo.png') }}"/></a>
            </center>
            
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Pendaftaran</h2>
                    <center><p style="color:white;font-size:12px;padding-right:20px;padding-left:20px;">Silahkan isi form pendaftaran   dibawah ini dengan benar</p></center>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="name">Nama Startup</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="title" placeholder="Ketik Nama startup disini" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" placeholder="Ketik alamat email disini" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nomor Telpon</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="phone" placeholder="Ketik nomor telpon disini" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Alamat Lengkap</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea style="width:100%;border:none" class="input--style-5" id="alamat" name="address" rows="3" cols="50" placeholder="Ketik alamat lengkap disini..." required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Website</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="website" placeholder="Ketik alamat website disini" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nama PIC</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="PIC" placeholder="Ketik Nama PIC disini" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Kriteria Startup/Produk/Jasa</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="startup_criteria" placeholder="Ketik Kriteria disini" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Berapa lama produk dan jasa beroperasi?</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="product_age" required>
                                            <option disabled="disabled" selected="selected">Pilih salah satu</option>
                                            <option value="Kurang dari setahun">Kurang dari setahun</option>
                                            <option value="1 - 2 tahun">1 - 2 tahun</option>
                                            <option value="2 tahun"> 2 tahun</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Berapa total pengguna aktif setiap bulannya  produk dan jasa</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="active_customer" required>
                                            <option disabled="disabled" selected="selected">Pilih salah satu</option>
                                            <option value="Kurang dari 100 pengguna aktif/bulan">Kurang dari 100 pengguna aktif/bulan</option>
                                            <option value="100 - 1000 pengguna aktif/bulan">100 - 1000 pengguna aktif/bulan</option>
                                            <option value="1000 pengguna aktif/bulan">1000 pengguna aktif/bulan</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Jenis bidang operasi yang paling merepresentasikan produk atau jasa yang ditawarkan</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="product_operation_field" required onchange="updateOperationField(this)">
                                            <option disabled="disabled" selected="selected">Pilih salah satu</option>
                                            <option value="Digitalisasi Akses Pasar ">Digitalisasi Akses Pasar </option>
                                            <option value="Digitalisasi pemantauan kualitas produksi">Digitalisasi pemantauan kualitas produksi</option>
                                            <option value="Digitalisasi Keuangan dan akses pembiayaan, ">Digitalisasi Keuangan dan akses pembiayaan, </option>
                                            <option value="Digitalisasi Manajemen organisasi ">Digitalisasi Manajemen organisasi </option>
                                            <option value="Digitalisasi Kapasitas produksi">Digitalisasi Kapasitas produksi</option>
                                            <option value="Digitalisasi Supplier/pasokan">Digitalisasi Supplier/pasokan</option>
                                            <option value="Digitalisasi Distribusi ">Digitalisasi Distribusi </option>
                                            <option value="Lainnya, sebutkan">Lainnya, sebutkan</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="other-operation-field" class="form-row" style="display: none;">
                          <div class="name">Lainnya, Sebutkan</div>
                          <div class="value">
                              <div class="input-group">
                                  <input class="input--style-5" type="text" name="other_production_operation" placeholder="Ketik bidang operasi startup anda">
                              </div>
                          </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Unggah Proposal (Format PDF max 10mb)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="file" name="proposal" id="proposal" accept=".pdf" onchange="uploadFile()" required><br>
                                    <iframe id="proposal-preview" src="" frameborder="0" style="width: 100%; height: 400px; display: none;"></iframe>
                                    <div style="position:relative">
                                    <label class="label--desc">Panduan Proposal:</label>
                                    <br>
                                    <ol class="label--desc">
                                        <li>Maksimal jumlah halaman dalam proposal dalam pdf adalah 13 halaman</li>
                                        <li>Diharapkan dalam proposal yang diunggah terdapat poin poin sebagai berikut:</li>
                                    </ol>
                                    <br><br style="display:none" class="mobile-only"><br style="display:none" class="mobile-only"></br>
                                    <ol style="margin-left:20px;list-style:lower-alpha" class="label--desc">
                                        <li>Business Profile</li>
                                        <li>Business Projection (Jangka Pendek, Menengah, dan Panjang)</li>
                                        <li>Traction: KPI metrics & milestones</li>
                                        <li>Problem Statement</li>
                                        <li>Solution</li>
                                        <li>Products/Services</li>
                                        <li>Business Model</li>
                                        <li>Competitive Advantages/ Benchmarking</li>
                                    </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br></br> <br></br> <br></br> <br></br>
                        <div style="display:none" class="form-row p-t-20">
                            <label class="label label--block">Are you an existing customer?</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" checked="checked" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Link apps Playstore/appstore ke produk (jika berupa aplikasi)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="app_link" placeholder="Link aplikasi Android/iOS">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Link Video team profile atau company profile</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="video_link" placeholder="Link Video">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                          <div class="value">
                              <div class="input-group tacbox">
                                <input class="input--style-5" id="checkbox" type="checkbox" />
                                <label style="display: inline;margin-left:25px;margin-top: 0px" class="label--desc" for="checkbox"> Saya setuju dengan <a href="#">Syarat dan Ketentuan</a> yang berlaku</label>
                              </div>
                          </div>
                        </div>
                        <div style="width: 120px;">
                          <div class="form-row">
                            <div class="name" style="margin-bottom: 5px">Input Captcha</div>
                            <div style="display: flex; flex-direction: row; margin-bottom: 5px;">
                              <img id="captcha-img" src="{{ url('/captcha') }}" alt="" style="margin-right: 5px;">
                              <button class="btn btn--radius-2 btn--red" type=button onclick="updateCaptcha()">Ganti</button>
                            </div>
                            <div class="value">
                              <div class="input-group">
                                <input class="input--style-5" type="text" name="captcha" placeholder="captcha">
                              </div>
                          </div>
                        </div>
                        <br><br><br><br>
                        
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <center><p style="margin-top:50px;color:white">© Copyright 2020 Pahlawan Digital UMKM - All Rights Reserved</p></center>
            
        </div>
    </div>
    
    <script>
      function updateOperationField(ev) {
        if (ev.value === 'Lainnya, sebutkan') {
            $('#other-operation-field').show()
        } else {
            $('#other-operation-field').hide()
        }
      }

      function updateCaptcha() {
        $('#captcha-img').attr({src: '{{ url('/captcha?q=') }}' + Date.now()})
      }

      function uploadFile() {
        const el = document.getElementById('proposal')

        if (!el) {
            return
        }

        var file = el.files[0];
        const url = URL.createObjectURL(file)
        $('#proposal-preview').attr({src: url}).show()
      }
    </script>

    <!-- Jquery JS-->
    <script src="{{ url('/vendor/jquery/jquery.min.js') }}"></script>
    <!-- Vendor JS-->
    <script src="{{ url('/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ url('/vendor/datepicker/moment.min.js') }}"></script>
    <script src="{{ url('/vendor/datepicker/daterangepicker.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ url('/js/global.js') }}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
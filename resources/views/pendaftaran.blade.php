<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rumah Kreatif - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('public/template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('public/template/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-10 col-md-10">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">

                                    <img class="mx-auto d-block" src="{{asset('public/image/logo.png')}}" alt=""
                                        srcset="">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Pendaftaran Asosiasi Pelaku UMKM</h1>
                                    </div>

                                    <form class="user" action="{{url('pendaftaran')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Nama</label>
                                                    <input type="text" class="form-control form-control-user
                                                        @error('name') is-invalid @enderror
                                                        "
                                                        value="{{old('name')}}"
                                                        name="name" placeholder="nama">
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Email</label>
                                                    <input type="email" class="form-control form-control-user
                                                        @error('email') is-invalid @enderror
                                                        "
                                                        value="{{old('email')}}"
                                                        name="email" placeholder="email">
                                                </div>

                                                <div class="form-group">
                                                    <label for="">NIK</label>
                                                    <input type="text" class="form-control form-control-user
                                                        @error('nik') is-invalid @enderror
                                                        "
                                                        value="{{old('nik')}}"
                                                        name="nik"
                                                        placeholder="nik">
                                                </div>

                                                <div class="form-group">
                                                    <label for="">No WhatsApp</label>
                                                    <input type="text" class="form-control form-control-user
                                                        @error('no_wa') is-invalid @enderror
                                                        "
                                                        value="{{old('no_wa')}}"
                                                        name="no_wa"
                                                        placeholder="no_wa">
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Alamat</label>
                                                    <input type="text" class="form-control form-control-user
                                                        @error('alamat') is-invalid @enderror
                                                        "
                                                        value="{{old('alamat')}}"
                                                        name="alamat" placeholder="alamat">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Alamat Produksi   </label>
                                                    <input type="text" class="form-control form-control-user
                                                        @error('alamat_produksi') is-invalid @enderror
                                                        "
                                                        value="{{old('alamat_produksi')}}"
                                                        name="alamat_produksi" placeholder="alamat_produksi">
                                                </div>

                                                <div class="form-group">
                                                    <label for="">NIB(Nomor Induk Berusaha)</label>
                                                    <input type="text" class="form-control form-control-user
                                                        @error('nib') is-invalid @enderror
                                                        "
                                                        name="nib" placeholder="nib">
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Nama UMKM</label>
                                                    <input type="text" class="form-control form-control-user
                                                        @error('nama_umkm') is-invalid @enderror
                                                        "
                                                        name="nama_umkm" placeholder="nama_umkm">
                                                </div>

                                                

                                                <div class="form-group">
                                                    <label for="">Kategori Usaha</label>
                                                    <select name="kategori" class="form-control-user form-control" style="height:50px;padding:.5rem 1rem;">
                                                        <option value="Makanan">Makanan</option>
                                                        <option value="Minuman">Minuman</option>
                                                        <option value="Fashion">Fashion</option>
                                                        <option value="Kerajinan Tangan">Kerajinan Tangan</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>

                                                <div class="form-group kl d-none">
                                                    <label for="">Masukan Kategori Usaha</label>
                                                    <input type="text" class="form-control form-control-user 
                                                        "
                                                        name="kategori_lainnya" placeholder="kategori usaha lainnya">
                                                </div>

                                            </div>
                                        </div>


                                        <span class="mx-auto text-center mb-3 d-block">Pastikan data yang anda masukan benar</span>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            submit
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('public/template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('public/template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('public/template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('public/template/js/sb-admin-2.min.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>

@if(session()->has('sukses'))
    Swal.fire({
        title: 'success',
        text: '{{session()->get("sukses")}}',
        icon: 'success',
        confirmButtonText: 'Close'
    })
    @elseif(session()->has('gagal'))
    Swal.fire({
        title: 'gagal',
        text: '{{session()->get("gagal")}}',
        icon: 'error',
        confirmButtonText: 'Close'
    })
    @endif
    
        $('[name="kategori"]').on('change',()=>{
            console.log($('[name="kategori"]').val())
            if($('[name="kategori"]').val() == "Lainnya"){
                $('.kl').removeClass('d-none')
                $('.kl').find('input').prop('required',true)
            }else{
                $('.kl').addClass('d-none')
                $('.kl').find('input').prop('required',false)
            }
        })
    </script>

</body>

</html>
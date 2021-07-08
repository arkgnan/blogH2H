<section class="py-5 bg-secondary" id="register">
    <div class="container">
        <div class="row choose-one">
            <div class="col-md-12">
                <div class="card-deck">
                    <div class="card rounded-0">
                        <img src="images/register.jpg" class="card-img-top" alt="Registrasi H2H">
                        <div class="card-body">
                            <h5 class="card-title">Pendaftaran</h5>
                            <p class="card-text">Kami berikan produk dengan harga terbaik agar dapat Anda jual kembali untuk layanan usaha Anda.</p>
                            <button class="btn btn-danger trigger-mitra">Register</button>
                        </div>
                    </div>
                    <div class="card rounded-0">
                        <img src="images/offering.jpg" class="card-img-top" alt="Penawaran Kerjasama">
                        <div class="card-body">
                            <h5 class="card-title">Penawaran</h5>
                            <p class="card-text">Kami sangat terbuka dengan segala penawaran kerja sama. Jangan ragu untuk menghubungi kami.</p>
                            <button class="btn btn-danger trigger-offer">Offering</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mitra d-none">
            <div class="col-md-12 text-center text-white">
                <h1>Daftarkan server anda</h1>
                <p>Isi form dibawah ini dan kami akan segera menghubungi anda.</p>
            </div>
            <div class="col-md-12">
                <form action="{{ url('/daftar') }}" id="form-reg" method="post" enctype="multipart/form-data" class="bg-light p-3 needs-validation" novalidate>
                    {{ csrf_field() }}
                    <!-- badan usaha -->
                    <div id="form-section-badan-usaha">
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="company"><span class="text-danger">*</span>Nama Badan Usaha</label>
                                <input type="text" class="form-control rounded-0" name="company" id="company" placeholder="PT, CV, Brand" required/>
                            </div>
                            <div class="form-group col-md">
                                <label for="nama"><span class="text-danger">*</span>Nama Pemilik / Direktur</label>
                                <input type="text" class="form-control rounded-0" name="nama" id="nama" placeholder="Nama" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat"><span class="text-danger">*</span>Alamat Badan Usaha</label>
                            <input type="text" class="form-control rounded-0" name="alamat" id="alamat" placeholder="Lokasi kota server pulsa anda berada" required/>
                        </div>
                        <div class="form-row">
                            <div class="form-group  col-md">
                                <label for="telp"><span class="text-danger">*</span>Nomor Handphone Pemilik / Direktur</label>
                                <input type="text" pattern="\d*" maxlength="15" class="form-control rounded-0" name="telp" id="telp" placeholder="Nomer Handphone yang bisa dihubungi, contoh : 0858123456789" required/>
                            </div>
                            <div class="form-group col-md">
                                <label for="kontak"><span class="text-danger">*</span>Nomor Whatsapp / Id Telegram</label>
                                <input type="text" class="form-control rounded-0" name="kontak" id="kontak" placeholder="NO WA / ID TELEGRAM" required/>
                                <input type="hidden" name="judul" id="judul" value="Registrasi H2H"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group  col-md">
                                <label for="ktp"><span class="text-danger">*</span>Nomor KTP Pemilik / Direktur</label>
                                <input type="text" pattern="\d*" maxlength="16" class="form-control rounded-0" name="ktp" id="ktp" required/>
                            </div>
                            <div class="form-group col-md">
                                <label for="npwp">Nomor NPWP Badan Usaha</label>
                                <input type="text" pattern="\d*" maxlength="15" class="form-control rounded-0" name="npwp" id="npwp" placeholder="Optional"/>
                            </div>
                        </div>
                    </div>
                    <!-- end of badan usaha -->

                    <!-- upload data -->
                    <div id="form-section-upload" class="d-none">
                        <label>Upload Berkas Pendukung</label>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="scan-ktp" name="scan-ktp">
                                <label class="custom-file-label" for="scan-ktp">Scan KTP Pemilik / Direktur</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="scan-npwp" name="scan-npwp">
                                <label class="custom-file-label" for="scan-npwp">Scan NPWP Badan Usaha</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="scan-sppkp" name="scan-sppkp">
                                <label class="custom-file-label" for="scan-sppkp">Scan SPPKP</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="scan-akta" name="scan-akta">
                                <label class="custom-file-label" for="scan-akta">Scan Akta Pendirian Perusahaan</label>
                            </div>
                        </div>
                    </div>
                    <!-- end of upload data -->

                    <!-- server software -->
                    <div id="form-section-server" class="d-none">
                    <div class="form-row">
                        <div class="form-group col-md">
                            <label for="software"><span class="text-danger">*</span>Software Server</label>
                            <input type="text" class="form-control rounded-0" name="software" id="software" placeholder="Software server pulsa yang digunakan" required/>
                        </div>
                        <div class="form-group col-md">
                            <label for="oid">OID</label>
                            <input type="text" class="form-control rounded-0" name="oid" id="oid" placeholder="Untuk pengguna software otomax"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jabber">Jabber / Gmail Transaksi</label>
                        <input type="text" class="form-control rounded-0" name="jabber" id="jabber" placeholder="Untuk transaksi via Jabber"/>            
                    </div>
                    <div class="form-group">
                        <label for="url">IP Public</label>
                        <input type="text" class="form-control rounded-0" name="ip" id="ip" placeholder="Untuk transaksi via API, contoh : 10.10.10.1"/>
                    </div>
                    <div class="form-group">
                        <label for="url">URL Report</label>
                        <input type="url" class="form-control rounded-0" name="url" id="url" placeholder="http ://10.10.10.1/report.php"/>
                    </div>                    
                    </div>
                    <!-- end of server software -->

                    <div class="form-row">
                        <div class="form-group col-6 text-left">
                            <button type="button" id="back" class="btn btn-secondary rounded-0 px-5 btn-xs-block d-none"><i class="fas fa-chevron-left"></i> Back</button>
                            <small class="form-text text-danger">*  wajib diisi.</small>
                        </div>
                        <div class="form-group col-6 text-right">
                            <button type="button" id="next" class="btn btn-secondary rounded-0 px-5 btn-xs-block">Next <i class="fas fa-chevron-right"></i></button>
                            <button type="submit" id="finish" class="btn btn-danger rounded-0 px-5 btn-xs-block d-none logging" data-activity="daftar">Kirim <i class="far fa-share-square"></i></button>                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row offer d-none">
            <div class="col-md-12 text-center text-white">
                <h1>Berikan penawaran kerja sama Anda</h1>
                <p>Isi form dibawah ini dan kami akan segera menghubungi anda.</p>
            </div>
            <div class="col-md-12">
                <form action="{{ url('/offer') }}" id="form-offer" method="post" enctype="multipart/form-data" class="bg-light p-3 needs-validation" novalidate>
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md">
                            <label for="nama"><span class="text-danger">*</span>Nama PIC</label>
                            <input type="text" class="form-control rounded-0" name="nama" id="nama" placeholder="John Doe" required/>
                        </div>
                        <div class="form-group col-md">
                            <label for="position"><span class="text-danger">*</span>Jabatan</label>
                            <input type="text" class="form-control rounded-0" name="position" id="position" placeholder="Manager Markom" required/>
                        </div>
                        <div class="form-group col-md">
                            <label for="company"><span class="text-danger">*</span>Perusahaan</label>
                            <input type="text" class="form-control rounded-0" name="company" id="company" placeholder="PT Sukses Bersama" required/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="pesan"><span class="text-danger">*</span>Isi Penawaran</label>
                            <textarea class="form-control rounded-0" name="pesan" id="pesan" rows="5" required>
                            </textarea>
                        </div>
                    </div>
                    <small class="form-text text-muted">
                        Tinggalkan kontak yang dapat kami hubungi
                    </small>
                    <div class="form-row">
                        <div class="form-group col-md">
                            <label for="telp"><span class="text-danger">*</span>Nomor Handphone</label>
                            <input type="text" pattern="\d*" maxlength="15" class="form-control rounded-0" name="telp" id="telp" placeholder="contoh : 0858123456789" required/>
                        </div>
                        <div class="form-group col-md">
                            <label for="kontak"><span class="text-danger">*</span>Nomor Whatsapp / Id Telegram</label>
                            <input type="text" class="form-control rounded-0" name="kontak" id="kontak" placeholder="No Whatsapp / ID TELEGRAM" required/>
                        </div>
                        <div class="form-group col-md">
                            <label for="email"><span class="text-danger">*</span>Email</label>
                            <input type="email" class="form-control rounded-0" name="email" id="email" placeholder="yadi@gmail.com" required/>
                            <input type="hidden" name="judul" id="judul" value="Penawaran Kerjasama"/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6 text-left">
                            <small class="form-text text-danger">*  wajib diisi.</small>
                        </div>
                        <div class="form-group col-6 text-right">
                            <button type="submit" id="finish" class="btn btn-danger rounded-0 px-5 btn-xs-block">Kirim <i class="far fa-share-square"></i></button>  
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
@if(\Session::has('alert-failed'))
    $.notify({
        icon: 'far fa-envelope',
        message: '{{ Session::get('alert-failed') }}'
    },{
        type: 'danger',
        timer: 2000
    });
@elseif(\Session::has('alert-success'))
    $.notify({
        icon: 'far fa-envelope',
        message: '{{ Session::get('alert-success') }}'
    },{
        type: 'dark',
        timer: 2000
    });
@endif
    /* Example starter JavaScript for disabling form submissions if there are invalid fields */
    (function() {
        'use strict';
        window.addEventListener('load', function() {
        /* Fetch all the forms we want to apply custom Bootstrap validation styles to */
        var forms = document.getElementsByClassName('needs-validation');
        /* Loop over them and prevent submission */

        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                $.notify({
                    icon: 'pe-7s-bell',
                    message: 'Please complete all required fields'
                },{
                    type: 'danger',
                    timer: 2000
                });
                $('#form-section-badan-usaha').removeClass('d-none');
                $('#form-section-upload').addClass('d-none');
                $('#form-section-server').addClass('d-none');    
                $('#back').addClass('d-none');
                $('#next').removeClass('d-none');
                $('#finish').addClass('d-none'); 
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
            }, false);
        });

        $("input[type=file]").change(function (event) {
            var fieldVal = event.target.files[0].name;
            $(this).removeClass("is-invalid");
            $(this).addClass("is-valid");
            if (event.target.files.length > 0) {
                for (let i = 1; i < event.target.files.length; i++) {
                    fieldVal += ", " + event.target.files[i].name;
                }
            }
            $(this).next(".custom-file-label").html(fieldVal);
        });
        $('#next').click(function(){
            $('#form-section-badan-usaha').addClass('d-none');
            if ($('#npwp').val() != "") {
                if($('#form-section-upload').hasClass('d-none')){
                    $('#form-section-upload').removeClass('d-none');
                } else {
                    $('#form-section-upload').addClass('d-none');
                    $('#form-section-server').removeClass('d-none');
                    $('#next').addClass('d-none');
                    $('#finish').removeClass('d-none');
                }
            } else {
                $('#form-section-server').removeClass('d-none');
                $('#next').addClass('d-none');
                $('#finish').removeClass('d-none');
            }
            $('#back').removeClass('d-none');
        });
        $('.trigger-mitra').click(function(){
            $('.mitra').removeClass('d-none');
            $('.choose-one').addClass('d-none');
        });
        $('.trigger-offer').click(function(){
            $('.offer').removeClass('d-none');
            $('.choose-one').addClass('d-none');
        });
        $('#back').click(function(){
            if($('#form-section-server').hasClass('d-none')){
                if ($('#npwp').val() != "") {
                    if ($('#form-section-upload').hasClass('d-none')) {
                        $('#form-section-upload').removeClass('d-none');
                        $('#form-section-badan-usaha').addClass('d-none');
                    } else {
                        $('#form-section-upload').addClass('d-none');
                        $('#form-section-badan-usaha').removeClass('d-none');
                        $('#back').addClass('d-none');
                    }
                } else {
                    $('#form-section-upload').addClass('d-none');
                    $('#form-section-badan-usaha').removeClass('d-none');
                    $('#back').addClass('d-none');
                }
            } else {
                $('#form-section-server').addClass('d-none');                        
                if ($('#npwp').val() != "") { 
                    $('#form-section-upload').removeClass('d-none');                             
                } else {
                    $('#form-section-badan-usaha').removeClass('d-none');                                                      
                }
                $('#next').removeClass('d-none');
                $('#finish').addClass('d-none');                    
            }
        });
        
        }, false);
    })();
</script>
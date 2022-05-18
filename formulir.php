<HTML>
<HEAD>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
    .warning {color: #FF0000;}
</style>
<TITLE> Formulir Peserta Didik </TITLE>
</HEAD>
<body>
    <?php
    $error_paud = ""; //membuat variable paud ketika terjadi error
    $error_tk = ""; //membuat variable tk ketika terjadi error
    $error_jenisp = ""; //membuat variable jenisp ketika terjadi error
    $error_tanggal = ""; //membuat variable tanggal ketika terjadi error
    $error_nis = "";//membuat variable nis ketika terjadi error
    $error_npu = "";//membuat variable npu ketika terjadi error
    $error_skhun = "";//membuat variable skhun ketika terjadi error
    $error_ijazah = "";//membuat variable ijazah ketika terjadi error
    $error_hobi = "";//membuat variable hobi ketika terjadi error
    $error_citacita = "";//membuat variable citacita ketika terjadi error
    $error_nama = "";//membuat variable nama lengkap ketika terjadi error
    $error_jeniskelamin = "";//membuat variable jeniskelamin ketika terjadi error
    $error_nisn = "";//membuat variable nisn ketika terjadi error
    $error_nik = "";//membuat variable nik ketika terjadi error
    $error_tempatlhr = "";//membuat variable tempatlhr ketika terjadi error
    $error_tanggallhr = "";//membuat variable tanggal lahir ketika terjadi error
    $error_agama = "";//membuat variable agama ketika terjadi error
    $error_kebutuhankhusus = "";//membuat variable kebutuhankhusus ketika terjadi error
    $error_alamat = "";//membuat variable alamat ketika terjadi error
    $error_rt = "";//membuat variable rt ketika terjadi error
    $error_rw = "";//membuat variable rw ketika terjadi error
    $error_namadusun = "";//membuat variable nama dusun ketika terjadi error
    $error_namadesa = "";//membuat variable nama desa ketika terjadi error
    $error_kecamatan = "";//membuat variable keamatan ketika terjadi error
    $error_kdpos = "";//membuat variable kode pos ketika terjadi error
    $error_tempattinggal = "";//membuat variable tempat tinggal ketika terjadi error
    $error_transportasi = "";//membuat variable transportasi ketika terjadi error
    $error_nomorhp = "";//membuat variable nomor hp ketika terjadi error
    $error_nomortelp = "";//membuat variable nomor telepon ketika terjadi error
    $error_email = "";//membuat variable email ketika terjadi error
    $error_penerima = "";//membuat variable penerima ketika terjadi error
    $error_kewarganegaraan = "";//membuat variable kewarganeraan ketika terjadi error
    $error_namaa = ""; //membuat variable nama ayah ketika terjadi error
    $error_tahuna = ""; //membuat variable tahun ayah ketika terjadi error
    $error_pendidikana = ""; //membuat variable pendidikan ayah ketika terjadi error
    $error_pekerjaana = ""; //membuat variable pekerjaan ayah ketika terjadi error
    $error_penghasilana = ""; //membuat variable penghasilan ayah ketika terjadi error
    $error_kebutuhana = ""; //membuat variable kebutuhan ayah ketika terjadi error
    $error_namai = ""; //membuat variable nama ibu ketika terjadi error
    $error_tahuni = ""; //membuat variable tahun ibu ketika terjadi error
    $error_pendidikani = ""; //membuat variable pendidikan ibu ketika terjadi error
    $error_pekerjaani = ""; //membuat variable pekerjaan ibu ketika terjadi error
    $error_penghasilani = ""; //membuat variable penghasilan ibu ketika terjadi error
    $error_kebutuhani = ""; //membuat variable kebutuhan ibu ketika terjadi error


    $nama = "";//membuat variable nama lengkap k
    $jeniskelamin = "";//membuat variable jeniskelamin 
    $nisn = "";//membuat variable nisn 
    $nik = "";//membuat variable nik 
    $tempatlhr = "";//membuat variable tempatlhr 
    $tanggallhr = "";//membuat variable tanggal lahir 
    $agama = "";//membuat variable agama 
    $kebutuhankhusus = "";//membuat variable kebutuhankhususi error
    $alamat = "";//membuat variable alamat
    $rt = "";//membuat variable rt 
    $rw = "";//membuat variable rw 
    $namadusun = "";//membuat variable nama dusun 
    $namadesa = "";//membuat variable nama desa 
    $kecamatan = "";//membuat variable kecamatan
    $kdpos = "";//membuat variable kode pos 
    $tempattinggal = "";//membuat variable tempat tinggal 
    $transportasi = "";//membuat variable transportasi 
    $nomorhp = "";//membuat variable nomor hp 
    $nomortelp = "";//membuat variable nomor telepon 
    $email = "";//membuat variable email 
    $penerima = "";//membuat variable penerima 
    $kewarganegaraan = "";//membuat variable kewarganeraan 
    $paud = "";//membuat variable paud
    $tk = "";//membuat variable tk
    $jenisp = "";//membuat variable jenisp
    $tanggal = "";//membuat variable tanggal
    $nis = "";//membuat variable nis
    $npu = "";//membuat variable npu
    $skhun = "";//membuat variable skhun
    $ijazah = "";//membuat variable ijazah
    $hobi = "";//membuat variable hobi
    $citacita = "";//membuat variable cita-cita
    $namaa = ""; //membuat variable nama ayah ketika terjadi error
    $tahuna = ""; //membuat variable tahun ayah 
    $pendidikana = ""; //membuat variable pendidikan ayah 
    $pekerjaana = ""; //membuat variable pekerjaan ayah 
    $penghasilana = ""; //membuat variable penghasilan ayah 
    $kebutuhana = ""; //membuat variable kebutuhan ayah 
    $namai = ""; //membuat variable nama ibu 
    $tahuni = ""; //membuat variable tahun ibu
    $pendidikani = ""; //membuat variable pendidikan ibu 
    $pekerjaani = ""; //membuat variable pekerjaan ibu 
    $penghasilani = ""; //membuat variable penghasilan ibu 
    $kebutuhani = ""; //membuat variable kebutuhan ibu r

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["jenisp"])) //apabila jenis pendaftaran kosong
        {
            $error_jenisp = "Jenis pendaftaran tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong 
        {
            $jenisp = cek_input($_POST["jenisp"]); //tanggal akan dicheck
        }

        if (empty($_POST["tanggal"])) //apabila tanggal kosong
        {
            $error_tanggal = "Tanggal tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong 
        {
            $tanggal = cek_input($_POST["tanggal"]); //tanggal akan dicheck
        }

        if (empty($_POST["nis"])) //apabila nis kosong
        {
            $error_nis = "NIS tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong
        {
            $nis = cek_input ($_POST["nis"]); //nis akan dicheck
            if (!is_numeric($nis)) //apabila nis tidak berupa angka
            {
                $error_nis = 'NIS hanya boleh angka'; //pemberitahuan error
            }
        }

        if (empty($_POST["npu"])) //apabila npu kosong
        {
            $error_npu = "NPU tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong
        {
            $npu = cek_input ($_POST["npu"]); //npu akan dicheck
            if (!is_numeric($npu)) //apabila npu tidak berupa angka
            {
                $error_npu = 'NPU hanya boleh angka'; //pemberitahuan error
            }
        }

        if (empty($_POST["paud"])) //apabila pilihan pernah paud kosong
        {
            $error_paud = "Pilihan tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong 
        {
            $paud = cek_input($_POST["paud"]); //paud akan dicheck
        }

        if (empty($_POST["tk"])) //apabila pilihan pernah tk kosong
        {
            $error_tk = "Pilihan tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong 
        {
            $tk = cek_input($_POST["tk"]); //tk akan dicheck
        }

        if (empty($_POST["skhun"])) //apabila skhun kosong
        {
            $error_skhun = "SKHUN tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong
        {
            $skhun = cek_input ($_POST["skhun"]); //skhun akan dicheck
            if (!is_numeric($skhun)) //apabila skhun tidak berupa angka
            {
                $error_skhun = 'SKHUN hanya boleh angka'; //pemberitahuan error
            }
        }

        if (empty($_POST["ijazah"])) //apabila ijazah kosong
        {
            $error_ijazah = "Ijazah tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong
        {
            $ijazah = cek_input ($_POST["ijazah"]); //ijzah akan dicheck
            if (!is_numeric($ijazah)) //apabila npu tidak berupa angka
            {
                $error_ijazah = 'Ijazah hanya boleh angka'; //pemberitahuan error
            }
        }

        if (empty($_POST["hobi"])) //apabila hobi kosong
        {
            $error_hobi = "Hobi tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong 
        {
            $hobi = cek_input($_POST["hobi"]); //hobi akan dicheck
        }

        if (empty($_POST["citacita"])) //apabila cita-cita kosong
        {
            $error_citacita = "Cita-cita tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong 
        {
            $citacita = cek_input($_POST["citacita"]); //cita-cita akan dicheck
        }

        if (empty($_POST["nama"]))
        {
            $error_nama = "Nama tidak boleh kosong";
        }
        else
        {
            $nama = cek_input($_POST["nama"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $nama))
            {
                $error_nama = "Inputan hanya boleh huruf dan spasi";
            }
        }

        if (empty($_POST["jeniskelamin"])) //apabila jenis kelamin kosong
        {
            $error_jeniskelamin = "Jenis kelamin tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong 
        {
            $error_jeniskelamin = cek_input($_POST["jeniskelamin"]); //jenis kelamin akan dicheck
        }

        if (empty($_POST["nisn"])) //apabila nisn kosong
        {
            $error_nisn = "NIS tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong
        {
            $nisn = cek_input ($_POST["nisn"]); //nisn akan dicheck
            if (!is_numeric($nisn)) //apabila nisn tidak berupa angka
            {
                $error_nisn = 'NISN hanya boleh angka'; //pemberitahuan error
            }
        }

        if (empty($_POST["nik"])) //apabila nik kosong
        {
            $error_nik = "NIK tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong
        {
            $nik = cek_input ($_POST["nik"]); //nisn akan dicheck
            if (!is_numeric($nik)) //apabila nik tidak berupa angka
            {
                $error_nik = 'NIK hanya boleh angka'; //pemberitahuan error
            }
        }

        if (empty($_POST["tempatlhr"])) //apabila tempat lahir kosong
        {
            $error_tempatlhr = "Tempat kelahiran tidak boleh kosong"; //keterangan error
        }
        else //apabila tidak kosong 
        {
            $tempatlhr = cek_input($_POST["tempatlhr"]); //check input data
            if (!preg_match("/^[a-zA-Z ]*$/", $tempatlhr)) //apabila inputan mengandung selain spasi dan huruf
            {
                $error_tempatlhr = "Inputan hanya boleh huruf dan spasi";
            }
        }

        if (empty($_POST["tanggallhr"])) //apabila tanggal lahir kosong
        {
            $error_tanggallhr = "Tanggal lahir tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong
        {
            $tanggallhr = cek_input ($_POST["tanggallhr"]); //tanggal lahir akan dicheck
            if (!is_numeric($tanggallhr)) //apabila tanggal lahir tidak berupa angka
            {
                $error_tanggallhr = 'Tanggal lahir hanya boleh angka'; //pemberitahuan error
            }
        }

        if (empty($_POST["agama"])) //apabila agama kosong
        {
            $error_agama = "Agama tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong 
        {
            $error_agama = cek_input($_POST["agama"]); //agama akan dicheck
        }

        if (empty($_POST["kebutuhankhusus"])) //apabila kebutuhan kosong
        {
            $kebutuhankhusus = "kebutuhan tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong 
        {
            $error_kebutuhankhusus = cek_input($_POST["kebutuhankhusus"]); //kebutuhan akan dicheck
        }

        if (empty($_POST["alamat"])) //apabila alamat kosong
        {
            $error_alamat = "Alamat tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong 
        {
            $error_alamat = cek_input($_POST["alamat"]); //alamat akan dicheck
        }

        if (empty($_POST["rt"])) //apabila nisn kosong
        {
            $error_rt = "RT tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong
        {
            $rt = cek_input ($_POST["rt"]); //rt akan dicheck
            if (!is_numeric($rt)) //apabila rt tidak berupa angka
            {
                $error_rt = 'RT hanya boleh angka'; //pemberitahuan error
            }
        }

        if (empty($_POST["rw"])) //apabila nisn kosong
        {
            $error_rw = "RW tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong
        {
            $rw = cek_input ($_POST["rw"]); //rw akan dicheck
            if (!is_numeric($rw)) //apabila rw tidak berupa angka
            {
                $error_rw = 'RW hanya boleh angka'; //pemberitahuan error
            }
        }

        if (empty($_POST["namadusun"])) //apabila nama dusun kosong
        {
            $error_namadusun = "Nama dusun tidak boleh kosong"; //keterangan error
        }
        else //apabila tidak kosong 
        {
            $namadusun = cek_input($_POST["namadusun"]); //check input data
            if (!preg_match("/^[a-zA-Z ]*$/", $namadusun)) //apabila inputan mengandung selain spasi dan huruf
            {
                $error_namadusun = "Inputan hanya boleh huruf dan spasi";
            }
        }

        if (empty($_POST["namadesa"])) //apabila nama desa kosong
        {
            $error_namadesa = "Nama desa tidak boleh kosong"; //keterangan error
        }
        else //apabila tidak kosong 
        {
            $namadesa = cek_input($_POST["namadesa"]); //check input data
            if (!preg_match("/^[a-zA-Z ]*$/", $namadesa)) //apabila inputan mengandung selain spasi dan huruf
            {
                $error_namadesa = "Inputan hanya boleh huruf dan spasi";
            }
        }

        if (empty($_POST["kecamatan"])) //apabila kecamatan kosong
        {
            $error_kecamatan = "Kecamatan tidak boleh kosong"; //keterangan error
        }
        else //apabila tidak kosong 
        {
            $kecamatan = cek_input($_POST["kecamatan"]); //check input data
            if (!preg_match("/^[a-zA-Z ]*$/", $kecamatan)) //apabila inputan mengandung selain spasi dan huruf
            {
                $error_kecamatan = "Inputan hanya boleh huruf dan spasi";
            }
        }

        if (empty($_POST["kdpos"])) //apabila nisn kosong
        {
            $error_kdpos = "Kode pos tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong
        {
            $kdpos = cek_input ($_POST["kdpos"]); //kode pos akan dicheck
            if (!is_numeric($kdpos)) //apabila kdpos tidak berupa angka
            {
                $error_kdpos = 'Kode pos hanya boleh angka'; //pemberitahuan error
            }
        }

        if (empty($_POST["tempattinggal"])) //apabila alamat kosong
        {
            $error_tempattinggal = "Tempat tinggal tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong 
        {
            $error_tempattinggal = cek_input($_POST["tempattinggal"]); //tempat tinggal akan dicheck
        }

        if (empty($_POST["transportasi"])) //apabila alamat kosong
        {
            $error_transportasi = "Transportasi tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong 
        {
            $error_transportasi = cek_input($_POST["transportasi"]); //transportasi akan dicheck
        }

        if (empty($_POST["nomorhp"])) //apabila telp kosong
        {
            $error_nomorhp = "Nomor hp tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong
        {
            $nomorhp = cek_input ($_POST["nomorhp"]); //nomor hp akan dicheck
            if (!is_numeric($nomorhp)) //apabila nomor hp tidak berupa angka
            {
                $error_nomorhp = 'Nomor hp hanya boleh angka'; //pemberitahuan error
            }
        }

        if (empty($_POST["nomortelp"])) //apabila telp kosong
        {
            $error_nomortelp = "Nomor telepon tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong
        {
            $nomortelp = cek_input ($_POST["nomortelp"]); //nomor telepon akan dicheck
            if (!is_numeric($nomortelp)) //apabila nomor telepon tidak berupa angka
            {
                $error_nomortelp = 'Nomor telepon hanya boleh angka'; //pemberitahuan error
            }
        }

        if (empty($_POST["email"])) //apabila email kosong
        {
            $error_email = "Email tidak boleh kosong";//keterangan error
        }
        else //apabila email tidak kosong
        {
            $email = cek_input($_POST["email"]); //cek input
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) //apabila email tidak sesuai format
            {
                $error_email = "Format email invalid"; //keterangan error
            }
        }

        if (empty($_POST["penerima"])) //apabila penerima kosong
        {
            $error_penerima = "Data tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong 
        {
            $error_penerima = cek_input($_POST["penerima"]); //Data akan dicheck
        }

        if (empty($_POST["kewarganegaraan"])) //apabila kewarganegaraan kosong
        {
            $error_kewarganegaraan = "Data tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong 
        {
            $error_kewarganegaraan = cek_input($_POST["kewarganegaraan"]); //Data akan dicheck
        }
        
        if (empty($_POST["namaa"])) //apabila nama ayah kosong
        {
            $error_namaa = "Nama ayah tidak boleh kosong"; //keterangan error
        }
        else //apabila tidak kosong 
        {
            $namaa = cek_input($_POST["namaa"]); //check input data
            if (!preg_match("/^[a-zA-Z ]*$/", $namaa)) //apabila inputan mengandung selain spasi dan huruf
            {
                $error_namaa = "Inputan hanya boleh huruf dan spasi";
            }
        }

        if (empty($_POST["namai"])) //apabila nama ibu kosong
        {
            $error_namai = "Nama ibu tidak boleh kosong"; //keterangan error
        }
        else //apabila tidak kosong 
        {
            $namai = cek_input($_POST["nama"]); //check input data
            if (!preg_match("/^[a-zA-Z ]*$/", $namai)) //apabila inputan mengandung selain spasi dan huruf
            {
                $error_namai = "Inputan hanya boleh huruf dan spasi";
            }
        }

        if (empty($_POST["tahuna"])) //apabila tahun kosong
        {
            $error_tahuna = "Data tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong
        {
            $error_tahuna = cek_input ($_POST["tahuna"]); //nomor telepon akan dicheck
            if (!is_numeric($tahuna)) //apabila tahun tidak berupa angka
            {
                $error_tahuna = 'Data hanya boleh angka'; //pemberitahuan error
            }
        }

        if (empty($_POST["tahuni"])) //apabila tahun kosong
        {
            $error_tahuni = "Data tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong
        {
            $error_tahuni = cek_input ($_POST["tahuni"]); //nomor telepon akan dicheck
            if (!is_numeric($tahuni)) //apabila tahun tidak berupa angka
            {
                $error_tahuni = 'Data hanya boleh angka'; //pemberitahuan error
            }
        }

        if (empty($_POST["pendidikana"])) //apabila pendidikan ayah kosong
        {
            $error_pendidikana = "Data tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong 
        {
            $error_pendidikana = cek_input($_POST["pendidikana"]); //Data akan dicheck
        }

        if (empty($_POST["pendidikani"])) //apabila pendidikan ibu kosong
        {
            $error_pendidikani = "Data tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong 
        {
            $error_pendidikani = cek_input($_POST["pendidikani"]); //Data akan dicheck
        }

        if (empty($_POST["pekerjaana"])) //apabila pekerjaan ayah kosong
        {
            $error_pekerjaana = "Data tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong 
        {
            $error_pekerjaana = cek_input($_POST["penekerjaana"]); //Data akan dicheck
        }

        if (empty($_POST["pekerjaani"])) //apabila pekerjaan ibu kosong
        {
            $error_pekerjaani = "Data tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong 
        {
            $error_pekerjaani = cek_input($_POST["pekerjaani"]); //Data akan dicheck
        }

        if (empty($_POST["penghasilana"])) //apabila penghasilan ayah kosong
        {
            $error_penghasilana = "Data tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong 
        {
            $error_penghasilana = cek_input($_POST["penghasilana"]); //Data akan dicheck
        }

        if (empty($_POST["penghasilani"])) //apabila penghasilan ibu kosong
        {
            $error_penghasilani = "Data tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong 
        {
            $error_penghasilani = cek_input($_POST["penghasilani"]); //Data akan dicheck
        }
        
        if (empty($_POST["kebutuhana"])) //apabila kebutuhan ayah kosong
        {
            $error_kebutuhana = "Data tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong 
        {
            $error_kebutuhana = cek_input($_POST["kebutuhana"]); //Data akan dicheck
        }

        if (empty($_POST["kebutuhani"])) //apabila kebutuhan ibu kosong
        {
            $error_kebutuhani = "Data tidak boleh kosong"; //pemberitahuan error
        }
        else //apabila tidak kosong 
        {
            $error_kebutuhani = cek_input($_POST["kebutuhani"]); //Data akan dicheck
        }


    }
    //fungsi untuk melakukan cek data yang diinput
    function cek_input($data) {
        $data = trim($data); //menghapus spasi di awal dan akhir 
        $data = stripslashes($data); //menghilangkan tanda backlashes
        $data = htmlspecialchars($data); //mengubah beberapa character yang sudah ditentukan menjadi entitas HTML
        return $data;
    }

    ?>
    

    <div class="row">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                REGISTASI PESERTA DIDIK
            </div>
            <div class="card-body">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
            
            <div class="form-group row">
                <label for="jenisp" class="col-sm-2 col-form-label">Jenis pendaftaran</label>
                <div class="col-sm-10">
                    <select class="form-control" name="jenisp" id="jenisp"  placeholder="jenisp" value="<?php echo $jenisp; ?>">
                        <option>Siswa baru </option>
                        <option>Pindahan</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
                <div class="col-sm-10">
                    <input type="date" name="tanggal" class="form-control <?php echo($error_tanggal !="" ? "is-invalid" : ""); ?>" id="tanggal"
                    placeholder="tanggal" value="<?php echo $tanggal; ?>"><span class="warning"><?php echo $error_tanggal; ?></span>
                </div>
            </div>

            <div class="form-group row">
                <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                <div class="col-sm-10">
                    <input type="text" name="nis" class="form-control <?php echo($error_nis !="" ? "is-invalid" : ""); ?>" id="nis"
                    placeholder="nis" value="<?php echo $nis; ?>"><span class="warning"><?php echo $error_nis; ?></span>
                </div>
            </div>

            <div class="form-group row">
                <label for="npu" class="col-sm-2 col-form-label">NPU</label>
                <div class="col-sm-10">
                    <input type="text" name="npu" class="form-control <?php echo($error_npu !="" ? "is-invalid" : ""); ?>" id="npu"
                    placeholder="npu" value="<?php echo $npu; ?>"><span class="warning"><?php echo $error_npu; ?></span>
                </div>
            </div>

            <div class="form-group row">
                <label for="paud" class="col-sm-2 col-form-label">Apakah pernah PAUD?</label>
                <div class="col-sm-10">
                    <select class="form-control" name="paud" id="paud"  placeholder="paud" value="<?php echo $paud; ?>">
                        <option>Ya </option>
                        <option>Tidak</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="tk" class="col-sm-2 col-form-label">Apakah pernah TK?</label>
                <div class="col-sm-10">
                    <select class="form-control" name="tk" id="tk"  placeholder="tk" value="<?php echo $tk; ?>">
                        <option>Ya </option>
                        <option>Tidak</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="skhun" class="col-sm-2 col-form-label">SKHUN</label>
                <div class="col-sm-10">
                    <input type="text" name="skhun" class="form-control <?php echo($error_skhun !="" ? "is-invalid" : ""); ?>" id="skhun"
                    placeholder="skhun" value="<?php echo $skhun; ?>"><span class="warning"><?php echo $error_skhun; ?></span>
                </div>
            </div>

            <div class="form-group row">
                <label for="ijazah" class="col-sm-2 col-form-label">Nomor Ijazah</label>
                <div class="col-sm-10">
                    <input type="text" name="ijazah" class="form-control <?php echo($error_ijazah !="" ? "is-invalid" : ""); ?>" id="ijazah"
                    placeholder="ijazah" value="<?php echo $ijazah; ?>"><span class="warning"><?php echo $error_ijazah; ?></span>
                </div>
            </div>

            <div class="form-group row">
                <label for="hobi" class="col-sm-2 col-form-label">Hobi</label>
                <div class="col-sm-10">
                    <select class="form-control" name="hobi" id="hobi"  placeholder="hobi" value="<?php echo $hobi; ?>">
                        <option>Olah raga </option>
                        <option>Kesenian</option>
                        <option>Membaca</option>
                        <option>Menulis</option>
                        <option>Travelin</option>
                        <option>Lainnya</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="citacita" class="col-sm-2 col-form-label">Cita-cita</label>
                <div class="col-sm-10">
                    <select class="form-control" name="citacita" id="citacita"  placeholder="citacita" value="<?php echo $citacita; ?>">
                        <option>PNS </option>
                        <option>TNI/POLRI</option>
                        <option>Guru/Dosen</option>
                        <option>Dokter</option>
                        <option>Politikus</option>
                        <option>Wiraswasta</option>
                        <option>Seni/Lukis/Artis/Sejenis</option>
                        <option>Lainnya</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary"> Sign in</button>
                </div>
            </div>

            
        

        
    </form>

    </div>
    </div>
    </div>
    </div>

    <div class="row">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                DATA PRIBADI
            </div>
            <div class="card-body">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
            
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control <?php echo($error_nama !="" ? "is-invalid" : ""); ?>" id="nama"
                    placeholder="nama" value="<?php echo $nama; ?>"><span class="warning"><?php echo $error_nama; ?></span>
                </div>
            </div>

            <div class="form-group row">
                <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis kelamin</label>
                <div class="col-sm-10">
                    <select class="form-control" name="jeniskelamin" id="jeniskelamin"  placeholder="jeniskelamin" value="<?php echo $jeniskelamin; ?>">
                        <option>Laki-laki </option>
                        <option>Perempuan</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                <div class="col-sm-10">
                    <input type="text" name="nisn" class="form-control <?php echo($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn"
                    placeholder="nisn" value="<?php echo $nisn; ?>"><span class="warning"><?php echo $error_nisn; ?></span>
                </div>
            </div>

            <div class="form-group row">
                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10">
                    <input type="text" name="nik" class="form-control <?php echo($error_nik !="" ? "is-invalid" : ""); ?>" id="nik"
                    placeholder="nik" value="<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik; ?></span>
                </div>
            </div>

            <div class="form-group row">
                <label for="nisn" class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-10">
                    <input type="text" name="tempatlhr" class="form-control <?php echo($error_tempatlhr !="" ? "is-invalid" : ""); ?>" id="tempatlhr"
                    placeholder="tempatlhr" value="<?php echo $tempatlhr; ?>"><span class="warning"><?php echo $error_tempatlhr; ?></span>
                </div>
            </div>

            <div class="form-group row">
                <label for="tanggallhr" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" name="tanggallhr" class="form-control <?php echo($error_tanggallhr !="" ? "is-invalid" : ""); ?>" id="tanggallhr"
                    placeholder="tanggallhr" value="<?php echo $tanggallhr; ?>"><span class="warning"><?php echo $error_tanggallhr; ?></span>
                </div>
            </div>

            <div class="form-group row">
                <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                <div class="col-sm-10">
                    <input type="text" name="agama" class="form-control <?php echo($error_agama !="" ? "is-invalid" : ""); ?>" id="agama"
                    placeholder="agama" value="<?php echo $agama; ?>"><span class="warning"><?php echo $error_agama; ?></span>
                </div>
            </div>

            <div class="form-group row">
                <label for="kebutuhankhusus" class="col-sm-2 col-form-label">Berkebutuhan khusus</label>
                <div class="col-sm-10">
                    <select class="form-control" name="kebutuhankhusus" id="kebutuhankhusus"  placeholder="kebutuhankhusus" value="<?php echo $kebutuhankhusus; ?>">
                        <option>Tidak </option>
                        <option>Netra</option>
                        <option>Rungu</option>
                        <option>Grahita ringan</option>
                        <option>Grahita sedang</option>
                        <option>Daksa ringan</option>
                        <option>Daksa sedang</option>
                        <option>Laras</option>
                        <option>Wicara </option>
                        <option>Tuna ganda</option>
                        <option>Hiper aktif</option>
                        <option>Cerdas istimewa</option>
                        <option>Bakat istimewa</option>
                        <option>Kesulitan belajar</option>
                        <option>Narkoba</option>
                        <option>Indigo</option>
                        <option>Down Syndrome </option>
                        <option>Autis</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control <?php echo($error_alamat !="" ? "is-invalid" : ""); ?>" id="alamat"
                    placeholder="alamat" value="<?php echo $alamat; ?>"><span class="warning"><?php echo $error_alamat; ?></span>
                </div>
            </div>

            <div class="form-group row">
                <label for="rt" class="col-sm-2 col-form-label">RT</label>
                <div class="col-sm-10">
                    <input type="text" name="rt" class="form-control <?php echo($error_rt !="" ? "is-invalid" : ""); ?>" id="rt"
                    placeholder="rt" value="<?php echo $rt; ?>"><span class="warning"><?php echo $error_rt; ?></span>
                </div>
            </div>

            <div class="form-group row">
                <label for="rw" class="col-sm-2 col-form-label">RW</label>
                <div class="col-sm-10">
                    <input type="text" name="rw" class="form-control <?php echo($error_rw !="" ? "is-invalid" : ""); ?>" id="rw"
                    placeholder="rw" value="<?php echo $rw; ?>"><span class="warning"><?php echo $error_rw; ?></span>
                </div>
            </div>

            <div class="form-group row">
                <label for="namadusun" class="col-sm-2 col-form-label">Nama Dusun</label>
                <div class="col-sm-10">
                    <input type="text" name="namadusun" class="form-control <?php echo($error_namadusun !="" ? "is-invalid" : ""); ?>" id="namadusun"
                    placeholder="namadusun" value="<?php echo $namadusun; ?>"><span class="warning"><?php echo $error_namadusun; ?></span>
                </div>
            </div>

            <div class="form-group row">
                <label for="namadesa" class="col-sm-2 col-form-label">Nama Desa</label>
                <div class="col-sm-10">
                    <input type="text" name="namadesa" class="form-control <?php echo($error_namadesa !="" ? "is-invalid" : ""); ?>" id="namadesa"
                    placeholder="namadesa" value="<?php echo $namadesa; ?>"><span class="warning"><?php echo $error_namadesa; ?></span>
                </div>
            </div>

            <div class="form-group row">
                <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                <div class="col-sm-10">
                    <input type="text" name="kecamatan" class="form-control <?php echo($error_kecamatan !="" ? "is-invalid" : ""); ?>" id="kecamatan"
                    placeholder="kecamatan" value="<?php echo $kecamatan; ?>"><span class="warning"><?php echo $error_kecamatan; ?></span>
                </div>
            </div>

            <div class="form-group row">
                <label for="kspos" class="col-sm-2 col-form-label">Kode pos</label>
                <div class="col-sm-10">
                    <input type="text" name="kdpos" class="form-control <?php echo($error_kdpos !="" ? "is-invalid" : ""); ?>" id="kdpos"
                    placeholder="kdpos" value="<?php echo $kdpos; ?>"><span class="warning"><?php echo $error_kdpos; ?></span>
                </div>
            </div>

            <div class="form-group row">
                <label for="tempattingggal" class="col-sm-2 col-form-label">Tempat tinggal</label>
                <div class="col-sm-10">
                    <select class="form-control" name="tempattinggal" id="tempattinggal"  placeholder="tempattinggal" value="<?php echo $tempattinggal; ?>">
                        <option>Bersama orang tua </option>
                        <option>Wali</option>
                        <option>Kos</option>
                        <option>Asrama</option>
                        <option>Panti asuhan</option>
                        <option>Lainnya</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="transportasi" class="col-sm-2 col-form-label">Transportasi</label>
                <div class="col-sm-10">
                    <select class="form-control" name="transportasi" id="transportasi"  placeholder="transportasi" value="<?php echo $transportasi; ?>">
                        <option>Jalan kaki </option>
                        <option>Kendaraan pribadi</option>
                        <option>Kendaraan umum/angkot/pete-pete</option>
                        <option>Jemputan sekolah</option>
                        <option>Kereta api</option>
                        <option>Ojek</option>
                        <option>Andong/bendi/dokar/delman/becak</option>
                        <option>Perahu penyebrangan</option>
                        <option>Lainnya </option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="nomorhp" class="col-sm-2 col-form-label">Nomor hp</label>
                <div class="col-sm-10">
                    <input type="text" name="nomorhp" class="form-control <?php echo($error_nomorhp !="" ? "is-invalid" : ""); ?>" id="nomorhp"
                    placeholder="nomorhp" value="<?php echo $nomorhp; ?>"><span class="warning"><?php echo $nomorhp; ?></span>
                </div>
            </div>

            <div class="form-group row">
                <label for="nomortelp" class="col-sm-2 col-form-label">Nomor telp</label>
                <div class="col-sm-10">
                    <input type="text" name="nomortelp" class="form-control <?php echo($error_nomortelp !="" ? "is-invalid" : ""); ?>" id="nomortelp"
                    placeholder="nomortelp" value="<?php echo $nomortelp; ?>"><span class="warning"><?php echo $nomortelp; ?></span>
                </div>
            </div>

            <div class="form-group row">
                <label for="penerima" class="col-sm-2 col-form-label">Penerima KPS/PKH/KIP</label>
                <div class="col-sm-10">
                    <select class="form-control" name="penerima" id="penerima"  placeholder="penerima" value="<?php echo $penerima; ?>">
                        <option> Ya</option>
                        <option>Tidak</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="kewarganegaraan" class="col-sm-2 col-form-label">Warga negara</label>
                <div class="col-sm-10">
                    <select class="form-control" name="kewarganegaraan" id="kewarganegaraan"  placeholder="kewarganegaraan" value="<?php echo $kewarganegaraan; ?>">
                        <option> Indonesia (WNI) </option>
                        <option>Asing (WNA)</option>
                    </select>
                </div>
            </div>
            
    </form>

    </div>
    </div>
    </div>
    </div>

    <div class="row">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                DATA AYAH KANDUNG
            </div>
            <div class="card-body">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

            <div class="form-group row">
                <label for="namaa" class="col-sm-2 col-form-label">Nama ayah kandung </label>
                <div class="col-sm-10">
                    <input type="text" name="namaa" class="form-control <?php echo($error_namaa !="" ? "is-invalid" : ""); ?>" id="namaa"
                    placeholder="namaa" value="<?php echo $namaa; ?>"><span class="warning"><?php echo $error_namaa; ?></span>
                </div>
            </div>

            <div class="form-group row">
                <label for="tahuna" class="col-sm-2 col-form-label">Tahun lahir ayah </label>
                <div class="col-sm-10">
                    <input type="text" name="tahuna" class="form-control <?php echo($error_tahuna !="" ? "is-invalid" : ""); ?>" id="tahuna"
                    placeholder="tahuna" value="<?php echo $tahuna; ?>"><span class="warning"><?php echo $error_tahuna; ?></span>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="pendidikana" class="col-sm-2 col-form-label">Pendidikan ayah</label>
                <div class="col-sm-10">
                    <select class="form-control" name="pendidikana" id="pendidikana"  placeholder="pendidikana" value="<?php echo $pendidikana; ?>">
                        <option>Tidak sekolah </option>
                        <option>Putus</option>
                        <option>SD Sederajat</option>
                        <option>SMP Sederajat</option>
                        <option>SMA Sederajat</option>
                        <option>D1</option>
                        <option>D2</option>
                        <option>D3</option>
                        <option>D4/S1</option>
                        <option>S2</option>
                        <option>S3</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="pekerjaana" class="col-sm-2 col-form-label">Pekerjaan ayah</label>
                <div class="col-sm-10">
                    <select class="form-control" name="pekerjaana" id="pekerjaana"  placeholder="pekerjaaana" value="<?php echo $pekerjaana; ?>">
                        <option>Tidak bekerja </option>
                        <option>Nelayan</option>
                        <option>Petani</option>
                        <option>Peternak</option>
                        <option>PNS/TNI/POLRI</option>
                        <option>Karyawan swasta</option>
                        <option>Pedagang kecil</option>
                        <option>Pedagang besar</option>
                        <option>Wiraswasta</option>
                        <option>Wirausaha</option>
                        <option>Buruh</option>
                        <option>Pensiunan</option>
                        <option>Lain-lain</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="penghasilana" class="col-sm-2 col-form-label">Penghasilan ayah</label>
                <div class="col-sm-10">
                    <select class="form-control" name="penghasilana" id="penghasilana"  placeholder="penghasilana" value="<?php echo $penghasilana; ?>">
                        <option>Kurang dari 500.000 </option>
                        <option>500.000 - 999.000</option>
                        <option>1 juta - 1.999.999</option>
                        <option>2 juta - 4.999.999</option>
                        <option>5 juta - 20 juta</option>
                        <option>lebih dari 20 juta</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="kebutuhana" class="col-sm-2 col-form-label">Berkebutuhan khusus</label>
                <div class="col-sm-10">
                    <select class="form-control" name="kebutuhana" id="kebutuhana"  placeholder="kebutuhana" value="<?php echo $kebutuhana; ?>">
                        <option>Tidak </option>
                        <option>Netra</option>
                        <option>Rungu</option>
                        <option>Grahita ringan</option>
                        <option>Grahita sedang</option>
                        <option>Daksa ringan</option>
                        <option>Daksa sedang</option>
                        <option>Laras</option>
                        <option>Wicara </option>
                        <option>Tuna ganda</option>
                        <option>Hiper aktif</option>
                        <option>Cerdas istimewa</option>
                        <option>Bakat istimewa</option>
                        <option>Kesulitan belajar</option>
                        <option>Narkoba</option>
                        <option>Indigo</option>
                        <option>Down Syndrome </option>
                        <option>Autis</option>
                    </select>
                </div>
            </div>
            
    </form>

    </div>
    </div>
    </div>
    </div>


    <div class="row">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                DATA IBU KANDUNG
            </div>
            <div class="card-body">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

            <div class="form-group row">
                <label for="namai" class="col-sm-2 col-form-label">Nama ibu kandung </label>
                <div class="col-sm-10">
                    <input type="text" name="namai" class="form-control <?php echo($error_namai !="" ? "is-invalid" : ""); ?>" id="namai"
                    placeholder="namai" value="<?php echo $namai; ?>"><span class="warning"><?php echo $error_namai; ?></span>
                </div>
            </div>

            <div class="form-group row">
                <label for="tahuni" class="col-sm-2 col-form-label">Tahun lahir ibu </label>
                <div class="col-sm-10">
                    <input type="text" name="tahuni" class="form-control <?php echo($error_tahuni !="" ? "is-invalid" : ""); ?>" id="tahuni"
                    placeholder="tahuni" value="<?php echo $tahuni; ?>"><span class="warning"><?php echo $error_tahuni; ?></span>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="pendidikani" class="col-sm-2 col-form-label">Pendidikan ibu</label>
                <div class="col-sm-10">
                    <select class="form-control" name="pendidikani" id="pendidikani"  placeholder="pendidikani" value="<?php echo $pendidikani; ?>">
                        <option>Tidak sekolah </option>
                        <option>Putus</option>
                        <option>SD Sederajat</option>
                        <option>SMP Sederajat</option>
                        <option>SMA Sederajat</option>
                        <option>D1</option>
                        <option>D2</option>
                        <option>D3</option>
                        <option>D4/S1</option>
                        <option>S2</option>
                        <option>S3</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="pekerjaani" class="col-sm-2 col-form-label">Pekerjaan ibu</label>
                <div class="col-sm-10">
                    <select class="form-control" name="pekerjaani" id="pekerjaani"  placeholder="pekerjaaani" value="<?php echo $pekerjaani; ?>">
                        <option>Tidak bekerja </option>
                        <option>Nelayan</option>
                        <option>Petani</option>
                        <option>Peternak</option>
                        <option>PNS/TNI/POLRI</option>
                        <option>Karyawan swasta</option>
                        <option>Pedagang kecil</option>
                        <option>Pedagang besar</option>
                        <option>Wiraswasta</option>
                        <option>Wirausaha</option>
                        <option>Buruh</option>
                        <option>Pensiunan</option>
                        <option>Lain-lain</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="penghasilani" class="col-sm-2 col-form-label">Penghasilan ibu</label>
                <div class="col-sm-10">
                    <select class="form-control" name="penghasilani" id="penghasilani"  placeholder="penghasilani" value="<?php echo $penghasilani; ?>">
                        <option>Kurang dari 500.000 </option>
                        <option>500.000 - 999.000</option>
                        <option>1 juta - 1.999.999</option>
                        <option>2 juta - 4.999.999</option>
                        <option>5 juta - 20 juta</option>
                        <option>lebih dari 20 juta</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="kebutuhani" class="col-sm-2 col-form-label">Berkebutuhan khusus</label>
                <div class="col-sm-10">
                    <select class="form-control" name="kebutuhani" id="kebutuhani"  placeholder="kebutuhani" value="<?php echo $kebutuhani; ?>">
                        <option>Tidak </option>
                        <option>Netra</option>
                        <option>Rungu</option>
                        <option>Grahita ringan</option>
                        <option>Grahita sedang</option>
                        <option>Daksa ringan</option>
                        <option>Daksa sedang</option>
                        <option>Laras</option>
                        <option>Wicara </option>
                        <option>Tuna ganda</option>
                        <option>Hiper aktif</option>
                        <option>Cerdas istimewa</option>
                        <option>Bakat istimewa</option>
                        <option>Kesulitan belajar</option>
                        <option>Narkoba</option>
                        <option>Indigo</option>
                        <option>Down Syndrome </option>
                        <option>Autis</option>
                    </select>
                </div>
            </div>
            
    </form>

    </div>
    </div>
    </div>
    </div>







            

            
        

        
    </form>

    </div>
    </div>
    </div>
    </div>




</body>
</html>

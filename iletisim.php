<?php include 'header.php'; 
?>
<style>
 
</style>
<div class="container-fluid" style="background: linear-gradient(105deg, #121733 0%, #3f51b5 100%);">
    <div class="container" style="max-width: 1020px;">
        <header class="hurdaci-bg py-3">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-12">
                        <h1 class="display-4 text-white mt-5 mb-2">İletişim</h1>
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>
<div class="container-fluid bg-white p-2">
    <div class="container mt-5 bg-white">
        <div class="row">
            <div class="col-md-12 mb-5"></div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 text-center">
                    <h2 class="card-title h5 py-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope-open-fill text-primary" viewBox="0 0 16 16">
                            <path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z"></path>
                        </svg> Email Adresi</h2>
                    <div class="card-body">
                    <?php echo $iletisim_cek['iletisim_email'] ?></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 text-center">
                    <h2 class="card-title h5 py-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-telephone-fill text-primary" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                        </svg> Hurdaci Telefon Numarası</h2>
                    <div class="card-body">
                    <?php echo $iletisim_cek['iletisim_tel'] ?><br>
                    <?php echo $iletisim_cek['iletisim_tel2'] ?><br>
                    <?php echo $iletisim_cek['iletisim_tel3'] ?></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 text-center">
                    <h2 class="card-title h5 py-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-alt-fill text-primary" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                        </svg> Hizmet Bölgesi</h2>
                    <div class="card-body">
                    <?php echo $iletisim_cek['iletisim_hizmet_bolgesi'] ?></div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include 'footer.php'; ?>
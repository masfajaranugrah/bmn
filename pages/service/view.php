<!-- Web Company Profile "General Solutions"
**********************************************
* Developer    : Indra Styawantoro
* Company      : Indra Studio
* Release Date : 1 Januari 2017
* Website      : www.indrasatya.com
* E-mail       : indra.setyawantoro@gmail.com
* Phone        : +62-856-6991-9769
-->

<?php
// fungsi query untuk menampilkan data dari tabel service
$query = mysqli_query($mysqli, "SELECT * FROM is_service WHERE service_id='1'")
                                or die('Ada kesalahan pada query tampil data service : '.mysqli_error($mysqli));

$data = mysqli_fetch_assoc($query);
?>
<!-- Page Heading/Breadcrumbs -->
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <br><br>
                <div style="padding: 0 10px;text-align:justify"> 
                    <p style="margin-bottom:5px;font-size:20px"><?php echo $data['title']; ?></p>
                    <p><?php echo $data['content']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->

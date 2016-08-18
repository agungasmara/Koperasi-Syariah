<!--
/**
 * @Author: Rizki Mufrizal <mufrizalrizki@gmail.com>
 * @Date:   2016-08-17 12:18:47
 * @Last Modified by:   RizkiMufrizal
 * @Last Modified time: 2016-08-17 12:42:40
 */
-->

<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Admin</title>
        <?php $this->load->view('layout/CssLayout')?>
    </head>
    <body>

        <?php $this->load->view('layout/HeaderLayout')?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Data Angsuran Pembiayaan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <form method="post" action="<?php echo base_url(); ?>index.php/admin/AngsuranPembiayaanController/simpanAngsuranPembiayaan/<?php echo $this->uri->segment(4); ?>">

                        <div class="form-group">
                            <label for="datetimepicker">Tanggal Pembayaran Angsuran</label>
                            <input id="datetimepicker" name="tanggal_pembayaran_angsuran" class="form-control" placeholder="masukkan Tanggal Peminjaman anda">
                        </div>

                        <div class="form-group">
                            <label for="pembayaran_angsuran">Pembayaran Angsuran</label>
                            <input id="pembayaran_angsuran" type="number" name="pembayaran_angsuran" class="form-control" placeholder="masukkan pembayaran_angsuran anda">
                        </div>

                        <input type="hidden" name="<?php echo $name; ?>" value="<?php echo $hash; ?>" />
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="<?php echo base_url(); ?>index.php/admin/AngsuranPembiayaanController/index/<?php echo $this->uri->segment(4); ?>">
                            <button type="button" class="btn btn-warning">Batal</button>
                        </a>
                    </form>
                </div>
            </div>
        </div>

        <?php $this->load->view('layout/JsLayout')?>
        <script type="text/javascript">
            jQuery('#datetimepicker').datetimepicker({
                timepicker: false,
                mask: true,
                format: 'd/m/Y'
            });
        </script>
    </body>
</html>
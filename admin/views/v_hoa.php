
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <div class="row">
            <div class="col col-6">
              <i class="fa fa-table"></i> Danh sách hoa
            </div>
            <div class="col col-6">
              <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add" >Thêm hoa mới</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <?php require_once "./views/hoa/v_danh_sach_hoa.php"; ?>
          </div>
        </div>
        <?php require_once "./views/hoa/v_modal_them_hoa.php"; ?>
    <script src="public/js/ajax/ajax_delete_hoa.js"></script>
    <script src="public/js/input_file.js"></script>
    <script src="public/js/script_hien_thi_anh_add.js"></script>
    <script src="public/js/script_hien_thi_anh.js"></script>
    <?php 
        if (isset($_SESSION['thongBao'])) {
            $thongBao = $_SESSION['thongBao'];
            echo "<script>swal('$thongBao');</script>";
        }

        if (isset($_SESSION['thongBaoThanhCong'])) {
            echo ' <script>
                swal({
                    title: "Thành công!",
                    text: "'.$_SESSION['thongBaoThanhCong'].'!",
                    icon: "success"
                }).then(function() {
                    window.location = "hoa.php";
                });
                </script>'; 
        }
    ?>

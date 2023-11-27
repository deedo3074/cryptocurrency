<link rel="stylesheet" href="../../puligins/ionicons-2.0.1/css/ionicons.css">
<link rel="stylesheet" href="../../puligins/ionicons-2.0.1/css/ionicons.min.css">

<link rel="stylesheet" href="../../puligins/bootstrap-4.0.0-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../../puligins/datatable_bootstrap4/dataTables.bootstrap4.min.css">

<script src="../../puligins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../puligins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../puligins/datatable_bootstrap4/jquery-3.3.1.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../puligins/datatable_bootstrap4/jquery.dataTables.min.js"></script>
<script src="../../puligins/datatable_bootstrap4/dataTables.bootstrap4.min.js"></script>


<script src="../../puligins/sweetalert/dist/sweetalert2.all.min.js"></script>
<script src="../../puligins/jquery.js"></script>

<script src="../../puligins/js/jquery-3.5.1.min.js"></script>
<script src="../../puligins/dist/js/adminlte.min.js"></script>
<script src="../../puligins/js/form-validation.js"></script>
<script src="../../puligins/toastr-master/build/toastr.min.js"></script>

<script src="../../puligins/jquery-3.4.1.js"></script>
<script src="../../puligins/jquery.js"></script>
<script src="../../puligins/jquery-2.1.4.min.js"></script>
<!--  -->
<script src="../../puligins/data/jquery.dataTables.js"></script>
<!--  -->
<script src="../../puligins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../puligins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../puligins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../puligins/sweetalert2/package/dist/sweetalert2.all.js"></script>

<link rel="stylesheet" href="../../puligins/dist/css/adminlte.min.css">
<link rel="stylesheet" href="../../puligins/Ionicons/css/ionicons.css">
<link rel="stylesheet" href="../../puligins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="../../puligins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../puligins/toastr-master/build/toastr.min.css">
<link rel="stylesheet" href="../../puligins/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../../puligins/sweetalert2/package/dist/sweetalert2.min.css">

<!-- ຕົວໝຸນໃນທຸກໆໜ້າ -->
<!-- <link rel="stylesheet" href="../../dist/style.css">
<link rel="stylesheet" href="../dist/style.css">
<script src="../../dist/main.js"></script>
<script src="../dist/main.js"></script> -->

<!--  -->
<style>
    label {
        font-size: 15px;
    }

    body,
    i {
        font-family: "sans-serif";

    }
</style>


<script>
    function alertSuccess(massage, url) {
        $(function() {
            toastr.options.onHidden = function() {
                window.location.href = url;
            }
            toastr.info(massage, 'Successfully', {
                timeOut: 80
            })
        });
    };
</script>

<script>
    function alerterror(massage, url) {
        $(function() {
            toastr.options.onHidden = function() {
                window.location.href = url;
            }
            toastr.error(massage, 'Error', {
                timeOut: 80
            })
        });
    };
</script>

<script>
    function alert(massage, url) {
        $(function() {
            toastr.options.onHidden = function() {
                window.location.href = url;
            }
            toastr.error(massage, 'Error', {
                timeOut: 150
            })
        });
    };
</script>

<script>
    $(function() {
        $('.print').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href')
            Swal.fire({
                title: 'ຕ້ອງການ Print ຂໍ້ມູນ ຫຼື ບໍ່?',
                text: "ກົດ OK ເພື່ອຢືນຢັ່ງການ Print ",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: 'red',
                confirmButtonColor: 'blue',
            }).then((result) => {
                if (result.value) {
                    document.location.href = href;
                };
            });
        });
    });
</script>

<script>
    $(function() {
        $('.updatess').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href')
            Swal.fire({
                title: 'Are you sure you can reconver the data?',
                text: "Ok to confirm reconver ",
                icon: 'error',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: 'red',
                confirmButtonColor: 'blue',
            }).then((result) => {
                if (result.value) {
                    document.location.href = href;
                };
            });
        });
    });
</script>
<script>
    $(function() {
        $('.btndel').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href')
            Swal.fire({
                title: 'Are you sure to delete?',
                text: "Ok to confirm deletion",
                icon: 'error',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: 'red',
                confirmButtonColor: 'blue',
            }).then((result) => {
                if (result.value) {
                    document.location.href = href;
                };
            });
        });
    });
</script>

<script>
    $(function() {
        $('.edit').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href')
            Swal.fire({
                title: 'ທ່ານ ຕ້ອງການ ແກ້ໄຂຂໍ້ມູນ ຫຼື ບໍ່?',
                text: "ກົດ ok ເພື່ອຢືນຢັ່ງການແກ້ໄຂ",
                icon: 'success',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: 'red',
                confirmButtonColor: 'blue',
            }).then((result) => {
                if (result.value) {
                    document.location.href = href;
                };
            });
        });
    });
</script>



<script>
    $(function() {
        $('#data').DataTable();
    });
</script>
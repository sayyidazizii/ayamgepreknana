<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> <?php echo $page ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active" aria-current="page">
                <?php echo $page ?>
            </li>
        </ol>
    </div>
    <!-- Add Back button here, aligned to the right -->
    <div class="d-flex justify-content-end mb-4">
        <a title="Kembali" href="javascript:history.back()" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
    <!-- Row -->
    <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">
                    </h6>
                </div>
                <div class="container">
                    <form action="<?= base_url() ?>dashboard/menu/process-edit" method="post">
                        <table style="width: 100%">
                            <td><input type="text" required hidden name="id_menu" id="id_menu" class="form-control form-control-sm my-2 border-dark" value="<?php echo $id_menu ?>"></td>
                            <tr>
                                    <th>Menu</th>
                                     <td><input type=" text" name="menu" id="menu" class="form-control form-control-sm my-2 border-dark" value="<?php echo $menu->menu ?>" ></td>
                            </tr>
                            <tr>
                                    <th>Gambar</th>
                                    <td><input type=" text" name="image" id="image" class="form-control form-control-sm my-2 border-dark" value="<?php echo $menu->image ?>" ></td>
                            </tr>  
                            <tr>
                                    <th>Harga</th>
                                    <td><input type=" text" name="harga" id="harga" class="form-control form-control-sm my-2 border-dark" value="<?php echo $menu->harga ?>" ></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td><button title="Update" type="submit" class="btn btn-primary my-2">Update</button>
                                    <a type="reset" title="Batal" href="javascript:history.back()" class="btn btn-primary my-2">Batal</a>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Row-->
</div>
<!---Container Fluid-->
</div>

<script>
    function validateText(input) {
        input.value = input.value.replace(/[^A-Za-z\s]/g, '');
    }

    // function validateNumber(input) {
    //     input.value = input.value.replace(/\D/g, '');
    // }
</script>
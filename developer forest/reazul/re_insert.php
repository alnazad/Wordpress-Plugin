<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<?php
global $wpdb;
$table = $wpdb->prefix . "suppliers";
$data = $wpdb->get_results("select * from $table")
?>

<div class="container">
    <div class="row">
        <div class="col-12">
        <h1 style="text-align: center; background-color:aqua; padding: 10px; ">Supplier Payment</h1><br><br>
            <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" class="form-control">

                <input type="hidden" name="action" value="save_supplier">
                <!-- <input type="text" name="supplier_id" id=""><br><br> -->
                <select name="supplier_id" id="" class="form-control">
                    <option value="">select company Name</option>
                    <?php foreach ($data as $v) { ?>
                        <option value="<?php echo $v->id ?>"><?php echo $v->company_name ?></option>
                    <?php } ?>
                </select><br><br>
                <input type="text" name="amount" placeholder="amount" class="form-control"><br><br>
                <input type="text" name="method" placeholder="method" class="form-control"><br><br>
                <input type="date" name="date"><br><br>
                <input class="btn btn-primary" type="submit" value="submit" class="btn btn-info">
            </form>
        </div>
    </div>
</div>
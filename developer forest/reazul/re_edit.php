
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<?php 
global $wpdb;
$table = $wpdb->prefix . "supplier_payment";
$data=$wpdb->get_row("select * from $table where id=".$_GET['id']);
$table1 = $wpdb->prefix . "suppliers";
$data1 = $wpdb->get_results("select * from $table1")
?>

<div class="container">
    <div class="row">
        <div class="col-12">
        <h1 style="text-align: center; background-color:aqua; padding: 10px; ">Supplier Payment</h1><br><br>
<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" class="form-method">

    <input type="hidden" name="id" value="<?php echo $data->id ?>">
    <input type="hidden" name="action" value="update_suppliers">
    <!-- <input type="text" name="supplier_id" id=""><br><br> -->
    <select name="supplier_id" id="" class="form-method">
        <option value="">select company Name</option>
        <?php foreach($data1 as $v) {?>
        <option value="<?php echo $v->id ?>" <?php if($v->id==$data->supplier_id){echo "selected";} ?>><?php echo $v->company_name ?></option>
        <?php } ?>
    </select><br><br>
    <input type="text" name="amount" value="<?php echo $data->amount  ?>" class="form-method"><br><br>
    <input type="text" name="method" value="<?php echo $data->method ?>" class="form-method"><br><br>
    <input type="date" name="date"><br><br>
    <input class="btn btn-primary" type="submit" value="submit" class="btn btn-info">
</form>
        </div>
    </div>
</div>
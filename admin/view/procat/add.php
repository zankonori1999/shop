<?php 
    if(isset($_POST['add']))
    {
        $class->procat_add($_POST['data']);
        header("location:index.php?c=procat&a=list");
    }
?>
<header class="panel-heading">
    افزودن دسته بندی جدید

</header>
<div class="panel-body">
    <form role="form" action="" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">عنوان</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="عنوان را وارد کنید" name="data[title]">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">سرگروه</label>
            <select name="data[chid]" class="form-control m-bot15">
                <option value="0">سرگروه</option>
                <?php foreach($mainLists as $mainList): ?>
                <option value="<?php echo $mainList->id; ?>"><?php echo $mainList->title; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <button type="submit" class="btn btn-info" name="add">افزودن</button>
    </form>

</div>
<?php 
    if(isset($_POST['add']))
    {
        $class->pro_add($_POST['data'] , $_FILES);
        header("location:index.php?c=pro&a=list");
    }
?>
<header class="panel-heading">
    افزودن محصول  جدید

</header>
<div class="panel-body">
    <form role="form" action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">عنوان</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="عنوان را وارد کنید" name="data[title]">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">توضیحات</label>
            <textarea name="data[text]"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">قیمت</label>
                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="قیمت را وارد کنید" name="data[price]">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">تعداد</label>
            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="تعداد را وارد کنید" name="data[count]">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">سرگروه</label>
            <select name="data[catID]" class="form-control m-bot15">
                <?php foreach($procats as $mainList): ?>
                <option value="<?php echo $mainList->id; ?>"><?php echo $mainList->title; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">img1</label>
            <input type="file" class="form-control" id="exampleInputEmail1"  name="img1">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">img2</label>
            <input type="file" class="form-control" id="exampleInputEmail1"  name="img2">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">img3</label>
            <input type="file" class="form-control" id="exampleInputEmail1"  name="img3">
        </div>
        <button type="submit" class="btn btn-info" name="add">افزودن</button>
    </form>

</div>
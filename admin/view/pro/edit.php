<?php 
    if(isset($_POST['add']))
    {
        $class->pro_edit($_POST['data'] , $_FILES , $_GET['id']);
        header("location:index.php?c=pro&a=list");
    }
?>
<header class="panel-heading">
    ویرایش   <?php echo $details['title']; ?>

</header>
<div class="panel-body">
    <form role="form" action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">عنوان</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $details['title']; ?>" name="data[title]">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">توضیحات</label>
            <textarea name="data[text]"><?php echo $details['text']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">قیمت</label>
                <input type="number" class="form-control" id="exampleInputEmail1" value="<?php echo $details['price']; ?>" name="data[price]">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">تعداد</label>
            <input type="number" class="form-control" id="exampleInputEmail1" value="<?php echo $details['count']; ?>" name="data[count]">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">سرگروه</label>
            <select name="data[catID]" class="form-control m-bot15">
                <?php foreach($procats as $mainList): ?>
                <option value="<?php echo $mainList->id; ?>"  <?php if($details['catID'] == $mainList->id){echo " selected";   } ?>><?php echo $mainList->title; ?></option>
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
        <button type="submit" class="btn btn-info" name="add">ویرایش</button>
    </form>

</div>
<table class="table table-striped border-top dataTable" id="sample_1" aria-describedby="sample_1_info">
    <thead>
        <tr role="row">
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 100px;">ردیف</th>
            <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 200px;">عنوان</th>
            <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Points: activate to sort column ascending" style="width: 200px;">والد</th>
            <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Joined: activate to sort column ascending" style="width: 100px;"></th>
            <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Joined: activate to sort column ascending" style="width: 100px;"></th>
            <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Joined: activate to sort column ascending" style="width: 100px;"></th>
            <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Joined: activate to sort column ascending" style="width: 100px;"></th>
            <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Joined: activate to sort column ascending" style="width: 100px;"></th>
            <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Joined: activate to sort column ascending" style="width: 100px;"></th>
        </tr>
    </thead>
                                
    <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="gradeX odd">
        <?php foreach($Prolists as $list): ?>
            <tr>
                <td class=" "><?php echo $list->id; ?></td>
                <td class="hidden-phone "><?php echo $list->title; ?></td>
                <td class="hidden-phone "><?php echo $list->catID; ?></td>
                <td class="hidden-phone "><a href="<?php echo $list->img1; ?>"><img src="../<?php echo $list->img1; ?>" width="50px" alt="no pc seted"></a></td>
                <td class="hidden-phone "><a href="<?php echo $list->img2; ?>"><img src="../<?php echo $list->img2; ?>" width="50px" alt="no pc seted"></a></td>
                <td class="hidden-phone "><a href="<?php echo $list->img3; ?>"><img src="../<?php echo $list->img3; ?>" width="50px" alt="no pc seted"></a></td>
                <td class="hidden-phone "><span class="label label-warning"><a href="#">نمایش</a></span></td>
                <td class="hidden-phone "><span class="label label-success"><a href="index.php?c=pro&a=edit&id=<?php echo $list->id; ?>">ویرایش</a></span></td>
                <td class="hidden-phone "><span class="label label-danger"><a href="index.php?c=pro&a=delete&id=<?php echo $list->id; ?>">حذف</a></span></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
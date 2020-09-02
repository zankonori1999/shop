</div>
  <div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#"></a></li>
      </ul>
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Left Part Start -->
        <aside id="column-left" class="col-sm-3 hidden-xs">
          <h3 class="subtitle">دسته ها</h3>
          <div class="box-category">
            <ul id="cat_accordion">

            <?php foreach ( $procatList as $list): ?>
              <li><a href="index.php?c=pro&a=list&id=<?php echo $value->id; ?>"><?php echo $list->title; ?></a> <span class="down"></span>
                <ul>
                    <?php $subprocat = $ob->procats($list->id);
                            foreach($subprocat as $value):
                    ?>
                  <li><a href="index.php?c=pro&a=list&id=<?php echo $value->id; ?>"><?php echo $value->title; ?></a> <span class="down"></span>
                    <!-- <ul>
                      <li><a href="category.html">زیردسته ها</a></li>
                    </ul> -->
                  </li>
                            <?php endforeach; ?>
                </ul>
              </li>

            <?php endforeach; ?>

            </ul>
          </div>
          <h3 class="subtitle">پرفروش ها</h3>
          <div class="side-item">
<!--               
            <div class="product-thumb clearfix">
              <div class="image"><a href="product.html"><img src="image/product/apple_cinema_30-50x75.jpg" alt="تی شرت کتان مردانه" title="تی شرت کتان مردانه" class="img-responsive" /></a></div>
              <div class="caption">

                <h4><a href="product.html">تی شرت کتان مردانه</a></h4>
                <p class="price"><span class="price-new">110000 تومان</span> <span class="price-old">122000 تومان</span> <span class="saving">-10%</span></p>
              </div>
            </div> -->
            
          </div>
          <h3 class="subtitle">ویژه</h3>
          <div class="side-item">


            <!-- <div class="product-thumb clearfix">
              <div class="image"><a href="product.html"><img src="image/product/macbook_pro_1-50x75.jpg" alt=" کتاب آموزش باغبانی " title=" کتاب آموزش باغبانی " class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="product.html">کتاب آموزش باغبانی</a></h4>
                <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">120000 تومان</span> <span class="saving">-26%</span> </p>
              </div>
            </div> -->

            
          </div>
          <div class="banner owl-carousel">
            <div class="item"> <a href="#"><img src="image/banner/small-banner1-265x350.jpg" alt="small banner" class="img-responsive" /></a> </div>
            <div class="item"> <a href="#"><img src="image/banner/small-banner-265x350.jpg" alt="small banner1" class="img-responsive" /></a> </div>
          </div>
        </aside>
        <!--Left Part End -->
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
          <h1 class="title"><?php echo $prol['title']; ?></h1>
          
          <h3 class="subtitle">بهبود جستجو</h3>
          <div class="category-list row">
              
                <!-- <div class="col-sm-3">
          <ul class="list-item">
                        <li><a href="category.html">رومیزی (0)</a></li>
                        <li><a href="category.html">دوربین (0)</a></li>
                      </ul>
        </div>
                      </div> -->
          
          <div class="product-filter">
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <div class="btn-group">
                  <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>
                  <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="Grid"><i class="fa fa-th"></i></button>
                </div>
                <a href="#" id="compare-total">محصولات مقایسه (0)</a> </div>
              <div class="col-sm-2 text-right">
                <label class="control-label" for="input-sort">مرتب سازی :</label>
              </div>
              <div class="col-md-3 col-sm-2 text-right">
                <select id="input-sort" class="form-control col-sm-3">
                  <option value="" selected="selected">پیشفرض</option>
                  <option value="">نام (الف - ی)</option>
                  <option value="">نام (ی - الف)</option>
                  <option value="">قیمت (کم به زیاد)</option></option>
                  <option value="">قیمت (زیاد به کم)</option>
                  <option value="">امتیاز (بیشترین)</option>
                  <option value="">امتیاز (کمترین)</option>
                  <option value="">مدل (A - Z)</option>
                  <option value="">مدل (Z - A)</option>
                </select>
              </div>
              <div class="col-sm-1 text-right">
                <label class="control-label" for="input-limit">نمایش :</label>
              </div>
              <div class="col-sm-2 text-right">
                <select id="input-limit" class="form-control">
                  <option value="" selected="selected">20</option>
                  <option value="">25</option>
                  <option value="">50</option>
                  <option value="">75</option>
                  <option value="">100</option>
                </select>
              </div>
            </div>
          </div>
          <br />
          <div class="row products-category">
              <?php foreach($lists as $list): ?>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="index.php?c=pro&a=details&id=<?php echo $list->id; ?>"><img src="<?php echo $list->img1; ?>" alt="<?php echo $list->title; ?>" title="<?php echo $list->title; ?>" class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="product.html"><?php echo $list->title; ?></a></h4>
                    <p class="description">
                        <?php echo $list->text; ?>
                    </p>
                    <!-- <span class="price-old">120000 تومان</span>  -->
                    <!-- <span class="saving">-26%</span>  -->
                    <!-- <span class="price-tax">بدون مالیات : 90000 تومان</span>-->
                    <p class="price"> <span class="price-new"><?php echo $list->price; ?> تومان</span></p>
                  </div>
                  <div class="button-group">
                      <form action="index.php?c=basket&a=add&proid=<?php echo $list->id;?>" method="POST">
                        <button class="btn-primary" type="submit" onClick=""><span>افزودن به سبد</span></button>
                      </form>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی ها" onClick=""><i class="fa fa-heart"></i> <span>افزودن به علاقه مندی ها</span></button>
                      <button type="button" data-toggle="tooltip" title="مقایسه این محصول" onClick=""><i class="fa fa-exchange"></i> <span>مقایسه این محصول</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <?php endforeach; ?>
        </div>
        <!--Middle Part End -->
      </div>
    </div>
  </div>
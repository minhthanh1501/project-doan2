<div class="banner-black"></div>
<div class="container">
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <?php 
      if ($_SESSION['user']['role'] == 'seller') {  
    ?>
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?act=listProduct">Quản lý Sản phẩm</a>
      </li>
    </ul>
    <?php }else if ($_SESSION['user']['role'] == 'admin') {
      # code...
     ?>
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link active" href="index.php?act=listCategory">Quản lý danh mục</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="index.php?act=listProduct">Quản lý Sản phẩm</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="index.php?act=listUsers">Quản lý khách hàng</a>
      </li>
    </ul>
    <?php } ?>
  </nav>
</div>
<div class="container">
    <h1 style="text-align: center;">Danh sách danh mục</h1>
    <a href="index.php?act=adddm" title="">
        <button class="btn btn-success" type="submit">Thêm danh mục</button>
    </a>    
    <table class="table table-striped table-dark table-listcate">
        <thead>
            <tr class="bg-primary">
                <th style="width: 10%"></th>
                <th style="width: 10%">STT</th>
                <th style="width: 30%">Tên danh mục</th>
                <th style="width: 10%">loại</th>
                <th style="width: 10%">Created_at</th>
                <th style="width: 10%">Updated_at</th>
                <th style="width: 20%">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($load__danhmuc as $load) {
                    extract($load);
                    echo '  <tr>
                              <td scope="col"><input type="checkbox" name="" value=""></td>
                              <td scope="col">'.(++$index).'</td>
                              <td scope="col">'.$name.'</td>
                              <td scope="col">'.$types.'</td>
                              <td scope="col">'.$created_at.'</td>
                              <td scope="col">'.$updated_at.'</td>
                              <td>
                                 <a href="index.php?act=suadm&id='.$id.'" title="">
                                    <button class="btn btn-warning" type="submit">Sửa</button>
                                 </a>
                                 <a href="index.php?act=deletedm&id='.$id.'" title="">
                                    <button class="btn btn-danger" type="submit">Xóa</button>
                                 </a>
                              </td>
                            </tr>';
                }
             ?>
        </tbody>
    </table>
    <div class="page">
        <ul class="pagination">
          <?php
          for ($i=1; $i <= $pages; $i++) {
          ?>
          <li class=""><a href="index.php?act=listCategory&trang=<?= $i ?>"><?php echo $i ?></a></li>
          <?php } ?>
        </ul>
      </div>
</div>

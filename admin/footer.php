<div class="footer">
	<div class="footer-item">
		<h1 class="footer-heading">Về chúng tôi</h1>
		<div class="footer-content">
			<ul class="footer-content-ul">
				<li><a href="#" title="">Câu chuyện thương hiệu</a></li>
				<li><a href="#" title="">Tin tức</a></li>
				<li><a href="#" title="">Liên hệ</a></li>
				<li><a href="#" title="">Đôi cánh yêu thương</a></li>
			</ul>
		</div>
	</div>
	<div class="footer-item">
		<h1 class="footer-heading">Chính sách bán hàng</h1>
		<div class="footer-content">
			<ul class="footer-content-ul">
				<li><a href="#" title="">Chính sách đổi hàng</a></li>
				<li><a href="#" title="">Chính sách bảo hành</a></li>
				<li><a href="#" title="">Chính sách hội viên</a></li>
				<li><a href="#" title="">Chính sách giao nhận</a></li>
				<li><a href="#" title="">Hướng dẫn mua hàng</a></li>
				<li><a href="#" title="">Chính sách bảo mật</a></li>
			</ul>
		</div>
	</div>
	<div class="footer-item">
		<h1 class="footer-heading">Tư vấn</h1>
		<div class="footer-content">
			<ul class="footer-content-ul">
				<li><a href="#" title="">Tư vấn phong cách</a></li>
				<li><a href="#" title="">Tư vấn chọn size</a></li>
				<li><a href="#" title="">Hỏi đáp</a></li>
			</ul>
		</div>
	</div>
	<div class="footer-item">
		<h1 class="footer-heading">Kết nối với chúng tôi</h1>
		<div class="footer-content">
			<ul class="footer-content-ul">
				<li><a href="#" title="">Câu chuyện thương hiệu</a></li>
			</ul>
		</div>
	</div>
</div>
</div>
<!-- modal -->
<div class="modal-container js-modal-container">
<form action="index.php?act=login" method="POST" class="form__login js-form__login">
	<i class="form__login-close far fa-window-close js-close"></i>
	<h1 class="form__login-heading">Form Đăng nhập</h1><br>

	<div class="form__login-group">
		<label for="email"><i class="far fa-user"></i></label>
		<input class="group__input" type="text" name="email" id="email" value="" placeholder="Tên Email hoặc tài khoản">
	</div>

	<div class="form__login-group">
		<label for="password"><i class="fas fa-lock"></i></label>
		<input class="group__input" type="password" name="password" id="password" value="" placeholder="Mật khẩu">
		<div id="eye">
			<i class="far fa-eye"></i>
		</div>
	</div>
	<p>
		<?php (isset($thongbao['check']))? $thongbao['check']:"" ?>
	</p>

	<input type="submit" name="dangnhap" class="form__login-submit" value= "Đăng nhập">

	<div class="form__login-link">
		<span>Bạn chưa có tài khoản? Đăng ký<a href="index.php?act=register" title="">Tại đây</a></span>
	</div>
</form>
</div>
<!-- end modal -->

<!-- xử lí js -->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

<!-- hideshow password -->
<script type="text/javascript" src="../views/js/hideShowEye.js"></script>
<script type="text/javascript" src="../views/js/scroll.js"></script>

<!-- xử lí hover menu -->
<script type="text/javascript" src="../views/js/hoverMenu.js"></script>

<!-- xử lí modal -->
<script type="text/javascript" src="../views/js/modal.js"></script>

<!-- xử lí userSetting -->
<script type="text/javascript" src="../views/js/userSetting.js"></script>

</body>
</html>
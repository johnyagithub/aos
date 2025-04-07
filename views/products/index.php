<!DOCTYPE html>
<html lang="EN">

<head>

	<?php include('../layouts/inc-meta.php'); ?>

	<link rel="stylesheet" type="text/css" href="../../public/css/products.css">

</head>

<body>

	<!-- begin #header -->
	<header>
		<?php include('../layouts/inc-header.php'); ?>
	</header>
	<div id="firstbox"></div>
	<!-- end #header -->

	<!-- begin #content -->
	<div id="content" class="content">

		<section class="box-head">
			<div class="container">
				<h1 class="text-capitalize">products</h1>
				<img src="../../public/images/img-head-products.png" class="img-head">
			</div>
		</section>

		<section class="box-products py-5">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-4">
						<div class="b-sticky">

							<div class="box-filter mb-4">
								<form class="form-Search" action="#">
									<h6 class="px-2">ค้นหาสินค้า</h6>
									<div class="input-group rounded border mb-4">
										<input type="text" class="bg-white form-control pr-0" id="search" name="keyword" placeholder="ค้นหาสินค้าที่ต้องการ" autocomplete="off">
										<div class="input-group-append">
											<button class="btn px-3 py-0" type="submit">
												<i class="fa fa-search fs-20"></i>
											</button>
										</div>
									</div>

									<a data-toggle="collapse" href="#collapseProductType" role="button" aria-expanded="false" aria-controls="collapseExample" class="bg-white border-0 px-2 h6 list-group-item list-group-item-action">ประเภทสินค้า</a>
									<div class="collapse py-2 row no-gutters" id="collapseProductType">

										<div class="ProductType">
											<div class="row m-0 text-center">
												<a href="../products/" class="col-6 col-sm-4 col-md-3 col-lg-6 p-1">
													<div class="btn btn-outline-secondary rounded w-100 p-3 text-dark active">
														<img src="../../public/images/brand/byd.png" class="h-50px d-block mx-auto">
														BYD
													</div>
												</a>
												<a href="../products/" class="col-6 col-sm-4 col-md-3 col-lg-6 p-1">
													<div class="btn btn-outline-secondary rounded w-100 p-3 text-dark">
														<img src="../../public/images/brand/chevrolet.png" class="h-50px d-block mx-auto">
														CHEVROLET
													</div>
												</a>
												<a href="../products/" class="col-6 col-sm-4 col-md-3 col-lg-6 p-1">
													<div class="btn btn-outline-secondary rounded w-100 p-3 text-dark">
														<img src="../../public/images/brand/ford.png" class="h-50px d-block mx-auto">
														FORD
													</div>
												</a>
												<a href="../products/" class="col-6 col-sm-4 col-md-3 col-lg-6 p-1">
													<div class="btn btn-outline-secondary rounded w-100 p-3 text-dark">
														<img src="../../public/images/brand/gwm.png" class="h-50px d-block mx-auto">
														GWM
													</div>
												</a>
												<a href="../products/" class="col-6 col-sm-4 col-md-3 col-lg-6 p-1">
													<div class="btn btn-outline-secondary rounded w-100 p-3 text-dark">
														<img src="../../public/images/brand/honda.png" class="h-50px d-block mx-auto">
														HONDA
													</div>
												</a>
												<a href="../products/" class="col-6 col-sm-4 col-md-3 col-lg-6 p-1">
													<div class="btn btn-outline-secondary rounded w-100 p-3 text-dark">
														<img src="../../public/images/brand/hyundai.png" class="h-50px d-block mx-auto">
														HYUNDAI
													</div>
												</a>
												<a href="../products/" class="col-6 col-sm-4 col-md-3 col-lg-6 p-1">
													<div class="btn btn-outline-secondary rounded w-100 p-3 text-dark">
														<img src="../../public/images/brand/isuzu.png" class="h-50px d-block mx-auto">
														ISUZU
													</div>
												</a>
												<a href="../products/" class="col-6 col-sm-4 col-md-3 col-lg-6 p-1">
													<div class="btn btn-outline-secondary rounded w-100 p-3 text-dark">
														<img src="../../public/images/brand/mazda.png" class="h-50px d-block mx-auto">
														MAZDA
													</div>
												</a>
												<a href="../products/" class="col-6 col-sm-4 col-md-3 col-lg-6 p-1">
													<div class="btn btn-outline-secondary rounded w-100 p-3 text-dark">
														<img src="../../public/images/brand/mg.png" class="h-50px d-block mx-auto">
														MG
													</div>
												</a>
												<a href="../products/" class="col-6 col-sm-4 col-md-3 col-lg-6 p-1">
													<div class="btn btn-outline-secondary rounded w-100 p-3 text-dark">
														<img src="../../public/images/brand/mitsubishi.png" class="h-50px d-block mx-auto">
														MITSUBISHI
													</div>
												</a>
												<a href="../products/" class="col-6 col-sm-4 col-md-3 col-lg-6 p-1">
													<div class="btn btn-outline-secondary rounded w-100 p-3 text-dark">
														<img src="../../public/images/brand/nissan.png" class="h-50px d-block mx-auto">
														NISSAN
													</div>
												</a>
												<a href="../products/" class="col-6 col-sm-4 col-md-3 col-lg-6 p-1">
													<div class="btn btn-outline-secondary rounded w-100 p-3 text-dark">
														<img src="../../public/images/brand/subaru.png" class="h-50px d-block mx-auto">
														SUBARU
													</div>
												</a>
												<a href="../products/" class="col-6 col-sm-4 col-md-3 col-lg-6 p-1">
													<div class="btn btn-outline-secondary rounded w-100 p-3 text-dark">
														<img src="../../public/images/brand/suzuki.png" class="h-50px d-block mx-auto">
														SUZUKI
													</div>
												</a>
												<a href="../products/" class="col-6 col-sm-4 col-md-3 col-lg-6 p-1">
													<div class="btn btn-outline-secondary rounded w-100 p-3 text-dark">
														<img src="../../public/images/brand/toyota.png" class="h-50px d-block mx-auto">
														TOYOTA
													</div>
												</a>
											</div>
										</div>

									</div>

									<!-- <div class="form-row mt-2 p-1">
										<div class="col-12 mb-2">
											<select class="custom-select mr-sm-2">
												<option selected>รุ่น</option>
												<option value="1">Dolphin</option>
												<option value="2">ATTO3</option>
											</select>
										</div>
										<div class="col-6 mb-2">
											<select class="custom-select mr-sm-2">
												<option selected>ปี</option>
												<option value="1">2023</option>
												<option value="2">2025</option>
											</select>
										</div>
										<div class="col-6 mb-2">
											<select class="custom-select mr-sm-2">
												<option selected>สี</option>
												<option value="1">แดง</option>
												<option value="2">ดำ</option>
											</select>
										</div>
										<div class="col-12 mb-2">
											<button class="btn btn-primary w-100" type="submit">คันหา</button>
										</div>
									</div> -->
								</form>
							</div>

						</div>
					</div>
					<div class="col-xl-9 col-lg-8">
						<div class="pb-1 mt-2 d-block d-xl-flex justify-content-between align-items-center">
							<h5 class="py-3 mb-0">รายการสินค้าทั้งหมด จำนวน <span class="text-primary h3">40</span> รายการ</h5>
						</div>
						<form action="#" id="search_brand">
							<div class="form-row">
								<div class="col-12 col-sm mb-2">
									<select class="custom-select mr-sm-2">
										<option selected>รุ่น</option>
										<option value="1">Dolphin</option>
										<option value="2">ATTO3</option>
									</select>
								</div>
								<div class="col-6 col-sm mb-2">
									<select class="custom-select mr-sm-2">
										<option selected>ปี</option>
										<option value="1">2023</option>
										<option value="2">2025</option>
									</select>
								</div>
								<div class="col-6 col-sm mb-2">
									<select class="custom-select mr-sm-2">
										<option selected>สี</option>
										<option value="1">แดง</option>
										<option value="2">ดำ</option>
									</select>
								</div>
								<div class="col-12 col-sm-auto mb-2">
									<button class="btn btn-primary w-100" type="submit">คันหา</button>
								</div>
							</div>
						</form>

						<div class="row">

							<div class="card col-sm-4 col-6">
								<div class="card-body">
									<a href="../products/detail.php" class="text-dark">
										<div class="img mb-3">
											<img src="../../public/images/demo-products1.jpg" alt="" class="w-100">
										</div>
										<h5 class="text-line1 mb-0">Rear Cargo Tray</h5>
										<p class="text-line3">ถาดวางของท้ายรถ</p>
									</a>
								</div>
								<div class="card-footer">
									<p class="text-muted mb-0">BYD Dolphin 2023</p>
								</div>
							</div>
							<div class="card col-sm-4 col-6">
								<div class="card-body">
									<a href="../products/detail.php" class="text-dark">
										<div class="img mb-3">
											<img src="../../public/images/demo-products2.jpg" alt="" class="w-100">
										</div>
										<h5 class="text-line1 mb-0">Door Weather Guard</h5>
										<p class="text-line3">กันสาดข้างประตู</p>
									</a>
								</div>
								<div class="card-footer">
									<p class="text-muted mb-0">BYD Dolphin 2023</p>
								</div>
							</div>
							<div class="card col-sm-4 col-6">
								<div class="card-body">
									<a href="../products/detail.php" class="text-dark">
										<div class="img mb-3">
											<img src="../../public/images/demo-products3.jpg" alt="" class="w-100">
										</div>
										<h5 class="text-line1 mb-0">Rear Cargo Tray</h5>
										<p class="text-line3">ถาดวางของท้ายรถ</p>
									</a>
								</div>
								<div class="card-footer">
									<p class="text-muted mb-0">BYD ATTO3</p>
								</div>
							</div>
							<div class="card col-sm-4 col-6">
								<div class="card-body">
									<a href="../products/detail.php" class="text-dark">
										<div class="img mb-3">
											<img src="../../public/images/demo-products4.jpg" alt="" class="w-100">
										</div>
										<h5 class="text-line1 mb-0">Door Weather Guard</h5>
										<p class="text-line3">กันสาดข้างประตู</p>
									</a>
								</div>
								<div class="card-footer">
									<p class="text-muted mb-0">BYD ATTO3</p>
								</div>
							</div>
							<div class="card col-sm-4 col-6">
								<div class="card-body">
									<a href="../products/detail.php" class="text-dark">
										<div class="img mb-3">
											<img src="../../public/images/demo-products5.jpg" alt="" class="w-100">
										</div>
										<h5 class="text-line1 mb-0">Rear Cargo Tray</h5>
										<p class="text-line3">ถาดวางของท้ายรถ</p>
									</a>
								</div>
								<div class="card-footer">
									<p class="text-muted mb-0">MG ES 2023</p>
								</div>
							</div>
							<div class="card col-sm-4 col-6">
								<div class="card-body">
									<a href="../products/detail.php" class="text-dark">
										<div class="img mb-3">
											<img src="../../public/images/demo-products6.jpg" alt="" class="w-100">
										</div>
										<h5 class="text-line1 mb-0">Cargo Tray</h5>
										<p class="text-line3">ถาดวางของท้ายรถ</p>
									</a>
								</div>
								<div class="card-footer">
									<p class="text-muted mb-0">MG HS 2019</p>
								</div>
							</div>
							<div class="card col-sm-4 col-6">
								<div class="card-body">
									<a href="../products/detail.php" class="text-dark">
										<div class="img mb-3">
											<img src="../../public/images/demo-products7.jpg" alt="" class="w-100">
										</div>
										<h5 class="text-line1 mb-0">Door Handle Cover</h5>
										<p class="text-line3">ครอบมือจับประตู</p>
									</a>
								</div>
								<div class="card-footer">
									<p class="text-muted mb-0">MG HS 2019</p>
								</div>
							</div>
							<div class="card col-sm-4 col-6">
								<div class="card-body">
									<a href="../products/detail.php" class="text-dark">
										<div class="img mb-3">
											<img src="../../public/images/demo-products8.jpg" alt="" class="w-100">
										</div>
										<h5 class="text-line1 mb-0">Door Handle Inner</h5>
										<p class="text-line3">ถาดรองมือเปิดประตู</p>
									</a>
								</div>
								<div class="card-footer">
									<p class="text-muted mb-0">MG HS 2019</p>
								</div>
							</div>
							<div class="card col-sm-4 col-6">
								<div class="card-body">
									<a href="../products/detail.php" class="text-dark">
										<div class="img mb-3">
											<img src="../../public/images/demo-products9.jpg" alt="" class="w-100">
										</div>
										<h5 class="text-line1 mb-0">Tank Cover</h5>
										<p class="text-line3">ครอบฝาถังน้ำมัน</p>
									</a>
								</div>
								<div class="card-footer">
									<p class="text-muted mb-0">MG HS 2019</p>
								</div>
							</div>

							<span class="noProductList text-muted">ไม่มีรายการสินค้า</span>
						</div>

						<nav class="my-4" aria-label="Page navigation example">
							<ul class="pagination d-flex justify-content-end pt-3">
								<li class="page-item">
									<a class="page-link" href="#" rel="prev" aria-label="« Previous">‹</a>
								</li>
								<li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#" rel="next" aria-label="Next »">›</a>
								</li>
							</ul>
						</nav>

					</div>
				</div>
			</div>
		</section>

	</div>
	<!-- end #content -->

	<!-- begin #footer -->
	<footer>
		<?php include('../layouts/inc-footer.php'); ?>
	</footer>
	<!-- end #footer -->

	<?php include('../layouts/inc-script.php'); ?>

	<script type="text/javascript" src="../../public/js/products.js"></script>
</body>

</html>
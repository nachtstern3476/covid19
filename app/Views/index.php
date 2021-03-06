<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
	<title>COVID19 INFO</title>
</head>
<body>
	<header id="header" class="d-flex align-items-center">
		<div class="container d-flex align-items-center">
			<div class="logo me-auto">COVID19 INFO</div>
			<div class="toggle-button d-lg-none ">
				<input type="checkbox" id="toggle">
				<label for="toggle">
                    <i class="fas fa-bars"></i>
            	</label>
			</div>
			<nav class="d-none d-lg-block">
				<ul>
					<li><a href="#hero">Beranda</a></li>
					<li><a href="#covid-statistics">Data Covid</a></li>
					<li><a href="#hospital-list">Rujukan Covid</a></li>
					<li><a href="#prevention-info">Pencegahan</a></li>
					<li><a href="#vaksin-info">Vaksinasi</a></li>
					<li><a href="#faq">Faq</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<main>
		<section id="hero" class="d-flex flex-column justify-content-center py-4">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-7 align-self-center">
						<div class="content">
							<h3 class="text-center text-lg-start mb-2"><strong>Covid19 Info</strong></h3>
							<p>
								Kami menyediakan berbagai macam informasi yang berkaitan dengan Coronavirus Disease 2019 atau yang biasa disebut COVID-19. Mulai dari data yang terinfeksi, informasi tentang vaksin hingga cara pencegahannya.
							</p>
						</div>
					</div>
					<div class="col d-none d-lg-block">
						<img src="./assets/image/1.jpg">
					</div>
				</div>
			</div>
		</section>
		<section id="about" class="d-flex flex-column align-items-center py-4">
			<div class="container">
				<h3 class="text-center fw-bold mb-4">Tentang Covid 19</h3>
				<div class="row">
					<div class="col-12 col-md-6 mb-3 mb-md-0">
						<div class="content">
							<h4 class="mb-2">Apa itu Covid 19</h4>
							<p>
								Coronavirus Disease 2019 atau COVID-19 adalah penyakit baru yang dapat menyebabkan gangguan pernapasan dan radang paru. Penyakit ini disebabkan oleh infeksi Severe Acute Respiratory Syndrome Coronavirus 2 (SARS-CoV-2). Gejala klinis yang muncul beragam, mulai dari seperti gejala flu biasa (batuk, pilek, nyeri tenggorok, nyeri otot, nyeri kepala) sampai yang berkomplikasi berat (pneumonia atau sepsis).
							</p>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="content">
							<h4 class="mb-2">Bagaimana Covid 19 Menular</h4>
							<p>
								COVID-19 adalah penyakit baru dan para peneliti masih mempelajari bagaimana cara penularannya. Dari berbagai penelitian, metode penyebaran utama penyakit ini diduga adalah melalui droplet saluran pernapasan dan kontak dekat dengan penderita. Droplet merupakan partikel kecil dari mulut penderita yang dapat mengandung virus penyakit, yang dihasilkan pada saat batuk, bersin, atau berbicara. Droplet dapat melewati sampai jarak tertentu (biasanya 1 meter).
								Droplet bisa menempel di pakaian atau benda di sekitar penderita pada saat batuk atau bersin. Namun, partikel droplet cukup besar sehingga tidak akan bertahan atau mengendap di udara dalam waktu yang lama. Namun, masyarakat diwajibkan untuk menggunakan masker kain yang menutupi hidung dan mulut untuk mencegah penyebaran droplet.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="covid-statistics" class="d-flex flex-column justify-content-center py-4">
			<div class="container">
				<h3 class="text-center fw-bold mb-5">Data Penyebaran Covid 19</h3>
				<div class="provinsi mb-4">
					<select class="form-control" name="provinsi">
						<option selected="true" value="indonesia">-Seluruh Indonesia-</option>
						<option value="">Kalimantan</option>
					</select>
				</div>
				<div class="row row-cols-1 row-cols-md-2">
					<div class="col mb-4">
						<div class="card h-100">
		                    <div class="row g-0">
		                        <div class="col-3 card-icon align-self-center text-center">
		                            <i class="fas fa-plus"></i>
		                        </div>
		                        <div class="col-9">
		                            <div class="card-body px-0">
		                                <h5 class="card-title">Jumlah Positif</h5>
		                                <h2 class="positif-counter">100</h2>
		                            </div>
		                        </div>
		                    </div>
		                </div>
					</div>
					<div class="col mb-4">
						<div class="card h-100">
		                    <div class="row g-0">
		                        <div class="col-3 card-icon align-self-center text-center">
		                            <i class="fas fa-users text-success"></i>
		                        </div>
		                        <div class="col-9">
		                            <div class="card-body px-0">
		                                <h5 class="card-title">Jumlah Sembuh</h5>
		                                <h2 class="negatif-counter">100</h2>
		                            </div>
		                        </div>
		                    </div>
		                </div>
					</div>
					<div class="col mb-4">
						<div class="card h-100">
		                    <div class="row g-0">
		                        <div class="col-3 card-icon align-self-center text-center">
		                            <i class="fas fa-skull text-dark"></i>
		                        </div>
		                        <div class="col-9">
		                            <div class="card-body px-0">
		                                <h5 class="card-title">Jumlah Meninggal</h5>
		                                <h2 class="meninggal-counter">2003</h2>
		                            </div>
		                        </div>
		                    </div>
		                </div>
					</div>
				</div>
			</div>
		</section>
		<section id="hospital-list" class="d-flex flex-column justify-content-center py-4">
			<div class="container">
				<h3 class="text-center fw-bold mb-5">Rumah Sakit Rujukan</h3>
				<div class="provinsi mb-4">
					<select class="form-control" name="hospital">
						<option selected="true" value="">Pilih Provinsi</option>
						<option value="">Kalimantan</option>
					</select>
				</div>
				<div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No Telp</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>RS UMUM DAERAH DR. SOETOMO</td>
                            <td>JL. MAYJEND. PROF. DR. MOESTOPO NO. 6 - 8 SURABAYA, JAWA TIMUR</td>
                            <td>(031) 5501078</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
			</div>
		</section>
		<section id="prevention-info" class="d-flex flex-column justify-content-center py-4">
			<div class="container text-center">
				<h3 class="text-center fw-bold mb-2">Pencegahan Covid 19</h3>
				<p>Ada beberapa hal yang bisa dilakukan untuk mencegah dan juga menghentikan penyebaran covid 19</p>
				<img src="./assets/image/2.jpg">
			</div>
		</section>
		<section id="vaksin-info" class="d-flex flex-column justify-content-center py-4">
			<div class="container">
				<h3 class="text-center fw-bold mb-4">Vaksinasi</h3>
				<div class="row row-cols-1 row-cols-md-2">
					<div class="content mb-4">
						<div class="row row-cols-2 mb-3">
							<div class="col">
								<div class="card h-100">
		                            <div class="card-body">
		                                <h5 class="card-title">Vaksinasi I</h5>
		                                <h4>10021</h4>
		                            </div>
				                </div>
							</div>
							<div class="col">
								<div class="card h-100">
		                           	<div class="card-body">
		                               	<h5 class="card-title">Vaksinasi II</h5>
		                                <h4>10021</h4>
		                            </div>
				                </div>
							</div>
						</div>
						<p>Vaksinasi merupakan langkah yang penting untuk menghentikan penyebaran covid 19, yang bertujuan untuk membuat sistem kekebalan tubuh mengenali dan mampu melawan covid 19.
						</p>
						<p>Buat kamu yang belum vaksin kamu bisa mengisi form, supaya kami bisa mengabari kamu melalui email apabila waktu dan tempat vaksinasi sudah ditetapkan</p>
					</div>
					<div class="form-vaksinasi">
						<form>
							<div class="form-group mb-3" id="fieldNama">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" id="nama" required>
                            </div>
                            <div class="form-group mb-3" id="fieldNama">
                                <label for="kota">Kota Tinggal</label>
                                <input type="text" class="form-control" name="kota" id="kota" required>
                            </div>
                            <div class="form-group mb-3" id="fieldNama">
                                <label for="telp">No Telp</label>
                                <input type="text" class="form-control" name="telp" id="telp" required>
                            </div>
                            <div class="form-group mb-3" id="fieldNama">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary">Kirim</button>
						</form>

					</div>
				</div>
			</div>
		</section>
		<section id="faq" class="d-flex flex-column justify-content-center py-4">
			<div class="container">
				<h3 class="fw-bold mb-4">FAQ</h3>
				<div class="content">
					<div class="row flex-column justify-content-center align-items-stretch">
						<div class="col">
							<div class="accordion" id="faq-accordion">
							  	<div class="accordion-item">
							    	<h2 class="accordion-header" id="headingOne">
							      		<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							        	Accordion Item #1
								      	</button>
							    	</h2>
								    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faq-accordion">
								      	<div class="accordion-body">
								        	<strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
								      	</div>
								    </div>
							  	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="copyright slide-right">
						
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>

<script type="text/javascript" src="<?= base_url('assets/js/jquery.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</html>

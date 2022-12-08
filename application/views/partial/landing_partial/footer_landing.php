  <!-- footer -->
  <footer>
  	<!-- footer atas -->
  	<div class="container-fluid bg-dark text-light m-0 pt-4 pl-3">
  		<div class="row">
  			<div class="col col-12 col-md-3" data-aos="fade-up" data-aos-duration="800">
  				<h5 class="text-white font-weight-bold h6 mt-2">Apa itu MSI-KOST?</h5>
  				<p class="text-light smaller-text small">MSI-KOST adalah software aplikasi customer managemen
  					relationship (CRM)
  					untuk kos-kosan berbasis cloud (internet) sehingga memudahkan anda dalam mengelola bisnis.
  					Dirancang simpel
  					untuk orang awam, sehingga mudah digunakan, semudah menggunakan handphone. Saat ini MSI-KOST juga
  					sebagai
  					operator kos-kosan. Kami membantu klien yang ingin bisnis kos-kosan tapi tidak memiliki waktu dan
  					keahlian
  					yang memadai.</p>
  			</div>
  			<div class="col col-12 col-md-3" data-aos="fade-up" data-aos-duration="800">
  				<h5 class="text-white font-weight-bold h6 mt-2">Mengapa Rumah Kost Putri Bidadari Bergabung?</h5>
  				<p class="text-light smaller-text small">Aplikasi ini membantu pengelolaan dan pembukuan rumah kost.
  					Dapat
  					diakses kapan saja, dimana saja, dan mudah digunakan. Semua transaksi terlacak dan tercatat rapih.
  					Aplikasi
  					ini adalah solusi bagi pengelolaan rumah kost untuk lebih modern dan rapih</p>
  			</div>

  			<div class="col col-12 col-md-3 footer-atas" data-aos="fade-up" data-aos-duration="800">
  				<h5 class="text-light font-weight-bold h6 mt-2">Rumah <?= $info_kost['nama_kost'] ?></h5>
  				<p class="text-light smaller-text h6">
  					<i class="fas fa-map mr-1"></i> Jl. Soediono, Gebyaran
  				</p>
  				<p class="text-light smaller-text h6">
  					<i class="fas fa-phone-alt mr-1"></i> 085800776945
  				</p>
  				<p class="text-light smaller-text h6">
  					<i class="fas fa-envelope mr-1"></i> putribidadarikos@gmail.com
  				</p>
  			</div>
  		</div>
  		<div class="row footer-bawah pt-3 pl-3 mt-3">
  			<p class="text-muted">Powered by Syahrul MSI</p>
  		</div>
  	</div> <!-- akhir footer atas -->
  </footer>


  <!--        Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script src="<?= base_url('assets/js/script.js') ?>"></script>

  <script>

  	$(function () {
  		$(".jumbotron-atas").css({
  			"background-image": "url(<?= base_url('assets/img/'); echo $info_kost['foto_kost'] ?>)"
  		})
  	});

  	AOS.init();

  </script>
  </body>

  </html>

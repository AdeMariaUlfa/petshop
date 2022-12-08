<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/img/apple-icon.png'); ?>" />
<link rel="icon" type="image/png" href="<?= base_url('assets/img/favicon.png'); ?>" />

<title>
  PETSHOP
</title>

<!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

<!-- Nucleo Icons -->
<link href="<?= base_url('assets/css/nucleo-icons.css'); ?>" rel="stylesheet" />
<link href="<?= base_url('assets/css/nucleo-svg.css'); ?>" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link href="<?= base_url('assets/css/nucleo-svg.css'); ?>" rel="stylesheet" />
<!-- CSS Files -->
<link id="pagestyle" href="<?= base_url('assets/css/soft-design-system.css?v=1.0.7'); ?>" rel="stylesheet" />
</head>

<body class="index-page">
  <!-- Navbar -->
  <div class="container position-sticky z-index-sticky top-0"><div class="row"><div class="col-12">
<nav class="navbar navbar-expand-lg  blur blur-rounded top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
  <div class="container-fluid px-0">
    <a class="navbar-brand font-weight-bolder ms-sm-3" href="/">
    PETSHOP
    </a>
    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
      <ul class="navbar-nav navbar-nav-hover ms-lg-12 ps-lg-5 w-100">
        <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="/anjing" >
            Produk Anjing
          </a>
        </li>
        <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="/kucing" >
            Produk Kucing
          </a>
        </li>
        <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="/ikan" >
            Produk Ikan
          </a>
        </li>
        <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="/reptil">
            Produk Reptil
          </a>
        </li>
        <li class="nav-item ms-lg-auto">
          <a class="nav-link nav-link-icon me-2" href="<?= base_url('/login') ?> " target="_blank">
            <i class="fa fa-sign-in" aria-hidden="true"></i>
            <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Login Admin">Login</p>
          </a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
</div></div></div><br><br><br><br>

<section class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="mb-5">Produk Hewan Kucing</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain card-blog">
            <div class="card-image border-radius-lg position-relative">
              <a href="javascript:;">
                <img class="w-100 border-radius-lg move-on-hover shadow" src="https://blogger.googleusercontent.com/img/a/AVvXsEgbnwvMaU-I9nQo2gYncqkwA8N_m12XMXHoWEpgeJ8U2YCVZYvUJ0MJdYK3yX17DlY1UnozIXgi_ijYVSq2tpQX2EVjIPMNpjqPr0JLS6MWA2wrwozkQmj25nt9jUMsyfdW6yF7zsu7VIa89qvgnINLge_gkFg-0LDmLRMxnkoKj8q7cJAPOa1xwQ-W-Q=s1600">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-dark font-weight-bold">MAKANAN KUCING BOLT</a>
              </h5>
              <p>
                Harga : 46.000
              </p>
              <a href="javascript:;" class="text-info icon-move-right">Read More
                <i class="fas fa-arrow-right text-sm"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain card-blog">
            <div class="card-image border-radius-lg position-relative">
              <a href="javascript:;">
                <img class="w-100 border-radius-lg move-on-hover shadow" src="data:image/jpeg;base64,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">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-dark font-weight-bold">Kasur Kucing Anjing Tempat Tidur Besar	</a>
              </h5>
              <p>
                Harga : 125.000
              </p>
              <a href="javascript:;" class="text-info icon-move-right">Read More
                <i class="fas fa-arrow-right text-sm"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain card-blog">
            <div class="card-image border-radius-lg position-relative">
              <a href="javascript:;">
                <img class="w-100 border-radius-lg move-on-hover shadow" src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//92/MTA-6343750/indo_solution_kalung_collar_aksesoris_kucing_kitten_lonceng_bell_motif_paw_3_warna_-_abu-abu_full02_lc73624j.jpg">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-dark font-weight-bold">Indo Solution Lonceng Bell Motif Paw Kalung Aksesoris Kucing</a>
              </h5>
              <p>
                Harga : 10.600
              </p>
              <a href="javascript:;" class="text-info icon-move-right">Read More
                <i class="fas fa-arrow-right text-sm"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain card-blog">
            <div class="card-image border-radius-lg position-relative">
              <a href="javascript:;">
                <img class="w-100 border-radius-lg move-on-hover shadow" src="https://cf.shopee.co.id/file/c80a1d69abfa6a49c180c8c1490a6d09">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-dark font-weight-bold">OBAT CACING KUCING CAIR UNTUK KITTEN DAN DEWASA</a>
              </h5>
              <p>
                Harga : 29.400
              </p>
              <a href="javascript:;" class="text-info icon-move-right">Read More
                <i class="fas fa-arrow-right text-sm"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain card-blog">
            <div class="card-image border-radius-lg position-relative">
              <a href="javascript:;">
                <img class="w-100 border-radius-lg move-on-hover shadow" src="data:image/jpeg;base64,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">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-dark font-weight-bold">Susu Growsy Baby Cat Milk 20gr/Susu Anak Kucing Usia 0-2bulan	</a>
              </h5>
              <p>
                Harga : 3.300
              </p>
              <a href="javascript:;" class="text-info icon-move-right">Read More
                <i class="fas fa-arrow-right text-sm"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<footer class="footer py-5 bg-gradient-dark position-relative overflow-hidden">
<div class="container">
<div class="row">
<div class="col-lg-4 me-auto mb-lg-0 mb-4 text-lg-start text-center">
<h6 class="text-white font-weight-bolder text-uppercase mb-lg-4 mb-3">Petshop</h6>
<ul class="nav flex-row ms-n3 justify-content-lg-start justify-content-center mb-4 mt-sm-0">
<li class="nav-item">
<a class="nav-link text-white opacity-8" href="/anjing" target="_blank">
Produk Anjing
</a>
</li>
<li class="nav-item">
<a class="nav-link text-white opacity-8" href="/kucing" target="_blank">
Produk Kucing
</a>
</li>
<li class="nav-item">
<a class="nav-link text-white opacity-8" href="/ikan" target="_blank">
Produk Ikan
</a>
</li>
<li class="nav-item">
<a class="nav-link text-white opacity-8" href="/reptil" target="_blank">
Produk Reptil
</a>
</li>
</ul>
<p class="text-sm text-white opacity-8 mb-0">
Copyright © <script>
              document.write(new Date().getFullYear())
            </script>
</p>
</div>
<div class="col-lg-6 ms-auto text-lg-end text-center">
<p class="mb-5 text-lg text-white font-weight-bold">
Dengan kualitas produk yang tinggi hewan peliharaan anda akan menjadi senang dan bahagia.
</p>
<a href="" target="_blank" class="text-white me-xl-4 me-4 opacity-5">
<span class="fab fa-instagram" aria-hidden="true"></span>
</a>
<a href="" target="_blank" class="text-white me-xl-4 me-4 opacity-5">
<span class="fab fa-twitter" aria-hidden="true"></span>
</a>
<a href="" target="_blank" class="text-white me-xl-4 me-4 opacity-5">
<span class="fab fa-facebook" aria-hidden="true"></span>
</a>
</a>
</div>
</div>
</div>
</footer>

<script src="<?= base_url('assets/js/core/popper.min.js'); ?>" type="text/javascript"></script>
  <script src="<?= base_url('assets/js/core/bootstrap.min.js'); ?>" type="text/javascript"></script>
  <script src="<?= base_url('assets/js/plugins/perfect-scrollbar.min.js'); ?>"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="<?= base_url('assets/js/plugins/parallax.min.js'); ?>"></script>
  <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="<?= base_url('assets/js/soft-design-system.min.js?v=1.0.7');?>" type="text/javascript"></script>
<script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
<script src="<?= base_url('assets/js/soft-design-system.min.js?v=1.0.9'); ?>" type="text/javascript"></script>
<script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon="{&quot;rayId&quot;:&quot;77193b192dc56bb7&quot;,&quot;version&quot;:&quot;2022.11.3&quot;,&quot;r&quot;:1,&quot;token&quot;:&quot;1b7cbb72744b40c580f8633c6b62637e&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>

<script>
var returnedSuggestion = ''
		let editor, doc, cursor, line, pos
		document.addEventListener("keydown", (event) => {
		setTimeout(()=>{
			editor = event.target.closest('.CodeMirror');
			if (editor){
				doc = editor.CodeMirror.getDoc()
				cursor = doc.getCursor()
				line = doc.getLine(cursor.line)
				pos = {line: cursor.line, ch: line.length}
				if (event.key == "Enter"){
					var query = doc.getRange({ line: Math.max(0,cursor.line-10), ch: 0 }, { line: cursor.line, ch: 0 })
					window.postMessage({source: 'getSuggestion', payload: { data: query } } )
					//displayGrey(query)
				}
				else if (event.key == "ArrowRight"){
					acceptTab(returnedSuggestion)
				}
			}
		}, 0)
		})

		function acceptTab(text){
		if (suggestionDisplayed){
			doc.replaceRange(text, pos)
			suggestionDisplayed = false
		}
		}
		function displayGrey(text){
		var element = document.createElement('span')
		element.innerText = text
		element.style = 'color:grey'
		var lineIndex = pos.line;
		editor.getElementsByClassName('CodeMirror-line')[lineIndex].appendChild(element)
		suggestionDisplayed = true
		}
		window.addEventListener('message', (event)=>{
		if (event.source !== window ) return
		if (event.data.source == 'return'){
			returnedSuggestion = event.data.payload.data
			displayGrey(event.data.payload.data)
		}
		})
	
</script>

</body>
</html>
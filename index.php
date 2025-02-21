<?php
$judul_section = "This Is Yogyakarta";
$subjudul_section = "Kaistimewaan Ngayogyakarto";
$deskripsi_section = "Jelajahi keindahan Yogyakarta secara virtual hanya di sini";
$gambar_section = "jogja.PNG";
$gambar_alt = "Tugu Jogja";
$cta_text = "Find out more";
$cta_link = "https://pariwisata.jogjakota.go.id/";
$judul_form = "Daftarkan diri anda untuk mengikuti keseruanya";
$placeholder_email = "Input Your Email";
$button_text = "Selanjutnya";
$placeholder_nama = "Input Your Name";
$placeholder_alamat = "Input Your Address";
$placeholder_hp = "Input Your Phone Number";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1 {
            color: rgb(25, 136, 116);
            background-color: rgb(11, 52, 65);
            color: rgb(178, 202, 22);
            padding: 15px;
            display: inline-block;
            font-size: 3vw;
            border-radius: 10px;
            transition: color 0.5s;
        }

        p {
            color: rgb(178, 202, 22);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    
    <main>
        <section id="home">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 pt-4 text-center text-lg-start">
                        <h5><?php echo $subjudul_section; ?></h5>
                        <h1 id="judul"><?php echo $judul_section; ?></h1>
                        <p><?php echo $deskripsi_section; ?></p>
                        <button type="button" class="btn btn-warning" id="findOutMore">
                            <?php echo $cta_text; ?>
                        </button>
                    </div>
                    <div class="col-12 col-lg-6 text-center">
                        <img src="<?php echo $gambar_section; ?>" class="img-fluid" alt="<?php echo $gambar_alt; ?>">
                    </div>
                </div>
            </div>
        </section>
    </main>

    <section>
        <div class="container my-4">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <div class="card card-subscribe p-4">
                        <h4 class="text-center"><?php echo $judul_form; ?></h4>
                        <form action="proses.php" method="POST">
                            <div class="mb-3 pt-3">
                                <input type="email" name="email" class="form-control" placeholder="<?php echo $placeholder_email; ?>" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="nama" class="form-control" placeholder="<?php echo $placeholder_nama; ?>" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="alamat" class="form-control" placeholder="<?php echo $placeholder_alamat; ?>" required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" name="hp" class="form-control" placeholder="<?php echo $placeholder_hp; ?>" required>
                            </div>
                            <button class="btn btn-primary" type="submit"><?php echo $button_text; ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        let tombol = document.getElementById("findOutMore");
        tombol.addEventListener("click", function() {
            alert("Selamat datang di Yogyakarta! Temukan lebih banyak keindahan di sini.");
            setTimeout(function() {
                window.location.href = "<?php echo $cta_link; ?>";
            }, 2000);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

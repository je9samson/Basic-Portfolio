<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,700;1,400&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header-nav">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-custom">
                <div class="container-fluid justify-content-center">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-3"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item mx-3"><a class="nav-link" href="resume.php">Resume</a></li>
                        <li class="nav-item mx-3"><a class="nav-link" href="gallery.php">Gallery</a></li>
                        <li class="nav-item mx-3"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    
    <section id="gallery" class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="gallery-card">
                        <img src="ojt7.jpeg" alt="Gallery Image 1" class="card-img-top" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this.src)">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="gallery-card">
                       <img src="ojt8.jpeg" alt="Gallery Image 1" class="card-img-top" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this.src)">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="gallery-card">
                        <img src="ojt9.jpeg" alt="Gallery Image 1" class="card-img-top" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this.src)">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="gallery-card">
                       <img src="ojt10.jpeg" alt="Gallery Image 1" class="card-img-top" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this.src)">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="gallery-card">
                        <img src="ojt1.jpg" alt="Gallery Image 1" class="card-img-top" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this.src)">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="gallery-card">
                      <img src="ojt2.jpg" alt="Gallery Image 1" class="card-img-top" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this.src)">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="gallery-card">
                     <img src="ojt5.jpeg" alt="Gallery Image 1" class="card-img-top" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this.src)">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="gallery-card">
                        <img src="ojt4.jpeg" alt="Gallery Image 1" class="card-img-top" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this.src)">
                    </div>
                </div>
            </div>
        </div>
        <!-- Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-dark">
      <div class="modal-header border-0">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <img id="modalImage" src="" alt="Expanded Image" class="img-fluid rounded">
      </div>
    </div>
  </div>
</div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
  function showImage(src) {
    document.getElementById("modalImage").src = src;
  }
</script>
</body>
</html>
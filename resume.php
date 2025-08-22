<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Details</title>
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
    
   <section id="profile" class="py-4">
  <div class="container">
    <div class="card mb-4">
      <div class="card-body">
   <div class="row" style="min-height: 100vh;">
          <!-- Left Column: Text Content -->
           <div class="col-md-8 text-white d-flex flex-column justify-content-start">
            <h3 class="mb-3">Samson, Jenine Rose Q.</h3>
            <p>007 Sitio Batibot Brgy. San Jose, Concepcion, Tarlac</p>
            <p>Contact No.: <span style="color:#007bff; cursor:pointer;" onclick="copyText('+63 951 322-2237')">+63 951 322-2237</span> <span id="phone-copied" style="color:green; display:none;">Copied!</span></p>
            <p>Email: <span style="color:#007bff; cursor:pointer;" onclick="copyText('jensamson.1426@gmail.com')">jensamson.1426@gmail.com</span> <span id="email-copied" style="color:green; display:none;">Copied!</span></p>

     
  <h5 class="mt-4">Objectives</h5>
  <ul>
    <li>To help the company grow and achieve its goals.</li>
    <li>To be promoted through my specialized skills with the company’s guidance.</li>
  </ul>

  <h5 class="mt-4">Personal Data</h5>
  <ul>
    <li>Date of Birth: October 26, 2004</li>
    <li>Place of Birth: Concepcion, Tarlac</li>
    <li>Civil Status: Single</li>
    <li>Nationality: Filipino</li>
  </ul>

  <h5 class="mt-4">Educational Background</h5>
  <ul>
    <li><strong>Tertiary:</strong> Concepcion Holy Cross College, Inc.</li>
    <span style="color: white;">Bachelor of Science in Computer Science</span></li><br>
    <span style="color: white;">Juan Luna St., Brgy. Minane Concepcion, Tarlac</span></li><br><br>

    <li><strong>Secondary:</strong> Benigno S. Aquino National High School (2017–2021)</li>
     <span style="color: white;">San Nicolas Poblacion, Concepcion, Tarlac</span></li><br>
     <span style="color: white;">A.Y.: 2017-2023</span></li><br><br>

    <li><strong>Primary:</strong> Concepcion South Elementary School (2011–2017)</li>
    <span style="color: white;">Plaridel, Concepcion, Tarlac</span></li><br>
    <span style="color: white;">A.Y.: 2011-2017</span></li> 
  </ul>

  <h5 class="mt-4">Work Experiences</h5>
  <ul>
    <li><strong>Intern (OJT):</strong> Municipality of Concepcion(LGU)<br>
        <span style="color: white;">September 02, 2024 – November 12, 2024</span></li><br>
    <li><strong>Intern (OJT):</strong> Concepcion Holy Cross College Inc.<br>
        <span style="color: white;">January 28, 2025 – April 29, 2025</span></li>
  </ul>

  <h5 class="mt-4">Skills</h5>
   <ul class="list-group list-group-flush bg-transparent">
                    <li class="list-group-item bg-transparent">Leadership</li>
                    <li class="list-group-item bg-transparent">Team Player</li>
                    <li class="list-group-item bg-transparent">Encoding</li>
                    <li class="list-group-item bg-transparent">Communicating</li>
                    <li class="list-group-item bg-transparent">Open to Training</li>
    </ul>
</div>
          <!-- Right Column: Profile Image -->
          <div class="col-md-4 d-flex justify-content-center align-items-start">
    <img src="budang.jpeg" alt="Jenine Rose Q. Samson" style="max-width: 220px;">
  </div>

</div>

      </div>
    </div>
  </div>
</section>

<script>
  function copyText(value) {
    navigator.clipboard.writeText(value).then(() => {
      document.getElementById("phone-copied").style.display = "none";
      document.getElementById("email-copied").style.display = "none";

      if (value.includes("@")) {
        document.getElementById("email-copied").style.display = "inline";
      } else {
        document.getElementById("phone-copied").style.display = "inline";
      }

      setTimeout(() => {
        document.getElementById("phone-copied").style.display = "none";
        document.getElementById("email-copied").style.display = "none";
      }, 1500);
    });
  }
</script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
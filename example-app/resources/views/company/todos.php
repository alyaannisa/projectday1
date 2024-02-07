<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>To Do</title>
        <meta content name="description">
        <meta content name="keywords">

        <!-- Favicons -->
        <link href="assets/img/store.png" rel="icon">
        <link href="assets/img/store.png" rel="store-icon">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css"
            rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
            rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css"
            rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/main.css" rel="stylesheet">
    </head>

    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="header d-flex align-items-center">

            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
              <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/store.png" alt="">
                <h1 style="color:#84726c">Aya<span>.</span></h1>
              </a>
              <nav id="navbar" class="navbar">
                <ul>
                  <li><a href="index.html" style="color:#84726c">Home</a></li>
                  <li><a href="contact-us.html" style="color:#84726c">Contact Us</a></li>
                  <li><a href="about-us.html" style="color:#84726c">About Us</a></li>
                  <li><a href="portfolio.html" style="color:#84726c">Portfolio</a></li>
                  <li><a href="blog-aya.html" style="color:#84726c">Blog</a></li>
                  <li><a href="todos.html" style="color:#84726c">Todos</a></li>
                </ul>
              </nav><!-- .navbar -->
        
              <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
              <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        
            </div>
          </header><!-- End Header -->

          <!-- End Header -->

        <!-- Todos Section -->
        <div class="container mt-4">
            <h2 class="section-heading text-uppercase mt-4 mb-4" style="padding-top: 80px;">To Do List</h2>
            <form id="todo-form" class="mb-3">
                <div class="form-group">
                    <input type="text" id="new-task" class="form-control" placeholder="Write here" required>
                </div>
                <button type="button" class="btn btn-primary mt-4" onclick="addTask()" style="background-color: #84726c;">Add</button>
            </form>
    
            <ul id="todo-list" class="list-group"></ul>
        </div>

        <script>
            function addTask() {
                var newTaskInput = document.getElementById("new-task");
                var taskText = newTaskInput.value;
    
                if (taskText.trim() === "") {
                    alert("Tasks tidak boleh kosong!");
                    return;
                }
    
                var todoList = document.getElementById("todo-list");
    
                var li = document.createElement("li");
                li.className = "list-group-item align-items-center";
                
                var checkbox = document.createElement("input");
                checkbox.type = "checkbox";
                checkbox.className = "mr-2";
                checkbox.addEventListener("change", function() {
                    removeTask(li);
                });
    
                var taskLabel = document.createElement("label");
                taskLabel.textContent = taskText;
    
                li.appendChild(checkbox);
                li.appendChild(taskLabel);
                todoList.appendChild(li);

                var tasks = JSON.parse(localStorage.getItem("tasks")) || [];
                tasks.push(taskText);
                localStorage.setItem("tasks", JSON.stringify(tasks));
    
                // Reset input field
                newTaskInput.value = "";
            }
    
            function removeTask(taskElement) {
                var todoList = document.getElementById("todo-list");
                todoList.removeChild(taskElement);
            }
        </script>


        <!-- Footer Section -->
        <footer id="footer" class="footer" style="color:#84726c">
            <div class="container">
              <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                  <a href="index.html" class="logo d-flex align-items-center">
                    <span style="color:#84726c">Aya</span>
                  </a>
                  <p style="color:#84726c">Jasa Ritel yang awalnya dibuka coba-coba dan modal
                    Bismillah, sekarang Alhamdulillah sukses hehe</p>
                  <div class="social-links d-flex mt-4">
                    <a href="#" class="twitter" style="color:#84726c"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook" style="color:#84726c"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram" style="color:#84726c"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin" style="color:#84726c"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
        
                <div class="col-lg-2 col-6 footer-links">
                  <h4 style="color:#84726c">Our Branch</h4>
                  <ul>
                    <li><a href="#" style="color:#84726c">Jakarta</a></li>
                    <li><a href="#" style="color:#84726c">Jogja</a></li>
                    <li><a href="#" style="color:#84726c">Bandung</a></li>
                    <li><a href="#" style="color:#84726c">Makassar</a></li>
                    <li><a href="#" style="color:#84726c">Surabaya</a></li>
                  </ul>
                </div>
        
                <div class="col-lg-2 col-6 footer-links">
                  <h4 style="color:#84726c">Our Services</h4>
                  <ul>
                    <li><a href="#" style="color:#84726c">Supermarket</a></li>
                    <li><a href="#" style="color:#84726c">Minimarket</a></li>
                    <li><a href="#" style="color:#84726c">Marketmarket</a></li>
                  </ul>
                </div>
        
                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                  <h4 style="color:#84726c">Contact Us</h4>
                  <p style="color:#84726c">
                    JL. Jalan ke Bandung <br>
                    Jawa Barat 535022<br>
                    Indonesia <br><br>
                    <strong>Phone:</strong> +62 899 1234 8765<br>
                    <strong>Email:</strong> kasihpaham@abangkuh.com<br>
                  </p>
        
                </div>
        
              </div>
            </div>

            <div class="container mt-4">
                <div class="cr">
                    &copy; <strong><span>2020 Hacktiv8 Workshop Program Rimdani
                            Alya Annisa</span></strong>.
                </div>
            </div>

        </footer>
        <a href="#"
            class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <div id="preloader"></div>

        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <script src="assets/js/main.js"></script>

    </body>

</html>
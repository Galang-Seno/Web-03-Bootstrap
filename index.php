<!DOCTYPE html>
<html>

<head>

    <!-- Header 1 Komitmen pada higenis 
     tambah video-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="Asset/jquerry/jquery-3.7.1.js"></script>
    <script src="Asset/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="Asset/Css/bootstrap.min.css">
    <link rel="stylesheet" href="Asset/Css/Mystyle.css">
    <link rel="icon" href="Asset/img/photo.jpg" type="image/jpeg" sizes="16x16"
        class="rounded-circle img-thumbnail border-radius: 100%;">
    <title>Hygea</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }
    </style>
</head>

<body>



    <header> <!-- Header 1 -->
        <div class="container-fluid p-4 text-white rpl-body" style="height: 300px;" id="Home">
            <div class="row">
                <div class="col-md-4 py-2">
                    <img src="Asset/img/photo.jpg" class="rounded-circle img-thumbnail" alt="LOGO" width="170"
                        height="170">
                </div>
                <div class="col-md-4 py-5">
                    <h1 class="text-center">Welcome to Hygea Website</h1>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container-fluid p-1 bg-dark menu-bar" id="fixedmenu">
            <ul class="nav">
                <li class="nav-item color-white">
                    <a class="nav-link" href="#Home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Hygea">Hygea</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Tesabot">Tesabot</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Komitmen">Komitmen</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#Contact">Contact us</a>
                </li>
            </ul>
        </div>
    </section>


    <section> <!-- Navigation  1 -->
        <div class="container-fluid p-5" id="Hygea">
            <?php
            include 'init_koneksi_db.php';
            ?>
            <div class="row">
                <div class="col-md-7 py-5">
                    <?php
                    
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
}
                     print "<h1>Apa sih itu Hygea?</h1>";
                    
                     print "<p>Hygea adalah kelompok pengembangan produk dari Politeknik Atmi yang beranggotakan Galang, Lino,
                        dan Stevent. Kelompok ini memiliki mentor, yaitu Mas Bowo, Sang penunggang Ai. Hygea awalnya
                        dibentuk untuk mewakili Politeknik Atmi dalam kompetisi yang diselenggarakan oleh PLN berjudul
                        Electrochic di Kota Surakarta. Selain Hygea, terdapat juga kelompok dari Atmi yang ikut
                        kompetisi Electrochic
                        yaitu
                        RePlastic Groub, Sehingga dari kampus sendiri Hygea sudah memiliki saingan. Salah satu project
                        hygea adalah Tesabot, yang ada di gambar sebelah kanan ini</p>";
                        ?>
                </div>
                <div class="col-md-4 py-5">
                    <img class="w-100" src="Asset/img/TPSS.png" alt="gambar alam">
                </div>
            </div>
        </div>
    </section>


    <section> <!-- Navigation  2 -->
        <div class="container-fluid p-5  text-white text-bg-secondary" id="Tesabot">
            <div class="col-md-">
                <center>

                    <img src="Asset/img/Tps.png" class="rounded img-thumbnail" alt="Cinque Terre">
                </center>
            </div>

<br>
<br>
            <div class="row">
                <div class="col p-3 py-5 conte" style="border-radius: 10%;">
                    <h2 class="text-center">Tesabot</h2>
                    <p>
                        Tesabot adalah singkatan dari Tempat Sampah Robot, yaitu sebuah alat yang digunakan untuk
                        mengelompokkan
                        jenis - jenis sampah. Alat ini dirancang untuk membantu masyarakat
                        dalam mengelola sampah dengan lebih efisien, sehingga lebih mudah untuk daur ulang. Tesabot
                        dilengkapi dengan Ai yang dapat
                        membedakan
                        jenis sampah melalui kamera, lalu memisahkannya secara otomatis. Dengan adanya Tesabot,
                        diharapkan masyarakat
                        akan lebih sadar mengenai pentingnya pengelompokan sampah, untuk mendukung gerakan daur ulang.
                    </p>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="col p-3 py-5 conte" style="border-radius: 10%;">
                    <h2 class="text-center">Fitur</h2>
                    <p>
                        Tesabot memiliki beberapa fitur unggulan, antara lain:
                    <ul>
                        <li>Sistem pemisahan sampah otomatis</li>
                        <li>Layar untuk menampilkan jenis - jenis sampah</li>
                        <li>Penghematan waktu dan tenaga dalam pengelolaan sampah</li>
                        <li>Sarana edukasi jenis - jenis sampah</li>
                    </ul>
                    Dengan fitur-fitur tersebut, Tesabot diharapkan dapat meningkatkan efisiensi dan efektivitas
                    dalam pengelolaan sampah.
                    </p>
                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="col p-3 py-5 conte " style="border-radius: 10%;">
                    <h2 class="text-center">Manfaat</h2>
                    <p>
                        Manfaat dari Tesabot adalah menjadi sarana edukasi bagi masyarakat mengenai jenis-jenis sampah,
                        dan pentingnya pemilahan sampah. Harapannya, dengan adanya Tesabot, masyarakat menjadi lebih
                        sadar akan pentingnya pemilahan sampah untuk mendukung proses daur ulang sampah
                    </p>
                </div>

            </div>
        </div>


    </section>

    <section>
        <div class="container-fluid p-5  text-white contw" id="Komitmen">
            <h2 class="text-center" >Komitmen Hygea</h2>
            <div class="row">
                <div class="col p-10 py-5">
                    <h2 class="text-ya"></h2>
                    <p>
                        Hygea berasal dari nama dewi kesehatan dalam mitologi Yunani, yaitu Hygeia. Nama ini dipilih
                        karena Hygea memiliki komitmen untuk menjaga kesehatan lingkungan, khususnya dalam pengelolaan
                        sampah. Hygea berkomitmen untuk menciptakan inovasi yang dapat membantu masyarakat dalam
                        mengelola sampah dengan lebih baik, sehingga dapat mendukung gerakan daur ulang, dan menjaga
                        kebersihan lingkungan.
                    </p>
                </div>
                <div class="col p-2 py-5">
                    <canvas id="myChart" style="width:100%;max-width:700px" class="text-white text-end"></canvas>

                </div>


            </div>
    </section>
    <section>
        <footer class="col p-5 text-white bg-dark" id="Contact">
            <h1 class="text-center text-white">Contact us</h1>
            <br>
            <div class="container1">
                <form action="" class="text-dark">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">

                    <label for="lname">Email</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                    <label for="country">Continent</label>
                    <select id="country" name="country">
                        <option value="Asia">Asia</option>
                        <option value="North America">North America</option>
                        <option value="South America">South America</option>
                        <option value="Europe">Europe</option>
                        <option value="Afrika">Afrika</option>
                        <option value="Antartica">Antartica</option>
                    </select>

                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write something.."
                        style="height:200px"></textarea>

                    <input type="submit" value="Submit">
                </form>
            </div>
            <br>
            <div class="container2 text-center">
                <p>© 2025 Hygea. All rights reserved.</p>
                <p>Contact us : galangsenonatakusuma@gmail.com<a href="mailto:"></a>
                </p>
            </div>

    </section>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener("click", function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute("href"));
                if (target) {
                    target.scrollIntoView({
                        behavior: "smooth"
                    });
                }
            });
        });
    </script>

    <script>
        const xValues = ["1 Bulan", "2 Bulan ", "3 Bulan ", "4 Bulan", "5 Bulan"];
        const yValues = [10, 25, 50, 80, 150];
        const barColors = ["brown", "green", "blue", "orange", "red"];

        new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                legend: { display: false },
                scales: {
                    xAxes: [{
                        ticks: {
                            fontColor: "orange",
                            fontSize: 16,
                            fontFamily: "Arial",
                            fontStyle: "alternate",
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            fontColor: "red",
                            fontSize: 16,
                            fontFamily: "Arial",
                            fontStyle: "bold",
                            beginAtZero: true
                        }
                    }]
                },

                title: {
                    display: true,

                    text: "Berat sampah yang dipilah setelah Tesabot digunakan (Kg)",
                    fontSize: 20,
                    fontFamily: "Arial",
                    fontstyle: "bold",
                    lineheight: 1.5,

                    fontColor: "yellow",
                }
            }
        });
    </script>
    <script>
        //<![CDATA[
        const nav = document.querySelector('#fixedmenu');
        const navTop = nav.offsetTop;

        function stickyNavigation() {
            console.log('navTop = ' + navTop);
            console.log('scrollY = ' + window.scrollY);

            if (window.scrollY >= navTop) {
                document.body.classList.add('fixed-nav');
            } else {
                document.body.classList.remove('fixed-nav');
            }
        }

        window.addEventListener('scroll', stickyNavigation);
        //]]>
    </script>
</body>

</html>
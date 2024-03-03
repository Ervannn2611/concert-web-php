<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>

    <?php
        include("navbar.php");
    ?>
    
       
    <!-- rekomendasi konser section  -->

    <div class="container py-5">
        <h3 class="text-center mb-4">Detail Konser </h3>
        <div class="row" style="row-gap:20px">

          <div class="col-8">
            <img src="./assets/img/concert.jpg" class="rounded" style="width: 100%" alt="">
          </div>
          
          <div class="col-4">
            
            <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Konser Black Pink</h5>
                  <p class="card-text m-0 "><i class="bx bxs-calendar me-2 text-primary"></i> 12 Januari 2024</p>
                  <p class="card-text m-0 "><i class='bx bxs-time me-2 text-primary'></i> 19:00-01:00 WIB</p>
                  <p class="card-text m-0"> <i class='bx bxs-map me-2 text-primary'></i> Cibinong City Mall, Bogor</p>
              </div>    
            </div>
          </div>

          <div class="col-8">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description-tab-pane" type="button" role="tab" aria-controls="description-tab-pane" aria-selected="true">Deskripsi</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="ticket-tab" data-bs-toggle="tab" data-bs-target="#ticket-tab-pane" type="button" role="tab" aria-controls="ticket-tab-pane" aria-selected="false">Tiket</button>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active p-4" id="description-tab-pane" role="tabpanel" aria-labelledby="description-tab" tabindex="0">
                  <p>Dear Family Lover, Kalo kamu baca ini, artinya kamu diundang ke IMOBY Indonesia Mom & Baby, Kids Expo. Event Promo bermanfaat dan terlengkap dengan discount fantastic di Bandung! Explore 250+ brands Mom, Baby, Kids dengan berbagai diskon up to 90%, buy 1 get 1, free gift, dapatkan promo gledek di morning attack pkl 10.00 pagi setiap harinya! Yuk datang lebih pagi rasakan keseruannya. Ada juga Hiburan menarik meet & greet bersama guest star mom artist dan masih banyak lagi hiburan lainnya. Yang sama pentingnya Moms and Dads dapat mengikuti berbagai Talkshow edukatif dengan ahli professional dibidangnya! Pssst bakal banyak DOORPRIZE dengan hadiah utama Motor, emas, TV, dan berbagai Giveaway! Yuk, beli ticketsnya sekarang dan ajak semua bunda bunda bestie-mu buat seru-seruan bareng di IMOBY Bandung. Let’s have the best shopping times with much benefits on hands! Only at IMOBY Bandung Friday-Sunday, 1 - 3 Maret 2023 di Sudirman Grand Ballroom. See you Familia!  Informasi selengkapnya, Follow Instagram : imoby.mye</p>

                  <h5 class="mb-3">Syarat & Ketentuan</h5>

                  <ol>
                    <li>Jam operasional pameran: 09.00 - 21.00</li>
                    <li> 1 Tiket berlaku untuk 1 orang 1 hari</li>
                    <li>Free entrance untuk lansia berumur >65 tahun dan anak-anak di bawah 10 tahun</li>
                    <li>Dilarang membawa benda tajam/ senjata api/ barang-barang yang dapat membahayakan.</li>
                    <li>Tiket yang telah dibeli tidak dapat ditukar/ dikembalikan dengan alasan apapun</li>
                  </ol>
              </div>

              <div class="tab-pane fade" id="ticket-tab-pane" role="tabpanel" aria-labelledby="ticket-tab" tabindex="0">

              </div>
            </div>

          </div>
        </div>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
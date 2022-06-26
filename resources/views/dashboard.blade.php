@extends('template')
@section('content')
    <div class="content">
        <h2>Segmentasi Pelanggan Dengan RFM Model dan Algoritma K-Means Pada Penjualan Baja PT. X</h2>
        {{-- <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header ">
            <h5 class="card-title">Users Behavior</h5>
            <p class="card-category">24 Hours performance</p>
          </div>
          <div class="card-body ">
            <canvas id=chartHours width="400" height="100"></canvas>
          </div>
          <div class="card-footer ">
            <hr>
            <div class="stats">
              <i class="fa fa-history"></i> Updated 3 minutes ago
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card ">
          <div class="card-header ">
            <h5 class="card-title">Email Statistics</h5>
            <p class="card-category">Last Campaign Performance</p>
          </div>
          <div class="card-body ">
            <canvas id="chartEmail"></canvas>
          </div>
          <div class="card-footer ">
            <div class="legend">
              <i class="fa fa-circle text-primary"></i> Opened
              <i class="fa fa-circle text-warning"></i> Read
              <i class="fa fa-circle text-danger"></i> Deleted
              <i class="fa fa-circle text-gray"></i> Unopened
            </div>
            <hr>
            <div class="stats">
              <i class="fa fa-calendar"></i> Number of emails sent
            </div>
          </div>
        </div>
      </div> --}}
        {{-- <div class="col-md-8">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-title">NASDAQ: AAPL</h5>
            <p class="card-category">Line Chart with Points</p>
          </div>
          <div class="card-body">
            <canvas id="speedChart" width="400" height="100"></canvas>
          </div>
          <div class="card-footer">
            <div class="chart-legend">
              <i class="fa fa-circle text-info"></i> Tesla Model S
              <i class="fa fa-circle text-warning"></i> BMW 5 Series
            </div>
            <hr />
            <div class="card-stats">
              <i class="fa fa-check"></i> Data information certified
            </div>
          </div>
        </div>
      </div> --}}
        <div class="col-md-12">
            <p style="font-size: 18px; text-align: justify">
                {{-- <img src="../assets/img/logo-small.png"> --}}
            <div style="margin-left: -10px; font-size: 18px; text-align: justify">
                Segmentasi adalah proses membagi pelanggan menjadi beberapa kelompok atau klaster dengan kategori loyalitas
                para pelanggan untuk membangun strategi pemasaran yang lebih baik. Dalam ilmu pemasaran, segmentasi
                merupakan hal yang sangat penting dalam relationship marketing. Meningkatkan hubungan dengan pelanggan akan
                menjadi lebih menarik dan akan menghasilkan pemahaman yang juga lebih baik tentang kebutuhan serta kebiasaan
                pelanggan saat berbelanja. <br><br>
                <img src="../assets/img/hasil/segmentasipasar.png"
                    style="display: block; margin-left: auto; margin-right: auto; width: 50%"> <br> <br>
                Pada pengolahan data pelanggan, <b>digunakan 4 model dan 3 metode pencarian jumlah kelompok terbaik yang
                    berbeda </b>untuk mendapatkan hasil dan model terbaik: <br>
                <b>1. Model RFM</b> <br>
                Pada Model ini, digunakan data pelanggan seperti kapan terakhir pelanggan membeli produk, jumlah produk yang
                dibeli, dan total uang yang dikeluarkan oleh pelanggan. <br>
                Adapun korelasi pada model data pelanggan yang diambil adalah: <br>
            </div>
            <div class="row" style="font-size: 18px; text-align: left">
                <img src="../assets/img/hasil/rfm/korelasi.png" width="600" height="500"
                    style="display: block; margin-left: 400px; margin-right: auto;"> <br>
                <div style="margin-right: 10px">
                    <br><br><br><br><br>
                    Keterangan: <br>
                    - Recency = Poin untuk seberapa sering pelanggan membeli <br>produk <br>
                    - Frequency = Poin untuk seberapa banyak produk yang dibeli <br>
                    - Monetary = Poin untuk total uang yang dihabiskan pembeli <br>untuk membeli produk <br>
                </div>
                <div>
                    Pada hasil korelasi, model tersebut memiliki Koefisien korelasi bernilai positif, berarti hubungan antar
                    variabel tersebut positif atau saling berbanding lurus/mendukung. <br>
                    Metode pertama dalam mencari jumlah kelompok klaster terbaik adalah dengan menggunakan metode Elbow:
                    <br>
                    <div class="row" style="font-size: 18px; text-align: left">
                        <img src="../assets/img/hasil/rfm/elbow.png" width="600" height="500"
                            style="display: block; margin-left: 400px; margin-right: auto;"> <br>
                        <div style="margin-right: 10px">
                            <br> <br> <br> <br><br><br>
                            Metode elbow merupakan salah satu pengujian dalam clustering. <br>Dalam metode elbow, <br> dalam
                            menentukan nilai k optimal dari penurunan inertia <br>sehingga membentuk siku. <br>
                            Dipilih jumlah klaster = 4 pada metode elbow untuk model RFM. <br>
                        </div>
                    </div>
                    <br>
                    Lalu untuk perhitungan metode DBI dan nilai Silhoutte. <b>Davies-bouldin index merupakan </b>salah satu
                    metode evaluasi internal yang mengukur evaluasi cluster pada suatu metode pengelompokan yang didasarkan
                    pada nilai kohesi dan separasi. Dalam suatu pengelompokan, kohesi didefinisikan sebagai jumlah dari
                    kedekatan data terhadap centroid dari cluster yang diikuti. Sedangkan separasi didasarkan pada jarak
                    antar centroid dari clusternya. <br>
                    Sedangkan <b>Metode silhouette coefficient merupakan </b>gabungan dari dua metode yaitu metode cohesion
                    yang berfungsi untuk mengukur seberapa dekat relasi antara objek dalam sebuah cluster, dan metode
                    separation yang berfungsi untuk mengukur seberapa jauh sebuah cluster terpisah dengan cluster lain.
                    <br><br>
                    <table class="table table-bordered table-striped" style="border: 1px solid black; margin:auto">
                        <tr style="border: 1px solid black;">
                            <th style="border: 1px solid black;">No.</th>
                            <th style="border: 1px solid black;">Nama Model</th>
                            <th style="border: 1px solid black;">Nilai DBI</th>
                            <th style="border: 1px solid black;">Nilai Silhoutte</th>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black;">1.</td>
                            <td style="border: 1px solid black;">Model RFM</td>
                            <td style="border: 1px solid black;">9 (0.7512200228609862)</td>
                            <td style="border: 1px solid black;">4 (0.877161691845732)</td>
                        </tr>
                    </table>
                    <br>
                    Untuk hasil perhitungan yang lebih mendetil mengenai model ini: Klik <a
                        href="https://colab.research.google.com/drive/1gFzUXojLKoyC5G4tvLAthQ7POLU7khE9?usp=sharing">DISINI</a>
                    <br><br><br><br>


                    <b>2. Model LRFM </b><br>
                    Pada Model ini, digunakan data pelanggan seperti kapan terakhir pelanggan membeli produk, jumlah produk
                    yang dibeli, dan total uang yang dikeluarkan oleh pelanggan. Namun, pada model ini terdapat tambahan
                    data pelanggan yang dicari, yaitu selisih pembelian terakhir dengan pembelian pertama produk.<br>
                    Adapun korelasi pada model data pelanggan yang diambil adalah: <br>
                    <div class="row" style="font-size: 18px; text-align: left">
                        <img src="../assets/img/hasil/lrfm/korelasi.png" width="600" height="500"
                            style="display: block; margin-left: 400px; margin-right: auto;"> <br>
                        <div style="margin-right: 5px">
                            <br><br><br><br><br>
                            Keterangan: <br>
                            - r_score = Poin untuk seberapa sering pelanggan membeli produk <br>
                            - f_score = Poin untuk seberapa banyak produk yang dibeli <br>
                            - m_score = Poin untuk total uang yang dihabiskan pembeli <br>untuk membeli produk <br>
                            - l_score = Poin untuk selisih waktu antara pembelian pertama dan <br>pembelian terakhir
                            pelanggan <br>
                        </div>
                        <div style="margin-left: 10px">
                            Pada hasil korelasi, model tersebut memiliki Koefisien korelasi bernilai positif, berarti
                            hubungan antar variabel tersebut positif atau saling berbanding lurus/mendukung. <br>
                            Lalu pencarian jumlah klaster terbaik dengan menggunakan metode Elbow: <br>
                            <div class="row" style="font-size: 18px; text-align: left">
                                <img src="../assets/img/hasil/lrfm/elbow.png" width="600" height="500"
                                    style="display: block; margin-left: 400px; margin-right: auto;"> <br>
                                <div style="margin-right: 20px">
                                    <br> <br> <br> <br><br><br>
                                    Menurut penurunan inertia, <br>
                                    Dipilih jumlah klaster = 4 pada metode elbow untuk model LRFM. <br>
                                </div>
                            </div>
                            <br>
                            Lalu untuk perhitungan metode DBI dan nilai Silhoutte: <br><br>
                            <table class="table table-bordered table-striped" style="border: 1px solid black; margin:auto">
                                <tr style="border: 1px solid black;">
                                    <th style="border: 1px solid black;">No.</th>
                                    <th style="border: 1px solid black;">Nama Model</th>
                                    <th style="border: 1px solid black;">Nilai DBI</th>
                                    <th style="border: 1px solid black;">Nilai Silhoutte</th>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black;">1.</td>
                                    <td style="border: 1px solid black;">Model RFM</td>
                                    <td style="border: 1px solid black;">9 (0.7512200228609862)</td>
                                    <td style="border: 1px solid black;">4 (0.877161691845732)</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black;"><b>2.</td>
                                    <td style="border: 1px solid black;"><b>Model LRFM</td>
                                    <td style="border: 1px solid black;"><b>9 (1,2464783817474)</td>
                                    <td style="border: 1px solid black;"><b>5 (0.8222066467929308)</td>
                                </tr>
                            </table>
                            <br>
                            Untuk hasil perhitungan yang lebih mendetil mengenai model ini: Klik <a
                                href="https://colab.research.google.com/drive/1qfhMLCSbEdbQeN9AIK_Np0b7GNV1uW4C?usp=sharing">DISINI</a>
                            <br><br><br><br>

                            <b>3. Model Spesifikasi Baja </b><br>
                            Pada Model ini, digunakan data baja yang dibeli oleh pelanggan seperti ketebalan baja, panjang
                            baja, dan tinggi baja.<br>
                            Adapun korelasi pada model data ini adalah: <br>
                            <div class="row" style="font-size: 18px; text-align: left">
                                <img src="../assets/img/hasil/spes/korelasi.png" width="600" height="500"
                                    style="display: block; margin-left: 400px; margin-right: auto;"> <br>
                                <div style="margin-right: 110px">
                                    <br><br><br><br><br>
                                    Keterangan: <br>
                                    - T_score = Poin untuk total ketebalan baja yang dibeli <br>
                                    - W_score = Poin untuk total lebar baja yang dibeli <br>
                                    - L_score = Poin untuk total panjang baja yang dibeli <br>
                                </div>
                                <div style="margin-left: 10px">
                                    Pada hasil korelasi, model tersebut memiliki koefisien negatif yang artinya korelasi
                                    masing-masing atribut berbanding terbalik/tidak saling mendukung. <br>
                                    Lalu pencarian jumlah klaster terbaik dengan menggunakan metode Elbow: <br>
                                    <div class="row" style="font-size: 18px; text-align: left">
                                        <img src="../assets/img/hasil/spes/elbow.png" width="600" height="500"
                                            style="display: block; margin-left: 400px; margin-right: auto;"> <br>
                                        <div style="margin-right: 200px">
                                            <br> <br> <br> <br><br><br>
                                            Menurut penurunan inertia, <br>
                                            Dipilih jumlah klaster = 4 pada metode elbow <br>untuk model data baja /
                                            spesifikasi baja. <br>
                                        </div>
                                    </div>
                                    <br>
                                    Lalu untuk perhitungan metode DBI dan nilai Silhoutte: <br><br>
                                    <table class="table table-bordered table-striped"
                                        style="border: 1px solid black; margin:auto">
                                        <tr style="border: 1px solid black;">
                                            <th style="border: 1px solid black;">No.</th>
                                            <th style="border: 1px solid black;">Nama Model</th>
                                            <th style="border: 1px solid black;">Nilai DBI</th>
                                            <th style="border: 1px solid black;">Nilai Silhoutte</th>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid black;">1.</td>
                                            <td style="border: 1px solid black;">Model RFM</td>
                                            <td style="border: 1px solid black;">9 (0.7512200228609862)</td>
                                            <td style="border: 1px solid black;">4 (0.877161691845732)</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid black;">2.</td>
                                            <td style="border: 1px solid black;">Model LRFM</td>
                                            <td style="border: 1px solid black;">9 (1,2464783817474)</td>
                                            <td style="border: 1px solid black;">5 (0.8222066467929308)</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid black;"><b>3.</td>
                                            <td style="border: 1px solid black;"><b>Model Spesifikasi Baja</td>
                                            <td style="border: 1px solid black;"><b>9 (0.6917220383574448)</td>
                                            <td style="border: 1px solid black;"><b>4 (0.9066292135851709)</td>
                                        </tr>
                                    </table>
                                    <br>
                                    Untuk hasil perhitungan yang lebih mendetil mengenai model ini: Klik <a
                                        href="https://colab.research.google.com/drive/1tjFUlAmo6Ff_4UYco2R3zfL02RR9T8Dk?usp=sharing">DISINI</a>
                                    <br><br><br><br>


                                    <div style="margin-left: 10px">
                                        <b>4. Model All Attributes</b> <br>
                                        Pada Model ini, digunakan gabungan antara data pelanggan dan data baja seperti
                                        ketebalan baja, tinggi baja, lebar baja, total uang yang dibelanjakan pelanggan, dan
                                        jumlah pembelian produk.<br>
                                        Adapun korelasi pada model data ini adalah: <br>
                                        <div class="row" style="font-size: 18px; text-align: left">
                                            <img src="../assets/img/hasil/all/korelasi.png" width="600" height="500"
                                                style="display: block; margin-left: 400px; margin-right: auto;"> <br>
                                            <div style="margin-right: 20px">
                                                <br><br><br><br><br>
                                                Keterangan: <br>
                                                - t_score = Poin untuk total ketebalan baja yang dibeli <br>
                                                - w_score = Poin untuk total lebar baja yang dibeli <br>
                                                - l_score = Poin untuk total panjang baja yang dibeli <br>
                                                - q_score = Poin untuk total produk yang dibeli pelanggan <br>
                                                - total_score = Poin untuk total uang yang dibelanjakan pelanggan <br>
                                            </div>
                                            <div style="margin-left: 10px">
                                                Pada hasil korelasi, model ini memiliki korelasi yang beragam antar variabel
                                                yang berarti nilai koefisien antar variabel ada yang positif dan juga
                                                negatif . <br>
                                                Lalu pencarian jumlah klaster terbaik dengan menggunakan metode Elbow: <br>
                                                <div class="row" style="font-size: 18px; text-align: left">
                                                    <img src="../assets/img/hasil/all/elbow.png" width="600"
                                                        height="500"
                                                        style="display: block; margin-left: 400px; margin-right: auto;">
                                                    <br>
                                                    <div style="margin-left: 20px">
                                                        <br> <br> <br> <br><br><br>
                                                        Menurut penurunan inertia, <br>
                                                        Dipilih jumlah klaster = 5 pada metode elbow <br>untuk model data
                                                        baja / spesifikasi baja. <br>
                                                    </div>
                                                </div>
                                                <br>
                                                Lalu untuk perhitungan metode DBI dan nilai Silhoutte: <br><br>
                                                <table class="table table-bordered table-striped"
                                                    style="border: 1px solid black;">
                                                    <tr style="border: 1px solid black;">
                                                        <th style="border: 1px solid black;">No.</th>
                                                        <th style="border: 1px solid black;">Nama Model</th>
                                                        <th style="border: 1px solid black;">Nilai DBI</th>
                                                        <th style="border: 1px solid black;">Nilai Silhoutte</th>
                                                    </tr>
                                                    <tr>
                                                        <td style="border: 1px solid black;">1.</td>
                                                        <td style="border: 1px solid black;">Model RFM</td>
                                                        <td style="border: 1px solid black;">9 (0.7512200228609862)</td>
                                                        <td style="border: 1px solid black;">4 (0.877161691845732)</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border: 1px solid black;">2.</td>
                                                        <td style="border: 1px solid black;">Model LRFM</td>
                                                        <td style="border: 1px solid black;">9 (1,2464783817474)</td>
                                                        <td style="border: 1px solid black;">5 (0.8222066467929308)</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border: 1px solid black;">3.</td>
                                                        <td style="border: 1px solid black;">Model Spesifikasi Baja</td>
                                                        <td style="border: 1px solid black;">9 (0.6917220383574448)</td>
                                                        <td style="border: 1px solid black;">4 (0.9066292135851709)</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border: 1px solid black;"><b>4.</td>
                                                        <td style="border: 1px solid black;"><b>Model All Attributes</td>
                                                        <td style="border: 1px solid black;"><b>9 (1,9966624457123100)</td>
                                                        <td style="border: 1px solid black;"><b>5 (0.8206872840359148)</td>
                                                    </tr>
                                                </table>
                                                <br>
                                                Untuk hasil perhitungan yang lebih mendetil mengenai model ini: Klik <a
                                                    href="https://colab.research.google.com/drive/14_1mVY4VAfF9lPZzjn5YdbvdpNjUB4A1?usp=sharing">
                                                    DISINI</a>
                                            </div>

                                            <br><br><br><br>


                                            </p>
                                        </div>
                                        <br><br>

                                        <div style="margin-left: -7px;">
                                            <b style="font-size: 25px"> Kesimpulan </b> <br>
                                            Pada percobaan yang telah dilakukan pada keempat model yang ada menggunakan
                                            metode elbow, DBI, dan Silhoutte untuk mencari jumlah klaster terbaik,
                                            didapatkan tabel sebagai berikut: <br><br>
                                            <table class="table table-bordered table-striped"
                                                style="border: 1px solid black; margin:auto;">
                                                <tr style="border: 1px solid black;">
                                                    <th style="border: 1px solid black;">No.</th>
                                                    <th style="border: 1px solid black;">Nama Model</th>
                                                    <th style="border: 1px solid black;">Nilai DBI</th>
                                                    <th style="border: 1px solid black;">Nilai Silhoutte</th>
                                                    <th style="border: 1px solid black;">Nilai Elbow</th>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid black;">1.</td>
                                                    <td style="border: 1px solid black;">Model RFM</td>
                                                    <td style="border: 1px solid black;">9 (0.7512200228609862)</td>
                                                    <td style="border: 1px solid black;">4 (0.877161691845732)</td>
                                                    <td style="border: 1px solid black;">4</td>

                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid black;">2.</td>
                                                    <td style="border: 1px solid black;">Model LRFM</td>
                                                    <td style="border: 1px solid black;">9 (1,2464783817474)</td>
                                                    <td style="border: 1px solid black;">5 (0.8222066467929308)</td>
                                                    <td style="border: 1px solid black;">4</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid black;">3.</td>
                                                    <td style="border: 1px solid black;">Model Spesifikasi Baja</td>
                                                    <td style="border: 1px solid black;">9 (0.6917220383574448)</td>
                                                    <td style="border: 1px solid black;">4 (0.9066292135851709)</td>
                                                    <td style="border: 1px solid black;">4</td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid black;">4.</td>
                                                    <td style="border: 1px solid black;">Model All Attributes</td>
                                                    <td style="border: 1px solid black;">9 (1,9966624457123100)</td>
                                                    <td style="border: 1px solid black;">5 (0.8206872840359148)</td>
                                                    <td style="border: 1px solid black;">5</td>
                                                </tr>
                                            </table>
                                            <br><br>
                                            Pada tabel diatas dapat dilihat bahwa nilai <b>Silhoutte tertinggi dan nilai DBI
                                                terendah </b>terdapat pada model nomor 3 yaitu model data baja / spesifikasi
                                            baja. <br>
                                            <b>Namun</b>, pada perbandingan korelasi antar variabel yang ada pada model 3
                                            memiliki nilai koefisien negatif, yang berarti variabel / atribut yang ada pada
                                            model tersebut tidak saling mendukung / bertolak belakang. <br>
                                            Oleh sebab itu dipilih model dengan <b>nilai silhoutte tertinggi kedua dan nilai
                                                DBI terendah kedua </b> yaitu <b>model RFM </b>sebagai model yang akan
                                            digunakan sebagai model segmentasi. Digunakan juga <b> Model LRFM </b> sebagai
                                            perbandingan hasil dikarenakan model ini juga memiliki hasil nilai koefisien
                                            korelasi yang positif / berbanding lurus.<br>
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header " style="margin-top: 100px; margin-left: 30px">
          <h5 class="card-title">Pie Chart</h5>
        </div>
        <div class="card-body ">
          <div id="piechart" style="width: 900px; height: 500px;margin-top: -30px; margin-left:130px"></div>
        </div>
        <p style="margin-left: 40px; margin-right:15px">
1.	Pada segmen 1 dengan nama ‘Pelanggan Loyal’. Dalam segmen ini sudah dapat terlihat dari ketiga nilai RFM yang tinggi. Pelanggan pada segmen ini sangat perlu dipertahankan oleh PT. Baja X, dikarenakan pelanggan ini dapat menjadi pemasukan tetap yang perlu dipertahankan. Biasanya segmen ini berisikan pelanggan dengan project pembangunan yang sedang dilakukannya, pembelian dilakukan dalam jumlah yang banyak, dengan sekali pembelian memiliki pengeluaran nilai uang yang tinggi, dan memiliki nilai Recency yang tinggi dikarenakan sering membeli. Salah satu caranya dengan memprioritaskan pelanggan dengan info mengenai stok baru dan prioritas pembelian saat melakukan pre-order.<br><br>
2.	Pada segmen 2 dengan nama ‘Pelanggan Potensial’. Dalam segmen ini, nilai Monetary, dan Frequency yang tinggi tetapi memiliki Recency yang rendah sehingga pelanggan dengan kelompok segmentasi ini memiliki potensi besar untuk menjadi pelanggan yang loyal dengan meningkatkan nilai Recency. Biasanya pada segmen ini, pelanggan merupakan reseller yang melakukan pembelian besar dalam satu waktu untuk dapat dijual lagi, atau sedang melakukan pembangunan dalam skala kecil. Salah satu cara agar pelanggan dalam segmen ini masuk dalam kategori pelanggan loyal adalah dengan memberikan opsi paket pembelian dengan harga lebih murah jika pembelian dilakukan terus menerus dalam jangka waktu tertentu serta memberikan bonus lain seperti prioritas stok yang ada.<br><br>
3.	Pada segmen 3 dengan nama ‘Pelanggan Day to Day’. Dalam segmen ini, nilai Frequency, dan Monetary yang rendah namun memiliki nilai Recency yang tinggi. Nilai Recency yang tinggi dapat diartikan bahwa pelanggan Day to Day sering berbelanja namun dalam pembeliannya tidak terlalu banyak mengeluarkan uang dan juga pembelian hanya dilakukan dalam jumlah sedikit. Biasanya segmen ini berisikan penjual yang melakukan restock baja untuk kebutuhan ready to ship order atau ready stock baja. Salah satu cara untuk meningkatkan loyalitas pelanggan pada segmen ini adalah dengan memberikan harga satuan yang lebih mahal namun memberikan potongan harga pada pembelian dalam jumlah banyak pada jangka waktu tertentu.<br><br>
4.	Pada segmen 4 dengan nama ‘Pelanggan Baru’. Dalam segmen ini memiliki nilai Recency, Frequency, dan Monetary yang masih rendah. Biasanya segmen ini berisikan pelanggan rumahan yang sedang merenovasi bangunannya dalam skala kecil. Untuk meningkatkan tingkat pelanggan pada segmen ini adalah memberikan potongan harga pada pembelian satuan dan potongan lebih untuk pembelian dalam jumlah banyak pada kurun waktu tertentu.<br><br>
</p>
        <div class="card-footer ">
          <hr>
          <div class="stats">
            <i class="fa fa-calendar"></i> 2017-2020
          </div>
        </div>
      </div>
    </div> --}}
                            @endsection

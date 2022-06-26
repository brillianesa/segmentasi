@extends('template')
@section('content')
    <html>

    <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);
            google.charts.setOnLoadCallback(drawChart1);

            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                    ['Cluster', 'Jumlah Pelanggan'],
                    <?php echo $chartData; ?>
                ]);

                // var options = {
                //   title: 'Klaster Pelanggan'
                // };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                chart.draw(data);
            }

            function drawChart1() {

                var data1 = google.visualization.arrayToDataTable([
                    ['Cluster', 'Jumlah Pelanggan'],
                    <?php echo $chartData1; ?>
                ]);

                // var options = {
                //   title: 'Klaster Pelanggan'
                // };

                var chart1 = new google.visualization.PieChart(document.getElementById('piechart1'));

                chart1.draw(data1);
            }
        </script>

    </head>

    <body>
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header " style="margin-top: 100px; margin-left: 30px">
                        <h5 class="card-title">Pie Chart Model RFM</h5>
                    </div>
                    <div class="card-body ">
                        <div id="piechart" style="width: 900px; height: 500px;margin-top: -30px; margin-left:130px"></div>
                    </div>
                    <p style="margin-left: 40px; margin-right:15px; font-size: 20px">
                        1. Pada Cluster 1 dengan nama ‘<b>Pelanggan Loyal</b>’. Dalam segmen ini sudah dapat
                        terlihat dari ketiga nilai RFM yang tinggi. Pelanggan pada segmen ini sangat perlu dipertahankan
                        oleh PT. Baja X, dikarenakan pelanggan ini dapat menjadi pemasukan tetap yang perlu dipertahankan.
                        Biasanya segmen ini berisikan pelanggan dengan project pembangunan yang sedang dilakukannya,
                        pembelian dilakukan dalam jumlah yang banyak, dengan sekali pembelian memiliki pengeluaran nilai
                        uang yang tinggi, dan memiliki nilai Recency yang tinggi dikarenakan sering membeli. Salah satu
                        caranya dengan memprioritaskan pelanggan dengan info mengenai stok baru dan prioritas pembelian saat
                        melakukan pre-order.<br><br>
                        2. Pada Cluster 3 dengan nama ‘<b>Pelanggan Potensial</b>’. Dalam segmen ini, nilai
                        Monetary, dan Frequency yang tinggi tetapi memiliki Recency yang rendah sehingga pelanggan dengan
                        kelompok segmentasi ini memiliki potensi besar untuk menjadi pelanggan yang loyal dengan
                        meningkatkan nilai Recency. Biasanya pada segmen ini, pelanggan merupakan reseller yang melakukan
                        pembelian besar dalam satu waktu untuk dapat dijual lagi, atau sedang melakukan pembangunan dalam
                        skala kecil. Salah satu cara agar pelanggan dalam segmen ini masuk dalam kategori pelanggan loyal
                        adalah dengan memberikan opsi paket pembelian dengan harga lebih murah jika pembelian dilakukan
                        terus menerus dalam jangka waktu tertentu serta memberikan bonus lain seperti prioritas stok yang
                        ada.<br><br>
                        3. Pada Cluster 0 dengan nama ‘<b>Pelanggan Day to Day</b>’. Dalam segmen ini, nilai
                        Frequency, dan Monetary yang rendah namun memiliki nilai Recency yang tinggi. Nilai Recency yang
                        tinggi dapat diartikan bahwa pelanggan Day to Day sering berbelanja namun dalam pembeliannya tidak
                        terlalu banyak mengeluarkan uang dan juga pembelian hanya dilakukan dalam jumlah sedikit. Biasanya
                        segmen ini berisikan penjual yang melakukan restock baja untuk kebutuhan ready to ship order atau
                        ready stock baja. Salah satu cara untuk meningkatkan loyalitas pelanggan pada segmen ini adalah
                        dengan memberikan harga satuan yang lebih mahal namun memberikan potongan harga pada pembelian dalam
                        jumlah banyak pada jangka waktu tertentu.<br><br>
                        4. Pada Cluster 2 dengan nama ‘<b>Pelanggan Baru</b>’. Dalam segmen ini memiliki nilai
                        Recency, Frequency, dan Monetary yang masih rendah. Biasanya segmen ini berisikan pelanggan rumahan
                        yang sedang merenovasi bangunannya dalam skala kecil. Untuk meningkatkan tingkat pelanggan pada
                        segmen ini adalah memberikan potongan harga pada pembelian satuan dan potongan lebih untuk pembelian
                        dalam jumlah banyak pada kurun waktu tertentu.<br><br>
                    </p>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-calendar"></i> 2017-2020
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header " style="margin-top: 100px; margin-left: 30px">
                            <h5 class="card-title">Pie Chart Model LRFM</h5>
                        </div>
                        <div class="card-body ">
                            <div id="piechart1" style="width: 900px; height: 500px;margin-top: -30px; margin-left:130px">
                            </div>
                        </div>
                        <p style="margin-left: 40px; margin-right:15px; font-size: 20px">
                            1. Cluster 2 dengan nama ‘<b>Pelanggan Loyal</b>’, pada cluster ini memiliki nilai L, R, F,
                            maupun M
                            tertinggi jika dibandingkan dengan cluster lainnya. Pelanggan pada cluster ini rutin melakukan
                            pembelian yang membuat nilai L tinggi. Pelanggan juga membeli produk dalam skala besar, jumlah
                            produk yang banyak, serta juga menghabiskan total uang dalam jumlah yang tidak sedikit.
                            Pelanggan yang masuk dalam cluster ini harus dapat dipertahankan dengan memprioritaskan
                            pemesanan pelanggan saat melakukan order atau pre-order. Info stok terbaru juga akan menjadi
                            informasi utama yang akan diberikan kepada pelanggan didalam kelompok segmen ini.<br><br>
                            2. Cluster 3 dengan nama ‘<b> Potensial</b>’, pada cluster ini memiliki nilai L urutan ketiga
                            jika dibandingkan dengan hasil seluruh cluster, namun memiliki nilai R, F, maupun M urutan kedua
                            dibawah cluster Pelanggan Loyal. Yang berarti pelanggan dalam segmen ini aktif melakukan
                            pembelian, membeli produk dalam jumlah banyak, serta menghabiskan total uang yang banyak.
                            Pelanggan yang ada pada cluster ini juga harus dipertahankan dan ditingkatkan untuk skor L
                            (Length), dimana untuk meningkatkan variabel tersebut, pelanggan diberikan prioritas dalam
                            pemesanan, serta potongan harga saat melakukan pembelian dalam jangka waktu tertentu.<br><br>
                            3. Cluster 1 dengan nama ‘<b>Pelanggan Day to Day</b>’, pada cluster ini memiliki nilai L setara
                            dengan
                            pelanggan loyal, yang dapat diartikan bahwa para pelanggan sudah memiliki ketertarikan dalam
                            membeli produk baja yang ada. Namun, nilai R dan F masing-masing mendapati urutan 3 dan 4. Untuk
                            meningkatkan nilai Recency dan Frequency, diberikan potongan harga dengan syarat hanya berlaku
                            pada jangka waktu tertentu dan juga memberikan promo harga pada pembelian dalam jumlah
                            banyak.<br><br>
                            4. Cluster 0 dengan nama ‘<b>Pelanggan Baru</b>’, pada cluster ini memiliki nilai L dan R urutan
                            ke-4
                            serta nilai F pada urutan ke-3. Pelanggan yang terdapat pada cluster ini adalah pelanggan baru
                            yang masih mencoba-coba produk baja yang ada. Untuk meningkatkan nilai L, R, dan F pada cluster
                            ini diberikan potongan harga pada produk baja yang menjadi prioritas pembeli jika membeli dalam
                            jangka waktu tertentu dan diberikan prioritas order jika membeli dalam jumlah banyak.<br><br>
                            5. Cluster 4 dengan nama ‘<b>Pelanggan Tidak Aktif</b>’, pada cluster ini memiliki nilai L, R,
                            F,
                            bahkan M paling rendah jika dibandingkan dengan cluster lainnya. Pelanggan yang ada pada cluster
                            ini merupakan pelanggan yang sudah tidak aktif dalam melakukan pembelian produk baja. Pelanggan
                            pada cluster ini memiliki beragam alasan untuk tidak melakukan pembelian seperti mendapatkan
                            produk baja yang lebih baik ditempat lain, mendapatkan produk baja yang lebih murah, atau memang
                            sudah menjadi pelanggan loyal pada toko baja lain. Untuk meningkatkan ke-4 variabel atribut (L,
                            R, F, M), pelanggan pada toko ini harus setidaknya melakukan pembelian dua kali dalam jangka
                            waktu tertentu agar nilai naik dan berpotensi untuk masuk ke cluster ‘Pelanggan Baru’. <br><br>
                        </p>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-calendar"></i> 2017-2020
                            </div>
                        </div>
                    </div>
                </div>
    </body>

    </html>
@endsection

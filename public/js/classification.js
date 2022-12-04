const DISEASE = {
    0: {
        nama: "Blast",
        deskripsi: `<p>Penyakit blas disebabkan oleh jamur <i>Pyricularia  grisea</i>. Awalnya penyakit ini berkembang di pertanaman padi gogo, 
      tetapi akhir-akhir ini sudah menyebar di lahan sawah irigasi. Penyakit blas juga dapat berkembang pada tanaman selain padi seperti gandum, 
      sorgum dan spesies rumput-rumputan.</p>
      <div class="collapse collapse-arrow">
          <input class="w-full" type="checkbox" /> 
          <div class="collapse-title font-medium">
              Akibat
          </div>
          <div class="collapse-content">
            <ul class="list-disc ml-5">
              <li>Pada fase bibit dan pertumbuhan vegetatif tanaman padi,  Jamur <i>Pyricularia  grisea</i> menginfeksi bagian daun dan menimbulkan gejala penyakit yang berupa bercak coklat berbentuk belah ketupat yang disebut blas daun.</li>
              <li>Pada fase pertumbuhan generatif tanaman padi, gejala penyakit blas berkembang pada tangkai/leher malai disebut blas leher.</li>
            </ul>
          </div>
      </div>
  
      <div class="collapse collapse-arrow">
          <input class="w-full" type="checkbox" /> 
          <div class="collapse-title font-medium">
            Solusi
          </div>
          <div class="collapse-content">
            <ul class="list-disc ml-5">
              <li>Gunakan varietas tahan sesuai dengan sebaran ras yang ada di daerah setempat.</li>
              <li>Gunakan benih sehat.</li>
              <li>Hidarkan penggunaan pupuk nitrogen diatas dosis anjuran.</li>
              <li>Hindarkan tanam padi dengan varietas yang sama terus menerus sepanjang tahun.</li>
              <li>Sanitasi lingkungan harus intensif karena inang alternatif patogen dapat berupa rerumputan.</li>
              <li>Hindari tanam padi terlambat dari tanaman petani di sekitarnya.</li>
              <li>Pengendalian secara dini dengan perlakuan benih sangat dianjurkan untuk menyelamatkan persemaian sampai umur 30 hari setelah sebar.</li>
              <li>Penyemprotan fungisida sistemik sebaiknya 2 kali pada saat stadia tanaman anakan maksimum dan awal berbunga untuk mencegah penyakit blas daun dan blas leher terutama di daerah endemik.</li>
              <li>Hindarkan jarak tanam rapat (sebar langsung).</li>
              <li>Pemakaian kompos sebagai sumber bahan organik.</li>
            </ul>
          </div>
      </div>
      `,
    },
    1: {
        nama: "Blight",
        deskripsi: `<p>Penyakit Hawar daun atau BLB (<i>Bacterial Leaf Blight</i>) disebabkan oleh Bakteri <i>Xanthomonas campestris pv. Oryzae.</i>
        Kehilangan hasil mencapai 20.6% - 35.8% pada musim hujan, sedangkan pada musim kemarau mencapai 17.5% - 28%</p>
        <div class="collapse collapse-arrow">
            <input class="w-full" type="checkbox" /> 
            <div class="collapse-title font-medium">
                Akibat
            </div>
            <div class="collapse-content">
              <ul class="list-disc ml-5">
                <li>Pertumbuhan tanaman terhambat</li>
                <li>Butir-butir padi kurang bernas</li>
                <li>Kualitas biji rendah</li>
                <li>Persentase beras pecah tinggi</li>
              </ul>
            </div>
        </div>
        
        <div class="collapse collapse-arrow">
            <input class="w-full" type="checkbox" /> 
            <div class="collapse-title font-medium">
              Solusi
            </div>
            <div class="collapse-content">
            <p>
              <p class="font-semibold">Pratanam</p>
              <ul class="list-disc ml-5">
                <li>Sanitasi tanaman inang</li>
                <li>Pemilihan varietas tahan sesuai sebaran ras</li>
              </ul>
              
              <p class="font-semibold">Pesemaian</p>
              <ul class="list-disc ml-5">
                <li>Penggunaan benih sehat</li>
                <li>Sanitasi inang pada saluran irigasi</li>
                <li>Hindari penggenangan terlalu dalam</li>
              </ul>        
            
              <p class="font-semibold">Tanaman Muda (Tanam - Anakan maksimum)</p>
              <ul class="list-disc ml-5">
                <li>Pemupukan berimbang sesuai anjuran setempat</li>
                <li>Sanitasi rerumputan sumber patogen</li>
                <li>Pengeringan lahan secara berkala, yaitu 1 hari diairi dan 3-4 hari dikeringkan, terutama pada daerah endemik serangan penyakit</li>
              </ul> 
            </p>
            </div>
        </div>
        `,
    },
    2: {
        nama: "Tungro",
        deskripsi: `<p>Tungro merupakan penyakit yang disebabkan oleh infeksi ganda dari 2 jenis virus yang
      berlainan. Kedua virus yang dimaksud adalah <i>Rice Tungro Spherical Virus</i> (RTSV) dan Rice
      <i>Tungro Bacilliform Virus</i> (RTBV).</p>
      <div class="collapse collapse-arrow">
          <input class="w-full" type="checkbox" /> 
          <div class="collapse-title font-medium">
              Akibat
          </div>
          <div class="collapse-content">
            <ul class="list-disc ml-5">
              <li>Perubahan warna pada daun muda tanaman padi yang menguning hingga berwarna jingga.</li>
              <li>Daun-daun tersebut juga terlihat melintir.</li>
              <li>Tanaman padi menjadi kerdil karena jarak antar buku atau ruas memendek.</li>
              <li>Jumlah tanaman padi muda atau anakan menjadi berkurang drastis karena lebih rentan terserang virus tungro.</li>
              <li>Jika terus dibiarkan saja, gabah akan berubah bentuk dan pastinya menurun secara kuantitas.</li>
            </ul>
          </div>
      </div>
  
      <div class="collapse collapse-arrow">
          <input class="w-full" type="checkbox" /> 
          <div class="collapse-title font-medium">
            Solusi
          </div>
          <div class="collapse-content">
            <ul class="list-disc ml-5">
              <li> Menanam padi serempak pada lahan luas minimal 25 hektar.</li>
              <li>Mengatur waktu tanam padi dengan sebaik-baiknya. Saat puncak kepadatan populasi
              wereng hijau, tanaman padi sudah berumur lebih dari 45 hari setelah tanam, umur
              tanaman padi yang tidak rentan terhadap penyakit tungro.</li>
              <li>Memilih varietas tanaman padi yang berkualitas bagus, sehingga tidak mudah terserang
              wereng hijau dan virus tungro. Adapun varietas tahan tungro adalah Inpari 7 Lanrang,
              Inpari 36 dan Inpari 37.</li>
              <li>Sanitasi lingkungan atau pembersihan lahan sebelum tanam dari sisa tanaman dan gulma.</i>
              <li>Melakukan pemupukan berimbang sesuai dosis yang direkomendasikan dinas pertanian
              terkait.</li>
              <li>Membasmi virus tungro dan tempat-tempat penyebab perkembangbiakannya, seperti
              singgang, gulma, bibit tanaman yang sudah terinfeksi penyakit dan lain sebagainya.</li>
              <li>Menggunakan bahan insektisida pada fase sebelum semai dengan dosis yang masih
              aman dan direkomendasikan.</li>
              <li>Melakukan pengamatan intensif pada tanaman padi dibantu oleh petugas Pengamat
              Hama dan Penyakit - Pengendali Organisme Pengganggu Tanaman (PHP - POPT).</li>
              <li>Melakukan sosialisasi dan pembelajaran kepada para petani secara umum melalui
              Sekolah Lapang Pengendalian Hama Terpadu (SLPHT).</li>
            </ul>
          </div>
      </div>
      `,
    },
};

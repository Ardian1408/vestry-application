<div class="w-[15rem] py-1 rounded-full text-white bg-emerald-600 text-center my-4 select-none">
  <p>SEBAGAI
    {{ auth('admin')->check() ? 'ADMIN' : '' }}{{ auth('pendana')->check() ? 'PENDANA' : '' }}{{ auth('pengusaha')->check() ? 'PENGUSAHA' : '' }}</p>
</div>

<div class="flex gap-x-2 my-8">
  <a href="{{ auth('admin')->check() ? '/admin/daftar-usaha' : '' }}{{ auth('pengusaha')->check() ? '/daftar-usaha/' . (string) auth('pengusaha')->user()->id_pemilik_usaha : '' }}{{ auth('pendana')->check() ? '/daftar-usaha/pendana' : '' }}"
    class="flex flex-col cursor-pointer p-4 bg-white rounded-lg items-center w-[25rem] shadow-md hover:shadow-black/50 duration-200">
    <img src="/icons/city.svg" class="w-10 h-10" alt="" />
    <h2 class="text-yellow-500 text-xl font-medium">Deskripsi Usaha</h2>
    <p class="text-sm text-neutral-400 w-[15rem] text-center"></p>
  </a>
  <a href="{{ auth('admin')->check() ? '/admin/pendanaan' : '' }}{{ auth('pengusaha')->check() ? '/pendanaan/' . (string) auth('pengusaha')->user()->id_pemilik_usaha : '' }}{{ auth('pendana')->check() ? '/pendanaan/' . (string) auth('pendana')->user()->id_pendana : '' }}"
    class="flex flex-col cursor-pointer p-4 bg-white rounded-lg items-center w-[25rem] shadow-md hover:shadow-black/50 duration-200">
    <img src="/icons/draft.svg" class="w-10 h-10" alt="" />
    <h2 class="text-yellow-500 text-xl font-medium">Pendanaan</h2>
    <p class="text-sm text-neutral-400 w-[15rem] text-center"></p>
  </a>
</div>

<!-- Slider main container -->
<div class="swiper bg-white w-[50rem] h-[25rem] my-4 rounded-lg overflow-hidden shadow-md shadow-black/50">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide flex flex-col items-center">
      <h2 class="text-yellow-500 font-semibold text-1xl my-4">Syarat dan Ketentuan Investasi Agroindustri untuk Pemilik Usaha dan Pendana</h2>
      <div class="flex px-2">
        <div class="h-full min-w-[20rem] rounded-md bg-[url('/images/usaha.jpg')] bg-cover bg-center z-10 shadow-md shadow-black/40"></div>
        <p class="px-4 text-justify text-neutral-400 drop-shadow-md">Tujuan Investasi
          Pemilik Usaha: Investasi bertujuan untuk mendapatkan modal tambahan dan pengembangan usaha agroindustri.
          Pendana: Investasi bertujuan untuk memperoleh keuntungan dari hasil usaha agroindustri.
          Kerjasama dan Kemitraan
          Pemilik Usaha: Pendana dianggap sebagai mitra dan memiliki hak untuk memantau dan mengawasi operasional usaha agroindustri.
          Pendana: Menyadari bahwa investasi adalah bentuk kemitraan dengan pemilik usaha dan bersedia memberikan saran atau masukan yang konstruktif.
          Pendapatan dan Pembagian Keuntungan
          Pemilik Usaha: Pendapatan dan keuntungan dari usaha agroindustri akan dibagi sesuai dengan kesepakatan yang telah ditetapkan dalam perjanjian investasi.
          Pendana: Berhak menerima bagian keuntungan yang telah disepakati, sesuai
          </p>
      </div>
    </div>
    <div class="swiper-slide flex flex-col items-center">
      <h2 class="text-yellow-500 font-semibold text-1xl my-4">Syarat dan Ketentuan Investasi Agroindustri untuk Pemilik Usaha dan Pendana</h2>
      <div class="flex px-2">
        <div class="h-full min-w-[20rem] rounded-md bg-[url('/images/finance.jpg')] bg-cover bg-center z-10 shadow-md shadow-black/40"></div>
        <p class="px-4 text-justify text-neutral-400 drop-shadow-md">Penyertaan Modal dan Investasi
          Pemilik Usaha: Menggunakan dana investasi untuk pengembangan dan operasional usaha agroindustri yang telah ditentukan dalam perjanjian investasi.
          Pendana: Menyertakan dana investasi sesuai dengan jumlah yang telah disepakati dalam perjanjian investasi.
          Tanggung Jawab dan Risiko
          Pemilik Usaha: Bertanggung jawab atas pengelolaan usaha agroindustri, termasuk keberhasilan operasional, penjualan produk, dan pemenuhan kewajiban terhadap Pendana.
          Pendana: Menyadari risiko investasi agroindustri, termasuk fluktuasi pasar, perubahan regulasi, kerusakan hasil panen, dan bencana alam, serta bersedia menerima risiko tersebut.
        </p>
      </div>
    </div>
    <div class="swiper-slide flex flex-col items-center">
      <h2 class="text-yellow-500 font-semibold text-1xl my-4">Syarat dan Ketentuan Investasi Agroindustri untuk Pemilik Usaha dan Pendana</h2>
      <div class="flex px-2">
        <div class="h-full min-w-[20rem] rounded-md bg-[url('/images/finance.jpg')] bg-cover bg-center z-10 shadow-md shadow-black/40"></div>
        <p class="px-4 text-justify text-neutral-400 drop-shadow-md">Pengungkapan Informasi
          Pemilik Usaha: Wajib memberikan informasi yang akurat, jujur, dan terperinci tentang kinerja usaha agroindustri kepada Pendana secara berkala.
          Pendana: Menyadari bahwa informasi yang diberikan oleh pemilik usaha adalah dasar keputusan investasi dan bertanggung jawab untuk memahami informasi tersebut.
          Perubahan dan Pengakhiran Perjanjian
          Pemilik Usaha: Berhak melakukan perubahan pada struktur bisnis, komposisi portofolio, atau kebijakan usaha agroindustri, dengan memberikan pemberitahuan tertulis kepada Pendana.
          Pendana: Jika terjadi perubahan signifikan dalam perjanjian investasi, Pendana berhak mempertimbangkan opsi pengunduran diri atau negosiasi ulang.
        </p>
      </div>
    </div>
    <div class="swiper-slide flex flex-col items-center">
      <h2 class="text-yellow-500 font-semibold text-1xl my-4">Syarat dan Ketentuan Investasi Agroindustri untuk Pemilik Usaha dan Pendana</h2>
      <div class="flex px-2">
        <div class="h-full min-w-[20rem] rounded-md bg-[url('/images/finance.jpg')] bg-cover bg-center z-10 shadow-md shadow-black/40"></div>
        <p class="px-4 text-justify text-neutral-400 drop-shadow-md">Pembatalan dan Penarikan Investasi
          Pemilik Usaha: Tidak diperbolehkan melakukan pembatalan atau penarikan dana investasi kecuali ada persetujuan tertulis dari Pendana.
          Pendana: Dalam situasi tertentu, Pendana dapat meminta pembatalan atau penarikan dana investasi sesuai dengan ketentuan dalam perjanjian investasi.
          
           Perpajakan dan Kepatuhan Hukum
          Pemilik Usaha: Bertanggung jawab atas pemenuhan kewajiban perpajakan yang timbul dari usaha agroindustri sesuai dengan peraturan perpajakan yang berlaku.
          Pendana: Bertanggung jawab atas kewajiban perpajakan pribadi yang timbul dari keuntungan investasi agroindustri sesuai dengan peraturan perpajakan yang berlaku.          
        </p>
      </div>
    </div>
    <div class="swiper-slide flex flex-col items-center">
      <h2 class="text-yellow-500 font-semibold text-1xl my-4">Syarat dan Ketentuan Investasi Agroindustri untuk Pemilik Usaha dan Pendana</h2>
      <div class="flex px-2">
        <div class="h-full min-w-[20rem] rounded-md bg-[url('/images/finance.jpg')] bg-cover bg-center z-10 shadow-md shadow-black/40"></div>
        <p class="px-4 text-justify text-neutral-400 drop-shadow-md">Penyelesaian Sengketa
          a. Pemilik Usaha dan Pendana: Setuju untuk menyelesaikan sengketa yang timbul dari investasi agroindustri secara musyawarah dan mufakat, dengan upaya penyelesaian yang adil dan bijaksana.
          
          Harap diperhatikan bahwa syarat dan ketentuan ini hanya sebagai panduan umum dan dapat disesuaikan dengan kesepakatan yang ditetapkan dalam kontrak perjanjian antara pemilik usaha dan Pendana.                    
        </p>
      </div>
    </div>

  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>

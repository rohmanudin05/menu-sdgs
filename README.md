<h1 align="center">Cara Pasang Menu SDGs! 👋</h1>


![readme-image](https://github.com/rohmanudin05/menu-sdgs/blob/master/sdgs/sdgs.png?raw=true)

### 🤔 Cara Pasangnya?

## 🖼️ Masukkan folder sdgs ke folder : 
    temabatuah/images
## 🖼️ Masukkan file sdgs.php 
    ke folder temabatuah/plus
## 🖼️ Pasang kode dibawah di file 
    temabatuah/commons/home_layout.php (tampil di home) dan temabatuah/commons/bottom_page.php (untuk semua halaman)
    <!-- SDGS -->	
    <?php $this->load->view("$folder_themes/plus/sdgs"); ?>
    <!-- SDGS -->
## 🏷️ LOGO
    Gunakan format ini jika link adalah artikel internal
    <a href="<?= site_url('isi url setelah nama domain') ?>">
## Gunakan format ini jika link eksternal
    <a href="isi link eksternal" target="blank">
    Pada modal, Ganti kalimat Judul SDGS dengan judul / topik SDGS masing-masing
 Pada modal,  Silahkan isi masing-masing sdgs sesuai kebutuhan :
    <div class="sdgs-isi">
    Replace atau ganti kalimat ini : Isi sesuai kebutuhan...
    </div>

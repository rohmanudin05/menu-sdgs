<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<style>
.sdgs-col{position:relative;margin:5px 0;width:16.66666667%;text-align:center;}
.sdgs-col img{width:30%;margin:0 auto;}
.sdgs-col img:hover {-webkit-animation-name: tada;animation-name: tada;-webkit-animation-duration: 1s;animation-duration: 1s;-webkit-animation-fill-mode: both;animation-fill-mode: both;}
.sdgs .modal-dialog{background:transparent;}
.sdgs .modal-center-small{margin-top:30px;width:40%;-webkit-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.85);-moz-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.85);box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.85);}
.sdgs .modal-head{height:60px;}
.sdgs .modal-isi{top:60px;}
.sdgs-inner{-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.25);-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.25);box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.25);border-radius:5px;}
.sdgs-head{text-align:center;border-radius:5px 5px 0 0;}
.sdgs-head img{margin:10px auto;width:auto;height:15vh;}
@-webkit-keyframes tada{0%{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}10%,20%{-webkit-transform:scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg);transform:scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg)}30%,50%,70%,90%{-webkit-transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg);transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg)}40%,60%,80%{-webkit-transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg);transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg)}100%{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}}@keyframes tada{0%{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}10%,20%{-webkit-transform:scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg);transform:scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg)}30%,50%,70%,90%{-webkit-transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg);transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg)}40%,60%,80%{-webkit-transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg);transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg)}100%{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}}

@media (max-width: 992px) {
.sdgs .modal-center-small{margin-top:0;width:90%;height:75%;}
.sdgs-col img{width:85%;margin:0 auto;}
.sdgs-head img{height:12vh;}
.tombol{font-size:90%;}
}
</style>

<div class="sdgs">

<div class="relative-hidden ptb-5">
	<a data-toggle="collapse" data-parent="#accordion" href="#collapsesdgs">
		<div class="heading-module bggradient1 flexcenter">
		<img style="width:auto;height:30px;margin:8px 8px 8px 0;" src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/logo-sdgs.png") ?>"/><h1 class="flexcenter">SDGS Desa TTM</h1>
		</div>
	</a>
	<!--div id="collapsesdgs" class="panel-collapse collapse"-->		
	<div id="collapsesdgs" class="panel-collapse">	
	<div class="box-default bgwhite" style="border-radius:0 0 5px 5px">
		<div class="relative-hidden ptb-5 plr-10">
			<div class="flex-container">
			
				<!-- start sdgs -->
				<div class="sdgs-col">
				<a data-remote="false" data-toggle="modal" data-target="#sdgs1<?= $in; ?>" style="cursor:pointer;"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture1.jpg") ?>"/></a>
				</div>
				<!-- end sdgs -->
				
				<!-- start sdgs -->
				<div class="sdgs-col">
				<a data-remote="false" data-toggle="modal" data-target="#sdgs2<?= $in; ?>" style="cursor:pointer;"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture2.jpg") ?>"/></a>
				</div>
				<!-- end sdgs -->
				
				<!-- start sdgs -->
				<div class="sdgs-col">
				<a data-remote="false" data-toggle="modal" data-target="#sdgs3<?= $in; ?>" style="cursor:pointer;"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture3.jpg") ?>"/></a>
				</div>
				<!-- end sdgs -->
				
				<!-- start sdgs -->
				<div class="sdgs-col">
				<a data-remote="false" data-toggle="modal" data-target="#sdgs4<?= $in; ?>" style="cursor:pointer;"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture4.jpg") ?>"/></a>
				</div>
				<!-- end sdgs -->
				
				<!-- start sdgs -->
				<div class="sdgs-col">
				<a data-remote="false" data-toggle="modal" data-target="#sdgs5<?= $in; ?>" style="cursor:pointer;"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture5.jpg") ?>"/></a>
				</div>
				<!-- end sdgs -->
				
				<!-- start sdgs -->
				<div class="sdgs-col">
				<a data-remote="false" data-toggle="modal" data-target="#sdgs6<?= $in; ?>" style="cursor:pointer;"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture6.jpg") ?>"/></a>
				</div>
				<!-- end sdgs -->
				
				<!-- start sdgs -->
				<div class="sdgs-col">
				<a data-remote="false" data-toggle="modal" data-target="#sdgs7<?= $in; ?>" style="cursor:pointer;"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture7.jpg") ?>"/></a>
				</div>
				<!-- end sdgs -->
				
				<!-- start sdgs -->
				<div class="sdgs-col">
				<a data-remote="false" data-toggle="modal" data-target="#sdgs8<?= $in; ?>" style="cursor:pointer;"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture8.jpg") ?>"/></a>
				</div>
				<!-- end sdgs -->
				
				<!-- start sdgs -->
				<div class="sdgs-col">
				<a data-remote="false" data-toggle="modal" data-target="#sdgs9<?= $in; ?>" style="cursor:pointer;"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture9.jpg") ?>"/></a>
				</div>
				<!-- end sdgs -->
				
				<!-- start sdgs -->
				<div class="sdgs-col">
				<a data-remote="false" data-toggle="modal" data-target="#sdgs10<?= $in; ?>" style="cursor:pointer;"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture10.jpg") ?>"/></a>
				</div>
				<!-- end sdgs -->
				
				<!-- start sdgs -->
				<div class="sdgs-col">
				<a data-remote="false" data-toggle="modal" data-target="#sdgs11<?= $in; ?>" style="cursor:pointer;"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture11.jpg") ?>"/></a>
				</div>
				<!-- end sdgs -->
				
				<!-- start sdgs -->
				<div class="sdgs-col">
				<a data-remote="false" data-toggle="modal" data-target="#sdgs12<?= $in; ?>" style="cursor:pointer;"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture12.jpg") ?>"/></a>
				</div>
				<!-- end sdgs -->
				
				<!-- start sdgs -->
				<div class="sdgs-col">
				<a data-remote="false" data-toggle="modal" data-target="#sdgs13<?= $in; ?>" style="cursor:pointer;"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture13.jpg") ?>"/></a>
				</div>
				<!-- end sdgs -->
				
				<!-- start sdgs -->
				<div class="sdgs-col">
				<a data-remote="false" data-toggle="modal" data-target="#sdgs14<?= $in; ?>" style="cursor:pointer;"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture14.jpg") ?>"/></a>
				</div>
				<!-- end sdgs -->
				
				<!-- start sdgs -->
				<div class="sdgs-col">
				<a data-remote="false" data-toggle="modal" data-target="#sdgs15<?= $in; ?>" style="cursor:pointer;"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture15.jpg") ?>"/></a>
				</div>
				<!-- end sdgs -->
				
				<!-- start sdgs -->
				<div class="sdgs-col">
				<a data-remote="false" data-toggle="modal" data-target="#sdgs16<?= $in; ?>" style="cursor:pointer;"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture16.jpg") ?>"/></a>
				</div>
				<!-- end sdgs -->
				
				<!-- start sdgs -->
				<div class="sdgs-col">
				<a data-remote="false" data-toggle="modal" data-target="#sdgs17<?= $in; ?>" style="cursor:pointer;"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture17.jpg") ?>"/></a>
				</div>
				<!-- end sdgs -->
				
				<!-- start sdgs -->
				<div class="sdgs-col">
				<a data-remote="false" data-toggle="modal" data-target="#sdgs18<?= $in; ?>" style="cursor:pointer;"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture18.jpg") ?>"/></a>
				</div>
				<!-- end sdgs -->
				
			</div>
		</div>
	</div>
	</div>
</div>

<!-- start modal -->
<div class="modal fade" id="sdgs1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-center-small bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Desa Tanpa Kemiskinan
				<div class="close-area flexcenter"><div class="close-button" data-dismiss="modal" aria-hidden="true"><svg x="0px" y="0px" viewBox="0 0 492 492"></div>
				</div>
			</div>
			<div class="modal-isi bggrey">
				<div class="withscroll">
				<div class="p-15">
					<div class="sdgs-inner bgwhite">
						<div class="sdgs-head bggradient1"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture1.jpg") ?>"/></div>
						<div class="relative-hidden ptb-10 plr-10">
						<div class="sdgs-isi">
						 <div class="text-center">   
						<h2 class="modal-title" id="exampleModalLabel">Desa Tanpa Kemiskinan </h2>
						</div>
					<!-- COPYKAN DATA DARI SITUS KEMENDESA DISINI -->
                        <div class="panel-body">
                            <table class="table table-condensed">
								<tr>
									<td>Jumlah surat miskin/SKTM yang dikeluarkan desa selama tahun 2017</td>
									<td>105</td>
								</tr>
								<tr>
									<td>Keluarga dengan kondisi kesejahteraan sampai dengan 10% terendah di Indonesia</td>
									<td></td>
								</tr>
								<tr>
									<td>Keluarga dengan kondisi kesejahteraan diatas 10% - 20% terendah di Indonesia</td>
									<td></td>
								</tr>
							</table>
                        </div>
                    <!-- AKHIR DARI COPIAN DATA DARI SITUS KEMENDESA DISINI -->
						
						</div>
						</div>
					</div>
					<div class="flexcenter mtb-10">
						<a href="<?= site_url('artikel/2022/6/4/mengakhiri-kemiskinan-di-manapun-dan-dalam-semua-bentuk') ?>">
						<div class="tombol flexcenter bgcolor2 mlr-5">Artikel</div>
						</a>
						<div class="tombol flexcenter bgcolor1 mlr-5" data-dismiss="modal" aria-hidden="true">Tutup</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end modal -->

<!-- start modal -->
<div class="modal fade" id="sdgs2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-center-small bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Desa Tanpa Kelaparan
				<div class="close-area flexcenter"><div class="close-button" data-dismiss="modal" aria-hidden="true"><svg x="0px" y="0px" viewBox="0 0 492 492"></div>
				</div>
			</div>
			<div class="modal-isi bggrey">
				<div class="withscroll">
				<div class="p-15">
					<div class="sdgs-inner bgwhite">
						<div class="sdgs-head bggradient1"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture2.jpg") ?>"/></div>
						<div class="relative-hidden ptb-10 plr-10">
						<div class="sdgs-isi">
						 <div class="text-center">   
						<b>Desa Tanpa Kelaparan</b>
						</div>
					<!-- COPYKAN DATA DARI SITUS KEMENDESA DISINI -->
                        <div class="panel-body">
                            <table class="table table-condensed">
								<tr>
									<td>Jumlah warga penderita gizi buruk (marasmus dan kwashiorkor) pada tahun 2018</td>
									<td>0</td>
								</tr>
								<tr>
									<td>Jumlah Balita Stunting</td>
									<td>0</td>
								</tr>
							</table>
                        </div>
                    <!-- AKHIR DARI COPIAN DATA DARI SITUS KEMENDESA DISINI -->
                    
						</div>
						</div>
					</div>
					<div class="flexcenter mtb-10">
						<a href="<?= site_url('artikel/2022/6/4/mengakhiri-kelaparan-mencapai-ketahanan-pangan-dan-nutrisi-yang-lebih-baik-dan-mendukung-pertanian') ?>">
						<div class="tombol flexcenter bgcolor2 mlr-5">Artikel</div>
						</a>
						<div class="tombol flexcenter bgcolor1 mlr-5" data-dismiss="modal" aria-hidden="true">Tutup</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end modal -->

<!-- start modal -->
<div class="modal fade" id="sdgs3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-center-small bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Desa Sehat dan Sejahtera
				<div class="close-area flexcenter"><div class="close-button" data-dismiss="modal" aria-hidden="true"><svg x="0px" y="0px" viewBox="0 0 492 492"></div>
				</div>
			</div>
			<div class="modal-isi bggrey">
				<div class="withscroll">
				<div class="p-15">
					<div class="sdgs-inner bgwhite">
						<div class="sdgs-head bggradient1"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture3.jpg") ?>"/></div>
						<div class="relative-hidden ptb-10 plr-10">
						<div class="sdgs-isi">
						 <div class="text-center">   
						<b>Desa Sehat dan Sejahtera</b>
						</div>
					<!-- COPYKAN DATA DARI SITUS KEMENDESA DISINI -->
                                            
                            <div class="panel-body">
                                <table class="table table-condensed">
    								<tr>
    									<td>Jumlah Posyandu dengan kegiatan/pelayanan setiap 2 bulan sekali atau lebih</td>
    									<td>3</td>
    								</tr>
    								<tr>
    									<td>Jumlah Pos Pembinaan Terpadu (Posbindu)</td>
    									<td>2</td>
    								</tr>
    								<tr>
    									<td>Jumlah Tenaga kesehatan yang tinggal/menetap di desa</td>
    									<td>4</td>
    								</tr>
    								<tr>
    									<td>Keberadaan bidan desa (BDD)</td>
    									<td>Ada</td>
    								</tr>
    								<tr>
    									<td>Jumlah Dukun bayi/dukun bersalin/paraji yang tinggal/menetap di desa</td>
    									<td>2</td>
    								</tr>
    								<tr>
    									<td>Jumlah warga peserta BPJS Kesehatan Penerima Bantuan Iuran (PBI) dan Jamkesda pada tahun 2017</td>
    									<td>598</td>
    								</tr>
    								<tr>
    									<td>Jumlah sarana kesehatan di desa</td>
    									<td>6</td>
    								</tr>
    								<tr>
    									<td>Kejadian luar biasa (KLB) atau wabah penyakit selama setahun terakhir</td>
    									<td>-</td>
    								</tr>
    							</table>
                            </div>
    
                    <!-- AKHIR DARI COPIAN DATA DARI SITUS KEMENDESA DISINI -->
						</div>
						</div>
					</div>
					<div class="flexcenter mtb-10">
						<a href="<?= site_url('artikel/2022/6/4/memastikan-kehidupan-yang-sehat-dan-mendukung-kesejahteraan-bagi-semua-untuk-semua-usia') ?>">
						<div class="tombol flexcenter bgcolor2 mlr-5">Artikel</div>
						</a>
						<div class="tombol flexcenter bgcolor1 mlr-5" data-dismiss="modal" aria-hidden="true">Tutup</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end modal -->

<!-- start modal -->
<div class="modal fade" id="sdgs4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-center-small bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Pendidikan Desa Berkualitas
				<div class="close-area flexcenter"><div class="close-button" data-dismiss="modal" aria-hidden="true"><svg x="0px" y="0px" viewBox="0 0 492 492"></div>
				</div>
			</div>
			<div class="modal-isi bggrey">
				<div class="withscroll">
				<div class="p-15">
					<div class="sdgs-inner bgwhite">
						<div class="sdgs-head bggradient1"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture4.jpg") ?>"/></div>
						<div class="relative-hidden ptb-10 plr-10">
						<div class="sdgs-isi">
						 <div class="text-center">   
						<b>Pendidikan Desa Berkualitas</b>
						</div>
					<!-- COPYKAN DATA DARI SITUS KEMENDESA DISINI -->
                                            
                            <div class="panel-body">
                                <table class="table table-condensed">
									<tr>
										<td>Kegiatan pemberantasan buta aksara/keaksaraan fungsional (KF) selama 3 tahun terakhir</td>
										<td>Tidak Ada</td>
									</tr>
									<tr>
										<td>Kegiatan pendidikan Paket A/B/C selama setahun terakhir</td>
										<td>Tidak Ada</td>
									</tr>
									<tr>
										<td>Jumlah sarana pendidikan SMP di desa</td>
										<td>0</td>
									</tr>
									<tr>
										<td>Jumlah	Pos	Pendidikan	Anak	Usia	Dini	(Pos	PAUD)</td>
										<td>2</td>
									</tr>
								</table>
                            </div>

                    <!-- AKHIR DARI COPIAN DATA DARI SITUS KEMENDESA DISINI -->
						</div>
						</div>
					</div>
					<div class="flexcenter mtb-10">
						<a href="<?= site_url('artikel/2022/6/4/memastikan-pendidikan-yang-inklusif-dan-berkualitas-setara-juga-mendukung-kesempatan-belajar-seumur') ?>">
						<div class="tombol flexcenter bgcolor2 mlr-5">Artikel</div>
						</a>
						<div class="tombol flexcenter bgcolor1 mlr-5" data-dismiss="modal" aria-hidden="true">Tutup</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end modal -->

<!-- start modal -->
<div class="modal fade" id="sdgs5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-center-small bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Keterlibatan Perempuan Desa
				<div class="close-area flexcenter"><div class="close-button" data-dismiss="modal" aria-hidden="true"><svg x="0px" y="0px" viewBox="0 0 492 492"></div>
				</div>
			</div>
			<div class="modal-isi bggrey">
				<div class="withscroll">
				<div class="p-15">
					<div class="sdgs-inner bgwhite">
						<div class="sdgs-head bggradient1"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture5.jpg") ?>"/></div>
						<div class="relative-hidden ptb-10 plr-10">
						<div class="sdgs-isi">
						 <div class="text-center">   
						<b>Keterlibatan Perempuan Desa</b>
						</div>
					<!-- COPYKAN DATA DARI SITUS KEMENDESA DISINI -->
                                            
                             <div class="panel-body">
                                <table class="table table-condensed">
									<tr>
										<td>Keberadaan	kepala desa perempuan</td>
										<td>Ya</td>
									</tr>
									<tr>
										<td>Keberadaan Sekretaris desa perempuan</td>
										<td></td>
									</tr>
									<tr>
										<td>Jumlah Anggota BPD perempuan</td>
										<td></td>
									</tr>
									<tr>
										<td>Jumlah peserta Musyawarah Desa (Musdes) Perempuan</td>
										<td></td>
									</tr>
									<tr>
										<td>Jumlah Pendamping Desa perempuan</td>
										<td></td>
									</tr>
									<tr>
										<td>Perdes/SK Kades yang responsif gender mendukung pemberdayaan perempuan</td>
										<td></td>
									</tr>
									<tr>
										<td>Terdapat perdes/SK Kades yang menjamin perempuan untuk  mendapatkan pelayanan, informasi, dan pendidikan terkait keluarga berencana dan kesehatan reproduksi</td>
										<td></td>
									</tr>
									<tr>
										<td>Prevalensi kasus kekerasan terhadap anak perempuan</td>
										<td></td>
									</tr>
									<tr>
										<td>Kasus kekerasan terhadap perempuan yang mendapat layanan komprehensif</td>
										<td></td>
									</tr>
									<tr>
										<td>Median usia kawin pertama perempuan (pendewasaan usia kawin pertama) di atas 18 tahun</td>
										<td></td>
									</tr>
									<tr>
										<td>Angka kelahiran pada remaja usia 15-19 tahun (age specific fertility rate/ASFR)</td>
										<td></td>
									</tr>
									<tr>
										<td>APK SMA/SMK/MA/sederajat</td>
										<td></td>
									</tr>
									<tr>
										<td>Unmeet need kebutuhan ber-KB</td>
										<td></td>
									</tr>
									<tr>
										<td>Jumlah Pasangan Usia Subur (PUS) memahami metode kontrasepsi modern</td>
										<td></td>
									</tr>
								</table>
                            </div>

                    <!-- AKHIR DARI COPIAN DATA DARI SITUS KEMENDESA DISINI -->
						</div>
						</div>
					</div>
					<div class="flexcenter mtb-10">
						<a href="<?= site_url('artikel/2022/6/4/mencapai-kesetaraan-gender-dan-memberdayakan-semua-perempuan-dan-anak-perempuan') ?>">
						<div class="tombol flexcenter bgcolor2 mlr-5">Artikel</div>
						</a>
						<div class="tombol flexcenter bgcolor1 mlr-5" data-dismiss="modal" aria-hidden="true">Tutup</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end modal -->

<!-- start modal -->
<div class="modal fade" id="sdgs6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-center-small bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Desa Layak Air Bersih dan Sanitasi
				<div class="close-area flexcenter"><div class="close-button" data-dismiss="modal" aria-hidden="true"><svg x="0px" y="0px" viewBox="0 0 492 492"></div>
				</div>
			</div>
			<div class="modal-isi bggrey">
				<div class="withscroll">
				<div class="p-15">
					<div class="sdgs-inner bgwhite">
						<div class="sdgs-head bggradient1"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture6.jpg") ?>"/></div>
						<div class="relative-hidden ptb-10 plr-10">
						<div class="sdgs-isi">
						 <div class="text-center">   
						<b>Desa Layak Air Bersih dan Sanitasi</b>
						</div>
					<!-- COPYKAN DATA DARI SITUS KEMENDESA DISINI -->
                                            
                             <div class="panel-body">
                                <table class="table table-condensed">
									<tr>
										<td>Sumber air untuk minum sebagian besar keluarga berasal dari</td>
										<td>Sumur bor atau pompa</td>
										
									</tr>
									<tr>
										<td>Sumber	air	untuk	mandi/cuci sebagian	besar	keluarga berasal	dari</td>
										<td>Sumur bor atau pompa</td>
									</tr>
								</table>
                            </div>

                    <!-- AKHIR DARI COPIAN DATA DARI SITUS KEMENDESA DISINI -->
						</div>
						</div>
					</div>
					<div class="flexcenter mtb-10">
						<a href="<?= site_url('artikel/2022/6/4/memastikan-ketersediaan-dan-manajemen-air-bersih-yang-berkelanjutan-dan-sanitasi-bagi-semua') ?>">
						<div class="tombol flexcenter bgcolor2 mlr-5">Artikel</div>
						</a>
						<div class="tombol flexcenter bgcolor1 mlr-5" data-dismiss="modal" aria-hidden="true">Tutup</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end modal -->

<!-- start modal -->
<div class="modal fade" id="sdgs7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-center-small bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Desa Berenergi Bersih dan Terbarukan
				<div class="close-area flexcenter"><div class="close-button" data-dismiss="modal" aria-hidden="true"><svg x="0px" y="0px" viewBox="0 0 492 492"></div>
				</div>
			</div>
			<div class="modal-isi bggrey">
				<div class="withscroll">
				<div class="p-15">
					<div class="sdgs-inner bgwhite">
						<div class="sdgs-head bggradient1"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture7.jpg") ?>"/></div>
						<div class="relative-hidden ptb-10 plr-10">
						<div class="sdgs-isi">
						 <div class="text-center">   
						<b>Desa Berenergi Bersih dan Terbarukan</b>
						</div>
					<!-- COPYKAN DATA DARI SITUS KEMENDESA DISINI -->
                                            
                             <div class="panel-body">
                                <table class="table table-condensed">
									<tr>
										<td>Wilayah desa dilalui Saluran Udara Tegangan Ekstra Tinggi (SUTET), Saluran Udara Tegangan Tinggi (SUTT), Saluran Udara Tegangan Tinggi Arus Searah (SUTTAS)</td>
										<td>Tidak</td>
									</tr>
									<tr>
										<td>Keberadaan pangkalan/agen/penjual minyak tanah (termasuk penjual minyak tanah keliling)</td>
										<td>Tidak Ada</td>
									</tr>
									<tr>
										<td>Keberadaan pangkalan/agen/penjual LPG (warung, toko, supermarket, penjual gas keliling)</td>
										<td>Ada	</td>
									</tr>
									<tr>
										<td>Penerangan di jalan utama desa/kelurahan</td>
										<td>Ada, sebagian kecil	</td>
									</tr>
									<tr>
										<td>Bahan bakar untuk memasak sebagian besar keluarga di desa</td>
										<td>LPG 3 Kg</td>
									</tr>
									<tr>
										<td>Jumlah	keluarga	pengguna	listrik</td>
										<td>492</td>
									</tr>
								</table>
                            </div>

                    <!-- AKHIR DARI COPIAN DATA DARI SITUS KEMENDESA DISINI -->
						</div>
						</div>
					</div>
					<div class="flexcenter mtb-10">
						<a href="<?= site_url('artikel/2022/6/4/memastikan-akses-terhadap-energi-yang-terjangkau-dapat-diandalkan-berkelanjutan-dan-modern-bagi-se') ?>">
						<div class="tombol flexcenter bgcolor2 mlr-5">Artikel</div>
						</a>
						<div class="tombol flexcenter bgcolor1 mlr-5" data-dismiss="modal" aria-hidden="true">Tutup</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end modal -->

<!-- start modal -->
<div class="modal fade" id="sdgs8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-center-small bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Pertumbuhan Ekonomi Desa Merata
				<div class="close-area flexcenter"><div class="close-button" data-dismiss="modal" aria-hidden="true"><svg x="0px" y="0px" viewBox="0 0 492 492"></div>
				</div>
			</div>
			<div class="modal-isi bggrey">
				<div class="withscroll">
				<div class="p-15">
					<div class="sdgs-inner bgwhite">
						<div class="sdgs-head bggradient1"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture8.jpg") ?>"/></div>
						<div class="relative-hidden ptb-10 plr-10">
						<div class="sdgs-isi">
						 <div class="text-center">   
						<b>Pertumbuhan Ekonomi Desa Merata</b>
						</div>
					<!-- COPYKAN DATA DARI SITUS KEMENDESA DISINI -->
                                            
                             <div class="panel-body">
                                <table class="table table-condensed">
									<tr>
										<td>Keberadaan warga desa yang sedang bekerja sebagai TKI di luar negeri</td>
										<td>	Ada	</td>
									</tr>
									<tr>
										<td>Sumber penghasilan utama sebagian besar penduduk desa berasal dari lapangan usaha</td>
										<td>Pertanian</td>
									</tr>
									<tr>
										<td> Jenis komoditi/sub sektor utama sebagian besar penduduk desa</td>
										<td>Kelapa</td>
									</tr>
									<tr>
										<td>Keberadaan produk barang unggulan/utama desa</td>
										<td>Tidak Ada</td>
									</tr>
									<tr>
										<td>Produk Pangan unggulan/utama desa</td>
										<td>-</td>
									</tr>
									<tr>
										<td>Produk Non Pangan unggulan/utama desa</td>
										<td>-</td>
									</tr>
									<tr>
										<td>Jumlah pendidikan keterampilan di desa</td>
										<td>0</td>
									</tr>
									<tr>
										<td>Fasilitas Kredit Usaha Rakyat (KUR) selama setahun terakhir</td>
										<td>Ada	</td>
									</tr>
									<tr>
										<td>Jumlah	sarana dan	prasarana ekonomi di desa</td>
										<td>14</td>
									</tr>
									<tr>
										<td>Jumlah sarana lembaga keuangan yang beroperasi di	desa</td>
										<td>0</td>
									</tr>
									<tr>
										<td>Jumlah	koperasi di	desa yang masih aktif</td>
										<td>0</td>
									</tr>
									<tr>
										<td>Keberadaan salon kecantikan</td>
										<td>Tidak Ada</td>
									</tr>
									<tr>
										<td>Jumlah unit usaha BUMDes</td>
										<td>2</td>
									</tr>
								</table>
                            </div>

                    <!-- AKHIR DARI COPIAN DATA DARI SITUS KEMENDESA DISINI -->
						</div>
						</div>
					</div>
					<div class="flexcenter mtb-10">
						<a href="<?= site_url('artikel/2022/6/4/mendukung-pertumbuhan-ekonomi-yang-inklusif-dan-berkelanjutan-tenaga-kerja-penuh-dan-produktif-dan') ?>">
						<div class="tombol flexcenter bgcolor2 mlr-5">Artikel</div>
						</a>
						<div class="tombol flexcenter bgcolor1 mlr-5" data-dismiss="modal" aria-hidden="true">Tutup</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end modal -->

<!-- start modal -->
<div class="modal fade" id="sdgs9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-center-small bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Infrastruktur dan Inovasi Desa Sesuai Kebutuhan
				<div class="close-area flexcenter"><div class="close-button" data-dismiss="modal" aria-hidden="true"><svg x="0px" y="0px" viewBox="0 0 492 492"></div>
				</div>
			</div>
			<div class="modal-isi bggrey">
				<div class="withscroll">
				<div class="p-15">
					<div class="sdgs-inner bgwhite">
						<div class="sdgs-head bggradient1"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture9.jpg") ?>"/></div>
						<div class="relative-hidden ptb-10 plr-10">
						<div class="sdgs-isi">
						 <div class="text-center">   
						<b>Infrastruktur dan Inovasi Desa Sesuai Kebutuhan</b>
						</div>
					<!-- COPYKAN DATA DARI SITUS KEMENDESA DISINI -->
                                            
                             <div class="panel-body">
                                <table class="table table-condensed">
    								<tr>
    									<td>Jumlah Industri mikro dan kecil (memiliki tenaga kerja kurang dari 20 pekerja)</td>
    									<td>27</td>
    								</tr>
    								<tr>
    									<td>Jumah Sentra Industri</td>
    									<td>0</td>
    								</tr>
    								<tr>
    									<td>Jumlah Lingkungan Industri Kecil (LIK)</td>
    									<td>0</td>
    								</tr>
    								<tr>
    									<td>Jumlah Perkampungan Industri Kecil (PIK)</td>
    									<td>0</td>
    								</tr>
    								<tr>
    									<td>Lalu lintas	dari/ke	desa</td>
    									<td>	Darat</td>
    								</tr>
    								<tr>
    									<td>Jenis permukaan jalan darat antar desa yang	terluas	</td>
    									<td>Aspal/ beton</td>
    								</tr>
    							</table>
                            </div>
    
                    <!-- AKHIR DARI COPIAN DATA DARI SITUS KEMENDESA DISINI -->
						</div>
						</div>
					</div>
					<div class="flexcenter mtb-10">
						<a href="<?= site_url('artikel/2022/6/4/membangun-infrastruktur-yang-tahan-lama-mendukung-industrialisasi-yang-inklusif-dan-berkelanjutan-d') ?>">
						<div class="tombol flexcenter bgcolor2 mlr-5">Artikel</div>
						</a>
						<div class="tombol flexcenter bgcolor1 mlr-5" data-dismiss="modal" aria-hidden="true">Tutup</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end modal -->

<!-- start modal -->
<div class="modal fade" id="sdgs10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-center-small bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Desa Tanpa Kesenjangan
				<div class="close-area flexcenter"><div class="close-button" data-dismiss="modal" aria-hidden="true"><svg x="0px" y="0px" viewBox="0 0 492 492"></div>
				</div>
			</div>
			<div class="modal-isi bggrey">
				<div class="withscroll">
				<div class="p-15">
					<div class="sdgs-inner bgwhite">
						<div class="sdgs-head bggradient1"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture10.jpg") ?>"/></div>
						<div class="relative-hidden ptb-10 plr-10">
						<div class="sdgs-isi">
						 <div class="text-center">   
						<b>Desa Tanpa Kesenjangan</b>
						</div>
					<!-- COPYKAN DATA DARI SITUS KEMENDESA DISINI -->
                                            
                             <div class="panel-body">
                                <table class="table table-condensed">
									<tr>
										<td>Keberadaan permukiman kumuh (sanitasi lingkungan buruk, bangunan padat, dan sebagian besar tidak layak huni) di desa</td>
										<td>Tidak ada</td>
									</tr>
									<tr>
										<td>Jumlah keluarga di permukiman kumuh</td>
										<td>-</td>
									</tr>
									<tr>
										<td>Status IDM 2022</td>
										<td>BERKEMBANG</td>
									</tr>
								</table>
                            </div>

                    <!-- AKHIR DARI COPIAN DATA DARI SITUS KEMENDESA DISINI -->
						</div>
						</div>
					</div>
					<div class="flexcenter mtb-10">
						<a href="<?= site_url('artikel/2022/6/4/mengurangi-ketimpangan-didalam-dan-antar-negara') ?>">
						<div class="tombol flexcenter bgcolor2 mlr-5">Artikel</div>
						</a>
						<div class="tombol flexcenter bgcolor1 mlr-5" data-dismiss="modal" aria-hidden="true">Tutup</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end modal -->

<!-- start modal -->
<div class="modal fade" id="sdgs11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-center-small bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Kawasan Permukiman Desa Aman dan Nyaman
				<div class="close-area flexcenter"><div class="close-button" data-dismiss="modal" aria-hidden="true"><svg x="0px" y="0px" viewBox="0 0 492 492"></div>
				</div>
			</div>
			<div class="modal-isi bggrey">
				<div class="withscroll">
				<div class="p-15">
					<div class="sdgs-inner bgwhite">
						<div class="sdgs-head bggradient1"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture11.jpg") ?>"/></div>
						<div class="relative-hidden ptb-10 plr-10">
						<div class="sdgs-isi">
						 <div class="text-center">   
						<b>Kawasan Permukiman Desa Aman dan Nyaman</b>
						</div>
					<!-- COPYKAN DATA DARI SITUS KEMENDESA DISINI -->

                         <div class="panel-body">
                            <table class="table table-condensed">
								<tr>
									<td>Keberadaan permukiman di bantaran sungai</td>
									<td>Tidak ada</td>
								</tr>
								<tr>
									<td>Jumlah keluarga di permukiman bantaran sungai</td>
									<td>-</td>
								</tr>
								<tr>
									<td>Sarana transportasi yang biasa digunakan oleh sebagian besar penduduk dari kantor kepala desa ke kantor camat</td>
									<td>Jalan kaki, sepeda, dll.</td>
								</tr>
								<tr>
									<td>Sarana transportasi yang biasa digunakan oleh sebagian besar penduduk dari kantor kepala desa ke kantor bupati/walikota</td>
									<td>Jalan kaki, sepeda, dll.</td>
								</tr>
								<tr>
									<td>Kegiatan Pembangunan/pemeliharaan pos keamanan lingkungan di desa selama setahun terakhir</td>
									<td>Ya</td>
								</tr>
								<tr>
									<td>Jumlah anggota linmas/hansip di desa</td>
									<td>0</td>
								</tr>
								<tr>
									<td>Keberadaan pos polisi (termasuk kantor polisi) di desa</td>
									<td>Tidak Ada</td>
								</tr>
							</table>
                        </div>

                    <!-- AKHIR DARI COPIAN DATA DARI SITUS KEMENDESA DISINI -->
						</div>
						</div>
					</div>
					<div class="flexcenter mtb-10">
						<a href="<?= site_url('artikel/2022/6/4/membangun-kota-dan-pemukiman-inklusif-aman-tahan-lama-dan-berkelanjutan') ?>">
						<div class="tombol flexcenter bgcolor2 mlr-5">Artikel</div>
						</a>
						<div class="tombol flexcenter bgcolor1 mlr-5" data-dismiss="modal" aria-hidden="true">Tutup</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end modal -->

<!-- start modal -->
<div class="modal fade" id="sdgs12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-center-small bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Konsumsi dan Produksi Desa Sadar Lingkungan
				<div class="close-area flexcenter"><div class="close-button" data-dismiss="modal" aria-hidden="true"><svg x="0px" y="0px" viewBox="0 0 492 492"></div>
				</div>
			</div>
			<div class="modal-isi bggrey">
				<div class="withscroll">
				<div class="p-15">
					<div class="sdgs-inner bgwhite">
						<div class="sdgs-head bggradient1"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture12.jpg") ?>"/></div>
						<div class="relative-hidden ptb-10 plr-10">
						<div class="sdgs-isi">
						 <div class="text-center">   
						<b>Konsumsi dan Produksi Desa Sadar Lingkungan</b>
						</div>
					<!-- COPYKAN DATA DARI SITUS KEMENDESA DISINI -->
                                            
                         <div class="panel-body">
                            <table class="table table-condensed">
								<tr>
									<td>Tempat buang sampah sebagian besar keluarga</td>
									<td>Dalam lubang atau dibakar</td>
								</tr>
								<tr>
									<td>Tempat/saluran pembuangan limbah cair dari air mandi/cuci sebagian besar keluarga</td>
									<td>Dalam lubang atau tanah terbuka	</td>
								</tr>
								<tr>
									<td>Air sungai tercemar limbah</td>
									<td>Tidak</td>
								</tr>
								<tr>
									<td>Keberadaan mata air  di desa</td>
									<td>Tidak ada</td>
								</tr>
								<tr>
									<td>Pengolahan/daur ulang sampah/limbah (reuse, recycle) </td>
									<td>Tidak ada kegiatan</td>
								</tr>
							</table>
                        </div>

                <!-- AKHIR DARI COPIAN DATA DARI SITUS KEMENDESA DISINI -->
						</div>
						</div>
					</div>
					<div class="flexcenter mtb-10">
						<a href="<?= site_url('artikel/2022/6/4/memastikan-pola-konsumsi-dan-produksi-yang-berkelanjutan') ?>">
						<div class="tombol flexcenter bgcolor2 mlr-5">Artikel</div>
						</a>
						<div class="tombol flexcenter bgcolor1 mlr-5" data-dismiss="modal" aria-hidden="true">Tutup</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end modal -->

<!-- start modal -->
<div class="modal fade" id="sdgs13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-center-small bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Desa Tanggap Perubahan Iklim
				<div class="close-area flexcenter"><div class="close-button" data-dismiss="modal" aria-hidden="true"><svg x="0px" y="0px" viewBox="0 0 492 492"></div>
				</div>
			</div>
			<div class="modal-isi bggrey">
				<div class="withscroll">
				<div class="p-15">
					<div class="sdgs-inner bgwhite">
						<div class="sdgs-head bggradient1"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture13.jpg") ?>"/></div>
						<div class="relative-hidden ptb-10 plr-10">
						<div class="sdgs-isi">
						 <div class="text-center">   
						<b>Desa Tanggap Perubahan Iklim</b>
						</div>
					<!-- COPYKAN DATA DARI SITUS KEMENDESA DISINI -->
                                            
                        <div class="panel-body">
                            <table class="table table-condensed">
								<tr>
									<td>Kejadian/bencana alam (mengganggu kehidupan	dan	menyebabkan	kerugian bagi masyarakat) yang terjadi pada tahun 2018 dan 2019 (Januari sampai April)</td>
									<td>-</td>
								</tr>
								<tr>
									<td>Fasilitas Sistem peringatan dini bencana alam yang ada di desa</td>
									<td>Tidak ada</td>
								</tr>
							</table>
                        </div>
                    <!-- AKHIR DARI COPIAN DATA DARI SITUS KEMENDESA DISINI -->
						</div>
						</div>
					</div>
					<div class="flexcenter mtb-10">
						<a href="<?= site_url('artikel/2022/6/4/mengambil-aksi-segera-untuk-memerangi-perubahan-iklim-dan-dampaknya') ?>">
						<div class="tombol flexcenter bgcolor2 mlr-5">Artikel</div>
						</a>
						<div class="tombol flexcenter bgcolor1 mlr-5" data-dismiss="modal" aria-hidden="true">Tutup</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end modal -->

<!-- start modal -->
<div class="modal fade" id="sdgs14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-center-small bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Desa Peduli Lingkungan Laut
				<div class="close-area flexcenter"><div class="close-button" data-dismiss="modal" aria-hidden="true"><svg x="0px" y="0px" viewBox="0 0 492 492"></div>
				</div>
			</div>
			<div class="modal-isi bggrey">
				<div class="withscroll">
				<div class="p-15">
					<div class="sdgs-inner bgwhite">
						<div class="sdgs-head bggradient1"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture14.jpg") ?>"/></div>
						<div class="relative-hidden ptb-10 plr-10">
						<div class="sdgs-isi">
						 <div class="text-center">   
						<b>Desa Peduli Lingkungan Laut</b>
						</div>
					<!-- COPYKAN DATA DARI SITUS KEMENDESA DISINI -->
                        <div class="panel-body">
                            <table class="table table-condensed">
								<tr>
									<td>Wilayah desa terletak di sebanyak</td>
									<td>1 pulau</td>
								</tr>
								<tr>
									<td>Ada wilayah desa yang berbatasan langsung dengan laut</td>
									<td>Ada	</td>
								</tr>
								<tr>
									<td>Pemanfaatan laut untuk Perikanan tangkap (mencakup seluruh biota laut)</td>
									<td>Ada	</td>
								</tr>
								<tr>
									<td>Pemanfaatan laut untuk Perikanan budidaya (mencakup seluruh biota laut)</td>
									<td>Tidak ada</td>
								</tr>
								<tr>
									<td>Pemanfaatan laut untuk Tambak garam</td>
									<td>Tidak ada</td>
								</tr>
								<tr>
									<td>Pemanfaatan laut untuk Wisata bahari</td>
									<td>Tidak ada</td>
								</tr>
								<tr>
									<td>Pemanfaatan laut untuk Transportasi umum</td>
									<td>Tidak ada</td>
								</tr>
							</table>
                        </div>
                    <!-- AKHIR DARI COPIAN DATA DARI SITUS KEMENDESA DISINI -->
						</div>
						</div>
					</div>
					<div class="flexcenter mtb-10">
						<a href="<?= site_url('artikel/2022/6/4/mengkonservasi-dan-memanfaatkan-secara-berkelanjutan-sumber-daya-laut-samudra-dan-maritim-untuk-pem') ?>">
						<div class="tombol flexcenter bgcolor2 mlr-5">Artikel</div>
						</a>
						<div class="tombol flexcenter bgcolor1 mlr-5" data-dismiss="modal" aria-hidden="true">Tutup</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end modal -->

<!-- start modal -->
<div class="modal fade" id="sdgs15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-center-small bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Desa Peduli Lingkungan Darat
				<div class="close-area flexcenter"><div class="close-button" data-dismiss="modal" aria-hidden="true"><svg x="0px" y="0px" viewBox="0 0 492 492"></div>
				</div>
			</div>
			<div class="modal-isi bggrey">
				<div class="withscroll">
				<div class="p-15">
					<div class="sdgs-inner bgwhite">
						<div class="sdgs-head bggradient1"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture15.jpg") ?>"/></div>
						<div class="relative-hidden ptb-10 plr-10">
						<div class="sdgs-isi">
						 <div class="text-center">   
						<b>Desa Peduli Lingkungan Darat</b>
						</div>
					<!-- COPYKAN DATA DARI SITUS KEMENDESA DISINI -->
                       <div class="panel-body">
                            <table class="table table-condensed">
								<tr>
									<td>Topografi wilayah desa</td>
									<td>Dataran</td>
								</tr>
								<tr>
									<td>Keberadaan permukiman penduduk di lereng/puncak</td>
									<td>Tidak ada</td>
								</tr>
								<tr>
									<td>Keberadaan sungai</td>
									<td>Ada	</td>
								</tr>
								<tr>
									<td>Keberadaan saluran irigasi</td>
									<td>Tidak ada</td>
								</tr>
								<tr>
									<td>Keberadaan danau/waduk/situ/bendungan</td>
									<td>Tidak ada</td>

								</tr>
								<tr>
									<td>Jumlah embung di desa</td>
									<td>0</td>
								</tr>
								<tr>
									<td>Pencemaran Air</td>
									<td>Tidak ada</td>
								</tr>
								<tr>
									<td>Pencemaran Tanah</td>
									<td>Tidak ada</td>
								</tr>
								<tr>
									<td>Pencemaran Udara</td>
									<td>Tidak ada</td>
								</tr>
								<tr>
									<td>Penanaman/pemeliharaan pepohonan di lahan kritis, penanaman mangrove, dan sejenisnya</td>
									<td>Ada, sebagian warga terlibat</td>
								</tr>
								<tr>
									<td>Pengolahan/daur ulang sampah/limbah (reuse, recycle </td>
									<td>-</td>
								</tr>
							</table>
                        </div> 
                    <!-- AKHIR DARI COPIAN DATA DARI SITUS KEMENDESA DISINI -->
						</div>
						</div>
					</div>
					<div class="flexcenter mtb-10">
						<a href="<?= site_url('artikel/2022/6/4/melindungi-memulihkan-dan-mendukung-penggunaan-yang-berkelanjutan-terhadap-ekosistem-daratan-menge') ?>">
						<div class="tombol flexcenter bgcolor2 mlr-5">Artikel</div>
						</a>
						<div class="tombol flexcenter bgcolor1 mlr-5" data-dismiss="modal" aria-hidden="true">Tutup</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end modal -->

<!-- start modal -->
<div class="modal fade" id="sdgs16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-center-small bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Desa Damai Berkeadilan
				<div class="close-area flexcenter"><div class="close-button" data-dismiss="modal" aria-hidden="true"><svg x="0px" y="0px" viewBox="0 0 492 492"></div>
				</div>
			</div>
			<div class="modal-isi bggrey">
				<div class="withscroll">
				<div class="p-15">
					<div class="sdgs-inner bgwhite">
						<div class="sdgs-head bggradient1"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture16.jpg") ?>"/></div>
						<div class="relative-hidden ptb-10 plr-10">
						<div class="sdgs-isi">
						 <div class="text-center">   
						<b>Desa Damai Berkeadilan</b>
						</div>
					<!-- COPYKAN DATA DARI SITUS KEMENDESA DISINI -->
                       <div class="panel-body">
                            <table class="table table-condensed">
								<tr>
									<td>Jumlah orang yang dipasung di desa</td>
									<td>1</td>
								</tr>
								<tr>
									<td>Kejadian perkelahian massal di desa selama setahun terakhir</td>
									<td>Tidak ada</td>
								</tr>
								<tr>
									<td>Perkelahian massal yang paling sering terjadi sudah diselesaikan/didamaikan</td>
									<td>-</td>
								</tr>
								<tr>
									<td>Tindak kejahatan yang paling sering terjadi di desa selama setahun terakhir</td>
									<td>Pencurian</td>
								</tr>
								<tr>
									<td>Jumlah korban bunuh diri (termasuk percobaan bunuh diri) yang terjadi di desa</td>
									<td>0</td>
									<td>
								</tr>
								<tr>
									<td>Keberadaan lokasi berkumpul/mangkal anak jalanan (selain rumah singgah) di desa/kelurahan</td>
									<td>Tidak ada</td>
								</tr>
								<tr>
									<td>Keberadaan tempat mangkal gelandangan/pengemis di desa</td>
									<td>Tidak ada</td>
								</tr>
								<tr>
									<td>Keberadaan lokalisasi/lokasi/tempat mangkal Pekerja Seks Komersial (PSK) di desa</td>
									<td>Tidak ada</td>
								</tr>
							</table>
                        </div> 
                    <!-- AKHIR DARI COPIAN DATA DARI SITUS KEMENDESA DISINI -->
						</div>
						</div>
					</div>
					<div class="flexcenter mtb-10">
						<a href="<?= site_url('artikel/2022/6/4/mendukung-masyarakat-yang-damai-dan-inklusif-untuk-pembangunan-berkelanjutan-menyediakan-akses-terh') ?>">
						<div class="tombol flexcenter bgcolor2 mlr-5">Artikel</div>
						</a>
						<div class="tombol flexcenter bgcolor1 mlr-5" data-dismiss="modal" aria-hidden="true">Tutup</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end modal -->

<!-- start modal -->
<div class="modal fade" id="sdgs17" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-center-small bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Kemitraan Untuk Membangun Desa
				<div class="close-area flexcenter"><div class="close-button" data-dismiss="modal" aria-hidden="true"><svg x="0px" y="0px" viewBox="0 0 492 492"></div>
				</div>
			</div>
			<div class="modal-isi bggrey">
				<div class="withscroll">
				<div class="p-15">
					<div class="sdgs-inner bgwhite">
						<div class="sdgs-head bggradient1"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture17.jpg") ?>"/></div>
						<div class="relative-hidden ptb-10 plr-10">
						<div class="sdgs-isi">
						 <div class="text-center">   
						<b>Kemitraan Untuk Membangun Desa</b>
						</div>
					<!-- COPYKAN DATA DARI SITUS KEMENDESA DISINI -->
                       <div class="panel-body">
                            <table class="table table-condensed">
								<tr>
								<td>Produk barang unggulan/utama desa yang diekspor ke negara lain</td>
								<td>-</td>
								</tr>
								<tr>
									<td>Program/siaran TVRI diterima di desa</td>
									<td>Ya</td>
								</tr>
								<tr>
									<td>Program/siaran TV Swasta diterima di desa</td>
									<td>Ya</td>
								</tr>
								<tr>
									<td>Keberadaan sistem informasi desa</td>
									<td>Tidak ada</td>
								</tr>
								<tr>
									<td>Keberadaan kerjasama antar desa tahun 2018</td>
									<td>Tidak ada</td>
								</tr>
								<tr>
									<td>Keberadaan	warga	yang	menggunakan	telepon	seluler/handphone</td>
									<td>Sebagian besar warga</td>
								</tr>
								<tr>
									<td>Keberadaan internet untuk warnet, game online, dan	fasilitas lainnya di desa</td>
									<td>Ada</td>
								</tr>
								<tr>
									<td>Jumlah menara telepon seluler atau Base Transceiver Station (BTS) </td>
									<td>0</td>
								</tr>
								<tr>
									<td>Jumlah operator layanan komunikasi telepon seluler/handphone yang menjangkau di desa</td>
									<td>3</td>
								</tr>
								<tr>
									<td>Sinyal telepon seluler/handphone di sebagian besar wilayah desa</td>
									<td>Sinyal kuat</td>
								</tr>
								<tr>
									<td>Fasilitas internet di kantor kepala desa</td>
									<td>Berfungsi</td>
								</tr>
								<tr>
									<td>Kantor pos/pos pembantu/rumah pos</td>
									<td>Tidak ada</td>
								</tr>
								<tr>
									<td>Komputer/PC/laptop yang	masih berfungsi	di kantor kepala desa</td>
									<td>Digunakan</td>
								</tr>
							</table>
                        </div> 
                    <!-- AKHIR DARI COPIAN DATA DARI SITUS KEMENDESA DISINI -->
						</div>
						</div>
					</div>
					<div class="flexcenter mtb-10">
						<a href="<?= site_url('artikel/2022/6/4/menguatkan-ukuran-implementasi-dan-merevitalisasi-kemitraan-global-untuk-pembangunan-yang-berkelanju') ?>">
						<div class="tombol flexcenter bgcolor2 mlr-5">Artikel</div>
						</a>
						<div class="tombol flexcenter bgcolor1 mlr-5" data-dismiss="modal" aria-hidden="true">Tutup</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end modal -->

<!-- start modal -->
<div class="modal fade" id="sdgs18" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog">
		<div class="modal-center-small bgwhite">
			<div class="modal-head bggradient2 flexleft">
				Kelembagaan Desa Dinamis dan Budaya Desa Adaptif
				<div class="close-area flexcenter"><div class="close-button" data-dismiss="modal" aria-hidden="true"><svg x="0px" y="0px" viewBox="0 0 492 492"></div>
				</div>
			</div>
			<div class="modal-isi bggrey">
				<div class="withscroll">
				<div class="p-15">
					<div class="sdgs-inner bgwhite">
						<div class="sdgs-head bggradient1"><img src="<?= base_url("$this->theme_folder/$this->theme/images/sdgs/Picture18.jpg") ?>"/></div>
						<div class="relative-hidden ptb-10 plr-10">
						<div class="sdgs-isi">
						 <div class="text-center">   
						<b>Kelembagaan Desa Dinamis dan Budaya Desa Adaptif</b>
						</div>
					<!-- COPYKAN DATA DARI SITUS KEMENDESA DISINI -->
                        <div class="panel-body">
                            <table class="table table-condensed">
								<tr>
									<td>Badan Permusyawaratan Desa</td>
									<td>Ada</td>
								</tr>
								<tr>
									<td>Kegiatan pemerintahan desa dilaksanakan di</td>
									<td>Kantor kepala desa</td>
								</tr>
								<tr>
									<td>Kebiasaan masyarakat membakar ladang/kebun di desa untuk proses usaha pertanian</td>
									<td>Tidak ada</td>
								</tr>
								<tr>
									<td>Keberadaan lokasi penggalian Golongan C (misalnya: batu kali, pasir, kapur, kaolin, pasir kuarsa, tanah liat, dll.) di desa</td>
									<td>Tidak ada</td>
								</tr>
								<tr>
									<td>Situs cagar budaya di desa</td>
									<td>
									Tidak ada</td>
								</tr>
								<tr>
									<td>Kebiasaan dan keterlibatan warga dalam kegiatan gotong royong di desa/kelurahan untuk kepentingan umum/komunitas (seperti: kerja bakti, siskamling, pesta rakyat, dll) selama 1 tahun terakhir</td>
									<td>
									Ada, sebagian besar warga terlibat</td>
								</tr>
								<tr>
									<td>Jumlah lembaga kemasyarakatan desa</td>
									<td>13</td>
								</tr>
								<tr>
									<td>Jumlah Sekretariat Desa (kau keuangan, kaur perencanaan, dll)</td>
									<td>5</td>
								</tr>
								<tr>
									<td>Jumlah Pelaksana Teknis (kasi pemerintahan, kasi kesejahteraan, dll)</td>
									<td>3</td>
								</tr>
								<tr>
									<td>Jumlah Pelaksana Kewilayahan (kadus, ketua RT, ketua RW, dll.)</td>
									<td>8</td>
								</tr>
								<tr>
									<td>Kepemilikan Tanah kas desa/ulayat</td>
									<td>Tidak ada</td>
								</tr>
								<tr>
									<td>Kepemilikan Bangunan milik desa (balai desa, balai rakyat, dll.)</td>
									<td>Ada, digunakan</td>
								</tr>
							</table>
                        </div>
                    <!-- AKHIR DARI COPIAN DATA DARI SITUS KEMENDESA DISINI -->
						</div>
						</div>
					</div>
					<div class="flexcenter mtb-10">
						<a href="#">
						<div class="tombol flexcenter bgcolor2 mlr-5">Artikel</div>
						</a>
						<div class="tombol flexcenter bgcolor1 mlr-5" data-dismiss="modal" aria-hidden="true">Tutup</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end modal -->
</div>

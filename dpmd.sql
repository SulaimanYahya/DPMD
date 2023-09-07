/*
 Navicat Premium Data Transfer

 Source Server         : SIRENDES
 Source Server Type    : MySQL
 Source Server Version : 100612 (10.6.12-MariaDB-0ubuntu0.22.04.1)
 Source Host           : 36.93.199.18:3306
 Source Schema         : motivasi_desa

 Target Server Type    : MySQL
 Target Server Version : 100612 (10.6.12-MariaDB-0ubuntu0.22.04.1)
 File Encoding         : 65001

 Date: 28/08/2023 11:56:17
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for js_agenda
-- ----------------------------
DROP TABLE IF EXISTS `js_agenda`;
CREATE TABLE `js_agenda`  (
  `id_agenda` int NOT NULL AUTO_INCREMENT,
  `agenda` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `waktu` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ket` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_agenda`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of js_agenda
-- ----------------------------
INSERT INTO `js_agenda` VALUES (3, 'Kabupaten Bone Bolango', '2017-11-01', '08:30', '<p>\r\nPelataran Parkir Keong Mas Lingkungan TMII (19 s/d 01 November 2017)\r\n\r\n<br></p>', 'Y');
INSERT INTO `js_agenda` VALUES (6, 'Pemecahan Rekor Muri', '2017-11-01', '09:30', '<p>\r\n\r\nTempat Kegiatan\r\n                                          :\r\n                                          Gerbang Cemerlang dan Menara Jam Bone Bolango <br></p>', 'Y');
INSERT INTO `js_agenda` VALUES (7, 'Nusantara Expo dan Forum', '2017-11-01', '08:30', '<p>\r\nPelataran Parkir Keong Mas Lingkungan TMII (19 s/d 01 November 2017)\r\n\r\n<br></p>', 'Y');
INSERT INTO `js_agenda` VALUES (8, 'Kabupaten Bola', '2017-11-01', '08:30', '<p>\r\nPelataran Parkir Keong Mas Lingkungan TMII (19 s/d 01 November 2017)\r\n\r\n<br></p>', 'Y');
INSERT INTO `js_agenda` VALUES (9, 'Bone Bolango', '2017-11-01', '08:30', '<p>\r\nPelataran Parkir Keong Mas Lingkungan TMII (19 s/d 01 November 2017)\r\n\r\n<br></p>', 'Y');
INSERT INTO `js_agenda` VALUES (10, 'Bone Bolango Kab', '2017-11-01', '08:30', '<p>\r\nPelataran Parkir Keong Mas Lingkungan TMII (19 s/d 01 November 2017)\r\n\r\n<br></p>', 'Y');
INSERT INTO `js_agenda` VALUES (11, 'Judul', '2017-11-08', '03:05', '<p>keterengan<br></p>', 'Y');

-- ----------------------------
-- Table structure for js_aktif
-- ----------------------------
DROP TABLE IF EXISTS `js_aktif`;
CREATE TABLE `js_aktif`  (
  `id_aktif` int NOT NULL AUTO_INCREMENT,
  `id_desa` int NOT NULL,
  `id_daftar` int NOT NULL,
  `status` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_aktif`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 33 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of js_aktif
-- ----------------------------
INSERT INTO `js_aktif` VALUES (31, 19, 6, 'Y');
INSERT INTO `js_aktif` VALUES (32, 19, 6, 'Y');

-- ----------------------------
-- Table structure for js_berita
-- ----------------------------
DROP TABLE IF EXISTS `js_berita`;
CREATE TABLE `js_berita`  (
  `id_berita` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sumber` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_input` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `isi_text` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kategori` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_berita`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of js_berita
-- ----------------------------
INSERT INTO `js_berita` VALUES (1, 'Penantian 7 Tahun Warga Desa di Bone Bolango Bangu', 'Aldiansyah Mochammad Fachrurrozy', '2017/11/09', '<p>\r\n</p><p>Suara teriakan warga beradu dengan deras air sungai yang harus mereka\r\n lewati. Di pundak, mereka memikul sebuah pangkal besi jembatan. Mata \r\nmereka berbinar bahagia. Musababnya ini langkah awal dari terkabulnya \r\nharapan mereka untuk memiliki <a target=\"_blank\" rel=\"nofollow\" href=\"http://regional.liputan6.com/read/3132755/jembatan-putus-bikin-senewen-petani-salak-di-banjarnegara\">jembatan</a> penyeberangan.</p>\r\n<p>Mereka adalah warga Desa Mongoilo Utara dan Ilomata, salah satu desa \r\nterjauh di Kecamatan Bulango Ulu, Kabupaten Bone Bolango, Gorontalo. \r\nTelah sepekan lamanya, warga bergotong royong membangun jembatan \r\npenyeberangan.</p>\r\n<p>Maklum, sejak desa ini berdiri tahun 2007, tak ada jembatan \r\npenyeberangan buat mereka. Pilihannya, mereka terpaksa melewati sungai \r\ncukup dalam untuk keluar dari desa.</p>\r\n<p>\"Rencana warga bikin jembatan gantung dulu dengan bentangan jembatan \r\nsekitar 70 meter, dananya dari dari berbagai pihak,\" ucap Camat Bulango \r\nUlu, I Wayan Ranawa, Senin, 23 Oktober 2017.</p>\r\n<p></p>\r\n<div></div>\r\n\r\n<p></p>\r\n<p>Dia merinci, material seperti batu dan pasir merupakan swadaya warga \r\ndan Pemerintah Kabupaten Bone Bolango. Sedangkan untuk jembatan \r\ndisiapkan oleh pihak swasta yang bersimpati dengan kondisi di desa \r\nmereka.</p>\r\n<p>Menurut Ranawa, jembatan gantung itu sangat penting karena akan \r\nmembuka akses jalan bagi warga yang kesulitan menjual hasil perkebunan \r\nke Kota Gorontalo. Belum lagi, para siswa SD hingga SMA akan lebih mudah\r\n berangkat kesekolah.</p>\r\n<p>Hanya saja, jika hujan dan debit air naik, warga tak ada yang berani \r\nkeluar desa karena arus sungai deras. Bahkan, rakit penyeberangan pun \r\nharus berhenti beroperasi.</p>\r\n<p>Adapun tarif penyeberangan dengan rakit sebesar Rp 1.000 per orang, sedangkan setiap sepeda motor dikenakan Rp 4.000.</p>\r\n<p>\"Jika air naik, ya warga terpaksa berjalan kaki hingga 10 kilometer \r\nuntuk menjual hasil kebunnya dengan kondisi jalan yang rusak,\" ujarnya.</p>\r\n<p>Susahnya akses jalan di kawasan itu sudah sempat disampaikan ke pemerintah daerah melalui rapat dari tingkat desa hingga daerah.</p>\r\n<p>Namun, besarnya anggaran menjadi persoalan tak kunjung dibuatnya <a target=\"_blank\" rel=\"nofollow\" href=\"http://regional.liputan6.com/read/3127546/jembatan-putus-27-pelajar-terjun-bebas-ke-sungai\">jembatan</a> penyeberangan yang dibutuhkan warga Desa Mongoilo Utara dan Ilomata, Kecamatan Bulango Ulu, Kabupaten Bone Bolango, Gorontalo.</p>\r\n<p>\"Dalam sebulan, mudah-mudahan jembatan gantung ini sudah bisa dimanfaatkan warga,\" Camat Bulango Ulu memungkasi.</p>\r\n\r\n<br><p></p>', 'Populer', '095618600_1508820456-20171024-jembatan_gantung-gotong-gorontalo.jpg');
INSERT INTO `js_berita` VALUES (2, 'Pohon Tumbang Timpa Barisan Siswa, 2 Meninggal Dun', 'Liputan6.com', '2017/11/09', '<p>\r\n</p><p>Dua pelajar Sekolah Dasar (SD) Negeri 12 Kabila Bone, Kabupaten Bone Bolango, Provinsi <a target=\"_blank\" rel=\"nofollow\" href=\"http://regional.liputan6.com/read/3047549/usaha-pemerintah-memberdayakan-8000-lansia-miskin-di-gorontalo\">Gorontalo</a>, meninggal dunia akibat tertimpa <a target=\"_blank\" rel=\"nofollow\" href=\"http://regional.liputan6.com/read/2981257/harimau-sumatera-berjalan-gontai-di-antara-pohon-pohon-tumbang\">pohon tumbang</a>\r\n saat menunggu upacara bendera, Senin (4/9/2017). Korban yang meninggal \r\ndunia, yaitu Fahjrin Bantali (8) dan Widyawati Napu (7) yang tercatat \r\nsebagai siswa kelas dua di SD Negeri 12 Kabila Bone.</p>\r\n<p>Kapolsek Kabila, Iptu Abdul Wahid Tambipi mengatakan, pada kejadian \r\nitu ada empat pelajar yang menjadi korban dan dua korban di antaranya \r\nmeninggal dunia. Usai kejadian tersebut, warga di sekitar lokasi \r\nkejadian berusaha menolong para korban dengan membawanya menuju rumah \r\nsakit terdekat.</p>\r\n<p>\"Pada saat itu, para pelajar sedang menunggu waktu upacara bendera \r\ndilaksanakan, namun tiba-tiba sebuah pohon tumbang dan menimpa pelajar \r\nyang sedang berbaris,\" jelasnya, dilansir <em>Antara</em>, Senin (4/9/2017), dilansir <em>Antara</em>.</p>\r\n<p></p>\r\n<div></div><div><div></div></div>\r\n\r\n<p></p>\r\n<p>Sementara itu, Sekretaris Daerah Kabupaten Bone Bolango, Ishak Ntoma,\r\n yang langsung datang ke lokasi kejadian mengatakan, pihaknya telah \r\nmemerintahkan kepada seluruh instansi untuk memeriksa dan memperhatikan \r\nsetiap pohon.</p>\r\n<p>\"Kita akan memeriksa dan memperhatikan setiap pohon yang ada di \r\nsekolah, rumah, atau perkantoran, jangan sampai ada yang dapat \r\nmembahayakan warga dan sebagai langkah pencegahan agar tidak terjadi \r\nlagi hal seperti ini,\" ujarnya.</p>\r\n<p>Saat ini, dua korban terluka usai tertimpa <a target=\"_blank\" rel=\"nofollow\" href=\"http://news.liputan6.com/read/2941557/pohon-tumbang-timpa-angkot-dan-warung-bakso-di-bogor\">pohon tumbang</a> masih dirawat di Rumah Sakit Toto Kabila. Selain itu, aktivitas belajar mengajar di SD Negeri 12 dihentikan sementara.</p>\r\n\r\n<br><p></p>', 'Populer', '052966400_1417978317-Pohon-Tumbang.jpg');
INSERT INTO `js_berita` VALUES (3, 'Pemkab Bone Bolango Cari Kampung Paling Merah Puti', 'Aldiansyah Mochammad Fachrurrozy', '2017/11/09', '<p>\r\n</p><p>Pemerintah Kabupaten (Pemkab) Bone Bolango, Provinsi Gorontalo, menggelar lomba \"Kampung <a target=\"_blank\" rel=\"nofollow\" href=\"http://lifestyle.liputan6.com/read/3060110/gaya-kompak-megawati-puan-berkebaya-merah-putih-di-sidang-mpr\">Merah Putih</a>\" yang diikuti perwakilan dari setiap kecamatan di daerah tersebut.<br><br>Bupati\r\n Bone Bolango, Hamim Pou mengatakan, lomba itu dilaksanakan dalam rangka\r\n menyambut Hari Ulang Tahun (HUT) ke-72 Kemerdekaan RI.<br><br>\"Daerah \r\nyang menjadi pemenang nanti adalah kampung yang paling heroik, massal, \r\nlengkap dan ramai dan akan kita berikan hadiah bagi pemenangnya,\" ujar \r\nBupati, Selasa, 15 Agustus 2017.<br><br>Bupati mengungkapkan, saat \r\nmemasuki daerah Kabupaten Bone Bolango, nuansa kemerdekaan sangat terasa\r\n dengan banyaknya atribut bernuansa <a target=\"_blank\" rel=\"nofollow\" href=\"http://news.liputan6.com/read/3059989/napi-teroris-umar-patek-jadi-pengibar-bendera-merah-putih\">merah putih</a> yang dipasang di setiap rumah, seperti bendera, hiasan, dan umbul-umbul.</p>\r\n<p></p>\r\n<div></div><div>\r\n</div>\r\n\r\n<p></p>\r\n<p>\"Hal itu dapat dilihat seperti di Tingkohubu, Duano, Boludawa, Ayula \r\nTilango dan Desa Monano, dan saya sangat mengapresiasi dan berterima \r\nkasih kepada masyarakat Bone Bolango yang sangat menghormati, bangga, \r\ndan bergembira menyambut HUT ke-72 Kemerdekaan RI,\" ujarnya.<br><br>Bentuk\r\n peran serta masyarakat tersebut, menurut Bupati, merupakan gambaran \r\ndari Indonesia Kerja Bersama yang ditampakkan melalui kampung <a target=\"_blank\" rel=\"nofollow\" href=\"http://news.liputan6.com/read/3058714/selain-merah-putih-ini-nama-nama-unik-tim-paskibraka-nasional\">Merah Putih</a>.<br><br>Sementara\r\n itu, Camat Suwawa, Achryl Babyonggo mengatakan pihaknya menyertakan 10 \r\ndesa di daerah itu untuk ikut serta pada lomba tersebut. \"Di setiap desa\r\n yang ada di Kecamatan Suwawa, setiap rumah memasang atribut merah putih\r\n seperti bendera, umbul-umbul dan juga hiasan gantung,\" katanya.</p>\r\n\r\n<br><p></p>', 'Umum', '073851900_1502875974-IMG-20170815-WA0080.jpg');
INSERT INTO `js_berita` VALUES (4, 'Bupati Bone Bolango Siapkan Kartu Janda Sejahtera', 'Bone Bolango', '2017/11/09', '<p>\r\n</p><p>Pemerintah Kabupaten (Pemkab) Bone Bolango akan meluncurkan Kartu <a target=\"_blank\" rel=\"nofollow\" href=\"http://showbiz.liputan6.com/read/2966011/kalina-ocktaranny-lepas-status-janda\">Janda</a>\r\n Sejahtera (KJS) dan Kartu Lansia Bahagia (KLB), untuk membantu tingkat \r\nkesejahteraan mereka. Bupati Hamim Pou mengatakan program itu masih \r\ndalam tahap persiapan dan bisa dimanfaatkan warga pada 2018 nanti.<br><br>\"Program\r\n itu merupakan janji politik saya sebelum menjadi kepala daerah, \r\nsehingga saya harus mempertanggungjawabkannya,\" kata Hamim, Jumat \r\n(2/6/2017), dilansir <em>Antara</em>.<br><br>Pada tahun yang sama, \r\npemerintah setempat akan meluncurkan kartu bagi wirausaha mandiri. \r\nProgram itu dimaksudkan untuk menciptakan usahawan muda di daerah \r\ntersebut.</p>\r\n<p></p>\r\n<div></div><div>\r\n</div>\r\n\r\n<p></p>\r\n<p>Program itu, lanjut Hamim, akan dimaksimalkan oleh organisasi \r\nkemasyarakatan, seperti karang taruna. Nantinya, di tiap-tiap desa akan \r\nada kelompok untuk wirausaha muda yang diharapkan mampu menggerakkan \r\nperekonomian masyarakat.<br><br>\"Saya berharap tiga program itu mendapat dukungan dari masyarakat <a target=\"_blank\" rel=\"nofollow\" href=\"http://ramadan.liputan6.com/read/2970294/sudut-favorit-warga-bone-bolango-sambut-ramadan\">Bone Bolango</a>, terutama mereka kaum muda yang berniat mengembangkan usahanya,\" katanya.<br><br>Penyampaian\r\n Hamim itu diutarakannya kembali saat Safari Ramadan di Masjid Desa \r\nBulontalangi Barat, Kecamatan Bulango Timur. Pada kegiatan itu, ia \r\nmengapresiasi Ketua DPRD <a target=\"_blank\" rel=\"nofollow\" href=\"http://regional.liputan6.com/read/2956274/pagi-indah-di-bukit-tangga-bali-pesona-ala-pulau-dewata\">Bone Bolango</a> Faisal Mohi karena telah menjaga kekompakan masyarakat, sehingga pembangunan desa bisa berkembang.<br><br>\"Di\r\n desa ini pemerintah akan membangun pasar hewan dan rumah potong hewan. \r\nProgram itu bertujuan menurunkan rumah tangga miskin lewat pengadaan \r\nsapi,\" ucap Hamim.</p>\r\n\r\n<br><p></p>', 'Umum', '010202500_1496067890-20170529-awal_ramadan-spot2-gorontalo.jpg');
INSERT INTO `js_berita` VALUES (5, 'Upacara HSP Tingkat Kabupaten Bone Bolango Dipusat', 'Bone Bolango', '2017/11/09', '<p>\r\n</p><div>\r\n						<p>Bone Bolango â€“ Peringatan Hari Sumpah Pemuda (HPS)\r\n tingkat Kabupaten Bone Bolango terbilang istimewa. Pasalnya upacara HPS\r\n tahun 2017 ini dipusatkan di Kecamatan Pinogu, Sabtu (28/10).</p>\r\n<p>Kecamatan Pinogu merupakan kecamatan yang berada di tengah-tengah \r\nTaman Nasional, yakni Taman Nasional Bogani Nani Wartabone (TNBNW).</p>\r\n<p>Butuh perjuangan yang keras untuk bisa sampai di kecamatan terpencil \r\nini, karena butuh waktu 6-8 jam dan harus menempuh medan yang berat dan \r\ncuram dengan menaiki ojek sepeda motor yang sudah di modifikasi, serta \r\nbiaya ojek pergi pulang sebesar Rp700 ribu hingga Ro1 juta.</p>\r\n<p>Upacara yang dilaksanakan di lapangan Kecamatan Pinogu tersebut, \r\nbertindak sebagai inspektur upacara (Irup) Bupati Bone Bolango Hamim \r\nPou. </p>\r\n<p>Bupati Hamim Pou dalam sambutannya mengatakan kenapa peringatan HPS \r\ntahun 2017 untuk tingkat Kabupaten Bone Bolango dilaksanakan di \r\nKecamatan Pinogu. Ini artinya pemerintah kabupaten sangat memperhatikan \r\ndan tidak ingin membedakan Kecamatan Pinogu dengan kecamatan lainnya \r\nyang ada di Kabupten Bone Bolango.</p>\r\n<p>Pada kesempatan itu, Bupati Hamim Pou menyampaikan sambutan tertulis \r\nMenteri Pemuda dan Olahraga (Menpora) Imam Nahrawi, yang menyatakan \r\nbahwa delapan puluh sembilan tahun yang lalu, tepatnya pada tanggal 28 \r\nOktober 1928, sebanyak 71 pemuda dari seluruh penjuru tanah air, \r\nberkumpul di sebuah gedung di Jalan Kramat Raya, daerah Kwitang Jakarta.</p>\r\n<p>Mereka mengikrarkan diri sebagai satu nusa, satu bangsa dan satu \r\nbahasa yaitu Indonesia. Sungguh, sebuah ikrar yang sangat monumental \r\nbagi perjalnaan sejaran bangsa Indonesia. Ikrar ini nantinya, 17 tahun \r\nkemudian melahirkan proklamasi kemerdekaan Republik Indonesia, tanggal \r\n17 Agustus 1945.</p>\r\n<p>Menurutnya, sumpah pemuda dibacakan di arena kongres Pemuda ke-2, \r\ndihadiri oleh pemuda lintas suku, agama dan daerah. Jika kita membaca \r\ndokumen sejarah Kongres Pemuda ke-2, kita akan menemukan daftar panitia \r\ndan peserta kongres yang berasal dari pulau-pulau terjauh Indonesia. \r\nSecara imaginatif sulit rasanya membayangkan mereka dapat bertemu dengan\r\n mudah.</p>\r\n<p>Dari belahan barat Indonesia, teradat nama Mohammad Yamin. Seorang \r\npemuda kelahiran Sawah Lunto Sumatera Barat yang mewakili organisasi \r\npemuda Sumatera, Jong Sumatranen Bond. Dari belahan Timur Indonesia, \r\nkita menemukan pemuda bernama Johannes Leimena, kelahiran kota Ambon \r\nMaluku, mewakili organisasi pemuda Jong Ambon. Ada juga Katjasungkana \r\ndari Madura, ada juga Cornelis Lefran Senduk, mewakili Organisasi pemuda\r\n Sulawesi, Jong Celebes.</p>\r\n<p>Melalui peringatan hari sumpah pemuda tahun ini, kata Bupati Hamim \r\nPou, Menpora menyampaikan salam hangat bagi tokoh-tokoh pemuda di \r\nseluruh penjuru negeri dan manca negara beserta keluarga untuk tetap \r\nberjuang dan berupaya sekuat tenaga demi kemajuan dan kemakmuran Bangsa \r\nIndonesia, dan terus menjaga keutuhan Negara Kesatuan Republik \r\nIndonesia. </p>\r\n<p>Penghargaan dan hormat kita semua kepada Bung Karno bapak bangsa \r\ntokoh pemuda masa itu, yang menerikka kalimat yang sangat terkenal \"Beri\r\n aku 1.000 orang tua, niscaya akan kucabut semeru dari akarnya, Beri aku\r\n 10 pemuda, niscaya akan kuguncangkan dunia\".</p>\r\n<p>Hamim menambahkan HSP adalah hari kebangkitan anak muda Indonesia. \r\nDengan kemajuan teknologi, pemuda-pemuda Indonesia dari Sabang sampai \r\nMerauke terus bergerak memberikan sumbangsih pemikiran dan gagasannya \r\nuntuk kesejahteraan dan kebesaran Bangsa Indonesia, terutama di mata \r\ndunia. </p>\r\n<p>â€œMari kita buktikan dalam sejarah Indoneisa, untuk kesekian kalinya \r\npemuda Indoneisa menjadi motor utama penentu perubahan \r\nIndonesia,â€urainya. (Humas/Kadir/Sofyan)</p>						</div>\r\n\r\n<br><p></p>', 'Populer', '345653285215270.JPG');
INSERT INTO `js_berita` VALUES (6, '4.000 Warga Kecamatan Pinogu Nikmati Sarana Teleko', 'Bone Bolango', '2017/11/09', '<p>\r\n</p><div>\r\n						<p>Bone Bolango - Sekitar 4.000 warga di Kecamatan \r\nPinogu Kabupaten Bone Bolango, Provinsi Gorontalo akhirnya bisa \r\nmenikmati sarana telekomunikasi. Ini menyusul dengan diresmikannya \r\npemanfaatan tower telekomunikasi, yakni Telkomsel oleh Bupati Bone \r\nBolango Hamim Pou, Jumat (27/10).</p>\r\n<p>â€œAlhamdulillah saat ini sarana Telekomunikasi di Kecamatan Pinogu \r\nsudah beroperasi dan berdering. Jadi bagi masyarakat disini, termasuk \r\npara pegawai yang bertugas disini tidak lagi merasa kesepian untuk \r\nberkomunikasi dengan keluarga sudah lebih mudah, walaupun baru sebatas \r\ntelpon dan sms-an,â€ujarnya..</p>\r\n<p>Hamim menceritakan pembangunan tower telekomunikasi di Kecamatan \r\nPinogu adalah bagian dari perjuangannya menghadap kepada Presiden \r\nDirektur Telkomsel Pusat beberapa bulan yang lalu dan menyerahkan \r\nproposal untuk pembangunan tower Telekomunikasi di Pinogu.</p>\r\n<p>Karena menurutnya, telekomunikasi itu nomor satu dan yang paling \r\npenting.â€Alhamdulillah ini sudah direalisasikan oleh pihak Telkomsel, \r\ndan sudah beroperasi. Tentu semuanya menjadi lebih mudah, murah, cepat, \r\ndan tepat. Semuanya pasti  terasa cepat,â€jelasnya.</p>\r\n<p>Ia berharap, masyarakat di Kecamatan Pinogu untuk bersama-sama \r\nmenjaga sarana Telekomunikasi tersebut. Mari kita rawat sarana ini \r\njangan hanya diserahkan kepada pemerintah kabupaten atau ke pihak \r\nTelkomsel, tapi ini sudah menjadi kewajiban kita selaku masyarakat untuk\r\n menjaganya.</p>\r\n<p>â€œKalau sarana ini kita rawat dan pelihara dengan baik, maka dengan \r\ndemikian sarana Telekomunikasi ini usianya makin panjang. Ini yang perlu\r\n kita syukuri bersama-sama,â€tutup Hamim. (Humas/Kadir/Sofyan)</p>						</div>\r\n\r\n<br><p></p>', 'Umum', '127029254190386.JPG');

-- ----------------------------
-- Table structure for js_choose
-- ----------------------------
DROP TABLE IF EXISTS `js_choose`;
CREATE TABLE `js_choose`  (
  `id_choose` varchar(23) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_keg` int NOT NULL,
  `id_daftar` int NOT NULL,
  `id_desa` int NOT NULL,
  `status` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_choose`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of js_choose
-- ----------------------------
INSERT INTO `js_choose` VALUES ('01', 28, 17, 119, '17');
INSERT INTO `js_choose` VALUES ('02', 29, 17, 119, '17');
INSERT INTO `js_choose` VALUES ('03', 28, 19, 6, '19');
INSERT INTO `js_choose` VALUES ('04', 30, 19, 6, '19');
INSERT INTO `js_choose` VALUES ('05', 31, 19, 6, '19');

-- ----------------------------
-- Table structure for js_daftar
-- ----------------------------
DROP TABLE IF EXISTS `js_daftar`;
CREATE TABLE `js_daftar`  (
  `id_daftar` int NOT NULL AUTO_INCREMENT,
  `kode_regis` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_lengkap` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat_lengkap` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `js` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nope` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `umur` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jabatan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `unsur` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `unit_kerja` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_desa` int NOT NULL,
  `alamat_kantor` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_regis` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `level` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_daftar`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of js_daftar
-- ----------------------------
INSERT INTO `js_daftar` VALUES (17, 'P00001', 'Joe Sangkota', 'Jln. kalimntan', 'Pria', '085399196550', '27', 'PPTK', 'Kepala Desa', 'Kantor Desa', 119, 'Jln. Trans Silawesi', '25 Nov 2017', 'user');
INSERT INTO `js_daftar` VALUES (18, 'P00002', 'Irwan Halim', 'Jln Talaga', 'Pria', '089089789786', '27', 'PPTK', 'BPD', 'Desa', 6, 'Desa', '25 Nov 2017', 'user');
INSERT INTO `js_daftar` VALUES (19, 'P00003', 'Muhlis', 'Kab. Gorontalo', 'Pria', '085340330805', '35', 'KADES', 'Kapala Desa', 'Kantor Desa', 6, 'Desa Permata', '25 Nov 2017', 'user');
INSERT INTO `js_daftar` VALUES (20, 'P00004', 'amir', 'jl limboto', 'Pria', '888hu', 'yg', 'kepala desa', 'Kapala Desa', 'kantor desa', 1, 'jl limboto', '25 Nov 2017', 'user');
INSERT INTO `js_daftar` VALUES (21, 'P00005', 'udin', 'jl limboto', 'Pria', '968', '34', 'krpala sdn', 'Kapala Desa', 'SDN i', 53, 'jl limboto', '25 Nov 2017', 'user');

-- ----------------------------
-- Table structure for js_desa
-- ----------------------------
DROP TABLE IF EXISTS `js_desa`;
CREATE TABLE `js_desa`  (
  `id_desa` int NOT NULL AUTO_INCREMENT,
  `nm_desa` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nm_kades` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bpd` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kec` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_desa`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 161 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of js_desa
-- ----------------------------
INSERT INTO `js_desa` VALUES (1, 'MOODULIO', '', '', 'BONE');
INSERT INTO `js_desa` VALUES (2, 'MUARA BONE', '', '', 'BONE');
INSERT INTO `js_desa` VALUES (3, 'MASIAGA', '', '', 'BONE');
INSERT INTO `js_desa` VALUES (4, 'ILOHUUWA', '', '', 'BONE');
INSERT INTO `js_desa` VALUES (5, 'TALUDAA', '', '', 'BONE');
INSERT INTO `js_desa` VALUES (6, 'PERMATA', '', '', 'BONE');
INSERT INTO `js_desa` VALUES (7, 'INAGALUMA', '', '', 'BONE');
INSERT INTO `js_desa` VALUES (8, 'MOLAMAHU', '', '', 'BONE');
INSERT INTO `js_desa` VALUES (9, 'SOGITIA', '', '', 'BONE');
INSERT INTO `js_desa` VALUES (10, 'MONANO', '', '', 'BONE');
INSERT INTO `js_desa` VALUES (11, 'TUMBUH MEKAR', '', '', 'BONE');
INSERT INTO `js_desa` VALUES (12, 'WALUHU', '', '', 'BONE');
INSERT INTO `js_desa` VALUES (13, 'CENDANA PUTIH', '', '', 'BONE');
INSERT INTO `js_desa` VALUES (14, 'BILOLANTUNGA', '', '', 'BONE');
INSERT INTO `js_desa` VALUES (15, 'MOOTAWA', '', '', 'BONERAYA');
INSERT INTO `js_desa` VALUES (16, 'BUNGA', '', '', 'BONERAYA');
INSERT INTO `js_desa` VALUES (17, 'PELITA JAYA', '', '', 'BONERAYA');
INSERT INTO `js_desa` VALUES (18, 'INOMATA', '', '', 'BONERAYA');
INSERT INTO `js_desa` VALUES (19, 'LAUT BIRU', '', '', 'BONERAYA');
INSERT INTO `js_desa` VALUES (20, 'MOOTINELO', '', '', 'BONERAYA');
INSERT INTO `js_desa` VALUES (21, 'MOOPIYA', '', '', 'BONERAYA');
INSERT INTO `js_desa` VALUES (22, 'ALO', '', '', 'BONERAYA');
INSERT INTO `js_desa` VALUES (23, 'TOMBULILATO', '', '', 'BONERAYA');
INSERT INTO `js_desa` VALUES (24, 'MOOTAYU', '', '', 'BONERAYA');
INSERT INTO `js_desa` VALUES (25, 'KAIDUNDU', '', '', 'BULAWA');
INSERT INTO `js_desa` VALUES (26, 'MAMUNGAA', '', '', 'BULAWA');
INSERT INTO `js_desa` VALUES (27, 'PATOA', '', '', 'BULAWA');
INSERT INTO `js_desa` VALUES (28, 'DUNGGILATA', '', '', 'BULAWA');
INSERT INTO `js_desa` VALUES (29, 'MOOPUYA', '', '', 'BULAWA');
INSERT INTO `js_desa` VALUES (30, 'KAIDUNDU BARAT', '', '', 'BULAWA');
INSERT INTO `js_desa` VALUES (31, 'PINOMONTIGA', '', '', 'BULAWA');
INSERT INTO `js_desa` VALUES (32, 'BUKIT HIJAU', '', '', 'BULAWA');
INSERT INTO `js_desa` VALUES (33, 'MAMUNGAA TIMUR', '', '', 'BULAWA');
INSERT INTO `js_desa` VALUES (34, 'PELITA HIJAU', '', '', 'BONEPANTAI');
INSERT INTO `js_desa` VALUES (35, 'UABANGA', '', '', 'BONEPANTAI');
INSERT INTO `js_desa` VALUES (36, 'OMBULO HIJAU', '', '', 'BONEPANTAI');
INSERT INTO `js_desa` VALUES (37, 'BATU HIJAU', '', '', 'BONEPANTAI');
INSERT INTO `js_desa` VALUES (38, 'KEMIRI', '', '', 'BONEPANTAI');
INSERT INTO `js_desa` VALUES (39, 'TONGO', '', '', 'BONEPANTAI');
INSERT INTO `js_desa` VALUES (40, 'TIHU', '', '', 'BONEPANTAI');
INSERT INTO `js_desa` VALUES (41, 'BILUNGALA UTARA', '', '', 'BONEPANTAI');
INSERT INTO `js_desa` VALUES (42, 'BILUNGALA', '', '', 'BONEPANTAI');
INSERT INTO `js_desa` VALUES (43, 'TUNAS JAYA', '', '', 'BONEPANTAI');
INSERT INTO `js_desa` VALUES (44, 'TAMBOO', '', '', 'BONEPANTAI');
INSERT INTO `js_desa` VALUES (45, 'TOLOTIO', '', '', 'BONEPANTAI');
INSERT INTO `js_desa` VALUES (46, 'LEMBAH HIJAU', '', '', 'BONEPANTAI');
INSERT INTO `js_desa` VALUES (47, 'OLELE', '', '', 'KABILA BONE');
INSERT INTO `js_desa` VALUES (48, 'BINTALAHE', '', '', 'KABILA BONE');
INSERT INTO `js_desa` VALUES (49, 'MOLOTABU', '', '', 'KABILA BONE');
INSERT INTO `js_desa` VALUES (50, 'BOTUTONUO', '', '', 'KABILA BONE');
INSERT INTO `js_desa` VALUES (51, 'MODELOMO', '', '', 'KABILA BONE');
INSERT INTO `js_desa` VALUES (52, 'BILOANGO', '', '', 'KABILA BONE');
INSERT INTO `js_desa` VALUES (53, 'HUANGOBOTU', '', '', 'KABILA BONE');
INSERT INTO `js_desa` VALUES (54, 'BOTUBARANI', '', '', 'KABILA BONE');
INSERT INTO `js_desa` VALUES (55, 'OLUHUTA', '', '', 'KABILA BONE');
INSERT INTO `js_desa` VALUES (56, 'ILOMATA', '', '', 'BULANGO ULU');
INSERT INTO `js_desa` VALUES (57, 'SUKA MAKMUR', '', '', 'BULANGO ULU');
INSERT INTO `js_desa` VALUES (58, 'MONGIILO UTARA', '', '', 'BULANGO ULU');
INSERT INTO `js_desa` VALUES (59, 'PILOLAHEYA', '', '', 'BULANGO ULU');
INSERT INTO `js_desa` VALUES (60, 'OWATA', '', '', 'BULANGO ULU');
INSERT INTO `js_desa` VALUES (61, 'MONGIILO', '', '', 'BULANGO ULU');
INSERT INTO `js_desa` VALUES (62, 'POPODU', '', '', 'BULANGO TIMUR');
INSERT INTO `js_desa` VALUES (63, 'TOLUWAYA', '', '', 'BULANGO TIMUR');
INSERT INTO `js_desa` VALUES (64, 'BULOTALANGI BARAT', '', '', 'BULANGO TIMUR');
INSERT INTO `js_desa` VALUES (65, 'BULOTALANGI TIMUR', '', '', 'BULANGO TIMUR');
INSERT INTO `js_desa` VALUES (66, 'BULOTALANGI', '', '', 'BULANGO TIMUR');
INSERT INTO `js_desa` VALUES (67, 'KOPI', '', '', 'BULANGO UTARA');
INSERT INTO `js_desa` VALUES (68, 'BOIDU', '', '', 'BULANGO UTARA');
INSERT INTO `js_desa` VALUES (69, 'BANDUNGAN', '', '', 'BULANGO UTARA');
INSERT INTO `js_desa` VALUES (70, 'LOMAYA', '', '', 'BULANGO UTARA');
INSERT INTO `js_desa` VALUES (71, 'BUNUO', '', '', 'BULANGO UTARA');
INSERT INTO `js_desa` VALUES (72, 'LONGALO', '', '', 'BULANGO UTARA');
INSERT INTO `js_desa` VALUES (73, 'TULOA', '', '', 'BULANGO UTARA');
INSERT INTO `js_desa` VALUES (74, 'SUKADAMAI', '', '', 'BULANGO UTARA');
INSERT INTO `js_desa` VALUES (75, 'TUPA', '', '', 'BULANGO UTARA');
INSERT INTO `js_desa` VALUES (76, 'HUNTU BARAT', '', '', 'BULANGO SELATAN');
INSERT INTO `js_desa` VALUES (77, 'HUNTU UTARA', '', '', 'BULANGO SELATAN');
INSERT INTO `js_desa` VALUES (78, 'LAMAHU', '', '', 'BULANGO SELATAN');
INSERT INTO `js_desa` VALUES (79, 'SEJAHTERA', '', '', 'BULANGO SELATAN');
INSERT INTO `js_desa` VALUES (80, 'AYULA TILANGO', '', '', 'BULANGO SELATAN');
INSERT INTO `js_desa` VALUES (81, 'AYULA SELATAN', '', '', 'BULANGO SELATAN');
INSERT INTO `js_desa` VALUES (82, 'AYULA TIMUR', '', '', 'BULANGO SELATAN');
INSERT INTO `js_desa` VALUES (83, 'AYULA UTARA', '', '', 'BULANGO SELATAN');
INSERT INTO `js_desa` VALUES (84, 'TINELO AYULA', '', '', 'BULANGO SELATAN');
INSERT INTO `js_desa` VALUES (85, 'HUNTU SELATAN', '', '', 'BULANGO SELATAN');
INSERT INTO `js_desa` VALUES (86, 'MERANTI', '', '', 'TAPA');
INSERT INTO `js_desa` VALUES (87, 'LANGGE', '', '', 'TAPA');
INSERT INTO `js_desa` VALUES (88, 'DUNGGALA', '', '', 'TAPA');
INSERT INTO `js_desa` VALUES (89, 'KRAMAT', '', '', 'TAPA');
INSERT INTO `js_desa` VALUES (90, 'TALULOBUTU', '', '', 'TAPA');
INSERT INTO `js_desa` VALUES (91, 'TALULOBUTU SELATAN', '', '', 'TAPA');
INSERT INTO `js_desa` VALUES (92, 'TALUMOPATU', '', '', 'TAPA');
INSERT INTO `js_desa` VALUES (93, 'PANGGULO BARAT', '', '', 'BOTUPINGGE');
INSERT INTO `js_desa` VALUES (94, 'TIMBUOLO TENGAH', '', '', 'BOTUPINGGE');
INSERT INTO `js_desa` VALUES (95, 'TIMBUOLO', '', '', 'BOTUPINGGE');
INSERT INTO `js_desa` VALUES (96, 'LUWOHU', '', '', 'BOTUPINGGE');
INSERT INTO `js_desa` VALUES (97, 'TIMBUOLO TIMUR', '', '', 'BOTUPINGGE');
INSERT INTO `js_desa` VALUES (98, 'SUKMA', '', '', 'BOTUPINGGE');
INSERT INTO `js_desa` VALUES (99, 'BUATA', '', '', 'BOTUPINGGE');
INSERT INTO `js_desa` VALUES (100, 'TANAH PUTIH', '', '', 'BOTUPINGGE');
INSERT INTO `js_desa` VALUES (101, 'PANGGULO', '', '', 'BOTUPINGGE');
INSERT INTO `js_desa` VALUES (102, 'TOTO SELATAN', '', '', 'KABILA');
INSERT INTO `js_desa` VALUES (103, 'POOWO BARAT', '', '', 'KABILA');
INSERT INTO `js_desa` VALUES (104, 'POOWO', '', '', 'KABILA');
INSERT INTO `js_desa` VALUES (105, 'DUTOHE BARAT', '', '', 'KABILA');
INSERT INTO `js_desa` VALUES (106, 'DUTOHE', '', '', 'KABILA');
INSERT INTO `js_desa` VALUES (107, 'TANGGILINGO', '', '', 'KABILA');
INSERT INTO `js_desa` VALUES (108, 'TALANGO', '', '', 'KABILA');
INSERT INTO `js_desa` VALUES (109, 'PERMATA', '', '', 'TILONGKABILA');
INSERT INTO `js_desa` VALUES (110, 'BONGOHULAWA', '', '', 'TILONGKABILA');
INSERT INTO `js_desa` VALUES (111, 'TUNGGULO SELATAN', '', '', 'TILONGKABILA');
INSERT INTO `js_desa` VALUES (112, 'ILOHELUMA', '', '', 'TILONGKABILA');
INSERT INTO `js_desa` VALUES (113, 'BUTU', '', '', 'TILONGKABILA');
INSERT INTO `js_desa` VALUES (114, 'MOTILANGO', '', '', 'TILONGKABILA');
INSERT INTO `js_desa` VALUES (115, 'LONUO', '', '', 'TILONGKABILA');
INSERT INTO `js_desa` VALUES (116, 'TUNGGULO', '', '', 'TILONGKABILA');
INSERT INTO `js_desa` VALUES (117, 'TAMBOO', '', '', 'TILONGKABILA');
INSERT INTO `js_desa` VALUES (118, 'MOUTONG', '', '', 'TILONGKABILA');
INSERT INTO `js_desa` VALUES (119, 'TOTO UTARA', '', '', 'TILONGKABILA');
INSERT INTO `js_desa` VALUES (120, 'BONGOPINI', '', '', 'TILONGKABILA');
INSERT INTO `js_desa` VALUES (121, 'BONGOIME', '', '', 'TILONGKABILA');
INSERT INTO `js_desa` VALUES (122, 'BERLIAN', '', '', 'TILONGKABILA');
INSERT INTO `js_desa` VALUES (123, 'BUBEYA', '', '', 'SUWAWA');
INSERT INTO `js_desa` VALUES (124, 'TINGKOHUBU TIMUR', '', '', 'SUWAWA');
INSERT INTO `js_desa` VALUES (125, 'TINGKOHUBU', '', '', 'SUWAWA');
INSERT INTO `js_desa` VALUES (126, 'BOLUDAWA', '', '', 'SUWAWA');
INSERT INTO `js_desa` VALUES (127, 'HULUDUOTAMO', '', '', 'SUWAWA');
INSERT INTO `js_desa` VALUES (128, 'HELUMO', '', '', 'SUWAWA');
INSERT INTO `js_desa` VALUES (129, 'ULANTHA', '', '', 'SUWAWA');
INSERT INTO `js_desa` VALUES (130, 'BUBE BARU', '', '', 'SUWAWA');
INSERT INTO `js_desa` VALUES (131, 'BUBE', '', '', 'SUWAWA');
INSERT INTO `js_desa` VALUES (132, 'TINELO', '', '', 'SUWAWA');
INSERT INTO `js_desa` VALUES (133, 'DUMBAYA BULAN', '', '', 'SUWAWA TIMUR');
INSERT INTO `js_desa` VALUES (134, 'PODUWOMA', '', '', 'SUWAWA TIMUR');
INSERT INTO `js_desa` VALUES (135, 'TILANGOBULA', '', '', 'SUWAWA TIMUR');
INSERT INTO `js_desa` VALUES (136, 'PANGI', '', '', 'SUWAWA TIMUR');
INSERT INTO `js_desa` VALUES (137, 'TULABOLO', '', '', 'SUWAWA TIMUR');
INSERT INTO `js_desa` VALUES (138, 'TINEMBA', '', '', 'SUWAWA TIMUR');
INSERT INTO `js_desa` VALUES (139, 'PANGGULO', '', '', 'SUWAWA TIMUR');
INSERT INTO `js_desa` VALUES (140, 'TULABOLO BARAT', '', '', 'SUWAWA TIMUR');
INSERT INTO `js_desa` VALUES (141, 'TULABOLO TIMUR', '', '', 'SUWAWA TIMUR');
INSERT INTO `js_desa` VALUES (142, 'PINOGU', '', '', 'PINOGU');
INSERT INTO `js_desa` VALUES (143, 'BANGIO', '', '', 'PINOGU');
INSERT INTO `js_desa` VALUES (144, 'PINOGU PERMAI', '', '', 'PINOGU');
INSERT INTO `js_desa` VALUES (145, 'DATARAN HIJAU', '', '', 'PINOGU');
INSERT INTO `js_desa` VALUES (146, 'TILONGGIBILA', '', '', 'PINOGU');
INSERT INTO `js_desa` VALUES (147, 'MOLINTOGUPO', 'SAHMAN TALAWO', '', 'SUWAWA SELATAN');
INSERT INTO `js_desa` VALUES (148, 'LIBUNGO', '', '', 'SUWAWA SELATAN');
INSERT INTO `js_desa` VALUES (149, 'PANCURAN', '', '', 'SUWAWA SELATAN');
INSERT INTO `js_desa` VALUES (150, 'BULONTALA TIMUR', '', '', 'SUWAWA SELATAN');
INSERT INTO `js_desa` VALUES (151, 'BULONTALA', '', '', 'SUWAWA SELATAN');
INSERT INTO `js_desa` VALUES (152, 'BONDaRAYA', '', '', 'SUWAWA SELATAN');
INSERT INTO `js_desa` VALUES (153, 'BONEDAA', '', '', 'SUWAWA SELATAN');
INSERT INTO `js_desa` VALUES (154, 'BONDAWUNA', '', '', 'SUWAWA SELATAN');
INSERT INTO `js_desa` VALUES (155, 'TAPADAA', '', '', 'SUWAWA TENGAH');
INSERT INTO `js_desa` VALUES (156, 'LOMPOTOO', '', '', 'SUWAWA TENGAH');
INSERT INTO `js_desa` VALUES (157, 'TOLOMATO', '', '', 'SUWAWA TENGAH');
INSERT INTO `js_desa` VALUES (158, 'LOMBONGO', '', '', 'SUWAWA TENGAH');
INSERT INTO `js_desa` VALUES (159, 'ALALE', '', '', 'SUWAWA TENGAH');
INSERT INTO `js_desa` VALUES (160, 'DUANO', '', '', 'SUWAWA TENGAH');

-- ----------------------------
-- Table structure for js_doc
-- ----------------------------
DROP TABLE IF EXISTS `js_doc`;
CREATE TABLE `js_doc`  (
  `id_doc` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kategori` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ket` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tgl_input` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_doc`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of js_doc
-- ----------------------------

-- ----------------------------
-- Table structure for js_inovasi
-- ----------------------------
DROP TABLE IF EXISTS `js_inovasi`;
CREATE TABLE `js_inovasi`  (
  `id_inovasi` int NOT NULL AUTO_INCREMENT,
  `inovator` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kegiatan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nope` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `unsur` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_lengkap` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ket` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_inovasi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of js_inovasi
-- ----------------------------
INSERT INTO `js_inovasi` VALUES (1, 'Joesangkota', 'CETAK BIODATA DAN INOVASI ANDA ', '0987654321', 'Kepala desa', 'joe sangkota', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit, porta eget mattis ac, imperdiet quis nisi. Donec non dui et tortor vulputate luctus. Praesent consequat rhoncus velit, ut molestie arcu venenatis sodales.\r\n');
INSERT INTO `js_inovasi` VALUES (2, 'Joesangkota', 'BIODATA DAN INOVASI ANDA ', '0987654321', 'Kepala desa', 'joe sangkota', 'consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit, porta eget mattis ac, imperdiet quis nisi. Donec non dui et tortor vulputate luctus. Praesent consequat rhoncus velit, ut molestie arcu venenatis sodales.\r\n');
INSERT INTO `js_inovasi` VALUES (3, 'Joesangkota', 'BIODATA DAN INOVASI ANDA ', '0987654321', 'Kepala desa', 'sangkota', 'consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit, porta eget mattis ac, imperdiet quis nisi. Donec non dui et tortor vulputate luctus. Praesent consequat rhoncus velit, ut molestie arcu venenatis sodales.\r\n');

-- ----------------------------
-- Table structure for js_kegiatan
-- ----------------------------
DROP TABLE IF EXISTS `js_kegiatan`;
CREATE TABLE `js_kegiatan`  (
  `id_keg` int NOT NULL AUTO_INCREMENT,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sumber` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dimensi_inovasi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bidang` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_sub_b` int NOT NULL,
  `foto` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `video` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_input` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ket` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_desa` int NOT NULL,
  `id_sub_admin` int NOT NULL,
  PRIMARY KEY (`id_keg`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 81 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of js_kegiatan
-- ----------------------------
INSERT INTO `js_kegiatan` VALUES (24, 'Inovasi Pertanian ', 'Imran', 'sdm', 'Pembangunan Desa', 3, '20160212alsintan.jpg', '', '2017/11/16', '<p>Indonesia perlu menggunakan teknologi dan terus berinovasi untuk membangkitkan pertanian. Pemerintah mendorong terciptanya inovasi dengan meningkatkan dana riset pertanian menjadi Rp 6 miliar tahun ini. Kementerian Pertanian mendorong penerapan teknologi secara nyata dengan merevisi regulasi pengadaan alat dan mesin pertanian (alsintan). <br></p><p>Inovasi di bidang pertanian, bertujuan meningkatkan kesejahteraan petani. Berdasarkan hasil riset pertanian dibutuhkan agar swasembada pangan tercapai. Misalnya, mengembangkan bibit unggul jagung dari dua menjadi tiga tongkol. <br></p><p>Penelitian lain yang dibutuhkan adalah pengembangan bibit unggul sapi berbobot 400 kilogram menjadi satu ton. Hal kedua adalah perhatian pada potensi industri pengolahan produk pertanian. Ketiga adalah kesejahteraan petani.  \"Inovasi sangat penting untuk digarap. Inovasi bisa dilakukan melalui varietas unggul, teknologi pasca panen dan lain-lain.<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (26, 'Menristekdikti: Program ', 'COPYRIGHT Â© ANTARA 2017', 'sdm', 'Pembangunan Desa', 12, '20170131153545desit.jpg', '', '2017/11/16', '<p>\r\nKlaten (ANTARA News) - Menteri Riset, Teknologi dan Pendidikan Tinggi M \r\nNasir akan menggalakkan kembali program sarjana masuk desa agar \r\nmasyarakat dapat langsung menerima inovasi yang dapat membantu memajukan\r\n desa.<br>\r\n<br>\r\n\"Desa sekarang punya dana untuk membangun infrastruktur tetapi \r\nmasalahnya mereka tidak punya ahli di bidang infrastrukur itu maka \r\nsarjana masuk desa akan membantu mereka,\" kata Nasir saat mengunjungi \r\npeternakan sapi PT Widodo Makmur Perkasa di Klaten, Jawa Tengah, Selasa.<br>\r\n<br>\r\nRencananya program ini akan diusulkan ke Presiden Joko Widodo pada tahun ini.<br>\r\n<br>\r\n\"Kalau Presiden sudah setuju, maka program ini akan dilaksanakan pada \r\n2018. Mengenai biayanya akan dibicarakan nanti, apakah akan ditanggung \r\npemerintah atau ada cara lain,\" kata Nasir.<br>\r\n<br>\r\nDia mengatakan para sarjana ini akan ditempatkan di desa untuk membantu \r\nmemberikan inovasi-inovasi dalam bidang pertanian, peternakan dan juga \r\nteknik terutama teknik sipil selama satu hingga dua tahun.<br>\r\n<br>\r\n\"Masyarakat perlu mengetahui inovasi-inovasi pada bidang tersebut untuk \r\nmengurangi risiko kerugian. Inovasi ini juga sangat dibutuhkan pada \r\nbidang pertanian dan peternakan untuk mencapai swasembada pangan \r\nnasional,\" kata dia.<br>\r\n<br>\r\nDia mengatakan program sarjana masuk desa ini diperuntukan bagi sarnana di bidang pertanian, peternakan dan teknik.<br>\r\n<br>\r\nSementara itu Dekan Fakultas Peternakan UGM Ali Agus mengatakan program \r\nsarjana masuk desa dapat menggunakan skema kemitraan sehingga antara \r\npara akademisi dan industri dapat saling menguntungkan.<br>\r\n<br>\r\n\"Enggak perlu biaya yang besar jika menggunakan kerja sama kemitraan. \r\nHal ini dapat digunakan bagi sarjana yang ingin menjadi wirausaha, \r\nsemementara itu universitas akan mendampingi,\" kata Agus. \r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (27, ' Pembinaan Kemasyarakatan Desa ', 'DesaBangkit.com', 'Peningkatan Infrastruktur', 'Pembinaan Masyarakat', 19, 'IMG-20170422-WA0006.jpg', '', '2017/11/16', '<p>\r\n</p><p>Pasal 18 UU No 6 Tahun 2014 menyebutkan bahwa <strong>Kewenangan Desa</strong> meliputi <em>kewenangan\r\n di bidang penyelenggaraan Pemerintahan Desa, pelaksanaan Pembangunan \r\nDesa, pembinaan kemasyarakatan Desa, dan pemberdayaan masyarakat Desa \r\nberdasarkan prakarsa masyarakat, hak asal usul, dan adat istiadat Desa</em>.</p>  <p>Apa itu pembinaan?</p>  <p>UU\r\n No 6 Tahun 2014 tidak menyebutkan pengertian pembinaan. Pengertian \r\npembinaan dalam PP 72 tahun 2005 adalah pemberian pedoman, standar \r\npelaksanaan, perencanaan, penelitian, pengembangan, bimbingan, \r\npendidikan dan pelatihan, konsultasi, supervisi, monitoring, pengawasan \r\numum dan evaluasi pelaksanaan penyelenggaraan pemerintahan desa. </p>  <p><a href=\"http://bp-bayupradikto.blogspot.com/2013/04/pengertian-pembinaan-dan-pengembangan.html\" rel=\"nofollow\" target=\"_blank\">Pradikto Bayu</a>\r\n menyebutkan Pembinaan secara umum diartikan sebagai usaha untuk memberi\r\n pengarahan dan bimbingan guna mencapai suatu tujuan tertentu.</p>  <p>Kemasyarakatan yang dimaksud dalam UU Desa adalah kehidupan masyarakat. </p>  <p>Website Desa <a href=\"http://desa-ciwaruga.blogspot.com/2012/08/pembinaan-kemasyarakatan.html\" rel=\"nofollow\" target=\"_blank\">Ciwaruga</a>\r\n menyebutkan Pembinaan terhadap masyarakat yang dilaksanakan oleh \r\nPemerintah Desa, meliputi pembinaan pendidikan, ketentraman dan \r\nketertiban, olah raga dan kesenian, keagamaan dan kesehatan.  </p>  <p>Pasal 26 UU t 2014 menyebutkan kewenangan-kewenangan kepala Desa dalam hal pembinaan :</p>  <ol>   <li>pembinaan kehidupan masyarakat desa</li>    <li>pembinaan ketenteraman dan ketertiban masyarakat desa</li>    <li>membina dan melestarikan nilai sosial budaya masyarakat desa.</li> </ol>\r\n\r\n<br><p></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (28, 'MEMBUKA JEJARING TAMBAHAN   PENGAJAR DI PKBM', 'Hariyanto Amrain, Kepala Desa Lauwonu  HP : 085340', 'sdm', 'Pemberdayaan Masyarakat', 11, 'Pendidikan.jpg', '', '2017/11/19', '<p>Pusat Kegiatan Belajar Masyarakat (PKBM) Harapan Indah menjalin hubungan\r\ndengan berbagai pihak untuk menjaring sumberdaya manusia dalam mendukung\r\nkegiatan belajar-mengajar. Hasilnya, kini PKBM yang telah beroperasi sejak 2006\r\nini didukung oleh staf pengajar atau tutor dengan beragam bidang dari sekolah\r\nmenengah kejuruan (SMK) hingga perguruan tinggi. Tak heran bila PKBM tersebut\r\nbanyak mencetak lulusan yang siap kerja, diminati sektor usaha dan mandiri\r\n(memiliki usaha sendiri).\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (29, 'PENANGANAN MASALAH LUAR BIASA BIDANG   KESEHATAN MELALUI POSYANDU', 'Soebagijono, Pengelola Posyandu Jiwa â€œDamar Wula', 'sdm', 'Pemberdayaan Masyarakat', 10, 'Kesehatan.jpg', '', '2017/11/19', '<p>Pemerintah Desa Srigonco, Kecamatan Bantur, Kabupaten Malang, Provinsi\r\nJawa Timur, menyediakan fasilitas Posyandu jiwa â€œDamar Wulanâ€ guna\r\nmemfasilitasi penanganan masalah luar biasa orang dengan gangguan jiwa (ODGJ).\r\nHasilnya, kasus pemasungan ODGJ nihil, keseharian ODGJ menjadi lebih terkontrol\r\ndan keluarga ODGJ pun lebih percaya diri dalam bersosialisasi.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (30, 'KONTRAK SEHAT  DENGAN KELUARGA BGM', 'Zainal Abidin  Jabatan : Tim Inovasi Kabupaten Dom', 'sdm', 'Pemberdayaan Masyarakat', 10, '11213.jpg', '', '2017/11/19', '<p>Guna memastikan berat badan anak yang telah ditangani tidak kembali\r\nturun di bawah garis merah (BGM), pelaku program Generasi Sehat dan Cerdas\r\n(GSC) berinisiatif membut kontrak sehat dengan keluarga BGM yang telah dibantu.\r\nHasilnya, berat badan sang anak kini tetap normal.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (31, 'MODEL	POSYANDU REMAJA', 'Zainal Abidin  Jabatan : Tim Inovasi Kabupaten Dom', 'sdm', 'Pemberdayaan Masyarakat', 10, 'MODEL POS,.jpg', 'MODEL POS.jpg', '2017/11/19', '<p>Guna menurunkan tingkat anemia pada remaja dan kecenderungan mengonsumsi\r\nobat-obat terlarang, warga di Kecamatan Pajo sepakat membentuk Posyandu Remaja.\r\nDari remaja, oleh remaja dan untuk remaja, di bawah binaan Puskesmas dan pelaku\r\nprogram Generasi Sehat dan Cerdas (GSC).\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (32, 'BPJS DESA	MANDIRI', 'Mukhlis Jabatan : Fasilitator Kecamatan Generasi, ', 'sdm', 'Pemberdayaan Masyarakat', 10, 'BPJS.jpg', 'BPJS.jpg', '2017/11/19', '<p>Warga\r\ndesa Kuripan Selatan, Kuripan, Lombok Barat, merintis BPJS Desa mandiri pada\r\nJanuari 2015. BPJS Desa ini dikelola oleh Organisasi Kesehatan Masyarakat (OKM)\r\ndesa. Asas yang digunakan adalah gotong-royong antar warga empat dusun di\r\nKuripan Selatan untuk saling membantu warga yang sakit mendapatkan perawatan\r\nkesehatan di Rumah Sakit.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (33, 'KELOMPOK PERDULI ASI DESA', 'Mukhlis Jabatan : Fasilitator Kecamatan Generasi, ', 'sdm', 'Pemberdayaan Masyarakat', 10, 'index.jpg', '', '2017/11/19', '<p>Kader Posyandu Randu I, Dusun Tunggu Lawang, Desa\r\nKuripan Selatan, Kuripan, Lombok Barat, membentuk Kelompok Perduli ASI sejak\r\nawal 2014. Berkat keperdulian mereka, semua ibu yang memiliki bayi sejak 2014\r\ntelah memberikan ASI eksklusif, hasilnya berat badan bayi-bayi pun berada dalam\r\nketegori normal.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (34, 'KONSELOR SEBAYA  DALAM BIDANG KESEHATAN', 'Sulhayani,  Jabatan : Tim Inovasi Kabupaten Lombok', 'sdm', 'Pemberdayaan Masyarakat', 10, 'index121.jpg', '', '2017/11/19', '<p>Warga desa Lingsar, kecamatan Lingsar, Lombok Barat, memiliki Konselor\r\nSebaya yang bertugas menyampaikan informasi mengenai kesehatan remaja, termasuk\r\nseksualitas dan pubertas melalui siaran Radio Komunitas yang dikelola warga di\r\nbawah naungan Pemerintah Desa.\r\n\r\n\r\n\r\nKini, perilaku hidup\r\nbersih dan sehat warga, terutama remaja, meningkat, dan sejumlah remaja usia\r\npubertas tercatat mengikuti aktif kegiatan-kegiatan yang dikelola radio dan\r\ndesa.\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (35, 'MENGHIDUPKAN KEMBALI TABULIN', 'Mukhlis Jabatan : Fasilitator Kecamatan Generasi, ', 'sdm', 'Pemberdayaan Masyarakat', 10, 'index33.jpg', '', '2017/11/19', '<p>Warga dusun Tunggu Lawang, Desa Kuripan Selatan, Kuripan, Lombok Barat, sepakat\r\nuntuk menghidupkan kembali Tabungan Persalinan (Tabulin) mulai 2014. Hingga\r\nsaat ini, terdapat 25 rumahtangga yang telah menerima manfaatnya.\r\n\r\n</p><p>Berkat tabungan ini,\r\nbukan hanya ibu hamil yang terbantu, melainkan juga kelompok wanita lain.\r\nTerdapat lima orang anggota Kelompok Wanita Tani (KWT) yang turut memanfaatkan\r\ndana Tabulin melalui kegiatan simpan pinjam. Hingga tahun ini, mereka mengelola\r\ntabulin sekitar Rp 5,7 juta.\r\n\r\n\r\n\r\n<br></p><p></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (36, 'MENUMBUHKAN MINAT BACA DI DESA', 'Sulhayani,  Jabatan : Tim Inovasi Kabupaten Lombok', 'sdm', 'Pembangunan Desa', 11, 'index1213.jpg', '', '2017/11/19', '<p>Warga desa Kekait berinisiatif menumbuhkan minat baca bagi anak-anak dan\r\nmasyarakat dengan membentuk komunitas Laskar Baca pada 2015. Berbagai fasilitas\r\ndan kegiatan membaca disediakan. Hasilnya, kegiatan anak-anak diluar sekolah\r\nrelatif bermanfaat, kegemaran membaca meningkat, dan kemampuan membaca anak\r\nrelatif meningkat.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (37, 'PEMBAGIAN SASARAN POSYANDU', 'Mukhlis Jabatan : Fasilitator Kecamatan Generasi, ', 'sdm', 'Pemberdayaan Masyarakat', 10, '45.jpg', '', '2017/11/19', '<p>Kader\r\nPosyandu Randu I, Dusun Tunggu Lawang, Desa Kuripan Selatan, Kuripan, Lombok\r\nBarat, berinisiatif melakukan pembagian sasaran Posyandu untuk meningkatkan\r\nangka kehadiran sasaran di Posyandu. Hasilnya, angka sweeping kini NOL dan\r\ntingkat kehadiran sasaran di Posyandu bertahan di 100%.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (38, 'TANGGAP DARURAT GIZI BURUK', 'Mukhlis Jabatan : Fasilitator Kecamatan Generasi, ', 'sdm', 'Pemberdayaan Masyarakat', 10, '56565.jpg', '', '2017/11/19', '<p>UPTD BLUD Puskesmas Kuripan membuat Kampung Gizi sebagai upaya tanggap\r\ndarurat gizi buruk setelah ditemukan 202 kasus gizi buruk, balita dengan barat\r\nbadan di bawah garis merah (BGM) dan gizi kurang di kecamatan Kuripan.\r\n\r\nBerkat upaya\r\ntersebut, kini kasus BGM dan gizi buruk menjadi NOL.\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (39, 'BANK DARAH  UNTUK IBU HAMIL', 'Irawan Susiandi,  Jabatan : Kepala Desa Pengenjek ', 'sdm', 'Pemberdayaan Masyarakat', 10, 'Bank Darah Ibu Hamil.jpeg', '', '2017/11/19', '<p>Pemerintah Desa Pengenjek, Jonggat, Lombok Tengah, berinisiatif membuat\r\nBank Darah untuk menjamin ketersediaan darah bagi warga desanya, terutama\r\nwanita hamil, guna menghindari dampak negatif dari kekurangan darah.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (40, 'JEJARING UNTUK PELAYANAN INKLUSI', 'Hidayatul F,  Jabatan : Tim Inovasi Kabupaten Lomb', 'sdm', 'Pembinaan Masyarakat', 12, 'index1231.jpg', '', '2017/11/19', '<p>Pelaksana Kegiatan program Generasi Sehat dan Cerdas (PK GSC) berhasil\r\nmembuka dan mempersatukan jejaring, dari lokal hingga internasional, dalam\r\nmembantu anak berkebutuhan khusus mendapatkan layanan kesehatan. Hasilnya, sang\r\nanak memperoleh pelayanan optimal dan kolaborasi antarpihak pun terjalin\r\nsehingga pelayanan kesehatan yang diberikan maksimal.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (41, 'KEBERLANJUTAN PROGRAM PARENTING', 'Hidayatul F,  Jabatan : Tim Inovasi Kabupaten Lomb', 'sdm', 'Pemberdayaan Masyarakat', 12, 'indexhhh.jpg', '', '2017/11/19', '<p>Pemerintah Desa Pengenjek, Jonggat, Lombok Tengah, mengalokasikan dana\r\ndesa untuk keberlanjutan program parenting sebagai bagian dari pemberdayaan\r\nmasyarakat. Melalui program ini, selain kader desa memiliki kemampuan di bidang\r\nkonseling, para orangtua juga memiliki referensi dalam menerapkan pola asuh\r\nanak yang mendidik sebagai penerus bangsa.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (42, 'MEMAKSIMALKAN POTENSI DESA UNTUK PENDIDIKAN', 'Munawir Haris,  Jabatan : Kepala Desa Rensing Raya', 'sdm', 'Pembangunan Desa', 0, 'IMG-20170422-WA0006.jpg', '', '2017/11/19', '<p>\r\nPemerintah Desa\r\nRensing Raya, Sakra Barat, Lombok Timur, berinisiatif memanfaatkan lahan tidur\r\nmilik desa untuk dijadikan Sekolah Alam guna memberikan kegiatan tambahan yang\r\npositif bagi anak-anak setelah pulang sekolah.\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (43, 'PENGALOKASIAN DANA DESA UNTUK PAUD  DENGAN SURAT HIBAH', 'Hidayatul F,  Jabatan : Tim Inovasi Kabupaten Lomb', 'Peningkatan Infrastruktur', 'Pembangunan Desa', 22, '21.jpg', '', '2017/11/19', '<p>Pemerintah Desa Barabali, Batukliang, Lombok Tengah, memprioritaskan\r\npengalokasikan dana desa bagi pembangunan gedung Pendidikan Anak Usia Dini\r\n(PAUD) bagi dusun yang dapat menunjukkan surat hibah tanah. Hasilnya, desa\r\nmendapat jaminan akan keberlanjutan fungsi PAUD dan terhindar dari konflik\r\ndengan ahli waris pemilik tanah di kemudian hari.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (44, 'PROGRAM JAMKESDES DAN BAPAK ANGKAT KESEHATAN', 'Irawan Susiandi,  Jabatan : Kepala Desa Pengenjek ', 'sdm', 'Pemberdayaan Masyarakat', 10, 'rrer.jpg', '', '2017/11/19', '<p>Pemerintah Desa Pengenjek, Jonggat, Lombok Tengah, sejak 2010 membuat\r\nprogram Jaminan Kesehatan Desa (Jamkesdes) bagi masyarakat yang tidak\r\nmendapatkan Jaminan Kesehatan Masyarakat (Jamkesmas). Pada 2017, Pemerintah\r\nDesa Pengenjek menggulirkan program uji coba Bapak Angkat Kesehatan untuk\r\nmenggantikan Jamkesdes yang berakhir 2016. Hasilnya, warga desa yang kurang\r\nmampu masih bisa mendapatkan layanan perawatan kesehatan.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (45, 'REVITALISASI PAUD', 'Hidayatul F,  Jabatan : Tim Inovasi Kabupaten Lomb', 'Peningkatan Infrastruktur', 'Pembangunan Desa', 13, '1112.jpg', '', '2017/11/19', '<p>Guru\r\nPAUD berupaya mencari tempat yang dapat ditumpangi untuk melanjutkan kegiatan\r\nbelajar-mengajar 50 anak peserta didiknya. Akhirnya mereka menemukan tempat\r\npotensial untuk ditumpangi, yakni Posyandu Melati XI di dusun tetangga, di\r\nDusun Kabar. Setelah berkoordinasi dengan Kepala Dusun Kabar dan kader-kader\r\nPosyandu disana, kegiatan belajar mengajar pun dapat dilanjutkan beberapa bulan\r\nkemudian.\r\n\r\n\r\n\r\nKini, anak-anak\r\ndisana mendapat pendidikan usia dini, PAUD nya berkembang serta diminati oleh\r\nwarga desa tetangga, kegiatan di gedung Posyandu pun menjadi lebih beragam,\r\nsehingga menguntungkan banyak pihak: anak-anak, orangtua murid, guru PAUD,\r\nkader Posyandu, bahkan dusun dan desa.\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (46, 'MENGGAET INVESTASI UNTUK PELAYANAN INKLUSI', 'Suhandi,  Jabatan : Tim Inovasi Kabupaten Lombok T', 'sdm', 'Pembinaan Masyarakat', 12, 'adad.jpg', '', '2017/11/19', '<p>Kecamatan Montong Gading, Lombok Timur, menyelenggarakan Gebyar Festival\r\nGenerasi Sehat Cerdas (GSC) untuk mempromosikan kegiatan pelayanan Anak\r\nBerkebutuhan Khusus (ABK) sekaligus menggaet minat para pihak untuk lebih\r\nperduli pada keberlanjutan pelayanan pendidikan bagi ABK.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (47, 'FORUM KESEHATAN  DESA SIAGA', 'Hasta,  Jabatan : Tim Inovasi Kabupaten Sumbawa  K', 'sdm', 'Pembangunan Desa', 10, 'dsf.jpg', '', '2017/11/19', '<p>Pemuda-pemudi warga desa Mapin Rea, Alas Barat, Sumbawa, nerinisiatif\r\nmembentuk Forum Kesehatan Desa Siaga pada 2015 guna mengawal kondisi kesehatan\r\nlingkungan dan warganya. Keberadaan forum yang dilegalkan oleh Keputusan Kepala\r\nDesa ini telah meningkatkan derajat kesehatan warga desa Mapin Rea dan\r\nmendorong kegiatan di bidang pelayanan sosial dasar kesehatan menjadi salah\r\nsatu prioritas dalam penganggaran dan pembangunan desa.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (48, 'KOMITMEN BERSAMA KEPALA DESA MENGUSUNG KEGIATAN PELAYANAN SOSIAL DASAR (PSD)', 'Hasta,  Jabatan : Tim Inovasi Kabupaten Sumbawa  K', 'sdm', 'Pembinaan Masyarakat', 12, 'dssdg.jpg', '', '2017/11/19', '<p>Seluruh Kepala Desa di kecamatan Lopok, Sumbawa,\r\nmenandatangani komitmen bersama yang menyatakan bahwa setiap desa akan\r\nmelanjutkan dan mendanai kegiatan-kegiatan bidang pelayanan sosial dasar (PSD)\r\npendidikan dan kesehatan yang sebelumnya didanai oleh program Generasi Sehat\r\ndan Cerdas (GSC).\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (49, 'OPTIMALISASI ASET DESA MENUJU  KEMANDIRIAN POSYANDU', 'Benjamin, Jabatan : Tim Inovasi Kabupaten Sumbawa ', 'sdm', 'Pemberdayaan Masyarakat', 10, '45 - Copy.jpg', '', '2017/11/19', '<p>Pemerintah Desa Goa, Jereweh, Sumbawa Barat, melakukan optimalisasi aset\r\ndesa berupa tanah yang belum tergarap (lahan tidur) untuk dimanfaatkan oleh\r\nmasyarakat menjadi Kebun Gizi. Kebun tersebut dikelola oleh kader Posyandu\r\nbekerjasama dengan PKK, Karag Taruna, serta Petugas Penyuluh Lapangan (PPL)\r\nPertanian, dan Pusat Kesehatan Hewan (Puskewan) Dinas Peternakan setempat.\r\n\r\n</p><p>Upaya tersebut telah\r\nmemudahkan masyarakat memperoleh bahan makanan bagi keluarga dan pemberian\r\nmakanan tambahan (PMT) di Posyandu. Selain itu, penjualan sebagian hasil panen\r\nkebun gizi tersebut menjadi sumber pendanaan bagi kegiatan Posyandu.\r\n\r\n\r\n\r\n<br></p><p></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (50, 'MEMANFAATKAN SOLAR CELL UNTUK  MENGAKSES AIR BERSIH', 'Robin, Kepala Kampung Biatan Baru  HP : 0852462991', 'Peningkatan Infrastruktur', 'Pembangunan Desa', 4, 'sssdsd.jpg', '', '2017/11/19', '<p>Warga Kampung (apakah sama dengan Desa? Jika sama, plz pakai kata Desa)\r\nBiatan Baru, Kecamatan Biatan, Kabupaten Berau, Kalimantan Timur, memanfaatkan\r\nteknologi solar cell (sel surya) untuk mendapatkan air bersih. Listrik dari\r\nsolar cell memiliki daya yang lebih kuat sehingga air bisa langsung mengalir ke\r\nrumah-rumah warga. Sejak itu, masalah air teratasi, tingkat kesehatan\r\nmasyarakat pun semakin terjaga.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (51, 'PEMANFAATAN TENAGA PROFESIONAL UNTUK PENGEMBANGAN USAHA DESA', 'Soemarjon, Direktur BUMDes Pagarawan  HP: 08127823', 'sdm', 'Pembinaan Masyarakat', 7, 'tenaga profesional.jpg', '', '2017/11/19', '<p>Pemerintah Desa Pagarawan, Kecamatan Merawang, Kabupaten Bangka,\r\nProvinsi Kepulauan Bangka Belitung, berinisiatif untuk bermitra dengan tenaga\r\nprofesional dalam mengembangkan potensi sejumlah usaha produktif desa dengan\r\nmembentuk petugas sementara pengelola dan pengurus kegiatan usaha-usaha\r\ntersebut. Hal ini dilakukan sebagai upaya menjembatani dan meningkatkan\r\nkapasitas bagi BUMDes agar lebih siap mengelola usaha-usaha tersebut,\r\nmendatangkan pendapatan bagi desa, sekaligus memenuhi kebutuhan warga.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (52, 'KONSERVASI BAMBU UNTUK MENJAGA SUMBER MATA AIR DAN DEBIT AIR EMBUNG DALAM MENDUKUNG PERTANIAN DAN EKOWISATA', 'Jamaludin, Ketua Kelompok Tani Bambu Boon Pring (0', 'Peningkatan Infrastruktur', 'Pembangunan Desa', 21, 'dfsdf.jpg', '', '2017/11/19', '<p>Desa Sanankerto, Kabupaten Malang, Jawa Timur, memiliki cara sendiri\r\ndalam menjaga debit air embung agar tetap stabil, yakni dengan melakukan\r\nkonservasi bambu secara berkesinambungan. Alhasil, warga dan petani tidak perlu\r\nkuatir kekurangan air unruk lahan pertaniannya sehingga hasil panen nya stabil.\r\nBahkan, lingkungan sekitar embung bertambah asri hingga tempat itu menjelma\r\nmenjadi salah satu tujuan wisata.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (53, 'KAJIAN UNTUK MENENTUKAN TEKNOLOGI SUMUR DAN KETERSEDIAAN AIR DESA', 'Cipto, Ketua BUMDes Aneka Usaha  HP: 0852 5941 815', 'Peningkatan Infrastruktur', 'Pembangunan Desa', 4, 'sdsd.jpg', '', '2017/11/19', '<p>Lembaga pengelola air bersih HIPPAM (Himpunan Penduduk Pemakai Air\r\nMinum) Desa Sugihwaras, Kecamatan Kepohbaru, Kabupaten Bojonegoro, Jawa Timur,\r\nmelakukan kajian yang melibatkan tenaga profesional dalam perbaikan sumur, pada\r\nsatu-satunya sarana air bersih yang dimiliki desa tersebut. Melalui kajian ini,\r\nsumber permasalahan macetnya air dapat ditemukan dengan jitu sehingga\r\npengalokasian dana untuk perbaikan sumur dengan teknologi yang sesuai pun dapat\r\nlebih realistis. Hasilnya, kini warga bisa kembali menikmati air tanpa rasa\r\nwas-was.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (54, 'MERINTIS PRODUK UNGGULAN DESA  MELALUI BUAH NAGA', 'Kamaruddin, Kepala Desa Sukamaju  HP.08539987181', 'Kewirausahaan', 'Pembangunan Desa', 7, 'buah naga.png', '', '2017/11/19', '<p>Masyarakat Desa Sukamaju yang sebelumnya petani kakao dan lada\r\nmemperbaiki mata pencahariannya melalui budidaya tanaman buah naga. Hal ini\r\ndilakukan karena kondisi tanah dan ketinggian desa cocok untuk pengembangan\r\nbudidaya buah naga, jangka waktu panen relatif cepat, serta harga jual\r\nbersaing. Tak tanggung-tanggung, Pemerintah Desa mengeluarkan Peraturan Desa\r\nagar warganya menanam minimal 20 pohon buah naga di rumah atau tanah mereka.\r\nAlhasil, desa ini menjadi pemasok buah naga cukup diperhtungkan di Sinjai.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (55, 'PEMBANGUNAN DAN PENGELOLAAN SARANA OLAHRAGA (SORGA) MULTIFUNGSI UNTUK MENGEMBANGKAN MINAT, BAKAT,   DAN POTENSI WARGA DESA', 'Kepala Desa, Aamin AS, 087865912124', 'Peningkatan Infrastruktur', 'Pembangunan Desa', 13, '18300953_776955569136450_5375054457794469444_n.jpg', '', '2017/11/19', '<p>Pemerintah\r\nDesa Sesela, Kecamatan Gunug Sari, Lombok Barat, Nusa Tenggara Barat (NTB)\r\nmenyulap Tempat Pembuangan Sampah (TPS) menjadi sarana olahraga multifungsi\r\ndengan menggunakan Dana Desa. Alhasil, kini desa tersebut memiliki wadah\r\npengembangan bakat olahraga bagi remaja, sarana jalan sehat bagi orangtua dan\r\nlansia, tempat bermain yang aman bagi anak-anak, sekaligus kegiatan bermanfaat\r\nlainnya di bidang seni.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (56, 'PENGELOLAAN SUMBER MATA AIR MELALUI KONSERVASI HUTAN BERBASIS KEARIFAN LOKAL OLEH PEMERINTAH DESA', 'Bapak Haeril, Kepala Desa Genggelang dan Pak Dodi ', 'Peningkatan Infrastruktur', 'Pembangunan Desa', 4, 'fsdf.jpg', '', '2017/11/19', '<p>Desa Genggelang menyelamatkan sumber mata air\r\nmelalui konservasi hutan berbasis kearifan lokal. Awig-awig telah dimiliki\r\nsecara turun temurun namun selama ini hanya disimpan dalam ingatan sejumlah\r\ntokoh masyarakat. Pada 2016, Pemerintah Desa memutuskan untuk mendokumentasikan\r\nawig-awig tentang lingkungan hidup agar dapat dikenal dan diketahui oleh\r\nseluruh masyarakat desa. Dampak dari upaya tersebut adalah lebih tertatanya\r\nhutan, terjaganya sumber mata air sehingga kebutuhan air bersih warga terjamin\r\ndan terkelola baik, terbentuknya wisata desa yang meningkatkan pendapatan\r\nmasyarakat dan meredam konflik.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (57, 'MENGAMANKAN PENDAPATAN DESA WISATA   MELALUI PENERAPAN E-TICKETING', '	Senen, Kepala Desa Nglanggeran, HP:081804252032', 'Kewirausahaan', 'Pembangunan Desa', 21, 'wisatawan-mancanegara-jalan-jalan-di-bandung_20150407_145327.jpg', '', '2017/11/19', '<p>Desa\r\nNglanggeran, Kecamatan Patuk, Kabupaten Gunung Kidul, Daerah Istimewa\r\nYogyakarta (DIY), menerapkan sistem elektronik tiket (e-ticketing) dalam\r\nmengelola objek wisata disana. Hasilnya, pengelolaannya menjadi lebih\r\ntransparan, jumlah wisatawan dan pemasukan terdata dengan baik, hingga potensi\r\nkebocoran Paendapatan Asli Desa (PAD) pun dapat dicegah.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (58, 'UPAYA DESA MENGHIDUPKAN KEMBALI BUMDes YANG DIBEKUKAN', 'Ketua BUMDes Cece Suarsa  HP : 081381196756  Email', 'Kewirausahaan', 'Pembinaan Masyarakat', 19, 'upaya menghidupkan bumdes.png', '', '2017/11/19', '<p>BUMDes Ganeas\r\nSejahtera di Desa Ganeas, Kabupaten Sumedang didirikan pada tahun 2008 namun terpaksa\r\ndibekukan pada tahun 2013 karena tidak berjalan dengan manajemen yang baik.\r\nMelihat pentingnya BUMDes bagi perkembangan perekonomian desa, Pemerintah Desa\r\nGaneas menghidupkan kembali BUMDes tersebut hingga kini kembali beroperasi\r\ndengan layanan dan jumlah anggota yang terus berkembang.\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (59, 'MENGUBAH LIMBAH MINYAK GORENG MENJADI PAD', 'Kepala desa + inovator Wahyudi Anggoro Hadi  HP: 0', 'Kewirausahaan', 'Pemberdayaan Masyarakat', 7, 'LIMBAH MINYAK GORENG.png', '', '2017/11/19', '<p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nBadan Usaha Milik Desa (BUMDes) Panggung Lestari mengolah limbah minyak\r\ngoreng (jelantah) untuk dipasok kepada PT. Tirta Investama (Aqua Danone)\r\nsebagai produk campuran bahan bakar. Melalui kerja sama tersebut, BUMDes mampu\r\nmengubah limbah minyak goreng menjadi pendapatan bagi desa serta bisa\r\nmengurangi pencemaran limbah di sungai.\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (60, 'UPAYA PEMERINTAH DESA MENGUJI KELAYAKAN KINERJA BUMDES SEBELUM MEMBERIKAN MODAL KERJA', 'Kepala Desa Aik Bual  Bapak Zulkurnain / 087865830', 'Kewirausahaan', 'Pemerintahan Desa', 8, 'menguji kelayakan bumdes.jpg', '', '2017/11/19', '<p>Desa Aik Bual membentuk BUMDes untuk mendukung pengelolaan potensi\r\ndesanya yang melimpah. Namun Pemerintah Desa tidak serta merta memberikan modal\r\nuntuk kegiatan BUMDes. Sebelum mengalokasikan Dana Desa, Pemerintah Desa\r\nmendorong BUMDes untuk memperlihatkan kinerjanya terlebih dahulu secara swadaya\r\nsebagai uji kelayakan perolehan modal. Arahan Pemerintah Desa yang semula\r\nmenuai protes tersebut akhirnya menunjukkan upaya-upaya kegiatan yang dilakukan\r\nsecara swadaya dan menjadi dasar pengalokasian Dana Desa.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (61, 'MEMANFAATKAN ALIRAN SUNGAI MENJADI DESA MANDIRI ENERGI', 'Kepala Desa Batanguru Zakaria  HP : 085340757484', 'Peningkatan Infrastruktur', 'Pembangunan Desa', 4, 'gf.jpg', '', '2017/11/19', '<p>Desa Batang Uru, Kab. Mamasa, Sulawesi Barat, terisolir dan jauh dari\r\nsentuhan pembangunan infrastruktur sehingga geliat perekonomian desa lambat dan\r\nkegiatan warga di malam hari pun terbatas. Namun desa ini kemudian memanfaatkan\r\naliran sungai sebagai sumber penggerak pembangkit listrik tenaga mikro hidro\r\n(PLTMH). Upaya ini membuat seluruh rumah di desa bisa mendapatkan akses listrik\r\nsecara mandiri hingga kegiatan usaha rumahtangga pun menggeliat.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (62, 'PENGELOLAAN DALAM PENGGUNAAN  PEMBANGKIT LISTRIK TENAGA MIKRO HIDRO (PLTMH) UNTUK KEBERLANJUTAN PASOKAN LISTRIK DESA', 'Faisal Hidayat, Kepala Desa Patanyamang  HP: 08524', 'Peningkatan Infrastruktur', 'Pembangunan Desa', 4, 'kuku.jpg', '', '2017/11/19', '<p>Desa Patamanyang, Kab. Maros, Sulawesi Selatan, berhasil mengelola\r\nPembangkit Listrik Tenaga Mikro Hidro (PLTMH) yang dibangun pada tahun 2004\r\nhingga kini. Selain Peraturan Desa yang memercayakan pengelolaan PLTMH kepada\r\nUnit Pengelola Turbin (UPT) dengan struktur pengurus yang jelas, juga dibuat\r\nperaturan penggunaan listrik, pengelolaan iuran listrik dan alokasi dana sosial\r\nbagi warga kurang mampu.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (63, 'MENGUBAH SAMPAH  MENJADI TABUNGAN PENDIDIKAN & KESEHATAN', 'Sulhayani,  Jabatan : Tim Inovasi Kabupaten Lombok', 'Kewirausahaan', 'Pembinaan Masyarakat', 17, 'di-bandung-bayar-listrik-pakai-sampah-323801-1.jpg', '', '2017/11/19', '<p>Warga desa Saribaye, Kecamatan Lingsar, Lombok Barat, berhasil mengubah\r\nsampah menjadi tabungan untuk pendidikan dan kesehatan bagi anak dan keluarga\r\nmereka melalui bank sampah yang dikelola oleh masyarakat.\r\n\r\n</p><p>&nbsp;Kini, warga desa memiliki tabungan tambahan dan kondisi lingkungan\r\nrelative bersih dari sampah kemasan, plastik dan botol.</p>\r\n\r\n\r\n\r\n\r\n\r\n<br><p></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (64, 'KEBIJAKAN TERNAK KAMBING UNTUK PENDIDIKAN', 'Desa Barebali, Batukliang Utara,  Lombok Tengah', 'Kewirausahaan', 'Pemberdayaan Masyarakat', 7, 'kambing.jpg', '', '2017/11/19', '<p>Pemerintah\r\nDesa Barabali, Batukliang Utara, Lombok Tengah, mendorong warganya untuk\r\nbeternak kambing. Alasannya, tingkat reproduktivitas yang tinggi memungkinkan\r\nwarga untuk memperoleh pendapatan lebih sehingga bisa ditabung untuk biaya\r\npendidikan anak-anak mereka. Hasilnya, kini desa Barabali memiliki sentra\r\nkambing yang terkenal dan angka anak putus sekolah pun berkurang signifikan.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (65, 'PENGELOLAAN SARANA AIR BERSIH DESA', 'Satriawan,  Jabatan : Tim Inovasi Kabupaten Lombok', 'Peningkatan Infrastruktur', 'Pembangunan Desa', 4, 'fsdf - Copy.jpg', '', '2017/11/19', '<p>Warga desa Ganggelang, Gangga, Lombok Utara,\r\nmenyempurnakan pengelolaan sarana air bersih yang telah dimilikinya melalui\r\nbantuan program PNPM Perdesaan, dengan membentuk sebuah Pengelolaan Air Minum\r\nDesa (PAMDES). Alhasil, distribusi air lebih merata, konflik akibat air\r\nteratasi dan desa pun memiliki pemasukan.\r\n\r\n\r\n\r\n\r\n\r\n<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (66, 'SUSI (suami sayang istri)', 'SEKSI KESGA, GIZI DAN HATR', 'sdm', 'Pemberdayaan Masyarakat', 10, '111.jpg', '', '2017/11/23', '<p><b>Apa itu </b><b>Gerakan Susi</b><b>...?</b>\r\n\r\n</p><p>&nbsp;</p>\r\n\r\n<p>Gerakan Suami Sayang istri adalah Sekelompok suami yang mempunyai peran dalam pelaksanaan kunjungan\r\npemeriksaan kehamilan ANC berkualitas dalam meningkatkan keselamatan ibu\r\nhamil,bersalin dan nifas</p>\r\n\r\n\r\n\r\n\r\n\r\n<br><p></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (67, 'Lampu Air Garam', 'Hafi Energy Indonesia', 'Kewirausahaan', 'Pemberdayaan Masyarakat', 3, 'lampu air garam.png', '', '2017/11/25', '<p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p><b>Mengapa memilih Lampu Air Garam?</b></p><p>Pada Kesempatan ini\r\nHAFI ENERGI </p>\r\n\r\n<p>Berpartisipasi menjadi salah satu Partisipan Inovasi</p><p>Yang membahas kelangkaan energi dengan memberikan solusi melalui Lampu\r\nAir Garam untuk daerah pedesaan tertinggal<br></p><p><b>Latar Belakang</b></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p>Luas wilayah laut Indonesia adalah 64,97% dari total wilayah Indonesia secara keseluruhan, yang jika diuraikan adalah : (a) Luas Lautan = 3.544.743,9 kmÂ² , (b) Luas Laut Teritorial =\r\n284.210,90 kmÂ², (c) Luas Zona Ekonomi Ekslusif = 2.981.211,00 kmÂ², dan (d)\r\nLuas Laut 12\r\nMil = 279.322,00 kmÂ², inilah data yang &nbsp;menunjukkan betapa luasnya laut Indonesia.</p><b><p></p>\r\n\r\n\r\n\r\n\r\n\r\n<br></b><p></p><p></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (68, 'KLINIK PSD DESA CEMERLANG', 'Muhlis Panai (0853 4033 0805)', 'sdm', 'Pemberdayaan Masyarakat', 12, 'fg.jpg', '2.jpg', '2017/11/25', '<p><b>KLINIK PSD DESA CEMERLANG</b><br></p><p>Merupakan Pusat Informasi dan Penguatan Masyarakata Desa<br></p><p><b>Klinik PSD Desa Cemerlang di kelola Oleh FKAKD (Forum Komunikasi Antar Kelembagaan Desa) Permendagri Nomor 110 Tahun 2017 Tentang BPD</b><br></p><p></p><ol><li>Klinik PSD Desa menjadi Pusat Informasi Masyarakat Desa dimana segala Informasi yang dibutuhkan oleh Masyarakat terfokus di Satu Titik / Satu Tempat sehingga Masyarakat Mudah mengakses Informasi yang meraka butuhkan dalam melihat perkembangan Pembangunan dan Pemberdayaan Masyarakat Desa<br></li><li>Klinik PSD Desa Cemerlang menjadi Pusat Penguatan Masyarakata Desa dalam hal Peningkatan Kapasitas Warga Desa yang membutuhkan Tambahan Pengetahuan dan Keterampilan<br></li></ol><p></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (69, 'Kolektivitas Warga Membangun Sekolah untuk Memenuhi Kebutuhan Pendidikan', 'TEUKU MUSLEM Kepala Desa Blang Krueng Telepon Geng', 'sdm', 'Pemberdayaan Masyarakat', 11, 'Restrukturisasi Wilayah.jpg', '', '2017/11/25', '<p>Pemerintah Desa Blang Krueng bersama warga berinisiatif membangun taman kanak-kanak (TK) dan sekolah dasar (SD) secara swadaya untuk menjamin anakanak desa mendapatkan pendidikan awal dan dasar<br></p><p><b>HASIL</b></p><p>â€¢ Seluruh anak usia TK dan SD di Desa Blang Krueng dapat mengenyam pendidikan formal di sekolah â€¢ Terdapat 2 kelas untuk TK dan 6 kelas untuk tingkat SD<br></p><p><b>PEMBELAJARAN</b></p><p>â€¢ Sarana pendidikan desa dapat dibangun secara swadaya berdasarkan kebutuhan masyarakat dan dengan mengikutsertakan masyarakat dalam perencanaannya â€¢ Kekurangan sarana pendidikan dapat memanfaatkan ruang atau fasilitas yang ada â€¢ Kepemimpinan tegas dari Pemerintah Desa dapat mendorong proses formalisasi sarana pendidikan desa serta pemanfaatan tenaga lokal sebagai pengaja<br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (70, 'Restrukturisasi Wilayah untuk Peningkatan Pengelolaan Kesehatan', 'GUNADI UTAMA Kepala Desa Lalang Sembawa Telepon Ge', 'sdm', 'Pemberdayaan Masyarakat', 10, 'REK.jpg', '', '2017/11/25', '<p><b>HASIL</b></p><p></p><ul><li>Seluruh dusun kini telah mendapat layanan kesehatan secara merata&nbsp;<br></li><li>Tingkat kesehatan warga di seluruh dusun sudah terpantau â€¢ Sanitasi lingkungan meningkat, lebih dari 95 rumah sudah memiliki jamban&nbsp;<br></li><li>Seluruh warga desa memiliki catatan kesehatan yang diperbaharui setiap bulan<br></li><li>Lalang Sembawa menjadi desa percontohan sehat dan dan  terpilih sebagai juara I Desa Peduli Hidup Bersih dan Sehat (PHBS) Tingkat Nasional 2016<br></li></ul><br><p></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (71, 'Kontrak Bidan Untuk Posyandu Pemekaran', 'Zainal Abidin Tim Inovasi Kabupaten Dompu Telepon ', 'sdm', 'Pemberdayaan Masyarakat', 10, 'MODEL POS.jpg', '', '2017/11/25', '<p><b>HASIL</b></p><p></p><ul><li>Tidak ada lagi kasus kematian ibu melahirkan&nbsp;<br></li><li>Kasus ibu hamil KEK dan anemia, kasus bayi balita dan BGM berkurang&nbsp;<br></li><li>Tingkat kehadiran di Posyandu meningkat hingga lebih dari 80%&nbsp;<br></li><li>Kesadaran tentang pemahaman kesehatan meningkat, termasuk untuk bapak-bapak<br></li></ul><p></p><p><br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (72, 'Menggandeng Lembaga Keuangan Dalam Kredit Jamban Desa', 'Zainal Abidin : 081339790377', 'sdm', 'Pemberdayaan Masyarakat', 10, 'JAMBAN.jpg', '', '2017/11/25', '<p><b>HASIL</b></p><p></p><ol><li>Seluruh KK yang memiliki jamban dengan menggunakan sistem kredit ini.&nbsp;<br></li><li>Terjalin kerjasama dengan BUMDes di Nusa Jaya, Kampasi Meci, dan Sukadamai, dengan Koperasi Kasama Pahu Kecamatan Huu dan Koperasi Doropajo Kecamatan Pajo, dan BPR Rasabou Kecamatan Huu.&nbsp;<br></li><li>Lembaga keuangan mendapat keuntungan jasa yang diperolehnya dari kredit jamban dan mendapat bimbingan manajemen pengelolaan BUMDes dan Koperasi gratis dari PjOK tersebut.<br></li></ol><p></p><p><br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (73, 'Upaya Menata Desa Melalui Pembentukan Jejaring Aspirasi Masyarakat', 'Rosihan Kepala Desa Orong Bawa Telepon Genggam : 0', 'sdm', 'Pemberdayaan Masyarakat', 12, 'Upaya Menata Desa Melalui.jpg', '', '2017/11/25', '<p><b>HASIL</b></p><p></p><ol><li>Lingkungan lokasi desa yang sebelumnya cenderung kumuh, maka saat ini sudah bersih tertata, masyarakat merasa nyaman, tidak ada lagi jalanan yang becek karena seluruh jalan lingkungan dan gang sudah dirabat. saluran drainase sudah diperbaiki sehingga tidak ada lagi bau yang menyengat akibat saluran mampet.&nbsp;<br></li><li>Kebutuhan masyarakat didengar dan dapat ditampung oleh program Basno dari Dinas Kesehatan sehingga membantu desa Orong Bawa bebas dari buang air sembarangan.&nbsp;<br></li><li>Ada sarana bagi masyarakat dalam menyampaikan kebutuhan maupun pendapat terkait pembangunan desa sehingga Pemerintah Desa memiliki masukan dalam pemanfaatan Dana Desa<br></li></ol><p></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (74, 'Menghadirkan Kembali Dokter Keliling Desa', 'HASTA  : 082145167739', 'sdm', 'Pemberdayaan Masyarakat', 10, 'Menghadirkan Kembali Dokter Keliling Desa.jpg', '', '2017/11/25', '<p><b>HASIL</b></p><p></p><ol><li>Warga desa mendapatkan pelayanan kesehatan langsung oleh dokter tanpa harus mengeluarkan biaya transportasi yang besar dan waktu yang panjang. - Semakin banyak warga desa yang terpenuhi kebutuhannya akan layanan kesehatan yang layak oleh dokter. Hal itu terlihat dari alokasi stok obat yang terus meningkat hingga dua kali lipat, dari biasanya hanya untuk 30 orang, kini dialokasikan untuk 60 orang<br></li><li>Hak warga terhadap layanan kesehatan yang layak dapat dikerjasamakan dengan unit pelayanan setempat sehingga mendekatkan layanan ke warga yang terpencil sekalipun. Jangkauan wilayah yang luas membuka peluang warga dan Pemerintah setempat untuk berinovasi dalam mencari solusi dalam pemberian layanan kesehatan kepada masyarakat.<br></li></ol><p></p><p><br><br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (75, 'Optimalisasi Aset Desa Menuju Kemandirian Posyandu ', 'Benjamin Tim Inovasi Kabupaten Sumbawa Barat Telep', 'sdm', 'Pemberdayaan Masyarakat', 10, 'Optimalisasi Aset Desa Menuju Kemandirian Posyandu.jpg', '', '2017/11/25', '<p><b>HASIL</b></p><p></p><ol><li>Kasus bayi-balita gizi buruk di Desa Goa dapat teratasi melalui Kebun Gizi dengan dimudahkannya masyarakat memperoleh bahan makanan dan disediakannya PMT bagi sasaran-sasrannya.&nbsp;<br></li><li>Pengeluaran rumah tangga menjadi lebih hemat karena warga yang memiliki lahan yang cukup juga mulai menanam bahan-bahan makanan yang dibutuhkan.&nbsp;<br></li><li>Diperoleh penambahan modal pertama melalui hasil panen pertama sayuran, ikan lele dan ayam, yang sepakat digunakan sepenuhnya untuk menambahan modal, pembelian bibit ikan nila, makanan ikan, pakan ayam, serta bambu untuk perbaikan pagar dan sebagian untuk PMT.<br></li></ol><p></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (76, 'Konselor Sebaya Dalam Bidang Kesehatan', 'Sulhayani : 0819184185542', 'sdm', 'Pemberdayaan Masyarakat', 10, 'Konselor Sebaya Dalam Bidang Kesehatan.jpg', '', '2017/11/25', '<p><b>HASIL</b></p><p></p><ol><li>Meski belum terukur secara kualitatif, namun dilihat dari perilaku hidup bersih dan sehat warga desa umumnya remaja, dapat disimpulkan bahwa kesadaran dan pemahaman remaja akan kesehatan reproduksi remaja (KRR) relatif meningkat.&nbsp;<br></li><li>Sejumlah remaja usia pubertas tercatat mengikuti kegiatan ekonomi. Hal ini menunjukkan mereka dapat menghadapi dan melewati masa pubertas dengan baik&nbsp;<br></li><li>Menurunya kasus pernikahan dini<br></li></ol><p></p><p><br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (77, 'MoU Warga Desa Dengan Puskesmas', 'Sulhayani  : 0819184185542', 'sdm', 'Pemberdayaan Masyarakat', 10, 'MoU Warga Desa Dengan Puskesmas.jpg', '', '2017/11/25', '<p><b>HASIL</b></p><p></p><ol><li>Warga mendapatkan pelayanan yang lebih baik dari Puskesmas&nbsp;<br></li><li>Menghapus standar ganda dalam pelayanan kesehatan bagi warga miskin&nbsp;<br></li><li>Meningkatkan taraf kesehatan warga&nbsp;<br></li><li>Meningkatkan kinerja Puskesma<br></li></ol><p></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (78, 'Gerakan Pulau Bersih ', 'Suhandi  : 081933123010', 'sdm', 'Pemberdayaan Masyarakat', 10, 'Gerakan Pulau Bersih.jpg', '', '2017/11/25', '<p><b>HASIL</b></p><p></p><ol><li>Adanya TPA&nbsp;<br></li><li>Setiap RT memiliki TPS&nbsp;<br></li><li>Adanya petugas pengangkutan sampah&nbsp;<br></li><li>Adanya bidan desa yang menetap&nbsp;<br></li><li>Pengelolaan air bersih yang baik dan akan bekerjasama dengan PDAM Kabupaten Lombok Timur&nbsp;<br></li><li>Pulau relatif lebih bersih dan tertata<br></li></ol><p></p><p><br></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (79, 'Mengatasi Pernikahan Dini Melalui Sekolah Satu Atap ', 'Suhandi : 081933123010', 'sdm', 'Pemberdayaan Masyarakat', 11, 'Mengatasi Pernikahan Dini Melalui Sekolah Satu Atap.jpg', '', '2017/11/25', '<p><b>HASIL</b></p><p></p><ul><li>Proses belajar-mengajar SMP SATAP dapat berlanjut dan tidak ada lagi siswa yang putus sekolah Â·&nbsp;<br></li><li>Jumlah siswa SMP semakin bertambah hingga 41 orang pada 2017; kelas 7 sebanyak 20 orang, kelas 8 sebanyak 15 orang, kelas 9 sebanyak 6 orang&nbsp;<br></li><li>Tidak ada lagi pernikahan dini dari siswa lulusan SDN 06 Perigi<br></li></ul><p></p>', 0, 1);
INSERT INTO `js_kegiatan` VALUES (80, 'Sistem Informasi Geografis Desa', 'Indo Tech Solution : 0813 2901 9696 ', 'sdm', 'Pemberdayaan Masyarakat', 26, 'sig.jpg', '', '2017/11/25', '<p><b>Sistem Informasi Potensi Desa berbasis Geospasial yang&nbsp; berfungsi </b>sebagai Manajemen Pemerintahan Desa yang dapat dibangun secara mandiri oleh Des<br></p>', 0, 1);

-- ----------------------------
-- Table structure for js_panitia
-- ----------------------------
DROP TABLE IF EXISTS `js_panitia`;
CREATE TABLE `js_panitia`  (
  `id_panitia` int NOT NULL AUTO_INCREMENT,
  `nama_panitia` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `level` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_panitia`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of js_panitia
-- ----------------------------
INSERT INTO `js_panitia` VALUES (1, 'Joe Sangkota', 'panitia', 'd32b1673837a6a45f795c13ea67ec79e', 'panitia');

-- ----------------------------
-- Table structure for js_sub_admin
-- ----------------------------
DROP TABLE IF EXISTS `js_sub_admin`;
CREATE TABLE `js_sub_admin`  (
  `id_sub_admin` int NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_telepon` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `level` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'sub',
  `kan` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Pemdes',
  PRIMARY KEY (`id_sub_admin`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of js_sub_admin
-- ----------------------------
INSERT INTO `js_sub_admin` VALUES (1, 'Imbran Ingahu', 'subadmin', 'abdb392f09c7376fe5ce059f045de38b', '0987654321', 'sub', 'Pemdes');

-- ----------------------------
-- Table structure for js_sub_bidang
-- ----------------------------
DROP TABLE IF EXISTS `js_sub_bidang`;
CREATE TABLE `js_sub_bidang`  (
  `id_sub_b` int NOT NULL AUTO_INCREMENT,
  `nm_sub_bidang` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_sub_b`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of js_sub_bidang
-- ----------------------------
INSERT INTO `js_sub_bidang` VALUES (3, 'Bidang Pertanian dan Ketahanan Pangan');
INSERT INTO `js_sub_bidang` VALUES (4, 'Bidang Pertambangan dan Energi Serta Sumber Daya Mineral');
INSERT INTO `js_sub_bidang` VALUES (5, 'Bidang Kehutanan dan Perkebunan');
INSERT INTO `js_sub_bidang` VALUES (6, 'Bidang Perindustrian dan Perdagangan');
INSERT INTO `js_sub_bidang` VALUES (7, 'Bidang Koperasi dan Usaha Kecil dan Menengah');
INSERT INTO `js_sub_bidang` VALUES (8, 'Bidang Penanaman Modal');
INSERT INTO `js_sub_bidang` VALUES (9, 'Bidang Tenaga Kerja dan Transmigrasi');
INSERT INTO `js_sub_bidang` VALUES (10, 'Bidang Kesehatan');
INSERT INTO `js_sub_bidang` VALUES (11, 'Bidang Pendidikan dan Kebudayaan');
INSERT INTO `js_sub_bidang` VALUES (12, 'Bidang Sosial');
INSERT INTO `js_sub_bidang` VALUES (13, 'Bidang Penataan Ruangan');
INSERT INTO `js_sub_bidang` VALUES (14, 'Bidang Pemukiman/Perumahan');
INSERT INTO `js_sub_bidang` VALUES (15, 'Bidang Pekerjaan umum');
INSERT INTO `js_sub_bidang` VALUES (16, 'Bidang Perhubunagan');
INSERT INTO `js_sub_bidang` VALUES (17, 'Bidang Lingkungan Hidup');
INSERT INTO `js_sub_bidang` VALUES (18, 'Bidang Politik dalam Negeri dan Administrasi Publik');
INSERT INTO `js_sub_bidang` VALUES (19, 'Bidang Otonomi Desa');
INSERT INTO `js_sub_bidang` VALUES (20, 'Bidang Tugas Pembantuan');
INSERT INTO `js_sub_bidang` VALUES (21, 'BIdang Pariwisata');
INSERT INTO `js_sub_bidang` VALUES (22, 'Bidang Pertanahan');
INSERT INTO `js_sub_bidang` VALUES (23, 'Bidang Kependudukan dan Catatan Sipil');
INSERT INTO `js_sub_bidang` VALUES (24, 'BIdang Kesatuan Bangsa dan Perlindungan Masyarakat dan Pemerintahan Umum');
INSERT INTO `js_sub_bidang` VALUES (25, 'Bidang Perencanaan');
INSERT INTO `js_sub_bidang` VALUES (26, 'Bidang Penerangan/Informasi dan Komunikasi');

-- ----------------------------
-- Table structure for js_upload_file
-- ----------------------------
DROP TABLE IF EXISTS `js_upload_file`;
CREATE TABLE `js_upload_file`  (
  `id_file` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `file` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tgl_input` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_file`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of js_upload_file
-- ----------------------------
INSERT INTO `js_upload_file` VALUES (2, 'cfghfhfghfghf', 'swakelola.xls', '23 Nov 2017');

-- ----------------------------
-- Table structure for js_user
-- ----------------------------
DROP TABLE IF EXISTS `js_user`;
CREATE TABLE `js_user`  (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `id_desa` int NOT NULL,
  `username` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_lengkap` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_telpon` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `level` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'operator',
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 33 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of js_user
-- ----------------------------
INSERT INTO `js_user` VALUES (29, 16, 'operator', '4b583376b2767b923c3e1da60d10de59', 'M Rais Nurdin S.Hi', '085240226663', 'operator');
INSERT INTO `js_user` VALUES (15, 17, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Hendra Djibu S.Kom', '085399196550', 'admin');
INSERT INTO `js_user` VALUES (32, 18, 'operator1', '37832cda757792aef82ce5e21f542006', 'joe sangkota', '085399196550', 'operator');

-- ----------------------------
-- Table structure for js_video
-- ----------------------------
DROP TABLE IF EXISTS `js_video`;
CREATE TABLE `js_video`  (
  `id_v` int NOT NULL AUTO_INCREMENT,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ket` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `video` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tgl_input` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_v`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of js_video
-- ----------------------------
INSERT INTO `js_video` VALUES (8, 'Karaoke Dewa 19 - Cintakan Membawamu Kembali (Tanp', '', '---Karaoke Dewa 19 - Cintakan Membawamu Kembali (Tanpa Vokal) - YouTube.mp4', '2017/11/08');

SET FOREIGN_KEY_CHECKS = 1;

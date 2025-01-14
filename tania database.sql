-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Des 2024 pada 11.49
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tania`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` char(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
('1', 'attha', '8667b3e4ea7917c770a780adbc7b3ab02b698396'),
('2', 'mendo', 'a3e87903f0914bd1339f025e110ea2b4355c1635');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hama_penyakit`
--

CREATE TABLE `hama_penyakit` (
  `id_hama_penyakit` char(10) NOT NULL,
  `id_admin` char(5) DEFAULT NULL,
  `judul_hama_penyakit` varchar(255) DEFAULT NULL,
  `artikel_hama_penyakit` text DEFAULT NULL,
  `gambar_hama_penyakit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hama_penyakit`
--

INSERT INTO `hama_penyakit` (`id_hama_penyakit`, `id_admin`, `judul_hama_penyakit`, `artikel_hama_penyakit`, `gambar_hama_penyakit`) VALUES
('HP002', '1', 'Hama dan Penyakit Utama pada Tanaman Hortikultura: Panduan Praktis bagi Petani', '<p>Tanaman hortikultura, seperti sayuran dan buah-buahan, rentan diserang oleh hama seperti lalat buah dan penyakit seperti embun tepung. Untuk menjaga kualitas dan kuantitas hasil panen, petani harus mengenali tanda-tanda awal serangan, seperti bercak pada daun atau buah yang rontok. Penggunaan perangkap lalat buah, aplikasi pupuk organik, dan rotasi tanaman menjadi solusi efektif dalam mengelola&nbsp;ancaman&nbsp;ini.</p>\r\n', 'About.jpg'),
('HP003', '1', 'Pengelolaan Terpadu Hama dan Penyakit: Pendekatan Ramah Lingkungan', '<p>Pengelolaan terpadu hama dan penyakit (PHT) adalah pendekatan modern yang menggabungkan teknik biologis, mekanis, dan kimiawi untuk mengatasi ancaman pada tanaman. Misalnya, memanfaatkan predator alami seperti kumbang untuk mengendalikan kutu daun, memasang perangkap feromon, hingga menggunakan pestisida berbahan organik. Pendekatan ini tidak hanya menjaga tanaman dari kerusakan tetapi juga mempertahankan kesehatan tanah dan lingkungan.<br />\r\n&nbsp;</p>\r\n', 'Features.jpg'),
('HP004', '1', 'Dampak Serangan Hama pada Tanaman Pangan dan Strategi Pencegahannya', '<p>Serangan hama pada tanaman pangan, seperti wereng pada padi atau ulat pada jagung, dapat menurunkan produktivitas secara signifikan. Dampaknya bukan hanya pada petani, tetapi juga pada ketahanan pangan secara nasional. Strategi pencegahan yang dapat diterapkan mencakup pengamatan rutin, rotasi tanaman, dan pemberian pestisida alami. Pendekatan terpadu ini membantu mengurangi kerugian tanpa merusak ekosistem.<br />\r\n&nbsp;</p>\r\n', 'Home.jpg'),
('HP005', '1', 'Penyakit Tanaman: Penyebab, Gejala, dan Solusi untuk Meningkatkan Hasil Panen', '<p>Penyakit tanaman seperti busuk daun, bercak kuning, atau layu bakteri disebabkan oleh jamur, virus, dan bakteri. Gejalanya meliputi perubahan warna daun, layu mendadak, hingga kematian tanaman. Penting untuk melakukan pencegahan dini, seperti sanitasi lahan, penggunaan bibit unggul tahan penyakit, dan aplikasi fungisida sesuai kebutuhan. Dengan pengelolaan yang baik, hasil panen dapat dipertahankan meski ancaman penyakit muncul.<br />\r\n&nbsp;</p>\r\n', 'Features1.jpg'),
('HP006', '1', '10 Hama Tanaman yang Paling Merusak dan Cara Efektif Mengendalikannya', '<p>Hama tanaman seperti ulat grayak, wereng coklat, dan belalang sering kali menjadi penyebab utama penurunan hasil panen. Mereka menyerang bagian vital tanaman seperti daun, batang, hingga akar. Untuk mengendalikannya, petani dapat menerapkan metode seperti penggunaan pestisida nabati, perangkap hama, dan predator alami. Langkah ini tidak hanya efektif, tetapi juga lebih ramah lingkungan dibandingkan penggunaan bahan kimia secara berlebihan.<br />\r\n&nbsp;</p>\r\n', 'Features2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_pasar`
--

CREATE TABLE `info_pasar` (
  `id_info_pasar` char(10) NOT NULL,
  `id_admin` char(5) DEFAULT NULL,
  `judul_info_pasar` varchar(255) DEFAULT NULL,
  `artikel_informasi_pasar` text DEFAULT NULL,
  `gambar_info_pasar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `info_pasar`
--

INSERT INTO `info_pasar` (`id_info_pasar`, `id_admin`, `judul_info_pasar`, `artikel_informasi_pasar`, `gambar_info_pasar`) VALUES
('HP001', '1', '“Tren Pasar Terbaru: Peluang Bisnis yang Menjanjikan di Tahun Ini”', '<p>Setiap tahun, tren pasar terus berubah, menciptakan peluang baru bagi para pelaku bisnis yang jeli. Di tahun ini, sektor teknologi hijau, produk ramah lingkungan, dan layanan berbasis digital menjadi sorotan utama. Kebutuhan masyarakat yang semakin sadar akan keberlanjutan lingkungan menciptakan peluang besar di pasar ini. Selain itu, perkembangan teknologi kecerdasan buatan (AI) dan Internet of Things (IoT) membuka jalan bagi inovasi dalam berbagai industri, mulai dari kesehatan hingga logistik. Pelaku usaha yang mampu menyesuaikan strategi bisnisnya dengan tren ini diprediksi akan mendapatkan keuntungan signifikan.</p>\r\n', 'Home.jpg'),
('HP002', '1', '“Analisis Perubahan Harga Komoditas: Faktor-Faktor yang Mempengaruhi Pasar”', '<p>Perubahan harga komoditas di pasar dipengaruhi oleh berbagai faktor seperti kondisi cuaca, fluktuasi mata uang, dan permintaan global. Misalnya, gangguan cuaca ekstrim dapat menurunkan produksi komoditas pertanian, sehingga harga melonjak. Selain itu, perubahan kebijakan pemerintah terkait ekspor atau subsidi juga memiliki dampak besar terhadap harga di pasar domestik maupun internasional. Dengan memahami faktor-faktor ini, pelaku usaha dapat mengantisipasi risiko dan merancang strategi yang lebih efektif untuk menghadapi dinamika pasar.<br />\r\n&nbsp;</p>\r\n', 'About.jpg'),
('HP003', '1', '“Strategi Menghadapi Persaingan Pasar di Era Digital”', '<p>Di era digital, persaingan pasar semakin ketat karena mudahnya akses informasi dan kemudahan konsumen membandingkan produk. Untuk tetap unggul, perusahaan harus mengadopsi strategi berbasis teknologi, seperti memanfaatkan analitik data untuk memahami preferensi konsumen. Selain itu, personalisasi layanan dan pemasaran melalui media sosial dapat meningkatkan loyalitas pelanggan. Inovasi produk yang sesuai dengan kebutuhan pasar juga menjadi kunci penting untuk memenangkan persaingan yang semakin dinamis.<br />\r\n&nbsp;</p>\r\n', 'Features.jpg'),
('HP004', '1', '“Peluang Ekspor: Produk Lokal yang Sedang Diminati Pasar Internasional”', '<p>Produk lokal Indonesia kini semakin diminati di pasar internasional, terutama yang mengedepankan unsur budaya dan kualitas unik. Misalnya, produk kerajinan tangan, makanan olahan organik, serta kopi spesialti dari berbagai daerah memiliki permintaan tinggi di negara-negara Eropa dan Asia. Selain kualitas produk, pengemasan yang menarik dan strategi pemasaran digital turut mendukung daya saing di pasar global. Untuk memanfaatkan peluang ini, pelaku usaha perlu memahami regulasi ekspor dan tren preferensi konsumen internasional.<br />\r\n&nbsp;</p>\r\n', '4.jpg'),
('HP005', '1', '“Cara Membaca Perilaku Konsumen untuk Mengoptimalkan Penjualan”', '<p>Memahami perilaku konsumen adalah kunci untuk mengoptimalkan penjualan di pasar yang kompetitif. Analisis terhadap data pembelian, preferensi, dan kebiasaan pelanggan dapat memberikan wawasan tentang kebutuhan mereka. Misalnya, konsumen cenderung lebih memilih produk yang menawarkan kenyamanan dan kemudahan, terutama dengan meningkatnya penggunaan e-commerce. Dengan memanfaatkan data ini, perusahaan dapat menyusun strategi pemasaran yang lebih tepat sasaran, seperti personalisasi penawaran, promosi berbasis waktu, atau peningkatan layanan purna jual.</p>\r\n', 'About1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan_keuangan`
--

CREATE TABLE `layanan_keuangan` (
  `id_layanan_keuangan` char(10) NOT NULL,
  `id_admin` char(5) DEFAULT NULL,
  `judul_layanan_keuangan` varchar(255) DEFAULT NULL,
  `artikel_layanan_keuangan` text DEFAULT NULL,
  `gambar_layanan_keuangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `layanan_keuangan`
--

INSERT INTO `layanan_keuangan` (`id_layanan_keuangan`, `id_admin`, `judul_layanan_keuangan`, `artikel_layanan_keuangan`, `gambar_layanan_keuangan`) VALUES
('HP001', '1', 'Strategi Tepat Mengelola Pendanaan untuk Bisnis Anda', '<p>Mengelola pendanaan bisnis membutuhkan perencanaan yang matang dan penggunaan dana yang efisien. Alokasikan anggaran sesuai kebutuhan prioritas seperti produksi, pemasaran, dan operasional. Selain itu, pastikan untuk menyisihkan dana darurat dan memanfaatkan teknologi keuangan untuk melacak pengeluaran. Dengan strategi yang tepat, Anda dapat menjaga stabilitas keuangan bisnis sekaligus membuka peluang ekspansi.</p>\r\n', '4.jpg'),
('HP002', '1', 'Mengenal Jenis-Jenis Pendanaan yang Sesuai Kebutuhan', '<p>Dalam memilih layanan keuangan untuk pendanaan, perhatikan reputasi lembaga, suku bunga yang ditawarkan, fleksibilitas pembayaran, dan layanan pelanggan. Pilih layanan yang sesuai dengan kebutuhan usaha Anda, apakah itu pinjaman usaha, leasing, atau kartu kredit bisnis. Bandingkan beberapa opsi sebelum memutuskan, dan pastikan Anda memahami syarat serta ketentuannya untuk menghindari risiko di kemudian hari.</p>\r\n', 'Home.jpg'),
('HP003', '1', 'Panduan Memilih Layanan Keuangan untuk Pendanaan', '<p>Jenis pendanaan yang tersedia untuk bisnis meliputi pendanaan pribadi, pinjaman bank, investor angel, hingga crowdfunding. Pendanaan pribadi cocok untuk usaha kecil dengan modal awal yang rendah, sementara pinjaman bank menawarkan modal lebih besar dengan syarat tertentu. Crowdfunding dan investor angel biasanya menjadi pilihan untuk startup yang inovatif dengan potensi pertumbuhan tinggi. Pilih jenis pendanaan yang sesuai dengan skala bisnis dan kebutuhan spesifik Anda.</p>\r\n', 'About.jpg'),
('HP004', '1', 'Cara Mendapatkan Pendanaan Usaha dengan Mudah', '<p>Untuk mendapatkan pendanaan usaha dengan mudah, persiapkan proposal bisnis yang solid dan menarik. Jelaskan potensi keuntungan, strategi pemasaran, dan proyeksi keuangan dengan jelas kepada calon investor atau pemberi pinjaman. Manfaatkan jaringan profesional dan platform digital seperti situs crowdfunding untuk memperluas peluang. Pastikan Anda memiliki rencana penggunaan dana yang transparan untuk meningkatkan kepercayaan pihak pemberi pendanaan.</p>\r\n', 'Features.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` char(10) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` char(50) NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `No_HP` varchar(15) DEFAULT NULL,
  `Jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `Username`, `Password`, `Nama`, `No_HP`, `Jenis_kelamin`) VALUES
('P001', 'raras', 'raras', 'raras', '087654577833', 'Perempuan'),
('P002', 'Lupi', '0b55b7d4723f7e4', 'lupi', '089865653265', 'Laki-laki'),
('P003', 'raras', 'ddb5c319923c577', 'raras', '02588552', 'Perempuan'),
('P004', 'andi', 'dbd122ef7b6a09f', 'andi', '08529865', 'Laki-laki'),
('P007', 'ata', 'fe3c03e01bab2b280e93f1ddd42256ab77670518', 'Ata', '081379047744', 'Laki-laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pimpinan`
--

CREATE TABLE `pimpinan` (
  `id_pimpinan` char(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tips_budidaya`
--

CREATE TABLE `tips_budidaya` (
  `id_tips_budidaya` char(10) NOT NULL,
  `id_admin` char(5) DEFAULT NULL,
  `judul_tips_budidaya` varchar(255) DEFAULT NULL,
  `artikel_tips_budidaya` text DEFAULT NULL,
  `gambar_tips_budidaya` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tips_budidaya`
--

INSERT INTO `tips_budidaya` (`id_tips_budidaya`, `id_admin`, `judul_tips_budidaya`, `artikel_tips_budidaya`, `gambar_tips_budidaya`) VALUES
('HP001', '1', 'Rahasia Sukses Budidaya yang Wajib Anda Coba', '<p>Budidaya berbagai komoditas, baik tanaman, hewan ternak, maupun ikan, telah menjadi sumber penghasilan utama bagi banyak orang. Namun, tidak semua usaha budidaya berjalan lancar. Dibutuhkan strategi, pengetahuan, dan kerja keras agar hasilnya maksimal. Lokasi merupakan faktor utama yang memengaruhi keberhasilan budidaya. Pastikan lokasi yang Anda pilih memiliki kondisi lingkungan yang sesuai dengan kebutuhan komoditas yang akan dibudidayakan, seperti jenis tanah, ketersediaan air, suhu, dan intensitas cahaya. Setiap komoditas memiliki kebutuhan spesifik. Lakukan riset mendalam tentang jenis bibit, nutrisi, dan cara perawatan yang dibutuhkan. Dengan memahami karakteristik komoditas, Anda dapat mengoptimalkan pertumbuhan dan hasil panen. Teknologi dapat meningkatkan efisiensi dan hasil budidaya. Misalnya, gunakan sensor untuk memantau kelembapan tanah, drone untuk pengawasan lahan, atau aplikasi manajemen pertanian untuk mencatat perkembangan budidaya. Di sektor perikanan, teknologi seperti aerator atau bioflok sangat membantu meningkatkan produktivitas. Hama dan penyakit sering menjadi hambatan utama dalam budidaya. Lakukan langkah preventif seperti rotasi tanaman, penggunaan pestisida organik, atau vaksinasi pada ternak. Deteksi dini sangat penting untuk mencegah kerugian yang lebih besar. Pemupukan yang sesuai akan meningkatkan kesuburan tanah dan kualitas hasil panen. Gunakan pupuk organik atau anorganik sesuai dosis yang direkomendasikan. Jangan lupa untuk memperhatikan kebutuhan unsur hara spesifik dari komoditas Anda. Keberhasilan budidaya juga tergantung pada pengelolaan keuangan. Buat anggaran yang terperinci untuk pembelian bibit, pupuk, perawatan, dan kebutuhan lainnya. Sisihkan dana cadangan untuk menghadapi risiko yang tak terduga. Sebelum memulai budidaya, lakukan survei pasar untuk mengetahui permintaan dan harga komoditas. Pilih komoditas yang memiliki potensi pasar besar dan stabil. Selain itu, bangun jaringan dengan pembeli atau distributor untuk memastikan hasil panen Anda terserap dengan baik. Terus belajar dan mengikuti pelatihan untuk meningkatkan keterampilan Anda. Bergabunglah dengan komunitas petani atau peternak untuk berbagi pengalaman dan pengetahuan. Kolaborasi dengan pihak lain, seperti institusi penelitian atau lembaga pemerintah, juga dapat membuka peluang baru. Budidaya yang berkelanjutan tidak hanya menguntungkan secara ekonomi tetapi juga menjaga kelestarian lingkungan. Hindari eksploitasi berlebihan terhadap sumber daya alam. Gunakan metode seperti pengolahan limbah organik menjadi pupuk atau penerapan agroforestri. Lakukan evaluasi rutin terhadap proses dan hasil budidaya Anda. Catat apa yang berhasil dan apa yang perlu diperbaiki. Dengan begitu, Anda dapat terus meningkatkan produktivitas dan kualitas hasil budidaya. Dengan menerapkan rahasia-rahasia di atas, Anda memiliki peluang besar untuk sukses dalam usaha budidaya. Ingatlah bahwa kunci utama adalah konsistensi, kerja keras, dan kemauan untuk terus belajar. Selamat mencoba dan semoga sukses!</p>\r\n', '4.jpg'),
('HP002', '1', 'Tips Budidaya Efisien untuk Hasil Maksimal', '<p>Untuk mencapai hasil budidaya yang maksimal dengan cara efisien, fokuslah pada penggunaan teknologi dan manajemen yang tepat. Gunakan bibit unggul, pupuk sesuai kebutuhan, dan pestisida ramah lingkungan untuk menghemat biaya sekaligus menjaga kualitas. Manfaatkan teknologi modern seperti irigasi otomatis dan aplikasi pengelolaan lahan untuk memaksimalkan hasil dengan waktu dan usaha yang lebih sedikit. Dengan perencanaan matang dan strategi tepat, hasil panen yang optimal dapat dicapai dengan efisiensi tinggi.</p>\r\n', 'About.jpg'),
('HP003', '1', 'Langkah Praktis Memulai Budidaya di Rumah', '<p>Memulai budidaya di rumah tidak memerlukan lahan luas, cukup manfaatkan area kecil seperti pekarangan, teras, atau bahkan ruangan indoor. Pilih tanaman seperti sayuran hijau atau rempah-rempah yang mudah tumbuh di pot atau polybag, serta ikan seperti lele atau nila yang dapat dibudidayakan di kolam kecil. Pastikan pencahayaan, kelembapan, dan nutrisi yang dibutuhkan tersedia dengan baik. Dengan memulai dari skala kecil, Anda dapat belajar dan meminimalkan risiko sambil menikmati hasilnya secara langsung.</p>\r\n', 'Features.jpg'),
('HP004', '1', 'Kunci Keberhasilan dalam Budidaya Tanaman dan Hewan', '<p>Keberhasilan budidaya tanaman dan hewan terletak pada pemahaman mendalam terhadap kebutuhan spesifik masing-masing komoditas. Mulai dari pemilihan bibit unggul, pemeliharaan yang konsisten, hingga pengendalian hama dan penyakit dengan cara yang ramah lingkungan. Selain itu, manajemen waktu dan sumber daya yang baik sangat penting, seperti memastikan pemberian nutrisi dan pengaturan lingkungan tumbuh secara optimal. Dengan dedikasi, evaluasi rutin, dan penerapan metode berkelanjutan, hasil budidaya dapat meningkat secara signifikan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Home.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `hama_penyakit`
--
ALTER TABLE `hama_penyakit`
  ADD PRIMARY KEY (`id_hama_penyakit`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `info_pasar`
--
ALTER TABLE `info_pasar`
  ADD PRIMARY KEY (`id_info_pasar`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `layanan_keuangan`
--
ALTER TABLE `layanan_keuangan`
  ADD PRIMARY KEY (`id_layanan_keuangan`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `pimpinan`
--
ALTER TABLE `pimpinan`
  ADD PRIMARY KEY (`id_pimpinan`);

--
-- Indeks untuk tabel `tips_budidaya`
--
ALTER TABLE `tips_budidaya`
  ADD PRIMARY KEY (`id_tips_budidaya`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `hama_penyakit`
--
ALTER TABLE `hama_penyakit`
  ADD CONSTRAINT `hama_penyakit_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `info_pasar`
--
ALTER TABLE `info_pasar`
  ADD CONSTRAINT `info_pasar_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `layanan_keuangan`
--
ALTER TABLE `layanan_keuangan`
  ADD CONSTRAINT `layanan_keuangan_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `tips_budidaya`
--
ALTER TABLE `tips_budidaya`
  ADD CONSTRAINT `tips_budidaya_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

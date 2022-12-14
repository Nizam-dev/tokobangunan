-- phpMyAdmin SQL Dump
-- version 5.0.4deb2ubuntu5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 27 Okt 2022 pada 20.18
-- Versi server: 8.0.29-0ubuntu0.21.10.2
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_bangunan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `villages`
--

CREATE TABLE `villages` (
  `id` char(10) CHARACTER SET utf8mb3 COLLATE utf8_unicode_ci NOT NULL,
  `district_id` char(7) CHARACTER SET utf8mb3 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `villages`
--

INSERT INTO `villages` (`id`, `district_id`, `name`) VALUES
('3510010001', '3510010', 'SARONGAN'),
('3510010002', '3510010', 'KANDANGAN'),
('3510010003', '3510010', 'SUMBERAGUNG'),
('3510010004', '3510010', 'PESANGGARAN'),
('3510010009', '3510010', 'SUMBERMULYO'),
('3510011001', '3510011', 'BULUAGUNG'),
('3510011002', '3510011', 'SILIRAGUNG'),
('3510011003', '3510011', 'SENEPOREJO'),
('3510011004', '3510011', 'KESILIR'),
('3510011005', '3510011', 'BARUREJO'),
('3510020001', '3510020', 'SUKOREJO'),
('3510020002', '3510020', 'RINGINTELU'),
('3510020003', '3510020', 'SAMBIREJO'),
('3510020004', '3510020', 'SAMBIMULYO'),
('3510020006', '3510020', 'TEMUREJO'),
('3510020007', '3510020', 'BANGOREJO'),
('3510020008', '3510020', 'KEBONDALEM'),
('3510030001', '3510030', 'GRAJAGAN'),
('3510030002', '3510030', 'SUMBERASRI'),
('3510030003', '3510030', 'GLAGAHAGUNG'),
('3510030004', '3510030', 'KARETAN'),
('3510030005', '3510030', 'BULUREJO'),
('3510030006', '3510030', 'PURWOHARJO'),
('3510030007', '3510030', 'SIDOREJO'),
('3510030008', '3510030', 'KRADENAN'),
('3510040001', '3510040', 'PURWOASRI'),
('3510040002', '3510040', 'KENDALREJO'),
('3510040003', '3510040', 'KEDUNGASRI'),
('3510040005', '3510040', 'TEGALDLIMO'),
('3510040006', '3510040', 'WRINGINPITU'),
('3510040007', '3510040', 'KEDUNGGEBANG'),
('3510040008', '3510040', 'PURWOAGUNG'),
('3510040009', '3510040', 'KALIPAIT'),
('3510050001', '3510050', 'SUMBERBERAS'),
('3510050002', '3510050', 'WRINGIN PUTIH'),
('3510050003', '3510050', 'KEDUNGRINGIN'),
('3510050004', '3510050', 'TAMBAKREJO'),
('3510050005', '3510050', 'TAPANREJO'),
('3510050006', '3510050', 'BLAMBANGAN'),
('3510050007', '3510050', 'KEDUNGREJO'),
('3510050008', '3510050', 'TEMBOKREJO'),
('3510060002', '3510060', 'TAMPO'),
('3510060003', '3510060', 'PLAMPANGREJO'),
('3510060004', '3510060', 'KALIPLOSO'),
('3510060006', '3510060', 'CLURING'),
('3510060007', '3510060', 'TAMANAGUNG'),
('3510060008', '3510060', 'SRATEN'),
('3510060009', '3510060', 'SARIMULYO'),
('3510070004', '3510070', 'PURWODADI'),
('3510070005', '3510070', 'JAJAG'),
('3510070006', '3510070', 'WRINGIN AGUNG'),
('3510070007', '3510070', 'WRINGINREJO'),
('3510070008', '3510070', 'YOSOMULYO'),
('3510070009', '3510070', 'GAMBIRAN'),
('3510071001', '3510071', 'KARANGDORO'),
('3510071002', '3510071', 'KARANGMULYO'),
('3510071003', '3510071', 'TEGALSARI'),
('3510071004', '3510071', 'DASRI'),
('3510071005', '3510071', 'TAMANSARI'),
('3510071006', '3510071', 'TEGALREJO'),
('3510080001', '3510080', 'KARANGHARJO'),
('3510080002', '3510080', 'TULUNGREJO'),
('3510080003', '3510080', 'SUMBERGONDO'),
('3510080004', '3510080', 'BUMIHARJO'),
('3510080005', '3510080', 'SEPANJANG'),
('3510080006', '3510080', 'TEGALHARJO'),
('3510080007', '3510080', 'MARGOMULYO'),
('3510090001', '3510090', 'KEBONREJO'),
('3510090002', '3510090', 'KALIBARU MANIS'),
('3510090003', '3510090', 'BANYUANYAR'),
('3510090004', '3510090', 'KALIBARU KULON'),
('3510090005', '3510090', 'KALIBARU WETAN'),
('3510090006', '3510090', 'KAJARHARJO'),
('3510100001', '3510100', 'KALIGONDO'),
('3510100002', '3510100', 'SETAIL'),
('3510100003', '3510100', 'GENTENG KULON'),
('3510100004', '3510100', 'GENTENG WETAN'),
('3510100005', '3510100', 'KEMBIRITAN'),
('3510110001', '3510110', 'SUMBERSARI'),
('3510110002', '3510110', 'KEPUNDUNGAN'),
('3510110003', '3510110', 'KEBAMAN'),
('3510110004', '3510110', 'SUKONATAR'),
('3510110005', '3510110', 'BAGOREJO'),
('3510110006', '3510110', 'REJOAGUNG'),
('3510110007', '3510110', 'WONOSOBO'),
('3510110008', '3510110', 'SUKOMAJU'),
('3510110009', '3510110', 'PARIJATAH WETAN'),
('3510110010', '3510110', 'PARIJATAH KULON'),
('3510120001', '3510120', 'ALIYAN'),
('3510120002', '3510120', 'MANGIR'),
('3510120007', '3510120', 'GLADAG'),
('3510120009', '3510120', 'KEDALEMAN'),
('3510120010', '3510120', 'LEMAHBANG DEWO'),
('3510120011', '3510120', 'ROGOJAMPI'),
('3510120016', '3510120', 'KARANG BENDO'),
('3510120017', '3510120', 'GITIK'),
('3510120018', '3510120', 'PENGANTIGAN'),
('3510121001', '3510121', 'KALIGUNG'),
('3510121002', '3510121', 'KARANGREJO'),
('3510121003', '3510121', 'BOMO'),
('3510121004', '3510121', 'GINTANGAN'),
('3510121005', '3510121', 'KAOTAN'),
('3510121006', '3510121', 'WATU KEBO'),
('3510121007', '3510121', 'PATOMAN'),
('3510121008', '3510121', 'BLIMBING SARI'),
('3510121009', '3510121', 'BADEAN'),
('3510121010', '3510121', 'SUKOJATI'),
('3510130001', '3510130', 'BARENG'),
('3510130003', '3510130', 'GOMBOLIRANG'),
('3510130004', '3510130', 'BENELAN LOR'),
('3510130005', '3510130', 'LABANASEM'),
('3510130006', '3510130', 'PAKISTAJI'),
('3510130009', '3510130', 'PONDOKNONGKO'),
('3510130010', '3510130', 'DADAPAN'),
('3510130011', '3510130', 'KEDAYUNAN'),
('3510130012', '3510130', 'KABAT'),
('3510130013', '3510130', 'MACAN PUTIH'),
('3510130014', '3510130', 'TAMBONG'),
('3510130015', '3510130', 'PENDARUNGAN'),
('3510130016', '3510130', 'KALIREJO'),
('3510140001', '3510140', 'GAMBOR'),
('3510140002', '3510140', 'SINGOJURUH'),
('3510140003', '3510140', 'ALAS MALANG'),
('3510140004', '3510140', 'BENELAN KIDUL'),
('3510140005', '3510140', 'LEMAHBANG KULON'),
('3510140006', '3510140', 'SINGOLATREN'),
('3510140007', '3510140', 'PADANG'),
('3510140008', '3510140', 'CANTUK'),
('3510140009', '3510140', 'GUMIRIH'),
('3510140010', '3510140', 'KEMIRI'),
('3510140011', '3510140', 'SUMBER BARU'),
('3510150002', '3510150', 'TEGALARUM'),
('3510150003', '3510150', 'JAMBEWANGI'),
('3510150004', '3510150', 'TEMUASRI'),
('3510150005', '3510150', 'KARANGSARI'),
('3510150007', '3510150', 'GENDOH'),
('3510160001', '3510160', 'BEDEWANG'),
('3510160002', '3510160', 'BALAK'),
('3510160003', '3510160', 'BANGUNSARI'),
('3510160004', '3510160', 'SONGGON'),
('3510160005', '3510160', 'PARANGHARJO'),
('3510160006', '3510160', 'SRAGI'),
('3510160007', '3510160', 'SUMBER ARUM'),
('3510160009', '3510160', 'BAYU'),
('3510170006', '3510170', 'PASPAN'),
('3510170007', '3510170', 'GLAGAH'),
('3510170008', '3510170', 'OLEHSARI'),
('3510170009', '3510170', 'REJOSARI'),
('3510170010', '3510170', 'BAKUNGAN'),
('3510170011', '3510170', 'BANJARSARI'),
('3510170012', '3510170', 'KEMIREN'),
('3510170013', '3510170', 'TAMANSURUH'),
('3510170014', '3510170', 'KENJO'),
('3510170018', '3510170', 'KAMPUNGANYAR'),
('3510171001', '3510171', 'PAKEL'),
('3510171002', '3510171', 'KLUNCING'),
('3510171003', '3510171', 'SEGOBANG'),
('3510171006', '3510171', 'BANJAR'),
('3510171007', '3510171', 'LICIN'),
('3510171008', '3510171', 'TAMANSARI'),
('3510180001', '3510180', 'PAKIS'),
('3510180002', '3510180', 'SOBO'),
('3510180003', '3510180', 'KEBALENAN'),
('3510180004', '3510180', 'PENGANJURAN'),
('3510180005', '3510180', 'TUKANGKAYU'),
('3510180006', '3510180', 'KERTOSARI'),
('3510180007', '3510180', 'KARANGREJO'),
('3510180008', '3510180', 'KEPATIHAN'),
('3510180009', '3510180', 'PANDEREJO'),
('3510180010', '3510180', 'SINGONEGARAN'),
('3510180011', '3510180', 'TEMENGGUNGAN'),
('3510180012', '3510180', 'KAMPUNG MELAYU'),
('3510180013', '3510180', 'KAMPUNGMANDAR'),
('3510180014', '3510180', 'LATENG'),
('3510180015', '3510180', 'SINGOTRUNAN'),
('3510180016', '3510180', 'PENGANTIGAN'),
('3510180017', '3510180', 'SUMBERREJO'),
('3510180018', '3510180', 'TAMAN BARU'),
('3510190001', '3510190', 'JAMBESARI'),
('3510190002', '3510190', 'BOYOLANGU'),
('3510190003', '3510190', 'MOJOPANGGUNG'),
('3510190004', '3510190', 'PENATABAN'),
('3510190005', '3510190', 'GIRI'),
('3510190006', '3510190', 'GROGOL'),
('3510200001', '3510200', 'BULUSARI'),
('3510200004', '3510200', 'KELIR'),
('3510200005', '3510200', 'KALIPURO'),
('3510200006', '3510200', 'KLATAK'),
('3510200007', '3510200', 'KETAPANG'),
('3510200008', '3510200', 'GOMBENG SARI'),
('3510200009', '3510200', 'BULUSAN'),
('3510210001', '3510210', 'BANGSRING'),
('3510210002', '3510210', 'BENGKAK'),
('3510210003', '3510210', 'ALASBULU'),
('3510210004', '3510210', 'WONGSOREJO'),
('3510210005', '3510210', 'ALASREJO'),
('3510210006', '3510210', 'SUMBERKENCONO'),
('3510210007', '3510210', 'SIDOWANGI'),
('3510210008', '3510210', 'SIDODADI'),
('3510210009', '3510210', 'BAJULMATI'),
('3510210010', '3510210', 'WATUKEBO'),
('3510210011', '3510210', 'SUMBERANYAR'),
('3510210012', '3510210', 'BIMOREJO');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `villages`
--
ALTER TABLE `villages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `villages_district_id_index` (`district_id`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `villages`
--
ALTER TABLE `villages`
  ADD CONSTRAINT `villages_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

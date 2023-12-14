CREATE DATABASE bimbel_online_sbmptn;
USE bimbel_online_sbmptn;

CREATE TABLE tb_admin(
id_admin INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nama_admin VARCHAR(30) NOT NULL,
kontak CHAR(13)
);

CREATE TABLE tb_pengajar(
id_pengajar INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nama_pengajar VARCHAR(30) NOT NULL,
tanggal_lahir DATE,
kontak CHAR(13),
alamat VARCHAR(100),
jenis_kelamin ENUM('Laki-Laki','Perempuan') DEFAULT 'Laki-Laki'
);

CREATE TABLE tb_siswa(
id_siswa INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nama_siswa VARCHAR(30) NOT NULL,
tanggal_lahir DATE,
kontak CHAR(13),
alamat VARCHAR(100),
jenis_kelamin ENUM('Laki-Laki','Perempuan') DEFAULT 'Laki-Laki'
);

CREATE TABLE tb_kelas(
id_kelas INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nama_kelas VARCHAR(50),
id_pengajar INT,
id_pembayaran INT,
FOREIGN KEY (id_pengajar) REFERENCES tb_pengajar(id_pengajar),
FOREIGN KEY (id_pembayaran) REFERENCES tb_pembayaran(id_pembayaran)
);

CREATE TABLE tb_detail_kelas(
id_detail_kelas INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
id_siswa INT,
id_kelas INT,
FOREIGN KEY (id_siswa) REFERENCES tb_siswa(id_siswa),
FOREIGN KEY (id_kelas) REFERENCES tb_kelas(id_kelas)
);

CREATE TABLE tb_materi(
id_materi INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
judul_materi VARCHAR(100),
deskripsi TEXT,
id_kelas INT,
id_pengajar INT,
FOREIGN KEY (id_kelas) REFERENCES tb_kelas(id_kelas),
FOREIGN KEY (id_pengajar) REFERENCES tb_pengajar(id_pengajar)
);

CREATE TABLE tb_nilai(
id_nilai INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
id_siswa INT,
id_pengajar INT,
nilai INT,
FOREIGN KEY (id_siswa) REFERENCES tb_siswa(id_siswa),
FOREIGN KEY (id_pengajar) REFERENCES tb_pengajar(id_pengajar)
);

CREATE TABLE tb_pembayaran(
id_pembayaran INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
id_siswa INT,
id_admin INT,
tanggal DATE,
jumlah DECIMAL (10,2),
FOREIGN KEY (id_siswa) REFERENCES tb_siswa(id_siswa),
FOREIGN KEY (id_admin) REFERENCES tb_admin(id_admin)
);

CREATE TABLE tb_paket(
id_paket INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
paket VARCHAR(50),
id_pembayaran INT,
id_siswa INT,
FOREIGN KEY (id_pembayaran) REFERENCES tb_pembayaran(id_pembayaran),
FOREIGN KEY (id_siswa) REFERENCES tb_siswa(id_siswa)
);

CREATE TABLE tb_detail_paket(
id_detail_paket INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
id_paket INT,
id_siswa INT,
FOREIGN KEY (id_paket) REFERENCES tb_paket(id_paket),
FOREIGN KEY (id_siswa) REFERENCES tb_siswa(id_siswa)
);

CREATE TABLE tb_jadwal(
id_jadwal INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
id_kelas INT,
id_admin INT,
tanggal DATE,
waktu TIME,
FOREIGN KEY (id_kelas) REFERENCES tb_kelas(id_kelas),
FOREIGN KEY (id_admin) REFERENCES tb_admin(id_admin)
);
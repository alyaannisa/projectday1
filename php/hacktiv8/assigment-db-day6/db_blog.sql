CREATE DATABASE info_blog;
USE info_blog;

CREATE TABLE posting(
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(40),
    konten TEXT,
    kategori VARCHAR(40),
    gambar_utama BLOB
);

CREATE TABLE kategori(
    id INT AUTO_INCREMENT PRIMARY KEY,
    namaKategori VARCHAR(40)
);

CREATE TABLE pengguna(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(40),
    password VARCHAR(40)
);

CREATE TABLE komentar(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(40),
    comment VARCHAR(100)
);

-- insert
INSERT INTO komentar (name, comment) VALUES ('sono', 'oh begitu');

-- read
SELECT * FROM pengguna;

-- update
UPDATE komentar SET name = ayla;

DELETE FROM komentar WHERE name = ayla;



CREATE TABLE pengguna (
    id_pengguna INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100),
    username VARCHAR(100),
    password VARCHAR(255),
    role ENUM('admin', 'kader')
);

CREATE TABLE bayi (
    id_bayi INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100),
    nama_ibu VARCHAR(100),
    nama_ayah VARCHAR(100),
    tanggal_lahir DATE
);

CREATE TABLE catatan (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_kader INT,
    id_bayi INT,
    tinggi DECIMAL(5,2),
    berat DECIMAL(5,2),
    tanggal DATE,
    FOREIGN KEY (id_kader) REFERENCES pengguna(id_pengguna),
    FOREIGN KEY (id_bayi) REFERENCES bayi(id_bayi)
);

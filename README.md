Lengkapi Service dan Model sesuai database pada migration dan test yang sudah diawali... Yang berarti test-nya juga harus dilengkapi juga.
- Capai coverage sebanyak mungkin, kadang 100% bukan berarti semua hal sudah ter-cover.
- Jangan menghapus kode yang sudah ada. Boleh jika kodenya diganti dengan yang lebih baik.

### Informasi Alur pada Service

#### KRSPlanningService

1. Mahasiswa hanya bisa mengambil kelas pada unit kerja yang sama.
2. Mahasiswa tidak bisa mengambil kelas jika jadwalnya bentrok (jika kelas A selesai jam 11 dan kelas B mulai jam 11 maka tidak dihitung bentrok).
3. Kelas hanya bisa diambil ketika jumlah pesertanya kurang dari daya tampung.
4. Mahasiswa tidak bisa lagi mengambil kelas jika sks per semesternya melebihi 24.
5. Sks per semester mahasiswa disimpan pada tabel perwalian.

#### KRSValidationService

1. Validasi KRS mahasiswa disimpan pada tabel perwalian.
2. Validasi KRS hanya bisa dilakukan ketika mahasiswa sudah mengambil kelas.
3. Pembatalan validasi KRS tidak bisa dilakukan ketika sudah ada KRS yang nilainya masuk.

#### KelasGradingService

1. KRS hanya bisa dinilai jika sudah divalidasi sebelumnya.
2. Buat sendiri aturan nilai angka dan nilai huruf yang akan didapatkan ketika ada penilaian sesuai dengan nilai numerik.
3. Kunci nilai kelas akan mengubah status nilai masuk pada KRS, selain mengubah status kunci nilai dan waktu kunci nilai pada kelas.
4. Nilai KRS sudah tidak bisa diubah ketika sudah berstatus nilai masuk.
5. Status nilai masuk akan mengubah total sks, IPS, dan IPK mahasiswa pada periode terkait, dan tentunya berpengaruh pada periode selanjutnya, yang disimpan pada tabel perwalian.
6. Total sks pada tabel perwalian menyimpan total sks yang nilainya sudah masuk pada seluruh semester.
7. Ketika mahasiswa mengulang kelas mata kuliah yang sama akan diambil nilai yang terbaik yang berarti:
   - Total sks dihitung sekali (jika mahasiswa mengambil kelas mata kuliah dengan 3 sks dua kali, maka total sksnya hanya akan bertambah 3 saja).
   - IPS dan IPK per mata kuliah dihitung sekali dari nilai yang terbaik.
8. Pembatalan kunci nilai kelas akan mengembalikan status kunci nilai dan waktu kunci nilai kelas, status nilai masuk KRS, beserta total sks, IPS, dan IPK mahasiswa terkait.
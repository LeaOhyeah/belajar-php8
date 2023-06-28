<?php
// sebelumnya kita sudah menggunkan string function seperti strtoupper dan strtolower yaitu function string bawaan php
// selain itu masih banyak lagi https://www.php.net/manual/en/ref.strings.php
// disini tidak akan dibahas semuanya, jika ingin mencoba disarankan untuk membaca dokumentasi langsung



echo "\n===== Yang sering digunakan (join, explode dan trim) =====\n";
$array = [1, 2, 3, 4,];
echo "Join atau Implode " . join(" lalu ", $array) . PHP_EOL;
echo join("\n", $array) . PHP_EOL;

$data = "satu dua tiga empatiat";
$data = explode(" ", $data);
var_dump($data);

$username = "                 LeaOhyeah     ";
echo "trim " . trim($username) . PHP_EOL;

$substr = "LeaOhyeah";
echo substr($substr, 0, -1) . PHP_EOL; // param string, offset, length
echo substr($substr,  -2) . PHP_EOL; 
echo substr($substr,  0, 3) . PHP_EOL; 
echo substr($substr, 3) . PHP_EOL; 


// selain itu ada strtoupper() dan strtolower() yang sering kita gunakan


echo "\n===== Beberapa penerapan lain=====\n";
$dataString = "Hello World";
$dataNumber = "100000";
echo "addcslashes = " . "#lea#udin#samsudin9budi" . " == ";
echo addcslashes("#lea#udin#samsudin9budi", '#, 1..9') . PHP_EOL;

echo "addslashes = ";
echo addslashes("Lea Oh'yeah : ") . addslashes(' "Good morning"') . PHP_EOL;


echo number_format($dataNumber);
echo md5($dataNumber);

echo similar_text($dataString, "eHoWl lrldo", $percent) . PHP_EOL;
echo "$percent %";

// ====== Reference (yang di tab sekarang sudah tidak bisa digunakan pada PHP 8) ====== 

/*
addcslashes — Mengutip string dengan backslash dalam gaya C
addslashes — Mengutip string dengan backslash
bin2hex — Mengonversi data biner menjadi representasi heksadesimal
chop — Alias dari rtrim
chr — Menghasilkan string satu byte dari sebuah angka
chunk_split — Membagi string menjadi bagian-bagian kecil
     convert_cyr_string — Mengonversi dari satu set karakter Cyrillic ke set karakter lainnya
convert_uudecode — Mendekode string yang di-uuencode
convert_uuencode — Mengeksekusi uuencode pada string
count_chars — Mengembalikan informasi tentang karakter yang digunakan dalam sebuah string
crc32 — Menghitung polinomial crc32 dari sebuah string
crypt — Hashing string satu arah
echo — Mengeluarkan satu atau beberapa string
explode — Membagi string berdasarkan string pemisah
fprintf — Menulis string dengan format ke sebuah stream
get_html_translation_table — Mengembalikan tabel terjemahan yang digunakan oleh htmlspecialchars dan htmlentities
     hebrev — Mengonversi teks Hebrew logis menjadi teks visual
     hebrevc — Mengonversi teks Hebrew logis menjadi teks visual dengan konversi baris baru
hex2bin — Mendekode string biner yang dienkripsi heksadesimal
html_entity_decode — Mengonversi entitas HTML menjadi karakter yang sesuai
htmlentities — Mengonversi semua karakter yang berlaku menjadi entitas HTML
htmlspecialchars_decode — Mengonversi entitas HTML khusus kembali menjadi karakter
htmlspecialchars — Mengonversi karakter khusus menjadi entitas HTML
implode — Menggabungkan elemen-elemen array dengan sebuah string
join — Alias dari implode
lcfirst — Mengubah karakter pertama dari sebuah string menjadi huruf kecil
levenshtein — Menghitung jarak Levenshtein antara dua string
localeconv — Mendapatkan informasi pemformatan angka
ltrim — Menghapus spasi (atau karakter lainnya) dari awal sebuah string
md5_file — Menghitung hash md5 dari sebuah file yang diberikan
md5 — Menghitung hash md5 dari sebuah string
metaphone — Menghitung kunci metaphone dari sebuah string
     money_format — Memformat sebuah angka sebagai string mata uang (sudah dihentikan pada PHP 7.4 dan dihapus pada PHP 8)
     nl_langinfo — Mengambil informasi bahasa dan lokalisasi
nl2br — Memasukkan pemenggalan baris HTML sebelum semua baris baru dalam sebuah string
number_format — Memformat sebuah angka dengan ribuan yang dikelompokkan
ord — Mengubah byte pertama dari sebuah string menjadi nilai antara 0 dan 255
parse_str — Mem-parsing string menjadi variabel-variabel
print — Mengeluarkan sebuah string
printf — Mengeluarkan sebuah string dengan format
     quoted_printable_decode — Mengonversi sebuah string quoted-printable menjadi sebuah string 8 bit
     quoted_printable_encode — Mengonversi sebuah string 8 bit menjadi sebuah string quoted-printable
quotemeta — Mengutip karakter-karakter meta
rtrim — Menghapus spasi (atau karakter lainnya) dari akhir sebuah string
     setlocale — Mengatur informasi lokalisasi
sha1_file — Menghitung hash sha1 dari sebuah file
sha1 — Menghitung hash sha1 dari sebuah string
similar_text — Menghitung kesamaan antara dua string
     soundex — Menghitung kunci soundex dari sebuah string 
sprintf — Mengembalikan string yang diformat
sscanf — Mem-parsing masukan dari sebuah string sesuai dengan format
str_contains — Menentukan apakah sebuah string mengandung substring tertentu
str_ends_with — Memeriksa apakah sebuah string diakhiri dengan substring tertentu
str_getcsv — Mem-parsing string CSV menjadi sebuah array
str_ireplace — Versi tdk peka huruf besar/kecil dari str_replace
str_pad — Melengkapi sebuah string menjadi panjang tertentu dengan string lain
str_repeat — Mengulang sebuah string
str_replace — Mengganti semua kemunculan string pencarian dengan string pengganti
str_rot13 — Melakukan transformasi rot13 pada sebuah string
str_shuffle — Mengacak-acak sebuah string secara acak
str_split — Mengubah sebuah string menjadi sebuah array
str_starts_with — Memeriksa apakah sebuah string diawali dengan substring tertentu
str_word_count — Mengembalikan informasi tentang kata-kata yang digunakan dalam sebuah string
strcasecmp — Perbandingan string yang tidak sensitif terhadap besar/kecil huruf yang aman biner
strchr — Alias dari strstr
strcmp — Perbandingan string yang aman biner
strcoll — Perbandingan string berdasarkan pengaturan bahasa
strcspn — Menemukan panjang segmen awal yang tidak cocok dengan masker
strip_tags — Menghapus tag HTML dan PHP dari sebuah string
stripcslashes — Membatalkan kutipan pada sebuah string yang dikutip dengan addcslashes
stripos — Menemukan posisi kemunculan pertama substring yang tidak peka terhadap huruf besar/kecil dalam sebuah string
stripslashes — Membatalkan kutipan dari sebuah string yang dikutip
stristr — strstr yang tidak peka terhadap huruf besar/kecil
strlen — Mendapatkan panjang string
     strnatcasecmp — Perbandingan string yang tidak peka huruf besar/kecil menggunakan algoritma "urutan alami"
     strnatcmp — Perbandingan string menggunakan algoritma "urutan alami"
strncasecmp — Perbandingan string yang aman biner dan tidak peka huruf besar/kecil dari n karakter pertama
strncmp — Perbandingan string yang aman biner dari n karakter pertama
strpbrk — Mencari sebuah string untuk salah satu dari sekumpulan karakter
strpos — Menemukan posisi kemunculan pertama substring dalam sebuah string
strrchr — Menemukan posisi kemunculan terakhir sebuah karakter dalam sebuah string
strrev — Membalik sebuah string
strripos — Menemukan posisi kemunculan terakhir sebuah substring yang tidak peka terhadap huruf besar/kecil dalam sebuah string
strrpos — Menemukan posisi kemunculan terakhir sebuah substring dalam sebuah string
strspn — Menemukan panjang segmen awal sebuah string yang terdiri dari karakter-karakter yang terdapat dalam masker yang diberikan
strstr — Menemukan kemunculan pertama sebuah string
strtok — Membagi string menjadi token
strtolower — Mengubah sebuah string menjadi huruf kecil
strtoupper — Mengubah sebuah string menjadi huruf besar
strtr — Menerjemahkan karakter atau mengganti substring
     substr_compare — Perbandingan aman biner dari dua string dari sebuah offset, hingga panjang karakter tertentu
substr_count — Menghitung jumlah kemunculan substring
substr_replace — Mengganti teks dalam sebuah bagian dari sebuah string
substr — Mengembalikan bagian dari sebuah string
trim — Menghapus spasi kosong (atau karakter lainnya) dari awal dan akhir sebuah string
ucfirst — Mengubah karakter pertama sebuah string menjadi huruf besar
ucwords — Mengubah karakter pertama dari setiap kata dalam sebuah string menjadi huruf besar
utf8_decode — Mengkonversi sebuah string dari UTF-8 ke ISO-8859-1, menggantikan karakter-karakter yang tidak valid atau tidak dapat direpresentasikan
utf8_encode — Mengkonversi sebuah string dari ISO-8859-1 ke UTF-8
     vfprintf — Menulis sebuah string yang diformat ke dalam sebuah stream
vprintf — Menampilkan sebuah string yang diformat
vsprintf — Mengembalikan sebuah string yang diformat
wordwrap — Membungkus sebuah string dengan jumlah karakter yang ditentukan
*/
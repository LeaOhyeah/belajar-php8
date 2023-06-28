<?php
// string adalah representasi dari text
// untuk membuat string terdapat banyak cara,
// dengan kutip satu, ganda dan lain-lain
// diperlukan referensi lain jenis-jenis escape sequence

echo "\n===== Dengan kutip satu =====\n";
echo 'Lilyana';

echo "\n===== Dengan kutip ganda =====\n"; // dengan ini kita dapat menggunakan escape sequence (\perintah)
echo "Name\t: Lilyana";

// multiline string

echo "\n===== Heredoc =====\n";
echo <<<LYAN
Heredoc adalah string yang dapat menerima enter
    tab dan bentuk lain secara manual tanpa
harus menggunakan escape sequence
LYAN; // ini adalah nama tag dan bebas (biasanya uppercase)

echo "\n===== Nowdoc =====\n";
echo <<<'LILY'
Perbedaan nya disini tidak dapat melakukan parsing (materi terpisah) variable
    dan menggunakan petik satu
LILY; // ini adalah nama tag dan bebas (biasanya uppercase)
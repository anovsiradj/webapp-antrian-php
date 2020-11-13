<?php

/* INI VARIABLEs DATANGNYA DARI MANA ANJIM */
//nilai /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$konten = ParseVal($tpl, [
	"judul" => $judul ?? null,
	"judulku" => $judulku ?? null,
	"sumber" => $sumber ?? null,
	"isi" => $isi ?? null,
	"isikiri" => $isikiri ?? null,
	"isi_banner" => $isi_banner ?? null,
	"isi_menu" => $isi_menu ?? null,
	"diload" => $diload ?? null,
	"versi" => $versi ?? null,
	"author" => $author ?? null,
	"keywords" => $keywords ?? null,
	"url" => $url ?? null,
	"sesidt" => $sesidt ?? null,
	"filenya" => $filenya ?? null,
	"wkdet" => $wkdet ?? null,
	"wkurl" => $wkurl ?? null,
	"sek_nama" => $sek_nama ?? null,
	"sek_alamat" => $sek_alamat ?? null,
	"sek_kontak" => $sek_kontak ?? null,
	"sek_kota" => $sek_kota ?? null,
	"sek_filex" => $sek_filex ?? null,
	"sek_filexx" => $sek_filexx ?? null,
	"description" => $description ?? null,
]);

//tampilkan
echo $konten;
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

# eof

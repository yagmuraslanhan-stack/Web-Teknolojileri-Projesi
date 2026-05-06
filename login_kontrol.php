<?php
/****************************************************************************
**					SAKARYA ÜNİVERSİTESİ
**			         BİLGİSAYAR VE BİLİŞİM BİLİMLERİ FAKÜLTESİ
**				    BİLGİSAYAR MÜHENDİSLİĞİ BÖLÜMÜ
**				          WEB TEKNOLOJİLERİ PROJESİ
**
**				ÖDEV NUMARASI.......: 1
**				ÖĞRENCİ ADI.........: Yağmur Aslanhan
**				ÖĞRENCİ NUMARASI....: B251210033
****************************************************************************/

// Formdan gelen verileri alıyoruz
$user_id = $_POST['user_id'];
$password = $_POST['password'];

// Kullanıcı bilgilerini kontrol ediyoruz (Burayı kendi bilgilerine göre güncelleyebilirsin)
$dogru_user = "G241210000"; // Örnek öğrenci numaran
$dogru_pass = "123456";    // Örnek şifren

if ($user_id == $dogru_user && $password == $dogru_pass) {
    // Başarılı giriş
    echo "<div style='text-align:center; margin-top:100px; font-family:Quicksand; color:#ff4d6d;'>";
    echo "<h2>Hoş Geldiniz '" . $user_id . "'</h2>";
    echo "<p>Giriş işleminiz başarıyla tamamlandı. Ana sayfaya yönlendiriliyorsunuz...</p>";
    echo "</div>";
    header("Refresh: 3; url=index.html");
} else {
    // Hatalı giriş
    echo "<div style='text-align:center; margin-top:100px; font-family:Quicksand; color:#5c4d4d;'>";
    echo "<h2>Hata!</h2>";
    echo "<p>Kullanıcı adı veya şifre yanlış.</p>";
    echo "<p>Lütfen tekrar deneyiniz. Giriş sayfasına dönülüyor...</p>";
    echo "</div>";
    header("Refresh: 3; url=login.html");
}
?>
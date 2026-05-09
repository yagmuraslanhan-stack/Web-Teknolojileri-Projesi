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

// Formdan gelen verileri "POST" yöntemiyle yakalıyoruz
$ad_soyad = $_POST['name'] ?? 'Belirtilmedi';
$email    = $_POST['email'] ?? 'Belirtilmedi';
$telefon  = $_POST['phone'] ?? 'Belirtilmedi';
$cinsiyet = $_POST['gender'] ?? 'Belirtilmedi';
$sehir    = $_POST['city'] ?? 'Belirtilmedi';
$mesaj    = $_POST['message'] ?? 'Belirtilmedi';

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İletişim Formu Sonucu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { background-color: #fff0f3; font-family: 'Quicksand', sans-serif; padding-top: 50px; }
        .result-card { background: white; border-radius: 20px; border: 2px solid #ffb3c1; padding: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .header { color: #ff4d6d; font-weight: bold; border-bottom: 2px solid #fff0f3; margin-bottom: 20px; padding-bottom: 10px; }
        .label { font-weight: bold; color: #ff85a2; }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="result-card">
                    <h3 class="header text-center">📬 Gönderilen Form Bilgileri</h3>
                    
                    <p><span class="label">Ad Soyad:</span> <?php echo htmlspecialchars($ad_soyad); ?></p>
                    <p><span class="label">E-posta:</span> <?php echo htmlspecialchars($email); ?></p>
                    <p><span class="label">Telefon:</span> <?php echo htmlspecialchars($telefon); ?></p>
                    <p><span class="label">Cinsiyet:</span> <?php echo htmlspecialchars($cinsiyet); ?></p>
                    <p><span class="label">Şehir:</span> <?php echo htmlspecialchars($sehir); ?></p>
                    <p><span class="label">Mesaj:</span><br> <?php echo nl2br(htmlspecialchars($mesaj)); ?></p>
                    
                    <div class="text-center mt-4">
                        <a href="index.html" class="btn btn-outline-danger" style="border-radius: 50px;">Ana Sayfaya Dön</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
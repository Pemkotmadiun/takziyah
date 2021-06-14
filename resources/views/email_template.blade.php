<!-- <!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<p>Hi, {{ $name }}</p>
<p>{{ $email_body }}</p>
</body>
</html>
 -->

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Email Verification</title>
 </head>
 <body>
     <table style="border: 0px solid black">
         <tr>
             <td align="center" style="height: 50px;text-align: center;background-color:#c8e2ea;" style="padding: 15px;"><b>TAKZIYAH PEMERINTAH KOTA MADIUN</b></td>
         </tr>
         <tr>
             <td style="padding: 15px;">
                 Kepada Yth. </br>
                 {{ $name }}</br>
             </td>
         </tr>
         <tr>
             <td style="padding: 15px;">
                 di Tempat
             </td>
         </tr>
         <tr>
             <td style="padding: 15px;" align="justify">
                 Sebelumnya perkenankan kami mengucapkan terima kasih atas partisipasi Bapak/Ibu menggunakan Layanan Takziyah Pemerintah Kota Madiun. Dengan menerima email ini maka Bapak/Ibu telah melakukan verifikasi email secara online pada Sistem Takziyah Pemerintah Kota Madiun, untuk selanjutnya Bapak/Ibu dapat melakukan cek proses penanganan laporan di link berikut :
             </td>
         </tr>
         <tr>
             <td style="padding: 15px;" align="center">
                <a href="http://127.0.0.1:8000/laporan/{{ $link }}">
                    <button style="background-color: #4CAF50;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;">DETAIL LAPORAN</button>
                </a>
             </td>
         </tr>
        <tr>
            <td style="padding: 15px;" align="center">
                Jika tombol detail laporan tidak berfungsi, silakan klik link berikut atau copy dan paste di browser </br>
            </td>
        </tr>
        <tr>
            <td style="padding: 15px;" align="center">
                http://127.0.0.1:8000/laporan/{{ $link }}
            </td>
        </tr>
         <tr>
             <td style="padding: 15px;" align="justify">
                 Demikian penjelasan kami, atas perhatian dan kerjasama yang baik kami ucapkan terimakasih.
             </br>
             </br>
             </br>
             </td>
         </tr>
         <tr>
             <td style="padding: 15px;" align="justify">
                 Hormat Kami,
             </td>
         </tr>
         <tr>
             <td style="padding: 15px;" align="justify">
                 Pengelola Takziyah Kota Madiun
             </td>
         </tr>
     </table>
 </body>
 </html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer Kalkulator</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
  .footer {
    background: #608cff;
    padding: 24px 100px 24px 100px;
    display: flex;
    flex-direction: column;
    gap: 24px;
    align-items: center;
    justify-content: flex-start;
    position: relative;
  }
  
  .row{margin:0px !important;}
  .container {
    padding: 24px 0px 24px 0px;
    display: flex;
    flex-direction: row;
    gap: 80px;
    align-items: flex-start;
    justify-content: flex-start;
    flex-wrap: wrap;
    align-self: stretch;
    flex-shrink: 0;
    position: relative;
  }
  .penjelasan {
    display: flex;
    flex-direction: column;
    gap: 16px;
    align-items: flex-start;
    justify-content: flex-start;
    flex-shrink: 0;
    width: 580px;
    position: relative;
    width: 50%;
  }
  .identitas {
    display: flex;
    flex-direction: column;
    gap: 16px;
    align-items: flex-start;
    justify-content: flex-start;
    flex-shrink: 0;
    width: 40%;
    position: relative;
  }
  .namaAnggota {
    display: flex;
    flex-direction: column;
    gap: 8px;
    align-items: flex-start;
    justify-content: flex-start;
    align-self: stretch;
    flex-shrink: 0;
    position: relative;
  }
  .namaNim {
    color: #ffffff;
    text-align: left;
    font-family: "-", sans-serif !important;
    font-size: 16px !important;
    line-height: 150% !important;
    font-weight: 400 !important;
    position: relative;
    align-self: stretch;
  }
  .line {
    border-style: solid;
    border-color: #ffffff;
    border-width: 1px 0 0 0;
    align-self: stretch;
    flex-shrink: 0;
    height: 0px;
    position: relative;
  }

  .h1 {
      color: #ffffff;
      text-align: left;
      font-family: "Inter-Bold", sans-serif !important;
      font-size: 28px !important;
      line-height: 150% !important;
      font-weight: 700 !important;
      position: relative;
      align-self: stretch;
    }
  .h2 {
      color: #ffffff;
      text-align: left;
      font-family: "Inter-SemiBold", sans-serif !important;
      font-size: 20px !important;
      line-height: 120% !important;
      font-weight:600 !important;
      position: relative;
      align-self: stretch;
    }
  .h3 {
      color: #ffffff;
      font-family: "Inter-Medium", sans-serif !important;
      font-size: 16px !important;
      line-height: 150% !important;
      font-weight: 500 !important;
    }
  .h4 {
      color: #ffffff;
      text-align: left;
      font-family: "Inter-SemiBold", sans-serif !important;
      font-size: 20px !important;
      line-height: 150% !important;
      font-weight: 600 !important;
      position: relative;
    }
    .p1 {
      color: #ffffff;
      text-align: left;
      font-family: "Inter-Regular", sans-serif !important;
      font-size: 16px !important;
      line-height: 150% !important;
      font-weight: 400 !important;
      position: relative;
      align-self: stretch;
    }
    .p2 {
      color: #ffffff;
      text-align: center;
      font-family: var(--body-b1-regular-font-family, "Inter-Regular", sans-serif);
      font-size: var(--body-b1-regular-font-size, 16px);
      line-height: var(--body-b1-regular-line-height, 150%);
      font-weight: var(--body-b1-regular-font-weight, 400);
      position: relative;
      align-self: stretch;
    }
  </style>
</head>
<body>
  <div class="footer">
    <div class="container">
      <div class="penjelasan">
        <div class=h1>Kalkulator GLBB</div>
        <div class=p1>
        Kecepatan akhir didapatkan dari rumus v = u + (a x t). 
        Rumus ini menunjukkan bahwa hasil (kecepatan akhir) bergantung pada tiga faktor utama: 
        kecepatan awal, percepatan, dan waktu.
        </div>
      </div>
      <div class="identitas">
        <div class=h2>Anggota Kelompok</div>
        <div class="namaAnggota">
          <div class="namaNim">
            <span>
              <span class=h3>Noory Azyza </span>
              <span class=h3>(225150401111026)</span>
            </span>
          </div>
          <div class="namaNim">
            <span>
              <span class=h3>M. Iqdam Faidhirrahman </span>
              <span class=h3>(225150407111038)</span>
            </span>
          </div>
          <div class="namaNim">
            <span>
              <span class=h3>Larasati Maurilla S. </span>
              <span class=h3>(225150401111027)</span>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="line"></div>
    <div class=p2>©Kelompok 7 - Pemrograman Web - SI E</div>
  </div>  
</body>
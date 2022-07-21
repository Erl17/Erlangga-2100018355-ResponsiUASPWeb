<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Arial&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Podkova&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Tahoma&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet" />
</head>
<body>
    <div class="bg">
    <span class="contact"><a href="contact.html">Contact</a></span>
    <span class="head">Rental MobilKU</span>
    <div class="bggambar"></div>
    <div class="avanza"></div>
    <div class="xenia"></div>
    <span class="halo">Halo, Selamat Datang !</span>
    <span class="input">Masukkan Biodata</span>
    <span class="form">
      <script type="text/javascript" src="leasing.js">
     </script> 
     <form id="form1" name="form1" method="post" action="leasing.php">
       <pre>
        <div><span>Nama                  :</span><input type="text" size="11" name="nama" id="nama"></div> 
        <div><span>Alamat                :</span><input type="text" size="11" name="alamat" id="alamat"></div>
        <div><span>Email                 :</span><input type="text" size="11" name="email" id="email"></div>
        <div>Pilihan (biaya/hari)  : <select name="mobil" id="mobil">
            <option>Avanza Veloz   :  Rp 350.000</option>
            <option>Xenia          :  Rp 120.000</option>
            <option>Fortuner       :  Rp 1.000.000</option>
            <option>Terios         :  Rp 700.000</option>
            <option>Alphard        :  Rp 5.000.000</option>
        </select></div>
        <div>Jaminan Rental        : <select name="jaminan" id="jaminan">
            <option>SIM</option>
            <option>KTP</option>
        </select></div>
        <div><span>Tambahan              :</span><textarea name="tambah" id="tambah"></textarea></div>
       </pre>
       <input type="submit" value="Kirim">
       <input type="reset" value="Batal"> 
     </form>
    <span class="info">Informasi Selengkapnya</span>
    <div class="bgconme"></div>
    <span class="conme"><a href="contact.html">Contact me</a></span>
    </div>
    <div id="tampilan1"></div>
    <div id="tampilan2"></div>
    <div id="tampilan3"></div>
    <div id="tampilan4"></div>
    <div id="tampilan5"></div>
    <div id="tampilan6"></div>
</body>
</html> 
<br/><br/> 
<style>* 
{
  box-sizing: border-box;
}
body {
  font-size: 14px;
}
.bg {
  width: 773px;
  height: 802px;
  background: rgba(255,254,254,1);
  opacity: 1;
  position: relative;
  top: 0px;
  left: 0px;
  overflow: hidden;
}
.contact {
  width: 178px;
  color: rgba(0,0,0,1);
  position: absolute;
  top: 50px;
  right: 100px;
  font-family: Arial;
  font-weight: Regular;
  font-size: 14px;
  opacity: 1;
  text-align: right;
}
.head {
  width: 198px;
  color: rgba(0,0,0,1);
  position: absolute;
  top: 37px;
  left: 22px;
  font-family: Pacifico;
  font-weight: Regular;
  font-size: 20px;
  opacity: 1;
  text-align: left;
}
.bggambar {
  width: 411px;
  height: 388px;
  background: rgba(53,53,53,1);
  opacity: 1;
  position: absolute;
  top: 135px;
  right: -100px;
  align-content: right;
  border-radius: 50%;
}
.avanza {
  width: 342px;
  height: 192px;
  background: url("avanza.png");
  background-repeat: no-repeat;
  background-position: right;
  background-size: cover;
  opacity: 1;
  position: absolute;
  top: 142px;
  right: -3px;
  overflow: hidden;
}
.xenia {
  width: 342px;
  height: 192px;
  background: url("xenia.png");
  background-repeat: no-repeat;
  background-position: right;
  background-size: cover;
  opacity: 1;
  position: absolute;
  top: 300px;
  right: 16px;
  overflow: hidden;
}
.halo {
  width: 252px;
  color: rgba(29,177,115,1);
  position: absolute;
  top: 94px;
  left: 23px;
  font-family: Podkova;
  font-weight: Bold;
  font-size: 24px;
  opacity: 1;
  text-align: left;
}
.input {
  width: 390px;
  color: rgba(104,14,251,1);
  position: absolute;
  top: 134px;
  left: 22px;
  font-family: Poppins;
  font-weight: Bold;
  font-size: 30px;
  opacity: 1;
  text-align: left;
}
.form {
  width: 435px;
  color: rgba(0,0,0,1);
  position: absolute;
  top: 192px;
  left: 23px;
  font-family: Poppins;
  font-weight: Regular;
  font-size: 14px;
  opacity: 1;
  text-align: left;
}
.info {
  width: 149px;
  color: rgba(0,0,0,1);
  position: absolute;
  top: 510px;
  left: 13px;
  font-family: Tahoma;
  font-weight: Regular;
  font-size: 14px;
  opacity: 1;
  text-align: left;
}
.bgconme {
  width: 101px;
  height: 30px;
  background: rgba(14,62,231,1);
  opacity: 1;
  position: absolute;
  top: 530px;
  left: 13px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  overflow: hidden;
}
.conme {
  width: 75px;
  color: rgba(255,247,247,1);
  position: absolute;
  top: 535px;
  left: 20px;
  font-family: Roboto Slab;
  font-weight: Black;
  font-size: 14px;
  opacity: 1;
  text-align: left;
}
</style>
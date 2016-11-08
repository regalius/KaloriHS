<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome To Downtown !</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header class="docked">
        <h1 id="logo">
            <img src="img/logo.png" alt="">
            <span>Downtown</span>
        </h1>
        <nav>
            <div id="toggler"></div>
            <a href="#news">Home <div> </div></a>
            <a href="#cariMenu">Get Menu Recommendations <div> </div></a>
            <a href="">Contact Us <div> </div></a>
        </nav>
    </header>
    <div id="news" class="disband">
        <img id="newsBg" src="img/bg1.jpg" alt="">
        <div id="newsContent">
            <section id="newsText">
            <h2>
               <span class="bigCaps">THE FIRST</span> <br>
               <span class="bigCaps">DIET CATERING</span> 
               <span class="smallCaps">AT MALANG CITY</span>
            </h2>
            <p>               Downtown has provided the very best in diet catering at Malang City for almost 30 years. Each and every employee at Downtown is dedicated to excellence in the products served and the services provided. Downtown uses only the freshest and highest quality ingredients to ensure that it's the best our customer can get.
</p>
        </section>
       
        </div>
    </div>
        <div id="cariMenu">
                   <section id = "cariMenuContent">
            <h2>
            Rekomendasikan menu sesuai kebutuhan kalori saya !
        </h2>
        <p>
Kami percaya makanan yang terbaik adalah makanan yang sehat, ini berarti adalah makanan yang memenuhi kebutuhan kalori anda, tidak lebih, tidak kurang. Oleh karenanya, ijinkan kami untuk membantu anda memilih menu yang sesuai dengan kebutuhan anda.
        </p>
         <article>
                <button>SUBMIT</button>
            </article>
        <nav id="formNavigation">
                <a href="formDataDiri" class="active">
                    Data Diri
                    <div>
                    </div>
                 </a>                
                <a href="formPreferensi">
                    Preferensi
                    <div >
                    </div>
                </a>
          </nav>
          <nav id="waktuSelector">
                        <a href="pagi" class="active">
                            Pagi
                            <div></div>
                        </a>
                        <a href="siang">
                            Siang
                            <div></div>
                        </a>
                        <a href="camilan">
                            Camilan
                            <div></div>
                        </a>
                        <a href="malam">
                            Malam
                            <div></div>
                        </a>
                    </nav> 
            
        <form action="">
            <div id="formDataDiri" class="active">
                <div>
                    <input type="text" name="namaKonsumen" placeholder="Nama Konsumen">
                </div>
                <div>
                    <input type="text" placeholder="Alamat Surel">
                </div>
                <div>
                    <select name="jenisKelamin" >
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
                </div>
                <div>
                    <input type="number" name="beratBadan" min="0" placeholder="Berat Badan (Kg)">
                </div>
                <div>
                    <input type="number" name="tinggiBadan" min="0" placeholder="Tinggi Badan (Cm)">
                </div>
                <div>
                    <input type="number" name="umur" min="0" placeholder="Umur (Th)">
                </div>
                <div>
                    <select name="aktifitas" id="">
                        <option value=""></option>
                        <option value="istirahat">Istirahat</option>
                        <option value="ringan">Ringan</option>
                        <option value="sedang">Sedang</option>
                        <option value="berat">Berat</option>
                        <option value="sBerat">Sangat Berat</option>
                    </select>    
                </div>
                
                <div>
                    <input type="text" name="kalori" value="Kebutuhan Kalori" readonly>
                </div>
                             <div id="infoAktifitas"> 
                             
                </div>

            </div>
            <div id="formPreferensi" class="">
                       
                    <nav id="subformNavigation">
                     <a href="subformKarbohidrat" class="active">
                            <br>
                            Karbohidrat
                        <div>
                        </div>
                     </a>                
                    <a href="subformProteinHewani">
                            Protein Hewani
                        <div >
                        </div>
                    </a>                                
                    <a href="subformProteinNabati">
                            Protein Nabati
                        <div >
                        </div>
                    </a>
                    <a href="subformSayuranA">
                            <br>
                            Sayuran A
                        <div >
                        </div>
                    </a>
                    <a href="subformSayuranB">
                            <br>
                            Sayuran B
                        <div >
                        </div>
                    </a>
                    <a href="subformSusu">
                            <br>
                            Susu
                        <div >
                        </div>
                    </a>
                    
                    <a href="subformBuah">
                            <br>
                            Buah
                        <div >
                        </div>
                    </a>
                </nav>
                <div id="subformKarbohidrat" class="active">
                    <div class="subSection">
                        <div class="subformItem"><label>   <input type="checkbox" name="checkNasi" value="1">Nasi </label></div>
                        <div class="subformItem"><label>   <input type="checkbox" name="checkNasiTim" value="2">Nasi Tim</label></div>
                        <div class="subformItem"><label>   <input type="checkbox" name="checkBuburBeras" value="3">Bubur Beras</label></div>
                       </div>        
                    <div class="subSection">                         
                        <div class="subformItem"><label>   <input type="checkbox" name="checkKentang" value="4">Kentang</label></div>                    
                        <div class="subformItem"><label>   <input type="checkbox" name="checkRotiPutih" value="5">Roti Putih</label></div>
                        <div class="subformItem"><label>   <input type="checkbox" name="checkKraker" value="6">Kraker</label></div>
                    </div>
                    <div class="subSection">                         
                        <div class="subformItem"><label>   <input type="checkbox" name="checkHavermouth" value="7">Havermouth</label></div>
                        <div class="subformItem"><label>   <input type="checkbox" name="checkSupermi" value="8">Bihun</label></div>
                    </div>
                    <div class="subSection">
                        <div class="subformItem"><label>   <input type="checkbox" name="checkLontong" value="9">Lontong</label></div>
                        <div class="subformItem"><label>   <input type="checkbox" name="checkKetupat" value="10">Ketupat</label></div>                        
                    </div>
                </div>
                
                <div id="subformProteinHewani">
                <div class="subSection">
                    <div class="subformItem"><label>   <input type="checkbox" name="checkDagingSapi" value="11">Daging Sapi </label></div>
                     <div class="subformItem"><label>   <input type="checkbox" name="checkDagingBabi" value="12">Daging Babi </label></div>
                      <div class="subformItem"><label>   <input type="checkbox" name="checkDagingAyam" value="13">Daging Ayam </label></div>
                </div>
                <div class="subSection">
                       <div class="subformItem"><label>   <input type="checkbox" name="checkHatiSapi" value="14">Hati Sapi </label></div>
                     <div class="subformItem"><label>   <input type="checkbox" name="checkHatiAyam" value="15">Hati Ayam </label></div>
                      <div class="subformItem"><label>   <input type="checkbox" name="checkTelurAyamBiasa" value="16">Telur Ayam Biasa </label></div>
                </div>
                <div class="subSection">
                       <div class="subformItem"><label>   <input type="checkbox" name="checkTelurAyamNegeri" value="17">Telur Ayam Negeri </label></div>
                        <div class="subformItem"><label>   <input type="checkbox" name="checkIkanSegar" value="18">Telur Bebek </label></div>
                        <div class="subformItem"><label>   <input type="checkbox" name="checkIkanSegar" value="19">Ikan Segar </label></div>
                        <div class="subformItem"><label>   <input type="checkbox" name="checkIkanAsin" value="20">Ikan Asin </label></div>
                </div>
                <div class="subSection">
                         <div class="subformItem"><label>   <input type="checkbox" name="checkIkanTeri" value="21">Ikan Teri </label></div>
                          <div class="subformItem"><label>   <input type="checkbox" name="checkUdangBasah" value="22">Udang Basah </label></div>
                           <div class="subformItem"><label>   <input type="checkbox" name="checkKeju" value="23">Keju </label></div> 
                     <div class="subformItem"><label>   <input type="checkbox" name="checkBaksoDaging" value="24">Bakso Daging </label></div>                    
                </div>
                </div>

                <div id="subformProteinNabati"> 
                       <div class="subSection">
                             <div class="subformItem"><label>   <input type="checkbox" name="checkKacangHijau" value="25">Kacang Hijau</label></div> 
                             <div class="subformItem"><label>   <input type="checkbox" name="checkKacangKedelai" value="26">Kacang Kedelai</label></div> 
                             <div class="subformItem"><label>   <input type="checkbox" name="checkKacangMerah" value="27">Kacang Merah</label></div> 
                       </div>
                       <div class="subSection">
                           <div class="subformItem"><label>   <input type="checkbox" name="checkKacangTanah" value="28">Kacang Tanah</label></div> 
                           <div class="subformItem"><label>   <input type="checkbox" name="checkKejuKacangTanah" value="29">Keju Kacang Tanah</label></div> 
                       </div>
                       <div class="subSecton">
                           <div class="subformItem"><label>   <input type="checkbox" name="checkKacangTolo" value="30">Kacang Tolo</label></div> 
                           <div class="subformItem"><label>   <input type="checkbox" name="checkOncom" value="31">Oncom</label></div> 
                       </div>
                       <div class="subSection">
                           <div class="subformItem"><label>   <input type="checkbox" name="checkTahu" value="32">Tahu</label></div> 
                           <div class="subformItem"><label>   <input type="checkbox" name="checkTempe" value="33">Tempe</label></div> 
                       </div>
                </div>
                
                <div id="subformSayuranA">
 <div class="subSection">
                         <div class="subformItem"><label>   <input type="checkbox" name="checkBaligo" value="34">Baligo</label></div>
                          <div class="subformItem"><label>   <input type="checkbox" name="checkBawang" value="35"> Bawang</label></div>
                           <div class="subformItem"><label>   <input type="checkbox" name="checkKacangPanjang" value="36"> Kacang Panjang</label></div>
                            <div class="subformItem"><label>   <input type="checkbox" name="checkKoro" value="37"> Koro</label></div>
                             <div class="subformItem"><label>   <input type="checkbox" name="checkLabuSiam" value="38"> Labu Siam</label></div>
                              <div class="subformItem"><label>   <input type="checkbox" name="checkWuluh" value="39"> Wuluh </label></div>
                         <div class="subformItem"><label>   <input type="checkbox" name="checkJamurSegar" value="40">Jamur Segar</label></div>
                    </div>
                    <div class="subSection">
                          <div class="subformItem"><label>   <input type="checkbox" name="checkOyong" value="41">Oyong </label></div>
                           <div class="subformItem"><label>   <input type="checkbox" name="checkKangkung" value="42">Kangkung</label></div>
                            <div class="subformItem"><label>   <input type="checkbox" name="checkKetimun" value="43">Ketimun </label></div>
                             <div class="subformItem"><label>   <input type="checkbox" name="checkTomat" value="44">Tomat</label></div>
                              <div class="subformItem"><label>   <input type="checkbox" name="checkKecipirMuda" value="45">Kecipir Muda </label></div>
                               <div class="subformItem"><label>   <input type="checkbox" name="checkKol" value="46">Kol</label></div>
                    </div>
                    <div class="subSection">
                         <div class="subformItem"><label>   <input type="checkbox" name="checkKembangKol" value="47">Kembang Kol </label></div>
                          <div class="subformItem"><label>   <input type="checkbox" name="checkLabuAir" value="48">Labu Air</label></div>
                           <div class="subformItem"><label>   <input type="checkbox" name="checkLobak" value="49">Lobak </label></div>
                            <div class="subformItem"><label>   <input type="checkbox" name="checkPepayaMuda" value="50">Pepaya Muda</label></div>
                             <div class="subformItem"><label>   <input type="checkbox" name="checkPecai" value="51">Pecai </label></div>
                              <div class="subformItem"><label>   <input type="checkbox" name="checkRebung" value="52">Rebung</label></div>
                               <div class="subformItem"><label>   <input type="checkbox" name="checkSawi" value="53">Sawi</label></div>
                    </div>
                    <div class="subSection">
                          <div class="subformItem"><label>   <input type="checkbox" name="checkSeledri" value="54">Seledri</label></div>
                           <div class="subformItem"><label>   <input type="checkbox" name="checkSelada" value="55">Selada</label></div>
                            <div class="subformItem"><label>   <input type="checkbox" name="checkTauge" value="56">Tauge </label></div>
                             <div class="subformItem"><label>   <input type="checkbox" name="checkTebuTerubuk" value="57">Tebu Terubuk </label></div>
                              <div class="subformItem"><label>   <input type="checkbox" name="checkTerong" value="58">Terong</label></div>
                              <div class="subformItem"><label>   <input type="checkbox" name="checkCabeHijauBesar" value="59">Cabe Hijau Besar</label></div>
                    </div>                   
                
                </div>
    
                <div id="subformSayuranB">  
                <div class="subSection">
                    <div class="subformItem"><label>   <input type="checkbox" name="checkBayam" value="60">Bayam</label></div> 
                    <div class="subformItem"><label>   <input type="checkbox" name="checkBit" value="61">Bit</label></div> 
                    <div class="subformItem"><label>   <input type="checkbox" name="checkBuncis" value="62">Buncis</label></div> 
                    <div class="subformItem"><label>   <input type="checkbox" name="checkBluntas" value="63">Daun Bluntas</label></div> 
                    <div class="subformItem"><label>   <input type="checkbox" name="checkKetelaRambat" value="64">Daun Ketela Rambat</label></div> 
                    <div class="subformItem"><label>   <input type="checkbox" name="checkKecipir" value="65">Daun Kecipi9</label></div> 
                    <div class="subformItem"><label>   <input type="checkbox" name="checkLeunca" value="66">Daun Leunca</label></div> 
                </div>
                <div class="subSection">
                    <div class="subformItem"><label>   <input type="checkbox" name="checkLompong" value="67">Daun Lompong</label></div> 
                    <div class="subformItem"><label>   <input type="checkbox" name="checkMangkokan" value="68">Daun Mangkokan</label></div> 
                    <div class="subformItem"><label>   <input type="checkbox" name="checkMelinjo" value="69">Daun Melinjo</label></div> 
                    <div class="subformItem"><label>   <input type="checkbox" name="checkPakis" value="70">Daun Pakis</label></div> 
                    <div class="subformItem"><label>   <input type="checkbox" name="checkSingkong" value="71">Daun Singkong</label></div> 
                    <div class="subformItem"><label>   <input type="checkbox" name="checkPepaya" value="72">Daun Pepaya</label></div> 
                    <div class="subformItem"><label>   <input type="checkbox" name="checkJagungMuda" value="73">Jagung Muda</label></div> 
                </div>
                <div class="subSection">
                    <div class="subformItem"><label>   <input type="checkbox" name="checkJantungPisang" value="74">Jantung Pisang</label></div> 
                    <div class="subformItem"><label>   <input type="checkbox" name="checkGenjer" value="75">Genjer</label></div> 
                    <div class="subformItem"><label>   <input type="checkbox" name="checkKacangPanjang" value="76">Kacang Panjang</label></div> 
                    <div class="subformItem"><label>   <input type="checkbox" name="checkKacangKapri" value="77">Kacang Kapri</label></div> 
                    <div class="subformItem"><label>   <input type="checkbox" name="checkKatuk" value="78">Katuk</label></div> 
                    <div class="subformItem"><label>   <input type="checkbox" name="checkKucai" value="79">Kucai</label></div> 
                </div>
                <div class="subSection">
                    <div class="subformItem"><label>   <input type="checkbox" name="checkLabuSiam" value="80">Labu Siam</label></div> 
                    <div class="subformItem"><label>   <input type="checkbox" name="checkLabuWuluh" value="81">Labu Wuluh</label></div> 
                    <div class="subformItem"><label>   <input type="checkbox" name="checkNangkaMuda" value="82">Nangka Muda</label></div> 
                    <div class="subformItem"><label>   <input type="checkbox" name="checkA" value="83">Pare</label></div> 
                    <div class="subformItem"><label>   <input type="checkbox" name="checkA" value="84">Tekokak</label></div> 
                    <div class="subformItem"><label>   <input type="checkbox" name="checkA" value="85">Wortel</label></div> 
                </div>      
                </div>
                
                <div id="subformSusu">            
                    <div class="subSection">
                        <div class="subformItem"><label><input type="checkbox" value="86">Susu Sapi</label></div>
                        <div class="subformItem"><label><input type="checkbox" value="87">Susu Kambing</label></div>
                    </div>
                    <div class="subSection">
                        <div class="subformItem"><label><input type="checkbox" value="88">Susu Kerbau</label></div>
                        <div class="subformItem"><label><input type="checkbox" value="89">Susu Kental Manis</label></div>
                        
                    </div>
                    <div class="subSection">
                        <div class="subformItem"><label><input type="checkbox" value="90">Yoghurt</label></div>
                        <div class="subformItem"><label><input type="checkbox" value="91">Tepung Susu Full Cream</label></div>
                        
                    </div>
                    <div class="subSection">
                        <div class="subformItem"><label><input type="checkbox" value="92">Tepung Susu Skim</label></div>
                        <div class="subformItem"><label><input type="checkbox" value="93">Tepung Sari Kedele</label></div>
                        
                    </div>
                </div>
                    
                <div id="subformBuah">
                    <div class="subSection">
                          <div class="subformItem"><label>   <input type="checkbox" name="checkSeledri" value="94">Advokat</label></div>
                          <div class="subformItem"><label>   <input type="checkbox" name="checkSeledri" value="95">Apel</label></div>
                          <div class="subformItem"><label>   <input type="checkbox" name="checkSeledri" value="96">Anggur</label></div>
                          <div class="subformItem"><label>   <input type="checkbox" name="checkSeledri" value="97">Belimbing</label></div>
                          <div class="subformItem"><label>   <input type="checkbox" name="checkSeledri" value="98">Jambu Biji</label></div>
                        
                    </div>
                    <div class="subSection">
                          <div class="subformItem"><label>   <input type="checkbox" name="checkSeledri" value="99">Jambu Air</label></div>
                          <div class="subformItem"><label>   <input type="checkbox" name="checkSeledri" value="100">Jambu Bol</label></div>
                          <div class="subformItem"><label>   <input type="checkbox" name="checkSeledri" value="101">Duku</label></div>
                          <div class="subformItem"><label>   <input type="checkbox" name="checkSeledri" value="102">Durian</label></div>
                          <div class="subformItem"><label>   <input type="checkbox" name="checkSeledri" value="103">Jeruk Manis</label></div>
                        
                    </div>
                    <div class="subSection">
                          <div class="subformItem"><label>   <input type="checkbox" name="checkSeledri" value="104">Kedondong</label></div>
                          <div class="subformItem"><label>   <input type="checkbox" name="checkSeledri" value="105">Mangga</label></div>
                          <div class="subformItem"><label>   <input type="checkbox" name="checkSeledri" value="106">Nanas</label></div>
                          <div class="subformItem"><label>   <input type="checkbox" name="checkSeledri" value="107">Nangka Masak</label></div>
                          <div class="subformItem"><label>   <input type="checkbox" name="checkSeledri" value="108">Pepaya</label></div>
                        
                    </div>
                    <div class="subSection">
                          <div class="subformItem"><label>   <input type="checkbox" name="checkSeledri" value="109">Pisang Ambon</label></div>
                          <div class="subformItem"><label>   <input type="checkbox" name="checkSeledri" value="110">Seledri</label></div>
                          <div class="subformItem"><label>   <input type="checkbox" name="checkSeledri" value="111">Seledri</label></div>
                          <div class="subformItem"><label>   <input type="checkbox" name="checkSeledri" value="112">Seledri</label></div>
                        
                    </div>
                </div>
            
            </div>
            </form>

           

            </section>
        </div>
            <div id="hasilMenu">
            </div>
            
            <script src="js/jquery.js"></script>
    <script src="js/frontend.js"></script>
</body>
<footer>
    
</footer>
</html>

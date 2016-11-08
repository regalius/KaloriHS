var preference = {
        pagi : [],
        siang : [],
        camilan : [],
        malam : []
};
var waktu ="pagi";
$(document).ready(function(){
    $("html,body").scrollTop(2);
})
$(window).scroll(function(e){
	var scrolled=$(window).scrollTop();
    $("header nav a").each(function(e){                         
        $(this).removeClass("active");
    });
	if(scrolled>=$("#cariMenu").offset().top-50){
        $("header").addClass("docked");	
        $("#news").addClass("disband");
        $("header nav a[href='#cariMenu']").addClass("active");
    }else{
        $("header").removeClass("docked");
        $("#news").removeClass("disband");
        $("header nav a[href='#news']").addClass("active");
        $("header nav").removeClass("active");
    }
    if(scrolled>=$("#cariMenu").offset().Top+$("#cariMenu").height()){
        $("#hasilMenu").removeClass("active");
    }
});
$("header nav a").click(function(e){
    e.preventDefault();
    var destination= $(this).attr("href");
    if ($(window).scrollTop() !== $(destination).offset().top-50){
       $("html,body").animate({scrollTop:$(destination).offset().top-50},1000);
    }
});

$("#formNavigation a").click(function(e){
    e.preventDefault();
  if (!$(this).hasClass("active")){
        $("#formNavigation a").each(function(e){
            $(this).removeClass("active");
        });
      $(this).addClass("active");
      var destination = $(this).attr("href");
      $("#cariMenuContent form > div").each(function(e){
            $(this).removeClass("active");
          if ($(this).attr("id") === destination){
            $(this).addClass("active");
          }
        });
      if($("#waktuSelector").hasClass("active")){
          $("#waktuSelector").removeClass("active");
      }
        
      if(destination == "formPreferensi"){
          if(!$("#waktuSelector").hasClass("active")){
                    $("#waktuSelector").addClass("active");
          }
      }
    }
});

$("#subformNavigation a").click(function(e){
    e.preventDefault();
  if (!$(this).hasClass("active")){
        $("#subformNavigation a").each(function(e){
            $(this).removeClass("active");
        });
      $(this).addClass("active");
      var destination = $(this).attr("href");
      $("#formPreferensi > div").each(function(e){
            $(this).removeClass("active");
          if ($(this).attr("id") === destination){
            $(this).addClass("active");
          }
        });
    }
});
$("#infoAktifitas").click(function(){
    if($(this).hasClass("active")){
        $(this).removeClass("active");   
    }
});
$('select[name="aktifitas"]').focusout(function(){
    if($("#infoAktifitas").hasClass("active")){
        $("#infoAktifitas").removeClass("active");   
    }
});
$("#formDataDiri input,#formDataDiri select").change(function(e){
    if($(this).attr("name") == "aktifitas"){
        var tipeAktifitas = $(this).val();
        if(tipeAktifitas == "istirahat"){
        $("#infoAktifitas").html("<p>Istirahat</p>                             Keadaan Istirahat, Total Kebutuhan Kalori dalam satu hari ditambah 10% dari kebutuhan kalori ideal.");
            if(!$("#infoAktifitas").hasClass("active")){
                $("#infoAktifitas").addClass("active");
            } 
        }else if(tipeAktifitas == "ringan"){
        $("#infoAktifitas").html("<p>Ringan</p>                             Pegawai Kantor, Pegawai Toko, Guru, Ahli Hukum, Ibu Rumah Tangga, dan lain-lain. Total Kebutuhan Kalori dalam satu hari ditambah 20% dari kebutuhan kalori ideal.");
            if(!$("#infoAktifitas").hasClass("active")){
                $("#infoAktifitas").addClass("active");                                
            }
        }else if(tipeAktifitas == "sedang"){
        $("#infoAktifitas").html("<p>Sedang</p> Pegawai di Industri ringan, mahasiswa,militer yang sedang tidak berperang, total kebutuhan kalori dalam satu ahri ditambah dengan 30% kebutuhan kalori ideal.");
            if(!$("#infoAktifitas").hasClass("active")){
                $("#infoAktifitas").addClass("active");                                
            }
        }else if(tipeAktifitas == "berat"){
        $("#infoAktifitas").html("<p>Berat</p>                              Petani, buruh, militer dalam keadaan latihan, penari, atlet, total kebutuhan kalori dalam satu hari ditambah dengan 40% kebutuhan kalori ideal.");
            if(!$("#infoAktifitas").hasClass("active")){
                $("#infoAktifitas").addClass("active");                                
            }
        }else if(tipeAktifitas == "sBerat"){
        $("#infoAktifitas").html("<p>Sangat Berat</p>                              Tukang becak, tukang gali, pandai besi, total kebutuhan kalori dalam satu hari ditambah dengan 50% dari kebutuhan kalori ideal.");
            if(!$("#infoAktifitas").hasClass("active")){
                $("#infoAktifitas").addClass("active");                                
            }
        }else{
            $("#infoAktifitas").html("");
            if($("#infoAktifitas").hasClass("active")){
                $("#infoAktifitas").removeClass("active");                                
            }
        }
    }
    if($("input[name=beratBadan]").val() >0 && $("input[name=tinggiBadan]").val()>0 && $("input[name=umur]").val()>0 && $("select[name=aktifitas]").val() != ""){
        var kebutuhanKalori,beratBadanIdeal;
        var tinggiBadan = $('input[name="tinggiBadan"]').val();
        var jenisKelamin = $('select[name="jenisKelamin"]').val();
        var umur = $("input[name=umur]").val();
        var beratBadan = $("input[name=beratBadan]").val();
        var aktifitas = $("select[name=aktifitas]").val();

        if (jenisKelamin == "pria"){
            if(tinggiBadan>160){
                beratBadanIdeal= (tinggiBadan -100) * (90/100);
            }else{
                beratBadanIdeal= tinggiBadan-100;
            }
            kebutuhanKalori= beratBadanIdeal*30;
        }else{
            if(tinggiBadan>150){
                beratBadanIdeal= (tinggiBadan -100) * (90/100);
            }else{
                beratBadanIdeal= tinggiBadan-100;
            }
            kebutuhanKalori= beratBadanIdeal*25;
        }
        if (umur>40){
            if(umur<=59){
                kebutuhanKalori-= (5/100)*kebutuhanKalori;
            }else if(umur<=69){
                kebutuhanKalori-= (10/100)*kebutuhanKalori;
            }else{
                kebutuhanKalori-= (20/100)*kebutuhanKalori;            
            }
        }
        
    if(aktifitas== "istirahat"){
        kebutuhanKalori+=(10/100)*kebutuhanKalori;    
    }else if(aktifitas=="ringan"){
        kebutuhanKalori+=(20/100)*kebutuhanKalori;    
    }else if(aktifitas=="sedang"){
        kebutuhanKalori+=(30/100)*kebutuhanKalori;    
    }else if(aktifitas=="berat"){
       kebutuhanKalori+=(40/100)*kebutuhanKalori;    
    }else{
        kebutuhanKalori+=(50/100)*kebutuhanKalori;    
    }
        
        if(beratBadan>(110/100)*beratBadanIdeal){
            kebutuhanKalori-=.2*kebutuhanKalori;
        }else if(beratBadan<(90/100)*beratBadanIdeal){
            kebutuhanKalori+=.2*kebutuhanKalori;
        }
        
        if(kebutuhanKalori <100){
            kebutuhanKalori = 100;   
        }

            $('input[name="kalori"]').val(kebutuhanKalori + " kal/hari");
    }
});
//SINI
$("nav#waktuSelector a").click(function(e){
    e.preventDefault();
   if (!$(this).hasClass("active")){
        $("nav#waktuSelector a").each(function(e){
            $(this).removeClass("active");
        });
        $(this).addClass("active");
   
       waktu=$(this).attr("href");
       $(".subformItem input").each(function(){
            $(this).prop("checked",false);
       })
     $.each(preference[waktu],function(index,value){
            $(".subformItem input[value="+ value +"]").prop("checked",true);
        });
    }
});

$(".subformItem input").change(function(){
         //   alert($.inArray($(this).val(),preference[waktu]));
   if($(this).prop("checked")){
     if($.inArray($(this).val(),preference[waktu])<0){
            preference[waktu].push($(this).val());
        }
    }else{
        var index = preference[waktu].indexOf($(this).val());
        preference[waktu].splice(index,1);
    }
           
});

$("#cariMenuContent article button").click(function(e){
    e.preventDefault()
        var kalori = parseFloat($('input[name="kalori"]').val().replace( " kal/hari", ""));
    if(preference["pagi"].length >0 && preference["siang"].length >0 && preference["malam"].length >0 && kalori>=1){
        $.post("result.php",{'kalori' : kalori, 'preference[]': preference["pagi"], 'preferenceSiang[]': preference["siang"], "preferenceMalam[]": preference["malam"]},function(data){ 
            $("#hasilMenu").html(data);
            $("#hasilMenu").addClass("active");
            $("html,body").animate({scrollTop:$("#cariMenu").offset().top-50},1000);
        });
}
});
$("header nav #toggler").click(function(e){
    if($("header nav").hasClass("active")){
        $("header nav").removeClass("active");
    }else{
        $("header nav").addClass("active");
    }
})

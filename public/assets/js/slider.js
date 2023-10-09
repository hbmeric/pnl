$.fn.slidermrc = function() {
    var bu = $(this);
    var aktif = 0;
    var cocuklar = bu.find(".slide-inner");
    console.log(cocuklar)
    var kac = cocuklar.length;
    var sayi = 0;
    cocuklar.hide();
    cocuklar.eq(sayi).show();
    function ileri() {
        
        aktif++;
        if (aktif == kac) aktif = 0;
        console.log(aktif);
        cocuklar.hide(500);
        cocuklar.eq(aktif).show(500);
    }
    function geri() {
        
    
        aktif--;
        if (aktif == -1) aktif = kac;
        cocuklar.fadeIn();
        cocuklar.eq(aktif).fadeOut();
    }
    setInterval(function () {
        
        
        console.log(aktif);
        cocuklar.eq(aktif).slideUp("slow");
        aktif++;
        if (aktif == kac) aktif = 0;
        cocuklar.eq(aktif).slideDown("slow");
    },5000);

}

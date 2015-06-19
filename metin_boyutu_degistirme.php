<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8">
        <title>Ders Örnekleri</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                var varsayilanFontBuyuklugu = $("#metin").css("font-size");

                $(".sifirla").click(function(){
                    $("#metin").css({"font-size" : varsayilanFontBuyuklugu});
                });

                $(".buyult").click(function(){
                    var fontBuyukluguFloat = parseFloat($("#metin").css("font-size"));
                    var yeniFontBuyuklugu = fontBuyukluguFloat * 1.2;

                    if(yeniFontBuyuklugu < 50)
                        $("#metin").css({"font-size" : yeniFontBuyuklugu});
                });

                $(".kucult").click(function(){
                    var fontBuyukluguFloat = parseFloat($("#metin").css("font-size"));
                    var yeniFontBuyuklugu = fontBuyukluguFloat * 0.8;

                    if(yeniFontBuyuklugu > 5)
                        $("#metin").css({"font-size" : yeniFontBuyuklugu});
                });
            })
        </script>
    </head>
    <body>    
        <button type="button" class="kucult">A-</button>
		<button type="button" class="sifirla">Sıfırla</button>
        <button type="button" class="buyult">A+</button>
        <div id="metin">
            <p>Yaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır. Virginia'daki Hampden-Sydney College'dan Latince profesörü Richard McClintock, bir Lorem Ipsum pasajında geçen ve anlaşılması en güç sözcüklerden biri olan 'consectetur' sözcüğünün klasik edebiyattaki örneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, Çiçero tarafından M.Ö. 45 tarihinde kaleme alınan "de Finibus Bonorum et Malorum" (İyi ve Kötünün Uç Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı bölümlerinden gelmektedir. Bu kitap, ahlak kuramı üzerine bir tezdir ve Rönesans döneminde çok popüler olmuştur. Lorem Ipsum pasajının ilk satırı olan "Lorem ipsum dolor sit amet" 1.10.32 sayılı bölümdeki bir satırdan gelmektedir.</p>
			<p>1500'lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler için yeniden üretilmiştir. Çiçero tarafından yazılan 1.10.32 ve 1.10.33 bölümleri de 1914 H. Rackham çevirisinden alınan İngilizce sürümleri eşliğinde özgün biçiminden yeniden üretilmiştir.</p>
        </div>
    </body>
</html>

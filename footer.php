</div><!-- rowの閉じタグ -->


</div><!-- containerの閉じタグ -->

<?php wp_footer(); ?>
</div>
<!-- bootstrap関連のじゃばすく -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<!-- クリッカブルマップレスポンシブ用 -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"
    integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-rwdImageMaps/1.6/jquery.rwdImageMaps.min.js"></script>

<script>
jQuery('img[usemap]').rwdImageMaps();
</script>
<!-- ページ遷移用 -->
<script>
$(window).on('load', function() {
    $('body').removeClass('fadeout');
});
$(function() {
    // ハッシュリンク(#)と別ウィンドウでページを開く場合はスルー
    $('a:not([href^="#"]):not([target])').on('click', function(e) {
        e.preventDefault(); // ナビゲートをキャンセル
        url = $(this).attr('href'); // 遷移先のURLを取得
        if (url !== '') {
            $('body').addClass('fadeout'); // bodyに class="fadeout"を挿入
            setTimeout(function() {
                window.location = url; // 0.8秒後に取得したURLに遷移
            }, 400);
        }
        return false;
    });
});
</script>

</body>

</html>
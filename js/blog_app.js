// $ =jQuery
// $(要素)HTML要素の取得
// .on (トリガー,処理);
    $(document).on('click', '.js-like', function() {

    // どの投稿に関してか
    var post_id = $(this).siblings('.post_id').text();
    // 誰がいいねしたか
    var user_id = $(this).siblings('.user_id').text();

    var like_btn = $(this);
    var like_count = $(this).siblings('.like-count').text();
    console.log('PostID:' + post_id);
    console.log('UserID' + user_id);
    $.ajax({
    // 送信先、送信するデータを記述
    url: 'blog_like.php',  //送信先
    type: 'POST',  //送信メゾット
    datatype: 'json',  //データのタイプ　
    data: {            //送信するデータ
        'post_id':post_id,
        'user_id':user_id,
    }
    })
    .done(function(data) {
        console.log(data);
    // 処理が成功したときのデータを記述
    // dataにはINSERT文の結果が入っている（成功したらtrue）
    if(data == 'true'){
    console.log('hoge');
        like_count++;
        like_btn.siblings('.like-count').text(like_count);
        like_btn.removeClass('js-like');
        like_btn.addClass('js-unlike');
        like_btn.children('span').html('<i class="far fa-thumbs-up"></i>');
    }
    })
    .fail(function(error) {
    // 処理が失敗したときの処理を記述
    })
});
// いいねを取り消す処理
// js-unlikeがクリックされたときに発動する発動

    $(document).on('click', '.js-unlike', function() {

    // 必要な値を取り出す
    // どの投稿に関してか
    var post_id = $(this).siblings('.post_id').text();
    // 誰がいいねしたか
    var user_id = $(this).siblings('.user_id').text();
    // 
    var like_btn = $(this)
    // 
    var like_count = $(this).siblings('.like-count').text();
    // 非同期処理
    $.ajax({
    // 送信先、送信するデータを記述
    url: 'blog_like.php',  //送信先
    type: 'POST',  //送信メゾット
    datatype: 'json',  //データのタイプ　
    data:{            //送信するデータ
        'post_id':post_id,
        'user_id':user_id,
        'is_unlike': true
        }
    })
    .done(function(data) {
        console.log('取り消すのDONEメゾット')
    // 処理が成功したときのデータを記述
    // dataにはINSERT文の結果が入っている（成功したらtrue）
    if(data == 'true'){
        like_count--;
        like_btn.siblings('.like-count').text(like_count);
        like_btn.removeClass('js-unlike');
        like_btn.addClass('js-like');
        like_btn.children('span').html('<i class="fas fa-thumbs-up"></i>');
    }
    })
    .fail(function(error) {
    // 処理が失敗したときの処理を記述
    })
});
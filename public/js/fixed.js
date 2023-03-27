//ajax処理
$(".fix").on("click", function () {
  let $fix = $(this);
  let $fixed = $('js_fix');//固定ボタン
  let $fixUser = $('.timeline').data('user-id');//いいしたユーザー
  let $fixpostid = $fix.data('id');//コントローラーに渡すパラメーター
  // let $this = $(this);
  // $fixpostid = $this.data('timeline_id');

    $.ajax({
      headers: {
        //CSREトークンの設定
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
      },
      url: "/timeline/fixed",//Routeの記述
      type: "post",//受け取りの記述
      // processData: false,
      // dataType: "json",
      data: {
        'id' : $fixUser,//コントローラーに渡すパラメーター
        'timeline_id': $fixpostid,//TimelineIDを渡す
      },
    }).done(function(data){ //ajaxリクエストが成功した場合
      console.log(data);
      if(data == 1){
        // console.log('登録に成功しました。');
        $fix.toggleClass("font-color-red");//アイコンが赤くなる
      }else{
        $fix.toggleClass("font-color-red");
      }
    }).fail(function (data, xhr, err) {
      //ここの処理はエラーが出た時にエラー内容をわかるようにしておく。
      //とりあえず下記のように記述しておけばエラー内容が詳しくわかります。笑
                  console.log('エラー');
                  console.log(err);
                  console.log(xhr);
              });
  });
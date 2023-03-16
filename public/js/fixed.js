//ajax処理
$(".fix").on("click", function () {
  let $fixed = $('js_fix');//固定ボタン
  let $fixUser = $('fixUser');//いいしたユーザー
  let $fixpostid;//コントローラーに渡すパラメーター
  // let $this = $(this);
  // $fixpostid = $this.data('timeline_id');

    $.ajax({
      headers: {
        //CSREトークンの設定
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
      },
      url: "/fixed",//Routeの記述
      type: "post",//受け取りの記述
      processData: false,
      dataType: "json",
      data: {
        'id' : $fixUser,//コントローラーに渡すパラメーター
        'timeline_id': $fixpostid,//TimelineIDを渡す
      },
    })
    //ajaxリクエストが成功した場合
    .done(function(data){
      $(this).toggleClass("font-color-red");//アイコンが赤くなる
    })
    //ajaxリクエストが失敗した場合
    console.log('登録できませんでした。');
  });
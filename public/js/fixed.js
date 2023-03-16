//ajax処理
$(".fix").on("click", function () {
  let $fix_user = 
  $(this).toggleClass("font-color-red");
  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
  });
  $.ajax({
    //POST通信
    type: "post",
    //ここでデータの送信先URLを指定します。
    url: "/fixed",
    dataType: "json",
    data: {
      'id' : "テストタイトル",
      from: "テストfrom",
      body: "テストbody",
    },
  })
  });
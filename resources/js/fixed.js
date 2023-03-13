$(function(){
  var fav = [];
  var current_page_id = $(".favorite_button").data("pageid");//現在のページのIDを取得

  checked_inspect();//現在のページがお気に入り登録済みかチェック
  $(document).on('click','.favorite_button_in',function(){
    var index = fav.indexOf(current_page_id);
    if(index > -1){
      fav.splice(index, 1);
    } else {
      fav.push(current_page_id);
    }
    var serializedArr = JSON.stringify( fav );
    $.cookie("fav_item",serializedArr, { expires: 7, path: '/' });//cookieを保存
    checked_inspect();
  });


  function checked_inspect(){//現在のページがお気に入り登録されているかどうか
    fav = $.cookie("fav_item") ? JSON.parse( $.cookie("fav_item") ) : [];
    console.log(fav);
    if(fav.indexOf(current_page_id) > -1){
      $("body").addClass("is-choosen");
    } else {
      $("body").removeClass("is-choosen");
    }
  }
  });
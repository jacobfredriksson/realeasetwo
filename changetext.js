$(".admin").attr("contenteditable", "true");

admin = $(".admin");

$("#save").click(function(){
  for (var i = 0; i < admin.length; i++) {

  $edit = $(admin[i]).html();
  $id = admin[i].id;
  $.ajax({
    url: "savetext.php",
    type: "post",
    data: {data:$edit, id:$id},
    datatype: "html",
    });
}
});

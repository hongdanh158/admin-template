$(function() {
  if ($('#nav-mobile').length) {
    $("#nav-mobile > li").each(function(){
      $(this).find('a').addClass('waves-effect waves-teal')
      if ($(this).has("ul").length) {
        $(this).find('a').eq(0).addClass('collapsible-header');
        $(this).find('ul').eq(0).addClass('collapsible-body');
        var html = '<ul class="collapsible collapsible-accordion"> <li>' + $(this).html();
        $(this).html(html);
      };
    });
    $.each($("#nav-mobile li"), function (index, obj) {
      if ($(obj).has("ul").length) {
          $(obj).has("ul").find("a:first").attr('href', 'javascript:void(0)');
      }
    });
  }
});
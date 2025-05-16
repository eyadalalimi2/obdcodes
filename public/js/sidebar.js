jQuery(document).ready(function($){

  // 1) تحديد القائمة والعنصر النشط
  var $accordian = $('#accordian');
  var $selector = $('.selector-active');

  function updateSelector($item) {
    var h = $item.innerHeight(),
        w = $item.innerWidth(),
        pos = $item.position();
    $selector.css({
      top:   pos.top    + 'px',
      left:  pos.left   + 'px',
      height: h + 'px',
      width:  w + 'px'
    });
  }

  // عند التحميل: وسم العنصر المطابق للـ URL
  var path = window.location.pathname;
  // (مثال يفصل آخر جزء من المسار، يمكنك تعديله حسب هيكل روتاتك)
  var last = path.split('/').pop() || 'dashboard';
  var $initial = $accordian.find('li a').filter(function(){
    return $(this).attr('href').endsWith(last);
  }).parent().addClass('active');

  // تحريك الصندوق الأبيض لموقع العنصر النشط
  if ($initial.length) {
    updateSelector($initial);
  }

  // 2) عند النقر على أي عنصر
  $accordian.on('click','li',function(){
    var $this = $(this);
    $accordian.find('li').removeClass('active');
    $this.addClass('active');
    updateSelector($this);
  });

});

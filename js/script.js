
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $('.pagetop');
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });

  //ドロワーメニュー
  $("#MenuButton").click(function () {
    // $(".l-drawer-menu").toggleClass("is-show");
    // $(".p-drawer-menu").toggleClass("is-show");
    $(".js-drawer-open").toggleClass("open");
    $(".drawer-menu").toggleClass("open");
    $("html").toggleClass("is-fixed");

  });

// トップに戻る
  $(function () {
    // スクロールしたら「トップに戻る」ボタンが表示される
    const toTopButton = $(".js-to-top");
    const scrollHeight = 100;
    toTopButton.hide();
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        toTopButton.fadeIn();
      } else {
        toTopButton.fadeOut();
      }
    });

    // 「トップに戻る」ボタンをクリックしたらスクロールで戻る
    toTopButton.click(function () {
      $("body,html").animate({ scrollTop: 0 }, 800);
      return false;
    });
  });



  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });

  // スワイパー
  var swiper = new Swiper(".mySwiper", {
    cssMode: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
    },
    mousewheel: true,
    keyboard: true,
  });

  var swiper = new Swiper(".mySwiper2", {
    loop: true, // ループ有効
    slidesPerView: 2.5, // 一度に表示する枚数
    spaceBetween: 10,
    speed: 8000, // ループの時間
    allowTouchMove: false, // スワイプ無効
    width: 400,
    autoplay: {
      delay: 0, // 途切れなくループ
    },
    breakpoints: {
      768: {
        slidesPerView: 3,
        spaceBetween: 10,
        width: 920,
        autoplay: {
          delay: 0, // 途切れなくループ
        },
      }
    },
  });
});




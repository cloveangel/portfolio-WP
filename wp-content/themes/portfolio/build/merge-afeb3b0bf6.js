!(function (o) {
  function n() {
    for (
      var n = o("body").scrollTop() - 150,
        e = n + o(window).height() / 2,
        t = 0,
        a = 0;
      a < r.length;
      a++
    ) {
      if (void 0 === r[a + 1]) {
        t = a;
        break;
      }
      if (e >= r[a] && e <= r[a + 1]) {
        t = a;
        break;
      }
    }
    return t;
  }
  function e() {
    var o = n();
    s.eq(o)
      .addClass("current")
      .removeClass("leave")
      .siblings()
      .removeClass("current")
      .addClass("leave");
  }
  function t(n) {
    var e = o(n);
    o("html, body").animate({ scrollTop: e.offset().top }, "fast");
  }
  function a() {
    i.children("a").on("click", function () {
      o(this).addClass("selected");
    });
  }
  function l() {
    o(".gotoTop").on("click", function () {
      c.scrollTop(0);
    });
  }
  var c = o("body");
  c.on("click", ">nav >.toggle", function () {
    o(this).closest("nav").toggleClass("open");
  }),
    c.on("click", ">nav > ol", function () {
      o(this).closest("nav").removeClass("open");
    }),
    c.on("click", ">nav a", function (n) {
      n.preventDefault();
      var e = o(this),
        a = e.attr("href"),
        l = o(a);
      t(l);
    });
  var i = c.find(">nav>ol>li"),
    s = c.find(">main>section"),
    r = [];
  o.each(s, function (n, e) {
    var t = o(e),
      a = t.offset().top;
    r[n] = a;
  }),
    o(window).on("scroll", function () {
      e();
      var n = o(".gotoTop");
      o(this).scrollTop() > 700 ? n.fadeIn() : n.fadeOut();
    }),
    e(),
    a(),
    l(),
    console.log("Hello!"),
    console.log("Please contact me if you think I am not bad ;)."),
    console.log("Have a nice day!");
})(jQuery);

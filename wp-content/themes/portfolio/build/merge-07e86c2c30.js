!(function (o) {
  function n() {
    for (
      var n = o("body").scrollTop() - 150,
        e = n + o(window).height() / 2,
        l = 0,
        a = 0;
      a < d.length;
      a++
    ) {
      if (void 0 === d[a + 1]) {
        l = a;
        break;
      }
      if (e >= d[a] && e <= d[a + 1]) {
        l = a;
        break;
      }
    }
    return l;
  }
  function e() {
    var o = n();
    r.eq(o)
      .addClass("current")
      .removeClass("leave")
      .siblings()
      .removeClass("current")
      .addClass("leave");
  }
  function l() {
    var o = n();
    i.eq(o)
      .children("a")
      .addClass("selected")
      .end()
      .siblings()
      .children("a")
      .removeClass("selected")
      .end()
      .end();
  }
  function a(n) {
    var e = o(n);
    o("html, body").animate({ scrollTop: e.offset().top }, "fast");
  }
  function t() {
    i.children("a").on("click", function () {
      o(this).addClass("selected");
    });
  }
  function c() {
    o(".gotoTop").on("click", function () {
      s.scrollTop(0);
    });
  }
  var s = o("body");
  s.on("click", ">nav >.toggle", function () {
    o(this).closest("nav").toggleClass("open");
  }),
    s.on("click", ">nav > ol", function () {
      o(this).closest("nav").removeClass("open");
    }),
    s.on("click", ">nav a", function (n) {
      n.preventDefault();
      var e = o(this),
        l = e.attr("href"),
        t = o(l);
      a(t);
    });
  var i = s.find(">nav>ol>li"),
    r = s.find(">main>section"),
    d = [];
  o.each(r, function (n, e) {
    var l = o(e),
      a = l.offset().top;
    d[n] = a;
  }),
    o(window).on("scroll", function () {
      l(), e();
      var n = o(".gotoTop");
      o(this).scrollTop() > 700 ? n.fadeIn() : n.fadeOut();
    }),
    l(),
    e(),
    t(),
    c(),
    console.log("Hello!"),
    console.log("Please contact me if you think I am not bad ;)."),
    console.log("Have a nice day!");
})(jQuery);

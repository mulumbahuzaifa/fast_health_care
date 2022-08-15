<header class="site-header">
    <div class="nav-bar">
      <div class="container">
        <div class="row">
          <div
            class="col-12 d-flex flex-wrap justify-content-between align-items-center"
          >
            <div class="site-branding d-flex align-items-center">
              <a class="d-block" href="/" rel="home">
                <script data-pagespeed-no-defer>
                  //<![CDATA[
                  (function () {
                    for (
                      var g =
                          "function" == typeof Object.defineProperties
                            ? Object.defineProperty
                            : function (b, c, a) {
                                if (a.get || a.set)
                                  throw new TypeError(
                                    "ES3 does not support getters and setters."
                                  );
                                b != Array.prototype &&
                                  b != Object.prototype &&
                                  (b[c] = a.value);
                              },
                        h =
                          "undefined" != typeof window && window === this
                            ? this
                            : "undefined" != typeof global && null != global
                            ? global
                            : this,
                        k = ["String", "prototype", "repeat"],
                        l = 0;
                      l < k.length - 1;
                      l++
                    ) {
                      var m = k[l];
                      m in h || (h[m] = {});
                      h = h[m];
                    }
                    var n = k[k.length - 1],
                      p = h[n],
                      q = p
                        ? p
                        : function (b) {
                            var c;
                            if (null == this)
                              throw new TypeError(
                                "The 'this' value for String.prototype.repeat must not be null or undefined"
                              );
                            c = this + "";
                            if (0 > b || 1342177279 < b)
                              throw new RangeError("Invalid count value");
                            b |= 0;
                            for (var a = ""; b; )
                              if ((b & 1 && (a += c), (b >>>= 1))) c += c;
                            return a;
                          };
                    q != p &&
                      null != q &&
                      g(h, n, {
                        configurable: !0,
                        writable: !0,
                        value: q,
                      });
                    var t = this;

                    function u(b, c) {
                      var a = b.split("."),
                        d = t;
                      a[0] in d ||
                        !d.execScript ||
                        d.execScript("var " + a[0]);
                      for (var e; a.length && (e = a.shift()); )
                        a.length || void 0 === c
                          ? d[e]
                            ? (d = d[e])
                            : (d = d[e] = {})
                          : (d[e] = c);
                    }

                    function v(b) {
                      var c = b.length;
                      if (0 < c) {
                        for (var a = Array(c), d = 0; d < c; d++) a[d] = b[d];
                        return a;
                      }
                      return [];
                    }

                    function w(b) {
                      var c = window;
                      if (c.addEventListener)
                        c.addEventListener("load", b, !1);
                      else if (c.attachEvent) c.attachEvent("onload", b);
                      else {
                        var a = c.onload;
                        c.onload = function () {
                          b.call(this);
                          a && a.call(this);
                        };
                      }
                    }
                    var x;

                    function y(b, c, a, d, e) {
                      this.h = b;
                      this.j = c;
                      this.l = a;
                      this.f = e;
                      this.g = {
                        height:
                          window.innerHeight ||
                          document.documentElement.clientHeight ||
                          document.body.clientHeight,
                        width:
                          window.innerWidth ||
                          document.documentElement.clientWidth ||
                          document.body.clientWidth,
                      };
                      this.i = d;
                      this.b = {};
                      this.a = [];
                      this.c = {};
                    }

                    function z(b, c) {
                      var a,
                        d,
                        e = c.getAttribute("data-pagespeed-url-hash");
                      if ((a = e && !(e in b.c)))
                        if (0 >= c.offsetWidth && 0 >= c.offsetHeight) a = !1;
                        else {
                          d = c.getBoundingClientRect();
                          var f = document.body;
                          a =
                            d.top +
                            ("pageYOffset" in window
                              ? window.pageYOffset
                              : (
                                  document.documentElement ||
                                  f.parentNode ||
                                  f
                                ).scrollTop);
                          d =
                            d.left +
                            ("pageXOffset" in window
                              ? window.pageXOffset
                              : (
                                  document.documentElement ||
                                  f.parentNode ||
                                  f
                                ).scrollLeft);
                          f = a.toString() + "," + d;
                          b.b.hasOwnProperty(f)
                            ? (a = !1)
                            : ((b.b[f] = !0),
                              (a = a <= b.g.height && d <= b.g.width));
                        }
                      a && (b.a.push(e), (b.c[e] = !0));
                    }
                    y.prototype.checkImageForCriticality = function (b) {
                      b.getBoundingClientRect && z(this, b);
                    };
                    u(
                      "pagespeed.CriticalImages.checkImageForCriticality",
                      function (b) {
                        x.checkImageForCriticality(b);
                      }
                    );
                    u(
                      "pagespeed.CriticalImages.checkCriticalImages",
                      function () {
                        A(x);
                      }
                    );

                    function A(b) {
                      b.b = {};
                      for (
                        var c = ["IMG", "INPUT"], a = [], d = 0;
                        d < c.length;
                        ++d
                      )
                        a = a.concat(v(document.getElementsByTagName(c[d])));
                      if (a.length && a[0].getBoundingClientRect) {
                        for (d = 0; (c = a[d]); ++d) z(b, c);
                        a = "oh=" + b.l;
                        b.f && (a += "&n=" + b.f);
                        if ((c = !!b.a.length))
                          for (
                            a += "&ci=" + encodeURIComponent(b.a[0]), d = 1;
                            d < b.a.length;
                            ++d
                          ) {
                            var e = "," + encodeURIComponent(b.a[d]);
                            131072 >= a.length + e.length && (a += e);
                          }
                        b.i &&
                          ((e =
                            "&rd=" + encodeURIComponent(JSON.stringify(B()))),
                          131072 >= a.length + e.length && (a += e),
                          (c = !0));
                        C = a;
                        if (c) {
                          d = b.h;
                          b = b.j;
                          var f;
                          if (window.XMLHttpRequest) f = new XMLHttpRequest();
                          else if (window.ActiveXObject)
                            try {
                              f = new ActiveXObject("Msxml2.XMLHTTP");
                            } catch (r) {
                              try {
                                f = new ActiveXObject("Microsoft.XMLHTTP");
                              } catch (D) {}
                            }
                          f &&
                            (f.open(
                              "POST",
                              d +
                                (-1 == d.indexOf("?") ? "?" : "&") +
                                "url=" +
                                encodeURIComponent(b)
                            ),
                            f.setRequestHeader(
                              "Content-Type",
                              "application/x-www-form-urlencoded"
                            ),
                            f.send(a));
                        }
                      }
                    }

                    function B() {
                      var b = {},
                        c;
                      c = document.getElementsByTagName("IMG");
                      if (!c.length) return {};
                      var a = c[0];
                      if (!("naturalWidth" in a && "naturalHeight" in a))
                        return {};
                      for (var d = 0; (a = c[d]); ++d) {
                        var e = a.getAttribute("data-pagespeed-url-hash");
                        e &&
                          ((!(e in b) &&
                            0 < a.width &&
                            0 < a.height &&
                            0 < a.naturalWidth &&
                            0 < a.naturalHeight) ||
                            (e in b &&
                              a.width >= b[e].o &&
                              a.height >= b[e].m)) &&
                          (b[e] = {
                            rw: a.width,
                            rh: a.height,
                            ow: a.naturalWidth,
                            oh: a.naturalHeight,
                          });
                      }
                      return b;
                    }
                    var C = "";
                    u("pagespeed.CriticalImages.getBeaconData", function () {
                      return C;
                    });
                    u(
                      "pagespeed.CriticalImages.Run",
                      function (b, c, a, d, e, f) {
                        var r = new y(b, c, a, e, f);
                        x = r;
                        d &&
                          w(function () {
                            window.setTimeout(function () {
                              A(r);
                            }, 0);
                          });
                      }
                    );
                  })();

                  pagespeed.CriticalImages.Run(
                    "/mod_pagespeed_beacon",
                    "https://preview.colorlib.com/theme/medart/",
                    "-ilGEe-FWC",
                    true,
                    false,
                    "bbOYZuyyRTg"
                  );
                  //]]>
                </script>
                <img
                  class="d-block"
                  src="data:image/webp;base64,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"
                  alt="logo"
                  data-pagespeed-url-hash="3417948280"
                  onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
              /></a>
            </div>
            @php
            $current_page = substr($_SERVER['REQUEST_URI'], 1);  // trim off the leading slash
            $current_page = str_replace('.php', '', $current_page);  // trim off the extension
        @endphp
            <nav
              class="site-navigation d-flex justify-content-end align-items-center navbar navbar-expand-sm"
            >

              <ul
                class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center nav nav-pills"
              >
                <li class="{{ $current_page == '' ? 'nav-item current-menu-item': 'nav-item' }}">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="{{ $current_page == 'about-us' ? 'nav-item current-menu-item': 'nav-item' }}"><a class="nav-link" href="{{ route('about') }}">About us</a></li>
                <li class="{{ $current_page == 'services' ? 'nav-item current-menu-item': 'nav-item' }}"><a class="nav-link" href="{{ route('service') }}">Services</a></li>
                <li class="{{ $current_page == 'blogs' ? 'nav-item current-menu-item': 'nav-item' }}"><a class="nav-link" href="{{ route('blogs') }}">News</a></li>
                <li class="{{ $current_page == 'contact-us' ? 'nav-item current-menu-item': 'nav-item' }}"><a class="nav-link" href="{{ route('contact') }}">Contact us</a></li>

                @if (Route::has('login'))
                @auth
                @if (Auth::user()->utype === 'ADM')
                <li class="nav-item dropdown">
                  <a class=" nav-link dropdown-toggle " href="#"  data-bs-toggle="dropdown">My Account ({{ Auth::user()->name }})</a>
                  <ul class=" dropdown-menu">
                      <li class="dropdown-item"><a href="{{ route('admin.services') }}">Services</a></li>
                      <li class="dropdown-item"><a href="{{ route('admin.categories') }}">Difficulties</a></li>
                      <li class="dropdown-item"><a href="{{ route('admin.blogs') }}">Blogs</a></li>
                      <li class="dropdown-item"><a href="{{ route('admin.branches') }}">Branches</a></li>
                      <li class="dropdown-item"><a href="{{ route('admin.staffs') }}">Staffs</a></li>
                      <li class="dropdown-item"><a href="{{ route('admin.contact') }}">Contacts</a></li>
                      <li class="dropdown-item"><a href="{{ route('admin.orders') }}">Bookings</a></li>
                      <li class="dropdown-item"><a href="{{ route('admin.settings') }}">Settings</a></li>
                      <li class="dropdown-item" >
                          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
                      </li>
                      <form method="POST" id="logout-form" action="{{ route('logout') }}">
                          @csrf

                      </form>
                  </ul>
              </li>
                @else
                <li class="nav-item dropdown">
                  <a class=" nav-link dropdown-toggle " href="#"  data-bs-toggle="dropdown" >My Account ({{ Auth::user()->name }})</a>
                  <ul class=" dropdown-menu">
                      <li class="dropdown-item" >
                          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
                      </li>
                      <form method="POST" id="logout-form" action="{{ route('logout') }}">
                          @csrf

                      </form>
                  </ul>
              </li>
                @endif
                @else
                <li class="nav-item dropdown">
                  <a  href="{{ route('login') }}" class="nav-link dropdown-toggle"  data-bs-toggle="dropdown">Login</a>
                  <ul class="dropdown-menu">
                      <li class="dropdown-item"><a href="{{ route('login') }}">Login</a>
                      </li>
                      <li class="dropdown-item"><a href="{{ route('register') }}">Register</a></li>
                  </ul>
              </li>
                @endauth
                @endif
                <li class=" nav-item call-btn button gradient-bg mt-3 mt-md-0">
                    <a
                      class="d-flex justify-content-center align-items-center nav-link"
                      href="{{ route('booking') }}"
                      ><img
                        src="data:image/webp;base64,UklGRkgCAABXRUJQVlA4TDwCAAAvH8AHEG+loG0byfxJ39NuGOZ//g0mbZtb0hamyG3bBjmNDvobuDNgFgQAoAV4hEFBwFIQPkxg/4MvK8brirgp44QYXOUhIAsCy73n6AwzZavwAaEAIlvWl2vwQykrAom2tR1zc2Ym+FPHtm0bdWzbTurUbWzb5k3OfD8uIaL/Dty2cSRJ2/vu3SdQ1iK+5cP4xMfWREs06TR4eTLempXV+v/4atRVfc6y/bTRCZkOtSfdVgr76i3BbmbMFkVffJ53QDRq+zSP7hodapbvuwEQfJ4WcvgSLRYvPQYsFncd8D/MQ2bX6OioO4JDn4C60dp1R/wPc2UcVubvhSMo7YXheeFI7YYT/gcRMlxYkMH7SQp7gNpNZ5ratWB25j6SA1C7lX0aCZ0PRo08PDxsC02WLAUA0HeXipEqSZJ0WEhSqEjb3wtrAH4UYKIcmUEiOSvTMQDm108ELg8PDx2ZODw8EfE+7y0F4LswsvHy8jp2YSHTy0t89XY3r78BEHiSjpbDSNi2OQoFIEzeYVb0ugIVs+QuSyr9np2d9ZXzpQN+dqIwq+5qDNht1QJpzzUVdGAOOJtq8LHQ0p8iAJw3ayH6l8JGs+Y54QLJWxayf4Qp20JrMbOvU9mHb8DrKBIUK7M3zVbH/bv3wN9Yx1sUdNyoRdCtY/Zd/ZqDKT2oJ7NWKAOV1lVLWVABB7Vcx/pRbW3oKXJbbicfqcKzwZ1YBM3y96rM0GL8zsJwUVLJ4Nq8HxqVwgsGxrteBRgQBQ=="
                        data-pagespeed-url-hash="640029359"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"
                      />
                      MAKE APPOINTMENT
                      </a
                    >
                </li>
              </ul>
            </nav>
            <div class="hamburger-menu d-lg-none">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

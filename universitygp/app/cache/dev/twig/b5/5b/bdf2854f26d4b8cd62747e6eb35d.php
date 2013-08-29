<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_b55bbdf2854f26d4b8cd62747e6eb35d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  75 => 28,  66 => 25,  62 => 24,  50 => 15,  46 => 14,  42 => 12,  32 => 6,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  440 => 221,  436 => 220,  401 => 188,  394 => 183,  379 => 169,  375 => 168,  370 => 166,  367 => 165,  360 => 158,  357 => 157,  351 => 153,  348 => 152,  340 => 10,  336 => 9,  330 => 7,  327 => 6,  321 => 5,  316 => 226,  314 => 157,  311 => 156,  309 => 152,  289 => 135,  284 => 132,  278 => 130,  276 => 129,  273 => 127,  270 => 126,  263 => 119,  258 => 116,  252 => 113,  247 => 112,  241 => 109,  236 => 108,  230 => 105,  225 => 104,  219 => 101,  214 => 100,  208 => 97,  204 => 96,  199 => 94,  193 => 90,  186 => 85,  181 => 82,  179 => 81,  176 => 80,  163 => 70,  150 => 60,  138 => 54,  124 => 46,  120 => 44,  101 => 43,  90 => 42,  82 => 38,  79 => 29,  77 => 36,  70 => 26,  64 => 31,  61 => 30,  55 => 28,  53 => 27,  44 => 21,  35 => 14,  33 => 6,  29 => 5,  23 => 1,  156 => 79,  144 => 57,  139 => 71,  131 => 66,  127 => 47,  121 => 64,  117 => 63,  113 => 62,  109 => 61,  105 => 60,  99 => 59,  96 => 58,  92 => 57,  67 => 35,  38 => 9,  31 => 4,  28 => 3,);
    }
}

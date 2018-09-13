/*!
 * Bootstrap v3.3.6 (http://getbootstrap.com)
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 *//*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:700}dfn{font-style:italic}h1{margin:.67em 0;font-size:2em}mark{color:#000;background:#ff0}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{height:0;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{margin:0;font:inherit;color:inherit}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}input[type=checkbox],input[type=radio]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-appearance:textfield}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}fieldset{padding:.35em .625em .75em;margin:0 2px;border:1px solid silver}legend{padding:0;border:0}textarea{overflow:auto}optgroup{font-weight:700}table{border-spacing:0;border-collapse:collapse}td,th{padding:0}/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */@media print{*,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;-webkit-box-shadow:none!important;box-shadow:none!important}a,a:visited{text-decoration:underline}a[href]:after{content:" (" attr(href) ")"}abbr[title]:after{content:" (" attr(title) ")"}a[href^="javascript:"]:after,a[href^="#"]:after{content:""}blockquote,pre{border:1px solid #999;page-break-inside:avoid}thead{display:table-header-group}img,tr{page-break-inside:avoid}img{max-width:100%!important}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}.navbar{display:none}.btn>.caret,.dropup>.btn>.caret{border-top-color:#000!important}.label{border:1px solid #000}.table{border-collapse:collapse!important}.table td,.table th{background-color:#fff!important}.table-bordered td,.table-bordered th{border:1px solid #ddd!important}}@font-face{font-family:'Glyphicons Halflings';src:url(../fonts/glyphicons-halflings-regular.eot);src:url(../fonts/glyphicons-halflings-regular.eot?#iefix) format('embedded-opentype'),url(../fonts/glyphicons-halflings-regular.woff2) format('woff2'),url(../fonts/glyphicons-halflings-regular.woff) format('woff'),url(../fonts/glyphicons-halflings-regular.ttf) format('truetype'),url(../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format('svg')}.glyphicon{position:relative;top:1px;display:inline-block;font-family:'Glyphicons Halflings';font-style:normal;font-weight:400;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.glyphicon-asterisk:before{content:"\002a"}.glyphicon-plus:before{content:"\002b"}.glyphicon-eur:before,.glyphicon-euro:before{content:"\20ac"}.glyphicon-minus:before{content:"\2212"}.glyphicon-cloud:before{content:"\2601"}.glyphicon-envelope:before{content:"\2709"}.glyphicon-pencil:before{content:"\270f"}.glyphicon-glass:before{content:"\e001"}.glyphicon-music:before{content:"\e002"}.glyphicon-search:before{content:"\e003"}.glyphicon-heart:before{content:"\e005"}.glyphicon-star:before{content:"\e006"}.glyphicon-star-empty:before{content:"\e007"}.glyphicon-user:before{content:"\e008"}.glyphicon-film:before{content:"\e009"}.glyphicon-th-large:before{content:"\e010"}.glyphicon-th:before{content:"\e011"}.glyphicon-th-list:before{content:"\e012"}.glyphicon-ok:before{content:"\e013"}.glyphicon-remove:before{content:"\e014"}.glyphicon-zoom-in:before{content:"\e015"}.glyphicon-zoom-out:before{content:"\e016"}.glyphicon-off:before{content:"\e017"}.glyphicon-signal:before{content:"\e018"}.glyphicon-cog:before{content:"\e019"}.glyphicon-trash:before{content:"\e020"}.glyphicon-home:before{content:"\e021"}.glyphicon-file:before{content:"\e022"}.glyphicon-time:before{content:"\e023"}.glyphicon-road:before{content:"\e024"}.glyphicon-download-alt:before{content:"\e025"}.glyphicon-download:before{content:"\e026"}.glyphicon-upload:before{content:"\e027"}.glyphicon-inbox:before{content:"\e028"}.glyphicon-play-circle:before{content:"\e029"}.glyphicon-repeat:before{content:"\e030"}.glyphicon-refresh:before{content:"\e031"}.glyphicon-list-alt:before{content:"\e032"}.glyphicon-lock:before{content:"\e033"}.glyphicon-flag:before{content:"\e034"}.glyphicon-headphones:before{content:"\e035"}.glyphicon-volume-off:before{content:"\e036"}.glyphicon-volume-down:before{content:"\e037"}.glyphicon-volume-up:before{content:"\e038"}.glyphicon-qrcode:before{content:"\e039"}.glyphicon-barcode:before{content:"\e040"}.glyphicon-tag:before{content:"\e041"}.glyphicon-tags:before{content:"\e042"}.glyphicon-book:before{content:"\e043"}.glyphicon-bookmark:before{content:"\e044"}.glyphicon-print:before{content:"\e045"}.glyphicon-camera:before{content:"\e046"}.glyphicon-font:before{content:"\e047"}.glyphicon-bold:before{content:"\e048"}.glyphicon-italic:before{content:"\e049"}.glyphicon-text-height:before{content:"\e050"}.glyphicon-text-width:before{content:"\e051"}.glyphicon-align-left:before{content:"\e052"}.glyphicon-align-center:before{content:"\e053"}.glyphicon-align-right:before{content:"\e054"}.glyphicon-align-justify:before{content:"\e055"}.glyphicon-list:before{content:"\e056"}.glyphicon-indent-left:before{content:"\e057"}.glyphicon-indent-right:before{content:"\e058"}.glyphicon-facetime-video:before{content:"\e059"}.glyphicon-picture:before{content:"\e060"}.glyphicon-map-marker:before{content:"\e062"}.glyphicon-adjust:before{content:"\e063"}.glyphicon-tint:before{content:"\e064"}.glyphicon-edit:before{content:"\e065"}.glyphicon-share:before{content:"\e066"}.glyphicon-check:before{content:"\e067"}.glyphicon-move:before{content:"\e068"}.glyphicon-step-backward:before{content:"\e069"}.glyphicon-fast-backward:before{content:"\e070"}.glyphicon-backward:before{content:"\e071"}.glyphicon-play:before{content:"\e072"}.glyphicon-pause:before{content:"\e073"}.glyphicon-stop:before{content:"\e074"}.glyphicon-forward:before{content:"\e075"}.glyphicon-fast-forward:before{content:"\e076"}.glyphicon-step-forward:before{content:"\e077"}.glyphicon-eject:before{content:"\e078"}.glyphicon-chevron-left:before{content:"\e079"}.glyphicon-chevron-right:before{content:"\e080"}.glyphicon-plus-sign:before{content:"\e081"}.glyphicon-minus-sign:before{content:"\e082"}.glyphicon-remove-sign:before{content:"\e083"}.glyphicon-ok-sign:before{content:"\e084"}.glyphicon-question-sign:before{content:"\e085"}.glyphicon-info-sign:before{content:"\e086"}.glyphicon-screenshot:before{content:"\e087"}.glyphicon-remove-circle:before{content:"\e088"}.glyphicon-ok-circle:before{content:"\e089"}.glyphicon-ban-circle:before{content:"\e090"}.glyphicon-arrow-left:before{content:"\e091"}.glyphicon-arrow-right:before{content:"\e092"}.glyphicon-arrow-up:before{content:"\e093"}.glyphicon-arrow-down:before{content:"\e094"}.glyphicon-share-alt:before{content:"\e095"}.glyphicon-resize-full:before{content:"\e096"}.glyphicon-resize-small:before{content:"\e097"}.glyphicon-exclamation-sign:before{content:"\e101"}.glyphicon-gift:before{content:"\e102"}.glyphicon-leaf:before{content:"\e103"}.glyphicon-fire:before{content:"\e104"}.glyphicon-eye-open:before{content:"\e105"}.glyphicon-eye-close:before{content:"\e106"}.glyphicon-warning-sign:before{content:"\e107"}.glyphicon-plane:before{content:"\e108"}.glyphicon-calendar:before{content:"\e109"}.glyphicon-random:before{content:"\e110"}.glyphicon-comment:before{content:"\e111"}.glyphicon-magnet:before{content:"\e112"}.glyphicon-chevron-up:before{content:"\e113"}.glyphicon-chevron-down:before{content:"\e114"}.glyphicon-retweet:before{content:"\e115"}.glyphicon-shopping-cart:before{content:"\e116"}.glyphicon-folder-close:before{content:"\e117"}.glyphicon-folder-open:before{content:"\e118"}.glyphicon-resize-vertical:before{content:"\e119"}.glyphicon-resize-horizontal:before{content:"\e120"}.glyphicon-hdd:before{content:"\e121"}.glyphicon-bullhorn:before{content:"\e122"}.glyphicon-bell:before{content:"\e123"}.glyphicon-certificate:before{content:"\e124"}.glyphicon-thumbs-up:before{content:"\e125"}.glyphicon-thumbs-down:before{content:"\e126"}.glyphicon-hand-right:before{content:"\e127"}.glyphicon-hand-left:before{content:"\e128"}.glyphicon-hand-up:before{content:"\e129"}.glyphicon-hand-down:before{content:"\e130"}.glyphicon-circle-arrow-right:before{content:"\e131"}.glyphicon-circle-arrow-left:before{content:"\e132"}.glyphicon-circle-arrow-up:before{content:"\e133"}.glyphicon-circle-arrow-down:before{content:"\e134"}.glyphicon-globe:before{content:"\e135"}.glyphicon-wrench:before{content:"\e136"}.glyphicon-tasks:before{content:"\e137"}.glyphicon-filter:before{content:"\e138"}.glyphicon-briefcase:before{content:"\e139"}.glyphicon-fullscreen:before{content:"\e140"}.glyphicon-dashboard:before{content:"\e141"}.glyphicon-paperclip:before{content:"\e142"}.glyphicon-heart-empty:before{content:"\e143"}.glyphicon-link:before{content:"\e144"}.glyphicon-phone:before{content:"\e145"}.glyphicon-pushpin:before{content:"\e146"}.glyphicon-usd:before{content:"\e148"}.glyphicon-gbp:before{content:"\e149"}.glyphicon-sort:before{content:"\e150"}.glyphicon-sort-by-alphabet:before{content:"\e151"}.glyphicon-sort-by-alphabet-alt:before{content:"\e152"}.glyphicon-sort-by-order:before{content:"\e153"}.glyphicon-sort-by-order-alt:before{content:"\e154"}.glyphicon-sort-by-attributes:before{content:"\e155"}.glyphicon-sort-by-attributes-alt:before{content:"\e156"}.glyphicon-unchecked:before{content:"\e157"}.glyphicon-expand:before{content:"\e158"}.glyphicon-collapse-down:before{content:"\e159"}.glyphicon-collapse-up:before{content:"\e160"}.glyphicon-log-in:before{content:"\e161"}.glyphicon-flash:before{content:"\e162"}.glyphicon-log-out:before{content:"\e163"}.glyphicon-new-window:before{content:"\e164"}.glyphicon-record:before{content:"\e165"}.glyphicon-save:before{content:"\e166"}.glyphicon-open:before{content:"\e167"}.glyphicon-saved:before{content:"\e168"}.glyphicon-import:before{content:"\e169"}.glyphicon-export:before{content:"\e170"}.glyphicon-send:before{content:"\e171"}.glyphicon-floppy-disk:before{content:"\e172"}.glyphicon-floppy-saved:before{content:"\e173"}.glyphicon-floppy-remove:before{content:"\e174"}.glyphicon-floppy-save:before{content:"\e175"}.glyphicon-floppy-open:before{content:"\e176"}.glyphicon-credit-card:before{content:"\e177"}.glyphicon-transfer:before{content:"\e178"}.glyphicon-cutlery:before{content:"\e179"}.glyphicon-header:before{content:"\e180"}.glyphicon-compressed:before{content:"\e181"}.glyphicon-earphone:before{content:"\e182"}.glyphicon-phone-alt:before{content:"\e183"}.glyphicon-tower:before{content:"\e184"}.glyphicon-stats:before{content:"\e185"}.glyphicon-sd-video:before{content:"\e186"}.glyphicon-hd-video:before{content:"\e187"}.glyphicon-subtitles:before{content:"\e188"}.glyphicon-sound-stereo:before{content:"\e189"}.glyphicon-sound-dolby:before{content:"\e190"}.glyphicon-sound-5-1:before{content:"\e191"}.glyphicon-sound-6-1:before{content:"\e192"}.glyphicon-sound-7-1:before{content:"\e193"}.glyphicon-copyright-mark:before{content:"\e194"}.glyphicon-registration-mark:before{content:"\e195"}.glyphicon-cloud-download:before{content:"\e197"}.glyphicon-cloud-upload:before{content:"\e198"}.glyphicon-tree-conifer:before{content:"\e199"}.glyphicon-tree-deciduous:before{content:"\e200"}.glyphicon-cd:before{content:"\e201"}.glyphicon-save-file:before{content:"\e202"}.glyphicon-open-file:before{content:"\e203"}.glyphicon-level-up:before{content:"\e204"}.glyphicon-copy:before{content:"\e205"}.glyphicon-paste:before{content:"\e206"}.glyphicon-alert:before{content:"\e209"}.glyphicon-equalizer:before{content:"\e210"}.glyphicon-king:before{content:"\e211"}.glyphicon-queen:before{content:"\e212"}.glyphicon-pawn:before{content:"\e213"}.glyphicon-bishop:before{content:"\e214"}.glyphicon-knight:before{content:"\e215"}.glyphicon-baby-formula:before{content:"\e216"}.glyphicon-tent:before{content:"\26fa"}.glyphicon-blackboard:before{content:"\e218"}.glyphicon-bed:before{content:"\e219"}.glyphicon-apple:before{content:"\f8ff"}.glyphicon-erase:before{content:"\e221"}.glyphicon-hourglass:before{content:"\231b"}.glyphicon-lamp:before{content:"\e223"}.glyphicon-duplicate:before{content:"\e224"}.glyphicon-piggy-bank:before{content:"\e225"}.glyphicon-scissors:before{content:"\e226"}.glyphicon-bitcoin:before{content:"\e227"}.glyphicon-btc:before{content:"\e227"}.glyphicon-xbt:before{content:"\e227"}.glyphicon-yen:before{content:"\00a5"}.glyphicon-jpy:before{content:"\00a5"}.glyphicon-ruble:before{content:"\20bd"}.glyphicon-rub:before{content:"\20bd"}.glyphicon-scale:before{content:"\e230"}.glyphicon-ice-lolly:before{content:"\e231"}.glyphicon-ice-lolly-tasted:before{content:"\e232"}.glyphicon-education:before{content:"\e233"}.glyphicon-option-horizontal:before{content:"\e234"}.glyphicon-option-vertical:before{content:"\e235"}.glyphicon-menu-hamburger:before{content:"\e236"}.glyphicon-modal-window:before{content:"\e237"}.glyphicon-oil:before{content:"\e238"}.glyphicon-grain:before{content:"\e239"}.glyphicon-sunglasses:before{content:"\e240"}.glyphicon-text-size:before{content:"\e241"}.glyphicon-text-color:before{content:"\e242"}.glyphicon-text-background:before{content:"\e243"}.glyphicon-object-align-top:before{content:"\e244"}.glyphicon-object-align-bottom:before{content:"\e245"}.glyphicon-object-align-horizontal:before{content:"\e246"}.glyphicon-object-align-left:before{content:"\e247"}.glyphicon-object-align-vertical:before{content:"\e248"}.glyphicon-object-align-right:before{content:"\e249"}.glyphicon-triangle-right:before{content:"\e250"}.glyphicon-triangle-left:before{content:"\e251"}.glyphicon-triangle-bottom:before{content:"\e252"}.glyphicon-triangle-top:before{content:"\e253"}.glyphicon-console:before{content:"\e254"}.glyphicon-superscript:before{content:"\e255"}.glyphicon-subscript:before{content:"\e256"}.glyphicon-menu-left:before{content:"\e257"}.glyphicon-menu-right:before{content:"\e258"}.glyphicon-menu-down:before{content:"\e259"}.glyphicon-menu-up:before{content:"\e260"}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:rgba(0,0,0,0)}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}button,input,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#337ab7;text-decoration:none}a:focus,a:hover{color:#23527c;text-decoration:underline}a:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}figure{margin:0}img{vertical-align:middle}.carousel-inner>.item>a>img,.carousel-inner>.item>img,.img-responsive,.thumbnail a>img,.thumbnail>img{display:block;max-width:100%;height:auto}.img-rounded{border-radius:6px}.img-thumbnail{display:inline-block;max-width:100%;height:auto;padding:4px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out}.img-circle{border-radius:50%}hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}[role=button]{cursor:pointer}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}.h1 .small,.h1 small,.h2 .small,.h2 small,.h3 .small,.h3 small,.h4 .small,.h4 small,.h5 .small,.h5 small,.h6 .small,.h6 small,h1 .small,h1 small,h2 .small,h2 small,h3 .small,h3 small,h4 .small,h4 small,h5 .small,h5 small,h6 .small,h6 small{font-weight:400;line-height:1;color:#777}.h1,.h2,.h3,h1,h2,h3{margin-top:20px;margin-bottom:10px}.h1 .small,.h1 small,.h2 .small,.h2 small,.h3 .small,.h3 small,h1 .small,h1 small,h2 .small,h2 small,h3 .small,h3 small{font-size:65%}.h4,.h5,.h6,h4,h5,h6{margin-top:10px;margin-bottom:10px}.h4 .small,.h4 small,.h5 .small,.h5 small,.h6 .small,.h6 small,h4 .small,h4 small,h5 .small,h5 small,h6 .small,h6 small{font-size:75%}.h1,h1{font-size:36px}.h2,h2{font-size:30px}.h3,h3{font-size:24px}.h4,h4{font-size:18px}.h5,h5{font-size:14px}.h6,h6{font-size:12px}p{margin:0 0 10px}.lead{margin-bottom:20px;font-size:16px;font-weight:300;line-height:1.4}@media (min-width:768px){.lead{font-size:21px}}.small,small{font-size:85%}.mark,mark{padding:.2em;background-color:#fcf8e3}.text-left{text-align:left}.text-right{text-align:right}.text-center{text-align:center}.text-justify{text-align:justify}.text-nowrap{white-space:nowrap}.text-lowercase{text-transform:lowercase}.text-uppercase{text-transform:uppercase}.text-capitalize{text-transform:capitalize}.text-muted{color:#777}.text-primary{color:#337ab7}a.text-primary:focus,a.text-primary:hover{color:#286090}.text-success{color:#3c763d}a.text-success:focus,a.text-success:hover{color:#2b542c}.text-info{color:#31708f}a.text-info:focus,a.text-info:hover{color:#245269}.text-warning{color:#8a6d3b}a.text-warning:focus,a.text-warning:hover{color:#66512c}.text-danger{color:#a94442}a.text-danger:focus,a.text-danger:hover{color:#843534}.bg-primary{color:#fff;background-color:#337ab7}a.bg-primary:focus,a.bg-primary:hover{background-color:#286090}.bg-success{background-color:#dff0d8}a.bg-success:focus,a.bg-success:hover{background-color:#c1e2b3}.bg-info{background-color:#d9edf7}a.bg-info:focus,a.bg-info:hover{background-color:#afd9ee}.bg-warning{background-color:#fcf8e3}a.bg-warning:focus,a.bg-warning:hover{background-color:#f7ecb5}.bg-danger{background-color:#f2dede}a.bg-danger:focus,a.bg-danger:hover{background-color:#e4b9b9}.page-header{padding-bottom:9px;margin:40px 0 20px;border-bottom:1px solid #eee}ol,ul{margin-top:0;margin-bottom:10px}ol ol,ol ul,ul ol,ul ul{margin-top:11.35px}.list-unstyled{padding-left:0;list-style:none}.list-inline{padding-left:0;margin-left:-5px;list-style:none}.list-inline>li{display:inline-block;padding-right:5px;padding-left:5px}dl{margin-top:0;margin-bottom:20px}dd,dt{line-height:1.42857143}dt{font-weight:700}dd{margin-left:0}@media (min-width:768px){.dl-horizontal dt{float:left;width:160px;overflow:hidden;clear:left;text-align:right;text-overflow:ellipsis;white-space:nowrap}.dl-horizontal dd{margin-left:180px}}abbr[data-original-title],abbr[title]{cursor:help;border-bottom:1px dotted #777}.initialism{font-size:90%;text-transform:uppercase}blockquote{padding:10px 20px;margin:0 0 20px;font-size:17.5px;border-left:5px solid #eee}blockquote ol:last-child,blockquote p:last-child,blockquote ul:last-child{margin-bottom:0}blockquote .small,blockquote footer,blockquote small{display:block;font-size:80%;line-height:1.42857143;color:#777}blockquote .small:before,blockquote footer:before,blockquote small:before{content:'\2014 \00A0'}.blockquote-reverse,blockquote.pull-right{padding-right:15px;padding-left:0;text-align:right;border-right:5px solid #eee;border-left:0}.blockquote-reverse .small:before,.blockquote-reverse footer:before,.blockquote-reverse small:before,blockquote.pull-right .small:before,blockquote.pull-right footer:before,blockquote.pull-right small:before{content:''}.blockquote-reverse .small:after,.blockquote-reverse footer:after,.blockquote-reverse small:after,blockquote.pull-right .small:after,blockquote.pull-right footer:after,blockquote.pull-right small:after{content:'\00A0 \2014'}address{margin-bottom:20px;font-style:normal;line-height:1.42857143}code,kbd,pre,samp{font-family:Menlo,Monaco,Consolas,"Courier New",monospace}code{padding:2px 4px;font-size:90%;color:#c7254e;background-color:#f9f2f4;border-radius:4px}kbd{padding:2px 4px;font-size:90%;color:#fff;background-color:#333;border-radius:3px;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,.25);box-shadow:inset 0 -1px 0 rgba(0,0,0,.25)}kbd kbd{padding:0;font-size:100%;font-weight:700;-webkit-box-shadow:none;box-shadow:none}pre{display:block;padding:9.5px;margin:0 0 10px;font-size:13px;line-height:1.42857143;color:#333;word-break:break-all;word-wrap:break-word;background-color:#f5f5f5;border:1px solid #ccc;border-radius:4px}pre code{padding:0;font-size:inherit;color:inherit;white-space:pre-wrap;background-color:transparent;border-radius:0}.pre-scrollable{max-height:340px;overflow-y:scroll}.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.container-fluid{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.row{margin-right:-15px;margin-left:-15px}.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{position:relative;min-height:1px;padding-right:15px;padding-left:15px}.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}.col-xs-pull-12{right:100%}.col-xs-pull-11{right:91.66666667%}.col-xs-pull-10{right:83.33333333%}.col-xs-pull-9{right:75%}.col-xs-pull-8{right:66.66666667%}.col-xs-pull-7{right:58.33333333%}.col-xs-pull-6{right:50%}.col-xs-pull-5{right:41.66666667%}.col-xs-pull-4{right:33.33333333%}.col-xs-pull-3{right:25%}.col-xs-pull-2{right:16.66666667%}.col-xs-pull-1{right:8.33333333%}.col-xs-pull-0{right:auto}.col-xs-push-12{left:100%}.col-xs-push-11{left:91.66666667%}.col-xs-push-10{left:83.33333333%}.col-xs-push-9{left:75%}.col-xs-push-8{left:66.66666667%}.col-xs-push-7{left:58.33333333%}.col-xs-push-6{left:50%}.col-xs-push-5{left:41.66666667%}.col-xs-push-4{left:33.33333333%}.col-xs-push-3{left:25%}.col-xs-push-2{left:16.66666667%}.col-xs-push-1{left:8.33333333%}.col-xs-push-0{left:auto}.col-xs-offset-12{margin-left:100%}.col-xs-offset-11{margin-left:91.66666667%}.col-xs-offset-10{margin-left:83.33333333%}.col-xs-offset-9{margin-left:75%}.col-xs-offset-8{margin-left:66.66666667%}.col-xs-offset-7{margin-left:58.33333333%}.col-xs-offset-6{margin-left:50%}.col-xs-offset-5{margin-left:41.66666667%}.col-xs-offset-4{margin-left:33.33333333%}.col-xs-offset-3{margin-left:25%}.col-xs-offset-2{margin-left:16.66666667%}.col-xs-offset-1{margin-left:8.33333333%}.col-xs-offset-0{margin-left:0}@media (min-width:768px){.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:auto}.col-sm-push-12{left:100%}.col-sm-push-11{left:91.66666667%}.col-sm-push-10{left:83.33333333%}.col-sm-push-9{left:75%}.col-sm-push-8{left:66.66666667%}.col-sm-push-7{left:58.33333333%}.col-sm-push-6{left:50%}.col-sm-push-5{left:41.66666667%}.col-sm-push-4{left:33.33333333%}.col-sm-push-3{left:25%}.col-sm-push-2{left:16.66666667%}.col-sm-push-1{left:8.33333333%}.col-sm-push-0{left:auto}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.66666667%}.col-sm-offset-10{margin-left:83.33333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.66666667%}.col-sm-offset-7{margin-left:58.33333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.66666667%}.col-sm-offset-4{margin-l<eft:33.33333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}.col-sm-offset-0{margin-left:0}}@media (min-width:992px){.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9{float:left}.col-md-12{width:100%}.col-md-11{width:91.66666667%}.col-md-10{width:83.33333333%}.col-md-9{width:75%}.col-md-8{width:66.66666667%}.col-md-7{width:58.33333333%}.col-md-6{width:50%}.col-md-5{width:25%}.col-md-4{width:33.33333333%}.col-md-3{width:25%}.col-md-2{width:16.66666667%}.col-md-1{width:8.33333333%}.col-md-pull-12{right:100%}.col-md-pull-11{right:91.66666667%}.col-md-pull-10{right:83.33333333%}.col-md-pull-9{right:75%}.col-md-pull-8{right:66.66666667%}.col-md-pull-7{right:58.33333333%}.col-md-pull-6{right:50%}.col-md-pull-5{right:41.66666667%}.col-md-pull-4{right:33.33333333%}.col-md-pull-3{right:25%}.col-md-pull-2{right:16.66666667%}.col-md-pull-1{right:8.33333333%}.col-md-pull-0{right:auto}.col-md-push-12{left:100%}.col-md-push-11{left:91.66666667%}.col-md-push-10{left:83.33333333%}.col-md-push-9{left:75%}.col-md-push-8{left:66.66666667%}.col-md-push-7{left:58.33333333%}.col-md-push-6{left:50%}.col-md-push-5{left:41.66666667%}.col-md-push-4{left:33.33333333%}.col-md-push-3{left:25%}.col-md-push-2{left:16.66666667%}.col-md-push-1{left:8.33333333%}.col-md-push-0{left:auto}.col-md-offset-12{margin-left:100%}.col-md-offset-11{margin-left:91.66666667%}.col-md-offset-10{margin-left:83.33333333%}.col-md-offset-9{margin-left:75%}.col-md-offset-8{margin-left:66.66666667%}.col-md-offset-7{margin-left:58.33333333%}.col-md-offset-6{margin-left:50%}.col-md-offset-5{margin-left:41.66666667%}.col-md-offset-4{margin-left:33.33333333%}.col-md-offset-3{margin-left:25%}.col-md-offset-2{margin-left:16.66666667%}.col-md-offset-1{margin-left:8.33333333%}.col-md-offset-0{margin-left:0}}@media (min-width:1200px){.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.66666667%}.col-lg-pull-10{right:83.33333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.66666667%}.col-lg-pull-7{right:58.33333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.66666667%}.col-lg-pull-4{right:33.33333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.66666667%}.col-lg-pull-1{right:8.33333333%}.col-lg-pull-0{right:auto}.col-lg-push-12{left:100%}.col-lg-push-11{left:91.66666667%}.col-lg-push-10{left:83.33333333%}.col-lg-push-9{left:75%}.col-lg-push-8{left:66.66666667%}.col-lg-push-7{left:58.33333333%}.col-lg-push-6{left:50%}.col-lg-push-5{left:41.66666667%}.col-lg-push-4{left:33.33333333%}.col-lg-push-3{left:25%}.col-lg-push-2{left:16.66666667%}.col-lg-push-1{left:8.33333333%}.col-lg-push-0{left:auto}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.66666667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0}}table{background-color:transparent}caption{padding-top:8px;padding-bottom:8px;color:#777;text-align:left}th{text-align:left}.table{width:100%;max-width:100%;margin-bottom:20px}.table>tbody>tr>td,.table>tbody>tr>th,.table>tfoot>tr>td,.table>tfoot>tr>th,.table>thead>tr>td,.table>thead>tr>th{padding:8px;line-height:1.42857143;vertical-align:top;border-top:1px solid #ddd}.table>thead>tr>th{vertical-align:bottom;border-bottom:2px solid #ddd}.table>caption+thead>tr:first-child>td,.table>caption+thead>tr:first-child>th,.table>colgroup+thead>tr:first-child>td,.table>colgroup+thead>tr:first-child>th,.table>thead:first-child>tr:first-child>td,.table>thead:first-child>tr:first-child>th{border-top:0}.table>tbody+tbody{border-top:2px solid #ddd}.table .table{background-color:#fff}.table-condensed>tbody>tr>td,.table-condensed>tbody>tr>th,.table-condensed>tfoot>tr>td,.table-condensed>tfoot>tr>th,.table-condensed>thead>tr>td,.table-condensed>thead>tr>th{padding:5px}.table-bordered{border:1px solid #ddd}.table-bordered>tbody>tr>td,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>td,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>thead>tr>th{border:1px solid #ddd}.table-bordered>thead>tr>td,.table-bordered>thead>tr>th{border-bottom-width:2px}.table-striped>tbody>tr:nth-of-type(odd){background-color:#f9f9f9}.table-hover>tbody>tr:hover{background-color:#f5f5f5}table col[class*=col-]{position:static;display:table-column;float:none}table td[class*=col-],table th[class*=col-]{position:static;display:table-cell;float:none}.table>tbody>tr.active>td,.table>tbody>tr.active>th,.table>tbody>tr>td.active,.table>tbody>tr>th.active,.table>tfoot>tr.active>td,.table>tfoot>tr.active>th,.table>tfoot>tr>td.active,.table>tfoot>tr>th.active,.table>thead>tr.active>td,.table>thead>tr.active>th,.table>thead>tr>td.active,.table>thead>tr>th.active{background-color:#f5f5f5}.table-hover>tbody>tr.active:hover>td,.table-hover>tbody>tr.active:hover>th,.table-hover>tbody>tr:hover>.active,.table-hover>tbody>tr>td.active:hover,.table-hover>tbody>tr>th.active:hover{background-color:#e8e8e8}.table>tbody>tr.success>td,.table>tbody>tr.success>th,.table>tbody>tr>td.success,.table>tbody>tr>th.success,.table>tfoot>tr.success>td,.table>tfoot>tr.success>th,.table>tfoot>tr>td.success,.table>tfoot>tr>th.success,.table>thead>tr.success>td,.table>thead>tr.success>th,.table>thead>tr>td.success,.table>thead>tr>th.success{background-color:#dff0d8}.table-hover>tbody>tr.success:hover>td,.table-hover>tbody>tr.success:hover>th,.table-hover>tbody>tr:hover>.success,.table-hover>tbody>tr>td.success:hover,.table-hover>tbody>tr>th.success:hover{background-color:#d0e9c6}.table>tbody>tr.info>td,.table>tbody>tr.info>th,.table>tbody>tr>td.info,.table>tbody>tr>th.info,.table>tfoot>tr.info>td,.table>tfoot>tr.info>th,.table>tfoot>tr>td.info,.table>tfoot>tr>th.info,.table>thead>tr.info>td,.table>thead>tr.info>th,.table>thead>tr>td.info,.table>thead>tr>th.info{background-color:#d9edf7}.table-hover>tbody>tr.info:hover>td,.table-hover>tbody>tr.info:hover>th,.table-hover>tbody>tr:hover>.info,.table-hover>tbody>tr>td.info:hover,.table-hover>tbody>tr>th.info:hover{background-color:#c4e3f3}.table>tbody>tr.warning>td,.table>tbody>tr.warning>th,.table>tbody>tr>td.warning,.table>tbody>tr>th.warning,.table>tfoot>tr.warning>td,.table>tfoot>tr.warning>th,.table>tfoot>tr>td.warning,.table>tfoot>tr>th.warning,.table>thead>tr.warning>td,.table>thead>tr.warning>th,.table>thead>tr>td.warning,.table>thead>tr>th.warning{background-color:#fcf8e3}.table-hover>tbody>tr.warning:hover>td,.table-hover>tbody>tr.warning:hover>th,.table-hover>tbody>tr:hover>.warning,.table-hover>tbody>tr>td.warning:hover,.table-hover>tbody>tr>th.warning:hover{background-color:#faf2cc}.table>tbody>tr.danger>td,.table>tbody>tr.danger>th,.table>tbody>tr>td.danger,.table>tbody>tr>th.danger,.table>tfoot>tr.danger>td,.table>tfoot>tr.danger>th,.table>tfoot>tr>td.danger,.table>tfoot>tr>th.danger,.table>thead>tr.danger>td,.table>thead>tr.danger>th,.table>thead>tr>td.danger,.table>thead>tr>th.danger{background-color:#f2dede}.table-hover>tbody>tr.danger:hover>td,.table-hover>tbody>tr.danger:hover>th,.table-hover>tbody>tr:hover>.danger,.table-hover>tbody>tr>td.danger:hover,.table-hover>tbody>tr>th.danger:hover{background-color:#ebcccc}.table-responsive{min-height:.01%;overflow-x:auto}@media screen and (max-width:767px){.table-responsive{width:100%;margin-bottom:15px;overflow-y:hidden;-ms-overflow-style:-ms-autohiding-scrollbar;border:1px solid #ddd}.table-responsive>.table{margin-bottom:0}.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>td,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>thead>tr>th{white-space:nowrap}.table-responsive>.table-bordered{border:0}.table-responsive>.table-bordered>tbody>tr>td:first-child,.table-responsive>.table-bordered>tbody>tr>th:first-child,.table-responsive>.table-bordered>tfoot>tr>td:first-child,.table-responsive>.table-bordered>tfoot>tr>th:first-child,.table-responsive>.table-bordered>thead>tr>td:first-child,.table-responsive>.table-bordered>thead>tr>th:first-child{border-left:0}.table-responsive>.table-bordered>tbody>tr>td:last-child,.table-responsive>.table-bordered>tbody>tr>th:last-child,.table-responsive>.table-bordered>tfoot>tr>td:last-child,.table-responsive>.table-bordered>tfoot>tr>th:last-child,.table-responsive>.table-bordered>thead>tr>td:last-child,.table-responsive>.table-bordered>thead>tr>th:last-child{border-right:0}.table-responsive>.table-bordered>tbody>tr:last-child>td,.table-responsive>.table-bordered>tbody>tr:last-child>th,.table-responsive>.table-bordered>tfoot>tr:last-child>td,.table-responsive>.table-bordered>tfoot>tr:last-child>th{border-bottom:0}}fieldset{min-width:0;padding:0;margin:0;border:0}legend{display:block;width:100%;padding:0;margin-bottom:20px;font-size:21px;line-height:inherit;color:#333;border:0;border-bottom:1px solid #e5e5e5}label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700}input[type=search]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}input[type=checkbox],input[type=radio]{margin:4px 0 0;margin-top:1px\9;line-height:normal}input[type=file]{display:block}input[type=range]{display:block;width:100%}select[multiple],select[size]{height:auto}input[type=file]:focus,input[type=checkbox]:focus,input[type=radio]:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}output{display:block;padding-top:7px;font-size:14px;line-height:1.42857143;color:#555}.form-control{display:block;width:100%;height:34px;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s}.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)}.form-control::-moz-placeholder{color:#999;opacity:1}.form-control:-ms-input-placeholder{color:#999}.form-control::-webkit-input-placeholder{color:#999}.form-control::-ms-expand{background-color:transparent;border:0}.form-control[disabled],.form-control[readonly],fieldset[disabled] .form-control{background-color:#eee;opacity:1}.form-control[disabled],fieldset[disabled] .form-control{cursor:not-allowed}textarea.form-control{height:auto}input[type=search]{-webkit-appearance:none}@media screen and (-webkit-min-device-pixel-ratio:0){input[type=date].form-control,input[type=time].form-control,input[type=datetime-local].form-control,input[type=month].form-control{line-height:34px}.input-group-sm input[type=date],.input-group-sm input[type=time],.input-group-sm input[type=datetime-local],.input-group-sm input[type=month],input[type=date].input-sm,input[type=time].input-sm,input[type=datetime-local].input-sm,input[type=month].input-sm{line-height:30px}.input-group-lg input[type=date],.input-group-lg input[type=time],.input-group-lg input[type=datetime-local],.input-group-lg input[type=month],input[type=date].input-lg,input[type=time].input-lg,input[type=datetime-local].input-lg,input[type=month].input-lg{line-height:46px}}.form-group{margin-bottom:15px}.checkbox,.radio{position:relative;display:block;margin-top:10px;margin-bottom:10px}.checkbox label,.radio label{min-height:20px;padding-left:20px;margin-bottom:0;font-weight:400;cursor:pointer}.checkbox input[type=checkbox],.checkbox-inline input[type=checkbox],.radio input[type=radio],.radio-inline input[type=radio]{position:absolute;margin-top:4px\9;margin-left:-20px}.checkbox+.checkbox,.radio+.radio{margin-top:-5px}.checkbox-inline,.radio-inline{position:relative;display:inline-block;padding-left:20px;margin-bottom:0;font-weight:400;vertical-align:middle;cursor:pointer}.checkbox-inline+.checkbox-inline,.radio-inline+.radio-inline{margin-top:0;margin-left:10px}fieldset[disabled] input[type=checkbox],fieldset[disabled] input[type=radio],input[type=checkbox].disabled,input[type=checkbox][disabled],input[type=radio].disabled,input[type=radio][disabled]{cursor:not-allowed}.checkbox-inline.disabled,.radio-inline.disabled,fieldset[disabled] .checkbox-inline,fieldset[disabled] .radio-inline{cursor:not-allowed}.checkbox.disabled label,.radio.disabled label,fieldset[disabled] .checkbox label,fieldset[disabled] .radio label{cursor:not-allowed}.form-control-static{min-height:34px;padding-top:7px;padding-bottom:7px;margin-bottom:0}.form-control-static.input-lg,.form-control-static.input-sm{padding-right:0;padding-left:0}.input-sm{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-sm{height:30px;line-height:30px}select[multiple].input-sm,textarea.input-sm{height:auto}.form-group-sm .form-control{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.form-group-sm select.form-control{height:30px;line-height:30px}.form-group-sm select[multiple].form-control,.form-group-sm textarea.form-control{height:auto}.form-group-sm .form-control-static{height:30px;min-height:32px;padding:6px 10px;font-size:12px;line-height:1.5}.input-lg{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}select.input-lg{height:46px;line-height:46px}select[multiple].input-lg,textarea.input-lg{height:auto}.form-group-lg .form-control{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.form-group-lg select.form-control{height:46px;line-height:46px}.form-group-lg select[multiple].form-control,.form-group-lg textarea.form-control{height:auto}.form-group-lg .form-control-static{height:46px;min-height:38px;padding:11px 16px;font-size:18px;line-height:1.3333333}.has-feedback{position:relative}.has-feedback .form-control{padding-right:42.5px}.form-control-feedback{position:absolute;top:0;right:0;z-index:2;display:block;width:34px;height:34px;line-height:34px;text-align:center;pointer-events:none}.form-group-lg .form-control+.form-control-feedback,.input-group-lg+.form-control-feedback,.input-lg+.form-control-feedback{width:46px;height:46px;line-height:46px}.form-group-sm .form-control+.form-control-feedback,.input-group-sm+.form-control-feedback,.input-sm+.form-control-feedback{width:30px;height:30px;line-height:30px}.has-success .checkbox,.has-success .checkbox-inline,.has-success .control-label,.has-success .help-block,.has-success .radio,.has-success .radio-inline,.has-success.checkbox label,.has-success.checkbox-inline label,.has-success.radio label,.has-success.radio-inline label{color:#3c763d}.has-success .form-control{border-color:#3c763d;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-success .form-control:focus{border-color:#2b542c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168}.has-success .input-group-addon{color:#3c763d;background-color:#dff0d8;border-color:#3c763d}.has-success .form-control-feedback{color:#3c763d}.has-warning .checkbox,.has-warning .checkbox-inline,.has-warning .control-label,.has-warning .help-block,.has-warning .radio,.has-warning .radio-inline,.has-warning.checkbox label,.has-warning.checkbox-inline label,.has-warning.radio label,.has-warning.radio-inline label{color:#8a6d3b}.has-warning .form-control{border-color:#8a6d3b;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-warning .form-control:focus{border-color:#66512c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b}.has-warning .input-group-addon{color:#8a6d3b;background-color:#fcf8e3;border-color:#8a6d3b}.has-warning .form-control-feedback{color:#8a6d3b}.has-error .checkbox,.has-error .checkbox-inline,.has-error .control-label,.has-error .help-block,.has-error .radio,.has-error .radio-inline,.has-error.checkbox label,.has-error.checkbox-inline label,.has-error.radio label,.has-error.radio-inline label{color:#a94442}.has-error .form-control{border-color:#a94442;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-error .form-control:focus{border-color:#843534;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483}.has-error .input-group-addon{color:#a94442;background-color:#f2dede;border-color:#a94442}.has-error .form-control-feedback{color:#a94442}.has-feedback label~.form-control-feedback{top:25px}.has-feedback label.sr-only~.form-control-feedback{top:0}.help-block{display:block;margin-top:5px;margin-bottom:10px;color:#737373}@media (min-width:768px){.form-inline .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.form-inline .form-control{display:inline-block;width:auto;vertical-align:middle}.form-inline .form-control-static{display:inline-block}.form-inline .input-group{display:inline-table;vertical-align:middle}.form-inline .input-group .form-control,.form-inline .input-group .input-group-addon,.form-inline .input-group .input-group-btn{width:auto}.form-inline .input-group>.form-control{width:100%}.form-inline .control-label{margin-bottom:0;vertical-align:middle}.form-inline .checkbox,.form-inline .radio{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.form-inline .checkbox label,.form-inline .radio label{padding-left:0}.form-inline .checkbox input[type=checkbox],.form-inline .radio input[type=radio]{position:relative;margin-left:0}.form-inline .has-feedback .form-control-feedback{top:0}}.form-horizontal .checkbox,.form-horizontal .checkbox-inline,.form-horizontal .radio,.form-horizontal .radio-inline{padding-top:7px;margin-top:0;margin-bottom:0}.form-horizontal .checkbox,.form-horizontal .radio{min-height:27px}.form-horizontal .form-group{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.form-horizontal .control-label{padding-top:7px;margin-bottom:0;text-align:right}}.form-horizontal .has-feedback .form-control-feedback{right:15px}@media (min-width:768px){.form-horizontal .form-group-lg .control-label{padding-top:11px;font-size:18px}}@media (min-width:768px){.form-horizontal .form-group-sm .control-label{padding-top:6px;font-size:12px}}.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;border-radius:4px}.btn.active.focus,.btn.active:focus,.btn.focus,.btn:active.focus,.btn:active:focus,.btn:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}.btn.focus,.btn:focus,.btn:hover{color:#333;text-decoration:none}.btn.active,.btn:active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}.btn.disabled,.btn[disabled],fieldset[disabled] .btn{cursor:not-allowed;filter:alpha(opacity=65);-webkit-box-shadow:none;box-shadow:none;opacity:.65}a.btn.disabled,fieldset[disabled] a.btn{pointer-events:none}.btn-default{color:#333;background-color:#fff;border-color:#ccc}.btn-default.focus,.btn-default:focus{color:#333;background-color:#e6e6e6;border-color:#8c8c8c}.btn-default:hover{color:#333;background-color:#e6e6e6;border-color:#adadad}.btn-default.active,.btn-default:active,.open>.dropdown-toggle.btn-default{color:#333;background-color:#e6e6e6;border-color:#adadad}.btn-default.active.focus,.btn-default.active:focus,.btn-default.active:hover,.btn-default:active.focus,.btn-default:active:focus,.btn-default:active:hover,.open>.dropdown-toggle.btn-default.focus,.open>.dropdown-toggle.btn-default:focus,.open>.dropdown-toggle.btn-default:hover{color:#333;background-color:#d4d4d4;border-color:#8c8c8c}.btn-default.active,.btn-default:active,.open>.dropdown-toggle.btn-default{background-image:none}.btn-default.disabled.focus,.btn-default.disabled:focus,.btn-default.disabled:hover,.btn-default[disabled].focus,.btn-default[disabled]:focus,.btn-default[disabled]:hover,fieldset[disabled] .btn-default.focus,fieldset[disabled] .btn-default:focus,fieldset[disabled] .btn-default:hover{background-color:#fff;border-color:#ccc}.btn-default .badge{color:#fff;background-color:#333}.btn-primary{color:#fff;background-color:#337ab7;border-color:#2e6da4}.btn-primary.focus,.btn-primary:focus{color:#fff;background-color:#286090;border-color:#122b40}.btn-primary:hover{color:#fff;background-color:#286090;border-color:#204d74}.btn-primary.active,.btn-primary:active,.open>.dropdown-toggle.btn-primary{color:#fff;background-color:#286090;border-color:#204d74}.btn-primary.active.focus,.btn-primary.active:focus,.btn-primary.active:hover,.btn-primary:active.focus,.btn-primary:active:focus,.btn-primary:active:hover,.open>.dropdown-toggle.btn-primary.focus,.open>.dropdown-toggle.btn-primary:focus,.open>.dropdown-toggle.btn-primary:hover{color:#fff;background-color:#204d74;border-color:#122b40}.btn-primary.active,.btn-primary:active,.open>.dropdown-toggle.btn-primary{background-image:none}.btn-primary.disabled.focus,.btn-primary.disabled:focus,.btn-primary.disabled:hover,.btn-primary[disabled].focus,.btn-primary[disabled]:focus,.btn-primary[disabled]:hover,fieldset[disabled] .btn-primary.focus,fieldset[disabled] .btn-primary:focus,fieldset[disabled] .btn-primary:hover{background-color:#337ab7;border-color:#2e6da4}.btn-primary .badge{color:#337ab7;background-color:#fff}.btn-success{color:#fff;background-color:#5cb85c;border-color:#4cae4c}.btn-success.focus,.btn-success:focus{color:#fff;background-color:#449d44;border-color:#255625}.btn-success:hover{color:#fff;background-color:#449d44;border-color:#398439}.btn-success.active,.btn-success:active,.open>.dropdown-toggle.btn-success{color:#fff;background-color:#449d44;border-color:#398439}.btn-success.active.focus,.btn-success.active:focus,.btn-success.active:hover,.btn-success:active.focus,.btn-success:active:focus,.btn-success:active:hover,.open>.dropdown-toggle.btn-success.focus,.open>.dropdown-toggle.btn-success:focus,.open>.dropdown-toggle.btn-success:hover{color:#fff;background-color:#398439;border-color:#255625}.btn-success.active,.btn-success:active,.open>.dropdown-toggle.btn-success{background-image:none}.btn-success.disabled.focus,.btn-success.disabled:focus,.btn-success.disabled:hover,.btn-success[disabled].focus,.btn-success[disabled]:focus,.btn-success[disabled]:hover,fieldset[disabled] .btn-success.focus,fieldset[disabled] .btn-success:focus,fieldset[disabled] .btn-success:hover{background-color:#5cb85c;border-color:#4cae4c}.btn-success .badge{color:#5cb85c;background-color:#fff}.btn-info{color:#fff;background-color:#5bc0de;border-color:#46b8da}.btn-info.focus,.btn-info:focus{color:#fff;background-color:#31b0d5;border-color:#1b6d85}.btn-info:hover{color:#fff;background-color:#31b0d5;border-color:#269abc}.btn-info.active,.btn-info:active,.open>.dropdown-toggle.btn-info{color:#fff;background-color:#31b0d5;border-color:#269abc}.btn-info.active.focus,.btn-info.active:focus,.btn-info.active:hover,.btn-info:active.focus,.btn-info:active:focus,.btn-info:active:hover,.open>.dropdown-toggle.btn-info.focus,.open>.dropdown-toggle.btn-info:focus,.open>.dropdown-toggle.btn-info:hover{color:#fff;background-color:#269abc;border-color:#1b6d85}.btn-info.active,.btn-info:active,.open>.dropdown-toggle.btn-info{background-image:none}.btn-info.disabled.focus,.btn-info.disabled:focus,.btn-info.disabled:hover,.btn-info[disabled].focus,.btn-info[disabled]:focus,.btn-info[disabled]:hover,fieldset[disabled] .btn-info.focus,fieldset[disabled] .btn-info:focus,fieldset[disabled] .btn-info:hover{background-color:#5bc0de;border-color:#46b8da}.btn-info .badge{color:#5bc0de;background-color:#fff}.btn-warning{color:#fff;background-color:#f0ad4e;border-color:#eea236}.btn-warning.focus,.btn-warning:focus{color:#fff;background-color:#ec971f;border-color:#985f0d}.btn-warning:hover{color:#fff;background-color:#ec971f;border-color:#d58512}.btn-warning.active,.btn-warning:active,.open>.dropdown-toggle.btn-warning{color:#fff;background-color:#ec971f;border-color:#d58512}.btn-warning.active.focus,.btn-warning.active:focus,.btn-warning.active:hover,.btn-warning:active.focus,.btn-warning:active:focus,.btn-warning:active:hover,.open>.dropdown-toggle.btn-warning.focus,.open>.dropdown-toggle.btn-warning:focus,.open>.dropdown-toggle.btn-warning:hover{color:#fff;background-color:#d58512;border-color:#985f0d}.btn-warning.active,.btn-warning:active,.open>.dropdown-toggle.btn-warning{background-image:none}.btn-warning.disabled.focus,.btn-warning.disabled:focus,.btn-warning.disabled:hover,.btn-warning[disabled].focus,.btn-warning[disabled]:focus,.btn-warning[disabled]:hover,fieldset[disabled] .btn-warning.focus,fieldset[disabled] .btn-warning:focus,fieldset[disabled] .btn-warning:hover{background-color:#f0ad4e;border-color:#eea236}.btn-warning .badge{color:#f0ad4e;background-color:#fff}.btn-danger{color:#fff;background-color:#d9534f;border-color:#d43f3a}.btn-danger.focus,.btn-danger:focus{color:#fff;background-color:#c9302c;border-color:#761c19}.btn-danger:hover{color:#fff;background-color:#c9302c;border-color:#ac2925}.btn-danger.active,.btn-danger:active,.open>.dropdown-toggle.btn-danger{color:#fff;background-color:#c9302c;border-color:#ac2925}.btn-danger.active.focus,.btn-danger.active:focus,.btn-danger.active:hover,.btn-danger:active.focus,.btn-danger:active:focus,.btn-danger:active:hover,.open>.dropdown-toggle.btn-danger.focus,.open>.dropdown-toggle.btn-danger:focus,.open>.dropdown-toggle.btn-danger:hover{color:#fff;background-color:#ac2925;border-color:#761c19}.btn-danger.active,.btn-danger:active,.open>.dropdown-toggle.btn-danger{background-image:none}.btn-danger.disabled.focus,.btn-danger.disabled:focus,.btn-danger.disabled:hover,.btn-danger[disabled].focus,.btn-danger[disabled]:focus,.btn-danger[disabled]:hover,fieldset[disabled] .btn-danger.focus,fieldset[disabled] .btn-danger:focus,fieldset[disabled] .btn-danger:hover{background-color:#d9534f;border-color:#d43f3a}.btn-danger .badge{color:#d9534f;background-color:#fff}.btn-link{font-weight:400;color:#337ab7;border-radius:0}.btn-link,.btn-link.active,.btn-link:active,.btn-link[disabled],fieldset[disabled] .btn-link{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.btn-link,.btn-link:active,.btn-link:focus,.btn-link:hover{border-color:transparent}.btn-link:focus,.btn-link:hover{color:#23527c;text-decoration:underline;background-color:transparent}.btn-link[disabled]:focus,.btn-link[disabled]:hover,fieldset[disabled] .btn-link:focus,fieldset[disabled] .btn-link:hover{color:#777;text-decoration:none}.btn-group-lg>.btn,.btn-lg{padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.btn-group-sm>.btn,.btn-sm{padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.btn-group-xs>.btn,.btn-xs{padding:1px 5px;font-size:12px;line-height:1.5;border-radius:3px}.btn-block{display:block;width:100%}.btn-block+.btn-block{margin-top:5px}input[type=button].btn-block,input[type=reset].btn-block,input[type=submit].btn-block{width:100%}.fade{opacity:0;-webkit-transition:opacity .15s linear;-o-transition:opacity .15s linear;transition:opacity .15s linear}.fade.in{opacity:1}.collapse{display:none}.collapse.in{display:block}tr.collapse.in{display:table-row}tbody.collapse.in{display:table-row-group}.collapsing{position:relative;height:0;overflow:hidden;-webkit-transition-timing-function:ease;-o-transition-timing-function:ease;transition-timing-function:ease;-webkit-transition-duration:.35s;-o-transition-duration:.35s;transition-duration:.35s;-webkit-transition-property:height,visibility;-o-transition-property:height,visibility;transition-property:height,visibility}.caret{display:inline-block;width:0;height:0;margin-left:2px;vertical-align:middle;border-top:4px dashed;border-top:4px solid\9;border-right:4px solid transparent;border-left:4px solid transparent}.dropdown,.dropup{position:relative}.dropdown-toggle:focus{outline:0}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:160px;padding:5px 0;margin:2px 0 0;font-size:14px;text-align:left;list-style:none;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0,0,0,.15);border-radius:4px;-webkit-box-shadow:0 6px 12px rgba(0,0,0,.175);box-shadow:0 6px 12px rgba(0,0,0,.175)}.dropdown-menu.pull-right{right:0;left:auto}.dropdown-menu .divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.dropdown-menu>li>a{display:block;padding:3px 20px;clear:both;font-weight:400;line-height:1.42857143;color:#333;white-space:nowrap}.dropdown-menu>li>a:focus,.dropdown-menu>li>a:hover{color:#262626;text-decoration:none;background-color:#f5f5f5}.dropdown-menu>.active>a,.dropdown-menu>.active>a:focus,.dropdown-menu>.active>a:hover{color:#fff;text-decoration:none;background-color:#337ab7;outline:0}.dropdown-menu>.disabled>a,.dropdown-menu>.disabled>a:focus,.dropdown-menu>.disabled>a:hover{color:#777}.dropdown-menu>.disabled>a:focus,.dropdown-menu>.disabled>a:hover{text-decoration:none;cursor:not-allowed;background-color:transparent;background-image:none;filter:progid:DXImageTransform.Microsoft.gradient(enabled=false)}.open>.dropdown-menu{display:block}.open>a{outline:0}.dropdown-menu-right{right:0;left:auto}.dropdown-menu-left{right:auto;left:0}.dropdown-header{display:block;padding:3px 20px;font-size:12px;line-height:1.42857143;color:#777;white-space:nowrap}.dropdown-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:990}.pull-right>.dropdown-menu{right:0;left:auto}.dropup .caret,.navbar-fixed-bottom .dropdown .caret{content:"";border-top:0;border-bottom:4px dashed;border-bottom:4px solid\9}.dropup .dropdown-menu,.navbar-fixed-bottom .dropdown .dropdown-menu{top:auto;bottom:100%;margin-bottom:2px}@media (min-width:768px){.navbar-right .dropdown-menu{right:0;left:auto}.navbar-right .dropdown-menu-left{right:auto;left:0}}.btn-group,.btn-group-vertical{position:relative;display:inline-block;vertical-align:middle}.btn-group-vertical>.btn,.btn-group>.btn{position:relative;float:left}.btn-group-vertical>.btn.active,.btn-group-vertical>.btn:active,.btn-group-vertical>.btn:focus,.btn-group-vertical>.btn:hover,.btn-group>.btn.active,.btn-group>.btn:active,.btn-group>.btn:focus,.btn-group>.btn:hover{z-index:2}.btn-group .btn+.btn,.btn-group .btn+.btn-group,.btn-group .btn-group+.btn,.btn-group .btn-group+.btn-group{margin-left:-1px}.btn-toolbar{margin-left:-5px}.btn-toolbar .btn,.btn-toolbar .btn-group,.btn-toolbar .input-group{float:left}.btn-toolbar>.btn,.btn-toolbar>.btn-group,.btn-toolbar>.input-group{margin-left:5px}.btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle){border-radius:0}.btn-group>.btn:first-child{margin-left:0}.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn:last-child:not(:first-child),.btn-group>.dropdown-toggle:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.btn-group>.btn-group{float:left}.btn-group>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}.btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle{border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child{border-top-left-radius:0;border-bottom-left-radius:0}.btn-group .dropdown-toggle:active,.btn-group.open .dropdown-toggle{outline:0}.btn-group>.btn+.dropdown-toggle{padding-right:8px;padding-left:8px}.btn-group>.btn-lg+.dropdown-toggle{padding-right:12px;padding-left:12px}.btn-group.open .dropdown-toggle{-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}.btn-group.open .dropdown-toggle.btn-link{-webkit-box-shadow:none;box-shadow:none}.btn .caret{margin-left:0}.btn-lg .caret{border-width:5px 5px 0;border-bottom-width:0}.dropup .btn-lg .caret{border-width:0 5px 5px}.btn-group-vertical>.btn,.btn-group-vertical>.btn-group,.btn-group-vertical>.btn-group>.btn{display:block;float:none;width:100%;max-width:100%}.btn-group-vertical>.btn-group>.btn{float:none}.btn-group-vertical>.btn+.btn,.btn-group-vertical>.btn+.btn-group,.btn-group-vertical>.btn-group+.btn,.btn-group-vertical>.btn-group+.btn-group{margin-top:-1px;margin-left:0}.btn-group-vertical>.btn:not(:first-child):not(:last-child){border-radius:0}.btn-group-vertical>.btn:first-child:not(:last-child){border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn:last-child:not(:first-child){border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:4px;border-bottom-left-radius:4px}.btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}.btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle{border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child{border-top-left-radius:0;border-top-right-radius:0}.btn-group-justified{display:table;width:100%;table-layout:fixed;border-collapse:separate}.btn-group-justified>.btn,.btn-group-justified>.btn-group{display:table-cell;float:none;width:1%}.btn-group-justified>.btn-group .btn{width:100%}.btn-group-justified>.btn-group .dropdown-menu{left:auto}[data-toggle=buttons]>.btn input[type=checkbox],[data-toggle=buttons]>.btn input[type=radio],[data-toggle=buttons]>.btn-group>.btn input[type=checkbox],[data-toggle=buttons]>.btn-group>.btn input[type=radio]{position:absolute;clip:rect(0,0,0,0);pointer-events:none}.input-group{position:relative;display:table;border-collapse:separate}.input-group[class*=col-]{float:none;padding-right:0;padding-left:0}.input-group .form-control{position:relative;z-index:2;float:left;width:100%;margin-bottom:0}.input-group .form-control:focus{z-index:3}.input-group-lg>.form-control,.input-group-lg>.input-group-addon,.input-group-lg>.input-group-btn>.btn{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}select.input-group-lg>.form-control,select.input-group-lg>.input-group-addon,select.input-group-lg>.input-group-btn>.btn{height:46px;line-height:46px}select[multiple].input-group-lg>.form-control,select[multiple].input-group-lg>.input-group-addon,select[multiple].input-group-lg>.input-group-btn>.btn,textarea.input-group-lg>.form-control,textarea.input-group-lg>.input-group-addon,textarea.input-group-lg>.input-group-btn>.btn{height:auto}.input-group-sm>.form-control,.input-group-sm>.input-group-addon,.input-group-sm>.input-group-btn>.btn{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-group-sm>.form-control,select.input-group-sm>.input-group-addon,select.input-group-sm>.input-group-btn>.btn{height:30px;line-height:30px}select[multiple].input-group-sm>.form-control,select[multiple].input-group-sm>.input-group-addon,select[multiple].input-group-sm>.input-group-btn>.btn,textarea.input-group-sm>.form-control,textarea.input-group-sm>.input-group-addon,textarea.input-group-sm>.input-group-btn>.btn{height:auto}.input-group .form-control,.input-group-addon,.input-group-btn{display:table-cell}.input-group .form-control:not(:first-child):not(:last-child),.input-group-addon:not(:first-child):not(:last-child),.input-group-btn:not(:first-child):not(:last-child){border-radius:0}.input-group-addon,.input-group-btn{width:1%;white-space:nowrap;vertical-align:middle}.input-group-addon{padding:6px 12px;font-size:14px;font-weight:400;line-height:1;color:#555;text-align:center;background-color:#eee;border:1px solid #ccc;border-radius:4px}.input-group-addon.input-sm{padding:5px 10px;font-size:12px;border-radius:3px}.input-group-addon.input-lg{padding:10px 16px;font-size:18px;border-radius:6px}.input-group-addon input[type=checkbox],.input-group-addon input[type=radio]{margin-top:0}.input-group .form-control:first-child,.input-group-addon:first-child,.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group>.btn,.input-group-btn:first-child>.dropdown-toggle,.input-group-btn:last-child>.btn-group:not(:last-child)>.btn,.input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.input-group-addon:first-child{border-right:0}.input-group .form-control:last-child,.input-group-addon:last-child,.input-group-btn:first-child>.btn-group:not(:first-child)>.btn,.input-group-btn:first-child>.btn:not(:first-child),.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group>.btn,.input-group-btn:last-child>.dropdown-toggle{border-top-left-radius:0;border-bottom-left-radius:0}.input-group-addon:last-child{border-left:0}.input-group-btn{position:relative;font-size:0;white-space:nowrap}.input-group-btn>.btn{position:relative}.input-group-btn>.btn+.btn{margin-left:-1px}.input-group-btn>.btn:active,.input-group-btn>.btn:focus,.input-group-btn>.btn:hover{z-index:2}.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group{margin-right:-1px}.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group{z-index:2;margin-left:-1px}.nav{padding-left:0;margin-bottom:0;list-style:none}.nav>li{position:relative;display:block}.nav>li>a{position:relative;display:block;padding:10px 8px}.nav>li>a:focus,.nav>li>a:hover{text-decoration:none;background-color:#eee}.nav>li.disabled>a{color:#777}.nav>li.disabled>a:focus,.nav>li.disabled>a:hover{color:#777;text-decoration:none;cursor:not-allowed;background-color:transparent}.nav .open>a,.nav .open>a:focus,.nav .open>a:hover{background-color:#eee;border-color:#337ab7}.nav .nav-divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.nav>li>a>img{max-width:none}.nav-tabs{border-bottom:1px solid #ddd}.nav-tabs>li{float:left;margin-bottom:-1px}.nav-tabs>li>a{margin-right:2px;line-height:1.42857143;border:1px solid transparent;border-radius:4px 4px 0 0}.nav-tabs>li>a:hover{border-color:#eee #eee #ddd}.nav-tabs>li.active>a,.nav-tabs>li.active>a:focus,.nav-tabs>li.active>a:hover{color:#555;cursor:default;background-color:#fff;border:1px solid #ddd;border-bottom-color:transparent}.nav-tabs.nav-justified{width:100%;border-bottom:0}.nav-tabs.nav-justified>li{float:none}.nav-tabs.nav-justified>li>a{margin-bottom:5px;text-align:center}.nav-tabs.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-tabs.nav-justified>li{display:table-cell;width:1%}.nav-tabs.nav-justified>li>a{margin-bottom:0}}.nav-tabs.nav-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{border:1px solid #ddd}@media (min-width:768px){.nav-tabs.nav-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{border-bottom-color:#fff}}.nav-pills>li{float:left}.nav-pills>li>a{border-radius:4px}.nav-pills>li+li{margin-left:2px}.nav-pills>li.active>a,.nav-pills>li.active>a:focus,.nav-pills>li.active>a:hover{color:#fff;background-color:#337ab7}.nav-stacked>li{float:none}.nav-stacked>li+li{margin-top:2px;margin-left:0}.nav-justified{width:100%}.nav-justified>li{float:none}.nav-justified>li>a{margin-bottom:5px;text-align:center}.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-justified>li{display:table-cell;width:1%}.nav-justified>li>a{margin-bottom:0}}.nav-tabs-justified{border-bottom:0}.nav-tabs-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover{border:1px solid #ddd}@media (min-width:768px){.nav-tabs-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover{border-bottom-color:#fff}}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}.navbar{position:relative;min-height:50px;margin-bottom:20px;border:1px solid transparent}@media (min-width:768px){.navbar{border-radius:4px}}@media (min-width:768px){.navbar-header{float:left}}.navbar-collapse{padding-right:15px;padding-left:15px;overflow-x:visible;-webkit-overflow-scrolling:touch;border-top:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1)}.navbar-collapse.in{overflow-y:auto}@media (min-width:768px){.navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none}.navbar-collapse.collapse{display:block!important;height:auto!important;padding-bottom:0;overflow:visible!important}.navbar-collapse.in{overflow-y:visible}.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse,.navbar-static-top .navbar-collapse{padding-right:0;padding-left:0}}.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse{max-height:340px}@media (max-device-width:480px) and (orientation:landscape){.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse{max-height:200px}}.container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header{margin-right:-30px;margin-left:0}}.navbar-static-top{z-index:1000;border-width:0 0 1px}@media (min-width:768px){.navbar-static-top{border-radius:0}}.navbar-fixed-bottom,.navbar-fixed-top{position:fixed;right:0;left:0;z-index:1030}@media (min-width:768px){.navbar-fixed-bottom,.navbar-fixed-top{border-radius:0}}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-fixed-bottom{bottom:0;margin-bottom:0;border-width:1px 0 0}.navbar-brand{float:left;height:50px;padding:15px 15px;font-size:18px;line-height:20px}.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}.navbar-brand>img{display:block}@media (min-width:768px){.navbar>.container .navbar-brand,.navbar>.container-fluid .navbar-brand{margin-left:-15px}}.navbar-toggle{position:relative;float:right;padding:9px 10px;margin-top:8px;margin-right:15px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle:focus{outline:0}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media (min-width:768px){.navbar-toggle{display:none}}.navbar-nav{margin:7.5px -15px}.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:20px}@media (max-width:767px){.navbar-nav .open .dropdown-menu{position:static;float:none;width:auto;margin-top:0;background-color:transparent;border:0;-webkit-box-shadow:none;box-shadow:none}.navbar-nav .open .dropdown-menu .dropdown-header,.navbar-nav .open .dropdown-menu>li>a{padding:5px 15px 5px 25px}.navbar-nav .open .dropdown-menu>li>a{line-height:20px}.navbar-nav .open .dropdown-menu>li>a:focus,.navbar-nav .open .dropdown-menu>li>a:hover{background-image:none}}@media (min-width:768px){.navbar-nav{float:left;margin:0}.navbar-nav>li{float:left}.navbar-nav>li>a{padding-top:15px;padding-bottom:15px}}.navbar-form{padding:10px 15px;margin-top:8px;margin-right:-15px;margin-bottom:8px;margin-left:-15px;border-top:1px solid transparent;border-bottom:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1)}@media (min-width:768px){.navbar-form .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.navbar-form .form-control{display:inline-block;width:auto;vertical-align:middle}.navbar-form .form-control-static{display:inline-block}.navbar-form .input-group{display:inline-table;vertical-align:middle}.navbar-form .input-group .form-control,.navbar-form .input-group .input-group-addon,.navbar-form .input-group .input-group-btn{width:auto}.navbar-form .input-group>.form-control{width:100%}.navbar-form .control-label{margin-bottom:0;vertical-align:middle}.navbar-form .checkbox,.navbar-form .radio{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.navbar-form .checkbox label,.navbar-form .radio label{padding-left:0}.navbar-form .checkbox input[type=checkbox],.navbar-form .radio input[type=radio]{position:relative;margin-left:0}.navbar-form .has-feedback .form-control-feedback{top:0}}@media (max-width:767px){.navbar-form .form-group{margin-bottom:5px}.navbar-form .form-group:last-child{margin-bottom:0}}@media (min-width:768px){.navbar-form{width:auto;padding-top:0;padding-bottom:0;margin-right:0;margin-left:0;border:0;-webkit-box-shadow:none;box-shadow:none}}.navbar-nav>li>.dropdown-menu{margin-top:0;border-top-left-radius:0;border-top-right-radius:0}.navbar-fixed-bottom .navbar-nav>li>.dropdown-menu{margin-bottom:0;border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:0;border-bottom-left-radius:0}.navbar-btn{margin-top:8px;margin-bottom:8px}.navbar-btn.btn-sm{margin-top:10px;margin-bottom:10px}.navbar-btn.btn-xs{margin-top:14px;margin-bottom:14px}.navbar-text{margin-top:15px;margin-bottom:15px}@media (min-width:768px){.navbar-text{float:left;margin-right:15px;margin-left:15px}}@media (min-width:768px){.navbar-left{float:left!important}.navbar-right{float:right!important;margin-right:-15px}.navbar-right~.navbar-right{margin-right:0}}.navbar-default{background-color:#f8f8f8;border-color:#e7e7e7}.navbar-default .navbar-brand{color:#777}.navbar-default .navbar-brand:focus,.navbar-default .navbar-brand:hover{color:#5e5e5e;background-color:transparent}.navbar-default .navbar-text{color:#777}.navbar-default .navbar-nav>li>a{color:#777}.navbar-default .navbar-nav>li>a:focus,.navbar-default .navbar-nav>li>a:hover{color:#333;background-color:transparent}.navbar-default .navbar-nav>.active>a,.navbar-default .navbar-nav>.active>a:focus,.navbar-default .navbar-nav>.active>a:hover{color:#555;background-color:#e7e7e7}.navbar-default .navbar-nav>.disabled>a,.navbar-default .navbar-nav>.disabled>a:focus,.navbar-default .navbar-nav>.disabled>a:hover{color:#ccc;background-color:transparent}.navbar-default .navbar-toggle{border-color:#ddd}.navbar-default .navbar-toggle:focus,.navbar-default .navbar-toggle:hover{background-color:#ddd}.navbar-default .navbar-toggle .icon-bar{background-color:#888}.navbar-default .navbar-collapse,.navbar-default .navbar-form{border-color:#e7e7e7}.navbar-default .navbar-nav>.open>a,.navbar-default .navbar-nav>.open>a:focus,.navbar-default .navbar-nav>.open>a:hover{color:#555;background-color:#e7e7e7}@media (max-width:767px){.navbar-default .navbar-nav .open .dropdown-menu>li>a{color:#777}.navbar-default .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover{color:#333;background-color:transparent}.navbar-default .navbar-nav .open .dropdown-menu>.active>a,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover{color:#555;background-color:#e7e7e7}.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover{color:#ccc;background-color:transparent}}.navbar-default .navbar-link{color:#777}.navbar-default .navbar-link:hover{color:#333}.navbar-default .btn-link{color:#777}.navbar-default .btn-link:focus,.navbar-default .btn-link:hover{color:#333}.navbar-default .btn-link[disabled]:focus,.navbar-default .btn-link[disabled]:hover,fieldset[disabled] .navbar-default .btn-link:focus,fieldset[disabled] .navbar-default .btn-link:hover{color:#ccc}.navbar-inverse{background-color:#222;border-color:#080808}.navbar-inverse .navbar-brand{color:#9d9d9d}.navbar-inverse .navbar-brand:focus,.navbar-inverse .navbar-brand:hover{color:#fff;background-color:transparent}.navbar-inverse .navbar-text{color:#9d9d9d}.navbar-inverse .navbar-nav>li>a{color:#9d9d9d}.navbar-inverse .navbar-nav>li>a:focus,.navbar-inverse .navbar-nav>li>a:hover{color:#fff;background-color:transparent}.navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.active>a:focus,.navbar-inverse .navbar-nav>.active>a:hover{color:#fff;background-color:#080808}.navbar-inverse .navbar-nav>.disabled>a,.navbar-inverse .navbar-nav>.disabled>a:focus,.navbar-inverse .navbar-nav>.disabled>a:hover{color:#444;background-color:transparent}.navbar-inverse .navbar-toggle{border-color:#333}.navbar-inverse .navbar-toggle:focus,.navbar-inverse .navbar-toggle:hover{background-color:#333}.navbar-inverse .navbar-toggle .icon-bar{background-color:#fff}.navbar-inverse .navbar-collapse,.navbar-inverse .navbar-form{border-color:#101010}.navbar-inverse .navbar-nav>.open>a,.navbar-inverse .navbar-nav>.open>a:focus,.navbar-inverse .navbar-nav>.open>a:hover{color:#fff;background-color:#080808}@media (max-width:767px){.navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header{border-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu .divider{background-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a{color:#9d9d9d}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover{color:#fff;background-color:transparent}.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover{color:#fff;background-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover{color:#444;background-color:transparent}}.navbar-inverse .navbar-link{color:#9d9d9d}.navbar-inverse .navbar-link:hover{color:#fff}.navbar-inverse .btn-link{color:#9d9d9d}.navbar-inverse .btn-link:focus,.navbar-inverse .btn-link:hover{color:#fff}.navbar-inverse .btn-link[disabled]:focus,.navbar-inverse .btn-link[disabled]:hover,fieldset[disabled] .navbar-inverse .btn-link:focus,fieldset[disabled] .navbar-inverse .btn-link:hover{color:#444}.breadcrumb{padding:8px 15px;margin-bottom:20px;list-style:none;background-color:#f5f5f5;border-radius:4px}.breadcrumb>li{display:inline-block}.breadcrumb>li+li:before{padding:0 5px;color:#ccc;content:"/\00a0"}.breadcrumb>.active{color:#777}.pagination{display:inline-block;padding-left:0;margin:20px 0;border-radius:4px}.pagination>li{display:inline}.pagination>li>a,.pagination>li>span{position:relative;float:left;padding:6px 12px;margin-left:-1px;line-height:1.42857143;color:#337ab7;text-decoration:none;background-color:#fff;border:1px solid #ddd}.pagination>li:first-child>a,.pagination>li:first-child>span{margin-left:0;border-top-left-radius:4px;border-bottom-left-radius:4px}.pagination>li:last-child>a,.pagination>li:last-child>span{border-top-right-radius:4px;border-bottom-right-radius:4px}.pagination>li>a:focus,.pagination>li>a:hover,.pagination>li>span:focus,.pagination>li>span:hover{z-index:2;color:#23527c;background-color:#eee;border-color:#ddd}.pagination>.active>a,.pagination>.active>a:focus,.pagination>.active>a:hover,.pagination>.active>span,.pagination>.active>span:focus,.pagination>.active>span:hover{z-index:3;color:#fff;cursor:default;background-color:#337ab7;border-color:#337ab7}.pagination>.disabled>a,.pagination>.disabled>a:focus,.pagination>.disabled>a:hover,.pagination>.disabled>span,.pagination>.disabled>span:focus,.pagination>.disabled>span:hover{color:#777;cursor:not-allowed;background-color:#fff;border-color:#ddd}.pagination-lg>li>a,.pagination-lg>li>span{padding:10px 16px;font-size:18px;line-height:1.3333333}.pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{border-top-left-radius:6px;border-bottom-left-radius:6px}.pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{border-top-right-radius:6px;border-bottom-right-radius:6px}.pagination-sm>li>a,.pagination-sm>li>span{padding:5px 10px;font-size:12px;line-height:1.5}.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{border-top-left-radius:3px;border-bottom-left-radius:3px}.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{border-top-right-radius:3px;border-bottom-right-radius:3px}.pager{padding-left:0;margin:20px 0;text-align:center;list-style:none}.pager li{display:inline}.pager li>a,.pager li>span{display:inline-block;padding:5px 14px;background-color:#fff;border:1px solid #ddd;border-radius:15px}.pager li>a:focus,.pager li>a:hover{text-decoration:none;background-color:#eee}.pager .next>a,.pager .next>span{float:right}.pager .previous>a,.pager .previous>span{float:left}.pager .disabled>a,.pager .disabled>a:focus,.pager .disabled>a:hover,.pager .disabled>span{color:#777;cursor:not-allowed;background-color:#fff}.label{display:inline;padding:.2em .6em .3em;font-size:75%;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25em}a.label:focus,a.label:hover{color:#fff;text-decoration:none;cursor:pointer}.label:empty{display:none}.btn .label{position:relative;top:-1px}.label-default{background-color:#777}.label-default[href]:focus,.label-default[href]:hover{background-color:#5e5e5e}.label-primary{background-color:#337ab7}.label-primary[href]:focus,.label-primary[href]:hover{background-color:#286090}.label-success{background-color:#5cb85c}.label-success[href]:focus,.label-success[href]:hover{background-color:#449d44}.label-info{background-color:#5bc0de}.label-info[href]:focus,.label-info[href]:hover{background-color:#31b0d5}.label-warning{background-color:#f0ad4e}.label-warning[href]:focus,.label-warning[href]:hover{background-color:#ec971f}.label-danger{background-color:#d9534f}.label-danger[href]:focus,.label-danger[href]:hover{background-color:#c9302c}.badge{display:inline-block;min-width:10px;padding:3px 7px;font-size:12px;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:middle;background-color:#777;border-radius:10px}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}.btn-group-xs>.btn .badge,.btn-xs .badge{top:0;padding:1px 5px}a.badge:focus,a.badge:hover{color:#fff;text-decoration:none;cursor:pointer}.list-group-item.active>.badge,.nav-pills>.active>a>.badge{color:#337ab7;background-color:#fff}.list-group-item>.badge{float:right}.list-group-item>.badge+.badge{margin-right:5px}.nav-pills>li>a>.badge{margin-left:3px}.jumbotron{padding-top:30px;padding-bottom:30px;margin-bottom:30px;color:inherit;background-color:#eee}.jumbotron .h1,.jumbotron h1{color:inherit}.jumbotron p{margin-bottom:15px;font-size:21px;font-weight:200}.jumbotron>hr{border-top-color:#d5d5d5}.container .jumbotron,.container-fluid .jumbotron{padding-right:15px;padding-left:15px;border-radius:6px}.jumbotron .container{max-width:100%}@media screen and (min-width:768px){.jumbotron{padding-top:48px;padding-bottom:48px}.container .jumbotron,.container-fluid .jumbotron{padding-right:60px;padding-left:60px}.jumbotron .h1,.jumbotron h1{font-size:63px}}.thumbnail{display:block;padding:4px;margin-bottom:20px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:border .2s ease-in-out;-o-transition:border .2s ease-in-out;transition:border .2s ease-in-out}.thumbnail a>img,.thumbnail>img{margin-right:auto;margin-left:auto}a.thumbnail.active,a.thumbnail:focus,a.thumbnail:hover{border-color:#337ab7}.thumbnail .caption{padding:9px;color:#333}.alert{padding:15px;margin-bottom:20px;border:1px solid transparent;border-radius:4px}.alert h4{margin-top:0;color:inherit}.alert .alert-link{font-weight:700}.alert>p,.alert>ul{margin-bottom:0}.alert>p+p{margin-top:5px}.alert-dismissable,.alert-dismissible{padding-right:35px}.alert-dismissable .close,.alert-dismissible .close{position:relative;top:-2px;right:-21px;color:inherit}.alert-success{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6}.alert-success hr{border-top-color:#c9e2b3}.alert-success .alert-link{color:#2b542c}.alert-info{color:#31708f;background-color:#d9edf7;border-color:#bce8f1}.alert-info hr{border-top-color:#a6e1ec}.alert-info .alert-link{color:#245269}.alert-warning{color:#8a6d3b;background-color:#fcf8e3;border-color:#faebcc}.alert-warning hr{border-top-color:#f7e1b5}.alert-warning .alert-link{color:#66512c}.alert-danger{color:#a94442;background-color:#f2dede;border-color:#ebccd1}.alert-danger hr{border-top-color:#e4b9c0}.alert-danger .alert-link{color:#843534}@-webkit-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@-o-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}.progress{height:20px;margin-bottom:20px;overflow:hidden;background-color:#f5f5f5;border-radius:4px;-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,.1);box-shadow:inset 0 1px 2px rgba(0,0,0,.1)}.progress-bar{float:left;width:0;height:100%;font-size:12px;line-height:20px;color:#fff;text-align:center;background-color:#337ab7;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,.15);box-shadow:inset 0 -1px 0 rgba(0,0,0,.15);-webkit-transition:width .6s ease;-o-transition:width .6s ease;transition:width .6s ease}.progress-bar-striped,.progress-striped .progress-bar{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);-webkit-background-size:40px 40px;background-size:40px 40px}.progress-bar.active,.progress.active .progress-bar{-webkit-animation:progress-bar-stripes 2s linear infinite;-o-animation:progress-bar-stripes 2s linear infinite;animation:progress-bar-stripes 2s linear infinite}.progress-bar-success{background-color:#5cb85c}.progress-striped .progress-bar-success{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.progress-bar-info{background-color:#5bc0de}.progress-striped .progress-bar-info{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.progress-bar-warning{background-color:#f0ad4e}.progress-striped .progress-bar-warning{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.progress-bar-danger{background-color:#d9534f}.progress-striped .progress-bar-danger{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.media{margin-top:15px}.media:first-child{margin-top:0}.media,.media-body{overflow:hidden;zoom:1}.media-body{width:10000px}.media-object{display:block}.media-object.img-thumbnail{max-width:none}.media-right,.media>.pull-right{padding-left:10px}.media-left,.media>.pull-left{padding-right:10px}.media-body,.media-left,.media-right{display:table-cell;vertical-align:top}.media-middle{vertical-align:middle}.media-bottom{vertical-align:bottom}.media-heading{margin-top:0;margin-bottom:5px}.media-list{padding-left:0;list-style:none}.list-group{padding-left:0;margin-bottom:20px}.list-group-item{position:relative;display:block;padding:10px 15px;margin-bottom:-1px;background-color:#fff;border:1px solid #ddd}.list-group-item:first-child{border-top-left-radius:4px;border-top-right-radius:4px}.list-group-item:last-child{margin-bottom:0;border-bottom-right-radius:4px;border-bottom-left-radius:4px}a.list-group-item,button.list-group-item{color:#555}a.list-group-item .list-group-item-heading,button.list-group-item .list-group-item-heading{color:#333}a.list-group-item:focus,a.list-group-item:hover,button.list-group-item:focus,button.list-group-item:hover{color:#555;text-decoration:none;background-color:#f5f5f5}button.list-group-item{width:100%;text-align:left}.list-group-item.disabled,.list-group-item.disabled:focus,.list-group-item.disabled:hover{color:#777;cursor:not-allowed;background-color:#eee}.list-group-item.disabled .list-group-item-heading,.list-group-item.disabled:focus .list-group-item-heading,.list-group-item.disabled:hover .list-group-item-heading{color:inherit}.list-group-item.disabled .list-group-item-text,.list-group-item.disabled:focus .list-group-item-text,.list-group-item.disabled:hover .list-group-item-text{color:#777}.list-group-item.active,.list-group-item.active:focus,.list-group-item.active:hover{z-index:2;color:#fff;background-color:#337ab7;border-color:#337ab7}.list-group-item.active .list-group-item-heading,.list-group-item.active .list-group-item-heading>.small,.list-group-item.active .list-group-item-heading>small,.list-group-item.active:focus .list-group-item-heading,.list-group-item.active:focus .list-group-item-heading>.small,.list-group-item.active:focus .list-group-item-heading>small,.list-group-item.active:hover .list-group-item-heading,.list-group-item.active:hover .list-group-item-heading>.small,.list-group-item.active:hover .list-group-item-heading>small{color:inherit}.list-group-item.active .list-group-item-text,.list-group-item.active:focus .list-group-item-text,.list-group-item.active:hover .list-group-item-text{color:#c7ddef}.list-group-item-success{color:#3c763d;background-color:#dff0d8}a.list-group-item-success,button.list-group-item-success{color:#3c763d}a.list-group-item-success .list-group-item-heading,button.list-group-item-success .list-group-item-heading{color:inherit}a.list-group-item-success:focus,a.list-group-item-success:hover,button.list-group-item-success:focus,button.list-group-item-success:hover{color:#3c763d;background-color:#d0e9c6}a.list-group-item-success.active,a.list-group-item-success.active:focus,a.list-group-item-success.active:hover,button.list-group-item-success.active,button.list-group-item-success.active:focus,button.list-group-item-success.active:hover{color:#fff;background-color:#3c763d;border-color:#3c763d}.list-group-item-info{color:#31708f;background-color:#d9edf7}a.list-group-item-info,button.list-group-item-info{color:#31708f}a.list-group-item-info .list-group-item-heading,button.list-group-item-info .list-group-item-heading{color:inherit}a.list-group-item-info:focus,a.list-group-item-info:hover,button.list-group-item-info:focus,button.list-group-item-info:hover{color:#31708f;background-color:#c4e3f3}a.list-group-item-info.active,a.list-group-item-info.active:focus,a.list-group-item-info.active:hover,button.list-group-item-info.active,button.list-group-item-info.active:focus,button.list-group-item-info.active:hover{color:#fff;background-color:#31708f;border-color:#31708f}.list-group-item-warning{color:#8a6d3b;background-color:#fcf8e3}a.list-group-item-warning,button.list-group-item-warning{color:#8a6d3b}a.list-group-item-warning .list-group-item-heading,button.list-group-item-warning .list-group-item-heading{color:inherit}a.list-group-item-warning:focus,a.list-group-item-warning:hover,button.list-group-item-warning:focus,button.list-group-item-warning:hover{color:#8a6d3b;background-color:#faf2cc}a.list-group-item-warning.active,a.list-group-item-warning.active:focus,a.list-group-item-warning.active:hover,button.list-group-item-warning.active,button.list-group-item-warning.active:focus,button.list-group-item-warning.active:hover{color:#fff;background-color:#8a6d3b;border-color:#8a6d3b}.list-group-item-danger{color:#a94442;background-color:#f2dede}a.list-group-item-danger,button.list-group-item-danger{color:#a94442}a.list-group-item-danger .list-group-item-heading,button.list-group-item-danger .list-group-item-heading{color:inherit}a.list-group-item-danger:focus,a.list-group-item-danger:hover,button.list-group-item-danger:focus,button.list-group-item-danger:hover{color:#a94442;background-color:#ebcccc}a.list-group-item-danger.active,a.list-group-item-danger.active:focus,a.list-group-item-danger.active:hover,button.list-group-item-danger.active,button.list-group-item-danger.active:focus,button.list-group-item-danger.active:hover{color:#fff;background-color:#a94442;border-color:#a94442}.list-group-item-heading{margin-top:0;margin-bottom:5px}.list-group-item-text{margin-bottom:0;line-height:1.3}.panel{margin-bottom:20px;background-color:#fff;border:1px solid transparent;border-radius:4px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,.05);box-shadow:0 1px 1px rgba(0,0,0,.05)}.panel-body{padding:15px}.panel-heading{padding:10px 15px;border-bottom:1px solid transparent;border-top-left-radius:3px;border-top-right-radius:3px}.panel-heading>.dropdown .dropdown-toggle{color:inherit}.panel-title{margin-top:0;margin-bottom:0;font-size:16px;color:inherit}.panel-title>.small,.panel-title>.small>a,.panel-title>a,.panel-title>small,.panel-title>small>a{color:inherit}.panel-footer{padding:10px 15px;background-color:#f5f5f5;border-top:1px solid #ddd;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.list-group,.panel>.panel-collapse>.list-group{margin-bottom:0}.panel>.list-group .list-group-item,.panel>.panel-collapse>.list-group .list-group-item{border-width:1px 0;border-radius:0}.panel>.list-group:first-child .list-group-item:first-child,.panel>.panel-collapse>.list-group:first-child .list-group-item:first-child{border-top:0;border-top-left-radius:3px;border-top-right-radius:3px}.panel>.list-group:last-child .list-group-item:last-child,.panel>.panel-collapse>.list-group:last-child .list-group-item:last-child{border-bottom:0;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.panel-heading+.panel-collapse>.list-group .list-group-item:first-child{border-top-left-radius:0;border-top-right-radius:0}.panel-heading+.list-group .list-group-item:first-child{border-top-width:0}.list-group+.panel-footer{border-top-width:0}.panel>.panel-collapse>.table,.panel>.table,.panel>.table-responsive>.table{margin-bottom:0}.panel>.panel-collapse>.table caption,.panel>.table caption,.panel>.table-responsive>.table caption{padding-right:15px;padding-left:15px}.panel>.table-responsive:first-child>.table:first-child,.panel>.table:first-child{border-top-left-radius:3px;border-top-right-radius:3px}.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child,.panel>.table:first-child>thead:first-child>tr:first-child{border-top-left-radius:3px;border-top-right-radius:3px}.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table:first-child>thead:first-child>tr:first-child th:first-child{border-top-left-radius:3px}.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table:first-child>thead:first-child>tr:first-child th:last-child{border-top-right-radius:3px}.panel>.table-responsive:last-child>.table:last-child,.panel>.table:last-child{border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child{border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child{border-bottom-left-radius:3px}.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child{border-bottom-right-radius:3px}.panel>.panel-body+.table,.panel>.panel-body+.table-responsive,.panel>.table+.panel-body,.panel>.table-responsive+.panel-body{border-top:1px solid #ddd}.panel>.table>tbody:first-child>tr:first-child td,.panel>.table>tbody:first-child>tr:first-child th{border-top:0}.panel>.table-bordered,.panel>.table-responsive>.table-bordered{border:0}.panel>.table-bordered>tbody>tr>td:first-child,.panel>.table-bordered>tbody>tr>th:first-child,.panel>.table-bordered>tfoot>tr>td:first-child,.panel>.table-bordered>tfoot>tr>th:first-child,.panel>.table-bordered>thead>tr>td:first-child,.panel>.table-bordered>thead>tr>th:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,.panel>.table-responsive>.table-bordered>thead>tr>td:first-child,.panel>.table-responsive>.table-bordered>thead>tr>th:first-child{border-left:0}.panel>.table-bordered>tbody>tr>td:last-child,.panel>.table-bordered>tbody>tr>th:last-child,.panel>.table-bordered>tfoot>tr>td:last-child,.panel>.table-bordered>tfoot>tr>th:last-child,.panel>.table-bordered>thead>tr>td:last-child,.panel>.table-bordered>thead>tr>th:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,.panel>.table-responsive>.table-bordered>thead>tr>td:last-child,.panel>.table-responsive>.table-bordered>thead>tr>th:last-child{border-right:0}.panel>.table-bordered>tbody>tr:first-child>td,.panel>.table-bordered>tbody>tr:first-child>th,.panel>.table-bordered>thead>tr:first-child>td,.panel>.table-bordered>thead>tr:first-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>th,.panel>.table-responsive>.table-bordered>thead>tr:first-child>td,.panel>.table-responsive>.table-bordered>thead>tr:first-child>th{border-bottom:0}.panel>.table-bordered>tbody>tr:last-child>td,.panel>.table-bordered>tbody>tr:last-child>th,.panel>.table-bordered>tfoot>tr:last-child>td,.panel>.table-bordered>tfoot>tr:last-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th{border-bottom:0}.panel>.table-responsive{margin-bottom:0;border:0}.panel-group{margin-bottom:20px}.panel-group .panel{margin-bottom:0;border-radius:4px}.panel-group .panel+.panel{margin-top:5px}.panel-group .panel-heading{border-bottom:0}.panel-group .panel-heading+.panel-collapse>.list-group,.panel-group .panel-heading+.panel-collapse>.panel-body{border-top:1px solid #ddd}.panel-group .panel-footer{border-top:0}.panel-group .panel-footer+.panel-collapse .panel-body{border-bottom:1px solid #ddd}.panel-default{border-color:#ddd}.panel-default>.panel-heading{color:#333;background-color:#f5f5f5;border-color:#ddd}.panel-default>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ddd}.panel-default>.panel-heading .badge{color:#f5f5f5;background-color:#333}.panel-default>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ddd}.panel-primary{border-color:#337ab7}.panel-primary>.panel-heading{color:#fff;background-color:#337ab7;border-color:#337ab7}.panel-primary>.panel-heading+.panel-collapse>.panel-body{border-top-color:#337ab7}.panel-primary>.panel-heading .badge{color:#337ab7;background-color:#fff}.panel-primary>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#337ab7}.panel-success{border-color:#d6e9c6}.panel-success>.panel-heading{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6}.panel-success>.panel-heading+.panel-collapse>.panel-body{border-top-color:#d6e9c6}.panel-success>.panel-heading .badge{color:#dff0d8;background-color:#3c763d}.panel-success>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#d6e9c6}.panel-info{border-color:#bce8f1}.panel-info>.panel-heading{color:#31708f;background-color:#d9edf7;border-color:#bce8f1}.panel-info>.panel-heading+.panel-collapse>.panel-body{border-top-color:#bce8f1}.panel-info>.panel-heading .badge{color:#d9edf7;background-color:#31708f}.panel-info>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#bce8f1}.panel-warning{border-color:#faebcc}.panel-warning>.panel-heading{color:#8a6d3b;background-color:#fcf8e3;border-color:#faebcc}.panel-warning>.panel-heading+.panel-collapse>.panel-body{border-top-color:#faebcc}.panel-warning>.panel-heading .badge{color:#fcf8e3;background-color:#8a6d3b}.panel-warning>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#faebcc}.panel-danger{border-color:#ebccd1}.panel-danger>.panel-heading{color:#a94442;background-color:#f2dede;border-color:#ebccd1}.panel-danger>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ebccd1}.panel-danger>.panel-heading .badge{color:#f2dede;background-color:#a94442}.panel-danger>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ebccd1}.embed-responsive{position:relative;display:block;height:0;padding:0;overflow:hidden}.embed-responsive .embed-responsive-item,.embed-responsive embed,.embed-responsive iframe,.embed-responsive object,.embed-responsive video{position:absolute;top:0;bottom:0;left:0;width:100%;height:100%;border:0}.embed-responsive-16by9{padding-bottom:56.25%}.embed-responsive-4by3{padding-bottom:75%}.well{min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.05);box-shadow:inset 0 1px 1px rgba(0,0,0,.05)}.well blockquote{border-color:#ddd;border-color:rgba(0,0,0,.15)}.well-lg{padding:24px;border-radius:6px}.well-sm{padding:9px;border-radius:3px}.close{float:right;font-size:21px;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;filter:alpha(opacity=20);opacity:.2}.close:focus,.close:hover{color:#000;text-decoration:none;cursor:pointer;filter:alpha(opacity=50);opacity:.5}button.close{-webkit-appearance:none;padding:0;cursor:pointer;background:0 0;border:0}.modal-open{overflow:hidden}.modal{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;overflow:hidden;-webkit-overflow-scrolling:touch;outline:0}.modal.fade .modal-dialog{-webkit-transition:-webkit-transform .3s ease-out;-o-transition:-o-transform .3s ease-out;transition:transform .3s ease-out;-webkit-transform:translate(0,-25%);-ms-transform:translate(0,-25%);-o-transform:translate(0,-25%);transform:translate(0,-25%)}.modal.in .modal-dialog{-webkit-transform:translate(0,0);-ms-transform:translate(0,0);-o-transform:translate(0,0);transform:translate(0,0)}.modal-open .modal{overflow-x:hidden;overflow-y:auto}.modal-dialog{position:relative;width:auto;margin:10px}.modal-content{position:relative;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #999;border:1px solid rgba(0,0,0,.2);border-radius:6px;outline:0;-webkit-box-shadow:0 3px 9px rgba(0,0,0,.5);box-shadow:0 3px 9px rgba(0,0,0,.5)}.modal-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1040;background-color:#000}.modal-backdrop.fade{filter:alpha(opacity=0);opacity:0}.modal-backdrop.in{filter:alpha(opacity=50);opacity:.5}.modal-header{padding:15px;border-bottom:1px solid #e5e5e5}.modal-header .close{margin-top:-2px}.modal-title{margin:0;line-height:1.42857143}.modal-body{position:relative;padding:15px}.modal-footer{padding:15px;text-align:right;border-top:1px solid #e5e5e5}.modal-footer .btn+.btn{margin-bottom:0;margin-left:5px}.modal-footer .btn-group .btn+.btn{margin-left:-1px}.modal-footer .btn-block+.btn-block{margin-left:0}.modal-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}@media (min-width:768px){.modal-dialog{width:600px;margin:30px auto}.modal-content{-webkit-box-shadow:0 5px 15px rgba(0,0,0,.5);box-shadow:0 5px 15px rgba(0,0,0,.5)}.modal-sm{width:300px}}@media (min-width:992px){.modal-lg{width:900px}}.tooltip{position:absolute;z-index:1070;display:block;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:12px;font-style:normal;font-weight:400;line-height:1.42857143;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;word-wrap:normal;white-space:normal;filter:alpha(opacity=0);opacity:0;line-break:auto}.tooltip.in{filter:alpha(opacity=90);opacity:.9}.tooltip.top{padding:5px 0;margin-top:-3px}.tooltip.right{padding:0 5px;margin-left:3px}.tooltip.bottom{padding:5px 0;margin-top:3px}.tooltip.left{padding:0 5px;margin-left:-3px}.tooltip-inner{max-width:200px;padding:3px 8px;color:#fff;text-align:center;background-color:#000;border-radius:4px}.tooltip-arrow{position:absolute;width:0;height:0;border-color:transparent;border-style:solid}.tooltip.top .tooltip-arrow{bottom:0;left:50%;margin-left:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.top-left .tooltip-arrow{right:5px;bottom:0;margin-bottom:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.top-right .tooltip-arrow{bottom:0;left:5px;margin-bottom:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.right .tooltip-arrow{top:50%;left:0;margin-top:-5px;border-width:5px 5px 5px 0;border-right-color:#000}.tooltip.left .tooltip-arrow{top:50%;right:0;margin-top:-5px;border-width:5px 0 5px 5px;border-left-color:#000}.tooltip.bottom .tooltip-arrow{top:0;left:50%;margin-left:-5px;border-width:0 5px 5px;border-bottom-color:#000}.tooltip.bottom-left .tooltip-arrow{top:0;right:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000}.tooltip.bottom-right .tooltip-arrow{top:0;left:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000}.popover{position:absolute;top:0;left:0;z-index:1060;display:none;max-width:276px;padding:1px;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;font-style:normal;font-weight:400;line-height:1.42857143;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;word-wrap:normal;white-space:normal;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0,0,0,.2);border-radius:6px;-webkit-box-shadow:0 5px 10px rgba(0,0,0,.2);box-shadow:0 5px 10px rgba(0,0,0,.2);line-break:auto}.popover.top{margin-top:-10px}.popover.right{margin-left:10px}.popover.bottom{margin-top:10px}.popover.left{margin-left:-10px}.popover-title{padding:8px 14px;margin:0;font-size:14px;background-color:#f7f7f7;border-bottom:1px solid #ebebeb;border-radius:5px 5px 0 0}.popover-content{padding:9px 14px}.popover>.arrow,.popover>.arrow:after{position:absolute;display:block;width:0;height:0;border-color:transparent;border-style:solid}.popover>.arrow{border-width:11px}.popover>.arrow:after{content:"";border-width:10px}.popover.top>.arrow{bottom:-11px;left:50%;margin-left:-11px;border-top-color:#999;border-top-color:rgba(0,0,0,.25);border-bottom-width:0}.popover.top>.arrow:after{bottom:1px;margin-left:-10px;content:" ";border-top-color:#fff;border-bottom-width:0}.popover.right>.arrow{top:50%;left:-11px;margin-top:-11px;border-right-color:#999;border-right-color:rgba(0,0,0,.25);border-left-width:0}.popover.right>.arrow:after{bottom:-10px;left:1px;content:" ";border-right-color:#fff;border-left-width:0}.popover.bottom>.arrow{top:-11px;left:50%;margin-left:-11px;border-top-width:0;border-bottom-color:#999;border-bottom-color:rgba(0,0,0,.25)}.popover.bottom>.arrow:after{top:1px;margin-left:-10px;content:" ";border-top-width:0;border-bottom-color:#fff}.popover.left>.arrow{top:50%;right:-11px;margin-top:-11px;border-right-width:0;border-left-color:#999;border-left-color:rgba(0,0,0,.25)}.popover.left>.arrow:after{right:1px;bottom:-10px;content:" ";border-right-width:0;border-left-color:#fff}.carousel{position:relative}.carousel-inner{position:relative;width:100%;overflow:hidden}.carousel-inner>.item{position:relative;display:none;-webkit-transition:.6s ease-in-out left;-o-transition:.6s ease-in-out left;transition:.6s ease-in-out left}.carousel-inner>.item>a>img,.carousel-inner>.item>img{line-height:1}@media all and (transform-3d),(-webkit-transform-3d){.carousel-inner>.item{-webkit-transition:-webkit-transform .6s ease-in-out;-o-transition:-o-transform .6s ease-in-out;transition:transform .6s ease-in-out;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-perspective:1000px;perspective:1000px}.carousel-inner>.item.active.right,.carousel-inner>.item.next{left:0;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}.carousel-inner>.item.active.left,.carousel-inner>.item.prev{left:0;-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}.carousel-inner>.item.active,.carousel-inner>.item.next.left,.carousel-inner>.item.prev.right{left:0;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.carousel-inner>.active,.carousel-inner>.next,.carousel-inner>.prev{display:block}.carousel-inner>.active{left:0}.carousel-inner>.next,.carousel-inner>.prev{position:absolute;top:0;width:100%}.carousel-inner>.next{left:100%}.carousel-inner>.prev{left:-100%}.carousel-inner>.next.left,.carousel-inner>.prev.right{left:0}.carousel-inner>.active.left{left:-100%}.carousel-inner>.active.right{left:100%}.carousel-control{position:absolute;top:0;bottom:0;left:0;width:15%;font-size:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,.6);background-color:rgba(0,0,0,0);filter:alpha(opacity=50);opacity:.5}.carousel-control.left{background-image:-webkit-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,.0001)));background-image:linear-gradient(to right,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);background-repeat:repeat-x}.carousel-control.right{right:0;left:auto;background-image:-webkit-linear-gradient(left,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.0001)),to(rgba(0,0,0,.5)));background-image:linear-gradient(to right,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);background-repeat:repeat-x}.carousel-control:focus,.carousel-control:hover{color:#fff;text-decoration:none;filter:alpha(opacity=90);outline:0;opacity:.9}.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next,.carousel-control .icon-prev{position:absolute;top:50%;z-index:5;display:inline-block;margin-top:-10px}.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{left:50%;margin-left:-10px}.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{right:50%;margin-right:-10px}.carousel-control .icon-next,.carousel-control .icon-prev{width:20px;height:20px;font-family:serif;line-height:1}.carousel-control .icon-prev:before{content:'\2039'}.carousel-control .icon-next:before{content:'\203a'}.carousel-indicators{position:absolute;bottom:10px;left:50%;z-index:15;width:60%;padding-left:0;margin-left:-30%;text-align:center;list-style:none}.carousel-indicators li{display:inline-block;width:10px;height:10px;margin:1px;text-indent:-999px;cursor:pointer;background-color:#000\9;background-color:rgba(0,0,0,0);border:1px solid #fff;border-radius:10px}.carousel-indicators .active{width:12px;height:12px;margin:0;background-color:#fff}.carousel-caption{position:absolute;right:15%;bottom:20px;left:15%;z-index:10;padding-top:20px;padding-bottom:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,.6)}.carousel-caption .btn{text-shadow:none}@media screen and (min-width:768px){.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next,.carousel-control .icon-prev{width:30px;height:30px;margin-top:-10px;font-size:30px}.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{margin-left:-10px}.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{margin-right:-10px}.carousel-caption{right:20%;left:20%;padding-bottom:30px}.carousel-indicators{bottom:20px}}.btn-group-vertical>.btn-group:after,.btn-group-vertical>.btn-group:before,.btn-toolbar:after,.btn-toolbar:before,.clearfix:after,.clearfix:before,.container-fluid:after,.container-fluid:before,.container:after,.container:before,.dl-horizontal dd:after,.dl-horizontal dd:before,.form-horizontal .form-group:after,.form-horizontal .form-group:before,.modal-footer:after,.modal-footer:before,.modal-header:after,.modal-header:before,.nav:after,.nav:before,.navbar-collapse:after,.navbar-collapse:before,.navbar-header:after,.navbar-header:before,.navbar:after,.navbar:before,.pager:after,.pager:before,.panel-body:after,.panel-body:before,.row:after,.row:before{display:table;content:" "}.btn-group-vertical>.btn-group:after,.btn-toolbar:after,.clearfix:after,.container-fluid:after,.container:after,.dl-horizontal dd:after,.form-horizontal .form-group:after,.modal-footer:after,.modal-header:after,.nav:after,.navbar-collapse:after,.navbar-header:after,.navbar:after,.pager:after,.panel-body:after,.row:after{clear:both}.center-block{display:block;margin-right:auto;margin-left:auto}.pull-right{float:right!important}.pull-left{float:left!important}.hide{display:none!important}.show{display:block!important}.invisible{visibility:hidden}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.hidden{display:none!important}.affix{position:fixed}@-ms-viewport{width:device-width}.visible-lg,.visible-md,.visible-sm,.visible-xs{display:none!important}.visible-lg-block,.visible-lg-inline,.visible-lg-inline-block,.visible-md-block,.visible-md-inline,.visible-md-inline-block,.visible-sm-block,.visible-sm-inline,.visible-sm-inline-block,.visible-xs-block,.visible-xs-inline,.visible-xs-inline-block{display:none!important}@media (max-width:767px){.visible-xs{display:block!important}table.visible-xs{display:table!important}tr.visible-xs{display:table-row!important}td.visible-xs,th.visible-xs{display:table-cell!important}}@media (max-width:767px){.visible-xs-block{display:block!important}}@media (max-width:767px){.visible-xs-inline{display:inline!important}}@media (max-width:767px){.visible-xs-inline-block{display:inline-block!important}}@media (min-width:768px) and (max-width:991px){.visible-sm{display:block!important}table.visible-sm{display:table!important}tr.visible-sm{display:table-row!important}td.visible-sm,th.visible-sm{display:table-cell!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-block{display:block!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline{display:inline!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline-block{display:inline-block!important}}@media (min-width:992px) and (max-width:1199px){.visible-md{display:block!important}table.visible-md{display:table!important}tr.visible-md{display:table-row!important}td.visible-md,th.visible-md{display:table-cell!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-block{display:block!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline{display:inline!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline-block{display:inline-block!important}}@media (min-width:1200px){.visible-lg{display:block!important}table.visible-lg{display:table!important}tr.visible-lg{display:table-row!important}td.visible-lg,th.visible-lg{display:table-cell!important}}@media (min-width:1200px){.visible-lg-block{display:block!important}}@media (min-width:1200px){.visible-lg-inline{display:inline!important}}@media (min-width:1200px){.visible-lg-inline-block{display:inline-block!important}}@media (max-width:767px){.hidden-xs{display:none!important}}@media (min-width:768px) and (max-width:991px){.hidden-sm{display:none!important}}@media (min-width:992px) and (max-width:1199px){.hidden-md{display:none!important}}@media (min-width:1200px){.hidden-lg{display:none!important}}.visible-print{display:none!important}@media print{.visible-print{display:block!important}table.visible-print{display:table!important}tr.visible-print{display:table-row!important}td.visible-print,th.visible-print{display:table-cell!important}}.visible-print-block{display:none!important}@media print{.visible-print-block{display:block!important}}.visible-print-inline{display:none!important}@media print{.visible-print-inline{display:inline!important}}.visible-print-inline-block{display:none!important}@media print{.visible-print-inline-block{display:inline-block!important}}@media print{.hidden-print{display:none!important}}
/*# sourceMappingURL=bootstrap.min.css.map */
/* vietnamese */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 100;
  src: local('Josefin Sans Thin'), local('JosefinSans-Thin'), url(https://fonts.gstatic.com/s/josefinsans/v12/Qw3EZQNVED7rKGKxtqIqX5Ecbkx1XHgciw.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 100;
  src: local('Josefin Sans Thin'), local('JosefinSans-Thin'), url(https://fonts.gstatic.com/s/josefinsans/v12/Qw3EZQNVED7rKGKxtqIqX5Ecbkx0XHgciw.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 100;
  src: local('Josefin Sans Thin'), local('JosefinSans-Thin'), url(https://fonts.gstatic.com/s/josefinsans/v12/Qw3EZQNVED7rKGKxtqIqX5Ecbkx6XHg.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* vietnamese */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Josefin Sans Light'), local('JosefinSans-Light'), url(https://fonts.gstatic.com/s/josefinsans/v12/Qw3FZQNVED7rKGKxtqIqX5Ecpl5tdF0hspo.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Josefin Sans Light'), local('JosefinSans-Light'), url(https://fonts.gstatic.com/s/josefinsans/v12/Qw3FZQNVED7rKGKxtqIqX5Ecpl5tdV0hspo.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Josefin Sans Light'), local('JosefinSans-Light'), url(https://fonts.gstatic.com/s/josefinsans/v12/Qw3FZQNVED7rKGKxtqIqX5Ecpl5te10h.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* vietnamese */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Josefin Sans Regular'), local('JosefinSans-Regular'), url(https://fonts.gstatic.com/s/josefinsans/v12/Qw3aZQNVED7rKGKxtqIqX5EUAnx4RHw.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Josefin Sans Regular'), local('JosefinSans-Regular'), url(https://fonts.gstatic.com/s/josefinsans/v12/Qw3aZQNVED7rKGKxtqIqX5EUA3x4RHw.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Josefin Sans Regular'), local('JosefinSans-Regular'), url(https://fonts.gstatic.com/s/josefinsans/v12/Qw3aZQNVED7rKGKxtqIqX5EUDXx4.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* devanagari */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 300;
  src: local('Poppins Light'), local('Poppins-Light'), url(https://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLDz8Z11lFc-K.woff2) format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
}
/* latin-ext */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 300;
  src: local('Poppins Light'), local('Poppins-Light'), url(https://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLDz8Z1JlFc-K.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 300;
  src: local('Poppins Light'), local('Poppins-Light'), url(https://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLDz8Z1xlFQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* devanagari */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 400;
  src: local('Poppins Regular'), local('Poppins-Regular'), url(https://fonts.gstatic.com/s/poppins/v5/pxiEyp8kv8JHgFVrJJbecmNE.woff2) format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
}
/* latin-ext */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 400;
  src: local('Poppins Regular'), local('Poppins-Regular'), url(https://fonts.gstatic.com/s/poppins/v5/pxiEyp8kv8JHgFVrJJnecmNE.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 400;
  src: local('Poppins Regular'), local('Poppins-Regular'), url(https://fonts.gstatic.com/s/poppins/v5/pxiEyp8kv8JHgFVrJJfecg.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* devanagari */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 500;
  src: local('Poppins Medium'), local('Poppins-Medium'), url(https://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLGT9Z11lFc-K.woff2) format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
}
/* latin-ext */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 500;
  src: local('Poppins Medium'), local('Poppins-Medium'), url(https://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLGT9Z1JlFc-K.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 500;
  src: local('Poppins Medium'), local('Poppins-Medium'), url(https://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLGT9Z1xlFQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* devanagari */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 600;
  src: local('Poppins SemiBold'), local('Poppins-SemiBold'), url(https://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLEj6Z11lFc-K.woff2) format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
}
/* latin-ext */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 600;
  src: local('Poppins SemiBold'), local('Poppins-SemiBold'), url(https://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLEj6Z1JlFc-K.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 600;
  src: local('Poppins SemiBold'), local('Poppins-SemiBold'), url(https://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLEj6Z1xlFQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* devanagari */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 700;
  src: local('Poppins Bold'), local('Poppins-Bold'), url(https://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLCz7Z11lFc-K.woff2) format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
}
/* latin-ext */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 700;
  src: local('Poppins Bold'), local('Poppins-Bold'), url(https://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLCz7Z1JlFc-K.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 700;
  src: local('Poppins Bold'), local('Poppins-Bold'), url(https://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLCz7Z1xlFQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu72xKOzY.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu5mxKOzY.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu7mxKOzY.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu4WxKOzY.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu7WxKOzY.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,
ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,
tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font-family: Roboto;
    vertical-align: baseline
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
    display: block;
    background-color: #262626
}

body {
    line-height: 1
}

ol,
ul {
    list-style: none
}

blockquote,
q {
    quotes: none
}

blockquote:before,
blockquote:after,
q:before,
q:after {
    content: '';
    content: none
}

table {
    border-collapse: collapse;
    border-spacing: 0
}

h1 {
    font-size: 16px
}

h2 {
	 font-size: 16px
}

html * {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

*,
:after,
:before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: Roboto
}

p {
    font-family: Roboto;
    line-height: 1;
    font-size: 16px;
    color: #000
}

::-moz-selection {
    color: #FFF;
    background: #33C
}

::selection {
    color: #FFF;
    background: #33C
}

.nopadding {
    padding: 0
}

.custompadding {
    padding-left: 5px;
    padding-right: 5px
}

.no-margin {
    margin-right: 0;
    margin-left: 0
}

.error-message {
    color: #F33;
    font-family: Roboto;
    margin-top: 5px
}

.success-message {
    color: #090;
    font-family: Roboto;
    margin-top: 5px
}

#loading {
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    position: fixed;
    opacity: 1;
    background-color: #F2F2F2;
    z-index: 9999;
    text-align: center
}

#loading-image {
    display: inline;
    top: 40%;
    position: relative;
    z-index: 9999
}

.logo {
    margin: 0 auto;
    padding: 0;
    z-index: 111
}

.logo:hover,
.logo:focus {
    text-decoration: none;
    color: #FFF
}

.navbar {
    font-size: 14px;
    font-family: Roboto;
    font-weight: 400;
    text-transform: capitalize;
    padding-top: 25px;
    letter-spacing: 1px;
    height: 80px;
    -webkit-transition: all .6s;
    -moz-transition: all .6s;
    -o-transition: all .6s;
    transition: all .6s;
    -webkit-backface-visibility: hidden
}

.navbar-default {
    transition: all .6s ease;
    border-color: transparent;
    background-color: transparent
}

.navbar-default .navbar-toggle {
    border-radius: 0;
    border-color: transparent
}

.navbar-default .navbar-toggle:hover {
    background-color: transparent
}

.navbar-default .navbar-toggle:focus {
    background-color: transparent
}

.navbar-default .navbar-toggle .icon-bar {
    background-color: #111
}

.navbar-default .navbar-brand .navbar-toggle .collapsed {
    padding: 4px 6px;
    font-size: 14px;
    color: #111
}

.navbar-default .navbar-brand {
    padding-top: 5px;
    color: #111;
    -webkit-transition: 200ms;
    -moz-transition: 200ms;
    -o-transition: 200ms;
    transition: 200ms
}

.navbar-default .navbar-brand:hover {
    transition: 1s
}

.navbar-default .navbar-nav > li > a {
    color: #111;
    -webkit-transition: all .5s;
    -moz-transition: all .5;
    transition: all .5s
}

.navbar-default .navbar-nav > li > a:hover {
    color: #A1A1A1
}

.navbar-default .navbar-nav > .active > a {
    background: transparent;
    color: #222
}

.navbar-default .navbar-nav > .active > a:hover {
    background: transparent;
    color: #333
}

.navbar-default .navbar-nav > .active > a:focus {
    background: transparent;
    color: #111
}

.navbar-default .navbar-collapse {
    border-color: transparent;
    background-color: transparent
}

.navbar-default .navbar-nav .open .dropdown-toggle {
    color: #111
}

.navbar-default .nav-white > li > a {
    color: #FFF
}

.navbar-default .nav-white > li > a:hover {
    color: #999
}

.navbar-default .navbar-brand.nav-white {
    padding-top: 15px;
    color: #FFF;
    font-size: 21px;
    letter-spacing: 1px;
    -webkit-transition: 200ms;
    -moz-transition: 200ms;
    -o-transition: 200ms;
    transition: 200ms
}

@media only screen and (max-width: 767px) {
    .navbar {
        padding-top: 5px;
        height: 60px
    }
    .navbar-default {
        border: 0;
        background-color: transparent
    }
    .navbar-default .navbar-collapse {
        text-align: center;
        border-color: transparent;
        background-color: #FFF;
        border: 0;
        border-color: transparent
    }
    .navbar-default .navbar-nav > li> a {
        color: #222;
        margin-top: 10px
    }
    .navbar-default .navbar-nav > li> a:hover {
        color: #222
    }
    .navbar-default .navbar-brand {
        color: #FFF;
        padding: 16px 15px!important
    }
    .navbar-default .navbar-brand.nav-white {
        color: #FFF
    }
    .navbar-default .navbar-toggle .icon-bar {
        background-color: #111
    }
}

@media only screen and (min-width: 240px) {
    .navbar.past-main {
        font-size: 14px;
        padding-top: 5px;
        height: 60px;
        background-color: rgba(255, 255, 255, 0.99);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -webkit-transition: all .6s;
        -moz-transition: all .6s;
        -o-transition: all .6s;
        transition: all .6s
    }
    .navbar-default.past-main .navbar-brand {
        color: #111
    }
    .navbar-default.past-main .navbar-toggle .icon-bar {
        background-color: #111
    }
    .navbar-default.past-main .navbar-nav > li > a {
        color: #222;
        -webkit-transition: color .5s;
        transition: color .5s
    }
    .navbar-default.past-main .navbar-nav > li > a:hover {
        color: #111
    }
    .navbar-default.past-main .navbar-nav > .active > a {
        background: transparent;
        color: #5924EC
    }
    .navbar-default.past-main .navbar-nav > .active > a:hover {
        background: transparent;
        color: #222
    }
    .navbar-default.past-main .navbar-nav > .active > a:focus {
        background: transparent;
        color: #222
    }
}

.navbar-default .nav-white .navbar-toggle .icon-bar {
    background-color: #FFF
}

.navbar-default.past-main .nav-white .navbar-toggle .icon-bar {
    background-color: #111
}

#main {
    height: 100%
}

.hero-section {
    height: 100%;
    background: #FFF;
    padding: 150px 0 0
}

.hero-content {
    padding: 100px 0;
    overflow: hidden
}

.hero-content h1 {
    font-size: 34px;
    font-weight: 400;
    color: #262626;
    line-height: 1.2;
    letter-spacing: -1px;
    margin: 0 0 20px
}

.hero-content p {
    font-family: Roboto;
    font-size: 20px;
    color: #000;
    font-weight: 400;
    line-height: 1.5;
    margin: 0 0 25px
}

.btn-action {
    font-family: Roboto;
    background-color: #33C;
    border: 1px solid #33C;
    border-radius: 0;
    color: #FFF;
    font-size: 13px;
    font-weight: 400;
    letter-spacing: 2px;
    line-height: 1;
    padding: 10px 21px;
    text-transform: uppercase;
    outline: none;
    -webkit-transition: 200ms;
    -moz-transition: 200ms;
    -o-transition: 200ms;
    transition: 200ms
}

.btn-action:hover,
.btn-action:focus,
.btn-action:active,
.btn-action:active:focus {
    background: transparent;
    outline: none;
    color: #33C;
    background: transparent;
    border-color: #33C
}

.product .btn-action {
    background-color: transparent;
    border: 1px solid #82714a;
    color: #82714a
}

.product .btn-action:hover,
.product .btn-action:focus {
    background: #92714A;
    color: #FFF;
    border-color: #82714A
}

.software .hero-section {
    padding: 100px 0 0;
    background: #F9F9F9
}

.software .hero-content h1 {
    font-size: 34px;
    font-weight: 600;
    color: #444;
    margin: 0 0 20px
}

.software .btn-action {
    font-family: Roboto;
    background-color: #3f51b5;
    border: 1px solid #3f51b5;
    border-radius: 50px;
    color: #FFF;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 2px;
    line-height: 1;
    padding: 12px 24px;
    text-transform: uppercase;
    outline: none;
    -webkit-transition: 200ms;
    -moz-transition: 200ms;
    -o-transition: 200ms;
    transition: 200ms
}

.software .btn-action:hover,
.software .btn-action:focus,
.software .btn-action:active,
.software .btn-action:active:focus {
    background: transparent;
    outline: none;
    color: #3f51b5;
    background: transparent;
    border-color: #3f51b5
}

.software .hero-section img {
    margin: 0 auto
}

.form .hero-section {
    background: #F2F2F2;
    background-size: cover;
    padding: 150px 0 0
}

.form .hero-content {
    padding: 50px 0;
    overflow: hidden
}

.form img {
    margin: 0 auto
}

.form .hero-content h1 {
    font-size: 34px;
    font-weight: 700;
    color: #222;
    line-height: 1.2;
    letter-spacing: -1px;
    margin: 0 0 20px
}

.form .hero-content p {
    font-family: Roboto;
    font-size: 14px;
    color: #000;
    font-weight: 400;
    line-height: 1.5;
    margin: 0 0 25px
}

.form .sub-form {
    padding: 30px 0 0;
    text-align: left
}

.form .subscribe-form .submit-button {
    font-size: .9em;
    height: 40px;
    border: 2px solid;
    border-radius: 0 5px 5px 0;
    margin: 0;
    padding: 0 25px;
    border-color: #FFF;
    background-color: #33C;
    color: #FFF;
    box-shadow: 0 0 1px transparent;
    outline: none;
    -webkit-transition: 500ms;
    -moz-transition: 500ms;
    transition: 500ms
}

.form .subscribe-form .submit-button:hover {
    border-color: #33C;
    -webkit-transition: 500ms;
    -moz-transition: 500ms;
    transition: 500ms
}

.form .btn-action {
    background: #33C;
    border-color: #33C;
    color: #FFF
}

.form .btn-action:hover {
    background: transparent;
    border-color: #33C;
    color: #33C
}

.image-bg .hero-section {
    background: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2)), url("https://adresgezginitasarim.com/aykan/assets/images/instagram.jpg") no-repeat center center;
    background-size: cover;
    padding: 150px 0 100px
}

.image-bg .hero-content h1 {
    font-weight: 600;
    color: #FFF
}

.image-bg .hero-content p {
    color: #FFF
}

.signup .hero-section {
    background: linear-gradient(to right, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.7)), url("https://adresgezginitasarim.com/aykan/assets/images/instagram.jpg") no-repeat center center;
    background-size: cover;
    padding: 150px 0 100px
}

.signup .hero-content {
    padding: 50px 0 100px
}

.signup .hero-content h1 {
    font-size: 34px;
    font-weight: 600;
    color: #FFF;
    line-height: 1.2;
    letter-spacing: 0
}

.signup .hero-content p {
    color: #FFF
}

.signup-form {
    padding: 25px 25px 30px;
    background: #33C;
    -moz-border-radius: 0 0 4px 4px;
    -webkit-border-radius: 0 0 4px 4px;
    border-radius: 0 0 4px 4px;
    text-align: left
}

.signup-form h1 {
    font-weight: 600;
    font-size: 24px;
    color: #FFF;
    letter-spacing: 0;
    line-height: 1.4;
    text-transform: capitalize;
    text-align: center;
    margin: 20px 0 30px
}

.signup-form form textarea {
    height: 100px
}

.signup-form form .input-error {
    border-color: #19b9e7
}

.signup-form p {
    font-family: Roboto;
    font-size: 12px;
    color: #DDD;
    margin: 25px 0 10px
}

.form-group {
    margin-bottom: 20px
}

.signup .btn-action.btn-round {
    background: #33C;
    border-color: #33C;
    color: #FFF;
    font-size: 15px;
    padding: 12px 24px;
    font-weight: 600;
    text-transform: capitalize;
    border: 2px solid #33C;
    border-radius: 30px
}

.signup .btn-action.btn-round:hover,
.signup .btn-action.btn-round:focus {
    background: transparent;
    color: #33C;
    border-color: #33C
}

.signup .btn-action {
    background: #33C;
    border-color: #33C;
    color: #FFF
}

.signup .btn-action:hover {
    background: transparent;
    border-color: #33C;
    color: #33C
}

input[type="text"],
textarea,
textarea.form-control {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 4px;
    font-family: Roboto;
    -webkit-box-shadow: 0 1px 8px 1px rgba(0, 0, 0, 0.73);
    -moz-box-shadow: 0 1px 8px 1px rgba(0, 0, 0, 0.73);
    box-shadow: 0 1px 8px 1px rgba(0, 0, 0, 0.73)
}
input[type="email"],
textarea,
textarea.form-control {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 4px;
    font-family: Roboto;
    -webkit-box-shadow: 0 1px 8px 1px rgba(0, 0, 0, 0.73);
    -moz-box-shadow: 0 1px 8px 1px rgba(0, 0, 0, 0.73);
    box-shadow: 0 1px 8px 1px rgba(0, 0, 0, 0.73)
}
input[type="phone"],
textarea,
textarea.form-control {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 4px;
    font-family: Roboto;
    -webkit-box-shadow: 0 1px 8px 1px rgba(0, 0, 0, 0.73);
    -moz-box-shadow: 0 1px 8px 1px rgba(0, 0, 0, 0.73);
    box-shadow: 0 1px 8px 1px rgba(0, 0, 0, 0.73)
        border-color: transparent;
    background-color: rgb(0, 0, 0, .5);

      
}

textarea,
textarea.form-control {
     width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 4px;
    font-family: Roboto;
    -webkit-box-shadow: 0 1px 8px 1px rgba(0, 0, 0, 0.73);
    -moz-box-shadow: 0 1px 8px 1px rgba(0, 0, 0, 0.73);
    box-shadow: 0 1px 8px 1px rgba(0, 0, 0, 0.73);
    border-color: transparent;
}

input[type="text"]:focus,
textarea:focus,
textarea.form-control:focus {
    outline: 0;
    background: #FFF;
    border: 1px solid #111;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none
}

input[type="text"]:-moz-placeholder,
textarea:-moz-placeholder,
textarea.form-control:-moz-placeholder {
    color: #888
}

input[type="text"]:-ms-input-placeholder,
textarea:-ms-input-placeholder,
textarea.form-control:-ms-input-placeholder {
    color: #888
}

input[type="text"]::-webkit-input-placeholder,
textarea::-webkit-input-placeholder,
textarea.form-control::-webkit-input-placeholder {
    color: #888
}

.signup-form button.btn {
    height: 45px;
    margin: 0;
    padding: 0 20px;
    vertical-align: middle;
    background: #111;
    border: 0;
    font-family: 'Roboto';
    font-size: 16px;
    font-weight: 400;
    line-height: 45px;
    color: #FFF;
    text-transform: uppercase;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    text-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    -o-transition: all .3s;
    -moz-transition: all .3s;
    -webkit-transition: all .3s;
    -ms-transition: all .3s;
    transition: all .3s
}

.signup-form button.btn:hover {
    opacity: .6;
    color: #FFF
}

.signup-form button.btn:active {
    outline: 0;
    opacity: .6;
    color: #FFF;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none
}

.signup-form button.btn:focus {
    outline: 0;
    opacity: .6;
    background: #19b9e7;
    color: #fff
}

.signup-form button.btn:active:focus,
button.btn.active:focus {
    outline: 0;
    opacity: .6;
    background: #19b9e7;
    color: #fff
}

@media only screen and (max-width: 991px) {
    .signup-form {
        max-width: 500px;
        margin: 0 auto
    }
}

.slider-pro .sp-slide {
    background: #222
}

.slider-pro h2.sp-layer {
    font-size: 44px!important;
    color: #111;
    font-weight: 700;
    letter-spacing: -1px;
    line-height: 1.3;
    text-align: left
}

.slider-pro p.sp-layer {
    font-size: 16px;
    color: #A1A1A1;
    line-height: 1.4
}

.slider-pro a {
    text-decoration: none;
    color: #444;
    -webkit-transition: .5s!important;
    -moz-transition: .5s!important;
    transition: .5s!important
}

.slider-pro .link-color {
    text-decoration: none;
    color: #111;
    -webkit-transition: .5s!important;
    -moz-transition: .5s!important;
    transition: .5s!important
}

.slider-pro a:hover {
    color: #999
}

@media only screen and (max-width: 768px) {
    .slider-pro h2.sp-layer {
        font-size: 34px!important
    }
}

.app .hero-section {
    padding: 50px 0 0
}

.app .hero-content {
    padding: 100px 0 0
}

.app img {
    margin: 0 auto
}

.app-info h1 {
    font-size: 34px;
    font-weight: 600;
    color: #404040;
    margin-top: 30px!important
}

.app-info h4 {
    font-family: Roboto;
    font-size: 16px;
    font-weight: 300;
    color: #3C4B5D;
    line-height: 1.4;
    margin-top: 20px
}

.app-info i {
    margin-top: 15px;
    display: inline-block
}

.app-info span {
    font-family: Roboto;
    font-size: 12px;
    font-weight: 400;
    color: #222
}

.app-info .ion {
    font-size: 1em;
    color: #ff8000
}

.download-buttons {
    margin-top: 25px;
    margin-bottom: 25px
}

.download-buttons img {
    margin-left: 5px;
    margin-right: 5px
}

.app .btn-action {
    color: #FFF;
    background: #33C;
    border-color: #33C
}

.app .btn-action:hover {
    color: #33C;
    background: transparent;
    border-color: #33C
}

.cs-main .left-section {
    background-color: #F2F2F2;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    width: 50%;
    height: 100%;
    overflow: hidden;
    z-index: 1
}

.cs-main .right-section {
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    padding: 0 20px;
    width: 50%;
    height: 100%;
    background: #FFF;
    z-index: 99;
    overflow: hidden;
    overflow-y: auto
}

.cs-main .hero-section {
    padding: 120px 0 0;
    background: #FFF!important
}

.cs-main .hero-content {
    padding: 50px 0 0
}

.cs-main .app-info h1 {
    font-weight: 600;
    font-size: 42px
}

.cs-main .left-section {
    background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url(../images/split-bg.jpg) no-repeat center center;
    background-size: cover
}

@media only screen and (max-width: 801px) {
    .cs-main .right-section {
        position: relative;
        width: 100%
    }
    .cs-main .hero-section {
        padding: 50px 0 0
    }
    .cs-main .left-section {
        position: relative;
        width: 100%;
        min-height: 100vh
    }
}

.about {
    padding: 100px 0;
    background: #F1F1F1
}

.about-content {
    max-width: 800px;
    margin: 0 auto
}

.about-content h2 {
    font-family: 'Roboto';
    font-size: 24px;
    line-height: 1.2;
    color: #000
}

.about-content h3 {
    font-family: Roboto;
    font-size: 21px;
    font-weight: 700;
    line-height: 1;
    letter-spacing: 1px;
    text-transform: capitalize;
    color: #000;
    margin: 50px 0 0
}

.client-section {
    background-color: #F3F3F3;
    padding: 5px 0 0
}

.clients .single {
    padding: 25px 0
}

.clients .single img {
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    opacity: .3
}

.pitch {
    padding: 100px 0;
    background: #FFF
}

.pitch-intro {
    max-width: 600px;
    margin: 0 auto;
    padding: 0 0 100px
}

.pitch-intro h1 {
    font-size: 34px;
    font-weight: 600;
    line-height: 1.2;
    letter-spacing: -1px;
    color: #454545;
    margin: 0 0 30px
}

.pitch-intro p {
    font-family: 'Roboto';
    font-size: 14px;
    line-height: 1.5;
    color: #000;
    letter-spacing: 0
}

.pitch-icon {
    margin: 0 0 10px;
    background: #33C;
    width: 60px;
    height: 60px;
    display: inline-block;
    border-radius: 50%
}

.pitch-icon i {
    font-size: 34px;
    color: #FFF;
    position: absolute;
    left: 0;
    right: 0;
    top: 13px
}

.pitch-content {
    padding: 10px 0 50px
}

.pitch-content h1 {
    font-size: 21px;
    font-weight: 600;
    line-height: 1.2;
    letter-spacing: 0;
    color: #454545;
    margin: 0 0 10px
}

.pitch-content p {
    font-family: 'Roboto';
    font-size: 14px;
    line-height: 1.5;
    color: #000;
    letter-spacing: 0
}

.icon-features {
    padding: 100px 0 0
}

.icon-features-intro {
    padding: 0 0 50px
}

.icon-features-intro h1 {
    font-size: 34px;
    font-weight: 600;
    letter-spacing: -1px;
    margin: 0 0 10px;
    text-align: center
}

.icon-features-intro p {
    font-size: 16px;
    color: #A1A1A1;
    text-align: center;
    margin: 0 0 30px
}

.f-single {
    position: relative;
    padding: 10px 0 80px
}

.f-icon i {
    font-size: 54px;
    font-weight: 700;
    position: absolute;
    left: 0
}

.f-content {
    padding-left: 80px
}

.f-content h2 {
    font-size: 21px;
    font-weight: 400;
    margin: 0 0 10px
}

.f-content p {
    font-family: 'Roboto';
    font-size: 14px;
    font-weight: 300;
    color: #4D4D4D;
    line-height: 1.5;
    text-align: left
}

.features {
    padding: 25px 0
}

.features-inner {
    width: 100%
}

.features .features-list {
    padding: 60px 0 0;
    text-align: center
}

.features .features-list h3 {
    font-size: 26px;
    font-weight: 400;
    line-height: 1;
    color: #222;
    margin: 0 0 30px;
    animation-delay: 0.1s;
}

.features .features-list ul {
    list-style-type: circle;
    padding-left: 20px;
    text-align: center
}

.features .features-list ul li {
    display: block;
    margin: 0 0 15px;
    font-family: 'Roboto';
    font-size: 16px;
    line-height: 1.2;
    color: #000
}

.software .features {
    padding: 100px 0
}

.software .features .features-list h1 {
    font-size: 26px;
    font-weight: 600;
    letter-spacing: -1px;
    line-height: 1.2;
    color: #222;
    margin: 20px 0
}

.software .features-list p {
    margin: 0 0 25px;
    font-family: 'Roboto';
    font-size: 18px;
    line-height: 1.2;
    color: #000
}

.software .features .features-list ul {
    list-style-type: disc;
    padding-left: 20px
}

.software .features .features-list ul li {
    font-family: Roboto;
    display: block;
    font-size: 13px;
    margin: 0 0 15px;
    color: #000
}

.product .feature-sub {
    background: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(146, 127, 84, 0.99)), url(../images/feature-bg.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    padding: 150px 0
}

.product .sub-inner {
    max-width: 500px;
    float: right
}

.feature-sub .sub-inner h1 {
    font-family: 'Roboto';
    font-size: 34px;
    font-weight: 300;
    line-height: 1;
    color: #FFF;
    margin: 0 0 30px
}

.feature-sub .sub-inner .btn-action {
    color: #FFF;
    background: #33C;
    border-color: #33C
}

.feature-sub .sub-inner .btn-action:hover {
    color: #33C;
    background: transparent;
    border-color: #33C
}

.product .feature-sub .sub-inner .btn-action {
    color: #FFF;
    background: #82714a;
    border-color: #82714a
}

.product .feature-sub .sub-inner .btn-action:hover {
    color: #82714a;
    background: transparent;
    border-color: #82714a
}

.feature-sub {
    background: linear-gradient(to right, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.6)), url(../images/image-bg.jpg);
    padding: 150px 0
}

.sub-inner {
    max-width: 500px;
    float: left
}

.software .feature-sub {
    background: linear-gradient(to right, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.99)), url(../images/app_bg1.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    padding: 150px 0
}

.software .feature-sub .sub-inner h1 {
    font-family: 'Roboto';
    font-size: 34px;
    font-weight: 300;
    line-height: 1.1;
    color: #FFF;
    margin: 0 0 30px
}

.app-features {
    background: #F9F9F9;
    padding: 100px 0
}

.app-features h1 {
    font-size: 34px;
    font-weight: 600;
    margin: 0 0 10px
}

.app-features p {
    font-size: 16px;
    font-weight: 400;
    color: #000;
    line-height: 1.4;
    margin: 10px 0 50px
}

.app-features img {
    margin: 0 auto
}

.app-features .features-left,
.app-features .features-right {
    padding: 50px 0 0
}

.app-features .icon {
    margin-top: 10px;
    margin-bottom: 20px
}

.app-features .icon i {
    font-size: 42px;
    color: #33C
}

.app-features .feature-single {
    margin-left: 0;
    margin-bottom: 50px
}

.app-features .feature-single h1 {
    font-size: 18px;
    font-weight: 400;
    color: #222;
    margin: 0 0 10px;
    letter-spacing: 1px
}

.app-features .feature-single p {
    font-family: Roboto;
    font-size: 17px;
    color: #000;
    line-height: 1.4;
    margin: 10px 0 0
}

.split-features {
    background: #FFF;
    padding: 50px 0;
    overflow: hidden
}

.signup .split-features {
    background: #F2F2F2
}

.split-image img {
    margin: 0 auto
}

.split-content {
    padding: 20px;
    text-align: center
}

.split-content h1 {
    font-size: 34px;
    font-weight: 600;
    letter-spacing: -1px;
    margin: 0 0 20px
}

.split-content p {
    font-size: 16px;
    line-height: 1.4;
    color: #A1A1A1;
    letter-spacing: 0
}

.split-content ul {
    list-style-type: disc;
    display: inline-block;
    margin: 30px 0 0
}

.split-content ul li {
    font-family: Roboto;
    font-size: 16px;
    letter-spacing: 0;
    margin-bottom: 15px;
    margin-left: 15px;
    color: #000
}

.review-section {
    padding: 150px 0;
    text-align: center;
    background: #F4F4F4
}

.reviews {
    width: 100%
}

.review-single img {
    width: 80px;
    height: 80px
}

.review-text h3 {
    font-family: Roboto;
    font-size: 16px;
    font-weight: 300;
    letter-spacing: 0;
    line-height: 1.5;
    color: #000
}

.review-text .ion {
    display: inline-block;
    margin-top: 20px;
    font-size: 14px;
    color: #ff8000
}

.review-text p {
    font-family: Roboto;
    font-size: 14px;
    font-weight: 300;
    padding: 20px 10px;
    letter-spacing: 1px;
    line-height: 1.5;
    color: #000
}

.pricing {
    padding: 50px 0 100px
}

.pricing-content {
    padding: 60px 0 0;
    text-align: center
}

.pricing h1 {
    font-size: 28px;
    font-weight: 400;
    letter-spacing: -1px;
    line-height: 1.2
}

.pricing h3 {
	font-size: 28px;
    font-weight: 400;
    letter-spacing: -1px;
    line-height: 1.2
}

.pricing p {
    font-family: 'Roboto';
    font-size: 16px;
    font-weight: 400;
    color: #000;
    line-height: 1.4
}

.pricing .btn-buy {
    padding: 40px 0 20px
}

.pricing .btn-buy img {
    display: inline
}

.pricing .price-tag h2 {
    font-family: 'Roboto';
    font-size: 24px;
    font-weight: 400;
    color: #000;
    margin: 0 0 20px
}

.pricing-section {
    width: 100%;
    height: 100%;
    padding-top: 100px;
    padding-bottom: 100px;
    background: #FFF
}

.pricing-intro {
    padding-bottom: 30px
}

.pricing-intro h1 {

    font-size: 28px;
    color: #111;
    font-weight: 600;
    line-height: 1.4
}

.pricing-intro p {
    font-size: 15px;
    color: #303030;
    font-weight: 300;
    line-height: 1.4;
    letter-spacing: 1px;
    margin-top: 10px;
    margin-bottom: 50px
}

.pricing-section .table-left,
.pricing-section .table-right {
    padding: 20px 20px 50px;
    margin: 0 auto;
    margin-bottom: 30px;
    background-color: #FFF;
    box-shadow: 0 0 80px 0 rgba(0, 0, 0, .1);
    border: transparent;
    max-width: 400px
}

.table-left .icon,
.table-right .icon {
    padding: 50px 50px 40px
}

.table-left .icon img,
.table-right .icon img {
    width: 60px;
    height: 60px;
    margin: 0 auto
}

.table-left .pricing-details span,
.table-right .pricing-details span {
    display: inline-block;
    font-family: Roboto;
    font-size: 28px;
    font-weight: 400;
    color: #000;
    margin-bottom: 20px
}

.table-left .pricing-details h2,
.table-right .pricing-details h2 {
    font-size: 18px;
    font-weight: 600;
    color: #505050;
    margin-bottom: 30px
}

.table-left .pricing-details p,
.table-right .pricing-details p {
    font-family: Roboto;
    font-size: 14px;
    font-weight: 300;
    color: #000;
    letter-spacing: 1px;
    line-height: 1.4
}

.table-left .pricing-details ul,
.table-right .pricing-details ul {
    margin-top: 30px;
    margin-bottom: 50px
}

.table-left .pricing-details li,
.table-right .pricing-details li {
    font-family: Roboto;
    font-size: 14px;
    font-weight: 400;
    color: #000;
    line-height: 1.4;
    margin-bottom: 10px
}

.pricing-section .table-left:hover,
.pricing-section .table-right:hover {
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.1);
    -webkit-transition: .3s;
    -moz-transition: .3s;
    -o-transition: .3s;
    transition: .3s
}

.pricing-section .table-left,
.pricing-section .table-right {
    margin-top: 20px
}

.pricing-section .table-center {
    margin-top: 0
}

.counter-section {
    width: 100%;
    padding-top: 50px;
    padding-bottom: 50px;
    background: #F1F1F1
}

.counter-section h3 {
    font-size: 28px;
    font-weight: 400;
    color: #222
}

.counter-icon {
    padding: 15px
}

.counter-icon i {
    font-size: 48px;
    color: #33C
}

.counter-text {
    margin-top: 10px;
    margin-bottom: 20px
}

.counter-text h4 {
    font-size: 16px;
    font-weight: 400;
    padding: .5em;
    color: #222
}

.cta-sub {
    padding-top: 150px;
    padding-bottom: 150px;
    background: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.9)), no-repeat center center;
    background-size: cover
}

.cta-inner {
    max-width: 500px;
    float: none
}

.cta-sub .cta-inner h1 {
    font-size: 28px;
    color: #FFF;
    font-weight: 400;
    line-height: 1.2;
    margin-top: 10px;
    margin-bottom: 0
}

.cta-sub .cta-inner p {
    font-family: Roboto;
    font-size: 14px;
    color: #FFF;
    font-weight: 300;
    line-height: 1.4;
    margin-top: 20px;
    margin-bottom: 40px
}

.subscribe-form {
    text-align: left
}

.subscribe-form .mail {
    background-color: #F9F9F9;
    border: none;
    border-radius: 5px 0 0 5px;
    outline: none;
    height: 40px;
    padding: 0 150px 0 20px;
    box-shadow: none;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s
}

.subscribe-form input {
    color: #222;
    font-family: Roboto;
    padding: 0;
    font-size: .9em
}

.subscribe-form .submit-button {
    font-size: .9em;
    height: 40px;
    border: 2px solid;
    border-radius: 0 5px 5px 0;
    margin: 0;
    padding: 0 25px;
    border-color: #FFF;
    background-color: #927f54;
    color: #FFF;
    box-shadow: 0 0 1px transparent;
    outline: none;
    -webkit-transition: 500ms;
    -moz-transition: 500ms;
    transition: 500ms
}

.subscribe-form .submit-button:hover {
    border-color: #927f54;
    -webkit-transition: 500ms;
    -moz-transition: 500ms;
    transition: 500ms
}

.product .subscribe-form .submit-button {
    border-color: #FFF;
    background-color: #927f54
}

.product .subscribe-form .submit-button:hover {
    border-color: #927f54
}

.info {
    background-color: #333;
    color: #CCC;
    width: 100%;
    height: 100%;
    overflow: hidden;
    padding-top: 75px;
    padding-bottom: 20px;
    position: relative;
}

.contact {
    text-align: left;
}

.contact i {
    font-size: 42px;
    color: #33C
}

.contact h1 {
    font-family: 'Roboto';
    font-size: 21px;
    font-weight: 400;
    color: #33C;
    margin: 10px 0;
}

.contact p {
    font-family: 'Roboto';
    font-size: 16px!important;
    font-weight: 400;
    color: #111;
    line-height: 1.3;
    margin: 10px 0 20px!important
}

.contact a {
    font-family: 'Roboto';
    font-size: 18px;
    font-weight: 400;
    color: #33C;
    text-decoration: none;
    display: inline-block
}

.info img {
    margin-bottom: 20px
}

.info-menu ul {
    list-style-type: none
}

.info-menu li {
    display: inline;
    line-height: 2;
    font-family: Roboto;
    font-size: 14px;
    padding-right: 15px;
    text-transform: capitalize
}

.info-menu li a {
    color: #707570;
    text-decoration: none
}

.info p {
    font-family: 'Roboto';
    font-size: 16px;
    font-weight: 400;
    color: #000;
    line-height: 1.3;
    margin: 10px 0 30px
}

.info-text< p {
    font-family: 'Roboto';
    font-size: 14px;
    color: red;
    font-weight: 400;
    line-height: 1.4;
    letter-spacing: 1px;
    margin-top: 10px
}

.product .info .contact h1,
.product .contact i,
.product .info .contact a,
.product .info-text p {
    color: #927f54
}

.back-to-top {
    background: rgba(51, 51, 204, 0.5);
    margin: 0;
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    z-index: 90;
    display: none;
    text-decoration: none;
    color: #0E1729
}

.back-to-top i {
    position: relative;
    left: 13px;
    top: 8px;
    font-size: 24px;
    color: #FFF;
    -webkit-transition: 200ms;
    -moz-transition: 200ms;
    -o-transition: 200ms;
    transition: 200ms
}

.back-to-top:hover {
    background: rgba(51, 51, 204, 0.9);
    color: #FFF
}

.back-to-top:hover i {
    top: 6px
}

.back-to-top:focus {
    color: #FFF
}

.product .back-to-top {
    background: rgba(146, 127, 84, 0.5)
}

.product .back-to-top:hover {
    background: rgba(146, 127, 84, 0.9)
}

@media only screen and (min-width: 767px) {
    .logo {
        position: absolute;
        top: 20px;
        left: 20px
    }
    .hero-section {
        padding: 150px 0 100px
    }
    .form .hero-section {
        padding: 150px 0 50px
    }
    .form .hero-content {
        padding: 100px 0;
        overflow: hidden
    }
    .form .hero-content h1 {
        font-size: 54px
    }
    .product .hero-content {
        padding: 150px 0 100px;
        text-align: left
    }
    .hero-content h1 {
        font-size: 48px;
        margin: 0 0 20px
    }
    .hero-content p {
        font-size: 20px
    }
    .about-content h2 {
        font-size: 38px
    }
    .software .hero-content h1 {
        font-size: 42px
    }
    .image-bg .hero-content h1 {
        font-size: 54px
    }
    .signup .hero-content h1 {
        font-size: 48px
    }
    .features .features-list {
        padding: 50px 0 0;
        text-align: left
    }
    .features .features-list ul li {
        font-size: 18px;
        display: list-item;
        text-align: left
    }
    .software .features {
        padding: 100px 0
    }
    .software .features .features-list h1 {
        font-size: 34px
    }
    .software .features .features-list {
        padding: 30px 0 0
    }
    .software .features .features-list ul li {
        display: list-item;
        font-size: 14px;
        text-align: left
    }
    .feature-sub {
        padding: 200px 0
    }
    .feature-sub .sub-inner h1 {
        font-size: 42px
    }
    .software .feature-sub .sub-inner h1 {
        font-size: 42px
    }
    .split-content {
        padding: 120px 100px 50px 10px;
        text-align: left
    }
    .split-content h1 {
        font-size: 42px
    }
    .pricing {
        padding: 100px 0
    }
    .pricing-content {
        text-align: left
    }
    .cta-sub .cta-inner h1 {
        font-size: 36px
    }
    .cta-inner {
        max-width: 500px
    }
    .contact {
        text-align: center
    }
    .contact h1 {
        font-size: 24px
    }
    .contact p {
        font-size: 16px!important
    }
    .contact a {
        font-size: 18px
    }
}

@media only screen and (min-width: 767px) and (max-width: 1024px) {
    .features .features-list {
        padding: 80px 0 0
    }
    .split-content {
        padding: 100px 100px 50px 50px;
        text-align: left
    }
}

@media screen and (min-width: 400px) and (max-width: 600px) {
    .subscribe-form .mail {
        padding: 0 30px 0 20px;
        border-radius: 5px 0 0 5px
    }
    .subscribe-form .submit-button {
        padding: 0 5px;
        border-radius: 0 5px 5px 0
    }
}

@media screen and (max-width: 399px) {
    .cta-sub {
        text-align: center
    }
    .subscribe-form {
        text-align: center
    }
    .subscribe-form .mail {
        text-align: center;
        padding: 0;
        border-radius: 5px 0 0 5px
    }
    .subscribe-form .submit-button {
        padding: 0 5px;
        border-radius: 0 5px 5px 0;
        margin-top: 15px
    }
    .form .sub-form .subscribe-form {
        text-align: left
    }
    .form .sub-form .subscribe-form .mail {
        text-align: center;
        padding: 0;
        border-radius: 5px 0 0 5px
    }
    .form .sub-form .subscribe-form .submit-button {
        padding: 0 5px;
        border-radius: 0 5px 5px 0;
        margin-top: 15px
    }
    .back-to-top {
        right: 10px
    }
}

@media only screen and (min-width: 991px) and (max-width: 1201px) {
    .app-features .features-left,
    .app-features .features-right {
        padding: 0
    }
    .software .features .features-list {
        padding: 0
    }
}

.baslık {
    color: #000;
    text-align: center
}

* {
    box-sizing: border-box
}

body {
    background-color: #F9F9F9
}

.gallery #galeri {
    background-size: 1519.2px 700px;
    background-color: #d9d9d9
}

.gallery-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    background-color: #fff;
    box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.3);
    width: 80%;
    margin: 0 auto;
    padding: 10px
}

.gallery-item {
    flex-basis: 32.7%;
    margin-bottom: 6px;
    opacity: .85;
    cursor: pointer
}

.gallery-item:hover {
    opacity: 1
}

.gallery-item img {
    width: 100%;
    object-fit: cover
}

.gallery-content {
    font-size: .8em
}

.lightbox {
    position: fixed;
    display: none;
    background-color: rgba(0, 0, 0, 0.8);
    width: 100%;
    height: 100%;
    overflow: auto;
    top: 0;
    left: 0
}

.lightbox-content {
    position: relative;
    width: 70%;
    height: 70%;
    margin: 5% auto
}

.lightbox-content img {
    border-radius: 7px;
    box-shadow: 0 0 3px 0 rgba(225, 225, 225, .25);
    width: 100%;
    height: 100%;
    object-fit: cover
}

.lightbox-prev,
.lightbox-next {
    position: absolute;
    background-color: rgba(0, 0, 0, 0.8);
    color: #fff;
    padding: 7px;
    top: 45%;
    cursor: pointer
}

.lightbox-prev {
    left: 0
}

.lightbox-next {
    right: 0
}

.lightbox-prev:hover,
.lightbox-next:hover {
    opacity: .8
}

@media (min-width: 767px) {
    .gallery {
        padding: 100px 0;
        background-color: #e6e6e6
    }
}

.gallery h2 {
    font-size: 34px;
    font-family: Roboto;
    font-weight: 600;
    margin-bottom: 50px;
    text-align: center;
    visibility: visible;
    animation-delay: .1s;
    animation-name: fadeInDown
}

@media (max-width: 480px) {
    .gallery-item {
        flex-basis: 100%;
        margin-bottom: 1px
    }
    .lightbox-content {
        width: 90%;
        margin: 20% auto
    }
}

.span3 {
    border-radius: 5px;
    border-color: transparent;
    background-color: rgb(0, 0, 0, .5);
    padding: 20px;
}

.copyright {
    font-family: 'Roboto', sans-serif;
    line-height: 25px;
    letter-spacing: 0;
    font-weight: 300;
    font-size: 12px
}

.copyright a {
    text-decoration: none
}

.copyright.light {
    color: #666
}

.copyright.light a {
    color: #fff;
    font-weight: 400
}

.copyright.dark {
    color: #666
}

.copyright.dark a {
    color: #000;
    font-weight: 400
}


@charset "UTF-8";/*!
  Ionicons, v2.0.0
  Created by Ben Sperry for the Ionic Framework, http://ionicons.com/
  https://twitter.com/benjsperry  https://twitter.com/ionicframework
  MIT License: https://github.com/driftyco/ionicons

  Android-style icons originally built by Google’s
  Material Design Icons: https://github.com/google/material-design-icons
  used under CC BY http://creativecommons.org/licenses/by/4.0/
  Modified icons to fit ionicon’s grid from original.
*/@font-face{font-family:"Ionicons";src:url("../fonts/ionicons.eot?v=2.0.0");src:url("../fonts/ionicons.eot?v=2.0.0#iefix") format("embedded-opentype"),url("../fonts/ionicons.ttf?v=2.0.0") format("truetype"),url("../fonts/ionicons.woff?v=2.0.0") format("woff"),url("../fonts/ionicons.svg?v=2.0.0#Ionicons") format("svg");font-weight:normal;font-style:normal}.ion,.ionicons,.ion-alert:before,.ion-alert-circled:before,.ion-android-add:before,.ion-android-add-circle:before,.ion-android-alarm-clock:before,.ion-android-alert:before,.ion-android-apps:before,.ion-android-archive:before,.ion-android-arrow-back:before,.ion-android-arrow-down:before,.ion-android-arrow-dropdown:before,.ion-android-arrow-dropdown-circle:before,.ion-android-arrow-dropleft:before,.ion-android-arrow-dropleft-circle:before,.ion-android-arrow-dropright:before,.ion-android-arrow-dropright-circle:before,.ion-android-arrow-dropup:before,.ion-android-arrow-dropup-circle:before,.ion-android-arrow-forward:before,.ion-android-arrow-up:before,.ion-android-attach:before,.ion-android-bar:before,.ion-android-bicycle:before,.ion-android-boat:before,.ion-android-bookmark:before,.ion-android-bulb:before,.ion-android-bus:before,.ion-android-calendar:before,.ion-android-call:before,.ion-android-camera:before,.ion-android-cancel:before,.ion-android-car:before,.ion-android-cart:before,.ion-android-chat:before,.ion-android-checkbox:before,.ion-android-checkbox-blank:before,.ion-android-checkbox-outline:before,.ion-android-checkbox-outline-blank:before,.ion-android-checkmark-circle:before,.ion-android-clipboard:before,.ion-android-close:before,.ion-android-cloud:before,.ion-android-cloud-circle:before,.ion-android-cloud-done:before,.ion-android-cloud-outline:before,.ion-android-color-palette:before,.ion-android-compass:before,.ion-android-contact:before,.ion-android-contacts:before,.ion-android-contract:before,.ion-android-create:before,.ion-android-delete:before,.ion-android-desktop:before,.ion-android-document:before,.ion-android-done:before,.ion-android-done-all:before,.ion-android-download:before,.ion-android-drafts:before,.ion-android-exit:before,.ion-android-expand:before,.ion-android-favorite:before,.ion-android-favorite-outline:before,.ion-android-film:before,.ion-android-folder:before,.ion-android-folder-open:before,.ion-android-funnel:before,.ion-android-globe:before,.ion-android-hand:before,.ion-android-hangout:before,.ion-android-happy:before,.ion-android-home:before,.ion-android-image:before,.ion-android-laptop:before,.ion-android-list:before,.ion-android-locate:before,.ion-android-lock:before,.ion-android-mail:before,.ion-android-map:before,.ion-android-menu:before,.ion-android-microphone:before,.ion-android-microphone-off:before,.ion-android-more-horizontal:before,.ion-android-more-vertical:before,.ion-android-navigate:before,.ion-android-notifications:before,.ion-android-notifications-none:before,.ion-android-notifications-off:before,.ion-android-open:before,.ion-android-options:before,.ion-android-people:before,.ion-android-person:before,.ion-android-person-add:before,.ion-android-phone-landscape:before,.ion-android-phone-portrait:before,.ion-android-pin:before,.ion-android-plane:before,.ion-android-playstore:before,.ion-android-print:before,.ion-android-radio-button-off:before,.ion-android-radio-button-on:before,.ion-android-refresh:before,.ion-android-remove:before,.ion-android-remove-circle:before,.ion-android-restaurant:before,.ion-android-sad:before,.ion-android-search:before,.ion-android-send:before,.ion-android-settings:before,.ion-android-share:before,.ion-android-share-alt:before,.ion-android-star:before,.ion-android-star-half:before,.ion-android-star-outline:before,.ion-android-stopwatch:before,.ion-android-subway:before,.ion-android-sunny:before,.ion-android-sync:before,.ion-android-textsms:before,.ion-android-time:before,.ion-android-train:before,.ion-android-unlock:before,.ion-android-upload:before,.ion-android-volume-down:before,.ion-android-volume-mute:before,.ion-android-volume-off:before,.ion-android-volume-up:before,.ion-android-walk:before,.ion-android-warning:before,.ion-android-watch:before,.ion-android-wifi:before,.ion-aperture:before,.ion-archive:before,.ion-arrow-down-a:before,.ion-arrow-down-b:before,.ion-arrow-down-c:before,.ion-arrow-expand:before,.ion-arrow-graph-down-left:before,.ion-arrow-graph-down-right:before,.ion-arrow-graph-up-left:before,.ion-arrow-graph-up-right:before,.ion-arrow-left-a:before,.ion-arrow-left-b:before,.ion-arrow-left-c:before,.ion-arrow-move:before,.ion-arrow-resize:before,.ion-arrow-return-left:before,.ion-arrow-return-right:before,.ion-arrow-right-a:before,.ion-arrow-right-b:before,.ion-arrow-right-c:before,.ion-arrow-shrink:before,.ion-arrow-swap:before,.ion-arrow-up-a:before,.ion-arrow-up-b:before,.ion-arrow-up-c:before,.ion-asterisk:before,.ion-at:before,.ion-backspace:before,.ion-backspace-outline:before,.ion-bag:before,.ion-battery-charging:before,.ion-battery-empty:before,.ion-battery-full:before,.ion-battery-half:before,.ion-battery-low:before,.ion-beaker:before,.ion-beer:before,.ion-bluetooth:before,.ion-bonfire:before,.ion-bookmark:before,.ion-bowtie:before,.ion-briefcase:before,.ion-bug:before,.ion-calculator:before,.ion-calendar:before,.ion-camera:before,.ion-card:before,.ion-cash:before,.ion-chatbox:before,.ion-chatbox-working:before,.ion-chatboxes:before,.ion-chatbubble:before,.ion-chatbubble-working:before,.ion-chatbubbles:before,.ion-checkmark:before,.ion-checkmark-circled:before,.ion-checkmark-round:before,.ion-chevron-down:before,.ion-chevron-left:before,.ion-chevron-right:before,.ion-chevron-up:before,.ion-clipboard:before,.ion-clock:before,.ion-close:before,.ion-close-circled:before,.ion-close-round:before,.ion-closed-captioning:before,.ion-cloud:before,.ion-code:before,.ion-code-download:before,.ion-code-working:before,.ion-coffee:before,.ion-compass:before,.ion-compose:before,.ion-connection-bars:before,.ion-contrast:before,.ion-crop:before,.ion-cube:before,.ion-disc:before,.ion-document:before,.ion-document-text:before,.ion-drag:before,.ion-earth:before,.ion-easel:before,.ion-edit:before,.ion-egg:before,.ion-eject:before,.ion-email:before,.ion-email-unread:before,.ion-erlenmeyer-flask:before,.ion-erlenmeyer-flask-bubbles:before,.ion-eye:before,.ion-eye-disabled:before,.ion-female:before,.ion-filing:before,.ion-film-marker:before,.ion-fireball:before,.ion-flag:before,.ion-flame:before,.ion-flash:before,.ion-flash-off:before,.ion-folder:before,.ion-fork:before,.ion-fork-repo:before,.ion-forward:before,.ion-funnel:before,.ion-gear-a:before,.ion-gear-b:before,.ion-grid:before,.ion-hammer:before,.ion-happy:before,.ion-happy-outline:before,.ion-headphone:before,.ion-heart:before,.ion-heart-broken:before,.ion-help:before,.ion-help-buoy:before,.ion-help-circled:before,.ion-home:before,.ion-icecream:before,.ion-image:before,.ion-images:before,.ion-information:before,.ion-information-circled:before,.ion-ionic:before,.ion-ios-alarm:before,.ion-ios-alarm-outline:before,.ion-ios-albums:before,.ion-ios-albums-outline:before,.ion-ios-americanfootball:before,.ion-ios-americanfootball-outline:before,.ion-ios-analytics:before,.ion-ios-analytics-outline:before,.ion-ios-arrow-back:before,.ion-ios-arrow-down:before,.ion-ios-arrow-forward:before,.ion-ios-arrow-left:before,.ion-ios-arrow-right:before,.ion-ios-arrow-thin-down:before,.ion-ios-arrow-thin-left:before,.ion-ios-arrow-thin-right:before,.ion-ios-arrow-thin-up:before,.ion-ios-arrow-up:before,.ion-ios-at:before,.ion-ios-at-outline:before,.ion-ios-barcode:before,.ion-ios-barcode-outline:before,.ion-ios-baseball:before,.ion-ios-baseball-outline:before,.ion-ios-basketball:before,.ion-ios-basketball-outline:before,.ion-ios-bell:before,.ion-ios-bell-outline:before,.ion-ios-body:before,.ion-ios-body-outline:before,.ion-ios-bolt:before,.ion-ios-bolt-outline:before,.ion-ios-book:before,.ion-ios-book-outline:before,.ion-ios-bookmarks:before,.ion-ios-bookmarks-outline:before,.ion-ios-box:before,.ion-ios-box-outline:before,.ion-ios-briefcase:before,.ion-ios-briefcase-outline:before,.ion-ios-browsers:before,.ion-ios-browsers-outline:before,.ion-ios-calculator:before,.ion-ios-calculator-outline:before,.ion-ios-calendar:before,.ion-ios-calendar-outline:before,.ion-ios-camera:before,.ion-ios-camera-outline:before,.ion-ios-cart:before,.ion-ios-cart-outline:before,.ion-ios-chatboxes:before,.ion-ios-chatboxes-outline:before,.ion-ios-chatbubble:before,.ion-ios-chatbubble-outline:before,.ion-ios-checkmark:before,.ion-ios-checkmark-empty:before,.ion-ios-checkmark-outline:before,.ion-ios-circle-filled:before,.ion-ios-circle-outline:before,.ion-ios-clock:before,.ion-ios-clock-outline:before,.ion-ios-close:before,.ion-ios-close-empty:before,.ion-ios-close-outline:before,.ion-ios-cloud:before,.ion-ios-cloud-download:before,.ion-ios-cloud-download-outline:before,.ion-ios-cloud-outline:before,.ion-ios-cloud-upload:before,.ion-ios-cloud-upload-outline:before,.ion-ios-cloudy:before,.ion-ios-cloudy-night:before,.ion-ios-cloudy-night-outline:before,.ion-ios-cloudy-outline:before,.ion-ios-cog:before,.ion-ios-cog-outline:before,.ion-ios-color-filter:before,.ion-ios-color-filter-outline:before,.ion-ios-color-wand:before,.ion-ios-color-wand-outline:before,.ion-ios-compose:before,.ion-ios-compose-outline:before,.ion-ios-contact:before,.ion-ios-contact-outline:before,.ion-ios-copy:before,.ion-ios-copy-outline:before,.ion-ios-crop:before,.ion-ios-crop-strong:before,.ion-ios-download:before,.ion-ios-download-outline:before,.ion-ios-drag:before,.ion-ios-email:before,.ion-ios-email-outline:before,.ion-ios-eye:before,.ion-ios-eye-outline:before,.ion-ios-fastforward:before,.ion-ios-fastforward-outline:before,.ion-ios-filing:before,.ion-ios-filing-outline:before,.ion-ios-film:before,.ion-ios-film-outline:before,.ion-ios-flag:before,.ion-ios-flag-outline:before,.ion-ios-flame:before,.ion-ios-flame-outline:before,.ion-ios-flask:before,.ion-ios-flask-outline:before,.ion-ios-flower:before,.ion-ios-flower-outline:before,.ion-ios-folder:before,.ion-ios-folder-outline:before,.ion-ios-football:before,.ion-ios-football-outline:before,.ion-ios-game-controller-a:before,.ion-ios-game-controller-a-outline:before,.ion-ios-game-controller-b:before,.ion-ios-game-controller-b-outline:before,.ion-ios-gear:before,.ion-ios-gear-outline:before,.ion-ios-glasses:before,.ion-ios-glasses-outline:before,.ion-ios-grid-view:before,.ion-ios-grid-view-outline:before,.ion-ios-heart:before,.ion-ios-heart-outline:before,.ion-ios-help:before,.ion-ios-help-empty:before,.ion-ios-help-outline:before,.ion-ios-home:before,.ion-ios-home-outline:before,.ion-ios-infinite:before,.ion-ios-infinite-outline:before,.ion-ios-information:before,.ion-ios-information-empty:before,.ion-ios-information-outline:before,.ion-ios-ionic-outline:before,.ion-ios-keypad:before,.ion-ios-keypad-outline:before,.ion-ios-lightbulb:before,.ion-ios-lightbulb-outline:before,.ion-ios-list:before,.ion-ios-list-outline:before,.ion-ios-location:before,.ion-ios-location-outline:before,.ion-ios-locked:before,.ion-ios-locked-outline:before,.ion-ios-loop:before,.ion-ios-loop-strong:before,.ion-ios-medical:before,.ion-ios-medical-outline:before,.ion-ios-medkit:before,.ion-ios-medkit-outline:before,.ion-ios-mic:before,.ion-ios-mic-off:before,.ion-ios-mic-outline:before,.ion-ios-minus:before,.ion-ios-minus-empty:before,.ion-ios-minus-outline:before,.ion-ios-monitor:before,.ion-ios-monitor-outline:before,.ion-ios-moon:before,.ion-ios-moon-outline:before,.ion-ios-more:before,.ion-ios-more-outline:before,.ion-ios-musical-note:before,.ion-ios-musical-notes:before,.ion-ios-navigate:before,.ion-ios-navigate-outline:before,.ion-ios-nutrition:before,.ion-ios-nutrition-outline:before,.ion-ios-paper:before,.ion-ios-paper-outline:before,.ion-ios-paperplane:before,.ion-ios-paperplane-outline:before,.ion-ios-partlysunny:before,.ion-ios-partlysunny-outline:before,.ion-ios-pause:before,.ion-ios-pause-outline:before,.ion-ios-paw:before,.ion-ios-paw-outline:before,.ion-ios-people:before,.ion-ios-people-outline:before,.ion-ios-person:before,.ion-ios-person-outline:before,.ion-ios-personadd:before,.ion-ios-personadd-outline:before,.ion-ios-photos:before,.ion-ios-photos-outline:before,.ion-ios-pie:before,.ion-ios-pie-outline:before,.ion-ios-pint:before,.ion-ios-pint-outline:before,.ion-ios-play:before,.ion-ios-play-outline:before,.ion-ios-plus:before,.ion-ios-plus-empty:before,.ion-ios-plus-outline:before,.ion-ios-pricetag:before,.ion-ios-pricetag-outline:before,.ion-ios-pricetags:before,.ion-ios-pricetags-outline:before,.ion-ios-printer:before,.ion-ios-printer-outline:before,.ion-ios-pulse:before,.ion-ios-pulse-strong:before,.ion-ios-rainy:before,.ion-ios-rainy-outline:before,.ion-ios-recording:before,.ion-ios-recording-outline:before,.ion-ios-redo:before,.ion-ios-redo-outline:before,.ion-ios-refresh:before,.ion-ios-refresh-empty:before,.ion-ios-refresh-outline:before,.ion-ios-reload:before,.ion-ios-reverse-camera:before,.ion-ios-reverse-camera-outline:before,.ion-ios-rewind:before,.ion-ios-rewind-outline:before,.ion-ios-rose:before,.ion-ios-rose-outline:before,.ion-ios-search:before,.ion-ios-search-strong:before,.ion-ios-settings:before,.ion-ios-settings-strong:before,.ion-ios-shuffle:before,.ion-ios-shuffle-strong:before,.ion-ios-skipbackward:before,.ion-ios-skipbackward-outline:before,.ion-ios-skipforward:before,.ion-ios-skipforward-outline:before,.ion-ios-snowy:before,.ion-ios-speedometer:before,.ion-ios-speedometer-outline:before,.ion-ios-star:before,.ion-ios-star-half:before,.ion-ios-star-outline:before,.ion-ios-stopwatch:before,.ion-ios-stopwatch-outline:before,.ion-ios-sunny:before,.ion-ios-sunny-outline:before,.ion-ios-telephone:before,.ion-ios-telephone-outline:before,.ion-ios-tennisball:before,.ion-ios-tennisball-outline:before,.ion-ios-thunderstorm:before,.ion-ios-thunderstorm-outline:before,.ion-ios-time:before,.ion-ios-time-outline:before,.ion-ios-timer:before,.ion-ios-timer-outline:before,.ion-ios-toggle:before,.ion-ios-toggle-outline:before,.ion-ios-trash:before,.ion-ios-trash-outline:before,.ion-ios-undo:before,.ion-ios-undo-outline:before,.ion-ios-unlocked:before,.ion-ios-unlocked-outline:before,.ion-ios-upload:before,.ion-ios-upload-outline:before,.ion-ios-videocam:before,.ion-ios-videocam-outline:before,.ion-ios-volume-high:before,.ion-ios-volume-low:before,.ion-ios-wineglass:before,.ion-ios-wineglass-outline:before,.ion-ios-world:before,.ion-ios-world-outline:before,.ion-ipad:before,.ion-iphone:before,.ion-ipod:before,.ion-jet:before,.ion-key:before,.ion-knife:before,.ion-laptop:before,.ion-leaf:before,.ion-levels:before,.ion-lightbulb:before,.ion-link:before,.ion-load-a:before,.ion-load-b:before,.ion-load-c:before,.ion-load-d:before,.ion-location:before,.ion-lock-combination:before,.ion-locked:before,.ion-log-in:before,.ion-log-out:before,.ion-loop:before,.ion-magnet:before,.ion-male:before,.ion-man:before,.ion-map:before,.ion-medkit:before,.ion-merge:before,.ion-mic-a:before,.ion-mic-b:before,.ion-mic-c:before,.ion-minus:before,.ion-minus-circled:before,.ion-minus-round:before,.ion-model-s:before,.ion-monitor:before,.ion-more:before,.ion-mouse:before,.ion-music-note:before,.ion-navicon:before,.ion-navicon-round:before,.ion-navigate:before,.ion-network:before,.ion-no-smoking:before,.ion-nuclear:before,.ion-outlet:before,.ion-paintbrush:before,.ion-paintbucket:before,.ion-paper-airplane:before,.ion-paperclip:before,.ion-pause:before,.ion-person:before,.ion-person-add:before,.ion-person-stalker:before,.ion-pie-graph:before,.ion-pin:before,.ion-pinpoint:before,.ion-pizza:before,.ion-plane:before,.ion-planet:before,.ion-play:before,.ion-playstation:before,.ion-plus:before,.ion-plus-circled:before,.ion-plus-round:before,.ion-podium:before,.ion-pound:before,.ion-power:before,.ion-pricetag:before,.ion-pricetags:before,.ion-printer:before,.ion-pull-request:before,.ion-qr-scanner:before,.ion-quote:before,.ion-radio-waves:before,.ion-record:before,.ion-refresh:before,.ion-reply:before,.ion-reply-all:before,.ion-ribbon-a:before,.ion-ribbon-b:before,.ion-sad:before,.ion-sad-outline:before,.ion-scissors:before,.ion-search:before,.ion-settings:before,.ion-share:before,.ion-shuffle:before,.ion-skip-backward:before,.ion-skip-forward:before,.ion-social-android:before,.ion-social-android-outline:before,.ion-social-angular:before,.ion-social-angular-outline:before,.ion-social-apple:before,.ion-social-apple-outline:before,.ion-social-bitcoin:before,.ion-social-bitcoin-outline:before,.ion-social-buffer:before,.ion-social-buffer-outline:before,.ion-social-chrome:before,.ion-social-chrome-outline:before,.ion-social-codepen:before,.ion-social-codepen-outline:before,.ion-social-css3:before,.ion-social-css3-outline:before,.ion-social-designernews:before,.ion-social-designernews-outline:before,.ion-social-dribbble:before,.ion-social-dribbble-outline:before,.ion-social-dropbox:before,.ion-social-dropbox-outline:before,.ion-social-euro:before,.ion-social-euro-outline:before,.ion-social-facebook:before,.ion-social-facebook-outline:before,.ion-social-foursquare:before,.ion-social-foursquare-outline:before,.ion-social-freebsd-devil:before,.ion-social-github:before,.ion-social-github-outline:before,.ion-social-google:before,.ion-social-google-outline:before,.ion-social-googleplus:before,.ion-social-googleplus-outline:before,.ion-social-hackernews:before,.ion-social-hackernews-outline:before,.ion-social-html5:before,.ion-social-html5-outline:before,.ion-social-instagram:before,.ion-social-instagram-outline:before,.ion-social-javascript:before,.ion-social-javascript-outline:before,.ion-social-linkedin:before,.ion-social-linkedin-outline:before,.ion-social-markdown:before,.ion-social-nodejs:before,.ion-social-octocat:before,.ion-social-pinterest:before,.ion-social-pinterest-outline:before,.ion-social-python:before,.ion-social-reddit:before,.ion-social-reddit-outline:before,.ion-social-rss:before,.ion-social-rss-outline:before,.ion-social-sass:before,.ion-social-skype:before,.ion-social-skype-outline:before,.ion-social-snapchat:before,.ion-social-snapchat-outline:before,.ion-social-tumblr:before,.ion-social-tumblr-outline:before,.ion-social-tux:before,.ion-social-twitch:before,.ion-social-twitch-outline:before,.ion-social-twitter:before,.ion-social-twitter-outline:before,.ion-social-usd:before,.ion-social-usd-outline:before,.ion-social-vimeo:before,.ion-social-vimeo-outline:before,.ion-social-whatsapp:before,.ion-social-whatsapp-outline:before,.ion-social-windows:before,.ion-social-windows-outline:before,.ion-social-wordpress:before,.ion-social-wordpress-outline:before,.ion-social-yahoo:before,.ion-social-yahoo-outline:before,.ion-social-yen:before,.ion-social-yen-outline:before,.ion-social-youtube:before,.ion-social-youtube-outline:before,.ion-soup-can:before,.ion-soup-can-outline:before,.ion-speakerphone:before,.ion-speedometer:before,.ion-spoon:before,.ion-star:before,.ion-stats-bars:before,.ion-steam:before,.ion-stop:before,.ion-thermometer:before,.ion-thumbsdown:before,.ion-thumbsup:before,.ion-toggle:before,.ion-toggle-filled:before,.ion-transgender:before,.ion-trash-a:before,.ion-trash-b:before,.ion-trophy:before,.ion-tshirt:before,.ion-tshirt-outline:before,.ion-umbrella:before,.ion-university:before,.ion-unlocked:before,.ion-upload:before,.ion-usb:before,.ion-videocamera:before,.ion-volume-high:before,.ion-volume-low:before,.ion-volume-medium:before,.ion-volume-mute:before,.ion-wand:before,.ion-waterdrop:before,.ion-wifi:before,.ion-wineglass:before,.ion-woman:before,.ion-wrench:before,.ion-xbox:before{display:inline-block;font-family:"Ionicons";speak:none;font-style:normal;font-weight:normal;font-variant:normal;text-transform:none;text-rendering:auto;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.ion-alert:before{content:"\f101"}.ion-alert-circled:before{content:"\f100"}.ion-android-add:before{content:"\f2c7"}.ion-android-add-circle:before{content:"\f359"}.ion-android-alarm-clock:before{content:"\f35a"}.ion-android-alert:before{content:"\f35b"}.ion-android-apps:before{content:"\f35c"}.ion-android-archive:before{content:"\f2c9"}.ion-android-arrow-back:before{content:"\f2ca"}.ion-android-arrow-down:before{content:"\f35d"}.ion-android-arrow-dropdown:before{content:"\f35f"}.ion-android-arrow-dropdown-circle:before{content:"\f35e"}.ion-android-arrow-dropleft:before{content:"\f361"}.ion-android-arrow-dropleft-circle:before{content:"\f360"}.ion-android-arrow-dropright:before{content:"\f363"}.ion-android-arrow-dropright-circle:before{content:"\f362"}.ion-android-arrow-dropup:before{content:"\f365"}.ion-android-arrow-dropup-circle:before{content:"\f364"}.ion-android-arrow-forward:before{content:"\f30f"}.ion-android-arrow-up:before{content:"\f366"}.ion-android-attach:before{content:"\f367"}.ion-android-bar:before{content:"\f368"}.ion-android-bicycle:before{content:"\f369"}.ion-android-boat:before{content:"\f36a"}.ion-android-bookmark:before{content:"\f36b"}.ion-android-bulb:before{content:"\f36c"}.ion-android-bus:before{content:"\f36d"}.ion-android-calendar:before{content:"\f2d1"}.ion-android-call:before{content:"\f2d2"}.ion-android-camera:before{content:"\f2d3"}.ion-android-cancel:before{content:"\f36e"}.ion-android-car:before{content:"\f36f"}.ion-android-cart:before{content:"\f370"}.ion-android-chat:before{content:"\f2d4"}.ion-android-checkbox:before{content:"\f374"}.ion-android-checkbox-blank:before{content:"\f371"}.ion-android-checkbox-outline:before{content:"\f373"}.ion-android-checkbox-outline-blank:before{content:"\f372"}.ion-android-checkmark-circle:before{content:"\f375"}.ion-android-clipboard:before{content:"\f376"}.ion-android-close:before{content:"\f2d7"}.ion-android-cloud:before{content:"\f37a"}.ion-android-cloud-circle:before{content:"\f377"}.ion-android-cloud-done:before{content:"\f378"}.ion-android-cloud-outline:before{content:"\f379"}.ion-android-color-palette:before{content:"\f37b"}.ion-android-compass:before{content:"\f37c"}.ion-android-contact:before{content:"\f2d8"}.ion-android-contacts:before{content:"\f2d9"}.ion-android-contract:before{content:"\f37d"}.ion-android-create:before{content:"\f37e"}.ion-android-delete:before{content:"\f37f"}.ion-android-desktop:before{content:"\f380"}.ion-android-document:before{content:"\f381"}.ion-android-done:before{content:"\f383"}.ion-android-done-all:before{content:"\f382"}.ion-android-download:before{content:"\f2dd"}.ion-android-drafts:before{content:"\f384"}.ion-android-exit:before{content:"\f385"}.ion-android-expand:before{content:"\f386"}.ion-android-favorite:before{content:"\f388"}.ion-android-favorite-outline:before{content:"\f387"}.ion-android-film:before{content:"\f389"}.ion-android-folder:before{content:"\f2e0"}.ion-android-folder-open:before{content:"\f38a"}.ion-android-funnel:before{content:"\f38b"}.ion-android-globe:before{content:"\f38c"}.ion-android-hand:before{content:"\f2e3"}.ion-android-hangout:before{content:"\f38d"}.ion-android-happy:before{content:"\f38e"}.ion-android-home:before{content:"\f38f"}.ion-android-image:before{content:"\f2e4"}.ion-android-laptop:before{content:"\f390"}.ion-android-list:before{content:"\f391"}.ion-android-locate:before{content:"\f2e9"}.ion-android-lock:before{content:"\f392"}.ion-android-mail:before{content:"\f2eb"}.ion-android-map:before{content:"\f393"}.ion-android-menu:before{content:"\f394"}.ion-android-microphone:before{content:"\f2ec"}.ion-android-microphone-off:before{content:"\f395"}.ion-android-more-horizontal:before{content:"\f396"}.ion-android-more-vertical:before{content:"\f397"}.ion-android-navigate:before{content:"\f398"}.ion-android-notifications:before{content:"\f39b"}.ion-android-notifications-none:before{content:"\f399"}.ion-android-notifications-off:before{content:"\f39a"}.ion-android-open:before{content:"\f39c"}.ion-android-options:before{content:"\f39d"}.ion-android-people:before{content:"\f39e"}.ion-android-person:before{content:"\f3a0"}.ion-android-person-add:before{content:"\f39f"}.ion-android-phone-landscape:before{content:"\f3a1"}.ion-android-phone-portrait:before{content:"\f3a2"}.ion-android-pin:before{content:"\f3a3"}.ion-android-plane:before{content:"\f3a4"}.ion-android-playstore:before{content:"\f2f0"}.ion-android-print:before{content:"\f3a5"}.ion-android-radio-button-off:before{content:"\f3a6"}.ion-android-radio-button-on:before{content:"\f3a7"}.ion-android-refresh:before{content:"\f3a8"}.ion-android-remove:before{content:"\f2f4"}.ion-android-remove-circle:before{content:"\f3a9"}.ion-android-restaurant:before{content:"\f3aa"}.ion-android-sad:before{content:"\f3ab"}.ion-android-search:before{content:"\f2f5"}.ion-android-send:before{content:"\f2f6"}.ion-android-settings:before{content:"\f2f7"}.ion-android-share:before{content:"\f2f8"}.ion-android-share-alt:before{content:"\f3ac"}.ion-android-star:before{content:"\f2fc"}.ion-android-star-half:before{content:"\f3ad"}.ion-android-star-outline:before{content:"\f3ae"}.ion-android-stopwatch:before{content:"\f2fd"}.ion-android-subway:before{content:"\f3af"}.ion-android-sunny:before{content:"\f3b0"}.ion-android-sync:before{content:"\f3b1"}.ion-android-textsms:before{content:"\f3b2"}.ion-android-time:before{content:"\f3b3"}.ion-android-train:before{content:"\f3b4"}.ion-android-unlock:before{content:"\f3b5"}.ion-android-upload:before{content:"\f3b6"}.ion-android-volume-down:before{content:"\f3b7"}.ion-android-volume-mute:before{content:"\f3b8"}.ion-android-volume-off:before{content:"\f3b9"}.ion-android-volume-up:before{content:"\f3ba"}.ion-android-walk:before{content:"\f3bb"}.ion-android-warning:before{content:"\f3bc"}.ion-android-watch:before{content:"\f3bd"}.ion-android-wifi:before{content:"\f305"}.ion-aperture:before{content:"\f313"}.ion-archive:before{content:"\f102"}.ion-arrow-down-a:before{content:"\f103"}.ion-arrow-down-b:before{content:"\f104"}.ion-arrow-down-c:before{content:"\f105"}.ion-arrow-expand:before{content:"\f25e"}.ion-arrow-graph-down-left:before{content:"\f25f"}.ion-arrow-graph-down-right:before{content:"\f260"}.ion-arrow-graph-up-left:before{content:"\f261"}.ion-arrow-graph-up-right:before{content:"\f262"}.ion-arrow-left-a:before{content:"\f106"}.ion-arrow-left-b:before{content:"\f107"}.ion-arrow-left-c:before{content:"\f108"}.ion-arrow-move:before{content:"\f263"}.ion-arrow-resize:before{content:"\f264"}.ion-arrow-return-left:before{content:"\f265"}.ion-arrow-return-right:before{content:"\f266"}.ion-arrow-right-a:before{content:"\f109"}.ion-arrow-right-b:before{content:"\f10a"}.ion-arrow-right-c:before{content:"\f10b"}.ion-arrow-shrink:before{content:"\f267"}.ion-arrow-swap:before{content:"\f268"}.ion-arrow-up-a:before{content:"\f10c"}.ion-arrow-up-b:before{content:"\f10d"}.ion-arrow-up-c:before{content:"\f10e"}.ion-asterisk:before{content:"\f314"}.ion-at:before{content:"\f10f"}.ion-backspace:before{content:"\f3bf"}.ion-backspace-outline:before{content:"\f3be"}.ion-bag:before{content:"\f110"}.ion-battery-charging:before{content:"\f111"}.ion-battery-empty:before{content:"\f112"}.ion-battery-full:before{content:"\f113"}.ion-battery-half:before{content:"\f114"}.ion-battery-low:before{content:"\f115"}.ion-beaker:before{content:"\f269"}.ion-beer:before{content:"\f26a"}.ion-bluetooth:before{content:"\f116"}.ion-bonfire:before{content:"\f315"}.ion-bookmark:before{content:"\f26b"}.ion-bowtie:before{content:"\f3c0"}.ion-briefcase:before{content:"\f26c"}.ion-bug:before{content:"\f2be"}.ion-calculator:before{content:"\f26d"}.ion-calendar:before{content:"\f117"}.ion-camera:before{content:"\f118"}.ion-card:before{content:"\f119"}.ion-cash:before{content:"\f316"}.ion-chatbox:before{content:"\f11b"}.ion-chatbox-working:before{content:"\f11a"}.ion-chatboxes:before{content:"\f11c"}.ion-chatbubble:before{content:"\f11e"}.ion-chatbubble-working:before{content:"\f11d"}.ion-chatbubbles:before{content:"\f11f"}.ion-checkmark:before{content:"\f122"}.ion-checkmark-circled:before{content:"\f120"}.ion-checkmark-round:before{content:"\f121"}.ion-chevron-down:before{content:"\f123"}.ion-chevron-left:before{content:"\f124"}.ion-chevron-right:before{content:"\f125"}.ion-chevron-up:before{content:"\f126"}.ion-clipboard:before{content:"\f127"}.ion-clock:before{content:"\f26e"}.ion-close:before{content:"\f12a"}.ion-close-circled:before{content:"\f128"}.ion-close-round:before{content:"\f129"}.ion-closed-captioning:before{content:"\f317"}.ion-cloud:before{content:"\f12b"}.ion-code:before{content:"\f271"}.ion-code-download:before{content:"\f26f"}.ion-code-working:before{content:"\f270"}.ion-coffee:before{content:"\f272"}.ion-compass:before{content:"\f273"}.ion-compose:before{content:"\f12c"}.ion-connection-bars:before{content:"\f274"}.ion-contrast:before{content:"\f275"}.ion-crop:before{content:"\f3c1"}.ion-cube:before{content:"\f318"}.ion-disc:before{content:"\f12d"}.ion-document:before{content:"\f12f"}.ion-document-text:before{content:"\f12e"}.ion-drag:before{content:"\f130"}.ion-earth:before{content:"\f276"}.ion-easel:before{content:"\f3c2"}.ion-edit:before{content:"\f2bf"}.ion-egg:before{content:"\f277"}.ion-eject:before{content:"\f131"}.ion-email:before{content:"\f132"}.ion-email-unread:before{content:"\f3c3"}.ion-erlenmeyer-flask:before{content:"\f3c5"}.ion-erlenmeyer-flask-bubbles:before{content:"\f3c4"}.ion-eye:before{content:"\f133"}.ion-eye-disabled:before{content:"\f306"}.ion-female:before{content:"\f278"}.ion-filing:before{content:"\f134"}.ion-film-marker:before{content:"\f135"}.ion-fireball:before{content:"\f319"}.ion-flag:before{content:"\f279"}.ion-flame:before{content:"\f31a"}.ion-flash:before{content:"\f137"}.ion-flash-off:before{content:"\f136"}.ion-folder:before{content:"\f139"}.ion-fork:before{content:"\f27a"}.ion-fork-repo:before{content:"\f2c0"}.ion-forward:before{content:"\f13a"}.ion-funnel:before{content:"\f31b"}.ion-gear-a:before{content:"\f13d"}.ion-gear-b:before{content:"\f13e"}.ion-grid:before{content:"\f13f"}.ion-hammer:before{content:"\f27b"}.ion-happy:before{content:"\f31c"}.ion-happy-outline:before{content:"\f3c6"}.ion-headphone:before{content:"\f140"}.ion-heart:before{content:"\f141"}.ion-heart-broken:before{content:"\f31d"}.ion-help:before{content:"\f143"}.ion-help-buoy:before{content:"\f27c"}.ion-help-circled:before{content:"\f142"}.ion-home:before{content:"\f144"}.ion-icecream:before{content:"\f27d"}.ion-image:before{content:"\f147"}.ion-images:before{content:"\f148"}.ion-information:before{content:"\f14a"}.ion-information-circled:before{content:"\f149"}.ion-ionic:before{content:"\f14b"}.ion-ios-alarm:before{content:"\f3c8"}.ion-ios-alarm-outline:before{content:"\f3c7"}.ion-ios-albums:before{content:"\f3ca"}.ion-ios-albums-outline:before{content:"\f3c9"}.ion-ios-americanfootball:before{content:"\f3cc"}.ion-ios-americanfootball-outline:before{content:"\f3cb"}.ion-ios-analytics:before{content:"\f3ce"}.ion-ios-analytics-outline:before{content:"\f3cd"}.ion-ios-arrow-back:before{content:"\f3cf"}.ion-ios-arrow-down:before{content:"\f3d0"}.ion-ios-arrow-forward:before{content:"\f3d1"}.ion-ios-arrow-left:before{content:"\f3d2"}.ion-ios-arrow-right:before{content:"\f3d3"}.ion-ios-arrow-thin-down:before{content:"\f3d4"}.ion-ios-arrow-thin-left:before{content:"\f3d5"}.ion-ios-arrow-thin-right:before{content:"\f3d6"}.ion-ios-arrow-thin-up:before{content:"\f3d7"}.ion-ios-arrow-up:before{content:"\f3d8"}.ion-ios-at:before{content:"\f3da"}.ion-ios-at-outline:before{content:"\f3d9"}.ion-ios-barcode:before{content:"\f3dc"}.ion-ios-barcode-outline:before{content:"\f3db"}.ion-ios-baseball:before{content:"\f3de"}.ion-ios-baseball-outline:before{content:"\f3dd"}.ion-ios-basketball:before{content:"\f3e0"}.ion-ios-basketball-outline:before{content:"\f3df"}.ion-ios-bell:before{content:"\f3e2"}.ion-ios-bell-outline:before{content:"\f3e1"}.ion-ios-body:before{content:"\f3e4"}.ion-ios-body-outline:before{content:"\f3e3"}.ion-ios-bolt:before{content:"\f3e6"}.ion-ios-bolt-outline:before{content:"\f3e5"}.ion-ios-book:before{content:"\f3e8"}.ion-ios-book-outline:before{content:"\f3e7"}.ion-ios-bookmarks:before{content:"\f3ea"}.ion-ios-bookmarks-outline:before{content:"\f3e9"}.ion-ios-box:before{content:"\f3ec"}.ion-ios-box-outline:before{content:"\f3eb"}.ion-ios-briefcase:before{content:"\f3ee"}.ion-ios-briefcase-outline:before{content:"\f3ed"}.ion-ios-browsers:before{content:"\f3f0"}.ion-ios-browsers-outline:before{content:"\f3ef"}.ion-ios-calculator:before{content:"\f3f2"}.ion-ios-calculator-outline:before{content:"\f3f1"}.ion-ios-calendar:before{content:"\f3f4"}.ion-ios-calendar-outline:before{content:"\f3f3"}.ion-ios-camera:before{content:"\f3f6"}.ion-ios-camera-outline:before{content:"\f3f5"}.ion-ios-cart:before{content:"\f3f8"}.ion-ios-cart-outline:before{content:"\f3f7"}.ion-ios-chatboxes:before{content:"\f3fa"}.ion-ios-chatboxes-outline:before{content:"\f3f9"}.ion-ios-chatbubble:before{content:"\f3fc"}.ion-ios-chatbubble-outline:before{content:"\f3fb"}.ion-ios-checkmark:before{content:"\f3ff"}.ion-ios-checkmark-empty:before{content:"\f3fd"}.ion-ios-checkmark-outline:before{content:"\f3fe"}.ion-ios-circle-filled:before{content:"\f400"}.ion-ios-circle-outline:before{content:"\f401"}.ion-ios-clock:before{content:"\f403"}.ion-ios-clock-outline:before{content:"\f402"}.ion-ios-close:before{content:"\f406"}.ion-ios-close-empty:before{content:"\f404"}.ion-ios-close-outline:before{content:"\f405"}.ion-ios-cloud:before{content:"\f40c"}.ion-ios-cloud-download:before{content:"\f408"}.ion-ios-cloud-download-outline:before{content:"\f407"}.ion-ios-cloud-outline:before{content:"\f409"}.ion-ios-cloud-upload:before{content:"\f40b"}.ion-ios-cloud-upload-outline:before{content:"\f40a"}.ion-ios-cloudy:before{content:"\f410"}.ion-ios-cloudy-night:before{content:"\f40e"}.ion-ios-cloudy-night-outline:before{content:"\f40d"}.ion-ios-cloudy-outline:before{content:"\f40f"}.ion-ios-cog:before{content:"\f412"}.ion-ios-cog-outline:before{content:"\f411"}.ion-ios-color-filter:before{content:"\f414"}.ion-ios-color-filter-outline:before{content:"\f413"}.ion-ios-color-wand:before{content:"\f416"}.ion-ios-color-wand-outline:before{content:"\f415"}.ion-ios-compose:before{content:"\f418"}.ion-ios-compose-outline:before{content:"\f417"}.ion-ios-contact:before{content:"\f41a"}.ion-ios-contact-outline:before{content:"\f419"}.ion-ios-copy:before{content:"\f41c"}.ion-ios-copy-outline:before{content:"\f41b"}.ion-ios-crop:before{content:"\f41e"}.ion-ios-crop-strong:before{content:"\f41d"}.ion-ios-download:before{content:"\f420"}.ion-ios-download-outline:before{content:"\f41f"}.ion-ios-drag:before{content:"\f421"}.ion-ios-email:before{content:"\f423"}.ion-ios-email-outline:before{content:"\f422"}.ion-ios-eye:before{content:"\f425"}.ion-ios-eye-outline:before{content:"\f424"}.ion-ios-fastforward:before{content:"\f427"}.ion-ios-fastforward-outline:before{content:"\f426"}.ion-ios-filing:before{content:"\f429"}.ion-ios-filing-outline:before{content:"\f428"}.ion-ios-film:before{content:"\f42b"}.ion-ios-film-outline:before{content:"\f42a"}.ion-ios-flag:before{content:"\f42d"}.ion-ios-flag-outline:before{content:"\f42c"}.ion-ios-flame:before{content:"\f42f"}.ion-ios-flame-outline:before{content:"\f42e"}.ion-ios-flask:before{content:"\f431"}.ion-ios-flask-outline:before{content:"\f430"}.ion-ios-flower:before{content:"\f433"}.ion-ios-flower-outline:before{content:"\f432"}.ion-ios-folder:before{content:"\f435"}.ion-ios-folder-outline:before{content:"\f434"}.ion-ios-football:before{content:"\f437"}.ion-ios-football-outline:before{content:"\f436"}.ion-ios-game-controller-a:before{content:"\f439"}.ion-ios-game-controller-a-outline:before{content:"\f438"}.ion-ios-game-controller-b:before{content:"\f43b"}.ion-ios-game-controller-b-outline:before{content:"\f43a"}.ion-ios-gear:before{content:"\f43d"}.ion-ios-gear-outline:before{content:"\f43c"}.ion-ios-glasses:before{content:"\f43f"}.ion-ios-glasses-outline:before{content:"\f43e"}.ion-ios-grid-view:before{content:"\f441"}.ion-ios-grid-view-outline:before{content:"\f440"}.ion-ios-heart:before{content:"\f443"}.ion-ios-heart-outline:before{content:"\f442"}.ion-ios-help:before{content:"\f446"}.ion-ios-help-empty:before{content:"\f444"}.ion-ios-help-outline:before{content:"\f445"}.ion-ios-home:before{content:"\f448"}.ion-ios-home-outline:before{content:"\f447"}.ion-ios-infinite:before{content:"\f44a"}.ion-ios-infinite-outline:before{content:"\f449"}.ion-ios-information:before{content:"\f44d"}.ion-ios-information-empty:before{content:"\f44b"}.ion-ios-information-outline:before{content:"\f44c"}.ion-ios-ionic-outline:before{content:"\f44e"}.ion-ios-keypad:before{content:"\f450"}.ion-ios-keypad-outline:before{content:"\f44f"}.ion-ios-lightbulb:before{content:"\f452"}.ion-ios-lightbulb-outline:before{content:"\f451"}.ion-ios-list:before{content:"\f454"}.ion-ios-list-outline:before{content:"\f453"}.ion-ios-location:before{content:"\f456"}.ion-ios-location-outline:before{content:"\f455"}.ion-ios-locked:before{content:"\f458"}.ion-ios-locked-outline:before{content:"\f457"}.ion-ios-loop:before{content:"\f45a"}.ion-ios-loop-strong:before{content:"\f459"}.ion-ios-medical:before{content:"\f45c"}.ion-ios-medical-outline:before{content:"\f45b"}.ion-ios-medkit:before{content:"\f45e"}.ion-ios-medkit-outline:before{content:"\f45d"}.ion-ios-mic:before{content:"\f461"}.ion-ios-mic-off:before{content:"\f45f"}.ion-ios-mic-outline:before{content:"\f460"}.ion-ios-minus:before{content:"\f464"}.ion-ios-minus-empty:before{content:"\f462"}.ion-ios-minus-outline:before{content:"\f463"}.ion-ios-monitor:before{content:"\f466"}.ion-ios-monitor-outline:before{content:"\f465"}.ion-ios-moon:before{content:"\f468"}.ion-ios-moon-outline:before{content:"\f467"}.ion-ios-more:before{content:"\f46a"}.ion-ios-more-outline:before{content:"\f469"}.ion-ios-musical-note:before{content:"\f46b"}.ion-ios-musical-notes:before{content:"\f46c"}.ion-ios-navigate:before{content:"\f46e"}.ion-ios-navigate-outline:before{content:"\f46d"}.ion-ios-nutrition:before{content:"\f470"}.ion-ios-nutrition-outline:before{content:"\f46f"}.ion-ios-paper:before{content:"\f472"}.ion-ios-paper-outline:before{content:"\f471"}.ion-ios-paperplane:before{content:"\f474"}.ion-ios-paperplane-outline:before{content:"\f473"}.ion-ios-partlysunny:before{content:"\f476"}.ion-ios-partlysunny-outline:before{content:"\f475"}.ion-ios-pause:before{content:"\f478"}.ion-ios-pause-outline:before{content:"\f477"}.ion-ios-paw:before{content:"\f47a"}.ion-ios-paw-outline:before{content:"\f479"}.ion-ios-people:before{content:"\f47c"}.ion-ios-people-outline:before{content:"\f47b"}.ion-ios-person:before{content:"\f47e"}.ion-ios-person-outline:before{content:"\f47d"}.ion-ios-personadd:before{content:"\f480"}.ion-ios-personadd-outline:before{content:"\f47f"}.ion-ios-photos:before{content:"\f482"}.ion-ios-photos-outline:before{content:"\f481"}.ion-ios-pie:before{content:"\f484"}.ion-ios-pie-outline:before{content:"\f483"}.ion-ios-pint:before{content:"\f486"}.ion-ios-pint-outline:before{content:"\f485"}.ion-ios-play:before{content:"\f488"}.ion-ios-play-outline:before{content:"\f487"}.ion-ios-plus:before{content:"\f48b"}.ion-ios-plus-empty:before{content:"\f489"}.ion-ios-plus-outline:before{content:"\f48a"}.ion-ios-pricetag:before{content:"\f48d"}.ion-ios-pricetag-outline:before{content:"\f48c"}.ion-ios-pricetags:before{content:"\f48f"}.ion-ios-pricetags-outline:before{content:"\f48e"}.ion-ios-printer:before{content:"\f491"}.ion-ios-printer-outline:before{content:"\f490"}.ion-ios-pulse:before{content:"\f493"}.ion-ios-pulse-strong:before{content:"\f492"}.ion-ios-rainy:before{content:"\f495"}.ion-ios-rainy-outline:before{content:"\f494"}.ion-ios-recording:before{content:"\f497"}.ion-ios-recording-outline:before{content:"\f496"}.ion-ios-redo:before{content:"\f499"}.ion-ios-redo-outline:before{content:"\f498"}.ion-ios-refresh:before{content:"\f49c"}.ion-ios-refresh-empty:before{content:"\f49a"}.ion-ios-refresh-outline:before{content:"\f49b"}.ion-ios-reload:before{content:"\f49d"}.ion-ios-reverse-camera:before{content:"\f49f"}.ion-ios-reverse-camera-outline:before{content:"\f49e"}.ion-ios-rewind:before{content:"\f4a1"}.ion-ios-rewind-outline:before{content:"\f4a0"}.ion-ios-rose:before{content:"\f4a3"}.ion-ios-rose-outline:before{content:"\f4a2"}.ion-ios-search:before{content:"\f4a5"}.ion-ios-search-strong:before{content:"\f4a4"}.ion-ios-settings:before{content:"\f4a7"}.ion-ios-settings-strong:before{content:"\f4a6"}.ion-ios-shuffle:before{content:"\f4a9"}.ion-ios-shuffle-strong:before{content:"\f4a8"}.ion-ios-skipbackward:before{content:"\f4ab"}.ion-ios-skipbackward-outline:before{content:"\f4aa"}.ion-ios-skipforward:before{content:"\f4ad"}.ion-ios-skipforward-outline:before{content:"\f4ac"}.ion-ios-snowy:before{content:"\f4ae"}.ion-ios-speedometer:before{content:"\f4b0"}.ion-ios-speedometer-outline:before{content:"\f4af"}.ion-ios-star:before{content:"\f4b3"}.ion-ios-star-half:before{content:"\f4b1"}.ion-ios-star-outline:before{content:"\f4b2"}.ion-ios-stopwatch:before{content:"\f4b5"}.ion-ios-stopwatch-outline:before{content:"\f4b4"}.ion-ios-sunny:before{content:"\f4b7"}.ion-ios-sunny-outline:before{content:"\f4b6"}.ion-ios-telephone:before{content:"\f4b9"}.ion-ios-telephone-outline:before{content:"\f4b8"}.ion-ios-tennisball:before{content:"\f4bb"}.ion-ios-tennisball-outline:before{content:"\f4ba"}.ion-ios-thunderstorm:before{content:"\f4bd"}.ion-ios-thunderstorm-outline:before{content:"\f4bc"}.ion-ios-time:before{content:"\f4bf"}.ion-ios-time-outline:before{content:"\f4be"}.ion-ios-timer:before{content:"\f4c1"}.ion-ios-timer-outline:before{content:"\f4c0"}.ion-ios-toggle:before{content:"\f4c3"}.ion-ios-toggle-outline:before{content:"\f4c2"}.ion-ios-trash:before{content:"\f4c5"}.ion-ios-trash-outline:before{content:"\f4c4"}.ion-ios-undo:before{content:"\f4c7"}.ion-ios-undo-outline:before{content:"\f4c6"}.ion-ios-unlocked:before{content:"\f4c9"}.ion-ios-unlocked-outline:before{content:"\f4c8"}.ion-ios-upload:before{content:"\f4cb"}.ion-ios-upload-outline:before{content:"\f4ca"}.ion-ios-videocam:before{content:"\f4cd"}.ion-ios-videocam-outline:before{content:"\f4cc"}.ion-ios-volume-high:before{content:"\f4ce"}.ion-ios-volume-low:before{content:"\f4cf"}.ion-ios-wineglass:before{content:"\f4d1"}.ion-ios-wineglass-outline:before{content:"\f4d0"}.ion-ios-world:before{content:"\f4d3"}.ion-ios-world-outline:before{content:"\f4d2"}.ion-ipad:before{content:"\f1f9"}.ion-iphone:before{content:"\f1fa"}.ion-ipod:before{content:"\f1fb"}.ion-jet:before{content:"\f295"}.ion-key:before{content:"\f296"}.ion-knife:before{content:"\f297"}.ion-laptop:before{content:"\f1fc"}.ion-leaf:before{content:"\f1fd"}.ion-levels:before{content:"\f298"}.ion-lightbulb:before{content:"\f299"}.ion-link:before{content:"\f1fe"}.ion-load-a:before{content:"\f29a"}.ion-load-b:before{content:"\f29b"}.ion-load-c:before{content:"\f29c"}.ion-load-d:before{content:"\f29d"}.ion-location:before{content:"\f1ff"}.ion-lock-combination:before{content:"\f4d4"}.ion-locked:before{content:"\f200"}.ion-log-in:before{content:"\f29e"}.ion-log-out:before{content:"\f29f"}.ion-loop:before{content:"\f201"}.ion-magnet:before{content:"\f2a0"}.ion-male:before{content:"\f2a1"}.ion-man:before{content:"\f202"}.ion-map:before{content:"\f203"}.ion-medkit:before{content:"\f2a2"}.ion-merge:before{content:"\f33f"}.ion-mic-a:before{content:"\f204"}.ion-mic-b:before{content:"\f205"}.ion-mic-c:before{content:"\f206"}.ion-minus:before{content:"\f209"}.ion-minus-circled:before{content:"\f207"}.ion-minus-round:before{content:"\f208"}.ion-model-s:before{content:"\f2c1"}.ion-monitor:before{content:"\f20a"}.ion-more:before{content:"\f20b"}.ion-mouse:before{content:"\f340"}.ion-music-note:before{content:"\f20c"}.ion-navicon:before{content:"\f20e"}.ion-navicon-round:before{content:"\f20d"}.ion-navigate:before{content:"\f2a3"}.ion-network:before{content:"\f341"}.ion-no-smoking:before{content:"\f2c2"}.ion-nuclear:before{content:"\f2a4"}.ion-outlet:before{content:"\f342"}.ion-paintbrush:before{content:"\f4d5"}.ion-paintbucket:before{content:"\f4d6"}.ion-paper-airplane:before{content:"\f2c3"}.ion-paperclip:before{content:"\f20f"}.ion-pause:before{content:"\f210"}.ion-person:before{content:"\f213"}.ion-person-add:before{content:"\f211"}.ion-person-stalker:before{content:"\f212"}.ion-pie-graph:before{content:"\f2a5"}.ion-pin:before{content:"\f2a6"}.ion-pinpoint:before{content:"\f2a7"}.ion-pizza:before{content:"\f2a8"}.ion-plane:before{content:"\f214"}.ion-planet:before{content:"\f343"}.ion-play:before{content:"\f215"}.ion-playstation:before{content:"\f30a"}.ion-plus:before{content:"\f218"}.ion-plus-circled:before{content:"\f216"}.ion-plus-round:before{content:"\f217"}.ion-podium:before{content:"\f344"}.ion-pound:before{content:"\f219"}.ion-power:before{content:"\f2a9"}.ion-pricetag:before{content:"\f2aa"}.ion-pricetags:before{content:"\f2ab"}.ion-printer:before{content:"\f21a"}.ion-pull-request:before{content:"\f345"}.ion-qr-scanner:before{content:"\f346"}.ion-quote:before{content:"\f347"}.ion-radio-waves:before{content:"\f2ac"}.ion-record:before{content:"\f21b"}.ion-refresh:before{content:"\f21c"}.ion-reply:before{content:"\f21e"}.ion-reply-all:before{content:"\f21d"}.ion-ribbon-a:before{content:"\f348"}.ion-ribbon-b:before{content:"\f349"}.ion-sad:before{content:"\f34a"}.ion-sad-outline:before{content:"\f4d7"}.ion-scissors:before{content:"\f34b"}.ion-search:before{content:"\f21f"}.ion-settings:before{content:"\f2ad"}.ion-share:before{content:"\f220"}.ion-shuffle:before{content:"\f221"}.ion-skip-backward:before{content:"\f222"}.ion-skip-forward:before{content:"\f223"}.ion-social-android:before{content:"\f225"}.ion-social-android-outline:before{content:"\f224"}.ion-social-angular:before{content:"\f4d9"}.ion-social-angular-outline:before{content:"\f4d8"}.ion-social-apple:before{content:"\f227"}.ion-social-apple-outline:before{content:"\f226"}.ion-social-bitcoin:before{content:"\f2af"}.ion-social-bitcoin-outline:before{content:"\f2ae"}.ion-social-buffer:before{content:"\f229"}.ion-social-buffer-outline:before{content:"\f228"}.ion-social-chrome:before{content:"\f4db"}.ion-social-chrome-outline:before{content:"\f4da"}.ion-social-codepen:before{content:"\f4dd"}.ion-social-codepen-outline:before{content:"\f4dc"}.ion-social-css3:before{content:"\f4df"}.ion-social-css3-outline:before{content:"\f4de"}.ion-social-designernews:before{content:"\f22b"}.ion-social-designernews-outline:before{content:"\f22a"}.ion-social-dribbble:before{content:"\f22d"}.ion-social-dribbble-outline:before{content:"\f22c"}.ion-social-dropbox:before{content:"\f22f"}.ion-social-dropbox-outline:before{content:"\f22e"}.ion-social-euro:before{content:"\f4e1"}.ion-social-euro-outline:before{content:"\f4e0"}.ion-social-facebook:before{content:"\f231"}.ion-social-facebook-outline:before{content:"\f230"}.ion-social-foursquare:before{content:"\f34d"}.ion-social-foursquare-outline:before{content:"\f34c"}.ion-social-freebsd-devil:before{content:"\f2c4"}.ion-social-github:before{content:"\f233"}.ion-social-github-outline:before{content:"\f232"}.ion-social-google:before{content:"\f34f"}.ion-social-google-outline:before{content:"\f34e"}.ion-social-googleplus:before{content:"\f235"}.ion-social-googleplus-outline:before{content:"\f234"}.ion-social-hackernews:before{content:"\f237"}.ion-social-hackernews-outline:before{content:"\f236"}.ion-social-html5:before{content:"\f4e3"}.ion-social-html5-outline:before{content:"\f4e2"}.ion-social-instagram:before{content:"\f351"}.ion-social-instagram-outline:before{content:"\f350"}.ion-social-javascript:before{content:"\f4e5"}.ion-social-javascript-outline:before{content:"\f4e4"}.ion-social-linkedin:before{content:"\f239"}.ion-social-linkedin-outline:before{content:"\f238"}.ion-social-markdown:before{content:"\f4e6"}.ion-social-nodejs:before{content:"\f4e7"}.ion-social-octocat:before{content:"\f4e8"}.ion-social-pinterest:before{content:"\f2b1"}.ion-social-pinterest-outline:before{content:"\f2b0"}.ion-social-python:before{content:"\f4e9"}.ion-social-reddit:before{content:"\f23b"}.ion-social-reddit-outline:before{content:"\f23a"}.ion-social-rss:before{content:"\f23d"}.ion-social-rss-outline:before{content:"\f23c"}.ion-social-sass:before{content:"\f4ea"}.ion-social-skype:before{content:"\f23f"}.ion-social-skype-outline:before{content:"\f23e"}.ion-social-snapchat:before{content:"\f4ec"}.ion-social-snapchat-outline:before{content:"\f4eb"}.ion-social-tumblr:before{content:"\f241"}.ion-social-tumblr-outline:before{content:"\f240"}.ion-social-tux:before{content:"\f2c5"}.ion-social-twitch:before{content:"\f4ee"}.ion-social-twitch-outline:before{content:"\f4ed"}.ion-social-twitter:before{content:"\f243"}.ion-social-twitter-outline:before{content:"\f242"}.ion-social-usd:before{content:"\f353"}.ion-social-usd-outline:before{content:"\f352"}.ion-social-vimeo:before{content:"\f245"}.ion-social-vimeo-outline:before{content:"\f244"}.ion-social-whatsapp:before{content:"\f4f0"}.ion-social-whatsapp-outline:before{content:"\f4ef"}.ion-social-windows:before{content:"\f247"}.ion-social-windows-outline:before{content:"\f246"}.ion-social-wordpress:before{content:"\f249"}.ion-social-wordpress-outline:before{content:"\f248"}.ion-social-yahoo:before{content:"\f24b"}.ion-social-yahoo-outline:before{content:"\f24a"}.ion-social-yen:before{content:"\f4f2"}.ion-social-yen-outline:before{content:"\f4f1"}.ion-social-youtube:before{content:"\f24d"}.ion-social-youtube-outline:before{content:"\f24c"}.ion-soup-can:before{content:"\f4f4"}.ion-soup-can-outline:before{content:"\f4f3"}.ion-speakerphone:before{content:"\f2b2"}.ion-speedometer:before{content:"\f2b3"}.ion-spoon:before{content:"\f2b4"}.ion-star:before{content:"\f24e"}.ion-stats-bars:before{content:"\f2b5"}.ion-steam:before{content:"\f30b"}.ion-stop:before{content:"\f24f"}.ion-thermometer:before{content:"\f2b6"}.ion-thumbsdown:before{content:"\f250"}.ion-thumbsup:before{content:"\f251"}.ion-toggle:before{content:"\f355"}.ion-toggle-filled:before{content:"\f354"}.ion-transgender:before{content:"\f4f5"}.ion-trash-a:before{content:"\f252"}.ion-trash-b:before{content:"\f253"}.ion-trophy:before{content:"\f356"}.ion-tshirt:before{content:"\f4f7"}.ion-tshirt-outline:before{content:"\f4f6"}.ion-umbrella:before{content:"\f2b7"}.ion-university:before{content:"\f357"}.ion-unlocked:before{content:"\f254"}.ion-upload:before{content:"\f255"}.ion-usb:before{content:"\f2b8"}.ion-videocamera:before{content:"\f256"}.ion-volume-high:before{content:"\f257"}.ion-volume-low:before{content:"\f258"}.ion-volume-medium:before{content:"\f259"}.ion-volume-mute:before{content:"\f25a"}.ion-wand:before{content:"\f358"}.ion-waterdrop:before{content:"\f25b"}.ion-wifi:before{content:"\f25c"}.ion-wineglass:before{content:"\f2b9"}.ion-woman:before{content:"\f25d"}.ion-wrench:before{content:"\f2ba"}.ion-xbox:before{content:"\f30c"}

.owl-theme .owl-controls {
    margin-top: 10px;
    text-align: center
}

.owl-theme .owl-controls .owl-buttons div {
    color: #FFF;
    display: inline-block;
    zoom: 1;
    *display: inline;
    margin: 5px;
    padding: 3px 10px;
    font-size: 12px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
    background: #869791;
    filter: Alpha(Opacity=50);
    opacity: .5
}

.owl-theme .owl-controls.clickable .owl-buttons div:hover {
    filter: Alpha(Opacity=100);
    opacity: 1;
    text-decoration: none
}

.owl-theme .owl-controls .owl-page {
    display: inline-block;
    zoom: 1;
    *display: inline
}

.owl-theme .owl-controls .owl-page span {
    display: block;
    width: 12px;
    height: 12px;
    margin: 5px 7px;
    filter: Alpha(Opacity=50);
    opacity: .5;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    background: #869791
}

.owl-theme .owl-controls .owl-page.active span,
.owl-theme .owl-controls.clickable .owl-page:hover span {
    filter: Alpha(Opacity=100);
    opacity: 1
}

.owl-theme .owl-controls .owl-page span.owl-numbers {
    height: auto;
    width: auto;
    color: #FFF;
    padding: 2px 10px;
    font-size: 12px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px
}

.owl-item.loading {
    min-height: 150px;
    background: url(AjaxLoader.gif) no-repeat center center
}.slider-pro {
    position: relative;
    margin: 0 auto;
    -moz-box-sizing: content-box;
    box-sizing: content-box
}

.sp-slides-container {
    position: relative
}

.sp-mask {
    position: relative;
    overflow: hidden
}

.sp-slides {
    position: relative;
    -webkit-backface-visibility: hidden;
    -webkit-perspective: 1000
}

.sp-slide {
    position: absolute
}

.sp-image-container {
    overflow: hidden
}

.sp-image {
    position: relative;
    display: block;
    border: none
}

.sp-no-js {
    overflow: hidden;
    max-width: 100%
}

.sp-thumbnails-container {
    position: relative;
    overflow: hidden
}

.sp-top-thumbnails,
.sp-bottom-thumbnails {
    left: 0;
    margin: 0 auto
}

.sp-top-thumbnails {
    position: absolute;
    top: 0;
    margin-bottom: 4px
}

.sp-bottom-thumbnails {
    margin-top: 4px
}

.sp-left-thumbnails,
.sp-right-thumbnails {
    position: absolute;
    top: 0
}

.sp-right-thumbnails {
    right: 0;
    margin-left: 4px
}

.sp-left-thumbnails {
    left: 0;
    margin-right: 4px
}

.sp-thumbnails {
    position: relative
}

.sp-thumbnail {
    border: none
}

.sp-thumbnail-container {
    position: relative;
    display: block;
    overflow: hidden;
    float: left;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

.sp-top-thumbnails .sp-thumbnail-container,
.sp-bottom-thumbnails .sp-thumbnail-container {
    margin-left: 2px;
    margin-right: 2px
}

.sp-top-thumbnails .sp-thumbnail-container:first-child,
.sp-bottom-thumbnails .sp-thumbnail-container:first-child {
    margin-left: 0
}

.sp-top-thumbnails .sp-thumbnail-container:last-child,
.sp-bottom-thumbnails .sp-thumbnail-container:last-child {
    margin-right: 0
}

.sp-left-thumbnails .sp-thumbnail-container,
.sp-right-thumbnails .sp-thumbnail-container {
    margin-top: 2px;
    margin-bottom: 2px
}

.sp-left-thumbnails .sp-thumbnail-container:first-child,
.sp-right-thumbnails .sp-thumbnail-container:first-child {
    margin-top: 0
}

.sp-left-thumbnails .sp-thumbnail-container:last-child,
.sp-right-thumbnails .sp-thumbnail-container:last-child {
    margin-bottom: 0
}

.sp-right-thumbnails.sp-has-pointer {
    margin-left: -13px
}

.sp-right-thumbnails.sp-has-pointer .sp-thumbnail {
    position: absolute;
    left: 18px;
    margin-left: 0!important
}

.sp-right-thumbnails.sp-has-pointer .sp-selected-thumbnail:before {
    content: '';
    position: absolute;
    height: 100%;
    border-left: 5px solid red;
    left: 0;
    top: 0;
    margin-left: 13px
}

.sp-right-thumbnails.sp-has-pointer .sp-selected-thumbnail:after {
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    left: 0;
    top: 50%;
    margin-top: -8px;
    border-right: 13px solid red;
    border-top: 8px solid transparent;
    border-bottom: 8px solid transparent
}

.sp-left-thumbnails.sp-has-pointer {
    margin-right: -13px
}

.sp-left-thumbnails.sp-has-pointer .sp-thumbnail {
    position: absolute;
    right: 18px
}

.sp-left-thumbnails.sp-has-pointer .sp-selected-thumbnail:before {
    content: '';
    position: absolute;
    height: 100%;
    border-left: 5px solid red;
    right: 0;
    top: 0;
    margin-right: 13px
}

.sp-left-thumbnails.sp-has-pointer .sp-selected-thumbnail:after {
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    right: 0;
    top: 50%;
    margin-top: -8px;
    border-left: 13px solid red;
    border-top: 8px solid transparent;
    border-bottom: 8px solid transparent
}

.sp-bottom-thumbnails.sp-has-pointer {
    margin-top: -13px
}

.sp-bottom-thumbnails.sp-has-pointer .sp-thumbnail {
    position: absolute;
    top: 18px;
    margin-top: 0!important
}

.sp-bottom-thumbnails.sp-has-pointer .sp-selected-thumbnail:before {
    content: '';
    position: absolute;
    width: 100%;
    border-bottom: 5px solid red;
    top: 0;
    margin-top: 13px
}

.sp-bottom-thumbnails.sp-has-pointer .sp-selected-thumbnail:after {
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    left: 50%;
    top: 0;
    margin-left: -8px;
    border-bottom: 13px solid red;
    border-left: 8px solid transparent;
    border-right: 8px solid transparent
}

.sp-top-thumbnails.sp-has-pointer {
    margin-bottom: -13px
}

.sp-top-thumbnails.sp-has-pointer .sp-thumbnail {
    position: absolute;
    bottom: 18px
}

.sp-top-thumbnails.sp-has-pointer .sp-selected-thumbnail:before {
    content: '';
    position: absolute;
    width: 100%;
    border-bottom: 5px solid red;
    bottom: 0;
    margin-bottom: 13px
}

.sp-top-thumbnails.sp-has-pointer .sp-selected-thumbnail:after {
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    left: 50%;
    bottom: 0;
    margin-left: -8px;
    border-top: 13px solid red;
    border-left: 8px solid transparent;
    border-right: 8px solid transparent
}

.sp-layer {
    position: absolute;
    margin: 0;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -webkit-font-smoothing: subpixel-antialiased;
    -webkit-backface-visibility: hidden
}

.sp-black {
    color: #FFF;
    background: #000;
    background: rgba(0, 0, 0, 0.7)
}

.sp-white {
    color: #000;
    background: #fff;
    background: rgba(255, 255, 255, 0.7)
}

.sp-rounded {
    border-radius: 10px
}

.sp-padding {
    padding: 10px
}

.sp-grab {
    cursor: -webkit-grab;
    cursor: -moz-grab
}

.sp-grabbing {
    cursor: -moz-grabbing;
    cursor: -webkit-grabbing
}

.sp-selectable {
    cursor: default
}

.sp-caption-container {
    text-align: center;
    margin-top: 10px
}

.sp-full-screen {
    margin: 0!important;
    background-color: #000
}

.sp-full-screen-button {
    position: absolute;
    top: 5px;
    right: 10px;
    font-size: 30px;
    line-height: 1;
    cursor: pointer;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg)
}

.sp-full-screen-button:before {
    content: '\2195'
}

.sp-fade-full-screen {
    opacity: 0;
    -webkit-transition: opacity .5s;
    transition: opacity .5s
}

.slider-pro:hover .sp-fade-full-screen {
    opacity: 1
}

.sp-buttons {
    position: relative;
    width: 100%;
    text-align: center;
    padding-top: 10px
}

.sp-button {
    width: 10px;
    height: 10px;
    border: 2px solid #000;
    border-radius: 50%;
    margin: 4px;
    display: inline-block;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    cursor: pointer
}

.sp-selected-button {
    background-color: #000
}

@media only screen and (min-width: 768px) and (max-width: 1024px) {
    .sp-button {
        width: 14px;
        height: 14px
    }
}

@media only screen and (min-width: 568px) and (max-width: 768px) {
    .sp-button {
        width: 16px;
        height: 16px
    }
}

@media only screen and (min-width: 320px) and (max-width: 568px) {
    .sp-button {
        width: 18px;
        height: 18px
    }
}

.sp-arrows {
    position: absolute
}

.sp-fade-arrows {
    opacity: 0;
    -webkit-transition: opacity .5s;
    transition: opacity .5s
}

.sp-slides-container:hover .sp-fade-arrows {
    opacity: 1
}

.sp-horizontal .sp-arrows {
    width: 100%;
    left: 0;
    top: 50%;
    margin-top: -15px
}

.sp-vertical .sp-arrows {
    height: 100%;
    left: 50%;
    top: 0;
    margin-left: -10px
}

.sp-arrow {
    position: absolute;
    display: block;
    width: 20px;
    height: 30px;
    cursor: pointer;
    font-family: Ionicons
}

.sp-vertical .sp-arrow {
    -webkit-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg)
}

.sp-horizontal .sp-previous-arrow {
    left: 40px;
    -webkit-transition: all .5s;
    transition: all .5s
}

.sp-horizontal .sp-next-arrow {
    right: 40px;
    -webkit-transition: all .5s;
    transition: all .5s
}

.sp-slides-container:hover .sp-previous-arrow {
    left: 60px
}

.sp-slides-container:hover .sp-next-arrow {
    right: 80px
}

.sp-vertical .sp-previous-arrow {
    top: 20px
}

.sp-vertical .sp-next-arrow {
    bottom: 20px
}

.sp-previous-arrow:before,
.sp-previous-arrow:after,
.sp-next-arrow:before,
.sp-next-arrow:after {
    font-family: Ionicons;
    position: absolute;
    width: 50%;
    height: 50%;
    color: #FFF;
    font-size: 34px
}

.sp-previous-arrow:before {
    left: 30%;
    top: 0;
    content: '\f3d2'
}

.sp-next-arrow:before {
    right: 30%;
    top: 0;
    content: '\f3d3'
}

.ie8 .sp-arrow,
.ie7 .sp-arrow {
    width: 0;
    height: 0
}

.ie8 .sp-arrow:before,
.ie8 .sp-arrow:after,
.ie7 .sp-arrow:before,
.ie7 .sp-arrow:after {
    content: none
}

.ie8.sp-horizontal .sp-previous-arrow,
.ie7.sp-horizontal .sp-previous-arrow {
    border-right: 20px solid #FFF;
    border-top: 20px solid transparent;
    border-bottom: 20px solid transparent
}

.ie8.sp-horizontal .sp-next-arrow,
.ie7.sp-horizontal .sp-next-arrow {
    border-left: 20px solid #FFF;
    border-top: 20px solid transparent;
    border-bottom: 20px solid transparent
}

.ie8.sp-vertical .sp-previous-arrow,
.ie7.sp-vertical .sp-previous-arrow {
    border-bottom: 20px solid #FFF;
    border-left: 20px solid transparent;
    border-right: 20px solid transparent
}

.ie8.sp-vertical .sp-next-arrow,
.ie7.sp-vertical .sp-next-arrow {
    border-top: 20px solid #FFF;
    border-left: 20px solid transparent;
    border-right: 20px solid transparent
}

.sp-thumbnail-arrows {
    position: absolute
}

.sp-fade-thumbnail-arrows {
    opacity: 0;
    -webkit-transition: opacity .5s;
    transition: opacity .5s
}

.sp-thumbnails-container:hover .sp-fade-thumbnail-arrows {
    opacity: 1
}

.sp-top-thumbnails .sp-thumbnail-arrows,
.sp-bottom-thumbnails .sp-thumbnail-arrows {
    width: 100%;
    top: 50%;
    left: 0;
    margin-top: -12px
}

.sp-left-thumbnails .sp-thumbnail-arrows,
.sp-right-thumbnails .sp-thumbnail-arrows {
    height: 100%;
    top: 0;
    left: 50%;
    margin-left: -7px
}

.sp-thumbnail-arrow {
    position: absolute;
    display: block;
    width: 15px;
    height: 25px;
    cursor: pointer
}

.sp-left-thumbnails .sp-thumbnail-arrows .sp-thumbnail-arrow,
.sp-right-thumbnails .sp-thumbnail-arrows .sp-thumbnail-arrow {
    -webkit-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg)
}

.sp-top-thumbnails .sp-previous-thumbnail-arrow,
.sp-bottom-thumbnails .sp-previous-thumbnail-arrow {
    left: 0
}

.sp-top-thumbnails .sp-next-thumbnail-arrow,
.sp-bottom-thumbnails .sp-next-thumbnail-arrow {
    right: 0
}

.sp-left-thumbnails .sp-previous-thumbnail-arrow,
.sp-right-thumbnails .sp-previous-thumbnail-arrow {
    top: 0
}

.sp-left-thumbnails .sp-next-thumbnail-arrow,
.sp-right-thumbnails .sp-next-thumbnail-arrow {
    bottom: 0
}

.sp-previous-thumbnail-arrow:before,
.sp-previous-thumbnail-arrow:after,
.sp-next-thumbnail-arrow:before,
.sp-next-thumbnail-arrow:after {
    content: '';
    position: absolute;
    width: 50%;
    height: 50%;
    background-color: #FFF
}

.sp-previous-thumbnail-arrow:before {
    left: 30%;
    top: 0;
    -webkit-transform: skew(145deg, 0deg);
    -ms-transform: skew(145deg, 0deg);
    transform: skew(145deg, 0deg)
}

.sp-previous-thumbnail-arrow:after {
    left: 30%;
    top: 50%;
    -webkit-transform: skew(-145deg, 0deg);
    -ms-transform: skew(-145deg, 0deg);
    transform: skew(-145deg, 0deg)
}

.sp-next-thumbnail-arrow:before {
    right: 30%;
    top: 0;
    -webkit-transform: skew(35deg, 0deg);
    -ms-transform: skew(35deg, 0deg);
    transform: skew(35deg, 0deg)
}

.sp-next-thumbnail-arrow:after {
    right: 30%;
    top: 50%;
    -webkit-transform: skew(-35deg, 0deg);
    -ms-transform: skew(-35deg, 0deg);
    transform: skew(-35deg, 0deg)
}

.ie8 .sp-thumbnail-arrow,
.ie7 .sp-thumbnail-arrow {
    width: 0;
    height: 0
}

.ie8 .sp-thumbnail-arrow:before,
.ie8 .sp-thumbnail-arrow:after,
.ie7 .sp-thumbnail-arrow:before,
.ie7 .sp-thumbnail-arrow:after {
    content: none
}

.ie8 .sp-top-thumbnails .sp-previous-thumbnail-arrow,
.ie8 .sp-bottom-thumbnails .sp-previous-thumbnail-arrow,
.ie7 .sp-top-thumbnails .sp-previous-thumbnail-arrow,
.ie7 .sp-bottom-thumbnails .sp-previous-thumbnail-arrow {
    border-right: 12px solid #FFF;
    border-top: 12px solid transparent;
    border-bottom: 12px solid transparent
}

.ie8 .sp-top-thumbnails .sp-next-thumbnail-arrow,
.ie8 .sp-bottom-thumbnails .sp-next-thumbnail-arrow,
.ie7 .sp-top-thumbnails .sp-next-thumbnail-arrow,
.ie7 .sp-bottom-thumbnails .sp-next-thumbnail-arrow {
    border-left: 12px solid #FFF;
    border-top: 12px solid transparent;
    border-bottom: 12px solid transparent
}

.ie8 .sp-left-thumbnails .sp-previous-thumbnail-arrow,
.ie8 .sp-right-thumbnails .sp-previous-thumbnail-arrow,
.ie7 .sp-left-thumbnails .sp-previous-thumbnail-arrow,
.ie7 .sp-right-thumbnails .sp-previous-thumbnail-arrow {
    border-bottom: 12px solid #FFF;
    border-left: 12px solid transparent;
    border-right: 12px solid transparent
}

.ie8 .sp-left-thumbnails .sp-next-thumbnail-arrow,
.ie8 .sp-right-thumbnails .sp-next-thumbnail-arrow,
.ie7 .sp-left-thumbnails .sp-next-thumbnail-arrow,
.ie7 .sp-right-thumbnails .sp-next-thumbnail-arrow {
    border-top: 12px solid #FFF;
    border-left: 12px solid transparent;
    border-right: 12px solid transparent
}

a.sp-video {
    text-decoration: none
}

a.sp-video img {
    -webkit-backface-visibility: hidden;
    border: none
}

a.sp-video:after {
    content: '\25B6';
    position: absolute;
    width: 45px;
    padding-left: 5px;
    height: 50px;
    border: 2px solid #FFF;
    text-align: center;
    font-size: 30px;
    border-radius: 30px;
    top: 0;
    color: #FFF;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.2);
    margin: auto;
    line-height: 52px
}

.slider-pro img.sp-image,
.slider-pro img.sp-thumbnail {
    max-width: none;
    max-height: none;
    border: none!important;
    border-radius: 0!important;
    padding: 0!important;
    -webkit-box-shadow: none!important;
    -mox-box-shadow: none!important;
    box-shadow: none!important;
    transition: none;
    -moz-transition: none;
    -webkit-transition: none;
    -o-transition: none
}

.slider-pro a {
    position: static;
    transition: none!important;
    -moz-transition: none!important;
    -webkit-transition: none!important;
    -o-transition: none!important
}

.slider-pro iframe,
.slider-pro object,
.slider-pro video,
.slider-pro embed,
.slider-pro canvas {
    max-width: none;
    max-height: none
}

.slider-pro p.sp-layer {
    font-size: 14px;
    line-height: 1.4;
    margin: 0
}

.slider-pro h1.sp-layer {
    font-size: 32px;
    line-height: 1.4;
    margin: 0
}

.slider-pro h2.sp-layer {
    font-size: 24px;
    line-height: 1.4;
    margin: 0
}

.slider-pro h3.sp-layer {
    font-size: 19px;
    line-height: 1.4;
    margin: 0
}

.slider-pro h4.sp-layer {
    font-size: 16px;
    line-height: 1.4;
    margin: 0
}

.slider-pro h5.sp-layer {
    font-size: 13px;
    line-height: 1.4;
    margin: 0
}

.slider-pro h6.sp-layer {
    font-size: 11px;
    line-height: 1.4;
    margin: 0
}

.slider-pro img.sp-layer {
    border: none
}
.owl-carousel .owl-wrapper:after {
    content: ".";
    display: block;
    clear: both;
    visibility: hidden;
    line-height: 0;
    height: 0
}

.owl-carousel {
    display: none;
    position: relative;
    width: 100%;
    -ms-touch-action: pan-y
}

.owl-carousel .owl-wrapper {
    display: none;
    position: relative;
    -webkit-transform: translate3d(0px, 0px, 0px)
}

.owl-carousel .owl-wrapper-outer {
    overflow: hidden;
    position: relative;
    width: 100%
}

.owl-carousel .owl-wrapper-outer.autoHeight {
    -webkit-transition: height 500ms ease-in-out;
    -moz-transition: height 500ms ease-in-out;
    -ms-transition: height 500ms ease-in-out;
    -o-transition: height 500ms ease-in-out;
    transition: height 500ms ease-in-out
}

.owl-carousel .owl-item {
    float: left
}

.owl-controls .owl-page,
.owl-controls .owl-buttons div {
    cursor: pointer
}

.owl-controls {
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
}

.grabbing {
    cursor: url(grabbing.png) 8 8, move
}

.owl-carousel .owl-wrapper,
.owl-carousel .owl-item {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0)
}

.animated{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both}
.animated.hinge{-webkit-animation-duration:2s;animation-duration:2s}
@-webkit-keyframes bounce {
0%,20%,50%,80%,100%{-webkit-transform:translateY(0);transform:translateY(0)}
40%{-webkit-transform:translateY(-30px);transform:translateY(-30px)}
60%{-webkit-transform:translateY(-15px);transform:translateY(-15px)}
}
@keyframes bounce {
0%,20%,50%,80%,100%{-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}
40%{-webkit-transform:translateY(-30px);-ms-transform:translateY(-30px);transform:translateY(-30px)}
60%{-webkit-transform:translateY(-15px);-ms-transform:translateY(-15px);transform:translateY(-15px)}
}
.bounce{-webkit-animation-name:bounce;animation-name:bounce}
@-webkit-keyframes flash {
0%,50%,100%{opacity:1}
25%,75%{opacity:0}
}
@keyframes flash {
0%,50%,100%{opacity:1}
25%,75%{opacity:0}
}
.flash{-webkit-animation-name:flash;animation-name:flash}
@-webkit-keyframes pulse {
0%{-webkit-transform:scale(1);transform:scale(1)}
50%{-webkit-transform:scale(1.1);transform:scale(1.1)}
100%{-webkit-transform:scale(1);transform:scale(1)}
}
@keyframes pulse {
0%{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}
50%{-webkit-transform:scale(1.1);-ms-transform:scale(1.1);transform:scale(1.1)}
100%{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}
}
.pulse{-webkit-animation-name:pulse;animation-name:pulse}
@-webkit-keyframes shake {
0%,100%{-webkit-transform:translateX(0);transform:translateX(0)}
10%,30%,50%,70%,90%{-webkit-transform:translateX(-10px);transform:translateX(-10px)}
20%,40%,60%,80%{-webkit-transform:translateX(10px);transform:translateX(10px)}
}
@keyframes shake {
0%,100%{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}
10%,30%,50%,70%,90%{-webkit-transform:translateX(-10px);-ms-transform:translateX(-10px);transform:translateX(-10px)}
20%,40%,60%,80%{-webkit-transform:translateX(10px);-ms-transform:translateX(10px);transform:translateX(10px)}
}
.shake{-webkit-animation-name:shake;animation-name:shake}
@-webkit-keyframes swing {
20%{-webkit-transform:rotate(15deg);transform:rotate(15deg)}
40%{-webkit-transform:rotate(-10deg);transform:rotate(-10deg)}
60%{-webkit-transform:rotate(5deg);transform:rotate(5deg)}
80%{-webkit-transform:rotate(-5deg);transform:rotate(-5deg)}
100%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}
}
@keyframes swing {
20%{-webkit-transform:rotate(15deg);-ms-transform:rotate(15deg);transform:rotate(15deg)}
40%{-webkit-transform:rotate(-10deg);-ms-transform:rotate(-10deg);transform:rotate(-10deg)}
60%{-webkit-transform:rotate(5deg);-ms-transform:rotate(5deg);transform:rotate(5deg)}
80%{-webkit-transform:rotate(-5deg);-ms-transform:rotate(-5deg);transform:rotate(-5deg)}
100%{-webkit-transform:rotate(0deg);-ms-transform:rotate(0deg);transform:rotate(0deg)}
}
.swing{-webkit-transform-origin:top center;-ms-transform-origin:top center;transform-origin:top center;-webkit-animation-name:swing;animation-name:swing}
@-webkit-keyframes tada {
0%{-webkit-transform:scale(1);transform:scale(1)}
10%,20%{-webkit-transform:scale(0.9) rotate(-3deg);transform:scale(0.9) rotate(-3deg)}
30%,50%,70%,90%{-webkit-transform:scale(1.1) rotate(3deg);transform:scale(1.1) rotate(3deg)}
40%,60%,80%{-webkit-transform:scale(1.1) rotate(-3deg);transform:scale(1.1) rotate(-3deg)}
100%{-webkit-transform:scale(1) rotate(0);transform:scale(1) rotate(0)}
}
@keyframes tada {
0%{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}
10%,20%{-webkit-transform:scale(0.9) rotate(-3deg);-ms-transform:scale(0.9) rotate(-3deg);transform:scale(0.9) rotate(-3deg)}
30%,50%,70%,90%{-webkit-transform:scale(1.1) rotate(3deg);-ms-transform:scale(1.1) rotate(3deg);transform:scale(1.1) rotate(3deg)}
40%,60%,80%{-webkit-transform:scale(1.1) rotate(-3deg);-ms-transform:scale(1.1) rotate(-3deg);transform:scale(1.1) rotate(-3deg)}
100%{-webkit-transform:scale(1) rotate(0);-ms-transform:scale(1) rotate(0);transform:scale(1) rotate(0)}
}
.tada{-webkit-animation-name:tada;animation-name:tada}
@-webkit-keyframes wobble {
0%{-webkit-transform:translateX(0%);transform:translateX(0%)}
15%{-webkit-transform:translateX(-25%) rotate(-5deg);transform:translateX(-25%) rotate(-5deg)}
30%{-webkit-transform:translateX(20%) rotate(3deg);transform:translateX(20%) rotate(3deg)}
45%{-webkit-transform:translateX(-15%) rotate(-3deg);transform:translateX(-15%) rotate(-3deg)}
60%{-webkit-transform:translateX(10%) rotate(2deg);transform:translateX(10%) rotate(2deg)}
75%{-webkit-transform:translateX(-5%) rotate(-1deg);transform:translateX(-5%) rotate(-1deg)}
100%{-webkit-transform:translateX(0%);transform:translateX(0%)}
}
@keyframes wobble {
0%{-webkit-transform:translateX(0%);-ms-transform:translateX(0%);transform:translateX(0%)}
15%{-webkit-transform:translateX(-25%) rotate(-5deg);-ms-transform:translateX(-25%) rotate(-5deg);transform:translateX(-25%) rotate(-5deg)}
30%{-webkit-transform:translateX(20%) rotate(3deg);-ms-transform:translateX(20%) rotate(3deg);transform:translateX(20%) rotate(3deg)}
45%{-webkit-transform:translateX(-15%) rotate(-3deg);-ms-transform:translateX(-15%) rotate(-3deg);transform:translateX(-15%) rotate(-3deg)}
60%{-webkit-transform:translateX(10%) rotate(2deg);-ms-transform:translateX(10%) rotate(2deg);transform:translateX(10%) rotate(2deg)}
75%{-webkit-transform:translateX(-5%) rotate(-1deg);-ms-transform:translateX(-5%) rotate(-1deg);transform:translateX(-5%) rotate(-1deg)}
100%{-webkit-transform:translateX(0%);-ms-transform:translateX(0%);transform:translateX(0%)}
}
.wobble{-webkit-animation-name:wobble;animation-name:wobble}
@-webkit-keyframes bounceIn {
0%{opacity:0;-webkit-transform:scale(.3);transform:scale(.3)}
50%{opacity:1;-webkit-transform:scale(1.05);transform:scale(1.05)}
70%{-webkit-transform:scale(.9);transform:scale(.9)}
100%{-webkit-transform:scale(1);transform:scale(1)}
}
@keyframes bounceIn {
0%{opacity:0;-webkit-transform:scale(.3);-ms-transform:scale(.3);transform:scale(.3)}
50%{opacity:1;-webkit-transform:scale(1.05);-ms-transform:scale(1.05);transform:scale(1.05)}
70%{-webkit-transform:scale(.9);-ms-transform:scale(.9);transform:scale(.9)}
100%{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}
}
.bounceIn{-webkit-animation-name:bounceIn;animation-name:bounceIn}
@-webkit-keyframes bounceInDown {
0%{opacity:0;-webkit-transform:translateY(-2000px);transform:translateY(-2000px)}
60%{opacity:1;-webkit-transform:translateY(30px);transform:translateY(30px)}
80%{-webkit-transform:translateY(-10px);transform:translateY(-10px)}
100%{-webkit-transform:translateY(0);transform:translateY(0)}
}
@keyframes bounceInDown {
0%{opacity:0;-webkit-transform:translateY(-2000px);-ms-transform:translateY(-2000px);transform:translateY(-2000px)}
60%{opacity:1;-webkit-transform:translateY(30px);-ms-transform:translateY(30px);transform:translateY(30px)}
80%{-webkit-transform:translateY(-10px);-ms-transform:translateY(-10px);transform:translateY(-10px)}
100%{-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}
}
.bounceInDown{-webkit-animation-name:bounceInDown;animation-name:bounceInDown}
@-webkit-keyframes bounceInLeft {
0%{opacity:0;-webkit-transform:translateX(-2000px);transform:translateX(-2000px)}
60%{opacity:1;-webkit-transform:translateX(30px);transform:translateX(30px)}
80%{-webkit-transform:translateX(-10px);transform:translateX(-10px)}
100%{-webkit-transform:translateX(0);transform:translateX(0)}
}
@keyframes bounceInLeft {
0%{opacity:0;-webkit-transform:translateX(-2000px);-ms-transform:translateX(-2000px);transform:translateX(-2000px)}
60%{opacity:1;-webkit-transform:translateX(30px);-ms-transform:translateX(30px);transform:translateX(30px)}
80%{-webkit-transform:translateX(-10px);-ms-transform:translateX(-10px);transform:translateX(-10px)}
100%{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}
}
.bounceInLeft{-webkit-animation-name:bounceInLeft;animation-name:bounceInLeft}
@-webkit-keyframes bounceInRight {
0%{opacity:0;-webkit-transform:translateX(2000px);transform:translateX(2000px)}
60%{opacity:1;-webkit-transform:translateX(-30px);transform:translateX(-30px)}
80%{-webkit-transform:translateX(10px);transform:translateX(10px)}
100%{-webkit-transform:translateX(0);transform:translateX(0)}
}
@keyframes bounceInRight {
0%{opacity:0;-webkit-transform:translateX(2000px);-ms-transform:translateX(2000px);transform:translateX(2000px)}
60%{opacity:1;-webkit-transform:translateX(-30px);-ms-transform:translateX(-30px);transform:translateX(-30px)}
80%{-webkit-transform:translateX(10px);-ms-transform:translateX(10px);transform:translateX(10px)}
100%{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}
}
.bounceInRight{-webkit-animation-name:bounceInRight;animation-name:bounceInRight}
@-webkit-keyframes bounceInUp {
0%{opacity:0;-webkit-transform:translateY(2000px);transform:translateY(2000px)}
60%{opacity:1;-webkit-transform:translateY(-30px);transform:translateY(-30px)}
80%{-webkit-transform:translateY(10px);transform:translateY(10px)}
100%{-webkit-transform:translateY(0);transform:translateY(0)}
}
@keyframes bounceInUp {
0%{opacity:0;-webkit-transform:translateY(2000px);-ms-transform:translateY(2000px);transform:translateY(2000px)}
60%{opacity:1;-webkit-transform:translateY(-30px);-ms-transform:translateY(-30px);transform:translateY(-30px)}
80%{-webkit-transform:translateY(10px);-ms-transform:translateY(10px);transform:translateY(10px)}
100%{-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}
}
.bounceInUp{-webkit-animation-name:bounceInUp;animation-name:bounceInUp}
@-webkit-keyframes bounceOut {
0%{-webkit-transform:scale(1);transform:scale(1)}
25%{-webkit-transform:scale(.95);transform:scale(.95)}
50%{opacity:1;-webkit-transform:scale(1.1);transform:scale(1.1)}
100%{opacity:0;-webkit-transform:scale(.3);transform:scale(.3)}
}
@keyframes bounceOut {
0%{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}
25%{-webkit-transform:scale(.95);-ms-transform:scale(.95);transform:scale(.95)}
50%{opacity:1;-webkit-transform:scale(1.1);-ms-transform:scale(1.1);transform:scale(1.1)}
100%{opacity:0;-webkit-transform:scale(.3);-ms-transform:scale(.3);transform:scale(.3)}
}
.bounceOut{-webkit-animation-name:bounceOut;animation-name:bounceOut}
@-webkit-keyframes bounceOutDown {
0%{-webkit-transform:translateY(0);transform:translateY(0)}
20%{opacity:1;-webkit-transform:translateY(-20px);transform:translateY(-20px)}
100%{opacity:0;-webkit-transform:translateY(2000px);transform:translateY(2000px)}
}
@keyframes bounceOutDown {
0%{-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}
20%{opacity:1;-webkit-transform:translateY(-20px);-ms-transform:translateY(-20px);transform:translateY(-20px)}
100%{opacity:0;-webkit-transform:translateY(2000px);-ms-transform:translateY(2000px);transform:translateY(2000px)}
}
.bounceOutDown{-webkit-animation-name:bounceOutDown;animation-name:bounceOutDown}
@-webkit-keyframes bounceOutLeft {
0%{-webkit-transform:translateX(0);transform:translateX(0)}
20%{opacity:1;-webkit-transform:translateX(20px);transform:translateX(20px)}
100%{opacity:0;-webkit-transform:translateX(-2000px);transform:translateX(-2000px)}
}
@keyframes bounceOutLeft {
0%{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}
20%{opacity:1;-webkit-transform:translateX(20px);-ms-transform:translateX(20px);transform:translateX(20px)}
100%{opacity:0;-webkit-transform:translateX(-2000px);-ms-transform:translateX(-2000px);transform:translateX(-2000px)}
}
.bounceOutLeft{-webkit-animation-name:bounceOutLeft;animation-name:bounceOutLeft}
@-webkit-keyframes bounceOutRight {
0%{-webkit-transform:translateX(0);transform:translateX(0)}
20%{opacity:1;-webkit-transform:translateX(-20px);transform:translateX(-20px)}
100%{opacity:0;-webkit-transform:translateX(2000px);transform:translateX(2000px)}
}
@keyframes bounceOutRight {
0%{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}
20%{opacity:1;-webkit-transform:translateX(-20px);-ms-transform:translateX(-20px);transform:translateX(-20px)}
100%{opacity:0;-webkit-transform:translateX(2000px);-ms-transform:translateX(2000px);transform:translateX(2000px)}
}
.bounceOutRight{-webkit-animation-name:bounceOutRight;animation-name:bounceOutRight}
@-webkit-keyframes bounceOutUp {
0%{-webkit-transform:translateY(0);transform:translateY(0)}
20%{opacity:1;-webkit-transform:translateY(20px);transform:translateY(20px)}
100%{opacity:0;-webkit-transform:translateY(-2000px);transform:translateY(-2000px)}
}
@keyframes bounceOutUp {
0%{-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}
20%{opacity:1;-webkit-transform:translateY(20px);-ms-transform:translateY(20px);transform:translateY(20px)}
100%{opacity:0;-webkit-transform:translateY(-2000px);-ms-transform:translateY(-2000px);transform:translateY(-2000px)}
}
.bounceOutUp{-webkit-animation-name:bounceOutUp;animation-name:bounceOutUp}
@-webkit-keyframes fadeIn {
0%{opacity:0}
100%{opacity:1}
}
@keyframes fadeIn {
0%{opacity:0}
100%{opacity:1}
}
.fadeIn{-webkit-animation-name:fadeIn;animation-name:fadeIn}
@-webkit-keyframes fadeInDown {
0%{opacity:0;-webkit-transform:translateY(-20px);transform:translateY(-20px)}
100%{opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}
}
@keyframes fadeInDown {
0%{opacity:0;-webkit-transform:translateY(-20px);-ms-transform:translateY(-20px);transform:translateY(-20px)}
100%{opacity:1;-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}
}
.fadeInDown{-webkit-animation-name:fadeInDown;animation-name:fadeInDown}
@-webkit-keyframes fadeInDownBig {
0%{opacity:0;-webkit-transform:translateY(-2000px);transform:translateY(-2000px)}
100%{opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}
}
@keyframes fadeInDownBig {
0%{opacity:0;-webkit-transform:translateY(-2000px);-ms-transform:translateY(-2000px);transform:translateY(-2000px)}
100%{opacity:1;-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}
}
.fadeInDownBig{-webkit-animation-name:fadeInDownBig;animation-name:fadeInDownBig}
@-webkit-keyframes fadeInLeft {
0%{opacity:0;-webkit-transform:translateX(-20px);transform:translateX(-20px)}
100%{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}
}
@keyframes fadeInLeft {
0%{opacity:0;-webkit-transform:translateX(-20px);-ms-transform:translateX(-20px);transform:translateX(-20px)}
100%{opacity:1;-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}
}
.fadeInLeft{-webkit-animation-name:fadeInLeft;animation-name:fadeInLeft}
@-webkit-keyframes fadeInLeftBig {
0%{opacity:0;-webkit-transform:translateX(-2000px);transform:translateX(-2000px)}
100%{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}
}
@keyframes fadeInLeftBig {
0%{opacity:0;-webkit-transform:translateX(-2000px);-ms-transform:translateX(-2000px);transform:translateX(-2000px)}
100%{opacity:1;-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}
}
.fadeInLeftBig{-webkit-animation-name:fadeInLeftBig;animation-name:fadeInLeftBig}
@-webkit-keyframes fadeInRight {
0%{opacity:0;-webkit-transform:translateX(20px);transform:translateX(20px)}
100%{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}
}
@keyframes fadeInRight {
0%{opacity:0;-webkit-transform:translateX(20px);-ms-transform:translateX(20px);transform:translateX(20px)}
100%{opacity:1;-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}
}
.fadeInRight{-webkit-animation-name:fadeInRight;animation-name:fadeInRight}
@-webkit-keyframes fadeInRightBig {
0%{opacity:0;-webkit-transform:translateX(2000px);transform:translateX(2000px)}
100%{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}
}
@keyframes fadeInRightBig {
0%{opacity:0;-webkit-transform:translateX(2000px);-ms-transform:translateX(2000px);transform:translateX(2000px)}
100%{opacity:1;-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}
}
.fadeInRightBig{-webkit-animation-name:fadeInRightBig;animation-name:fadeInRightBig}
@-webkit-keyframes fadeInUp {
0%{opacity:0;-webkit-transform:translateY(20px);transform:translateY(20px)}
100%{opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}
}
@keyframes fadeInUp {
0%{opacity:0;-webkit-transform:translateY(20px);-ms-transform:translateY(20px);transform:translateY(20px)}
100%{opacity:1;-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}
}
.fadeInUp{-webkit-animation-name:fadeInUp;animation-name:fadeInUp}
@-webkit-keyframes fadeInUpBig {
0%{opacity:0;-webkit-transform:translateY(2000px);transform:translateY(2000px)}
100%{opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}
}
@keyframes fadeInUpBig {
0%{opacity:0;-webkit-transform:translateY(2000px);-ms-transform:translateY(2000px);transform:translateY(2000px)}
100%{opacity:1;-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}
}
.fadeInUpBig{-webkit-animation-name:fadeInUpBig;animation-name:fadeInUpBig}
@-webkit-keyframes fadeOut {
0%{opacity:1}
100%{opacity:0}
}
@keyframes fadeOut {
0%{opacity:1}
100%{opacity:0}
}
.fadeOut{-webkit-animation-name:fadeOut;animation-name:fadeOut}
@-webkit-keyframes fadeOutDown {
0%{opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}
100%{opacity:0;-webkit-transform:translateY(20px);transform:translateY(20px)}
}
@keyframes fadeOutDown {
0%{opacity:1;-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}
100%{opacity:0;-webkit-transform:translateY(20px);-ms-transform:translateY(20px);transform:translateY(20px)}
}
.fadeOutDown{-webkit-animation-name:fadeOutDown;animation-name:fadeOutDown}
@-webkit-keyframes fadeOutDownBig {
0%{opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}
100%{opacity:0;-webkit-transform:translateY(2000px);transform:translateY(2000px)}
}
@keyframes fadeOutDownBig {
0%{opacity:1;-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}
100%{opacity:0;-webkit-transform:translateY(2000px);-ms-transform:translateY(2000px);transform:translateY(2000px)}
}
.fadeOutDownBig{-webkit-animation-name:fadeOutDownBig;animation-name:fadeOutDownBig}
@-webkit-keyframes fadeOutLeft {
0%{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}
100%{opacity:0;-webkit-transform:translateX(-20px);transform:translateX(-20px)}
}
@keyframes fadeOutLeft {
0%{opacity:1;-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}
100%{opacity:0;-webkit-transform:translateX(-20px);-ms-transform:translateX(-20px);transform:translateX(-20px)}
}
.fadeOutLeft{-webkit-animation-name:fadeOutLeft;animation-name:fadeOutLeft}
@-webkit-keyframes fadeOutLeftBig {
0%{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}
100%{opacity:0;-webkit-transform:translateX(-2000px);transform:translateX(-2000px)}
}
@keyframes fadeOutLeftBig {
0%{opacity:1;-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}
100%{opacity:0;-webkit-transform:translateX(-2000px);-ms-transform:translateX(-2000px);transform:translateX(-2000px)}
}
.fadeOutLeftBig{-webkit-animation-name:fadeOutLeftBig;animation-name:fadeOutLeftBig}
@-webkit-keyframes fadeOutRight {
0%{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}
100%{opacity:0;-webkit-transform:translateX(20px);transform:translateX(20px)}
}
@keyframes fadeOutRight {
0%{opacity:1;-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}
100%{opacity:0;-webkit-transform:translateX(20px);-ms-transform:translateX(20px);transform:translateX(20px)}
}
.fadeOutRight{-webkit-animation-name:fadeOutRight;animation-name:fadeOutRight}
@-webkit-keyframes fadeOutRightBig {
0%{opacity:1;-webkit-transform:translateX(0);transform:translateX(0)}
100%{opacity:0;-webkit-transform:translateX(2000px);transform:translateX(2000px)}
}
@keyframes fadeOutRightBig {
0%{opacity:1;-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}
100%{opacity:0;-webkit-transform:translateX(2000px);-ms-transform:translateX(2000px);transform:translateX(2000px)}
}
.fadeOutRightBig{-webkit-animation-name:fadeOutRightBig;animation-name:fadeOutRightBig}
@-webkit-keyframes fadeOutUp {
0%{opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}
100%{opacity:0;-webkit-transform:translateY(-20px);transform:translateY(-20px)}
}
@keyframes fadeOutUp {
0%{opacity:1;-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}
100%{opacity:0;-webkit-transform:translateY(-20px);-ms-transform:translateY(-20px);transform:translateY(-20px)}
}
.fadeOutUp{-webkit-animation-name:fadeOutUp;animation-name:fadeOutUp}
@-webkit-keyframes fadeOutUpBig {
0%{opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}
100%{opacity:0;-webkit-transform:translateY(-2000px);transform:translateY(-2000px)}
}
@keyframes fadeOutUpBig {
0%{opacity:1;-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}
100%{opacity:0;-webkit-transform:translateY(-2000px);-ms-transform:translateY(-2000px);transform:translateY(-2000px)}
}
.fadeOutUpBig{-webkit-animation-name:fadeOutUpBig;animation-name:fadeOutUpBig}
@-webkit-keyframes flip {
0%{-webkit-transform:perspective(400px) translateZ(0) rotateY(0) scale(1);transform:perspective(400px) translateZ(0) rotateY(0) scale(1);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}
40%{-webkit-transform:perspective(400px) translateZ(150px) rotateY(170deg) scale(1);transform:perspective(400px) translateZ(150px) rotateY(170deg) scale(1);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}
50%{-webkit-transform:perspective(400px) translateZ(150px) rotateY(190deg) scale(1);transform:perspective(400px) translateZ(150px) rotateY(190deg) scale(1);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}
80%{-webkit-transform:perspective(400px) translateZ(0) rotateY(360deg) scale(.95);transform:perspective(400px) translateZ(0) rotateY(360deg) scale(.95);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}
100%{-webkit-transform:perspective(400px) translateZ(0) rotateY(360deg) scale(1);transform:perspective(400px) translateZ(0) rotateY(360deg) scale(1);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}
}
@keyframes flip {
0%{-webkit-transform:perspective(400px) translateZ(0) rotateY(0) scale(1);-ms-transform:perspective(400px) translateZ(0) rotateY(0) scale(1);transform:perspective(400px) translateZ(0) rotateY(0) scale(1);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}
40%{-webkit-transform:perspective(400px) translateZ(150px) rotateY(170deg) scale(1);-ms-transform:perspective(400px) translateZ(150px) rotateY(170deg) scale(1);transform:perspective(400px) translateZ(150px) rotateY(170deg) scale(1);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}
50%{-webkit-transform:perspective(400px) translateZ(150px) rotateY(190deg) scale(1);-ms-transform:perspective(400px) translateZ(150px) rotateY(190deg) scale(1);transform:perspective(400px) translateZ(150px) rotateY(190deg) scale(1);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}
80%{-webkit-transform:perspective(400px) translateZ(0) rotateY(360deg) scale(.95);-ms-transform:perspective(400px) translateZ(0) rotateY(360deg) scale(.95);transform:perspective(400px) translateZ(0) rotateY(360deg) scale(.95);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}
100%{-webkit-transform:perspective(400px) translateZ(0) rotateY(360deg) scale(1);-ms-transform:perspective(400px) translateZ(0) rotateY(360deg) scale(1);transform:perspective(400px) translateZ(0) rotateY(360deg) scale(1);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}
}
.animated.flip{-webkit-backface-visibility:visible;-ms-backface-visibility:visible;backface-visibility:visible;-webkit-animation-name:flip;animation-name:flip}
@-webkit-keyframes flipInX {
0%{-webkit-transform:perspective(400px) rotateX(90deg);transform:perspective(400px) rotateX(90deg);opacity:0}
40%{-webkit-transform:perspective(400px) rotateX(-10deg);transform:perspective(400px) rotateX(-10deg)}
70%{-webkit-transform:perspective(400px) rotateX(10deg);transform:perspective(400px) rotateX(10deg)}
100%{-webkit-transform:perspective(400px) rotateX(0deg);transform:perspective(400px) rotateX(0deg);opacity:1}
}
@keyframes flipInX {
0%{-webkit-transform:perspective(400px) rotateX(90deg);-ms-transform:perspective(400px) rotateX(90deg);transform:perspective(400px) rotateX(90deg);opacity:0}
40%{-webkit-transform:perspective(400px) rotateX(-10deg);-ms-transform:perspective(400px) rotateX(-10deg);transform:perspective(400px) rotateX(-10deg)}
70%{-webkit-transform:perspective(400px) rotateX(10deg);-ms-transform:perspective(400px) rotateX(10deg);transform:perspective(400px) rotateX(10deg)}
100%{-webkit-transform:perspective(400px) rotateX(0deg);-ms-transform:perspective(400px) rotateX(0deg);transform:perspective(400px) rotateX(0deg);opacity:1}
}
.flipInX{-webkit-backface-visibility:visible!important;-ms-backface-visibility:visible!important;backface-visibility:visible!important;-webkit-animation-name:flipInX;animation-name:flipInX}
@-webkit-keyframes flipInY {
0%{-webkit-transform:perspective(400px) rotateY(90deg);transform:perspective(400px) rotateY(90deg);opacity:0}
40%{-webkit-transform:perspective(400px) rotateY(-10deg);transform:perspective(400px) rotateY(-10deg)}
70%{-webkit-transform:perspective(400px) rotateY(10deg);transform:perspective(400px) rotateY(10deg)}
100%{-webkit-transform:perspective(400px) rotateY(0deg);transform:perspective(400px) rotateY(0deg);opacity:1}
}
@keyframes flipInY {
0%{-webkit-transform:perspective(400px) rotateY(90deg);-ms-transform:perspective(400px) rotateY(90deg);transform:perspective(400px) rotateY(90deg);opacity:0}
40%{-webkit-transform:perspective(400px) rotateY(-10deg);-ms-transform:perspective(400px) rotateY(-10deg);transform:perspective(400px) rotateY(-10deg)}
70%{-webkit-transform:perspective(400px) rotateY(10deg);-ms-transform:perspective(400px) rotateY(10deg);transform:perspective(400px) rotateY(10deg)}
100%{-webkit-transform:perspective(400px) rotateY(0deg);-ms-transform:perspective(400px) rotateY(0deg);transform:perspective(400px) rotateY(0deg);opacity:1}
}
.flipInY{-webkit-backface-visibility:visible!important;-ms-backface-visibility:visible!important;backface-visibility:visible!important;-webkit-animation-name:flipInY;animation-name:flipInY}
@-webkit-keyframes flipOutX {
0%{-webkit-transform:perspective(400px) rotateX(0deg);transform:perspective(400px) rotateX(0deg);opacity:1}
100%{-webkit-transform:perspective(400px) rotateX(90deg);transform:perspective(400px) rotateX(90deg);opacity:0}
}
@keyframes flipOutX {
0%{-webkit-transform:perspective(400px) rotateX(0deg);-ms-transform:perspective(400px) rotateX(0deg);transform:perspective(400px) rotateX(0deg);opacity:1}
100%{-webkit-transform:perspective(400px) rotateX(90deg);-ms-transform:perspective(400px) rotateX(90deg);transform:perspective(400px) rotateX(90deg);opacity:0}
}
.flipOutX{-webkit-animation-name:flipOutX;animation-name:flipOutX;-webkit-backface-visibility:visible!important;-ms-backface-visibility:visible!important;backface-visibility:visible!important}
@-webkit-keyframes flipOutY {
0%{-webkit-transform:perspective(400px) rotateY(0deg);transform:perspective(400px) rotateY(0deg);opacity:1}
100%{-webkit-transform:perspective(400px) rotateY(90deg);transform:perspective(400px) rotateY(90deg);opacity:0}
}
@keyframes flipOutY {
0%{-webkit-transform:perspective(400px) rotateY(0deg);-ms-transform:perspective(400px) rotateY(0deg);transform:perspective(400px) rotateY(0deg);opacity:1}
100%{-webkit-transform:perspective(400px) rotateY(90deg);-ms-transform:perspective(400px) rotateY(90deg);transform:perspective(400px) rotateY(90deg);opacity:0}
}
.flipOutY{-webkit-backface-visibility:visible!important;-ms-backface-visibility:visible!important;backface-visibility:visible!important;-webkit-animation-name:flipOutY;animation-name:flipOutY}
@-webkit-keyframes lightSpeedIn {
0%{-webkit-transform:translateX(100%) skewX(-30deg);transform:translateX(100%) skewX(-30deg);opacity:0}
60%{-webkit-transform:translateX(-20%) skewX(30deg);transform:translateX(-20%) skewX(30deg);opacity:1}
80%{-webkit-transform:translateX(0%) skewX(-15deg);transform:translateX(0%) skewX(-15deg);opacity:1}
100%{-webkit-transform:translateX(0%) skewX(0deg);transform:translateX(0%) skewX(0deg);opacity:1}
}
@keyframes lightSpeedIn {
0%{-webkit-transform:translateX(100%) skewX(-30deg);-ms-transform:translateX(100%) skewX(-30deg);transform:translateX(100%) skewX(-30deg);opacity:0}
60%{-webkit-transform:translateX(-20%) skewX(30deg);-ms-transform:translateX(-20%) skewX(30deg);transform:translateX(-20%) skewX(30deg);opacity:1}
80%{-webkit-transform:translateX(0%) skewX(-15deg);-ms-transform:translateX(0%) skewX(-15deg);transform:translateX(0%) skewX(-15deg);opacity:1}
100%{-webkit-transform:translateX(0%) skewX(0deg);-ms-transform:translateX(0%) skewX(0deg);transform:translateX(0%) skewX(0deg);opacity:1}
}
.lightSpeedIn{-webkit-animation-name:lightSpeedIn;animation-name:lightSpeedIn;-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}
@-webkit-keyframes lightSpeedOut {
0%{-webkit-transform:translateX(0%) skewX(0deg);transform:translateX(0%) skewX(0deg);opacity:1}
100%{-webkit-transform:translateX(100%) skewX(-30deg);transform:translateX(100%) skewX(-30deg);opacity:0}
}
@keyframes lightSpeedOut {
0%{-webkit-transform:translateX(0%) skewX(0deg);-ms-transform:translateX(0%) skewX(0deg);transform:translateX(0%) skewX(0deg);opacity:1}
100%{-webkit-transform:translateX(100%) skewX(-30deg);-ms-transform:translateX(100%) skewX(-30deg);transform:translateX(100%) skewX(-30deg);opacity:0}
}
.lightSpeedOut{-webkit-animation-name:lightSpeedOut;animation-name:lightSpeedOut;-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}
@-webkit-keyframes rotateIn {
0%{-webkit-transform-origin:center center;transform-origin:center center;-webkit-transform:rotate(-200deg);transform:rotate(-200deg);opacity:0}
100%{-webkit-transform-origin:center center;transform-origin:center center;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}
}
@keyframes rotateIn {
0%{-webkit-transform-origin:center center;-ms-transform-origin:center center;transform-origin:center center;-webkit-transform:rotate(-200deg);-ms-transform:rotate(-200deg);transform:rotate(-200deg);opacity:0}
100%{-webkit-transform-origin:center center;-ms-transform-origin:center center;transform-origin:center center;-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0);opacity:1}
}
.rotateIn{-webkit-animation-name:rotateIn;animation-name:rotateIn}
@-webkit-keyframes rotateInDownLeft {
0%{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(-90deg);transform:rotate(-90deg);opacity:0}
100%{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}
}
@keyframes rotateInDownLeft {
0%{-webkit-transform-origin:left bottom;-ms-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(-90deg);-ms-transform:rotate(-90deg);transform:rotate(-90deg);opacity:0}
100%{-webkit-transform-origin:left bottom;-ms-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0);opacity:1}
}
.rotateInDownLeft{-webkit-animation-name:rotateInDownLeft;animation-name:rotateInDownLeft}
@-webkit-keyframes rotateInDownRight {
0%{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(90deg);transform:rotate(90deg);opacity:0}
100%{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}
}
@keyframes rotateInDownRight {
0%{-webkit-transform-origin:right bottom;-ms-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg);opacity:0}
100%{-webkit-transform-origin:right bottom;-ms-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0);opacity:1}
}
.rotateInDownRight{-webkit-animation-name:rotateInDownRight;animation-name:rotateInDownRight}
@-webkit-keyframes rotateInUpLeft {
0%{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(90deg);transform:rotate(90deg);opacity:0}
100%{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}
}
@keyframes rotateInUpLeft {
0%{-webkit-transform-origin:left bottom;-ms-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg);opacity:0}
100%{-webkit-transform-origin:left bottom;-ms-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0);opacity:1}
}
.rotateInUpLeft{-webkit-animation-name:rotateInUpLeft;animation-name:rotateInUpLeft}
@-webkit-keyframes rotateInUpRight {
0%{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(-90deg);transform:rotate(-90deg);opacity:0}
100%{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}
}
@keyframes rotateInUpRight {
0%{-webkit-transform-origin:right bottom;-ms-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(-90deg);-ms-transform:rotate(-90deg);transform:rotate(-90deg);opacity:0}
100%{-webkit-transform-origin:right bottom;-ms-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0);opacity:1}
}
.rotateInUpRight{-webkit-animation-name:rotateInUpRight;animation-name:rotateInUpRight}
@-webkit-keyframes rotateOut {
0%{-webkit-transform-origin:center center;transform-origin:center center;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}
100%{-webkit-transform-origin:center center;transform-origin:center center;-webkit-transform:rotate(200deg);transform:rotate(200deg);opacity:0}
}
@keyframes rotateOut {
0%{-webkit-transform-origin:center center;-ms-transform-origin:center center;transform-origin:center center;-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0);opacity:1}
100%{-webkit-transform-origin:center center;-ms-transform-origin:center center;transform-origin:center center;-webkit-transform:rotate(200deg);-ms-transform:rotate(200deg);transform:rotate(200deg);opacity:0}
}
.rotateOut{-webkit-animation-name:rotateOut;animation-name:rotateOut}
@-webkit-keyframes rotateOutDownLeft {
0%{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}
100%{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(90deg);transform:rotate(90deg);opacity:0}
}
@keyframes rotateOutDownLeft {
0%{-webkit-transform-origin:left bottom;-ms-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0);opacity:1}
100%{-webkit-transform-origin:left bottom;-ms-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg);opacity:0}
}
.rotateOutDownLeft{-webkit-animation-name:rotateOutDownLeft;animation-name:rotateOutDownLeft}
@-webkit-keyframes rotateOutDownRight {
0%{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}
100%{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(-90deg);transform:rotate(-90deg);opacity:0}
}
@keyframes rotateOutDownRight {
0%{-webkit-transform-origin:right bottom;-ms-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0);opacity:1}
100%{-webkit-transform-origin:right bottom;-ms-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(-90deg);-ms-transform:rotate(-90deg);transform:rotate(-90deg);opacity:0}
}
.rotateOutDownRight{-webkit-animation-name:rotateOutDownRight;animation-name:rotateOutDownRight}
@-webkit-keyframes rotateOutUpLeft {
0%{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}
100%{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(-90deg);transform:rotate(-90deg);opacity:0}
}
@keyframes rotateOutUpLeft {
0%{-webkit-transform-origin:left bottom;-ms-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0);opacity:1}
100%{-webkit-transform-origin:left bottom;-ms-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(-90deg);-ms-transform:rotate(-90deg);transform:rotate(-90deg);opacity:0}
}
.rotateOutUpLeft{-webkit-animation-name:rotateOutUpLeft;animation-name:rotateOutUpLeft}
@-webkit-keyframes rotateOutUpRight {
0%{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}
100%{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(90deg);transform:rotate(90deg);opacity:0}
}
@keyframes rotateOutUpRight {
0%{-webkit-transform-origin:right bottom;-ms-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0);opacity:1}
100%{-webkit-transform-origin:right bottom;-ms-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg);opacity:0}
}
.rotateOutUpRight{-webkit-animation-name:rotateOutUpRight;animation-name:rotateOutUpRight}
@-webkit-keyframes slideInDown {
0%{opacity:0;-webkit-transform:translateY(-2000px);transform:translateY(-2000px)}
100%{-webkit-transform:translateY(0);transform:translateY(0)}
}
@keyframes slideInDown {
0%{opacity:0;-webkit-transform:translateY(-2000px);-ms-transform:translateY(-2000px);transform:translateY(-2000px)}
100%{-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}
}
.slideInDown{-webkit-animation-name:slideInDown;animation-name:slideInDown}
@-webkit-keyframes slideInLeft {
0%{opacity:0;-webkit-transform:translateX(-2000px);transform:translateX(-2000px)}
100%{-webkit-transform:translateX(0);transform:translateX(0)}
}
@keyframes slideInLeft {
0%{opacity:0;-webkit-transform:translateX(-2000px);-ms-transform:translateX(-2000px);transform:translateX(-2000px)}
100%{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}
}
.slideInLeft{-webkit-animation-name:slideInLeft;animation-name:slideInLeft}
@-webkit-keyframes slideInRight {
0%{opacity:0;-webkit-transform:translateX(2000px);transform:translateX(2000px)}
100%{-webkit-transform:translateX(0);transform:translateX(0)}
}
@keyframes slideInRight {
0%{opacity:0;-webkit-transform:translateX(2000px);-ms-transform:translateX(2000px);transform:translateX(2000px)}
100%{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}
}
.slideInRight{-webkit-animation-name:slideInRight;animation-name:slideInRight}
@-webkit-keyframes slideOutLeft {
0%{-webkit-transform:translateX(0);transform:translateX(0)}
100%{opacity:0;-webkit-transform:translateX(-2000px);transform:translateX(-2000px)}
}
@keyframes slideOutLeft {
0%{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}
100%{opacity:0;-webkit-transform:translateX(-2000px);-ms-transform:translateX(-2000px);transform:translateX(-2000px)}
}
.slideOutLeft{-webkit-animation-name:slideOutLeft;animation-name:slideOutLeft}
@-webkit-keyframes slideOutRight {
0%{-webkit-transform:translateX(0);transform:translateX(0)}
100%{opacity:0;-webkit-transform:translateX(2000px);transform:translateX(2000px)}
}
@keyframes slideOutRight {
0%{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}
100%{opacity:0;-webkit-transform:translateX(2000px);-ms-transform:translateX(2000px);transform:translateX(2000px)}
}
.slideOutRight{-webkit-animation-name:slideOutRight;animation-name:slideOutRight}
@-webkit-keyframes slideOutUp {
0%{-webkit-transform:translateY(0);transform:translateY(0)}
100%{opacity:0;-webkit-transform:translateY(-2000px);transform:translateY(-2000px)}
}
@keyframes slideOutUp {
0%{-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}
100%{opacity:0;-webkit-transform:translateY(-2000px);-ms-transform:translateY(-2000px);transform:translateY(-2000px)}
}
.slideOutUp{-webkit-animation-name:slideOutUp;animation-name:slideOutUp}
@-webkit-keyframes hinge {
0%{-webkit-transform:rotate(0);transform:rotate(0);-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}
20%,60%{-webkit-transform:rotate(80deg);transform:rotate(80deg);-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}
40%{-webkit-transform:rotate(60deg);transform:rotate(60deg);-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}
80%{-webkit-transform:rotate(60deg) translateY(0);transform:rotate(60deg) translateY(0);opacity:1;-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}
100%{-webkit-transform:translateY(700px);transform:translateY(700px);opacity:0}
}
@keyframes hinge {
0%{-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0);-webkit-transform-origin:top left;-ms-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}
20%,60%{-webkit-transform:rotate(80deg);-ms-transform:rotate(80deg);transform:rotate(80deg);-webkit-transform-origin:top left;-ms-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}
40%{-webkit-transform:rotate(60deg);-ms-transform:rotate(60deg);transform:rotate(60deg);-webkit-transform-origin:top left;-ms-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}
80%{-webkit-transform:rotate(60deg) translateY(0);-ms-transform:rotate(60deg) translateY(0);transform:rotate(60deg) translateY(0);opacity:1;-webkit-transform-origin:top left;-ms-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}
100%{-webkit-transform:translateY(700px);-ms-transform:translateY(700px);transform:translateY(700px);opacity:0}
}
.hinge{-webkit-animation-name:hinge;animation-name:hinge}
@-webkit-keyframes rollIn {
0%{opacity:0;-webkit-transform:translateX(-100%) rotate(-120deg);transform:translateX(-100%) rotate(-120deg)}
100%{opacity:1;-webkit-transform:translateX(0px) rotate(0deg);transform:translateX(0px) rotate(0deg)}
}
@keyframes rollIn {
0%{opacity:0;-webkit-transform:translateX(-100%) rotate(-120deg);-ms-transform:translateX(-100%) rotate(-120deg);transform:translateX(-100%) rotate(-120deg)}
100%{opacity:1;-webkit-transform:translateX(0px) rotate(0deg);-ms-transform:translateX(0px) rotate(0deg);transform:translateX(0px) rotate(0deg)}
}
.rollIn{-webkit-animation-name:rollIn;animation-name:rollIn}
@-webkit-keyframes rollOut {
0%{opacity:1;-webkit-transform:translateX(0px) rotate(0deg);transform:translateX(0px) rotate(0deg)}
100%{opacity:0;-webkit-transform:translateX(100%) rotate(120deg);transform:translateX(100%) rotate(120deg)}
}
@keyframes rollOut {
0%{opacity:1;-webkit-transform:translateX(0px) rotate(0deg);-ms-transform:translateX(0px) rotate(0deg);transform:translateX(0px) rotate(0deg)}
100%{opacity:0;-webkit-transform:translateX(100%) rotate(120deg);-ms-transform:translateX(100%) rotate(120deg);transform:translateX(100%) rotate(120deg)}
}
.rollOut{-webkit-animation-name:rollOut;animation-name:rollOut}

.footer #footer{
	height: 100px;
	text-align: center;
}
.page-scroll{
	color: #CCC;
	font-family: Roboto;
	font-size: 16px; 
	font-weight: 100;
}

<!DOCTYPE html>


    <html itemscope itemtype="https://schema.org/QAPage" class="html__responsive " lang="en">

    <head>

        <title>JQuery datePicker date reset - Stack Overflow</title>
        <link rel="shortcut icon" href="https://cdn.sstatic.net/Sites/stackoverflow/Img/favicon.ico?v=ec617d715196">
        <link rel="apple-touch-icon" href="https://cdn.sstatic.net/Sites/stackoverflow/Img/apple-touch-icon.png?v=c78bd457575a">
        <link rel="image_src" href="https://cdn.sstatic.net/Sites/stackoverflow/Img/apple-touch-icon.png?v=c78bd457575a"> 
        <link rel="search" type="application/opensearchdescription+xml" title="Stack Overflow" href="/opensearch.xml">
        <link rel="canonical" href="https://stackoverflow.com/questions/4917779/jquery-datepicker-date-reset" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
        <meta property="og:type" content= "website" />
        <meta property="og:url" content="https://stackoverflow.com/questions/4917779/jquery-datepicker-date-reset"/>
        <meta property="og:site_name" content="Stack Overflow" />
        <meta property="og:image" itemprop="image primaryImageOfPage" content="https://cdn.sstatic.net/Sites/stackoverflow/Img/apple-touch-icon@2.png?v=73d79a89bded" />
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:domain" content="stackoverflow.com"/>
        <meta name="twitter:title" property="og:title" itemprop="name" content="JQuery datePicker date reset" />
        <meta name="twitter:description" property="og:description" itemprop="description" content="I would like to add a &quot;Reset&quot; control to the datepicker at the bottom of the calendar - where the &quot;close&quot; control goes. This would enable the user to reset the input tied to datepicker to blank (no..." />
    <script id="webpack-public-path" type="text/uri-list">https://cdn.sstatic.net/</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script defer src="https://cdn.sstatic.net/Js/third-party/npm/@stackoverflow/stacks/dist/js/stacks.min.js?v=1d4d417772d8"></script>
    <script src="https://cdn.sstatic.net/Js/stub.en.js?v=a6bb9b3830ee"></script>


    <link rel="stylesheet" type="text/css" href="https://cdn.sstatic.net/Shared/stacks.css?v=549572c32c99">
    <link rel="stylesheet" type="text/css" href="https://cdn.sstatic.net/Sites/stackoverflow/primary.css?v=487b7f8cc1aa">


    
            <link rel="alternate" type="application/atom+xml" title="Feed for question &#x27;JQuery datePicker date reset&#x27;" href="/feeds/question/4917779">
        <script>
            StackExchange.ready(function () {

                    StackExchange.using("snippets", function () {
                        StackExchange.snippets.initSnippetRenderer();
                    });
                    
                StackExchange.using("postValidation", function () {
                    StackExchange.postValidation.initOnBlurAndSubmit($('#post-form'), 2, 'answer');
                });


                StackExchange.question.init({showAnswerHelp:true,showTrendingSortLaunchPopover:false,showTrendingSortPostLaunchPopover:false,totalCommentCount:2,shownCommentCount:2,enableTables:true,questionId:4917779});

                styleCode();

                    StackExchange.realtime.subscribeToQuestion('1', '4917779');
                    StackExchange.using("gps", function () { StackExchange.gps.trackOutboundClicks('#content', '.js-post-body'); });


            });
        </script>

        
        
        
        <link rel="stylesheet" type="text/css" href="https://cdn.sstatic.net/Shared/Channels/channels.css?v=a5fae8812988">

        
        


    <script type="application/json" data-role="module-args" data-module-name="Shared/options.mod">{"options":{"locale":"en","serverTime":1676129150,"routeName":"Questions/Show","stackAuthUrl":"https://stackauth.com","networkMetaHostname":"meta.stackexchange.com","site":{"name":"Stack Overflow","description":"Q\u0026A for professional and enthusiast programmers","isNoticesTabEnabled":true,"enableNewTagCreationWarning":true,"insertSpaceAfterNameTabCompletion":false,"id":1,"cookieDomain":".stackoverflow.com","childUrl":"https://meta.stackoverflow.com","negativeVoteScoreFloor":null,"enableSocialMediaInSharePopup":true,"protocol":"https"},"user":{"fkey":"a6f81f6a270be5dc76c6b3d9e26b4e3074ec1d32440665aeca6cbdadbb34496a","tid":"c2a3eab8-236e-c4a2-07e3-801b48f86147","rep":0,"isAnonymous":true,"isAnonymousNetworkWide":true},"events":{"postType":{"question":1},"postEditionSection":{"title":1,"body":2,"tags":3}}}}</script>
<script type="application/json" data-role="module-args" data-module-name="Shared/settings.mod">{"settings":{"userMessaging":{"showNewFeatureNotice":true},"tags":{},"subscriptions":{"defaultBasicMaxTrueUpSeats":250,"defaultFreemiumMaxTrueUpSeats":50,"defaultMaxTrueUpSeats":1000},"snippets":{"renderDomain":"stacksnippets.net","snippetsEnabled":true},"site":{"allowImageUploads":true,"enableImgurHttps":true,"enableUserHovercards":true,"forceHttpsImages":true,"stacksEditorPreviewEnabled":true,"styleCode":true},"questions":{"enableQuestionTitleLengthLiveWarning":true,"enableSavesFeature":true,"maxTitleSize":150,"questionTitleLengthStartLiveWarningChars":50},"intercom":{"appId":"inf0secd","hostBaseUrl":"https://stacksnippets.net"},"paths":{"jQueryUICSSPath":"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css","jQueryUIJSPath":"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"},"monitoring":{"clientTimingsAbsoluteTimeout":30000,"clientTimingsDebounceTimeout":1000},"mentions":{"maxNumUsersInDropdown":50},"markdown":{"enableTables":true},"legal":{"oneTrustConfigId":"c3d9f1e3-55f3-4eba-b268-46cee4c6789c"},"flags":{"allowRetractingCommentFlags":true,"allowRetractingFlags":true},"elections":{"opaVoteResultsBaseUrl":"https://www.opavote.com/results/"},"comments":{},"accounts":{"currentPasswordRequiredForChangingStackIdPassword":true}}}</script>
<script>StackExchange.init();</script>

    <script>
        StackExchange.using.setCacheBreakers({"Js/adops.en.js":"6da43f5e0a84","Js/ask.en.js":"","Js/begin-edit-event.en.js":"20edbaccceae","Js/copy-transpiled.en.js":"e7855bee94f2","Js/events.en.js":"","Js/explore-qlist.en.js":"2b1f34938b8b","Js/full-anon.en.js":"e5d4702fabcf","Js/full.en.js":"1ef2ef56e262","Js/highlightjs-loader.en.js":"a284064706b3","Js/inline-tag-editing.en.js":"629d801833ec","Js/keyboard-shortcuts.en.js":"4cb9eae35625","Js/markdown-it-loader.en.js":"5818ef89ff9d","Js/mentions-transpiled.en.js":"61378a506eac","Js/moderator.en.js":"e9bc76660d1f","Js/postCollections-transpiled.en.js":"fac92aa0ceeb","Js/post-validation.en.js":"cedd65876389","Js/question-editor.en.js":"","Js/review-v2-transpiled.en.js":"ae1e01b7e8cb","Js/revisions.en.js":"a86490719687","Js/stacks-editor.en.js":"65f86dba0340","Js/tageditor.en.js":"e5db6df2411b","Js/tageditornew.en.js":"c4fc98223de1","Js/tagsuggestions.en.js":"0d912930b14c","Js/unlimited-transpiled.en.js":"7ed67670b600","Js/wmd.en.js":"cbd7ea4d297d","Js/snippet-javascript-codemirror.en.js":"73fce5cc7219"});
        StackExchange.using("gps", function() {
             StackExchange.gps.init(false);
        });
    </script>
    <noscript id="noscript-css"><style>body,.s-topbar{margin-top:1.9em}</style></noscript>
    </head>
    <body class="question-page unified-theme">
    <div id="notify-container"></div>
    <div id="custom-header"></div>
        
<header class="s-topbar ps-fixed t0 l0 js-top-bar">
	<div class="s-topbar--container">
			<a href="#" class="s-topbar--menu-btn js-left-sidebar-toggle" role="menuitem" aria-haspopup="true" aria-controls="left-sidebar" aria-expanded="false"><span></span></a>
			<div class="topbar-dialog leftnav-dialog js-leftnav-dialog dno">
				<div class="left-sidebar js-unpinned-left-sidebar" data-can-be="left-sidebar" data-is-here-when="sm"></div>
			</div>
				<a href="https://stackoverflow.com" class="s-topbar--logo js-gps-track"
		   data-gps-track="top_nav.click({is_current:false, location:2, destination:8})">
					<span class="-img _glyph">Stack Overflow</span>
				</a>



			<ol class="s-navigation" role="presentation">

					<li class="md:d-none">
						<a href="https://stackoverflow.co/" class="s-navigation--item js-gps-track"
				   data-gps-track="top_nav.products.click({location:2, destination:7})"
				   data-ga="[&quot;top navigation&quot;,&quot;about menu click&quot;,null,null,null]">About</a>
					</li>

				<li>
					<a href="#"
				   class="s-navigation--item js-gps-track js-products-menu"
				   aria-controls="products-popover"
				   data-controller="s-popover"
				   data-action="s-popover#toggle"
				   data-s-popover-placement="bottom"
				   data-s-popover-toggle-class="is-selected"
				   data-gps-track="top_nav.products.click({location:2, destination:1})"
				   data-ga="[&quot;top navigation&quot;,&quot;products menu click&quot;,null,null,null]">
						Products
					</a>
				</li>

					<li class="md:d-none">
						<a href="/teams" class="s-navigation--item js-gps-track"
				   data-gps-track="top_nav.products.click({location:2, destination:7})"
				   data-ga="[&quot;top navigation&quot;,&quot;learn more - teams&quot;,null,null,null]">For Teams</a>
					</li>
			</ol>
			<div class="s-popover ws2 mtn2 p0"
			 id="products-popover"
			 role="menu"
			 aria-hidden="true">
				<div class="s-popover--arrow"></div>
				<ol class="list-reset s-anchors s-anchors__inherit">
					<li class="m6">
						<a href="/questions" class="bar-sm p6 d-block h:bg-black-100 js-gps-track"
					   data-gps-track="top_nav.products.click({location:2, destination:2})"
					   data-ga="[&quot;top navigation&quot;,&quot;public qa submenu click&quot;,null,null,null]">
							<span class="fs-body1 d-block">Stack Overflow</span>
							<span class="fs-caption d-block fc-light">Public questions &amp; answers</span>
						</a>
					</li>
					<li class="m6">
						<a href="/teams" class="bar-sm p6 d-block h:bg-black-100 js-gps-track"
					   data-gps-track="top_nav.products.click({location:2, destination:3})"
					   data-ga="[&quot;top navigation&quot;,&quot;teams submenu click&quot;,null,null,null]">
							<span class="fs-body1 d-block">Stack Overflow for Teams</span>
							<span class="fs-caption d-block fc-light">Where developers &amp; technologists share private knowledge with coworkers</span>
						</a>
					</li>
					<li class="m6">
						<a href="https://stackoverflow.co/talent" class="bar-sm p6 d-block h:bg-black-100 js-gps-track"
					   data-gps-track="top_nav.products.click({location:2, destination:5})"
					   data-ga="[&quot;top navigation&quot;,&quot;talent submenu click&quot;,null,null,null]">
							<span class="fs-body1 d-block">Talent</span>
							<span class="fs-caption d-block fc-light">
								Build your employer brand
							</span>
						</a>
					</li>
					<li class="m6">
						<a href="https://stackoverflow.co/advertising" class="bar-sm p6 d-block h:bg-black-100 js-gps-track"
					   data-gps-track="top_nav.products.click({location:2, destination:6})"
					   data-ga="[&quot;top navigation&quot;,&quot;advertising submenu click&quot;,null,null,null]">
							<span class="fs-body1 d-block">Advertising</span>
							<span class="fs-caption d-block fc-light">Reach developers &amp; technologists worldwide</span>
						</a>
					</li>
					<li class="bg-black-025 bt bc-black-075 py6 px6 bbr-md">
						<a href="https://stackoverflow.co/" class="fc-light d-block py6 px6 h:fc-black-800 js-gps-track"
					   data-gps-track="top_nav.products.click({location:2, destination:7})"
					   data-ga="[&quot;top navigation&quot;,&quot;about submenu click&quot;,null,null,null]">About the company</a>
					</li>
				</ol>
			</div>


			<form id="search" role="search" action=/search class="s-topbar--searchbar js-searchbar " autocomplete="off">
					<div class="s-topbar--searchbar--input-group">
						<input name="q"
					   type="text"
					   role="combobox"
					   placeholder="Search&#x2026;"
					   value=""
					   autocomplete="off"
					   maxlength="240"
					   class="s-input s-input__search js-search-field "
					   aria-label="Search"
					   aria-controls="top-search" 
					   data-controller="s-popover"
					   data-action="focus->s-popover#show"
					   data-s-popover-placement="bottom-start" />
						<svg aria-hidden="true" class="s-input-icon s-input-icon__search svg-icon iconSearch" width="18" height="18"  viewBox="0 0 18 18"><path  d="m18 16.5-5.14-5.18h-.35a7 7 0 1 0-1.19 1.19v.35L16.5 18l1.5-1.5ZM12 7A5 5 0 1 1 2 7a5 5 0 0 1 10 0Z"/></svg>
						<div class="s-popover p0 wmx100 wmn4 sm:wmn-initial js-top-search-popover" id="top-search" role="menu">
    <div class="s-popover--arrow"></div>
    <div class="js-spinner p24 d-flex ai-center jc-center d-none">
        <div class="s-spinner s-spinner__sm fc-orange-400">
            <div class="v-visible-sr">Loading&#x2026;</div>
        </div>
    </div>

    <span class="v-visible-sr js-screen-reader-info"></span>
    <div class="js-ac-results overflow-y-auto hmx3 d-none"></div>

    <div class="js-search-hints" aria-describedby="Tips for searching"></div>
</div>
					</div>
			</form>
		
<nav class="h100 ml-auto overflow-x-auto pr12">
    <ol class="s-topbar--content" role="menubar">
    
    
    
        <li class="js-topbar-dialog-corral" role="presentation">
                

    <div class="topbar-dialog siteSwitcher-dialog dno" role="menu">
        <div class="header fw-wrap">
            <h3 class="flex--item">
                <a href="https://stackoverflow.com">current community</a>
            </h3>
            <div class="flex--item fl1">
                <div class="ai-center d-flex jc-end">
                    <button
                        class="js-close-button s-btn s-btn__muted p0 ml8 d-none sm:d-block"
                        type="button"
                        aria-label="Close"
                    >
                        <svg aria-hidden="true" class="svg-icon iconClear" width="18" height="18"  viewBox="0 0 18 18"><path  d="M15 4.41 13.59 3 9 7.59 4.41 3 3 4.41 7.59 9 3 13.59 4.41 15 9 10.41 13.59 15 15 13.59 10.41 9 15 4.41Z"/></svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="modal-content bg-powder-050 current-site-container">
            <ul class="current-site ">
                    <li class="d-flex">
                            <div class="fl1">
                <a href="https://stackoverflow.com"
       class="current-site-link site-link js-gps-track d-flex gs8 gsx"
       data-id="1"
       data-gps-track="site_switcher.click({ item_type:3 })">
        <div class="favicon favicon-stackoverflow site-icon flex--item" title="Stack Overflow"></div>
        <span class="flex--item fl1">
            Stack Overflow
        </span>
    </a>

    </div>
    <div class="related-links">
            <a href="https://stackoverflow.com/help" class="js-gps-track" data-gps-track="site_switcher.click({ item_type:14 })">help</a>
            <a href="https://chat.stackoverflow.com/?tab=site&amp;host=stackoverflow.com" class="js-gps-track" data-gps-track="site_switcher.click({ item_type:6 })">chat</a>
    </div>

                    </li>
                    <li class="related-site d-flex">
                            <div class="L-shaped-icon-container">
        <span class="L-shaped-icon"></span>
    </div>

                            <a href="https://meta.stackoverflow.com"
       class=" site-link js-gps-track d-flex gs8 gsx"
       data-id="552"
       data-gps-track="site.switch({ target_site:552, item_type:3 }),site_switcher.click({ item_type:4 })">
        <div class="favicon favicon-stackoverflowmeta site-icon flex--item" title="Meta Stack Overflow"></div>
        <span class="flex--item fl1">
            Meta Stack Overflow
        </span>
    </a>

                    </li>
            </ul>
        </div>

        <div class="header" id="your-communities-header">
            <h3>
your communities            </h3>

        </div>
        <div class="modal-content" id="your-communities-section">

                <div class="call-to-login">
<a href="https://stackoverflow.com/users/signup?ssrc=site_switcher&amp;returnurl=https%3a%2f%2fstackoverflow.com%2fquestions%2f4917779%2fjquery-datepicker-date-reset" class="login-link js-gps-track" data-gps-track="site_switcher.click({ item_type:10 })">Sign up</a> or <a href="https://stackoverflow.com/users/login?ssrc=site_switcher&amp;returnurl=https%3a%2f%2fstackoverflow.com%2fquestions%2f4917779%2fjquery-datepicker-date-reset" class="login-link js-gps-track" data-gps-track="site_switcher.click({ item_type:11 })">log in</a> to customize your list.                </div>
        </div>

        <div class="header">
            <h3><a href="https://stackexchange.com/sites">more stack exchange communities</a>
            </h3>
            <a href="https://stackoverflow.blog" class="float-right">company blog</a>
        </div>
        <div class="modal-content">
                <div class="child-content"></div>
        </div>        
    </div>

        </li>
    
            <li role="none"><button class="s-topbar--item s-btn s-btn__icon s-btn__muted d-none sm:d-inline-flex js-searchbar-trigger" role="menuitem" aria-label="Search" aria-haspopup="true" aria-controls="search" title="Click to show search"><svg aria-hidden="true" class="svg-icon iconSearch" width="18" height="18"  viewBox="0 0 18 18"><path  d="m18 16.5-5.14-5.18h-.35a7 7 0 1 0-1.19 1.19v.35L16.5 18l1.5-1.5ZM12 7A5 5 0 1 1 2 7a5 5 0 0 1 10 0Z"/></svg></button></li>
                        <li role="none">
                            <a href="https://stackoverflow.com/users/login?ssrc=head&returnurl=https%3a%2f%2fstackoverflow.com%2fquestions%2f4917779%2fjquery-datepicker-date-reset" class="s-topbar--item s-topbar--item__unset s-btn s-btn__filled ws-nowrap js-gps-track" role="menuitem" rel="nofollow"
               data-gps-track="login.click" data-ga="[&quot;top navigation&quot;,&quot;login button click&quot;,null,null,null]">Log in</a>
                        </li>
                        <li role="none"><a href="https://stackoverflow.com/users/signup?ssrc=head&returnurl=https%3a%2f%2fstackoverflow.com%2fquestions%2f4917779%2fjquery-datepicker-date-reset" class="s-topbar--item s-topbar--item__unset ml4 s-btn s-btn__primary ws-nowrap" role="menuitem" rel="nofollow" data-ga="[&quot;sign up&quot;,&quot;Sign Up Navigation&quot;,&quot;Header&quot;,null,null]">Sign up</a></li>
    </ol>
</nav>


	</div>
</header>

	<script>
		StackExchange.ready(function () { StackExchange.topbar.init(); });
		StackExchange.scrollPadding.setPaddingTop(50, 10); 
	</script>





    <div class="container">
            

<div id="left-sidebar" data-is-here-when="md lg" class="left-sidebar js-pinned-left-sidebar ps-relative">
    <div class="left-sidebar--sticky-container js-sticky-leftnav">
        <nav role="navigation">
            <ol class="nav-links">
                    

<li class="ps-relative"  aria-current="false">


    <a
       href="/"
       class="pl8 js-gps-track nav-links--link"
       
       data-gps-track="top_nav.click({is_current: false, location:2, destination:8})"
       aria-controls="" data-controller="" data-s-popover-placement="right"
       aria-current="false"
       data-s-popover-auto-show="true" data-s-popover-hide-on-outside-click="never">
            <div class="d-flex ai-center">
                <div class="flex--item truncate">
                    Home
                </div>
            </div>
    </a>
</li>

                <li>
                    <ol class="nav-links">
                            <li class="fs-fine tt-uppercase ml8 mt16 mb4 fc-light">Public</li>

                            

<li class="ps-relative  youarehere"  aria-current="true">


    <a id="nav-questions"
       href="/questions"
       class="pl8 js-gps-track nav-links--link -link__with-icon"
       
       data-gps-track="top_nav.click({is_current: true, location:2, destination:1})"
       aria-controls="" data-controller="" data-s-popover-placement="right"
       aria-current="false"
       data-s-popover-auto-show="true" data-s-popover-hide-on-outside-click="never">
<svg aria-hidden="true" class="svg-icon iconGlobe" width="18" height="18"  viewBox="0 0 18 18"><path  d="M9 1C4.64 1 1 4.64 1 9c0 4.36 3.64 8 8 8 4.36 0 8-3.64 8-8 0-4.36-3.64-8-8-8ZM8 15.32a6.46 6.46 0 0 1-4.3-2.74 6.46 6.46 0 0 1-.93-5.01L7 11.68v.8c0 .88.12 1.32 1 1.32v1.52Zm5.72-2c-.2-.66-1-1.32-1.72-1.32h-1v-2c0-.44-.56-1-1-1H6V7h1c.44 0 1-.56 1-1V5h2c.88 0 1.4-.72 1.4-1.6v-.33a6.45 6.45 0 0 1 3.83 4.51 6.45 6.45 0 0 1-1.51 5.73v.01Z"/></svg>            <span class="-link--channel-name">Questions</span>
    </a>
</li>

                                

<li class="ps-relative"  aria-current="false">


    <a id="nav-tags"
       href="/tags"
       class=" js-gps-track nav-links--link"
       
       data-gps-track="top_nav.click({is_current: false, location:2, destination:2})"
       aria-controls="" data-controller="" data-s-popover-placement="right"
       aria-current="false"
       data-s-popover-auto-show="true" data-s-popover-hide-on-outside-click="never">
            <div class="d-flex ai-center">
                <div class="flex--item truncate">
                    Tags
                </div>
            </div>
    </a>
</li>

                                

<li class="ps-relative"  aria-current="false">


    <a id="nav-users"
       href="/users"
       class=" js-gps-track nav-links--link"
       
       data-gps-track="top_nav.click({is_current: false, location:2, destination:3})"
       aria-controls="" data-controller="" data-s-popover-placement="right"
       aria-current="false"
       data-s-popover-auto-show="true" data-s-popover-hide-on-outside-click="never">
            <div class="d-flex ai-center">
                <div class="flex--item truncate">
                    Users
                </div>
            </div>
    </a>
</li>

                                    

<li class="ps-relative"  aria-current="false">


    <a id="nav-companies"
       href="https://stackoverflow.com/jobs/companies?so_medium=stackoverflow&amp;so_source=SiteNav"
       class=" js-gps-track nav-links--link"
       
       data-gps-track="top_nav.click({is_current: false, location:2, destination:12})"
       aria-controls="" data-controller="" data-s-popover-placement="right"
       aria-current="false"
       data-s-popover-auto-show="true" data-s-popover-hide-on-outside-click="never">
            <div class="d-flex ai-center">
                <div class="flex--item truncate">
                    Companies
                </div>
            </div>
    </a>
</li>

                                <li class="ml8 mt16">
                                    <div class="d-flex jc-space-between fl-grow1">
                                        <div class="flex--item tt-uppercase tt-uppercase fs-fine fc-light">Collectives</div>
                                        <div class="flex--item fs-fine fc-light">
                                            <a href="javascript:void(0)" class="s-link p12 fc-black-500 h:fc-black-800 js-gps-track js-collectives-navcta-toggle"
                                            role="button"
                                            aria-controls="popover-discover-collectives"
                                            data-controller="s-popover"
                                            data-action="s-popover#toggle"
                                            data-s-popover-placement="top"
                                            data-s-popover-toggle-class="is-selected"
                                            data-gps-track="top_nav.click({is_current:false, location:2, destination:17})">
                                                <svg aria-hidden="true" class="svg-icon iconInfoSm" width="14" height="14"  viewBox="0 0 14 14"><path  d="M7 1a6 6 0 1 1 0 12A6 6 0 0 1 7 1Zm1 10V6H6v5h2Zm0-6V3H6v2h2Z"/></svg>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                    

<li class="ps-relative"  aria-current="false">


    <a id="nav-collective-discover"
       href="/collectives"
       class="pl8 ai-center js-collectives-navcta-toggle js-gps-track nav-links--link -link__with-icon"
       
       data-gps-track="top_nav.click({is_current: false, location:2, destination:18})"
       aria-controls="" data-controller="" data-s-popover-placement="right"
       aria-current="false"
       data-s-popover-auto-show="true" data-s-popover-hide-on-outside-click="never">
<svg aria-hidden="true" class="mt-auto fc-orange-400 svg-icon iconStarVerified" width="18" height="18"  viewBox="0 0 18 18"><path  d="M9.86.89a1.14 1.14 0 0 0-1.72 0l-.5.58c-.3.35-.79.48-1.23.33l-.72-.25a1.14 1.14 0 0 0-1.49.85l-.14.76c-.1.45-.45.8-.9.9l-.76.14c-.67.14-1.08.83-.85 1.49l.25.72c.15.44.02.92-.33 1.23l-.58.5a1.14 1.14 0 0 0 0 1.72l.58.5c.35.3.48.79.33 1.23l-.25.72c-.23.66.18 1.35.85 1.49l.76.14c.45.1.8.45.9.9l.14.76c.14.67.83 1.08 1.49.85l.72-.25c.44-.15.92-.02 1.23.33l.5.58c.46.52 1.26.52 1.72 0l.5-.58c.3-.35.79-.48 1.23-.33l.72.25c.66.23 1.35-.18 1.49-.85l.14-.76c.1-.45.45-.8.9-.9l.76-.14c.67-.14 1.08-.83.85-1.49l-.25-.72c-.15-.44-.02-.92.33-1.23l.58-.5c.52-.46.52-1.26 0-1.72l-.58-.5c-.35-.3-.48-.79-.33-1.23l.25-.72a1.14 1.14 0 0 0-.85-1.49l-.76-.14c-.45-.1-.8-.45-.9-.9l-.14-.76a1.14 1.14 0 0 0-1.49-.85l-.72.25c-.44.15-.92.02-1.23-.33l-.5-.58Zm-.49 2.67L10.6 6.6c.05.15.19.24.34.25l3.26.22c.36.03.5.48.23.71l-2.5 2.1a.4.4 0 0 0-.14.4l.8 3.16a.4.4 0 0 1-.6.44L9.2 12.13a.4.4 0 0 0-.42 0l-2.77 1.74a.4.4 0 0 1-.6-.44l.8-3.16a.4.4 0 0 0-.13-.4l-2.5-2.1a.4.4 0 0 1 .22-.7l3.26-.23a.4.4 0 0 0 .34-.25l1.22-3.03a.4.4 0 0 1 .74 0Z"/></svg>            <span class="-link--channel-name">Explore Collectives</span>
    </a>
</li>

                    </ol>
                </li>
                   


<li>
    <ol class="nav-links">
                

<li class="js-freemium-cta ps-relative">

    <div class="fs-fine tt-uppercase ml8 mt16 mb8 fc-light">Teams</div>

    <div class="bt bl bb bc-black-075 p12 pb6 fc-black-600 blr-sm overflow-hidden">
        <strong class="fc-black-750 mb6">Stack Overflow for Teams</strong>
        – Start collaborating and sharing organizational knowledge.
        
        <img class="wmx100 mx-auto my8 h-auto d-block" width="139" height="114" src="https://cdn.sstatic.net/Img/teams/teams-illo-free-sidebar-promo.svg?v=47faa659a05e" alt="">

        <a href="https://try.stackoverflow.co/why-teams/?utm_source=so-owned&amp;utm_medium=side-bar&amp;utm_campaign=campaign-38&amp;utm_content=cta" 
           class="w100 s-btn s-btn__primary s-btn__xs bg-orange-400 js-gps-track"
           data-gps-track="teams.create.left-sidenav.click({ Action: 6 })"
           data-ga="[&quot;teams left navigation - anonymous&quot;,&quot;left nav free cta&quot;,&quot;stackoverflow.com/teams/create/free&quot;,null,null]">Create a free Team</a>
        <a href="https://stackoverflow.co/teams" 
           class="w100 s-btn s-btn__muted s-btn__xs js-gps-track"
           data-gps-track="teams.create.left-sidenav.click({ Action: 5 })"
           data-ga="[&quot;teams left navigation - anonymous&quot;,&quot;left nav free cta&quot;,&quot;stackoverflow.com/teams&quot;,null,null]">Why Teams?</a>

    </div>
</li>


            <li class="d-flex ai-center jc-space-between ml8 mt24 mb4 js-create-team-cta d-none">
                <div class="flex--item tt-uppercase fs-fine fc-light">Teams</div>
                <div class="flex--item">
                    <a href="javascript:void(0)" class="s-link p12 fc-black-500 h:fc-black-800 js-gps-track"
                   role="button"
                   aria-controls="popover-teams-create-cta"
                   data-controller="s-popover"
                   data-action="s-popover#toggle"
                   data-s-popover-placement="bottom-start"
                   data-s-popover-toggle-class="is-selected"
                   data-gps-track="teams.create.left-sidenav.click({ Action: ShowInfo })"
                   data-ga="[&quot;teams left navigation - anonymous&quot;,&quot;left nav show teams info&quot;,null,null,null]">
                        <svg aria-hidden="true" class="svg-icon iconInfoSm" width="14" height="14"  viewBox="0 0 14 14"><path  d="M7 1a6 6 0 1 1 0 12A6 6 0 0 1 7 1Zm1 10V6H6v5h2Zm0-6V3H6v2h2Z"/></svg>
                    </a>

                </div>
            </li>
            <li class="ps-relative js-create-team-cta d-none">
                <a href="https://stackoverflowteams.com/teams/create/free?utm_source=so-owned&amp;utm_medium=side-bar&amp;utm_campaign=campaign-38&amp;utm_content=cta"
               class="pl8 js-gps-track nav-links--link"
               title="Stack Overflow for Teams is a private, secure spot for your organization's questions and answers."
               data-gps-track="teams.create.left-sidenav.click({ Action: FreemiumTeamsCreateClick })"
               data-ga="[&quot;teams left navigation - anonymous&quot;,&quot;left nav team click&quot;,&quot;stackoverflow.com/teams/create/free&quot;,null,null]">
                    <div class="d-flex ai-center">
                        <div class="flex--item s-avatar va-middle bg-orange-400">
                            <div class="s-avatar--letter mtn1">
                                <svg aria-hidden="true" class="svg-icon iconBriefcaseSm" width="14" height="14"  viewBox="0 0 14 14"><path  d="M4 3a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h.5c.83 0 1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5h-7A1.5 1.5 0 0 1 2 10.5v-5C2 4.67 2.67 4 3.5 4H4V3Zm5 1V3H5v1h4Z"/></svg>
                            </div>
                            <svg aria-hidden="true" class="native s-avatar--badge svg-icon iconShieldXSm" width="9" height="10"  viewBox="0 0 9 10"><path fill="var(--white)" d="M0 1.84 4.5 0 9 1.84v3.17C9 7.53 6.3 10 4.5 10 2.7 10 0 7.53 0 5.01V1.84Z"/><path fill="var(--black-500)" d="M1 2.5 4.5 1 8 2.5v2.51C8 7.34 5.34 9 4.5 9 3.65 9 1 7.34 1 5.01V2.5Zm2.98 3.02L3.2 7h2.6l-.78-1.48a.4.4 0 0 1 .15-.38c.34-.24.73-.7.73-1.14 0-.71-.5-1.23-1.41-1.23-.92 0-1.39.52-1.39 1.23 0 .44.4.9.73 1.14.12.08.18.23.15.38Z"/></svg>
                        </div>
                        <div class="flex--item pl6">
                            Create free Team
                        </div>
                    </div>
                </a>
            </li>
    </ol>
</li>
            </ol>
        </nav>
    </div>


        <div class="s-popover ws2" id="popover-discover-collectives" role="menu">
            <div class="s-popover--arrow"></div>
            <div>
                <svg aria-hidden="true" class="fc-orange-500 float-right ml24 svg-spot spotCollective" width="48" height="48"  viewBox="0 0 48 48"><path  d="M25.5 7a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM14 18.25c0-.69.56-1.25 1.25-1.25h22.5c.69 0 1.25.56 1.25 1.25V37.5a1 1 0 0 1-1.6.8l-4.07-3.05a1.25 1.25 0 0 0-.75-.25H15.25c-.69 0-1.25-.56-1.25-1.25v-15.5ZM7 24.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0ZM25.5 48a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM48 24.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" opacity=".2"/><path  d="M21 3.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0ZM24.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3ZM0 23.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0ZM3.5 22a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3ZM21 44.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0Zm3.5-1.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Zm20-23a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7ZM43 23.5a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm-23.23-3.14a1 1 0 0 1-.13 1.4l-2.08 1.74 2.08 1.73a1 1 0 1 1-1.28 1.54l-2.42-2.02a1.63 1.63 0 0 1 0-2.5l2.42-2.02a1 1 0 0 1 1.4.13Zm7.59 1.41a1 1 0 1 1 1.28-1.54l2.42 2.02c.78.65.78 1.85 0 2.5l-2.42 2.02a1 1 0 1 1-1.28-1.54l2.08-1.73-2.08-1.73ZM24.12 18a1 1 0 0 1 .87 1.12l-1 8a1 1 0 1 1-1.98-.24l1-8a1 1 0 0 1 1.11-.87Zm-11.87-5C11.01 13 10 14 10 15.25v15.5c0 1.24 1 2.25 2.25 2.25h17.33c.06 0 .11.02.15.05l4.07 3.05a2 2 0 0 0 3.2-1.6V15.25c0-1.24-1-2.25-2.25-2.25h-22.5ZM12 15.25c0-.14.11-.25.25-.25h22.5c.14 0 .25.11.25.25V34.5l-4.07-3.05a2.2 2.2 0 0 0-1.35-.45H12.25a.25.25 0 0 1-.25-.25v-15.5Zm7.24-10.68a1 1 0 1 0-.48-1.94A22.04 22.04 0 0 0 2.91 17.7a1 1 0 1 0 1.92.58 20.04 20.04 0 0 1 14.4-13.72Zm11.05-1.66a1 1 0 0 0-.58 1.92c6.45 1.92 11.54 7 13.46 13.46a1 1 0 1 0 1.92-.58 22.05 22.05 0 0 0-14.8-14.8ZM4.57 28.76a1 1 0 0 0-1.94.48 22.03 22.03 0 0 0 16.13 16.13 1 1 0 1 0 .48-1.94A20.03 20.03 0 0 1 4.57 28.76Zm40.8.48a1 1 0 1 0-1.94-.48 20.04 20.04 0 0 1-13.72 14.41 1 1 0 0 0 .58 1.92 22.04 22.04 0 0 0 15.08-15.85Z"/></svg>
                <h5 class="pt4 fw-bold">Collectives™ on Stack Overflow</h5>
                <p class="my16 fs-caption fc-medium">Find centralized, trusted content and collaborate around the technologies you use most.</p>
                <a href="/collectives"
               class="js-gps-track s-btn s-btn__primary s-btn__xs"
               data-gps-track="top_nav.click({is_current:false, location:2, destination:18})">
                    Learn more about Collectives
                </a>
            </div>
        </div>


        <div class="s-popover ws2"
         id="popover-teams-create-cta"
         role="menu"
         aria-hidden="true">
            <div class="s-popover--arrow"></div>

            <div class="ps-relative overflow-hidden">
                <p class="mb2"><strong>Teams</strong></p>
                <p class="mb12 fs-caption fc-black-400">Q&amp;A for work</p>
                <p class="mb12 fs-caption fc-medium">Connect and share knowledge within a single location that is structured and easy to search.</p>
                <a href="https://stackoverflow.co/teams"
               class="js-gps-track s-btn s-btn__primary s-btn__xs"
               data-gps-track="teams.create.left-sidenav.click({ Action: CtaClick })"
               data-ga="[&quot;teams left navigation - anonymous&quot;,&quot;left nav cta&quot;,&quot;stackoverflow.com/teams&quot;,null,null]">
                    Learn more about Teams
                </a>
            </div>

            <div class="ps-absolute t8 r8">
                <svg aria-hidden="true" class="fc-orange-500 svg-spot spotPeople" width="48" height="48"  viewBox="0 0 48 48"><path  d="M13.5 28a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM7 30a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v5h11v-5a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v10a2 2 0 0 1-2 2H33v5a1 1 0 0 1-1 1H20a1 1 0 0 1-1-1v-5H8a1 1 0 0 1-1-1V30Zm25-6.5a4.5 4.5 0 1 0 9 0 4.5 4.5 0 0 0-9 0ZM24.5 34a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Z" opacity=".2"/><path  d="M16.4 26.08A6 6 0 1 0 7.53 26C5.64 26.06 4 27.52 4 29.45V40a1 1 0 0 0 1 1h9a1 1 0 1 0 0-2h-4v-7a1 1 0 1 0-2 0v7H6v-9.55c0-.73.67-1.45 1.64-1.45H16a1 1 0 0 0 .4-1.92ZM12 18a4 4 0 1 1 0 8 4 4 0 0 1 0-8Zm16.47 14a6 6 0 1 0-8.94 0A3.6 3.6 0 0 0 16 35.5V46a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V35.5c0-1.94-1.64-3.42-3.53-3.5ZM20 28a4 4 0 1 1 8 0 4 4 0 0 1-8 0Zm-.3 6h8.6c1 0 1.7.75 1.7 1.5V45h-2v-7a1 1 0 1 0-2 0v7h-4v-7a1 1 0 1 0-2 0v7h-2v-9.5c0-.75.7-1.5 1.7-1.5ZM42 22c0 1.54-.58 2.94-1.53 4A3.5 3.5 0 0 1 44 29.45V40a1 1 0 0 1-1 1h-9a1 1 0 1 1 0-2h4v-7a1 1 0 1 1 2 0v7h2v-9.55A1.5 1.5 0 0 0 40.48 28H32a1 1 0 0 1-.4-1.92A6 6 0 1 1 42 22Zm-2 0a4 4 0 1 0-8 0 4 4 0 0 0 8 0Z"/><g  opacity=".35"><path d="M17 10a1 1 0 011-1h12a1 1 0 110 2H18a1 1 0 01-1-1Zm1-5a1 1 0 100 2h12a1 1 0 100-2H18ZM14 1a1 1 0 00-1 1v12a1 1 0 001 1h5.09l4.2 4.2a1 1 0 001.46-.04l3.7-4.16H34a1 1 0 001-1V2a1 1 0 00-1-1H14Zm1 12V3h18v10h-5a1 1 0 00-.75.34l-3.3 3.7-3.74-3.75a1 1 0 00-.71-.29H15Z"/></g></svg>
            </div>
        </div>


</div>






        <div id="content" class="snippet-hidden">

            

<div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question">
    <link itemprop="image" href="https://cdn.sstatic.net/Sites/stackoverflow/Img/apple-touch-icon.png?v=c78bd457575a">

    <div class="inner-content clearfix">

        

            <div id="question-header" class="d-flex sm:fd-column">
                        <h1 itemprop="name" class="fs-headline1 ow-break-word mb8 flex--item fl1"><a href="/questions/4917779/jquery-datepicker-date-reset" class="question-hyperlink">JQuery datePicker date reset</a></h1>
                <div class="ml12 aside-cta flex--item print:d-none sm:ml0 sm:mb12 sm:order-first sm:as-end">
                        <a href="/questions/ask" class="ws-nowrap s-btn s-btn__primary">
        Ask Question
    </a>

                </div>
            </div>
            <div class="d-flex fw-wrap pb8 mb16 bb bc-black-075">
                    <div class="flex--item ws-nowrap mr16 mb8" title="2011-02-07 03:03:43Z">
                        <span class="fc-light mr2">Asked</span>
                        <time itemprop="dateCreated" datetime="2011-02-07T03:03:43">12 years ago</time>
                    </div>
                    <div class="flex--item ws-nowrap mr16 mb8">
                        <span class="fc-light mr2">Modified</span>
                        <a href="?lastactivity" class="s-link s-link__inherit" title="2021-04-19 12:18:59Z">1 year, 9 months ago</a>
                    </div>
                    <div class="flex--item ws-nowrap mb8" title="Viewed 77,883 times">
                        <span class="fc-light mr2">Viewed</span>
                        78k times
                    </div>
            </div>
            <div id="mainbar" role="main" aria-label="question and answers">

                
<div class="question js-question" data-questionid="4917779" data-position-on-page="0" data-score="18"  id="question">
    <style>
    </style>
<div class="js-zone-container zone-container-main">
    <div id="dfp-tlb" class="everyonelovesstackoverflow everyoneloves__top-leaderboard everyoneloves__leaderboard"></div>
		<div class="js-report-ad-button-container " style="width: 728px"></div>
</div>

    <div class="post-layout ">
        <div class="votecell post-layout--left">
            <div class="js-voting-container d-flex jc-center fd-column ai-stretch gs4 fc-black-200" data-post-id="4917779">
        <button class="js-vote-up-btn flex--item s-btn s-btn__unset c-pointer "
                data-controller="s-tooltip"
                data-s-tooltip-placement="right"
                title="This question shows research effort; it is useful and clear"
                aria-pressed="false"
                aria-label="Up vote"
                data-selected-classes="fc-theme-primary"
                data-unselected-classes="">
            <svg aria-hidden="true" class="svg-icon iconArrowUpLg" width="36" height="36"  viewBox="0 0 36 36"><path  d="M2 25h32L18 9 2 25Z"/></svg>
        </button>
        <div class="js-vote-count flex--item d-flex fd-column ai-center fc-black-500 fs-title"
             itemprop="upvoteCount"
             data-value="18">
            18
        </div>
        <button class="js-vote-down-btn flex--item s-btn s-btn__unset c-pointer "
                data-controller="s-tooltip"
                data-s-tooltip-placement="right"
                title="This question does not show any research effort; it is unclear or not useful"
                aria-pressed="false"
                aria-label="Down vote"
                data-selected-classes="fc-theme-primary"
                data-unselected-classes="">
            <svg aria-hidden="true" class="svg-icon iconArrowDownLg" width="36" height="36"  viewBox="0 0 36 36"><path  d="M2 11h32L18 27 2 11Z"/></svg>
        </button>


        
<button class="js-saves-btn s-btn s-btn__unset c-pointer py4"
        id="saves-btn-4917779"
        data-controller="s-tooltip"
        data-s-tooltip-placement="right"
        data-s-popover-placement=""
        title="Save this question."
        aria-pressed="false"
        data-post-id="4917779"
        data-post-type-id="1"
        data-user-privilege-for-post-click="0"
        aria-controls=""
        data-s-popover-auto-show="false"
>
    <svg aria-hidden="true" class="fc-theme-primary-500 js-saves-btn-selected d-none svg-icon iconBookmark" width="18" height="18"  viewBox="0 0 18 18"><path  d="M3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4-6 4Z"/></svg>
    <svg aria-hidden="true" class="js-saves-btn-unselected svg-icon iconBookmarkAlt" width="18" height="18"  viewBox="0 0 18 18"><path  d="m9 10.6 4 2.66V3H5v10.26l4-2.66ZM3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4-6 4Z"/></svg>
</button>








    
        <a class="js-post-issue flex--item s-btn s-btn__unset c-pointer py6 mx-auto" href="/posts/4917779/timeline" data-shortcut="T" data-ks-title="timeline" data-controller="s-tooltip" data-s-tooltip-placement="right" title="Show activity on this post." aria-label="Timeline"><svg aria-hidden="true" class="mln2 mr0 svg-icon iconHistory" width="19" height="18"  viewBox="0 0 19 18"><path  d="M3 9a8 8 0 1 1 3.73 6.77L8.2 14.3A6 6 0 1 0 5 9l3.01-.01-4 4-4-4h3L3 9Zm7-4h1.01L11 9.36l3.22 2.1-.6.93L10 10V5Z"/></svg></a>

</div>

        </div>

        

<div class="postcell post-layout--right">
    
    <div class="s-prose js-post-body" itemprop="text">
                
<p>I would like to add a "Reset" control to the datepicker at the bottom of the calendar - where the "close" control goes. This would enable the user to reset the input tied to datepicker to blank (no date).</p>

<p>I can't figure out how to write the bind function, specifically, how do I get a hold of the element bound to the control?</p>

<pre><code>        if (this.displayClear) {
           $pop.append(
              $('&lt;a href="#" id="dp-clear"&gt;' + $.dpText.TEXT_CLEAR + '&lt;/a&gt;')
                 .bind(
                    'click',
                    function()
                    {
                          c.clearSelected();
                          //help! reset the value to '': $(this.something).val('')
                          c._closeCalendar();
                    }
                 )
           );
        }
</code></pre>
    </div>

        <div class="mt24 mb12">
            <div class="post-taglist d-flex gs4 gsy fd-column">
                <div class="d-flex ps-relative fw-wrap">
                    <ul class='ml0 list-ls-none js-post-tag-list-wrapper d-inline'><li class='d-inline mr4 js-post-tag-list-item'><a href="/questions/tagged/jquery" class="post-tag" title="show questions tagged &#39;jquery&#39;" aria-label="show questions tagged &#39;jquery&#39;" rel="tag" aria-labelledby="jquery-container">jquery</a></li><li class='d-inline mr4 js-post-tag-list-item'><a href="/questions/tagged/date" class="post-tag" title="show questions tagged &#39;date&#39;" aria-label="show questions tagged &#39;date&#39;" rel="tag" aria-labelledby="date-container">date</a></li><li class='d-inline mr4 js-post-tag-list-item'><a href="/questions/tagged/datepicker" class="post-tag" title="show questions tagged &#39;datepicker&#39;" aria-label="show questions tagged &#39;datepicker&#39;" rel="tag" aria-labelledby="datepicker-container">datepicker</a></li><li class='d-inline mr4 js-post-tag-list-item'><a href="/questions/tagged/reset" class="post-tag" title="show questions tagged &#39;reset&#39;" aria-label="show questions tagged &#39;reset&#39;" rel="tag" aria-labelledby="reset-container">reset</a></li><li class='d-inline mr4 js-post-tag-list-item'><a href="/questions/tagged/jquery-ui-datepicker" class="post-tag" title="show questions tagged &#39;jquery-ui-datepicker&#39;" aria-label="show questions tagged &#39;jquery-ui-datepicker&#39;" rel="tag" aria-labelledby="jquery-ui-datepicker-container">jquery-ui-datepicker</a></li></ul>
                </div>
            </div>
        </div>

    <div class="mb0 ">
        <div class="mt16 d-flex gs8 gsy fw-wrap jc-end ai-start pt4 mb16">
            <div class="flex--item mr16 fl1 w96">
                


<div class="js-post-menu pt2" data-post-id="4917779" data-post-type-id="1">

    <div class="d-flex gs8 s-anchors s-anchors__muted fw-wrap">

            <div class="flex--item">
                <a href="/q/4917779"
                   rel="nofollow"
                   itemprop="url"
                   class="js-share-link js-gps-track"
                   title="Short permalink to this question"
                   data-gps-track="post.click({ item: 2, priv: 0, post_type: 1 })"
                   data-controller="se-share-sheet"
                   data-se-share-sheet-title="Share a link to this question"
                   data-se-share-sheet-subtitle=""
                   data-se-share-sheet-post-type="question"
                   data-se-share-sheet-social="facebook twitter devto"
                   data-se-share-sheet-location="1"
                   data-se-share-sheet-license-url="https%3a%2f%2fcreativecommons.org%2flicenses%2fby-sa%2f3.0%2f"
                   data-se-share-sheet-license-name="CC BY-SA 3.0"
                   data-s-popover-placement="bottom-start">Share</a>
            </div>



            <div class="flex--item">
                <button type="button"
                        id="btnFollowPost-4917779" class="s-btn s-btn__link js-follow-post js-follow-question js-gps-track"
                        data-gps-track="post.click({ item: 14, priv: 0, post_type: 1 })"
                        data-controller="s-tooltip " data-s-tooltip-placement="bottom"
                        data-s-popover-placement="bottom" aria-controls=""
                        title="Follow this question to receive notifications">
                    Follow
                </button>
            </div>






    </div>
    <div class="js-menu-popup-container"></div>
</div>
            </div>

                <div class="post-signature flex--item">
<div class="user-info ">
    <div class="user-action-time">
        <a href="/posts/4917779/revisions" title="show all edits to this post"
                         class="js-gps-track"
                         data-gps-track="post.click({ item: 4, priv: 0, post_type: 1 })">edited <span title='2012-12-04 13:43:05Z' class='relativetime'>Dec 4, 2012 at 13:43</span></a>
    </div>
    <div class="user-gravatar32">
        <a href="/users/457500/mathieu"><div class="gravatar-wrapper-32"><img src="https://www.gravatar.com/avatar/f02e541929e8aef5cbaee5a65335eff1?s=64&amp;d=identicon&amp;r=PG" alt="Mathieu&#39;s user avatar" width="32" height="32" class="bar-sm"></div></a>
    </div>
    <div class="user-details">
        <a href="/users/457500/mathieu">Mathieu</a>
        <div class="-flair">
            <span class="reputation-score" title="reputation score " dir="ltr">4,393</span><span title="6 gold badges" aria-hidden="true"><span class="badge1"></span><span class="badgecount">6</span></span><span class="v-visible-sr">6 gold badges</span><span title="41 silver badges" aria-hidden="true"><span class="badge2"></span><span class="badgecount">41</span></span><span class="v-visible-sr">41 silver badges</span><span title="60 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">60</span></span><span class="v-visible-sr">60 bronze badges</span>
        </div>
    </div>
</div>
                </div>
            <div class="post-signature owner flex--item">
                <div class="user-info ">
    <div class="user-action-time">
        asked <span title='2011-02-07 03:03:43Z' class='relativetime'>Feb 7, 2011 at 3:03</span>
    </div>
    <div class="user-gravatar32">
        <a href="/users/605882/kateyoak"><div class="gravatar-wrapper-32"><img src="https://www.gravatar.com/avatar/96e25e6f6c77ba3382b4822216693075?s=64&amp;d=identicon&amp;r=PG" alt="KateYoak&#39;s user avatar" width="32" height="32" class="bar-sm"></div></a>
    </div>
    <div class="user-details" itemprop="author" itemscope itemtype="http://schema.org/Person">
        <a href="/users/605882/kateyoak">KateYoak</a><span class="d-none" itemprop="name">KateYoak</span>
        <div class="-flair">
            <span class="reputation-score" title="reputation score " dir="ltr">1,541</span><span title="3 gold badges" aria-hidden="true"><span class="badge1"></span><span class="badgecount">3</span></span><span class="v-visible-sr">3 gold badges</span><span title="18 silver badges" aria-hidden="true"><span class="badge2"></span><span class="badgecount">18</span></span><span class="v-visible-sr">18 silver badges</span><span title="33 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">33</span></span><span class="v-visible-sr">33 bronze badges</span>
        </div>
    </div>
</div>


            </div>
        </div>
    </div>
    
</div>




            <span class="d-none" itemprop="commentCount">2</span> 
    <div class="post-layout--right js-post-comments-component">
        <div id="comments-4917779" class="comments js-comments-container bt bc-black-075 mt12 " data-post-id="4917779" data-min-length="15">
            <ul class="comments-list js-comments-list"
                    data-remaining-comments-count="0"
                    data-canpost="false"
                    data-cansee="true"
                    data-comments-unavailable="false"
                    data-addlink-disabled="true">

                        <li id="comment-40028327" class="comment js-comment " data-comment-id="40028327" data-comment-owner-id="582542" data-comment-score="0">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-score js-comment-edit-hide">
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">There are some useful answers in <a href="http://bugs.jqueryui.com/ticket/3999" rel="nofollow noreferrer">this discussion</a>. See, specifically, <a href="http://jsbin.com/ofare/edit" rel="nofollow noreferrer">pfurbacher&#39;s sample implementation here</a>.</span>
                
                <div class="d-inline-flex ai-center">
&ndash;&nbsp;<a href="/users/582542/ori"
                                title="4,042 reputation"
                                class="comment-user">Ori</a>
                </div>
                <span class="comment-date" dir="ltr"><span title='2011-02-07 03:49:55Z, License: CC BY-SA 2.5' class='relativetime-clean'>Feb 7, 2011 at 3:49</span></span>
            </div>
        </div>
    </li>
    <li id="comment-47288847" class="comment js-comment " data-comment-id="47288847" data-comment-owner-id="1644531" data-comment-score="0">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-score js-comment-edit-hide">
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">possible duplicate of <a href="http://stackoverflow.com/questions/9435086/how-do-i-clear-reset-the-selected-dates-on-the-jquery-ui-datepicker-calendar">How do I clear/reset the selected dates on the jQuery UI Datepicker calendar?</a></span>
                
                <div class="d-inline-flex ai-center">
&ndash;&nbsp;<a href="/users/1644531/freemanoid"
                                title="14,482 reputation"
                                class="comment-user">freemanoid</a>
                </div>
                <span class="comment-date" dir="ltr"><span title='2015-04-10 19:58:19Z, License: CC BY-SA 3.0' class='relativetime-clean'>Apr 10, 2015 at 19:58</span></span>
            </div>
        </div>
    </li>

            </ul>
	    </div>

        <div id="comments-link-4917779" data-rep=50 data-anon=true>
                    <a class="js-add-link comments-link disabled-link" title="Use comments to ask for more information or suggest improvements. Avoid answering questions in comments."  href="#" role="button">Add a comment</a>
                <span class="js-link-separator dno">&nbsp;|&nbsp;</span>
            <a class="js-show-link comments-link dno" title="Expand to show all comments on this post" href=# onclick="" role="button"></a>
        </div>         
    </div>
    </div>

</div>


<div class="js-zone-container zone-container-responsive">
    <div id="dfp-isb" class="everyonelovesstackoverflow everyoneloves__inline-sidebar mx-auto"></div>
		<div class="js-report-ad-button-container mx-auto" style="width: 300px"></div>
</div>


                <div id="answers">
                    <a name="tab-top"></a>
                    <div id="answers-header">
                        <div class="answers-subheader d-flex ai-center mb8">
                            <div class="flex--item fl1">
                                <h2 class="mb0" data-answercount="6">
                                        6 Answers
                                    <span style="display:none;" itemprop="answerCount">6</span>
                                </h2>
                            </div>
                            <div class="flex--item">
                                

<div class="d-flex g4 gsx ai-center sm:fd-column sm:ai-start">
    <div class="d-flex fd-column ai-end sm:ai-start">
        <label class="flex--item fs-caption" for="answer-sort-dropdown-select-menu">
            Sorted by:
        </label>
        <a 
            class="js-sort-preference-change s-link flex--item fs-fine d-none"
            data-value="ScoreDesc"
            href="/questions/4917779/jquery-datepicker-date-reset?answertab=scoredesc#tab-top"
        >
            Reset to default
        </a>
    </div>
    <div class="flex--item s-select">
        <select id="answer-sort-dropdown-select-menu">
                    <option
                        value=scoredesc
                        selected=selected
                    >
                        Highest score (default)
                    </option>
                    <option
                        value=trending
                    >
                        Trending (recent votes count more)
                    </option>
                    <option
                        value=modifieddesc
                    >
                        Date modified (newest first)
                    </option>
                    <option
                        value=createdasc
                    >
                        Date created (oldest first)
                    </option>
        </select>
    </div>
</div>


                            </div>
                        </div>
                            
                    </div>


                                        
<a name="6941440"></a>
<div id="answer-6941440" class="answer js-answer accepted-answer js-accepted-answer" data-answerid="6941440" data-parentid="4917779" data-score="21" data-position-on-page="1" data-highest-scored="1" data-question-has-accepted-highest-score="1"  itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
    <div class="post-layout">
        <div class="votecell post-layout--left">
            <div class="js-voting-container d-flex jc-center fd-column ai-stretch gs4 fc-black-200" data-post-id="6941440">
        <button class="js-vote-up-btn flex--item s-btn s-btn__unset c-pointer "
                data-controller="s-tooltip"
                data-s-tooltip-placement="right"
                title="This answer is useful"
                aria-pressed="false"
                aria-label="Up vote"
                data-selected-classes="fc-theme-primary"
                data-unselected-classes="">
            <svg aria-hidden="true" class="svg-icon iconArrowUpLg" width="36" height="36"  viewBox="0 0 36 36"><path  d="M2 25h32L18 9 2 25Z"/></svg>
        </button>
        <div class="js-vote-count flex--item d-flex fd-column ai-center fc-black-500 fs-title"
             itemprop="upvoteCount"
             data-value="21">
            21
        </div>
        <button class="js-vote-down-btn flex--item s-btn s-btn__unset c-pointer "
                data-controller="s-tooltip"
                data-s-tooltip-placement="right"
                title="This answer is not useful"
                aria-pressed="false"
                aria-label="Down vote"
                data-selected-classes="fc-theme-primary"
                data-unselected-classes="">
            <svg aria-hidden="true" class="svg-icon iconArrowDownLg" width="36" height="36"  viewBox="0 0 36 36"><path  d="M2 11h32L18 27 2 11Z"/></svg>
        </button>


        
<button class="js-saves-btn s-btn s-btn__unset c-pointer py4"
        id="saves-btn-6941440"
        data-controller="s-tooltip"
        data-s-tooltip-placement="right"
        data-s-popover-placement=""
        title="Save this answer."
        aria-pressed="false"
        data-post-id="6941440"
        data-post-type-id="2"
        data-user-privilege-for-post-click="0"
        aria-controls=""
        data-s-popover-auto-show="false"
>
    <svg aria-hidden="true" class="fc-theme-primary-500 js-saves-btn-selected d-none svg-icon iconBookmark" width="18" height="18"  viewBox="0 0 18 18"><path  d="M3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4-6 4Z"/></svg>
    <svg aria-hidden="true" class="js-saves-btn-unselected svg-icon iconBookmarkAlt" width="18" height="18"  viewBox="0 0 18 18"><path  d="m9 10.6 4 2.66V3H5v10.26l4-2.66ZM3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4-6 4Z"/></svg>
</button>







            <div class="js-accepted-answer-indicator flex--item fc-green-700 py6 mtn8" data-s-tooltip-placement="right" title="Loading when this answer was accepted&#x2026;" tabindex="0" role="note" aria-label="Accepted">
                <div class="ta-center">
                    <svg aria-hidden="true" class="svg-icon iconCheckmarkLg" width="36" height="36"  viewBox="0 0 36 36"><path  d="m6 14 8 8L30 6v8L14 30l-8-8v-8Z"/></svg>
                </div>
            </div>

    
        <a class="js-post-issue flex--item s-btn s-btn__unset c-pointer py6 mx-auto" href="/posts/6941440/timeline" data-shortcut="T" data-ks-title="timeline" data-controller="s-tooltip" data-s-tooltip-placement="right" title="Show activity on this post." aria-label="Timeline"><svg aria-hidden="true" class="mln2 mr0 svg-icon iconHistory" width="19" height="18"  viewBox="0 0 19 18"><path  d="M3 9a8 8 0 1 1 3.73 6.77L8.2 14.3A6 6 0 1 0 5 9l3.01-.01-4 4-4-4h3L3 9Zm7-4h1.01L11 9.36l3.22 2.1-.6.93L10 10V5Z"/></svg></a>

</div>

        </div>

        

<div class="answercell post-layout--right">
    
    <div class="s-prose js-post-body" itemprop="text">
<p>Here is working solution, just call cleanDatepicker() before any call to datepicker.</p>

<pre><code>function cleanDatepicker() {
   var old_fn = $.datepicker._updateDatepicker;

   $.datepicker._updateDatepicker = function(inst) {
      old_fn.call(this, inst);

      var buttonPane = $(this).datepicker("widget").find(".ui-datepicker-buttonpane");

      $("&lt;button type='button' class='ui-datepicker-clean ui-state-default ui-priority-primary ui-corner-all'&gt;Delete&lt;/button&gt;").appendTo(buttonPane).click(function(ev) {
          $.datepicker._clearDate(inst.input);
      }) ;
   }
}
</code></pre>
    </div>
    <div class="mt24">
        <div class="d-flex fw-wrap ai-start jc-end gs8 gsy">
            <time itemprop="dateCreated" datetime="2011-08-04T12:31:26"></time>
            <div class="flex--item mr16" style="flex: 1 1 100px;">
                


<div class="js-post-menu pt2" data-post-id="6941440" data-post-type-id="2">

    <div class="d-flex gs8 s-anchors s-anchors__muted fw-wrap">

            <div class="flex--item">
                <a href="/a/6941440"
                   rel="nofollow"
                   itemprop="url"
                   class="js-share-link js-gps-track"
                   title="Short permalink to this answer"
                   data-gps-track="post.click({ item: 2, priv: 0, post_type: 2 })"
                   data-controller="se-share-sheet"
                   data-se-share-sheet-title="Share a link to this answer"
                   data-se-share-sheet-subtitle=""
                   data-se-share-sheet-post-type="answer"
                   data-se-share-sheet-social="facebook twitter devto"
                   data-se-share-sheet-location="2"
                   data-se-share-sheet-license-url="https%3a%2f%2fcreativecommons.org%2flicenses%2fby-sa%2f3.0%2f"
                   data-se-share-sheet-license-name="CC BY-SA 3.0"
                   data-s-popover-placement="bottom-start">Share</a>
            </div>



            <div class="flex--item">
                <button type="button"
                        id="btnFollowPost-6941440" class="s-btn s-btn__link js-follow-post js-follow-answer js-gps-track"
                        data-gps-track="post.click({ item: 14, priv: 0, post_type: 2 })"
                        data-controller="s-tooltip " data-s-tooltip-placement="bottom"
                        data-s-popover-placement="bottom" aria-controls=""
                        title="Follow this answer to receive notifications">
                    Follow
                </button>
            </div>






    </div>
    <div class="js-menu-popup-container"></div>
</div>
            </div>
            <div class="post-signature flex--item fl0">
<div class="user-info user-hover">
    <div class="user-action-time">
        <a href="/posts/6941440/revisions" title="show all edits to this post"
                         class="js-gps-track"
                         data-gps-track="post.click({ item: 4, priv: 0, post_type: 2 })">edited <span title='2017-03-08 12:33:57Z' class='relativetime'>Mar 8, 2017 at 12:33</span></a>
    </div>
    <div class="user-gravatar32">
        <a href="/users/2780791/alexei-check-codidact"><div class="gravatar-wrapper-32"><img src="https://www.gravatar.com/avatar/1feea731a99cb95e342d196802bb868a?s=64&amp;d=identicon&amp;r=PG&amp;f=1" alt="Alexei - check Codidact&#39;s user avatar" width="32" height="32" class="bar-sm"></div></a>
    </div>
    <div class="user-details">
        <a href="/users/2780791/alexei-check-codidact">Alexei - check Codidact</a>
        <div class="-flair">
            <span class="reputation-score" title="reputation score 21,242" dir="ltr">21.2k</span><span title="15 gold badges" aria-hidden="true"><span class="badge1"></span><span class="badgecount">15</span></span><span class="v-visible-sr">15 gold badges</span><span title="145 silver badges" aria-hidden="true"><span class="badge2"></span><span class="badgecount">145</span></span><span class="v-visible-sr">145 silver badges</span><span title="157 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">157</span></span><span class="v-visible-sr">157 bronze badges</span>
        </div>
    </div>
</div>
            </div>


            <div class="post-signature flex--item fl0">
                <div class="user-info ">
    <div class="user-action-time">
        answered <span title='2011-08-04 12:31:26Z' class='relativetime'>Aug 4, 2011 at 12:31</span>
    </div>
    <div class="user-gravatar32">
        <a href="/users/641093/pma"><div class="gravatar-wrapper-32"><img src="https://www.gravatar.com/avatar/e4a885efb356e7ad974fe7aba3ba7d7e?s=64&amp;d=identicon&amp;r=PG" alt="pma_&#39;s user avatar" width="32" height="32" class="bar-sm"></div></a>
    </div>
    <div class="user-details" itemprop="author" itemscope itemtype="http://schema.org/Person">
        <a href="/users/641093/pma">pma_</a><span class="d-none" itemprop="name">pma_</span>
        <div class="-flair">
            <span class="reputation-score" title="reputation score " dir="ltr">800</span><span title="1 gold badge" aria-hidden="true"><span class="badge1"></span><span class="badgecount">1</span></span><span class="v-visible-sr">1 gold badge</span><span title="7 silver badges" aria-hidden="true"><span class="badge2"></span><span class="badgecount">7</span></span><span class="v-visible-sr">7 silver badges</span><span title="9 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">9</span></span><span class="v-visible-sr">9 bronze badges</span>
        </div>
    </div>
</div>


            </div>
        </div>
        
    
    </div>
    
</div>




            <span class="d-none" itemprop="commentCount">4</span> 
    <div class="post-layout--right js-post-comments-component">
        <div id="comments-6941440" class="comments js-comments-container bt bc-black-075 mt12 " data-post-id="6941440" data-min-length="15">
            <ul class="comments-list js-comments-list"
                    data-remaining-comments-count="0"
                    data-canpost="false"
                    data-cansee="true"
                    data-comments-unavailable="false"
                    data-addlink-disabled="true">

                        <li id="comment-12604713" class="comment js-comment " data-comment-id="12604713" data-comment-owner-id="638544" data-comment-score="1">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-score js-comment-edit-hide">
                    <span title="number of &#x27;useful comment&#x27; votes received"
                            class="cool">1</span>
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">Excellent solution... except that the button title is in Polish.  Also, I&#39;d suggest putting this in a (function(){})(); setup, rather than creating a named function and calling it later.</span>
                
                <div class="d-inline-flex ai-center">
&ndash;&nbsp;<a href="/users/638544/brilliand"
                                title="13,146 reputation"
                                class="comment-user">Brilliand</a>
                </div>
                <span class="comment-date" dir="ltr"><span title='2012-03-27 02:34:24Z, License: CC BY-SA 3.0' class='relativetime-clean'>Mar 27, 2012 at 2:34</span></span>
            </div>
        </div>
    </li>
    <li id="comment-18912714" class="comment js-comment " data-comment-id="18912714" data-comment-owner-id="119561" data-comment-score="2">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-score js-comment-edit-hide">
                    <span title="number of &#x27;useful comment&#x27; votes received"
                            class="cool">2</span>
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">In order for this to work, you have to set the datepicker option showButtonPanel to true.</span>
                
                <div class="d-inline-flex ai-center">
&ndash;&nbsp;<a href="/users/119561/deerchao"
                                title="10,354 reputation"
                                class="comment-user">deerchao</a>
                </div>
                <span class="comment-date" dir="ltr"><span title='2012-12-07 09:05:56Z, License: CC BY-SA 3.0' class='relativetime-clean'>Dec 7, 2012 at 9:05</span></span>
            </div>
        </div>
    </li>
    <li id="comment-19748799" class="comment js-comment " data-comment-id="19748799" data-comment-owner-id="396732" data-comment-score="0">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-score js-comment-edit-hide">
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">Does this solution work for AJAXed buttons, that is, does that solution cause an AJAX submit to the server on clear?</span>
                
                <div class="d-inline-flex ai-center">
&ndash;&nbsp;<a href="/users/396732/kawu"
                                title="13,519 reputation"
                                class="comment-user">Kawu</a>
                </div>
                <span class="comment-date" dir="ltr"><span title='2013-01-09 12:16:59Z, License: CC BY-SA 3.0' class='relativetime-clean'>Jan 9, 2013 at 12:16</span></span>
            </div>
        </div>
    </li>
    <li id="comment-123631951" class="comment js-comment " data-comment-id="123631951" data-comment-owner-id="12876529" data-comment-score="0">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-score js-comment-edit-hide">
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">How to prevent the same date input from resetting when clicking on submit? please tell <a href="https://stackoverflow.com/questions/69939209/how-to-prevent-jquery-datepicker-from-clearing-date-on-submit-in-jsp" title="how to prevent jquery datepicker from clearing date on submit in jsp">stackoverflow.com/questions/69939209/&hellip;</a></span>
                
                <div class="d-inline-flex ai-center">
&ndash;&nbsp;<a href="/users/12876529/sanjay-sahani"
                                title="410 reputation"
                                class="comment-user">Sanjay Sahani</a>
                </div>
                <span class="comment-date" dir="ltr"><span title='2021-11-12 07:41:40Z, License: CC BY-SA 4.0' class='relativetime-clean'>Nov 12, 2021 at 7:41</span></span>
            </div>
        </div>
    </li>

            </ul>
	    </div>

        <div id="comments-link-6941440" data-rep=50 data-anon=true>
                    <a class="js-add-link comments-link disabled-link" title="Use comments to ask for more information or suggest improvements. Avoid comments like &#x201C;&#x2B;1&#x201D; or &#x201C;thanks&#x201D;."  href="#" role="button">Add a comment</a>
                <span class="js-link-separator dno">&nbsp;|&nbsp;</span>
            <a class="js-show-link comments-link dno" title="Expand to show all comments on this post" href=# onclick="" role="button"></a>
        </div>         
    </div>
    </div>
</div>

<div class="js-zone-container zone-container-main">
    <div id="dfp-mlb" class="everyonelovesstackoverflow everyoneloves__mid-leaderboard everyoneloves__leaderboard"></div>
		<div class="js-report-ad-button-container " style="width: 728px"></div>
</div>
                                        
<a name="15799622"></a>
<div id="answer-15799622" class="answer js-answer" data-answerid="15799622" data-parentid="4917779" data-score="19" data-position-on-page="2" data-highest-scored="0" data-question-has-accepted-highest-score="1"  itemprop="suggestedAnswer" itemscope itemtype="https://schema.org/Answer">
    <div class="post-layout">
        <div class="votecell post-layout--left">
            <div class="js-voting-container d-flex jc-center fd-column ai-stretch gs4 fc-black-200" data-post-id="15799622">
        <button class="js-vote-up-btn flex--item s-btn s-btn__unset c-pointer "
                data-controller="s-tooltip"
                data-s-tooltip-placement="right"
                title="This answer is useful"
                aria-pressed="false"
                aria-label="Up vote"
                data-selected-classes="fc-theme-primary"
                data-unselected-classes="">
            <svg aria-hidden="true" class="svg-icon iconArrowUpLg" width="36" height="36"  viewBox="0 0 36 36"><path  d="M2 25h32L18 9 2 25Z"/></svg>
        </button>
        <div class="js-vote-count flex--item d-flex fd-column ai-center fc-black-500 fs-title"
             itemprop="upvoteCount"
             data-value="19">
            19
        </div>
        <button class="js-vote-down-btn flex--item s-btn s-btn__unset c-pointer "
                data-controller="s-tooltip"
                data-s-tooltip-placement="right"
                title="This answer is not useful"
                aria-pressed="false"
                aria-label="Down vote"
                data-selected-classes="fc-theme-primary"
                data-unselected-classes="">
            <svg aria-hidden="true" class="svg-icon iconArrowDownLg" width="36" height="36"  viewBox="0 0 36 36"><path  d="M2 11h32L18 27 2 11Z"/></svg>
        </button>


        
<button class="js-saves-btn s-btn s-btn__unset c-pointer py4"
        id="saves-btn-15799622"
        data-controller="s-tooltip"
        data-s-tooltip-placement="right"
        data-s-popover-placement=""
        title="Save this answer."
        aria-pressed="false"
        data-post-id="15799622"
        data-post-type-id="2"
        data-user-privilege-for-post-click="0"
        aria-controls=""
        data-s-popover-auto-show="false"
>
    <svg aria-hidden="true" class="fc-theme-primary-500 js-saves-btn-selected d-none svg-icon iconBookmark" width="18" height="18"  viewBox="0 0 18 18"><path  d="M3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4-6 4Z"/></svg>
    <svg aria-hidden="true" class="js-saves-btn-unselected svg-icon iconBookmarkAlt" width="18" height="18"  viewBox="0 0 18 18"><path  d="m9 10.6 4 2.66V3H5v10.26l4-2.66ZM3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4-6 4Z"/></svg>
</button>







            <div class="js-accepted-answer-indicator flex--item fc-green-700 py6 mtn8 d-none" data-s-tooltip-placement="right" title="Loading when this answer was accepted&#x2026;" tabindex="0" role="note" aria-label="Accepted">
                <div class="ta-center">
                    <svg aria-hidden="true" class="svg-icon iconCheckmarkLg" width="36" height="36"  viewBox="0 0 36 36"><path  d="m6 14 8 8L30 6v8L14 30l-8-8v-8Z"/></svg>
                </div>
            </div>

    
        <a class="js-post-issue flex--item s-btn s-btn__unset c-pointer py6 mx-auto" href="/posts/15799622/timeline" data-shortcut="T" data-ks-title="timeline" data-controller="s-tooltip" data-s-tooltip-placement="right" title="Show activity on this post." aria-label="Timeline"><svg aria-hidden="true" class="mln2 mr0 svg-icon iconHistory" width="19" height="18"  viewBox="0 0 19 18"><path  d="M3 9a8 8 0 1 1 3.73 6.77L8.2 14.3A6 6 0 1 0 5 9l3.01-.01-4 4-4-4h3L3 9Zm7-4h1.01L11 9.36l3.22 2.1-.6.93L10 10V5Z"/></svg></a>

</div>

        </div>

        

<div class="answercell post-layout--right">
    
    <div class="s-prose js-post-body" itemprop="text">
<p>I found a nicer solution:</p>

<pre class="lang-js prettyprint-override"><code>$(document).ready(function () {
    $(".datepicker").datepicker({
            showOn: 'focus',
            showButtonPanel: true,
            closeText: 'Clear', // Text to show for "close" button
            onClose: function () {
                var event = arguments.callee.caller.caller.arguments[0];
                // If "Clear" gets clicked, then really clear it
                if ($(event.delegateTarget).hasClass('ui-datepicker-close')) {
                    $(this).val('');
                }
            }
    });
});
</code></pre>

<p><a href="http://jsfiddle.net/swjw5w7q/1/" rel="noreferrer">http://jsfiddle.net/swjw5w7q/1/</a></p>
    </div>
    <div class="mt24">
        <div class="d-flex fw-wrap ai-start jc-end gs8 gsy">
            <time itemprop="dateCreated" datetime="2013-04-03T22:49:51"></time>
            <div class="flex--item mr16" style="flex: 1 1 100px;">
                


<div class="js-post-menu pt2" data-post-id="15799622" data-post-type-id="2">

    <div class="d-flex gs8 s-anchors s-anchors__muted fw-wrap">

            <div class="flex--item">
                <a href="/a/15799622"
                   rel="nofollow"
                   itemprop="url"
                   class="js-share-link js-gps-track"
                   title="Short permalink to this answer"
                   data-gps-track="post.click({ item: 2, priv: 0, post_type: 2 })"
                   data-controller="se-share-sheet"
                   data-se-share-sheet-title="Share a link to this answer"
                   data-se-share-sheet-subtitle=""
                   data-se-share-sheet-post-type="answer"
                   data-se-share-sheet-social="facebook twitter devto"
                   data-se-share-sheet-location="2"
                   data-se-share-sheet-license-url="https%3a%2f%2fcreativecommons.org%2flicenses%2fby-sa%2f3.0%2f"
                   data-se-share-sheet-license-name="CC BY-SA 3.0"
                   data-s-popover-placement="bottom-start">Share</a>
            </div>



            <div class="flex--item">
                <button type="button"
                        id="btnFollowPost-15799622" class="s-btn s-btn__link js-follow-post js-follow-answer js-gps-track"
                        data-gps-track="post.click({ item: 14, priv: 0, post_type: 2 })"
                        data-controller="s-tooltip " data-s-tooltip-placement="bottom"
                        data-s-popover-placement="bottom" aria-controls=""
                        title="Follow this answer to receive notifications">
                    Follow
                </button>
            </div>






    </div>
    <div class="js-menu-popup-container"></div>
</div>
            </div>
            <div class="post-signature flex--item fl0">
<div class="user-info ">
    <div class="user-action-time">
        <a href="/posts/15799622/revisions" title="show all edits to this post"
                         class="js-gps-track"
                         data-gps-track="post.click({ item: 4, priv: 0, post_type: 2 })">edited <span title='2015-01-21 09:47:43Z' class='relativetime'>Jan 21, 2015 at 9:47</span></a>
    </div>
    <div class="user-gravatar32">
        
    </div>
    <div class="user-details">
        
        <div class="-flair">
            
        </div>
    </div>
</div>
            </div>


            <div class="post-signature flex--item fl0">
                <div class="user-info ">
    <div class="user-action-time">
        answered <span title='2013-04-03 22:49:51Z' class='relativetime'>Apr 3, 2013 at 22:49</span>
    </div>
    <div class="user-gravatar32">
        <a href="/users/878435/vellotis"><div class="gravatar-wrapper-32"><img src="https://www.gravatar.com/avatar/f8ac7b0e9b8fde549cd54380bd6a9a68?s=64&amp;d=identicon&amp;r=PG" alt="vellotis&#39;s user avatar" width="32" height="32" class="bar-sm"></div></a>
    </div>
    <div class="user-details" itemprop="author" itemscope itemtype="http://schema.org/Person">
        <a href="/users/878435/vellotis">vellotis</a><span class="d-none" itemprop="name">vellotis</span>
        <div class="-flair">
            <span class="reputation-score" title="reputation score " dir="ltr">819</span><span title="1 gold badge" aria-hidden="true"><span class="badge1"></span><span class="badgecount">1</span></span><span class="v-visible-sr">1 gold badge</span><span title="12 silver badges" aria-hidden="true"><span class="badge2"></span><span class="badgecount">12</span></span><span class="v-visible-sr">12 silver badges</span><span title="26 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">26</span></span><span class="v-visible-sr">26 bronze badges</span>
        </div>
    </div>
</div>


            </div>
        </div>
        
    
    </div>
    
</div>




            <span class="d-none" itemprop="commentCount">2</span> 
    <div class="post-layout--right js-post-comments-component">
        <div id="comments-15799622" class="comments js-comments-container bt bc-black-075 mt12 " data-post-id="15799622" data-min-length="15">
            <ul class="comments-list js-comments-list"
                    data-remaining-comments-count="0"
                    data-canpost="false"
                    data-cansee="true"
                    data-comments-unavailable="false"
                    data-addlink-disabled="true">

                        <li id="comment-44483293" class="comment js-comment " data-comment-id="44483293" data-comment-owner-id="2125700" data-comment-score="1">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-score js-comment-edit-hide">
                    <span title="number of &#x27;useful comment&#x27; votes received"
                            class="cool">1</span>
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">window.event is undefined in Firefox.</span>
                
                <div class="d-inline-flex ai-center">
&ndash;&nbsp;<a href="/users/2125700/inputerror"
                                title="600 reputation"
                                class="comment-user">inputError</a>
                </div>
                <span class="comment-date" dir="ltr"><span title='2015-01-20 16:40:59Z, License: CC BY-SA 3.0' class='relativetime-clean'>Jan 20, 2015 at 16:40</span></span>
            </div>
        </div>
    </li>
    <li id="comment-125985645" class="comment js-comment " data-comment-id="125985645" data-comment-owner-id="388388" data-comment-score="0">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-score js-comment-edit-hide">
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">Not working with latest version <a href="https://code.jquery.com/ui/1.13.1/jquery-ui.js" rel="nofollow noreferrer">code.jquery.com/ui/1.13.1/jquery-ui.js</a></span>
                
                <div class="d-inline-flex ai-center">
&ndash;&nbsp;<a href="/users/388388/developer"
                                title="8,350 reputation"
                                class="comment-user">Developer</a>
                </div>
                <span class="comment-date" dir="ltr"><span title='2022-02-26 05:40:10Z, License: CC BY-SA 4.0' class='relativetime-clean'>Feb 26, 2022 at 5:40</span></span>
            </div>
        </div>
    </li>

            </ul>
	    </div>

        <div id="comments-link-15799622" data-rep=50 data-anon=true>
                    <a class="js-add-link comments-link disabled-link" title="Use comments to ask for more information or suggest improvements. Avoid comments like &#x201C;&#x2B;1&#x201D; or &#x201C;thanks&#x201D;."  href="#" role="button">Add a comment</a>
                <span class="js-link-separator dno">&nbsp;|&nbsp;</span>
            <a class="js-show-link comments-link dno" title="Expand to show all comments on this post" href=# onclick="" role="button"></a>
        </div>         
    </div>
    </div>
</div>

                                        
<a name="18843388"></a>
<div id="answer-18843388" class="answer js-answer" data-answerid="18843388" data-parentid="4917779" data-score="9" data-position-on-page="3" data-highest-scored="0" data-question-has-accepted-highest-score="1"  itemprop="suggestedAnswer" itemscope itemtype="https://schema.org/Answer">
    <div class="post-layout">
        <div class="votecell post-layout--left">
            <div class="js-voting-container d-flex jc-center fd-column ai-stretch gs4 fc-black-200" data-post-id="18843388">
        <button class="js-vote-up-btn flex--item s-btn s-btn__unset c-pointer "
                data-controller="s-tooltip"
                data-s-tooltip-placement="right"
                title="This answer is useful"
                aria-pressed="false"
                aria-label="Up vote"
                data-selected-classes="fc-theme-primary"
                data-unselected-classes="">
            <svg aria-hidden="true" class="svg-icon iconArrowUpLg" width="36" height="36"  viewBox="0 0 36 36"><path  d="M2 25h32L18 9 2 25Z"/></svg>
        </button>
        <div class="js-vote-count flex--item d-flex fd-column ai-center fc-black-500 fs-title"
             itemprop="upvoteCount"
             data-value="9">
            9
        </div>
        <button class="js-vote-down-btn flex--item s-btn s-btn__unset c-pointer "
                data-controller="s-tooltip"
                data-s-tooltip-placement="right"
                title="This answer is not useful"
                aria-pressed="false"
                aria-label="Down vote"
                data-selected-classes="fc-theme-primary"
                data-unselected-classes="">
            <svg aria-hidden="true" class="svg-icon iconArrowDownLg" width="36" height="36"  viewBox="0 0 36 36"><path  d="M2 11h32L18 27 2 11Z"/></svg>
        </button>


        
<button class="js-saves-btn s-btn s-btn__unset c-pointer py4"
        id="saves-btn-18843388"
        data-controller="s-tooltip"
        data-s-tooltip-placement="right"
        data-s-popover-placement=""
        title="Save this answer."
        aria-pressed="false"
        data-post-id="18843388"
        data-post-type-id="2"
        data-user-privilege-for-post-click="0"
        aria-controls=""
        data-s-popover-auto-show="false"
>
    <svg aria-hidden="true" class="fc-theme-primary-500 js-saves-btn-selected d-none svg-icon iconBookmark" width="18" height="18"  viewBox="0 0 18 18"><path  d="M3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4-6 4Z"/></svg>
    <svg aria-hidden="true" class="js-saves-btn-unselected svg-icon iconBookmarkAlt" width="18" height="18"  viewBox="0 0 18 18"><path  d="m9 10.6 4 2.66V3H5v10.26l4-2.66ZM3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4-6 4Z"/></svg>
</button>







            <div class="js-accepted-answer-indicator flex--item fc-green-700 py6 mtn8 d-none" data-s-tooltip-placement="right" title="Loading when this answer was accepted&#x2026;" tabindex="0" role="note" aria-label="Accepted">
                <div class="ta-center">
                    <svg aria-hidden="true" class="svg-icon iconCheckmarkLg" width="36" height="36"  viewBox="0 0 36 36"><path  d="m6 14 8 8L30 6v8L14 30l-8-8v-8Z"/></svg>
                </div>
            </div>

    
        <a class="js-post-issue flex--item s-btn s-btn__unset c-pointer py6 mx-auto" href="/posts/18843388/timeline" data-shortcut="T" data-ks-title="timeline" data-controller="s-tooltip" data-s-tooltip-placement="right" title="Show activity on this post." aria-label="Timeline"><svg aria-hidden="true" class="mln2 mr0 svg-icon iconHistory" width="19" height="18"  viewBox="0 0 19 18"><path  d="M3 9a8 8 0 1 1 3.73 6.77L8.2 14.3A6 6 0 1 0 5 9l3.01-.01-4 4-4-4h3L3 9Zm7-4h1.01L11 9.36l3.22 2.1-.6.93L10 10V5Z"/></svg></a>

</div>

        </div>

        

<div class="answercell post-layout--right">
    
    <div class="s-prose js-post-body" itemprop="text">
<p>This Will Add Clear Button On Jquery Calender That Will Clear Date. </p>

<pre><code> $("#txtDOJ").datepicker({
     showButtonPanel: true,
     closeText: 'Clear',
     onClose: function (dateText, inst) {
         if ($(window.event.srcElement).hasClass('ui-datepicker-close')) {
             document.getElementById(this.id).value = '';
         }
     }
 });
</code></pre>
    </div>
    <div class="mt24">
        <div class="d-flex fw-wrap ai-start jc-end gs8 gsy">
            <time itemprop="dateCreated" datetime="2013-09-17T07:06:52"></time>
            <div class="flex--item mr16" style="flex: 1 1 100px;">
                


<div class="js-post-menu pt2" data-post-id="18843388" data-post-type-id="2">

    <div class="d-flex gs8 s-anchors s-anchors__muted fw-wrap">

            <div class="flex--item">
                <a href="/a/18843388"
                   rel="nofollow"
                   itemprop="url"
                   class="js-share-link js-gps-track"
                   title="Short permalink to this answer"
                   data-gps-track="post.click({ item: 2, priv: 0, post_type: 2 })"
                   data-controller="se-share-sheet"
                   data-se-share-sheet-title="Share a link to this answer"
                   data-se-share-sheet-subtitle=""
                   data-se-share-sheet-post-type="answer"
                   data-se-share-sheet-social="facebook twitter devto"
                   data-se-share-sheet-location="2"
                   data-se-share-sheet-license-url="https%3a%2f%2fcreativecommons.org%2flicenses%2fby-sa%2f3.0%2f"
                   data-se-share-sheet-license-name="CC BY-SA 3.0"
                   data-s-popover-placement="bottom-start">Share</a>
            </div>



            <div class="flex--item">
                <button type="button"
                        id="btnFollowPost-18843388" class="s-btn s-btn__link js-follow-post js-follow-answer js-gps-track"
                        data-gps-track="post.click({ item: 14, priv: 0, post_type: 2 })"
                        data-controller="s-tooltip " data-s-tooltip-placement="bottom"
                        data-s-popover-placement="bottom" aria-controls=""
                        title="Follow this answer to receive notifications">
                    Follow
                </button>
            </div>






    </div>
    <div class="js-menu-popup-container"></div>
</div>
            </div>
            <div class="post-signature flex--item fl0">
<div class="user-info user-hover">
    <div class="user-action-time">
        <a href="/posts/18843388/revisions" title="show all edits to this post"
                         class="js-gps-track"
                         data-gps-track="post.click({ item: 4, priv: 0, post_type: 2 })">edited <span title='2015-08-05 03:44:46Z' class='relativetime'>Aug 5, 2015 at 3:44</span></a>
    </div>
    <div class="user-gravatar32">
        <a href="/users/1203805/userlond"><div class="gravatar-wrapper-32"><img src="https://www.gravatar.com/avatar/2b39c3d054b1ff5946a64b397bb229ff?s=64&amp;d=identicon&amp;r=PG" alt="userlond&#39;s user avatar" width="32" height="32" class="bar-sm"></div></a>
    </div>
    <div class="user-details">
        <a href="/users/1203805/userlond">userlond</a>
        <div class="-flair">
            <span class="reputation-score" title="reputation score " dir="ltr">3,592</span><span title="2 gold badges" aria-hidden="true"><span class="badge1"></span><span class="badgecount">2</span></span><span class="v-visible-sr">2 gold badges</span><span title="34 silver badges" aria-hidden="true"><span class="badge2"></span><span class="badgecount">34</span></span><span class="v-visible-sr">34 silver badges</span><span title="52 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">52</span></span><span class="v-visible-sr">52 bronze badges</span>
        </div>
    </div>
</div>
            </div>


            <div class="post-signature flex--item fl0">
                <div class="user-info ">
    <div class="user-action-time">
        answered <span title='2013-09-17 07:06:52Z' class='relativetime'>Sep 17, 2013 at 7:06</span>
    </div>
    <div class="user-gravatar32">
        <a href="/users/1986519/sohaib"><div class="gravatar-wrapper-32"><img src="https://www.gravatar.com/avatar/3690723806113fc75c4851e73f7b1279?s=64&amp;d=identicon&amp;r=PG" alt="sohaib&#39;s user avatar" width="32" height="32" class="bar-sm"></div></a>
    </div>
    <div class="user-details" itemprop="author" itemscope itemtype="http://schema.org/Person">
        <a href="/users/1986519/sohaib">sohaib</a><span class="d-none" itemprop="name">sohaib</span>
        <div class="-flair">
            <span class="reputation-score" title="reputation score " dir="ltr">837</span><span title="1 gold badge" aria-hidden="true"><span class="badge1"></span><span class="badgecount">1</span></span><span class="v-visible-sr">1 gold badge</span><span title="12 silver badges" aria-hidden="true"><span class="badge2"></span><span class="badgecount">12</span></span><span class="v-visible-sr">12 silver badges</span><span title="9 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">9</span></span><span class="v-visible-sr">9 bronze badges</span>
        </div>
    </div>
</div>


            </div>
        </div>
        
    
    </div>
    
</div>




            <span class="d-none" itemprop="commentCount">0</span> 
    <div class="post-layout--right js-post-comments-component">
        <div id="comments-18843388" class="comments js-comments-container bt bc-black-075 mt12  dno" data-post-id="18843388" data-min-length="15">
            <ul class="comments-list js-comments-list"
                    data-remaining-comments-count="0"
                    data-canpost="false"
                    data-cansee="true"
                    data-comments-unavailable="false"
                    data-addlink-disabled="true">

            </ul>
	    </div>

        <div id="comments-link-18843388" data-rep=50 data-anon=true>
                    <a class="js-add-link comments-link disabled-link" title="Use comments to ask for more information or suggest improvements. Avoid comments like &#x201C;&#x2B;1&#x201D; or &#x201C;thanks&#x201D;."  href="#" role="button">Add a comment</a>
                <span class="js-link-separator dno">&nbsp;|&nbsp;</span>
            <a class="js-show-link comments-link dno" title="Expand to show all comments on this post" href=# onclick="" role="button"></a>
        </div>         
    </div>
    </div>
</div>

<div class="js-zone-container zone-container-main">
    <div id="dfp-smlb" class="everyonelovesstackoverflow everyoneloves__mid-second-leaderboard everyoneloves__leaderboard"></div>
		<div class="js-report-ad-button-container " style="width: 728px"></div>
</div>
                                        
<a name="13812862"></a>
<div id="answer-13812862" class="answer js-answer" data-answerid="13812862" data-parentid="4917779" data-score="6" data-position-on-page="4" data-highest-scored="0" data-question-has-accepted-highest-score="1"  itemprop="suggestedAnswer" itemscope itemtype="https://schema.org/Answer">
    <div class="post-layout">
        <div class="votecell post-layout--left">
            <div class="js-voting-container d-flex jc-center fd-column ai-stretch gs4 fc-black-200" data-post-id="13812862">
        <button class="js-vote-up-btn flex--item s-btn s-btn__unset c-pointer "
                data-controller="s-tooltip"
                data-s-tooltip-placement="right"
                title="This answer is useful"
                aria-pressed="false"
                aria-label="Up vote"
                data-selected-classes="fc-theme-primary"
                data-unselected-classes="">
            <svg aria-hidden="true" class="svg-icon iconArrowUpLg" width="36" height="36"  viewBox="0 0 36 36"><path  d="M2 25h32L18 9 2 25Z"/></svg>
        </button>
        <div class="js-vote-count flex--item d-flex fd-column ai-center fc-black-500 fs-title"
             itemprop="upvoteCount"
             data-value="6">
            6
        </div>
        <button class="js-vote-down-btn flex--item s-btn s-btn__unset c-pointer "
                data-controller="s-tooltip"
                data-s-tooltip-placement="right"
                title="This answer is not useful"
                aria-pressed="false"
                aria-label="Down vote"
                data-selected-classes="fc-theme-primary"
                data-unselected-classes="">
            <svg aria-hidden="true" class="svg-icon iconArrowDownLg" width="36" height="36"  viewBox="0 0 36 36"><path  d="M2 11h32L18 27 2 11Z"/></svg>
        </button>


        
<button class="js-saves-btn s-btn s-btn__unset c-pointer py4"
        id="saves-btn-13812862"
        data-controller="s-tooltip"
        data-s-tooltip-placement="right"
        data-s-popover-placement=""
        title="Save this answer."
        aria-pressed="false"
        data-post-id="13812862"
        data-post-type-id="2"
        data-user-privilege-for-post-click="0"
        aria-controls=""
        data-s-popover-auto-show="false"
>
    <svg aria-hidden="true" class="fc-theme-primary-500 js-saves-btn-selected d-none svg-icon iconBookmark" width="18" height="18"  viewBox="0 0 18 18"><path  d="M3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4-6 4Z"/></svg>
    <svg aria-hidden="true" class="js-saves-btn-unselected svg-icon iconBookmarkAlt" width="18" height="18"  viewBox="0 0 18 18"><path  d="m9 10.6 4 2.66V3H5v10.26l4-2.66ZM3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4-6 4Z"/></svg>
</button>







            <div class="js-accepted-answer-indicator flex--item fc-green-700 py6 mtn8 d-none" data-s-tooltip-placement="right" title="Loading when this answer was accepted&#x2026;" tabindex="0" role="note" aria-label="Accepted">
                <div class="ta-center">
                    <svg aria-hidden="true" class="svg-icon iconCheckmarkLg" width="36" height="36"  viewBox="0 0 36 36"><path  d="m6 14 8 8L30 6v8L14 30l-8-8v-8Z"/></svg>
                </div>
            </div>

    
        <a class="js-post-issue flex--item s-btn s-btn__unset c-pointer py6 mx-auto" href="/posts/13812862/timeline" data-shortcut="T" data-ks-title="timeline" data-controller="s-tooltip" data-s-tooltip-placement="right" title="Show activity on this post." aria-label="Timeline"><svg aria-hidden="true" class="mln2 mr0 svg-icon iconHistory" width="19" height="18"  viewBox="0 0 19 18"><path  d="M3 9a8 8 0 1 1 3.73 6.77L8.2 14.3A6 6 0 1 0 5 9l3.01-.01-4 4-4-4h3L3 9Zm7-4h1.01L11 9.36l3.22 2.1-.6.93L10 10V5Z"/></svg></a>

</div>

        </div>

        

<div class="answercell post-layout--right">
    
    <div class="s-prose js-post-body" itemprop="text">
<ol>
<li><p>Change the Done label to Clear and add code to clear</p>
<pre><code>$(document).ready(function () {
    $(&quot;#startdate&quot;).datepicker({
        showOn: 'both',
        buttonImageOnly: true,
        buttonImage: &quot;css/images/calendar.gif&quot;,
        showButtonPanel: true,
        closeText: 'Clear',
        onClose: function (dateText, inst) {
            $(this).val('');
        }
    });
});
</code></pre>
</li>
<li><p>Add Clear button to the calendar (pros: users who are used to standard jQuery-UI Calendar won't confuse the Clear button for Close)</p>
<pre><code>function addClearBtnToCalendar(inst) {
    setTimeout(function () {
        var buttonPane = $(inst).datepicker(&quot;widget&quot;)
            .find(&quot;.ui-datepicker-buttonpane&quot;);
        var btn = $('&lt;button class=&quot;ui-datepicker-current'
             + ' ui-state-default ui-priority-secondary ui-corner-all&quot;'
             + ' type=&quot;button&quot;&gt;Clear&lt;/button&gt;');
        btn.unbind(&quot;click&quot;).bind(&quot;click&quot;, function () {
             $.datepicker._clearDate(inst.input);
        });
        btn.appendTo(buttonPane);
    }, 1);
}

$(&quot;#termdate&quot;).datepicker({
    showOn: 'both',
    buttonImageOnly: true,
    buttonImage: &quot;css/images/calendar.gif&quot;,
    showButtonPanel: true,
    beforeShow: function (input, inst) {
        addClearBtnToCalendar(inst);
    },
    onChangeMonthYear: function (year, month, inst) {
        addClearBtnToCalendar(inst);
    }
});
</code></pre>
</li>
</ol>
    </div>
    <div class="mt24">
        <div class="d-flex fw-wrap ai-start jc-end gs8 gsy">
            <time itemprop="dateCreated" datetime="2012-12-11T02:47:14"></time>
            <div class="flex--item mr16" style="flex: 1 1 100px;">
                


<div class="js-post-menu pt2" data-post-id="13812862" data-post-type-id="2">

    <div class="d-flex gs8 s-anchors s-anchors__muted fw-wrap">

            <div class="flex--item">
                <a href="/a/13812862"
                   rel="nofollow"
                   itemprop="url"
                   class="js-share-link js-gps-track"
                   title="Short permalink to this answer"
                   data-gps-track="post.click({ item: 2, priv: 0, post_type: 2 })"
                   data-controller="se-share-sheet"
                   data-se-share-sheet-title="Share a link to this answer"
                   data-se-share-sheet-subtitle=""
                   data-se-share-sheet-post-type="answer"
                   data-se-share-sheet-social="facebook twitter devto"
                   data-se-share-sheet-location="2"
                   data-se-share-sheet-license-url="https%3a%2f%2fcreativecommons.org%2flicenses%2fby-sa%2f4.0%2f"
                   data-se-share-sheet-license-name="CC BY-SA 4.0"
                   data-s-popover-placement="bottom-start">Share</a>
            </div>



            <div class="flex--item">
                <button type="button"
                        id="btnFollowPost-13812862" class="s-btn s-btn__link js-follow-post js-follow-answer js-gps-track"
                        data-gps-track="post.click({ item: 14, priv: 0, post_type: 2 })"
                        data-controller="s-tooltip " data-s-tooltip-placement="bottom"
                        data-s-popover-placement="bottom" aria-controls=""
                        title="Follow this answer to receive notifications">
                    Follow
                </button>
            </div>






    </div>
    <div class="js-menu-popup-container"></div>
</div>
            </div>
            <div class="post-signature flex--item fl0">
<div class="user-info ">
    <div class="user-action-time">
        <a href="/posts/13812862/revisions" title="show all edits to this post"
                         class="js-gps-track"
                         data-gps-track="post.click({ item: 4, priv: 0, post_type: 2 })">edited <span title='2021-04-19 12:18:59Z' class='relativetime'>Apr 19, 2021 at 12:18</span></a>
    </div>
    <div class="user-gravatar32">
        <a href="/users/1435647/vasiliy-zverev"><div class="gravatar-wrapper-32"><img src="https://i.stack.imgur.com/ibhCC.jpg?s=64&amp;g=1" alt="Vasiliy Zverev&#39;s user avatar" width="32" height="32" class="bar-sm"></div></a>
    </div>
    <div class="user-details">
        <a href="/users/1435647/vasiliy-zverev">Vasiliy Zverev</a>
        <div class="-flair">
            <span class="reputation-score" title="reputation score " dir="ltr">601</span><span title="5 silver badges" aria-hidden="true"><span class="badge2"></span><span class="badgecount">5</span></span><span class="v-visible-sr">5 silver badges</span><span title="10 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">10</span></span><span class="v-visible-sr">10 bronze badges</span>
        </div>
    </div>
</div>
            </div>


            <div class="post-signature flex--item fl0">
                <div class="user-info user-hover">
    <div class="user-action-time">
        answered <span title='2012-12-11 02:47:14Z' class='relativetime'>Dec 11, 2012 at 2:47</span>
    </div>
    <div class="user-gravatar32">
        <a href="/users/1843969/behrang-bina"><div class="gravatar-wrapper-32"><img src="https://www.gravatar.com/avatar/0dad4cf97a96c7f77c9f675ff9fba848?s=64&amp;d=identicon&amp;r=PG" alt="BehranG BinA&#39;s user avatar" width="32" height="32" class="bar-sm"></div></a>
    </div>
    <div class="user-details" itemprop="author" itemscope itemtype="http://schema.org/Person">
        <a href="/users/1843969/behrang-bina">BehranG BinA</a><span class="d-none" itemprop="name">BehranG BinA</span>
        <div class="-flair">
            <span class="reputation-score" title="reputation score " dir="ltr">504</span><span title="1 gold badge" aria-hidden="true"><span class="badge1"></span><span class="badgecount">1</span></span><span class="v-visible-sr">1 gold badge</span><span title="5 silver badges" aria-hidden="true"><span class="badge2"></span><span class="badgecount">5</span></span><span class="v-visible-sr">5 silver badges</span><span title="9 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">9</span></span><span class="v-visible-sr">9 bronze badges</span>
        </div>
    </div>
</div>


            </div>
        </div>
        
    
    </div>
    
</div>




            <span class="d-none" itemprop="commentCount">1</span> 
    <div class="post-layout--right js-post-comments-component">
        <div id="comments-13812862" class="comments js-comments-container bt bc-black-075 mt12 " data-post-id="13812862" data-min-length="15">
            <ul class="comments-list js-comments-list"
                    data-remaining-comments-count="0"
                    data-canpost="false"
                    data-cansee="true"
                    data-comments-unavailable="false"
                    data-addlink-disabled="true">

                        <li id="comment-118659373" class="comment js-comment " data-comment-id="118659373" data-comment-owner-id="1435647" data-comment-score="0">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-score js-comment-edit-hide">
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">2. The Clear button disappears when you change a month or click Today.</span>
                
                <div class="d-inline-flex ai-center">
&ndash;&nbsp;<a href="/users/1435647/vasiliy-zverev"
                                title="601 reputation"
                                class="comment-user">Vasiliy Zverev</a>
                </div>
                <span class="comment-date" dir="ltr"><span title='2021-04-16 18:25:45Z, License: CC BY-SA 4.0' class='relativetime-clean'>Apr 16, 2021 at 18:25</span></span>
            </div>
        </div>
    </li>

            </ul>
	    </div>

        <div id="comments-link-13812862" data-rep=50 data-anon=true>
                    <a class="js-add-link comments-link disabled-link" title="Use comments to ask for more information or suggest improvements. Avoid comments like &#x201C;&#x2B;1&#x201D; or &#x201C;thanks&#x201D;."  href="#" role="button">Add a comment</a>
                <span class="js-link-separator dno">&nbsp;|&nbsp;</span>
            <a class="js-show-link comments-link dno" title="Expand to show all comments on this post" href=# onclick="" role="button"></a>
        </div>         
    </div>
    </div>
</div>

                                        
<a name="12649929"></a>
<div id="answer-12649929" class="answer js-answer" data-answerid="12649929" data-parentid="4917779" data-score="3" data-position-on-page="5" data-highest-scored="0" data-question-has-accepted-highest-score="1"  itemprop="suggestedAnswer" itemscope itemtype="https://schema.org/Answer">
    <div class="post-layout">
        <div class="votecell post-layout--left">
            <div class="js-voting-container d-flex jc-center fd-column ai-stretch gs4 fc-black-200" data-post-id="12649929">
        <button class="js-vote-up-btn flex--item s-btn s-btn__unset c-pointer "
                data-controller="s-tooltip"
                data-s-tooltip-placement="right"
                title="This answer is useful"
                aria-pressed="false"
                aria-label="Up vote"
                data-selected-classes="fc-theme-primary"
                data-unselected-classes="">
            <svg aria-hidden="true" class="svg-icon iconArrowUpLg" width="36" height="36"  viewBox="0 0 36 36"><path  d="M2 25h32L18 9 2 25Z"/></svg>
        </button>
        <div class="js-vote-count flex--item d-flex fd-column ai-center fc-black-500 fs-title"
             itemprop="upvoteCount"
             data-value="3">
            3
        </div>
        <button class="js-vote-down-btn flex--item s-btn s-btn__unset c-pointer "
                data-controller="s-tooltip"
                data-s-tooltip-placement="right"
                title="This answer is not useful"
                aria-pressed="false"
                aria-label="Down vote"
                data-selected-classes="fc-theme-primary"
                data-unselected-classes="">
            <svg aria-hidden="true" class="svg-icon iconArrowDownLg" width="36" height="36"  viewBox="0 0 36 36"><path  d="M2 11h32L18 27 2 11Z"/></svg>
        </button>


        
<button class="js-saves-btn s-btn s-btn__unset c-pointer py4"
        id="saves-btn-12649929"
        data-controller="s-tooltip"
        data-s-tooltip-placement="right"
        data-s-popover-placement=""
        title="Save this answer."
        aria-pressed="false"
        data-post-id="12649929"
        data-post-type-id="2"
        data-user-privilege-for-post-click="0"
        aria-controls=""
        data-s-popover-auto-show="false"
>
    <svg aria-hidden="true" class="fc-theme-primary-500 js-saves-btn-selected d-none svg-icon iconBookmark" width="18" height="18"  viewBox="0 0 18 18"><path  d="M3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4-6 4Z"/></svg>
    <svg aria-hidden="true" class="js-saves-btn-unselected svg-icon iconBookmarkAlt" width="18" height="18"  viewBox="0 0 18 18"><path  d="m9 10.6 4 2.66V3H5v10.26l4-2.66ZM3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4-6 4Z"/></svg>
</button>







            <div class="js-accepted-answer-indicator flex--item fc-green-700 py6 mtn8 d-none" data-s-tooltip-placement="right" title="Loading when this answer was accepted&#x2026;" tabindex="0" role="note" aria-label="Accepted">
                <div class="ta-center">
                    <svg aria-hidden="true" class="svg-icon iconCheckmarkLg" width="36" height="36"  viewBox="0 0 36 36"><path  d="m6 14 8 8L30 6v8L14 30l-8-8v-8Z"/></svg>
                </div>
            </div>

    
        <a class="js-post-issue flex--item s-btn s-btn__unset c-pointer py6 mx-auto" href="/posts/12649929/timeline" data-shortcut="T" data-ks-title="timeline" data-controller="s-tooltip" data-s-tooltip-placement="right" title="Show activity on this post." aria-label="Timeline"><svg aria-hidden="true" class="mln2 mr0 svg-icon iconHistory" width="19" height="18"  viewBox="0 0 19 18"><path  d="M3 9a8 8 0 1 1 3.73 6.77L8.2 14.3A6 6 0 1 0 5 9l3.01-.01-4 4-4-4h3L3 9Zm7-4h1.01L11 9.36l3.22 2.1-.6.93L10 10V5Z"/></svg></a>

</div>

        </div>

        

<div class="answercell post-layout--right">
    
    <div class="s-prose js-post-body" itemprop="text">
<p>I was going through this same problem, that is, no option available to empty the datepicker. I then found this super useful comment with a sweet piece of code posted <a href="http://bugs.jqueryui.com/ticket/3999#comment:21" rel="nofollow">here</a>:</p>

<p>One quick way you can add the clear feature even on read only fields is to add the following code to your existing datepicker control:</p>

<pre><code>}).keyup(function(e) {
    if(e.keyCode == 8 || e.keyCode == 46) {
        $.datepicker._clearDate(this);
    }
});
</code></pre>

<p>This will enable people to highlight (which they can even on Read Only fields) and then use the backspace or delete to remove the date using the internal <code>_clearDate</code> function.</p>
    </div>
    <div class="mt24">
        <div class="d-flex fw-wrap ai-start jc-end gs8 gsy">
            <time itemprop="dateCreated" datetime="2012-09-29T04:32:33"></time>
            <div class="flex--item mr16" style="flex: 1 1 100px;">
                


<div class="js-post-menu pt2" data-post-id="12649929" data-post-type-id="2">

    <div class="d-flex gs8 s-anchors s-anchors__muted fw-wrap">

            <div class="flex--item">
                <a href="/a/12649929"
                   rel="nofollow"
                   itemprop="url"
                   class="js-share-link js-gps-track"
                   title="Short permalink to this answer"
                   data-gps-track="post.click({ item: 2, priv: 0, post_type: 2 })"
                   data-controller="se-share-sheet"
                   data-se-share-sheet-title="Share a link to this answer"
                   data-se-share-sheet-subtitle=""
                   data-se-share-sheet-post-type="answer"
                   data-se-share-sheet-social="facebook twitter devto"
                   data-se-share-sheet-location="2"
                   data-se-share-sheet-license-url="https%3a%2f%2fcreativecommons.org%2flicenses%2fby-sa%2f3.0%2f"
                   data-se-share-sheet-license-name="CC BY-SA 3.0"
                   data-s-popover-placement="bottom-start">Share</a>
            </div>



            <div class="flex--item">
                <button type="button"
                        id="btnFollowPost-12649929" class="s-btn s-btn__link js-follow-post js-follow-answer js-gps-track"
                        data-gps-track="post.click({ item: 14, priv: 0, post_type: 2 })"
                        data-controller="s-tooltip " data-s-tooltip-placement="bottom"
                        data-s-popover-placement="bottom" aria-controls=""
                        title="Follow this answer to receive notifications">
                    Follow
                </button>
            </div>






    </div>
    <div class="js-menu-popup-container"></div>
</div>
            </div>


            <div class="post-signature flex--item fl0">
                <div class="user-info user-hover">
    <div class="user-action-time">
        answered <span title='2012-09-29 04:32:33Z' class='relativetime'>Sep 29, 2012 at 4:32</span>
    </div>
    <div class="user-gravatar32">
        <a href="/users/114029/leniel-maccaferri"><div class="gravatar-wrapper-32"><img src="https://www.gravatar.com/avatar/296f29c92c1561c79e034df64dc19f56?s=64&amp;d=identicon&amp;r=PG" alt="Leniel Maccaferri&#39;s user avatar" width="32" height="32" class="bar-sm"></div></a>
    </div>
    <div class="user-details" itemprop="author" itemscope itemtype="http://schema.org/Person">
        <a href="/users/114029/leniel-maccaferri">Leniel Maccaferri</a><span class="d-none" itemprop="name">Leniel Maccaferri</span>
        <div class="-flair">
            <span class="reputation-score" title="reputation score 99,021" dir="ltr">99k</span><span title="45 gold badges" aria-hidden="true"><span class="badge1"></span><span class="badgecount">45</span></span><span class="v-visible-sr">45 gold badges</span><span title="363 silver badges" aria-hidden="true"><span class="badge2"></span><span class="badgecount">363</span></span><span class="v-visible-sr">363 silver badges</span><span title="469 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">469</span></span><span class="v-visible-sr">469 bronze badges</span>
        </div>
    </div>
</div>


            </div>
        </div>
        
    
    </div>
    
</div>




            <span class="d-none" itemprop="commentCount">2</span> 
    <div class="post-layout--right js-post-comments-component">
        <div id="comments-12649929" class="comments js-comments-container bt bc-black-075 mt12 " data-post-id="12649929" data-min-length="15">
            <ul class="comments-list js-comments-list"
                    data-remaining-comments-count="0"
                    data-canpost="false"
                    data-cansee="true"
                    data-comments-unavailable="false"
                    data-addlink-disabled="true">

                        <li id="comment-18819908" class="comment js-comment " data-comment-id="18819908" data-comment-owner-id="457500" data-comment-score="1">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-score js-comment-edit-hide">
                    <span title="number of &#x27;useful comment&#x27; votes received"
                            class="cool">1</span>
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">That&#39;s ok if you ignore the mobile/tablet users</span>
                
                <div class="d-inline-flex ai-center">
&ndash;&nbsp;<a href="/users/457500/mathieu"
                                title="4,393 reputation"
                                class="comment-user">Mathieu</a>
                </div>
                <span class="comment-date" dir="ltr"><span title='2012-12-04 13:55:17Z, License: CC BY-SA 3.0' class='relativetime-clean'>Dec 4, 2012 at 13:55</span></span>
            </div>
        </div>
    </li>
    <li id="comment-24984940" class="comment js-comment " data-comment-id="24984940" data-comment-owner-id="1767377" data-comment-score="1">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-score js-comment-edit-hide">
                    <span title="number of &#x27;useful comment&#x27; votes received"
                            class="cool">1</span>
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">In my testing, using the backspace button like this in a readOnly field triggers the back button in chrome and ie. However, the delete works great. You still get +1 because the read only functionality isn&#39;t part of the question asked.</span>
                
                <div class="d-inline-flex ai-center">
&ndash;&nbsp;<a href="/users/1767377/syntaxrules"
                                title="1,988 reputation"
                                class="comment-user">SyntaxRules</a>
                </div>
                <span class="comment-date" dir="ltr"><span title='2013-06-21 18:40:25Z, License: CC BY-SA 3.0' class='relativetime-clean'>Jun 21, 2013 at 18:40</span></span>
            </div>
        </div>
    </li>

            </ul>
	    </div>

        <div id="comments-link-12649929" data-rep=50 data-anon=true>
                    <a class="js-add-link comments-link disabled-link" title="Use comments to ask for more information or suggest improvements. Avoid comments like &#x201C;&#x2B;1&#x201D; or &#x201C;thanks&#x201D;."  href="#" role="button">Add a comment</a>
                <span class="js-link-separator dno">&nbsp;|&nbsp;</span>
            <a class="js-show-link comments-link dno" title="Expand to show all comments on this post" href=# onclick="" role="button"></a>
        </div>         
    </div>
    </div>
</div>

                                        
<a name="16786214"></a>
<div id="answer-16786214" class="answer js-answer" data-answerid="16786214" data-parentid="4917779" data-score="0" data-position-on-page="6" data-highest-scored="0" data-question-has-accepted-highest-score="1"  itemprop="suggestedAnswer" itemscope itemtype="https://schema.org/Answer">
    <div class="post-layout">
        <div class="votecell post-layout--left">
            <div class="js-voting-container d-flex jc-center fd-column ai-stretch gs4 fc-black-200" data-post-id="16786214">
        <button class="js-vote-up-btn flex--item s-btn s-btn__unset c-pointer "
                data-controller="s-tooltip"
                data-s-tooltip-placement="right"
                title="This answer is useful"
                aria-pressed="false"
                aria-label="Up vote"
                data-selected-classes="fc-theme-primary"
                data-unselected-classes="">
            <svg aria-hidden="true" class="svg-icon iconArrowUpLg" width="36" height="36"  viewBox="0 0 36 36"><path  d="M2 25h32L18 9 2 25Z"/></svg>
        </button>
        <div class="js-vote-count flex--item d-flex fd-column ai-center fc-black-500 fs-title"
             itemprop="upvoteCount"
             data-value="0">
            0
        </div>
        <button class="js-vote-down-btn flex--item s-btn s-btn__unset c-pointer "
                data-controller="s-tooltip"
                data-s-tooltip-placement="right"
                title="This answer is not useful"
                aria-pressed="false"
                aria-label="Down vote"
                data-selected-classes="fc-theme-primary"
                data-unselected-classes="">
            <svg aria-hidden="true" class="svg-icon iconArrowDownLg" width="36" height="36"  viewBox="0 0 36 36"><path  d="M2 11h32L18 27 2 11Z"/></svg>
        </button>


        
<button class="js-saves-btn s-btn s-btn__unset c-pointer py4"
        id="saves-btn-16786214"
        data-controller="s-tooltip"
        data-s-tooltip-placement="right"
        data-s-popover-placement=""
        title="Save this answer."
        aria-pressed="false"
        data-post-id="16786214"
        data-post-type-id="2"
        data-user-privilege-for-post-click="0"
        aria-controls=""
        data-s-popover-auto-show="false"
>
    <svg aria-hidden="true" class="fc-theme-primary-500 js-saves-btn-selected d-none svg-icon iconBookmark" width="18" height="18"  viewBox="0 0 18 18"><path  d="M3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4-6 4Z"/></svg>
    <svg aria-hidden="true" class="js-saves-btn-unselected svg-icon iconBookmarkAlt" width="18" height="18"  viewBox="0 0 18 18"><path  d="m9 10.6 4 2.66V3H5v10.26l4-2.66ZM3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4-6 4Z"/></svg>
</button>







            <div class="js-accepted-answer-indicator flex--item fc-green-700 py6 mtn8 d-none" data-s-tooltip-placement="right" title="Loading when this answer was accepted&#x2026;" tabindex="0" role="note" aria-label="Accepted">
                <div class="ta-center">
                    <svg aria-hidden="true" class="svg-icon iconCheckmarkLg" width="36" height="36"  viewBox="0 0 36 36"><path  d="m6 14 8 8L30 6v8L14 30l-8-8v-8Z"/></svg>
                </div>
            </div>

    
        <a class="js-post-issue flex--item s-btn s-btn__unset c-pointer py6 mx-auto" href="/posts/16786214/timeline" data-shortcut="T" data-ks-title="timeline" data-controller="s-tooltip" data-s-tooltip-placement="right" title="Show activity on this post." aria-label="Timeline"><svg aria-hidden="true" class="mln2 mr0 svg-icon iconHistory" width="19" height="18"  viewBox="0 0 19 18"><path  d="M3 9a8 8 0 1 1 3.73 6.77L8.2 14.3A6 6 0 1 0 5 9l3.01-.01-4 4-4-4h3L3 9Zm7-4h1.01L11 9.36l3.22 2.1-.6.93L10 10V5Z"/></svg></a>

</div>

        </div>

        

<div class="answercell post-layout--right">
    
    <div class="s-prose js-post-body" itemprop="text">
<p>Here is the scoop</p>

<p>We can use default done button to bind a custom clear function.</p>

<pre><code>$("#date_picker").datepicker({minDate:myDate,dateFormat: 'yy-mm-dd',showButtonPanel:true,closeText:'Clear',
    beforeShow: function( input ) {
        setTimeout(function() {
        var clearButton = $(input )
            .datepicker( "widget" )
            .find( ".ui-datepicker-close" );
        clearButton.unbind("click").bind("click",function(){$.datepicker._clearDate( input );});
        }, 1 );
    }
}); 
</code></pre>

<p>Works like a charm. Cheers :);)</p>

<p>credits: Sébastien Renauld and BehranG BinA</p>
    </div>
    <div class="mt24">
        <div class="d-flex fw-wrap ai-start jc-end gs8 gsy">
            <time itemprop="dateCreated" datetime="2013-05-28T07:28:56"></time>
            <div class="flex--item mr16" style="flex: 1 1 100px;">
                


<div class="js-post-menu pt2" data-post-id="16786214" data-post-type-id="2">

    <div class="d-flex gs8 s-anchors s-anchors__muted fw-wrap">

            <div class="flex--item">
                <a href="/a/16786214"
                   rel="nofollow"
                   itemprop="url"
                   class="js-share-link js-gps-track"
                   title="Short permalink to this answer"
                   data-gps-track="post.click({ item: 2, priv: 0, post_type: 2 })"
                   data-controller="se-share-sheet"
                   data-se-share-sheet-title="Share a link to this answer"
                   data-se-share-sheet-subtitle=""
                   data-se-share-sheet-post-type="answer"
                   data-se-share-sheet-social="facebook twitter devto"
                   data-se-share-sheet-location="2"
                   data-se-share-sheet-license-url="https%3a%2f%2fcreativecommons.org%2flicenses%2fby-sa%2f3.0%2f"
                   data-se-share-sheet-license-name="CC BY-SA 3.0"
                   data-s-popover-placement="bottom-start">Share</a>
            </div>



            <div class="flex--item">
                <button type="button"
                        id="btnFollowPost-16786214" class="s-btn s-btn__link js-follow-post js-follow-answer js-gps-track"
                        data-gps-track="post.click({ item: 14, priv: 0, post_type: 2 })"
                        data-controller="s-tooltip " data-s-tooltip-placement="bottom"
                        data-s-popover-placement="bottom" aria-controls=""
                        title="Follow this answer to receive notifications">
                    Follow
                </button>
            </div>






    </div>
    <div class="js-menu-popup-container"></div>
</div>
            </div>


            <div class="post-signature flex--item fl0">
                <div class="user-info user-hover">
    <div class="user-action-time">
        answered <span title='2013-05-28 07:28:56Z' class='relativetime'>May 28, 2013 at 7:28</span>
    </div>
    <div class="user-gravatar32">
        <a href="/users/2427477/girish2040"><div class="gravatar-wrapper-32"><img src="https://www.gravatar.com/avatar/2e5e8dc8e1041b9f32fb95fd96cf6949?s=64&amp;d=identicon&amp;r=PG&amp;f=1" alt="girish2040&#39;s user avatar" width="32" height="32" class="bar-sm"></div></a>
    </div>
    <div class="user-details" itemprop="author" itemscope itemtype="http://schema.org/Person">
        <a href="/users/2427477/girish2040">girish2040</a><span class="d-none" itemprop="name">girish2040</span>
        <div class="-flair">
            <span class="reputation-score" title="reputation score " dir="ltr">91</span><span title="3 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">3</span></span><span class="v-visible-sr">3 bronze badges</span>
        </div>
    </div>
</div>


            </div>
        </div>
        
    
    </div>
    
</div>




            <span class="d-none" itemprop="commentCount">1</span> 
    <div class="post-layout--right js-post-comments-component">
        <div id="comments-16786214" class="comments js-comments-container bt bc-black-075 mt12 " data-post-id="16786214" data-min-length="15">
            <ul class="comments-list js-comments-list"
                    data-remaining-comments-count="0"
                    data-canpost="false"
                    data-cansee="true"
                    data-comments-unavailable="false"
                    data-addlink-disabled="true">

                        <li id="comment-24188902" class="comment js-comment " data-comment-id="24188902" data-comment-owner-id="2427477" data-comment-score="0">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-score js-comment-edit-hide">
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">@S&#233;bastien Renauld clear button will not be available if you shuffle months. checkout <a href="http://jsbin.com/ofare/451/edit" rel="nofollow noreferrer">link</a></span>
                
                <div class="d-inline-flex ai-center">
&ndash;&nbsp;<a href="/users/2427477/girish2040"
                                title="91 reputation"
                                class="comment-user">girish2040</a>
                </div>
                <span class="comment-date" dir="ltr"><span title='2013-05-28 07:43:40Z, License: CC BY-SA 3.0' class='relativetime-clean'>May 28, 2013 at 7:43</span></span>
            </div>
        </div>
    </li>

            </ul>
	    </div>

        <div id="comments-link-16786214" data-rep=50 data-anon=true>
                    <a class="js-add-link comments-link disabled-link" title="Use comments to ask for more information or suggest improvements. Avoid comments like &#x201C;&#x2B;1&#x201D; or &#x201C;thanks&#x201D;."  href="#" role="button">Add a comment</a>
                <span class="js-link-separator dno">&nbsp;|&nbsp;</span>
            <a class="js-show-link comments-link dno" title="Expand to show all comments on this post" href=# onclick="" role="button"></a>
        </div>         
    </div>
    </div>
</div>


                        <a name='new-answer'></a>
                            <form id="post-form" action="/questions/4917779/answer/submit" method="post" class="js-add-answer-component post-form">
                                <input type="hidden" id="post-id" value="4917779" />
                                <input type="hidden" id="qualityBanWarningShown" name="qualityBanWarningShown" value="false" />
                                <input type="hidden" name="referrer" value="" />
                                <h2 class="space" id="your-answer-header">
                                    Your Answer
                                </h2>
                                    

    <script>
        StackExchange.ifUsing("editor", function () {
            StackExchange.using("externalEditor", function () {
                StackExchange.using("snippets", function () {
                    StackExchange.snippets.init();
                });
            });
        }, "code-snippets");
    </script>


<script>
    StackExchange.ready(function() {
        var channelOptions = {
            tags: "".split(" "),
            id: "1"
        };
        initTagRenderer("".split(" "), "".split(" "), channelOptions);

        StackExchange.using("externalEditor", function() {
            // Have to fire editor after snippets, if snippets enabled
            if (StackExchange.settings.snippets.snippetsEnabled) {
                StackExchange.using("snippets", function() {
                    createEditor();
                });
            }
            else {
                createEditor();
            }
        });

        function createEditor() {
            StackExchange.prepareEditor({
                useStacksEditor: false,
                heartbeatType: 'answer',
                autoActivateHeartbeat: false,
                convertImagesToLinks: true,
                noModals: true,
                showLowRepImageUploadWarning: true,
                reputationToPostImages: 10,
                bindNavPrevention: true,
                postfix: "",
                imageUploader: {
                    brandingHtml: "Powered by \u003ca href=\"https://imgur.com/\"\u003e\u003csvg class=\"svg-icon\" width=\"50\" height=\"18\" viewBox=\"0 0 50 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"\u003e\u003ctitle\u003eImgur Logo\u003c/title\u003e\u003cpath d=\"M46.1709 9.17788C46.1709 8.26454 46.2665 7.94324 47.1084 7.58816C47.4091 7.46349 47.7169 7.36433 48.0099 7.26993C48.9099 6.97997 49.672 6.73443 49.672 5.93063C49.672 5.22043 48.9832 4.61182 48.1414 4.61182C47.4335 4.61182 46.7256 4.91628 46.0943 5.50789C45.7307 4.9328 45.2525 4.66231 44.6595 4.66231C43.6264 4.66231 43.1481 5.28821 43.1481 6.59048V11.9512C43.1481 13.2535 43.6264 13.8962 44.6595 13.8962C45.6924 13.8962 46.1709 13.2535 46.1709 11.9512V9.17788Z\"/\u003e\u003cpath d=\"M32.492 10.1419C32.492 12.6954 34.1182 14.0484 37.0451 14.0484C39.9723 14.0484 41.5985 12.6954 41.5985 10.1419V6.59049C41.5985 5.28821 41.1394 4.66232 40.1061 4.66232C39.0732 4.66232 38.5948 5.28821 38.5948 6.59049V9.60062C38.5948 10.8521 38.2696 11.5455 37.0451 11.5455C35.8209 11.5455 35.4954 10.8521 35.4954 9.60062V6.59049C35.4954 5.28821 35.0173 4.66232 34.0034 4.66232C32.9703 4.66232 32.492 5.28821 32.492 6.59049V10.1419Z\" /\u003e\u003cpath fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M25.6622 17.6335C27.8049 17.6335 29.3739 16.9402 30.2537 15.6379C30.8468 14.7755 30.9615 13.5579 30.9615 11.9512V6.59049C30.9615 5.28821 30.4833 4.66231 29.4502 4.66231C28.9913 4.66231 28.4555 4.94978 28.1109 5.50789C27.499 4.86533 26.7335 4.56087 25.7005 4.56087C23.1369 4.56087 21.0134 6.57349 21.0134 9.27932C21.0134 11.9852 23.003 13.913 25.3754 13.913C26.5612 13.913 27.4607 13.4902 28.1109 12.6616C28.1109 12.7229 28.1161 12.7799 28.121 12.8346C28.1256 12.8854 28.1301 12.9342 28.1301 12.983C28.1301 14.4373 27.2502 15.2321 25.777 15.2321C24.8349 15.2321 24.1352 14.9821 23.5661 14.7787C23.176 14.6393 22.8472 14.5218 22.5437 14.5218C21.7977 14.5218 21.2429 15.0123 21.2429 15.6887C21.2429 16.7375 22.9072 17.6335 25.6622 17.6335ZM24.1317 9.27932C24.1317 7.94324 24.9928 7.09766 26.1024 7.09766C27.2119 7.09766 28.0918 7.94324 28.0918 9.27932C28.0918 10.6321 27.2311 11.5116 26.1024 11.5116C24.9737 11.5116 24.1317 10.6491 24.1317 9.27932Z\"/\u003e\u003cpath d=\"M16.8045 11.9512C16.8045 13.2535 17.2637 13.8962 18.2965 13.8962C19.3298 13.8962 19.8079 13.2535 19.8079 11.9512V8.12928C19.8079 5.82936 18.4879 4.62866 16.4027 4.62866C15.1594 4.62866 14.279 4.98375 13.3609 5.88013C12.653 5.05154 11.6581 4.62866 10.3573 4.62866C9.34336 4.62866 8.57809 4.89931 7.9466 5.5079C7.58314 4.9328 7.10506 4.66232 6.51203 4.66232C5.47873 4.66232 5.00066 5.28821 5.00066 6.59049V11.9512C5.00066 13.2535 5.47873 13.8962 6.51203 13.8962C7.54479 13.8962 8.0232 13.2535 8.0232 11.9512V8.90741C8.0232 7.58817 8.44431 6.91179 9.53458 6.91179C10.5104 6.91179 10.893 7.58817 10.893 8.94108V11.9512C10.893 13.2535 11.3711 13.8962 12.4044 13.8962C13.4375 13.8962 13.9157 13.2535 13.9157 11.9512V8.90741C13.9157 7.58817 14.3365 6.91179 15.4269 6.91179C16.4027 6.91179 16.8045 7.58817 16.8045 8.94108V11.9512Z\"/\u003e\u003cpath d=\"M3.31675 6.59049C3.31675 5.28821 2.83866 4.66232 1.82471 4.66232C0.791758 4.66232 0.313354 5.28821 0.313354 6.59049V11.9512C0.313354 13.2535 0.791758 13.8962 1.82471 13.8962C2.85798 13.8962 3.31675 13.2535 3.31675 11.9512V6.59049Z\" /\u003e\u003cpath d=\"M1.87209 0.400291C0.843612 0.400291 0 1.1159 0 1.98861C0 2.87869 0.822846 3.57676 1.87209 3.57676C2.90056 3.57676 3.7234 2.87869 3.7234 1.98861C3.7234 1.1159 2.90056 0.400291 1.87209 0.400291Z\" fill=\"#1BB76E\"/\u003e\u003c/svg\u003e\u003c/a\u003e",
                    contentPolicyHtml: "User contributions licensed under \u003ca href=\"https://stackoverflow.com/help/licensing\"\u003eCC BY-SA\u003c/a\u003e \u003ca href=\"https://stackoverflow.com/legal/content-policy\"\u003e(content policy)\u003c/a\u003e",
                    allowUrls: true
                },
                onDemand: true,
                discardSelector: ".discard-answer",
                enableTables: true,
                isStacksEditorPreviewEnabled: false
                ,immediatelyShowMarkdownHelp:true,enableTables:true,enableSnippets:true
            });
                    }
    });
</script>
<div id="post-editor" class="post-editor js-post-editor">


        <div class="ps-relative">
            <div class="wmd-container mb8">
                <div id="wmd-button-bar" class="wmd-button-bar btr-sm"></div>
                <div class="js-stacks-validation">
                    <div class="ps-relative">
                        <textarea id="wmd-input"
                                  name="post-text"
                                  class="wmd-input s-input bar0 js-post-body-field"
                                  data-editor-type="wmd"
                                  data-post-type-id="2"
                                  cols="92" rows="15"
                                  aria-labelledby="your-answer-header"
                                  tabindex="101"
                                  data-min-length=""></textarea>
                    </div>
                    <div class="s-input-message mt4 d-none js-stacks-validation-message"></div>
                </div>
            </div>
        </div>

    <aside class="d-flex ai-start jc-space-between js-answer-help s-notice s-notice__warning pb0 pr4 pt4 mb8 d-none" role="status" aria-hidden="true">
    <div class="flex--item pt8">
        <p>Thanks for contributing an answer to Stack Overflow!</p><ul><li>Please be sure to <em>answer the question</em>. Provide details and share your research!</li></ul><p>But <em>avoid</em> …</p><ul><li>Asking for help, clarification, or responding to other answers.</li><li>Making statements based on opinion; back them up with references or personal experience.</li></ul><p>To learn more, see our <a href="/help/how-to-answer">tips on writing great answers</a>.</p>
    </div>
    <button class="flex--item js-answer-help-close-btn s-btn s-btn__muted fc-dark">
        <svg aria-hidden="true" class="svg-icon iconClear" width="18" height="18"  viewBox="0 0 18 18"><path  d="M15 4.41 13.59 3 9 7.59 4.41 3 3 4.41 7.59 9 3 13.59 4.41 15 9 10.41 13.59 15 15 13.59 10.41 9 15 4.41Z"/></svg>
    </button>
</aside>



    <div>
        <div id="draft-saved" class="fc-success h24" style="display:none;">Draft saved</div>
        <div id="draft-discarded" class="fc-error h24" style="display:none;">Draft discarded</div>
    </div>


            <div id="wmd-preview" class="s-prose mb16 wmd-preview js-wmd-preview"></div>
            <div></div>

        <div class="edit-block">
            <input id="fkey" name="fkey" type="hidden" value="a6f81f6a270be5dc76c6b3d9e26b4e3074ec1d32440665aeca6cbdadbb34496a">
            <input id="author" name="author" type="text">
        </div>

</div>


                                <div class="ps-relative">
                                                <div class="form-item dno new-post-login p0 my16">
                <div class="d-flex gs16 md:fd-column new-login-form">
                    <div class="d-flex fd-column w50 md:w-auto gsy gs8 jc-space-between new-login-left">
                        <h3 class="flex--item fs-title">Sign up or <a id="login-link" href="/users/login?ssrc=question_page&returnurl=https%3a%2f%2fstackoverflow.com%2fquestions%2f4917779%2fjquery-datepicker-date-reset%23new-answer">log in</a></h3>
                        <script>
                            StackExchange.ready(function () {
                                StackExchange.helpers.onClickDraftSave('#login-link');
                            });
                        </script>
                        <div class="flex--item s-btn s-btn__muted s-btn__outlined s-btn__icon google-login" data-ga="[&quot;sign up&quot;,&quot;Sign Up Started - Google&quot;,&quot;New Post&quot;,null,null]">
                            <svg aria-hidden="true" class="native svg-icon iconGoogle" width="18" height="18"  viewBox="0 0 18 18"><path fill="#4285F4" d="M16.51 8H8.98v3h4.3c-.18 1-.74 1.48-1.6 2.04v2.01h2.6a7.8 7.8 0 0 0 2.38-5.88c0-.57-.05-.66-.15-1.18Z"/><path fill="#34A853" d="M8.98 17c2.16 0 3.97-.72 5.3-1.94l-2.6-2a4.8 4.8 0 0 1-7.18-2.54H1.83v2.07A8 8 0 0 0 8.98 17Z"/><path fill="#FBBC05" d="M4.5 10.52a4.8 4.8 0 0 1 0-3.04V5.41H1.83a8 8 0 0 0 0 7.18l2.67-2.07Z"/><path fill="#EA4335" d="M8.98 4.18c1.17 0 2.23.4 3.06 1.2l2.3-2.3A8 8 0 0 0 1.83 5.4L4.5 7.49a4.77 4.77 0 0 1 4.48-3.3Z"/></svg> Sign up using Google
                        </div>
                        <div class="flex--item s-btn s-btn__muted s-btn__icon facebook-login" data-ga="[&quot;sign up&quot;,&quot;Sign Up Started - Facebook&quot;,&quot;New Post&quot;,null,null]">
                            <svg aria-hidden="true" class="svg-icon iconFacebook" width="18" height="18"  viewBox="0 0 18 18"><path fill="#4167B2" d="M3 1a2 2 0 0 0-2 2v12c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H3Zm6.55 16v-6.2H7.46V8.4h2.09V6.61c0-2.07 1.26-3.2 3.1-3.2.88 0 1.64.07 1.87.1v2.16h-1.29c-1 0-1.19.48-1.19 1.18V8.4h2.39l-.31 2.42h-2.08V17h-2.5Z"/></svg> Sign up using Facebook
                        </div>
                        <div class="flex--item s-btn s-btn__muted s-btn__outlined s-btn__icon stackexchange-login" data-ga="[&quot;sign up&quot;,&quot;Sign Up Navigation&quot;,&quot;New Post&quot;,null,null]">
                            <svg aria-hidden="true" class="native svg-icon iconLogoGlyphXSm" width="18" height="18" viewBox="0 0 18 18"><path d="M14 16v-5h2v7H2v-7h2v5h10Z" fill="#BCBBBB"/><path d="m12.09.72-1.21.9 4.5 6.07 1.22-.9L12.09.71ZM5 15h8v-2H5v2Zm9.15-5.87L8.35 4.3l.96-1.16 5.8 4.83-.96 1.16Zm-7.7-1.47 6.85 3.19.63-1.37-6.85-3.2-.63 1.38Zm6.53 5L5.4 11.39l.38-1.67 7.42 1.48-.22 1.46Z" fill="#F48024"/></svg> Sign up using Email and Password
                        </div>
                    </div>
                    <input type="hidden" name="use-facebook" class="use-facebook" value="false" />
                    <input type="hidden" name="use-google" class="use-google" value="false" />
                    <button type="button" class="d-none js-submit-openid">Submit</button>
                    <div class="d-flex gsy gs8 fd-column w50 md:w-auto new-login-right form-item p0">
                                <h3 class="flex--item fs-title">Post as a guest</h3>
            <div class="flex--item">
                <div class="d-flex gs4 gsy fd-column">
                    <label class="s-label" for="display-name">Name</label>
                    <div class="d-flex ps-relative">
                        <input class="s-input" id="display-name" name="display-name" maxlength="30" type="text" value="" tabindex="105" placeholder="" />
                    </div>
                </div>
            </div>
            <div class="flex--item">
                <div class="d-flex gs4 gsy fd-column">
                    <div class="flex--item">
                        <div class="d-flex gs2 gsy fd-column">
                            <label class="flex--item s-label" for="m-address">Email</label>
                            <p class="flex--item s-description">Required, but never shown</p>
                        </div>
                    </div>
                    <div class="d-flex ps-relative">
                        <input class="s-input js-post-email-field" id="m-address" name="m-address" type="text" value="" size="40" tabindex="106" placeholder="" />
                    </div>
                </div>
            </div>

                    </div>
                </div>
            </div>
            <script>
                StackExchange.ready(
                    function () {
                        StackExchange.openid.initPostLogin('.new-post-login', 'https%3a%2f%2fstackoverflow.com%2fquestions%2f4917779%2fjquery-datepicker-date-reset%23new-answer', 'question_page');
                    }
                );
            </script>
            <noscript>
                        <h3 class="flex--item fs-title">Post as a guest</h3>
            <div class="flex--item">
                <div class="d-flex gs4 gsy fd-column">
                    <label class="s-label" for="display-name">Name</label>
                    <div class="d-flex ps-relative">
                        <input class="s-input" id="display-name" name="display-name" maxlength="30" type="text" value="" tabindex="105" placeholder="" />
                    </div>
                </div>
            </div>
            <div class="flex--item">
                <div class="d-flex gs4 gsy fd-column">
                    <div class="flex--item">
                        <div class="d-flex gs2 gsy fd-column">
                            <label class="flex--item s-label" for="m-address">Email</label>
                            <p class="flex--item s-description">Required, but never shown</p>
                        </div>
                    </div>
                    <div class="d-flex ps-relative">
                        <input class="s-input js-post-email-field" id="m-address" name="m-address" type="text" value="" size="40" tabindex="106" placeholder="" />
                    </div>
                </div>
            </div>

            </noscript>

                                </div>

                                    <div class="form-submit clear-both d-flex gsx gs4">
                                        <button id="submit-button" class="flex--item s-btn s-btn__primary s-btn__icon" type="submit" tabindex="120" autocomplete="off">
Post Your Answer                                        </button>
                                        <button class="flex--item s-btn s-btn__danger discard-answer dno">
                                            Discard
                                        </button>
                                            <p class="privacy-policy-agreement">
                                                By clicking “Post Your Answer”, you agree to our <a href='https://stackoverflow.com/legal/terms-of-service/public' name='tos' target='_blank' class='-link'>terms of service</a>, <a href='https://stackoverflow.com/legal/privacy-policy' name='privacy' target='_blank' class='-link'>privacy policy</a> and <a href='https://stackoverflow.com/legal/cookie-policy' name='cookie' target='_blank' class='-link'>cookie policy</a><input type="hidden" name="legalLinksShown" value="1" />
                                            </p>
                                    </div>
                                    <div class="js-general-error general-error clear-both d-none" aria-live="polite"></div>
                            </form>


                            <h2 class="bottom-notice" data-loc="1">
                                <div>
Not the answer you&#x27;re looking for? Browse other questions tagged <ul class='ml0 list-ls-none js-post-tag-list-wrapper d-inline'><li class='d-inline mr4 js-post-tag-list-item'><a href="/questions/tagged/jquery" class="post-tag" title="show questions tagged &#39;jquery&#39;" aria-label="show questions tagged &#39;jquery&#39;" rel="tag" aria-labelledby="jquery-container">jquery</a></li><li class='d-inline mr4 js-post-tag-list-item'><a href="/questions/tagged/date" class="post-tag" title="show questions tagged &#39;date&#39;" aria-label="show questions tagged &#39;date&#39;" rel="tag" aria-labelledby="date-container">date</a></li><li class='d-inline mr4 js-post-tag-list-item'><a href="/questions/tagged/datepicker" class="post-tag" title="show questions tagged &#39;datepicker&#39;" aria-label="show questions tagged &#39;datepicker&#39;" rel="tag" aria-labelledby="datepicker-container">datepicker</a></li><li class='d-inline mr4 js-post-tag-list-item'><a href="/questions/tagged/reset" class="post-tag" title="show questions tagged &#39;reset&#39;" aria-label="show questions tagged &#39;reset&#39;" rel="tag" aria-labelledby="reset-container">reset</a></li><li class='d-inline mr4 js-post-tag-list-item'><a href="/questions/tagged/jquery-ui-datepicker" class="post-tag" title="show questions tagged &#39;jquery-ui-datepicker&#39;" aria-label="show questions tagged &#39;jquery-ui-datepicker&#39;" rel="tag" aria-labelledby="jquery-ui-datepicker-container">jquery-ui-datepicker</a></li></ul> or <a href="/questions/ask">ask your own question</a>.                                </div>
                            </h2>
                </div>
            </div>

            
<div id="sidebar" class="show-votes" role="complementary" aria-label="sidebar">
        

    
    <div class="s-sidebarwidget s-sidebarwidget__yellow s-anchors s-anchors__grayscale mb16" data-tracker="cb=1">
        <ul class="d-block p0 m0">
                        <li class="s-sidebarwidget--header s-sidebarwidget__small-bold-text d-flex fc-black-600 d:fc-black-900 bb bbw1">
                            The Overflow Blog
                        </li>
        <li class="s-sidebarwidget--item d-flex px16">
            <div class="flex--item1 fl-shrink0">
<svg aria-hidden="true" class="va-text-top svg-icon iconPencilSm" width="14" height="14"  viewBox="0 0 14 14"><path  d="m11.1 1.71 1.13 1.12c.2.2.2.51 0 .71L11.1 4.7 9.21 2.86l1.17-1.15c.2-.2.51-.2.71 0ZM2 10.12l6.37-6.43 1.88 1.88L3.88 12H2v-1.88Z"/></svg>            </div>
            <div class="flex--item wmn0 ow-break-word">
                <a href="https://stackoverflow.blog/2023/02/09/three-layers-to-secure-a-software-development-organization/" class="js-gps-track" data-ga="[&quot;community bulletin board&quot;,&quot;The Overflow Blog&quot;,&quot;https://stackoverflow.blog/2023/02/09/three-layers-to-secure-a-software-development-organization/&quot;,null,null]" data-gps-track="communitybulletin.click({ priority: 1, position: 0 })">Three layers to secure a software development organization</a>
            </div>
        </li>
        <li class="s-sidebarwidget--item d-flex px16">
            <div class="flex--item1 fl-shrink0">
<svg aria-hidden="true" class="va-text-top svg-icon iconPencilSm" width="14" height="14"  viewBox="0 0 14 14"><path  d="m11.1 1.71 1.13 1.12c.2.2.2.51 0 .71L11.1 4.7 9.21 2.86l1.17-1.15c.2-.2.51-.2.71 0ZM2 10.12l6.37-6.43 1.88 1.88L3.88 12H2v-1.88Z"/></svg>            </div>
            <div class="flex--item wmn0 ow-break-word">
                <a href="https://stackoverflow.blog/2023/02/10/does-your-professor-pass-the-turing-test-ep-537/" class="js-gps-track" data-ga="[&quot;community bulletin board&quot;,&quot;The Overflow Blog&quot;,&quot;https://stackoverflow.blog/2023/02/10/does-your-professor-pass-the-turing-test-ep-537/&quot;,null,null]" data-gps-track="communitybulletin.click({ priority: 1, position: 1 })">Does your professor pass the Turing test? (Ep. 537)</a>
            </div>
        </li>
                        <li class="s-sidebarwidget--header s-sidebarwidget__small-bold-text d-flex fc-black-600 d:fc-black-900 bb bbw1">
                            Featured on Meta
                        </li>
        <li class="s-sidebarwidget--item d-flex px16">
            <div class="flex--item1 fl-shrink0">
<div class="favicon favicon-stackexchangemeta" title="Meta Stack Exchange"></div>            </div>
            <div class="flex--item wmn0 ow-break-word">
                <a href="https://meta.stackexchange.com/questions/386102/accessibility-update-colors" class="js-gps-track" data-ga="[&quot;community bulletin board&quot;,&quot;Featured on Meta&quot;,&quot;https://meta.stackexchange.com/questions/386102/accessibility-update-colors&quot;,null,null]" data-gps-track="communitybulletin.click({ priority: 3, position: 2 })">Accessibility Update: Colors</a>
            </div>
        </li>
        <li class="s-sidebarwidget--item d-flex px16">
            <div class="flex--item1 fl-shrink0">
<div class="favicon favicon-stackoverflowmeta" title="Meta Stack Overflow"></div>            </div>
            <div class="flex--item wmn0 ow-break-word">
                <a href="https://meta.stackoverflow.com/questions/422971/collectives-the-next-iteration" class="js-gps-track" data-ga="[&quot;community bulletin board&quot;,&quot;Featured on Meta&quot;,&quot;https://meta.stackoverflow.com/questions/422971/collectives-the-next-iteration&quot;,null,null]" data-gps-track="communitybulletin.click({ priority: 6, position: 3 })">Collectives: The next iteration</a>
            </div>
        </li>
        <li class="s-sidebarwidget--item d-flex px16">
            <div class="flex--item1 fl-shrink0">
<div class="favicon favicon-stackoverflowmeta" title="Meta Stack Overflow"></div>            </div>
            <div class="flex--item wmn0 ow-break-word">
                <a href="https://meta.stackoverflow.com/questions/423096/we-ve-made-changes-to-our-privacy-notice-for-collectives" class="js-gps-track" data-ga="[&quot;community bulletin board&quot;,&quot;Featured on Meta&quot;,&quot;https://meta.stackoverflow.com/questions/423096/we-ve-made-changes-to-our-privacy-notice-for-collectives&quot;,null,null]" data-gps-track="communitybulletin.click({ priority: 6, position: 4 })">We’ve made changes to our Privacy Notice for Collectives™</a>
            </div>
        </li>
        <li class="s-sidebarwidget--item d-flex px16">
            <div class="flex--item1 fl-shrink0">
<div class="favicon favicon-stackoverflowmeta" title="Meta Stack Overflow"></div>            </div>
            <div class="flex--item wmn0 ow-break-word">
                <a href="https://meta.stackoverflow.com/questions/421831/temporary-policy-chatgpt-is-banned" class="js-gps-track" data-ga="[&quot;community bulletin board&quot;,&quot;Featured on Meta&quot;,&quot;https://meta.stackoverflow.com/questions/421831/temporary-policy-chatgpt-is-banned&quot;,null,null]" data-gps-track="communitybulletin.click({ priority: 6, position: 5 })">Temporary policy: ChatGPT is banned</a>
            </div>
        </li>
        </ul>
    </div>


<div class="js-zone-container zone-container-sidebar">
    <div id="dfp-tsb" class="everyonelovesstackoverflow everyoneloves__top-sidebar"></div>
		<div class="js-report-ad-button-container " style="width: 300px"></div>
</div>
<div class="js-zone-container zone-container-sidebar">
    <div id="dfp-msb" class="everyonelovesstackoverflow everyoneloves__mid-sidebar"></div>
		<div class="js-report-ad-button-container " style="width: 300px"></div>
</div>
<div id="hireme"></div>        <div class="module sidebar-linked">
	<h4 id="h-linked">Linked</h4>
	<div class="linked" data-tracker="lq=1">
            <div class="spacer js-gps-track" data-gps-track="linkedquestion.click({ source_post_id: 4917779, target_question_id: 9435086, position: 0 })">
				<a href="/q/9435086" title="Question score (upvotes - downvotes)">
					<div class="answer-votes answered-accepted default">94</div>
				</a>
				<a href="/questions/9435086/how-do-i-clear-reset-the-selected-dates-on-the-jquery-ui-datepicker-calendar?noredirect=1" class="question-hyperlink">How do I clear/reset the selected dates on the jQuery UI Datepicker calendar?</a>
			</div>
            <div class="spacer js-gps-track" data-gps-track="linkedquestion.click({ source_post_id: 4917779, target_question_id: 12324698, position: 1 })">
				<a href="/q/12324698" title="Question score (upvotes - downvotes)">
					<div class="answer-votes  default">5</div>
				</a>
				<a href="/questions/12324698/clear-date-selection-using-primefaces-calendar?noredirect=1" class="question-hyperlink">Clear Date Selection using Primefaces Calendar</a>
			</div>
            <div class="spacer js-gps-track" data-gps-track="linkedquestion.click({ source_post_id: 4917779, target_question_id: 5337139, position: 2 })">
				<a href="/q/5337139" title="Question score (upvotes - downvotes)">
					<div class="answer-votes answered-accepted default">2</div>
				</a>
				<a href="/questions/5337139/reset-date-range-constraints?noredirect=1" class="question-hyperlink">Reset date range constraints</a>
			</div>
            <div class="spacer js-gps-track" data-gps-track="linkedquestion.click({ source_post_id: 4917779, target_question_id: 69939209, position: 3 })">
				<a href="/q/69939209" title="Question score (upvotes - downvotes)">
					<div class="answer-votes  default">2</div>
				</a>
				<a href="/questions/69939209/how-to-prevent-jquery-datepicker-from-clearing-date-on-submit-in-jsp?noredirect=1" class="question-hyperlink">How to prevent jquery datepicker from clearing date on submit in jsp</a>
			</div>
            <div class="spacer js-gps-track" data-gps-track="linkedquestion.click({ source_post_id: 4917779, target_question_id: 27745490, position: 4 })">
				<a href="/q/27745490" title="Question score (upvotes - downvotes)">
					<div class="answer-votes  default">0</div>
				</a>
				<a href="/questions/27745490/select-null-date-using-jqueryui-datepicker?noredirect=1" class="question-hyperlink">Select NULL date using jQueryUI datepicker</a>
			</div>
	</div>
</div>


    
        <div class="module sidebar-related">
            <h4 id="h-related">Related</h4>
            <div class="related js-gps-related-questions" data-tracker="rq=1">
                    <div class="spacer">
                        <a href="/q/31044" title="Question score (upvotes - downvotes)">
                            <div class="answer-votes answered-accepted extra-large">3102</div>
                        </a>
                        <a href="/questions/31044/is-there-an-exists-function-for-jquery" class="question-hyperlink">Is there an &quot;exists&quot; function for jQuery?</a>
                    </div>
                    <div class="spacer">
                        <a href="/q/171027" title="Question score (upvotes - downvotes)">
                            <div class="answer-votes answered-accepted extra-large">2631</div>
                        </a>
                        <a href="/questions/171027/adding-a-table-row-in-jquery" class="question-hyperlink">Adding a table row in jQuery</a>
                    </div>
                    <div class="spacer">
                        <a href="/q/178325" title="Question score (upvotes - downvotes)">
                            <div class="answer-votes answered-accepted extra-large">8541</div>
                        </a>
                        <a href="/questions/178325/how-do-i-check-if-an-element-is-hidden-in-jquery" class="question-hyperlink">How do I check if an element is hidden in jQuery?</a>
                    </div>
                    <div class="spacer">
                        <a href="/q/426258" title="Question score (upvotes - downvotes)">
                            <div class="answer-votes answered-accepted extra-large">4527</div>
                        </a>
                        <a href="/questions/426258/setting-checked-for-a-checkbox-with-jquery" class="question-hyperlink">Setting &quot;checked&quot; for a checkbox with jQuery</a>
                    </div>
                    <div class="spacer">
                        <a href="/q/901712" title="Question score (upvotes - downvotes)">
                            <div class="answer-votes answered-accepted extra-large">5106</div>
                        </a>
                        <a href="/questions/901712/how-do-i-check-whether-a-checkbox-is-checked-in-jquery" class="question-hyperlink">How do I check whether a checkbox is checked in jQuery?</a>
                    </div>
                    <div class="spacer">
                        <a href="/q/1328025" title="Question score (upvotes - downvotes)">
                            <div class="answer-votes answered-accepted large">591</div>
                        </a>
                        <a href="/questions/1328025/jquery-ui-datepicker-change-date-format" class="question-hyperlink">jQuery UI DatePicker - Change Date Format</a>
                    </div>
                    <div class="spacer">
                        <a href="/q/1353684" title="Question score (upvotes - downvotes)">
                            <div class="answer-votes answered-accepted extra-large">2005</div>
                        </a>
                        <a href="/questions/1353684/detecting-an-invalid-date-date-instance-in-javascript" class="question-hyperlink">Detecting an &quot;invalid date&quot; Date instance in JavaScript</a>
                    </div>
                    <div class="spacer">
                        <a href="/q/1531093" title="Question score (upvotes - downvotes)">
                            <div class="answer-votes answered-accepted extra-large">2921</div>
                        </a>
                        <a href="/questions/1531093/how-do-i-get-the-current-date-in-javascript" class="question-hyperlink">How do I get the current date in JavaScript?</a>
                    </div>
                    <div class="spacer">
                        <a href="/q/3552461" title="Question score (upvotes - downvotes)">
                            <div class="answer-votes answered-accepted extra-large">3322</div>
                        </a>
                        <a href="/questions/3552461/how-do-i-format-a-date-in-javascript" class="question-hyperlink">How do I format a date in JavaScript?</a>
                    </div>
            </div>
        </div>




    <div id="hot-network-questions" class="module tex2jax_ignore">
    <h4>
        <a href="https://stackexchange.com/questions?tab=hot"
           class="js-gps-track s-link s-link__inherit" 
           data-gps-track="posts_hot_network.click({ item_type:1, location:11 })">
            Hot Network Questions
        </a>
    </h4>
    <ul>
            <li >
                <div class="favicon favicon-stats" title="Cross Validated"></div><a href="https://stats.stackexchange.com/questions/604884/example-of-a-parametric-test-with-no-normality-assumptions" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:65 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Example of a parametric test with no normality assumptions?
                </a>

            </li>
            <li >
                <div class="favicon favicon-rpg" title="Role-playing Games Stack Exchange"></div><a href="https://rpg.stackexchange.com/questions/204654/are-quasi-gods-really-unable-to-hear-the-prayers-of-their-followers" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:122 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Are quasi-gods really unable to hear the prayers of their followers?
                </a>

            </li>
            <li >
                <div class="favicon favicon-security" title="Information Security Stack Exchange"></div><a href="https://security.stackexchange.com/questions/268318/why-is-1password-sign-in-to-new-device-secure-without-mfa" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:162 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Why is 1Password sign-in to new device secure without MFA?
                </a>

            </li>
            <li >
                <div class="favicon favicon-academia" title="Academia Stack Exchange"></div><a href="https://academia.stackexchange.com/questions/193378/convention-on-embedding-three-pairs-of-items-in-a-single-sentence-using-parenthe" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:415 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Convention on embedding three pairs of items in a single sentence using parentheses
                </a>

            </li>
            <li >
                <div class="favicon favicon-law" title="Law Stack Exchange"></div><a href="https://law.stackexchange.com/questions/89062/how-is-a-wealthy-criminal-expected-to-get-a-good-lawyer" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:617 }); posts_hot_network.click({ item_type:2, location:11 })">
                    How is a wealthy criminal expected to get a good lawyer?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-japanese" title="Japanese Language Stack Exchange"></div><a href="https://japanese.stackexchange.com/questions/98564/to-open-and-to-close-talking-about-shop" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:257 }); posts_hot_network.click({ item_type:2, location:11 })">
                    &quot;to open&quot; and &quot;to close&quot; talking about shop
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-academia" title="Academia Stack Exchange"></div><a href="https://academia.stackexchange.com/questions/193318/i-screwed-up-a-talk-how-to-move-on" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:415 }); posts_hot_network.click({ item_type:2, location:11 })">
                    I screwed up a talk - how to move on
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-movies" title="Movies &amp; TV Stack Exchange"></div><a href="https://movies.stackexchange.com/questions/119548/what-does-this-field-hospital-joke-mean-in-blackadder-goes-forth" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:367 }); posts_hot_network.click({ item_type:2, location:11 })">
                    What does this Field Hospital joke mean in Blackadder Goes Forth?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-earthscience" title="Earth Science Stack Exchange"></div><a href="https://earthscience.stackexchange.com/questions/24869/most-amiable-coastal-geographic-conditions-for-harbors" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:553 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Most amiable coastal geographic conditions for harbors?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-money" title="Personal Finance &amp; Money Stack Exchange"></div><a href="https://money.stackexchange.com/questions/155173/why-is-the-remaining-credit-positive" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:93 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Why is the remaining credit positive?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-diy" title="Home Improvement Stack Exchange"></div><a href="https://diy.stackexchange.com/questions/266554/how-to-temporarily-catch-leaks-trickling-down-the-outside-of-a-pipe" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:73 }); posts_hot_network.click({ item_type:2, location:11 })">
                    How to temporarily catch leaks trickling down the outside of a pipe
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-outdoors" title="The Great Outdoors Stack Exchange"></div><a href="https://outdoors.stackexchange.com/questions/28804/are-there-any-examples-of-orienteering-off-trail-route-finding-software" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:395 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Are there any examples of orienteering (off-trail) route-finding software?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-diy" title="Home Improvement Stack Exchange"></div><a href="https://diy.stackexchange.com/questions/266654/how-do-i-replace-this-switch-if-the-black-wire-is-looped-around-the-screw" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:73 }); posts_hot_network.click({ item_type:2, location:11 })">
                    How do I replace this switch if the black wire is looped around the screw?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-pets" title="Pets Stack Exchange"></div><a href="https://pets.stackexchange.com/questions/37473/my-cat-is-fighting-for-his-life-with-chronic-calicivirus" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:518 }); posts_hot_network.click({ item_type:2, location:11 })">
                    My cat is fighting for his life with chronic calicivirus
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-puzzling" title="Puzzling Stack Exchange"></div><a href="https://puzzling.stackexchange.com/questions/119730/multidimensional-travel" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:559 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Multidimensional Travel
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-law" title="Law Stack Exchange"></div><a href="https://law.stackexchange.com/questions/89130/is-the-reading-of-website-meta-tags-generally-prohibited" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:617 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Is the reading of website meta tags generally prohibited?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-ell" title="English Language Learners Stack Exchange"></div><a href="https://ell.stackexchange.com/questions/332513/i-am-select-for-the-job-i-got-became-select-for-the-job" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:481 }); posts_hot_network.click({ item_type:2, location:11 })">
                    &quot;I am select for the job&quot; &quot;I got/became select for the job&quot;
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-electronics" title="Electrical Engineering Stack Exchange"></div><a href="https://electronics.stackexchange.com/questions/653592/can-a-dc-voltage-source-be-used-for-a-transformer" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:135 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Can a DC voltage source be used for a transformer?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-academia" title="Academia Stack Exchange"></div><a href="https://academia.stackexchange.com/questions/193369/is-it-legal-in-the-uk-to-aim-for-a-certain-percentage-of-women-in-a-math-departm" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:415 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Is it legal in the UK to aim for a certain percentage of women in a math department?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-philosophy" title="Philosophy Stack Exchange"></div><a href="https://philosophy.stackexchange.com/questions/96838/why-is-consent-important" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:265 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Why is consent important?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-academia" title="Academia Stack Exchange"></div><a href="https://academia.stackexchange.com/questions/193384/the-editor-mixed-up-the-reviews-and-rejected-my-paper-based-on-the-reviews-of-a" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:415 }); posts_hot_network.click({ item_type:2, location:11 })">
                    The editor mixed up the reviews and rejected my paper based on the reviews of a different paper! Now they&#x27;re denying everything. How to proceed?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-codegolf" title="Code Golf Stack Exchange"></div><a href="https://codegolf.stackexchange.com/questions/257680/base64-fixed-point" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:200 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Base64 fixed point
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-blender" title="Blender Stack Exchange"></div><a href="https://blender.stackexchange.com/questions/285940/how-would-i-create-a-flowing-gradually-turning-uv-map-for-a-model-have-pictur" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:502 }); posts_hot_network.click({ item_type:2, location:11 })">
                    How would I create a flowing, gradually turning UV Map for a model? (Have pictures)
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-tex" title="TeX - LaTeX Stack Exchange"></div><a href="https://tex.stackexchange.com/questions/674856/equal-horizontal-spaces-between-subfigures-of-different-sizes" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:85 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Equal horizontal spaces between subfigures of different sizes
                </a>

            </li>
    </ul>

        <a href="#" 
           class="show-more js-show-more js-gps-track" 
           data-gps-track="posts_hot_network.click({ item_type:3, location:11 })">
            more hot questions
        </a>
</div>

                <div id="feed-link" class="js-feed-link">
        <a href="/feeds/question/4917779" title="Feed of this question and its answers">
            <svg aria-hidden="true" class="fc-orange-400 svg-icon iconRss" width="18" height="18"  viewBox="0 0 18 18"><path  d="M3 1a2 2 0 0 0-2 2v12c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H3Zm0 1.5c6.9 0 12.5 5.6 12.5 12.5H13C13 9.55 8.45 5 3 5V2.5Zm0 5c4.08 0 7.5 3.41 7.5 7.5H8c0-2.72-2.28-5-5-5V7.5Zm0 5c1.36 0 2.5 1.14 2.5 2.5H3v-2.5Z"/></svg>
            Question feed
        </a>
    </div>
    <aside class="s-modal js-feed-link-modal" tabindex="-1" role="dialog" aria-labelledby="feed-modal-title" aria-describedby="feed-modal-description" aria-hidden="true">
        <div class="s-modal--dialog js-modal-dialog wmx4" role="document"  data-controller="se-draggable">
            <h1 class="s-modal--header fw-bold js-first-tabbable" id="feed-modal-title" data-se-draggable-target="handle" tabindex="0">
                Subscribe to RSS
            </h1>
            <div class="d-flex gs4 gsy fd-column">
                <div class="flex--item">
                    <label class="d-block s-label c-default" for="feed-url">
                        Question feed
                        <p class="s-description mt2" id="feed-modal-description">To subscribe to this RSS feed, copy and paste this URL into your RSS reader.</p>
                    </label>
                </div>
                <div class="d-flex ps-relative">
                    <input class="s-input" type="text" name="feed-url" id="feed-url" readonly="readonly" value="https://stackoverflow.com/feeds/question/4917779" />
                    <svg aria-hidden="true" class="s-input-icon fc-orange-400 svg-icon iconRss" width="18" height="18"  viewBox="0 0 18 18"><path  d="M3 1a2 2 0 0 0-2 2v12c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H3Zm0 1.5c6.9 0 12.5 5.6 12.5 12.5H13C13 9.55 8.45 5 3 5V2.5Zm0 5c4.08 0 7.5 3.41 7.5 7.5H8c0-2.72-2.28-5-5-5V7.5Zm0 5c1.36 0 2.5 1.14 2.5 2.5H3v-2.5Z"/></svg>
                </div>
            </div>
            <a class="s-modal--close s-btn s-btn__muted js-modal-close js-last-tabbable" href="#" aria-label="Close">
                <svg aria-hidden="true" class="svg-icon iconClearSm" width="14" height="14"  viewBox="0 0 14 14"><path  d="M12 3.41 10.59 2 7 5.59 3.41 2 2 3.41 5.59 7 2 10.59 3.41 12 7 8.41 10.59 12 12 10.59 8.41 7 12 3.41Z"/></svg>
            </a>
        </div>
    </aside>

</div>

    </div>
<script>StackExchange.ready(function(){$.get('/posts/4917779/ivc/0dda?prg=f097de81-e7b2-4e1c-866e-215acdc7b155');});</script>
<noscript><div><img src="/posts/4917779/ivc/0dda?prg=f097de81-e7b2-4e1c-866e-215acdc7b155" class="dno" alt="" width="0" height="0"></div></noscript><div style="display:none" id="js-codeblock-lang">lang-js</div></div>


        </div>
    </div>


        
    <script type="text/javascript">
    var cam = cam || { opt: {} };
    var clcGamLoaderOptions = cam || { opt: {} };
    var opt = clcGamLoaderOptions.opt;

            opt.omni = 'Bb0xG0JEDNsIAAAAABMKSwACAAAAAgAAAAAAATMAAAB8anF1ZXJ5fGRhdGV8ZGF0ZXBpY2tlcnxyZXNldHxqcXVlcnktdWktZGF0ZXBpY2tlcnwAjiyGnenDivvADg';

    opt.sf = !0;
    opt.hb = !1;
    opt.ll = !0;
    opt.tlb_position = 0;
    opt.personalization_consent = !1;
    opt.targeting_consent = !1;
    opt.performance_consent = !1;

    opt.targeting = {Registered:['false'],'so-tag':['jquery','date','datepicker','reset','jquery-ui-datepicker'],'tag-reportable':['jquery','date','datepicker','reset','jquery-ui-datepicker'],'tag-non-reportable':['jquery','date','datepicker','reset','jquery-ui-datepicker'],NumberOfAnswers:['6']};
    opt.adReportEnabled = !0;
    opt.adReportUrl = '/ads/report-ad';
    opt.adReportText = 'Report this ad';
	opt.adReportFileTypeErrorMessage = 'Please select a PNG or JPG file.';
    opt.adReportFileSizeErrorMessage = 'The file must be under 2 MiB.';
	opt.adReportErrorText = 'Error uploading ad report.';
	opt.adReportThanksText = 'Thanks for your feedback. We’ll review this against our code of conduct and take action if necessary.';
    opt.adReportLoginExpiredMessage = 'Your login session has expired, please login and try again.';
    opt.adReportLoginErrorMessage = 'An error occurred when loading the report form - please try again';
	opt.adReportModalClass = 'js-ad-report';

    opt.requestGuid = 'f097de81-e7b2-4e1c-866e-215acdc7b155';


    opt.targeting.TargetingConsent = ['False_Passive'];

    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('dfptestads')) {
        const dfptestads = urlParams.get('dfptestads');
        opt.targeting.DfpTestAds = dfptestads;
    }
</script>
<script>;(()=>{"use strict";var __webpack_modules__={23:(e,t,o)=>{o.d(t,{Z7:()=>l,eq:()=>r,kG:()=>n});const a=/^\/tags\//.test(location.pathname)||/^\/questions\/tagged\//.test(location.pathname)?"tag-pages":/^\/$/.test(location.pathname)||/^\/home/.test(location.pathname)?"home-page":"question-pages";let s=location.hostname;const i={slots:{lb:[[728,90]],mlb:[[728,90]],smlb:[[728,90]],bmlb:[[728,90]],sb:e=>"dfp-tsb"===e?[[300,250],[300,600]]:[[300,250]],"tag-sponsorship":[[730,135]],"mobile-below-question":[[320,50],[300,250]],msb:[[300,250],[300,600]],"talent-conversion-tracking":[[1,1]],"site-sponsorship":[[230,60]]},ids:{"dfp-tlb":"lb","dfp-mlb":"mlb","dfp-smlb":"smlb","dfp-bmlb":"bmlb","dfp-tsb":"sb","dfp-isb":"sb","dfp-tag":"tag-sponsorship","dfp-msb":"msb","dfp-sspon":"site-sponsorship","dfp-m-aq":"mobile-below-question"},idsToExcludeFromAdReports:["dfp-sspon"]};function n(){return Object.keys(i.ids)}function r(e){return i.idsToExcludeFromAdReports.indexOf(e)<0}function l(e){var t=e.split("_")[0];const o=i.ids[t];let n=i.slots[o];return"function"==typeof n&&(n=n(t)),{path:`/248424177/${s}/${o}/${a}`,sizes:n,zone:o}}},865:(e,t,o)=>{function a(e){return"string"==typeof e?document.getElementById(e):e}function s(e){return!!(e=a(e))&&"none"===getComputedStyle(e).display}function i(e){return!s(e)}function n(e){return!!e}function r(e){return/^\s*$/.test(a(e).innerHTML)}function l(e){const{style:t}=e;t.height=t.maxHeight=t.minHeight="auto",t.display="none"}function d(e){const{style:t}=e;t.height=t.maxHeight=t.minHeight="auto",t.display="none",[].forEach.call(e.children,d)}function c(e){const{style:t}=e;t.height=t.maxHeight=t.minHeight="auto",t.removeProperty("display")}function p(e){const t=document.createElement("script");t.src=e,document.body.appendChild(t)}function g(e){return o=e,(t=[]).push=function(e){return o(),delete this.push,this.push(e)},t;var t,o}function h(e){let t="function"==typeof HTMLTemplateElement;var o=document.createElement(t?"template":"div");return e=e.trim(),o.innerHTML=e,t?o.content.firstChild:o.firstChild}o.d(t,{$Z:()=>c,Bv:()=>h,Gx:()=>p,Nj:()=>a,QZ:()=>g,cf:()=>l,pn:()=>i,wo:()=>d,xb:()=>r,xj:()=>s,yb:()=>n})},763:(__unused_webpack_module,__webpack_exports__,__webpack_require__)=>{__webpack_require__.d(__webpack_exports__,{t:()=>AdReports});var _common_helper__WEBPACK_IMPORTED_MODULE_2__=__webpack_require__(865),_console__WEBPACK_IMPORTED_MODULE_1__=__webpack_require__(276),_ad_units__WEBPACK_IMPORTED_MODULE_0__=__webpack_require__(23);class AdReports{constructor(e,t){if(this.googletag=e,this.cam=t,this.allowedFileTypes=["image/png","image/jpg","image/jpeg"],this.ignoreValidation=!1,_console__WEBPACK_IMPORTED_MODULE_1__.cM("Ad reporting init"),this.cam=t,this.callOnButtonClick=e=>this.onButtonClick(e),this.googletag.pubads().addEventListener("slotRenderEnded",e=>this.handleSlotRendered(e)),Array.isArray(t.slotsRenderedEvents)){_console__WEBPACK_IMPORTED_MODULE_1__.cM("Adding report button to "+t.slotsRenderedEvents.length+" events that have transpired");for(var o=0;o<t.slotsRenderedEvents.length;o++)this.handleSlotRendered(t.slotsRenderedEvents[o])}}handleSlotRendered(e){if(e&&e.slot&&!e.isEmpty&&(e.creativeId||e.lineItemId||!e.isEmpty)){var t=e.slot.getSlotElementId();if(t){var o=document.getElementById(t);if(o)if((0,_ad_units__WEBPACK_IMPORTED_MODULE_0__.eq)(t)){var a=o?.closest(".js-zone-container")?.querySelector(".js-report-ad-button-container");a.append(this.createButton(e)),a.style.height="24px",_console__WEBPACK_IMPORTED_MODULE_1__.cM("Added report button to the bottom of "+t)}else _console__WEBPACK_IMPORTED_MODULE_1__.cM("Not adding report button to the bottom of "+t+": shouldHaveReportButton = false");else _console__WEBPACK_IMPORTED_MODULE_1__.cM("Not adding report button to the bottom of "+t+": resolved invalid adUnit element")}else _console__WEBPACK_IMPORTED_MODULE_1__.cM("Not adding report button to the bottom of element: invalid adUnitElementId")}else _console__WEBPACK_IMPORTED_MODULE_1__.cM("Not adding report button to the bottom of element: invalid SlotRenderEndedEvent")}async onButtonClick(e){e.preventDefault();let t=e.target;const o=t.dataset.modalUrl,a=t.dataset.googleEventData;return await this.loadModal(o,t,a),!1}createButton(e){let t=document.createElement("button");var o=JSON.stringify(e);return t.dataset.googleEventData=o,t.dataset.modalUrl=this.cam.opt.adReportUrl,t.dataset.adUnit=e.slot.getSlotElementId(),t.classList.add("js-report-ad","s-btn","s-btn__link","fs-fine","mt2","float-right"),t.append(document.createTextNode(this.cam.opt.adReportText)),t.removeEventListener("click",this.callOnButtonClick),t.addEventListener("click",this.callOnButtonClick),t}async loadModal(url,$link,googleEventData){try{await window.StackExchange.helpers.loadModal(url,{returnElements:window.$($link)}),this.initForm(googleEventData)}catch(e){var message="",response=e.responseText?eval(`(${e.responseText})`):null;message=response&&response.isLoggedOut?this.cam.opt.adReportLoginExpiredMessage:this.cam.opt.adReportLoginErrorMessage,window.StackExchange.helpers.showToast(message,{type:"danger"})}}removeModal(){window.StackExchange.helpers.closePopups(document.querySelectorAll("."+this.cam.opt.adReportModalClass),"dismiss")}initForm(e,t=!1){this.ignoreValidation=t,this.$form=document.querySelector(".js-ad-report-form"),this.$googleEventData=this.$form.querySelector(".js-json-data"),this.$adReportReasons=this.$form.querySelectorAll(".js-ad-report-reason"),this.$adReportReasonOther=this.$form.querySelector(".js-ad-report-reason-other"),this.$fileUploaderInput=this.$form.querySelector(".js-file-uploader-input"),this.$imageUploader=this.$form.querySelector(".js-image-uploader"),this.$clearImageUpload=this.$form.querySelector(".js-clear-image-upload"),this.$imageUploaderText=this.$form.querySelector(".js-image-uploader-text"),this.$imageUploaderPreview=this.$form.querySelector(".js-image-uploader-preview"),this.$fileErrorMessage=this.$form.querySelector(".js-file-error");const o=this.$form.querySelector(".js-drag-drop-enabled"),a=this.$form.querySelector(".js-drag-drop-disabled");this.$googleEventData.value=e,this.$adReportReasons.forEach((e,t)=>e.addEventListener("change",e=>{this.$adReportReasonOther.classList.toggle("d-none","3"!==e.target.value)})),this.$fileUploaderInput.addEventListener("change",()=>{this.validateFileInput()&&this.updateImagePreview(this.$fileUploaderInput.files)}),this.$clearImageUpload.addEventListener("click",e=>{e.preventDefault(),this.clearImageUpload()});try{this.$fileUploaderInput[0].value="",this.$imageUploader.addEventListener("dragenter dragover dragleave drop",this.preventDefaults),this.$imageUploader.addEventListener("dragenter dragover",this.handleDragStart),this.$imageUploader.addEventListener("dragleave drop",this.handleDragEnd),this.$imageUploader.addEventListener("drop",this.handleDrop)}catch(e){o.classList.add("d-none"),a.classList.remove("d-none")}this.$form.removeEventListener("",this.handleDragEnd),this.$form.addEventListener("submit",async e=>(e.preventDefault(),this.submitForm(),!1))}clearImageUpload(){this.$fileUploaderInput.value="",this.$imageUploaderPreview.setAttribute("src",""),this.$imageUploaderPreview.classList.add("d-none"),this.$clearImageUpload.classList.add("d-none"),this.$imageUploaderText.classList.remove("d-none"),this.$imageUploader.classList.add("p16","ba","bas-dashed","bc-black-100")}preventDefaults(e){e.preventDefault(),e.stopPropagation()}handleDragStart(e){this.$imageUploader.classList.remove("bas-dashed"),this.$imageUploader.classList.add("bas-solid","bc-black-100")}handleDragEnd(e){this.$imageUploader.classList.remove("bas-solid","bc-black-100"),this.$imageUploader.classList.add("bas-dashed")}handleDrop(e){var t=e.originalEvent.dataTransfer.files;FileReader&&t&&1===t.length&&(this.$fileUploaderInput.files=t,this.validateFileInput()&&this.updateImagePreview(t))}setError(e){this.$fileErrorMessage.parentElement.classList.toggle("has-error",e)}updateImagePreview(e){this.$imageUploader.classList.remove("p16","ba","bas-dashed","bc-black-100"),this.$clearImageUpload.classList.remove("d-none"),this.$imageUploaderText.classList.add("d-none");var t=new FileReader;t.onload=e=>{null!=e.target&&(this.$imageUploaderPreview.setAttribute("src",e.target.result),this.$imageUploaderPreview.classList.remove("d-none"))},t.readAsDataURL(e[0])}validateFileInput(){if(this.ignoreValidation)return!0;const e=this.cam.opt.adReportFileTypeErrorMessage,t=this.cam.opt.adReportFileSizeErrorMessage;if(null==this.$fileUploaderInput.files)return!1;var o=this.$fileUploaderInput.files[0];return null==o?(this.setError(!0),!1):this.allowedFileTypes.indexOf(o.type)<0?(this.$fileErrorMessage.textContent=e,this.$fileErrorMessage.classList.remove("d-none"),this.setError(!0),!1):o.size>2097152?(this.$fileErrorMessage.textContent=t,this.$fileErrorMessage.classList.remove("d-none"),this.setError(!0),!1):(this.$fileErrorMessage.classList.add("d-none"),this.setError(!1),!0)}async submitForm(){if(!this.validateFileInput())return!1;this.$form.querySelector("[type=submit]").setAttribute("disabled","true");var e=JSON.parse(this.$googleEventData.value||"{}");e.Reason=parseInt(this.$form.querySelector(".js-ad-report-reason:checked").value,10),e.Description=this.$adReportReasonOther.value,this.$googleEventData.value=JSON.stringify(e);var t=new FormData(this.$form);try{const e=await window.fetch(this.$form.getAttribute("action"),{method:this.$form.getAttribute("method"),body:t,cache:"no-cache"}),a=e.headers.get("content-type")||"",s=await e.text();if(!e.ok)throw new Error("response not valid");if(0===a.indexOf("text/html")){var o=(0,_common_helper__WEBPACK_IMPORTED_MODULE_2__.Bv)(s);const e=o?o.querySelector(".js-modal-content"):null;if(_console__WEBPACK_IMPORTED_MODULE_1__.cM("$popupContent"),_console__WEBPACK_IMPORTED_MODULE_1__.cM(e),!e)throw new Error(`Could not find .js-modal-content in response from ${this.$form.getAttribute("action")}`);document.querySelector(".js-modal-content").replaceWith(e)}else window.StackExchange.helpers.showToast(this.cam.opt.adReportThanksText,{type:"success"}),this.removeModal()}catch(e){window.StackExchange.helpers.showToast(this.cam.opt.adReportErrorText,{type:"danger"})}finally{let e=this.$form.querySelector("[type=submit]");e&&e.removeAttribute("disabled")}}}},276:(e,t,o)=>{function a(...e){}o.d(t,{cM:()=>a})}},__webpack_module_cache__={};function __webpack_require__(e){var t=__webpack_module_cache__[e];if(void 0!==t)return t.exports;var o=__webpack_module_cache__[e]={exports:{}};return __webpack_modules__[e](o,o.exports,__webpack_require__),o.exports}__webpack_require__.d=(e,t)=>{for(var o in t)__webpack_require__.o(t,o)&&!__webpack_require__.o(e,o)&&Object.defineProperty(e,o,{enumerable:!0,get:t[o]})},__webpack_require__.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t);var __webpack_exports__={};(()=>{var e=__webpack_require__(276),t=(e=>(e[e.Above=0]="Above",e[e.Below=1]="Below",e))(t||{});const o=Object.assign({},{"lib":"https://cdn.sstatic.net/clc/js/bundles/gam_loader_script/gam_loader_script.bundle.741.a1bd5bd69766c6c9192d.min.js","style":null,"u":null,"wa":true,"kt":2000,"tto":true,"h":"clc.stackoverflow.com","allowed":"^(((talent\\.)?stackoverflow)|(blog\\.codinghorror)|(.*\\.googlesyndication)|(serverfault|askubuntu)|([^\\.]+\\.stackexchange))\\.com$","wv":true,"al":false,"abd":true,"cpa_liid":[5882654614],"cpa_cid":[138377597667],"dp":false});var a=__webpack_require__(23),s=__webpack_require__(865),i=__webpack_require__(763);window.cam=new class{constructor(){this.gptImported=!1,this.collapsed={},e.cM("constructor"),this.clc_options=o,window.clcGamLoaderOptions?Object.assign(this,window.clcGamLoaderOptions):void 0===this.opt&&(this.opt=window.opt)}init(){if(e.cM("init"),void 0===this.opt)throw new Error("opt not set, required by GAM Loader");e.cM("setup message handler"),window.addEventListener("message",e=>{this.onmessage(e)}),this.opt.targeting&&this.opt.targeting.ProductVariant&&"SystemDefault"===this.opt.targeting.ProductVariant[0]&&(window.matchMedia&&window.matchMedia("(prefers-color-scheme: dark)").matches?this.opt.targeting.ProductVariant="Dark":this.opt.targeting.ProductVariant="Light")}handleSlotRenderedNoAdReport(){if(googletag.pubads().addEventListener("slotRenderEnded",e=>this.applyExtraMarginBottom(e)),Array.isArray(this.slotsRenderedEvents))for(var e=0;e<this.slotsRenderedEvents.length;e++)this.applyExtraMarginBottom(this.slotsRenderedEvents[e])}onmessage(t){let o="omni";if(t.data&&("string"==typeof t.data||t.data instanceof String))if(0===t.data.indexOf("get-omni-")){e.cM("Recevied get-omni message, sending back omni");var a=t.source,i=this.opt.omni,n="string"==typeof i?i:"";a.postMessage([o,n,this.opt.requestGuid].join("|"),"*")}else if(0===t.data.indexOf("collapse-")){e.cM("Recevied collapse message, collapse ad iframe"),e.cM(t);for(var r=t.source.window,l=document.getElementsByTagName("IFRAME"),d=0;d<l.length;d++){var c=l[d];if(c.contentWindow==r)return void(0,s.wo)(c.parentElement.parentElement.parentElement)}}else if(0===t.data.indexOf("resize|")){e.cM("Recevied resize message, resize ad iframe"),e.cM(t);let o=this._getFrameByEvent(t),a=t.data.indexOf("|")+1,s=t.data.slice(a),i=parseFloat(s)+.5;e.cM("New iframe height "+i),o.height=i.toString(),o.parentElement.style.height=i.toString()+"px"}else if(0===t.data.indexOf("getmarkup|")){let o=t.data.indexOf("|")+1,a=t.data.slice(o);e.cM("Recevied get markup message: "+a);let s=this._getFrameByEvent(t).closest(".everyonelovesstackoverflow");const i=document.createElement("script");i.dataset.adZoneId=s.id,i.src=a,document.body.appendChild(i)}}placeInIframe(t,o){e.cM("Received markup result in main frame");let a=document.getElementById(t.dataset.adZoneId),s=a.querySelector("iframe");if("string"==typeof o.prefixToIframeHtml){let e=document.createElement("div");e.innerHTML=o.prefixToIframeHtml,a.prepend(e.querySelector("img"))}s.contentWindow.postMessage(["markup",JSON.stringify(o)].join("|"),"*")}_getFrameByEvent(e){return Array.from(document.getElementsByTagName("iframe")).filter(t=>t.contentWindow===e.source)[0]}classifyZoneIds(e){const t=e.map(s.Nj).filter(s.yb);return{eligible:t.filter(s.xb).filter(s.pn),ineligible:t.filter(s.xj)}}applyExtraMarginBottom(t){if(t&&t.slot&&!t.isEmpty&&(t.creativeId||t.lineItemId||!t.isEmpty)){var o=t.slot.getSlotElementId();if(o){var s=document.getElementById(o);if(s)if((0,a.eq)(o)){var i=s?.closest(".js-zone-container");i.style.marginBottom="24px",e.cM("Applied extra margin to the bottom of "+o)}else e.cM("Not applying extra margin to the bottom of "+o+": shouldHaveReportButton = false");else e.cM("Not applying extra margin to the bottom of "+o+": resolved invalid adUnit element")}else e.cM("Not applying extra margin to the bottom of element: invalid adUnitElementId")}else e.cM("Not applying extra margin to the bottom of element: invalid SlotRenderEndedEvent")}load(o=(0,a.kG)()){const n=this.opt.tlb_position===t.Above?["dfp-mlb","dfp-smlb"]:["dfp-mlb","dfp-smlb","dfp-tlb"];if(!this.isGptReady())return e.cM("Initializing..."),this.initGpt(),void googletag.cmd.push(()=>this.load(o));this.opt.adReportEnabled?(e.cM("Ad reporting enabled"),this.adReports=new i.t(googletag,this)):(e.cM("Ad reporting not enabled"),this.handleSlotRenderedNoAdReport()),e.cM("Attempting to load ads into ids: ",o);const{eligible:r,ineligible:l}=this.classifyZoneIds(o);if(this.initDebugPanel(googletag,r.concat(l)),r.forEach(e=>(0,s.cf)(e)),l.forEach(s.wo),0===r.length)return void e.cM("Found no ad ids on page");e.cM("Eligible ids:",r),this.opt.abd&&this.appendAdblockDetector();var d=googletag.pubads().getSlots().filter(e=>o.indexOf(e.getSlotElementId())>=0);googletag.destroySlots(d),this.opt.sf&&(googletag.pubads().setForceSafeFrame(!0),googletag.pubads().setSafeFrameConfig({allowOverlayExpansion:!0,allowPushExpansion:!0,sandbox:!0})),e.cM("Targeting consent: Checking...");let c=!1,p=!1;void 0!==this.opt.targeting_consent&&(p=!0,e.cM("Targeting consent: Parameter set"),e.cM("Targeting consent: Consent given? ",this.opt.targeting_consent),c=this.opt.targeting_consent),void 0!==this.opt.personalization_consent&&(e.cM("Personalization consent: Parameter set"),e.cM("Personalization consent: Consent given? ",this.opt.personalization_consent),c=c&&this.opt.personalization_consent),c=c&&p,googletag.pubads().setRequestNonPersonalizedAds(c?0:1),c||googletag.pubads().setPrivacySettings({limitedAds:!0}),this.opt.ll||googletag.pubads().enableSingleRequest(),cam.sreEvent||(googletag.pubads().addEventListener("slotRenderEnded",e=>this.onSlotRendered(e)),cam.sreEvent=!0),this.setTargeting(googletag);var g=r.filter(e=>!this.opt.ll||n.indexOf(e.id)<0),h=r.filter(e=>!!this.opt.ll&&n.indexOf(e.id)>=0);e.cM("Up front ids:",g),e.cM("Lazy loaded ids:",h),g.forEach(t=>{e.cM(`Defining ad for element ${t.id}`),this.defineSlot(t.id,googletag),t.setAttribute("data-dfp-zone","true")}),googletag.enableServices(),g.forEach(t=>{e.cM(`Displaying ad for element ${t.id}`),googletag.cmd.push(()=>googletag.display(t.id))}),this.opt.ll&&(e.cM("Enabling lazy loading for GAM"),googletag.pubads().enableLazyLoad({fetchMarginPercent:0,renderMarginPercent:0}),e.cM("Setting up lazy loaded ad units"),h.forEach(t=>{e.cM(`Lazy loading - Defining Slot ${t.id}`),this.defineSlot(t.id,googletag)}),h.forEach(t=>{e.cM(`Lazy loading - Displaying ad for element ${t.id}`),googletag.cmd.push(()=>googletag.display(t.id))}))}setTargeting(t){let o=this.opt.targeting;if(!o)throw new Error("Targeting not defined");Object.keys(o).forEach(a=>{e.cM(`-> targeting - ${a}: ${o[a]}`),t.pubads().setTargeting(a,o[a])})}appendAdblockDetector(){const e=document.createElement("div");e.className="adsbox",e.id="clc-abd",e.style.position="absolute",e.style.pointerEvents="none",e.innerHTML="&nbsp;",document.body.appendChild(e)}onSlotRendered(o){try{const n=o.slot.getSlotElementId();let r=[];n||r.push("id=0");const l=document.getElementById(n);if(n&&!l&&r.push("el=0"),0!==r.length)return void this.stalled(r.join("&"));const{path:d,sizes:c,zone:p}=(0,a.Z7)(n);if(this.collapsed[p]&&o.isEmpty)return e.cM(`No line item for the element #${l.id}... collapsing.`),void(0,s.wo)(l);if(this.slotsRenderedEvents.push(o),o.lineItemId||o.creativeId||!o.isEmpty){e.cM(`Rendered ad for element #${l.id} [line item #${o.lineItemId}]`),e.cM(o);var i=l.parentElement;if(i.classList.contains("js-zone-container")){switch((0,s.cf)(i),n){case"dfp-tlb":this.opt.tlb_position===t.Above?i.classList.add("mb8"):i.classList.add("mt16");break;case"dfp-tag":i.classList.add("mb8");break;case"dfp-msb":i.classList.add("mt16");break;case"dfp-mlb":case"dfp-smlb":case"dfp-bmlb":i.classList.add("my8");break;case"dfp-isb":i.classList.add("mt24");break;case"dfp-m-aq":i.classList.add("my12"),i.classList.add("mx-auto")}(0,s.$Z)(i),(0,s.$Z)(l)}else e.cM(`No ad for element #${l.id}, collapsing`),e.cM(o),(0,s.wo)(l)}}catch(e){this.stalled("e=1")}}stalled(e){(new Image).src=`https://${this.clc_options.h}/stalled.gif?${e}`}defineSlot(t,o){"dfp-isb"===t&&(e.cM("-> targeting - Sidebar: Inline"),o.pubads().setTargeting("Sidebar",["Inline"])),"dfp-tsb"===t&&(e.cM("-> targeting - Sidebar: Right"),o.pubads().setTargeting("Sidebar",["Right"]));const{path:s,sizes:i,zone:n}=(0,a.Z7)(t);e.cM(`Defining slot for ${t}: ${s}, sizes: ${JSON.stringify(i)}`),o.defineSlot(s,i,t).addService(o.pubads())}importGptLibrary(){this.gptImported||(this.gptImported=!0,void 0===this.opt.targeting_consent||this.opt.targeting_consent?(0,s.Gx)("https://securepubads.g.doubleclick.net/tag/js/gpt.js"):(0,s.Gx)("https://pagead2.googlesyndication.com/tag/js/gpt.js"))}isGptReady(){return"undefined"!=typeof googletag&&!!googletag.apiReady}initGpt(){"undefined"==typeof googletag&&(window.googletag={cmd:(0,s.QZ)(()=>this.importGptLibrary())})}initDebugPanel(t,o){e.cM("initDebugPanel"),e.cM("Not showing debug panel")}},window.clcGamLoaderOptions&&(cam.init(),cam.load())})()})();</script>
        
    <footer id="footer" class="site-footer js-footer" role="contentinfo">
        <div class="site-footer--container">
                <div class="site-footer--logo">

                    <a href="https://stackoverflow.com" aria-label="Stack Overflow"><svg aria-hidden="true" class="native svg-icon iconLogoGlyphMd" width="32" height="37" viewBox="0 0 32 37"><path d="M26 33v-9h4v13H0V24h4v9h22Z" fill="#BCBBBB"/><path d="m21.5 0-2.7 2 9.9 13.3 2.7-2L21.5 0ZM26 18.4 13.3 7.8l2.1-2.5 12.7 10.6-2.1 2.5ZM9.1 15.2l15 7 1.4-3-15-7-1.4 3Zm14 10.79.68-2.95-16.1-3.35L7 23l16.1 2.99ZM23 30H7v-3h16v3Z" fill="#F48024"/></svg></a>
                </div>
            <nav class="site-footer--nav">
                    <div class="site-footer--col">
                        <h5 class="-title"><a href="https://stackoverflow.com" class="js-gps-track" data-gps-track="footer.click({ location: 2, link: 15})">Stack Overflow</a></h5>
                        <ul class="-list js-primary-footer-links">
                            <li><a href="/questions" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 16})">Questions</a></li>
                                <li><a href="/help" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 3 })">Help</a></li>
                        </ul>
                    </div>
                    <div class="site-footer--col">
                        <h5 class="-title"><a href="https://stackoverflow.co/" class="js-gps-track" data-gps-track="footer.click({ location: 2, link: 19 })">Products</a></h5>
                        <ul class="-list">
                            <li><a href="https://stackoverflow.co/teams" class="js-gps-track -link"
                                                 data-ga="[&quot;teams traffic&quot;,&quot;footer - site nav&quot;,&quot;stackoverflow.com/teams&quot;,null,{&quot;dimension4&quot;:&quot;teams&quot;}]"
                                                 data-gps-track="footer.click({ location: 2, link: 29 })">Teams</a></li>
                            <li><a href="https://stackoverflow.co/advertising" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 21 })">Advertising</a></li>
                            <li><a href="https://stackoverflow.co/collectives" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 40 })">Collectives</a></li>
                            <li><a href="https://stackoverflow.co/talent" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 20 })">Talent</a></li>
                        </ul>
                    </div>
                <div class="site-footer--col">
                    <h5 class="-title"><a class="js-gps-track" data-gps-track="footer.click({ location: 2, link: 1 })" href="https://stackoverflow.co/">Company</a></h5>
                    <ul class="-list">
                            <li><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 1 })" href="https://stackoverflow.co/">About</a></li>
                        <li><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 27 })" href="https://stackoverflow.co/company/press">Press</a></li>
                            <li><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 9 })" href="https://stackoverflow.co/company/work-here">Work Here</a></li>
                        <li><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 7 })" href="https://stackoverflow.com/legal">Legal</a></li>
                        <li><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 8 })" href="https://stackoverflow.com/legal/privacy-policy">Privacy Policy</a></li>
                        <li><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 37 })" href="https://stackoverflow.com/legal/terms-of-service">Terms of Service</a></li>
                            <li><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 13 })" href="https://stackoverflow.co/company/contact">Contact Us</a></li>
                            <li class="" id="consent-footer-link"><a class="js-gps-track -link js-cookie-settings" data-gps-track="footer.click({ location: 2, link: 38 })" href="#" data-consent-popup-loader="footer">Cookie Settings</a></li>
                        <li><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 39 })" href="https://stackoverflow.com/legal/cookie-policy">Cookie Policy</a></li>
                    </ul>
                </div>
                <div class="site-footer--col site-footer--categories-nav">
                    <div>
                        <h5 class="-title"><a href="https://stackexchange.com" data-gps-track="footer.click({ location: 2, link: 30 })">Stack Exchange Network</a></h5>
                        <ul class="-list">
                            <li>
                                <a href="https://stackexchange.com/sites#technology" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })">
                                    Technology
                                </a>
                            </li>
                            <li>
                                <a href="https://stackexchange.com/sites#culturerecreation" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })">
                                    Culture &amp; recreation
                                </a>
                            </li>
                            <li>
                                <a href="https://stackexchange.com/sites#lifearts" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })">
                                    Life &amp; arts
                                </a>
                            </li>
                            <li>
                                <a href="https://stackexchange.com/sites#science" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })">
                                    Science
                                </a>
                            </li>
                            <li>
                                <a href="https://stackexchange.com/sites#professional" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })">
                                    Professional
                                </a>
                            </li>
                            <li>
                                <a href="https://stackexchange.com/sites#business" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })">
                                    Business
                                </a>
                            </li>

                            <li class="mt16 md:mt0">
                                <a href="https://api.stackexchange.com/" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })">
                                    API
                                </a>
                            </li>

                            <li>
                                <a href="https://data.stackexchange.com/" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })">
                                    Data
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="site-footer--copyright fs-fine md:mt24">
                <ul class="-list -social md:mb8">
                    <li><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link:4 })" href="https://stackoverflow.blog?blb=1">Blog</a></li>
                    <li><a href="https://www.facebook.com/officialstackoverflow/" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 31 })">Facebook</a></li>
                    <li><a href="https://twitter.com/stackoverflow" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 32 })">Twitter</a></li>
                    <li><a href="https://linkedin.com/company/stack-overflow" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 33 })">LinkedIn</a></li>
                    <li><a href="https://www.instagram.com/thestackoverflow" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 36 })">Instagram</a></li>
                </ul>

                <p class="md:mb0">
Site design / logo &#169; 2023 Stack Exchange Inc; user contributions licensed under <span class='td-underline'><a href="https://stackoverflow.com/help/licensing">CC BY-SA</a></span>.                    <span id="svnrev">rev&nbsp;2023.2.10.43235</span>
                </p>
            </div>
        </div>

    </footer>


                <!-- Google tag (gtag.js) -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-WCZ03SZFCQ"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag() { dataLayer.push(arguments); }
            </script>
        <script>
            StackExchange.ready(function() {

                var ga3Settings = {
                    autoLink: ["stackoverflow.blog","info.stackoverflowsolutions.com","stackoverflowsolutions.com"],
                    sendTitles: true,
                    tracker: window.ga,
                    trackingCodes: [
                        'UA-108242619-1'
                    ],
                    checkDimension: 'dimension42'
                                                    };

                var customGA4Dimensions = {};


                var ga4Settings = {
                    tracker: gtag,
                    trackingCodes: [
                        'G-WCZ03SZFCQ'
                    ],
                    consentsToPerformanceCookies: "denied",
                    consentsToTargetingCookies: "denied",
                    eventParameters: customGA4Dimensions,
                    checkForAdBlock: true
                };

                StackExchange.ga.init({ GA3: ga3Settings, GA4: ga4Settings });


                StackExchange.ga.setDimension('dimension2', '|jquery|date|datepicker|reset|jquery-ui-datepicker|');


                StackExchange.ga.setDimension('dimension3', 'Questions/Show');


                StackExchange.ga.setDimension('dimension7', "1676129150.889406099");

                StackExchange.ga.trackPageView();
            });
        </script>

        
                <div class="ff-sans ps-fixed z-nav-fixed ws4 sm:w-auto p32 sm:p16 bg-black-750 fc-white bar-lg b16 l16 r16 js-consent-banner">
                    <svg aria-hidden="true" class="mln4 mb24 sm:d-none svg-spot spotCookieLg" style="color: var(--theme-button-filled-background-color)" width="96" height="96" viewBox="0 0 96 96">
                        <path d="M35 45.5a7.5 7.5 0 11-15 0 7.5 7.5 0 0115 0zM63.5 63a7.5 7.5 0 100-15 7.5 7.5 0 000 15zm-19 19a7.5 7.5 0 100-15 7.5 7.5 0 000 15z" opacity=".2"/>
                        <path d="M56.99 2.53a23.1 23.1 0 0114.66 6.15h.01l.01.02c.57.55.61 1.27.5 1.74v.07a10.95 10.95 0 01-3.07 4.77 9 9 0 01-6.9 2.5 10.34 10.34 0 01-9.72-10.44v-.08a10 10 0 011.03-3.74l.01-.03.02-.02c.28-.5.82-.92 1.52-.95.63-.02 1.27-.02 1.93.01zm12.04 7.83a20.1 20.1 0 00-12.2-4.83l-.92-.03c-.23.6-.38 1.25-.43 1.94a7.34 7.34 0 006.95 7.34 6 6 0 004.64-1.7c.94-.88 1.6-1.9 1.96-2.72zm15.3 8.76a6.84 6.84 0 00-5.09-.24 7.9 7.9 0 00-3.28 2.05 1.8 1.8 0 00-.3 1.95l.02.02v.02a15.16 15.16 0 008.74 7.47c.64.23 1.32.08 1.8-.33a6.63 6.63 0 001.63-1.97l.01-.03.01-.03c1.67-3.5-.12-7.32-3.54-8.91zm-5.5 3.28c.36-.25.82-.5 1.35-.67.92-.3 1.92-.35 2.89.1 2.14 1 2.92 3.14 2.11 4.88-.12.21-.26.41-.43.6l-.26-.1a12.29 12.29 0 01-5.66-4.81zM32 24a2 2 0 11-4 0 2 2 0 014 0zm12 21a2 2 0 11-4 0 2 2 0 014 0zm36 4a2 2 0 11-4 0 2 2 0 014 0zm-7 21a2 2 0 11-4 0 2 2 0 014 0zM59 81a2 2 0 11-4 0 2 2 0 014 0zM22 63a2 2 0 11-4 0 2 2 0 014 0zm27 7a9 9 0 11-18 0 9 9 0 0118 0zm-3 0a6 6 0 10-12 0 6 6 0 0012 0zM33 41a9 9 0 11-18 0 9 9 0 0118 0zm-15 0a6 6 0 1012 0 6 6 0 00-12 0zm50 11a9 9 0 11-18 0 9 9 0 0118 0zm-3 0a6 6 0 10-12 0 6 6 0 0012 0zM44.08 4.24c.31.48.33 1.09.05 1.58a17.46 17.46 0 00-2.36 8.8c0 9.55 7.58 17.24 16.85 17.24 2.97 0 5.75-.78 8.16-2.15a1.5 1.5 0 012.1.66 12.08 12.08 0 0011 6.74 12.4 12.4 0 007.85-2.75 1.5 1.5 0 012.38.74A45.76 45.76 0 0192 48.16c0 24.77-19.67 44.9-44 44.9S4 72.93 4 48.16C4 25.23 20.84 6.28 42.64 3.58a1.5 1.5 0 011.44.66zM40.22 7C21.32 10.71 7 27.7 7 48.16c0 23.17 18.39 41.9 41 41.9s41-18.73 41-41.9c0-3.52-.42-6.93-1.22-10.2a15.5 15.5 0 01-7.9 2.15c-5.5 0-10.36-2.83-12.97-7.1a19.46 19.46 0 01-8.28 1.85c-11 0-19.86-9.1-19.86-20.24 0-2.7.52-5.26 1.45-7.62zM92 91a2 2 0 100-4 2 2 0 000 4zM7 8.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM82.5 90a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm9.5-7.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM13.5 8a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM80 14.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM53.5 20a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                    </svg>
                    <p class="fs-body2 fw-bold mb4">
                        Your privacy
                    </p>
                    <p class="mb16 s-anchors s-anchors__inherit s-anchors__underlined">
                        By clicking “Accept all cookies”, you agree Stack Exchange can store cookies on your device and disclose information in accordance with our <a href="https://stackoverflow.com/legal/cookie-policy">Cookie Policy</a>.
                    </p>
                    <div class="d-flex gs8 ai-stretch fd-column sm:fd-row">
                        <button class="flex--item s-btn s-btn__primary js-accept-cookies js-consent-banner-hide">
                            Accept all cookies
                        </button>

                        <button class="flex--item s-btn s-btn__filled js-cookie-settings" data-consent-popup-loader="banner">
                            Customize settings
                        </button>
                    </div>
                </div>
    <div id="onetrust-consent-sdk" class="d-none"></div>
    <div id="onetrust-banner-sdk" data-controller="s-modal"></div>
    <div id="ot-pc-content" class="d-none"></div>
    <div id="onetrust-style" class="d-none">&nbsp;</div>
    <div class="d-none js-consent-banner-version" data-consent-banner-version="baseline"></div>

    
    </body>
    </html>

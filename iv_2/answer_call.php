<!DOCTYPE html>
<html class="no-js uk-notouch"><head>
    
    <script async="" id="demandbase_js_lib" src="answer_call_files/hL14VAZP.js"></script><script src="answer_call_files/rules-p-efmoRQHrDUXig.js" async=""></script><script type="text/javascript" async="" src="answer_call_files/dM4.js"></script><script async="" id="demandbase_js_lib" src="answer_call_files/hL14VAZP.js"></script><script type="text/javascript" async="" src="answer_call_files/analytics.js"></script><script src="answer_call_files/quant.js" async="" type="text/javascript"></script><script type="text/javascript" async="" src="answer_call_files/heap-1541905715.js"></script><script async="" src="answer_call_files/uwt.js"></script><script src="answer_call_files/1040773425961662" async=""></script><script src="answer_call_files/1789339278014108" async=""></script><script async="" src="answer_call_files/fbevents.js"></script><script type="text/javascript" async="" src="answer_call_files/54b9e7d97a9b78574800004e.js"></script><script type="text/javascript" async="" src="answer_call_files/insight.js"></script><script type="text/javascript" async="" src="answer_call_files/elqCfg.js"></script><script type="text/javascript" async="" src="answer_call_files/mixpanel-2.js"></script><script async="" src="answer_call_files/gtm.js"></script><script>
  var twilio = twilio || {};
  twilio.environment = "prod";
  twilio.baseUrl = "https://www.twilio.com";
  twilio.SWIFTYPE_ENGINE_KEY = "T68bXEBf7NaKzyRpvbnG";
  twilio.FACEBOOK_APP_ID = "414254592083321";
</script>


<script>
  twilio.account = twilio.account || {};
  
  twilio.account.sid = "AC73232b5c4e39f5456086f59a20ab9e3d";
  

  twilio.user = twilio.user || {};
  
  twilio.user.sid = "US76dc26dbfd98ab992451cb2b33a41a27";
  
  
    twilio.user.visitorSid = "VI004c3c3c3b6c91f15bf5c2b2f6adc7e4";
  
  

</script>


    <script>
  
  window.userBetaFeatures = ["marketing.flex.announcement", "marketplace.otters", "clear-large-cookies", "twilio.quest", "api.video.recordings", "api.messaging.next-gen", "api.fax.v1", "debugger-webhook", "enable-video-rooms", "dual.channel.recordings", "api.wireless", "marketplace"];
</script>

    <script>
  
    window.experiment = '';
  
</script>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width">
    
    
    <meta name="description" content="Learn how to make and receive voice phone calls in five minutes using the Twilio PHP Helper Library and the Twilio Programmable Voice API. Sample code to play MP3s on outbound calls and respond to an inbound call using Twilio and the built in PHP development server.">
    
    
    

    

    <title>
      Programmable Voice Quickstart for PHP - Twilio
    </title>

    
      <link rel="canonical" href="https://www.twilio.com/docs/voice/quickstart/php">
    

    
    <link rel="shortcut icon" href="https://www.twilio.com/docs/static/img/favicons/favicon.9a412796.ico">
    <link rel="apple-touch-icon" href="https://www.twilio.com/docs/static/img/favicons/favicon_57.9a412796.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://www.twilio.com/docs/static/img/favicons/favicon_72.9a412796.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://www.twilio.com/docs/static/img/favicons/favicon_114.9a412796.png">

    
    <link rel="stylesheet" href="answer_call_files/fonts.css">
    <link rel="stylesheet" href="answer_call_files/font-awesome.css">
    <link rel="stylesheet" href="answer_call_files/devicon.css">
    <link rel="stylesheet" href="answer_call_files/twilio-icons.css">
    <link rel="stylesheet" href="answer_call_files/font-mfizz.css">

    
    
    <meta property="og:title" content="Programmable Voice Quickstart for PHP">
    
    
    <meta property="og:description" content="Learn how to make and receive voice phone calls in five minutes using the Twilio PHP Helper Library and the Twilio Programmable Voice API. Sample code to play MP3s on outbound calls and respond to an inbound call using Twilio and the built in PHP development server.">
    
    
    <meta property="og:url" content="https://www.twilio.com/docs/voice/quickstart/php?utm_source=docs&amp;utm_medium=social&amp;utm_campaign=guides_tags">

    
    
    <meta name="twitter:title" content="Programmable Voice Quickstart for PHP">
    
    
    <meta name="twitter:description" content="Learn how to make and receive voice phone calls in five minutes using the Twilio PHP Helper Library and the Twilio Programmable Voice API. Sample code to play MP3s on outbound calls and respond to an inbound call using Twilio and the built in PHP development server.">
    
    

    
    
    <meta property="fb:app_id" content="414254592083321">
    

    

    
      <link rel="stylesheet" href="answer_call_files/docs.css">
    

    
    
  <style type="text/css">.txlive {display: none;}
</style><script type="text/javascript" src="answer_call_files/manifest.jsonp"></script><style type="text/css">.txlive-langselector { position:fixed;z-index:999999;min-width: 120px;line-height:32px;background-color:rgba( 0,0,0,0.75 );box-shadow: 0 0 4px rgba( 0,0,0,0.3 );color: #fff;font-size: 14px;font-family: inherit; }.txlive-langselector * { margin: 0;padding: 0;border: 0;font-size: 100%;font: inherit;vertical-align: baseline;border-radius: 0;-moz-border-radius:0;-webkit-border-radius:0;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-border-radius:0;opacity:1; }.txlive-langselector.txlive-langselector-topleft { top:0;left:0;right:auto;bottom:auto;border-radius: 0 0 2px 0;-moz-border-radius: 0 0 2px 0;-webkit-border-radius: 0 0 2px 0; }.txlive-langselector.txlive-langselector-topright { top:0;left:auto;right:0;bottom:auto;border-radius: 0 2px 0 0;-moz-border-radius: 0 2px 0 0;-webkit-border-radius: 0 2px 0 0; }.txlive-langselector.txlive-langselector-bottomleft { top:auto;left:0;right:auto;bottom:0;border-radius: 0 2px 0 0;-moz-border-radius: 0 2px 0 0;-webkit-border-radius: 0 2px 0 0; }.txlive-langselector.txlive-langselector-bottomright { top:auto;left:auto;right:0;bottom:0;border-radius: 2px 0 0 0;-moz-border-radius: 2px 0 0 0;-webkit-border-radius: 2px 0 0 0; }.txlive-langselector .txlive-langselector-toggle { overflow: hidden;display: block;padding:2px 16px;width: 100%;height:36px;cursor:pointer;cursor:hand; }.txlive-langselector.txlive-langselector-topleft .txlive-langselector-toggle { overflow: hidden;display: block;border-top:2px solid #006f9f;padding:2px 16px;height:36px;line-height:32px;cursor:pointer;cursor:hand; }.txlive-langselector.txlive-langselector-topright .txlive-langselector-toggle { overflow: hidden;display: block;border-top:2px solid #006f9f;padding:2px 16px;height:36px;line-height:32px;cursor:pointer;cursor:hand; }.txlive-langselector.txlive-langselector-bottomleft .txlive-langselector-toggle { overflow: hidden;display: block;border-bottom:2px solid #006f9f;padding:2px 16px;height:36px;line-height:32px;cursor:pointer;cursor:hand; }.txlive-langselector.txlive-langselector-bottomright .txlive-langselector-toggle { overflow: hidden;display: block;border-bottom:2px solid #006f9f;padding:2px 16px;height:36px;line-height:32px;cursor:pointer;cursor:hand; }.txlive-langselector .txlive-langselector-current { float: left;padding: 0;max-width: 200px;overflow:hidden;white-space: nowrap;text-overflow:ellipsis; }.txlive-langselector .txlive-langselector-marker { float: right;display: block;position:relative;width:0;height:0;margin-left:8px;margin-top: 13px;border-right:4px dashed transparent;border-left:4px dashed transparent;}.txlive-langselector-topright .txlive-langselector-marker,.txlive-langselector-topleft .txlive-langselector-marker {border-top:4px solid #fff;}.txlive-langselector-bottomright .txlive-langselector-marker,.txlive-langselector-bottomleft .txlive-langselector-marker {border-bottom:4px solid #fff;}.txlive-langselector-list { position:absolute;width: 100%;margin:0;padding:10px 0;display:none;background-color:#eaf1f7;box-shadow: 0 0 4px rgba( 0,0,0,0.3 );color:#666;list-style-type:none; }.txlive-langselector-list.txlive-langselector-list-opened { display:block; }.txlive-langselector-list > li {padding:0 16px;width:100%;overflow:hidden;white-space: nowrap;text-overflow:ellipsis;}.txlive-langselector-list > li:hover {background-color:#b0b9c1;color:#fff;cursor:pointer;cursor:hand;}.txlive-langselector-topright > .txlive-langselector-list {top:40px;left:auto;right:0;bottom:auto;border-bottom: 1px solid #f4f7f9;}.txlive-langselector-topleft > .txlive-langselector-list {top:40px;left:0;right:auto;bottom:auto;border-bottom: 1px solid #f4f7f9;}.txlive-langselector-bottomright > .txlive-langselector-list {top:auto;left:auto;right:0;bottom:40px;border-top: 1px solid #f4f7f9;}.txlive-langselector-bottomleft > .txlive-langselector-list {top:auto;left:0;right:auto;bottom:40px;border-top: 1px solid #f4f7f9;}.txlive-langselector-topright > .txlive-langselector-list,.txlive-langselector-bottomright > .txlive-langselector-list {border-radius: 2px 0 0 2px;-moz-border-radius: 2px 0 0 2px;-webkit-border-radius: 2px 0 0 2px;}.txlive-langselector-topleft > .txlive-langselector-list,.txlive-langselector-bottomleft > .txlive-langselector-list {border-radius: 0 2px 2px 0;-moz-border-radius: 0 2px 2px 0;-webkit-border-radius: 0 2px 2px 0;}</style><script type="text/javascript" async="" src="answer_call_files/tagjs"></script><img src="answer_call_files/a.gif" border="0" height="1" width="1"><img src="answer_call_files/tr_003.gif" border="0" height="1" width="1"><img src="answer_call_files/seg.png" border="0" height="1" width="1"><img src="answer_call_files/tr.gif" border="0" height="1" width="1"><img src="answer_call_files/seg.asc" border="0" height="1" width="1"><img src="answer_call_files/tr_002.gif" border="0" height="1" width="1"><img src="answer_call_files/seg.gif" border="0" height="1" width="1"><style type="text/css" id="qual_style-ul6"></style><style type="text/css" id="qual_style-u22"></style></head>

  <body class="apireference">

    

	
	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MWRD6S"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window, document, 'script', 'dataLayer', 'GTM-MWRD6S');</script>
	<!-- End Google Tag Manager -->
	


    


    
    <div role="drawer" class="nav__drawer">
  <div role="drawer__wrapper" class="nav__drawer-wrapper">

    <div role="drawer__nav" class="nav__drawer-nav">
      <span class="nav__drawer-auth">
        <a href="https://www.twilio.com/login" class="nav__drawer-auth-link">Log In</a>
        <a href="https://www.twilio.com/try-twilio" class="nav__drawer-auth-link">Sign Up</a>
      </span>
      <a href="#close" role="drawer__close" class="nav__drawer-close">Close</a>
    </div>

    <div class="nav__drawer-menu">
      <div class="nav__drawer-container">
        <div class="nav__drawer-grid">
          <div class="nav__drawer-section">
            <div role="drawer__header" class="nav__drawer-header">Products</div>
            <div role="drawer__dropdown" class="nav__drawer-dropdown">
              <div class="nav__drawer-column">
                <ul>
                  <li>
                    <div class="nav__drawer-link nav__drawer-link--category">Communications Cloud</div>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/sms" class="nav__drawer-link">Programmable SMS</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/voice" class="nav__drawer-link">Programmable Voice</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/video" class="nav__drawer-link">Programmable Video</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/chat" class="nav__drawer-link">Programmable Chat</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/fax" class="nav__drawer-link">Programmable Fax</a>
                  </li>
                </ul>
                <ul>
                  <li>
                    <div class="nav__drawer-link nav__drawer-link--category">Super Network</div>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/phone-numbers" class="nav__drawer-link">Phone Numbers</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/sms/short-codes" class="nav__drawer-link">Short Codes</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/sip-trunking" class="nav__drawer-link">Elastic SIP Trunking</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/wireless" class="nav__drawer-link">Programmable Wireless</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/interconnect" class="nav__drawer-link">Interconnect</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/lookup" class="nav__drawer-link">Lookup</a>
                  </li>
                </ul>
              </div>
              <div class="nav__drawer-column">
                <ul>
                  <li>
                    <a href="https://www.twilio.com/engagement-cloud" class="nav__drawer-link nav__drawer-link--category">Engagement Cloud</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/flex" class="nav__drawer-link">Twilio Flex <span class="nav__drawer-link-badge">New</span></a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/studio" class="nav__drawer-link">Twilio Studio</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/notify" class="nav__drawer-link">Notify</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/taskrouter" class="nav__drawer-link">TaskRouter</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/two-factor-authentication" class="nav__drawer-link">Two-factor Authentication</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/verification" class="nav__drawer-link">Verification</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/proxy" class="nav__drawer-link">Proxy</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/understand" class="nav__drawer-link">Understand</a>
                  </li>
                </ul>
                <ul>
                  <li>
                    <div class="nav__drawer-link nav__drawer-link--category">Runtime</div>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/functions" class="nav__drawer-link">Functions</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/sync" class="nav__drawer-link">Sync</a>
                  </li>
                </ul>
                <ul>
                  <li>
                    <div class="nav__drawer-link nav__drawer-link--category">Marketplace</div>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/marketplace/add-ons" class="nav__drawer-link">Add-ons</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/marketplace/channels" class="nav__drawer-link">Channels</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="nav__drawer-section">
            <div role="drawer__header" class="nav__drawer-header">Use Cases</div>
            <div role="drawer__dropdown" class="nav__drawer-dropdown">
              <ul>
                <li>
                  <a href="https://www.twilio.com/use-cases/access-security" class="nav__drawer-link nav__drawer-link--category">Access Security</a>
                </li>
                <li>
                  <a href="https://www.twilio.com/use-cases/call-and-text-marketing" class="nav__drawer-link nav__drawer-link--category">Call &amp; Text Marketing</a>
                </li>
                <li>
                  <a href="https://www.twilio.com/use-cases/collaboration" class="nav__drawer-link nav__drawer-link--category">Collaboration</a>
                </li>
                <li>
                  <a href="https://www.twilio.com/use-cases/contact-center" class="nav__drawer-link nav__drawer-link--category">Contact Center</a>
                </li>
                <li>
                  <a href="https://www.twilio.com/use-cases/commerce-communications" class="nav__drawer-link nav__drawer-link--category">Commerce Communications</a>
                </li>
              </ul>
              <hr>
            </div>
            <div>
              <div class="nav__drawer-column">
                <ul>
                  <li>
                    <a href="https://signal.twilio.com/" class="nav__drawer-link nav__drawer-link--small">SIGNAL Conference</a>
                  </li>
                  <li>
                    <a href="https://customers.twilio.com/" class="nav__drawer-link nav__drawer-link--small">Customer Stories</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/learn" class="nav__drawer-link nav__drawer-link--small">Learn</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/showcase" class="nav__drawer-link nav__drawer-link--small">Partner Showcase</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/what-is-cloud-communications?" class="nav__drawer-link nav__drawer-link--small">Why Twilio?</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/support-plans" class="nav__drawer-link nav__drawer-link--small">Support Plans</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/enterprise" class="nav__drawer-link nav__drawer-link--small">Enterprise Plan</a>
                  </li>
                </ul>
              </div>
              <div class="nav__drawer-column">
                <ul>
                  <li>
                    <a href="https://www.twilio.com/docs" class="nav__drawer-link nav__drawer-link--small">API &amp; Docs</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/blog" class="nav__drawer-link nav__drawer-link--small">Blog</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/help" class="nav__drawer-link nav__drawer-link--small">Help</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/quest?utm_source=twiliodocs&amp;utm_medium=globalnav&amp;utm_campaign=launch2017" class="nav__drawer-link nav__drawer-link--small">TwilioQuest</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/security" class="nav__drawer-link nav__drawer-link--small">Security</a>
                  </li>
                  <li>
                    <a href="https://www.twilio.com/company/jobs" class="nav__drawer-link nav__drawer-link--small">Jobs at Twilio</a>
                  </li>
                  <li>
                    <a href="http://status.twilio.com/" class="nav__drawer-link nav__drawer-link--small">Status</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="nav__sales">
              <a href="https://www.twilio.com/help/sales" class="nav__sales-button">Talk to Sales</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<div role="nav" class="nav nav--subnav nav--inverted nav--transparent " data-subnav-length="40">
  <div role="nav__menu" class="nav__header">
    <div class="nav__title"><a href="https://www.twilio.com/" class="nav__logo">Twilio</a></div>
    <nav class="nav__menu">
      <ul class="nav__menu-items">
        <li class="nav__menu-item">
          <a href="https://www.twilio.com/help" class="nav__menu-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="5.9" height="13.5" viewBox="-130.2 48.3 5.9 13.5"><path fill="none" stroke="#F22F46" stroke-miterlimit="10" d="M-127.5 60.8c0 .3-.2.5-.5.5s-.5-.2-.5-.5.2-.5.5-.5.5.2.5.5zm-2.2-9.6c0-1.4 1.1-2.5 2.5-2.5s2.5 1.1 2.5 2.5c0 1-.5 1.5-1.3 2.2-.9.9-1.9 1.9-1.9 4.2m-.7-9.3"></path>
            </svg>
            Help
          </a>
        </li>
        
        <li class="nav__menu-item">
          <a href="https://www.twilio.com/console" class="nav__menu-link">
            <svg class="u uk-hidden-small" xmlns="http://www.w3.org/2000/svg" width="10.2" height="13.5" viewBox="0 0 10.2 13.5">
              <circle fill="none" stroke="#b5b7b9" stroke-miterlimit="10" cx="5.1" cy="3" r="2.5"></circle>
              <path fill="none" stroke="#b5b7b9" stroke-miterlimit="10" d="M.5 13.5c0-2.5 2.1-4.6 4.6-4.6s4.6 2.1 4.6 4.6"></path>
            </svg>
            Console
          </a>
        </li>
        
        <li class="nav__menu-item"><a href="#menu" role="nav__activate" class="nav__menu-link nav__menu-activate"><span></span>Menu &amp; Products</a></li>
      </ul>
    </nav>
    <nav role="subnav" class="nav__subnav">
      <header class="nav__subnav-header">
        <a href="https://www.twilio.com/docs" class="nav__subnav-header-link">Docs</a>
        
          <a href="https://www.twilio.com/docs/quickstart" role="subnav__dropdown" class="nav__subnav-link nav__subnav-current">Quickstart</a>
        
      </header>
      <ul role="subnav__items" class="nav__subnav-items">
        <li role="subnav__item" class="nav__subnav-item ">
          <a href="https://www.twilio.com/docs/quickstart" class="nav__subnav-link">Quickstart</a>
        </li>
        <li role="subnav__item" class="nav__subnav-item ">
          <a href="https://www.twilio.com/docs/tutorials" class="nav__subnav-link">Tutorials</a>
        </li>
        <li role="subnav__item" class="nav__subnav-item ">
          <a href="https://www.twilio.com/docs/api" class="nav__subnav-link">API Reference</a>
        </li>
        <li role="subnav__item" class="nav__subnav-item ">
          <a href="https://www.twilio.com/docs/libraries" class="nav__subnav-link">SDKs</a>
        </li>
      </ul>
    </nav>
  </div>
</div>



    
    
      

<div class="docs__pagenav">
  <div class="uk-container uk-container-center">
    <div class="uk-grid">
      <div class="uk-width-3-4 uk-hidden-small">
      
      
        <div class="breadcrumbs">
          
            
          
            
          
            
              <a href="https://www.twilio.com/docs">Twilio Docs</a> &gt;
            
          
            
              <a href="https://www.twilio.com/docs/voice">Programmable Voice</a> &gt;
            
          
            
          
          <span>Programmable Voice Quickstart for PHP</span>
        </div>
      
      </div>

      
      <div class="uk-width-1-1 uk-width-medium-1-4">
  <div class="search">
    
      <form action="/docs/search" method="GET">
    
      <div class="wrapper">
        <input id="search-box" name="q" type="text">
      </div>
      <button type="submit">
        <i class="fa fa-fw fa-search"></i>
      </button>
    </form>
  </div>
</div>

    </div>
  </div>
</div>

    

    <div class="docs-container">
      <div class="uk-container">
        
        
  <div class="coderail-container ">

    <div class="sidenav-column" id="sidenav-column">

      <div class="uk-sticky-placeholder" style="height: 562px; margin: 0px;"><div class="sidenav-sticky-content uk-active" data-uk-sticky="{boundary: true}" style="position: fixed; top: 0px; width: 200px;">

        <div class="collapsible-content">
        <div class="theme-switcher uk-hidden-small">
  <div class="theme-wrapper">
    <a data-theme="light" class="selected">
      <i class="fa fa-fw fa-sun-o"></i>
    </a>
    <a data-theme="dark">
      <i class="fa fa-fw fa-moon-o"></i>
    </a>
  </div>
</div>

        
          <div class="sidenav" style="height: 670px;">
            

<ul id="doc_menu" class="sidenav__section" data-swiftype-index="false">

  <!-- Page entries -->
  
    <li id="dynamic-menu">
      <ul>
        
          
          



  <li>
      <a href="https://www.twilio.com/docs/voice">
          Programmable Voice
      </a>
  </li>



        
          
            
<li class="menu-title expanded" role="menu-title" id="doc-navigation-parent" style="display: list-item;">
  Programmable Voice Quickstart for PHP
</li>
<ul class="menu-accordion expanded" role="menu-accordion" id="doc-navigation" style="display: block;"><li id="doc-nav-1" class=""><a class="intrapage" href="#sign-up-for-twilio-and-get-a-phone-number">Sign up for Twilio and get a phone number</a></li><li id="doc-nav-2" class=""><a class="intrapage" href="#install-php-and-the-twilio-php-helper-library">Install PHP and the Twilio PHP helper library</a></li><li id="doc-nav-3" class=""><a class="intrapage" href="#make-an-outgoing-phone-call-with-php">Make an outgoing phone call with PHP</a></li><li id="doc-nav-4" class="active"><a class="intrapage" href="#receive-and-respond-to-inbound-voice-calls-with-php">Receive and respond to inbound voice calls with PHP</a></li><li id="doc-nav-5"><a class="intrapage" href="#allow-twilio-to-talk-to-your-php-application">Allow Twilio to talk to your PHP application</a></li><li id="doc-nav-6"><a class="intrapage" href="#configure-your-webhook-url">Configure your webhook URL</a></li><li id="doc-nav-7"><a class="intrapage" href="#where-to-next">Where to next?</a></li></ul>

          
          
<li class="menu-title" role="menu-title">

    <span class="heading">Getting Started with Programmable Voice</span>
</li>


<ul class="menu-accordion" role="menu-accordion">

    
        



  <li>
      <a href="https://www.twilio.com/docs/voice/api">
          Overview
      </a>
  </li>



    
        



  <li class="active">
      <a href="https://www.twilio.com/docs/voice/quickstart/php">
          PHP Quickstart
      </a>
  </li>



    
        



  <li>
      <a href="https://www.twilio.com/docs/voice/quickstart/csharp">
          C#/.NET Quickstart
      </a>
  </li>



    
        



  <li>
      <a href="https://www.twilio.com/docs/voice/quickstart/java">
          Java Quickstart
      </a>
  </li>



    
        



  <li>
      <a href="https://www.twilio.com/docs/voice/quickstart/ruby">
          Ruby Quickstart
      </a>
  </li>



    
        



  <li>
      <a href="https://www.twilio.com/docs/voice/quickstart/python">
          Python Quickstart
      </a>
  </li>



    
</ul>

        
          
          
<li class="menu-title" role="menu-title">

    <span class="heading">API Reference</span>
</li>


<ul class="menu-accordion" role="menu-accordion">

    
        



  <li>
      <a href="https://www.twilio.com/docs/voice/api">
          Voice API Overview
      </a>
  </li>



    
        <li>
    <a href="https://www.twilio.com/docs/api/voice/call">
        Calls

        
    </a>
</li>

    
        <ul class="menu-accordion expanded">
    
        <li>
    <a href="https://www.twilio.com/docs/api/voice/call-quality-feedback">
        Call quality feedback

        
    </a>
</li>

    
</ul>
    
        <li>
    <a href="https://www.twilio.com/docs/api/voice/outgoing-caller-ids">
        Outgoing caller IDs

        
    </a>
</li>

    
        <li>
    <a href="https://www.twilio.com/docs/api/voice/conference">
        Conference Calls

        
    </a>
</li>

    
        <ul class="menu-accordion expanded">
    
        <li>
    <a href="https://www.twilio.com/docs/api/voice/conference-participant">
        Conference Participants

        
    </a>
</li>

    
</ul>
    
        <li>
    <a href="https://www.twilio.com/docs/api/voice/queue">
        Call Queues

        
    </a>
</li>

    
        <ul class="menu-accordion expanded">
    
        <li>
    <a href="https://www.twilio.com/docs/api/voice/queue-member">
        Queue members

        
    </a>
</li>

    
</ul>
    
        <li>
    <a href="https://www.twilio.com/docs/api/voice/recording">
        Recordings

        
    </a>
</li>

    
        <ul class="menu-accordion expanded">
    
        <li>
    <a href="https://www.twilio.com/docs/api/voice/recording-transcription">
        Recording transcriptions

        
    </a>
</li>

    
</ul>
    
</ul>

        
          
          
<li class="menu-title" role="menu-title">

    <span class="heading">TwiML</span>
</li>


<ul class="menu-accordion" role="menu-accordion">

    
        <li>
    <a href="https://www.twilio.com/docs/api/twiml/voice-overview">
        Overview

        
    </a>
</li>

    
        <li>
    <a href="https://www.twilio.com/docs/api/twiml/dial">
        &lt;Dial&gt;

        
    </a>
</li>

    
        <ul class="menu-accordion expanded">
    
        <li>
    <a href="https://www.twilio.com/docs/api/twiml/client">
        &lt;Client&gt;

        
    </a>
</li>

    
        <li>
    <a href="https://www.twilio.com/docs/api/twiml/conference">
        &lt;Conference&gt;

        
    </a>
</li>

    
        <li>
    <a href="https://www.twilio.com/docs/api/twiml/number">
        &lt;Number&gt;

        
    </a>
</li>

    
        <li>
    <a href="https://www.twilio.com/docs/api/twiml/queue">
        &lt;Queue&gt;

        
    </a>
</li>

    
        <li>
    <a href="https://www.twilio.com/docs/api/twiml/queues">
        Queueing calls

        
    </a>
</li>

    
        <li>
    <a href="https://www.twilio.com/docs/api/twiml/sim">
        &lt;Sim&gt;

        
    </a>
</li>

    
</ul>
    
        <li>
    <a href="https://www.twilio.com/docs/api/twiml/enqueue">
        &lt;Enqueue&gt;

        
    </a>
</li>

    
        <li>
    <a href="https://www.twilio.com/docs/api/twiml/gather">
        &lt;Gather&gt;

        
    </a>
</li>

    
        <li>
    <a href="https://www.twilio.com/docs/api/twiml/hangup">
        &lt;Hangup&gt;

        
    </a>
</li>

    
        <li>
    <a href="https://www.twilio.com/docs/api/twiml/leave">
        &lt;Leave&gt;

        
    </a>
</li>

    
        <li>
    <a href="https://www.twilio.com/docs/api/twiml/pause">
        &lt;Pause&gt;

        
    </a>
</li>

    
        <li>
    <a href="https://www.twilio.com/docs/api/twiml/play">
        &lt;Play&gt;

        
    </a>
</li>

    
        <li>
    <a href="https://www.twilio.com/docs/api/twiml/record">
        &lt;Record&gt;

        
    </a>
</li>

    
        <li>
    <a href="https://www.twilio.com/docs/api/twiml/redirect">
        &lt;Redirect&gt;

        
    </a>
</li>

    
        <li>
    <a href="https://www.twilio.com/docs/api/twiml/reject">
        &lt;Reject&gt;

        
    </a>
</li>

    
        <li>
    <a href="https://www.twilio.com/docs/api/twiml/say">
        &lt;Say&gt;

        
    </a>
</li>

    
</ul>

        
          
          
<li class="menu-title" role="menu-title">

    <span class="heading">Tutorials</span>
</li>


<ul class="menu-accordion" role="menu-accordion">

    
        



  <li>
      <a href="https://www.twilio.com/docs/voice/tutorials/how-to-make-outbound-phone-calls">
          How to make outbound phone calls
      </a>
  </li>



    
        



  <li>
      <a href="https://www.twilio.com/docs/voice/tutorials/how-to-respond-to-incoming-phone-calls">
          How to respond to incoming phone calls
      </a>
  </li>



    
        



  <li>
      <a href="https://www.twilio.com/docs/voice/tutorials/how-to-modify-calls-in-progress">
          How to modify calls in progress
      </a>
  </li>



    
        



  <li>
      <a href="https://www.twilio.com/docs/voice/tutorials/how-to-record-phone-calls">
          How to record phone calls
      </a>
  </li>



    
        



  <li>
      <a href="https://www.twilio.com/docs/voice/tutorials/how-to-create-conference-calls">
          How to create conference calls
      </a>
  </li>



    
        



  <li>
      <a href="https://www.twilio.com/docs/voice/tutorials/how-to-gather-user-input-via-keypad">
          How to gather user input via keypad
      </a>
  </li>



    
        



  <li>
      <a href="https://www.twilio.com/docs/voice/tutorials/how-to-retrieve-call-logs">
          How to retrieve call logs
      </a>
  </li>



    
        



  <li>
      <a href="https://www.twilio.com/docs/voice/tutorials/click-to-call">
          Build Click-to-Call into your Web Application
      </a>
  </li>



    
        



  <li>
      <a href="https://www.twilio.com/docs/voice/tutorials/build-interactive-voice-response-ivr-phone-tree">
          Build an Interactive Voice Response (IVR) Phone Tree
      </a>
  </li>



    
        



  <li>
      <a href="https://www.twilio.com/docs/voice/tutorials/ivr-screening">
          Build an IVR for Screening and Recording Calls
      </a>
  </li>



    
        



  <li>
      <a href="https://www.twilio.com/docs/voice/tutorials/warm-transfer">
          Build Warm Transfers with Twilio
      </a>
  </li>



    
        



  <li>
      <a href="https://www.twilio.com/docs/voice/tutorials/conference-broadcast">
          Build a Rapid Response Kit with Voice Conference and Broadcasting
      </a>
  </li>



    
        



  <li>
      <a href="https://www.twilio.com/docs/voice/tutorials/call-tracking">
          Build Call Tracking with Twilio Programmable Voice
      </a>
  </li>



    
        



  <li>
      <a href="https://www.twilio.com/docs/voice/tutorials/call-forwarding">
          Build Call Forwarding with Twilio Programmable Voice
      </a>
  </li>



    
        



  <li>
      <a href="https://www.twilio.com/docs/voice/tutorials/browser-calls">
          Build In-Browser Calling with Twilio Client
      </a>
  </li>



    
        



  <li>
      <a href="https://www.twilio.com/docs/voice/tutorials/automated-survey">
          Build an Automated Survey with Twilio Programmable Voice
      </a>
  </li>



    
</ul>

        
          
          
<li class="menu-title" role="menu-title">

    <span class="heading">Programmable Voice SDK for iOS and Android</span>
</li>


<ul class="menu-accordion" role="menu-accordion">

    
        <li>
    <a href="https://www.twilio.com/docs/api/voice-sdk">
        Overview

        
    </a>
</li>

    
        
<li class="menu-title" role="menu-title">

  <span class="heading">Android SDK</span>
</li>


<ul class="menu-accordion" role="menu-accordion">

  
      <li>
    <a href="https://www.twilio.com/docs/api/voice-sdk/android">
        Overview

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/voice-sdk/android/getting-started">
        Getting Started

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/voice-sdk/android/changelog">
        Changelog

        
    </a>
</li>

  
      <li>
    <a href="http://media.twiliocdn.com/sdk/android/voice/latest/docs" target="_blank">
        API Docs

        
            <i class="fa fa-external-link"></i>
        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/voice-sdk/android/faq">
        FAQ

        
    </a>
</li>

  
</ul>

    
        
<li class="menu-title" role="menu-title">

  <span class="heading">iOS SDK</span>
</li>


<ul class="menu-accordion" role="menu-accordion">

  
      <li>
    <a href="https://www.twilio.com/docs/api/voice-sdk/ios">
        Overview

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/voice-sdk/ios/getting-started">
        Getting Started

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/voice-sdk/ios/changelog">
        Changelog

        
    </a>
</li>

  
      <li>
    <a href="https://media.twiliocdn.com/sdk/ios/voice/latest/docs" target="_blank">
        API Docs

        
            <i class="fa fa-external-link"></i>
        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/voice-sdk/ios/faq">
        FAQ

        
    </a>
</li>

  
</ul>

    
        <li>
    <a href="https://www.twilio.com/docs/api/voice-sdk/regions">
        Regions

        
    </a>
</li>

    
        <li>
    <a href="https://www.twilio.com/docs/api/voice-sdk/error-codes">
        Error Codes

        
    </a>
</li>

    
</ul>

        
          
          
<li class="menu-title" role="menu-title">

    <span class="heading">SIP Domains</span>
</li>


<ul class="menu-accordion" role="menu-accordion">

    
        <li>
    <a href="https://www.twilio.com/docs/api/voice/sip-domain">
        Overview

        
    </a>
</li>

    
        
<li class="menu-title" role="menu-title">

  <span class="heading">SIP Domain List Resource</span>
</li>


<ul class="menu-accordion" role="menu-accordion">

  
      <li>
    <a href="https://www.twilio.com/docs/api/voice/sip-domain#sip-domain-list-resource">
        List Resource

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/voice/sip-domain#get-a-list-of-all-domains">
        Get all Domains

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/voice/sip-domain#create-a-sip-domain">
        Create a SIP Domain

        
    </a>
</li>

  
</ul>

    
        
<li class="menu-title" role="menu-title">

  <span class="heading">SIP Domain Instance Resource</span>
</li>


<ul class="menu-accordion" role="menu-accordion">

  
      <li>
    <a href="https://www.twilio.com/docs/api/voice/sip-domain#domain-instance-resource">
        Instance Resource

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/voice/sip-domain#get-an-instance-of-a-sip-domain">
        Get a SIP Domain Resource

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/voice/sip-domain#update-a-sip-domain">
        Update a SIP Domain

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/voice/sip-domain#delete-a-sip-domain-instance">
        Delete a SIP Domain

        
    </a>
</li>

  
</ul>

    
        
<li class="menu-title" role="menu-title">

  <span class="heading">SIP Domain Mapping</span>
</li>


<ul class="menu-accordion" role="menu-accordion">

  
      <li>
    <a href="https://www.twilio.com/docs/api/voice/sip-domain#domain-ipaccesscontrollistmappings-list-subresource">
        IP Access Control Mappings

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/voice/sip-domain#domain-credentiallistmappings-list-subresource">
        Credential List Mapping

        
    </a>
</li>

  
</ul>

    
</ul>

        
          
          
<li class="menu-title" role="menu-title">

    <span class="heading">Twilio Client</span>
</li>


<ul class="menu-accordion" role="menu-accordion">

    
        <li>
    <a href="https://www.twilio.com/docs/api/client">
        Get started with the Twilio Client SDK

        
    </a>
</li>

    
        
<li class="menu-title" role="menu-title">

  <span class="heading">iOS SDK</span>
</li>


<ul class="menu-accordion" role="menu-accordion">

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/ios">
        Overview

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/ios/changelog">
        Changelog

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/ios/twilioclient">
        TwilioClient

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/ios/tcconnection">
        TCConnection

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/ios/tcconnectiondelegate">
        TCConnectionDelegate

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/ios/tcdevice">
        TCDevice

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/ios/tcdevicedelegate">
        TCDeviceDelegate

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/ios/tcpresenceevent">
        TCPresenceEvent

        
    </a>
</li>

  
</ul>

    
        
<li class="menu-title" role="menu-title">

  <span class="heading">Android SDK</span>
</li>


<ul class="menu-accordion" role="menu-accordion">

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/android">
        Overview

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/android/changelog">
        Changelog

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/android/connection">
        Connection

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/android/connection-state">
        Connection.State

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/android/connectionlistener">
        ConnectionListener

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/android/device">
        Device

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/android/device-capability">
        Device.Capability

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/android/device-state">
        Device.State

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/android/devicelistener">
        DeviceListener

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/android/presenceevent">
        PresenceEvent

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/android/twilio">
        Twilio

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/android/twilio-initlistener">
        Twilio.InitListener

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/android/acknowledgements">
        FOSS Acknowledgements

        
    </a>
</li>

  
</ul>

    
        
<li class="menu-title" role="menu-title">

  <span class="heading">JavaScript SDK</span>
</li>


<ul class="menu-accordion" role="menu-accordion">

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/twilio-js">
        Overview

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/quickstart/client/javascript">
        Quickstart

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/twilio-js-14">
        twilio.js 1.4 (GA)

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/device">
        Twilio.Device

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/connection">
        Twilio.Connection

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/changelog">
        Changelog

        
    </a>
</li>

  
      <li>
    <a href="https://www.twilio.com/docs/api/client/twilio-client-javascript-sdk-11-12-migration-guide">
        Migration guide for Javascript SDK 1.1 &amp; 1.2

        
    </a>
</li>

  
</ul>

    
        <li>
    <a href="https://www.twilio.com/docs/api/client/capability-tokens">
        Capability Tokens

        
    </a>
</li>

    
        <li>
    <a href="https://www.twilio.com/docs/api/client/errors">
        Error Codes

        
    </a>
</li>

    
        <li>
    <a href="https://www.twilio.com/docs/api/client/regions">
        Regions

        
    </a>
</li>

    
        <li>
    <a href="https://www.twilio.com/docs/api/client/client-best-practices">
        Best Practices

        
    </a>
</li>

    
</ul>

        
          
          
<li class="menu-title" role="menu-title">

    <span class="heading">Libraries</span>
</li>


<ul class="menu-accordion" role="menu-accordion">

    
        



  <li>
      <a href="https://www.twilio.com/docs/libraries/csharp">
          C#/.NET
      </a>
  </li>



    
        



  <li>
      <a href="https://www.twilio.com/docs/libraries/java">
          Java
      </a>
  </li>



    
        



  <li>
      <a href="https://www.twilio.com/docs/libraries/node">
          Node
      </a>
  </li>



    
        



  <li>
      <a href="https://www.twilio.com/docs/libraries/php">
          PHP
      </a>
  </li>



    
        



  <li>
      <a href="https://www.twilio.com/docs/libraries/python">
          Python
      </a>
  </li>



    
        



  <li>
      <a href="https://www.twilio.com/docs/libraries/ruby">
          Ruby
      </a>
  </li>



    
</ul>

        
          
          
<li class="menu-title" role="menu-title">

    <span class="heading">Troubleshooting</span>
</li>


<ul class="menu-accordion" role="menu-accordion">

    
        



  <li>
      <a href="https://www.twilio.com/docs/voice/troubleshooting">
          Troubleshooting Voice Calls
      </a>
  </li>



    
</ul>

        
        
      </ul>
    </li>
  
</ul>

            <div id="test-element"></div>
          </div>
        
        </div>

        <div class="nav-collapser" style="top: 656px;">
          <div class="nav-collapser-fixed">
            <a data-collapser-action="collapse" class="collapse">
              <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
            <a data-collapser-action="expand" class="expand hidden">
              <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
          </div>
          <div class="nav-collapser-absolute hidden">
            <a data-collapser-action="collapse" class="collapse">
              <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
            <a data-collapser-action="expand" class="expand hidden">
              <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div></div>

    </div>

    <div class="primary-column
        " style="padding-bottom: 570px;">
        <div class="docs-prose">
          
  
    
    <h1 class="page-title ">
      Programmable Voice Quickstart for PHP
    </h1>
  
  
    
    
<div class="block-feedback">
  <form method="POST" action="/docs/feedback">
    <input name="page" value="3646" type="hidden">
    <input name="requested_path" value="/docs/voice/quickstart/php" type="hidden">
    <input name="star_rating" value="" type="hidden">

    <div class="feedback-container">
      Rate this page:
      <ol class="stars">
        <li class="star"></li>
        <li class="star"></li>
        <li class="star"></li>
        <li class="star"></li>
        <li class="star"></li>
      </ol>
      <span class="tooltip">Poor</span>
    </div>

    <div class="feedback-overlay">
      <div class="feedback-modal">
        <button class="feedback-close icon-twilio-close"></button>
        <h2>Thank you for your feedback!</h2>
        <p>We are always striving to improve our documentation quality,
        and your feedback is valuable to us.<br>
        How could this documentation serve you better?</p>
        <textarea name="comment"></textarea>
        <button class="feedback-button feedback-cancel">Cancel</button>
        <button class="feedback-button feedback-ok">Send Feedback</button>
      </div>
    </div>
  </form>
</div>



    
  

  
    <div class="block-rich_text">
      
        

<div class="rich-text"><p>With just a few lines of code, your PHP web application can make and receive phone calls with <a href="https://www.twilio.com/docs/voice">Twilio&nbsp;Programmable Voice</a>.</p>
<p>This PHP Voice quickstart will teach you to do this using Twilio's Voice&nbsp;<a href="https://www.twilio.com/docs/api/voice">REST API</a>,&nbsp;the <a href="https://www.twilio.com/docs/libraries/php">Twilio PHP helper library</a>, the built-in PHP development web server, and&nbsp;<a href="https://ngrok.com/">ngrok</a>&nbsp;to expose your local server to Twilio.</p>
<p>In this quickstart, you will learn how to:</p>
<ol>
<li>Sign up for Twilio and get your first voice-enabled Twilio phone number</li>
<li>Check and install any PHP prerequisites</li>
<li>Make an outbound phone call and play an MP3</li>
<li>Receive and respond to an inbound phone call to read a message to a caller using Text to Speech</li>
</ol>
<p>Prefer to get started by watching a video? Check out our video on&nbsp;<a href="https://www.youtube.com/watch?v=BjLgumtiXa8&amp;t=18s">how to place and receive phone calls with PHP</a>.</p></div>

      
    </div>
  
    <div class="block-next_step  uk-hidden">
      
        <a href="#" class="pulse">
  Show me how to call!
  <i class="fa fa-fw fa-chevron-down"></i>
</a>
      
    </div>
  
    <div class="block-rich_text">
      
        

<div class="rich-text"><h2 id="sign-up-for-twilio-and-get-a-phone-number"><a class="toclink" href="#sign-up-for-twilio-and-get-a-phone-number">Sign up for Twilio and get a phone number</a></h2></div>

      
    </div>
  
    <div class="block-warning_danger">
      
        


<div class="inner-warning_danger" data-level="info">
  <div class="rich-text"><p>Already have a Twilio account and a voice-enabled Twilio phone number? <a href="https://www.twilio.com/login">Log in</a> then&nbsp;<a href="#install-php-and-the-twilio-php-helper-library">jump to the next step</a>.</p></div>
</div>

      
    </div>
  
    <div class="block-rich_text">
      
        

<div class="rich-text"><p>Before you can make a phone call from PHP, you first need a Twilio account. <a href="http://twilio.com/try-twilio">Sign up here for a free trial accoun</a><a href="http://twilio.com/try-twilio">t</a>.</p>
<p>If you already have an account,&nbsp;<a href="https://www.twilio.com/login">log in</a> now.</p>
<p>Next, you'll need a <a href="https://www.twilio.com/console/phone-numbers/incoming">voice-capable Twilio phone number</a>. If you don't own a Twilio phone number with voice capabilities, you need to purchase one now. Navigate to the <a href="https://www.twilio.com/console/phone-numbers/search">Buy a Number</a> page, check "Voice" under capabilities, then click the red "Search" button.</p>
<p><div class="lightbox-img-wrapper"><a class="lightbox-img-anchor" href="https://s3.amazonaws.com/com.twilio.prod.twilio-docs/images/search_voice.width-800.png" data-uk-lightbox=""><img alt="Search for a voice-enabled phone number" class="richtext-image full-width" src="answer_call_files/search_voice.png" height="256" width="800"><div class="lightbox-img-wrapper-overlay"><i class="fa fa-search-plus" aria-hidden="true"></i></div></a></div></p>
<p>Next, you'll see a list of available phone numbers and capabilities. 
Pick your favorite then click the "Buy" button to add it to your 
account.</p>
<p><div class="lightbox-img-wrapper"><a class="lightbox-img-anchor" href="https://s3.amazonaws.com/com.twilio.prod.twilio-docs/images/purchase_voice.width-800.png" data-uk-lightbox=""><img alt="Purchase a voice-enabled phone number from Twilio" class="richtext-image full-width" src="answer_call_files/purchase_voice.png" height="294" width="800"><div class="lightbox-img-wrapper-overlay"><i class="fa fa-search-plus" aria-hidden="true"></i></div></a></div></p>
<p>Now that you have a Twilio account and a voice-capable phone number you have what you need to make a phone call.</p>
<p>Instead of using Twilio's Voice API directly to make phone calls, 
we're going to save time by using the Twilio PHP Helper Library. Let's 
install that next.</p></div>

      
    </div>
  
    <div class="block-next_step uk-hidden">
      
        <a href="#">
  Help me install the helper library.
  <i class="fa fa-fw fa-chevron-down"></i>
</a>
      
    </div>
  
    <div class="block-rich_text">
      
        

<div class="rich-text"><h2 id="install-php-and-the-twilio-php-helper-library"><a class="toclink" href="#install-php-and-the-twilio-php-helper-library">Install PHP and the Twilio PHP helper library</a></h2></div>

      
    </div>
  
    <div class="block-warning_danger">
      
        


<div class="inner-warning_danger" data-level="info">
  <div class="rich-text"><p>If you already have PHP and the Twilio PHP Helper Library installed in your working directory, you're all set for this step. <a href="#make-an-outgoing-phone-call-with-php">Feel free to skip ahead</a> and move on to sending your first text message.</p></div>
</div>

      
    </div>
  
    <div class="block-rich_text">
      
        

<div class="rich-text"><p>To make your&nbsp;first outbound voice call, 
let's make sure you're set up with PHP and able to install Twilio's PHP 
Helper library.</p>
<p>When doing web development in PHP, we <strong>strongly</strong> suggest using <a href="https://getcomposer.org/">Composer</a>
 for your package management. This quickstart relies on Composer to 
install the PHP Helper library. (If you choose not to use Composer, you 
can find manual Twilio PHP installation instructions on the <a href="https://www.twilio.com/docs/libraries/php">PHP Helper Library page</a>.)</p>
<h4 id="install-php"><a class="toclink" href="#install-php">Install PHP</a></h4>
<p><strong>If you’re using a Mac or *nix machine</strong>, you may already have PHP installed. In your terminal, run:</p>
<div class="codehilite"><pre><span class="code-line">php --version
</span></pre></div>
<p>If PHP is <em>not</em> installed, follow the <a href="http://php.net/manual/en/install.php">PHP installation instructions</a>.</p>
<p><strong>If you're using a Windows machine</strong>, follow the <a href="http://php.net/manual/en/install.windows.php">official PHP tutorial to install PHP</a>.</p></div>

      
    </div>
  
    <div class="block-warning_danger">
      
        


<div class="inner-warning_danger" data-level="danger">
  <div class="rich-text"><p>While many versions of PHP 5.x and PHP 7.x will work for this quickstart, please pay attention to&nbsp;<a href="http://php.net/supported-versions.php">supported PHP releases</a>.<strong>&nbsp;</strong>When doing web development,<strong> always update</strong>&nbsp;your PHP version to a release which receives security updates.</p></div>
</div>

      
    </div>
  
    <div class="block-rich_text">
      
        

<div class="rich-text"><h4 id="install-composer-for-package-management"><a class="toclink" href="#install-composer-for-package-management">Install Composer for package management</a></h4>
<p>Composer is the <em>de facto</em> canonical package manager for PHP 
web development. For this tutorial, we strongly suggest installing 
Composer. It will be very useful for your other web development as well.</p>
<ul>
<li><a href="https://getcomposer.org/doc/00-intro.md#installation-windows">Install Composer for Windows</a></li>
<li><a href="https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx">Install Composer for Mac OSX, Linux, or Unix</a></li>
</ul>
<h4 id="install-the-twilio-php-helper-library"><a class="toclink" href="#install-the-twilio-php-helper-library">Install the Twilio PHP Helper Library</a></h4>
<p>Now we need to install the Twilio PHP Helper Library.&nbsp;</p>
<p>If you are using Composer, there are two ways to do this. First, 
navigate to the directory where you will complete this quickstart then 
choose one of the following methods to install the helper library.</p>
<p>From a terminal, you can run the following command:</p>
<div class="codehilite"><pre><span class="code-line">composer require twilio/sdk
</span></pre></div>
<p><strong>Or</strong><strong>,</strong> you can create a file named <code>composer.json</code>&nbsp;instead. In that file, add:</p>
<div class="codehilite"><pre><span class="code-line">{
</span><span class="code-line">    "require": {
</span><span class="code-line">        "twilio/sdk": "^5.0"
</span><span class="code-line">    }
</span><span class="code-line">}
</span></pre></div>
<p>Next, run</p>
<div class="codehilite"><pre><span class="code-line">composer install
</span></pre></div>
<p>Composer will grab the latest 5.x version of the Twilio PHP Helper Library.</p>
<p>For a non-composer installation <a href="https://www.twilio.com/docs/libraries/php#using-without-composer">follow the instructions here</a>. That page has instructions on how to change the code samples here to match your manual install.</p></div>

      
    </div>
  
    <div class="block-next_step uk-hidden">
      
        <a href="#">
  All installed and ready to call!
  <i class="fa fa-fw fa-chevron-down"></i>
</a>
      
    </div>
  
    <div class="block-rich_text">
      
        

<div class="rich-text"><h2 id="make-an-outgoing-phone-call-with-php"><a class="toclink" href="#make-an-outgoing-phone-call-with-php">Make an outgoing phone call with PHP</a></h2>
<p>Now that we have PHP and the PHP Helper Library&nbsp;installed, we 
can make an outgoing phone call in a single API request. Create a new 
file called <code>make_call.php</code> and type or paste in this code sample.</p></div>

      
    </div>
  
    <div class="block-code_sample">
      
        <div class="md-code-sample" id="code-make-a-voice-call" data-title="Make a voice call" data-pref="server">

  <div class="inline-mode">
    <div id="coderail" class="code-rail code-rail-inline">

  <div class="rail-placeholder"></div>

  <div class="rail-header">

    <div class="rail-header-wrapper">

      <div class="rail-title">
        <div class="title-content inner">
          <span>Make a voice call</span>
          
        </div>
      </div>

      
      <div class="rail-current-language uk-hidden">
        <div class="inner">
          <span>PHP</span>
          <i class="fa fa-fw fa-chevron-down"></i>
        </div>
      </div>
      

    </div>

  </div>

  <div class="rail-toolbar">

    

    <div class="toolbar">
      <a href="#code" class="uk-hidden tab" data-code="">Code</a>
      <a href="#output" class="uk-hidden tab inactive" data-output="">Output</a>

      <span class="separator uk-hidden"></span>

      <a id="download" class="uk-hidden">
        <i class="fa fa-fw fa-download"></i>
        <span>Download Project</span>
      </a>

      <a id="github" class="" target="_blank" href="https://github.com/TwilioDevEd/api-snippets/blob/master/quickstart/php/voice/make_call/make_call.5.x.php">
        <i class="fa fa-fw fa-github-square"></i>
        <span>View on GitHub</span>
      </a>

      <a id="defrosty" class="fr-on" href="#defrosty" style="display: none;">
        <i class="fa fa-fw fa-eye"></i>
        <span class="wider-tooltip">Toggle Highlighted Lines</span>
      </a>

      <a id="clippy" href="#copy">
        <i class="fa fa-fw fa-copy"></i>
        <span>Copy to Clipboard</span>
      </a>

      <a id="linkcode" href="#linkcode">
        <i class="fa fa-fw fa-link"></i>
        <span>Link to this Code</span>
      </a>
    </div>
  </div>

  <div class="rail-samples">
    <ul>
      
        <li>
          <a href="#code-make-a-voice-call">
            Make a voice call
          </a>
        </li>
      
    </ul>
  </div>

  <div class="rail-languages"></div>

  <div class="rail-content">
    <div class="rail-content-inner">
      
        

<div data-sample-title="Make a voice call" data-sample="code-make-a-voice-call" data-pref="server" data-download-url="" data-github-url="https://github.com/TwilioDevEd/api-snippets/blob/master/quickstart/php/voice/make_call/{{ filename }}" data-sample-id="2361" class="code-sample" style="display: block;">

<div class="current-sdks-versions" data-ext-cs="5.x" data-ext-py="6.x" data-ext-rb="5.x" data-ext-php="5.x" data-ext-js="3.x" data-ext-java="7.x"></div>
<div class="alert-old-sdk" style="display:none;">
  You are viewing an outdated version of this SDK.
</div>

<div class="sample-language-data" style="display:none;">
  <select>
    
      <option value="php" selected="selected">PHP</option>
    
  </select>
</div>


  
    <div class="sample-version-tabs" data-ext="php" style="display: block;">
      <div class="sample-version-tabs-inner">
        
        <span>SDK Version:</span>
        
        <ul>
          
            <li class="sample-version-tab active" data-version="5.x" data-default-version="">5.x</li>
          
        </ul>
      </div>
    </div>
  




<div class="snippet-container">
  
    <pre data-ext="php" data-version="5.x" data-filename="make_call.5.x.php" class="codehilite"><code><span class="code-line"><span class="cp">&lt;?php</span>
</span><span class="code-line"><span class="k">require</span> <span class="no">__DIR__</span> <span class="o">.</span> <span class="s1">'/vendor/autoload.php'</span><span class="p">;</span>
</span><span class="code-line"><span class="k">use</span> <span class="nx">Twilio\Rest\Client</span><span class="p">;</span>
</span><span class="code-line">
</span><span class="code-line"><span class="c1">// Your Account SID and Auth Token from twilio.com/console</span>
</span><span class="code-line"><span class="nv">$account_sid</span> <span class="o">=</span> <span class="s1">'ACXXXXXXXXXXXXXXXXXXXXXXXXXXXX'</span><span class="p">;</span>
</span><span class="code-line"><span class="nv">$auth_token</span> <span class="o">=</span> <span class="s1">'your_auth_token'</span><span class="p">;</span>
</span><span class="code-line"><span class="c1">// In production, these should be environment variables. E.g.:</span>
</span><span class="code-line"><span class="c1">// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]</span>
</span><span class="code-line">
</span><span class="code-line"><span class="c1">// A Twilio number you own with SMS capabilities</span>
</span><span class="code-line"><span class="nv">$twilio_number</span> <span class="o">=</span> <span class="s2">"+15017122661"</span><span class="p">;</span>
</span><span class="code-line">
</span><span class="code-line"><span class="c1">// Where to make a voice call (your cell phone?)</span>
</span><span class="code-line"><span class="nv">$to_number</span> <span class="o">=</span> <span class="s2">"+15558675310"</span><span class="p">;</span>
</span><span class="code-line">
</span><span class="code-line"><span class="nv">$client</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Client</span><span class="p">(</span><span class="nv">$account_sid</span><span class="p">,</span> <span class="nv">$auth_token</span><span class="p">);</span>
</span><span class="code-line"><span class="nv">$client</span><span class="o">-&gt;</span><span class="na">account</span><span class="o">-&gt;</span><span class="na">calls</span><span class="o">-&gt;</span><span class="na">create</span><span class="p">(</span>  
</span><span class="code-line">    <span class="nv">$to_number</span><span class="p">,</span>
</span><span class="code-line">    <span class="nv">$twilio_number</span><span class="p">,</span>
</span><span class="code-line">    <span class="k">array</span><span class="p">(</span>
</span><span class="code-line">        <span class="s2">"url"</span> <span class="o">=&gt;</span> <span class="s2">"http://demo.twilio.com/docs/voice.xml"</span>
</span><span class="code-line">    <span class="p">)</span>
</span><span class="code-line"><span class="p">);</span>
</span></code></pre>
  
</div>

<div class="output-snippet-container" style="display: none;">
  
</div>

</div>


      
    </div>
  </div>
</div>

    <div class="rail-caption">
      Make a Voice call with the PHP Helper Library
    </div>
  </div>

  <div class="button-mode">
    <h5 class="title">
      <i class="fa fa-fw fa-code"></i>
      Make a voice call
    </h5>
    
      <p>Make a Voice call with the PHP Helper Library</p>
    
    <div class="active-tail"></div>
  </div>

</div>
      
    </div>
  
    <div class="block-rich_text">
      
        

<div class="rich-text"><p>When you run the code, it will start a phone 
call between the two numbers passed as arguments. We've added two 
variables to show you the 'From' and 'To' number and they will map like 
this:</p>
<ul>
<li>(From) / <code>twilio_number</code>: The Twilio phone number you purchased</li>
<li>(To) / <code>to_number</code>: The number to call (perhaps your cell phone?)</li>
</ul>
<p>Inside the array, the <code>url</code> argument points to some TwiML.
 TwiML is a language Twilio uses internally to initiate or respond to 
actions, such as a sequence for a voice call. This particular TwiML 
causes Twilio to read a message with text to speech then play an MP3 to 
the 'To' / <code>to_number</code> number.</p>
<p>Before you can run this code, you need to swap in a couple of account specific values.</p>
<h4 id="replace-the-placeholder-credentials-with-your-own"><a class="toclink" href="#replace-the-placeholder-credentials-with-your-own">Replace the placeholder credentials with your own</a></h4>
<p>Substitute the placeholder values for <code>account_sid</code> and <code>auth_token</code> with your Twilio account credentials.</p>
<p>To find these, visit&nbsp;<a href="https://www.twilio.com/console">https://www.twilio.com/console</a> and log in. On this page, you’ll find your unique <code>Account SID</code> and <code>Auth Token</code>. You can reveal the <code>Auth Token</code> by clicking the 'eye' icon:</p>
<p><div class="lightbox-img-wrapper"><a class="lightbox-img-anchor" href="https://s3.amazonaws.com/com.twilio.prod.twilio-docs/images/account_sid_auth_token.width-800.png" data-uk-lightbox=""><img alt="Reveal Your Auth Token" class="richtext-image full-width" src="answer_call_files/account_sid_auth_token.png" height="117" width="463"><div class="lightbox-img-wrapper-overlay"><i class="fa fa-search-plus" aria-hidden="true"></i></div></a></div></p>
<p>Open <code>make_call.php</code> and replace the values for <code>account_sid</code> and <code>auth_token</code>&nbsp;with your unique values.</p></div>

      
    </div>
  
    <div class="block-warning_danger">
      
        


<div class="inner-warning_danger" data-level="danger">
  <div class="rich-text"><p>Note: It's&nbsp;easier to hardcode your 
credentials for this quickstart, but you should use environment 
variables to keep them secret in production. Check out <a href="https://www.twilio.com/blog/2017/01/how-to-set-environment-variables.html">how to set environment variables</a>&nbsp;for more information, and see the code comments for a reading example. <a href="https://github.com/vlucas/phpdotenv">This repo</a> is also an excellent reference for environment variables in PHP.</p></div>
</div>

      
    </div>
  
    <div class="block-rich_text">
      
        

<div class="rich-text"><h4 id="replace-the-twilio_number-phone-number"><a class="toclink" href="#replace-the-twilio_number-phone-number">Replace the <em>twilio_number</em> phone number</a></h4>
<p>Earlier, you purchased or found a&nbsp;<a href="https://www.twilio.com/console/phone-numbers/incoming">voice-enabled phone number</a>. Paste the number into the <code>twilio_number</code> variable using&nbsp;<a href="https://www.twilio.com/docs/glossary/what-e164">E.164</a> formatting:</p>
<p><code>[+][country code][phone number including area code]</code></p>
<p>For example, <code>+18005551212</code>.</p>
<h4 id="replace-the-to_number-phone-number"><a class="toclink" href="#replace-the-to_number-phone-number">Replace the <em>to_number</em> phone number</a></h4>
<p>Again using&nbsp;<a href="https://www.twilio.com/docs/glossary/what-e164">E.164</a>
 formatting, substitute the phone number which will receive the outgoing
 call. You should use a personal phone number here so you'll receive the
 call and hear the magic after running the code.</p></div>

      
    </div>
  
    <div class="block-warning_danger">
      
        


<div class="inner-warning_danger" data-level="warning">
  <div class="rich-text"><p>If you're using a Twilio trial account, you 
can only make outgoing calls to phone numbers you have verified with 
Twilio.&nbsp;Phone numbers can be verified with your&nbsp;<a href="https://www.twilio.com/console/phone-numbers/verified">Twilio Console's Verified Caller IDs</a>. For full trial account limitations, see our guide on&nbsp;<a href="https://www.twilio.com/docs/usage/tutorials/how-to-use-your-free-trial-account">how to work with your free Twilio trial account</a>.</p></div>
</div>

      
    </div>
  
    <div class="block-rich_text">
      
        

<div class="rich-text"><p>Save the script and invoke it to test an outgoing call. For OSX and *NIX, this should look like:</p>
<div class="codehilite"><pre><span class="code-line">php make_call.php
</span></pre></div>
<p>If you substituted everything correctly, you'll soon hear a great message and a brand new song! If not, don't <em>ever</em> give up and follow the console prompts.</p></div>

      
    </div>
  
    <div class="block-next_step uk-hidden">
      
        <a href="#">
  You didn't let me down! What's next?
  <i class="fa fa-fw fa-chevron-down"></i>
</a>
      
    </div>
  
    <div class="block-rich_text">
      
        

<div class="rich-text"><h2 id="receive-and-respond-to-inbound-voice-calls-with-php"><a class="toclink" href="#receive-and-respond-to-inbound-voice-calls-with-php">Receive and respond to inbound voice calls with PHP</a></h2>
<p>When someone calls your Twilio phone number, Twilio makes an HTTP 
request to your server asking for instructions on how to handle the 
call. For this quickstart, we’ll reply to the sender and thank them for 
their phone call using Twilio's text to speech capabilities.</p>
<p>Again, we'll use the Twilio PHP Library for this step. We will use 
PHP's built-in development webserver in combination with ngrok to 
instruct Twilio on how to manage the call.</p>
<p>Create a new file,&nbsp;<code>answer_call.php</code>, in the same directory as <code>make_call.php</code>.&nbsp;Then copy and paste or type the following code.</p>
<p>(Note: <em>if you do not</em> use the same directory as you did when we made our first call, please follow the PHP Helper Library install step above)</p></div>

      
    </div>
  
    <div class="block-code_sample">
      
        <div class="md-code-sample active" id="code-receive-an-incoming-voice-call" data-title="Receive an incoming voice call" data-pref="server">

  <div class="inline-mode">
    <div id="coderail" class="code-rail code-rail-inline">

  <div class="rail-placeholder"></div>

  <div class="rail-header">

    <div class="rail-header-wrapper">

      <div class="rail-title">
        <div class="title-content inner">
          <span>Receive an incoming voice call</span>
          
        </div>
      </div>

      
      <div class="rail-current-language uk-hidden">
        <div class="inner">
          <span>PHP</span>
          <i class="fa fa-fw fa-chevron-down"></i>
        </div>
      </div>
      

    </div>

  </div>

  <div class="rail-toolbar">

    

    <div class="toolbar">
      <a href="#code" class="uk-hidden tab" data-code="">Code</a>
      <a href="#output" class="uk-hidden tab inactive" data-output="">Output</a>

      <span class="separator uk-hidden"></span>

      <a id="download" class="uk-hidden">
        <i class="fa fa-fw fa-download"></i>
        <span>Download Project</span>
      </a>

      <a id="github" class="" target="_blank" href="https://github.com/TwilioDevEd/api-snippets/blob/master/quickstart/php/voice/answer_call/answer_call.5.x.php">
        <i class="fa fa-fw fa-github-square"></i>
        <span>View on GitHub</span>
      </a>

      <a id="defrosty" class="fr-on" href="#defrosty" style="display: none;">
        <i class="fa fa-fw fa-eye"></i>
        <span class="wider-tooltip">Toggle Highlighted Lines</span>
      </a>

      <a id="clippy" href="#copy">
        <i class="fa fa-fw fa-copy"></i>
        <span>Copy to Clipboard</span>
      </a>

      <a id="linkcode" href="#linkcode">
        <i class="fa fa-fw fa-link"></i>
        <span>Link to this Code</span>
      </a>
    </div>
  </div>

  <div class="rail-samples">
    <ul>
      
        <li>
          <a href="#code-receive-an-incoming-voice-call">
            Receive an incoming voice call
          </a>
        </li>
      
    </ul>
  </div>

  <div class="rail-languages"></div>

  <div class="rail-content">
    <div class="rail-content-inner">
      
        

<div data-sample-title="Receive an incoming voice call" data-sample="code-receive-an-incoming-voice-call" data-pref="server" data-download-url="" data-github-url="https://github.com/TwilioDevEd/api-snippets/blob/master/quickstart/php/voice/answer_call/{{ filename }}" data-sample-id="2360" class="code-sample" style="display: block;">

<div class="current-sdks-versions" data-ext-cs="5.x" data-ext-py="6.x" data-ext-rb="5.x" data-ext-php="5.x" data-ext-js="3.x" data-ext-java="7.x"></div>
<div class="alert-old-sdk" style="display:none;">
  You are viewing an outdated version of this SDK.
</div>

<div class="sample-language-data" style="display:none;">
  <select>
    
      <option value="php" selected="selected">PHP</option>
    
  </select>
</div>


  
    <div class="sample-version-tabs" data-ext="php" style="display: block;">
      <div class="sample-version-tabs-inner">
        
        <span>SDK Version:</span>
        
        <ul>
          
            <li class="sample-version-tab active" data-version="5.x" data-default-version="">5.x</li>
          
        </ul>
      </div>
    </div>
  




<div class="snippet-container">
  
    <pre data-ext="php" data-version="5.x" data-filename="answer_call.5.x.php" class="codehilite"><code><span class="code-line"><span class="cp">&lt;?php</span>
</span><span class="code-line"><span class="k">require</span> <span class="no">__DIR__</span> <span class="o">.</span> <span class="s1">'/vendor/autoload.php'</span><span class="p">;</span>
</span><span class="code-line"><span class="k">use</span> <span class="nx">Twilio\Twiml</span><span class="p">;</span>
</span><span class="code-line">
</span><span class="code-line"><span class="c1">// Start our TwiML response</span>
</span><span class="code-line"><span class="nv">$response</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Twiml</span><span class="p">;</span>
</span><span class="code-line">
</span><span class="code-line"><span class="c1">// Read a message aloud to the caller</span>
</span><span class="code-line"><span class="nv">$response</span><span class="o">-&gt;</span><span class="na">say</span><span class="p">(</span>
</span><span class="code-line">    <span class="s2">"Thank you for calling! Have a great day."</span><span class="p">,</span> 
</span><span class="code-line">    <span class="k">array</span><span class="p">(</span><span class="s2">"voice"</span> <span class="o">=&gt;</span> <span class="s2">"alice"</span><span class="p">)</span>
</span><span class="code-line"><span class="p">);</span>
</span><span class="code-line">
</span><span class="code-line"><span class="k">echo</span> <span class="nv">$response</span><span class="p">;</span>
</span></code></pre>
  
</div>

<div class="output-snippet-container" style="display: none;">
  
</div>

</div>


      
    </div>
  </div>
</div>

    <div class="rail-caption">
      Receive and respond a Voice call with the PHP Helper Library
    </div>
  </div>

  <div class="button-mode">
    <h5 class="title">
      <i class="fa fa-fw fa-code"></i>
      Receive an incoming voice call
    </h5>
    
      <p>Receive and respond a Voice call with the PHP Helper Library</p>
    
    <div class="active-tail"></div>
  </div>

</div>
      
    </div>
  
    <div class="block-rich_text">
      
        

<div class="rich-text"><p>Save <code>answer_call.php</code>, then start a local PHP development server with:</p>
<div class="codehilite"><pre><span class="code-line">php -S localhost:8000
</span></pre></div>
<p>In a browser tab open the URL <a href="http://localhost:8000/answer_call.php">http://localhost:8000/answer_call.php</a>.</p>
<p>If everything went well, you should now see XML in your browser with 
the message we'd like to read to incoming calls. That's all the code you
 need - there are just a few more steps before everything is wired up.</p>
<p>Next, let's expose this endpoint to Twilio.</p></div>

      
    </div>
  
    <div class="block-next_step">
      
        <a href="#">
  Very straightforward. How does Twilio talk to my new application?
  <i class="fa fa-fw fa-chevron-down"></i>
</a>
      
    </div>
  
    <div class="block-rich_text uk-hidden">
      
        

<div class="rich-text"><h2 id="allow-twilio-to-talk-to-your-php-application"><a class="toclink" href="#allow-twilio-to-talk-to-your-php-application">Allow Twilio to talk to your PHP application</a></h2>
<p>Before we can instruct Twilio on what to do in response to an 
incoming call, you first need to expose your server to the public. When 
you run your local development server, the odds are very high it is only
 accessible from your local network. But don't worry - we'll show you an
 easy way to test your server.</p>
<p>Many Twilio products and services use <a href="https://www.twilio.com/docs/glossary/what-is-a-webhook">webhooks</a>
 to communicate with your application. For example, when Twilio receives
 an incoming call, it reaches out to a specific URL you provide to 
search for instructions on how to handle the response. The small piece 
of code in <code>answer_call.php</code> is an example of one instruction
 you can use to 'speak' back to the caller. However, when you run the 
server it will only be exposed to you locally, not to the broader 
public. We need to figure out a way to fix that.</p>
<p>While there are <em>many</em> ways to make this code public (for example by deploying it to a host), we recommend a tool called <em>ngrok</em>.
 When you start ngrok, it provides a unique URL on the ngrok.io domain 
and forwards incoming requests to your local development environment.</p>
<p>The architecture looks like this:</p>
<p><div class="lightbox-img-wrapper"><a class="lightbox-img-anchor" href="https://s3.amazonaws.com/com.twilio.prod.twilio-docs/images/webhook_ngrok_flow.width-800.png" data-uk-lightbox=""><img alt="How ngrok helps Twilio reach your local server" class="richtext-image full-width" src="answer_call_files/webhook_ngrok_flow.png" height="355" width="800"><div class="lightbox-img-wrapper-overlay"><i class="fa fa-search-plus" aria-hidden="true"></i></div></a></div></p>
<p>If you don’t already use ngrok, visit the <a href="https://ngrok.com/download">download page</a> and install it for your operating system.</p>
<p>If you're working on Mac or Linux, you're all set after you decompress it. If you're on Windows, follow our guide on&nbsp;<a href="https://www.twilio.com/docs/usage/tutorials/how-use-ngrok-windows-and-visual-studio-test-webhooks">how to&nbsp;install and configure ngrok&nbsp;on Windows</a>. For more info on ngrok (including some great tips and tricks) check out our&nbsp;<a href="https://www.twilio.com/blog/2015/09/6-awesome-reasons-to-use-ngrok-when-testing-webhooks.html">this ngrok blog post</a>.</p>
<p>Once you download an install ngrok, open a new terminal tab or window
 (leaving your development server running) and start it with this 
command:</p>
<div class="codehilite"><pre><span class="code-line">./ngrok http 8000
</span></pre></div>
<p>You should see output similar to this:</p>
<p><div class="lightbox-img-wrapper"><a class="lightbox-img-anchor" href="https://s3.amazonaws.com/com.twilio.prod.twilio-docs/images/ngrok_output.width-800.png" data-uk-lightbox=""><img alt="Ngrok server terminal output" class="richtext-image full-width" src="answer_call_files/ngrok_output.png" height="242" width="800"><div class="lightbox-img-wrapper-overlay"><i class="fa fa-search-plus" aria-hidden="true"></i></div></a></div></p>
<p>Copy the public URL from this output, paste it into your browser, and append <code>answer_call.php</code>. You should see the same XML you saw previously, except <em>now</em> you can access this from anywhere you've got internet access.</p>
<p>Now that you're public let's tell Twilio where to find the server.</p></div>

      
    </div>
  
    <div class="block-next_step uk-hidden">
      
        <a href="#">
  My server is public. Teach me how to receive phone calls!
  <i class="fa fa-fw fa-chevron-down"></i>
</a>
      
    </div>
  
    <div class="block-rich_text uk-hidden">
      
        

<div class="rich-text"><h2 id="configure-your-webhook-url"><a class="toclink" href="#configure-your-webhook-url">Configure your webhook URL</a></h2>
<p>Now that your server is publically accessible, you need to configure 
your Twilio phone number to access your webhook URL when new calls come 
in.</p>
<ol>
<li>Visit the <a href="https://www.twilio.com/console/phone-numbers/incoming">Console's Numbers page</a>.</li>
<li>Click on your voice-enabled phone number.</li>
<li>Find the "Voice &amp; Fax" section. Make sure the "Accept Incoming" 
selection is set to "Voice Calls." The default "Configure With" 
selection is what you’ll need: "<a href="https://www.twilio.com/docs/glossary/what-is-a-webhook">Webhooks</a>/<a href="https://www.twilio.com/docs/glossary/what-is-twilio-markup-language-twiml">TwiML</a>...".</li>
<li>In the "A Call Comes In" section, select "Webhook" and paste in the URL you want to use, appending<code> /answer_call.php</code> :</li>
</ol>
<p><div class="lightbox-img-wrapper"><a class="lightbox-img-anchor" href="https://s3.amazonaws.com/com.twilio.prod.twilio-docs/images/answer_call_ngrok.width-800.png" data-uk-lightbox=""><img alt="Voice call webhook with ngrok" class="richtext-image full-width" src="answer_call_files/answer_call_ngrok.png" height="238" width="800"><div class="lightbox-img-wrapper-overlay"><i class="fa fa-search-plus" aria-hidden="true"></i></div></a></div></p>
<p>Save your changes, and you're ready to roll!</p>
<h4 id="test-your-application"><a class="toclink" href="#test-your-application">Test your application</a></h4>
<p>If your local development server is still running and ngrok is still going, you're ready for the fun part - testing!</p>
<p>Make a phone call to your Twilio phone number. You'll see and hear a number of things happen in short succession:</p>
<ol>
<li>You'll see an HTTP request in the ngrok console</li>
<li>The development server will print out some messages to the console</li>
<li>You'll hear the message once the call connects</li>
</ol>
<p>And there you go - working outbound and inbound calling with PHP.</p></div>

      
    </div>
  
    <div class="block-next_step uk-hidden">
      
        <a href="#">
  It worked! What's next?
  <i class="fa fa-fw fa-chevron-down"></i>
</a>
      
    </div>
  
    <div class="block-rich_text uk-hidden">
      
        

<div class="rich-text"><h2 id="where-to-next"><a class="toclink" href="#where-to-next">Where to next?</a></h2>
<p>Now you know the basics of making&nbsp;and responding to phone calls with PHP.</p>
<p>This PHP app only used the <a href="https://www.twilio.com/docs/voice/twiml/say">&lt;Say&gt; TwiML verb</a>
 to read a message&nbsp;to the caller using text to speech. With 
different TwiML verbs, you can create other powerful constructs and call
 flows. Try a few, such as&nbsp;<a href="https://www.twilio.com/docs/voice/twiml/record">&lt;Record&gt;</a>, <a href="https://www.twilio.com/docs/voice/twiml/gather">&lt;Gather&gt;</a>, and <a href="https://www.twilio.com/docs/voice/twiml/conference">&lt;Conference&gt;</a>.</p>
<p>Check out these pages to learn more:</p>
<ul>
<li><a href="https://www.twilio.com/docs/voice/tutorials/how-to-gather-user-input-via-keypad-php">Gather user input via keypad (DTMF tones) in PHP</a></li>
<li>How to <a href="https://www.twilio.com/docs/voice/tutorials/how-to-record-phone-calls-php">record incoming and outgoing Twilio Voice phone calls</a> using PHP</li>
<li>Create <a href="https://www.twilio.com/docs/voice/tutorials/how-to-create-conference-calls-php">conference calls</a>&nbsp;using PHP</li>
<li>Read the <a href="https://www.twilio.com/docs/voice/api">API Reference documentation for Twilio Programmable Voice</a></li>
<li><a href="https://www.twilio.com/docs/voice/tutorials/how-to-modify-calls-in-progress-php">Learn how to modify calls in progress</a> with PHP</li>
<li>Use <a href="https://www.twilio.com/docs/voice/client/sdk">Twilio Client</a> to&nbsp;integrate high-quality VoIP calling to a web or mobile app.</li>
<li><a href="https://www.twilio.com/docs/voice/tutorials/how-to-retrieve-call-logs-php">Retrieve information about in-progress and completed calls</a> from your Twilio account using PHP.</li>
<li>Check out our full sample application tutorial on <a href="https://www.twilio.com/docs/voice/tutorials/warm-transfer-php-laravel">how to transfer calls from one support agent to another</a> with PHP and Laravel</li>
</ul>
<p>We can't wait to see what you build!</p></div>

      
    </div>
  

    

          
            

<div class="help-box uk-hidden">
  <h4>
    <i class="fa fa-fw fa-life-ring"></i>
    Need some help?
  </h4>
  <p>
    We all do sometimes; code is hard. Get help now from our
    <a href="https://support.twilio.com/hc/en-us">support team</a>, or lean on
    the wisdom of the crowd browsing the
    <a href="http://stackoverflow.com/questions/tagged/twilio">
    Twilio tag</a> on Stack Overflow.
  </p>
</div>

          
        </div>
    </div>

    <div class="code-column">
      
  <div class="uk-sticky-placeholder" style="height: 670px; margin: 0px;"><div id="coderail" class="code-rail code-rail-column uk-active" data-uk-sticky="{boundary: true}" style="height: 670px; position: fixed; top: 0px; width: 676px;">

  <div class="rail-placeholder"></div>

  <div class="rail-header">

    <div class="rail-header-wrapper">

      <div class="rail-title">
        <div class="title-content inner">
          <span>Receive an incoming voice call</span>
          <i class="fa fa-fw fa-chevron-down"></i>
        </div>
      </div>

      

    </div>

  </div>

  <div class="rail-toolbar">

    
    <div class="rail-current-language uk-hidden">
      <div class="inner">
        <span>PHP</span>
        <i class="fa fa-fw fa-chevron-down"></i>
      </div>
    </div>
    

    <div class="toolbar">
      <a href="#code" class="uk-hidden tab" data-code="">Code</a>
      <a href="#output" class="uk-hidden tab inactive" data-output="">Output</a>

      <span class="separator uk-hidden"></span>

      <a id="download" class="uk-hidden">
        <i class="fa fa-fw fa-download"></i>
        <span>Download Project</span>
      </a>

      <a id="github" class="" target="_blank" href="https://github.com/TwilioDevEd/api-snippets/blob/master/quickstart/php/voice/answer_call/answer_call.5.x.php">
        <i class="fa fa-fw fa-github-square"></i>
        <span>View on GitHub</span>
      </a>

      <a id="defrosty" class="fr-on" href="#defrosty" style="display: none;">
        <i class="fa fa-fw fa-eye"></i>
        <span class="wider-tooltip">Toggle Highlighted Lines</span>
      </a>

      <a id="clippy" href="#copy">
        <i class="fa fa-fw fa-copy"></i>
        <span>Copy to Clipboard</span>
      </a>

      <a id="linkcode" href="#linkcode">
        <i class="fa fa-fw fa-link"></i>
        <span>Link to this Code</span>
      </a>
    </div>
  </div>

  <div class="rail-samples">
    <ul>
      
        <li>
          <a href="#code-make-a-voice-call">
            Make a voice call
          </a>
        </li>
      
        <li>
          <a href="#code-receive-an-incoming-voice-call">
            Receive an incoming voice call
          </a>
        </li>
      
    </ul>
  </div>

  <div class="rail-languages"></div>

  <div class="rail-content">
    <div class="rail-content-inner">
      
        
          

<div data-sample-title="Make a voice call" data-sample="code-make-a-voice-call" data-pref="server" data-download-url="" data-github-url="https://github.com/TwilioDevEd/api-snippets/blob/master/quickstart/php/voice/make_call/{{ filename }}" data-sample-id="2361" class="code-sample" style="display: none;">

<div class="current-sdks-versions" data-ext-cs="5.x" data-ext-py="6.x" data-ext-rb="5.x" data-ext-php="5.x" data-ext-js="3.x" data-ext-java="7.x"></div>
<div class="alert-old-sdk" style="display:none;">
  You are viewing an outdated version of this SDK.
</div>

<div class="sample-language-data" style="display:none;">
  <select>
    
      <option value="php" selected="selected">PHP</option>
    
  </select>
</div>


  
    <div class="sample-version-tabs" data-ext="php" style="display: block;">
      <div class="sample-version-tabs-inner">
        
        <span>SDK Version:</span>
        
        <ul>
          
            <li class="sample-version-tab active" data-version="5.x" data-default-version="">5.x</li>
          
        </ul>
      </div>
    </div>
  




<div class="snippet-container">
  
    <pre data-ext="php" data-version="5.x" data-filename="make_call.5.x.php" class="codehilite" style="overflow: auto;"><code><span class="code-line"><span class="cp">&lt;?php</span>
</span><span class="code-line"><span class="k">require</span> <span class="no">__DIR__</span> <span class="o">.</span> <span class="s1">'/vendor/autoload.php'</span><span class="p">;</span>
</span><span class="code-line"><span class="k">use</span> <span class="nx">Twilio\Rest\Client</span><span class="p">;</span>
</span><span class="code-line">
</span><span class="code-line"><span class="c1">// Your Account SID and Auth Token from twilio.com/console</span>
</span><span class="code-line"><span class="nv">$account_sid</span> <span class="o">=</span> <span class="s1">'ACXXXXXXXXXXXXXXXXXXXXXXXXXXXX'</span><span class="p">;</span>
</span><span class="code-line"><span class="nv">$auth_token</span> <span class="o">=</span> <span class="s1">'your_auth_token'</span><span class="p">;</span>
</span><span class="code-line"><span class="c1">// In production, these should be environment variables. E.g.:</span>
</span><span class="code-line"><span class="c1">// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]</span>
</span><span class="code-line">
</span><span class="code-line"><span class="c1">// A Twilio number you own with SMS capabilities</span>
</span><span class="code-line"><span class="nv">$twilio_number</span> <span class="o">=</span> <span class="s2">"+15017122661"</span><span class="p">;</span>
</span><span class="code-line">
</span><span class="code-line"><span class="c1">// Where to make a voice call (your cell phone?)</span>
</span><span class="code-line"><span class="nv">$to_number</span> <span class="o">=</span> <span class="s2">"+15558675310"</span><span class="p">;</span>
</span><span class="code-line">
</span><span class="code-line"><span class="nv">$client</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Client</span><span class="p">(</span><span class="nv">$account_sid</span><span class="p">,</span> <span class="nv">$auth_token</span><span class="p">);</span>
</span><span class="code-line"><span class="nv">$client</span><span class="o">-&gt;</span><span class="na">account</span><span class="o">-&gt;</span><span class="na">calls</span><span class="o">-&gt;</span><span class="na">create</span><span class="p">(</span>  
</span><span class="code-line">    <span class="nv">$to_number</span><span class="p">,</span>
</span><span class="code-line">    <span class="nv">$twilio_number</span><span class="p">,</span>
</span><span class="code-line">    <span class="k">array</span><span class="p">(</span>
</span><span class="code-line">        <span class="s2">"url"</span> <span class="o">=&gt;</span> <span class="s2">"http://demo.twilio.com/docs/voice.xml"</span>
</span><span class="code-line">    <span class="p">)</span>
</span><span class="code-line"><span class="p">);</span>
</span></code></pre>
  
</div>

<div class="output-snippet-container" style="display: none;">
  
</div>

</div>


        
          

<div data-sample-title="Receive an incoming voice call" data-sample="code-receive-an-incoming-voice-call" data-pref="server" data-download-url="" data-github-url="https://github.com/TwilioDevEd/api-snippets/blob/master/quickstart/php/voice/answer_call/{{ filename }}" data-sample-id="2360" class="code-sample" style="display: block;">

<div class="current-sdks-versions" data-ext-cs="5.x" data-ext-py="6.x" data-ext-rb="5.x" data-ext-php="5.x" data-ext-js="3.x" data-ext-java="7.x"></div>
<div class="alert-old-sdk" style="display:none;">
  You are viewing an outdated version of this SDK.
</div>

<div class="sample-language-data" style="display:none;">
  <select>
    
      <option value="php" selected="selected">PHP</option>
    
  </select>
</div>


  
    <div class="sample-version-tabs" data-ext="php" style="display: block;">
      <div class="sample-version-tabs-inner">
        
        <span>SDK Version:</span>
        
        <ul>
          
            <li class="sample-version-tab active" data-version="5.x" data-default-version="">5.x</li>
          
        </ul>
      </div>
    </div>
  




<div class="snippet-container">
  
    <pre data-ext="php" data-version="5.x" data-filename="answer_call.5.x.php" class="codehilite" style="overflow: auto;"><code><span class="code-line"><span class="cp">&lt;?php</span>
</span><span class="code-line"><span class="k">require</span> <span class="no">__DIR__</span> <span class="o">.</span> <span class="s1">'/vendor/autoload.php'</span><span class="p">;</span>
</span><span class="code-line"><span class="k">use</span> <span class="nx">Twilio\Twiml</span><span class="p">;</span>
</span><span class="code-line">
</span><span class="code-line"><span class="c1">// Start our TwiML response</span>
</span><span class="code-line"><span class="nv">$response</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Twiml</span><span class="p">;</span>
</span><span class="code-line">
</span><span class="code-line"><span class="c1">// Read a message aloud to the caller</span>
</span><span class="code-line"><span class="nv">$response</span><span class="o">-&gt;</span><span class="na">say</span><span class="p">(</span>
</span><span class="code-line">    <span class="s2">"Thank you for calling! Have a great day."</span><span class="p">,</span> 
</span><span class="code-line">    <span class="k">array</span><span class="p">(</span><span class="s2">"voice"</span> <span class="o">=&gt;</span> <span class="s2">"alice"</span><span class="p">)</span>
</span><span class="code-line"><span class="p">);</span>
</span><span class="code-line">
</span><span class="code-line"><span class="k">echo</span> <span class="nv">$response</span><span class="p">;</span>
</span></code></pre>
  
</div>

<div class="output-snippet-container" style="display: none;">
  
</div>

</div>


        
      
    </div>
  </div>
</div></div>


    </div>

  </div>

      </div>
    </div>

    
    


<div class="footer" data-swiftype-index="false">
  <div class="uk-container uk-container-center">
    <div class="footer__statement">We can’t wait to see what you build.</div>
    <div class="uk-grid">
      <div class="uk-width-1-1 uk-width-small-1-3 uk-width-medium-1-5">
        <section class="footer__section">
          <header class="footer__header">Products</header>
          <ul class="footer__list">
            <li class="footer__list-item">
              <a href="https://www.twilio.com/voice-video" class="footer__link">Voice &amp; Video</a>
            </li>
            <li class="footer__list-item">
              <a href="https://www.twilio.com/messaging" class="footer__link">Messaging</a>
            </li>
            <li class="footer__list-item">
              <a href="https://www.twilio.com/authy" class="footer__link">Authentication</a>
            </li>
            <li class="footer__list-item">
              <a href="https://www.twilio.com/wireless" class="footer__link">Connected Devices</a>
            </li>
          </ul>
        </section>
      </div>
      <div class="uk-width-1-1 uk-width-small-1-3 uk-width-medium-1-5">
        <section class="footer__section">
          <header class="footer__header">Use Cases</header>
          <ul class="footer__list">
            <li class="footer__list-item">
              <a href="https://www.twilio.com/use-cases/access-security" class="footer__link">Access Security</a>
            </li>
            <li class="footer__list-item">
              <a href="https://www.twilio.com/use-cases/contextual-call-center" class="footer__link">Contextual Call Center</a>
            </li>
            <li class="footer__list-item">
              <a href="https://www.twilio.com/use-cases/marketplace-communications" class="footer__link">Marketplace Communications</a>
            </li>
            <li class="footer__list-item">
              <a href="https://www.twilio.com/use-cases/mobile-messaging" class="footer__link">Mobile Messaging</a>
            </li>
          </ul>
        </section>
      </div>
      <div class="uk-width-1-1 uk-width-small-1-3 uk-width-medium-1-5">
        <section class="footer__section">
          <header class="footer__header">About</header>
          <ul class="footer__list">
            <li class="footer__list-item">
              <a href="https://www.twilio.com/what-is-cloud-communications?" class="footer__link">What is Twilio?</a>
            </li>
            <li class="footer__list-item">
              <a href="https://customers.twilio.com/" class="footer__link">Customers</a>
            </li>
            <li class="footer__list-item">
              <a href="https://www.twilio.com/help" class="footer__link">Get Help</a>
            </li>
            <li class="footer__list-item">
              <a href="https://www.twilio.com/help/sales" class="footer__link">Talk to Sales</a>
            </li>
            <li class="footer__list-item">
              <a href="https://www.twilio.com/docs/glossary" class="footer__link">Glossary</a>
            </li>
          </ul>
        </section>
      </div>
      <div class="uk-width-1-1 uk-width-medium-2-5">
        <section class="footer__section">
  <header class="footer__header">Hits From The Blog</header>
  <ul class="footer__list footer__list">
    
    <li class="footer__list-item">
      <a href="https://www.twilio.com/blog/2018/03/twilio-support-for-apple-business-chat-coming-soon.html" class="footer__link">Twilio support for Apple Business Chat coming soon</a>
    </li>
    
    <li class="footer__list-item">
      <a href="https://www.twilio.com/blog/2018/03/video-chat-react.html" class="footer__link">Building a Video Chat App with Twilio Programmable Video and React</a>
    </li>
    
    <li class="footer__list-item">
      <a href="https://www.twilio.com/blog/2018/03/making-phone-calls-in-swift-with-twilio.html" class="footer__link">Making phone calls in Swift with Twilio</a>
    </li>
    
    <li class="footer__list-item">
      <a href="https://www.twilio.com/blog/2018/03/how-to-protect-your-account-from-toll-fraud-with-voice-dialing-geo-permissions.html" class="footer__link">How to protect your account from toll fraud with Voice Dialing Geo Permissions</a>
    </li>
    
    <li class="footer__list-item">
      <a href="https://www.twilio.com/blog/2018/03/practical-introduction-pwa-node-hoodie-offline-first.html" class="footer__link">Offline-First with Node.js and Hoodie: A Practical Introduction to Progressive Web Apps</a>
    </li>
    
  </ul>

</section>
      </div>
    </div>
    <footer class="footer__footer">
      <div class="footer__logo" title="Twilio">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
          <path d="M15 0C6.7 0 0 6.7 0 15s6.7 15 15 15 15-6.7 15-15S23.3 0 15 0zm0 26C8.9 26 4 21.1 4 15S8.9 4 15 4s11 4.9 11 11-4.9 11-11 11z"></path>
          <circle cx="18.7" cy="11.3" r="3.1"></circle>
          <circle cx="18.7" cy="18.7" r="3.1"></circle>
          <circle cx="11.3" cy="18.7" r="3.1"></circle>
          <circle cx="11.3" cy="11.3" r="3.1"></circle>
        </svg>
      </div>
      <ul class="legal__list">
        <li class="legal__list-item">
          <a href="https://www.twilio.com/company" class="legal__link">About Twilio</a>
        </li>
        <li class="legal__list-item">
          <a href="https://www.twilio.com/legal" class="legal__link">Legal</a>
        </li>
        <li class="legal__list-item">Copyright © 2018 Twilio, Inc. 
          <br class="uk-visible-small">All Rights Reserved.
        </li>
      </ul>
    </footer>
  </div>
</div>


    
    <script src="answer_call_files/vendor.js"></script>
    

  

  <!-- Mixpanel -->
  <script type="text/javascript">(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"===e.location.protocol?"https:":"http:")+'//cdn.mxpnl.com/libs/mixpanel-2.2.min.js';f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f);b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==
  typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,
    e,d])};b.__SV=1.2}})(document,window.mixpanel||[]);
    mixpanel.init("f71c19735fa6ecc5225ff563285e1794");
    </script>
  

  
    <!-- Eloqua -->
    <script type="text/javascript">
    var _elqQ = _elqQ || [];
    _elqQ.push(['elqSetSiteId', '815114181']);
    _elqQ.push(['elqTrackPageView']);
    _elqQ.push(['elqUseFirstPartyCookie', 'www.twilio.com']);

    (function () {
      function async_load() {
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
        s.src = '//img03.en25.com/i/elqCfg.min.js';
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
      }
      if (window.addEventListener) window.addEventListener('DOMContentLoaded', async_load, false);
      else if (window.attachEvent) window.attachEvent('onload', async_load);
    })();
    </script>
  

  
    <!-- Transifex -->
    <script type="text/javascript">
    window.liveSettings = {
      api_key: '4c06c1c5a6b341e591d969476fe2675f'
    };
    </script>
    <script type="text/javascript" src="answer_call_files/live.js"></script>
    <style>
    .txlive-langselector { display: none; }
    </style>
  

  




    
      <script src="answer_call_files/docs.js"></script>
    

    
    



    

  

<script type="text/javascript" id="">(function(){window._pa=window._pa||{};var a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"==document.location.protocol?"https:":"http:")+"//tag.perfectaudience.com/serve/54b9e7d97a9b78574800004e.js";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)})();</script><script type="text/javascript" id="">var _kiq=_kiq||[];(function(){setTimeout(function(){var a=document,b=a.getElementsByTagName("script")[0];a=a.createElement("script");a.type="text/javascript";a.async=!0;a.src="//s3.amazonaws.com/ki.js/60855/dM4.js";b.parentNode.insertBefore(a,b)},1)})();twilio&&twilio.account&&twilio.account.sid&&_kiq.push(["identify",twilio.account.sid]);</script>
<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","1040773425961662");fbq("track","PageView");</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1040773425961662&amp;ev=PageView&amp;noscript=1"></noscript>


<script type="text/javascript" id="">!function(b,c,d,a){b.twq||(a=b.twq=function(){a.exe?a.exe.apply(a,arguments):a.queue.push(arguments)},a.version="1",a.queue=[],t=c.createElement(d),t.async=!0,t.src="//static.ads-twitter.com/uwt.js",s=c.getElementsByTagName(d)[0],s.parentNode.insertBefore(t,s))}(window,document,"script");twq("init","nv97q");twq("track","PageView");</script>
<script type="text/javascript" id="">window.heap=window.heap||[];
heap.load=function(e,d){window.heap.appid=e;window.heap.config=d=d||{};var a=d.forceSSL||"https:"===document.location.protocol,b=document.createElement("script");b.type="text/javascript";b.async=!0;b.src=(a?"https:":"http:")+"//cdn.heapanalytics.com/js/heap-"+e+".js";a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(b,a);b=function(a){return function(){heap.push([a].concat(Array.prototype.slice.call(arguments,0)))}};a="addEventProperties addUserProperties clearEventProperties identify removeEventProperty setEventProperties track unsetEventProperty resetIdentity".split(" ");for(var c=
0;c<a.length;c++)heap[a[c]]=b(a[c])};heap.load(google_tag_manager["GTM-MWRD6S"].macro('gtm1'),{disableTextCapture:!0});var waitForHeap=setInterval(function(){heap&&heap.loaded&&(clearInterval(waitForHeap),google_tag_manager["GTM-MWRD6S"].macro('gtm2')?heap.identify(google_tag_manager["GTM-MWRD6S"].macro('gtm3'),"User ID"):heap.identify(google_tag_manager["GTM-MWRD6S"].macro('gtm4'),"Visitor Id"))},100);</script>
<script type="text/javascript" id="">var _qevents=_qevents||[];(function(){var a=document.createElement("script");a.src=("https:"==document.location.protocol?"https://secure":"http://edge")+".quantserve.com/quant.js";a.async=!0;a.type="text/javascript";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)})();_qevents.push({qacct:"p-efmoRQHrDUXig"});</script>
<noscript>
 <img src="//pixel.quantserve.com/pixel/p-efmoRQHrDUXig.gif?labels=_fp.event.Default" style="display: none;" border="0" height="1" width="1" alt="Quantcast">
</noscript>

<script type="text/javascript" id="">(function(a,b,c,d,e){a=b.createElement(c);b=b.getElementsByTagName(c)[0];a.async=1;a.id=e;a.src=d;b.parentNode.insertBefore(a,b)})(window,document,"script","https://scripts.demandbase.com/hL14VAZP.min.js","demandbase_js_lib");</script><script type="text/javascript" id="">if(!twilio.user||"full"===twilio.user.access){var getCookie=function(a){var c="; "+document.cookie;a=c.split("; "+a+"\x3d");if(2==a.length)return a.pop().split(";").shift()},_session_id=getCookie("tw-session-id");_session_id||(document.cookie="tw-session-id\x3d"+Date.now()+Math.random()+";path\x3d/;domain\x3d.twilio.com",_session_id=getCookie("tw-session-id"));var sid="AC73232b5c4e39f5456086f59a20ab9e3d",_sift=window._sift=window._sift||[];_sift.push(["_setAccount","316b238f93"]);_sift.push(["_setUserId",
sid]);_sift.push(["_setSessionId",_session_id]);_sift.push(["_trackPageview"]);(function(){function a(){var a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.siftscience.com/s.js";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)}window.attachEvent?window.attachEvent("onload",a):window.addEventListener("load",a,!1)})()};</script><img style="display:none" alt="" aria-hidden="true" id="db_pixel_ad" src="answer_call_files/pixel_002"><img style="display:none" alt="" aria-hidden="true" id="db_pixel_rt" src="answer_call_files/pixel"><img style="display:none" alt="" aria-hidden="true" id="db_bw_pixel_ad" src="answer_call_files/demandbase.gif"><img style="display:none" alt="" aria-hidden="true" id="db_lr_pixel_ad" src="answer_call_files/464526.gif"><input id="db_fake_company" style="display: none;" type="text"><input id="db_fake_company" style="display: none;" type="text"><script type="text/javascript" id="">(function(a,b,c,d,e){a=b.createElement(c);b=b.getElementsByTagName(c)[0];a.async=1;a.id=e;a.src=d;b.parentNode.insertBefore(a,b)})(window,document,"script","https://scripts.demandbase.com/hL14VAZP.min.js","demandbase_js_lib");</script><img style="display:none" alt="" aria-hidden="true" id="db_pixel_ad" src="answer_call_files/pixel_002"><img style="display:none" alt="" aria-hidden="true" id="db_pixel_rt" src="answer_call_files/pixel"><img style="display:none" alt="" aria-hidden="true" id="db_bw_pixel_ad" src="answer_call_files/demandbase.gif"><img style="display:none" alt="" aria-hidden="true" id="db_lr_pixel_ad" src="answer_call_files/464526.gif"><input id="db_fake_company" style="display: none;" type="text"><input id="db_fake_company" style="display: none;" type="text"><script src="answer_call_files/adsct.js" type="text/javascript"></script><script src="answer_call_files/a.js" type="text/javascript"></script></body></html>
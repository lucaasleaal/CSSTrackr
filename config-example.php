<?php
/*
=================
Here you need to setup your DB connection.
=================
*/

define('DB_HOSTNAME','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_DATABASE','trackr');

/*
=================
Here you need to setup your trackers.
=================
*/

$actions = array(
    'click'=>array(
        'button#subscribe'=>'User has subscribed',
        'button#unsub'=>'User has unsubscribed',
        '.modalclose'=>'User has closed a modal element',
        'a.modal'=>'User has opened a modal window',
    ),
    'hover'=>array(
        'img'=>'User has hovered an image element',
    ),
    'check'=>array(
        'input[type="checkbox"]'=>'User has checked a checkbox',
    ),
    'hoverhold'=>array(
        'img'=>'User has hovered for', /*will suffix from 1 to 10 seconds*/
    )
);

/*
=================
If you don't know what
these two lines below means,
don't change them.
=================
*/

define('DB_PREFIX','');
define('S','csstrackr'); /*session key*/

/*
=================
Only change those configurations below if
you know what you are doing with your life
=================
*/

$banned_ips = array(
    '45.55.201.83',
    '66.*',
    '64.233.*',
    '5.158.176.90',
    '5.158.*',
);

$banned_agents = array(
    'abachobot',
    'acoon',
    'aesop_com_spiderman',
    'ah-ha.com crawler',
    'ah-ha',
    'appie',
    'arachnoidea',
    'architextspider',
    'atomz',
    'deepindex',
    'esismartspider',
    'ezresult',
    'fast-webcrawler',
    'fido',
    'fluffy the spider',
    'googlebot',
    'gigabot',
    'gulliver',
    'gulper',
    'henrythemiragorobot',
    'ia_archiver',
    'kit-fireball/2.0',
    'lnspiderguy',
    'lycos_spider_(t-rex)',
    'mantraagent',
    'msn',
    'nationaldirectory-superspider',
    'nazilla',
    'openbot',
    'openfind piranha,shark',
    'scooter',
    'scrubby',
    'slurp.so/1.0',
    'slurp/2.0j',
    'slurp/2.0',
    'slurp/3.0',
    'tarantula',
    'teoma_agent1',
    'uk searcher spider',
    'webcrawler',
    'winona',
    'whatuseek',
    'zyborg',
    'almaden',
    'cyveillance',
    'dtsearch',
    'girafa.com',
    'indy library',
    'linkwalker',
    'markwatch',
    'nameprotect',
    'robozilla',
    'teradex mapper',
    'tracerlock',
    'tracerlock.com',
    'w3c_validator',
    'wdg_validator',
    'wdg',
    'zealbot',
    '008',
    'abachobot',
    'accoona-ai-agent',
    'addsugarspiderbot',
    'anyapexbot',
    'arachmo',
    'b-l-i-t-z-b-o-t',
    'baiduspider',
    'becomebot',
    'beslistbot',
    'billybobbot',
    'bimbot',
    'bingbot',
    'blitzbot',
    'boitho.com-dc',
    'boitho.com-robot',
    'btbot',
    'catchbot',
    'cerberian drtrs',
    'charlotte',
    'converacrawler',
    'cosmos',
    'covario ids',
    'dataparksearch',
    'diamondbot',
    'discobot',
    'dotbot',
    'earthcom.info',
    'emeraldshield.com webbot',
    'envolk[its]spider',
    'esperanzabot',
    'exabot',
    'fast enterprise crawler',
    'fast-webcrawler',
    'fdse robot',
    'findlinks',
    'furlbot',
    'fyberspider',
    'g2crawler',
    'gaisbot',
    'galaxybot',
    'geniebot',
    'gigabot',
    'girafabot',
    'googlebot',
    'googlebot-image',
    'gurujibot',
    'happyfunbot',
    'hl_ftien_spider',
    'holmes',
    'htdig',
    'iaskspider',
    'ia_archiver',
    'iccrawler',
    'ichiro',
    'igdespyder',
    'irlbot',
    'issuecrawler',
    'jaxified bot',
    'jyxobot',
    'koepabot',
    'l.webis',
    'lapozzbot',
    'larbin',
    'ldspider',
    'lexxebot',
    'linguee bot',
    'linkwalker',
    'lmspider',
    'lwp-trivial',
    'mabontland',
    'magpie-crawler',
    'mediapartners-google',
    'mj12bot',
    'mlbot',
    'mnogosearch',
    'mogimogi',
    'mojeekbot',
    'moreoverbot',
    'morning paper',
    'msnbot',
    'msrbot',
    'mvaclient',
    'mxbot',
    'netresearchserver',
    'netseer crawler',
    'newsgator',
    'ng-search',
    'nicebot',
    'noxtrumbot',
    'nusearch spider',
    'nutchcvs',
    'nymesis',
    'obot',
    'oegp',
    'omgilibot',
    'omniexplorer_bot',
    'oozbot',
    'orbiter',
    'pagebiteshyperbot',
    'peew',
    'polybot',
    'pompos',
    'postpost',
    'psbot',
    'pycurl',
    'qseero',
    'radian6',
    'rampybot',
    'rufusbot',
    'sandcrawler',
    'sbider',
    'scoutjet',
    'scrubby',
    'searchsight',
    'seekbot',
    'semanticdiscovery',
    'sensis web crawler',
    'seochat::bot',
    'seznambot',
    'shim-crawler',
    'shopwiki',
    'shoula robot',
    'silk',
    'sitebot',
    'snappy',
    'sogou spider',
    'sosospider',
    'speedy spider',
    'sqworm',
    'stackrambler',
    'suggybot',
    'surveybot',
    'synoobot',
    'teoma',
    'terrawizbot',
    'thesubot',
    'thumbnail.cz robot',
    'tineye',
    'truwogps',
    'turnitinbot',
    'tweetedtimes bot',
    'twengabot',
    'updated',
    'urlfilebot',
    'vagabondo',
    'voilabot',
    'vortex',
    'voyager',
    'vyu2',
    'webcollage',
    'websquash.com',
    'wf84',
    'wofindeich robot',
    'womlpefactory',
    'xaldon_webspider',
    'yacy',
    'yahoo! slurp',
    'yahoo! slurp china',
    'yahooseeker',
    'yahooseeker-testing',
    'yandexbot',
    'yandeximages',
    'yandexmetrika',
    'yasaklibot',
    'yeti',
    'yodaobot',
    'yooglifetchagent',
    'youdaobot',
    'zao',
    'zealbot',
    'zspider',
    'zyborg',
);
<?php

function check_badwords($str){

    $badwords = array('adult', 'porn', 'ass','anál',
        'análu',
        'blbec',
        'blbče',
        'blbečku',
        'blbost',
        'blbý',
        'blbá',
        'blbé',
        'bordel',
        'buzerant',
        'buzerante',
        'buzeranti',
        'buzerovat',
        'buzna',
        'buzík',
        'buzíku',
        'buzíci',
        'chcanky',
        'chcát',
        'chuj',
        'chujové',
        'chyndit',
        'debil',
        'debili',
        'debilita',
        'debilové',
        'debilní',
        'demence',
        'dement',
        'dementi',
        'dementní',
        'deviace',
        'do piče',
        'do píče',
        'do piči',
        'do píči',
        'do prdele',
        'dršťka',
        'držka',
        'držko',
        'dylina',
        'dylino',
        'děvka',
        'děvko',
        'děvky',
        'fetovat',
        'feťáci',
        'feťák',
        'feťáku',
        'flundra',
        'flundro',
        'flundry',
        'hajzl',
        'hajzle',
        'hajzli',
        'hajzlíci',
        'hajzlové',
        'hovno',
        'hovna',
        'hovnoksicht',
        'hovnoksichte',
        'hovnoxicht',
        'hovnoxichte',
        'hovňous',
        'hovňousi',
        'idiocie',
        'idiot',
        'idiote',
        'idioti',
        'jebat',
        'kedra',
        'kokot',
        'kokote',
        'kokoti',
        'kokotina',
        'kokotiny',
        'koza',
        'kozy',
        'koňomrd',
        'koňomrde',
        'kretenismus',
        'kretenizmus',
        'kretén',
        'kreténe',
        'kreténi',
        'kripl',
        'krypl',
        'kriple',
        'kryple',
        'kripli',
        'krypli',
        'kráva',
        'krávo',
        'krávy',
        'ksicht',
        'ksichte',
        'kunda',
        'kundo',
        'kundy',
        'kurva',
        'kurvo',
        'kurvy',
        'kurvit',
        'kurvit se',
        'kurvák',
        'kuřbuřt',
        'kuřbuřte',
        'mamrd',
        'mamrde',
        'mrdat',
        'mrdka',
        'mrdko',
        'mrdník',
        'mrdůch',
        'nasraný',
        'orál',
        'osel',
        'osli',
        'oslové',
        'oslošoust',
        'pěst',
        'pěstí',
        'pipina',
        'pipino',
        'pipiny',
        'pipka',
        'pipko',
        'pipky',
        'pizda',
        'pizdo',
        'pizdy',
        'piča',
        'piče',
        'pičo',
        'pičus',
        'pochcat se',
        'podělat',
        'poser',
        'posera',
        'posero',
        'posrat',
        'pošuci',
        'pošuk',
        'pošuku',
        'prcat',
        'prdel',
        'prdelka',
        'prdelko',
        'prdeloid',
        'prsatice',
        'píchat',
        'píča',
        'píče',
        'píčo',
        'píčus',
        'smažka',
        'smažko',
        'smažky',
        'sraček',
        'sračka',
        'sračkách',
        'sračko',
        'sračky',
        'srát',
        'vypíčenec',
        'vypíčenci',
        'vypíčit',
        'vole',
        'voli',
        'volové',
        'vůl',
        'xicht',
        'xichte',
        'zasraná',
        'zasranci',
        'zasranče',
        'zasraní',
        'zasraný',
        'zik',
        'zkurvený',
        'zkurvit',
        'zkurvili',
        'zkurvysyn',
        'zmrd',
        'zmrde',
        'zmrdi',
        'zoofil',
        'zoofilie',
        'úchyl',
        'úchyle',
        'úchylka',
        'úchylák',
        'úchyláku',
        'čarák',
        'čubka',
        'čumět',
        'čurat',
        'čurák',
        'čůrat',
        'čůrák',
        'šoustat',
        'šukat',
        'šulin',
        'žrát','arschfotze',
        'arschgeige',
        'arschgesicht',
        'arschloch',
        'fotze',
        'bulle',
        'furz',
        'depp',
        'möpse',
        'drecksau',
        'bastard',
        'fick',
        'muschi',
        'sackgesicht',
        'kackbratze',
        'hurensohn',
        'trottel',
        'dummbatz',
        'schlampe',
        'dummkopf',
        'fettbacke',
        'fotze',
        'hirnlos',
        'kack',
        'luder',
        'stricher',
        'miststück',
        'muterfiker',
        'mutterficker',
        'onanieren',
        'pisser',
        'scheissen',
        'scheißhaus',
        'schise',
        'schlampe',
        'schwanz',
        'schwanzlutscher',
        'schweinepriester',
        'schwuchtel',
        'schwul',
        'schwuler',
        'scheisse',
        'scheiße',
        'scheise',
        'trottel',
        'fick',
        'ficken',
        'jud',
        'jude',
        'nazi',
        'nsdap',
        'dreck',
        'wichser',
        'wixer',
        'wixen',
        'sau',
        'bums',
        'arschloch',
        'arsch',
        'schwanz',
        'fotze',
        'hure',
        'schlampe',
        'titten',
        'fotz',
        'hitler',
        'heil',
        'opfer','anal',
            'anus',
            'ass',
            'bastard',
            'bitch',
            'boob',
            'cock',
            'cum',
            'cunt',
            'dick',
            'dildo',
            'dyke',
            'fag',
            'faggot',
            'fuck',
            'fuk',
            'handjob',
            'homo',
            'jizz',
            'kike',
            'kunt',
            'muff',
            'nigger',
            'penis',
            'piss',
            'poop',
            'pussy',
            'queer',
            'rape',
            'semen',
            'sex',
            'shit',
            'slut',
            'titties',
            'twat',
            'vagina',
            'vulva',
            'wank','analplug',
            'analsex',
            'arse',
            'assassin',
            'balls',
            'bimbo',
            'bloody',
            'bloodyhell',
            'blowjob',
            'bollocks',
            'boner',
            'boobies',
            'boobs',
            'bugger',
            'bukkake',
            'bullshit',
            'chink',
            'clit',
            'clitoris',
            'cocksucker',
            'condom',
            'coon',
            'crap',
            'cumshot',
            'damm',
            'dammit',
            'damn',
            'dickhead',
            'doggystyle',
            'f0ck',
            'fags',
            'fanny',
            'fck',
            'fcker',
            'fckr',
            'fcku',
            'fcuk',
            'fucker',
            'fuckface',
            'fuckr',
            'fuct',
            'genital',
            'genitalia',
            'genitals',
            'glory hole',
            'gloryhole',
            'gobshite',
            'godammet',
            'godammit',
            'goddammet',
            'goddammit',
            'goddamn',
            'gypo',
            'hitler',
            'hooker',
            'hore',
            'horny',
            'jesussucks',
            'jizzum',
            'kaffir',
            'kill',
            'killer',
            'killin',
            'killing',
            'lesbo',
            'masturbate',
            'milf',
            'molest',
            'moron',
            'motherfuck',
            'mthrfckr',
            'murder',
            'murderer',
            'nazi',
            'negro',
            'nigga',
            'niggah',
            'nonce',
            'paedo',
            'paedophile',
            'paki',
            'pecker',
            'pedo',
            'pedofile',
            'pedophile',
            'phuk',
            'pig',
            'pimp',
            'poof',
            'porn',
            'prick',
            'pron',
            'prostitute',
            'raped',
            'rapes',
            'rapist',
            'schlong',
            'screw',
            'scrotum',
            'shag',
            'shemale',
            'shite',
            'shiz',
            'slag',
            'spastic',
            'spaz',
            'sperm',
            'spunk',
            'stripper',
            'tart',
            'terrorist',
            'tits',
            'tittyfuck',
            'tosser',
            'turd',
            'vaginal',
            'vibrator',
            'wanker',
            'weed',
            'wetback',
            'whor',
            'whore',
            'wog',
            'wtf',
            'xxx','abortion',
            'anus',
            'beastiality',
            'bestiality',
            'bewb',
            'blow',
            'blumpkin',
            'cawk',
            'choad',
            'cooter',
            'cornhole',
            'dong',
            'douche',
            'fart',
            'foreskin',
            'gangbang',
            'gook',
            'hell',
            'honkey',
            'humping',
            'jiz',
            'labia',
            'nutsack',
            'pen1s',
            'poon',
            'punani',
            'queef',
            'quim',
            'rectal',
            'rectum',
            'rimjob',
            'spick',
            'spoo',
            'spooge',
            'taint',
            'titty',
            'vag',
            'whore','bollera',		// Lesbian
            'cabron',		// Dickhead
            'cabrón',		// Dickhead
            'cabrona',		// Dickhead (feminine)
            'cabronazo',	// Bastard
            'capulla',		// Asshole (feminine)
            'capullo',		// Asshole
            'chichi',		// Pussy
            'chocho',		// Pussy
            'cojon',		// Testicle (slang)
            'cojón',		// Testicle (slang)
            'cojones',		// Testicles (slang)
            'comepollas',	// Cocksucker
            'cono',			// Cunt
            'coño',			// Cunt
            'culo',			// Ass
            'follar',		// Fuck
            'follen',		// Go fuck
            'furcia',		// Whore
            'gilipollas',	// Jerk
            'hijaputa',		// Son of a bitch (feminine)
            'hijo puta',	// Son of a bitch
            'hijoputa',		// Son of a bitch
            'hostia',		// Bastard, shit, to hit
            'joder',		// Fuck
            'jodete',		// Go fuck yourself
            'jódete',		// Go fuck yourself
            'joputa',		// Abbreviation of "hijo de puta" (son of a bitch)
            'mamada',		// Blowjob
            'mamon',		// Sucker
            'mamón',		// Sucker
            'mamona',		// Sucker (feminine)
            'marica',		// Faggy
            'maricon',		// Faggot
            'maricón',		// Faggot
            'maricona',		// Drag queen, lesbian
            'mariconazo',	// Faggot
            'nazi',			// Nazi
            'ojete',		// Anus (slang)
            'ostia',		// Abbreviation of "hostia" (bastard, shit, to hit)
            'pajillero',	// Wanker
            'pendon',		// Slob
            'pendón',		// Slob
            'picha',		// Dick
            'polla',		// Dick
            'pollon',		// Dick
            'pollón',		// Dick
            'polvo',		// To ejaculate
            'potorro',		// Vagina
            'puta',			// Bitch/whore
            'puto',			// Bitch/whore (masculine), faggot
            'puton',		// Bitch/whore
            'putón',		// Bitch/whore
            'tortillera',	// Lesbian
            'zorron',		// To be/act slutty
            'zorrón','jumalauta',     // goddamnit, interjection
            'helvetit',      // hell, pl. nominative
            'helvetiltä',    // hell, sg. ablative
            'helvetillä',    // hell, sg. adessive
            'helvetille',    // hell, sg. allative
            'helvetistä',    // hell, sg. elative
            'helvetin',      // hell, sg. genitive
            'helvettiin',    // hell, sg. illative
            'helvetissä',    // hell, sg. inessive
            'helvetti',      // hell, sg. nominative
            'helvettiä',     // hell, sg. partitive
            'helveteiltä',   // hell, pl. ablative
            'helveteillä',   // hell, pl. adessive
            'helveteille',   // hell, pl. allative
            'helveteistä',   // hell, pl. elative
            'helvettien',    // hell, pl. genitive
            'helvetteihin',  // hell, pl. illative
            'helveteissä',   // hell, pl. inessive
            'helvetit',      // hell, pl. nominative
            'helvettejä',    // hell, pl. partitive
            'hinttarit',     // faggot, pl. nominative
            'hinttarilta',   // faggot, sg. ablative
            'hinttarilla',   // faggot, sg. adessive
            'hinttarille',   // faggot, sg. allative
            'hinttarista',   // faggot, sg. elative
            'hinttarin',     // faggot, sg. genitive
            'hinttariin',    // faggot, sg. illative
            'hinttarissa',   // faggot, sg. inessive
            'hinttari',      // faggot, sg. nominative
            'hinttaria',     // faggot, sg. partitive
            'hinttareilta',  // faggot, pl. ablative
            'hinttareilla',  // faggot, pl. adessive
            'hinttareille',  // faggot, pl. allative
            'hinttareista',  // faggot, pl. elative
            'hinttarien',    // faggot, pl. genitive
            'hinttareiden',  // faggot, pl. genitive
            'hinttareitten', // faggot, pl. genitive
            'hinttareihin',  // faggot, pl. illative
            'hinttareissa',  // faggot, pl. inessive
            'hinttarit',     // faggot, pl. nominative
            'hinttareita',   // faggot, pl. partitive
            'hinttareja',    // faggot, pl. partitive
            'hintit',        // fag, pl. nominative
            'hintiltä',      // fag, sg. ablative
            'hintillä',      // fag, sg. adessive
            'hintille',      // fag, sg. allative
            'hintistä',      // fag, sg. elative
            'hintin',        // fag, sg. genitive
            'hinttiin',      // fag, sg. illative
            'hintissä',      // fag, sg. inessive
            'hintti',        // fag, sg. nominative
            'hinttiä',       // fag, sg. partitive
            'hinteiltä',     // fag, pl. ablative
            'hinteillä',     // fag, pl. adessive
            'hinteille',     // fag, pl. allative
            'hinteistä',     // fag, pl. elative
            'hinttien',      // fag, pl. genitive
            'hintteihin',    // fag, pl. illative
            'hinteissä',     // fag, pl. inessive
            'hintit',        // fag, pl. nominative
            'hinttejä',      // fag, pl. partitive
            'huorat',        // whore, pl. nominative
            'huoralta',      // whore, sg. ablative
            'huoralla',      // whore, sg. adessive
            'huoralle',      // whore, sg. allative
            'huorasta',      // whore, sg. elative
            'huoran',        // whore, sg. genitive
            'huoraan',       // whore, sg. illative
            'huorassa',      // whore, sg. inessive
            'huora',         // whore, sg. nominative
            'huoraa',        // whore, sg. partitive
            'huorilta',      // whore, pl. ablative
            'huorilla',      // whore, pl. adessive
            'huorille',      // whore, pl. allative
            'huorista',      // whore, pl. elative
            'huorien',       // whore, pl. genitive
            'huoriin',       // whore, pl. illative
            'huorissa',      // whore, pl. inessive
            'huorat',        // whore, pl. nominative
            'huoria',        // whore, pl. partitive
            'kusipäät',      // pisshead, pl. nominative
            'kusipäältä',    // pisshead, sg. ablative
            'kusipäällä',    // pisshead, sg. adessive
            'kusipäälle',    // pisshead, sg. allative
            'kusipäästä',    // pisshead, sg. elative
            'kusipään',      // pisshead, sg. genitive
            'kusipäähän',    // pisshead, sg. illative
            'kusipäässä',    // pisshead, sg. inessive
            'kusipää',       // pisshead, sg. nominative
            'kusipäätä',     // pisshead, sg. partitive
            'kusipäiltä',    // pisshead, pl. ablative
            'kusipäillä',    // pisshead, pl. adessive
            'kusipäille',    // pisshead, pl. allative
            'kusipäistä',    // pisshead, pl. elative
            'kusipäitten',   // pisshead, pl. genitive
            'kusipäihin',    // pisshead, pl. illative
            'kusipäissä',    // pisshead, pl. inessive
            'kusipäät',      // pisshead, pl. nominative
            'kusipäitä',     // pisshead, pl. partitive
            'kyrvät',        // cock, pl. nominative
            'kyrvältä',      // cock, sg. ablative
            'kyrvällä',      // cock, sg. adessive
            'kyrvälle',      // cock, sg. allative
            'kyrvästä',      // cock, sg. elative
            'kyrvän',        // cock, sg. genitive
            'kyrpään',       // cock, sg. illative
            'kyrvässä',      // cock, sg. inessive
            'kyrpä',         // cock, sg. nominative
            'kyrpää',        // cock, sg. partitive
            'kyrviltä',      // cock, pl. ablative
            'kyrvillä',      // cock, pl. adessive
            'kyrville',      // cock, pl. allative
            'kyrvistä',      // cock, pl. elative
            'kyrpien',       // cock, pl. genitive
            'kyrpiin',       // cock, pl. illative
            'kyrvissä',      // cock, pl. inessive
            'kyrvät',        // cock, pl. nominative
            'kyrpiä',        // cock, pl. partitive
            'mulkut',        // dick, pl. nominative
            'mulkulta',      // dick, sg. ablative
            'mulkulla',      // dick, sg. adessive
            'mulkulle',      // dick, sg. allative
            'mulkusta',      // dick, sg. elative
            'mulkun',        // dick, sg. genitive
            'mulkkuun',      // dick, sg. illative
            'mulkussa',      // dick, sg. inessive
            'mulkku',        // dick, sg. nominative
            'mulkkua',       // dick, sg. partitive
            'mulkuilta',     // dick, pl. ablative
            'mulkuilla',     // dick, pl. adessive
            'mulkuille',     // dick, pl. allative
            'mulkuista',     // dick, pl. elative
            'mulkkujen',     // dick, pl. genitive
            'mulkkuihin',    // dick, pl. illative
            'mulkuissa',     // dick, pl. inessive
            'mulkut',        // dick, pl. nominative
            'mulkkuja',      // dick, pl. partitive
            'nartut',        // bitch, pl. nominative
            'nartulta',      // bitch, sg. ablative
            'nartulla',      // bitch, sg. adessive
            'nartulle',      // bitch, sg. allative
            'nartusta',      // bitch, sg. elative
            'nartun',        // bitch, sg. genitive
            'narttuun',      // bitch, sg. illative
            'nartussa',      // bitch, sg. inessive
            'narttu',        // bitch, sg. nominative
            'narttua',       // bitch, sg. partitive
            'nartuilta',     // bitch, pl. ablative
            'nartuilla',     // bitch, pl. adessive
            'nartuille',     // bitch, pl. allative
            'nartuista',     // bitch, pl. elative
            'narttujen',     // bitch, pl. genitive
            'narttuihin',    // bitch, pl. illative
            'nartuissa',     // bitch, pl. inessive
            'nartut',        // bitch, pl. nominative
            'narttuja',      // bitch, pl. partitive
            'neekerit',      // nigger, pl. nominative
            'neekeriltä',    // nigger, sg. ablative
            'neekerillä',    // nigger, sg. adessive
            'neekerille',    // nigger, sg. allative
            'neekeristä',    // nigger, sg. elative
            'neekerin',      // nigger, sg. genitive
            'neekeriin',     // nigger, sg. illative
            'neekerissä',    // nigger, sg. inessive
            'neekeri',       // nigger, sg. nominative
            'neekeriä',      // nigger, sg. partitive
            'neekereiltä',   // nigger, pl. ablative
            'neekereillä',   // nigger, pl. adessive
            'neekereille',   // nigger, pl. allative
            'neekereistä',   // nigger, pl. elative
            'neekerien',     // nigger, pl. genitive
            'neekereitten',  // nigger, pl. genitive
            'neekereiden',   // nigger, pl. genitive
            'neekereihin',   // nigger, pl. illative
            'neekereissä',   // nigger, pl. inessive
            'neekerit',      // nigger, pl. nominative
            'neekereitä',    // nigger, pl. partitive
            'neekerejä',     // nigger, pl. partitive
            'paskat',        // shit, pl. nominative
            'paskalta',      // shit, sg. ablative
            'paskalla',      // shit, sg. adessive
            'paskalle',      // shit, sg. allative
            'paskasta',      // shit, sg. elative
            'paskan',        // shit, sg. genitive
            'paskaan',       // shit, sg. illative
            'paskassa',      // shit, sg. inessive
            'paska',         // shit, sg. nominative
            'paskaa',        // shit, sg. partitive
            'paskoilta',     // shit, pl. ablative
            'paskoilla',     // shit, pl. adessive
            'paskoille',     // shit, pl. allative
            'paskoista',     // shit, pl. elative
            'paskojen',      // shit, pl. genitive
            'paskoihin',     // shit, pl. illative
            'paskoissa',     // shit, pl. inessive
            'paskat',        // shit, pl. nominative
            'paskoja',       // shit, pl. partitive
            'perhanat',      // deuce, pl. nominative
            'perhanalta',    // deuce, sg. ablative
            'perhanalla',    // deuce, sg. adessive
            'perhanalle',    // deuce, sg. allative
            'perhanasta',    // deuce, sg. elative
            'perhanan',      // deuce, sg. genitive
            'perhanaan',     // deuce, sg. illative
            'perhanassa',    // deuce, sg. inessive
            'perhana',       // deuce, sg. nominative
            'perhanaa',      // deuce, sg. partitive
            'perhanoilta',   // deuce, pl. ablative
            'perhanoilla',   // deuce, pl. adessive
            'perhanoille',   // deuce, pl. allative
            'perhanoista',   // deuce, pl. elative
            'perhanoiden',   // deuce, pl. genitive
            'perhanoitten',  // deuce, pl. genitive
            'perhanoihin',   // deuce, pl. illative
            'perhanoissa',   // deuce, pl. inessive
            'perhanat',      // deuce, pl. nominative
            'perhanoita',    // deuce, pl. partitive
            'perkeleet',     // devil, pl. nominative
            'perkeleeltä',   // devil, sg. ablative
            'perkeleellä',   // devil, sg. adessive
            'perkeleelle',   // devil, sg. allative
            'perkeleestä',   // devil, sg. elative
            'perkeleen',     // devil, sg. genitive
            'perkeleeseen',  // devil, sg. illative
            'perkeleessä',   // devil, sg. inessive
            'perkele',       // devil, sg. nominative
            'perkelettä',    // devil, sg. partitive
            'perkeleiltä',   // devil, pl. ablative
            'perkeleillä',   // devil, pl. adessive
            'perkeleille',   // devil, pl. allative
            'perkeleistä',   // devil, pl. elative
            'perkeleitten',  // devil, pl. genitive
            'perkeleiden',   // devil, pl. genitive
            'perkeleihin',   // devil, pl. illative
            'perkeleisiin',  // devil, pl. illative
            'perkeleissä',   // devil, pl. inessive
            'perkeleet',     // devil, pl. nominative
            'perkeleitä',    // devil, pl. partitive
            'perseet',       // ass, pl. nominative
            'perseeltä',     // ass, sg. ablative
            'perseellä',     // ass, sg. adessive
            'perseelle',     // ass, sg. allative
            'perseestä',     // ass, sg. elative
            'perseen',       // ass, sg. genitive
            'perseeseen',    // ass, sg. illative
            'perseessä',     // ass, sg. inessive
            'perse',         // ass, sg. nominative
            'persettä',      // ass, sg. partitive
            'perseiltä',     // ass, pl. ablative
            'perseillä',     // ass, pl. adessive
            'perseille',     // ass, pl. allative
            'perseistä',     // ass, pl. elative
            'perseitten',    // ass, pl. genitive
            'perseiden',     // ass, pl. genitive
            'perseihin',     // ass, pl. illative
            'perseisiin',    // ass, pl. illative
            'perseissä',     // ass, pl. inessive
            'perseet',       // ass, pl. nominative
            'perseitä',      // ass, pl. partitive
            'pillut',        // pussy, pl. nominative
            'pillulta',      // pussy, sg. ablative
            'pillulla',      // pussy, sg. adessive
            'pillulle',      // pussy, sg. allative
            'pillusta',      // pussy, sg. elative
            'pillun',        // pussy, sg. genitive
            'pilluun',       // pussy, sg. illative
            'pillussa',      // pussy, sg. inessive
            'pillu',         // pussy, sg. nominative
            'pillua',        // pussy, sg. partitive
            'pilluilta',     // pussy, pl. ablative
            'pilluilla',     // pussy, pl. adessive
            'pilluille',     // pussy, pl. allative
            'pilluista',     // pussy, pl. elative
            'pillujen',      // pussy, pl. genitive
            'pilluihin',     // pussy, pl. illative
            'pilluissa',     // pussy, pl. inessive
            'pillut',        // pussy, pl. nominative
            'pilluja',       // pussy, pl. partitive
            'saamarit',      // bloody, pl. nominative
            'saamarilta',    // bloody, sg. ablative
            'saamarilla',    // bloody, sg. adessive
            'saamarille',    // bloody, sg. allative
            'saamarista',    // bloody, sg. elative
            'saamarin',      // bloody, sg. genitive
            'saamariin',     // bloody, sg. illative
            'saamarissa',    // bloody, sg. inessive
            'saamari',       // bloody, sg. nominative
            'saamaria',      // bloody, sg. partitive
            'saamareilta',   // bloody, pl. ablative
            'saamareilla',   // bloody, pl. adessive
            'saamareille',   // bloody, pl. allative
            'saamareista',   // bloody, pl. elative
            'saamarien',     // bloody, pl. genitive
            'saamareiden',   // bloody, pl. genitive
            'saamareitten',  // bloody, pl. genitive
            'saamareihin',   // bloody, pl. illative
            'saamareissa',   // bloody, pl. inessive
            'saamarit',      // bloody, pl. nominative
            'saamareita',    // bloody, pl. partitive
            'saamareja',     // bloody, pl. partitive
            'saatanat',      // satan, pl. nominative
            'saatanalta',    // satan, sg. ablative
            'saatanalla',    // satan, sg. adessive
            'saatanalle',    // satan, sg. allative
            'saatanasta',    // satan, sg. elative
            'saatanan',      // satan, sg. genitive
            'saatanaan',     // satan, sg. illative
            'saatanassa',    // satan, sg. inessive
            'saatana',       // satan, sg. nominative
            'saatanaa',      // satan, sg. partitive
            'saatanoilta',   // satan, pl. ablative
            'saatanoilla',   // satan, pl. adessive
            'saatanoille',   // satan, pl. allative
            'saatanoista',   // satan, pl. elative
            'saatanoiden',   // satan, pl. genitive
            'saatanoitten',  // satan, pl. genitive
            'saatanoihin',   // satan, pl. illative
            'saatanoissa',   // satan, pl. inessive
            'saatanat',      // satan, pl. nominative
            'saatanoita',    // satan, pl. partitive
            'vittu',         // cunt, interjection, sg. nominative
            'vitut',         // cunt, pl. nominative
            'vitulta',       // cunt, sg. ablative
            'vitulla',       // cunt, sg. adessive
            'vitulle',       // cunt, sg. allative
            'vitusta',       // cunt, sg. elative
            'vitun',         // cunt, sg. genitive
            'vittuun',       // cunt, sg. illative
            'vitussa',       // cunt, sg. inessive
            'vittua',        // cunt, sg. partitive
            'vituilta',      // cunt, pl. ablative
            'vituilla',      // cunt, pl. adessive
            'vituille',      // cunt, pl. allative
            'vituista',      // cunt, pl. elative
            'vittujen',      // cunt, pl. genitive
            'vittuihin',     // cunt, pl. illative
            'vituissa',      // cunt, pl. inessive
            'vitut',         // cunt, pl. nominative
            'vittuja',       // cunt, pl. partitive
            'ämmät',         // hag, bitch; pl. nominative
            'ämmältä',       // hag, bitch; sg. ablative
            'ämmällä',       // hag, bitch; sg. adessive
            'ämmälle',       // hag, bitch; sg. allative
            'ämmästä',       // hag, bitch; sg. elative
            'ämmän',         // hag, bitch; sg. genitive
            'ämmään',        // hag, bitch; sg. illative
            'ämmässä',       // hag, bitch; sg. inessive
            'ämmä',          // hag, bitch; sg. nominative
            'ämmää',         // hag, bitch; sg. partitive
            'ämmiltä',       // hag, bitch; pl. ablative
            'ämmillä',       // hag, bitch; pl. adessive
            'ämmille',       // hag, bitch; pl. allative
            'ämmistä',       // hag, bitch; pl. elative
            'ämmien',        // hag, bitch; pl. genitive
            'ämmiin',        // hag, bitch; pl. illative
            'ämmissä',       // hag, bitch; pl. inessive
            'ämmät',         // hag, bitch; pl. nominative
            'ämmiä',         // hag, bitch; pl. partitive
            'fittu',         // cunt (f- version); interjection, sg. nominative
            'fitut',         // cunt (f- version); pl. nominative
            'fitulta',       // cunt (f- version); sg. ablative
            'fitulla',       // cunt (f- version); sg. adessive
            'fitulle',       // cunt (f- version); sg. allative
            'fitusta',       // cunt (f- version); sg. elative
            'fitun',         // cunt (f- version); sg. genitive
            'fittuun',       // cunt (f- version); sg. illative
            'fitussa',       // cunt (f- version); sg. inessive
            'fittua',        // cunt (f- version); sg. partitive
            'fituilta',      // cunt (f- version); pl. ablative
            'fituilla',      // cunt (f- version); pl. adessive
            'fituille',      // cunt (f- version); pl. allative
            'fituista',      // cunt (f- version); pl. elative
            'fittujen',      // cunt (f- version); pl. genitive
            'fittuihin',     // cunt (f- version); pl. illative
            'fituissa',      // cunt (f- version); pl. inessive
            'fitut',         // cunt (f- version); pl. nominative
            'fittuja',       // cunt (f- version); pl. partitive
            'fiddu',         // cunt (fidd- version); interjection, sg. nominative
            'fiddut',        // cunt (fidd- version); pl. nominative
            'fiddulta',      // cunt (fidd- version); sg. ablative
            'fiddulla',      // cunt (fidd- version); sg. adessive
            'fiddulle',      // cunt (fidd- version); sg. allative
            'fiddusta',      // cunt (fidd- version); sg. elative
            'fiddun',        // cunt (fidd- version); sg. genitive
            'fidduun',       // cunt (fidd- version); sg. illative
            'fiddussa',      // cunt (fidd- version); sg. inessive
            'fiddua',        // cunt (fidd- version); sg. partitive
            'fidduilta',     // cunt (fidd- version); pl. ablative
            'fidduilla',     // cunt (fidd- version); pl. adessive
            'fidduille',     // cunt (fidd- version); pl. allative
            'fidduista',     // cunt (fidd- version); pl. elative
            'fiddujen',      // cunt (fidd- version); pl. genitive
            'fidduihin',     // cunt (fidd- version); pl. illative
            'fidduissa',     // cunt (fidd- version); pl. inessive
            'fiddut',        // cunt (fidd- version); pl. nominative
            'fidduja',       // cunt (fidd- version); pl. partitive
            'horo',          // whore; interjection, sg. nominative
            'horot',         // whore; pl. nominative
            'horolta',       // whore; sg. ablative
            'horolla',       // whore; sg. adessive
            'horolle',       // whore; sg. allative
            'horosta',       // whore; sg. elative
            'horon',         // whore; sg. genitive
            'horoon',        // whore; sg. illative
            'horossa',       // whore; sg. inessive
            'horoa',         // whore; sg. partitive
            'horoilta',      // whore; pl. ablative
            'horoilla',      // whore; pl. adessive
            'horoille',      // whore; pl. allative
            'horoista',      // whore; pl. elative
            'horojen',       // whore; pl. genitive
            'horoihin',      // whore; pl. illative
            'horoissa',      // whore; pl. inessive
            'horot',         // whore; pl. nominative
            'horoja','abruti', 		// Idiot (masculine)
            'abrutie', 		// Idiot (feminine)
            'baise',		// Fuck
            'baisé',		// Fucked
            'baiser',		// To fuck
            'batard',		// Bastard
            'bite',			// Dick
            'bougnoul',		// Sandnigger
            'branleur',		// Wanker
            'burne',		// Testicle
            'chier',		// To shit
            'cocu',			// Cuckold
            'con',			// Idiot
            'connard',		// Idiot
            'connasse',		// Stupid and annoying girl
            'conne',		// Idiot (feminine)
            'couille',		// Ball (testicle)
            'couillon',		// Stupid (masculine)
            'couillonne',	// Stupid (feminine)
            'crevard',		// Backstabber or Hobo, depending on the context
            'cul',			// Ass
            'encule',		// Mother-fucker (masculine)
            'enculé',		// Mother-fucker (masculine)
            'enculee',		// Mother-fucker (feminine)
            'enculée',		// Mother-fucker (feminine)
            'enculer',		// To fuck in the ass
            'enfoire',		// Bastard (masculine)
            'enfoiré',		// Bastard (masculine)
            'fion',			// Ass
            'foutre',		// Cum
            'merde',		// Shit
            'negre',		// Nigger (masculine)
            'nègre',		// Nigger (masculine)
            'negresse',		// Nigger (feminine)
            'négresse',		// Nigger (feminine)
            'nique',		// Fuck
            'niquer',		// To fuck
            'partouze',		// Sex orgy
            'pd',			// Fag
            'pede',			// Fag
            'pédé',			// Fag
            'petasse',		// Slut/Show-off (feminine)
            'pétasse',		// Slut/Show-off (feminine)
            'pine',			// Dick
            'pouffe',		// Show-off (feminine)
            'pouffiasse',	// Show-off (feminine)
            'putain',		// Slut
            'pute',			// Slut
            'salaud',		// Bastard/backstabber (masculine)
            'salop',		// Bastard/backstabber (masculine)
            'salopard',		// Bastard/backstabber (masculine)
            'salope',		// Slut (feminine)
            'sodomie',		// Sodomy
            'sucer',		// To suck
            'tapette',		// Fag
            'tare',			// Insane
            'taré',			// Insane
            'vagin',		// Vagina
            'zob',"allupato",
        "ammucchiata",
        "anale",
        "arrapato",
        "arrusa",
        "arruso",
        "assatanato",
        "bagascia",
        "bagassa",
        "bagnarsi",
        "baldracca",
        "balle",
        "battere",
        "battona",
        "belino",
        "biga",
        "bocchinara",
        "bocchino",
        "bofilo",
        "boiata",
        "bordello",
        "brinca",
        "bucaiolo",
        "budiùlo",
        "buona donna",
        "busone",
        "cacca",
        "caccati in mano e prenditi a schiaffi",
        "caciocappella",
        "cadavere",
        "cagare",
        "cagata",
        "cagna",
        "cammello",
        "cappella",
        "carciofo",
        "carità",
        "casci",
        "cazzata",
        "cazzimma",
        "cazzo",
        "checca",
        "chiappa",
        "chiavare",
        "chiavata",
        "ciospo",
        "ciucciami il cazzo",
        "coglione",
        "coglioni",
        "cornuto",
        "cozza",
        "culattina",
        "culattone",
        "culo",
        "di merda",
        "ditalino",
        "duro",
        "fare unaŠ",
        "fava",
        "femminuccia",
        "fica",
        "figa",
        "figlio di buona donna",
        "figlio di puttana",
        "figone",
        "finocchio",
        "fottere",
        "fottersi",
        "fracicone",
        "fregna",
        "frocio",
        "froscio",
        "fuori come un balcone",
        "goldone",
        "grilletto",
        "guanto",
        "guardone",
        "incazzarsi",
        "incoglionirsi",
        "ingoio",
        "l'arte bolognese",
        "leccaculo",
        "lecchino",
        "lofare",
        "loffa",
        "loffare",
        "lumaca",
        "manico",
        "mannaggia",
        "merda",
        "merdata",
        "merdoso",
        "mignotta",
        "minchia",
        "minchione",
        "mona",
        "monta",
        "montare",
        "mussa",
        "nave scuola",
        "nerchia",
        "nudo",
        "padulo",
        "palle",
        "palloso",
        "patacca",
        "patonza",
        "pecorina",
        "pesce",
        "picio",
        "pincare",
        "pipa",
        "pipì",
        "pippone",
        "pirla",
        "pisciare",
        "piscio",
        "pisello",
        "pistola",
        "pistolotto",
        "pomiciare",
        "pompa",
        "pompino",
        "porca",
        "porca madonna",
        "porca miseria",
        "porca puttana",
        "porco due",
        "porco zio",
        "potta",
        "puppami",
        "puttana",
        "quaglia",
        "recchione",
        "regina",
        "rincoglionire",
        "rizzarsi",
        "rompiballe",
        "ruffiano",
        "sbattere",
        "sbattersi",
        "sborra",
        "sborrata",
        "sborrone",
        "sbrodolata",
        "scopare",
        "scopata",
        "scorreggiare",
        "sega",
        "slinguare",
        "slinguata",
        "smandrappata",
        "soccia",
        "socmel",
        "sorca",
        "spagnola",
        "spompinare",
        "sticchio",
        "stronza",
        "stronzata",
        "stronzo",
        "succhiami",
        "sveltina",
        "sverginare",
        "tarzanello",
        "terrone",
        "testa di cazzo",
        "tette",
        "tirare",
        "topa",
        "troia",
        "trombare",
        "uccello",
        "vacca",
        "vaffanculo",
        "vangare",
        "venire",
        "zinne",
        "zio cantante",
        "zoccola","affanculo",
        "bagascia",
        "baldracca",
        "battona",
        "bocchinara",
        "bocchinaro",
        "cazzi",
        "cazzo",
        "chiavare",
        "coglione",
        "culattone",
        "dio bestia",
        "dio cane",
        "dio porco",
        "fanculo",
        "fica",
        "figa",
        "fottere",
        "frocio",
        "inculare",
        "mignotta",
        "minchia",
        "pompinara",
        "pompino",
        "porco dio",
        "puttana",
        "ricchione",
        "rottinculo",
        "sborra",
        "segaiolo",
        "troia",
        "troietta",
        "troiona",
        "troione",
        "vaffanculo",
        "zoccola",'あいえき',     	// Sexual fluids
            'せいえき',     	// Semen
            'ファック',     	// Fuck
            'いぬごろし',   	// Dog killer
            'いんぱい',     	// Slut
            'いんもう',     	// Pubic hair
            'うんこ',     	// Shit
            'うんち',     	// Shit
            'おめこ',     	// Vagina
            'かたわ',     	// Cripple
            'きちがい',     	// Lunatic
            'くろんぼ',     	// Negro
            'けとう',     	// Hairy foreigner
            'ころす',     	// Kill
            'ごうかん',     	// Rape
            'さんごくじん',	// Foreign resident
            'しなじん',    	// Chinese person (offensive)
            'しね',     		// Die
            'せっくす',    	// Sex
            'ちゃんころ',    // Chink
            'ちんこ',     	// Penis
            'ちんちん',     	// Dick
            'ちんぽ',     	// Dick
            'ちんば',     	// Cripple
            'つんぼ',     	// Deaf person
            'どかた',     	// Laborer
            'とさつ',     	// Slaughter
            'どもり',     	// Speech impediment
            'にぐろ',     	// Negro
            'にんぴにん',  	// Brute
            'びっこ',     	// Cripple
            'ひにん',     	// Contraception / Non-human (insult to Burakumin)
            'ふぇら',     	// Fellatio
            'ぶらく',			// Buraku
            'ぺにす',     	// Penis
            'まんこ',     	// Vagina
            'おまんこ',     	// Vagina
            'めくら',     	// Blind person, illiterate person
            'やらせろ',    	// "Let me do you"
            'やりまん',    	// Slut
            'りょうじょく', 	// Rape
            'れいぷ',     	// Rape
            'ろりこん','강간',     		// Rape
            '개새끼',     	// Son of a bitch
            '개지랄',     	// Careless dog (insult)
            '걸레같은년',    	// A bitch that is a rag
            '걸레년',    		// Insult for women
            '귀두',    		// Glans penis
            '빨아',    		// To suck
            '핥아',    		// To lick
            '니미랄',    		// An insulting word
            '딸딸이',    		// Masturbation
            '미친년',    		// Crazy bitch
            '미친놈',    		// Crazy bastard
            '병신',    		// Retard
            '보지',    		// Vulva
            '부랄',    		// Same pronunciation as the word for testicles
            '불알',    		// Testicles
            '빠구리',    		// Sexual relationship (slang)
            '빠굴이',    		// Same pronunciation as slang for sexual relationship
            '사까시',     	// Oral sex
            '꼡성감대',     	// Any body part that reacts to sexual stimuli
            '성관계',     	// Sexual relationship
            '냕성폭행',     	// Sexual assult
            '성행위',     	// Sexual act
            '섹스',     		// Sex
            '시팔년',     	// An insult (for women)
            '시팔놈',     	// An insult (for men)
            '쌍넘',     		// An insult (for men)
            '쌍년',     		// An insult (for women)
            '쌍놈',     		// An insult (for men)
            '쌍뇬',     		// An insult (for men)
            '씨발',     		// Shit
            '씨발넘',     	// An insult (for men)
            '씨발년',     	// An insult (for women)
            '씨발놈',     	// An insult (for men)
            '씨발뇬',     	// An insult (for men)
            '씹새끼',     	// Bastard
            '염병',			// Typhoid fever (slang)
            '오르',     		// Orgasm
            '왕자지',     	// Penis
            '유두',     		// Nipple
            '자지',     		// Penis (slang)
            '잠지',     		// Penis
            '정액',     		// Semen
            '창녀',     		// Prostitute
            '콘돔',     		// Condom
            '클리토리스',    	// Clitoris
            '페니스',    		// Penis
            '후장','abortus', 			// Abortion
            'achterlijk', 		// Retarded
            'bosneger', 		// Forest nigger
            'debiel', 			// Moron, mentally retarded
            'etterbak', 		// Annoying person (mostly children)
            'flikker', 			// Faggot
            'flikker op', 		// Fuck off!
            'fock', 			// Misspelling of "fuck" (anglicism)
            'geil', 			// Horny
            'godver', 			// Short version of "godverdomme" (goddammit)
            'godverju', 		// Short version of "godverdomme" (goddammit)
            'hoer', 			// Hooker; whore; harlot
            'hoertje', 			// Hooker
            'homofiel', 		// Homophile
            'huppelkut', 		// Used to insult a woman's perceived shallowness; literally "skipping cunt"
            'kak', 				// Shit
            'kakker', 			// Person of higher class/wealth (derogatory); literally "shitter"
            'kanker', 			// Cancer (expletive)
            'kankeren', 		// Bitch (verb)
            'kankerjoch', 		// Cancer kid (insult)
            'kankerlyer', 		// Cancer sufferer (insult; old spelling)
            'klerelijer', 		// Asshole; literally "cholera sufferer"
            'klojo', 			// Asshole (shorter version of "klootzak")
            'klootzak', 		// Asshole; son of a bitch; literally "ball sack"
            'kut', 				// Fuck (interjection); vagina
            'lijer', 			// Sufferer (insult); slang spelling of "lijder"
            'lul', 				// Dick
            'lulhannes', 		// Dickhead
            'makak', 			// Moroccan (racist)
            'makakken', 		// Moroccans (racist; plural)
            'mof', 				// German (derogatory)
            'mongool', 			// Person with Down syndrome (derogatory)
            'mongolen', 		// Person with Down syndrome (derogatory; plural)
            'neger', 			// Black male (not necessarily considered an insult)
            'negerin', 			// Black female (not necessarily considered an insult)
            'neuk', 			// (to) fuck
            'neuken', 			// Fucking
            'nikker', 			// Nigger
            'nsb', 				// Nationaal-Socialistische Beweging (National Socialist Movement)
            'nsber', 			// NSB member (insult synonymous with traitor)
            'ouwehoeren', 		// To talk bullshit; literally "old whores"
            'paardelul', 		// Horsedick
            'pik', 				// Penis
            'pleuris', 			// Pleuritis (expletive), slang for tuberculosis
            'poep', 			// Poop
            'poepen', 			// Pooping
            'pokke', 			// Smallpox; slang spelling of "pokken"
            'pokkelijer', 		// Asshole; slang meaning "smallpox sufferer"
            'pokkelyer', 		// Asshole; slang meaning "smallpox sufferer", old spelling
            'pokken', 			// Smallpox
            'pokkenlyer', 		// Asshole; slang meaning "smallpox sufferer", old spelling
            'roetmop', 			// Nigger; literally "soot mop"
            'rotzak', 			// Scumbag
            'seks', 			// Sex
            'slet', 			// Slut
            'sloerie', 			// Slut
            'snol', 			// Moll; prostitute
            'spleetoog', 		// Oriental person (derogatory); literally "slit eye"
            'stoephoer', 		// Sidewalk whore
            'stront', 			// Shit; poop; turd
            'sukkel', 			// Softy, dolt, someone you feel sorry for
            'tering', 			// Slang for tuberculosis; short for "vertering" (digestion)
            'teringlyer', 		// Asshole; slang meaning "tuberculosis sufferer"
            'tiet', 			// Boob; tit
            'tieten', 			// Boobies; titties
            'tietjes', 			// Boobies; titties
            'trut', 			// Bitch
            'tyfus', 			// Typhoid fever
            'tyfuslijer', 		// Asshole; slang meaning "typhoid fever sufferer"
            'tyfuslyer', 		// Asshole; slang meaning "typhoid fever sufferer", old spelling
            'verdomme', 		// Damn it
            'vetzak', 			// Fatass
            'zakkewassr', 		// Idiot; "zakkenwasser" shortened to character limit; literally "jute sack washer"
            'zandneger','dritt',
            'drittsekk',
            'dust',
            'faen',
            'fæn',
            'fanden',
            'helvete',
            'helvette',
            'hora',
            'hore',
            'jævel',
            'jævla',
            'kjerring',
            'ludder',
            'pedo',
            'pedofil',
            'pokker',
            'porn',
            'porno',
            'quisling',
            'satan',
            'sattan',
            'søren','bæsj',
            'dildo',
            'ereksjon',
            'fitta',
            'fitte',
            'forpult',
            'fuck',
            'fucking',
            'føkk',
            'føkking',
            'førpult',
            'førrpult',
            'hæstkug',
            'hæstkuk',
            'hestkug',
            'hestkuk',
            'klitoris',
            'klitt',
            'knull',
            'kug',
            'kugost',
            'kuk',
            'kukk',
            'kukkost',
            'kukost',
            'kåt',
            'lort',
            'masturbasjon',
            'masturbere',
            'patte',
            'penis',
            'pess',
            'pikk',
            'piss',
            'pong',
            'pul',
            'pule',
            'pult',
            'pung',
            'pupp',
            'pæss',
            'pæss',
            'rape',
            'rass',
            'rasshøl',
            'rasshøl',
            'rompe',
            'ronk',
            'runk',
            'ræv',
            'ræva',
            'rævhøl',
            'rævva',
            'sæd',
            'shit',
            'skit',
            'sodom',
            'stivas',
            'stiven',
            'utpult',
            'vagina',
            'voldta',
            'voldtekt','fittetryne',
            'kukklest',
            'kukkpeis',
            'kukkskalle',
            'kuklest',
            'kukpeis',
            'kukskalle',
            'kuktryne',
            'rasstryne',
            'rautryne',
            'rævtryne',
            'rævvtryne','homo',
            'bruning',
            'hviting',
            'neger',
            'nigger',
            'pakkis',
            'svarting','homse',
            'lesbe',
            'lespe',
            'pøke',
            'skinkerytter',
            'soper',
            'teppetygger');
    $reg = '~\b' . implode('\b|\b', $badwords) . '\b~';

    preg_match_all($reg, preg_replace('~[_.,?!]~', '', $str), $matches);

    if(count($matches[0]) > 0)
        return 'abused_failed_123';
    else{
        return $str;
    }
}
<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;








class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-main',
    'version' => 'dev-main',
    'aliases' => 
    array (
    ),
    'reference' => 'd5fa7341cc2463efe4f9ac3e998d747c677020e3',
    'name' => 'laravel/laravel',
  ),
  'versions' => 
  array (
    'brick/math' => 
    array (
      'pretty_version' => '0.11.0',
      'version' => '0.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0ad82ce168c82ba30d1c01ec86116ab52f589478',
    ),
    'cordoval/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'davedevelopment/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'dflydev/dot-access-data' => 
    array (
      'pretty_version' => 'v3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f41715465d65213d644d3141a6a93081be5d3549',
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => '2.0.6',
      'version' => '2.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd9d313a36c872fd6ee06d9a6cbcf713eaa40f024',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '84a527db05647743d50373e0ec53a152f2cde568',
    ),
    'dragonmantank/cron-expression' => 
    array (
      'pretty_version' => 'v3.3.2',
      'version' => '3.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '782ca5968ab8b954773518e9e49a6f892a34b2a8',
    ),
    'egulias/email-validator' => 
    array (
      'pretty_version' => '4.0.1',
      'version' => '4.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '3a85486b709bc384dae8eb78fb2eec649bdb64ff',
    ),
    'ezyang/htmlpurifier' => 
    array (
      'pretty_version' => 'v4.16.0',
      'version' => '4.16.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '523407fb06eb9e5f3d59889b3978d5bfe94299c8',
    ),
    'fakerphp/faker' => 
    array (
      'pretty_version' => 'v1.21.0',
      'version' => '1.21.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '92efad6a967f0b79c499705c69b662f738cc9e4d',
    ),
    'filp/whoops' => 
    array (
      'pretty_version' => '2.15.1',
      'version' => '2.15.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e864ac957acd66e1565f25efda61e37791a5db0b',
    ),
    'fruitcake/php-cors' => 
    array (
      'pretty_version' => 'v1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '58571acbaa5f9f462c9c77e911700ac66f446d4e',
    ),
    'graham-campbell/result-type' => 
    array (
      'pretty_version' => 'v1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '672eff8cf1d6fe1ef09ca0f89c4b287d6a3eb831',
    ),
    'guzzlehttp/guzzle' => 
    array (
      'pretty_version' => '7.5.0',
      'version' => '7.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b50a2a1251152e43f6a37f0fa053e730a67d25ba',
    ),
    'guzzlehttp/promises' => 
    array (
      'pretty_version' => '1.5.2',
      'version' => '1.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b94b2807d85443f9719887892882d0329d1e2598',
    ),
    'guzzlehttp/psr7' => 
    array (
      'pretty_version' => '2.4.4',
      'version' => '2.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '3cf1b6d4f0c820a2cf8bcaec39fc698f3443b5cf',
    ),
    'guzzlehttp/uri-template' => 
    array (
      'pretty_version' => 'v1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b945d74a55a25a949158444f09ec0d3c120d69e2',
    ),
    'hamcrest/hamcrest-php' => 
    array (
      'pretty_version' => 'v2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
    ),
    'illuminate/auth' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/broadcasting' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/bus' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/cache' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/collections' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/conditionable' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/config' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/console' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/container' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/contracts' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/cookie' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/database' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/encryption' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/events' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/filesystem' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/hashing' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/http' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/log' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/macroable' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/mail' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/notifications' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/pagination' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/pipeline' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/process' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/queue' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/redis' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/routing' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/session' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/support' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/testing' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/translation' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/validation' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'illuminate/view' => 
    array (
      'replaced' => 
      array (
        0 => 'v10.3.3',
      ),
    ),
    'kodova/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'laravel/framework' => 
    array (
      'pretty_version' => 'v10.3.3',
      'version' => '10.3.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '90f24d9e2860ecf6b5492e966956270ceb98c03d',
    ),
    'laravel/laravel' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
      ),
      'reference' => 'd5fa7341cc2463efe4f9ac3e998d747c677020e3',
    ),
    'laravel/sail' => 
    array (
      'pretty_version' => 'v1.21.2',
      'version' => '1.21.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '19d6fe167e2389b41fe1b4ee52293d1eaf8a43fc',
    ),
    'laravel/sanctum' => 
    array (
      'pretty_version' => 'v3.2.1',
      'version' => '3.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd09d69bac55708fcd4a3b305d760e673d888baf9',
    ),
    'laravel/serializable-closure' => 
    array (
      'pretty_version' => 'v1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f23fe9d4e95255dacee1bf3525e0810d1a1b0f37',
    ),
    'laravel/tinker' => 
    array (
      'pretty_version' => 'v2.8.1',
      'version' => '2.8.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '04a2d3bd0d650c0764f70bf49d1ee39393e4eb10',
    ),
    'league/commonmark' => 
    array (
      'pretty_version' => '2.3.9',
      'version' => '2.3.9.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c1e114f74e518daca2729ea8c4bf1167038fa4b5',
    ),
    'league/config' => 
    array (
      'pretty_version' => 'v1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
    ),
    'league/flysystem' => 
    array (
      'pretty_version' => '3.12.3',
      'version' => '3.12.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '81e87e74dd5213795c7846d65089712d2dda90ce',
    ),
    'league/mime-type-detection' => 
    array (
      'pretty_version' => '1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ff6248ea87a9f116e78edd6002e39e5128a0d4dd',
    ),
    'mockery/mockery' => 
    array (
      'pretty_version' => '1.5.1',
      'version' => '1.5.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e92dcc83d5a51851baf5f5591d32cb2b16e3684e',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '3.3.1',
      'version' => '3.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '9b5daeaffce5b926cac47923798bba91059e60e2',
    ),
    'mtdowling/cron-expression' => 
    array (
      'replaced' => 
      array (
        0 => '^1.0',
      ),
    ),
    'myclabs/deep-copy' => 
    array (
      'pretty_version' => '1.11.1',
      'version' => '1.11.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '7284c22080590fb39f2ffa3e9057f10a4ddd0e0c',
    ),
    'nesbot/carbon' => 
    array (
      'pretty_version' => '2.66.0',
      'version' => '2.66.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '496712849902241f04902033b0441b269effe001',
    ),
    'nette/schema' => 
    array (
      'pretty_version' => 'v1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'abbdbb70e0245d5f3bf77874cea1dfb0c930d06f',
    ),
    'nette/utils' => 
    array (
      'pretty_version' => 'v4.0.0',
      'version' => '4.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cacdbf5a91a657ede665c541eda28941d4b09c1e',
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.15.4',
      'version' => '4.15.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '6bb5176bc4af8bcb7d926f88718db9b96a2d4290',
    ),
    'nunomaduro/collision' => 
    array (
      'pretty_version' => 'v7.1.0',
      'version' => '7.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2b97fed4950cf0ff148c18b853975ec8ea135e90',
    ),
    'nunomaduro/termwind' => 
    array (
      'pretty_version' => 'v1.15.1',
      'version' => '1.15.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8ab0b32c8caa4a2e09700ea32925441385e4a5dc',
    ),
    'phar-io/manifest' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '97803eca37d319dfa7826cc2437fc020857acb53',
    ),
    'phar-io/version' => 
    array (
      'pretty_version' => '3.2.1',
      'version' => '3.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
    ),
    'phpoption/phpoption' => 
    array (
      'pretty_version' => '1.9.1',
      'version' => '1.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dd3a383e599f49777d8b628dadbb90cae435b87e',
    ),
    'phpunit/php-code-coverage' => 
    array (
      'pretty_version' => '10.0.2',
      'version' => '10.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '20800e84296ea4732f9a125e08ce86b4004ae3e4',
    ),
    'phpunit/php-file-iterator' => 
    array (
      'pretty_version' => '4.0.1',
      'version' => '4.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fd9329ab3368f59fe1fe808a189c51086bd4b6bd',
    ),
    'phpunit/php-invoker' => 
    array (
      'pretty_version' => '4.0.0',
      'version' => '4.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f5e568ba02fa5ba0ddd0f618391d5a9ea50b06d7',
    ),
    'phpunit/php-text-template' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9f3d3709577a527025f55bcf0f7ab8052c8bb37d',
    ),
    'phpunit/php-timer' => 
    array (
      'pretty_version' => '6.0.0',
      'version' => '6.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e2a2d67966e740530f4a3343fe2e030ffdc1161d',
    ),
    'phpunit/phpunit' => 
    array (
      'pretty_version' => '10.0.15',
      'version' => '10.0.15.0',
      'aliases' => 
      array (
      ),
      'reference' => '9b0c2245ef173a3d9546f6a4393a85d60eabe071',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
    ),
    'psr/container-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.1|2.0',
      ),
    ),
    'psr/event-dispatcher' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-client' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
    ),
    'psr/http-client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-factory' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
    ),
    'psr/http-factory-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
    ),
    'psr/http-message-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fe5ea303b0887d5caefd3d431c3e61ad47037001',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '3.0.0',
        1 => '1.0|2.0|3.0',
      ),
    ),
    'psr/simple-cache' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
    ),
    'psr/simple-cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0|3.0',
      ),
    ),
    'psy/psysh' => 
    array (
      'pretty_version' => 'v0.11.12',
      'version' => '0.11.12.0',
      'aliases' => 
      array (
      ),
      'reference' => '52cb7c47d403c31c0adc9bf7710fc355f93c20f7',
    ),
    'ralouphie/getallheaders' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '120b605dfeb996808c31b6477290a714d356e822',
    ),
    'ramsey/collection' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a4b48764bfbb8f3a6a4d1aeb1a35bb5e9ecac4a5',
    ),
    'ramsey/uuid' => 
    array (
      'pretty_version' => '4.x-dev',
      'version' => '4.9999999.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'bf2bee216a4379eaf62162307d62bb7850405fec',
    ),
    'rhumsaa/uuid' => 
    array (
      'replaced' => 
      array (
        0 => '4.x-dev',
      ),
    ),
    'sebastian/cli-parser' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'efdc130dbbbb8ef0b545a994fd811725c5282cae',
    ),
    'sebastian/code-unit' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a81fee9eef0b7a76af11d121767abc44c104e503',
    ),
    'sebastian/code-unit-reverse-lookup' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5e3a687f7d8ae33fb362c5c0743794bbb2420a1d',
    ),
    'sebastian/comparator' => 
    array (
      'pretty_version' => '5.0.0',
      'version' => '5.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '72f01e6586e0caf6af81297897bd112eb7e9627c',
    ),
    'sebastian/complexity' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e67d240970c9dc7ea7b2123a6d520e334dd61dc6',
    ),
    'sebastian/diff' => 
    array (
      'pretty_version' => '5.0.0',
      'version' => '5.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '70dd1b20bc198da394ad542e988381b44e64e39f',
    ),
    'sebastian/environment' => 
    array (
      'pretty_version' => '6.0.0',
      'version' => '6.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b6f3694c6386c7959915a0037652e0c40f6f69cc',
    ),
    'sebastian/exporter' => 
    array (
      'pretty_version' => '5.0.0',
      'version' => '5.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f3ec4bf931c0b31e5b413f5b4fc970a7d03338c0',
    ),
    'sebastian/global-state' => 
    array (
      'pretty_version' => '6.0.0',
      'version' => '6.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aab257c712de87b90194febd52e4d184551c2d44',
    ),
    'sebastian/lines-of-code' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '17c4d940ecafb3d15d2cf916f4108f664e28b130',
    ),
    'sebastian/object-enumerator' => 
    array (
      'pretty_version' => '5.0.0',
      'version' => '5.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '202d0e344a580d7f7d04b3fafce6933e59dae906',
    ),
    'sebastian/object-reflector' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '24ed13d98130f0e7122df55d06c5c4942a577957',
    ),
    'sebastian/recursion-context' => 
    array (
      'pretty_version' => '5.0.0',
      'version' => '5.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '05909fb5bc7df4c52992396d0116aed689f93712',
    ),
    'sebastian/type' => 
    array (
      'pretty_version' => '4.0.0',
      'version' => '4.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '462699a16464c3944eefc02ebdd77882bd3925bf',
    ),
    'sebastian/version' => 
    array (
      'pretty_version' => '4.0.1',
      'version' => '4.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c51fa83a5d8f43f1402e3f32a005e6262244ef17',
    ),
    'spatie/backtrace' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ec4dd16476b802dbdc6b4467f84032837e316b8c',
    ),
    'spatie/flare-client-php' => 
    array (
      'pretty_version' => '1.3.5',
      'version' => '1.3.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '3e5dd5ac4928f3d2d036bd02de5eb83fd0ef1f42',
    ),
    'spatie/ignition' => 
    array (
      'pretty_version' => '1.4.5',
      'version' => '1.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cc09114b7057bd217b676f047544b33f5b6247e6',
    ),
    'spatie/laravel-ignition' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '70c0e2a22c5c4b691a34db8c98bd6d695660a97a',
    ),
    'stevebauman/purify' => 
    array (
      'pretty_version' => 'v6.0.1',
      'version' => '6.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '7b63762b05db9eadc36d7e8b74cf58fa64bfa527',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v6.2.7',
      'version' => '6.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cbad09eb8925b6ad4fb721c7a179344dc4a19d45',
    ),
    'symfony/css-selector' => 
    array (
      'pretty_version' => 'v6.2.7',
      'version' => '6.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aedf3cb0f5b929ec255d96bbb4909e9932c769e0',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v3.2.1',
      'version' => '3.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e2d1534420bd723d0ef5aec58a22c5fe60ce6f5e',
    ),
    'symfony/error-handler' => 
    array (
      'pretty_version' => 'v6.2.7',
      'version' => '6.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '61e90f94eb014054000bc902257d2763fac09166',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v6.2.7',
      'version' => '6.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '404b307de426c1c488e5afad64403e5f145e82a5',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v3.2.1',
      'version' => '3.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '0ad3b6f1e4e2da5690fefe075cd53a238646d8dd',
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.0|3.0',
      ),
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v6.2.7',
      'version' => '6.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '20808dc6631aecafbe67c186af5dcb370be3a0eb',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v6.2.7',
      'version' => '6.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '5fc3038d4a594223f9ea42e4e985548f3fcc9a3b',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v6.2.7',
      'version' => '6.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ca0680ad1e2d678536cc20e0ae33f9e4e5d2becd',
    ),
    'symfony/mailer' => 
    array (
      'pretty_version' => 'v6.2.7',
      'version' => '6.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e4f84c633b72ec70efc50b8016871c3bc43e691e',
    ),
    'symfony/mime' => 
    array (
      'pretty_version' => 'v6.2.7',
      'version' => '6.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '62e341f80699badb0ad70b31149c8df89a2d778e',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5bbc823adecdae860bb64756d639ecfec17b050a',
    ),
    'symfony/polyfill-intl-grapheme' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '511a08c03c1960e08a883f4cffcacd219b758354',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '639084e360537a19f9ee352433b84ce831f3d2da',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '19bd1e4fcd5b91116f14d8533c57831ed00571b6',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '869329b1e9894268a8a61dabb69153029b7a8c97',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936',
    ),
    'symfony/polyfill-uuid' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f3cf1a645c2734236ed1e2e671e273eeb3586166',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v6.2.7',
      'version' => '6.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '680e8a2ea6b3f87aecc07a6a65a203ae573d1902',
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v6.2.7',
      'version' => '6.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fa643fa4c56de161f8bc8c0492a76a60140b50e4',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v3.2.1',
      'version' => '3.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a8c9cedf55f314f3a186041d19537303766df09a',
    ),
    'symfony/string' => 
    array (
      'pretty_version' => 'v6.2.7',
      'version' => '6.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '67b8c1eec78296b85dc1c7d9743830160218993d',
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v6.2.7',
      'version' => '6.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '90db1c6138c90527917671cd9ffa9e8b359e3a73',
    ),
    'symfony/translation-contracts' => 
    array (
      'pretty_version' => 'v3.2.1',
      'version' => '3.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dfec258b9dd17a6b24420d464c43bffe347441c8',
    ),
    'symfony/translation-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.3|3.0',
      ),
    ),
    'symfony/uid' => 
    array (
      'pretty_version' => 'v6.2.7',
      'version' => '6.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd30c72a63897cfa043e1de4d4dd2ffa9ecefcdc0',
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v6.2.7',
      'version' => '6.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cf8d4ca1ddc1e3cc242375deb8fc23e54f5e2a1e',
    ),
    'symfony/yaml' => 
    array (
      'pretty_version' => 'v6.2.7',
      'version' => '6.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e8e6a1d59e050525f27a1f530aa9703423cb7f57',
    ),
    'theseer/tokenizer' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '34a41e998c2183e22995f158c581e7b5e755ab9e',
    ),
    'tijsverkoyen/css-to-inline-styles' => 
    array (
      'pretty_version' => '2.2.6',
      'version' => '2.2.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c42125b83a4fa63b187fdf29f9c93cb7733da30c',
    ),
    'vlucas/phpdotenv' => 
    array (
      'pretty_version' => 'v5.5.0',
      'version' => '5.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1a7ea2afc49c3ee6d87061f5a233e3a035d0eae7',
    ),
    'voku/portable-ascii' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b56450eed252f6801410d810c8e1727224ae0743',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}

if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}








public static function getRawData()
{
@trigger_error('getRawData only returns the first dataset loaded, which may not be what you expect. Use getAllRawData() instead which returns all datasets for all autoloaders present in the process.', E_USER_DEPRECATED);

return self::$installed;
}







public static function getAllRawData()
{
return self::getInstalled();
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}





private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}

<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'v10.4.1',
    'version' => '10.4.1.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => 'typo3/cms-base-distribution',
  ),
  'versions' => 
  array (
    'cogpowered/finediff' => 
    array (
      'pretty_version' => '0.3.1',
      'version' => '0.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '339ddc8c3afb656efed4f2f0a80e5c3d026f8ea8',
    ),
    'doctrine/annotations' => 
    array (
      'pretty_version' => '1.13.2',
      'version' => '1.13.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '5b668aef16090008790395c02c893b1ba13f7e08',
    ),
    'doctrine/cache' => 
    array (
      'pretty_version' => '2.1.1',
      'version' => '2.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '331b4d5dbaeab3827976273e9356b3b453c300ce',
    ),
    'doctrine/dbal' => 
    array (
      'pretty_version' => '2.13.3',
      'version' => '2.13.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0d7adf4cadfee6f70850e5b163e6cdd706417838',
    ),
    'doctrine/deprecations' => 
    array (
      'pretty_version' => 'v0.5.3',
      'version' => '0.5.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '9504165960a1f83cc1480e2be1dd0a0478561314',
    ),
    'doctrine/event-manager' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '41370af6a30faa9dc0368c4a6814d596e81aba7f',
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd56bf6102915de5702778fe20f2de3b2fe570b5b',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e864bbf5904cb8f5bb334f99209b48018522f042',
    ),
    'egulias/email-validator' => 
    array (
      'pretty_version' => '2.1.25',
      'version' => '2.1.25.0',
      'aliases' => 
      array (
      ),
      'reference' => '0dbf5d78455d4d6a41d186da50adc1122ec066f4',
    ),
    'enshrined/svg-sanitize' => 
    array (
      'pretty_version' => '0.14.1',
      'version' => '0.14.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '307b42066fb0b76b5119f5e1f0826e18fefabe95',
    ),
    'guzzlehttp/guzzle' => 
    array (
      'pretty_version' => '6.5.5',
      'version' => '6.5.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '9d4290de1cfd701f38099ef7e183b64b4b7b0c5e',
    ),
    'guzzlehttp/promises' => 
    array (
      'pretty_version' => '1.4.1',
      'version' => '1.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8e7d04f1f6450fef59366c399cfad4b9383aa30d',
    ),
    'guzzlehttp/psr7' => 
    array (
      'pretty_version' => '1.8.2',
      'version' => '1.8.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dc960a912984efb74d0a90222870c72c87f10c91',
    ),
    'helhum/class-alias-loader' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'helhum/config-loader' => 
    array (
      'pretty_version' => 'v0.12.3',
      'version' => '0.12.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '4bd2cdb1d81ae0eedbc1ce9d2af1e81eea444e70',
    ),
    'helhum/typo3-console' => 
    array (
      'pretty_version' => 'v6.6.0',
      'version' => '6.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '88ee3c73b8b92c6319b7533fcfc88d58a20acd32',
    ),
    'lw/typo3cms-installers' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'masterminds/html5' => 
    array (
      'pretty_version' => '2.7.5',
      'version' => '2.7.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f640ac1bdddff06ea333a920c95bbad8872429ab',
    ),
    'netresearch/composer-installers' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.13.0',
      'version' => '4.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '50953a2691a922aa1769461637869a0a2faa3f53',
    ),
    'phpdocumentor/reflection-common' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
    ),
    'phpdocumentor/reflection-docblock' => 
    array (
      'pretty_version' => '5.2.2',
      'version' => '5.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '069a785b2141f5bcf49f3e353548dc1cce6df556',
    ),
    'phpdocumentor/type-resolver' => 
    array (
      'pretty_version' => '1.5.0',
      'version' => '1.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '30f38bffc6f24293dadd1823936372dfa9e86e2f',
    ),
    'psr/cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd11b50ad223250cf17b86e38383413f5a6764bf8',
    ),
    'psr/cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8622567409010282b7aeebe4bb841fe98b58dcaf',
    ),
    'psr/container-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
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
    'psr/http-server-handler' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aff2f80e33b7f026ec96bb42f63242dc50ffcae7',
    ),
    'psr/http-server-middleware' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2296f45510945530b9dceb8bcedb5cb84d40c5f5',
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'psr/simple-cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
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
    'symfony/cache' => 
    array (
      'pretty_version' => 'v4.4.30',
      'version' => '4.4.30.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f1c33520a5a439dfd7bd4d5e9cec26c6b79054cc',
    ),
    'symfony/cache-contracts' => 
    array (
      'pretty_version' => 'v1.1.10',
      'version' => '1.1.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '8d5489c10ef90aa7413e4921fc3c0520e24cbed7',
    ),
    'symfony/cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'symfony/config' => 
    array (
      'pretty_version' => 'v4.4.30',
      'version' => '4.4.30.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd9ea72de055cd822e5228ff898e2aad2f52f76b0',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v4.4.30',
      'version' => '4.4.30.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a3f7189a0665ee33b50e9e228c46f50f5acbed22',
    ),
    'symfony/dependency-injection' => 
    array (
      'pretty_version' => 'v4.4.27',
      'version' => '4.4.27.0',
      'aliases' => 
      array (
      ),
      'reference' => '52866e2cb314972ff36c5b3d405ba8f523e56f6e',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v4.4.30',
      'version' => '4.4.30.0',
      'aliases' => 
      array (
      ),
      'reference' => '2fe81680070043c4c80e7cedceb797e34f377bac',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v1.1.9',
      'version' => '1.1.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '84e23fdcd2517bf37aecbd16967e83f0caee25a7',
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.1',
      ),
    ),
    'symfony/expression-language' => 
    array (
      'pretty_version' => 'v4.4.30',
      'version' => '4.4.30.0',
      'aliases' => 
      array (
      ),
      'reference' => '78a014771042079cca30716c8471e7a0b985bd22',
    ),
    'symfony/filesystem' => 
    array (
      'pretty_version' => 'v4.4.27',
      'version' => '4.4.27.0',
      'aliases' => 
      array (
      ),
      'reference' => '517fb795794faf29086a77d99eb8f35e457837a7',
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v4.4.30',
      'version' => '4.4.30.0',
      'aliases' => 
      array (
      ),
      'reference' => '70362f1e112280d75b30087c7598b837c1b468b6',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v4.4.30',
      'version' => '4.4.30.0',
      'aliases' => 
      array (
      ),
      'reference' => '09b3202651ab23ac8dcf455284a48a3500e56731',
    ),
    'symfony/inflector' => 
    array (
      'pretty_version' => 'v4.4.27',
      'version' => '4.4.27.0',
      'aliases' => 
      array (
      ),
      'reference' => '2eb2095edc03a4f0780a417c2cf5b6f6ac5a7284',
    ),
    'symfony/mailer' => 
    array (
      'pretty_version' => 'v4.4.27',
      'version' => '4.4.27.0',
      'aliases' => 
      array (
      ),
      'reference' => 'edcd1e89670d6b939a8222110ad5e13ab135bd22',
    ),
    'symfony/mime' => 
    array (
      'pretty_version' => 'v4.4.27',
      'version' => '4.4.27.0',
      'aliases' => 
      array (
      ),
      'reference' => '6ab91e811439360339ebde803630c8d74223fa77',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '46cd95797e9df938fdd2b03693b5fca5e64b01ce',
    ),
    'symfony/polyfill-intl-icu' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '4a80a521d6176870b6445cfb469c130f9cae1dda',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '65bd267525e82759e7d8c4e8ceea44f398838e65',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8590a5f561694770bdcd3f9b5c69dde6945028e8',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.23.1',
      'version' => '1.23.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '9174a3d80210dca8daa7f31fec659150bbeabfc6',
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9a142215a36a3888e30d0a9eeea9766764e96976',
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fba8933c384d6476ab14fb7b8526e5287ca7e010',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.23.1',
      'version' => '1.23.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '1100343ed1a92e3a38f9ae122fc0eb21602547be',
    ),
    'symfony/polyfill-php81' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e66119f3de95efc359483f810c4c3e6436279436',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v4.4.30',
      'version' => '4.4.30.0',
      'aliases' => 
      array (
      ),
      'reference' => '13d3161ef63a8ec21eeccaaf9a4d7f784a87a97d',
    ),
    'symfony/property-access' => 
    array (
      'pretty_version' => 'v4.4.30',
      'version' => '4.4.30.0',
      'aliases' => 
      array (
      ),
      'reference' => '727edd3a5fd2feca1562e0f2520ed6888805c0fa',
    ),
    'symfony/property-info' => 
    array (
      'pretty_version' => 'v4.4.30',
      'version' => '4.4.30.0',
      'aliases' => 
      array (
      ),
      'reference' => '9471a7202a30fe682614b19043e30795a7a9e7c0',
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v4.4.30',
      'version' => '4.4.30.0',
      'aliases' => 
      array (
      ),
      'reference' => '9ddf033927ad9f30ba2bfd167a7b342cafa13e8e',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v1.1.9',
      'version' => '1.1.9.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b776d18b303a39f56c63747bcb977ad4b27aca26',
    ),
    'symfony/service-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'symfony/var-exporter' => 
    array (
      'pretty_version' => 'v4.4.30',
      'version' => '4.4.30.0',
      'aliases' => 
      array (
      ),
      'reference' => '67d0cbfac22a7f21bf6b94dd85de35df7b8a435e',
    ),
    'symfony/yaml' => 
    array (
      'pretty_version' => 'v4.4.29',
      'version' => '4.4.29.0',
      'aliases' => 
      array (
      ),
      'reference' => '3abcc4db06d4e776825eaa3ed8ad924d5bc7432a',
    ),
    'typo3-ter/typo3-console' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.6.0',
      ),
    ),
    'typo3/class-alias-loader' => 
    array (
      'pretty_version' => 'v1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '575f59581541f299f3a86a95b1db001ee6e1d2e0',
    ),
    'typo3/cms-about' => 
    array (
      'pretty_version' => 'v10.4.21',
      'version' => '10.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => '169b78dc2cdb490c75cf7f6c702694f99ef81e2b',
    ),
    'typo3/cms-backend' => 
    array (
      'pretty_version' => 'v10.4.21',
      'version' => '10.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ecd1c4d16329acb9ec7c3652ea8404d589be36dc',
    ),
    'typo3/cms-base-distribution' => 
    array (
      'pretty_version' => 'v10.4.1',
      'version' => '10.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'typo3/cms-belog' => 
    array (
      'pretty_version' => 'v10.4.21',
      'version' => '10.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fef7221f133072c50f68eda304878109cb191a28',
    ),
    'typo3/cms-beuser' => 
    array (
      'pretty_version' => 'v10.4.21',
      'version' => '10.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c47da8f5d07f077905dd5cc3769d2b9072432a89',
    ),
    'typo3/cms-cli' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '215a0bf5c446b4e0b20f4562bbaf3d6215a5ee82',
    ),
    'typo3/cms-composer-installers' => 
    array (
      'pretty_version' => 'v3.1.2',
      'version' => '3.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '1483e434946cf68b6589cdd61c760b19d0988d62',
    ),
    'typo3/cms-context-help' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'typo3/cms-core' => 
    array (
      'pretty_version' => 'v10.4.21',
      'version' => '10.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => '285573075ee1b0985eeeed3fb3688aada2d8d89e',
    ),
    'typo3/cms-cshmanual' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'typo3/cms-dashboard' => 
    array (
      'pretty_version' => 'v10.4.21',
      'version' => '10.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd8bddae74592bc26d6997965c56cd70b3bf8f441',
    ),
    'typo3/cms-extbase' => 
    array (
      'pretty_version' => 'v10.4.21',
      'version' => '10.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f15c2b51cdc65fd3983e77fec0fe6f3a09b03724',
    ),
    'typo3/cms-extensionmanager' => 
    array (
      'pretty_version' => 'v10.4.21',
      'version' => '10.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a8b57fce3811209903add222a5b3862e2e42e4c3',
    ),
    'typo3/cms-felogin' => 
    array (
      'pretty_version' => 'v10.4.21',
      'version' => '10.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => '6a867150730e058c2c008c75f7a15a5289ff1d16',
    ),
    'typo3/cms-filelist' => 
    array (
      'pretty_version' => 'v10.4.21',
      'version' => '10.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b9f26cdb703ce1df3611238577a6cc71294772f2',
    ),
    'typo3/cms-fluid' => 
    array (
      'pretty_version' => 'v10.4.21',
      'version' => '10.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b75a65cd7c6543a2f34bfec4535c0fc895183924',
    ),
    'typo3/cms-fluid-styled-content' => 
    array (
      'pretty_version' => 'v10.4.21',
      'version' => '10.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => '9826a3de7f66607b732424e78a17cf9cccd02481',
    ),
    'typo3/cms-form' => 
    array (
      'pretty_version' => 'v10.4.21',
      'version' => '10.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e537c1d2572d81022068e72e78dc3f943bbef9fd',
    ),
    'typo3/cms-frontend' => 
    array (
      'pretty_version' => 'v10.4.21',
      'version' => '10.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => '2385a89ad1dcc371a70bd7108b73525599c8662d',
    ),
    'typo3/cms-func-wizards' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'typo3/cms-impexp' => 
    array (
      'pretty_version' => 'v10.4.21',
      'version' => '10.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => 'df2e6807964ef00b783477caab1c38571b4605f8',
    ),
    'typo3/cms-info' => 
    array (
      'pretty_version' => 'v10.4.21',
      'version' => '10.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => '81bc7ef7811db87c6dbb45c19ec468310d9817b1',
    ),
    'typo3/cms-info-pagetsconfig' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'typo3/cms-install' => 
    array (
      'pretty_version' => 'v10.4.21',
      'version' => '10.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => '3fecd35d307529ab6fb85d31f9c7781e7046f681',
    ),
    'typo3/cms-lang' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'typo3/cms-recordlist' => 
    array (
      'pretty_version' => 'v10.4.21',
      'version' => '10.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cedbcaae14c8b45e038b32ac3a1faec96f4e4a92',
    ),
    'typo3/cms-rte-ckeditor' => 
    array (
      'pretty_version' => 'v10.4.21',
      'version' => '10.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ce823f42e2c3ee1951fe55b10b5e23db351456d6',
    ),
    'typo3/cms-saltedpasswords' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'typo3/cms-seo' => 
    array (
      'pretty_version' => 'v10.4.21',
      'version' => '10.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => '52fe3aba7960e9965fe62baf5495cf38260719c3',
    ),
    'typo3/cms-setup' => 
    array (
      'pretty_version' => 'v10.4.21',
      'version' => '10.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => '1a848138301343be342c933043f8520ac0a6f359',
    ),
    'typo3/cms-sv' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'typo3/cms-sys-note' => 
    array (
      'pretty_version' => 'v10.4.21',
      'version' => '10.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => '90c1fbfb847c056b96300bf3670d63e78fe78b56',
    ),
    'typo3/cms-t3editor' => 
    array (
      'pretty_version' => 'v10.4.21',
      'version' => '10.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f920222d5a9f177f6b7d11fb1c3ca91be86246db',
    ),
    'typo3/cms-tstemplate' => 
    array (
      'pretty_version' => 'v10.4.21',
      'version' => '10.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => '2455e1e6d67b2518bbc13cab0617e956f4496f01',
    ),
    'typo3/cms-viewpage' => 
    array (
      'pretty_version' => 'v10.4.21',
      'version' => '10.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => '355fbca8ca6d862feb0c93630b1c207c6f98705e',
    ),
    'typo3/cms-wizard-crpages' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'typo3/cms-wizard-sortpages' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'typo3/html-sanitizer' => 
    array (
      'pretty_version' => 'v2.0.11',
      'version' => '2.0.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '2d6f51881a4a2f69541102cb5ff021ad8ea8fdd4',
    ),
    'typo3/phar-stream-wrapper' => 
    array (
      'pretty_version' => 'v3.1.7',
      'version' => '3.1.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '5cc2f04a4e2f5c7e9cc02a3bdf80fae0f3e11a8c',
    ),
    'typo3/symfony-psr-event-dispatcher-adapter' => 
    array (
      'pretty_version' => 'v1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '89bf6696a2b72f7751aee6de05fb34b0938d5922',
    ),
    'typo3fluid/fluid' => 
    array (
      'pretty_version' => '2.7.0',
      'version' => '2.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3420f8cfd6afcfa98e077f40b8d34f9be12f079e',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.10.0',
      'version' => '1.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6964c76c7804814a842473e0c8fd15bab0f18e25',
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
return self::$installed;
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

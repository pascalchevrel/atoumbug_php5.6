<?php
namespace tests\units\Transvision;

use atoum;
use Transvision\Utils as _Utils;

require __DIR__ . '/../../../vendor/autoload.php';

class Utils extends atoum\test
{
    public function uniqueWordsDP()
    {
        return ['Le système le style du couteau du suisse'];
    }

    /**
     * @dataProvider uniqueWordsDP
     */
    public function testUniqueWords($a)
    {
        $obj = new _Utils();
        $this
            ->array($obj->uniqueWords($a))
                ->isEqualTo(
                    [
                        'système',
                        'couteau',
                        'suisse',
                        'style',
                        'le',
                        'Le',
                        'du'
                    ]
                );
    }
}

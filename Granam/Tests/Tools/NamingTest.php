<?php
namespace Granam\Tests\Tools;

use Granam\Tools\Naming;

class NamingTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider provideValueToSnakeCase
     * @param string $toConvert
     * @param string $expectedResult
     */
    public function I_can_turn_to_snake_case_anything($toConvert, $expectedResult)
    {
        $this->assertSame($expectedResult, Naming::camelCaseClassToSnakeCase($toConvert));
    }

    public function provideValueToSnakeCase()
    {
        return array(
            array(__CLASS__, 'naming_test'),
            array(__FUNCTION__, 'provide_value_to_snake_case'),
            array('IHave_CombinationsFOO', 'i_have_combinations_f_o_o'),
            array('.,*#@azAZ  O_K...  &', 'o_k'),
            array('.,*#@ ...  &', '.,*#@ ...  &'),
        );
    }
}

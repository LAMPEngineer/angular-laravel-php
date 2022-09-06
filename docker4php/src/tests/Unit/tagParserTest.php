<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use App\TagParser;

use function PHPUnit\Framework\assertSame;
use function PHPUnit\Framework\assertSameSize;

class TagParserTest extends TestCase
{
    protected TagParser $parser;

    protected function setUp(): void
    {
        $this->parser = new TagParser;
    }

    /** @test */  
    public function it_parses_a_string_tag()
    {
        /* The 3A's => Arrange, Act, Assert */

        // Arrange => Given 
        //$parser = new TagParser; // this now define in setUp() method.

        // Act = > When
        $result = $this->parser->parse('personal');
        $expected = ['personal'];

        // Assert => Then
        $this->assertSame($expected, $result);
    }

    // personal money family
    public function test_it_parses_a_comma_seperated_list_of_tags()
    {
        $result = $this->parser->parse('personal, money, family');

        $expected = ['personal', 'money', 'family'];
  
        $this->assertSame($expected, $result);
    }

    public function test_space_after_commas_are_optional()
    {
        $result = $this->parser->parse('personal,money,family');

        $expected = ['personal', 'money', 'family'];
  
        $this->assertSame($expected, $result);



        $result = $this->parser->parse('personal|money|family');

        $expected = ['personal', 'money', 'family'];
  
        $this->assertSame($expected, $result);
    }

    public function test_it_parses_a_pipe_seperated_list_of_tags()
    {
        $result = $this->parser->parse('personal | money | family');

        $expected = ['personal', 'money', 'family'];
  
        $this->assertSame($expected, $result);
    }
}
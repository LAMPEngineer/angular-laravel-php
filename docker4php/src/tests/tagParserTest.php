<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use App\TagParser;

use function PHPUnit\Framework\assertSame;
use function PHPUnit\Framework\assertSameSize;

class TagParserTest extends TestCase
{
    // person
    public function test_it_parses_a_string_tag()
    {
        $parser = new TagParser;

        $result = $parser->parse('personal');

        $expected = ['personal'];
  
        $this->assertSame($expected, $result);
    }

    // personal money family
    public function test_it_parses_a_comma_seperated_list_of_tags()
    {
        $parser = new TagParser;

        $result = $parser->parse('personal, money, family');

        $expected = ['personal', 'money', 'family'];
  
        $this->assertSame($expected, $result);

    }

    public function test_space_after_commas_are_optional()
    {
        $parser = new TagParser;

        $result = $parser->parse('personal,money,family');

        $expected = ['personal', 'money', 'family'];
  
        $this->assertSame($expected, $result);
    }

    public function test_it_parses_a_pipe_seperated_list_of_tags()
    {
        $parser = new TagParser;

        $result = $parser->parse('personal | money | family');

        $expected = ['personal', 'money', 'family'];
  
        $this->assertSame($expected, $result);

    }
}
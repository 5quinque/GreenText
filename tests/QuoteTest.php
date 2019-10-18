<?php

namespace Linnit\Tests;

use PHPUnit\Framework\TestCase;
use Linnit\Twig\Extension\GreenTextExtension;

class QuoteTest extends TestCase
{
    /** @var GreenTextExtension */
    private $extension;

    protected function setUp(): void
    {
        $this->extension = new GreenTextExtension();
    }

    /**
     * @dataProvider greentextProvider
     */
    public function testStandardGreentextFilter($testStr, $expect)
    {
        $output = $this->extension->formatQuote($testStr);

        $this->assertEquals($output, $expect);
    }

    /**
     * @dataProvider othercolourtextProvider
     */
    public function testColourtextFilter($testStr, $colour, $expect)
    {
        $output = $this->extension->formatQuote($testStr, $colour);

        $this->assertEquals($output, $expect);
    }
    
    public static function greentextProvider()
    {
        return [
            # single line
            ["&gt;2019", "<span style='color: #789922;'>&gt;2019</span>"],
            # multi-line
            ["line1\n&gt;test\nline3", "line1\n<span style='color: #789922;'>&gt;test</span>\nline3"]
        ];
    }

    public static function othercolourtextProvider()
    {
        return [
            # single line
            ["&gt;2019", "#772953", "<span style='color: #772953;'>&gt;2019</span>"],
            # multi-line
            ["line1\n&gt;test\nline3", "#772953", "line1\n<span style='color: #772953;'>&gt;test</span>\nline3"]
        ];
    }
}
<?php
namespace app\twig\TokenParser;

use app\twig\Node\PageBodyNode;
use Twig\Node\Node;
use Twig\Token;
use Twig\TokenParser\AbstractTokenParser;

class PageBodyTokenParser extends AbstractTokenParser
{
    /**
     * Gets the tag name associated with this token parser.
     *
     * @return string The tag name
     */
    public function getTag()
    {
        return 'beginBody';
    }

    /**
     * @param Token $token
     *
     * @return bool
     */
    public function decidePageBodyEnd(Token $token)
    {
        return $token->test('endBody');
    }

    /**
     * Parses a token and returns a node.
     *
     * @return Node A Twig_Node instance
     *
     * @throws \Twig_Error_Syntax
     */
    public function parse(Token $token)
    {
        $lineNumber = $token->getLine();
        $stream = $this->parser->getStream();

        $stream->expect(Token::BLOCK_END_TYPE);
        $body = $this->parser->subparse([$this, 'decidePageBodyEnd'], true);
        $stream->expect(Token::BLOCK_END_TYPE);

        // pass all parsed data to Node class.
        return new PageBodyNode($body, [], $lineNumber, $this->getTag());
    }
}

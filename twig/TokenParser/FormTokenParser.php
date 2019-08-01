<?php
namespace app\twig\TokenParser;

use app\twig\Node\FormNode;
use Twig\Node\Node;
use Twig\Token;
use Twig\TokenParser\AbstractTokenParser;

class FormTokenParser extends AbstractTokenParser
{
    /**
     * Gets the tag name associated with this token parser.
     *
     * @return string The tag name
     */
    public function getTag()
    {
        return 'beginForm';
    }

    /**
     * @param Token $token
     *
     * @return bool
     */
    public function decideFormEnd(Token $token)
    {
        return $token->test('endForm');
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
        $params = [];

        //$params = array_merge([], $this->getInlineParams($token));
        if (!$stream->test(Token::BLOCK_END_TYPE)) {
            $params = $this->parser
                ->getExpressionParser()
                ->parseMultitargetExpression()
            ;
        }

        $stream->expect(Token::BLOCK_END_TYPE);
        $body = $this->parser->subparse([$this, 'decideFormEnd'], true);
        $stream->expect(Token::BLOCK_END_TYPE);



        // pass all parsed data to Node class.
        return new FormNode($body, $params, $lineNumber, $this->getTag());
    }

    protected function getInlineParams(\Twig_Token $token)
    {
        $stream = $this->parser->getStream();
        $params = [];
        while (!$stream->test(\Twig_Token::BLOCK_END_TYPE))
        {
            $params[] = $this->parser->getExpressionParser()->parseExpression();
        }
        $stream->expect(\Twig_Token::BLOCK_END_TYPE);
        return $params;
    }
}

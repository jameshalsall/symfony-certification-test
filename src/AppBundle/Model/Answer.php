<?php

declare(strict_types=1);

namespace SymfonyTest\AppBundle\Model;

/**
 * Answer.
 *
 * @package SymfonyTest\AppBundle\Model
 * @author  James Halsall <james.t.halsall@googlemail.com>
 */
class Answer
{
    private $question;

    private $answer;

    private $isCorrectAnswer;

    /**
     * @param Question $question
     * @param string   $answer
     * @param bool     $isCorrectAnswer
     */
    public function __construct(Question $question, string $answer, bool $isCorrectAnswer)
    {
        $this->question = $question;
        $this->answer = $answer;
        $this->isCorrectAnswer = $isCorrectAnswer;
    }

    public function getQuestion() : Question
    {
        return $this->question;
    }

    public function getAnswer() : string
    {
        return $this->answer;
    }

    public function isCorrectAnswer() : bool
    {
        return $this->isCorrectAnswer;
    }
}

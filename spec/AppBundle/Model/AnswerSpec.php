<?php

namespace spec\SymfonyTest\AppBundle\Model;

use SymfonyTest\AppBundle\Model\Answer;
use PhpSpec\ObjectBehavior;
use SymfonyTest\AppBundle\Model\Question;

class AnswerSpec extends ObjectBehavior
{
    function let($question)
    {
        $question->beADoubleOf(Question::class);

        $this->beConstructedWith($question, '', false);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Answer::class);
    }

    function it_should_known_the_question($question)
    {
        $this->getQuestion()->shouldReturn($question);
    }

    function it_should_know_the_answer_text($question)
    {
        $this->beConstructedWith($question, 'Answer text', true);

        $this->getAnswer()->shouldReturn('Answer text');
    }

    function it_should_know_if_it_is_the_correct_answer($question)
    {
        $this->beConstructedWith($question, '', true);

        $this->shouldBeCorrectAnswer();
    }

    function it_should_know_if_it_is_the_wrong_answer($question)
    {
        $this->beConstructedWith($question, '', false);

        $this->shouldNotBeCorrectAnswer();
    }
}

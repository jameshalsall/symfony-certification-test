<?php

namespace spec\SymfonyTest\AppBundle\Model;

use SymfonyTest\AppBundle\Collection\AnswerCollection;
use SymfonyTest\AppBundle\Model\Answer;
use SymfonyTest\AppBundle\Model\Question;
use PhpSpec\ObjectBehavior;

class QuestionSpec extends ObjectBehavior
{
    function let(AnswerCollection $answers, AnswerCollection $selectedAnswers)
    {
        $this->beConstructedWith('', $answers, $selectedAnswers);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Question::class);
    }

    function it_knows_the_question_title(AnswerCollection $answers, AnswerCollection $selectedAnswers)
    {
        $this->beConstructedWith('The question title', $answers, $selectedAnswers);

        $this->getTitle()->shouldReturn('The question title');
    }

    function it_knows_the_answers(Answer $firstAnswer, Answer $secondAnswer)
    {
        $answers = new AnswerCollection([$firstAnswer, $secondAnswer]);

        $this->beConstructedWith('', $answers);

        $this->getAnswers()->shouldReturn($answers);
    }

    function it_knows_the_correct_answers(AnswerCollection $answers, AnswerCollection $correctAnswers)
    {
        $this->beConstructedWith('', $answers);

        $answers->getCorrectAnswers()->willReturn($correctAnswers);

        $this->getCorrectAnswers()->shouldReturn($correctAnswers);
    }
}

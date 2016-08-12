<?php

namespace spec\SymfonyTest\AppBundle\Collection;

use Doctrine\Common\Collections\Collection;
use SymfonyTest\AppBundle\Collection\AnswerCollection;
use PhpSpec\ObjectBehavior;
use SymfonyTest\AppBundle\Model\Answer;

class AnswerCollectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(AnswerCollection::class);
    }

    function it_should_be_a_collection()
    {
        $this->shouldHaveType(Collection::class);
    }

    function it_should_provide_the_correct_answer(Answer $correctAnswer, Answer $wrongAnswer)
    {
        $correctAnswer->isCorrectAnswer()->willReturn(true);
        $wrongAnswer->isCorrectAnswer()->willReturn(false);

        $this->beConstructedWith([$correctAnswer, $wrongAnswer]);

        $correctAnswers = $this->getCorrectAnswers();

        $correctAnswers->shouldHaveCount(1);
        $correctAnswers[0]->shouldBeCorrectAnswer();
    }

    function it_should_provide_multiple_correct_answers(Answer $correctAnswer, Answer $anotherCorrectAnswer,  Answer $wrongAnswer)
    {
        $correctAnswer->isCorrectAnswer()->willReturn(true);
        $anotherCorrectAnswer->isCorrectAnswer()->willReturn(true);
        $wrongAnswer->isCorrectAnswer()->willReturn(false);

        $this->beConstructedWith([$correctAnswer, $anotherCorrectAnswer, $wrongAnswer]);

        $correctAnswers = $this->getCorrectAnswers();

        $correctAnswers->shouldHaveCount(2);
        $correctAnswers[0]->shouldBeCorrectAnswer();
        $correctAnswers[1]->shouldBeCorrectAnswer();
    }
}

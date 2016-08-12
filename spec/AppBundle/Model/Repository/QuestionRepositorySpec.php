<?php

namespace spec\SymfonyTest\AppBundle\Model\Repository;

use SymfonyTest\AppBundle\Collection\AnswerCollection;
use SymfonyTest\AppBundle\Model\Repository\QuestionRepository;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use SymfonyTest\AppBundle\Model\Repository\Repository;

class QuestionRepositorySpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(__DIR__ . '/../../../fixtures/questions');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(QuestionRepository::class);
    }

    function it_is_a_repository()
    {
        $this->shouldHaveType(Repository::class);
    }

    function it_loads_the_default_amount_of_questions_for_a_topic()
    {
        $questions = $this->findByTopic('http');

        $questions->shouldBeAnInstanceOf(AnswerCollection::class);
        $questions->shouldHaveCount(5);
    }

    function it_loads_specified_amount_of_questions_for_a_topic()
    {
        $questions = $this->findByTopic('http', 2);

        $questions->shouldBeAnInstanceOf(AnswerCollection::class);
        $questions->shouldHaveCount(2);
    }
}

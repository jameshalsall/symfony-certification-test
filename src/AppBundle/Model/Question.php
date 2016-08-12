<?php

declare(strict_types=1);

namespace SymfonyTest\AppBundle\Model;

use Doctrine\Common\Collections\Collection;
use SymfonyTest\AppBundle\Collection\AnswerCollection;

/**
 * Question
 *
 * @package SymfonyTest\AppBundle\Model
 * @author  James Halsall <james.t.halsall@googlemail.com>
 */
class Question
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var Collection
     */
    private $answers;

    /**
     * @var Collection
     */
    private $selectedAnswers;

    /**
     * @param string           $title
     * @param AnswerCollection $answers
     * @param Collection       $selectedAnswers (optional)
     */
    public function __construct(string $title, AnswerCollection $answers, Collection $selectedAnswers = null)
    {
        $this->title = $title;
        $this->answers = $answers;
        $this->selectedAnswers = $selectedAnswers;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function getAnswers() : AnswerCollection
    {
        return $this->answers;
    }

    public function getSelectedAnswers() : Collection
    {
        return $this->selectedAnswers;
    }

    public function getCorrectAnswers() : AnswerCollection
    {
        return $this->answers->getCorrectAnswers();
    }
}

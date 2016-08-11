<?php

declare(strict_types=1);

namespace SymfonyTest\AppBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

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
     * @var ArrayCollection
     */
    private $answers;

    /**
     * @var ArrayCollection
     */
    private $selectedAnswers;

    /**
     * @param string          $title
     * @param ArrayCollection $answers
     * @param ArrayCollection $selectedAnswers (optional)
     */
    public function __construct(string $title, ArrayCollection $answers, ArrayCollection $selectedAnswers = null)
    {
        $this->title = $title;
        $this->answers = $answers;
        $this->selectedAnswers = $selectedAnswers;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function getAnswers() : ArrayCollection
    {
        return $this->answers;
    }

    public function getSelectedAnswers() : ArrayCollection
    {
        return $this->selectedAnswers;
    }
}

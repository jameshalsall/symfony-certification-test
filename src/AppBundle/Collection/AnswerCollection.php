<?php

namespace SymfonyTest\AppBundle\Collection;

use Doctrine\Common\Collections\ArrayCollection;
use SymfonyTest\AppBundle\Model\Answer;

/**
 * Answer collection.
 *
 * @package SymfonyTest\AppBundle\Collection
 * @author  James Halsall <james.t.halsall@googlemail.com>
 */
class AnswerCollection extends ArrayCollection
{
    public function getCorrectAnswers() : AnswerCollection
    {
        return $this->filter(function (Answer $answer) : bool {
            return $answer->isCorrectAnswer();
        });
    }
}

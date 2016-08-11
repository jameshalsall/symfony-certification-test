<?php

declare(strict_types=1);

namespace SymfonyTest\AppBundle\Model\Repository;

use SymfonyTest\AppBundle\Collection\AnswerCollection;

/**
 * Repository.
 *
 * @package SymfonyTest\AppBundle\Model\Repository
 * @author  James Halsall <james.t.halsall@googlemail.com>
 */
interface Repository
{
    const DEFAULT_MAX_QUESTIONS = 5;

    /**
     * Find questions by topic
     *
     * @param string $topic
     * @param int    $maxQuestions
     *
     * @return AnswerCollection
     */
    public function findByTopic(string $topic, int $maxQuestions = self::DEFAULT_MAX_QUESTIONS) : AnswerCollection;
}

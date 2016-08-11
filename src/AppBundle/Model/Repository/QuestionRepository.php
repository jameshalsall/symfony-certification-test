<?php

declare(strict_types=1);

namespace SymfonyTest\AppBundle\Model\Repository;

use Symfony\Component\Yaml\Yaml;
use SymfonyTest\AppBundle\Collection\AnswerCollection;
use SymfonyTest\AppBundle\Model\Question;

/**
 * QuestionRepository
 *
 * @package SymfonyTest\AppBundle\Model\Repository
 * @author  James Halsall <james.t.halsall@googlemail.com>
 */
class QuestionRepository implements Repository
{
    /**
     * @var string
     */
    private $questionsPath;

    /**
     * Constructor.
     *
     * @param string $questionsPath
     */
    public function __construct(string $questionsPath)
    {
        $this->questionsPath = $questionsPath;
    }

    /**
     * Find questions by topic
     *
     * @param string $topic
     * @param int    $maxQuestions
     *
     * @return AnswerCollection
     */
    public function findByTopic(string $topic, int $maxQuestions = self::DEFAULT_MAX_QUESTIONS) : AnswerCollection
    {
        $questions = new AnswerCollection();

        $questionData = Yaml::parse(file_get_contents($this->questionsPath . '/' . $topic . '/oop.yml'));

        foreach ($questionData['questions'] as $questionData) {
            $answers = new AnswerCollection();

            $questions[] = new Question(
                $questionData['title'],
                $answers
            );
        }

        return $questions;
    }
}

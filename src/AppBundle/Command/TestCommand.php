<?php

namespace SymfonyTest\AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use SymfonyTest\AppBundle\Model\Repository\Repository;

/**
 * Starts a test in the console.
 *
 * @package SymfonyTest\Command
 * @author  James Halsall <james.t.halsall@googlemail.com>
 */
class TestCommand extends Command
{
    /**
     * @var Repository
     */
    private $questionRepository;

    /**
     * @param Repository $questionRepository
     */
    public function __construct(Repository $questionRepository)
    {
        parent::__construct();

        $this->questionRepository = $questionRepository;
    }

    /**
     * Configure
     */
    protected function configure()
    {
        $this
            ->setName('test:start')
            ->setDescription('Starts a certification test on the command line')
        ;
    }

    /**
     * @param InputInterface  $input  An input
     * @param OutputInterface $output An output
     *
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $questions = $this->questionRepository->findByTopic('php-and-web-security');

        var_dump($questions); die;
    }
}

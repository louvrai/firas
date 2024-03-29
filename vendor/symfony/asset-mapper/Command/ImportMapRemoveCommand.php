<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\AssetMapper\Command;

use Symfony\Component\AssetMapper\ImportMap\ImportMapManager;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * @experimental
 *
 * @author Kévin Dunglas <kevin@dunglas.dev>
 */
#[AsCommand(name: 'importmap:remove', description: 'Removes JavaScript packages')]
final class ImportMapRemoveCommand extends Command
{
    public function __construct(
        protected readonly ImportMapManager $importMapManager,
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->addArgument('packages', InputArgument::IS_ARRAY | InputArgument::REQUIRED, 'The packages to remove');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $packageList = $input->getArgument('packages');
        $this->importMapManager->remove($packageList);

        if (1 === \count($packageList)) {
            $io->success(sprintf('Removed "%s" from importmap.php.', $packageList[0]));
        } else {
            $io->success(sprintf('Removed %d items from importmap.php.', \count($packageList)));
        }

        return Command::SUCCESS;
    }
}

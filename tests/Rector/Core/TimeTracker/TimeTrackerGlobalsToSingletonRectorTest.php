<?php

declare(strict_types=1);

namespace Ssch\TYPO3Rector\Tests\Rector\Core\TimeTracker;

use Iterator;
use Ssch\TYPO3Rector\Tests\AbstractRectorWithConfigTestCase;
use Symplify\SmartFileSystem\SmartFileInfo;

final class TimeTrackerGlobalsToSingletonRectorTest extends AbstractRectorWithConfigTestCase
{
    /**
     * @dataProvider provideDataForTest()
     */
    public function test(SmartFileInfo $fileInfo): void
    {
        $this->doTestFileInfo($fileInfo);
    }

    public function provideDataForTest(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }
}

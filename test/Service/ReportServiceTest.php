<?php

namespace Shopbase\Test\Service;

use Shopbase\Test\TestCase;
use Shopbase\Object\Report;
use Shopbase\Service\ReportService;

class ReportServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/ReportsList.json');
        $service = new ReportService($api);
        $reports = $service->all();
        $this->assertContainsOnlyInstancesOf(
            Report::class,
            $reports
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/Report.json');
        $service = new ReportService($api);
        $report = $service->get(1234);
        $this->assertInstanceOf(Report::class, $report);
    }
}

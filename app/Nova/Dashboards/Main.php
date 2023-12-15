<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\Reports;
use App\Nova\Metrics\ReportsPerCategory;
use App\Nova\Metrics\ReportsPerStatus;
use App\Nova\Metrics\Users;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            Users::make()
                ->icon('users'), 
            Reports::make(), 
            ReportsPerCategory::make(), 
            ReportsPerStatus::make(), 
        ];
    }
}

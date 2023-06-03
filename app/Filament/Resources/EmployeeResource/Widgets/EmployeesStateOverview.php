<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

use App\Models\Country;
use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class EmployeesStateOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $uk = Country::where('country_code', 'UK')->withCount('employees')->first();
        $us = Country::where('country_code', 'US')->withCount('employees')->first();
        return [
            Card::make('All Employees', Employee::all()->count()),
            // Card::make('Employees ' . $uk->name, Employee::where('country_id', 1)->count()),
            // Card::make('Employees ' . $us->name, Employee::where('country_id', 2)->count()),
            // Card::make($us->name . ' Employees', $us->employees_count),
            Card::make('UK Employee', $uk ? $uk->employees_count : 0),
            Card::make('US Employee', $us ? $us->employees_count : 0)
        ];
    }
}

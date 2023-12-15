<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\BelongsTo;
use App\Models\Report as ModelsReport;
use Laravel\Nova\Http\Requests\NovaRequest;

class Report extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Report>
     */
    public static $model = \App\Models\Report::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'created_at', 
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Report Type', 'type')
                ->rules(['required']), 
            BelongsTo::make('User', 'user', User::class), 
            Select::make('Status')
                ->options([
                    ModelsReport::STATUS_FOR_REVIEW => ModelsReport::STATUS_FOR_REVIEW,
                    ModelsReport::STATUS_DONE =>  ModelsReport::STATUS_DONE,
                    ModelsReport::STATUS_REJECTED =>  ModelsReport::STATUS_REJECTED,
                ]),
            Image::make('Image'), 
            File::make('Video'), 
            Textarea::make('Descriptions')->alwaysShow(), 
            Text::make('Coordinates', function () {
                $link = route('routes', ['lat' => $this->lat, 'lng' => $this->lng]); 
                return "<a href='$link' target='_blank' style='text-decoration:underline;' title='click to view route.' >$this->lat - $this->lng</a>"; 
            })->asHtml(), 
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}

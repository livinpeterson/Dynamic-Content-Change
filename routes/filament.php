<?php

use Filament\Resources\BannerResource;
use Filament\Resources\BlogPostResource;
use Filament\Resources\PortfolioResource;
use Filament\Resources\ServicesResource;
use Filament\Resources\Form;

Route::filament('/admin/banner', BannerResource::class);
Route::filament('/admin/blogpost', BlogPostResource::class);
Route::filament('/admin/portfolio', PortfolioResource::class);
Route::filament('/admin/services', ServicesResource::class);


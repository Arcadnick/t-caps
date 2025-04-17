<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Textarea;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Название')
                    ->disabled()
                    ->required(),

                TextInput::make('slug')
                    ->label('Slug')
                    ->disabled()
                    ->required(),

                TextInput::make('price')
                    ->label('Стоимость капсулы')
                    ->numeric()
                    ->minValue(0)
                    ->step(100)
                    ->required()
                    ->visible(fn ($record) => $record && $record->slug === 'develop-generated-capsule'),

//                RichEditor::make('content')
//                    ->label('Контент')
//                    ->toolbarButtons(['undo', 'redo'])
//                    ->required()
//                    ->visible(fn ($record) => $record && in_array($record->slug, ['privacy-policy', 'terms-and-conditions'])),
                Textarea::make('content')
                    ->label('Контент (HTML)')
                    ->rows(150)
                    ->columnSpanFull()
                    ->required()
                    ->visible(fn ($record) => $record && in_array($record->slug, ['privacy-policy', 'terms-and-conditions'])),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Название'),
                TextColumn::make('slug')->label('Slug'),
            ])
            ->actions([
                EditAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}

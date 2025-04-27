<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CapsuleResource\Pages;
use App\Filament\Resources\CapsuleResource\RelationManagers;
use App\Models\Capsule;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\Fieldset;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Filters\SelectFilter;


class CapsuleResource extends Resource
{
    protected static ?string $model = Capsule::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required()->label('Название'),

                TextInput::make('slug')->required()->label('Slug'),

                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required()
                    ->label('Категория'),

                Select::make('type')
                    ->options([
                        'готовая' => 'Готовая',
                        'в планах' => 'В планах',
                        'сгенерированная' => 'Сгенерированная',
                    ])
                    ->required()
                    ->label('Тип'),

                RichEditor::make('content')
                    ->required()
                    ->label('Описание')
                    ->toolbarButtons(['undo', 'redo']),

                Toggle::make('is_blocked')->label('Запрещена к показу'),

                TextInput::make('image')
                    ->label('Название изображения без расширения')
                    ->helperText('Изображения должны быть загружены с одинаковым названием для landing \'.jpg\', для страницы capsules \'.png\'')
                    ->nullable()
                    ->required(),

                TextInput::make('priority')
                    ->numeric()
                    ->default(0)
                    ->label('Приоритет')
                    ->helperText('Чем больше число тем ниже капсула (если число одинаковое, то капсулы будут показываться друг за другом)')
                    ->required(),

                Fieldset::make('Что автоматизирует')
                    ->schema([
                        TextInput::make('automates.0')->label('Автоматизация #1'),
                        TextInput::make('automates.1')->label('Автоматизация #2'),
                        TextInput::make('automates.2')->label('Автоматизация #3'),
                    ]),

                Fieldset::make('Ожидаемый результат')
                    ->schema([
                        TextInput::make('expected.0')->label('Результат #1'),
                        TextInput::make('expected.1')->label('Результат #2'),
                        TextInput::make('expected.2')->label('Результат #3'),
                    ]),

                Fieldset::make('Настройки страницы и стоимости')
                    ->schema([
                        Toggle::make('use_default_page')
                            ->label('Использовать типовую страницу')
                            ->reactive(),

                        TextInput::make('landing_url')
                            ->label('Ссылка на лендинг капсулы')
                            ->nullable()
                            ->visible(fn (callable $get) => !$get('use_default_page')),

                        TextInput::make('default_price')
                            ->label('Цена по умолчанию (типовая страница)')
                            ->numeric()
                            ->inputMode('decimal')
                            ->suffix('₽')
                            ->nullable()
                            ->visible(fn (callable $get) => $get('use_default_page')),

                        Fieldset::make('Интеграции по умолчанию')
                            ->schema([
                                Textarea::make('default_integrations.0')->label('Интеграция #1'),
                                Textarea::make('default_integrations.1')->label('Интеграция #2'),
                                Textarea::make('default_integrations.2')->label('Интеграция #3'),
                            ])
                            ->visible(fn (callable $get) => $get('use_default_page')),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Название')->sortable(),
                TextColumn::make('category.name')->label('Категория'),
                TextColumn::make('type')->label('Тип'),
                IconColumn::make('is_blocked')->label('Запрещена к показу')->boolean(),
            ])
            ->filters([
                SelectFilter::make('category_id')
                    ->label('Категория')
                    ->relationship('category', 'name'),

                SelectFilter::make('type')
                    ->label('Тип')
                    ->options([
                        'готовая' => 'Готовая',
                        'в планах' => 'В планах',
                    ]),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                //DeleteBulkAction::make(),
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
            'index' => Pages\ListCapsules::route('/'),
            'create' => Pages\CreateCapsule::route('/create'),
            'edit' => Pages\EditCapsule::route('/{record}/edit'),
        ];
    }
}

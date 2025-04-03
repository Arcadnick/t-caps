<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CapsuleResource\Pages;
use App\Filament\Resources\CapsuleResource\RelationManagers;
use App\Models\Capsule;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\BulkAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CapsuleResource extends Resource
{
    protected static ?string $model = Capsule::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

//    public static function form(Form $form): Form
//    {
//        return $form
//            ->schema([
//                Forms\Components\TextInput::make('title')
//                    ->required()
//                    ->maxLength(255),
//                Forms\Components\TextInput::make('slug')
//                    ->required()
//                    ->maxLength(255),
//                Forms\Components\TextInput::make('category_id')
//                    ->required()
//                    ->numeric(),
//                Forms\Components\TextInput::make('type')
//                    ->required()
//                    ->maxLength(255),
//                Forms\Components\Toggle::make('is_blocked')
//                    ->required(),
//                Forms\Components\Textarea::make('content')
//                    ->required()
//                    ->columnSpanFull(),
//            ]);
//    }

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
                        'в плане' => 'В планах',
                        'сгенерированная' => 'Сгенерированная',
                    ])
                    ->required()
                    ->label('Тип'),
                RichEditor::make('content')
                    ->required()
                    ->label('Описание')
                    ->toolbarButtons(['bold', 'italic', 'link', 'undo', 'redo']),
                Toggle::make('is_blocked')->label('Запрещена к показу'),
            ]);
    }

//    public static function table(Table $table): Table
//    {
//        return $table
//            ->columns([
//                Tables\Columns\TextColumn::make('title')
//                    ->searchable(),
//                Tables\Columns\TextColumn::make('slug')
//                    ->searchable(),
//                Tables\Columns\TextColumn::make('category_id')
//                    ->numeric()
//                    ->sortable(),
//                Tables\Columns\TextColumn::make('type')
//                    ->searchable(),
//                Tables\Columns\IconColumn::make('is_blocked')
//                    ->boolean(),
//                Tables\Columns\TextColumn::make('created_at')
//                    ->dateTime()
//                    ->sortable()
//                    ->toggleable(isToggledHiddenByDefault: true),
//                Tables\Columns\TextColumn::make('updated_at')
//                    ->dateTime()
//                    ->sortable()
//                    ->toggleable(isToggledHiddenByDefault: true),
//            ])
//            ->filters([
//                //
//            ])
//            ->actions([
//                Tables\Actions\EditAction::make(),
//            ])
//            ->bulkActions([
//                Tables\Actions\BulkActionGroup::make([
//                    Tables\Actions\DeleteBulkAction::make(),
//                ]),
//            ]);
//    }
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
                // Фильтры добавим позже
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

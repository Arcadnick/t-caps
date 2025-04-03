<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GeneratedCapsuleResource\Pages;
use App\Filament\Resources\GeneratedCapsuleResource\RelationManagers;
use App\Models\GeneratedCapsule;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\BooleanColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GeneratedCapsuleResource extends Resource
{
    protected static ?string $model = GeneratedCapsule::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

//    public static function form(Form $form): Form
//    {
//        return $form
//            ->schema([
//                Forms\Components\TextInput::make('title')
//                    ->required()
//                    ->maxLength(255),
//                Forms\Components\TextInput::make('category_id')
//                    ->required()
//                    ->numeric(),
//                Forms\Components\TextInput::make('user_input')
//                    ->required()
//                    ->maxLength(255),
//                Forms\Components\TextInput::make('gpt_response_json')
//                    ->required(),
//                Forms\Components\Toggle::make('is_blocked')
//                    ->required(),
//                Forms\Components\TextInput::make('used_count')
//                    ->required()
//                    ->numeric()
//                    ->default(0),
//            ]);
//    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label('Название')->required(),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->label('Категория'),
                TextInput::make('user_input')->label('Запрос пользователя'),
                Textarea::make('gpt_response_json')->label('Ответ GPT')->json(),
                Toggle::make('is_blocked')->label('Запрещена к показу'),
                TextInput::make('used_count')->label('Количество повторений')->numeric(),
            ]);
    }

//    public static function table(Table $table): Table
//    {
//        return $table
//            ->columns([
//                Tables\Columns\TextColumn::make('title')
//                    ->searchable(),
//                Tables\Columns\TextColumn::make('category_id')
//                    ->numeric()
//                    ->sortable(),
//                Tables\Columns\TextColumn::make('user_input')
//                    ->searchable(),
//                Tables\Columns\IconColumn::make('is_blocked')
//                    ->boolean(),
//                Tables\Columns\TextColumn::make('used_count')
//                    ->numeric()
//                    ->sortable(),
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
                TextColumn::make('title')->label('Название'),
                TextColumn::make('category.name')->label('Категория'),
                TextColumn::make('user_input')->label('Запрос'),
                TextColumn::make('used_count')->label('Повторения'),
                BooleanColumn::make('is_blocked')->label('Запрещена'),
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
            'index' => Pages\ListGeneratedCapsules::route('/'),
            'create' => Pages\CreateGeneratedCapsule::route('/create'),
            'edit' => Pages\EditGeneratedCapsule::route('/{record}/edit'),
        ];
    }
}

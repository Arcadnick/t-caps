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
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label('Название')->required(),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->label('Категория'),
                TextInput::make('user_input')->label('Запрос пользователя'),
                Textarea::make('gpt_response_json')
                    ->label('Ответ GPT')
                    ->afterStateHydrated(function (Textarea $component, $state) {
                        $decoded = json_decode($state, true);
                        $formatted = json_encode($decoded, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
                        $component->state($formatted);
                    }),
//                    ->json(),
                Toggle::make('is_blocked')->label('Запрещена к показу'),
                TextInput::make('used_count')->label('Количество повторений')->numeric(),
            ]);
    }
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

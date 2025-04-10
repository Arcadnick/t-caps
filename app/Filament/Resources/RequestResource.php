<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RequestResource\Pages;
use App\Filament\Resources\RequestResource\RelationManagers;
use App\Models\Request;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RequestResource extends Resource
{
    protected static ?string $model = Request::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('user_name')->label('Имя')->required(),
                TextInput::make('email')->label('Email')->email()->required(),
                TextInput::make('message')->label('Сообщение'),
                Select::make('capsule_id')
                    ->relationship('capsule', 'title')
                    ->label('Капсула'),
                Select::make('request_type')
                    ->options([
                        'подключение' => 'Подключение',
                        'разработка' => 'Разработка',
                        'консультация' => 'Консультация',
                    ])
                    ->label('Тип запроса'),
                Select::make('status')
                    ->options([
                        'новая' => 'Новая',
                        'в работе' => 'В работе',
                        'закрыта' => 'Закрыта',
                    ])
                    ->label('Статус'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user_name')->label('Имя'),
                TextColumn::make('email')->label('Email'),
                TextColumn::make('capsule.title')->label('Капсула'),
                TextColumn::make('request_type')->label('Тип'),
                TextColumn::make('status')->label('Статус'),
                TextColumn::make('created_at')->label('Дата')->dateTime(),
            ])
            ->filters([
                SelectFilter::make('capsule_id')
                    ->relationship('capsule', 'title')
                    ->label('Капсула')
                    ->preload()
                    ->default(null),
                SelectFilter::make('status')
                    ->options([
                        'новая' => 'Новая',
                        'в работе' => 'В работе',
                        'закрыта' => 'Закрыта',
                    ])
                    ->label('Статус')
                    ->default(null),
                Filter::make('created_at')
                    ->form([
                        DatePicker::make('created_at')->label('Дата')
                    ])
                    ->query(function ($query, array $data) {
                        if (!empty($data['created_at'])) {
                            $query->whereDate('created_at', $data['created_at']);
                        }
                    }),
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
            'index' => Pages\ListRequests::route('/'),
            'create' => Pages\CreateRequest::route('/create'),
            'edit' => Pages\EditRequest::route('/{record}/edit'),
        ];
    }
}

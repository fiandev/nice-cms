<?php

namespace App\Filament\Resources;

use App\Enums\UserRole;
use App\Filament\Resources\AdminResource\Pages;
use App\Filament\Resources\AdminResource\RelationManagers;
use App\Models\User;
use Filament\Actions\Action;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdminResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $label = "Admin";

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function canViewAny(): bool
    {
        return auth()->user()->role === 1;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('email')->email()->required(),
                // Forms\Components\TextInput::make('password')->password()->required(),
                // Forms\Components\TextInput::make('confirm_password')->same("password")->password()->required(),
                Forms\Components\Select::make('role')->options([
                    1 => "super admin",
                    2 => "admin",
                ])->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable(),
                Tables\Columns\TextColumn::make('email')->sortable(),
                Tables\Columns\TextColumn::make('role')->sortable()->formatStateUsing(fn(string $state): string => config("roles")[intval($state)] ?? "-"),
            ])
            ->filters([
                //
            ])
            ->headerActions([
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListAdmins::route('/'),
            'create' => Pages\CreateAdmin::route('/create'),
            'edit' => Pages\EditAdmin::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContributorRequestResource\Pages;
use App\Filament\Resources\ContributorRequestResource\RelationManagers;
use App\Models\ContributorRequest;
use App\Models\Role;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\Actions;
use Filament\Infolists\Components\Actions\Action;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Infolists\Infolist;
use Filament\Tables\Columns\TextColumn;

class ContributorRequestResource extends Resource
{
    protected static ?string $model = ContributorRequest::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('description')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                    TextColumn::make('user.roles.name')
                    ->label('Role'),
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('user.name')->label('name'),
                TextEntry::make('user.email')->label('email'),
                TextEntry::make('user.roles.name')->label('role'),
                TextEntry::make('status'),
                Actions::make([
                    Action::make('approve')->color('success')
                    ->action(function($record){
                        Self::approve($record);
                    }),
                    Action::make('reject')->color('info')
                    ->action(function($record){
                        Self::reject($record);
                    }),
                    Action::make('freeze')->color('danger')
                    ->action(function($record){
                        Self::freeze($record);
                    }),
                ])

            ]);
    }
    public static function approve($record)
    {
        $user = User::find($record->user_id);
        $contributorRole= Role::where('name','contributor')->first();
            $roles= Role::all();
            foreach($roles as $role)
            {
                $user->roles()->detach($role->id);
            }
            $user->roles()->attach($contributorRole->id);
            $record->update(['status'=>'approve']);
        
    }
    public static function reject($record)
    {
        $user = User::find($record->user_id);
        $userRole= Role::where('name','user')->first();
            $roles= Role::all();
            foreach($roles as $role)
            {
                $user->roles()->detach($role->id);
            }
            $user->roles()->attach($userRole->id);

        
    }
    public static function freeze($record)
    {
        $user = User::find($record->user_id);
        $freezeRole= Role::where('name','freeze')->first();
            $roles= Role::all();
            foreach($roles as $role)
            {
                $user->roles()->detach($role->id);
            }
            $user->roles()->attach($freezeRole->id);
            $record->update(['status'=>'freeze']);
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
            'index' => Pages\ListContributorRequests::route('/'),
            'create' => Pages\CreateContributorRequest::route('/create'),
            'view' => Pages\ViewContributorRequest::route('/{record}'),
            'edit' => Pages\EditContributorRequest::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources\DemoRequests\Tables;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;

class DemoRequestsTable
{
    public static function configure(Table $table): Table
    {
        return $table->striped()
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->sortable()->alignCenter()
                    ->searchable()
                    ->toggleable(),

                TextColumn::make('name')
                    ->label('Name')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('email')
                    ->label('Email')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('company')
                    ->label('Company')
                    ->searchable(),

                TextColumn::make('phone')
                    ->label('Phone')
                    ->searchable(),

                TextColumn::make('message')
                    ->label('Message')
                    ->limit(40)
                    ->wrap(),

                TextColumn::make('source_page')
                    ->label('Source Page')
                    ->sortable()
                    ->toggleable(),

                // TextColumn::make('utm_source')
                //     ->label('UTM Source')
                //     ->toggleable(),

                // TextColumn::make('utm_medium')
                //     ->label('UTM Medium')
                //     ->toggleable(),

                // TextColumn::make('utm_campaign')
                //     ->label('UTM Campaign')
                //     ->toggleable(),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('Y-m-d H:i')
                    ->sortable(),

                TextColumn::make('updated_at')
                    ->label('Updated')
                    ->dateTime('Y-m-d H:i')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                // EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    // DeleteBulkAction::make(),
                ]),
            ]);
    }
}

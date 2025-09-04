<?php

namespace App\Filament\Resources\TopSections\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TopSectionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title_desktop')
                    ->searchable(),
                TextColumn::make('title_mobile')
                    ->searchable(),
                TextColumn::make('btn_primary_label')
                    ->searchable(),
                TextColumn::make('btn_primary_link')
                    ->searchable(),
                TextColumn::make('btn_secondary_label')
                    ->searchable(),
                TextColumn::make('btn_secondary_link')
                    ->searchable(),
          ImageColumn::make('image_1')
                    ->label('Image 1')
                    ->disk('public')                 // مهم: نفس الدِسك المستخدم في FileUpload
                    ->visibility('public')           // للتأكد من التوليد على /storage/...
                    ->square()                        // أو ->circular() لو تفضل
                    ->size(56)
                    ->openUrlInNewTab(),

                ImageColumn::make('image_2')
                    ->label('Image 2')
                    ->disk('public')
                    ->visibility('public')
                    ->square()
                    ->size(56)
                    ->openUrlInNewTab(),

                ImageColumn::make('image_3')
                    ->label('Image 3')
                    ->disk('public')
                    ->visibility('public')
                    ->square()
                    ->size(56)
                    ->openUrlInNewTab(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

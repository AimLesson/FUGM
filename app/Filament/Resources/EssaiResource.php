<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EssaiResource\Pages;
use App\Models\Essai;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;

class EssaiResource extends Resource
{
    protected static ?string $model = Essai::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';

    protected static ?string $pluralLabel = 'Essai';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                TextInput::make('author')
                    ->required()
                    ->maxLength(255)->default(auth()->user()->name),

                FileUpload::make('picture')
                    ->image()
                    ->disk('public')
                    ->directory('berita-images')
                    ->columnSpanFull()
                    ->nullable(),

                RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),

                DateTimePicker::make('timestamp')
                    ->default(now())
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('author')
                    ->sortable()
                    ->searchable(),

                ImageColumn::make('picture')
                    ->circular(),

                TextColumn::make('timestamp')
                    ->sortable()
                    ->dateTime('d M Y, H:i'),
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEssais::route('/'),
            'create' => Pages\CreateEssai::route('/create'),
            // 'view' => Pages\ViewEssai::route('/{record}'),
            // 'edit' => Pages\EditEssai::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Berita;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\BeritaResource\Pages;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $pluralLabel = 'Berita';

    public static function canViewAny(): bool
    {
        return Auth::user()->role !== 'user';
    }

    public static function shouldRegisterNavigation(): bool
    {
        return Auth::user()->role !== 'user';
    }

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
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\CreateAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            // 'edit' => Pages\EditBerita::route('/{record}/edit'),
            // 'view' => Pages\View::route('/{record}'),
        ];
    }
}

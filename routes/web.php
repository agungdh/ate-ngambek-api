<?php

Route::get('/', function () {
    $timestamp = now();
    $version = DB::select('select sqlite_version()');
//    $databases = DB::select('PRAGMA database_list');
    $journal = DB::select('PRAGMA journal_mode');
    $synchronous = DB::select('PRAGMA synchronous');

    return compact([
        'timestamp',
        'version',
//        'databases',
        'journal',
        'synchronous',
    ]);
});

<?php

use Illuminate\Support\Facades\Schedule;

// =============================================
// AUTO PIPELINE: Daily 03:30 WIB
// Research + Scrape + Paraphrase + Schedule
// Max 5 articles per day
// Sources: Search Engine Land + SE Journal
// Post langsung aktif (status='active') dengan
// published_at sesuai slot (08:00/13:00/16:00)
// Tidak butuh scheduler publish - queue:work saja
// =============================================
Schedule::command('app:auto-pipeline --max=5')
    ->dailyAt('03:30')
    ->timezone('Asia/Jakarta')
    ->withoutOverlapping()
    ->appendOutputTo(storage_path('logs/auto-pipeline.log'));

Schedule::command('youtube:sync-kang-wendra')
    ->hourly()
    ->withoutOverlapping()
    ->appendOutputTo(storage_path('logs/youtube-sync.log'));

// Process the database queue from the same scheduler. This keeps the AI
// pipeline operational on small Windows deployments without a daemon manager.
Schedule::command('queue:work --stop-when-empty --tries=3 --timeout=900')
    ->everyMinute()
    ->withoutOverlapping(20)
    ->appendOutputTo(storage_path('logs/queue-worker.log'));

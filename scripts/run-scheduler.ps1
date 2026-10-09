$ErrorActionPreference = 'Stop'

$projectPath = Split-Path -Parent $PSScriptRoot
$herdPhp = 'C:\Users\raymaizing\.config\herd\bin\php.bat'
$laragonPhp = 'C:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe'
$php = Get-Command php -ErrorAction SilentlyContinue

if ($php) {
    $phpPath = $php.Source
} elseif (Test-Path -LiteralPath $herdPhp) {
    $phpPath = $herdPhp
} elseif (Test-Path -LiteralPath $laragonPhp) {
    $phpPath = $laragonPhp
} else {
    throw 'PHP tidak ditemukan. Tambahkan PHP ke PATH atau perbarui scripts/run-scheduler.ps1.'
}

Set-Location -LiteralPath $projectPath
& $phpPath artisan schedule:run *>> (Join-Path $projectPath 'storage\logs\windows-scheduler.log')
